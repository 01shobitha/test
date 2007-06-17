<?php
   $title = "VLC media player for Windows";
   $lang = "en";
   $date = "16 April 2001";
   $menu = array( "vlc", "windows" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

<?php function pkgitemdev($version,$name) { ?><li><a href="http://downloads.videolan.org/pub/videolan/testing/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a></li><?php } ?>

<h1> VLC media player for Windows </h1>
<div id="left">

<p>All mirrors include all the available translations.</p>

  <h2>Latest packages (0.8.6c)</h2>

<?php
    pkgitem( "Windows self-extracting package",
                   "0.8.6c/win32","vlc-0.8.6c-win32.exe","vlc");
    pkgitem("Windows 7zip (identical to the above but without the installer)",
                  "0.8.6c/win32","vlc-0.8.6c-win32.7z","vlc");
    pkgitem("Windows zip packages (identical to the above)",
                  "0.8.6c/win32","vlc-0.8.6c-win32.zip","vlc");
?>

  <h2>Older versions</h2>
  <?php browse_old("vlc") ?>

</div> <!-- LEFT -->

<div id="right">
  <h2>Source code</h2>

  <p>If you want, you can download the <a href="download-sources.html">sourcecode</a> of VLC media player.</p>

  <?php panel_start( "gray" ); ?>
        <p><strong>Windows 95/98/Me users:</strong> Please note that these versions of Windows are not officially supported. No VideoLAN developer uses any of these systems, which makes them hard to support. VLC should mostly work with them, but some incompatibilities might appear. You might need to download <a href="http://www.microsoft.com.nsatc.net/globaldev/handson/dev/mslu_announce.mspx">The Microsoft Layer for Unicode on Windows 95/98/Me Systems</a>. The two MSLU files need to be put in the <code>C:\Windows\System\</code> folder.</p>
  <?php panel_end(); ?>

</div> <!-- RIGHT -->

<?php footer('$Id$'); ?>
