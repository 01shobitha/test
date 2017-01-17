<?php
   $title = "Official Download of VLC media player for Android&trade;";
   $new_design = true;
   $lang = "en";
   $menu = array( "vlc", "download" );

   $additional_js = array("/js/slimbox2.js", "/js/slick-init.js", "/js/slick.min.js");
   $additional_css = array("/js/css/slimbox2.css", "/style/slick.min.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

<div class="container">
	<?php
	$screenshots = getScreenshots("android");
	$defaultDetail = getOS("android");
	?>
    <section class="download-wrapper">
        <div class="row reorder-xs">
            <?php drawScreenshots($screenshots); ?>
            <div class="v-align col-sm-5">
                <div class="center-font-xs">
                    <?php image('largeVLC.png', 'Large Orange VLC media player Traffic Cone Logo', 'big-vlc-img img-responsive visible-xs-inline-block v-align'); ?>
                    <h1 class="v-align bigtitle">
                        VLC for Android&trade;
                    </h1>
                </div>
                <div class="projectDescription hidden-sm hidden-xs">
                    <?php echo
                    _("VLC media player is a free and open source cross-platform multimedia player that plays most multimedia files as well as discs, devices, and network streaming protocols.
This is the port of VLC media player to the Android&trade; platform. VLC for Android can play any video and audio files, as well as network streams and DVD ISOs, like the desktop version of VLC.<br/>
VLC for Android is a full audio player, with a complete database, an equalizer and filters, playing all weird audio formats."); ?>
                </div>
                <div class="projectDescription visible-xs visible-sm center-font-xs">
                    <?php echo
                    _("VLC media player is a free and open source cross-platform multimedia player that plays most multimedia files as well as discs, devices, and network streaming protocols.
This is the port of VLC media player to the Android&trade; platform. VLC for Android can play any video and audio files, as well as network streams and DVD ISOs, like the desktop version of VLC.<br/>
VLC for Android is a full audio player, with a complete database, an equalizer and filters, playing all weird audio formats."); ?>
                </div>

			    <div class="inner center-xs">
			        <div class="btn-group;width:360px">
                        <a href="https://play.google.com/store/apps/details?id=org.videolan.vlc"><img src="/images/get_it_on_play_logo_large.png" border="0" /></a>
                        <a href="http://www.amazon.com/VLC-Mobile-Team-for-Fire/dp/B00U65KQMQ"><img src="/images/badges/Amazon-apps-black.png" height="60" /></a>
			        </div>
			        <div id="downloadDetails">
			            Version <span id='downloadVersion'>
			            <?php echo $defaultDetail["latestVersion"] ?></span>&nbsp;&#8226;&nbsp;<span id='downloadOS'><?php echo $defaultDetail["name"]; ?></span>
                        <br>
                        or download the <a href="//get.videolan.org/vlc-android/<?php echo $androidversion; ?>/">APK package</a> from our mirrors.
			        </div>
			    </div>
            </div>
        </div>
    </section>

   <h1 style='margin-bottom: 12px;'><?php echo _("Features"); ?></h1>

   <div style='float: left; width: 480px; margin-bottom: 20px;'>
   <!--    <div class='audienceCallout'><?php echo _("Video"); ?></div> -->
       <div class='clearme'>
           <div>
               <ul class="bullets">
                  <li>Plays all files, in all formats, like the classic VLC.</li>
                  <li>Audio and video media library, with full search.</li>
                  <li>Support for network streams, including HLS.</li>
                  <li>Supports Android Version 2.2 (platform-8) or later.</li>
                  <li>Supports ARMv6, ARMv7, ARMv8 / AArch64, MIPS and x86.</li>
                  <li>Supports secondary display.</li>
               </ul>
           </div>
       </div>
   </div>
   <div style='float: left; width: 480px;'>
<!--       <div class='audienceCallout'><?php echo _("Audio"); ?></div> -->
       <div class='clearme'>
           <div>
               <ul class="bullets">
                  <li>Subtitles support, embedded and external, including ASS and DVD subtitles.</li>
                  <li>Multi audio or subtitles tracks selection.</li>
                  <li>Multi-core decoding.</li>
                  <li>Supports full hardware decoding.</li>
                  <li>Gestures, headphones control.</li>
                  <li>Audio equalizer</li>
               </ul>
           </div>
       </div>
   </div>


<h1 class='clearme'>Help us!</h1>
<h2>Test it</h2>
<p class="projectDescription">We need help to test VLC under a variety of devices.<br />
    Please join us on our <a href="https://forum.videolan.org/viewforum.php?f=35">forum</a> to provide feedback and get assistance with any issues you might have.</p>

<h2>Send us phones</h2>
<p class="projectDescription">If you are a phone manufacturer or have spare phones, please send them to us :)<br />
    <a href="/contact.html">Contact us</a>.</p>

<h1>Decoding performance</h1>

<p class="projectDescription">VLC can decode video in software and hardware mode. Hardware decoding often provides better performance but is not supported on all devices. If your device Android version is below 4.3, software decoding may be the only supported option for you.</p>

<h1>Documentation</h1>
<p class="projectDescription">We have documentation available on our wiki - please have a look <a href="https://wiki.videolan.org/Documentation:Android/">here</a>.

<h1>Thanks</h1>
<p class="projectDescription">
We would like to thank our partners:<br />
<a href="http://www.solutionslinux.fr/"><?php image( 'partners/android/SL.png', 'SolutionLinux', '' ); ?></a>
<a href="http://www.dojocrea.fr/"><?php image( 'partners/android/dojocrea.jpg', 'Dojocrea', '' ); ?></a>
<a href="http://www.jbmm.fr/"><?php image( 'partners/android/jbmm.png', 'JBMM', '' ); ?></a>
<a href="http://fr.asus.com/"><?php image( 'partners/android/asus.jpg', 'Asus France', '' ); ?></a>
</p>

</div>

<?php
  footer('$Id$');
?>
