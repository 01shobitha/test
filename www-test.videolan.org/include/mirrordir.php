<?php
function mirrordir($dir)
{ ?>
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
	echo " <tr><td>$mirror_name</td><td>$country</td><td><a href=\"http://www.videolan.org/mirror.html?mirror=$url&amp;file=$dir/\">Download<a></td></tr>\n "; 
    }
?>
</tbody></table>
<?php
 }
 ?>
