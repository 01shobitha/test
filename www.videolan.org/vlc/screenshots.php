<?php
   $title = "VLC - screenshots";
   $lang = "en";
   $date = "14 February 2001";
   $menu = array( "vlc", "screenshots" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");

function screenshot($img,$thumb,$alt,$descr){
echo"    <td class='center'><a href='$img'><img
    src='$thumb'
    alt='$alt' width='150' /></a>
    <br />  $descr </td>";
}
?>

<h1> VLC screenshots </h1>

<h2>Latest screenshots (0.8.2)</h2>

<table cellspacing="5" cellpadding="5" border="0"><tbody><tr>
<?php
screenshot( "/vlc/screenshots/0.8.2/linux-wxwin-playlist.png",
            "/vlc/screenshots/0.8.2/tm_linux-wxwin-playlist.png",
            "wxWidgets playlist",
            "wxGTK Linux - Playlist (1280x1024)" );
screenshot( "/vlc/screenshots/0.8.2/linux-wxwin-prefs.png",
            "/vlc/screenshots/0.8.2/tm_linux-wxwin-prefs.png",
            "wxWidgets prefs",
            "wxGTK Linux - Preferences (1280x1024)" );
screenshot( "/vlc/screenshots/0.8.2/linux-skins2-MediaPlayer.jpg",
            "/vlc/screenshots/0.8.2/tm_linux-skins2-MediaPlayer.jpg",
            "Skins2 interface - Media Player skin",
            "Skins2 (1024x768)" );
screenshot( "/vlc/screenshots/0.8.2/linux-wxwin-mosaic.jpg",
            "/vlc/screenshots/0.8.2/tm_linux-wxwin-mosaic.jpg",
            "wxWidgets interface with mosaic",
            "wxGTK Linux - Mosaic (1024x768)" );
?>
<td></td></tr></tbody></table>

<table cellspacing="5" cellpadding="5" border="0"><tbody><tr>
<?php
screenshot( "/vlc/screenshots/0.8.2/linux-wxwin-all.png",
            "/vlc/screenshots/0.8.2/tm_linux-wxwin-all.png",
            "wxWidgets interface all windows opened",
            "wxGTK Linux (1280x1024)" );
?>
<td></td></tr></tbody></table>


<h2>0.7.2</h2>

<table cellspacing="5" cellpadding="5" border="0"><tbody><tr>
<?php
screenshot( "/vlc/screenshots/20040531-osx-1.jpg",
            "/vlc/screenshots/tn_20040531-osx-1.jpg",
            "Mac OS X",
            "Mac OS X (1280x960)" );
screenshot( "/vlc/screenshots/20040531-osx-2.jpg",
            "/vlc/screenshots/tn_20040531-osx-2.jpg",
            "Mac OS X",
            "Mac OS X (1024x768)" );
screenshot( "/vlc/screenshots/20040531-linux-1.jpg",
            "/vlc/screenshots/tn_20040531-linux-1.jpg",
            "wxGTK Linux",
            "wxGTK Linux (1280x960)" );
screenshot( "/vlc/screenshots/20040531-linux-2.jpg",
            "/vlc/screenshots/tn_20040531-linux-2.jpg",
            "wxGTK Linux",
            "wxGTK Linux (1280x960)" );
?>
</tr></tbody></table>

<table cellspacing="5" cellpadding="5" border="0"><tbody><tr>
<?php
screenshot( "/vlc/screenshots/20040601-linux-wx-subs.jpg",
            "/vlc/screenshots/tn_20040601-linux-wx-subs.jpg",
            "wxWindows Linux screenshot (UTF-8 subtitles)",
            "wxGTK Linux (1152x864)" );
screenshot( "/vlc/screenshots/20040601-linux-skins2-6.jpg",
            "/vlc/screenshots/tn_20040601-linux-skins2-6.jpg",
            "Linux Skins2 screenshot",
            "Skins2 Linux (1280x1024)" );
screenshot( "/vlc/screenshots/20040601-windows-skins2-1.jpg",
            "/vlc/screenshots/tn_20040601-windows-skins2-1.jpg",
            "Windows Skins2 screenshot",
            "Skins2 Windows (1280x1024)" );
screenshot( "/vlc/screenshots/20040602-windows-wxembed-2.jpg",
            "/vlc/screenshots/tn_20040602-windows-wxembed-2.jpg",
            "Windows WxWidgets embedded screenshot",
            "wxMSW Windows (1280x1024)" );
?>
</tr></tbody></table>

<table cellspacing="5" cellpadding="5" border="0"><tbody><tr>
<?php
screenshot( "/vlc/screenshots/20040602-windows-wxembed-4.jpg",
            "/vlc/screenshots/tn_20040602-windows-wxembed-4.jpg",
            "Windows WxWidgets embedded ang Goom screenshot",
            "wxMSW Windows (1280x1024)" );
screenshot( "/vlc/screenshots/20040602-windows-wxembed-5.jpg",
            "/vlc/screenshots/tn_20040602-windows-wxembed-5.jpg",
            "Windows WxWidgets embedded ang Goom screenshot",
            "wxMSW Windows (1280x1024)" );
screenshot( "/vlc/screenshots/20040602-beos-1.png",
            "/vlc/screenshots/tn_20040602-beos-1.png",
            "BeOS screenshot",
            "BeOS (800x550)" );
screenshot( "/vlc/screenshots/20040602-beos-2.png",
            "/vlc/screenshots/tn_20040602-beos-2.png",
            "BeOS screenshot",
            "BeOS (1072x766)" );
?>
</tr></tbody></table>


<h2>0.7.0</h2>

<table cellspacing="5" cellpadding="5" border="0"><tbody><tr>
<?php
screenshot( "/vlc/screenshots/20040110-osx-00.jpg",
            "/vlc/screenshots/tn_20040110-osx-00.jpg",
            "MacOS X screenshot",
            "Mac OS X (1051x651)" );
screenshot( "/vlc/screenshots/20040303-osx-00.jpg",
            "/vlc/screenshots/tn_20040303-osx-00.jpg",
            "MacOS X screenshot",
            "Mac OS X (1024x768)" );
?>
</tr></tbody></table>


<h2>VLC for Familiar Linux screenshots</h2>

<table cellspacing="5" cellpadding="5" border="0"><tbody><tr>
<?php
screenshot( "/screenshots/familiar20021121-02.png",
            "/screenshots/familiar20021121-02.png",
            "iPaq shot",
            "iPaq" );
screenshot( "/screenshots/familiar20021121-00.png",
            "/screenshots/familiar20021121-00.png",
            "iPaq Familiar interface",
            "iPaq" );
screenshot( "/screenshots/familiar20021121-04.png",
            "/screenshots/familiar20021121-04.png",
            "iPaq Familiar interface",
            "iPaq" );
?>
</tr></tbody></table>

<h2>Old screenshots</h2>

<h3>VLC 0.6.1</h3>

<table cellspacing="5" cellpadding="5" border="0"><tbody><tr>
<?php
screenshot( "/vlc/screenshots/20030731-wxgtk-00.png",
            "/vlc/screenshots/tn_20030731-wxgtk-00.jpg",
            "wxWindows Linux screenshot",
            "wxGTK Linux (1024x768)" );
screenshot( "/vlc/screenshots/20030731-wxgtk-01.png",
            "/vlc/screenshots/tn_20030731-wxgtk-01.jpg",
            "wxWindows Linux screenshot",
            "wxGTK Linux (1024x768)" );
screenshot( "/vlc/screenshots/20030731-wxgtk-02.png",
            "/vlc/screenshots/tn_20030731-wxgtk-02.jpg",
            "wxWindows Linux screenshot",
            "wxGTK Linux (1024x768)" );
screenshot( "/vlc/screenshots/20030731-wxgtk-03.png",
            "/vlc/screenshots/tn_20030731-wxgtk-03.jpg",
            "wxWindows Linux screenshot",
            "wxGTK Linux (1024x768)" );
screenshot( "/vlc/screenshots/20030810-beos.jpg",
            "/vlc/screenshots/tn_20030810-beos.jpg",
            "BeOS screenshot",
            "BeOS (1280x1024)" );
?>
</tr></tbody></table>


<h3>VLC 0.5.0</h3>

<table cellspacing="5" cellpadding="5" border="0"><tbody><tr>
<?php
screenshot( "/vlc/screenshots/20030228-gnome-01.png",
            "/vlc/screenshots/tn_20030228-gnome-01.jpg",
            "Gnome screenshot",
            "Gnome (1024x768)" );
screenshot( "/vlc/screenshots/20030228-gnome-02.png",
            "/vlc/screenshots/tn_20030228-gnome-02.jpg",
            "Gnome screenshot",
            "Gnome (1024x768)" );
screenshot( "/vlc/screenshots/20030228-gnome-03.png",
            "/vlc/screenshots/tn_20030228-gnome-03.jpg",
            "Gnome screenshot",
            "Gnome (1024x768)" );
screenshot( "/vlc/screenshots/20030202-win32-01.png",
            "/vlc/screenshots/tn_20030202-win32-01.jpg",
            "Windows screenshot",
            "Windows (1024x768)" );
screenshot( "/vlc/screenshots/20030202-osx-00.jpg",
            "/vlc/screenshots/tn_20030202-osx-00.jpg",
            "Mac OS X screenshot",
            "Mac OS X (1152x768)" );
?>
</tr></tbody></table>

<table cellspacing="5" cellpadding="5" border="0"><tbody><tr>
<?php
screenshot( "/vlc/screenshots/20030202-osx-01.jpg",
            "/vlc/screenshots/tn_20030202-osx-01.jpg",
            "Mac OS X screenshot",
            "Mac OS X (1152x768)" );
screenshot( "/vlc/screenshots/20030202-osx-02.jpg",
            "/vlc/screenshots/tn_20030202-osx-02.jpg",
            "Mac OS X screenshot",
            "Mac OS X (1152x768)" );
screenshot( "/vlc/screenshots/20030202-osx-03.jpg",
            "/vlc/screenshots/tn_20030202-osx-03.jpg",
            "Mac OS X screenshot",
            "Mac OS X (1152x768)" );
screenshot( "/vlc/screenshots/20030202-osx-04.jpg",
            "/vlc/screenshots/tn_20030202-osx-04.jpg",
            "Mac OS X screenshot",
            "Mac OS X (1152x768)" );
screenshot( "/vlc/screenshots/20030202-osx-05.jpg",
            "/vlc/screenshots/tn_20030202-osx-05.jpg",
            "Mac OS X screenshot",
            "Mac OS X (1152x768)" );
?>
</tr></tbody></table>


<h3>VLC 0.3.0</h3>

<table cellspacing="5" cellpadding="5" border="0"><tbody><tr>
<?php
screenshot( "/vlc/screenshots/20020406-00.jpeg",
            "/vlc/screenshots/tn_20020406-00.jpeg",
            "Gnome screenshot",
            "Gnome (1024x768)" );
screenshot( "/vlc/screenshots/20020406-01.jpeg",
            "/vlc/screenshots/tn_20020406-01.jpeg",
            "Gnome screenshot",
            "Gnome (1024x768)" );
screenshot( "/vlc/screenshots/20020406-02.jpeg",
            "/vlc/screenshots/tn_20020406-02.jpeg",
            "Gnome screenshot",
            "Gnome (1024x768)" );
screenshot( "/vlc/screenshots/20020411-00.jpeg",
            "/vlc/screenshots/tn_20020411-00.jpeg",
            "Mac OS X screenshot",
            "Mac OS X (1152x768)" );
screenshot( "/vlc/screenshots/20020424-00.jpeg",
            "/vlc/screenshots/tn_20020424-00.jpeg",
            "Windows screenshot",
            "Windows (1024x768)" );
?>
</tr></tbody></table>


<h3>VLC 0.2.x</h3>

<p> The first screenshot shows the <b>Gnome</b> interface in DVD mode,
with the context menu in the movie window for chapter and language
selection. The second one shows the similar <b>Gtk+</b> interface, then
we have a preview of the work-in-progress <b>Qt</b> interface, and
eventually a <b>BeOS</b> screenshot. </p>

<table cellspacing="5" cellpadding="5" border="0"><tbody><tr>
<?php
screenshot( "/vlc/screenshots/20010409-00.png",
            "/vlc/screenshots/tn_20010409-00.jpeg",
            "Gnome screenshot",
            "Gnome (1024x768)" );
screenshot( "/vlc/screenshots/20010409-01.png",
            "/vlc/screenshots/tn_20010409-01.jpeg",
            "Gtk+ screenshot",
            "Gtk+ (1024x768)" );
screenshot( "/vlc/screenshots/20010409-02.png",
            "/vlc/screenshots/tn_20010409-02.jpeg",
            "Qt screenshot",
            "Qt (1024x768)" );
screenshot( "/vlc/screenshots/20010412-00.png",
            "/vlc/screenshots/tn_20010412-00.jpeg",
            "BeOS screenshot",
            "BeOS (1152x864)" );
?>
</tr></tbody></table>

<p> Here is a screenshot of the 0.2.60 version showing the Gnome
interface playing an <b>MPEG-1</b> stream, a screenshot of VLC version 0.6 
running across two screens in <b>Xinerama</b> mode, a <b>256
colors</b> screenshot to show the <code>vlc</code>'s dithering routines
in 8 bpp, and an example of its <b>scaling</b> capabilities. </p>

<p> And there is the necessary <b>babe</b>. The last
screenshot is merely a joke, to show how we compare with <a
href="http://www.linuxvideo.org/oms/"><code>OMS</code></a> from our
friends at <a href="http://www.linuxvideo.org/">linuxvideo.org</a>.
They have a similar screenshot <a
href="http://www.linuxvideo.org/oms/oms-screenshotbig.jpeg">here</a>.
</p>

<table cellspacing="5" cellpadding="5" border="0"><tbody><tr>
<?php
screenshot( "/vlc/screenshots/20010214-00.png",
            "/vlc/screenshots/tn_20010214-00.jpeg",
            "MPEG-1 (1024x768)",
            "MPEG-1 (1024x768)" );
screenshot( "/vlc/screenshots/20010215-00.jpeg",
            "/vlc/screenshots/tn_20010215-00.jpeg",
            "Xinerama (2560x1024)",
            "Xinerama (2560x1024)" );
screenshot( "/vlc/screenshots/20000708-00.png",
            "/vlc/screenshots/tn_20000708-00.jpeg",
            "Dithering (686x512)",
            "Dithering (686x512)" );
screenshot( "/vlc/screenshots/20000624-00.png",
            "/vlc/screenshots/tn_20000624-00.jpeg",
            "Scaling (1600x1200)",
            "Scaling (1600x1200)" );
screenshot( "/vlc/screenshots/20000529-00.jpeg",
            "/vlc/screenshots/tn_20000529-00.jpeg",
            "The babe (1152x864)",
            "The babe (1152x864)" );
?>
</tr></tbody></table>

<h2>Very old screenshots</h2>

<p> For very old screenshots, you can <a href="/vlc/screenshots/">browse</a>
the screenshot directory. </p>

<?php footer('$Id$'); ?>
