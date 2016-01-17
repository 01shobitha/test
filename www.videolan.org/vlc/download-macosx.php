<?php
   $language = "";
   $title = "Official Download of VLC media player for Mac OS X";
   $new_design = true;
   $additional_js = array("/js/slimbox2.js", "/js/slick-init.js", "/js/slick.min.js");
   $additional_css = array("/js/css/slimbox2.css", "/style/slick.min.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/language.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
   $dropdownItems = array(
       array(
           "name"       => "VLC.app dmg package",
           "location"   => "vlc-$macosxversion_intel.dmg",
       ),
       array(
           "name"       => "VLC Web Browser plugin package",
           "location"   => "VLC-webplugin-$macosxversion_intel.dmg",
       )
   );
?>

<?php
$vlc_version_old = "2.0.10";
?>

<div class="container">
    <?php drawVLCdownloadSection("osx", $dropdownItems, false, "VLC for Mac OS X"); ?>
	<h2>VLC for Mac OS X 10.5 Leopard (release <?php echo $vlc_version_old; ?>)</h2>
	<p>Note that this version is <b>no longer maintained</b> and will not receive any updates.</p>
	<p>Need help to download the correct package for your Mac? <a href="https://support.apple.com/en-us/HT201580">Click here</a>.</p>
	<?php
	pkgitem_sf( "Intel (32 bit)",
	    "$vlc_version_old/macosx","vlc-$vlc_version_old-intel32.dmg","vlc", "dmg package", "5b3aedda97e06500c7954c56f0902cb3");
	pkgitem_sf( "PowerPC",
	    "$vlc_version_old/macosx","vlc-$vlc_version_old-powerpc.dmg","vlc", "dmg package", "4e4c956647ba6ed948f9fd89f250c999"); ?>
    <h2>Older versions</h2>
	<p>Use VLC <b>0.9.10</b> for 10.4 Tiger. <b>Mac OS X 10.4.7</b> or later is <b>required</b>.</p>
	<p>Use VLC <b>0.8.6i</b> for 10.3 Panther.</p>
	<p>Use VLC <b>0.8.4a</b> for 10.2 Jaguar.</p>
	<p>Use VLC <b>0.7.0</b> for 10.1 Puma .</p>
    <?php browse_old("vlc") ?>
    </div>
</div>
<?php footer('$Id$'); ?>
