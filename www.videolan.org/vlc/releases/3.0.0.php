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

            <center><h1 class='bigtitle' style="padding-bottom: 3px;">NOT RELEASED YET <b>!!</b></h1>
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
                                $(".subtext").css("display", "none");
                                $(selector).css("display", "block");
                         }
                 }
                });
              });
            </script>

        <div style="width: 940px; margin: 0 auto;">
          <div id="slides" style="margin: 0 auto;">
                <img src="/vlc/releases/3.0.0/carousel-3.0-4k.jpg">
                <img src="/vlc/releases/3.0.0/carousel-3.0-hdr.jpg">
                <img src="/vlc/releases/3.0.0/carousel-3.0-360.jpg">
                <img src="/vlc/releases/3.0.0/carousel-chromecast2.jpg">
                <img src="/vlc/releases/3.0.0/carousel-iphone10-1.jpg">
                <img src="/vlc/releases/3.0.0/carousel-3.0-xbox.jpg">
         </div>
        <h2 class="subtext" id="text_1">Hardware accelerated decoding for HD and UHD</h2>
        <h2 class="subtext" style="display: none;" id="text_2">Supports HDR and HDR tone-mapping</h2>
        <h2 class="subtext" style="display: none;" id="text_3">360° video navigation</h2>
        <h2 class="subtext" style="display: none;" id="text_4">Chromecast streaming</h2>
        <h2 class="subtext" style="display: none;" id="text_5">Optimized for iPhone X</h2>
        <h2 class="subtext" style="display: none;" id="text_6">Faster version for UWP and XBox One</h2>
        </div>

                <a id='downloadButton' href='#download' style="margin-left: 300px; margin-top: 20px;">
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

        <div class="container">
        <div class="clearme" style='padding-top: 30px;'>
            <div style='float: left; width: 600px;'>
            <h1 style='margin-bottom: 12px;'><?php echo _("3.0 Highlights"); ?></h1>
                <div class='projectDescription' style="width: 600px;">
                    <div style="padding-bottom: 8px;">VLC 3.0 "Vetinari" is a new major update of VLC.</div>
                    <div>VLC 3.0 activates hardware decoding by default, to get <a href="https://vimeo.com/254723528">4K and 8K playback!</a></div>
                    <div>It supports 10bits and HDR</div>
                    <div>VLC supports 360 video and 3D audio, up to Ambisoncics 3rd order</div>
                    <div>Allows passthrough for HD audio codecs</div>
                    <div>Can stream to Chromecast devices, even in formats not supported natively</div>
                    <div>Can play Blu-Ray Java menus: BD-J</div>
                    <div>VLC supports browsing of local network drives and NAS</div>
                    <div style="float: right;">Read the <a href="/press/vlc-3.0.0.html">Press release</a> and the <a href="/developers/vlc-branch/NEWS"/>Changelog</a>.</div>
                </div>
            </div>
            <div style='float: left; width: 200px;'><?php image( 'largeVLC.png', 'Large Orange VLC media player Traffic Cone Logo', 'projectImg' ); ?></div>
        </div>
    </div>
<!--
<p>So, what's new in <b>VLC 3.0.0</b>, codename <i>Vetinari</i>?</p>
<ul><li>Fight&nbsp; the popular vertical video syndrome! VLC automatically detects rotated&nbsp; videos and rotates them using hardware acceleration (on compatible&nbsp; platforms)!</li
><li>This is supported for MP4/MOV, MKV and raw H264.</li
><li>Resume playback&nbsp; where you left off. Supported on all the mobile versions of VLC for&nbsp; quite some time, it is now available on the desktop.</li
><li>Vastly improved support for UltraHD video codecs like VP9 and H265, including encoding.</li
><li>New&nbsp; hardware acceleration mechanism, GPU 0-copy decoding, faster and&nbsp; implementations for Linux, Android, and Raspberry Pi. (Other OSes will&nbsp; have it in 3.0.0)</li
><li>Extensions: supported since a long time, we now feature an in-app downloader for the desktop, like Firefox</li
><li>Subtitles downloading extension</li
><li>Compatibility with a very large number of unusual codecs</li
><li>Vastly improved compatibility for problematic files in Ogg, MP4, and WMV.</li
><li>Support for Digital Cinema Package to play native movie theater formats.</li
><li>Experimental support of Interactive Menus of BluRays: BD-J</li
><li>On OS X, we've updated the interface for Yosemite compatibility.</li
><li>On Android, we rewrote most of the UI to match Google Material Design.</li
><li>This is the first public beta releases for Windows Phone, Windows RT and Android TV.</li
><li>It is also the first non-beta release on Android.</li></ul>

<p>This&nbsp; is made possible through a lot of improvements of the VLC engine, the&nbsp; libVLC library, which starts showing its maturity and solidity.</p>
-->
 <!--
<h2>Quotes</h2>
<h3>Jean-Baptiste Kempf, president of the VideoLAN non-profit:</h3>
"I'm&nbsp; very happy about those releases. Moving VLC to the mobile world was&nbsp; difficult, but the difficult is done. VLC runs everywhere, plays&nbsp; everything. We're working on many new features for VLC 3.0.0 to finish&nbsp; what we've started here."<br
/>"We're quite happy to see that libVLC&nbsp; and the libVLC SDK on all platforms are now demonstrating that this&nbsp; framework is now ready for production."<br
/><br
/><h3>Felix Paul Kühne, secretary of the VideoLAN non-profit and iOS Lead Developer:</h3>
"Synchronizing&nbsp; the release leads to an unprecedented level of run-time stability and&nbsp; future innovation. We are excited about sharing further results from&nbsp; that work later this year."<br
/><br
/><h3>Ludovic Fauvet, treasurer of the VideoLAN non-profit:</h3>
"The VideoLAN community shows this time again an unprecedented level of professionalism in releasing VLC media player 3.0.0 simultaneously on all supported platforms. This is a groundbreaking change that any contributor can be proud of."<br
/><br
/
-->
        <div class="container">
            <h1 style='margin-bottom: 12px;'> 3.0 <?php echo _("Features"); ?></h1>

            <div style='float: left; width: 480px; margin-bottom: 25px;'>
                <div class='audienceCallout'><?php echo _("Core"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                            <li>Support network browsing for distant filesystems (SMB, FTP, SFTP, NFS...)
                            <li>Support HDMI passthrough for Audio HD codecs, like E-AC3, TrueHD or DTS-HD
                            <li>Support for 12bits codec and extended colorspaces (HDR)
                            <li>Support output renderers, like ChromeCast
                            <li>Support for 360 video and audio, including viewpoint modification
                            <li>Support for ambisonic audio and more than 8 audio channels
                            <li>Support subtitles size live adjustments
                        </ul>
                    </div>
                </div>
            </div>
            <div style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("Codecs"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                            <li>Support for BD-Java menus and overlay in Blu-Ray</li>
                            <li>Support for experimental AV1 video and Daala video</li>
                            <li>Support for the OggSpots video codec</li>
                            <li>New MPEG-1 & 2 audio layer I, II, III + MPEG 2.5 decoder based on libmpg123</li>
                            <li>New BPG decoder based on libbpg</li>
                            <li>Support TDSC, Canopus HQX, Cineform, SpeedHQ, Pixlet, QDMC and FMVC codecs</li>
                            <li>TTML subtitles support, including EBU-TT-D variant</li>
                            <li>Rewrite of webVTT subtitles support, including CSS style support</li>
                            <li>BluRay text subtitles (HDMV) are now decoded</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="clearme" style='float: left; width: 480px; margin-bottom: 20px;'>
                <div class='audienceCallout'><?php echo _("Acceleration"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                            <li>Support HEVC hardware decoding on Windows, using DxVA2 and D3D11</li>
                            <li>Support hardware decoding using Direct3D11 and DxVA2, including GPU-zerocopy mode</li>
                            <li>Support HEVC hardware decoding using OMX and MediaCodec (Android)</li>
                            <li>Support MPEG-2, VC1/WMV3 on Android using MediaCodec</li>
                            <li>OMX GPU-zerocopy support for decoding and display on Android using OpenMax IL</li>
                            <li>Important improvements for the MMAL decoder and output for rPI and rPI2</li>
                            <li>New hardware accelerated decoder for OS X and and iOS based on Video Toolbox</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("Containers"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                            <li>Important rework of the MP4 demuxer</li>
                            <li>Important rework of the TS demuxer</li>
                            <li>Support of HD-DVD .evo</li>
                            <li>Important rework of the PS demuxer</li>
                            <li>Improvements on MKV</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="clearme" style='float: left; width: 480px; margin-bottom: 20px;'>
                <div class='audienceCallout'><?php echo _("Video outputs and filters"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                            <li>Linux/BSD default video output is now OpenGL, instead of Xvideo</li>
                            <li>Improvements in OpenGL output (multi-platform direct displaying, HDR tonemapping):</li>
                            <li>Rework of the Android video outputs</li>
                            <li>Add a Direct3D11 video output supporting both Windows desktop and WinRT modes</li>
                            <li>Support of HDR10 in Direct3D11 with Windows 10 Fall Creator Update</li>
                            <li>Hardware deinterlacing on the rPI, using MMAL</li>
                            <li>New video filter to convert between fps rates</li>
                            <li>Hardware accelerated deinterlacing/adjust/sharpen/chroma with VA-API</li>
                            <li>Hardware accelerated adjust/invert/posterize/sepia/sharpen with CoreImage</li>
                            <li>Hardware accelerated deinterlacing/adjust/chroma with D3D9 and D3D11</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("Platform integration")?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>Port of the interface to Yosemite</li>
                           <li>Support drag'n drop in the skins2 interface</li>
                           <li>New TLS module on OS X and iOS, using the central store</li>
                           <li>Signature of the Windows binaries</li>
                           <li>Improvement of audio device detections on OS X and Windows</li>
                           <li>Support of audio ducking in various audio outputs</li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="clearme" style='float: left; width: 480px; margin-bottom: 20px;'>
                <div class='audienceCallout'><?php echo _("OS Versions"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
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


            <div style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("Audio outputs and filters"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                            <li>Complete rewrite of the AudioTrack Android output</li>
                            <li>Add a Tizen audio output</li>
                            <li>HDMI/SPDIF pass-through support for WASAPI (AC3/DTS/DTSHD/EAC3/TRUEHD)</li>
                            <li>Support EAC3 and TRUEHD pass-through for PulseAudio</li>
                            <li>Important rework of the AudioUnit modules to share more code between iOS and macOS</li>
                            <li>Add SoX Resampler library audio filter module (converter and resampler)</li>
                            <li>Add an Ambisonics audio renderer, supporting up to 3rd order</li>
                            <li>Add a Binauralizer audio filter, working with Ambisonics or 5.1/7.1 streams</li>
                            <li>Add a pitch shifting module</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

<!-- Downloads -->
        <div class="container">

        <a name="download" id="getit"></a>

        <div style="float: right; width: 50%;">
            <h1>Spread the news</h1>
               <a href="https://www.facebook.com/vlc.media.player/posts/10152764178381245" style="padding-top: 10px;"><img src='//images.videolan.org/images/facebook.png' alt='Facebook' /></a>
               <a href="https://twitter.com/videolan/status/430813648332660736"><img src='//images.videolan.org/images/twitter.png' alt='Twitter' /></a>
               <a href="https://plus.google.com/+vlc/posts/9i6gqyAUwJq"><img src='//images.videolan.org/images/gplus.png'></a>
               <a href="https://news.ycombinator.com/item?id=9119587">Hacker News</a>
               <a href="https://www.reddit.com/r/technology/comments/2xd2wu/vlc_220_multirelease/">Reddit</a>
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
            <h2  style="margin-top: 30px; margin-bottom: 10px;">Windows RT and Windows Metro</h2>
            <a href="http://apps.microsoft.com/windows/en-us/app/vlc-for-windows-8/c527ff2d-b5d0-45b6-bfc3-92fb7357ef72"><img src="/images/badges/WS_green.png" /></a>
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
