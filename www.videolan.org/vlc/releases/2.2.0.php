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
            <div style='float: left; width: 600px;'>
            <h1 style='margin-bottom: 12px;'><?php echo _("2.2.0 Highlights"); ?></h1>
                <div class='projectDescription'>
                    <div style="padding-bottom: 8px;">VLC 2.2.0 "Weatherwax" is a new major update of VLC.</div>
                    <div>VLC 2.2.0 auto-rotates the videos taken from phones, to fight <a href="https://www.youtube.com/watch?v=Bt9zSfinwFA">Vertical Video Syndrome!</a></div>
                    <div>VLC now resumes where you left off in all versions</div>
                    <div>Improves support for new HD codecs, VP9, opus and H.265/HEVC, for decoding and for encoding.</div>
                    <div>Extensions are now downloadable from within the application.</div>
                    <div>VLSub extension can download subtitles from the application.</div>
                    <div>We release at the same time, new versions and betas for iOS, Android, Windows Phone, Android TV and Windows RT.</div>
                    <div style="float: right;">Read the <a href="/press/vlc-2.2.0.html">Press release</a> and the <a href="/developers/vlc/NEWS"/>Changelog</a>.</div>
                </div>
            </div>
            <?php image( 'largeVLC.png', 'Large Orange VLC media player Traffic Cone Logo', 'projectImg' ); ?>
        </div>
<!--
<p>So, what's new in <b>VLC 2.2.0</b>, codename <i>WeatherWax</i>?</p>
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
"The VideoLAN community shows this time again an unprecedented level of professionalism in releasing VLC media player 2.2.0 simultaneously on all supported platforms. This is a groundbreaking change that any contributor can be proud of."<br
/><br
/
-->
        <div class="clearme" style='padding-top: 20px;'>
            <h1 style='margin-bottom: 12px;'> 2.2.0 <?php echo _("Features"); ?></h1>

            <div style='float: left; width: 480px; margin-bottom: 25px;'>
                <div class='audienceCallout'><?php echo _("Core"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>Auto-rotation of phone movies, to fight Vertical Video Syndrome</li>
                           <li>Resume playback where you left off</li>
                           <li>Extensions API and repository to download extensions directly from the application</li>
                           <li>GPU 0-copy support for decoding and displaying using hardware</li>
                           <li>Subtitles download from the web, using OpenSubtitles</li>
                           <li>Audio core upgrade, notably to support short samples</li>
                           <li>Improved support for UltraHD codecs, H.265 and VP9</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("Format"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>Support for BD-Java menus and overlay in Blu-Ray</li>
                           <li>Acceleration of VP9 and H.265/HEVC decoders</li>
                           <li>Support for encoding in H.265, Opus and VP9</li>
                           <li>Rewritten support for WMV, Ogg, MP4 and MP4</li>
                           <li>Support for WebVTT, Ogg/VP8, Opus/MKV</li>
                           <li>Support for DCP and encrypted DCP with KDM</li>
                           <li>Support for THP, Renderware videogames files</li>
                        </ul>
                    </div>
                </div>
            </div>

        <div class="clearme" style='padding-top: 20px;'>
            <h1 style='margin-bottom: 12px;'> 2.2.0 multiple releases</h1>

            <div style='float: left; width: 480px; margin-bottom: 25px;'>
                <div class='clearme'>
                    <div class='productDescription'>
<p>Therefore, today, we release:</p>
<ul><li>VLC media player 2.2.0</li
><li>VLC for iOS 2.4.1</li
><li>VLC for WinRT 1.1.0</li
><li>VLC for Android 1.1.0 Test</li
><li>VLC for Android TV 1.1.0</li
><li>VLC for Windows RT 1.1.0 Beta</li
><li>VLC for Windows Phone 1.1.0 Beta</li></ul>
<p>We hope that you like our new release as much as we do and we are looking forward to answer any question you might have.</p>
                    </div>
                </div>

<!--
            <div class="clearme" style='float: left; width: 480px; margin-bottom: 20px;'>
                <div class='audienceCallout'><?php echo _("Codecs"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>GPU accelerated auto-rotation using streams metadata.</li>
                           <li>Direct rendering for VDPAU and Mediacodec hardware acceleration.</li>
                           <li>MMAL video output for RaspberryPi.</li>
                           <li>OpenGL video output for Android.</li>
                           <li>HLSL shaders in Direct3D video output.</li>
                           <li>Media Foundation transform audio and video decoder.</li>
                           <li>Libvpx decoder for VP8 and VP9.</li>
                           <li></li>
                           <li></li>
                           <li>New jpeg, SVG and tx3g decoders.</li>
                           <li>Support for MSN audio, Atrac3+, VP7, Bink, TAK, On2 AVC, DK3, DK4, IMC, Vivo g723.1, Smacker, FIC, Auravision, Canopus Lossless</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("Formats"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                          <li>HEVC raw packetizer and demuxer.</li>
                           <li></li>
                           <li></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="clearme" style='float: left; width: 480px; margin-bottom: 20px;'>
                <div class='audienceCallout'><?php echo _("Input and Devices")?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li></li>
                           <li></li>
                           <li></li>
                           <li></li>
                           <li></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("User Interface"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>New extensions manager to download and install plugins.</li>
                           <li></li>
                           <li></li>
                           <li></li>
                           <li></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="clearme" style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("For Mobile"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li></li>
                           <li></li>
                           <li></li>
                           <li></li>
                           <li></li>
                           <li></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("For Developers"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>Add equalizer API to libVLC.</li>
                           <li>Relicensing of many modules from GPLv2+ to LGPLv2.1+</li>
                           <li></li>
                           <li></li>
                           <li></li>
                           <li></li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
 -->
        <div class="clearme"></div>

        <a name="download" id="getit"></a>

        <div class="clearme"></div>
        <div style="float: right; width: 400px;">
        <h1>Spread the news</h1>
           <a href="https://www.facebook.com/vlc.media.player/posts/10203127913417945" style="padding-top: 10px;"><img src='//images.videolan.org/images/facebook.png' alt='Facebook' /></a>
           <a href="https://twitter.com/videolan/status/430813648332660736"><img src='//images.videolan.org/images/twitter.png' alt='Twitter' /></a>
           <a href="https://plus.google.com/+vlc/posts/9i6gqyAUwJq"><img src='//images.videolan.org/images/gplus.png'></a>
            <a href="https://news.ycombinator.com/item?id=9119587">Hacker News</a>
            <a href="https://www.reddit.com/r/technology/comments/2xd2wu/vlc_220_multirelease/">Reddit</a>
        </p>

        <div>
        <h1>Download VLC</h1>
        <h2>Windows</h2>
           <a id='downloadButton' href='<?php echo getDownloadLink("vlc", $win32version, "win32/vlc-$win32version-win32.exe"); ?>' >
               <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />
               <span class='downloadText'><?php echo _("VLC for Windows"); ?></span>
               <span id='downloadDetails' style='font-size: 12px; color: white;'>
               Version <span id='downloadVersion'><?php echo $win32version ?></span>
           </a>
        </div>
        <div class="clearme"></div>
        <h2 style="margin-top: 30px;">OS X</h2>
        <div>
        <a id='downloadButton' href='<?php echo getDownloadLink("vlc", $macosxversion, "macosx/vlc-$macosxversion.dmg" ); ?>' >
               <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />
               <span class='downloadText'><?php echo _("VLC for OS X"); ?></span>
               <span id='downloadDetails' style='font-size: 12px; color: white;'>
               Version <span id='downloadVersion'><?php echo $macosxversion ?></span> - 64bits</span>
           </a>
        </div>


        <div class="clearme"></div>
        <div>
            <h2  style="margin-top: 30px;">Windows Phone</h2>
            <a href="http://www.windowsphone.com/s?appid=44fa83f7-a98d-4647-b9d4-c35ed729d0c9"><img src="/images/badges/WPS_cyan.png" /></a>
        </div>

        <div class="clearme"></div>
        <div>
            <h2  style="margin-top: 30px;">iOS</h2>
            <a href="http://itunes.apple.com/app/vlc-ios/id650377962"><img src="/images/appstoredownload-en.png" /></a>
        </div>

        <div class="clearme"></div>
        <div style="float: right; width: 400px; margin-top: 15px;">
         <h2>Linux</h2>
         <p>Ask your favorite packager for VLC 2.2!</p>
        </div>

        <div class="clearme"></div>
        <h2 style="margin-top: 30px;">Sources</h2>
        <a href="/vlc/download-sources.html">Get the source!</a>
        <div class="clearme"></div>
        <h2 style="margin-top: 10px;">Changelog</h2>
        <a href="/developers/vlc-branch/NEWS">Changelog</a>


        <div class="clearme"></div>
        <h1>Related links</h1>
        <ul>
           </ul>


        <div class="clearme"></div>
        <h1>Contact</h1>
        <p>For any questions related to this release, please <a href="/contact.html">contact us</a>.</p>

</div>
<?php footer('$Id: index.php 7173 2012-02-11 00:58:09Z jb $'); ?>
