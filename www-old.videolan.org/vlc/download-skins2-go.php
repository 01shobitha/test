<?php
$url = $_GET["url"];
?>
<html>
  <head>
    <title>VideoLAN - Download skin</title>
    <meta http-equiv="refresh" content="0; url=/vlc/skins2/<?php echo $url; ?>" />
  </head>
  <body>
    <p>Click <a href="/vlc/skins2/<?php echo $url; ?>">here</a> if your download doesn't start.</p>
<?php
  require_once '/home/videolan/etc/db-www.php';
  if( !($connect = pg_connect( $connect_string )) )
     die( "connection to database failed" );
  pg_query( "UPDATE skins SET downloads=downloads+1 WHERE url='$url'" );
  pg_close( $connect );
?>          
  </body>
</html>
