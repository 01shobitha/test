<?php
   $title = "VLC media player for Mac OS X";
   $lang = "en";
   $menu = array( "vlc", "download" );
   $additional_css = array("/countries.css","/panels.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

<?php function pkgitemdev($version,$name) { ?><li><a href="http://download.videolan.org/pub/videolan/testing/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a></li><?php } ?>

<h1> VLC media player for Mac OS X </h1>

<div id="left">

<h2>Looking for more Mac OS X developers</h2>
<p> We are currently looking for more developers for the Mac OS X port of VLC.
Needed skills are C-knowledge and some experience in programming for Mac OS X
by using Cocoa and Xcode.
Know-how on programming A/V applications will probably make the work easier
for you, but is not essential.
</p>
<p>If you would like to join the project, feel free to send us an e-mail
to the <a href="/developers/lists.html">vlc-devel mailing list</a>
or to contact us through our <a href="http://forum.videolan.org/viewtopic.php?t=3675&amp;start=0&amp;postdays=0&amp;postorder=asc&amp;highlight=">forum</a>.
</p>

<?php $vlc_version = "1.0.5";
$vlc_version_intel = "1.1.0";
?>

<h2>Latest version for 10.5 and later (release <?php echo $vlc_version; ?>)</h2>

<?php pkgitem_sf( "32/64 bits Package for Intel-based Macs",
               "$vlc_version_intel/macosx","vlc-$vlc_version.dmg","vlc"); ?>

<?php pkgitem( "Package for PowerPC-based Macs",
               "$vlc_version/macosx","vlc-$vlc_version-powerpc.dmg","vlc"); ?>


<h2>Latest Web browser plugins for 10.5 and later (release <?php echo $vlc_version; ?>)</h2>

<?php pkgitem( "Web Browser plugin for Intel-based Macs",
               "$vlc_version/macosx","vlc-plugin-$vlc_version-intel.dmg","vlc"); ?>

<?php pkgitem( "Web Browser plugin for PowerPC-based Macs",
               "$vlc_version/macosx","vlc-plugin-$vlc_version-powerpc.dmg","vlc"); ?>

<h2>Latest Mac OS X package for 10.4 (release 0.9.10)</h2>
<p><b>We strongly recommend to use Mac OS X 10.4.7 or later.</b></p>
<?php $vlc_version = "0.9.10"; ?>
<?php pkgitem( "Universal Binary",
               "$vlc_version/macosx","vlc-$vlc_version.dmg","vlc"); ?>

<?php pkgitem( "Package for Intel-based Macs",
               "$vlc_version/macosx","vlc-$vlc_version-intel.dmg","vlc"); ?>

<?php pkgitem( "Package for PowerPC-based Macs",
               "$vlc_version/macosx","vlc-$vlc_version-powerpc.dmg","vlc"); ?>

<h2>Web browser plugins for 10.3.9 and 10.4 (release 0.8.6i)</h2>
<ul>
<li>
<?php $nosource = true; ?>
<?php pkgitem_nomirr( "Web Browser plugin for Intel",
               "0.8.6i/macosx","vlc-plugin-0.8.6i-intel.dmg","vlc"); ?>
<?php pkgitem_nomirr( "Web Browser plugin for PowerPC",
               "0.8.6i/macosx","vlc-plugin-0.8.6i-powerpc.dmg","vlc"); ?>
</li>
</ul>

<h2>Last Mac OS X package for 10.3 (release 0.8.6i)</h2>
<p><b>Requires QuickTime 7 or later</b></p>
<ul>
<li>
<?php $nosource = true; ?>
<?php pkgitem_nomirr( "Last Mac OS X package for 10.3 PowerPC (release 0.8.6i)", "0.8.6i/macosx","vlc-0.8.6i-powerpc.dmg","vlc"); ?>
</li>
</ul>

<h2>Older versions</h2>
Use 0.8.4a for 10.2  and 0.7.0 for 10.1.
<?php browse_old( "vlc" ); ?> 
</div>

<div id="right">


  <?php panel_start( "orange" ); ?>
  <h1>How to install</h1>

  <p> VLC for Mac OS X is distributed as a disk image. Download the
  <code>.dmg</code> file, open it, and copy VLC to your hard drive
  (for instance the <code>/Applications</code> folder). Open VLC by
  double-clicking on it. </p>
  <?php panel_end(); ?>

  <?php panel_start( "gray" ); ?>
  <h1>Platform specific packages</h1>
  <p>These packages are provided to save download time and more importantly disk space. Installed, each of these is half as big as the Universal Binary. If you are unsure about your Mac's architecture, <a href="http://support.apple.com/kb/HT1531">click here</a>.</p>
  <br />
  <p><strong>Note:</strong> There is not, and there will never be, a version for Mac&nbsp;OS&nbsp;9.</p>
  <?php panel_end(); ?>

  <h2>Source code</h2>

  <p>If you want, you can download the <a href="download-sources.html">
  source code</a> of VLC media player.</p>


</div>
<?php footer('$Id$'); ?>
