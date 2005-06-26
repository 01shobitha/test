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
    echo '<rss version="0.91"><channel><pubDate>'.date("D, j M Y G:i:s").'</pubDate><description>VLC Counter</description>';
    echo "<link>http://www.videolan.org</link><title>VLC</title>";
    $requests = array(  "%0.8.2%" =>"VLC 0.8.2",
    			"%vlc%"   => "VLC Total",
			"%0.8.2%win32%"=> "VLC 0.8.2 Win32",
			"%0.8.2%dmg%"=> "VLC 0.8.2 MacOS X",
			"%0.8.2%rpm%"=> "VLC 0.8.2 RPM" );
    foreach( $requests as $k => $v )
    {
        $request = pg_query($connect, "SELECT sum(number) FROM mirrors WHERE file like '$k'" );
 
        if( $row = pg_fetch_array($request) )
        {
            echo "<item><title>$v</title><description>".$row[0]."</description></item>";
        }
    }
    echo "</channel></rss>";
    pg_close($connect);
?>
