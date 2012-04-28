<?php
   $title = "VLC media player for Debian GNU/Linux";
   $lang = "en";
   $additional_css = array("/style/panels.css");
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1 class="bigtitle"> VLC media player for <a href="http://debian.org">Debian GNU/Linux</a></h1>
<div id="left">

<h2> Debian stable (squeeze) </h2>

<p> VLC is available in squeeze, with a quite old version.<br />
Install <code>vlc</code>, <code>mozilla-plugin-vlc</code>, the usual way you do it. </p>


<h2> Debian testing (wheezy) </h2>

<p> VLC is in testing.<br />
But due to the way testing works, we can't guarantee if the latest version is available.<br /> Install
<code>vlc</code>, <code>mozilla-plugin-vlc</code>, the usual way you do it. </p>


<h2> Debian unstable (sid) </h2>

<p> VLC's latest packaged version is always in the official Debian unstable branch.</p>


<?php panel_start( "blue" ); ?>
<h1>Playing DVD</h1>

To play DVD, you need to install the libdvdcss package.</p>

<?php panel_end(); ?>

</div>

<?php
  footer('$Id$');
?>
