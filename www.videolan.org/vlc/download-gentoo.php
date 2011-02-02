<?php
   $title = "VLC media player for Gentoo Linux";
   $lang = "en";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

<h1 class="bigtitle"> VLC media player for <a href="http://www.gentoo.org/">Gentoo Linux</a></h1>

<div id="left">

  <h2>Install VLC through emerge</h2>

<p>VLC is included in the <a href="http://www.gentoo.org/doc/en/handbook/handbook-x86.xml?part=2">Portage</a> package system of the <a
href="http://www.gentoo.org/">Gentoo Linux</a> distribution.
So you can simple type <i>emerge vlc</i> and you will have VLC installed.</p>

<p>However, we advise to always use the latest (and 'unstable')
version of VLC. For this you will first need to add the
following line <i>"media-video/vlc ~x86"</i> to the file
<i>"/etc/portage/package.keywords"</i>. If the file does not yet exist
you should create it.</p>

<p> When you don't set the correct USE variables, you will get a very
bare bones version of VLC. We recommend to emerge with the following USE
variables:</p>

<pre>dvd ffmpeg mpeg mad wxwindows aac dts a52 ogg flac theora
oggvorbis matroska freetype bidi xv svga gnutls stream vlm httpd cdda
vcd cdio live</pre>

<p>You can set these variables for VLC by adding the line</p>

<pre>media-video/vlc dvd ffmpeg mpeg mad
wxwindows aac dts a52 ogg flac theora oggvorbis matroska freetype
bidi xv svga gnutls stream vlm httpd cdda vcd cdio live</pre>

<p>to the file <i>"/etc/portage/package.use"</i>. This will give you a
fully functioning VLC. Be very careful if you decide to disable some of
these USE flags. You can loose more functionality than you might expect.
</p>

  <h2>Older versions</h2>
   <?php browse_old("vlc" ); ?>
</div>

<div id="right">
  <h2>Source code</h2>

  <p>If you want, you can download the <a href="download-sources.html">source code</a> of VLC media player.</p>

</div>
<?php footer('$Id$'); ?>
