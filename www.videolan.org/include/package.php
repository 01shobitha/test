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
    $latest = array("vlc" => "2.0.5");

    if (!$latest[$name])
        return;
    /* Not quite a version comparison. It works as long as we have < 10 numbers.
     * FIXME */
    if ( strlen($version) != strlen($latest[$name]) or strcmp($version, $latest[$name]) >= 0)
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
  echo "<p><a href=\"http://download.videolan.org/pub/videolan/$top/$version/$name\">$description</a> <i>$extradescription</i> (".DownloadSize("/opt/ftp/pub/videolan/$top/$version/$name").")</p>";
}

function sf_money()
{
    echo "
   <script type='text/javascript'>
   (function() {
       var script = document.createElement('script');
       script.src = '//sourceforge.net/accelerator/js?partner_id=60';
       script.defer = true;
       var s = document.getElementsByTagName('script')[0];
       s.parentNode.insertBefore(script, s);
   })();
   </script>";
}

function pkgitem_sf($description,$version,$name,$top,$extradescription="",$md5="" )
{
    pkgversion($top, $version);
    echo "<a id='downloadButton' href='http://sourceforge.net/projects/$top/files/$version/$name/download' class='sourceforge_accelerator_link'>\n";
    echo "<img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />\n";
    echo "<span class='downloadText'>$description</span>";
    echo "<span id='downloadDetails' style='font-size: 12px; color: white;'>$extradescription</span>";
    echo "</a>";
    echo "<span class='extraInfoLink clearme' style='padding-left: 100px; margin-bottom: 12px;'><em>MD5: $md5</em></span>";
    sf_money();
}

function pkgitem($description,$version,$name,$top,$extradescription="")
{
  pkgversion($top, $version);
  echo "<p><a href=\"http://get.videolan.org/$top/$version/$name\">$description</a> <i>$extradescription</i> (".DownloadSize("/opt/ftp/pub/videolan/$top/$version/$name").")</p>";
}
?>
