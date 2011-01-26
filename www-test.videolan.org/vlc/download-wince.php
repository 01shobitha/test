<?php
   $title = "VLC media player for WinCE / PocketPC";
   $lang = "en";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<?php function pkgitem($version,$name) { ?><li><a href="http://download.videolan.org/pub/videolan/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a></li><?php } ?>

<h1 class="bigtitle"> VLC media player for WinCE / PocketPC </h1>

<div id="fullwidth">

<h2>Port discontinued</h2>

<p>The experimental WinCE port of VLC has been <strong>discontinued</strong>.
There are currently no plan to resume it,
due to lack of interested developers and proper toolchains.
</p>

<h2>Source code</h2>

<p>If you want, you can download the <a href="download-sources.html">source code</a> of VLC media player.</p>

</div>

<?php footer('$Id$'); ?>
