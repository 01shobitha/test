<?php
   $language = "";
   $title = "Download official VLC media player for Mac OS X";
   $additional_css = array("/style/countries.css","/style/panels.css");
   $alternate_lang = array( "fr", "ru", "en", "de", "tr", "cs", "hi", "he", "ja", "pl", "wa" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

<h1 class="bigtitle"> VLC media player for Mac OS X </h1>

<div id="left">

<?php
$vlc_version = "1.0.5";
$vlc_version_ppc = "2.0.3";
$vlc_version_intel = "2.0.3";
?>

<h1>Download latest VLC for Mac OS X 10.5 and later</h1>
<p>64bit mode requires Mac OS X 10.6 or later</p>

<?php
pkgitem_sf( "32/64 bits Intel Mac, $vlc_version_intel",
    "$vlc_version_intel/macosx","vlc-$vlc_version_intel.dmg",        "vlc", "dmg package", "649f50c602d5e4380d21d74bf6197f62");
pkgitem_sf( "32 bits Intel Mac, $vlc_version_intel",
    "$vlc_version_intel/macosx","vlc-$vlc_version_intel-intel32.dmg","vlc", "dmg package", "280b8a984420b86c3549716c3bf6d1a0");
pkgitem_sf( "64 bits Intel Mac, $vlc_version_intel",
    "$vlc_version_intel/macosx","vlc-$vlc_version_intel-intel64.dmg","vlc", "dmg package", "96d7a5bd568b768fb953222f35ae9865");
pkgitem_sf( "PowerPC Mac, $vlc_version_intel",
    "$vlc_version_ppc/macosx","vlc-$vlc_version_ppc-powerpc.dmg",    "vlc", "dmg package", "23b4ee9634b4762a348447ba4a9187e3"); ?>


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
