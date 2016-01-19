<?php
   $title = "VLC media player for Gentoo Linux";
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
            <?php drawScreenshots($screenshots); ?>
            <div class="v-align col-sm-5">
                <div class="center-font-xs">
                    <?php image('largeVLC.png', 'Large Orange VLC media player Traffic Cone Logo', 'big-vlc-img img-responsive visible-xs-inline-block v-align'); ?>
                    <h1 class="v-align bigtitle">
                        VLC media player for <a href="http://www.gentoo.org/">Gentoo Linux</a>
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

  <h2>Install VLC through emerge</h2>

<p>VLC is included in the <a href="http://www.gentoo.org/doc/en/handbook/handbook-x86.xml?part=2">Portage</a> package system of the <a
href="http://www.gentoo.org/">Gentoo Linux</a> distribution.
So you can simple type <i>emerge vlc</i> and you will have VLC installed.</p>

<p>However, we advise to always use the latest (and 'unstable')
version of VLC. For this you will first need to add the
following line <i>"media-video/vlc ~x86"</i> to the file
<i>"/etc/portage/package.keywords"</i>. If the file does not yet exist
you should create it.</p>

<p> When you don't set the correct USE variables, you will get a very
bare bones version of VLC. We recommend to emerge with the following USE
variables:</p>

<pre>dvd ffmpeg mpeg mad wxwindows aac dts a52 ogg flac theora
oggvorbis matroska freetype bidi xv svga gnutls stream vlm httpd cdda
vcd cdio live lua</pre>

<p>You can set these variables for VLC by adding the line</p>

<pre>media-video/vlc dvd ffmpeg mpeg mad
wxwindows aac dts a52 ogg flac theora oggvorbis matroska freetype
bidi xv svga gnutls stream vlm httpd cdda vcd cdio live</pre>

<p>to the file <i>"/etc/portage/package.use"</i>. This will give you a
fully functioning VLC. Be very careful if you decide to disable some of
these USE flags. You can lose more functionality than you might expect.
</p>

  <h2>Older versions</h2>
   <?php browse_old("vlc" ); ?>
</div>

<div id="right">
  <h2>Source code</h2>

  <p>If you want, you can download the <a href="download-sources.html">source code</a> of VLC media player.</p>

</div>
</div>
<?php footer('$Id$'); ?>
