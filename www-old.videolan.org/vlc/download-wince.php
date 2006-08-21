<?php
   $title = "VLC media player for WinCE / PocketPC";
   $lang = "en";
   $date = "21 february 2005";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
?>

<?php function pkgitem($version,$name) { ?><li><a href="http://download.videolan.org/pub/videolan/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a></li><?php } ?>

<h1> VLC media player for WinCE / PocketPC </h1>

<h2>Development version</h2>

<p>The WinCE port of VLC is still experimental but you can get <a href="http://nightlies.videolan.org">nightly builds</a> for the Xscale platform. Use at your own risk ;)</p>

<h2>Source code</h2>

<p>If you want, you can download the <a href="download-sources.html">sourcecode</a> of VLC media player.</p>

<?php footer('$Id$'); ?>
