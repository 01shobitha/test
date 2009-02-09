<?php
   $title = "VLC media player for Linux Slackware";
   $lang = "en";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

<h1>VLC media player for <a href="http://slackware.com/">Slackware Linux</a></h1>

<div id="fullwidth">

<h2>Slackware packages by Alien</h2>

<p>Slackware packages (SlackBuild script included) for official VLC source releases are available from <a href="http://www.slackware.com/~alien/slackbuilds/vlc/">http://www.slackware.com/~alien/slackbuilds/vlc/</a>. These packages do not contain codecs that are suffering from patent or copyright issues. If you need MP3/AAC encoding support, a full-featured version can  be downloaded from this non-US mirror: <a href="http://slackware.org.uk/3rd-party/alien/restricted_slackbuilds/vlc/">http://slackware.org.uk/3rd-party/alien/restricted_slackbuilds/vlc/</a>.</p>

<p>Builds of the old 0.8.6 branch are also available at <a href="http://www.slackware.com/~alien/slackbuilds/vlc_old/">http://www.slackware.com/~alien/slackbuilds/vlc_old/</a>.</p>

<p><i>Alien's VLC packages have no dependency on additional packages (except for libdvdcss if you want to play DVD's)</i></p>

<h2> Packages on slacky.eu for 0.9.1 and 0.8.6 </h2>

<p>They can be found on
<a href="http://repository.slacky.eu/slackware-12.1/multimedia/vlc/">Italian Slackware Community</a>. Be sure to install the dependencies which are listed in slack-required!</p>

</div>

<?php footer('$Id$'); ?>
