<?php
   $title = "VLC media player for Ubuntu";
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
                        VLC media player for <a href="http://www.ubuntu.com/">Ubuntu</a>
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

			    <div class="inner center-xs">
			        <div class="btn-group">
                            <a href="apt://vlc"><img src="https://apps.ubuntu.com/assets/images/scbutton-free-200px.png" title="Download for Ubuntu" alt="Download for Ubuntu button" /></a>
			        </div>
			        <div id="downloadDetails">
			            <span id='downloadOS'><?php echo $defaultDetail["name"]; ?></span>
			        </div>
			    </div>
            </div>
        </div>
    </section>

<h2>Supported releases</h2>
<p class="projectDescription">Ubuntu 13.10 <span style='font-size: smaller'>&ldquo;Saucy Salamander&rdquo;</span><br />
Ubuntu 13.04 <span style='font-size: smaller'>&ldquo;Raring Ringtail&rdquo;</span><br />
Ubuntu 12.10 <span style='font-size: smaller'>&ldquo;Quantal Quetzal&rdquo;</span><br />
Ubuntu 12.04 LTS <span style='font-size: smaller'>&ldquo;Precise Pangolin&rdquo;</span><br />
</p>

<h2>Installation the Graphical way</h2>
<p class="projectDescription"><p>Open <b>Synaptic</b> application (click on System -&gt; Administration -&gt; Synaptic Package Manager).
</p>

<p class="projectDescription">Search for <kbd>vlc</kbd> and install it.
You may also want to install <kbd>browser-plugin-vlc</kbd>.</p>
<p class="projectDescription">If you are interested in streaming or transcoding,
you should additionally install <kbd>libavcodec-extra-53</kbd>.</p>

<h2>Installation the Command line way</h2>
<p><blockquote>
<pre>
% sudo apt-get update
% sudo apt-get install vlc browser-plugin-vlc
</pre>
</blockquote>
</p>

<h3>Nota Bene</h3>
<p class="projectDescription">Ubuntu includes whichever VLC version was the latest
at the time the Ubuntu release was <em>frozen</em>
(typically about two months before the official Ubuntu upgrade).<br />
Afterward, you can still get security and critical bug fixes,
but no further major VLC version updates until the next Ubuntu release.
<br />
If you need a more recent version, please consider upgrading Ubuntu.
</p>

<div id="right">
<?php panel_start( "orange" ); ?>
<h1>Playing DVD (libdvdcss)</h1>
<p>In order to be able to play region-locked DVD, you need install libdvdcss2.
You should follow this <a href="https://help.ubuntu.com/community/RestrictedFormats/PlayingDVDs">procedure</a>
to install libdvdcss2.</p>
<?php panel_end(); ?>
</div>

</div>

<?php
  footer('$Id$');
?>

