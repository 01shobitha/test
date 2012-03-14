<?php
   $language = "";
   $title = _("VLC: Official site - Free multimedia solutions for all OS!");
   $body_color = "blue";

   $additional_js = array("/js/slimbox2.js");
   $additional_css= array("/js/css/slimbox2.css");

   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/news.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/magpierss/rss_fetch.inc");

   /* Main page */
?>
    <div>
        <div class="clearme" style='padding-top: 26px;'>
            <?php image( 'largeVLC.png', 'Large Orange VLC media player Traffic Cone Logo', 'projectImg' ); ?>
            <div style='float: left; width: 500px;'>
                <h1 class='bigtitle'>VLC media player</h1>
                <div class='projectDescription'>
                   <?php echo
                   _("VLC is a free and open source cross-platform multimedia player and framework that plays most multimedia files as well as DVD, Audio CD, VCD, and various streaming protocols."); ?>
                </div>
                <a class='extraInfoLink' href='/vlc/features.html'><?php echo _("Features"); ?></a>
                <a class='extraInfoLink' href='/vlc/screenshots.html'><?php echo _("Screenshots"); ?></a>
                <a class='extraInfoLink' href='/vlc/skins.php'><?php echo _("Skins"); ?></a>
                <a id='downloadButton' href='<?php echo $dlUrl; ?>' class="sourceforge_accelerator_link">
                    <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />
                    <span class='downloadText'><?php echo _("Download VLC"); ?></span>
                    <span id='downloadDetails' style='font-size: 12px; color: white;'>
                    Version <span id='downloadVersion'><?php echo $win32version ?>
                    </span>&nbsp;&#8226;&nbsp;<span id='downloadOS'>Windows</span>&nbsp;&#8226;&nbsp;<span id='downloadSize'>20MB</span>
                    </span>
                </a>
                <?php replaceDLinfos(); ?>
                <a class='extraInfoLink' href='/vlc/#download' style="padding-left: 100px;"><?php echo _("Other Systems and Versions");?></a>
            </div>
        </div>

        <div class="clearme" style='padding-top: 30px;'>
            <h1 style='margin-bottom: 25px;'><?php echo _("Other projects from VideoLAN");?></h1>
            <div style='float: left; width: 330px;'>
                <div class='audienceCallout'><?php echo _("For Everyone");?></div>
                <div class="clearme">
                    <a href='/vlc/' class='noUnderline'>
                        <?php image( 'VLC-IconSmall.png', "VLC icon", "smallProjectImg" ); ?>
                        <span class='productName'>VLC media player</span>
                        <span class='productDescription'><?php echo
                            _("VLC is a powerful media player playing most of the media codecs and video formats out there."); ?>
                        </span>
                    </a>
                </div>
                <div class="clearme" style='padding-top: 40px;'>
                    <a href='/vlmc/' class='noUnderline'>
                        <?php image( 'VLMC-IconSmall.png', "VLMC icon", "smallProjectImg" ); ?>
                        <span class='productName'>VLMC</span>
                        <span class='productDescription'>
                            <?php echo _("VideoLAN Movie Creator is a non-linear editing software for video creation."); ?>
                        </span>
                    </a>
                </div>
            </div>

            <div style='float: left; padding-left: 30px; width: 320px;'>
                <div class='audienceCallout'><?php echo _("For Professionals"); ?></div>
                <div class="clearme">
                    <a href='/projects/dvblast.html' class='noUnderline'>
                        <?php image( 'DVBlast-IconSmall.png', "DVBlast Icon", "smallProjectImg" ); ?>
                        <span class='productName'>DVBlast</span>
                        <span class='productDescription'>
                            <?php echo _("DVBlast is a simple and powerful MPEG-2/TS demux and streaming application."); ?>
                        </span>
                    </a>
                </div>
                <div style='padding-top: 10px; padding-left: 124px;'>
                    <a href='/projects/multicat.html' class='noUnderline'>
                        <span class='productName'>multicat</span>
                        <span class='productDescription'>
                            <?php echo _("multicat is a set of tools designed to easily and efficiently manipulate multicast streams and TS."); ?>
                        </span>
                    </a>
                </div>
                <div class="clearme" style='padding-top: 10px;'>
                    <a href='/developers/x264.html' class='noUnderline'>
                        <?php image( 'x264-IconSmall.png', "x264 Icon", "smallProjectImg" ); ?>
                        <span class='productName'>x264</span>
                        <span class='productDescription'>
                            <?php echo _("x264 is a free application for encoding video streams into the H.264/MPEG-4 AVC format."); ?>
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <div style='float: left; padding-left: 30px; width: 180px;'>
            <div class='audienceCallout'><?php echo _("For Developers"); ?></div>
            <a href='/developers/libdvdcss.html' class='noUnderline'><span class='productName' style='padding-bottom: 16px;'>libdvdcss</span></a>
            <a href='/developers/libdvbpsi.html' class='noUnderline'><span class='productName' style='padding-bottom: 16px;'>libdvdpsi</span></a>
            <a href='/vlc/libvlc.html' class='noUnderline'><span class='productName' style='padding-bottom: 16px;'>libVLC</span></a>
            <a href='/developers/libbluray.html' class='noUnderline'><span class='productName' style='padding-bottom: 16px;'>libbluray</span></a>
            <a href='/developers/libaacs.html' class='noUnderline'><span class='productName' style='padding-bottom: 16px;'>libaacs</span></a>
            <a href='/developers/libdca.html' class='noUnderline'><span class='productName'  style='padding-bottom: 16px;'>libdca</span></a>
            <a href='/developers/bitstream.html' class='noUnderline'><span class='productName'>biTStream</span></a>
        </div>

        <a href='/projects/' class='extraInfoLink' style='text-transform: uppercase; font-size: 13px; display: block; padding-top: 10px; clear: both'>
            <?php echo _("View All Projects"); ?></a>

        <div class="clearme" style='padding-top: 20px;'>
            <h1 style='margin-bottom: 12px;'><?php echo _("Help us out!"); ?></h1>
            <div style='float: left; width: 320px;'>
                <div class='audienceCallout'><?php echo _("Donate"); ?></div>
                <div class='clearme'>
                    <?php image( "cash.png", "Donate to VLC", "floatSmallImg" ); ?>
                    <div class='productDescription'>
                        <?php echo _("VideoLAN is a non-profit organization.")."<br />";
                         echo _(" All our costs are met by donations we receive from our users. If you enjoy using a VideoLAN product, please donate to support us."); ?><br />
                        <a href='/contribute.html' class='extraInfoLink' style='text-transform: uppercase; font-size: 13px; display: block; padding-top: 10px;'>
                          <?php echo _("Learn More"); ?></a>
                    </div>
                </div>
            </div>
            <div style='float: left; width: 300px;'>
                <div class='audienceCallout'><?php echo _("Contribute"); ?></div>
                <div class='clearme'>
                    <?php image( "tools.png", "Contribute Work to VLC", "floatSmallImg" ); ?>
                    <div class='productDescription'>
                        <?php echo _("VideoLAN is open-source software.")."<br />";
                        echo _("This means that if you have the skill and the desire to improve one of our products, your contributions are welcome"); ?><br />
                        <a href='/contribute.html' class='extraInfoLink' style='text-transform: uppercase; font-size: 13px; display: block; padding-top: 10px;'>
                          <?php echo _("Learn More"); ?></a>
                    </div>
                </div>
            </div>
            <div style='float: left; width: 320px;'>
                <div class='audienceCallout'><?php echo _("Spread the Word"); ?></div>
                <div class='clearme'>
                    <?php image( "heart.png", "Spread VLC", "floatSmallImg" ); ?>
                    <div class='productDescription'>
                        <?php echo _("We feel that VideoLAN has the best video software available at the best price: free. If you agree please help spread the word about our software."); ?><br />
                        <a href='/contribute.html' class='extraInfoLink' style='text-transform: uppercase; font-size: 13px; display: block; padding-top: 10px;'>
                          <?php echo _("Learn More"); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearme"></div>

<?/*   End normal page  ?>

    <div>
            <center><h1 class='bigtitle'>VLC reaches <b>2.0</b></h1>
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

                    <div>Twoflower fixes several hundreds of bugs, in more than 7000 commits from 160 volunteers.</div>

                </div>
                <a id='downloadButton' href='#download'>
                    <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />
                    <span class='downloadText'><?php echo _("Get VLC now!"); ?></span>
                    <span id='downloadDetails' style='font-size: 12px; color: white;'>
                    Version <span id='downloadVersion'>2.0.0</span>
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
        <h1>Spread the news</h1>
        <p><a href="http://www.reddit.com/r/technology/comments/pvh6t/vlc_200_twoflower_is_out/">Reddit</a>
           <a href="https://www.facebook.com/vlc.media.player/posts/249766805097687">Facebook</a>
           <a href="http://news.ycombinator.com/item?id=3607350">Hacker News</a>
           <a href="https://twitter.com/#!/videolan/status/170943829774577664">Twitter</a>
        </p>

        <div class="clearme"></div>
        <h1>Download VLC</h1>
        <h2>Windows</h2>
           <a id='downloadButton' href='<?php echo $dlUrl; ?>' class="sourceforge_accelerator_link">
               <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />
               <span class='downloadText'><?php echo _("VLC for Windows"); ?></span>
               <span id='downloadDetails' style='font-size: 12px; color: white;'>
               Version <span id='downloadVersion'><?php echo $win32version ?>
           </a>
        <div class="clearme"></div>
        <h2 style="margin-top: 30px;">Mac OS X</h2>
        <div>
        <h3>Mac OS X 10.6 &amp; 10.7</h3>
        <a id='downloadButton' href='<?php echo "http://sourceforge.net/projects/vlc/files/$macosxversion/macosx/vlc-$macosxversion-intel64.dmg/download"; ?>' class="sourceforge_accelerator_link">
               <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />
               <span class='downloadText'><?php echo _("VLC for Mac OS X 10.6+"); ?></span>
               <span id='downloadDetails' style='font-size: 12px; color: white;'>
               Version <span id='downloadVersion'><?php echo $win32version ?>
           </a>
        </div>
        <div style="float: right; width: 400px;">
        <h3>Mac OS X 10.5 Intel</h3>
        <a href='<?php echo "http://sourceforge.net/projects/vlc/files/$macosxversion/macosx/vlc-$macosxversion-intel32.dmg/download"; ?>' class="sourceforge_accelerator_link">
        VLC 2.0.0 for Mac OS X.5 (intel)</a>
        <h3>Mac OS X 10.5 PowerPC</h3>
        <a href='<?php echo "http://sourceforge.net/projects/vlc/files/$macosxversion/macosx/vlc-$macosxversion-powerpc.dmg/download"; ?>' class="sourceforge_accelerator_link">
        VLC 2.0.0 for Mac OS X.5 (powerpc)</a>
        </div>
        <div class="clearme"></div>
        <div style="float: right; width: 400px; margin-top: 15px;">
         <h2>Linux</h2>
         <p>Ask your favorite packager for VLC 2.0!</p>
        </div>
        <h2 style="margin-top: 30px;">Sources</h2>
        <a href="/vlc/download-sources.html">Get the source!</a>

   <script>
   (function() {
       var script = document.createElement('script');
       script.src = '//sourceforge.net/accelerator/js?partner_id=60';
       script.defer = true;
       var s = document.getElementsByTagName('script')[0];
       s.parentNode.insertBefore(script, s);
   })();
   </script>


<?php /* Begin news items */ ?>
        <div class="clearme"></div>

<div style='width: 500px; padding-top: 25px; float: left;'>
    <h1 style='margin-bottom: 13px;'><a href="/news.html"><?php echo _("News &amp; Updates"); ?></a></h1>
    <?php shownews("full", 5); ?>
</div>
<div style='width: 400px; padding-top: 25px; float: right;'>
    <h1 style='margin-bottom: 13px;'><a href="http://planet.videolan.org"><?php echo _("Development Blogs"); ?></a></h1>
    <?php
      define('MAGPIE_INPUT_ENCODING', 'UTF-8');
      define('MAGPIE_OUTPUT_ENCODING', 'UTF-8');
      $rss = fetch_rss("http://planet.videolan.org/rss10.xml");
      $i = 0;
      $chars_per_entry = 240;
      $entries_per_column = 4;
      $columns = 1;
      foreach($rss->items as $item) {
        echo "<p>";
        echo "<b><a href=\"".$item['link'].'" style="color: black;">'.htmlentities($item['title'],ENT_COMPAT,"UTF-8")."</a></b></p>";
        echo "<p style=\"border-bottom: 1px dashed #CCC;padding-bottom:5px;margin-bottom:5px\">";
        echo substr(strip_tags(html_entity_decode($item['content']['encoded'],ENT_COMPAT,"UTF-8")),0,$chars_per_entry);
        echo "<a href=\"".$item['link']."\">[...]</a><br/>";
        echo "</p>";
        $i++;
        if($i>=$columns*$entries_per_column) break;
        if($i%$entries_per_column==0) echo "</td><td>";
      }
    ?>
    <?php /* Social and other BS */ ?>
    <h1 style="position:relative">
    <?php echo _("Social media"); ?>
    <span style="float: right; padding-right: 20px;">
        <a href="http://www.twitter.com/videolan"><?php image( 'twitter.png', "Twitter" );?></a>
        <a href="http://www.facebook.com/vlc.media.player"><?php image( 'facebook.png', "Facebook" );?></a>
    </span>
    </h1>
    <?php
      $rss = fetch_rss("http://twitter.com/statuses/user_timeline/88776463.rss");
      $i = 0;
      $chars_per_entry = 240;
      $entries_per_column = 4;
      $columns = 1;
      foreach($rss->items as $item) {
        echo "<p style=\"border-bottom: 1px dashed #CCC;padding-bottom:5px;margin-bottom:5px\">";
        echo preg_replace('^(http://\S+)^is', '<a href="$1">$1</a>', str_replace("videolan:", "<b>".date("Y-m-d h:i",strtotime($item['pubdate']))."</b>", $item['title']));
        echo "</p>";
        $i++;
        if($i>=$columns*$entries_per_column) break;
        if($i%$entries_per_column==0) echo "</td><td>";
      }
    ?>

</div>

</div>
<?php footer('$Id$');

sf_money();
?>
