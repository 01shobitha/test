<?php
   $title = "VLC media player for Linux Slackware";
   $lang = "en";
   $date = "8 May 2006";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
?>

<?php function pkgitem($version,$name,$comment) { ?><li><a href="http://download.videolan.org/pub/videolan/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a> <?php echo $comment; ?> </li><?php } ?>

<h1>VLC media player for Linux Slackware</h1>

<p>Unofficial tgz are available on <a href="http://www.slacky.it/index.php?option=com_remository&Itemid=29&func=fileinfo&parent=folder&filecatid=1120">Italian Slackware Community</a>.</p>
<p>Pallanson also build a tgz for VLC 0.8.5. Get it <a href="http://pallansson.homeip.net/vlc-0.8.5-i686-1.tgz">here</a>.</p>

<?php footer('$Id$'); ?>
