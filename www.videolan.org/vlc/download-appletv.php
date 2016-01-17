<?php
   $title = "Official Download of VLC media player for Apple TV";
   $new_design = true;
   $lang = "en";
   $menu = array( "vlc", "download" );

   $additional_js = array("/js/slimbox2.js", "/js/slick-init.js", "/js/slick.min.js");
   $additional_css = array("/js/css/slimbox2.css", "/style/slick.min.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/language.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");

   $version = "1.0.0";
?>

<div class="container">
    <?php
    $screenshots = getScreenshots("tvos");
    $defaultDetail = getOS("tvos");
    ?>
    <section class="download-wrapper">
        <div class="row reorder-xs">
            <?php
                echo '<div class="v-align carousel-padding-xs col-xs-12 col-sm-5 col-sm-offset-1 col-sm-pull-1"><div id="header-carousel">';
                $first = true;
                foreach($screenshots as $screenshot) {
                    $src = $first ? $screenshot['src'] : '';
                    $srcLazy = $first ? '' : $screenshot['src'];
                    $dom  = '<div class="screenshot2">';
                    $dom .= '<img src="'.$src.'" alt="'.$screenshot['name'].'" data-lazy="'.$srcLazy.'">';
                    $dom .= '</div>';
                    echo $dom;
                    $first = false;
                }
                echo '</div></div>';
            ?>
            <div class="v-align col-sm-5">
                <div class="center-font-xs">
                    <?php image('largeVLC.png', 'Large Orange VLC media player Traffic Cone Logo', 'big-vlc-img img-responsive visible-xs-inline-block v-align'); ?>
                    <h1 class="v-align bigtitle">
                        VLC for Apple TV
                    </h1>
                </div>
                <div class="projectDescription hidden-sm hidden-xs">
                    <?php echo
                    _("VLC on the Apple TV allows you to get access to all your files and video streams in their native formats without conversions, directly on the new Apple device and your TV. Following the VLC goal &quot;<i>VLC plays everything and runs everywhere</i>&quot;, you will get every feature and format support you are used to in VLC, and a few Apple TV specific features. And, following VideoLAN's mission, VLC on the Apple TV is fully free and open source, and available right now on the App Store."); ?>
                </div>
                <div class="projectDescription visible-xs visible-sm center-font-xs">
                    <?php echo
                    _("VLC on the Apple TV allows you to get access to all your files and video streams in their native formats without conversions, directly on the new Apple device and your TV. Following the VLC goal &quot;<i>VLC plays everything and runs everywhere</i>&quot;, you will get every feature and format support you are used to in VLC, and a few Apple TV specific features. And, following VideoLAN's mission, VLC on the Apple TV is fully free and open source, and available right now on the App Store."); ?>
                </div>

                <div class="inner center-xs">
                    <div class="btn-group">
<a href="https://itunes.apple.com/app/apple-store/id650377962?pt=454758&ct=vodownloadpage&mt=8"><img src="../images/appstoredownload-en.png" border="0" /></a>
                    </div>
                    <div id="downloadDetails">
                        Search the store on Apple TV<br>
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

<h2> Devices and tvOS version </h2>
<p class="projectDescription">VLC for Apple TV requires tvOS 9.0 or later. It runs on the fourth generation Apple TV. Previous devices are not supported.</p>

<h2> Support </h2>
<p class="projectDescription">You need help with VLC for Apple TV? Be sure to check <a href="http://forum.videolan.org/viewforum.php?f=36">our forum</a>.</p>

<h2> Source </h2>
<p class="projectDescription">You can find the source code for the latest release here:</p>

<?php
   echo "<code><a href='http://get.videolan.org/vlc-appletv/$version/vlc-appletv-$version.tar.gz'>VLC for Apple TV $version source code</a></code><br />"; ?>
<code><a href="http://get.videolan.org/vlc-iOS/2.7.1/VLCKit-3.0.0-pre2.tar.gz">MobileVLCKit 3.0.0-pre2 source code</a></code><br />

<h2>License </h2>
<p class="projectDescription">VLC for Apple TV is bi-licensed under the <a href="http://opensource.org/licenses/MPL-2.0">Mozilla Public License Version 2</a> as well as the <a href="http://opensource.org/licenses/GPL-2.0">GNU General Public License Version 2 or later</a>. You can modify or redistribute its sources under the conditions of these licenses. Note that additional terms apply for trademarks owned by the VideoLAN association.</p>

</div>

<?php
  footer('$Id$');
?>
