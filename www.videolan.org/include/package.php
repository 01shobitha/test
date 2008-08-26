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
    require $_SERVER["DOCUMENT_ROOT"]."/include/mirrors.php";
    foreach( $mirrors as $mirror )
    {
	$url = $mirror[0]; $mirror_name = $mirror[1];
	$country = $mirror[2]; $country_short = $mirror[3];
	$type = $mirror[4];
	echo " <tr><td>$mirror_name</td><td class=\"$country_short\">$country</td><td><a href=\"http://www.videolan.org/mirror.php?mirror=$url&amp;file=$top/$version/$name\">Download</a> ($type)</td></tr>\n "; 
    }
 ?>
  </tbody></table>
 <?php
 }
 ?>
