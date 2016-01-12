<?php
   $title = "VLC for Apple TV";
   $lang = "en";
   $menu = array( "vlc", "download" );

   $additional_js = array("/js/slimbox2.js");
   $additional_css= array("/js/css/slimbox2.css");

   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

   $version = "1.0.0";
?>

    <h1 class="bigtitle"> VLC for Apple TV <?php echo $version; ?></h1>

<h2> Introduction </h2>
<p>VLC on the Apple TV allows you to get access to all your files and video streams in their native formats without conversions, directly on the new Apple device and your TV.<br />
<br />
Following the VLC goal &quot;<i>VLC plays everything and runs everywhere</i>&quot;, you will get every feature and format support you are used to in VLC, and a few Apple TV specific features.<br />
And, following VideoLAN's mission, VLC on the Apple TV is fully free and open source, and available right now on the App Store.
</p>

<h2> Features </h2>

<div style="margin-left: 0;margin-right:150px; width:220px; float: right;">
<p><a href="https://itunes.apple.com/app/apple-store/id650377962?pt=454758&ct=vodownloadpage&mt=8"><img src="../images/appstoredownload-en.png" border="0" /></a>
</div>

<p>
<ul class="productDescription">
  <li>Play all files, in all formats, including exotic ones, like classic VLC media player.</li>
  <li>Play MKV, multiple audio tracks, and subtitles tracks (including SSA!).</li>
  <li>Support for network streams, including HLS, MMS or RTSP.</li>
  <li>Playback speed manipulation and fine seeking.</li>
  <li>Web Interface for easy playback from any device.</li>
  <li>Full support for file servers (SMB / Windows shares, and FTP)</li>
  <li>Local Network service discovery with UPnP and native support for Plex</li>
  <li>On-the-fly audio and subtitles track synchronization</li>
  <li>Full 64bit support</li>
  <li>Completely free, libre and open source.</li>
</ul>
</p>

<div style='float: left; width: 100%; height: 1400px; padding-left: 70px;'>
	<img class="screenshot" style="width: 450px"' src="http://images1.videolan.org/vlc/screenshots/appletv/Apple-TV-device-playback-small.jpg" alt="VLC for Apple TV" /> <br/>
	<img class="screenshot" style="width: 450px"' src="http://images1.videolan.org/vlc/screenshots/appletv/Apple-TV-device-playback-speed-small.jpg" alt="VLC for Apple TV" /> <br/>
	<img class="screenshot" style="width: 450px"' src="http://images1.videolan.org/vlc/screenshots/appletv/Apple-TV-device-browse-small.jpg" alt="VLC for Apple TV" /> <br/>
	<img class="screenshot" style="width: 450px"' src="http://images1.videolan.org/vlc/screenshots/appletv/Apple-TV-device-ipad-iphone-playback-small.jpg" alt="VLC for Apple TV" />
	<br/>
	<img class="screenshot" style="width: 450px"' src="http://images1.videolan.org/vlc/screenshots/appletv/Apple-TV-device-ipad-iphone-browse-small.jpg" alt="VLC for Apple TV" />
    <br />
</div>

<h2> Support </h2>
<p> You need help with VLC for Apple TV? Be sure to check <a href="http://forum.videolan.org/viewforum.php?f=36">our forum</a>.</p>

<h2> Source </h2>
<p> You can find the source code for the latest release here:</p>

<?php
   echo "<code><a href='http://get.videolan.org/vlc-appletv/$version/vlc-appletv-$version.tar.gz'>VLC for Apple TV $version source code</a></code><br />"; ?>
<code><a href="http://get.videolan.org/vlc-iOS/2.7.1/VLCKit-3.0.0-pre2.tar.gz">MobileVLCKit 3.0.0-pre2 source code</a></code><br />

<h2> License </h2>
<p> VLC for Apple TV is bi-licensed under the <a href="http://opensource.org/licenses/MPL-2.0">Mozilla Public License Version 2</a> as well as the <a href="http://opensource.org/licenses/GPL-2.0">GNU General Public License Version 2 or later</a>. You can modify or redistribute its sources under the conditions of these licenses. Note that additional terms apply for trademarks owned by the VideoLAN association.</p>

<?php
  footer('$Id$');
?>
