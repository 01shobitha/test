<?php
   $title = _("VLC 2.0 Twoflower");
   $body_color = "red";
   $language = "";
   $nobanner = true;
   require($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/news.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/magpierss/rss_fetch.inc");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>
    <div>
            <center><h1 class='bigtitle'>VLC gets <b>2.0</b></h1>
            <div style="padding-top: 10px;">VLC 2.0 "Twoflower" is a major new version of our popular media player.</div>
            </center>

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

                    <div>Finally, Twoflower fixes hundreds of bugs, in more than 7000 commits from 160 contributors.</div>
                </div>
                <a id='downloadButton' href='#download'>
                    <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />
                    <span class='downloadText'><?php echo _("Get VLC now!"); ?></span>
                    <span id='downloadDetails' style='font-size: 12px; color: white;'>
                    Version <span id='downloadVersion'>2.0.0</span>
                    </span>
                </a>
                <script>
                $("#downloadButton").click(function() {
                     $('html, body').animate({
                         scrollTop: $("#getit").offset().top
                     }, 3000);
                });
                </script>

            </div>
        </div>

        <div class="clearme" style='padding-top: 20px;'>
            <h1 style='margin-bottom: 12px;'><?php echo _("Features"); ?></h1>

            <div style='float: left; width: 480px; margin-bottom: 20px;'>
                <div class='audienceCallout'><?php echo _("Video"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>Rewritten video output core and modules, allowing subpicture blending in GPU.</li>
                           <li>Shader support in the OpenGL output, for chroma conversion, including 10bits.</li>
                           <li>New video outputs for Windows 7, Android, iOS and OS/2.</li>
                           <li>New debanding, grain, denoising and anti-flickering filters.</li>
                           <li>New deinterlacing filter, including an inverse telecine algorithm.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("Audio"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>Simplification of the audio core for faster processing.</li>
                           <li>New resamplers for higher quality audio.</li>
                           <li>New dynamic range compressor and karaoke filters.</li> 
                           <li>New audio outputs for iOS, Android and OS/2.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="clearme" style='float: left; width: 480px; margin-bottom: 20px;'>
                <div class='audienceCallout'><?php echo _("Formats"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>Multi-threaded decoding for H.264, Mpeg-4/Xvid and Webm.</li>
                           <li>Support for 10bits codecs, WMV image and some other codecs.</li>
                           <li>Rewritten support for images, including jpeg, png, xcf, bmp...</li>
                           <li>Important changes in RealVideo and Real Format support.</li>
                           <li>CrystalHD cards and Android OpenMAL support for hardware decoding.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("Input and Devices"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>Experimental support for BluRay discs: <br />
                               - Menu are deactivated in this release (will come soon).<br />
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
                           <li>Completly new interface, based on one single Window.<br />
                            - Available in 2 colors: Lion grey and QTX black.<br />
                            - Supporting extensions and better integrated in Lion.</li>
                           <li>Support for all QTKit devices through qtcapture and qtsound modules.</li>
                           <li>Still supporting X.5 and G5 computers.</li>
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
                           <li>Support for Jpeg-2000 and DNxHD/VC-3 in 10bits.</li>
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
                           <li>Upgraded webplugins of VLC, to be more stable and integrated in all browsers.</li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>

        <div class="clearme"></div>
        <a name="download" id="getit"></a>
<?php
function vlcscreenshot($img,$thumb, $desc){
    echo"<div class='screenshot' style='overflow: hidden; width: 150px; height: 97px;'><a href='http://images1.videolan.org/vlc/screenshots/$img'><img
    src='http://images1.videolan.org/vlc/screenshots/$thumb' alt='VLC media player - $desc' /></a>
    </div>";
}
?>

            <div>
                <h1>Screenshots</h1>
                <?php
                vlcscreenshot( "2.0.0/vlc-2.0-macosx.jpg",
                               "2.0.0/tm_vlc-2.0-macosx.jpg",
                               "Mac OS X.6");
                vlcscreenshot( "2.0.0/vlc-2.0-gnome3-debian.jpg",
                               "2.0.0/tm_vlc-2.0-gnome3-debian.jpg",
                               "Mac OS X.6");
                vlcscreenshot( "2.0.0/vlc-2.0-win7.jpg",
                               "2.0.0/tm_vlc-2.0-win7.jpg",
                               "Mac OS X.6");
                vlcscreenshot( "2.0.0/vlc-2.0-gnome2-mandriva.jpg",
                               "2.0.0/tm_vlc-2.0-gnome2-mandriva.jpg",
                               "Mac OS X.6");
                vlcscreenshot( "2.0.0/vlc-2.0-poney.jpg",
                               "2.0.0/tm_vlc-2.0-poney.jpg",
                               "Mac OS X.6");
                vlcscreenshot( "2.0.0/vlc-2.0-gnome3-open.jpg",
                               "2.0.0/tm_vlc-2.0-gnome3-open.jpg",
                               "Mac OS X.6");
               ?>
            </div>

        <div class="clearme"></div>
        <h1>Download VLC</h1>
        <h2>Windows</h2>
           <a id='downloadButton' href='<?php echo $dlUrl; ?>'>
               <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />
               <span class='downloadText'><?php echo _("VLC for Windows"); ?></span>
               <span id='downloadDetails' style='font-size: 12px; color: white;'>
               Version <span id='downloadVersion'><?php echo $win32version ?>
           </a>
        <div class="clearme"></div>
        <h2 style="margin-top: 30px;">Mac OS X</h2>
        <div>
        <h3>Mac OS X.6 & X.7</h3>
           <a id='downloadButton' href='<?php echo $dlUrl; ?>'>
               <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />
               <span class='downloadText'><?php echo _("VLC for Mac OS X.6+"); ?></span>
               <span id='downloadDetails' style='font-size: 12px; color: white;'>
               Version <span id='downloadVersion'><?php echo $win32version ?>
           </a>
        </div>
        <div style="float: right; width: 400px;">
        <h3>Mac OS X.5 intel</h3>
        <h3>Mac OS X.5 PPC</h3>
        </div>
        <div class="clearme"></div>
        <div style="float: right; width: 400px; margin-top: 15px;">
         <h2>Linux</h2>
         <p>Ask your favorite packager for VLC 2.0!</p>
        </div>
        <h2 style="margin-top: 30px;">Sources</h2>
        <a href="/vlc/download-sources.html">Get the source!</a>
              
</div>
<?php footer('$Id: index.php 7173 2012-02-11 00:58:09Z jb $'); ?>
