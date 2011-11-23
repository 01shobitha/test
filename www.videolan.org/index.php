<?php
   $title = _("VLC: Official site - Free multimedia solutions for all OS!");
   $body_color = "blue";
   require($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/news.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/magpierss/rss_fetch.inc");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>
    <div>
        <div class="clearme" style='padding-top: 35px;'>
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
                <a id='downloadButton' href='<?php echo $dlUrl; ?>'>
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
        <div class="clearme" style='padding-top: 40px;'>
            <h1 style='margin-bottom: 25px;'><?php echo _("Other projects from VideoLAN");?></h1>
            <div style='float: left; width: 300px;'>
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
            <div style='float: left; padding-left: 30px; width: 350px;'>
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
                <div class="clearme" style='padding-top: 40px;'>
                    <a href='/developers/x264.html' class='noUnderline'>
                        <?php image( 'x264-IconSmall.png', "x264 Icon", "smallProjectImg" ); ?>
                        <span class='productName'>x264</span>
                        <span class='productDescription'>
                            <?php echo _("x264 is a free application for encoding video streams into the H.264/MPEG-4 AVC format."); ?>
                        </span>
                    </a>
                </div>
            </div>
            <div style='float: left; padding-left: 30px; width: 180px;'>
                <div class='audienceCallout'><?php echo _("For Developers"); ?></div>
                <a href='/developers/libdvdcss.html' class='noUnderline'><span class='productName' style='padding-bottom: 16px;'>libdvdcss</span></a>
                <a href='/developers/libdvbpsi.html' class='noUnderline'><span class='productName' style='padding-bottom: 16px;'>libdvdpsi</span></a>
                <a href='/vlc/libvlc.html'           class='noUnderline'><span class='productName' style='padding-bottom: 16px;'>libVLC</span></a>
                <a href='/developers/libbluray.html' class='noUnderline'><span class='productName' style='padding-bottom: 16px;'>libbluray</span></a>
                <a href='/developers/libaacs.html'   class='noUnderline'><span class='productName' style='padding-bottom: 16px;'>libaacs</span></a>
                <a href='/developers/libdca.html'    class='noUnderline'><span class='productName'>libdca</span></a>
            </div>
            <a href='/projects/' class='extraInfoLink' style='text-transform: uppercase; font-size: 13px; display: block; padding-top: 25px; clear: both;'>
                <?php echo _("View All Projects"); ?></a>
        </div>
        <div class="clearme" style='padding-top: 25px;'>
            <h1 style='margin-bottom: 25px;'><?php echo _("Help us out!"); ?></h1>
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

<?php /* Begin news items */ ?>
<div style='width: 500px; padding-top: 40px; float: left;'>
    <h1 style='margin-bottom: 25px;'><a href="/news.html"><?php echo _("News &amp; Updates"); ?></a></h1>
    <?php shownews("full", 4); ?>
</div>
<div style='width: 400px; padding-top: 40px; float: right;'>
    <h1 style='margin-bottom: 25px;'><a href="http://planet.videolan.org"><?php echo _("Development Blogs"); ?></a></h1>
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
        echo substr(strip_tags(html_entity_decode($item['content']['encoded'])),0,$chars_per_entry);
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
<?php footer('$Id$'); ?>
