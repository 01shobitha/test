<?php
   $title = "VLC for iOS";
   $lang = "en";
   $menu = array( "vlc", "download" );

   $additional_js = array("/js/slimbox2.js");
   $additional_css= array("/js/css/slimbox2.css");

   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

   $version = "2.7.0";
?>

    <h1 class="bigtitle"> VLC for iOS <?php echo $version; ?></h1>

<h2> Introduction </h2>
<p>VLC for iOS can play all your movies and shows in most formats directly without conversion.<br />
You can synchronize media to your device using WiFi Upload, iTunes, various Cloud services, or direct downloads from the web.<br />
</p>

<h2> Features </h2>

<div style="margin-left: 0;margin-right:150px; width:220px; float: right;">
<p><a href="https://itunes.apple.com/app/apple-store/id650377962?pt=454758&ct=vodownloadpage&mt=8"><img src="../images/appstoredownload-en.png" border="0" /></a>
</div>

<p>
<ul class="productDescription">
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
  <li>Completely free, libre and open source.</li>
</ul>
</p>

<?php
function vlcscreenshot($img,$thumb, $desc){
    echo"<div class='screenshot' style='overflow: hidden; width: 300px;'><a href='//images1.videolan.org/vlc/screenshots/$img' rel='lightbox-vlc'><img
    src='//images1.videolan.org/vlc/screenshots/$thumb' alt='VLC for iOS - $desc' /></a>
    </div>";
}
?>
<div style='float: right; width: 450px; padding-left: 70px;'>
    <?php
    vlcscreenshot( "ios2/ipadblackplayback.jpg",
                "ios2/ipadblackplayback-small.jpg",
                "Playback on iPad");
    vlcscreenshot( "ios2/ipadwhitelibrary.jpg",
                "ios2/ipadwhitelibrary-small.jpg",
                "iPad Library" );
    vlcscreenshot( "ios2/iphoneblackplayback.jpg",
                "ios2/iphoneblackplayback-small.jpg",
                "Playback on iPhone" );
    vlcscreenshot( "ios2/iphoneblacklibrary.jpg",
                "ios2/iphoneblacklibrary-small.jpg",
                "Library on iPhone" );
    ?>
</div>

<h2> Devices and iOS version </h2>
<p>VLC for iOS requires iOS 7.0 or later. It runs on any iPhone, iPad, or iPod touch. Previous releases for iOS 6.1 are available.</p>

<h2> Support </h2>
<p> You need help with VLC for iOS? Be sure to check <a href="http://forum.videolan.org/viewforum.php?f=12">our forum</a>.</p>

<h2> Source </h2>
<p> You can find the source code for the last release here:</p>

<?php
   echo "<code><a href='http://get.videolan.org/vlc-iOS/$version/vlc-ios-$version.tar.gz'>VLC for iOS $version source code</a></code><br />"; ?>
<code><a href="http://get.videolan.org/vlc-iOS/2.7.0/MediaLibraryKit-2.6.0.tar.gz">MediaLibraryKit 2.6.0 source code</a></code><br />
<code><a href="http://get.videolan.org/vlc-iOS/2.7.0/VLCKit-3.0.0-pre1.tar.gz">MobileVLCKit 3.0.0-pre1 source code</a></code><br />

<h2> Binary </h2>
<p> You can also get the binary from our servers instead of the App Store:

<?php
   echo "<code><a href='http://get.videolan.org/vlc-iOS/$version/vlc-ios-$version.ipa'>VLC for iOS $version binary</a></code>."; ?>
   <br/>A binary version of MobileVLCKit is available through <a href="http://cocoapods.org">CocoaPods</a>.
</p>

<h2> License </h2>
<p> VLC for iOS is bi-licensed under the <a href="http://opensource.org/licenses/MPL-2.0">Mozilla Public License Version 2</a> as well as the <a href="http://opensource.org/licenses/GPL-2.0">GNU General Public License Version 2 or later</a>. You can modify or redistribute its sources under the conditions of these licenses. Note that additional terms apply for trademarks owned by the VideoLAN association.</p>

<?php
  footer('$Id$');
?>
