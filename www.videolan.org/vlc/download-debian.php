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

<p> It is highly recommended that you get a recent version of <a href="/vlc/">VLC</a> on squeeze by installing the version from <b>squeeze-backports</b>.<br />
Add the <a href="http://backports-master.debian.org/Instructions/#index2h2">squeeze-backports repository</a> and install VLC: <code>sudo apt-get -t squeeze-backports install vlc</code>
</p>

<p> Without backports, you will end up with the very old version of VLC in vanilla squeeze (install vlc and mozilla-plugin-vlc as usual).</p>


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
