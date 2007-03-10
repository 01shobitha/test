<?php

function DownloadSize( $file )
{
  $size = @filesize( $file );
  return FormatSize( $size );
}

function browse_old( $fold )
{
 echo "<p> Older versions can be found by browsing ";
 echo "<a href=\"http://download.videolan.org/pub/videolan/$fold\">our FTP archive</a></p>";
}

function pkgitem_nomirr($description,$version,$name,$top,$extradescription="")
{
  echo "<p><a href=\"http://download.videolan.org/pub/videolan/$top/$version/$name\">$description</a> <i>$extradescription</i> (".DownloadSize("{$_SERVER["DOCUMENT_ROOT"]}pub/videolan/$top/$version/$name").")</p>";
}

function pkgitem($description,$version,$name,$top,$extradescription="")
{
  echo "<p>$description <i>$extradescription</i> (".DownloadSize("{$_SERVER["DOCUMENT_ROOT"]}pub/videolan/$top/$version/$name").")</p>";
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
	$ex=explode("|",$mirror);
	$url = $ex[0]; $mirror_name = $ex[1];
	$country = $ex[2]; $country_short = $ex[3];
	$type = $ex[4];
	echo " <tr><td>$mirror_name</td><td class=\"$country_short\">$country</td><td><a href=\"http://www.videolan.org/mirror.html?mirror=$url&amp;file=$top/$version/$name\">Download</a> ($type)</td></tr>\n "; 
    }
 ?>
  </tbody></table>
 <?php
 }
 ?>
