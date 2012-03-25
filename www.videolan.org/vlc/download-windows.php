<?php
   $title = "Download official VLC media player for Windows";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>


<?php function pkgitemdev($version,$name) { ?><li><a href="http://downloads.videolan.org/pub/videolan/testing/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a></li><?php } ?>

<h1 class="bigtitle"> VLC media player for Windows </h1>
<div id="left">

<?php $vlc_version = '2.0.1'; ?>
<h1>Download latest VLC - <?php echo $vlc_version; ?></h2>
<p>VLC currently supports <b>Windows XP SP2, Vista and 7</b>.</p>

<?php
    pkgitem_sf("Installer package",
                   "$vlc_version/win32","vlc-$vlc_version-win32.exe","vlc", "Exe installer",         "2e43371c02c0d900bdd63d916500d5eb") ;
    pkgitem_sf("7zip package",
                  "$vlc_version/win32","vlc-$vlc_version-win32.7z",  "vlc", "(No installer needed)", "011b1630e98e1cb313cdaeec6ade85af" );
    pkgitem_sf("Zip package",
                  "$vlc_version/win32","vlc-$vlc_version-win32.zip", "vlc", "(No installer needed)", "3df254e74be6479917d0763671a93fdb" );
?>

   <div class="clearme"> </div>
<h1>Download latest VLC source code</h2>

<p>If you want, you can download the <a href="download-sources.html">source code</a> of VLC media player.</p>

<br />
<br />
<h2>Download VLC for Windows x64</h1>
<p><a href="http://download.videolan.org/pub/videolan/vlc/last/win64/">Experimental</a> version for Windows 64 bits.</p>

<br />
<br />
<h2>Download VLC for Windows 95/98/Me</h1>
<p><a href="http://sourceforge.net/projects/kernelex/">Please install KernelEx</a> or take an old
version of VLC</p>

<h2>Older versions</h2>
<?php browse_old("vlc") ?>

</div>

<?php footer('$Id$'); ?>
