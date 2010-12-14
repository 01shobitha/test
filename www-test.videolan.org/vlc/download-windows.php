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

<p>All mirrors include all the available languages.</p>

<?php $vlc_version = '1.1.5'; ?>
  <h2>Latest version - <?php echo $vlc_version; ?></h2>
<p>This release only supports Windows 2000 (SP4+UR1), XP, Vista and 7. </p>

<?php
    pkgitem_sf( "Windows self-extracting package",
                   "$vlc_version/win32","vlc-$vlc_version-win32.exe","vlc", "", "988bc05f43e0790c6c0fd67118821d42") ;
    pkgitem_sf("Windows 7zip (No installer needed)",
                  "$vlc_version/win32","vlc-$vlc_version-win32.7z","vlc", "",   "d3cf5f1a0d88fd5873d421399e40409a" );
    pkgitem_sf("Windows zip packages (No installer needed)",
                  "$vlc_version/win32","vlc-$vlc_version-win32.zip","vlc", "",  "b9109d279bc667235ee0fd6c7b5ddf98" );
?>

<br />
  <h2>Windows 95/98/Me</h2>
  <p><a href="http://sourceforge.net/projects/kernelex/">Please install KernelEx</a> or take an old
  version of VLC</p>

  <h2>Older versions</h2>
  <?php browse_old("vlc") ?>

</div> <!-- LEFT -->

<div id="right">
  <h2>Source code</h2>

  <p>If you want, you can download the <a href="download-sources.html">source code</a> of VLC media player.</p>


</div> <!-- RIGHT -->

<?php footer('$Id$'); ?>
