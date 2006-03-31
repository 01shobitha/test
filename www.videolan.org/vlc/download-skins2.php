<?php
   $title = "VLC media player - Download Skins";
   $lang = "en";
   $date = "28 March 2003";
   $menu = array( "vlc", "skins-download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
?>

<?php
  require_once '/home/videolan/etc/db-www.php';
  if( !($connect = pg_connect( $connect_string )) )
    die( "connection to database failed" );

  function AddSkin( $id, $name, $author, $img, $url, $dl, $date, $rating, $count )
  {
?>
<h3><?php echo $name; ?></h3>
<table class="skins-download">
 <tr>
  <td>
   <a href="/vlc/skins2/<?php echo $img; ?>">
   <img width="200" src="/vlc/skins2/<?php echo $img; ?>"
     class="skins-screenshot" alt="screenshot"/>
   </a>
  </td>
  <td>
   <table>
    <tr><td class="skins-comment">
      Made by <?php echo $author; ?>
    </td></tr>
    <tr><td class="skins-comment">
      <?php echo "$dl downloads since $date"; ?>
    </td></tr>
    <tr>
<td><a class="skins-download" href="download-skins2-go.php?url=<?php echo "$url"; ?>">Download VLT file</a>
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
          echo round($rating,1)."/5 ( $count votes)"; 
          for( $i=0; $i<$rating; $i++ )
          {
            echo "<img alt='+' src='/vlc/skins2/cone-plus.png' />";
          }
          for( ; $i<5; $i++ )
          {
            echo "<img alt='-' src='/vlc/skins2/cone-minus.png' />";
          }
        }
      ?>
      <form method="post" action="" style="display:inline;">
        <input type="radio" name="rating" value="1" id="rate_1" />
        <label for="rate_1">1</label> - 
        <input type="radio" name="rating" value="2" id="rate_2" />
        <label for="rate_2">2</label> - 
        <input type="radio" name="rating" value="3" id="rate_3" />
        <label for="rate_3">3</label> - 
        <input type="radio" name="rating" value="4" id="rate_4" />
        <label for="rate_4">4</label> - 
        <input type="radio" name="rating" value="5" id="rate_5" />
        <label for="rate_5">5</label> - 
        <input type="hidden" name="skin_id" value="<?php echo $id; ?>" />
        <input type="submit" value="Rate skin" />
      </form>
    </td></tr>
   </table>
  </td>
 </tr>
</table>
<?php
  }
?>

<h1>Download skins</h1>

<h2>How to use these skins?</h2>

<p>See <a href="/vlc/skins.html">this page</a> for more details on how to load
a downloaded skin.</p>

<h2>Create your own skin!</h2>

<p>You don't like the skins listed on this page? Just <a
href="/vlc/skins2-create.html">create a better one</a>!<br/>
Don't worry, you don't need any programming skills... Some knowledge about
graphics software might ease the job, though :-)</p>

<h2>Downloads...</h2>

<p>Sort by <a href="?sort=date_added">date</a> or <a href="?sort=downloads">downloads</a>.</p>

<?php
  if( isset( $_POST["skin_id"] ) && isset( $_POST["rating"] ) )
  {
    pg_query( "INSERT INTO \"skins-rating\" (\"skin_id\", \"rating\") VALUES ('{$_POST["skin_id"]}','{$_POST["rating"]}')" );
  }

  switch( $_GET["sort"] )
  {
    case "downloads":
      break;
      $order = "downloads DESC, date_added DESC";
    case "date_added":
    default:
      $order = "date_added DESC, downloads DESC";
      break;
  }

  $q = pg_query( $connect, "SELECT * FROM skins ORDER BY $order" );
  while( $r = pg_fetch_array( $q ) )
  {
    $q_r = pg_query( $connect, "SELECT SUM(\"rating\"), COUNT(\"rating\") FROM \"skins-rating\" WHERE \"skin_id\"='{$r["id"]}'" );
    $r_r = pg_fetch_row( $q_r );
    AddSkin( $r['id'], $r['name'], $r['author'], $r['image'],
             $r['url'], $r['downloads'], $r['date_added'],
             $r_r[1] ? $r_r[0]/$r_r[1] : -1, $r_r[1] );
  }
  pg_close( $connect );
?>


<h2>Skins VS skins2</h2>

<p><span style="color: red;"><b>Important note:</b></span><br/> VLC had two
different skins modules, named <i>skins</i> and <i>skins2</i>, the latter being
a complete rewrite of the former. The <i>skins</i> module is now deprecated,
and is no more included in VLC releases since version 0.8.0.</p>

<p>The <a href="/vlc/skins-create.html">documentation</a> and <a
href="/vlc/download-skins.html">download section</a> for the <i>skins</i>
module are still kept in case someone wants to port old skins to the
<i>skins2</i> module, but they are going to disappear one day or other...</p>

<p>On this page you will only find skins for the new <i>skins2</i> module.</p>

<?php footer('$Id: download-skins.html 2517 2004-05-23 17:11:06Z ipkiss $'); ?>
