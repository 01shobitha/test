<?php
   $title = "VLC media player for Crux Linux";
   $lang = "en";
   $date = "14 December 2004";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
?>

<?php function pkgitem($version,$name,$comment) { ?><li><a href="http://download.videolan.org/pub/videolan/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a> <?php echo $comment; ?> </li><?php } ?>

<h1>VLC media player for Crux Linux</h1>

<p>Thanks to Younes Hafri who maintains these packages !</p>

<p>Get the <a href="http://perso.club-internet.fr/yhafri/crux/vlc/Pkgfile">Package file</a>.</p>

<h2>Installation process</h2>

<p>First update your package list as described on <a href="http://perso.club-internet.fr/yhafri/crux/index.html">http://perso.club-internet.fr/yhafri/crux/index.html</a></p>

<p>If you have all the dependencies installed, use this command line to install vlc :</p>

<pre>
# cd /usr/ports/yhafri/vlc && pkgmk -d -i && rm vlc-0.8.1.tar.gz
</pre>

<p>To install mssing dependencies, use the following command line :</p>

<pre>
# cd /usr/ports/yhafri/DEPENDANCE && pkgmk -d -i && rm  DEPENDANCE-VERSION.tar.gz
</pre>

<?php footer('$Id: download-mandrake.php 2907 2004-11-23 14:41:24Z courmisch $'); ?>
