<?php
   $title = "VLC media player for openSUSE";
   $new_design = true;
   $lang = "en";
   $menu = array( "vlc", "download" );
   $body_color = "green";

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
	?>
    <section class="download-wrapper">
        <div class="row reorder-xs">
            <?php drawScreenshots($screenshots); ?>
            <div class="v-align col-sm-5">
                <div class="center-font-xs">
                    <?php image('largeVLC.png', 'Large Orange VLC media player Traffic Cone Logo', 'big-vlc-img img-responsive visible-xs-inline-block v-align'); ?>
                    <h1 class="v-align bigtitle">
                        VLC media player for <a href="http://www.opensuse.org/">openSUSE</a>
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
                        <div class="installbtn" style="float: left;">
                          <a href="http://download.videolan.org/pub/vlc/SuSE/Leap_42.1/vlc.ymp">VLC for Leap 42.1</a>
                        </div>
                        <div class="installbtn" style="float: left;">
                          <a href="http://download.videolan.org/pub/vlc/SuSE/Tumbleweed/vlc.ymp">VLC for Tumbleweed</a>
                        </div>
                        <div class="installbtn" style="float: left;">
                          <a href="http://download.videolan.org/pub/vlc/SuSE/13.2/vlc.ymp">VLC for 13.2</a>
                        </div>
                        <div class="installbtn" style="float: left;">
                          <a href="http://download.videolan.org/pub/vlc/SuSE/13.1/vlc.ymp">VLC for 13.1</a>
                        </div>
			        </div>
			        <div id="downloadDetails">
                        Install VLC using <a href="http://en.opensuse.org/One_Click_Install/UserFAQ">1-click install</a>
			        </div>
			    </div>
            </div>
        </div>
    </section>

<h2 class='clearme'><a name="yast">Install VLC using YaST</a></h2>
<p class="projectDescription">
First, add a new repository (installation source) in YaST (YaST2 ->
Software -> Installation Sources)</p>

<p class="projectDescription">Then, add the following Repository:</p>
<pre>
Type: HTTP / Servername: download.videolan.org /
Directory: /pub/videolan/vlc/SuSE/&lt;SUSE Version&gt;
</pre>
<p class="projectDescription">Replace &lt;SUSE Version&gt; in the Directory above with your installed SuSE
Version. Supported at this time are :</p>
<p class="projectDescription">
<ul class="bullets">
<li>Leap_42.1</li>
<li>Tumbleweed</li>
<li>13.2</li>
<li>13.1</li>
</ul>
</p>
<p class="projectDescription">Finally, confirm the addition.</p>

<h3>Security</h3>
<p class="projectDescription">The repository is signed with a GPG Key 
(gpg key C8DA93D2 fingerprint <code>BC8D 780D E330 8581 B2E0  7085 33DE 8FB7 C8DA 93D2</code>).
<br />Accept this key in YaST and it will warn you in case there is something
suspect with the repository.<br />

Accept everything by clicking <b>Finish</b>.</p>

<h3>Installation</h3>
<p class="projectDescription">
Go to <em>Software Management</em> and enter <em>VLC</em> in the searchbox.<br />
Select it and click <b>Accept</b> to install it with all its dependencies.<br />
This might require the SUSE CD or DVD.
<br />
<b>NB:</b>If you want VLC's Mozilla Plugin, you have to select the
<code>vlc-npapi</code>. It does not get installed by default.
<br />
You're done with the installation.
Have a lot of Fun.
</p>

<h2><a name="cli">Install using command line</a></h2>
<p class="projectDescription">
<pre>
sudo zypper ar http://download.videolan.org/pub/vlc/SuSE/&lt;SUSE version&gt; VLC
sudo zypper mr -r VLC
sudo zypper in vlc
</pre>
</p>

<p class="projectDescription">&lt;SUSE version&gt; can be 11.4, 12.3 or 13.1, 13.2, Tumbleweed, Factory</p>

</div>

<?php footer('$Id$'); ?>
