<?php

$mirror_url = $_GET["mirror"];
$file = $_GET["file"];

if( !isset( $file ) ) { die; }
if( strchr( $file, '<' ) or strchr( $file, '%' ) or strchr( $file, '>' ) ) die();

if( $file = strstr( $file, 'vlc/') )
{
  $file = substr( $file, 3, strlen( $file ) - 4 )
  header('Location: http://sourceforge.net/projects/vlc/files/'.$file.'/download');
}
else
{
  if( !isset( $mirror_url ) )
  {
    require $_SERVER["DOCUMENT_ROOT"]."/include/continents.php";
    require $_SERVER["DOCUMENT_ROOT"]."/include/mirrors.php";
  
    $code = apache_note("GEOIP_COUNTRY_CODE");
    $name = apache_note("GEOIP_COUNTRY_NAME");
    $continent = $continents[$code];
  
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
      if( $mirror[4] != 'HTTP' ) continue;
      $country_short = $mirror[3];
      $bw = $mirror[5];
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
      if( $mirror[4] != 'HTTP' ) continue;
      $mirror_url = $mirror[0];
      $mirror_name = $mirror[1];
      $country = $mirror[2];
      $country_short = $mirror[3];
      $bw = $mirror[5];
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
  
      /* Substract the mirror's probability to our random value. If we cross
       * O then we've found our lucky winner */
      $r -= $p;
      if( $r <= 0 )
      {
        break;
      }
    }
  }
  else
  {
    if( strchr( $mirror_url, '<' ) or strchr( $mirror_url, '%' ) or strchr( $mirror_url, '>' ) ) die();
    /* TODO: we could get the mirror name and country but that requires parsing
     * the mirrors list */
    $mirror_name = "Forced mirror";
    $country = "N/A";
  }


    if( strrchr($file,'.') == '.asc' )
    {
        exit;
    }

    if( $mirror_url == "http://downloads.videolan.org/pub/videolan/" )
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
    
    if( pg_affected_rows(pg_query($connect, "UPDATE mirrors SET number=number+1 WHERE address='$mirror_url' AND file='$file' AND date=current_date")) == 0 ) 
    {
	pg_query($connect, "INSERT INTO mirrors (address, file, number,date)".
	                    "VALUES ('" . $mirror_url . "', '" . $file . "', 1,".
			    "current_date)");
    }
    pg_close($connect);
}
?>
