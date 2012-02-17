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
        <div class="clearme" style='padding-top: 30px;'>
            <?php image( 'largeVLC.png', 'Large Orange VLC media player Traffic Cone Logo', 'projectImg' ); ?>
            <div style='float: left; width: 500px;'>
                <h1 class='bigtitle'>VLC gets <b>2.0</b></h1>
                <div class='projectDescription'>
                    <div>VLC 2.0 "Twoflower" is a major new version of our popular media player.</div>
                    <div>Faster when decoding, using multi-cores, GPU and mobile hardware,<br />
                         bringing support for more codecs, notably professional, HD and 10bits codecs, <br />
                         VLC 2.0 is a major change in VLC.</div>
                    <div>Twoflower has a new rendering pipeline for video, with higher quality subtitles,<br />
                         and new video filters to enhance your videos.</div>
                    <div>It also brings many new audio improvements including better resampling.</div>
                    <div>There are completely reworked Mac and Web interfaces, and improvements on the other ones.</div>
                    <div>Twoflower fixes a thousands of bugs, in more than 7000 commits from 160 contributors.</div>
                </div>
                <a class='extraInfoLink' href='#features.html'><?php echo _("Features"); ?></a>
                <a id='downloadButton' href='<?php echo $dlUrl; ?>'>
                    <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />
                    <span class='downloadText'><?php echo _("Get VLC now!"); ?></span>
                    <span id='downloadDetails' style='font-size: 12px; color: white;'>
                    Version <span id='downloadVersion'><?php echo $win32version ?>
                    </span>&nbsp;&#8226;&nbsp;<span id='downloadOS'>Windows</span>&nbsp;&#8226;&nbsp;<span id='downloadSize'>20MB</span>
                    </span>
                </a>
                <?php replaceDLinfos(); ?>
            </div>
        </div>

        <div class="clearme" style='padding-top: 20px;'>
            <h1 style='margin-bottom: 12px;'><?php echo _("Features"); ?></h1>

            <div style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("Video"); ?></div>
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
            <div style='float: left; width: 480px;'>
                <div class='audienceCallout'><?php echo _("Audio"); ?></div>
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
        </div>

        <div class="clearme"></div>


</div>
<?php footer('$Id: index.php 7173 2012-02-11 00:58:09Z jb $'); ?>
