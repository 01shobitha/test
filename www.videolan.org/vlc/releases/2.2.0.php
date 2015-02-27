<?php
   $title = _("VLC 2.2.0 Weatherwax");
   $body_color = "red";
   $language = "";
   $nobanner = true;
   $additional_js = array("/js/slimbox2.js", "/js/jquery.slides.min.js");
   $additional_css= array("/js/css/slimbox2.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/package.php");

   $macosxversion = "2.2.0";
   $win32version = "2.2.0";
?>
    <div>
            <center><h1 class='bigtitle' style="padding-bottom: 3px;">VLC <b>2.2.0</b> multi-releases</h1>
            <div style="padding-top: 0px; padding-bottom: 10px; color: grey;">VLC 2.2.0 is the first version of "Weatherwax" branch of our popular media player.</div>
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

    .subtext { position: relative; top: -20px; left:300px; width: 300px; text-align: center; } 

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
                <img src="/vlc/releases/2.1.0/VLC-2.1-MacOS.gif">
                <img src="/vlc/releases/2.1.0/VLC_audio.png">
                <img src="/vlc/releases/2.1.0/VLC_Subtitles.gif">
                <img src="/vlc/releases/2.1.0/VLC_iOS.gif">
                <img src="/vlc/releases/2.1.0/LGPL.gif">
         </div>
        <h2 class="subtext" id="text_1">Faster Video decoding</h2>
        <h2 class="subtext" style="display: none;" id="text_2">New Audio Core</h2>
        <h2 class="subtext" style="display: none;" id="text_3">Advanced Subtitles</h2>
        <h2 class="subtext" style="display: none;" id="text_4">Android and iOS ports</h2>
        <h2 class="subtext" style="display: none;" id="text_5">libVLC sdk is now LGPL!</h2>
        </div>

                <a id='downloadButton' href='#download' style="margin-left: 300px; margin-top: 0px;">
                    <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />
                    <span class='downloadText'><?php echo _("Get VLC now!"); ?></span>
                    <span id='downloadDetails' style='font-size: 12px; color: white;'>
                    Version <span id='downloadVersion'>2.2.0</span>
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

        <div class="clearme" style='padding-top: 30px;'>
            <div style='float: left; width: 500px;'>
            <h1 style='margin-bottom: 12px;'><?php echo _("2.2.0 Highlights"); ?></h1>
                <div class='projectDescription'>
                    <div style="padding-bottom: 8px;">With the capabilities of "RinceWind", 2.2.0 fixes a few bugs, and important security issues</div>
                    <div>2.2.0 fixes a few decoding bugs, on MP3, MKV, and hardware decoding on Windows.</div>
                    <div>It also fixes QTsound capture and audio channel orders for OS X.</div>
                    <div>2.2.0 also ships with updated GnuTLS and libpng libraries, because of security issues.</div>
                    <div style="float: right;">Read the <a href="http://www.videolan.org/developers/vlc-branch/NEWS">Changelog</a></div>

                </div>
            </div>
            <?php image( 'largeVLC.png', 'Large Orange VLC media player Traffic Cone Logo', 'projectImg' ); ?>
        </div>

        <div class="clearme" style='padding-top: 20px;'>
            <h1 style='margin-bottom: 12px;'> 2.1.0 <?php echo _("Features"); ?></h1>

            <div style='float: left; width: 480px; margin-bottom: 25px;'>
                <div class='audienceCallout'><?php echo _("Audio"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>Rewritten audio core, allowing better volume and device management.</li>
                           <li>Rewrite of the audio modules, to adapt to the new core.</li>
                           <li>Correct support for multi-channel layouts in all formats: 5.1, 6.1 and 7.1</li>
                           <li>New audio outputs for Windows Vista, Android, iOS, OpenBSD and OSSv4.</li>
                           <li>New remapping, gain, stereo widening, downmixing effects.</li>
                           <li>Higher samplerate, precision, live configuration in the core.</li>
                           <li>Numerous new audio metadata format supported.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("Video"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>Port the OpenGL output to OpenGL ES.</li>
                           <li>Support color conversion shaders in glsl on Android and iOS.</li>
                           <li>New outputs for OpenMax IL on mobile and Decklink Blackmagic.</li>
                           <li>New video outputs for iOS using OpenGL ES2.</li>
                           <li>Support for deinterlacing for higher bit depth and XYZ colorspace.</li>
                           <li>New anaglyph filter for side-by-side 3D.</li>
                           <li>4K-ready :)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="clearme" style='float: left; width: 480px; margin-bottom: 20px;'>
                <div class='audienceCallout'><?php echo _("Codecs"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>Add hardware decoding for OS X using VDADecoder.</li>
                           <li>Add hardware decoding for Android using MediaCodec.</li>
                           <li>Add hardware decoding for GNU/Linux using VDPAU.</li>
                           <li>Add hardware encoding for Windows using Intel QuickSyncVideo.</li>
                           <li>Support for G2M4, MSS1, MSS2, TSCC2, CDXL, Ut, VBLE video codecs.</li>
                           <li>Support for Ulead DV audio, Indeo Audio Coder, RealAudio Lossless audio.</li>
                           <li>Support for SCTE-27 and complete EIA-608 subtitles.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("Formats"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>Support for fragmented MP4, Wave/RF64 files.</li>
                           <li>Extended metadata tags and cover art support in Ogg, AVI, MP4 and MKV.</li>
                           <li>Support FLAC, Atrac, ADPCM, DV Type 1, 12bits DV audio in AVI.</li>
                           <li>Extended support for AVI, MKV and MJPEG streams.</li>
                           <li>Better recording of AVI and MKV format.</li>
                           <li>Audio fingerprinting using AcoustID.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="clearme" style='float: left; width: 480px; margin-bottom: 20px;'>
                <div class='audienceCallout'><?php echo _("Input and Devices")?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>Support for screen input on OSX Lion and later.</li>
                           <li>Support for Microsoft Smooth Streaming, developed by <a href="http://viotech.net">Viotech.net</a></li>
                           <li>New RTMP input module, using libavformat!</li>
                           <li>Support for VNC/rfb and Remote Desktop view-only modes.</li>
                           <li>Important improvements on Blu-Ray, Dash, v4l2 and HTTP inputs.</li>
                           <li>New AVFoundation OS X and shm framebuffer inputs.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("For Anime Fans"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>New 6.1 downmixer to 5.1 and Stereo from MKV/Flac 6.1.</li>
                           <li>Correct YUV->RGB color matrix in the OpenGL shaders.</li>
                           <li>Improved MKV support for seeking, and resiliancy.</li>
                           <li>Editions support in MKV.</li>
                           <li>Better subtitles and metadata support from MKV.</li>
                           <li>Various ASS subtitles improvements.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="clearme" style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("For Mobile"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>Port to Android, from 2.1 to 4.3, on ARMv6, ARMv7, x86 and MIPS.</li>
                           <li>New port to iOS, from iOS 5 to 7, on all iPads and iPhones after 3GS.</li>
                           <li>Partial port to WinRT, for Windows 8, 8.1 and WP8.</li>
                           <li>OpenGL ES optimized outputs.</li>
                           <li>Improvements of OpenMAX IL decoders, encoders and renderers.</li>
                           <li>New audio, video outputs and interfaces for mobiles.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("For Developers"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>libVLC and most modules are now <a href="/press/lgpl-libvlc.html">LGPLv2.1+</a>.</li>
                           <li>libVLC media framework can now be used in all types of applications.</li>
                           <li>libVLC SDK packages now exists, in addition to more examples.</li>
                           <li>Improved libVLC API, for better control.</li>
                           <li>VLC's web plugins now support windowless mode, for smoother integration with HTML elements.</li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>

        <div class="clearme"></div>

        <a name="download" id="getit"></a>

        <div class="clearme"></div>
        <div style="float: right; width: 400px;">
        <h1>Spread the news</h1>
           <a href="https://www.facebook.com/vlc.media.player/posts/10203127913417945" style="padding-top: 10px;"><img src='//images.videolan.org/images/facebook.png' alt='Facebook' /></a>
           <a href="https://twitter.com/videolan/status/430813648332660736"><img src='//images.videolan.org/images/twitter.png' alt='Twitter' /></a>
           <a href="https://plus.google.com/+vlc/posts/9i6gqyAUwJq"><img src='//images.videolan.org/images/gplus.png'></a>
        </p>
        </div>

        <h1>Download VLC</h1>
        <h2>Windows</h2>
           <a id='downloadButton' href='<?php echo getDownloadLink("vlc", $win32version, "win32/vlc-$win32version-win32.exe"); ?>' >
               <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />
               <span class='downloadText'><?php echo _("VLC for Windows"); ?></span>
               <span id='downloadDetails' style='font-size: 12px; color: white;'>
               Version <span id='downloadVersion'><?php echo $win32version ?></span>
           </a>
        <div class="clearme"></div>
        <h2 style="margin-top: 30px;">OS X</h2>
        <div>
        <a id='downloadButton' href='<?php echo getDownloadLink("vlc", $macosxversion, "macosx/vlc-$macosxversion.dmg" ); ?>' >
               <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />
               <span class='downloadText'><?php echo _("VLC for Mac OS X"); ?></span>
               <span id='downloadDetails' style='font-size: 12px; color: white;'>
               Version <span id='downloadVersion'><?php echo $macosxversion ?></span> - 64bits</span>
           </a>
        </div>

        <div class="clearme"></div>
        <div style="float: right; width: 400px; margin-top: 15px;">
         <h2>Linux</h2>
         <p>Ask your favorite packager for VLC 2.2!</p>
        </div>
        <h2 style="margin-top: 30px;">Sources</h2>
        <a href="/vlc/download-sources.html">Get the source!</a>
        <h2 style="margin-top: 10px;">Changelog</h2>
        <a href="/developers/vlc-branch/NEWS">Changelog</a>


        <div class="clearme"></div>
        <h1>Contact</h1>
        <p>For any questions related to this release, please <a href="/contact.html">contact us</a>.</p>

</div>
<?php footer('$Id: index.php 7173 2012-02-11 00:58:09Z jb $'); ?>
