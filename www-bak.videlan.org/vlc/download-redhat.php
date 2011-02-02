<?php
   $title = "VLC media player for Red Hat Linux";
   $lang = "en";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

<h1>VLC media player for <a href="http://www.redhat.com/rhel/">Red Hat Enterprise Linux</a></h1>

<div id="fullwidth">
<h2> 0.9.9 Packages for RHEL 5, x86 and x86_64 on RPMforge</h2>
<p>Use <a href="http://apt.sw.be/">RPMforge</a> to have 0.9.9 for those versions!</p>

<h2> 0.8.6 Packages for RHEL 4 and RHEL 5, x86 and x86_64 on RPMforge</h2>
<p>Use <a href="http://apt.sw.be/">RPMforge</a> to have 0.8.6 for those versions!</p>

<h2>Red Hat 9.0 and RHEL 3 packages for i386</h2>
<p>Those versions are not supported anymore. You can get some very old versions of VideoLan Client on RPMforge.</p>

<h2>Older versions</h2>
<?php browse_old( "vlc" ); ?>

</div>

<?php footer('$Id$'); ?>
