<?php
   $title = "VLC media player for Linux Slackware";
   $lang = "en";
   $date = "8 May 2006";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

<h1>VLC media player for Linux Slackware</h1>

<h2>Unofficial packages</h2>
<p><a href="http://pallansson.homeip.net/vlc/index.html">Per Allansson (click here for packages changelog)</a> build a tgz for VLC 0.8.5:</p>
<ul>
  <?php pkgitem("0.8.5/slackware","vlc-0.8.5-i686-2.tgz","vlc"); ?>
</ul>

<p>Another VLC tgz are also available on <a href="http://www.slacky.it/index.php?option=com_remository&Itemid=29&func=fileinfo&parent=folder&filecatid=1120">Italian Slackware Community</a>.</p>

<?php footer('$Id$'); ?>
