<?php echo '<?xml version="1.0" encoding="utf-8" ?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!-- Location based randomisation -->
<!--
<?php

$mirror = $_GET["mirror"];
$file = $_GET["file"];

if( !isset( $file ) ) { die; }

if( !isset( $mirror ) )
{
  require $_SERVER["DOCUMENT_ROOT"]."/include/continents.php";

  $code = apache_note("GEOIP_COUNTRY_CODE");
  $name = apache_note("GEOIP_COUNTRY_NAME");
  echo "Your country is: $code ($name)\n";
  $continent = $continents[$code];
  echo "Your continent is: $continent\n";

  $listfile = $_SERVER["DOCUMENT_ROOT"]."/include/mirrors";
  $fp = fopen( $listfile, "r" );
  $all = fread( $fp, filesize( $listfile ) );
  fclose( $fp );
  $mirrors = explode( "\n", $all );
  array_pop( $mirrors );

  /* Country */
  $cbw = 0;    /* Available bandwidth in country */
  $ccount = 0; /* Number of mirrors in country */

  /* Continent */
  $Cbw = 0;    /* Available bandwidth in continent */
  $Ccount = 0; /* Number of mirrors in continent */

  /* Total */
  $tbw = 0;    /* Total available bandwidth */
  $tcount = 0; /* Number of mirrors */

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

  $r = rand(0,1000000)/1000000.; /* Random value between 0 and 1 used to choose
                                  * the mirror. */

  $cweight = 50; /* Weight used for mirrors in the same country */
  $Cweight = 10; /* Weight used for mirrors in the same continent */
  $tweight = 1;  /* Weight used for other mirrors */

  $threshold = 4; /* Number of mirrors needed in a given country or continent
                   * before we discard all the other mirrors */
  if( $ccount >= $threshold ) $Cweight = 0;
  if( $Ccount >= $threshold ) $tweight = 0;

  $dbw = $cweight * $cbw + $Cweight * ( $Cbw - $cbw ) + $tweight * ( $tbw - $cbw - $Cbw ); /* Weight adjusted bandwidth */ 

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

    /* Get the current mirror's probability of being choosen */
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
    echo "$mirror_name, $country: $p\n";

    /* Substract the mirror's probability to our random value. If we cross
     * O then we've found our lucky winner */
    $r -= $p;
    if( $r <= 0 )
    {
      echo "This one.\n";
      break;
    }
  }
}
else
{
  /* TODO: we could get the mirror name and country but that requires parsing
   * the mirrors list */
  $mirror_name = "Forced mirror";
  $country = "N/A";
}
?>
-->

<!-- Web page -->

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>VideoLAN - Download from mirror</title>
  <meta http-equiv="refresh" content="0; url=<?php echo $mirror_url.$file ?>" />
 </head>
 <body>
  <p>Downloading from <?php echo $mirror_name; ?>, <?php echo $country; ?>. Click <a href="<?php echo $mirror_url.$file ?>">here</a> if your download doesn't start. Refresh the page to download from another mirror.</p>
  <p>If you want to put a direct download link on your website, please use <?php echo "http://www.videolan.org/mirror-geo.php?file=$file"; ?> .<br />Please don't use a direct link. This script allows us to distribute the network load across our mirrors. Thanks. </p>
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
