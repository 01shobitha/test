<?php
   $title = "VLC media player for Linux Slackware";
   $lang = "en";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

<h1>VLC media player for <a href="http://slackware.com/">Slackware Linux</a></h1>

<div id="fullwidth">

<h2>Slackware packages by alienBOB (Eric Hameleers)</h2>

<p>32-bit and 64-bit Slackware packages (SlackBuild script included) for official VLC source releases are available from <a href="http://www.slackware.com/~alien/slackbuilds/vlc/">http://www.slackware.com/~alien/slackbuilds/vlc/</a>. These packages do not contain codecs that are suffering from patent or copyright issues. If you need MP3/AAC encoding support, a full-featured version can  be downloaded from this non-US mirror: <a href="http://slackware.org.uk/people/alien/restricted_slackbuilds/vlc/">http://slackware.org.uk/people/alien/restricted_slackbuilds/vlc/</a>.</p>

<p>Builds of the old 0.8.6 branch are still available at <a href="http://www.slackware.com/~alien/slackbuilds/vlc_old/">http://www.slackware.com/~alien/slackbuilds/vlc_old/</a> but upgrading is highly recommended.</p>

<p><i>Alien's VLC packages have no dependency on additional packages (except for libdvdcss if you want to play DVD's)</i></p>

<p>Instructions for building a package from source are available on the <a href="http://wiki.videolan.org/Slackware">VideoLAN Wiki</a></p>

<h2> Packages on slacky.eu </h2>

<p>For 32-bit Slackware only. They can be found in the repository of the 
<a href="http://slacky.eu/aadm/pkgs/index.php?sear=vlc">Italian Slackware Community</a>. Be sure to install the large list of dependencies which you can find in the <i>slack-required</i> file!</p>

<h2> Packages on slackware.opennix.com </h2>

<p>Another source of 32-bit Slackware packages is at 
<a href="http://slackware.opennix.com/?slackversion=13.0&name=vlc">slackware.opennix.com</a>. A full list of additional (dependency) packages which you are required to install is available on the package page.</p>

</div>

<?php footer('$Id$'); ?>
