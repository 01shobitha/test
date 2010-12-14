<?php

define ('SKIN_UPLOAD_DIR',"./uploaded/"); // skin tmp directory
define ('SKIN2_DIR', "../vlc/skins2/"); // skin final directory

/* in this page, you will see all the skins that have not been accepeted yet. Below each skin you have a form asking if you want to create the skin, update an already existing skin or delete the skin. Of course, the access to this page must be reserved for the webmasters. */

require_once '/home/videolan/etc/db-www.php';
if( !($connect = pg_connect( $connect_string )) )
  die( "connection to database failed" );

/* Init variables */
$id = ( isset($_POST["id"]) )? (int) $_POST["id"] : 0 ;
$action = ( isset($_POST["action"]) )? (int) $_POST["action"] : 0 ;
$skin_to_update = ( isset($_POST["skin_to_update"]) )? (int) $_POST["skin_to_update"] : 0 ;
$message = "";
$confirm = ( isset($_POST["confirm"]) )? true : false ;
// If a file will be deleted, status => true
$overwrite = array( 'status' => false, 'expected' => '', 'unexpected' => '');


if ($action != 0 && $id != 0) // if the form has been submitted
{
  if ($action == 1) // action = create the skin as a new skin
  {
    $q = pg_query("SELECT image, url, name FROM skins WHERE id='$id'");
    $r = pg_fetch_array($q);
    
    $name = $r['name'];
    /* 4 random characters (+ '-') had been added to the skin name in order to avoid name conflict. */
    $url = $r['url'];
    $new_url = substr($url, 5); 
    $image = $r['image'];
    $new_image = substr($image, 5);
  
    if( is_file(SKIN2_DIR.$new_url) )
    { $overwrite['status'] = true; $overwrite['unexpected'] .= $new_url.'<br />'; }
    if( is_file(SKIN2_DIR.$new_image) )
    { $overwrite['status'] = true; $overwrite['unexpected'] .= $new_image.'<br />'; }
    if( is_file(SKIN2_DIR.'tm_'.$new_image) )
    { $overwrite['status'] = true; $overwrite['unexpected'] .= 'tm_'.$new_image; }

    if( $overwrite['status'] == false || $confirm == true )
    {
      rename(SKIN_UPLOAD_DIR.$url, SKIN2_DIR.$new_url);
      rename(SKIN_UPLOAD_DIR.$image, SKIN2_DIR.$new_image);
      rename(SKIN_UPLOAD_DIR."tm_".$image, SKIN2_DIR."tm_".$new_image);
    
      $q = "UPDATE skins SET accepted=true, image='$new_image', url='$new_url' WHERE id='$id'";
      pg_query($q);

      $q = "INSERT INTO \"skins-rating\" (skin_id,rating) VALUES ('$id', '5')"; 
      /* Due to the crappy SQL request in vlc/skins.php we have to vote at least once for the skin ... and since we're optimistic, we vote 5 :) */
      pg_query($q);
    
      $message = "The skin \"$name\" has been validated";
      $overwrite['status'] = false;
    }
  }
  elseif ($action == 3 || $action == 4) // action = delete a skin
  {
    $q=pg_query("SELECT image, url, name FROM skins WHERE id='$id'");
    $r=pg_fetch_array($q);
    $url = $r['url'];
    $image = $r['image'];
    
    $overwrite['status'] = true;
    $overwrite['expected'] .= $url.'<br />';
    $overwrite['expected'] .= $image.'<br />';
    $overwrite['expected'] .= 'tm_'.$image;

    if( $confirm == true )
    {
      $directory = ($action == 3)? SKIN_UPLOAD_DIR : SKIN2_DIR ;
      unlink( $directory.$url );
      unlink( $directory.$image );
      unlink( $directory."tm_".$image );
      
      $q="DELETE FROM skins WHERE id='$id'";
      pg_query($q);
      $q = "DELETE FROM \"skins-rating\" WHERE id='$id'";
      pg_query($q);
    
      $message = 'The skin "'.$r['name'].'" has been deleted.';
      $overwrite['status'] = false;
    }
  }
  elseif ($action == 2) // action = update an already existing skin
  {
    if (isset($_POST["skin_to_update"]))
    {
      $q=pg_query("SELECT author, image, url, name FROM skins WHERE id='$skin_to_update'");
      $r=pg_fetch_array($q);
      $author = $r['author'];
      $image = $r['image'];
      $url = $r['url'];
      $name = $r['name'];
      
      /* Be careful before updating a skin : we delete the old files */
      $overwrite['status'] = true;
      $overwrite['expected'] .= $url.'<br />';
      $overwrite['expected'] .= $image.'<br />';
      $overwrite['expected'] .= 'tm_'.$image.'<br />';
              
      $q = pg_query("SELECT author, date_modified, image, url, min_version, size FROM skins WHERE id='$id'");
      $r = pg_fetch_array($q);
      
      $new_author = ( $r['author'] != $author )? $author.'. Updated by '.$r['author'] : $author;
      $date_modified = $r['date_modified'];
      $version= $r['min_version'];
      $size= $r['size'];
      
      /* 4 random characters had been added to the skin name in order to avoid name conflict. */
      $protected_url = $r['url'];
      $new_url = substr( $protected_url, 5 );
      $protected_image = $r['image'];
      $new_image = substr( $protected_image, 5 );
        
      if( $url != $new_url && is_file(SKIN2_DIR.$new_url) )
        $overwrite['unexpected'] .= $new_url.'<br />';
      if( $image != $new_image && is_file(SKIN2_DIR.$new_image) )
        $overwrite['unexpected'] .= $new_image.'<br />';
      if( $image != $new_image && is_file(SKIN2_DIR.'tm_'.$new_image) )
        $overwrite['unexpected'] .= 'tm_'.$new_image;

      if( $confirm == true )
      { 
        unlink(SKIN2_DIR.$url);
        unlink(SKIN2_DIR.$image);
        unlink(SKIN2_DIR."tm_".$image);

        rename(SKIN_UPLOAD_DIR.$protected_url, SKIN2_DIR.$new_url);
        rename(SKIN_UPLOAD_DIR.$protected_image, SKIN2_DIR.$new_image);
        rename(SKIN_UPLOAD_DIR."tm_".$protected_image, SKIN2_DIR."tm_".$new_image);
        
        $q="UPDATE skins SET author='$author', date_modified='$date_modified', image='$new_image', url='$new_url', min_version='$version', size='$size' WHERE id='$skin_to_update'";
        pg_query($q);
        $q="DELETE FROM skins WHERE id='$id'";
        pg_query($q);
      
      /* Just a comment : you may think that it would have been easier to update the skin $id instead of $skin_to_update, i.e. to update the new skin with the informations of the old one. But I remind you that there is also the table skins-rating in the database, and you would have had to change all the votes in that table, which would have been very long */
      
        $message = "The skin \"$name\" have been updated.";
        $overwrite['status'] = false;
      }
    }
    else // if(isset($_POST["skin_to_update"]))
    {
      $message = "If you want to update a skin, you have to select that skin in the scroll menu.";
    }
  }
  elseif ($action == 5) // action = modify a skin's informations
  {
    if( isset($_POST['name']) && isset($_POST['author']) 
        && isset($_POST['date_mod']) && isset($_POST['min_version']) )
    {
      $q = "UPDATE skins SET name='{$_POST['name']}', author='{$_POST['author']}', date_modified='{$_POST['date_mod']}', min_version='{$_POST['min_version']}' WHERE id='$id'";
      pg_query($q);
      $message = "Information updated";
    }
    else
    {
      $message = "Somme informations haven't been transmitted correctly. ";
    }
  }
}


// begining of the HTML content (form, skin's list, ...)
$title = "VLC media player - Skins";
$lang = "en";
$menu = array( "vlc", "skins" );
// require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
require("../include/header.php");
  
function AddSkinUploaded( $id, $name, $author, $img, $url, $date, $date_mod, $min_version, $size ,$selection)
{
?>
<h3><?php echo $name; ?></h3>
<table class="skins-download">
  <tbody>
    <tr>
      <td rowspan='3'>
        <a href="<?php echo SKIN_UPLOAD_DIR.$img; ?>">
          <img width="200" src="<?php echo SKIN_UPLOAD_DIR."tm_".$img; ?>"
          class="skins-screenshot" alt="screenshot"/>
        </a>
      </td>
      <td class="skins-comment">Made by <?php echo $author; ?></td>
    </tr>
    <tr>
      <td class="skins-comment">Uploaded on <?php echo $date_mod; ?></td>
    </tr>
    <tr>
      <td>
        <a class="skins-download" href="<?php echo SKIN_UPLOAD_DIR.$url; ?>">Download skin</a> ( <?php echo $url; ?> )<br /> 
        (<?php echo FormatSize( $size ); ?>. Requires VLC <?php echo $min_version; ?> or newer)
      </td>
    </tr>
    <tr>
      <td colspan='2'>
        <h3>Action :</h3>
        <form action="skins_validation.php" method="post">
          <input type='hidden' name='id' value='<?php echo $id; ?>' />
          <input type='radio' name='action' value="1" /> CREATE THE SKIN <br />
          <input type='radio' name='action' value="2" /> UPDATE THIS SKIN :&nbsp;
          <?php
          echo "<select name='skin_to_update'>".$selection."</select>";
          ?>
          <br />
          <input type='radio' name='action' value="3" /> DELETE THE SKIN <br />
          <br />
          <input type="submit" value="Confirm" />
        </form>
      </td>
    </tr>
  </tbody>
</table>
<?php
}

function AddSkinRegular( $id, $name, $author, $img, $url, $date, $date_mod, $min_version, $size)
{
?>
<form action="skins_validation.php" method="post">
<h3></h3>
<table class="skins-download">
  <tbody>
    <tr>
      <td rowspan='5'>
        <a href="<?php echo SKIN2_DIR.$img; ?>">
          <img width="200" src="<?php echo SKIN2_DIR."tm_".$img; ?>"
          class="skins-screenshot" alt="screenshot"/>
        </a>
      </td>
    </tr>
    <tr>
      <td class="skins-comment">
        Name : <input type='text' name='name' value='<?php echo $name; ?>' />
        <br />
        Made by <input type='texte' name='author' value='<?php echo $author; ?>' />
      </td>
    </tr>
    <tr>
      <td class="skins-comment">Last update on <input type='text' name='date_mod' value='<?php echo $date_mod; ?>' /></td>
    </tr>
    <tr>
      <td>
        Version required : <input type='text' name='min_version' value='<?php echo $min_version; ?>' />
      </td>
    </tr>
    <tr>
      <td>
        For information :<br /><br />
        Skin filename : <?php echo $url; ?><br />
        Size : <?php echo FormatSize( $size ); ?><br /><br />
        Screenshot filename : <?php echo $img; ?><br />
      </td>
    </tr>
    <tr>
      <td colspan='2'>
        <h3>Action :</h3>
        <input type='hidden' name='id' value='<?php echo $id; ?>' />
        <input type='radio' name='action' value="5" /> UPDATE SKIN'S INFORMATIONS <br />
        <input type='radio' name='action' value="4" /> DELETE THE SKIN <br />
        <br />
        <input type="submit" value="Confirm" />
      </td>
    </tr>
  </tbody>
</table>
</form>
<?php
}
?>

<div id="left">
<h1>Manage the uploaded skins</h1>
<?php 
if( $overwrite['status'] == true )
{
  echo "<h2>WARNING : the action you are going to perform will delete files.</h2>";
  if( $overwrite['expected'] != "" )
  {
    echo "
    <p style='font-size:larger'>
      There files will be deleted (normal behavior for this action) : 
      <br />
      <strong>{$overwrite['expected']}</strong>
    </p>";
  }
  if ($overwrite['unexpected'] != "" )
  {
    echo "
    <p style='font-size:larger; color:red'>
      BIG FAT WARNING : There files  will be deleted if you continue, and it is NOT the normal behavior for this action  :
      <br />
      <strong>{$overwrite['unexpected']}</strong>
    </p>";
  } ?>
<form action="skins_validation.php" method="post">
  <p>
    <input type='hidden' name='id' value='<?php echo $id; ?>' />
    <input type='hidden' name='action' value='<?php echo $action; ?>' />
    <input type='hidden' name='skin_to_update' value='<?php echo $skin_to_update;?>' />
    <input type='hidden' name='confirm' value='true' />
    Do you want to continue ? <input type='submit' value='Continue' />
  </p>
</form>

<?php
}
else
{
  if ( $message != "" ) { echo "<p style='color:red'>$message</p>"; }
  ?>
  <h2>List of incoming skins...</h2>
  <?php
  $query='SELECT skins.id as id, skins.name, skins.author, skins.date_added, skins.date_modified, skins.image, skins.url, skins.min_version, skins.size FROM skins WHERE skins.accepted=false GROUP BY skins.id, skins.name, skins.author, skins.date_added, skins.date_modified, skins.image, skins.url, skins.min_version, skins.size';
  $query .= " ORDER BY skins.date_modified DESC, skins.date_added DESC";

  $q = pg_query($query);
  $q2 = pg_query("SELECT id, name FROM skins WHERE accepted=true ORDER BY name");
  $selection = "";
  while ($skin = pg_fetch_array($q2))
  {   
    $selection .= "<option value='".$skin['id']."'>".$skin['name']."</option>\n";
  }
  while( $r = pg_fetch_array($q) )
  {
    AddSkinUploaded( $r['id'], $r['name'], $r['author'], $r['image'],
                     $r['url'], $r['date_added'], $r['date_modified'],
                     $r['min_version'], $r['size'], $selection);
  }
  ?>
  <h2>List of validated skins...</h2>
  <?php
  $query='SELECT skins.id as id, skins.name, skins.author, skins.date_added, skins.date_modified, skins.image, skins.url, skins.min_version, skins.size FROM skins WHERE skins.accepted=true GROUP BY skins.id, skins.name, skins.author, skins.date_added, skins.date_modified, skins.image, skins.url, skins.min_version, skins.size';
  $query .= " ORDER BY skins.date_modified DESC, skins.date_added DESC";
  $q = pg_query($query);
  while( $r = pg_fetch_array($q) )
  {
    AddSkinRegular( $r['id'], $r['name'], $r['author'], $r['image'],
                    $r['url'], $r['date_added'], $r['date_modified'],
                    $r['min_version'], $r['size']);
  }
}
pg_close( $connect );
?>

</div>

<div id="right">
<?php panel_start( "orange" ); ?>
<h1>Explanations for the commands :</h1>

<h2>Be careful when you create or update a skin : the first four characters of both skin name and image name will be deleted. So check that there are not other files with the same names in vlc/skin2/ directory.</h2>
<ul class="panel-orange-bullet">
  <li><u>CREATE THE SKIN</u> will add the skin to the list of the already displayed skins on http://www.videolan.org/vlc/skins.php.</li>
  
  <li><u>UPDATE THE SKIN</u> will update an already displayed skin on the page http://www.videolan.org/vlc/skins.php. You have to choose which one has to be updated (the author of the new skin should have precised this point).<br /><br />The .vlt and image files corresponding to the old skin will be deleted.</li>
  
   <li><u>DELETE THE SKIN</u> will delete the skin from the database. The .vlt and image files corresponding to the skin will be deleted as well.</li>
</ul>

<?php panel_end(); ?>

</div>

<?php footer('$Id$'); ?>
