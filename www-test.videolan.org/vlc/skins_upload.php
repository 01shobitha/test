<?php

define ('SKIN_UPLOAD_DIR', "../private/uploaded/"); // directory where the skin are uploaded, before validation.

// we generate a 4 character random string + '-'
$char = 'abcdefghijklmnopqrstuvwxyz';
$str_random = $char[rand(0, 25)].$char[rand(0, 25)].$char[rand(0, 25)].$char[rand(0, 25)].'-';

function displayError( $index, $error ) // in the html form (table)
{
  if( isset($error["$index"]) )
  {
    echo "
    <tr>
      <td colspan='2'><font color='red'>Error : ".$error["$index"]."</font></td>
    </tr>
    ";
  }
}

/* In this page, you can submit a form to upload your skin or if a form has already been submitted, you check the informations and save them in the database and in the destination files */

/* Init variables */
$error = array();
$error[0] = true; // if upload and no error occur => set to false

$update = ( isset($_POST['update']) )? 1 : 0 ;
$author = ( isset($_POST['author']) )? trim($_POST["author"]) : '' ;
$name = ( isset($_POST['name']) )? trim($_POST['name']) : '' ;
$version = ( isset($_POST['version']) )? trim($_POST['version']) : '' ;
$email = ( isset($_POST['email']) )? trim($_POST['email']) : '' ;


if( isset($_POST["author"]) ) // if the form has already been submitted
{
  $error[0] = false;
  // Check the fields author, name, version and email
  if ($author=="" or $name=="" or $version=="" or $email=="") 
	{
		$error[0] = true;
		$error[1] = "You have not filled out all the fields";
	}
    
  if (!eregi("^[A-Za-z0-9]+(\.[A-Za-z0-9]+)*@([A-Za-z0-9]+\.)+[a-z]{2,4}$", $email))
  {
    $error[0] = true;
		$error[2] = "Your Email address is not valid";
  }
    
  if (!ereg("^([0-4]{1}.[0-9]{1})", $version) )
  {
    $error[0] = true;
		$error[3] = "VLC version format is not valid. See the example";
  }
    
  //check the submitted skin file 
  if( !is_uploaded_file($_FILES['fichier']['tmp_name']) )
  {
    $error[0] = true;
		$error[4] = "Your skin file has not been uploaded correctly";
  }
  else 
  {
    $tmp_file = $_FILES['fichier']['tmp_name'];
      
    /* We form the skin file name by concatenating a random string and the name the autor has chosen, in order to avoid the deletion of an already existing file because of two similar names */
    $name_file = $str_random.$_FILES['fichier']['name'];

    $size=filesize($_FILES['fichier']['tmp_name']);
  
    // we check the file extension (.vlt)
    if( !eregi("(.vlt)$", $name_file) )
    {
      $error[0] = true;
  		$error[5] = "Your skin file has not a valid format (.vlt)";
    }
    // we copy the skin file in the destination folder
    elseif( !move_uploaded_file($tmp_file, SKIN_UPLOAD_DIR.$name_file ) )
    {
      $error[0] = true;
  		$error[6] = "Your skin file has not been copied in the destination file";
    }
  }

  // Check the image file
  if( !is_uploaded_file($_FILES['image']['tmp_name']) )
  {
      $error[0] = true;
		  $error[7] = "Your image file has not been uploaded correctly";
  }
  elseif( !eregi("(.jpeg|.jpg|.png|.gif)$", $_FILES['image']['name']) )
  {
      $error[0] = true;
  		$error[7] = "Your image file has not a valid format (.jpg / .png / .gif)";
  }
  else
  {
    $tmp_file2 = $_FILES['image']['tmp_name'];
    
    // we check the file type
    list($width_orig, $height_orig, $type_file2) = getimagesize($tmp_file2);
      
    if( !( $type_file2 == 1 || $type_file2 == 2 || $type_file2 == 3 ) )
    {
        $error[0] = true;
  		  $error[8] = "Your image file has not a valid format (.jpg, .gif or .png)";
    }
    else
    {
      $name_file2 = $str_random.$_FILES['image']['name'];
      
      // we create a miniature of the image that we place in the destination folder
      $width = 200; //fixed width of the miniature
      $height = ($width / $width_orig) * $height_orig;
      
      // WARNING : need the GD library
      if( $type_file2 == 2) // JPEG
      {
        $image_p = imagecreatetruecolor($width, $height);
        $image = imagecreatefromjpeg($tmp_file2);
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
        imagejpeg($image_p, SKIN_UPLOAD_DIR."tm_".$name_file2);
        imagedestroy($image_p);
      }
      else if ( $type_file2 == 1 ) // GIF
      {
        $image_p = imagecreate($width, $height);
        $image = imagecreatefromgif($tmp_file2);
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
        imagegif($image_p, SKIN_UPLOAD_DIR."tm_".$name_file2);
        imagedestroy($image_p);
      }
      else if ( $type_file2 == 3 ) // PNG
      { 
        $image_p = imagecreatetruecolor($width, $height);
        $image = imagecreatefrompng($tmp_file2);
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
        imagepng($image_p, SKIN_UPLOAD_DIR."tm_".$name_file2);
        imagedestroy($image_p);
      }
      
      // we copy the original image in the destination folder
      if( !move_uploaded_file($tmp_file2, SKIN_UPLOAD_DIR.$name_file2 ) )
      {
        $error[0] = true;
  		  $error[9] = "Your image has not been copied in the destination file";
      }
    }
  } // fin de else (!is_uploaded_file($tmp_file2))
   
  if ($error[0] == true)
  {
    // try to delete the destination files
    @unlink (SKIN_UPLOAD_DIR.$name_file); 
    @unlink (SKIN_UPLOAD_DIR.$name_file2);
    @unlink (SKIN_UPLOAD_DIR."tm_".$name_file2);
  }
  else // Save the data in the database
  {
    require_once '/home/videolan/etc/db-www.php';
    if( !($connect = pg_connect( $connect_string )) )
      die( "connection to database failed" );

    $aujourdhui = date("Y-m-d");
    $query = "INSERT INTO skins (accepted,name,author,downloads,date_added,date_modified,image,url,min_version,size) VALUES ('false', '$name', '$author', '0', '$aujourdhui', '$aujourdhui', '$name_file2', '$name_file', '$version', '$size')";
  
    $q = pg_query($query);
    pg_close( $connect );
    @mail("admin@videolan.org","Skin validation", "$author has ". ($update ? "updated" : "created") ." the following skin: $name. He thanks you for checking his skin and displaying it on the page : http://www.videolan.org/vlc/skins.php. Click on the following link to check the skin : http://www.videolan.org/private/skins_validation.php. The email address of $author is $email", "Content-Type: text/plain; charset=utf-8\nReply-To: $email");
  } 
} // end of : if(isset($_POST["author"]))


// Begining of the html display
if( $error[0] == false ) // submited and correctly upload
{
  $title = "VLC media player - Skins";
  $lang = "en";
  $menu = array( "vlc", "skins" );
  // require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
  require("../include/header.php");
  ?>
  <div id="left">
    <h2>
      Thank you for your submission.<br />
      Your skin will be displayed as soon as a webmaster has checked it.
    </h2>
  </div>
  <?php 
  footer('$Id$');
}
else
{
  $title = "VLC media player - Skins";
  $lang = "en";
  $menu = array( "vlc", "skins" );
  // require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
  require("../include/header.php");
  ?>
<div id="left">
  <h1>Skin upload form</h1>

  <form enctype="multipart/form-data" method="post" action="skins_upload.php">
    <table>
      <tbody>
        <?php displayError(1, $error); // empty field error ?>
        <tr>
          <td>Author : </td>
          <td><input type="text" name="author" value="<?php echo $author; ?>" /></td>
        </tr>
        <tr>
          <td>Name of your skin : </td>
          <td><input type="text" name="name" value="<?php echo $name; ?>" /></td>
        </tr>
        <tr>
          <td>Update of an already existing skin ?</td>
          <td><input type="checkbox" name="update" <?php if ($update){echo "checked='checked'";} ?> /></td>
        </tr>
        <?php displayError(4, $error); displayError(5, $error); displayError(6, $error); //vlt file errrors ?>
        <tr>
          <td>Skin file : </td>
          <td><input type='file' name="fichier" /></td>
        </tr>
        <?php displayError(7, $error); displayError(8, $error); displayError(9, $error); //image file errrors ?>
        <tr>
          <td>Preview image of your skin : </td>
          <td><input type='file' name="image" /></td>
        </tr>
        <?php displayError(3, $error); // VLC version error ?>
        <tr>
          <td>Required vlc version to use your skin : </td>
          <td>
            <select name='version'>
              <option value='0.9.0'>0.9.0</option>
              <option value='0.8.6'>0.8.6</option>
              <option value='0.8.5'>0.8.5</option>
              <option value='0.8.0'>0.8.0</option>
            </select>
          </td>
        </tr>
        <?php displayError(2, $error); // mail invalid format error ?>
        <tr>
          <td>Your Email address : </td>
          <td><input type="text" name="email" value="<?php echo $email; ?>" /></td>
        </tr>
        <tr>
          <td colspan='2'><input type="submit" value="Submit" /></td>
        </tr>
      </tbody>
    </table>
  </form>
</div>
      
<div id="right">
<?php panel_start( "orange" ); ?>
  <h1>Do you encounter a problem ?</h1>
  <br />
  <p>If you have a problem to upload your files, you can join the developpers on the <a href="http://forum.videolan.org/">Web forum</a> or on the <a href="mailto:videolan@REMOVETHIS@videolan.org">mailling-list</a>.<br /><br />Your request will be taken into account as soon as possible.</p>
<?php panel_end(); ?>
</div>
      
<?php footer('$Id$'); ?>  
 
<?php
}
?>
