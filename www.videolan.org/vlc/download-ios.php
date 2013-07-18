<?php
   $title = "VLC for iOS";
   $lang = "en";
   $menu = array( "vlc", "download" );
   
   $additional_js = array("/js/slimbox2.js");
   $additional_css= array("/js/css/slimbox2.css");
   
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1 class="bigtitle"> VLC for iOS 2.0</h1>

<h2> Introduction </h2>
<p>VLC for iOS can play all your movies and shows in most formats directly without conversion. You can synchronize media to your device using iTunes, WiFi Upload, Dropbox, or direct downloads from the web.</p>

<h2> Features </h2>
<p class="productDescription">
<ul>
  <li>Plays all files, in all formats, like VLC media player for Desktops.</li>
  <li>A video media library, with WiFi Upload, Dropbox integration and optional passcode lock.</li>
  <li>Support for network streams, including HLS.</li>
  <li>Supports iOS 5.1 or later including the first iPad.</li>
  <li>Includes video filters, playback speed manipulation, and full subtitles support.</li>
</ul>
</p>

<div style="margin-left:auto;margin-right:auto;width:172px;">
<p><a href="https://itunes.apple.com/app/id650377962"><img src="../images/appstoredownload-en.png" border="0" /></a>
</div>

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
<p>VLC for iOS requires iOS 5.1 or later. It runs on any iPhone, iPad, or iPod touch.</p>

<h2> Support </h2>
<p> You need help with VLC for iOS? Be sure to check <a href="http://forum.videolan.org/viewforum.php?f=12">our forum</a>.</p>

<h2> Source </h2>
<p> You can find the source code for the last release here:</p>
<code><a href="http://download.videolan.org/pub/videolan/vlc-iOS/2.0.1/vlc-iOS-2.0.1.tar.gz">VLC for iOS 2.0.1 source code</a></code><br />
<code><a href="http://download.videolan.org/pub/videolan/vlc-iOS/2.0.1/MediaLibrary-2.0.tar.gz">MediaLibraryKit 2.0.0 source code</a></code><br />
<code><a href="http://download.videolan.org/pub/videolan/vlc-iOS/2.0.1/VLCKit-2.1.0-pre1.tar.gz">MobileVLCKit 2.1.0-pre1 source code</a></code><br />
<p> Additionally, the latest code is always available on our <a href="http://git.videolan.org">git repositories</a>.</p>

<h2> Binary </h2>
<p> You can also get the binary from our servers instead of the App Store. Note that it probably won't run on your device.<br />
<code><a href="http://download.videolan.org/pub/videolan/vlc-iOS/2.0.1/VLC-2.0.1-iOS-binary.zip">VLC for iOS 2.0.1 binary</a></code>
</p>

<h2> License </h2>
<p> VLC for iOS is bi-licensed under the <a href="http://opensource.org/licenses/MPL-2.0">Mozilla Public License Version 2</a> as well as the <a href="http://opensource.org/licenses/GPL-2.0">GNU General Public License Version 2 or later</a>. You can modify or redistribute its sources under the conditions of these licenses. Note that additional terms apply for trademarks owned by the VideoLAN association.</p>

<?php
  footer('$Id$');
?>
