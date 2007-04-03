<?php

define ('SKIN2_PATH', "./skin2/"); // Need to be fixed

/* in this page, you will see all the skins that have not been accepeted yet. Below each skin you have a form asking if you want to create the skin, update the skin from an already existing skin or delete the skin. Of course, the access to this page must be reserved for the webmasters. (There is for the moment no security system because you may have your own and I did not want to interfere with it). When the form is submitted, the database and the destination files ha ve to be modified... */

if (isset($HTTP_POST_VARS["action"]))  // if the form has been submitted
{
  require_once '/home/videolan/etc/db-www.php';
  if( !($connect = pg_connect( $connect_string )) )
    die( "connection to database failed" );
    
  $id = (int) $HTTP_POST_VARS["id"];
  $action = (int) $HTTP_POST_VARS["action"];
   
    
  if ($action=="1") // action = create the skin as a new skin
  {  
    $q=pg_query("SELECT image, url FROM skins WHERE id='$id'");
    $r=pg_fetch_array($q);
    
    $url = $r['url'];
    $new_url = substr($url, 4); 
    /* 4 random characters had been added to the skin name in order to avoid name conflict. But now we rename the file and it is the role of the webmaster to check that there is not already a file with the same name in the folder */
    $image = $r['image'];
    $new_image = substr($image, 4);
    @rename(SKIN2_PATH.$url, SKIN2_PATH.$new_url);
    @rename(SKIN2_PATH.$image, SKIN2_PATH.$new_image);
    @rename(SKIN2_PATH."tm_".$image, SKIN2_PATH."tm_".$new_image);
    $q="UPDATE skins SET accepted='1', image='$new_image', url='$new_url' WHERE id='$id'";
    pg_query($q);
    
    $q="INSERT INTO skins-rating (skin_id,rating) VALUES ('$id', '3')"; 
    /* it may be not be necessary to add a vote, but when I tested without doing it, an error occured in skins.php because of the query : SELECT AVG(rating)...*/
    pg_query($q);
    
    echo "
        <html>
				<head>
        <META http-EQUIV='Refresh' CONTENT='3; url=skins.php'>
        </head>
        <body>
        <h1>Your request is pending...</h1>
        </body>
				</html>";
		exit();
  }
  elseif ($action=="3") // action = delete the skin
  {
    $q=pg_query("SELECT image, url FROM skins WHERE id='$id'");
    $r=pg_fetch_array($q);
    $url = $r['url'];
    $image = $r['image'];
    $q="DELETE FROM skins WHERE id='$id'";
    pg_query($q);
    @unlink (SKIN2_PATH.$url);
    @unlink (SKIN2_PATH.$image);
    @unlink (SKIN2_PATH."tm_".$image);
    
    echo "
        <html>
				<head>
        <META http-EQUIV='Refresh' CONTENT='3; url=skins_validation.php'>
        </head>
        <body>
        <h1>Your request is pending...</h1>
        </body>
				</html>";
		exit();
  }
  elseif ($action=="2") // action = update an already existing skin
  {
    if (isset($HTTP_POST_VARS["skin_to_update"]))
    {
      $skin_to_update = (int) $HTTP_POST_VARS["skin_to_update"];
      
      $q=pg_query("SELECT author, image, url FROM skins WHERE id='$skin_to_update'");
      $r=pg_fetch_array($q);
      $old_author = $r['author'];
      $image = $r['image'];
      $url = $r['url'];
      /* Be careful before updating a skin : we delete the old files*/
      @unlink (SKIN2_PATH.$url);
      @unlink (SKIN2_PATH.$image);
      @unlink (SKIN2_PATH."tm_".$image);
              
      $q=pg_query("SELECT author, date_modified, image, url, min_version, size FROM skins WHERE id='$id'");
      $r=pg_fetch_array($q);
      
      if( $r['author'] != $old_author )
      { $author = $old_author.". Updated by ".$r['author']; }
      else
      { $author = $old_author; }
      
      $date_modified = $r['date_modified'];
      $version= $r['min_version'];
      $size= $r['size'];
      $url = $r['url'];
      
      $new_url = substr($url, 4);
      /* 4 random characters had been added to the skin name in order to avoid name conflict. But now we rename the file and it is the role of the webmaster to check that there is not already a file with the same name in the folder */
      $image = $r['image'];
      $new_image = substr($image, 4); //same explanation
      @rename(SKIN2_PATH.$url, SKIN2_PATH.$new_url);
      @rename(SKIN2_PATH.$image, SKIN2_PATH.$new_image);
      @rename(SKIN2_PATH."tm_".$image, SKIN2_PATH."tm_".$new_image);
      
      $q="UPDATE skins SET author='$author', date_modified='$date_modified', image='$new_image', url='$new_url', min_version='$version', size='$size' WHERE id='$skin_to_update'";
      pg_query($q);
      $q="DELETE FROM skins WHERE id='$id'";
      pg_query($q);
      
      /* Just a comment : you may think that it would have been easier to update the skin $id instead of $skin_to_update, i.e. to update the new skin with the informations of the old one. But I remind you that there is also the table skins-rating in the database, and you would have had to change all the votes in that table, which would have been very long */
      
      echo "
      <html>
			<head>
      <META http-EQUIV='Refresh' CONTENT='3; url=skins.php'>
      </head>
      <body>
      <h1>Your request is pending...</h1>
      </body>
			</html>";
			exit();
    }
    else
    {
      echo "
      <html>
			<head>
      <META http-EQUIV='Refresh' CONTENT='3; url=skins_validation.php'>
      </head>
      <body>
      <h1>If you want to update a skin, you have to select that skin in the scroll menu</h1>
      </body>
			</html>";
			exit();
    }
  }
  pg_close( $connect );
} 
else // if (isset($HTTP_POST_VARS["action"]))
{
  require_once '/home/videolan/etc/db-www.php';
  if( !($connect = pg_connect( $connect_string )) )
    die( "connection to database failed" );

  $title = "VLC media player - Skins";
  $lang = "en";
  $date = "28 March 2003";
  $menu = array( "vlc", "skins" );
  require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
      
  function AddSkin( $id, $name, $author, $img, $url, $date, $date_mod, $min_version, $size ,$selection)
  {
?>
<h3><?php echo $name; ?></h3>
<table class="skins-download">
 <tr>
  <td>
   <a href="http://www.videolan.org/vlc/skins2/<?php echo $img; ?>">
   <img width="200" src="http://www.videolan.org/vlc/skins2/tm_<?php echo $img; ?>"
     class="skins-screenshot" alt="screenshot"/>
   </a>
  </td>
  <td>
   <table>
    <tr>
      <td class="skins-comment">
      Made by <?php echo $author; ?>
      </td>
    </tr>
    <tr>
      <td class="skins-comment">
	Last update on <?php echo $date_mod; ?>
      </td>
    </tr>
    <tr>
      <td>
        <a class="skins-download" href="http://www.videolan.org/vlc/download-skins2-go.php?url=<?php echo "$url"; ?>">Download skin</a>
        <br /> 
        (<?php echo FormatSize( $size ); ?>. Requires VLC <?php echo $min_version; ?> or newer)
      </td>
    </tr>
   </table>
  </td>
 </tr>
 <tr>
 <td colspan="2">
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
</table>

<?php
  }
?>

<div id="left">
<h1>Validate skins</h1>

<h2>Validations...</h2>
<?php
  $query='SELECT skins.id as id, skins.name, skins.author, skins.date_added, skins.date_modified, skins.image, skins.url, skins.min_version, skins.size FROM skins WHERE skins.accepted="0" GROUP BY skins.id, skins.name, skins.author, skins.date_added, skins.date_modified, skins.image, skins.url, skins.min_version, skins.size';
  $query .= " ORDER BY skins.date_modified DESC, skins.date_added DESC";

  $q = pg_query($query);
  $q2 = pg_query("SELECT id, name FROM skins WHERE accepted='1' ORDER BY id");
  $selection = "";
  while ($skin = pg_fetch_array($q2))
  {   
    $selection .= "<option value='".$skin['id']."'>".$skin['name']."</option>\n";
  }
  while( $r = pg_fetch_array($q) )
  {
    AddSkin( $r['id'], $r['name'], $r['author'], $r['image'],
             $r['url'], $r['date_added'], $r['date_modified'],
             $r['min_version'], $r['size'], $selection);
  }
  pg_close( $connect );
?>

</div>

<div id="right">
<?php panel_start( "orange" ); ?>
<h1>Explanations for the commands :</h1>

<h2>Be careful when you create or update a skin : the first four characters of both skin name and image name will be deleted. So check that there are not other files with the same names.</h2>
<ul class="panel-orange-bullet">
  <li><u>CREATE THE SKIN</u> will add the skin to the list of the already displayed skins on the page http://www.videolan.org/vlc/skins.php.</li>

  <li><u>UPDATE THE SKIN</u> will update an already displayed skin on the page http://www.videolan.org/vlc/skins.php. You have to choose which one has to be updated (the author of the new skin should have precised this point).<br><br>In concrete terms, the database informations of the old skin will be updated with those of the new one (the author name will be completed with 'Updated by' and the name of the developper), and the new skin informations will be deleted from the database. The .vlt and image files corresponding to the old skin will be deleted as well.
   
   <li><u>DELETE THE SKIN</u> will delete the skin from the database. The .vlt and image files corresponding to the skin will be deleted as well.</li>
</ul>

<?php panel_end(); ?>

</div>

<?php footer('$Id$'); 

}
?>
