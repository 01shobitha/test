<?php
   $title = "VLC media player for ALT Linux";
   $lang = "en";
   $date = "8 May 2006";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="fullwidth">

<h1>VLC media player for <a href="http://www.archlinux.org/">Arch Linux</a></h1>

Arch Linux  has a VLC package in its 'Extra' repository (see <a href='http://archlinux.org/packages/583/'>http://archlinux.org/packages/583/</a>).

Issue this command to install:
<pre>
#  pacman -S vlc
</pre>

</div>

<?php footer('$Id$'); ?>
