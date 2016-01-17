<?php
   $title = "VLC media player for ArchLinux";
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
                        VLC media player for <a href="http://www.archlinux.org/">Arch Linux</a>
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

Arch Linux has a VLC package in its 'Extra' repository (see <a href='http://www.archlinux.org/packages/extra/i686/vlc/'>http://www.archlinux.org/packages/extra/i686/vlc/</a>).

Issue this command to install:
<pre>
#  pacman -S vlc
</pre>

</div>
</div>

<?php footer('$Id$'); ?>
