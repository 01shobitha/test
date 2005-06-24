<?php
   $title = "VLC - screenshots";
   $lang = "en";
   $date = "14 February 2001";
   $menu = array( "vlc", "screenshots" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");

function screenshot($img,$thumb,$descr){
echo"    <td class='center'><a href='$img'><img
    src='$thumb'
    alt='$descr' width='143' height='113' /></a>
    <br />  $descr </td>";
}
?>

<h1> VLC screenshots </h1>

<h2>Latest screenshots (0.8.2)</h2>

<table cellspacing="5" cellpadding="5" border="0"><tbody><tr>
<td></td></tr></tbody></table>


<h2>0.7.2</h2>

<table cellspacing="5" cellpadding="5" border="0"><tbody><tr>

<?php
screenshot( "/vlc/screenshots/20040531-osx-1.jpg",
            "/vlc/screenshots/tn_20040531-osx-1.jpg",
            "Mac OS X (1280x960)" );
screenshot( "/vlc/screenshots/20040531-osx-2.jpg",
            "/vlc/screenshots/tn_20040531-osx-2.jpg",
            "Mac OS X (1024x768)" );
screenshot( "/vlc/screenshots/20040531-linux-1.jpg",
            "/vlc/screenshots/tn_20040531-linux-1.jpg",
            "wxGTK Linux (1280x960)" );
screenshot( "/vlc/screenshots/20040531-linux-2.jpg",
            "/vlc/screenshots/tn_20040531-linux-2.jpg",
            "wxGTK Linux (1280x960)" );
?>
</tr></tbody></table>

<table cellspacing="5" cellpadding="5" border="0"><tbody><tr>

    <td class="center"><a 
    href="/vlc/screenshots/20040601-linux-wx-subs.jpg"><img
    src="/vlc/screenshots/tn_20040601-linux-wx-subs.jpg"
    alt="wxWindows Linux screenshot (UTF-8 subtitles)" 
    width="150" height="113" /></a>
    <br />  wxGTK Linux (1152x864) </td>

    <td class="center"><a href="/vlc/screenshots/20040601-linux-skins2-6.jpg">
    <img src="/vlc/screenshots/tn_20040601-linux-skins2-6.jpg"
    alt="Linux Skins2 screenshot" width="150" height="120" /></a>
    <br />  Skins2 Linux (1280x1024) </td>

    <td class="center"><a href="/vlc/screenshots/20040601-windows-skins2-1.jpg">
    <img src="/vlc/screenshots/tn_20040601-windows-skins2-1.jpg"
    alt="Windows Skins2 screenshot" width="150" height="120" /></a>
    <br />  Skins2 Windows (1280x1024) </td>

    <td class="center"><a href="/vlc/screenshots/20040602-windows-wxembed-2.jpg">
    <img src="/vlc/screenshots/tn_20040602-windows-wxembed-2.jpg"
    alt="Windows WxWidgets embedded screenshot" width="150" height="120" /></a>
    <br />  wxMSW Windows (1280x1024) </td>

</tr></tbody></table>


<table cellspacing="5" cellpadding="5" border="0"><tbody><tr>

    <td class="center"><a href="/vlc/screenshots/20040602-windows-wxembed-4.jpg">
    <img src="/vlc/screenshots/tn_20040602-windows-wxembed-4.jpg"
    alt="Windows WxWidgets embedded ang Goom screenshot" width="150" height="120" /></a>
    <br />  wxMSW Windows (1280x1024) </td>

    <td class="center"><a href="/vlc/screenshots/20040602-windows-wxembed-5.jpg">
    <img src="/vlc/screenshots/tn_20040602-windows-wxembed-5.jpg"
    alt="Windows WxWidgets embedded ang Goom screenshot" width="150" height="120" /></a>
    <br />  wxMSW Windows (1280x1024) </td>

    <td class="center"><a href="/vlc/screenshots/20040602-beos-1.png">
    <img src="/vlc/screenshots/tn_20040602-beos-1.png"
    alt="BeOS screenshot" width="150" height="103" /></a>
    <br />  BeOS (800x550) </td>

    <td class="center"><a href="/vlc/screenshots/20040602-beos-2.png">
    <img src="/vlc/screenshots/tn_20040602-beos-2.png"
    alt="BeOS screenshot" width="150" height="108" /></a>
    <br />  BeOS (1072x766) </td>

</tr></tbody></table>



<h2>0.7.0</h2>

<table cellspacing="5" cellpadding="5" border="0"><tbody><tr>

    <td class="center"><a href="/vlc/screenshots/20040110-osx-00.jpg"><img
    src="/vlc/screenshots/tn_20040110-osx-00.jpg"
    alt="MacOS X screenshot" width="143" height="90" /></a>
    <br />  Mac OS X (1051x651) </td>

    <td class="center"><a href="/vlc/screenshots/20040303-osx-00.jpg"><img
    src="/vlc/screenshots/tn_20040303-osx-00.jpg"
    alt="MacOS X screenshot" width="149" height="112" /></a>
    <br />  Mac OS X (1024x768) </td>

</tr></tbody></table>



<h2>VLC for Familiar Linux screenshots</h2>

<table cellspacing="5" cellpadding="5" border="0"><tbody><tr>

   <td class="center"><a href="/screenshots/familiar20021121-02.png"><img
   width="240" height="320" src="/screenshots/familiar20021121-02.png"
   alt="iPaq shot" /></a></td>

   <td class="center"><a href="/screenshots/familiar20021121-00.png"><img
   width="240" height="320" src="/screenshots/familiar20021121-00.png"
   alt="iPaq Familiar interface"/></a></td>

   <td class="center"><a href="/screenshots/familiar20021121-04.png"><img
   width="240" height="320" src="/screenshots/familiar20021121-04.png"
   alt="iPaq Familiar interface"/></a></td>

</tr></tbody></table>

<h2>Old screenshots</h2>

<h3>VLC 0.6.1</h3>

<table cellspacing="5" cellpadding="5" border="0"><tbody><tr>

    <td class="center"><a href="/vlc/screenshots/20030731-wxgtk-00.png"><img
    src="/vlc/screenshots/tn_20030731-wxgtk-00.jpg"
    alt="wxWindows Linux screenshot" width="120" height="90" /></a>
    <br /> wxGTK Linux (1024x768) </td>

    <td class="center"><a href="/vlc/screenshots/20030731-wxgtk-01.png"><img
    src="/vlc/screenshots/tn_20030731-wxgtk-01.jpg"
    alt="wxWindows Linux screenshot" width="120" height="90" /></a>
    <br /> wxGTK Linux (1024x768) </td>

    <td class="center"><a href="/vlc/screenshots/20030731-wxgtk-02.png"><img
    src="/vlc/screenshots/tn_20030731-wxgtk-02.jpg"
    alt="wxWindows Linux screenshot" width="120" height="90" /></a>
    <br /> wxGTK Linux (1024x768) </td>

    <td class="center"><a href="/vlc/screenshots/20030731-wxgtk-03.png"><img
    src="/vlc/screenshots/tn_20030731-wxgtk-03.jpg"
    alt="wxWindows Linux screenshot" width="120" height="90" /></a>
    <br /> wxGTK Linux (1024x768) </td>

    <td class="center"><a href="/vlc/screenshots/20030810-beos.jpg"><img
    src="/vlc/screenshots/tn_20030810-beos.jpg"
    alt="BeOS screenshot" width="113" height="90" /></a>
    <br /> BeOS (1280x1024) </td>

</tr></tbody></table>



<h3>VLC 0.5.0</h3>

<table cellspacing="5" cellpadding="5" border="0"><tbody><tr>

    <td class="center"><a href="/vlc/screenshots/20030228-gnome-01.png"><img
    src="/vlc/screenshots/tn_20030228-gnome-01.jpg"
    alt="Gnome screenshot" width="120" height="90" /></a>
    <br /> Gnome (1024x768) </td>

    <td class="center"><a href="/vlc/screenshots/20030228-gnome-02.png"><img
    src="/vlc/screenshots/tn_20030228-gnome-02.jpg"
    alt="Gnome screenshot" width="120" height="90" /></a>
    <br /> Gnome (1024x768) </td>

    <td class="center"><a href="/vlc/screenshots/20030228-gnome-03.png"><img
    src="/vlc/screenshots/tn_20030228-gnome-03.jpg"
    alt="Gnome screenshot" width="120" height="90" /></a>
    <br /> Gnome (1024x768) </td>

    <td class="center"><a href="/vlc/screenshots/20030202-win32-01.png"><img
    src="/vlc/screenshots/tn_20030202-win32-01.jpg"
    alt="Windows screenshot" width="120" height="90" /></a>
    <br /> Windows (1024x768) </td>

    <td class="center"><a href="/vlc/screenshots/20030202-osx-00.jpg"><img
    src="/vlc/screenshots/tn_20030202-osx-00.jpg"
    alt="Mac OS X screenshot" width="135" height="90" /></a>
    <br /> Mac OS X (1152x768) </td>




</tr></tbody></table>


<table cellspacing="5" cellpadding="5" border="0"><tbody><tr>

    <td class="center"><a href="/vlc/screenshots/20030202-osx-01.jpg"><img
    src="/vlc/screenshots/tn_20030202-osx-01.jpg"
    alt="Mac OS X screenshot" width="135" height="90" /></a>
    <br /> Mac OS X (1152x768) </td>

    <td class="center"><a href="/vlc/screenshots/20030202-osx-02.jpg"><img
    src="/vlc/screenshots/tn_20030202-osx-02.jpg"
    alt="Mac OS X screenshot" width="135" height="90" /></a>
    <br /> Mac OS X (1152x768) </td>

    <td class="center"><a href="/vlc/screenshots/20030202-osx-03.jpg"><img
    src="/vlc/screenshots/tn_20030202-osx-03.jpg"
    alt="Mac OS X screenshot" width="135" height="90" /></a>
    <br /> Mac OS X (1152x768) </td>

    <td class="center"><a href="/vlc/screenshots/20030202-osx-04.jpg"><img
    src="/vlc/screenshots/tn_20030202-osx-04.jpg"
    alt="Mac OS X screenshot" width="135" height="90" /></a>
    <br /> Mac OS X (1152x768) </td>

    <td class="center"><a href="/vlc/screenshots/20030202-osx-05.jpg"><img
    src="/vlc/screenshots/tn_20030202-osx-05.jpg"
    alt="Mac OS X screenshot" width="135" height="90" /></a>
    <br /> Mac OS X (1152x768) </td>

</tr></tbody></table>


<h3>VLC 0.3.0</h3>

<table cellspacing="5" cellpadding="5" border="0"><tbody><tr>

    <td class="center"><a href="/vlc/screenshots/20020406-00.jpeg"><img
    src="/vlc/screenshots/tn_20020406-00.jpeg" alt="Gnome screenshot"
    width="120" height="90" /></a>
    <br /> Gnome (1024x768) </td>

    <td class="center"><a href="/vlc/screenshots/20020406-01.jpeg"><img
    src="/vlc/screenshots/tn_20020406-01.jpeg" alt="Gnome screenshot"
    width="120" height="90" /></a>
    <br /> Gnome (1024x768) </td>

    <td class="center"><a href="/vlc/screenshots/20020406-02.jpeg"><img
    src="/vlc/screenshots/tn_20020406-02.jpeg" alt="Gnome screenshot"
    width="120" height="90" /></a>
    <br /> Gnome (1024x768) </td>

    <td class="center"><a href="/vlc/screenshots/20020411-00.jpeg"><img
    src="/vlc/screenshots/tn_20020411-00.jpeg" alt="Mac OS X screenshot"
    width="135" height="90" /></a>
    <br /> Mac OS X (1152x768) </td>

    <td class="center"><a href="/vlc/screenshots/20020424-00.jpeg"><img
    src="/vlc/screenshots/tn_20020424-00.jpeg" alt="Windows screenshot"
    width="120" height="90" /></a>
    <br /> Windows (1024x768) </td>


</tr></tbody></table>


<h3>VLC 0.2.x</h3>

<p> The first screenshot shows the <b>Gnome</b> interface in DVD mode,
with the context menu in the movie window for chapter and language
selection. The second one shows the similar <b>Gtk+</b> interface, then
we have a preview of the work-in-progress <b>Qt</b> interface, and
eventually a <b>BeOS</b> screenshot. </p>

<table cellspacing="5" cellpadding="5" border="0"><tbody><tr>

    <td class="center"><a href="/vlc/screenshots/20010409-00.png"><img
    src="/vlc/screenshots/tn_20010409-00.jpeg" alt="Gnome screenshot"
    width="120" height="90" /></a>
    <br /> Gnome (1024x768) </td>

    <td class="center"><a href="/vlc/screenshots/20010409-01.png"><img
    src="/vlc/screenshots/tn_20010409-01.jpeg" alt="Gtk+ screenshot"
    width="120" height="90" /></a>
    <br /> Gtk+ (1024x768) </td>

    <td class="center"><a href="/vlc/screenshots/20010409-02.png"><img
    src="/vlc/screenshots/tn_20010409-02.jpeg" alt="Qt screenshot"
    width="120" height="90" /></a>
    <br /> Qt (1024x768) </td>

    <td class="center"><a href="/vlc/screenshots/20010412-00.png"><img
    src="/vlc/screenshots/tn_20010412-00.jpeg" alt="BeOS screenshot"
    width="120" height="90" /></a>
    <br /> BeOS (1152x864) </td>

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

    <td class="center"><a href="/vlc/screenshots/20010214-00.png"><img
    src="/vlc/screenshots/tn_20010214-00.jpeg" alt="MPEG-1 (1024x768)"
    width="120" height="90" /></a>
    <br /> MPEG-1 (1024x768) </td>

    <td class="center"><a href="/vlc/screenshots/20010215-00.jpeg"><img
    src="/vlc/screenshots/tn_20010215-00.jpeg" alt="Xinerama (2560x1024)"
    width="120" height="48" /></a>
    <br /> Xinerama (2560x1024) </td>

    <td class="center"><a href="/vlc/screenshots/20000708-00.png"><img
    src="/vlc/screenshots/tn_20000708-00.jpeg" alt="Dithering (686x512)"
    width="120" height="89" /></a>
    <br /> Dithering (686x512) </td>

    <td class="center"><a href="/vlc/screenshots/20000624-00.png"><img
    src="/vlc/screenshots/tn_20000624-00.jpeg" alt="Scaling (1600x1200)"
    width="120" height="90" /></a>
    <br /> Scaling (1600x1200) </td>

    <td class="center"><a href="/vlc/screenshots/20000529-00.jpeg"><img
    src="/vlc/screenshots/tn_20000529-00.jpeg" alt="The babe (1152x864)"
    width="120" height="90" /></a>
    <br /> The babe (1152x864) </td>

</tr></tbody></table>

<h2>Very old screenshots</h2>

<p> For very old screenshots, you can <a href="/vlc/screenshots/">browse</a>
the screenshot directory. </p>

<?php footer('$Id$'); ?>
