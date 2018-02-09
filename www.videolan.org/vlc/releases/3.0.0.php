<?php
   $title = _("VLC 3.0 Vetinari");
   $body_color = "red";
   $language = "";
   $nobanner = true;
   $new_design = true;
   $additional_js = array("/js/slimbox2.js", "/js/jquery.slides.min.js");
   $additional_css= array("/js/css/slimbox2.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/package.php");

   $macosxversion = "3.0.0";
   $win32version = "3.0.0";
?>
    <div class="container">

            <center><h1 class='bigtitle' style="padding-bottom: 3px;">VLC <b>3.0</b> <em>Vetinari</em></h1>
            <div style="padding-top: 0px; padding-bottom: 10px; color: grey;">VLC 3.0.0 is the first version of "Vetinari" branch of our popular media player.</div>
            </center>

            <style>
 body {
      -webkit-font-smoothing: antialiased;
      color: #232525;
    }

    #slides {
      display: none
      border: 1px solid red;
    }

    #slides .slidesjs-navigation {
      margin-top: 5px;
    }

    a.slidesjs-next,
    a.slidesjs-previous,
    a.slidesjs-play,
    a.slidesjs-stop {
      background-image: url(/js/css/btns-next-prev.png);
      background-repeat: no-repeat;
      display:block;
      width:12px;
      height:18px;
      overflow: hidden;
      text-indent: -9999px;
      float: left;
      margin-left: 10px;
    }

    a.slidesjs-next {
      margin-right:10px;
      background-position: -12px 0;
    }

    a:hover.slidesjs-next {
      background-position: -12px -18px;
    }

    a.slidesjs-previous {
      background-position: 0 0;
    }

    a:hover.slidesjs-previous {
      background-position: 0 -18px;
    }

    .slidesjs-pagination {
      margin: 7px 0 0;
      float: right;
      list-style: none;
    }

    .slidesjs-pagination li {
      float: left;
      margin: 0 1px;
    }

    .slidesjs-pagination li a {
      display: block;
      width: 13px;
      height: 0;
      padding-top: 13px;
      background-image: url(/js/css/pagination.png);
      background-position: 0 0;
      float: left;
      overflow: hidden;
    }

    .slidesjs-pagination li a.active,
    .slidesjs-pagination li a:hover.active {
      background-position: 0 -13px
    }

    .slidesjs-pagination li a:hover {
      background-position: 0 -26px
    }

    #slides a:link,
    #slides a:visited {
      color: #333
    }

    #slides a:hover,
    #slides a:active {
      color: #9e2020
    }

    .subtext { position: relative; top: -20px; left:250px; width: 400px; text-align: center; }
    .subtext2 { position: relative; top: -20px; width: 100%; text-align: center; }
    .features ul li:before {
        padding-left: 22px;
    }

</style>
            <script>
              $(function(){
                $("#slides").slidesjs({
                  width: 940,
                  height: 340,
                  navigation: {
                        active: true,
                        effect: "slide"
                  },
                  play: {
                         active: false,
                         effect: "slide",
                         interval: 4000,
                         auto: true,
                         swap: true,
                         pauseOnHover: true,
                         restartDelay: 3000
                 },
                 callback: {
                         complete: function(number) {
                                var selector = "#text_" + number;
                                $(".subtext2").css("display", "none");
                                $(selector).css("display", "block");
                         }
                 }
                });
              });
            </script>

        <div class="container">
        <div class="row col-md-12">
          <div id="slides" style="margin: 0 auto;">
                <img src="/vlc/releases/3.0.0/carousel-3.0-4k.jpg">
                <img src="/vlc/releases/3.0.0/carousel-3.0-hdr.jpg">
                <img src="/vlc/releases/3.0.0/carousel-3.0-360.jpg">
                <img src="/vlc/releases/3.0.0/carousel-chromecast2.jpg">
                <img src="/vlc/releases/3.0.0/carousel-iphone10-1.jpg">
                <img src="/vlc/releases/3.0.0/carousel-3.0-xbox.jpg">
         </div>
        </div>
        <div class="row col-md-12">
        <h2 class="subtext2" id="text_1">Hardware accelerated decoding for HD and UHD</h2>
        <h2 class="subtext2" style="display: none;" id="text_2">Supports HDR and HDR tone-mapping</h2>
        <h2 class="subtext2" style="display: none;" id="text_3">360° video navigation</h2>
        <h2 class="subtext2" style="display: none;" id="text_4">Chromecast streaming</h2>
        <h2 class="subtext2" style="display: none;" id="text_5">Optimized for iPhone X</h2>
        <h2 class="subtext2" style="display: none;" id="text_6">Faster version for UWP and XBox One</h2>
        </div>

        <div class="row col-md-offset-4 col-md-4">
                <a id='downloadButton' href='#download' style="margin-top: 0px;">
                    <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />
                    <span class='downloadText'><?php echo _("Get VLC now!"); ?></span>
                    <span id='downloadDetails' style='font-size: 12px; color: white;'>
                    Version <span id='downloadVersion'>3.0</span>
                    </span>
                </a>
                <script>
                $(document).ready(function() {
                    $("#downloadButton").removeAttr('href');
                });
                $("#downloadButton").click(function() {
                     $('html, body').animate({
                         scrollTop: $("#getit").offset().top
                     }, 2000);
                });
                </script>
        </div>
        </div>
        </div>

        <div class="clearme" style='padding-top: 10px;'>
        <section class="features">
            <div class="container">
                <div class="row">
                    <h1 style='margin-bottom: 12px;'><?php echo _("3.0 Highlights"); ?></h1>
                    <div class="col-sm-6">
                        <ul>
                            <li style="padding-bottom: 8px;">VLC 3.0 "Vetinari" is a new major update of VLC.</li>
                            <li>VLC 3.0 activates hardware decoding by default, to get <a href="https://vimeo.com/254723528">4K and 8K playback!</a></li>
                            <li>It supports 10bits and HDR</li>
                            <li>VLC supports 360 video and 3D audio, up to Ambisoncics 3rd order</li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul>
                            <li>Allows passthrough for HD audio codecs</li>
                            <li>Can stream to Chromecast devices, even in formats not supported natively</li>
                            <li>Can play Blu-Ray Java menus: BD-J</li>
                            <li>VLC supports browsing of local network drives and NAS</li>
                            <div class="feat-margin-left extra-info-link2 padding-top pull-right">Read the <a href="/developers/vlc-branch/NEWS"/>Changelog</a>.</div>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

	<section class="bg-gray features" style='padding-top: 10px;'>
        <div class="container">
	    <div class="row">
            <div class="col-md-12">
            <h1 style='margin-bottom: 12px;'> 3.0 <?php echo _("Features"); ?></h1>
            </div>
            </div>

	    <div class="row">
            <div class="col-md-6">
                <div class='audienceCallout'><?php echo _("Core"); ?></div>
                <div class='clearme'>
                    <div>
                        <ul>
                            <li>Network browsing for distant filesystems (SMB, FTP, SFTP, NFS...)
                            <li>HDMI passthrough for Audio HD codecs, like E-AC3, TrueHD or DTS-HD
                            <li>12bits codec and extended colorspaces (HDR)
                            <li>Stream to distant renderers, like Chromecast
                            <li>360 video and 3D audio playback with viewpoint change
                            <li>Support for Ambisonics audio and more than 8 audio channels
                            <li>Subtitles size modification live
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class='audienceCallout'><?php echo _("Acceleration"); ?></div>
                <div class='clearme'>
                    <div>
                        <ul>
                            <li>Hardware decoding and display on all platforms</li>
                            <li>HEVC hardware decoding on Windows, using DxVA2 and D3D11</li>
                            <li>HEVC hardware decoding using OMX and MediaCodec (Android)</li>
                            <li>MPEG-2, VC1/WMV3 hardware decoding on Android</li>
                            <li>Important improvements for the MMAL decoder and output for rPI and rPI2</li>
                            <li>New hardware accelerated decoder for OS X and and iOS based on Video Toolbox</li>
                            <li>New VA-API decoder and rendering for Linux</li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>

	    <div class="row">
            <div class="col-md-6">
                <div class='audienceCallout'><?php echo _("Codecs"); ?></div>
                <div class='clearme'>
                    <div>
                        <ul>
                            <li>BD-Java menus and overlay in Blu-Ray</li>
                            <li>Experimental AV1 video and Daala video decoders</li>
                            <li>OggSpots video decoder</li>
                            <li>New MPEG-1 & 2 audio layer I, II, III + MPEG 2.5 decoder based on libmpg123</li>
                            <li>New BPG decoder based on libbpg</li>
                            <li>TDSC, Canopus HQX, Cineform, SpeedHQ, Pixlet, QDMC and FMVC decoders</li>
                            <li>TTML subtitles support</li>
                            <li>Rewrite of webVTT subtitles support, including CSS style support</li>
                            <li>BluRay text subtitles (HDMV) deocoder</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class='audienceCallout'><?php echo _("Containers"); ?></div>
                <div class='clearme'>
                    <div>
                        <ul>
                            <li>Rework of the MP4 demuxer</li>
                            <li>Rework of the TS demuxer</li>
                            <li>HD-DVD .evo support</li>
                            <li>Rework of the PS demuxer</li>
                            <li>Improvements on MKV</li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>

	    <div class="row">
            <div class="col-md-6">
                <div class='audienceCallout'><?php echo _("Video outputs and filters"); ?></div>
                <div class='clearme'>
                    <div>
                        <ul>
                            <li>OpenGL as Linux/BSD default video output</li>
                            <li>Improvements in OpenGL output: direct displaying and HDR tonemapping</li>
                            <li>Rework of the Android video outputs</li>
                            <li>New Direct3D11 video output supporting both Windows desktop and WinRT modes</li>
                            <li>HDR10 support in Direct3D11 with Windows 10 Fall Creator Update</li>
                            <li>Hardware deinterlacing on the rPI, using MMAL</li>
                            <li>Video filter to convert between fps rates</li>
                            <li>Hardware accelerated deinterlacing/adjust/sharpen/chroma with VA-API</li>
                            <li>Hardware accelerated adjust/invert/posterize/sepia/sharpen with CoreImage</li>
                            <li>Hardware accelerated deinterlacing/adjust/chroma with D3D9 and D3D11</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class='audienceCallout'><?php echo _("Audio outputs and filters"); ?></div>
                <div class='clearme'>
                    <div>
                        <ul>
                            <li>Complete rewrite of the AudioTrack Android output</li>
                            <li>New Tizen audio output</li>
                            <li>HDMI/SPDIF pass-through support for WASAPI (AC3/DTS/DTSHD/EAC3/TRUEHD)</li>
                            <li>Support EAC3 and TRUEHD pass-through for PulseAudio</li>
                            <li>Rework of the AudioUnit modules to share more code between iOS and macOS</li>
                            <li>SoX Resampler library audio filter module (converter and resampler)</li>
                            <li>Ambisonics audio renderer, supporting up to 3rd order</li>
                            <li>Binauralizer audio filter, working with Ambisonics or 5.1/7.1 streams</li>
                            <li>Pitch shifting module</li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>

	    <div class="row">
            <div class="col-md-6">
                <div class='audienceCallout'><?php echo _("OS Versions"); ?></div>
                <div class='clearme'>
                    <div>
                        <ul>
                           <li>Windows XP ➔ 10 RS3</li>
                           <li>macOS 10.7 ➔ 10.13</li>
                           <li>iOS 7 ➔ 11</li>
                           <li>Android 2.3 ➔ 8.1</li>
                           <li>Android TV, Chromebooks with Play Store</li>
                           <li>Windows RT 8.1, Windows Phone 8.1</li>
                           <li>Windows 10 Mobile, Xbox 1, Windows Store</li>
                           <li>GNU/Linux, Ubuntu, *BSD</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class='audienceCallout'><?php echo _("Android specific")?></div>
                <div class='clearme'>
                    <div>
                        <ul>
                            <li>Chromecast support from your phone</li>
                            <li>HEVC hardware decoding using MediaCodec</li>
                            <li>Android Auto with voice actions</li>
                            <li>Available on all Android TV, Chromebooks & DeX</li>
                            <li>Support for Picture-in-Picture</li>
                            <li>Playlist files detection</li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>

        </div>
	</section>

<!-- Downloads -->
        <div class="container">

        <a name="download" id="getit"></a>

        <div style="float: right; width: 50%;">
            <h1>Spread the news</h1>
               <a href="https://www.facebook.com/vlc.media.player/posts/10155283754191245" style="padding-top: 10px;"><img src='//images.videolan.org/images/facebook.png' alt='Facebook' /></a>
               <a href="https://twitter.com/videolan/status/961979766097235972"><img src='//images.videolan.org/images/twitter.png' alt='Twitter' /></a>
               <a href="https://plus.google.com/+vlc/posts/GX7r8WQuAqf"><img src='//images.videolan.org/images/gplus.png' alt='Google plus'></a>
               <a href="https://news.ycombinator.com/item?id=16340741"><img src='//images.videolan.org/images/hackernews.png' alt='Hacker News'></a>
               <a href="https://www.reddit.com/r/technology/comments/7wdpfx/vlc_30/"><img src='//images.videolan.org/images/reddit.png' alt='Reddit'></a>
        </div>

        <h1>Download VLC</h1>
        <div style="width: 50%; float: left;">
        <h2>Windows</h2>
           <a id='downloadButton' href='<?php echo getDownloadLink("vlc", $win32version, "win32/vlc-$win32version-win32.exe"); ?>' >
               <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />
               <span class='downloadText'><?php echo _("VLC for Windows"); ?></span>
               <span id='downloadDetails' style='font-size: 12px; color: white;'>
               Version <span id='downloadVersion'><?php echo $win32version ?></span>
           </a>
        </div>
        <div style="width: 45%; float: left;">
         <h2>Android</h2>
            <a href="https://play.google.com/store/apps/details?id=org.videolan.vlc"><img src="/images/get_it_on_play_logo_large.png" border="0" /></a>
        </div>
        <div class="clearme"></div>
        <div style="width: 50%; float: left;">
        <h2 style="margin-top: 30px;">OS X</h2>
        <a id='downloadButton' href='<?php echo getDownloadLink("vlc", $macosxversion, "macosx/vlc-$macosxversion.dmg" ); ?>' >
               <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />
               <span class='downloadText'><?php echo _("VLC for OS X"); ?></span>
               <span id='downloadDetails' style='font-size: 12px; color: white;'>
               Version <span id='downloadVersion'><?php echo $macosxversion ?></span> - 64bits</span>
           </a>
        </div>
        <div style="width: 45%; float: left;">
            <h2  style="margin-top: 30px; margin-bottom: 30px;">iOS</h2>
            <a href="http://itunes.apple.com/app/vlc-ios/id650377962"><img src="/images/appstoredownload-en.png" /></a>
        </div>


        <div class="clearme"></div>
        <div style="width: 50%; float: left;">
            <h2  style="margin-top: 30px; margin-bottom: 10px;">Windows Store and UWP</h2>
            <a href="https://www.microsoft.com/en-US/store/p/vlc/9nblggh4vvnh"><img src="/images/badges/WS_green.png" /></a>
        </div>

        <div style="width: 45%; float: left;">
            <h2  style="margin-top: 30px; margin-bottom: 10px;">Windows Phone</h2>
            <a href="http://www.windowsphone.com/s?appid=44fa83f7-a98d-4647-b9d4-c35ed729d0c9"><img src="/images/badges/WPS_cyan.png" /></a>
        </div>

        <div class="clearme"></div>
        <div style="width: 50%; float: left;">
        <h2 style="margin-top: 20px;">Sources</h2>
        <a href="/vlc/download-sources.html">Get the source!</a>
        </div>
        <div style="width: 45%; float: left;">
         <h2>Linux</h2>
         <p>Ask your favorite packager for VLC 3.0!</p>
        </div>


        <div class="clearme"></div>
        <h1>Related links</h1>
        <ul>
            <li><a href="/developers/vlc-branch/NEWS">Changelog</a></li>
        </ul>

        <div class="clearme"></div>
        <h1>Contact</h1>
        <p>For any questions related to this release, please <a href="/contact.html">contact us</a>.</p>
        </div>
    </div>

</div>
<?php footer('$Id: index.php 7173 2012-02-11 00:58:09Z jb $'); ?>
