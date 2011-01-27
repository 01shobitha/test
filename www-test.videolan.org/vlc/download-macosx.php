<?php
   $title = "VLC media player for Mac OS X";
   $lang = "en";
   $menu = array( "vlc", "download" );
   $additional_css = array("/countries.css","/panels.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

<?php function pkgitemdev($version,$name) { ?><li><a href="http://download.videolan.org/pub/videolan/testing/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a></li><?php } ?>

<h1 class="bigtitle"> VLC media player for Mac OS X </h1>

<div id="left">

<!--
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
-->

<?php
$vlc_version = "1.0.5";
$vlc_version_ppc = "1.1.6";
$vlc_version_intel = "1.1.6";
?>

<h1>Latest version for 10.5 and later</h1>

<?php
    pkgitem_sf( "32/64 bits Intel Mac, 1.1.6",
        "$vlc_version_intel/macosx","vlc-$vlc_version_intel.dmg","vlc",
             "dmg package",         "603a68fda4e67afe9cb7fb46fefdbd25");
    pkgitem_sf( "32 bits Intel Mac, 1.1.6",
               "$vlc_version_intel/macosx","vlc-$vlc_version_intel-intel.dmg","vlc", "dmg package",   "fee9b86bc25a59f1442fb6c6481721de");
    pkgitem_sf( "64 bits Intel Mac, 1.1.6",
               "$vlc_version_intel/macosx","vlc-$vlc_version_intel-intel64.dmg","vlc", "dmg package", "9217b1c5963289df5e3ff9007c0ed280");

    pkgitem_sf( "PowerPC Mac, 1.1.6",
               "$vlc_version_ppc/macosx","vlc-$vlc_version_ppc-powerpc.dmg","vlc", "dmg package", "f27874ccab7f2af3c8d433c2f56b333d"); ?>


<div class="clearme"> </div>
<h1>Web browser plugins for 10.5 and later (release <?php echo $vlc_version; ?>)</h1>

<?php pkgitem_sf( "Web plugin for Intel Mac",
               "$vlc_version/macosx","vlc-plugin-$vlc_version-intel.dmg","vlc", "dmg package");

    echo '<div class="clearme"> </div>';
    pkgitem_sf( "Web plugin for PowerPC Mac",
               "$vlc_version/macosx","vlc-plugin-$vlc_version-powerpc.dmg","vlc", "dmg package"); ?>

<div class="clearme"> </div>
<h2>Latest Mac OS X package for 10.4 (release 0.9.10)</h2>
<p><b>Mac OS X 10.4.7</b> or later, is <b>required</b>.</p>
<?php $vlc_version = "0.9.10"; ?>
<?php pkgitem_sf( "Universal Binary, 0.9.10",
               "$vlc_version/macosx","vlc-$vlc_version.dmg","vlc", "dmg package"); ?>

<div class="clearme"> </div>
<h2>Older versions</h2>
<p>Use 0.8.6i for 10.3.</p>
<p>Use VLC 0.8.4a for 10.2.</p>
<p>Use 0.7.0 for 10.1.</p>

<?php browse_old( "vlc" ); ?>

  <h1>Source code</h1>

  <p>If you want, you can download the <a href="download-sources.html">
  source code</a> of VLC media player.</p>


</div>
<?php footer('$Id$'); ?>
