<?php
  $mirror_url = $_GET["mirror"];
  $file = $_GET["file"];

  if( !isset($file) ) { die; }
  if( strchr( $file, '<' ) or strchr( $file, '%' ) or strchr( $file, '>' ) ) die();

  require $_SERVER["DOCUMENT_ROOT"]."/include/mirrors.php";

  if( isset($mirror_url) )
  {
    foreach( $mirrors as $mirror )
    {
      if( $mirror_url === $mirror[0] )
      {
        $found = true; break;
      }
    }

    !$found && die;
  }
  else
  # Pick up a random mirror  
  {
    $index = rand( 0, sizeof( $mirrors ) - 1 );
    $mirror = $mirrors[$index];
    $mirror_url = $mirror[0];
  }

  $mirror_name = $mirror[1];
  $country = $mirror[2];
?>
<html>
 <head>
  <title>VideoLAN - Download from mirror</title>
  <meta http-equiv="refresh" content="0; url=<?php echo $mirror_url.$file ?>" />
 </head>
 <body>
  <p>Downloading from <?php echo $mirror_name; ?>, <?php echo $country; ?>. Click <a href="<?php echo $mirror_url.$file ?>">here</a> if your download doesn't start. Refresh the page to download from another mirror.</p>
  <p>If you want to put a direct download link on your website, please use <?php echo "http://www.videolan.org/mirror.php?file=$file"; ?>.<br />Please don't use a direct link. This script allows us to distribute the network load across our mirrors. Thanks. </p>
 </body>
</html>

<?php
    if( $mirror == "http://downloads.videolan.org/pub/videolan/" )
    {
	exit;
    }

    require '/home/videolan/etc/db.php';
    $connect = pg_connect( $connect_string );
  
    if( !$connect )
    {
	die;
    }
  $mirror_url = pg_escape_string($mirror_url);
  $file = pg_escape_string($file);
    
    if(pg_affected_rows(pg_query($connect, "UPDATE mirrors SET number=number+1 WHERE address='$mirror_url' AND file='$file' AND date=current_date"))==0)
    {
	pg_query($connect, "INSERT INTO mirrors (address, file, number,date)".
	                    "VALUES ('" . $mirror_url . "', '" . $file . "', 1,".
			    "current_date)");
    }
    pg_close($connect);
    ?>
