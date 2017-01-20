<?php
   $language="";
   $title = _("VLMC, open source video editor");
   $new_design = true;

   $additional_js = array("/js/slimbox2.js", "/js/slick-init.js", "/js/slick.min.js");
   $additional_css = array("/js/css/slimbox2.css", "/style/slick.min.css");

   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

   function vlmcscreenshot($img, $thumb, $desc) {
        echo"<div class='screenshot-4-3-responsive screenshot-small'><a href='http://images.videolan.org/vlmc/screenshots/$img' rel='lightbox-vlc'><img
        src='//images.videolan.org/vlmc/screenshots/$thumb' alt='VLMC - $desc' /></a>
        </div>";
    }
?>

<div class="container">
    <section class="download-wrapper">
        <div class="row reorder-xs">
            <div class="hidden-xs v-align col-sm-5">
                <?php image('VLMC-Icon.png', 'Large Orange VLMC Logo', 'big-vlc-img img-responsive'); ?>
            </div>
            <div class="v-align col-sm-5">
                <div class="center-font-xs">
                    <?php image('VLMC-Icon.png', 'Large Orange VLMC Logo', 'big-vlc-img img-responsive visible-xs-inline-block v-align'); ?>
                    <h1 class="v-align bigtitle">
                        VLMC
                    </h1>
                </div>
                <div class="projectDescription hidden-sm hidden-xs">
                    <?php echo
                    _("VideoLAN Movie Creator is a non-linear editing software for video creation based on libVLC and running on Windows, Linux and Mac OS X! It is free software distributed under the terms of the GPLv2."); ?>
                </div>
                <div class="projectDescription visible-xs visible-sm center-font-xs">
                    <?php echo
                    _("VideoLAN Movie Creator is a non-linear editing software for video creation based on libVLC and running on Windows, Linux and Mac OS X! It is a free software distributed under the terms of the GPLv2."); ?>
                </div>
                <div class="projectDescription hidden-sm hidden-xs">
                    <br />
                    Are you a <b>student</b> and looking for a <b>summer internship</b>? VLMC is part of <b>Google Summer of Code</b>! <a href="https://summerofcode.withgoogle.com/organizations/4863706731118592/">Find out more</a>!
                </div>
                <div class="projectDescription hidden-sm hidden-xs">
                    <br />
                    <?php echo
                    _("Note that VLMC is still under development and therefore not ready for beta testing or production yet."); ?>
                </div>
                <div class="projectDescription visible-xs visible-sm center-font-xs">
                    <?php echo
                    _("Note that VLMC is still under development and therefore not ready for beta testing or production yet."); ?>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="features bg-gray">
    <div class="container">
        <h2 class="visible-xs visible-sm center-font-xs center-font-sm"><?php echo _("Features"); ?></h2>
        <div class="row reorder-sm reorder-xs">
            <div class="items col-md-7 col-md-offset-1 col-md-pull-1 v-align-md v-align-lg">
                <h2 class="hidden-xs hidden-sm"><?php echo _("Features"); ?></h2>
                <ul>
                    <li>
                        <?php echo "<b>"._("Cross-platform")."</b> - "._("Runs on Windows, Linux and Mac OS X."); ?>
                    </li>
                    <li>
                        <?php echo "<b>"._("Based on the proven VLC framework")."</b>"; ?>
                    </li>
                    <li>
                        <?php echo "<b>"._("Reads everything and can export to most formats")."</b>"; ?>
                    </li>
                    <li>
                        <?php echo "<b>"._("Simple to use, yet powerful")."</b>"; ?>
                    </li>
                    <li>
                        <?php echo "<b>"._("Completely Free")."</b> - "._("no spyware, no ads and no user tracking."); ?>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 v-align-md v-align-lg">
                <img src="//images.videolan.org/vlmc/screenshots/snapshot12.jpg" class="center-sm center-xs img-responsive">
            </div>
        </div>
    </div>
</section>
<section class="features">
    <div class="container">
        <h2 class="visible-xs visible-sm center-font-xs center-font-sm"><?php echo _("Contribute"); ?></h2>
        <div class="row">
            <div class="col-md-4 v-align-md v-align-lg col-md-offset-1 col-md-pull-1">
                <img src="//images.videolan.org/vlmc/screenshots/snapshot2.jpg" class="center-xs center-sm img-responsive">
            </div>
            <div class="items v-align-md v-align-lg col-md-7">
                <h2 class="hidden-xs hidden-sm"><?php echo _("Contribute"); ?></h2>
                <p class="projectDescription">VLMC is developed by volunteers and anyone can contribute! You can browse the source code <a href="https://code.videolan.org/videolan/vlmc">online</a> and start right away!</p>
            </div>
        </div>
    </div>
</section>
<section class="features bg-gray">
    <div class="container">
        <h2 class="visible-xs visible-sm center-font-xs center-font-sm"><?php echo _("Get in touch"); ?></h2>
        <div class="row reorder-sm reorder-xs">
            <div class="items col-md-7 col-md-offset-1 col-md-pull-1 v-align-md v-align-lg">
                <h2 class="hidden-xs hidden-sm"><?php echo _("Get in touch"); ?></h2>
                <p class="projectDescription">You can contact the VLMC team via <i>IRC</i> on the <b>#vlmc</b> channel on the Freenode network. Additionally, join us by email on the <a href="https://mailman.videolan.org/listinfo/vlmc-devel">VLMC Development mailing-list</a>.</p>
            </div>
            <div class="col-md-4 v-align-md v-align-lg">
                <img src="//images.videolan.org/vlmc/screenshots/snapshot14.jpg" class="center-sm center-xs img-responsive">
            </div>
        </div>
    </div>
</section>
<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-md-12 padding-bottom-24">
                <h1 style='margin-bottom: 25px;' class='red'><?php echo _("Screenshots"); ?></h1>
                <div id="content-carousel">
                    <?php
                    vlmcscreenshot('snapshot2.jpg', 'tm_snapshot2.jpg', "Screenshot" );
                    vlmcscreenshot('snapshot10.jpg', 'tm_snapshot10.jpg', "Screenshot" );
                    vlmcscreenshot('snapshot12.jpg', 'tm_snapshot12.jpg', "Screenshot" );
                    vlmcscreenshot('snapshot14.jpg', 'tm_snapshot14.jpg', "Screenshot" );
                    ?>
                </div>
                <div class="ltrClearLeft">
                </div>
            </div>
        </div>
    </div>
</section>

<?php
  footer('$Id$');
?>
