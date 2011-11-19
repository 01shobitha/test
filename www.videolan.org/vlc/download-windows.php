<?php
   $title = "Download official VLC media player for Windows";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>


<?php function pkgitemdev($version,$name) { ?><li><a href="http://downloads.videolan.org/pub/videolan/testing/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a></li><?php } ?>

<h1 class="bigtitle"> VLC media player for Windows </h1>
<div id="left">

<?php $vlc_version = '1.1.11'; ?>
<h1>Download latest VLC - <?php echo $vlc_version; ?></h2>
<p>VLC currently supports <b>Windows 2000 (SP4+UR1), XP, Vista and 7</b>.</p>

<?php
    pkgitem_sf("Installer package",
                   "$vlc_version/win32","vlc-$vlc_version-win32.exe","vlc", "Exe installer",         "11b9f1e66ee67f0c765c5895a99755dd") ;
    pkgitem_sf("7zip package",
                  "$vlc_version/win32","vlc-$vlc_version-win32.7z",  "vlc", "(No installer needed)", "80f02f05015d6eb2efeaa7a7b6b532b7" );
    pkgitem_sf("Zip package",
                  "$vlc_version/win32","vlc-$vlc_version-win32.zip", "vlc", "(No installer needed)", "9dc2647f5694f3fb331dc1bccd921cf7" );
?>

   <div class="clearme"> </div>
<h1>Download latest VLC source code</h2>

<p>If you want, you can download the <a href="download-sources.html">source code</a> of VLC media player.</p>

<br />
<br />
<h2>Download VLC for Windows 95/98/Me</h1>
<p><a href="http://sourceforge.net/projects/kernelex/">Please install KernelEx</a> or take an old
version of VLC</p>

<h2>Older versions</h2>
<?php browse_old("vlc") ?>

</div>

<?php footer('$Id$'); ?>
