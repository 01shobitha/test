<?php
$url = urldecode( $_GET["url"] );
if( strpos( $url, "/" ) ) $url ="";
#if( strpos( $url, " " ) ) $url ="";
if( strpos( $url, '"' ) ) $url ="";
if( strpos( $url, "'" ) ) $url ="";
$displayURL = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
echo $displayURL;
?>
<html>
  <head>
    <title>VideoLAN - Download skin</title>
    <meta http-equiv="refresh" content="0; url=//www.videolan.org/vlc/skins2/<?php echo $displayURL; ?>" />
  </head>
  <body>
    <p>Click <a href="//www.videolan.org/vlc/skins2/<?php echo $displayURL; ?>">here</a> if your download doesn't start.</p>
<?php
  if( $url != "" )
  { 
      require_once '/home/videolan/etc/db-www.php';
      if( !($connect = pg_connect( $connect_string )) )
          die( "connection to database failed" );
      if( $url == "vlc-skins.zip" )
      {
          pg_query( "UPDATE skins_pack SET downloads=downloads+1 WHERE id=0" );
      }
      else
      {
          $url = pg_escape_string($url);
          pg_query( "UPDATE skins SET downloads=downloads+1 WHERE url='$url'" );
      }
      pg_close( $connect );
  }
?>
  </body>
</html>
