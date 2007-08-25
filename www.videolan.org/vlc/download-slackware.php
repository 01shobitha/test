<?php
   $title = "VLC media player for Linux Slackware";
   $lang = "en";
   $date = "8 May 2006";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

<h1>VLC media player for <a href="http://slackware.com/">Linux Slackware</a></h1>

<div id="fullwidth">

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

<p>A VLC 0.8.6c tgz is also available on <a href="http://www.slacky.eu/repository/slackware-11.0/multimedia/vlc/0.8.6c/">Italian Slackware Community</a>.</p>

</div>

<?php footer('$Id$'); ?>
