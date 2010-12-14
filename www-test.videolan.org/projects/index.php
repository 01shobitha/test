<?php
   $title = "VideoLAN - Free Software and Open Source video streaming solution for every OS!";
   $lang = "en";
   $menu = array( "projects", "projects" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

   include($_SERVER["DOCUMENT_ROOT"]."/include/news.php");
?>

<h1>VideoLAN Software Projects</h1>

<p>Those projects are projects aimed at power end-users.</p>
<p>VideoLAN also hosts <a href="/developers/">development libraries</a></p>

<h2>Projects list</h2>

<p>Although <a href="/vlc/">VLC media player</a> is the most well-known
VideoLAN project, we do host several other video-related projects,
mostly aimed at power end-users:</p>

<ul class="bullets">

<li><a href="/projects/vlma/">VLMa (VideoLAN Manager)</a>,
a Java application to manage multiple VLC instances through their telnet interface.</li>

<li><a href="/projects/dvblast.html">DVBlast</a>,
a simple, fast, reliable and powerful streaming application for linux-dvb devices.</li>

<li><a href="/projects/multicat.html">Multicat</a>,
a set of tools to manipulate multicast streams and TS files.</li>

<li><a href="/vlc/streaming.html">VLS (VideoLAN Server)</a>, our legacy
streaming server, which is now mostly replaced by VLC.</li>

<li><a href="/vlc/skineditor.html">VLC Skin Editor</a>, a Java application to create skins for VLC media player.</li>

</ul>

<?php footer('$Id: index.php 3765 2006-08-16 16:19:00Z dionoea $'); ?>
