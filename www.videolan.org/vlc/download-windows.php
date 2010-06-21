<?php
   $title = "VLC media player for Windows";
   $lang = "en";
   $menu = array( "vlc", "windows" );
   $additional_css = array("/countries.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>


<?php function pkgitemdev($version,$name) { ?><li><a href="http://downloads.videolan.org/pub/videolan/testing/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a></li><?php } ?>

<h1> VLC media player for Windows </h1>
<div id="left">

<p>All mirrors include all the available translations.</p>

<?php $vlc_version = '1.0.5'; ?>
  <h2>Latest packages (<?php echo $vlc_version; ?>)</h2>
<p>This release only supports Windows 2000 and later. Windows 95, 98 and Me users, please click <a href="#win98">here</a>.</p>

<?php
    pkgitem( "Windows self-extracting package",
                   "$vlc_version/win32","vlc-$vlc_version-win32.exe","vlc");
    pkgitem("Windows 7zip (No installer needed)",
                  "$vlc_version/win32","vlc-$vlc_version-win32.7z","vlc");
    pkgitem("Windows zip packages (No installer needed)",
                  "$vlc_version/win32","vlc-$vlc_version-win32.zip","vlc");
?>

  <h2><a id="win98"></a>Windows 95/98/Me</h2>
<p>VLC 0.8.6 is the latest release with support for this operating system.</p>
<p>Please note that these versions of Windows are not officially supported. No VideoLAN developer uses any of these systems, which makes them hard to support. VLC should mostly work with them, but some incompatibilities might appear. You might need to download <a href="http://www.microsoft.com.nsatc.net/globaldev/handson/dev/mslu_announce.mspx">The Microsoft Layer for Unicode on Windows 95/98/Me Systems</a>. The two MSLU files need to be put in the <code>C:\Windows\System\</code> folder.</p>
<?php $vlc_version = '0.8.6i'; ?>
<?php
$nosource = true;
    pkgitem( "Windows self-extracting package",
                   "$vlc_version/win32","vlc-$vlc_version-win32.exe","vlc");
    pkgitem("Windows 7zip (identical to the above but without the installer)",
                  "$vlc_version/win32","vlc-$vlc_version-win32.7z","vlc");
    pkgitem("Windows zip packages (identical to the above)",
                  "$vlc_version/win32","vlc-$vlc_version-win32.zip","vlc");
?>

  <h2>Older versions</h2>
  <?php browse_old("vlc") ?>

</div> <!-- LEFT -->

<div id="right">
  <h2>Source code</h2>

  <p>If you want, you can download the <a href="download-sources.html">source code</a> of VLC media player.</p>


</div> <!-- RIGHT -->

<?php footer('$Id$'); ?>
