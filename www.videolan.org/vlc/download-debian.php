<?php
   $title = "VLC media player for Debian GNU/Linux";
   $new_design = true;
   $lang = "en";
   $menu = array( "vlc", "download" );

   $additional_js = array("/js/slimbox2.js", "/js/slick-init.js", "/js/slick.min.js");
   $additional_css = array("/js/css/slimbox2.css", "/style/slick.min.css", "/style/panels.css");
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
            <?php drawScreenshots($screenshots); ?>
            <div class="v-align col-sm-5">
                <div class="center-font-xs">
                    <?php image('largeVLC.png', 'Large Orange VLC media player Traffic Cone Logo', 'big-vlc-img img-responsive visible-xs-inline-block v-align'); ?>
                    <h1 class="v-align bigtitle">
                        VLC media player for <a href="http://debian.org">Debian GNU/Linux</a>
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

<div id="left">

<h2> Debian stable (stretch) and oldstable (jessie) </h2>

<p> Debian stretch and jessie follow the 2.2.x release branch of <a href="/vlc/">VLC</a>.<br />
Install <code>vlc</code>, <code>browser-plugin-vlc</code> the usual way you do it.</p>


<h2> Debian testing (stretch) </h2>

<p> VLC is in testing.<br />
But due to the way testing works, we can't guarantee if the latest version is available.<br /> Install
<code>vlc</code>, <code>browser-plugin-vlc</code>, the usual way you do it. </p>


<h2> Debian unstable (sid) </h2>

<p> VLC's latest packaged version is always in the official Debian unstable branch.</p>


<?php panel_start( "blue" ); ?>
<h1>Playing DVD</h1>

To play DVD, you need to install the libdvdcss package.</p>

<?php panel_end(); ?>

</div>
</div>

<?php
  footer('$Id$');
?>
