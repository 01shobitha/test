<?php
function mirrordir($dir)
{ ?>
  <li>Choose a downloadlocation :
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
	$esp = strpos( $mirror, " " );
	$url = substr( $mirror, 0, $esp );
	$mirror_name = substr( $mirror, $esp+1, strlen( $mirror ) - $esp -1 );
	echo " <li><a href=\"http://www.videolan.org/mirror.html?mirror=$url&amp;file=$dir/\">$mirror_name</a></li>\n "; 
    }
  echo '</ul></li>';
 }
 ?>
