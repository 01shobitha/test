<?php
   $title = "VLC media player for Linux Slackware";
   $new_design = true;
   $lang = "en";
   $menu = array( "vlc", "download" );

   $additional_js = array("/js/slimbox2.js", "/js/slick-init.js", "/js/slick.min.js");
   $additional_css = array("/js/css/slimbox2.css", "/style/slick.min.css", "/style/panels.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/language.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

<div class="container">
	<?php
	$screenshots = getScreenshots("linux");
	$defaultDetail = getOS("linux");
	?>
    <section class="download-wrapper">
        <div class="row reorder-xs">
            <?php
                echo '<div class="v-align carousel-padding-xs col-xs-12 col-sm-5 col-sm-offset-1 col-sm-pull-1"><div id="header-carousel">';
                $first = true;
                foreach($screenshots as $screenshot) {
                    $src = $first ? $screenshot['src'] : '';
                    $srcLazy = $first ? '' : $screenshot['src'];
                    $dom  = '<div class="screenshot2">';
                    $dom .= '<img src="'.$src.'" alt="'.$screenshot['name'].'" data-lazy="'.$srcLazy.'">';
                    $dom .= '</div>';
                    echo $dom;
                    $first = false;
                }
                echo '</div></div>';
            ?>
            <div class="v-align col-sm-5">
                <div class="center-font-xs">
                    <?php image('largeVLC.png', 'Large Orange VLC media player Traffic Cone Logo', 'big-vlc-img img-responsive visible-xs-inline-block v-align'); ?>
                    <h1 class="v-align bigtitle">
                        VLC media player for <a href="http://slackware.com/">Slackware Linux</a>
                    </h1>
                </div>
                <div class="projectDescription hidden-sm hidden-xs">
                    <?php echo
                    _("VLC is a free and open source cross-platform multimedia player and framework that plays most multimedia files as well as DVDs, Audio CDs, VCDs, and various streaming protocols."); ?>
                </div>
                <div class="projectDescription visible-xs visible-sm center-font-xs">
                    <?php echo
                    _("VLC is a free and open source cross-platform multimedia player and framework that plays most multimedia files as well as DVDs, Audio CDs, VCDs, and various streaming protocols."); ?>
                </div>
            </div>
        </div>
    </section>

<div id="fullwidth">

    <h2>Slackware packages by alienBOB (Eric Hameleers)</h2>

    <p>32-bit and 64-bit Slackware packages (SlackBuild script included) for official VLC source releases are available from <a href="http://www.slackware.com/~alien/slackbuilds/vlc/">http://www.slackware.com/~alien/slackbuilds/vlc/</a>. These packages do not contain codecs that are suffering from patent or copyright issues. If you need MP3/AAC encoding support, a full-featured version can  be downloaded from this non-US mirror: <a href="http://slackware.org.uk/people/alien/restricted_slackbuilds/vlc/">http://slackware.org.uk/people/alien/restricted_slackbuilds/vlc/</a>.</p>

    <p><i>Alien's VLC packages have no dependency on additional packages (except for libdvdcss if you want to play DVD's)</i></p>

    <p>Instructions for building a package from source are available on the <a href="http://wiki.videolan.org/Slackware">VideoLAN Wiki</a></p>

    <h2> Packages on slacky.eu </h2>

    <p>For 32-bit Slackware only. They can be found in the repository of the
    <a href="http://slacky.eu/aadm/pkgs/index.php?sear=vlc">Italian Slackware Community</a>. Be sure to install the large list of dependencies which you can find in the <i>slack-required</i> file!</p>

    <h2> Packages on slackware.opennix.com </h2>

    <p>Another source of 32-bit Slackware packages is at
    <a href="http://slackware.opennix.com/?slackversion=13.1&name=vlc">Opennix.com</a>. A full list of additional (dependency) packages which you are required to install is available on the package page.</p>

    <h2>Packages on SlackPack</h2>

    <p>You can also find 32-bit Slackware packages on
    <a href="http://sotirov-bg.net/slackpack/search.cgi?q=vlc">SlackPack</a>.
    The package is a dynamic build and all of the dependencies are
    available from the same site.</p>
</div>
</div>

<?php footer('$Id$'); ?>
