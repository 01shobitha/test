<?php
   $title = "VLC media player for FreeBSD";
   $lang = "en";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

<h1> VLC media player for <a href="http://www.freebsd.org/">FreeBSD</a></h1>

<div id="left">

<h2>Install VLC through the Ports Collection</h2>

<p>VLC is included in the <a href="http://www.freebsd.org/ports/index.html">Ports Collection</a> of the <a
href="http://www.freebsd.org/">FreeBSD</a> operating system.
So you can simply install VLC with <i>pkg_add</i>.</p>
<p>However you will get a very bare-bone version of VLC. We recommend you to compile it with the following command: 
</p>
<p><pre>
# cd /usr/ports/multimedia/vlc &amp;&amp; make install clean 
</pre></p>

<h2>Older versions</h2>
<?php browse_old("vlc" ); ?>

</div>

<div id="right">
<h2>Source code</h2>

<p>If you want, you can download the <a href="download-sources.html">source code</a> of VLC media player.</p>

</div>

<?php footer('$Id$'); ?>
