<?php
   $title = "VLC - screenshots";
   $lang = "en";
   $menu = array( "vlc", "screenshots" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

function screenshot($img,$thumb,$desc,$size){
echo"    <div class=\"screenshot\"><a href='http://images.videolan.org/vlc/screenshots/$img'><img
    src='http://images.videolan.org/vlc/screenshots/$thumb' alt='$desc' width='150' /></a>
    <br />  $desc<br />($size) </div>";
}
?>

<h1> VLC screenshots </h1>

<div id="fullwidth" >


<h2 class="clearme">Latest screenshots 0.9.2</h2>

<?php
screenshot( "0.9.2/qt-albumart.jpg",
            "0.9.2/tm_qt-albumart.jpg",
            "VLC media player on GNU/Linux Debian - Gnome - Qt interface and album art", "1280x800" );
screenshot( "0.9.2/qt-fullscreen.jpg",
            "0.9.2/tm_qt-fullscreen.jpg",
            "VLC media player on GNU/Linux Debian - Gnome - Qt fullscreen controller", "1042x794" );
screenshot( "0.9.2/qt-info.jpg",
            "0.9.2/tm_qt-info.jpg",
            "VLC media player on GNU/Linux Debian - KDE 3 - Qt interface and compiz", "1280x800" );
screenshot( "0.9.2/screenshot-kde4.jpg",
            "0.9.2/tm_screenshot-kde4.jpg",
            "VLC media player on Arch Linux - KDE 4 - Qt interface, album art and simple preferences", "1680x1050" );
?>
<p class="clearme"></p>
<?php
screenshot( "0.9.2/fullscreen_1.jpg",
            "0.9.2/tm_fullscreen_1.jpg",
            "VLC media player on Windows XP - Qt fullscreen interface", "1280x800" );
screenshot( "0.9.2/fullscreen_osd_4.jpg",
            "0.9.2/tm_fullscreen_osd_4.jpg",
            "VLC media player on Windows XP - Qt fullscreen controller", "1280x800" );
screenshot( "0.9.2/vista_colorthreshold.jpg",
            "0.9.2/tm_vista_colorthreshold.jpg",
            "VLC media player on Windows Vista - Qt interface and filters", "1280x1024" );
screenshot( "0.9.2/osx-0.9.2-ASS-softsubs.jpg",
            "0.9.2/tm_osx-0.9.2-ASS-softsubs.jpg",
            "VLC media player on Mac OS X 10.5.4 - Substation Alpha subtitle rendering in matroska files", "1680x1050" );
?>
<p class="clearme"></p>
<?php
screenshot( "0.9.2/osx-0.9.2-equalizer.jpg",
            "0.9.2/tm_osx-0.9.2-equalizer.jpg",
            "VLC media player on Mac OS X 10.5.4 - Equalizer, folded controller  and Dirac encoded video", "958x473" );
screenshot( "0.9.2/osx-0.9.2-goom-albumart-tag.jpg",
            "0.9.2/tm_osx-0.9.2-goom-albumart-tag.jpg",
            "VLC media player on Mac OS X 10.5.4 - MP3 tag editing and Goom visualization", "978x693" );
screenshot( "0.9.2/osx-0.9.2-prefs.jpg",
            "0.9.2/tm_osx-0.9.2-prefs.jpg",
            "VLC media player on Mac OS X 10.5.4 - Video section of the simplified Preferences", "650x568" );
screenshot( "0.9.2/osx-0.9.2-gradient.jpg",
            "0.9.2/tm_osx-0.9.2-gradient.jpg",
            "VLC media player on Mac OS X 10.5.4 - Video filter panel with the Gradient filter applied", "909x564" );
?>
<p class="clearme"></p>
<?php
screenshot( "0.9.2/osx-0.9.2-inverted.jpg",
            "0.9.2/tm_osx-0.9.2-inverted.jpg",
            "VLC media player on Mac OS X 10.5.4 - Image adjust panel with the Inverted colors-filter applied", "866x572" );
screenshot( "0.9.2/osx-0.9.2-teletext.jpg",
            "0.9.2/tm_osx-0.9.2-teletext.jpg",
            "VLC media player on Mac OS X 10.5.4 - Teletext presentation on EyeTV captured Digital Terrestial television signal", "1004x705" );
?>

<h2 class="clearme">0.8.6</h2>
<?php
screenshot( "0.8.6/VLC-0.8.6-beryl.jpg",
	    "0.8.6/tm_VLC-0.8.6-beryl.jpg",
	    "VLC media player on GNU/Linux Debian - Beryl", "1680x1050" );

screenshot( "0.8.6/VLC-0.8.6-beryl-ubuntu.jpg",
	    "0.8.6/tm_VLC-0.8.6-beryl-ubuntu.jpg",
	    "VLC media player on GNU/Linux Ubuntu - Beryl", "1024x768" );

screenshot( "0.8.6/VLC-mac-Fullscreen.jpg",
	    "0.8.6/tm_VLC-mac-Fullscreen.jpg",
	    "VLC media player on Mac OS X - FullScreen Controller", "1280x800" );

?>


<h2 class="clearme">0.8.5</h2>

<?php
screenshot( "0.8.5/VLC-screenshot-0.8.5.JPG",
            "0.8.5/tm_VLC-screenshot-0.8.5.JPG",
            "VLC media player using Skins2 - Blista skin","1280x1024" );
screenshot( "0.8.5/VLC-default-skin.jpg",
            "0.8.5/tm_VLC-default-skin.jpg",
            "VLC media player using Skins2 - New default skin", "1024x768" );
?>
<h2 class="clearme">0.8.4</h2>

<?php
screenshot( "0.8.4/vista_screenshot.png",
            "0.8.4/tm_vista_screenshot.png",
            "VLC media player on Windows Vista Beta 1","1280x1024" );
screenshot( "0.8.4/zeta_R1.1.jpg",
            "0.8.4/tm_zeta_R1.1.jpg",
            "VLC media player on ZetaOS R1.1", "1280x1024" );
?>

<h2 class="clearme">0.8.2</h2>

<?php
screenshot( "0.8.2/linux-wxwin-playlist.png",
            "0.8.2/tm_linux-wxwin-playlist.png",
            "VLC media player on Linux - Playlist", "1280x1024" );
screenshot( "0.8.2/linux-wxwin-prefs.png",
            "0.8.2/tm_linux-wxwin-prefs.png",
            "VLC media player on Linux - Preferences", "1280x1024" );
screenshot( "0.8.2/linux-skins2-MediaPlayer.jpg",
            "0.8.2/tm_linux-skins2-MediaPlayer.jpg",
            "VLC media player using Skins - Media Player skin", "1024x768" );
screenshot( "0.8.2/linux-wxwin-mosaic.jpg",
            "0.8.2/tm_linux-wxwin-mosaic.jpg",
            "VLC media player using Mosaïc" , "1024x768" );
?>
<p class="clearme"></p>
<?php
screenshot( "0.8.2/windows-wxwin-hdtv.png",
            "0.8.2/tm_windows-wxwin-hdtv.png",
            "VLC media player on Windows - HD TV", "1280x1024" );
screenshot( "0.8.2/windows-wxwin-playlist.png",
            "0.8.2/tm_windows-wxwin-playlist.png",
            "VLC media player on Windows - Playlist", "1280x1024" );
screenshot( "0.8.2/macosx-mp3.jpg",
            "0.8.2/tm_macosx-mp3.jpg",
            "VLC media player on Mac OS X - Playlist", "1024x768") ;
screenshot( "0.8.2/macosx-serenity.jpg",
            "0.8.2/tm_macosx-serenity.jpg",
            "VLC media player on Mac OS X - Video","1024x768" );
?>
<p class="clearme"></p>
<?php 
screenshot( "0.8.2/linux-wxwin-all.png",
            "0.8.2/tm_linux-wxwin-all.png",
            "VLC media player on Linux", "1280x1024" );
screenshot( "0.8.2/neutron-osx-screenshot.jpg",
            "0.8.2/tm_neutron-osx-screenshot.jpg",
            "VLC media player on Mac OS X - Video","1024x768" );
screenshot( "0.8.2/zeta_R1_Screenie.jpg",
            "0.8.2/tm_zeta_R1_Screenie.jpg",
            "VLC media player on Zeta (BeOS) - Video", "1280x1024" );
?>

<h2 class="clearme">0.7.2</h2>

<?php
screenshot( "20040531-osx-1.jpg",
            "tn_20040531-osx-1.jpg",
            "VLC media player on Mac OS X", "1280x960" );
screenshot( "20040531-osx-2.jpg",
            "tn_20040531-osx-2.jpg",
            "VLC media player on Mac OS X", "1024x768" );
screenshot( "20040531-linux-1.jpg",
            "tn_20040531-linux-1.jpg",
            "VLC media player using wxGTK on Linux", "1280x960");
screenshot( "20040531-linux-2.jpg",
            "tn_20040531-linux-2.jpg",
            "VLC media player using wxGTK on Linux", "1280x960" );
?>
<p class="clearme"></p>
<?php
screenshot( "20040601-linux-wx-subs.jpg",
            "tn_20040601-linux-wx-subs.jpg",
            "VLC media player on Linux (UTF8 subtitles)", "1152x864" );
screenshot( "20040601-linux-skins2-6.jpg",
            "tn_20040601-linux-skins2-6.jpg",
            "VLC media player on Linux - Skins2", "1280x1024" );
screenshot( "20040601-windows-skins2-1.jpg",
            "tn_20040601-windows-skins2-1.jpg",
            "VLC media player on Windows - Skins2", "1280x1024" );
screenshot( "20040602-windows-wxembed-2.jpg",
            "tn_20040602-windows-wxembed-2.jpg",
            "VLC media player on Windows - WxWidgets", "1280x1024" );
?>
<p class="clearme"></p>
<?php
screenshot( "20040602-windows-wxembed-4.jpg",
            "tn_20040602-windows-wxembed-4.jpg",
            "VLC media player on Windows with Goom", "1280x1024" );
screenshot( "20040602-windows-wxembed-5.jpg",
            "tn_20040602-windows-wxembed-5.jpg",
            "VLC media player on Windows with Goom", "1280x1024" );
screenshot( "20040602-beos-1.png",
            "tn_20040602-beos-1.png",
            "VLC media player on BeOS", "800x550" );
screenshot( "20040602-beos-2.png",
            "tn_20040602-beos-2.png",
            "VLC media player on BeOS", "1072x766" );
?>

<h2 class="clearme">0.7.0</h2>

<?php
screenshot( "20040110-osx-00.jpg",
            "tn_20040110-osx-00.jpg",
            "VLC media player on MacOS X","1051x651" );
screenshot( "20040303-osx-00.jpg",
            "tn_20040303-osx-00.jpg",
            "VLC media player on MacOS X","1024x768" );
?>

<h2 class="clearme">VLC for Familiar Linux screenshots</h2>

<?php
screenshot( "familiar20021121-02.png",
            "familiar20021121-02.png",
            "iPaq", "" );
screenshot( "familiar20021121-00.png",
            "familiar20021121-00.png",
            "iPaq Familiar interface", "" );
screenshot( "familiar20021121-04.png",
            "familiar20021121-04.png",
            "iPaq Familiar interface", "" );
?>

<h2 class="clearme">Old screenshots</h2>

<h3>VLC 0.6.1</h3>

<?php
screenshot( "20030731-wxgtk-00.png",
            "tn_20030731-wxgtk-00.jpg",
            "VLC media player using wxWindows on Linux","1024x768" );
screenshot( "20030731-wxgtk-01.png",
            "tn_20030731-wxgtk-01.jpg",
            "VLC media player using wxWindows on Linux", "1024x768" );
screenshot( "20030731-wxgtk-02.png",
            "tn_20030731-wxgtk-02.jpg",
            "VLC media player using wxWindows on Linux", "1024x768" );
screenshot( "20030731-wxgtk-03.png",
            "tn_20030731-wxgtk-03.jpg",
            "VLC media player using wxWindows on Linux", "1024x768" );
?>
<p class="clearme"></p>
<?php
screenshot( "20030810-beos.jpg",
            "tn_20030810-beos.jpg",
            "VLC media player on BeOS", "1280x1024" );
?>

<h3 class="clearme">VLC 0.5.0</h3>

<?php
screenshot( "20030228-gnome-01.png",
            "tn_20030228-gnome-01.jpg",
            "VLC media player on Gnome", "1024x768" );
screenshot( "20030228-gnome-02.png",
            "tn_20030228-gnome-02.jpg",
            "VLC media player on Gnome", "1024x768" );
screenshot( "20030228-gnome-03.png",
            "tn_20030228-gnome-03.jpg",
            "VLC media player on Gnome", "1024x768" );
screenshot( "20030202-win32-01.png",
            "tn_20030202-win32-01.jpg",
            "VLC media player on Windows", "1024x768" );
?>
<p class="clearme"> </p>
<?php
screenshot( "20030202-osx-00.jpg",
            "tn_20030202-osx-00.jpg",
            "VLC media player on Mac OS X","1152x768" );
screenshot( "20030202-osx-01.jpg",
            "tn_20030202-osx-01.jpg",
            "VLC media player on Mac OS X", "1152x768" );
screenshot( "20030202-osx-02.jpg",
            "tn_20030202-osx-02.jpg",
            "VLC media player on Mac OS X",  "1152x768" );
screenshot( "20030202-osx-03.jpg",
            "tn_20030202-osx-03.jpg",
            "VLC media player on Mac OS X", "1152x768" );
?>
<p class="clearme"> </p>
<?php
screenshot( "20030202-osx-04.jpg",
            "tn_20030202-osx-04.jpg",
            "VLC media player on Mac OS X", "1152x768" );
screenshot( "20030202-osx-05.jpg",
            "tn_20030202-osx-05.jpg",
            "VLC media player on Mac OS X", "1152x768" );
?>


<h3 class="clearme">VLC 0.3.0</h3>

<?php
screenshot( "20020406-00.jpeg",
            "tn_20020406-00.jpeg",
            "VLC media player on Gnome", "1024x768" );
screenshot( "20020406-01.jpeg",
            "tn_20020406-01.jpeg",
            "VLC media player on Gnome","1024x768" );
screenshot( "20020406-02.jpeg",
            "tn_20020406-02.jpeg",
            "VLC media player on Gnome","1024x768" );
screenshot( "20020411-00.jpeg",
            "tn_20020411-00.jpeg",
            "VLC media player on Mac OS X", "1152x768" );
?>
<p class="clearme"> </p>
<?php
screenshot( "20020424-00.jpeg",
            "tn_20020424-00.jpeg",
            "VLC media player on Windows", "1024x768" );
?>

<h3 class="clearme">VLC 0.2.x</h3>

<p> The first screenshot shows the <b>Gnome</b> interface in DVD mode,
with the context menu in the movie window for chapter and language
selection. The second one shows the similar <b>Gtk+</b> interface, then
we have a preview of the work-in-progress <b>Qt</b> interface, and
eventually a <b>BeOS</b> screenshot. </p>

<?php
screenshot( "20010409-00.png",
            "tn_20010409-00.jpeg",
            "VLC media player on Gnome", "1024x768" );
screenshot( "20010409-01.png",
            "tn_20010409-01.jpeg",
            "VLC media player using Gtk+", "1024x768" );
screenshot( "20010409-02.png",
            "tn_20010409-02.jpeg",
            "VLC media player using Qt", "1024x768" );
screenshot( "20010412-00.png",
            "tn_20010412-00.jpeg",
            "VLC media player on BeOS", "1152x864" );
?>

<p class="clearme"> Here is a screenshot of the 0.2.60 version showing
the Gnome interface playing an <b>MPEG-1</b> stream, a screenshot of VLC
version 0.6 running across two screens in <b>Xinerama</b> mode, a <b>256
colors</b> screenshot to show the <code>vlc</code>'s dithering routines
in 8 bpp, and an example of its <b>scaling</b> capabilities. </p>

<p> And there is the necessary <b>babe</b>. The last
screenshot is merely a joke, to show how we compare with <a
href="http://web.archive.org/web/20010223201058/www.linuxvideo.org/oms/"><code>OMS</code></a> from our
friends at <a href="http://web.archive.org/web/20070708085735/http://linuxvideo.org/">linuxvideo.org</a>.
They have a similar screenshot <a
href="http://web.archive.org/web/20010603101909/www.linuxvideo.org/oms/oms-screenshotbig.jpeg">here</a>. (Note: Pages from <a href="http://www.archive.org/index.php">Archive.org</a>'s WayBackMachine.)
</p>

<?php
screenshot( "20010214-00.png",
            "tn_20010214-00.jpeg",
            "VLC media player playing MPEG-1", "1024x768" );
screenshot( "20010215-00.jpeg",
            "tn_20010215-00.jpeg",
            "VLC media player using Xinerama", "2560x1024" );
screenshot( "20000708-00.png",
            "tn_20000708-00.jpeg",
            "VLC media player - Dithering" ,"686x512" );
screenshot( "20000624-00.png",
            "tn_20000624-00.jpeg",
            "VLC media player - Scaling", "1600x1200" );
?>
<p class="clearme"> </p>
<?php
screenshot( "20000529-00.jpeg",
            "tn_20000529-00.jpeg",
            "The babe", "1152x864");
?>

<h2 class="clearme">Very old screenshots</h2>

<p> For very old screenshots, you can <a href="/vlc/screenshots/">browse</a>
the screenshot directory. </p>

</div>

<?php footer('$Id$'); ?>
