<?php
   $title = "VLC media player for Linux SUSE";
   $lang = "en";
   $date = "14 February 2003";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
?>

<?php function pkgitem($version,$name,$comment) { ?><li><a href="http://download.videolan.org/pub/videolan/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a> <?php echo $comment; ?> </li><?php } ?>

<h1>VLC media player for SUSE Linux x86</h1>
<h2>Looking for SUSE package maintainer</h2>

<p>We currently do not have an official VLC media player package for SUSE. This is because we have no SUSE maintainer. A package could easily be created if someone offered to invest some time into this. Please contact the <a href="mailto:vlc-devel@videolan.org">mailinglist</a> if you would like to port our Mandrake and Redhat/Fedora spec file to the SUSE distribution.
</p>

<h2>Download VLC media player for SUSE Linux</h2>
<p>
In the mean time, you could try this unofficial and by VideoLAN unsupported SuSE rpm:<br />
<a href="http://packman.links2linux.de/?action=377">RPM by Quentin Denis</a></p>

<h2>Useful information?</h2>
<p>
<a href="http://forum.videolan.org/viewtopic.php?t=21707">Forum post</a> (<a href="http://forum.videolan.org/viewtopic.php?t=1092">old forum post</a> for 0.7.*) with possibly useful information.</p>

<?php footer('$Id$'); ?>
