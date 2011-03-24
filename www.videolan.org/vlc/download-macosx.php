<?php
   $title = "Official download of VLC media player for Mac OS X";
   $additional_css = array("/countries.css","/panels.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

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
$vlc_version_ppc = "1.1.8";
$vlc_version_intel = "1.1.8";
?>

<h1>Download latest VLC for Mac OS X 10.5 and later</h1>

<?php
pkgitem_sf( "32/64 bits Intel Mac, 1.1.8",
    "$vlc_version_intel/macosx","vlc-$vlc_version_intel.dmg",        "vlc", "dmg package", "efec9905c76276fb8803973c9ca3f950");
pkgitem_sf( "32 bits Intel Mac, 1.1.8",
    "$vlc_version_intel/macosx","vlc-$vlc_version_intel-intel.dmg",  "vlc", "dmg package", "7b3c66b0d539fbe6a179ce43647b9058");
pkgitem_sf( "64 bits Intel Mac, 1.1.8",
    "$vlc_version_intel/macosx","vlc-$vlc_version_intel-intel64.dmg","vlc", "dmg package", "aa4865f69761615c4147259b2e208ce6");

pkgitem_sf( "PowerPC Mac, 1.1.8",
    "$vlc_version_ppc/macosx","vlc-$vlc_version_ppc-powerpc.dmg",    "vlc", "dmg package", "97df7bfa3e61ac90ef2ed44c0fe0a8ec"); ?>


<div class="clearme"> </div>
<h1>Web browser plugins for 10.5 and later (release <?php echo $vlc_version; ?>)</h1>

<?php pkgitem_sf( "Web plugin for Intel Mac",
               "$vlc_version/macosx","vlc-plugin-$vlc_version-intel.dmg","vlc", "dmg package");

    echo '<div class="clearme"> </div>';
    pkgitem_sf( "Web plugin for PowerPC Mac",
               "$vlc_version/macosx","vlc-plugin-$vlc_version-powerpc.dmg","vlc", "dmg package"); ?>

<div class="clearme"> </div>
<br />
<br />
<br />
<h2>Download VLC for Mac OS X 10.4 Tiger (release 0.9.10)</h2>
<p><b>Mac OS X 10.4.7</b> or later, is <b>required</b>.</p>
<?php $vlc_version = "0.9.10"; ?>
<?php pkgitem_sf( "Universal Binary, 0.9.10",
               "$vlc_version/macosx","vlc-$vlc_version.dmg","vlc", "dmg package"); ?>

<div class="clearme"> </div>
<h2>Download older versions of VLC media player</h2>
<p>Use VLC <b>0.8.6i</b> for 10.3 Panther.</p>
<p>Use VLC <b>0.8.4a</b> for 10.2 Jaguar.</p>
<p>Use VLC <b>0.7.0</b> for 10.1 Puma .</p>

<?php browse_old( "vlc" ); ?>

  <h1>Source code</h1>

  <p>If you want, you can download the <a href="download-sources.html">
  source code</a> of VLC media player.</p>


</div>
<?php footer('$Id$'); ?>
