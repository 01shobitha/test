<?php
function mirrordir($dir)
{ ?>
  <li>Choose a download location:
<ul>
<!--<li><a href="http://download.videolan.org/pub/videolan/<?php echo $dir ?>">VIA, Ecole Centrale Paris (France)</a></li>-->
<?php
    $file = $_SERVER["DOCUMENT_ROOT"]."/include/mirrors";
    $file_id = fopen( $file , "r" );
    $all = fread( $file_id, filesize( $file ) );
    fclose( $file_id );
    $mirrors = explode( "\n", $all );    

    array_pop($mirrors);

    foreach( $mirrors as $mirror )
    {
	if( substr( $mirror, 0, 1 ) == "#" ) continue;
	$esp = strpos( $mirror, " " );
	$url = substr( $mirror, 0, $esp );
	$mirror_name = substr( $mirror, $esp+1, strlen( $mirror ) - $esp -1 );
  $country = ereg_replace( "\).*$", "", ereg_replace( "^.*\(", "", $mirror_name ) );
  $mirror_name = ereg_replace( "\(.*\)", "", $mirror_name );
	echo " <li><a href=\"http://www.videolan.org/mirror.html?mirror=$url&amp;file=$dir/\"><img src='/images/flags/$country.gif' alt='$country'/> $mirror_name</a></li>\n "; 
    }
  echo '</ul></li>';
 }
 ?>
