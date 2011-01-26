<?php
   $title = "VLC media player for ALT Linux";
   $lang = "en";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="fullwidth">
<h1 class="bigtitle">VLC media player for <a href="http://www.archlinux.org/">Arch Linux</a></h1>

Arch Linux  has a VLC package in its 'Extra' repository (see <a href='http://www.archlinux.org/packages/extra/i686/vlc/'>http://www.archlinux.org/packages/extra/i686/vlc/</a>).

Issue this command to install:
<pre>
#  pacman -S vlc
</pre>

</div>

<?php footer('$Id$'); ?>
