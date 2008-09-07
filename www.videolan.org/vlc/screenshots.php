<?php
   $title = "VLC - screenshots";
   $lang = "en";
   $date = "14 February 2001";
   $menu = array( "vlc", "screenshots" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

function screenshot($img,$thumb,$desc,$size){
echo"    <div class=\"screenshot\"><a href='http://download.videolan.org$img'><img
    src='http://download.videolan.org$thumb' alt='$desc' width='150' /></a>
    <br />  $desc<br />($size) </div>";
}
?>

<h1> VLC screenshots </h1>

<div id="fullwidth" >


<h2>Latest screenshots 0.9.2</h2>

<?php
screenshot( "/vlc/screenshots/0.9.2/qt-albumart.jpg",
            "/vlc/screenshots/0.9.2/tm_qt-albumart.jpg",
            "GNU/Linux Debian - Qt interface and album art", "1280x800" );
screenshot( "/vlc/screenshots/0.9.2/qt-fullscreen.jpg",
            "/vlc/screenshots/0.9.2/tm_qt-fullscreen.jpg",
            "GNU/Linux Debian - Qt fullscreen interface", "1042x794" );
?>

<h2>0.8.6</h2>
<?php
screenshot( "/vlc/screenshots/0.8.6/VLC-0.8.6-beryl.jpg",
	    "/vlc/screenshots/0.8.6/tm_VLC-0.8.6-beryl.jpg",
	    "GNU/Linux Debian - Beryl", "1680x1050" );

screenshot( "/vlc/screenshots/0.8.6/VLC-0.8.6-beryl-ubuntu.jpg",
	    "/vlc/screenshots/0.8.6/tm_VLC-0.8.6-beryl-ubuntu.jpg",
	    "GNU/Linux Ubuntu - Beryl", "1024x768" );

screenshot( "/vlc/screenshots/0.8.6/VLC-mac-Fullscreen.jpg",
	    "/vlc/screenshots/0.8.6/tm_VLC-mac-Fullscreen.jpg",
	    "Mac OS X - FullScreen Controller", "1280x800" );

?>


<h2 class="clearme">0.8.5</h2>

<?php
screenshot( "/vlc/screenshots/0.8.5/VLC-screenshot-0.8.5.JPG",
            "/vlc/screenshots/0.8.5/tm_VLC-screenshot-0.8.5.JPG",
            "Skins2 - Blista skin","1280x1024" );
screenshot( "/vlc/screenshots/0.8.5/VLC-default-skin.jpg",
            "/vlc/screenshots/0.8.5/tm_VLC-default-skin.jpg",
            "Skins2 - New default skin", "1024x768" );
?>
<h2 class="clearme">0.8.4</h2>

<?php
screenshot( "/vlc/screenshots/0.8.4/vista_screenshot.png",
            "/vlc/screenshots/0.8.4/tm_vista_screenshot.png",
            "Windows Vista Beta 1","1280x1024" );
screenshot( "/vlc/screenshots/0.8.4/zeta_R1.1.jpg",
            "/vlc/screenshots/0.8.4/tm_zeta_R1.1.jpg",
            "ZetaOS R1.1", "1280x1024" );
?>

<h2 class="clearme">0.8.2</h2>

<?php
screenshot( "/vlc/screenshots/0.8.2/linux-wxwin-playlist.png",
            "/vlc/screenshots/0.8.2/tm_linux-wxwin-playlist.png",
            "Linux - Playlist", "1280x1024" );
screenshot( "/vlc/screenshots/0.8.2/linux-wxwin-prefs.png",
            "/vlc/screenshots/0.8.2/tm_linux-wxwin-prefs.png",
            "Linux - Preferences", "1280x1024" );
screenshot( "/vlc/screenshots/0.8.2/linux-skins2-MediaPlayer.jpg",
            "/vlc/screenshots/0.8.2/tm_linux-skins2-MediaPlayer.jpg",
            "Skins - Media Player skin", "1024x768" );
screenshot( "/vlc/screenshots/0.8.2/linux-wxwin-mosaic.jpg",
            "/vlc/screenshots/0.8.2/tm_linux-wxwin-mosaic.jpg",
            "Mosaïc" , "1024x768" );
?>
<p class="clearme"></p>
<?php
screenshot( "/vlc/screenshots/0.8.2/windows-wxwin-hdtv.png",
            "/vlc/screenshots/0.8.2/tm_windows-wxwin-hdtv.png",
            "Windows - HD TV", "1280x1024" );
screenshot( "/vlc/screenshots/0.8.2/windows-wxwin-playlist.png",
            "/vlc/screenshots/0.8.2/tm_windows-wxwin-playlist.png",
            "Windows - Playlist", "1280x1024" );
screenshot( "/vlc/screenshots/0.8.2/macosx-mp3.jpg",
            "/vlc/screenshots/0.8.2/tm_macosx-mp3.jpg",
            "Mac OS X - Playlist", "1024x768") ;
screenshot( "/vlc/screenshots/0.8.2/macosx-serenity.jpg",
            "/vlc/screenshots/0.8.2/tm_macosx-serenity.jpg",
            "Mac OS X - Video","1024x768" );
?>
<p class="clearme"></p>
<?php 
screenshot( "/vlc/screenshots/0.8.2/linux-wxwin-all.png",
            "/vlc/screenshots/0.8.2/tm_linux-wxwin-all.png",
            "Linux", "1280x1024" );
screenshot( "/vlc/screenshots/0.8.2/neutron-osx-screenshot.jpg",
            "/vlc/screenshots/0.8.2/tm_neutron-osx-screenshot.jpg",
            "Mac OS X - Video","1024x768" );
screenshot( "/vlc/screenshots/0.8.2/zeta_R1_Screenie.jpg",
            "/vlc/screenshots/0.8.2/tm_zeta_R1_Screenie.jpg",
            "Zeta (BeOS) - Video", "1280x1024" );
?>

<h2 class="clearme">0.7.2</h2>

<?php
screenshot( "/vlc/screenshots/20040531-osx-1.jpg",
            "/vlc/screenshots/tn_20040531-osx-1.jpg",
            "Mac OS X", "1280x960" );
screenshot( "/vlc/screenshots/20040531-osx-2.jpg",
            "/vlc/screenshots/tn_20040531-osx-2.jpg",
            "Mac OS X", "1024x768" );
screenshot( "/vlc/screenshots/20040531-linux-1.jpg",
            "/vlc/screenshots/tn_20040531-linux-1.jpg",
            "wxGTK Linux", "1280x960");
screenshot( "/vlc/screenshots/20040531-linux-2.jpg",
            "/vlc/screenshots/tn_20040531-linux-2.jpg",
            "wxGTK Linux", "1280x960" );
?>
<p class="clearme"></p>
<?php
screenshot( "/vlc/screenshots/20040601-linux-wx-subs.jpg",
            "/vlc/screenshots/tn_20040601-linux-wx-subs.jpg",
            "Linux (UTF8 subtitles)", "1152x864" );
screenshot( "/vlc/screenshots/20040601-linux-skins2-6.jpg",
            "/vlc/screenshots/tn_20040601-linux-skins2-6.jpg",
            "Linux Skins2", "1280x1024" );
screenshot( "/vlc/screenshots/20040601-windows-skins2-1.jpg",
            "/vlc/screenshots/tn_20040601-windows-skins2-1.jpg",
            "Windows Skins2", "1280x1024" );
screenshot( "/vlc/screenshots/20040602-windows-wxembed-2.jpg",
            "/vlc/screenshots/tn_20040602-windows-wxembed-2.jpg",
            "Windows WxWidgets", "1280x1024" );
?>
<p class="clearme"></p>
<?php
screenshot( "/vlc/screenshots/20040602-windows-wxembed-4.jpg",
            "/vlc/screenshots/tn_20040602-windows-wxembed-4.jpg",
            "Windows with Goom", "1280x1024" );
screenshot( "/vlc/screenshots/20040602-windows-wxembed-5.jpg",
            "/vlc/screenshots/tn_20040602-windows-wxembed-5.jpg",
            "Windows with Goom", "1280x1024" );
screenshot( "/vlc/screenshots/20040602-beos-1.png",
            "/vlc/screenshots/tn_20040602-beos-1.png",
            "BeOS", "800x550" );
screenshot( "/vlc/screenshots/20040602-beos-2.png",
            "/vlc/screenshots/tn_20040602-beos-2.png",
            "BeOS", "1072x766" );
?>

<h2 class="clearme">0.7.0</h2>

<?php
screenshot( "/vlc/screenshots/20040110-osx-00.jpg",
            "/vlc/screenshots/tn_20040110-osx-00.jpg",
            "MacOS X","1051x651" );
screenshot( "/vlc/screenshots/20040303-osx-00.jpg",
            "/vlc/screenshots/tn_20040303-osx-00.jpg",
            "MacOS X","1024x768" );
?>

<h2 class="clearme">VLC for Familiar Linux screenshots</h2>

<?php
screenshot( "/screenshots/familiar20021121-02.png",
            "/screenshots/familiar20021121-02.png",
            "iPaq", "" );
screenshot( "/screenshots/familiar20021121-00.png",
            "/screenshots/familiar20021121-00.png",
            "iPaq Familiar interface", "" );
screenshot( "/screenshots/familiar20021121-04.png",
            "/screenshots/familiar20021121-04.png",
            "iPaq Familiar interface", "" );
?>

<h2 class="clearme">Old screenshots</h2>

<h3>VLC 0.6.1</h3>

<?php
screenshot( "/vlc/screenshots/20030731-wxgtk-00.png",
            "/vlc/screenshots/tn_20030731-wxgtk-00.jpg",
            "wxWindows Linux","1024x768" );
screenshot( "/vlc/screenshots/20030731-wxgtk-01.png",
            "/vlc/screenshots/tn_20030731-wxgtk-01.jpg",
            "wxWindows Linux", "1024x768" );
screenshot( "/vlc/screenshots/20030731-wxgtk-02.png",
            "/vlc/screenshots/tn_20030731-wxgtk-02.jpg",
            "wxWindows Linux", "1024x768" );
screenshot( "/vlc/screenshots/20030731-wxgtk-03.png",
            "/vlc/screenshots/tn_20030731-wxgtk-03.jpg",
            "wxWindows Linux", "1024x768" );
?>
<p class="clearme"></p>
<?php
screenshot( "/vlc/screenshots/20030810-beos.jpg",
            "/vlc/screenshots/tn_20030810-beos.jpg",
            "BeOS", "1280x1024" );
?>

<h3 class="clearme">VLC 0.5.0</h3>

<?php
screenshot( "/vlc/screenshots/20030228-gnome-01.png",
            "/vlc/screenshots/tn_20030228-gnome-01.jpg",
            "Gnome screenshot", "1024x768" );
screenshot( "/vlc/screenshots/20030228-gnome-02.png",
            "/vlc/screenshots/tn_20030228-gnome-02.jpg",
            "Gnome screenshot", "1024x768" );
screenshot( "/vlc/screenshots/20030228-gnome-03.png",
            "/vlc/screenshots/tn_20030228-gnome-03.jpg",
            "Gnome screenshot", "1024x768" );
screenshot( "/vlc/screenshots/20030202-win32-01.png",
            "/vlc/screenshots/tn_20030202-win32-01.jpg",
            "Windows screenshot", "1024x768" );
?>
<p class="clearme"> </p>
<?php
screenshot( "/vlc/screenshots/20030202-osx-00.jpg",
            "/vlc/screenshots/tn_20030202-osx-00.jpg",
            "Mac OS X screenshot","1152x768" );
screenshot( "/vlc/screenshots/20030202-osx-01.jpg",
            "/vlc/screenshots/tn_20030202-osx-01.jpg",
            "Mac OS X screenshot", "1152x768" );
screenshot( "/vlc/screenshots/20030202-osx-02.jpg",
            "/vlc/screenshots/tn_20030202-osx-02.jpg",
            "Mac OS X screenshot",  "1152x768" );
screenshot( "/vlc/screenshots/20030202-osx-03.jpg",
            "/vlc/screenshots/tn_20030202-osx-03.jpg",
            "Mac OS X screenshot", "1152x768" );
?>
<p class="clearme"> </p>
<?php
screenshot( "/vlc/screenshots/20030202-osx-04.jpg",
            "/vlc/screenshots/tn_20030202-osx-04.jpg",
            "Mac OS X screenshot", "1152x768" );
screenshot( "/vlc/screenshots/20030202-osx-05.jpg",
            "/vlc/screenshots/tn_20030202-osx-05.jpg",
            "Mac OS X screenshot", "1152x768" );
?>


<h3 class="clearme">VLC 0.3.0</h3>

<?php
screenshot( "/vlc/screenshots/20020406-00.jpeg",
            "/vlc/screenshots/tn_20020406-00.jpeg",
            "Gnome screenshot","1024x768" );
screenshot( "/vlc/screenshots/20020406-01.jpeg",
            "/vlc/screenshots/tn_20020406-01.jpeg",
            "Gnome screenshot","1024x768" );
screenshot( "/vlc/screenshots/20020406-02.jpeg",
            "/vlc/screenshots/tn_20020406-02.jpeg",
            "Gnome screenshot","1024x768" );
screenshot( "/vlc/screenshots/20020411-00.jpeg",
            "/vlc/screenshots/tn_20020411-00.jpeg",
            "Mac OS X screenshot", "1152x768" );
?>
<p class="clearme"> </p>
<?php
screenshot( "/vlc/screenshots/20020424-00.jpeg",
            "/vlc/screenshots/tn_20020424-00.jpeg",
            "Windows screenshot", "1024x768" );
?>

<h3 class="clearme">VLC 0.2.x</h3>

<p> The first screenshot shows the <b>Gnome</b> interface in DVD mode,
with the context menu in the movie window for chapter and language
selection. The second one shows the similar <b>Gtk+</b> interface, then
we have a preview of the work-in-progress <b>Qt</b> interface, and
eventually a <b>BeOS</b> screenshot. </p>

<?php
screenshot( "/vlc/screenshots/20010409-00.png",
            "/vlc/screenshots/tn_20010409-00.jpeg",
            "Gnome screenshot", "1024x768" );
screenshot( "/vlc/screenshots/20010409-01.png",
            "/vlc/screenshots/tn_20010409-01.jpeg",
            "Gtk+ screenshot", "1024x768" );
screenshot( "/vlc/screenshots/20010409-02.png",
            "/vlc/screenshots/tn_20010409-02.jpeg",
            "Qt screenshot", "1024x768" );
screenshot( "/vlc/screenshots/20010412-00.png",
            "/vlc/screenshots/tn_20010412-00.jpeg",
            "BeOS screenshot", "1152x864" );
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
href="http://web.archive.org/web/20010603101909/www.linuxvideo.org/oms/oms-screenshotbig.jpeg">here</a>. (Note: Pages from <a href="http://http://www.archive.org/index.php">Archive.org</a>'s WayBackMachine.)
</p>

<?php
screenshot( "/vlc/screenshots/20010214-00.png",
            "/vlc/screenshots/tn_20010214-00.jpeg",
            "MPEG-1", "1024x768" );
screenshot( "/vlc/screenshots/20010215-00.jpeg",
            "/vlc/screenshots/tn_20010215-00.jpeg",
            "Xinerama", "2560x1024" );
screenshot( "/vlc/screenshots/20000708-00.png",
            "/vlc/screenshots/tn_20000708-00.jpeg",
            "Dithering" ,"686x512" );
screenshot( "/vlc/screenshots/20000624-00.png",
            "/vlc/screenshots/tn_20000624-00.jpeg",
            "Scaling", "1600x1200" );
?>
<p class="clearme"> </p>
<?php
screenshot( "/vlc/screenshots/20000529-00.jpeg",
            "/vlc/screenshots/tn_20000529-00.jpeg",
            "The babe", "1152x864");
?>

<h2 class="clearme">Very old screenshots</h2>

<p> For very old screenshots, you can <a href="/vlc/screenshots/">browse</a>
the screenshot directory. </p>

</div>

<?php footer('$Id$'); ?>
