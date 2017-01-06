<?php
   $title = "Official Download of VLC media player for iOS";
   $new_design = true;
   $lang = "en";
   $menu = array( "vlc", "download" );

   $additional_js = array("/js/slimbox2.js", "/js/slick-init.js", "/js/slick.min.js");
   $additional_css = array("/js/css/slimbox2.css", "/style/slick.min.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/language.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");

   $version = $versioniosversion;
?>

<div class="container">
	<?php
	$screenshots = getScreenshots("ios");
	$defaultDetail = getOS("ios");
	?>
    <section class="download-wrapper">
        <div class="row reorder-xs">
            <?php drawScreenshots($screenshots); ?>
            <div class="v-align col-sm-5">
                <div class="center-font-xs">
                    <?php image('largeVLC.png', 'Large Orange VLC media player Traffic Cone Logo', 'big-vlc-img img-responsive visible-xs-inline-block v-align'); ?>
                    <h1 class="v-align bigtitle">
                        VLC for iOS
                    </h1>
                </div>
                <div class="projectDescription hidden-sm hidden-xs">
                    <?php echo
                    _("VLC for iOS can play all your movies and shows in most formats directly without conversion. You can synchronize media to your device using WiFi Upload, iTunes, various Cloud services, or direct downloads from the web."); ?>
                </div>
                <div class="projectDescription visible-xs visible-sm center-font-xs">
                    <?php echo
                    _("VLC for iOS can play all your movies and shows in most formats directly without conversion. You can synchronize media to your device using WiFi Upload, iTunes, various Cloud services, or direct downloads from the web."); ?>
                </div>

			    <div class="inner center-xs">
			        <div class="btn-group">
<a href="https://itunes.apple.com/app/apple-store/id650377962?pt=454758&amp;ct=vodownloadpage&amp;mt=8"><img src="//images.videolan.org/images/appstoredownload-en.png" border="0" /></a>
			        </div>
			        <div id="downloadDetails">
			            Version <span id='downloadVersion'>
			            <?php echo $defaultDetail["latestVersion"] ?></span>&nbsp;&#8226;&nbsp;<span id='downloadOS'><?php echo $defaultDetail["name"]; ?></span>&nbsp;&#8226;&nbsp;<span id='downloadSize'><?php echo $defaultDetail["size"] ?></span>
			        </div>
			    </div>
            </div>
        </div>
    </section>

<h2> Features </h2>
<p>
<ul class="bullets">
  <li>Play all files, in all formats, including exotic ones, like classic VLC media player.</li>
  <li>Play MKV, multiple audio tracks (including 5.1), and subtitles tracks (including SSA!).</li>
  <li>Support for network streams, including HLS, MMS or RTSP.</li>
  <li>Include video filters, playback speed manipulation, and fine seeking.</li>
  <li>A media library, with WiFi Uploads & Downloads, Dropbox, Google Drive, iCloud Drive, OneDrive & Box.com integration and optional passcode lock.</li>
  <li>Web Interface for easy uploads and downloads to/from device.</li>
  <li>Integration for bluetooth headsets and AirPlay.</li>
  <li>Full support for file servers (SMB / Windows shares and FTP)</li>
  <li>Local Network service discovery with UPnP and native support for Plex</li>
  <li>On-the-fly audio and subtitles track synchronization</li>
  <li>Supports iOS 7.0 or later</li>
  <li>Full 64bit support on latest iPhone and latest iPad</li>
  <li>Apple Watch extension to control playback, browse the library and more</li>
  <li>Completely free, libre and open source.</li>
</ul>
</p>

<h2> Devices and iOS version </h2>
<p class="projectDescription">VLC for iOS requires iOS 7.0 or later. It runs on any iPhone, iPad, or iPod touch. Previous releases for iOS 6.1 are available.</p>

<h2> Support </h2>
<p class="projectDescription">You need help with VLC for iOS? Be sure to check <a href="http://forum.videolan.org/viewforum.php?f=36">our forum</a>.</p>

<h2> Source </h2>
<p class="projectDescription">You can find the source code for the last release here:</p>

<?php
   echo "<code><a href='http://get.videolan.org/vlc-iOS/$iosversion/vlc-ios-$iosversion.tar.gz'>VLC for iOS $iosversion source code</a></code><br />"; ?>
<code><a href="http://get.videolan.org/vlc-iOS/2.7.4/MediaLibraryKit-2.6.2.tar.gz">MediaLibraryKit 2.6.2 source code</a></code><br />
<code><a href="http://get.videolan.org/vlc-iOS/2.7.4/VLCKit-3.0.0-pre3.tar.gz">MobileVLCKit 3.0.0-pre3 source code</a></code><br />

<h2> Binary </h2>
<p class="projectDescription">You can also get the binary from our servers instead of the App Store:

<?php
   echo "<code><a href='http://get.videolan.org/vlc-iOS/$iosversion/vlc-ios-$iosversion.ipa'>VLC for iOS $iosversion binary</a></code>."; ?>
   <br/>A binary version of MobileVLCKit is available through <a href="http://cocoapods.org">CocoaPods</a>.
</p>

<h2> License </h2>
<p class="projectDescription">VLC for iOS is bi-licensed under the <a href="http://opensource.org/licenses/MPL-2.0">Mozilla Public License Version 2</a> as well as the <a href="http://opensource.org/licenses/GPL-2.0">GNU General Public License Version 2 or later</a>. You can modify or redistribute its sources under the conditions of these licenses. Note that additional terms apply for trademarks owned by the VideoLAN association.</p>

</div>

<?php
  footer('$Id$');
?>
