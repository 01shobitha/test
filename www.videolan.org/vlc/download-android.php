<?php
   $title = "VLC media player for Android&trade;";
   $lang = "en";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

   $android_version = "1.7.0";
?>

<h1 class="bigtitle"> VLC media player for <a href="http://android.com/">Android</a>&trade;</h1>

<h1>VLC for Android&trade;</h1>

<p><a href="/vlc/">VLC</a> for Android&trade; is still under heavy development. The current version is <?php echo $android_version; ?>.</p><br/>
<div style="margin-left:auto;margin-right:auto;width:360px;">
    <a href="https://play.google.com/store/apps/details?id=org.videolan.vlc"><img src="/images/get_it_on_play_logo_large.png" border="0" /></a>
    <a href="http://www.amazon.com/VLC-Mobile-Team-for-Fire/dp/B00U65KQMQ"><img src="/images/badges/Amazon-apps-black.png" height="60px" /></a>
</div>
<p>or download the <a href="//get.videolan.org/vlc-android/<?php echo $android_version; ?>/">APK package</a> from our mirrors.</p>

   <h1 style='margin-bottom: 12px;'><?php echo _("Features"); ?></h1>

   <div style='float: left; width: 480px; margin-bottom: 20px;'>
   <!--    <div class='audienceCallout'><?php echo _("Video"); ?></div> -->
       <div class='clearme'>
           <div class='productDescription'>
               <ul>
                  <li>Plays all files, in all formats, like the classic VLC.</li>
                  <li>Audio and video media library, with full search.</li>
                  <li>Support for network streams, including HLS.</li>
                  <li>Supports Android from version 2.2 (platform-8).</li>
                  <li>Supports ARMv6, ARMv7, MIPS and x86.</li>
                  <li>Supports secondary display.</li>
               </ul>
           </div>
       </div>
   </div>
   <div style='float: left; width: 480px;'>
<!--       <div class='audienceCallout'><?php echo _("Audio"); ?></div> -->
       <div class='clearme'>
           <div class='productDescription'>
               <ul>
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
<p>We need help to test VLC under a variety of devices.</p>
<p>Please join us on our <a href="http://forum.videolan.org/viewforum.php?f=35">forum</a>.</p>

<h2>Kickstart us!</h2>
    <div class='productDescription'>
<p>We need funding to:</p>
        <ul>
            <li>Buy or rent the large variety of devices;</li>
            <li>Fund some developers and support people to fix bugs;</li>
            <li>Buy various tools to speed-up development.</li>
        </ul>
<p>so VLC works perfectly on Android phones and tablets.</p>
    </div>


<h2>Send us phones</h2>
<p>If you are a phone manufacturer or have spare phones, please send them to us :)</p>
<p><a href="/contact.html">Contact us</a>.</p>


<h1>Decoding performance</h1>

<p>VLC can decode video in sofware and hardware mode. Hardware decoding often provides better performance but is not supported on all devices. If your device Android version is below 4.3, software decoding may be the only working option for you. 

<h1>Documentation</h1>

<p>See <a href="https://wiki.videolan.org/Documentation:Android/">here</a> for additional documentation.

<h1>Thanks</h1>
<p>
We would like to thank people who helped us.<br />
<a href="http://www.solutionslinux.fr/"><?php image( 'partners/android/SL.png', 'SolutionLinux', '' ); ?></a>
<a href="http://www.dojocrea.fr/"><?php image( 'partners/android/dojocrea.jpg', 'Dojocrea', '' ); ?></a>
<a href="http://www.jbmm.fr/"><?php image( 'partners/android/jbmm.png', 'JBMM', '' ); ?></a>
<a href="http://fr.asus.com/"><?php image( 'partners/android/asus.jpg', 'Asus France', '' ); ?></a>
</p>
<?php
  footer('$Id$');
?>
