<?php
$url = $_GET["url"];
if( strpos( $url, "/" ) ) $url ="";
?>
<html>
  <head>
    <title>VideoLAN - Download skin</title>
    <meta http-equiv="refresh" content="0; url=http://images.videolan.org/vlc/skins2/<?php echo $url; ?>" />
  </head>
  <body>
    <p>Click <a href="http://images.videolan.org/vlc/skins2/<?php echo $url; ?>">here</a> if your download doesn't start.</p>
<?php
  require_once '/home/videolan/etc/db-www.php';
  if( !($connect = pg_connect( $connect_string )) )
     die( "connection to database failed" );
  if( $url == "vlc-skins.zip" )
  {
    pg_query( "UPDATE skins_pack SET downloads=downloads+1 WHERE id=0" );
  }
  else
  {
    pg_query( "UPDATE skins SET downloads=downloads+1 WHERE url='$url'" );
  }
  pg_close( $connect );
?>          
  </body>
</html>
