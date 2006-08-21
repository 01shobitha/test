<?php
   $title = "VLC media player for Red Hat Linux";
   $lang = "en";
   $date = "21 June 2004";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
   include($_SERVER["DOCUMENT_ROOT"]."/include/mirrordir.php");
?>

<?php function pkgitem($version,$name,$comment) { ?><li><a href="http://download.videolan.org/pub/videolan/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a> <?php echo $comment; ?> </li><?php } ?>

<h1>VLC media player for <a href="http://www.redhat.com/">Red Hat Linux</a></h1>

<h2>Red Hat packages for i386</h2>

<p>Latest RPM x86 packages tarballs for Red Hat 9.0: </p>

<p>We do not have special packages for Red Hat anymore. Our packages are build for <a href="http://fedora.redhat.com">Fedora Core</a>. However these packages work pretty good on Red Hat as well. So go to our <a href="download-fedora.html">Fedora packages download page</a> and try them out. You may need to add <code>--nodeps</code> to the rpm commandline to install them.</p>
<p><b>NOTE:</b> Be sure to run the RH9 update package listed beneath the FC2 package.</p>

<h2>Older versions</h2>

<p> Older versions can be found by browsing our FTP site :</p>
<ul> <?php mirrordir("vlc"); ?> </ul>

<?php footer('$Id$'); ?>
