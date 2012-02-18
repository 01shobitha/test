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
                    <div style="padding-bottom: 8px;">Faster when decoding, using multi-cores, GPU and mobile hardware,
                         bringing support for more codecs, notably professional, HD and 10bits codecs,
                         VLC 2.0 is a major upgrade for VLC.</div>
                
                    <div style="padding-bottom: 8px;">Twoflower has a new rendering pipeline for video, with higher quality subtitles,
                         and new video filters to enhance your videos.</div>

                    <div style="padding-bottom: 8px;">It supports many new devices and Blu-Ray Discs (experimental).
                        </div>

                    <div style="padding-bottom: 8px;">Completely reworked Mac and Web interfaces, and improvements on the other ones
                        should help your usage of VLC.</div>

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
                     }, 2000);
                });
                </script>

            </div>
        </div>

        <div class="clearme" style='padding-top: 20px;'>
            <h1 style='margin-bottom: 12px;'><?php echo _("Features"); ?></h1>

            <div style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("Video"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                        <ul>
                           <li> test </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("Audio"); ?></div>
                <div class='clearme'>
                    <div class='productDescription'>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearme"></div>

        <a name="download" id="getit"></a>
        <h1>Download VLC</h1>

              
</div>
<?php footer('$Id: index.php 7173 2012-02-11 00:58:09Z jb $'); ?>
