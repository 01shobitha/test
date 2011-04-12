<?php
$nosource = false;

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

function pkgversion($name,$version)
{
    $latest = array("vlc" => "1.1.8");

    if (!$latest[$name])
        return;
    /* Not quite a version comparison. It works as long as we have < 10 numbers.
     * FIXME */
    if (strcmp($version, $latest[$name]) >= 0)
        return;

    echo "<p> <strong>Warning:</strong>
        The following package is outdated, you may encounter important bugs or security holes.<br />";
    global $nosource;
    if( !$nosource ) {
        echo "You may want to <a href='/vlc/download-sources.html'>download source code</a> and compile the software yourself.";
    }
    echo "</p>";
}

function pkgitem_nomirr($description,$version,$name,$top,$extradescription="")
{
  pkgversion($top, $version);
  echo "<p><a href=\"http://download.videolan.org/pub/videolan/$top/$version/$name\">$description</a> <i>$extradescription</i> (".DownloadSize("{$_SERVER["DOCUMENT_ROOT"]}pub/videolan/$top/$version/$name").")</p>";
}

function pkgitem_sf($description,$version,$name,$top,$extradescription="",$md5="" )
{
    pkgversion($top, $version);
    echo "<a id='downloadButton' href='http://downloads.videolan.org/vlc/$version/$name'>\n";
    echo "<img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />\n";
    echo "<span class='downloadText'>$description</span>";
    echo "<span id='downloadDetails' style='font-size: 12px; color: white;'>$extradescription</span>";
    echo "</a>";
    echo "<span class='extraInfoLink clearme' style='padding-left: 100px;'><em>MD5: $md5</em></span>";
}

function pkgitem($description,$version,$name,$top,$extradescription="")
{
  static $mirror_row = 0;
  pkgversion($top, $version);

  echo "<h3>$description <i>$extradescription</i> (".DownloadSize("{$_SERVER["DOCUMENT_ROOT"]}pub/videolan/$top/$version/$name").")</h3>";
?>
  <table>
    <tbody><tr>
      <th>Mirror</th>
      <th>Location</th>
      <th>Download</th>
    </tr>
<?php
    require $_SERVER["DOCUMENT_ROOT"]."/include/mirrors.php";
    $mirror_start = $mirror_row;
    echo " <tr id='mirror_row_random_$mirror_row'><td>Random mirror</td><td>Not too far away</td><td><a href='http://www.videolan.org/mirror-geo.php?file=$top/$version/$name'>Download</a></td></tr>\n ";
    foreach( $mirrors as $mirror )
    {
	$url = $mirror[0]; $mirror_name = $mirror[1];
	$country = $mirror[2]; $country_short = $mirror[3];
	$type = $mirror[4];
	echo " <tr id='mirror_row_$mirror_row'><!-- style='display:none;'--><td>$mirror_name</td><td class='$country_short'>$country</td><td><a href='http://www.videolan.org/mirror.php?mirror=$url&amp;file=$top/$version/$name'>Download</a> ($type)</td></tr>\n "; 
        $mirror_row++;
    }
 ?>
    <tr id='mirror_row_show_<?php echo $mirror_row; ?>'><td colspan="3"><a href="javascript:ShowMirrors(<?php echo $mirror_start; ?>,<?php echo $mirror_row; ?>);">Show full mirrors list</a></td></tr>
  </tbody></table>
 <?php
 }
 ?>
