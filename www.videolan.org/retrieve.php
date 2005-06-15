<?php header('Content-Type: text/xml'); ?>
<?xml version="1.0"?>
<!DOCTYPE rss SYSTEM "http://my.netscape.com/publish/formats/rss-0.91.dtd">
<?php
   require '/home/videolan/etc/db.php';
    $connect = pg_connect( $connect_string );
  
    if( !$connect )
    {
	die;
    }
//    echo '<rss version="0.91"><channel><pubDate>'.date("D, j  M Y G:i:s T").'</pubDate><description>VLC Counter</description>';
    echo '<rss version="0.91"><channel><pubDate>'.date("D, j M Y G:i:s").'</pubDate><description>VLC Counter</description>';
    echo "<link>http://www.videolan.org</link><title>VLC</title>";
    $request = pg_query($connect, "SELECT sum(number) FROM mirrors WHERE file like '%0.8.1%'" );
 
    if( $row = pg_fetch_array($request) )
    {
     	echo "<item><title>VLC 0.8.1</title><description>".$row[0]."</description></item>";
    }
    echo "</channel></rss>";
    pg_close($connect);
?>
