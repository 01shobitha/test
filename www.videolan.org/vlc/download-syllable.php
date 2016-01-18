<?php
   $title = "VLC media player for Syllable";
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
    <section class="download-wrapper">
        <div class="row reorder-xs">
            <div class="hidden-xs v-align col-sm-5">
                <?php image('largeVLC.png', 'Large Orange VLC media player Traffic Cone Logo', 'big-vlc-img img-responsive'); ?>
            </div>
            <div class="v-align col-sm-5">
                <div class="center-font-xs">
                    <?php image('largeVLC.png', 'Large Orange VLC media player Traffic Cone Logo', 'big-vlc-img img-responsive visible-xs-inline-block v-align'); ?>
                    <h1 class="v-align bigtitle">
                        VLC media player for <a href="http://www.syllable.org/">Syllable</a>
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

<h2>Packages</h2>

<p>You can use the package from
<a href="http://web.syllable.org/Syllable/resources.html#vlc">Syllable resources</a>.
Just download it and then run:
</p>

<blockquote>
<pre>
unzip name-version.resource -d /usr
package register name
</pre>
</blockquote>

<h2>Through Builder (for experienced users ONLY)</h2>
<p>You can get VLC on Syllable via the Building system called Builder.
From the terminal, just run:</p>
<blockquote>
<pre>
build vlc-0.8.6f
su
build install vlc-0.8.6f
</pre>
</blockquote>

</div>
</div>
<?php footer('$Id$'); ?>
