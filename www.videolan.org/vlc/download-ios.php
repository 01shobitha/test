<?php
   $title = "VLC media player for iOS";
   $lang = "en";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1 class="bigtitle"> VLC for iOS</h1>

<h2> Introduction </h2>
<p>VLC for iOS can play all your movies and shows in most formats directly without conversion. You can synchronize media to your device using iTunes, WiFi Upload, Dropbox, or direct downloads from the web.</p>

<div style="margin-left:auto;margin-right:auto;width:172px;">
<p><a href="https://itunes.apple.com/app/id650377962"><img src="../images/appstoredownload-en.png" border="0" /></a>
</div>

<h2> Devices and iOS version </h2>
<p>VLC for iOS requires iOS 5.1 or later. It runs on any iPhone, iPad, or iPod touch.</p><br />

<h2> License </h2>
<p> VLC for iOS is bi-licensed under the <a href="http://opensource.org/licenses/MPL-2.0">Mozilla Public License Version 2</a> as well as the <a href="http://opensource.org/licenses/GPL-2.0">GNU General Public License Version 2 or later</a>. You can modify or redistribute its sources under the conditions of these licenses. Note that additional terms apply for trademarks owned by the VideoLAN association.</p><br />

<h2> Appearance </h2>
<div style='float: right; width: 450px; padding-left: 70px;'>
    <?php
    vlcscreenshot( "ios2/ipadblackplayback.png",
                "ios2/ipadblackplayback-small.png",
                "Playback on iPad");
    vlcscreenshot( "ios2/ipadwhitelibrary.png",
                "ios2/ipadwhitelibrary-small.png",
                "iPad Library" );
    vlcscreenshot( "ios2/iphoneblackplayback.png",
                "ios2/iphoneblackplayback-small.png",
                "Playback on iPhone" );
    vlcscreenshot( "ios2/iphoneblacklibrary.png",
                "ios2/iphoneblacklibrary-small.png",
                "Library on iPhone" );
    ?>
</div>
<br />

<h2> Source </h2>
<p> You can find the source code for the last release here:</p>
<code><a href="http://download.videolan.org/pub/videolan/vlc-iOS/2.0.1/VLC-2.0.1-iOS.tar.bz2">VLC for iOS 2.0.1 source code</a></code><br />
<code><a href="http://download.videolan.org/pub/videolan/vlc-iOS/2.0.1/MediaLibraryKit-2.0.0.zip">MediaLibraryKit 2.0.0 source code</a></code><br />
<code><a href="http://download.videolan.org/pub/videolan/vlc-iOS/2.0.1/MobileVLCKit-2.1.0-pre1.tar.gz">MobileVLCKit 2.1.0-pre1 source code</a></code><br />
<p> Additionally, the latest code is always available on our <a href="http://git.videolan.org">git repositories</a>.</p><br />

<h2> Binary </h2>
<p> You can also get the binary from our servers instead of the App Store. Note that it probably won't run on your device.<br />
<code><a href="http://download.videolan.org/pub/videolan/vlc-iOS/2.0.1/VLC-2.0.1-iOS-binary.zip">VLC for iOS 2.0.1 binary</a></code>
</p>

<?php
  footer('$Id$');
?>
