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
 $menu = array( "vlc", "skins" ); 
 $additional_css = array("/vlc/skins.css","/style/panels.css");
 $additional_js = array("/js/skins.js");
 require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

function AddSkin( $id, $name, $author, $img, $url, $dl, $date, $date_mod, $rating, $count, /*$old_rating, $old_count,*/ $sign, $min_version, $size )
{
  /*echo "<div class=\"skin\""; 
    echo "style=\"background-image:url('http://images.videolan.org/vlc/skins2/tm_".$img."')\" ";
    $canvote = ($_COOKIE["skinrated_$id"] != $id);
    echo "onclick=\"showSkinBox(".$id.",'".$name."','".$author."','".$date_mod."','".$dl."','".$url."','".FormatSize( $size )."',".$rating.",".$count.",'http://images.videolan.org/vlc/skins2/".$img."',".$canvote.",'".$min_version."')\"";
    echo ">";
      echo "<span class=\"skin-title-list\">".$name."</span>";
  echo "</div>";*/
  $canvote = (!isset($_COOKIE["skinrated_$id"])) || ($_COOKIE["skinrated_$id"] != $id);
  echo "<div class=\"skin-container\"";
  echo " onclick=\"showSkinBox(".$id.",'".$name."','".$author."','".$date_mod."','".$dl."','".$url."','".FormatSize( $size )."',".$rating.",".$count.",'http://images.videolan.org/vlc/skins2/".$img."','".$canvote."','".$min_version."')\"";
  echo ">\n";
  echo "  <div class=\"skin-container-title\">".$name."</div>\n";
  echo "  <img src=\"http://images.videolan.org/vlc/skins2/tm_".$img."\" alt=\"".$name."\"/>\n";
  echo "  <div class=\"skin-container-rating\">";
  if( $rating == -1 ) {
    echo "Not rated";
  }
  else {
    for( $i=0; $i<5; $i++ ) {
      $v = round(min(1,max(0,$rating-$i)),1)*10;
      echo "<img alt='".($v>0?'+':'-')."' src='http://images.videolan.org/images/skins/cone-$v.png' />";
    }
  }
  echo "  </div>\n";
  echo "</div>\n";
}

$query = 'SELECT downloads, size FROM skins_pack WHERE id=0';
$q = pg_query( $connect, $query );
$r = pg_fetch_array( $q );
$sp_dl = $r['downloads'];
$sp_size = FormatSize( $r['size'] );

?>
<script type='text/javascript'>
   $(document).ready(function () { initSkinBox(); });
</script>

<h1>Skins</h1>
<table>
<tr>
  <td style="border:0px;padding:5px;">
    <?php panel_start( "orange" ); ?>
    <h1>How to use these skins?</h1>
    <i>Skins do not work on Mac OS X!</i><br />
      Put the downloaded VLT files in the following folder:<br/>
      <ul class="panel-orange-bullet">
        <li>On Windows: the <i>skins</i> folder in the VLC installation directory (e.g. <i>C:\Program Files\VideoLAN\VLC\skins</i>)</li>
        <li>On Linux/Unix: <i>~/.local/share/vlc/skins2</i></li>
      </ul>
      <br />
      Then open your VLC settings and change your interface from native to skins.
      You can choose your desired skin already there or change it when you are in the skins mode by rightclicking somewhere on the skin and going to <i>Interface&gt;Choose Skin</i>.<br/>
      VLC needs to be restarted to change to skins mode.
    <?php panel_end(); ?>
  </td>
  <td style="border:0px;padding: 5px">
    <?php panel_start( "blue" ); ?>
    <h1>Create your own skin!</h1>
    If you wish to create your own skin, check out these links:<br/>
      <ul class="panel-blue-bullet">
        <li><a href="/vlc/skineditor.html">The VLC Skin Editor</a></li>
        <li><a href="/vlc/skins2-create.html">How skins are made up</a></li>
        <li><a href="http://forum.videolan.org/viewforum.php?f=15">The skins forum</a></li>
      </ul>    
    <p>
    You have made a new skin and want to share it?<br />
    Please 
    <a href="skins_upload.php">Upload it</a> and fill out the form.<br/>As soon as one webmaster has checked it, it will be displayed on this page.
    </p>
    <?php panel_end(); ?>
  </td>
</tr>
</table>
<h2>Downloads</h2>
<p><i>Download all the skins at once <a href='download-skins2-go.php?url=vlc-skins.zip'>here</a> (<?php echo $sp_size; ?>).</i><br />Downloaded <?php echo $sp_dl; ?> times since January 2007. (This pack is updated daily)</p>
<p>Sort by <a href="?sort=date_mod">last update date</a>, <a href="?sort=date_added">creation date</a>, <a href="?sort=downloads">downloads</a> or <a href="?sort=rating">rating</a>.</p>

<?php
$sort = ( isset($_GET["sort"]) )? $_GET["sort"] : "date_mod" ;
$query='SELECT AVG(rating) as avg, COUNT(rating) as count, skins.id as id, name, author, downloads, date_added, date_modified, image, url, min_version, size FROM skins INNER JOIN "skins-rating" ON skins.id="skins-rating".skin_id WHERE skins.accepted=true GROUP BY skins.id, skins.name, skins.author, skins.downloads, skins.date_added, skins.date_modified, skins.image, skins.url, skins.min_version, skins.size';
  
//$query = 'SELECT skins.id as id, name, author, downloads, date_added, date_modified, image, url, min_version, size FROM skins WHERE skins.accepted=true GROUP BY skins.id, skins.name, skins.author, skins.downloads, skins.date_added, skins.date_modified, skins.image, skins.url, skins.min_version, skins.size';
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
  AddSkin( $r['id'], htmlspecialchars($r['name']), htmlspecialchars($r['author']), $r['image'],
           $r['url'], $r['downloads'], $r['date_added'], $r['date_modified'],
           $r['avg'], $r['count'], /*$r['avg_old'], $r['count_old'],*/
           0/*$r['sign']*/, $r['min_version'], $r['size'] );
}
pg_close( $connect );
?>


<?php footer('$Id: skins_new.php 4935 2008-11-15 20:05 altglass$'); ?>
