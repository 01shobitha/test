<?php
   $title = "VLC for iOS";
   $lang = "en";
   $menu = array( "vlc", "download" );

   $additional_js = array("/js/slimbox2.js");
   $additional_css= array("/js/css/slimbox2.css");

   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

   $version = "2.3.0";
?>

    <h1 class="bigtitle"> VLC for iOS <?php echo $version; ?></h1>

<h2> Introduction </h2>
<p>VLC for iOS can play all your movies and shows in most formats directly without conversion.<br />
You can synchronize media to your device using WiFi Upload, iTunes, Dropbox, or direct downloads from the web.<br />
</p>

<h2> Features </h2>

<div style="margin-left: 0;margin-right:150px; width:220px; float: right;">
<p><a href="https://itunes.apple.com/app/vlc-ios/id650377962"><img src="../images/appstoredownload-en.png" border="0" /></a>
</div>

<p>
<ul class="productDescription">
  <li>Play all files, in all formats, including exotic ones, like classic VLC media player.</li>
  <li>Play MKV, multiple audio tracks (including 5.1), and subtitles tracks (including SSA!).</li>
  <li>Support for network streams, including HLS, MMS or RTSP.</li>
  <li>Include video filters, playback speed manipulation, and fine seeking.</li>
  <li>A media library, with WiFi Upload, Dropbox & Google Drive integration and optional passcode lock.</li>
  <li>Integration for bluetooth headsets and AirPlay.</li>
  <li>Local Network service discovery with UPnP</li>
  <li>Supports iOS 6.1 or later</li>
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
<p>VLC for iOS requires iOS 6.1 or later. It runs on any iPhone, iPad, or iPod touch. For iOS 5.1, an older version is still available.</p>

<h2> Support </h2>
<p> You need help with VLC for iOS? Be sure to check <a href="http://forum.videolan.org/viewforum.php?f=12">our forum</a>.</p>

<h2> Source </h2>
<p> You can find the source code for the last release here:</p>

<?php
   echo "<code><a href='http://download.videolan.org/pub/videolan/vlc-iOS/$version/vlc-iOS-$version.tar.gz'>VLC for iOS $version source code</a></code><br />"; ?>
<code><a href="http://download.videolan.org/pub/videolan/vlc-iOS/2.2.1/MediaLibraryKit-2.2.1.tar.gz">MediaLibraryKit 2.2.1 source code</a></code><br />
<code><a href="http://download.videolan.org/pub/videolan/vlc-iOS/2.2.2/VLCKit-2.2.0-pre3.tar.gz">MobileVLCKit 2.2.0-pre3 source code</a></code><br />

<p> Additionally, the latest code is always available on our <a href="http://git.videolan.org/?p=vlc-ports/ios.git;a=summary">git repositories</a>.</p>

<h2> Developers </h2>
<p> VLC for iOS is quite new and developed by volunteers! We therefore welcome all contributions.<br />
You can see the <a href="//wiki.videolan.org/iOSCompile">instructions to build</a> on our <a href="//wiki.videolan.org">Wiki</a>.
</p>

<h2> Binary </h2>
<p> You can also get the binary from our servers instead of the App Store:

<?php
   echo "<code><a href='http://download.videolan.org/pub/videolan/vlc-iOS/$version/vlc-iOS-$version.ipa'>VLC for iOS $version binary</a></code>."; ?>
</p>

<h2> License </h2>
<p> VLC for iOS is bi-licensed under the <a href="http://opensource.org/licenses/MPL-2.0">Mozilla Public License Version 2</a> as well as the <a href="http://opensource.org/licenses/GPL-2.0">GNU General Public License Version 2 or later</a>. You can modify or redistribute its sources under the conditions of these licenses. Note that additional terms apply for trademarks owned by the VideoLAN association.</p>

<?php
  footer('$Id$');
?>
