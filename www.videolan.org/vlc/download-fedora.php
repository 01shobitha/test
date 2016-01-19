<?php
   $title = "VLC media player for Fedora";
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
                        VLC media player for <a href="http://fedoraproject.org/">Fedora</a>
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

<p>Most of our packages for fedora can be found on RPM Fusion <a href="http://rpmfusion.org/">RPM Fusion</a><br />
You can also use this repository from distribution derived from <a href="http://fedoraproject.org/">Fedora</a></p>

<p>Please report "packaging bugs" on <a href="http://bugzilla.rpmfusion.org/">Bugzilla - RPM Fusion</a></p>


<h2>Fedora 11 (Leonidas), Fedora 12 (Constantine), Fedora 13 (Goddard) and Fedora 14 (Laughlin) </h2>

<p>Use <a href="http://rpmfusion.org/Configuration/">RPM Fusion</a> for F11, F12, F13 and F14 (available for x86, x86_64, ppc and ppc64)<br />

Install <a href="http://download1.rpmfusion.org/free/fedora/rpmfusion-free-release-stable.noarch.rpm">rpmfusion-free-release-stable.noarch.rpm</a> for F11, F12, F13 and F14.</p>

<pre>
    $> su -
    #> rpm -ivh http://download1.rpmfusion.org/free/fedora/rpmfusion-free-release-stable.noarch.rpm
    #> yum install vlc
    #> yum install mozilla-vlc (optional)
</pre>


<h2>Rawhide (The development version of Fedora)</h2>

<p>Use <a href="http://rpmfusion.org/Configuration/">RPM Fusion</a> for Rawhide (available for x86, x86_64, ppc and ppc64)<br />

Install <a href="http://download1.rpmfusion.org/free/fedora/rpmfusion-free-release-rawhide.noarch.rpm">rpmfusion-free-release-rawhide.noarch.rpm</a> for Rawhide</p>

<pre>
    $> su -
    #> rpm -ivh http://download1.rpmfusion.org/free/fedora/rpmfusion-free-release-rawhide.noarch.rpm 
    #> yum install vlc
    #> yum install mozilla-vlc (optional)
</pre>

<br />
<h2>VLC media player for (older) <a href="http://fedoraproject.org/">Fedora</a></h2>
<p><strong>Older version of Fedora are not supported anymore by the <a href="http://fedoraproject.org/">Fedora Project</a> (even for security bugfix).</strong></p>

<h3>Fedora 8, 9, 10</h3>

<p>Use <a href="http://rpmfusion.org/Configuration/">RPM Fusion</a> for F8, F9 and F10 (available for x86, x86_64 and ppc)<br />

Install <a href="http://download1.rpmfusion.org/free/fedora/rpmfusion-free-release-stable.noarch.rpm">rpmfusion-free-release-stable.noarch.rpm</a> for F8, F9 and F10</p>

<pre>
    $> su -
    #> rpm -ivh http://download1.rpmfusion.org/free/fedora/rpmfusion-free-release-stable.noarch.rpm
    #> yum install vlc
    #> yum install python-vlc mozilla-vlc (optionals)
</pre>

<h3>Fedora 7</h3>

<p>Use <a href="http://rpm.livna.org/">RPM - LIVNA</a> for F7 (available for x86, x86_64 and ppc)<br />

Install <a href="http://rpm.livna.org/livna-release-7.rpm">livna-release-7.rpm</a> for F7</p>

<pre>
    $> su -
    #> rpm -ivh http://rpm.livna.org/livna-release-7.rpm
    #> yum install vlc
    #> yum install python-vlc mozilla-vlc (optional)
</pre>

<h3>Fedora Core 6</h3>

<p>Use <a href="http://rpm.livna.org/">RPM - LIVNA</a> for F6 (available for x86, x86_64 and ppc)<br />

Install <a href="http://rpm.livna.org/livna-release-6.rpm">livna-release-6.rpm</a> for F6</p>

<pre>
    $> su -
    #> rpm -ivh http://rpm.livna.org/livna-release-6.rpm
    #> yum install vlc
    #> yum install python-vlc mozilla-vlc (optional)
</pre>

<h3>Fedora Core 4 and 5</h3>
<p>For those two versions, VLC 0.8.6 is not available. You can have 0.8.5 here 
for FC 4 and 5 on <a href="http://freshrpms.net">FreshRPMs</a>.</p>

<h3>Fedora Core 1, 2 and 3</h3>
<p>Use <a href="http://dag.wieers.com/rpm/packages/vlc/">Dag wieers</a> to have 0.8.6 for those old versions!</p>

<h3>Other versions - Search</h3>
<p>Use <a href="http://rpm.pbone.net/">PBone.net</a> to search a lot of other versions of VLC for fedora or fedora compatible distributions.</p>

</div>
</div>

<?php footer('$Id$'); ?>
