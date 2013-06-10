<?php
   $title = _("VLC 2.0.7 Twoflower");
   $body_color = "red";
   $language = "";
   $nobanner = true;
   $additional_js = array("/js/slimbox2.js");
   $additional_css= array("/js/css/slimbox2.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/package.php");

   $macosxversion = "2.0.7";
   $win32version = "2.0.7";
?>
    <center><h1 class='bigtitle'>VLC reaches <b>2.0.7</b></h1>
    <div style="padding-top: 10px;">VLC 2.0.7 "Twoflower" is a small update to our 2.0 media player.</div>
    </center>

        <div class="clearme" style='padding-top: 30px;'>
            <?php image( 'largeVLC.png', 'Large Orange VLC media player Traffic Cone Logo', 'projectImg' ); ?>
            <div style='float: left; width: 500px;'>
                <div class='projectDescription'>
                    <div style="padding-bottom: 8px;"><b>2.0.7</b> is a small update that fixes some regressions of the 2.0.x branch of VLC.</b>

                    <div style="padding-bottom: 8px;"><b>2.0.7</b> fixes track selection for PowerPC machines.</div>

                    <div style="padding-bottom: 8px;"><b>2.0.7</b> also fixes and important regression in decoding numerous audio file formats and when encoding in MP3 and AAC.</div>

                    <div style="padding-bottom: 8px;"><b>2.0.7</b> closes a couple of security issues and fixes regression in our ActiveX plugin for Internet Explorer.</div>

                    <div style="padding-bottom: 8px;">With faster decoding on multi-core, GPU, and mobile hardware and the ability to open more
                  formats, notably professional, HD and 10bits codecs, 2.0 was a major upgrade for VLC. </div>

                </div>
                <a id='downloadButton' href='#download'>
                    <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />
                    <span class='downloadText'><?php echo _("Get VLC now!"); ?></span>
                    <span id='downloadDetails' style='font-size: 12px; color: white;'>
                    Version <span id='downloadVersion'>2.0.7</span>
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

        <div class="clearme" style='padding-top: 20px;'>
            <h1 style='margin-bottom: 12px;'><?php echo _("Features"); ?></h1>

            <div style='float: left; width: 480px; margin-bottom: 20px;'>
                <div class='audienceCallout'><?php echo _("Video"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>Rewritten video output core and modules, allowing subpicture blending in GPU.</li>
                           <li>Shader support in the OpenGL output, for colorspace conversion, including 10bits.</li>
                           <li>New video outputs for Windows 7, Android, iOS and OS/2.</li>
                           <li>New debanding, grain, denoising and anti-flickering filters.</li>
                           <li>New deinterlacing filter, including an Inverse Telecine algorithm.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("Audio"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>New resamplers for higher quality audio.</li>
                           <li>New dynamic range compressor and karaoke filters.</li>
                           <li>Simplification of the audio core for faster processing.</li>
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
                           <li>Multi-threaded decoding for H.264, MPEG-4/Xvid and WebM.</li>
                           <li>Support for 10bits codecs, WMV image and some other codecs.</li>
                           <li>Rewritten support for images, including jpeg, png, xcf, bmp...</li>
                           <li>Important changes in RealVideo and Real Format support.</li>
                           <li>CrystalHD cards and Android OpenMAX support for hardware decoding.</li>
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

<?php
function vlcscreenshot($img,$thumb, $desc){
    echo"<div class='screenshot' style='overflow: hidden; width: 150px; height: 97px;'><a href='http://images1.videolan.org/vlc/screenshots/$img' rel='lightbox-vlc'><img
    src='http://images1.videolan.org/vlc/screenshots/$thumb' alt='VLC media player - $desc' /></a>
    </div>";
}
?>

            <div>
        <a name="download" id="getit"></a>
                <h1>Screenshots</h1>
                <?php
                vlcscreenshot( "2.0.0/vlc-2.0-macosx.jpg",
                               "2.0.0/tm_vlc-2.0-macosx.jpg",
                               "Mac OS X 10.6");
                vlcscreenshot( "2.0.0/vlc-2.0-win7.jpg",
                               "2.0.0/tm_vlc-2.0-win7.jpg",
                               "Windows 7");
                vlcscreenshot( "2.0.0/vlc-2.0-gnome2-mandriva.jpg",
                               "2.0.0/tm_vlc-2.0-gnome2-mandriva.jpg",
                               "Gnome 2 on Mandriva");
                vlcscreenshot( "2.0.0/vlc-2.0-lion-black.jpg",
                               "2.0.0/tm_vlc-2.0-lion-black.jpg",
                               "Mac OS X 10.7 Lion");
                vlcscreenshot( "2.0.0/vlc-2.0-poney.jpg",
                               "2.0.0/tm_vlc-2.0-poney.jpg",
                               "Gnome 3 on debian");
                vlcscreenshot( "2.0.0/vlc-2.0-gnome3-open.jpg",
                               "2.0.0/tm_vlc-2.0-gnome3-open.jpg",
                               "Gnome 3");
               ?>
            </div>

        <div class="clearme"></div>
        <h1>2.0.7 specific changes</h1>

            <div style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("2.0.7"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li>Fix track selection for PowerPC machines.</li>
                           <li>Fix audio decoding for WMA Pro, MPEG 4 ALS, APE, MLP and ADPCM-IMA4.</li>
                           <li>Fix audio encoding for MP3 and AAC.</li>
                           <li>Numerous translations updates and new Azerbaijani, Kirgyz, Oriya translations.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("2.0.7"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                            <li>Fix a memory leak when creating AVI files</li>
                            <li>Fix two XSS vulnerabilities in the Web UI</li>
                            <li>Fix memory exhaustion vulnerability in some playlist files</li>
                            <li>Fix a libVLC crash in MacOS X port</li>

                        </ul>
                    </div>
                </div>
            </div>



        <div class="clearme"></div>
        <h1>Spread the news</h1>
        <p>
           <a href="http://www.facebook.com/vlc.media.player/posts/10151512218286245">Facebook</a>
           <a href="https://plus.google.com/104597325891170264649/posts/jLdfHbd2aQc">Google Plus</a>
           <a href="https://twitter.com/videolan/status/322321743387701248">Twitter</a>
           </p>
        <div class="clearme"></div>
        <h1>Download VLC</h1>
        <h2>Windows</h2>
           <a id='downloadButton' href='<?php echo getDownloadLink("vlc", $win32version, "win32/vlc-$win32version-win32.exe"); ?>' >
               <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />
               <span class='downloadText'><?php echo _("VLC for Windows"); ?></span>
               <span id='downloadDetails' style='font-size: 12px; color: white;'>
               Version <span id='downloadVersion'><?php echo $win32version ?>
           </a>
        <div class="clearme"></div>
        <h2 style="margin-top: 30px;">Mac OS X</h2>
        <div>
        <h3>Mac OS X 10.6, 10.7 &amp; 10.8</h3>
        <a id='downloadButton' href='<?php echo getDownloadLink("vlc", $macosxversion, "macosx/vlc-$macosxversion-intel64.dmg" ); ?>' >
               <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />
               <span class='downloadText'><?php echo _("VLC for Mac OS X 10.6+"); ?></span>
               <span id='downloadDetails' style='font-size: 12px; color: white;'>
               Version <span id='downloadVersion'><?php echo $macosxversion ?>
           </a>
        </div>
        <div style="float: right; width: 400px;">
        <h3>Mac OS X 10.5 Intel</h3>
        <a href='<?php echo getDownloadLink("vlc", $macosxversion, "macosx/vlc-$macosxversion-intel32.dmg" ); ?>' >
        VLC 2.0.7 for Mac OS X 10.5 (Intel)</a>
        <h3>Mac OS X 10.5 PowerPC</h3>
        <a href='<?php echo getDownloadLink("vlc", $macosxversion, "macosx/vlc-$macosxversion-powerpc.dmg" ); ?>' >
        VLC 2.0.7 for Mac OS X 10.5 (PowerPC)</a>
        </div>
        <div class="clearme"></div>
        <div style="float: right; width: 400px; margin-top: 15px;">
         <h2>Linux</h2>
         <p>Ask your favorite packager for VLC 2.0!</p>
        </div>
        <h2 style="margin-top: 30px;">Sources</h2>
        <a href="/vlc/download-sources.html">Get the source!</a>


        <div class="clearme"></div>
        <h1>Contact</h1>
        <p>For any questions related to this release, please <a href="/contact.html">contact us</a>.</p>

</div>
<?php footer('$Id: index.php 7173 2012-02-11 00:58:09Z jb $'); ?>
