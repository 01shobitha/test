<?php
   $title = "VLC media player for Crux Linux";
   $lang = "en";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<?php function pkgitem($version,$name,$comment) { ?><li><a href="http://download.videolan.org/pub/videolan/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a> <?php echo $comment; ?> </li><?php } ?>

<div id="fullwidth">

<h1 class="bigtitle">VLC media player for <a href="http://crux.nu/">Crux Linux</a></h1>

<p>Thanks to Younès Hafri who maintains these packages !</p>

<h2>Installation process</h2>

<p>First update your package list as described on <a href="http://perso.club-internet.fr/yhafri/crux/index.html">http://perso.club-internet.fr/yhafri/crux/index.html</a></p>

<p>If you have all the dependencies installed, use this command line to install vlc :</p>

<pre>
   # cd /usr/ports/yhafri/vlc && pkgmk -d -i && rm vlc-0.8.1.tar.gz
</pre>

</div>

<?php footer('$Id$'); ?>
