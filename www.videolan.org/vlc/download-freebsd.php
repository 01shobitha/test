<?php
   $title = "VLC media player for FreeBSD";
   $lang = "en";
   $date = "24 June 2005";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
   include($_SERVER["DOCUMENT_ROOT"]."/include/mirrordir.php");
?>

<h1> VLC media player for FreeBSD</h1>

<h2>Install VLC trough the Ports Collection</h2>

<p>VLC is included in the <a href="http://www.freebsd.org/ports/index.html">Ports Collection</a>  of the <a
href="http://www.freebsd.org/">Freebsd</a> operating system.
So you can simply installl VLC with <i>pkg_add</i>.</p>
<p>However you will get a very bare bones version of VLC. We advice to compile with the following commad: 
</p>
<pre>
# cd /usr/ports/multimedia/vlc &amp;&amp; make deinstall clean &amp;&amp; make WITH_SKINS=yes WITH_WXWINDOWS=yes \
              WITHOUT_DTS=no WITH_LAME=yes WITHOUT_VORBIS=no WITH_AALIB=yes WITH_LIBCACA=yes WITHOUT_SDL=no \ 
              WITH_SVG=yes WITH_SVGALIB=yes WITH_XOSD=yes WITHOUT_TRANSCODE=no WITHOUT_DVD=no \
              WITHOUT_LIVEMEDIA=no WITH_MOZILLA_PLUGIN=firefox WITH_OPENGL=yes WITH_OPTIMIZED_CFLAGS=yes \
              WITH_DVD_DEVICE=/dev/acd0 FORCE_PKG_REGISTER=yes reinstall clean
</pre>

<h2>Older versions</h2>

<p> Older versions can be found by browsing our FTP site :</p>
<ul> <?php mirrordir("vlc"); ?> </ul>

<h2>Source code</h2>

<p>If you want, you can download the <a href="download-sources.html">sourcecode</a> of VLC media player.</p>

<?php footer('$Id$'); ?>
