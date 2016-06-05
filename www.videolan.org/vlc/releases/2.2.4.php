<?php
   $title = _("VLC 2.2.4 WeatherWax");
   $body_color = "red";
   $language = "";
   $nobanner = true;
   $additional_js = array("/js/slimbox2.js", "/js/jquery.slides.min.js");
   $additional_css= array("/js/css/slimbox2.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/package.php");

   $macosxversion = "2.2.4";
   $win32version = "2.2.4";
?>
    <div>
            <center><h1 class='bigtitle' style="padding-bottom: 3px;">VLC <b>2.2.4</b> "Weatherwax"</h1>
            <div style="padding-top: 0px; padding-bottom: 10px; color: grey;">VLC 2.2.4 is the third bugfix release of the "Weatherwax" branch of our popular media player.</div>
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
                <img src="/vlc/releases/2.2.0/vlc-2.2-mac.gif">
                <img src="/vlc/releases/2.2.0/VVS.jpg">
                <img src="/vlc/releases/2.2.0/winrt.jpg">
                <img src="/vlc/releases/2.2.0/ios-2.4.1-phone.gif">
                <img src="/vlc/releases/2.2.0/android.jpg">
                <img src="/vlc/releases/2.2.0/addons.png">
         </div>
        <h2 class="subtext" id="text_1">Restart where you left off</h2>
        <h2 class="subtext" style="display: none;" id="text_2">Fight the Vertical Video Syndrome</h2>
        <h2 class="subtext" style="display: none;" id="text_3">Windows Phone and Windows RT</h2>
        <h2 class="subtext" style="display: none;" id="text_4">VLC is back on iOS!</h2>
        <h2 class="subtext" style="display: none;" id="text_5">Material update for Android</h2>
        <h2 class="subtext" style="display: none;" id="text_6">Addons download from VLC</h2>
        </div>

                <a id='downloadButton' href='#download' style="margin-left: 300px; margin-top: 0px;">
                    <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />
                    <span class='downloadText'><?php echo _("Get VLC now!"); ?></span>
                    <span id='downloadDetails' style='font-size: 12px; color: white;'>
                    Version <span id='downloadVersion'>2.2.4</span>
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
            <div style='float: left; width: 600px;'>
            <h1 style='margin-bottom: 12px;'><?php echo _("2.2.4 Highlights"); ?></h1>
                <div class='projectDescription' style="width: 600px;">
                    <div style="padding-bottom: 8px;">VLC 2.2.4 <a href="https://wiki.videolan.org/VLC_CodeNames">"Weatherwax"</a> is the fourth update to VLC's 2.2 release series. </div>
                    <div>Fix crash in G.711 wav files</div>
                    <div>Fix mp3 crash in libmad</div>
                    <div>Fix out-of-bound write in adpcm QT IMA codec (<a href="/security/sa1601.html">VideoLAN-SA-1601</a>, CVE-2016-5108)</div>
                    <div>Fix overlay creation on Windows XP for DirectDraw video output</div>
                    <div>Improve compilation support for GNU/HURD</div>
                    <div>Minor UI improvements for the Qt interface on Windows, Linux, BSD, ...</div>

             <h2 style='margin-bottom: 12px;'><?php echo _("2.2.0 Highlights"); ?></h2>
                    <div>VLC 2.2.0 auto-rotates the videos taken from phones, to fight <a href="https://www.youtube.com/watch?v=Bt9zSfinwFA">Vertical Video Syndrome!</a></div>
                    <div>VLC now resumes where you left off in all versions</div>
                    <div>Improves support for new HD codecs, VP9, opus and H.265/HEVC, for decoding and for encoding.</div>
                    <div>Extensions are now downloadable from within the application.</div>
                    <div>VLSub extension can download subtitles from the application.</div>
                    <div>We release at the same time, new versions and betas for iOS, Android, Windows Phone, Android TV and Windows RT.</div>
                    <div style="float: right;">Read the <a href="/press/vlc-2.2.0.html">Press release</a> and the <a href="/developers/vlc-branch/NEWS"/>Changelog</a>.</div>
                </div>
            </div>
            <div style='float: left; width: 200px;'><?php image( 'largeVLC.png', 'Large Orange VLC media player Traffic Cone Logo', 'projectImg' ); ?></div>
        </div>
        <div class="clearme" style='padding-top: 20px;'>
            <h1 style='margin-bottom: 12px;'> 2.2.x <?php echo _("Features"); ?></h1>

            <div style='float: left; width: 480px; margin-bottom: 25px;'>
                <div class='audienceCallout'><?php echo _("Core"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>Auto-rotation of phone movies, to fight Vertical Video Syndrome</li>
                           <li>Resume playback where you left off</li>
                           <li>Extensions API and repository to download extensions directly from the application</li>
                           <li>GPU 0-copy support for decoding and displaying using hardware</li>
                           <li>Improved support for UltraHD codecs, notably H.265 and VP9</li>
                           <li>Subtitles download from the web, using OpenSubtitles</li>
                           <li>Audio core upgrade, notably to support short samples</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("Formats"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>Support for BD-Java menus and overlay in Blu-Ray</li>
                           <li>Acceleration of VP9 and H.265/HEVC decoders</li>
                           <li>Rewritten support for WMV, Ogg, MP4 and AVI, notably for seeking</li>
                           <li>Support for encoding in H.265, Opus and VP9</li>
                           <li>Support for WebVTT, Ogg/VP8, Opus/MKV, CAF</li>
                           <li>Support for THP, Renderware and Escape Replay videogames files</li>
                           <li>Support for SRT language detection</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="clearme" style='float: left; width: 480px; margin-bottom: 20px;'>
                <div class='audienceCallout'><?php echo _("Acceleration"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>GPU 0-copy decoding-rendering for Android using MediaCodec</li>
                           <li>GPU accelerated auto-rotation, in OpenGL, Direct3D and Mediacodec</li>
                           <li>GPU 0-copy decoding-rendering for Linux using VDPAU</li>
                           <li>Support for HLSL shaders in Direct3D video output</li>
                           <li>Media Foundation Transform audio and video decoder for Windows Vista/7</li>
                           <li>GPU 0-copy decoding-rendering for RaspberryPi using MMAL</li>
                           <li>OpenMAX IL improvements for Android, Linux and rPi</li>
                           <li>Support GStreamer codecs on Linux</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("Codecs / Protocols"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>Support for MMS split streams for audio selection (European Parliament)</li>
                           <li>Support FTPS (FTP/TLS) protocol</li>
                           <li>New decoder for VP8 and VP9 using libvpx for Linux distributions without avcodec</li>
                           <li>Improvements on Teletext, Subrip, and Tx3g subtitles</li>
                           <li>Support for MSN audio, Atrac3+, VP7, Bink, TAK, On2 AVC, DK3, DK4 </li>
                           <li>Support for IMC, Vivo g723.1, Smacker, FIC, Auravision, Canopus Lossless</li>
                           <li>Support x264 and FFv1 codecs RGB modes </li>
                           <li>Fixes for DVD, Audio-CD, M2TS LPCM audio, Speex
                        </ul>
                    </div>
                </div>
            </div>

            <div class="clearme" style='float: left; width: 480px; margin-bottom: 20px;'>
                <div class='audienceCallout'><?php echo _("Professional"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>Support for Digital Cinema Packages and encrypted DCP with KDM</li>
                           <li>HEVC encoding and muxing in MP4 and TS</li>
                           <li>Support VP8 encoding inside Ogg</li>
                           <li>Improvements of audio bar graph, for speed and resiliance</li>
                           <li>Support MPEG-2 video encoding through x262</li>
                           <li>Large improvements of teletext rendering, for speed and alignments</li>
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
                <div class='audienceCallout'><?php echo _("Mobile Versions"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>VLC for iOS 2.5.0 release is out</li>
                           <li>VLC for Windows Phone 1.2.0 public beta is out</li>
                           <li>VLC for WinRT 1.2.0, x86 and ARM</li>
                           <li>VLC for Android TV 1.2.6</li>
                           <li>VLC for Android 1.2.6</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div style='float: left; width: 480px; margin-bottom: 10px;'>
                <div class='audienceCallout'><?php echo _("For developers")?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>Add equalizer API for libVLC</li>
                           <li>Add functions for scrambling detection</li>
                           <li>Experimental new C++11 libVLC library: libvlcpp</li>
                           <li>New Android buildsystem and Java SDK</li>
                           <li>New WinRT library component for libVLC: libVLCX</li>
                           <li>Improvements for iOS/OSX VLCKit: Swift support and ARC</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="clearme" style='float: left; width: 480px; margin-bottom: 20px;'>
                <div class='audienceCallout'><?php echo _("Android"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                            <li>Complete switch to Material design, including black theme</li>
                            <li>Support for Audio playlists and modtracker files</li>
                            <li>Support for AC-3 Passthrough and 5.1/7.1 audio</li>
                            <li>Support switch to background video playback</li>
                            <li>Large improvements on the first Android TV release</li>
                            <li>Support chapter selections</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("iOS")?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                            <li>Support for iCloud, box.com and OneDrive</li>
                            <li>Support 10-band equalizer</li>
                            <li>Support sharing media between devices</li>
                            <li>Support Chapters and Title selections</li>
                            <li>New player design</li>
                            <li>Add media information dialog and timer for playback </li>
                        </ul>
                    </div>
                </div>
            </div>


<!-- Downloads -->
        <div class="clearme"></div>

        <a name="download" id="getit"></a>

        <div class="clearme"></div>
        <div style="float: right; width: 50%;">
            <h1>Spread the news</h1>
               <a href="https://www.facebook.com/vlc.media.player/posts/10152878439401245" style="padding-top: 10px;"><img src='//images.videolan.org/images/facebook.png' alt='Facebook' /></a>
               <a href="https://twitter.com/videolan/status/588711970179837952"><img src='//images.videolan.org/images/twitter.png' alt='Twitter' /></a>
               <a href="https://plus.google.com/+vlc/posts/bUh23Z873ri"><img src='//images.videolan.org/images/gplus.png'></a>
        </div>

        <h1>Download VLC</h1>
        <div style="width: 50%;">
        <h2>Windows</h2>
           <a id='downloadButton' href='<?php echo getDownloadLink("vlc", $win32version, "win32/vlc-$win32version-win32.exe"); ?>' >
               <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />
               <span class='downloadText'><?php echo _("VLC for Windows"); ?></span>
               <span id='downloadDetails' style='font-size: 12px; color: white;'>
               Version <span id='downloadVersion'><?php echo $win32version ?></span>
           </a>
        </div>
        <div style="width: 40%; float: left; margin-left: 96px; margin-top:10px;">
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
         <p>Ask your favorite packager for VLC 2.2!</p>
        </div>


        <div class="clearme"></div>
        <h1>Related links</h1>
        <ul>
            <li><a href="/developers/vlc-branch/NEWS">Changelog</a></li>
            <li><a href="http://video.fosdem.org/2015/devroom-open_media/vlc.mp4">FOSDEM talk about VLC 2.2.0</a></li>
            <li><a href="http://feepk.net/2015/02/27/vlc-media-player-for-mac-os-x-2-2-0/">VLC media player for Mac OS X 2.2.0</a></li>
            <li><a href="http://feepk.net/2015/03/27/vlc-for-ios-2-5-0/">VLC for iOS 2.5.0</a></li>
            <li><a href="https://blog.l0cal.com/2015/02/27/vlc-2.2.0-weatherwax/">VLC 2.2.0 WeatherWax</a></li>
        </ul>

        <div class="clearme"></div>
        <h1>Contact</h1>
        <p>For any questions related to this release, please <a href="/contact.html">contact us</a>.</p>
        </div>

</div>
<?php footer('$Id: index.php 7173 2012-02-11 00:58:09Z jb $'); ?>
