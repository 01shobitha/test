<?php
   $title = "VLC media player for Ubuntu Linux";
   $lang = "en";
   $date = "8 May 2006";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
   include($_SERVER["DOCUMENT_ROOT"]."/include/mirrordir.php");
?>

<?php function pkgitem($version,$name,$comment) { ?><li><a href="http://download.videolan.org/pub/videolan/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a> <?php echo $comment; ?> </li><?php } ?>

<h1>VLC media player for Ubuntu Linux</h1>

<h2>Install the latest stable version</h2>
<pre>
   % sudo apt-get update
   % sudo apt-get install vlc vlc-plugin-esd
</pre>

<h2>Developement snapshots</h2>
<p>Developement snapshots are available on <a href="http://nightlies.videolan.org">nightlies.videolan.org</a>.</p>

<?php
  footer('$Id$');
?>
