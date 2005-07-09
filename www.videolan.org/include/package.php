<?php

function DownloadSize($file) {
  $size = filesize($file);
  $sizes = Array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');
  $ext = $sizes[0];
  for ($i=1; (($i < count($sizes)) && ($size >= 1024)); $i++) {
   $size = $size / 1024;
   $ext  = $sizes[$i];
  }
  return round($size, 1).$ext;
}

function pkgitem($version,$name,$top,$description="")
{ ?>
  <li><code><?php echo $name." ".$description; ?></code> (<?php echo DownloadSize("{$_SERVER["DOCUMENT_ROOT"]}pub/videolan/$top/$version/$name"); ?>) :
<br/>Select a download location :
<ul>
<!--<li><a href="http://download.videolan.org/pub/videolan/<?php echo $top."/".$version."/".$name; ?>">VIA, Ecole Centrale Paris (France)</a></li>-->
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
	echo " <li><a href=\"http://www.videolan.org/mirror.html?mirror=$url&amp;file=$top/$version/$name\">$mirror_name</a></li>\n "; 
    }
  echo '</ul></li>';
 }
 ?>
