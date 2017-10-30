<?php
   $title = "VLC media player for Red Hat Linux";
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
                        VLC media player for <a href="http://www.redhat.com/rhel/">Red Hat Enterprise Linux</a>
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
<p>Most of our packages for Enterprise Linux can be found on <a href="https://rpmfusion.org/">RPM Fusion</a><br />
You can also use this repository from distribution derived from <a href="https://www.redhat.com/rhel/">RHEL</a> such as <a href="https://centos.org">CentOS</a> or <a href="https://www.scientificlinux.org/">Scientific Linux</a></p>

<p>Please report "packaging bugs" on <a href="https://bugzilla.rpmfusion.org/">Bugzilla - RPM Fusion</a></p>


<h2>RHEL/CentOS/SL 7</h2>

<p>Use <a href="https://rpmfusion.org/Configuration/">RPM Fusion</a> for EL7. Only available for x86_64.<br />
<p>This repository uses <a href="https://fedoraproject.org/wiki/EPEL">EPEL</a>. Please verify to enable the "optionals" and "extras" channels for RHN subscriptions.<br/>
<p>The vlc-2.2x branch is provided for EL7<br/>

Install <a href="https://download1.rpmfusion.org/free/el/rpmfusion-free-release-7.noarch.rpm">rpmfusion-free-release-stable.noarch.rpm</a> for EL7.</p>

<pre>
    $> su -
    #> yum install https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
    #> yum install https://download1.rpmfusion.org/free/el/rpmfusion-free-release-7.noarch.rpm
    #> yum install vlc
    #> yum install vlc-core (for minimal headless/server install)
    #> yum install python-vlc npapi-vlc (optionals)
</pre>


<h2>RHEL/CentOS/SL 6</h2>

<p>Use <a href="https://rpmfusion.org/Configuration/">RPM Fusion</a> for EL6. Available for i686 and x86_64.<br />
<p>This repository uses <a href="https://fedoraproject.org/wiki/EPEL">EPEL</a>. Please verify to enable the "optionals" channel for RHN subscriptions.<br/>
<p>The vlc-2.0x branch is provided for EL6<br/>

Install <a href="https://download1.rpmfusion.org/free/el/rpmfusion-free-release-6.noarch.rpm">rpmfusion-free-release-stable.noarch.rpm</a> for EL6.</p>

<pre>
    $> su -
    #> yum install https://dl.fedoraproject.org/pub/epel/epel-release-latest-6.noarch.rpm
    #> yum install https://download1.rpmfusion.org/free/el/rpmfusion-free-release-6.noarch.rpm
    #> yum install vlc
    #> yum install vlc-core (for minimal headless/server install)
    #> yum install python-vlc npapi-vlc (optionals)
</pre>

<?php panel_start( "blue" ); ?>
<h1>Playing DVD</h1>

To play DVD, you need to install the libdvdcss package.</p>

<?php panel_end(); ?>

<br />

</div>
</div>

<?php footer('$Id$'); ?>
