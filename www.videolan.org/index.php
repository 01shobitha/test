<?php

$language = "";
$title = _("VLC: Official site - Free multimedia solutions for all OS!");
$body_color = "blue";
$new_design = true;
$additional_js = array("/js/slimbox2.js");
$additional_css= array("/js/css/slimbox2.css");

require($_SERVER["DOCUMENT_ROOT"] . "/include/language.php");
require($_SERVER["DOCUMENT_ROOT"] . "/include/header.php");
require($_SERVER["DOCUMENT_ROOT"] . "/include/os-specific.php");
require($_SERVER["DOCUMENT_ROOT"] . "/include/package.php");
include($_SERVER["DOCUMENT_ROOT"] . "/include/news.php");
include($_SERVER["DOCUMENT_ROOT"] . "/include/magpierss/rss_fetch.inc");

/* Main page */
?>

<div class="container">
    <?php drawVLCdownloadSection(); ?>
</div>

<div class="container">
    <h1><?php echo _("Other projects from VideoLAN"); ?></h1>

    <div class="row">
        <div class="col-md-5 padding-bottom-24">
            <div class='audienceCallout'><?php echo _("For Everyone"); ?></div>
            <div class="row">
                <div class="col-sm-6 col-md-12 media margin-bottom">
                    <a href='/vlc/'>
                        <div class="media-left media-middle">
                            <?php image('VLC-IconSmall.png', "VLC icon", "media-object"); ?>
                        </div>
                        <div class="media-body">
                            <span class='productName'>VLC media player</span>
                            <span class='productDescription'><?php echo
                            _("VLC is a powerful media player playing most of the media codecs and video formats out there."); ?>
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-12 media margin-bottom">
                    <a href='/vlmc/'>
                        <div class="media-left media-middle">
                            <?php image('VLMC-IconSmall.png', "VLMC icon", "media-object"); ?>
                        </div>
                        <div class="media-body">
                            <span class='productName'>VLMC</span>
                            <span class='productDescription'>
                                <?php echo _("VideoLAN Movie Creator is a non-linear editing software for video creation."); ?>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-sm-6 col-md-5 padding-bottom-24">
            <div class='audienceCallout'><?php echo _("For Professionals"); ?></div>
            <ul class="media-list">
                <li class="media">
                    <a href='/projects/dvblast.html'>
                        <div class="media-left media-middle">
                            <?php image('DVBlast-IconSmall.png', "DVBlast Icon", "media-object"); ?>
                        </div>
                        <div class="media-body">
                            <span class='productName'>DVBlast</span>
                            <span class='productDescription'>
                                <?php echo _("DVBlast is a simple and powerful MPEG-2/TS demux and streaming application."); ?>
                            </span>
                        </div>
                    </a>
                </li>
                <li class="media no-img">
                    <a href='/projects/multicat.html'>
                        <div class="media-body">
                            <span class='productName'>multicat</span>
                            <span class='productDescription'>
                                <?php echo _("multicat is a set of tools designed to easily and efficiently manipulate multicast streams and TS."); ?>
                            </span>
                        </div>
                    </a>
                </li>
                <li class="media">
                    <a href='/developers/x264.html'>
                        <div class="media-left media-middle">
                            <?php image('x264-IconSmall.png', "x264 Icon", "media-object"); ?>
                        </div>
                        <div class="media-body">
                            <span class='productName'>x264</span>
                            <span class='productDescription'>
                                <?php echo _("x264 is a free application for encoding video streams into the H.264/MPEG-4 AVC format."); ?>
                            </span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <div class="col-sm-6 col-md-2 padding-bottom-24">
            <div class='audienceCallout'><?php echo _("For Developers"); ?></div>
            <div class="row">
                <div class="col-xs-4 col-sm-12">
                    <a href='/developers/libdvdcss.html' class='noUnderline'>
                        <span class='productName padding-bottom-15'>libdvdcss</span>
                    </a>
                    <a href='/developers/libdvbpsi.html' class='noUnderline'>
                        <span class='productName padding-bottom-15'>libdvdpsi</span>
                    </a>
                    <a href='/vlc/libvlc.html' class='noUnderline'>
                        <span class='productName padding-bottom-15'>libVLC</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-12">
                    <a href='/developers/libbluray.html' class='noUnderline'>
                        <span class='productName padding-bottom-15'>libbluray</span>
                    </a>
                    <a href='/developers/libaacs.html' class='noUnderline'>
                        <span class='productName padding-bottom-15'>libaacs</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-12">
                    <a href='/developers/libdca.html' class='noUnderline'>
                        <span class='productName padding-bottom-15'>libdca</span>
                    </a>
                    <a href='/developers/bitstream.html' class='noUnderline'>
                        <span class='productName'>biTStream</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <a href='/projects/' class="extra-info-link2">
        <?php echo _("View All Projects"); ?>
    </a>
</div>
<div class="container" style='padding-top: 20px;'>
    <h1><?php echo _("Help us out!"); ?></h1>

    <div class="row">
        <div class="col-md-4 padding-bottom-24">
            <div class='audienceCallout'><?php echo _("donate"); ?></div>
            <ul class="media-list">
                <li class="media">
                    <div class="media-left media-top">
                        <?php image("cash.png", "Donate to VLC", "media-object"); ?>
                    </div>
                    <div class="media-body">
                        <span class="productDescription">
                            <?php echo _("VideoLAN is a non-profit organization.") . "<br />";
                            echo _(" All our costs are met by donations we receive from our users. If you enjoy using a VideoLAN product, please donate to support us."); ?>
                            <br/>
                            <a href='/contribute.html' class='extraInfoLink' style='text-transform: uppercase; font-size: 13px; display: block; padding-top: 10px; clear: none'>
                                <?php echo _("Learn More"); ?>
                            </a>
                        </span>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-md-4 padding-bottom-24">
            <div class='audienceCallout'><?php echo _("Contribute"); ?></div>
            <ul class="media-list">
                <li class="media">
                    <div class="media-left media-top">
                        <?php image("tools.png", "Contribute Work to VLC", "media-object"); ?>
                    </div>
                    <div class="media-body">
                        <span class="productDescription">
                            <?php echo _("VideoLAN is open-source software.") . "<br />";
                            echo _("This means that if you have the skill and the desire to improve one of our products, your contributions are welcome"); ?>
                            <br/>
                            <a href='/contribute.html' class='extraInfoLink' style='text-transform: uppercase; font-size: 13px; display: block; padding-top: 10px; clear: none'>
                            <?php echo _("Learn More"); ?></a>
                        </span>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-md-4 padding-bottom-24">
            <div class='audienceCallout'><?php echo _("Spread the Word"); ?></div>
            <ul class="media-list">
                <li class="media">
                    <div class="media-left media-top">
                        <?php image("heart.png", "Spread VLC", "media-object"); ?>
                    </div>
                    <div class="media-body">
                        <span class="productDescription">
                            <?php echo _("We feel that VideoLAN has the best video software available at the best price: free. If you agree please help spread the word about our software."); ?>
                            <br/>
                            <a href='/contribute.html' class='extraInfoLink' style='text-transform: uppercase; font-size: 13px; display: block; padding-top: 10px; clear: none'>
                                <?php echo _("Learn More"); ?>
                            </a>
                        </span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


<?php /* Begin news items */ ?>

<div class="container">
    <div class="row">

        <div class="col-md-6">
            <h1 style='margin-bottom: 13px;'><a href="/news.html"><?php echo _("News &amp; Updates"); ?></a>
            </h1>
            <?php shownews("full", 5); ?>
            <a href="/news.html" class="extra-info-link2 padding-top"><?php echo _("More News"); ?></a>
        </div>

        <div class="col-md-6">
            <h1 style='margin-bottom: 13px;'><a href="http://planet.videolan.org"><?php echo _("Development Blogs"); ?></a></h1>

            <div>
                <?php
                define('MAGPIE_INPUT_ENCODING', 'UTF-8');
                define('MAGPIE_OUTPUT_ENCODING', 'UTF-8');
                $rss = fetch_rss("http://planet.videolan.org/rss10.xml");
                $i = 0;
                $chars_per_entry = 240;
                $entries_per_column = 4;
                $columns = 1;
                foreach ($rss->items as $item) {
                    if (isset($item['link'])) {
                        echo "<p style='direction:ltr; text-align:left;'>";
                        echo "<b><a href=\"" . $item['link'] . '" style="color: black;">' . htmlentities($item['title'], ENT_COMPAT, "UTF-8") . "</a></b></p>";
                        echo '<p style="border-bottom: 1px dashed #CCC;padding-bottom:5px;margin-bottom:5px;direction:ltr; text-align:left;">';
                        echo substr(strip_tags(html_entity_decode($item['content']['encoded'], ENT_COMPAT, "UTF-8")), 0, $chars_per_entry);
                        echo "<a href=\"" . $item['link'] . "\">[...]</a><br/>";
                        echo "</p>";
                        $i++;
                        if ($i >= $columns * $entries_per_column) break;
                        if ($i % $entries_per_column == 0) echo "</td><td>";
                    }
                }
                ?>
            </div>
            <?php /* Social and other BS */ ?>
            <div class="overflow-hidden">
                <h1 style="position:relative">
                    <?php echo _("Social media"); ?>
                    <span class="ltrFloatRight" <?php if (isRTL($language)) {
                        echo ' style="padding-left: 20px;"';
                    } else {
                        echo ' style="padding-right: 20px;"';
                    } ?>>
                        <a href="http://www.twitter.com/videolan"><?php image('twitter.png', "Twitter"); ?></a>
                        <a href="http://www.facebook.com/vlc.media.player"><?php image('facebook.png', "Facebook"); ?></a>
                    </span>
                </h1>
                <?php
                $rss = fetch_rss("http://www.videolan.org/_twitter/userrss.php?xrt=0&xrp=1&c=40");
                $i = 0;
                $chars_per_entry = 240;
                $entries_per_column = 5;
                $columns = 1;
                foreach ($rss->items as $item) {
                    echo '<p style="border-bottom: 1px dashed #CCC;padding-bottom:5px;margin-bottom:5px;direction:ltr; text-align: left;">';
                    echo preg_replace(array('^(http://\S+)^is', '^(https://\S+)^is'), '<a href="$1">$1</a>', str_replace("videolan:", "<b>" . date("Y-m-d h:i", strtotime($item['pubdate'])) . "</b>", $item['title']));
                    echo "</p>";
                    $i++;
                    if ($i >= $columns * $entries_per_column) break;
                    if ($i % $entries_per_column == 0) echo "</td><td>";
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php
footer('$Id$', $alternate_lang);
sf_money();
?>
