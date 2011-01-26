<?php
   $title = "VLC media player for Windows";
   $lang = "en";
   $menu = array( "vlc", "windows" );
   $additional_css = array("/countries.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>


<?php function pkgitemdev($version,$name) { ?><li><a href="http://downloads.videolan.org/pub/videolan/testing/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a></li><?php } ?>

<h1 class="bigtitle"> VLC media player for Windows </h1>
<div id="left">

<p>All mirrors include all the available languages.</p>

<?php $vlc_version = '1.1.6'; ?>
  <h2>Latest version - <?php echo $vlc_version; ?></h2>
<p>This release only supports Windows 2000 (SP4+UR1), XP, Vista and 7. </p>

<?php
    pkgitem_sf( "Windows self-extracting package",
                   "$vlc_version/win32","vlc-$vlc_version-win32.exe","vlc", "", "b8f68f4af38638f846b437a26bad688e") ;
    pkgitem_sf("Windows 7zip (No installer needed)",
                  "$vlc_version/win32","vlc-$vlc_version-win32.7z","vlc", "",   "866419ecc4ae1b69efdbbf6cf46ebf59" );
    pkgitem_sf("Windows zip packages (No installer needed)",
                  "$vlc_version/win32","vlc-$vlc_version-win32.zip","vlc", "",  "0bfdee5e5cc460d21bc4bac9f5992adf" );
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
