<?php
   $title = "VLC media player for Linux Mandrake";
   $lang = "en";
   $date = "14 February 2003";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
?>

<?php function pkgitem($version,$name,$comment) { ?><li><a href="http://download.videolan.org/pub/videolan/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a> <?php echo $comment; ?> </li><?php } ?>

<h1>VLC media player for <a href="http://www.mandriva.com/">Linux Mandrake</a> x86</h1>

<div id="fullwidth">

<p>Thanks to Götz Waschk who maintains these packages !</p>

<h2>Mandrake 10.2, 10.1, 10.0, 9.1, 9.2, Community and Cooker</h2>

<p>To install the latest VLC packages,
add the following sources for your Mandrake version (you
can use <a href="http://plf.zarb.org/">Easy urpmi</a> for
that):</p>

<ul>
<li><b>contrib</b> from the core distribution;</li>
<li><b>plf</b> (Penguin Liberation Front) from the external add-ons.</li>
</ul>

<p>Then install the required packages with <b>urpmi</b>:</p>

<pre>
   # urpmi libdvdcss2 libdvdplay0 wxvlc vlc-plugin-a52 vlc-plugin-ogg vlc-plugin-mad
</pre>

</div>

<?php footer('$Id$'); ?>
