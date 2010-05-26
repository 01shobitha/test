<?php
   $title ="VideoLAN developers - libdvdplay";
   $lang = "en";
   $menu = array( "developers", "libdvdplay" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>


<h1>libdvdplay</h1>

<p> <code>libdvdplay</code> is a simple library
designed for DVD navigation. It depends on <a
href="http://freshmeat.net/projects/libdvdread/"><code>libdvdread</code></a>
(which can optionally use <a href="libdvdcss.html"><code>libdvdcss</code></a>).
</p>

<p><b>NOTE: </b>libdvdplay is no longer under active development. VLC has switched
to libdvdnav which appears to be more reliable for DVD navigation than libdvdplay. Of course you are still welcome to use, work or submit patches to libdvdplay.</p>

<p> Currently supported platforms are Unix, Windows, BeOS and Mac OS X, but it
should work on almost any platform. </p>

<h2>Get libdvdplay</h2>

<p> <code>libdvdplay</code> is available through
<a href="http://wiki.videolan.org/Subversion">Subversion</a> or by browsing the <a
href="http://www.videolan.org/pub/libdvdplay/">releases</a>. </p>


<h2>Documentation</h2>

<p> No documentation is available yet. </p>

<?php footer('$Id$'); ?>
