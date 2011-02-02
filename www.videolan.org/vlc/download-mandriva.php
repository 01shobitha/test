<?php
   $title = "VLC media player for Linux Mandrake";
   $lang = "en";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<?php function pkgitem($version,$name,$comment) { ?><li><a href="http://download.videolan.org/pub/videolan/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a> <?php echo $comment; ?> </li><?php } ?>

<h1 class="bigtitle">VLC media player for <a href="http://www.mandriva.com/">Mandriva Linux</a> x86</h1>

<div id="fullwidth">

<p>Thanks to Götz Waschk who maintains these packages!</p>

<h2>Mandriva Linux 2007 Spring and older (since 9.2)</h2>

<p>To install the latest VLC packages,
add the following sources for your Mandriva version (you
can use <a href="http://easyurpmi.zarb.org/">Easy urpmi</a> for
that):</p>

<ul>
<li><b>contrib</b> from the core distribution;</li>
<li><b>plf</b> (Penguin Liberation Front) from the external add-ons.</li>
</ul>

<p>Then install the required packages with <b>urpmi</b>:</p>

<pre>
   # urpmi libdvdplay0 wxvlc vlc-plugin-a52 vlc-plugin-ogg vlc-plugin-mad libmatroska0
</pre>

<p>You might also try to install libdvdcss2:</p>
<pre>
   # urpmi libdvdcss2
</pre>

</div>

<?php footer('$Id$'); ?>
