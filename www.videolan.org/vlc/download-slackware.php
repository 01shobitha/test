<?php
   $title = "VLC media player for Linux Slackware";
   $lang = "en";
   $date = "15 Sept 2008";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

<h1>VLC media player for <a href="http://slackware.com/">Linux Slackware</a></h1>

<div id="fullwidth">

<h2> Recent packages for 0.9.1 and 0.8.6 </h2>

<p>They can be found on
<a href="http://repository.slacky.eu/slackware-12.1/multimedia/vlc/">Italian Slackware Community</a>.</p>

<h2>Unofficial packages</h2>
<p><a href="http://pallansson.homeip.net/vlc/index.html">Per Allansson (click here for packages changelog)</a> build a tgz for VLC 0.8.5:</p>
<ul><li>
  <?php pkgitem( "VLC 0.8.5",
                 "0.8.5/slackware","vlc-0.8.5-i686-3.tgz","vlc"); ?></li>
</ul>

<p>Use the following command to install the package:</p>
<pre>
  # installpkg vlc-0.8.5-i686-3.tgz 
</pre>


</div>

<?php footer('$Id$'); ?>
