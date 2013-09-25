<?php
   $language = "";
   $title = "Download official VLC media player for Windows";
   $alternate_lang = array( "an", "ast", "bn_IN", "bs", "cs", "da", "de", "en", "es", "et", "fr", "gd", "gl", "gu", "he", "hi", "hr", "is", "it", "ja", "km", "kn", "mr", "my", "nb", "nl", "or", "pl", "pt", "pt_BR", "ru", "sk", "sr", "th", "tr", "uk", "ur", "wa", "zh" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>


<?php function pkgitemdev($version,$name) { ?><li><a href="http://downloads.videolan.org/pub/videolan/testing/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a></li><?php } ?>

<h1 class="bigtitle"> VLC media player for Windows </h1>
<div id="sidebar">
<?php panel_start( "blue" ); ?>
<h2>Windows version</h2>
<p>Windows XP SP2, 2003 SP2, Vista SP1, 2008 SP1, 7 and 8</p>
<?php panel_end(); ?>
</div>
<div id="left">

<?php $vlc_version = '2.1.0'; ?>
<h1>Download latest VLC - <?php echo $vlc_version; ?></h2>
<p>VLC currently supports <b>Windows XP SP2 or later</b>.</p>
<?php
    pkgitem_sf("Installer package",
                   "$vlc_version/win32","vlc-$vlc_version-win32.exe","vlc", "Exe installer",         "e563a65baea25cef8f49fb0228cb8555") ;
    pkgitem_sf("7zip package",
                  "$vlc_version/win32","vlc-$vlc_version-win32.7z",  "vlc", "(No installer needed)", "2ca6ca11ef2a8ac102702dc673eb8d01" );
    pkgitem_sf("Zip package",
                  "$vlc_version/win32","vlc-$vlc_version-win32.zip", "vlc", "(No installer needed)", "3386854def844b62f19a88aed920c431" );
?>

<div class="clearme"> </div>
<h1>Download latest VLC source code</h2>

<p>If you want, you can download the <a href="download-sources.html">source code</a> of VLC media player.</p>

<br />
<br />
<h2>Download VLC for Windows x64</h1>
<p><a href="http://download.videolan.org/pub/videolan/vlc/last/win64/">VLC 64bits</a> version for Windows 64 bits.</p>

<br />
<br />
<h2>Download VLC for Windows 95/98/Me</h1>
<p><a href="http://sourceforge.net/projects/kernelex/">Please install KernelEx</a> or take an old
version of VLC</p>

<h2>Older versions</h2>
<?php browse_old("vlc") ?>

</div>

<?php footer('$Id$'); ?>
