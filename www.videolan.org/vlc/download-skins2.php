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

  function AddSkin( $id, $name, $author, $img, $url, $dl, $date, $rating, $count, $old_rating, $old_count, $sign )
  {
?>
<h3><?php echo $name; ?></h3>
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
          echo round($rating,1)."/5 "; 
          if( $sign > 0 )
            echo "<img alt='Up' src='/vlc/skins2/cone-u.png' title='last week\'s rating: $old_rating'/>";
          else if( $sign == 0 )
            echo "<img alt='Equal' src='/vlc/skins2/cone-e.png' title='last week\'s rating: $old_rating'/>";
          else
            echo "<img alt='Down' src='/vlc/skins2/cone-d.png' title='last week\'s rating: $old_rating'/>";
          echo " ($count votes)";
          for( $i=0; $i<5; $i++ )
          {
            $v = round(min(1,max(0,$rating-$i)),1)*10;
            echo "<img alt='".($v>0?'+':'-')."' src='/vlc/skins2/cone-$v.png' />";
          }
        }
      ?>
      <form method="post" action="" style="display:inline;">
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

<p>Sort by <a href="?sort=date_added">date</a>, <a href="?sort=downloads">downloads</a> or <a href="?sort=rating">rating</a>.</p>

<p><span style="color: red;">Warning:</span> Some of these skins require VLC 0.8.5 or later to run.</p>

<?php
  if( isset( $_POST["skin_id"] ) && isset( $_POST["rating"] ) )
  {
    pg_query( "INSERT INTO \"skins-rating\" (\"skin_id\", \"rating\") VALUES ('{$_POST["skin_id"]}','{$_POST["rating"]}')" );
  }

  $sort = $_GET["sort"];
  $query='SELECT avg_new.*, avg_old.avg as avg_old, avg_new.count as count, avg_old.count as count_old, sign( avg_new.avg-avg_old.avg ) FROM (SELECT skin_id, AVG( rating ), COUNT( rating ) FROM "skins-rating" WHERE age( date ) > \'7 days\' GROUP BY skin_id UNION SELECT id as skin_id, 0 as avg, 0 as count FROM skins WHERE age( date_added ) <= \'7 days\' ) AS avg_old, (SELECT AVG( rating ), COUNT( rating ), skins.id as id, name, author, downloads, date_added, image, url FROM skins INNER JOIN "skins-rating" ON skins.id="skins-rating".skin_id GROUP BY skins.id, skins.name, skins.author, skins.downloads, skins.date_added, skins.image, skins.url) AS avg_new WHERE avg_old.skin_id = avg_new.id';
  switch( $sort )
  {
    case "rating":
      $query .= ' ORDER BY avg DESC, downloads DESC';
      break;
    case "downloads":
      $query .= " ORDER BY downloads DESC, date_added DESC";
      break;
    case "date_added":
    default:
      $query .= " ORDER BY date_added DESC, downloads DESC";
      break;
  }

  $q = pg_query( $connect, $query );
  while( $r = pg_fetch_array( $q ) )
  {
    AddSkin( $r['id'], $r['name'], $r['author'], $r['image'],
             $r['url'], $r['downloads'], $r['date_added'],
             $r['avg'], $r['count'], $r['avg_old'], $r['count_old'],
             $r['sign'] );
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

<?php footer('$Id$'); ?>
