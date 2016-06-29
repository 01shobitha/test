<?php
   $title = "Official Download of VLC media player for Windows Store";
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
    $screenshots = getScreenshots("winrt");
    $defaultDetail = getOS("winrt");
    ?>
    <section class="download-wrapper">
        <div class="row reorder-xs">
            <?php drawScreenshots($screenshots); ?>
            <div class="v-align col-sm-5">
                <div class="center-font-xs">
                    <?php image('largeVLC.png', 'Large Orange VLC media player Traffic Cone Logo', 'big-vlc-img img-responsive visible-xs-inline-block v-align'); ?>
                    <h1 class="v-align bigtitle">
                        VLC for Windows Store
                    </h1>
                </div>
                <div class="projectDescription hidden-sm hidden-xs">
                    <?php echo
                    _("VLC for Windows Store plays most local video and audio files, and network streams. The app has a media library for audio and video files, a complete audio library, with metadata fetching. VLC supports multi-track audio and subtitles, speed control. VLC supports all formats of video, including, FLAC, MKV, MOV, TS and Ogg."); ?>
                </div>
                <div class="projectDescription visible-xs visible-sm center-font-xs">
                    <?php echo
                    _("VLC for Windows Store plays most local video and audio files, and network streams. The app has a media library for audio and video files, a complete audio library, with metadata fetching. VLC supports multi-track audio and subtitles, speed control. VLC supports all formats of video, including, FLAC, MKV, MOV, TS and Ogg."); ?>
                </div>

                <div class="inner center-xs">
                    <div class="btn-group">
<a href="//www.microsoft.com/store/apps/vlc/9nblggh4vvnh"><img src="http://images.videolan.org/images/windowstoredownload-en.png" border="0" /></a>
                    </div>
                    <div id="downloadDetails">
                        Version <span id='downloadVersion'>
                        <?php echo $defaultDetail["latestVersion"] ?></span>&nbsp;&#8226;&nbsp;<span id='downloadOS'><?php echo $defaultDetail["name"]; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

<h2> Features </h2>

<p class="projectDescription">
<ul class="bullets">
  <li>Play all files, in all formats, including exotic ones, like classic VLC media player.</li>
  <li>Play MKV, multiple audio tracks, and subtitles tracks (including SSA!).</li>
  <li>Support for network streams, including HLS, MMS or RTSP.</li>
  <li>Playback speed manipulation and fine seeking.</li>
  <li>Music library management, meta data retrieval and playback recommendations</li>
  <li>Support for 10bit video</li>
  <li>Mini audio player and background audio</li>
  <li>Completely free, libre and open source.</li>
</ul>
</p>

<h2> Devices and Windows version </h2>
<p class="projectDescription">VLC for Windows Store requires Windows 8.1 or later. It runs on both ARM and x86 devices.</p>

<h2> Support </h2>
<p class="projectDescription">You need help with VLC for Windows Store? Be sure to check <a href="http://forum.videolan.org/viewforum.php?f=37">our forum</a>.</p>

<h2> Source </h2>
<p class="projectDescription">You can find the source code for the latest release <a href="https://code.videolan.org/videolan/vlc-winrt/tags">here</a>.</p>

<h2>License </h2>
<p class="projectDescription">VLC for Windows Store is bi-licensed under the <a href="http://opensource.org/licenses/MPL-2.0">Mozilla Public License Version 2</a> as well as the <a href="http://opensource.org/licenses/GPL-2.0">GNU General Public License Version 2 or later</a>. You can modify or redistribute its sources under the conditions of these licenses. Note that additional terms apply for trademarks owned by the VideoLAN association.</p>

</div>

<?php
  footer('$Id$');
?>
