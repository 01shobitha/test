<?php
   $title = "VLC media player for Red Hat Linux";
   $lang = "en";
   $date = "21 June 2004";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

<h1>VLC media player for <a href="http://www.redhat.com/">Red Hat Linux</a></h1>

<div id="fullwidth">

<h2>Unofficial packages for RHEL 4 and RHEL 5, x86 and x86_64</h2>
<p>Use <a href="http://dag.wieers.com/rpm/packages/vlc/">Dag wieers</a> to have 0.8.6 for those versions!</p>

<h2>Red Hat 9.0 packages for i386</h2>

<p>Latest RPM x86 packages tarballs for Red Hat 9.0: </p>

<p>We do not have special packages for Red Hat anymore. Our packages are build for <a href="http://fedora.redhat.com">Fedora Core</a>. However these packages work pretty good on Red Hat as well. So go to our <a href="download-fedora.html">Fedora packages download page</a> and try them out. You may need to add <code>--nodeps</code> to the rpm commandline to install them.</p>
<p><b>NOTE:</b> Be sure to run the RH9 update package listed beneath the FC2 package.</p>

<h2>Older versions</h2>
<?php browse_old( "vlc" ); ?>

</div>

<?php footer('$Id$'); ?>
