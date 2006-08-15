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

function pkgitem($description,$version,$name,$top)
{
  echo "<p>$description. (".DownloadSize("{$_SERVER["DOCUMENT_ROOT"]}pub/videolan/$top/$version/$name").")</p>";
?>
  <table>
    <tbody><tr>
      <th>Mirror</th>
      <th>Location</th>
      <th>Download</th>
    </tr>
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
	echo " <tr><td>$mirror_name</td><td>$country</td><td><a href=\"http://www.videolan.org/mirror.html?mirror=$url&amp;file=$top/$version/$name\">Download</td></tr>\n "; 
    }
 ?>
  </tbody></table>
 <?php
 }
 ?>
