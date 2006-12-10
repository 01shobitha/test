<?php
   $title = "VLC media player for Mac OS X";
   $lang = "en";
   $date = "16 April 2001";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

<?php function pkgitemdev($version,$name) { ?><li><a href="http://download.videolan.org/pub/videolan/testing/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a></li><?php } ?>

<h1> VLC media player for Mac OS X </h1>

<div id="left">

<!--
<h2>Looking for more Mac OS X developers</h2>
<p> We are currently looking for more developers for the Mac OS X port of VLC. Needed skills are C-knowledge and some experience in programming for Mac OS X by using Cocoa and Xcode. Know-how on programming A/V applications will probably make the work easier for you, but is not essential.</p><p>At present, one of our goals is to create a new more user-friendly preferences-window. Thus, if you have experience on this topic, any help will be appreciated, but there are also other subjects where we would be happy about another helping hand.</p>
<p>If you would like to join the project, feel free to send us an e-mail to the <a href="http://developers.videolan.org/lists.html">vlc-devel mailing list</a> or to contact us through our <a href="http://forum.videolan.org/viewtopic.php?t=3675&amp;start=0&amp;postdays=0&amp;postorder=asc&amp;highlight=">forum</a>. </p>
-->


<h2>Latest Mac OS X package for 10.3.9 up to 10.4 (release 0.8.6)</h2>

<?php pkgitem( "Universal Binary",
               "0.8.6/macosx","vlc-0.8.6.dmg","vlc"); ?>

<?php pkgitem( "Intel package",
               "0.8.6/macosx","vlc-0.8.6-intel.dmg","vlc"); ?>

<?php pkgitem( "PowerPC package",
               "0.8.6/macosx","vlc-0.8.6-powerpc.dmg","vlc"); ?>
<!--
<?php pkgitem( "PowerPC mozilla/safari plugin package",
               "0.8.6/macosx/powerpc","vlc-plugin-0.8.5.dmg","vlc" ); ?>
-->
<h2>Last Mac OS X package for 10.2, 10.3 up to 10.3.8 (release 0.8.4a)</h2>

<p><b>Requires <a href="http://www.apple.com/support/downloads/quicktime652formac.html">QuickTime 6.5.2</a> or later</b></p>
<ul>
<li>
<?php pkgitem_nomirr( "Last Mac OS X package for 10.2, 10.3 up to 10.3.8 (release 0.8.4a)", "0.8.4a/macosx","vlc-0.8.4a.dmg","vlc"); ?>
</li>
</ul>

<h2>Last Mac OS X package for 10.1 (release 0.7.0)</h2>
<ul>  <li>
<?php pkgitem_nomirr( "Last Mac OS X package for 10.1 (release 0.7.0)", "0.7.0/macosx","vlc-0.7.0.dmg","vlc"); ?></li>
</ul>

<h2>Older versions</h2>
<?php browse_old( "vlc" ); ?> 
</div>

<div id="right">


  <?php panel_start( "orange" ); ?>
  <h1>How to install</h1>

  <p> VLC for Mac OS X is distributed as a disk image. Download the
  <code>.dmg</code> file, open it, and copy it to your hard drive
  (for instance the <code>/Applications</code> folder). Open VLC by
  double-clicking on it. </p>
  <?php panel_end(); ?>

  <?php panel_start( "gray" ); ?>
  <p><strong>Note:</strong> There is not, and there will never be, a version for Mac&nbsp;OS&nbsp;9.</p>
  <?php panel_end(); ?>

  <h2>Source code</h2>

  <p>If you want, you can download the <a href="download-sources.html">
  source code</a> of VLC media player.</p>


</div>
<?php footer('$Id$'); ?>
