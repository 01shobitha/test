<?php
   $title = "VideoLAN - Free Software and Open Source video streaming solution for every OS!";
   $lang = "en";
   $menu = array( "project", "overview" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

   include($_SERVER["DOCUMENT_ROOT"]."/include/news.php");
?>

<h1> Website map</h1>
<table>
<tr>
<th>Main</th>
<th>Project</th>
<th>VLC</th>
<th>developers and libraries</th>
<th>security</th>
<th>press</th>
<th>support</th>
</tr>

<tr>
    <td>
        <ul>
            <li><a href="/index.html">Overview</a></li>
            <li><a href="/contribute.html">Contribute</a></li>
            <li><a href="/links.html">Links</a></li>
            <li><a href="/news.html">News</a></li>
            <!-- Goodies -->
            <li><a href="/partners.html">Partners</a></li>
            <li><a href="/streaming-features.html">Streaming Features </a></li>
        </ul>
     </td>

    <td>
        <ul>
            <li><a href="/project/">VideoLAN project</a></li>
            <li><a href="/team/">the VideoLAN Team </a></li>
            <li><a href="/goodies.html">Goodies</a></li>
            <li><a href="/events">Events</a></li>
        </ul>
     </td>

    <td>
        <ul>
            <li><a href="/vlc/">VLC download page</a></li>
            <li><a href="/vlc/features.html">VLC features</a></li>
            <li><a href="/vlc/screenshots.html">VLC screenshots</a></li>
            <li><a href="/vlc/streaming.html">VLC streaming</a></li>
            <li><a href="/vlc/skins.php">VLC skins</a></li>
            <li><a href="/vlc/download-windows.html">VLC for Windows</a></li>
            <li><a href="/vlc/download-macosx.html">VLC for Mac OS X</a></li>
            <li><a href="/vlc/download-beos.html">VLC for BeOS</a></li>
            <li><a href="/vlc/download-syllable.html">VLC for Syllable</a></li>
            <li><a href="/vlc/download-debian.html">VLC for Debian</a></li>
            <li><a href="/vlc/download-ubuntu.html">VLC for Ubuntu</a></li>
            <li><a href="/vlc/download-mandriva.html">VLC for Mandriva</a></li>
            <li><a href="/vlc/download-fedora.html">VLC for Fedora</a></li>
            <!-- to finish -->
        </ul>
     </td>

    <td>
        <ul>
            <li><a href="/developers/vlc.html">VLC development</a></li>
            <li><a href="/developers/vls.html">VLS development</a></li>
            <li><a href="/developers/x264.html">x264 development</a></li>
            <li><a href="/developers/libdca.html">libdca development</a></li>
            <li><a href="/developers/libdvdcss.html">libdvdcss development</a></li>
            <li><a href="/developers/libdvbpsi.html">libdvbpsi development</a></li>
            <li><a href="/developers/libdvdplay.html">libdvdplay development</a></li>
            <li><a href="/developers/libdvbcsa.html">libdvbcsa development</a></li>
            <li><a href="/developers/x264.html">x264 development</a></li>
            <li><a href="/developers/x264.html">x264 development</a></li>
            <li><a href="/developers/x264.html">x264 development</a></li>
            <li><a href="/developers/i18n/">VLC i18n</a></li>
        </ul>
     </td>

    <td>
        <ul>
            <li><a href="/security/">Security page</a></li>
            <li><a href="/security/sa0701.html">SA 0701</a></li>
            <li><a href="/security/sa0702.html">SA 0702</a></li>
            <li><a href="/security/sa0703.html">SA 0703</a></li>
            <li><a href="/security/sa0801.html">SA 0801</a></li>
            <li><a href="/security/sa0802.html">SA 0802</a></li>
            <li><a href="/security/sa0803.html">SA 0803</a></li>
            <li><a href="/security/sa0804.html">SA 0804</a></li>
            <li><a href="/security/sa0805.html">SA 0805</a></li>
            <li><a href="/security/sa0806.html">SA 0806</a></li>
            <li><a href="/security/sa0807.html">SA 0807</a></li>
            <li><a href="/security/sa0808.html">SA 0808</a></li>
            <li><a href="/security/sa0809.html">SA 0809</a></li>
            <li><a href="/security/sa0810.html">SA 0810</a></li>
            <li><a href="/security/sa0811.html">SA 0811</a></li>
        </ul>
     </td>
</tr>


</table>
<?php footer('$Id: map.php 3765 2006-08-16 16:19:00Z dionoea $'); ?>
