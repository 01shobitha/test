<?php

// Function used to generate a 4 character random string 
 function randomString( $length = 4, $char = 'abcdefghijklmnopqrstuvwxyz' ) 
{
  $str = '';
  $max = strlen($char)-1;
  for ($i=1; $i<=$length; $i++)
  {
    $str .= $char[ rand(0, $max) ];
  }
  return $str;
}


/* In this page, you can submit a form to upload your skin or if a form has already been submitted, you check the informations and save them in the database and in the destination files */

if (isset($HTTP_POST_VARS["author"]))  // if the form has already been submitted
{
  #Check all the submitted data

  $nb_erreur=0; /*during the verification of the data, if more than one error occur, all the submitted files will be deleted from the destination and the temporary folders */
  $erreur="";  /* All the errors will be written in this string */
  $update=(isset($HTTP_POST_VARS['update']))?1:0;
  $author=$HTTP_POST_VARS["author"];$author=trim($author);
  $name=$HTTP_POST_VARS["name"];$name=trim($name);
  $version=$HTTP_POST_VARS["version"];$version=trim($version);
  $email=$HTTP_POST_VARS["email"];$email=trim($email);
  
  # Check the fields author, name, version and email
  if ($author=="" or $name=="" or $version=="" or $email=="") 
	{
		$nb_erreur += 1;
		$erreur .= "&erreur1=You have not filled out all the fields";
	}
    
  if (!eregi("^[A-Za-z0-9]+(\.[A-Za-z0-9]+)*@([A-Za-z0-9]+\.)+[a-z]{2,4}$", $email))
  {
    $nb_erreur += 1;
		$erreur .= "&erreur2=Your Email address is not valid";
  }
    
  if (!ereg("^([0-4]{1}.[0-9]{1})", $version) )
  {
    $nb_erreur += 1;
		$erreur .= "&erreur3=Vlc version format is not valid. See the example";
  }
    
  //check the submitted skin file 
  if( !is_uploaded_file($_FILES['fichier']['tmp_name']) )
  {
    $nb_erreur += 1;
		$erreur .= "&erreur4=Your skin file has not been downloaded";
  }
  else 
  {
    $tmp_file = $_FILES['fichier']['tmp_name'];
      
    /* We form the skin file name by concatenating a random string and the name the autor has chosen, in order to avoid the deletion of an already existing file because of two similar names */
    $name_file = randomString();
    $name_file .= $_FILES['fichier']['name'];
      
    $size=filesize($_FILES['fichier']['tmp_name']);
  
    // we check the file extension (.vlt)
    if( !eregi("(.vlt)$", $name_file) )
    {
      $nb_erreur += 1;
  		$erreur .= "&erreur5=Your skin file has not a valid format (.vlt)";
    }
    // we copy the skin file in the destination folder
    elseif( !move_uploaded_file($tmp_file, "./skins2/".$name_file ) )
    {
        $nb_erreur += 1;
  		  $erreur .= "&erreur6=Your skin file has not been copied in the destination file";
    }
  }

  // Check the image file
  if( !is_uploaded_file($_FILES['image']['tmp_name']) )
  {
      $nb_erreur += 1;
		  $erreur .= "&erreur7=Your image file has not been downloaded";
  }
  else
  {
    $tmp_file2 = $_FILES['image']['tmp_name'];
    
    // we check the file type
    list($width_orig, $height_orig, $type_file2) = getimagesize($tmp_file2);
      
    if( !( $type_file2 == 1 || $type_file2 == 2 || $type_file2 == 3 ) )
    {
        $nb_erreur += 1;
  		  $erreur .= "&erreur8=Your image file has not a valid format (.jpg, .gif or .png)";
    }
    else
    {
      $name_file2 = randomString(); //we generate a 4 character random string 
      $name_file2 .= $_FILES['image']['name'];
      
      //we create a miniature of the image that we place in the destination folder
      $width = 200; //fixed width of the miniature
      $height = ($width / $width_orig) * $height_orig;
      
      // WARNING : need the GD library
      if( $type_file2 == 2) // JPEG
      {
        $image_p = imagecreatetruecolor($width, $height);
        $image = imagecreatefromjpeg($tmp_file2);
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
        imagejpeg($image_p, "./skins2/tm_".$name_file2);
        imagedestroy($image_p);
      }
      else if ( $type_file2 == 1 ) // GIF
      { 
        $image_p = imagecreate($width, $height);
        $image = imagecreatefromgif($tmp_file2);
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
        imagegif($image_p, "./skins2/tm_".$name_file2);
        imagedestroy($image_p);
      }
      else if ( $type_file2 == 3 ) // PNG
      { 
        $image_p = imagecreatetruecolor($width, $height);
        $image = imagecreatefrompng($tmp_file2);
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
        imagepng($image_p, "./skins2/tm_".$name_file2);
        imagedestroy($image_p);
      }
      
      // we copy the original image in the destination folder
      if( !move_uploaded_file($tmp_file2, "./skins2/".$name_file2 ) )
      {
        $nb_erreur += 1;
  		  $erreur .= "&erreur9=Your image has not been copied in the destination file";
      }
    }
  } // fin de else (!is_uploaded_file($tmp_file2))
   
  if ($nb_erreur > 0)
  {
    @unlink ("./skins2/".$name_file); //try to delete the destination files
    @unlink ("./skins2/".$name_file2);
    @unlink ("./skins2/tm_".$name_file2);
    
    if( $update == 0 ) { $action="create_skin"; }
    else {$action="update_skin";}
    echo "
        <html>
				<head>
        <META http-EQUIV='Refresh' CONTENT='0; url=skins_upload.php?action=".$action.$erreur."&author=".$author."&name=".$name."&version=".$version."&email=".$email.    "'>
        </head>
				</html>"
        ;
    exit(); // Stop execution
  }
  // Save the data in the database
  elseif ($nb_erreur == 0)
  {
    require_once '/home/videolan/etc/db-www.php';
    if( !($connect = pg_connect( $connect_string )) )
      die( "connection to database failed" );
  
    $aujourdhui = date("Y-m-d");
    $query="INSERT INTO skins (accepted,name,author,downloads,date_added,date_modified,image,url,min_version,size) VALUES ('0', '$name', '$author', '0', '$aujourdhui', '$aujourdhui', '$name_file2', '$name_file', '$version', '$size')";
  
    $q = pg_query($query);
    pg_close( $connect );
    if($update)
    {
      @mail("videolan@videolan.org","Skin validation",$author." has updated the following skin: ".$name.". He thanks you for checking his skin and displaying it on the page : http://www.videolan.org/vlc/skins.php. Click on the following link to check the skin : http://www.videolan.org/vlc/skins_validation.php. The email address of ".$author." is ".$email, 'Content-Type: text/plain; charset=utf-8');
    }
    else
    {
      @mail("videolan@videolan.org","Skin validation",$author." has created a new skin : ".$name.". He thanks you for checking his skin and displaying it on the page : http://www.videolan.org/vlc/skins.php. Click on the following link to check the skin : http://www.videolan.org/vlc/skins_validation.php. The email address of ".$author." is ".$email, 'Content-Type: text/plain; charset=utf-8');
    }
  
    echo "
        <html>
				<head>
        <META http-EQUIV='Refresh' CONTENT='6; url=skins.php'>
        </head>
        <body>
        <h2>Thank you for your submission.
        <br>
        <br> Your skin will be displayed as soon as a webmaster has checked it.
        </h2>
        </body>
				</html>"
        ;
  } 
} // end of : if(isset($HTTP_POST_VARS["author"]))
else
{
  //here is the form to fill out
  $title = "VLC media player - Skins";
  $lang = "en";
  $date = "28 March 2003";
  $menu = array( "vlc", "skins" );
  require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");


  if( isset( $_GET["action"] ))
  {
    $action = $_GET["action"];
  }
  else 
    $action = "create_skin";
  ?>
<div id="left">
  <h1>Thanks to fill out the form...</h1>
      
  <?php 
  if( isset( $_GET["erreur1"] ))
  { echo "<h2><font color='red'>Error : ".$_GET["erreur1"]."</font></h2>"; }
  ?>
  <form enctype="multipart/form-data" method="post" action="skins_upload.php">
    <h2>Author : <input type="texte" name="author" 
      value="<?php if( isset( $_GET["author"] )){echo $_GET["author"];} ?>" /></h2>
      
    <h2>Name of your skin : <input type="texte" name="name" 
      value="<?php if( isset( $_GET["name"] )){echo $_GET["name"];} ?> " /></h2>
    <h2>
      If you want to update an already existing skin, 
      please check the box : <input type="checkbox" name="update"
      <?php if ($action=="update_skin"){echo "checked='checked'";} ?> />
    </h2>
      
      
      <?php
      if( isset( $_GET["erreur4"] ))
      { echo "<h2><font color='red'>Error : ".$_GET["erreur4"]."</font></h2>"; }
      elseif( isset( $_GET["erreur5"] ))
      { echo "<h2><font color='red'>Error : ".$_GET["erreur5"]."</font></h2>"; }
      elseif( isset( $_GET["erreur6"] ))
      { echo "<h2><font color='red'>Error : ".$_GET["erreur6"]."</font></h2>"; }
      ?>
    <h2>Skin file : <input type='file' size='40' name="fichier" /></h2>
      
      <?php
      if( isset( $_GET["erreur7"] ))
      { echo "<h2><font color='red'>Error : ".$_GET["erreur7"]."</font></h2>"; }
      elseif( isset( $_GET["erreur8"] ))
      { echo "<h2><font color='red'>Error : ".$_GET["erreur8"]."</font></h2>"; }
      elseif( isset( $_GET["erreur9"] ))
      { echo "<h2><font color='red'>Error : ".$_GET["erreur9"]."</font></h2>"; }
      
      ?>
    <h2>Image of your skin : <input type='file' size='40' name="image" /></h2>
      
      <?php
      if( isset( $_GET["erreur3"] ))
      { echo "<h2><font color='red'>Error : ".$_GET["erreur3"]."</font></h2>"; }
      ?>
    <h2>Required vlc version to use your skin : <input type="texte" name="version" value="<?php if( isset( $_GET["version"] )){echo $_GET["version"];} ?>" />
    <br><i>(example : 0.8.5)</i></h2>
      
      <?php
      if( isset( $_GET["erreur2"] ))
      { echo "<h2><font color='red'>Error : ".$_GET["erreur2"]."</font></h2>"; }
      ?>
    <h2>Your Email address : <input type="texte" name="email"
      value="<?php if( isset( $_GET["email"] )){echo $_GET["email"];} ?>" /></h2>
    <br>
    <input TYPE="submit" VALUE="Submit" />
  </form>
</div>
      
<div id="right">
<?php panel_start( "orange" ); ?>
  <h1>Do you encounter a problem ?</h1>
  <br>
  <p>If you have a problem to upload your files, you can directly join the developpers on the forum videolan@videolan.org. Click
  <a href="mailto:videolan@videolan.org">here</a> to send a message.<br> <br>Your request will be taken into account as soon as possible.</p>
<?php panel_end(); ?>
</div>
      
<?php footer('$Id$'); ?>  
 
<?php 
}
?>
