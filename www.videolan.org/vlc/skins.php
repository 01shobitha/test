<?php
  
  require_once '/home/videolan/etc/db-www.php';
  if( !($connect = pg_connect( $connect_string )) )
    die( "connection to database failed" );

  if( isset( $_POST["skin_id"] ) && isset( $_POST["rating"] ) )
  {
    if( $_COOKIE["skinrated_{$_POST["skin_id"]}"] != $_POST["skin_id"] )
    {
      pg_query( "INSERT INTO \"skins-rating\" (\"skin_id\", \"rating\") VALUES ('{$_POST["skin_id"]}','{$_POST["rating"]}')" );
      setcookie( "skinrated_{$_POST["skin_id"]}", $_POST["skin_id"], time()+24*60*60, "/", ".videolan.org" );
      $_COOKIE["skinrated_{$_POST["skin_id"]}"] = $_POST["skin_id"];
    }
  }

   $title = "VLC media player - Skins";
   $lang = "en";
   $date = "28 March 2003";
   $menu = array( "vlc", "skins" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   
?>
<?php

  function AddSkin( $id, $name, $author, $img, $url, $dl, $date, $date_mod, $rating, $count, /*$old_rating, $old_count,*/ $sign, $min_version, $size )
  {
?>
<h3><?php echo $name; 
if ($date_mod <> $date) echo '&nbsp; <img src="/images/updated.png" />'; ?></h3>
<table class="skins-download">
 <tr>
  <td>
   <a href="/vlc/skins2/<?php echo $img; ?>">
   <img width="200" src="/vlc/skins2/tm_<?php echo $img; ?>"
     class="skins-screenshot" alt="screenshot"/>
   </a>
  </td>
  <td>
   <table>
    <tr><td class="skins-comment">
      Made by <?php echo $author; ?>
    </td></tr>
    <tr><td class="skins-comment">
	Last update on <?php echo $date_mod; ?>
    </td></tr>
    <tr><td class="skins-comment">
      <?php echo "$dl downloads since $date"; ?>
    </td></tr>
    <tr>
<td><a class="skins-download" href="download-skins2-go.php?url=<?php echo "$url"; ?>">Download skin</a><br /> (<?php echo FormatSize( $size ); ?>. Requires VLC <?php echo $min_version; ?> or newer)
    </td></tr>
    <tr><td class="skins-comment">
      Rating:
      <?php
        if( $rating == -1 )
        {
          echo "Not rated";
        }
        else
        {
          echo round($rating,1)."/5 "; 
          /*if( $sign > 0 )
            echo "<img alt='Up' src='/vlc/skins2/cone-u.png' title=\"last week's rating: ".round($old_rating,1)."\"/>";
          else if( $sign == 0 )
            echo "<img alt='Equal' src='/vlc/skins2/cone-e.png' title=\"last week's rating: ".round($old_rating,1)."\"/>";
          else
            echo "<img alt='Down' src='/vlc/skins2/cone-d.png' title=\"last week's rating: ".round($old_rating,1)."\"/>";*/
          echo " ($count votes)<br />";
          for( $i=0; $i<5; $i++ )
          {
            $v = round(min(1,max(0,$rating-$i)),1)*10;
            echo "<img alt='".($v>0?'+':'-')."' src='/vlc/skins2/cone-$v.png' />";
          }
        }
      ?>
      <?php
         if( $_COOKIE["skinrated_$id"] != $id )
        {
      ?>
	<br />
      <form method="post" action="skins.php" style="display:inline;">
        <div>
        <input type="radio" name="rating" value="1" id="rate_1_<?php echo $id; ?>" />
        <label for="rate_1_<?php echo $id; ?>">1</label> 
        <input type="radio" name="rating" value="2" id="rate_2_<?php echo $id; ?>" />
        <label for="rate_2_<?php echo $id; ?>">2</label> 
        <input type="radio" name="rating" value="3" id="rate_3_<?php echo $id; ?>" />
        <label for="rate_3_<?php echo $id; ?>">3</label> 
        <input type="radio" name="rating" value="4" id="rate_4_<?php echo $id; ?>" />
        <label for="rate_4_<?php echo $id; ?>">4</label> 
        <input type="radio" name="rating" value="5" id="rate_5_<?php echo $id; ?>" />
        <label for="rate_5_<?php echo $id; ?>">5</label> 
        <input type="hidden" name="skin_id" value="<?php echo $id; ?>" />
        <input type="submit" value="Vote" />
        </div>
      </form>
      <?php } ?>
    </td></tr>
   </table>
  </td>
 </tr>
</table>
<?php
  }
?>

<div id="left">
<h1>Download skins</h1>

<h2>Downloads...</h2>

<p>Sort by <a href="?sort=date_mod">last update date</a>, <a href="?sort=date_added">creation date</a>, <a href="?sort=downloads">downloads</a> or <a href="?sort=rating">rating</a>.</p>

<?php
  $sort = $_GET["sort"];
  
  $query='SELECT AVG(rating) as avg, COUNT(rating) as count,
  skins.id as id, name, author, downloads, date_added, date_modified, 
  image, url, min_version, size FROM skins  INNER JOIN "skins-rating" ON 
  skins.id="skins-rating".skin_id WHERE skins.accepted=true GROUP BY skins.id, skins.name, skins.author, 
  skins.downloads, skins.date_added, skins.date_modified, skins.image, skins.url, 
  skins.min_version, skins.size';
  
  
  switch( $sort )
  {
    case "rating":
      $query .= ' ORDER BY avg DESC, downloads DESC';
      break;
    case "downloads":
      $query .= " ORDER BY downloads DESC, date_added DESC";
      break;
    case "date_added":
      $query .= " ORDER BY date_added DESC, downloads DESC";
      break;
    case "date_mod":
    default:
      $query .= " ORDER BY date_modified DESC, date_added DESC, downloads DESC";
      break;
  }

  $q = pg_query( $connect, $query );
  while( $r = pg_fetch_array( $q ) )
  {
    AddSkin( $r['id'], $r['name'], $r['author'], $r['image'],
             $r['url'], $r['downloads'], $r['date_added'], $r['date_modified'],
             $r['avg'], $r['count'], /*$r['avg_old'], $r['count_old'],*/
             $r['sign'], $r['min_version'], $r['size'] );
  }
  $query = "SELECT downloads, size FROM skins_pack WHERE id=0";
  $q = pg_query( $connect, $query );
  $r = pg_fetch_array( $q );
  $sp_dl = $r['downloads'];
  $sp_size = FormatSize( $r['size'] );
  pg_close( $connect );
?>

</div>

<div id="right">

<?php panel_start( "orange" ); ?>
<h1>How to use these skins?</h1>

<p>To launch VLC with the <i>skinned interface</i>:</p>
<ul class="panel-orange-bullet">
  <li>Download and install the <a href="/vlc/">latest VLC version</a></li>

  <li>Launch VLC:
   <ul>
     <li>Linux users: Launch VLC with the following command-line:
	    <tt>vlc -I skins2</tt><br />
     </li>
     <li>Windows users: Launch VLC using the appropriate shortcut in the Start
  menu. You can also start VLC from command-line, in a DOS window.</li>
   </ul>
   </li>
   <li>If you don't want to use the default skin, just download another one 
	here. If you want to have it automatically detected, place it in the skins subfolder of your VLC installation:
	<ul>
	<li>Windows users: Put it in <em>C:\Program Files\VideoLAN\VLC\skins</em></li>
	<li>Linux users: Put it in <em>~/.vlc/skins2</em></li>
	</ul>
	In addition to the skins listed below, VLC supports all the Winamp2 
	and XMMS skins (.wsz files).
   </li>

  <li>Once VLC is started with the <em>skinned interface</em>,
     you can use the CTRL+S shortcut to load the new one.
  Enjoy!</li>
</ul>
<p><i>Please note that current releases of VLC do not support Skins on Mac OS X.</i></p>
<?php panel_end(); ?>

<?php panel_start( "blue" ); ?>
<h1>Create your own skin!</h1>

<p>If you still don't find any skin you like, why don't you
<a href="/vlc/skins2-create.html">create a better one</a>?<br /> Don't worry,
you don't need any programming skills... Some knowledge about graphics software
might ease the job, though :-)</p>
<?php panel_end(); ?>

<?php panel_start( "blue" ); ?>
<h1>Upload your own skin</h1>

<p>If you have made a new skin and want it to be downloadable, please click  
<a href="skins_upload.php">here</a> and fill out the form.<br />As soon as one webmaster has checked it, it will be displayed on this page.</p>
<?php panel_end(); ?>

<?php panel_start( "gray" ); ?>
<h1>Skin pack</h1>

<p>Download all the skins at once <a href='download-skins2-go.php?url=vlc-skins.zip'>here</a> (<?php echo $sp_size; ?>).<br />Downloaded <?php echo $sp_dl; ?> times since January 2007.</p>
<?php panel_end(); ?>

</div>

<?php footer('$Id$'); ?>
