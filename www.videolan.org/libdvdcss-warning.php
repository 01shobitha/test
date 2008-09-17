<?php
   $title = "Warning regarding libdvdcss";
   $lang = "en";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<?php function pkgitem($version,$name) { ?><li><a href="http://download.videolan.org/pub/videolan/vlc/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a></li><?php } ?>

<div id="fullwidth">

<h1> Warning regarding libdvdcss </h1>

<h2>What is libdvdcss ?</h2>

libdvdcss is a toolbox of functions a program might use for reading the
contents of a DVD, encrypted or not.


<h2>Why should I care ?</h2>

libdvdcss did not buy a "player key" like commercial DVD-playback software do.
It uses various methods to access encrypted DVD and it does not respect zones.
This might or might not be considered as a copyright protection system
workaround. In some countries, it might be illegal to use or distribute it.


You have been warned.


<h2>Additionnal information</h2>

If you want to read more on this subject, we publish a <a
href="libdvdcss.txt">french non-technical description of libdvdcss</a>
and we will try to translate it soon.

</div>

<?php footer('$Id$'); ?>
