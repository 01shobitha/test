<?php

$mirror = $_GET["mirror"];
$file = $_GET["file"];

if( !isset( $file ) ) { die; }

if( !isset( $mirror ) )
{

  require $_SERVER["DOCUMENT_ROOT"]."/include/continents.php";

  $code = apache_note("GEOIP_COUNTRY_CODE");
  $name = apache_note("GEOIP_COUNTRY_NAME");
  $continent = $continents[$code];

  $listfile = $_SERVER["DOCUMENT_ROOT"]."/include/mirrors";
  $fp = fopen( $listfile, "r" );
  $all = fread( $fp, filesize( $listfile ) );
  fclose( $fp );
  $mirrors = explode( "\n", $all );
  array_pop( $mirrors );

  /* Country */
  $cbw = 0;
  $ccount = 0;

  /* Continent */
  $Cbw = 0;
  $Ccount = 0;

  /* Total */
  $tbw = 0;
  $tcount = 0;

  foreach( $mirrors as $mirror )
  {
    if( substr( $mirror, 0, 1 ) == "#" ) continue;
    $ex=explode("|",$mirror);
    $country_short = $ex[3];
    $bw = $ex[5];
    $COUNTRY_SHORT = strtoupper( $country_short );
    if( $COUNTRY_SHORT == $code )
    {
      $cbw += $bw;
      $ccount ++;
    }
    if( $continents[$COUNTRY_SHORT] == $continent )
    {
      $Cbw += $bw;
      $Ccount ++;
    }
    $tcount ++;
    $tbw += $bw;
  }

  $r = rand(0,1000000)/1000000.;

  $cweight = 50;
  $Cweight = 10;
  $tweight = 1;
  $threshold = 4;
  if( $ccount >= $threshold ) $Cweight = 0;
  if( $Ccount >= $threshold ) $tweight = 0;

  $dbw = $cweight * $cbw + $Cweight * ( $Cbw - $cbw ) + $tweight * ( $tbw - $cbw - $Cbw );
  foreach( $mirrors as $mirror )
  {
    if( substr( $mirror, 0, 1 ) == "#" ) continue;
    $ex=explode("|",$mirror);
    $mirror_url = $ex[0];
    $mirror_name = $ex[1];
    $country = $ex[2];
    $country_short = $ex[3];
    $bw = $ex[5];
    $COUNTRY_SHORT = strtoupper( $country_short );
    if( $COUNTRY_SHORT == $code )
    {
      $p = $cweight * $bw / $dbw;
    }
    else if( $continents[$COUNTRY_SHORT] == $continent )
    {
      $p = $Cweight * $bw / $dbw;
    }
    else
    {
      $p = $tweight * $bw / $dbw;
    }
    if( $r > 0 )
    {
      $r -= $p;
      if( $r <= 0 )
      {
        break;
      }
    }
  }
}
?>

<!-- Web page -->

<html>
 <head>
  <title>VideoLAN - Download from mirror</title>
  <meta http-equiv="refresh" content="0; url=<?php echo $mirror_url.$file ?>" />
 </head>
 <body>
  <p>Downloading from <?php echo $mirror_name; ?>, <?php echo $country; ?>. Click <a href="<?php echo $mirror_url.$file ?>">here</a> if your download doesn't start. Refresh the page to download from another mirror.</p>
  <p>If you want to put a direct download link on your website, please use <?php echo "http://www.videolan.org/mirror-geo.php?file=$file.<br />Please don't use a direct link. This script allows us to distribute the network load across our mirrors. Thanks."; ?> </p>
 </body>
</html>

<!-- Stats -->

<?php
   require '/home/videolan/etc/db.php';
    if( $mirror_url == "http://downloads.videolan.org/pub/videolan/" )
    {
	exit;
    }
    /* Load saved data */
    $connect = pg_connect( $connect_string );
  
    if( !$connect )
    {
	die;
    }
    
    $request = pg_query($connect, "SELECT * FROM mirrors ".
                                   "WHERE address='$mirror_url' AND file='$file' AND date=current_date"); 
    $done = 0;
    if( $row = pg_fetch_array($request) )
    {
        pg_query($connect, "UPDATE mirrors SET number=number+1 WHERE address='$mirror_url' AND file='$file' AND date=current_date"); 
    }
    else
    {
	pg_query($connect, "INSERT INTO mirrors (address, file, number,date)".
	                    "VALUES ('" . $mirror_url . "', '" . $file . "', 1,".
			    "current_date)");
    }
    pg_close($connect);
?>
