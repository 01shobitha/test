<?php
   $language = "";
   $title = "Download official VLC media player for Windows";
   $alternate_lang = array( "fr", "ru", "en", "de", "tr", "cs", "hi", "he", "ja", "pl", "wa" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>


<?php function pkgitemdev($version,$name) { ?><li><a href="http://downloads.videolan.org/pub/videolan/testing/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a></li><?php } ?>

<h1 class="bigtitle"> VLC media player for Windows </h1>
<div class="clearme" style="padding-top: 26px; padding-bottom: 20px; width: 800px; height: 120px;">
    <a href="http://www.kickstarter.com/projects/1061646928/vlc-for-the-new-windows-8-user-experience-metro" target="_blank">
        <?php image( 'vlc-win8-banner.png', 'Banner for the Windows 8 fundraiser' ); ?>
    </a>
</div>
<div id="sidebar">
<?php panel_start( "blue" ); ?>
<h2>Windows version</h2>
<p>Windows XP SP2, 2003 SP2, Vista SP1, 2008 SP1, 7 and 8</p>
<?php panel_end(); ?>
</div>
<div id="left">

<?php $vlc_version = '2.0.4'; ?>
<h1>Download latest VLC - <?php echo $vlc_version; ?></h2>
<p>VLC currently supports <b>Windows XP SP2 or later</b>.</p>
<?php
    pkgitem_sf("Installer package",
                   "$vlc_version/win32","vlc-$vlc_version-win32.exe","vlc", "Exe installer",         "e03f2f24bca457a35e1e26732afe4a2f") ;
    pkgitem_sf("7zip package",
                  "$vlc_version/win32","vlc-$vlc_version-win32.7z",  "vlc", "(No installer needed)", "847c420643be12bc767731e94ddb9855" );
    pkgitem_sf("Zip package",
                  "$vlc_version/win32","vlc-$vlc_version-win32.zip", "vlc", "(No installer needed)", "abe55b0389c467f83eeaeab9895c842b" );
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
