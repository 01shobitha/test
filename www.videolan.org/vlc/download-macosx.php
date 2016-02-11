<?php
   $title = "Official Download of VLC media player for Mac OS X";
   $new_design = true;
   $lang = "en";
   $menu = array( "vlc", "download" );

   $additional_js = array("/js/slimbox2.js", "/js/slick-init.js", "/js/slick.min.js");
   $additional_css = array("/js/css/slimbox2.css", "/style/slick.min.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/language.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");

   $dropdownItems = array(
       array(
           "name"       => "VLC.app dmg package",
           "location"   => "$dlBase/$macosxversion/macosx/vlc-$macosxversion.dmg",
       ),
       array(
           "name"       => "VLC Web Browser plugin package",
           "location"   => "$dlBase/$macosxversion/macosx/VLC-webplugin-$macosxversion.dmg",
       )
   );

?>

<div class="container">
    <?php drawVLCdownloadSection("osx", $dropdownItems, false, "VLC for Mac OS X"); ?>

    <h2>Devices and Mac OS X version</h2>
    <p class="projectDescription">VLC media player requires Mac OS X 10.6 or later. It runs on any 64bit Intel-based Mac. Previous devices are supported by older releases.<br />Note that the first generation of Intel-based Macs equipped with Core Solo or Core Duo processors are no longer supported. Please use version 2.0.10 linked below.</p>

    <h2>Older versions of Mac OS X and VLC media player</h2>
    <p>We provide older releases for users who wish to deploy our software on older Mac OS X releases. You can find recommendations for the respective operating system version below. Note that <b>support ended</b> for all releases listed below and hence they won't receive any updates.</p>
    <p>If you need help in finding the correct package matching your Mac's processor architecture, please see <a href="https://support.apple.com/HT201580">this official support document by Apple</a>.</p>
    <h3>Mac OS X 10.5 Leopard</h3>
    <p>Use VLC 2.0.10. Get it for <a href="https://get.videolan.org/vlc/2.0.10/macosx/vlc-2.0.10-powerpc.dmg">PowerPC</a> or <a href="https://get.videolan.org/vlc/2.0.10/macosx/vlc-2.0.10-intel32.dmg">32bit Intel</a>.</p>
    <h3>Mac OS X 10.4 Tiger</h3>
    <p><b>Mac OS X 10.4.7</b> or later is <b>required</b></p>
    <p>Use VLC 0.9.10. Get it for <a href="https://get.videolan.org/vlc/0.9.10/macosx/vlc-0.9.10-powerpc.dmg">PowerPC</a> or <a href="https://get.videolan.org/vlc/0.9.10/macosx/vlc-0.9.10-intel.dmg">Intel</a>.</p>
    <h3>Mac OS X 10.3 Panther</h3>
    <p><b>QuickTime 6.5.2</b> or later is <b>required</b></p>
    <p>Use VLC 0.8.6i. Get it for <a href="https://get.videolan.org/vlc/0.8.6i/macosx/vlc-0.8.6i-powerpc.dmg">PowerPC</a>.</p>
    <h3>Mac OS X 10.2 Jaguar</h3>
    <p>Use VLC 0.8.4a. Get it for <a href="https://get.videolan.org/vlc/0.8.4a/macosx/vlc-0.8.4a.dmg">PowerPC</a>.</p>
    <h3>Mac OS X 10.0 Cheetah and 10.1 Puma</h3>
    <p>Use VLC 0.7.0. Get it for <a href="https://get.videolan.org/vlc/0.7.0/macosx/vlc-0.7.0.dmg">PowerPC</a>.</p>
</div>

<?php footer('$Id$'); ?>
