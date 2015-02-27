<?php
   $language = "";
   $title = "Download official VLC media player for Mac OS X";
   $additional_css = array("/style/countries.css","/style/panels.css");
   $alternate_lang = array( "an", "ast", "bn_IN", "bs", "cs", "cy", "da", "de", "en", "es", "et", "fr", "gd", "gl", "gu", "he", "hi", "hr", "is", "it", "ja", "km", "kn", "mr", "my", "nb", "nl", "or", "pl", "pt", "pt_BR", "ru", "sk", "sr", "th", "tr", "uk", "ur", "wa", "zh" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

<h1 class="bigtitle"> VLC media player for Mac OS X </h1>

<div id="left">

<?php
$vlc_version = "1.0.5";
$vlc_version_old = "2.0.10";
$vlc_version_intel = "2.2.0";
?>

<h1>Download latest VLC for Mac OS X 10.6 and later</h1>

<?php
pkgitem_sf( "VLC for OS X $vlc_version_intel",
    "$vlc_version_intel/macosx","vlc-$vlc_version_intel.dmg",        "vlc", "64 bits dmg package", "4b9ff700342cf783af8d6b0a4accf26b");
?>

<div class="clearme"> </div>
<br />
<br />
<br />

<h2>Download VLC for Mac OS X 10.5 Leopard (release <?php echo $vlc_version_old; ?>)</h2>
<?php
pkgitem_sf( "32 bits Intel Mac",
    "$vlc_version_old/macosx","vlc-$vlc_version_old-intel32.dmg","vlc", "dmg package", "5b3aedda97e06500c7954c56f0902cb3");
pkgitem_sf( "PowerPC Mac",
    "$vlc_version_old/macosx","vlc-$vlc_version_old-powerpc.dmg","vlc", "dmg package", "4e4c956647ba6ed948f9fd89f250c999"); ?>


<div class="clearme"> </div>
<br />
<br />
<br />

<h2>Web browser plugins Mac OS X 10.5 Leopard (release <?php echo $vlc_version; ?>)</h2>
<p>These plugins <b>will not</b> run on 10.6 or later.</p>

<?php pkgitem_sf( "Web plugin for Intel Mac",
               "$vlc_version/macosx","vlc-plugin-$vlc_version-intel.dmg","vlc", "dmg package");

    echo '<div class="clearme"> </div>';
    pkgitem_sf( "Web plugin for PowerPC Mac",
               "$vlc_version/macosx","vlc-plugin-$vlc_version-powerpc.dmg","vlc", "dmg package"); ?>

<div class="clearme"> </div>
<br />
<br />
<br />

<div class="clearme"> </div>
<h2>Download older versions of VLC media player</h2>
<p>Use VLC <b>0.9.10</b> for 10.4 Tiger. <b>Mac OS X 10.4.7</b> or later, is <b>required</b>.</p>
<p>Use VLC <b>0.8.6i</b> for 10.3 Panther.</p>
<p>Use VLC <b>0.8.4a</b> for 10.2 Jaguar.</p>
<p>Use VLC <b>0.7.0</b> for 10.1 Puma .</p>

<?php browse_old( "vlc" ); ?>

  <h1>Source code</h1>

  <p>If you want, you can download the <a href="download-sources.html">
  source code</a> of VLC media player.</p>


</div>
<?php footer('$Id$'); ?>
