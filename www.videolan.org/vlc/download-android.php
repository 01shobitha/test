<?php
   $title = "VLC media player for Android";
   $lang = "en";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1 class="bigtitle"> VLC media player for <a href="http://android.com/">Android</a></h1>

<h1>VLC for Android beta</h1>

<p><a href="/vlc/">VLC</a> for Android is in beta stage.</p>
<p>Packages on the <i>Play Store</i> should be available in the next few days.</p>

   <h1 style='margin-bottom: 12px;'><?php echo _("Features"); ?></h1>

   <div style='float: left; width: 480px; margin-bottom: 20px;'>
   <!--    <div class='audienceCallout'><?php echo _("Video"); ?></div> -->
       <div class='clearme'>
           <div class='productDescription'>
               <ul>
                  <li>Plays all files, in all formats, like the classic VLC.</li>
                  <li>Audio and video media library, with full search.</li>
                  <li>Supports Android from 2.1 up to 4.0.</li>
                  <li>Support for network streams.</li>
                  <li>Gestures, headphones control.</li>
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
                  <li>Multi-core decoding, for Cortex-A7 A9 and A15 chips.</li>
                  <li>Experimental hardware decoding.</li>
               </ul>
           </div>
       </div>
   </div>


<h1>Help us!</h1>
<h2>Test it</h2>
<p>We need help to test VLC under a variety of devices.</p>
<p>Please join us on our <a href="http://forum.videolan.org/viewforum.php?f=35">forum</a>.</p>

<h2>Kickstart us!</h2>
    <div class='productDescription'>
<p>We need funding to:
        <ul>
            <li>Buy or rent the large variety of devices.</li>
            <li>Fund some developers and support people to fix bugs.</li>
            <li>Buy various tools to speed-up development.</li>
        </ul>
so VLC works perfectly on Android phones and tablets.</p>
    </div>


<!--
<h2>Send us phones</h2>

<h1>Performance on phones</h1>

<h1>Recommended phones</h1>

-->
<?php
  footer('$Id$');
?>
