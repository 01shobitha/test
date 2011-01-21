<?php
   $title = "VLC: Free streaming and multimedia solutions for all OS!";
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
                    VLC is a free and open source cross-platform multimedia player and<br />
                    framework that plays most multimedia files as well as DVD, Audio CD,<br />
                    VCD, and various streaming protocols.
                </div>
                <a class='extraInfoLink' href='/vlc/features.html'>Features</a>
                <a class='extraInfoLink' href='/vlc/screenshots.html'>Screenshots</a>
                <a class='extraInfoLink' href='/vlc/'>Other Systems and Versions</a>
                <a id='downloadButton' href='<?php echo $dlUrl; ?>'>
                    <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />
                    <div class='downloadText'>Download VLC</div>
                    <span id='downloadDetails' style='font-size: 12px; color: white;'>
                    Version <span id='downloadVersion'><?php echo $version ?>
                    </span>&nbsp;&#8226;&nbsp;<span id='downloadOS'>Windows</span>&nbsp;&#8226;&nbsp;<span id='downloadSize'>20MB</span>
                    </span>
                </a>
                <?php replaceDLinfos(); ?>
            </div>
        </div>
        <div class="clearme" style='padding-top: 60px;'>
            <h1 style='margin-bottom: 25px;'>Other projects from VideoLAN</h1>
            <div style='float: left; width: 300px;'>
                <div class='audienceCallout'>For Everyone</div>
                <div style='clear: both;'>
                    <a href='/vlc/' class='noUnderline'>
                        <?php image( 'VLC.png', "VLC icon", "smallProjectImg" ); ?>
                        <div class='productName'>VLC media player</div>
                        <div class='productDescription'>
                            VLC is a powerful media player<br />
                            playing most of the media codecs<br />
                            and video formats out there.
                        </div>
                    </a>
                </div>
                <div class="clearme" style='padding-top: 40px;'>
                    <a href='/vlmc/' class='noUnderline'>
                        <?php image( 'VLMC-IconSmall.png', "VLMC icon", "smallProjectImg" ); ?>
                        <div class='productName'>VLMC</div>
                        <div class='productDescription'>
                            VideoLAN Movie Creator is a non-<br/>
                            linear editing software for video<br />
                            creation.
                        </div>
                    </a>
                </div>
            </div>
            <div style='float: left; padding-left: 30px; width: 350px;'>
                <div class='audienceCallout'>For Professionals</div>
                <div class="clearme">
                    <a href='/projects/dvblast.html' class='noUnderline'>
                        <?php image( 'DVBlast-IconSmall.png', "DVBlast Icon", "smallProjectImg" ); ?>
                        <div class='productName'>DVBlast</div>
                        <div class='productDescription'>
                            DVBlast is a simple a powerful<br />
                            MPEG-2/TS demux and streaming<br />
                            application.
                        </div>
                    </a>
                </div>
                <div class="clearme" style='padding-top: 40px;'>
                    <a href='/developers/x264.html' class='noUnderline'>
                        <?php image( 'x264-IconSmall.png', "x264 Icon", "smallProjectImg" ); ?>
                        <div class='productName'>x264</div>
                        <div class='productDescription'>
                            x264 is a free application for encoding<br />
                            video streams into the  H.264/MPEG-4<br />
                            AVC format.
                        </div>
                    </a>
                </div>
            </div>
            <div style='float: left; padding-left: 30px; width: 180px;'>
                <div class='audienceCallout'>For Developers</div>
                <a href='/developers/libdvdcss.html' class='noUnderline;'><div class='productName' style='padding-bottom: 20px;'>libdvdcss</div></a>
                <a href='/developers/libdvbpsi.html' class='noUnderline;'><div class='productName' style='padding-bottom: 20px;'>libdvdpsi</div></a>
                <a href='/vlc/libvlc.html'           class='noUnderline;'><div class='productName' style='padding-bottom: 20px;'>libVLC</div></a>
                <a href='/developers/libbluray.html' class='noUnderline;'><div class='productName' style='padding-bottom: 20px;'>libbluray</div></a>
                <a href='/developers/libaacs.html'   class='noUnderline;'><div class='productName' style='padding-bottom: 20px;'>libaacs</div></a>
                <a href='/developers/libdca.html'    class='noUnderline;'><div class='productName'>libdca</div></a>
            </div>
            <a href='/projects/' class='extraInfoLink' style='text-transform: uppercase; font-size: 13px; display: block; padding-top: 25px; clear: both;'>View All Projects</a>
        </div>
        <div class="clearme" style='padding-top: 40px;'>
            <h1 style='margin-bottom: 25px;'>Help us out</h1>
            <div style='float: left; width: 330px;'>
                <div class='audienceCallout'>Donate</div>
                <div class='clearme'>
                    <?php image( "cash.png", "Donate to VLC", "floatSmallImg" ); ?>
                    <div class='productDescription'>
                        VideoLAN is a non-profit organization.<br />
                        All our costs are met by donations we<br />
                        receive from our loyal users. If you<br />
                        enjoy using a VideoLAN product,<br />
                        please donate to support us.<br />
                        <a href='/contribute.html' class='extraInfoLink' style='text-transform: uppercase; font-size: 13px; display: block; padding-top: 10px;'>Learn More</a>
                    </div>
                </div>
            </div>
            <div style='float: left; width: 310px;'>
                <div class='audienceCallout'>Contribute</div>
                <div class='clearme'>
                    <?php image( "tools.png", "Contribute Work to VLC", "floatSmallImg" ); ?>
                    <div class='productDescription'>
                        VideoLAN is open-source software.<br />
                        This means that if you have the<br />
                        skill and the desire to improve one<br />
                        of our products or add new features<br />
                        you can do so.<br />
                        <a href='/contribute.html' class='extraInfoLink' style='text-transform: uppercase; font-size: 13px; display: block; padding-top: 10px;'>Learn More</a>
                    </div>
                </div>
            </div>
            <div style='float: left; width: 330px;'>
                <div class='audienceCallout'>Spread the Word</div>
                <div class='clearme'>
                    <?php image( "heart.png", "Spread VLC", "floatSmallImg" ); ?>
                    <div class='productDescription'>
                        We feel that VideoLAN has the best<br />
                        video software available at the<br />
                        best price: free. If you agree please<br />
                        help spread the word about our<br />
                        software.<br />
                        <a href='/contribute.html' class='extraInfoLink' style='text-transform: uppercase; font-size: 13px; display: block; padding-top: 10px;'>Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearme"></div>

<?php /* Begin news items */ ?>
<div style='width: 550px; padding-top: 60px; float: left;'>
    <h1 style='margin-bottom: 25px;'>News & Updates</h1>
    <?php shownews("full", 4); ?>
</div>
<div style='width: 400px; padding-top: 60px; float: right;'>
    <h1 style='margin-bottom: 25px;'>Development Blog</h1>
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
        echo "<b><a href=\"".$item['link']."\">".htmlentities($item['title'],ENT_COMPAT,"UTF-8")."</a></b></p>";
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
    Social media
    <span class="header-buttons">
        <a href="http://www.twitter.com/videolan">twitter</a>
        <a href="http://www.facebook.com/vlc.media.player">facebook</a>
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
