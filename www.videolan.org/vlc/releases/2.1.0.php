<?php
   $title = _("VLC 2.1 Rincewind");
   $body_color = "red";
   $language = "";
   $nobanner = true;
   $additional_js = array("/js/slimbox2.js", "/js/jquery.slides.min.js");
   $additional_css= array("/js/css/slimbox2.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/package.php");

   $macosxversion = "2.1.0";
   $win32version = "2.1.0";
?>
    <div>
            <center><h1 class='bigtitle'>VLC gets <b>2.1</b></h1>
            <div style="padding-top: 10px; padding-bottom: 10px; color: grey;">VLC 2.1 "Rincewind" is a major new version of our popular media player.</div>
            </center>

            <style>
 body {
      -webkit-font-smoothing: antialiased;
      color: #232525;
    }

    #slides {
      display: none
    }

    #slides .slidesjs-navigation {
      margin-top:3px;
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
      margin-right:5px;
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

    a.slidesjs-play {
      width:15px;
      background-position: -25px 0;
    }

    a:hover.slidesjs-play {
      background-position: -25px -18px;
    }

    a.slidesjs-stop {
      width:18px;
      background-position: -41px 0;
    }

    a:hover.slidesjs-stop {
      background-position: -41px -18px;
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

</style>
            <script>
              $(function(){
                $("#slides").slidesjs({
                  width: 940,
                  height: 320,
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
                 } 
                });
              });
            </script>

          <div id="slides">
                <img src="http://placehold.it/940x320">
                <img src="http://placehold.it/940x320">
                <img src="http://placehold.it/940x320">
                <img src="http://placehold.it/940x320">
                <img src="http://placehold.it/940x320">
         </div>

                <a id='downloadButton' href='#download' style="margin-left: 300px;">
                    <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />
                    <span class='downloadText'><?php echo _("Get VLC now!"); ?></span>
                    <span id='downloadDetails' style='font-size: 12px; color: white;'>
                    Version <span id='downloadVersion'>2.1.0</span>
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
            <?php image( 'largeVLC.png', 'Large Orange VLC media player Traffic Cone Logo', 'projectImg' ); ?>
            <div style='float: left; width: 500px;'>
                <div class='projectDescription'>
                    <div style="padding-bottom: 8px;">With faster decoding on multi-core, GPU, and mobile hardware and the ability to open more
                  formats, notably professional, HD and 10bits codecs, 2.0 is a major upgrade for VLC.
                         </div>

                    <div style="padding-bottom: 8px;">Twoflower has a new rendering pipeline for video, with higher quality subtitles,
                         and new video filters to enhance your videos.</div>

                    <div style="padding-bottom: 8px;">It supports many new devices and BluRay Discs (experimental).
                        </div>

                    <div style="padding-bottom: 8px;">Completely reworked Mac and Web interfaces and improvements in
                  the other interfaces make VLC easier than ever to use.</div>

                    <div>Twoflower fixes several hundreds of bugs, in more than 7000 commits from 160 volunteers.</div>

                </div>
            </div>
        </div>

        <div class="clearme" style='padding-top: 20px;'>
            <h1 style='margin-bottom: 12px;'><?php echo _("Features"); ?></h1>

            <div style='float: left; width: 480px; margin-bottom: 40px;'>
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
                           <li>Support for G2M4, MSS1, MSS2, TSCC2, CDXL, Ut, VBLE video codecs.</li>
                           <li>Support for Ulead DV audio, Indeo Audio Coder, RealAudio Lossless audio.</li>
                           <li>Support for SCTE-27 subtitles.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("Formats"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>Experimental support for BluRay discs: <br />
                               - Menus are deactivated in this release (will come soon).<br />
                               - <a href="/developers/libaacs.html" style="color: #4D4D4D;">AACS</a> and BD+ DRM libraries and keys are not shipped, for legal reasons.</li>
                           <li>Support for SDI capture cards and QTKit devices.</li>
                           <li>Support for new adaptive streaming protocols, like HLS and DASH.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="clearme" style='float: left; width: 480px; margin-bottom: 20px;'>
                <div class='audienceCallout'><?php echo _("For Mac Users"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>Completely new, single window interface:<br />
                            - Available in 2 colors: Lion grey and QTX black.<br />
                            - Extensions support and better Lion integration.</li>
                           <li>Support for all QTKit devices through qtcapture and qtsound modules.</li>
                           <li>Continued support for X 10.5 and PPC users (1080p and ProRes on Dual-G5!).</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("For Anime Fans"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>Vastly improved MKV demuxer.</li>
                           <li>Rewritten linked segments and ordered chapter files support.</li>
                           <li>Correct support for FLAC, RV and Hi10p in MKV.</li>
                           <li>Rewritten seeking support in cue files.</li>
                           <li>Various ASS subtitles improvements.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="clearme" style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("For professional Users"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>Support for ProRes 422 and 4444, AVC/Intra.</li>
                           <li>Support for Jpeg-2000, Dirac and DNxHD/VC-3 in 10bits.</li>
                           <li>Support for EBU subtitles (stl) and EIA-608.</li>
                           <li>SDI and HD-SDI card support for input on Linux.</li>
                           <li>New Dirac/VC-2 encoder, faster than the previous one.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("For Developers"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>libVLC, libVLCcore and libcompat have switched from GPL to <a href="/press/lgpl-libvlc.html">LGPLv2.1+</a>.</li>
                           <li>New libVLC examples are available: media player, photobooth and mediainfo clones.</li>
                           <li>New JSON requests on the web interface to control running VLC instances.</li>
                           <li>Implementation of the <a href="http://www.mpris.org/">MPRIS2</a> interface to control media players.</li>
                           <li>VLC's web plugins have been rewritten for better integration and stability in all browsers.</li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>

        <div class="clearme"></div>

        <a name="download" id="getit"></a>

        <div class="clearme"></div>
        <h1>Spread the news</h1>
        <p><a href="http://www.reddit.com/r/technology/comments/pvh6t/vlc_200_twoflower_is_out/">Reddit</a>
           <a href="https://www.facebook.com/vlc.media.player/posts/249766805097687">Facebook</a>
           <a href="http://news.ycombinator.com/item?id=3607350">Hacker News</a>
           <a href="https://twitter.com/#!/videolan/status/170943829774577664">Twitter</a>
        </p>

        <div class="clearme"></div>
        <h1>Download VLC</h1>
        <h2>Windows</h2>
           <a id='downloadButton' href='<?php echo getDownloadLink("vlc", $win32version, "win32/vlc-$win32version-win32.exe"); ?>' >
               <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />
               <span class='downloadText'><?php echo _("VLC for Windows"); ?></span>
               <span id='downloadDetails' style='font-size: 12px; color: white;'>
               Version <span id='downloadVersion'><?php echo $win32version ?></span>
           </a>
        <div class="clearme"></div>
        <h2 style="margin-top: 30px;">Mac OS X</h2>
        <div>
        <a id='downloadButton' href='<?php echo getDownloadLink("vlc", $macosxversion, "macosx/vlc-$macosxversion-intel64.dmg" ); ?>' >
               <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />
               <span class='downloadText'><?php echo _("VLC for Mac OS X"); ?></span>
               <span id='downloadDetails' style='font-size: 12px; color: white;'>
               Version <span id='downloadVersion'><?php echo $macosxversion ?></span> - 64bits</span>
           </a>
        </div>

        <div class="clearme"></div>
        <div style="float: right; width: 400px; margin-top: 15px;">
         <h2>Linux</h2>
         <p>Ask your favorite packager for VLC 2.1!</p>
        </div>
        <h2 style="margin-top: 30px;">Sources</h2>
        <a href="/vlc/download-sources.html">Get the source!</a>


        <div class="clearme"></div>
        <h1>Contact</h1>
        <p>For any questions related to this release, please <a href="/contact.html">contact us</a>.</p>

</div>
<?php footer('$Id: index.php 7173 2012-02-11 00:58:09Z jb $'); ?>
