<?php
   $title = "VLC media player for Debian GNU/Linux";
   $lang = "en";
   $additional_css = array("/panels.css");
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1> VLC media player for <a href="http://debian.org">Debian GNU/Linux</a></h1>
<div id="left">

<h2> Debian stable (lenny) </h2>

<p> VLC is available in lenny, with a quite old version. Install
vlc, mozilla-plugin-vlc, the usual way you do it. </p>

<h2> Debian testing (squeeze) </h2>

<p> VLC is potentially available in testing. But due to the way testing works,
 we can't guarantee which version, if any, is currently available. Install
vlc, mozilla-plugin-vlc, the usual way you do it. </p>


<h2> Debian unstable (sid) </h2>

<p> VLC's latest packaged version is always in the official Debian unstable
branch. However you should still use our apt-get line if you need libdvdcss: </p>

<pre>
     deb http://download.videolan.org/pub/videolan/debian sid main
     deb-src http://download.videolan.org/pub/videolan/debian sid main
</pre>

<p> For a normal install, do:</p>

<pre>
   # apt-get update
   # apt-get install vlc libdvdcss2
</pre>

<h2> Debian oldstable (etch) </h2>

<p> A version (0.8.6) is packaged in etch. 
However, if you want libdvdcss (DVD decryption) support, you will need to add the following lines to your <b>/etc/apt/sources.list</b>:</p>

<pre>
     deb http://download.videolan.org/pub/videolan/debian etch main
     deb-src http://download.videolan.org/pub/videolan/debian etch main
</pre>

<p> For a normal install, do:</p>

<pre>
   # apt-get update
   # apt-get install vlc libdvdcss2
</pre>

</div>

<div id="right">

<?php panel_start( "blue" ); ?>
<h1>Development snapshots</h1>
<p>Development snapshots are available on <a href="http://nightlies.videolan.org">nightlies.videolan.org</a>.</p>
<?php panel_end(); ?>

</div>

<?php
  footer('$Id$');
?>
