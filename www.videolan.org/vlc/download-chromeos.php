<?php
   $title = "Official Download of VLC media player for Chrome OS";
   $new_design = true;
   $lang = "en";
   $menu = array( "vlc", "download" );

   $additional_js = array("/js/slimbox2.js", "/js/slick-init.js", "/js/slick.min.js");
   $additional_css = array("/js/css/slimbox2.css", "/style/slick.min.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/language.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

<div class="container">
    <?php
    $screenshots = getScreenshots("chromeos");
    $defaultDetail = getOS("chromeos");
    ?>
    <section class="download-wrapper">
        <div class="row reorder-xs">
            <?php drawScreenshots($screenshots); ?>
            <div class="v-align col-sm-5">
                <div class="center-font-xs">
                    <?php image('largeVLC.png', 'Large Orange VLC media player Traffic Cone Logo', 'big-vlc-img img-responsive visible-xs-inline-block v-align'); ?>
                    <h1 class="v-align bigtitle">
                        VLC for Chrome OS
                    </h1>
                </div>
                <div class="projectDescription hidden-sm hidden-xs">
                    <?php echo
                    _("VLC media player is a free and open source cross-platform multimedia player that plays most video files and network streaming protocols."); ?>
                </div>
                <div class="projectDescription visible-xs visible-sm center-font-xs">
                    <?php echo
                    _("VLC media player is a free and open source cross-platform multimedia player that plays most video files and network streaming protocols."); ?>
                </div>

                <div class="inner center-xs">
                    <div class="btn-group">
<a href="//chrome.google.com/webstore/detail/vlc/obpdeolnggmbekmklghapmfpnfhpcndf"><img src="//images.videolan.org/images/chromewebstore-en.png" border="0" width="288"/></a>
                    </div>
                    <div id="downloadDetails">
                        <span id='downloadOS'><?php echo $defaultDetail["name"]; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

<p class="projectDescription">This is the port of VLC media player to the Chrome OS platform. VLC for Chrome OS can play most video and audio files, as well as network streams and DVD ISOs, like the desktop version of VLC.<br />
VLC for Chrome OS is also a full audio player, with a complete database, an equalizer and filters, playing all weird audio formats.<br />
VLC is intended for everyone, is totally free, has no ads, no in-app-purchases, no spying and is developed by passionate volunteers. All the source code is available for free.
</p>

<h2>First start</h2>
<p class="projectDescription">At the first run, you need to select a folder where all your medias are! This is where the media database will index from!</p>

<h2>Features</h2>
<p class="projectDescription">VLC for Chrome OS plays most local video and audio files, as well as network streams (including adaptive streaming), DVD ISOs, like the desktop version of VLC.<br />
All formats are supported, including MKV, MP4, AVI, MOV, Ogg, FLAC, TS, M2TS, Wv and AAC. All codecs are included with no separate downloads.<br />
VLC for Chrome OS has a media library for audio and video files, and allows to browse folders directly.<br />
VLC has support for multi-track audio and subtitles. It supports auto-rotation, aspect-ratio adjustments and gestures to control volume, brightness and seeking.<br />
It also includes a widget for audio control, supports audio headsets control, cover art and a complete audio media library.
</p>

<h2>Supported Devices</h2>
<p class="projectDescription">VLC for Chrome OS supports any Chromebook capable of running the latest version of Chrome OS.</p>

<h2> Support </h2>
<p class="projectDescription">You need help with VLC for Chrome OS? Be sure to check <a href="//www.videolan.org/support/">our support page</a>.</p>

<h2>License </h2>
<p class="projectDescription">VLC for Chrome OS is distributed under the <a href="http://opensource.org/licenses/GPL-3.0">GNU General Public License Version 3 or later</a>. You can modify or redistribute its sources under the conditions of this license. Note that additional terms apply for trademarks owned by the VideoLAN association.</p>

</div>

<?php
  footer('$Id$');
?>
