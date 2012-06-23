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
                  <li>Support for network streams, including HLS.</li>
                  <li>Supports Android from version 2.1 (platform-7).</li>
                  <li>Supports ARMv6, ARMv7 and ARMv7+NEON.</li>
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
                  <li>Gestures, headphones control.</li>
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

<?php 
function writeonefeature( $a )
{
    if ( $a == "yes" )
       echo '<td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>';
    else if ($a == "no" )
       echo '<td class="no"><img src="/images/features/cross.png" alt="No" /></td>';
    else if ( $a == "part" )
       echo '<td class="partial"><img src="/images/features/partial.png" alt="Partial" /></td>';
    else if ( $a == "unt" )
       echo '<td class="partial"><img src="/images/features/untested.png" alt="Untested" /></td>';
    else if ($a == "none" )
       echo '<td class="none">-</td>';
    echo "\n";
}

function writefeature_simple( $title, $sd, $sd2, $hd, $hd2 )
{
   echo '<tr><td class="type">'.$title.'</td>';
   writeonefeature( $sd );
   writeonefeature( $sd2 );
   writeonefeature( $hd );
   writeonefeature( $hd2 );
   echo "</tr>\n";
}
?>

<h1>Software performance on phones for H.264</h1>
<p>This table is a <b>rough idea</b> of what one can hope to play with VLC on Android, for now, using the <b>software</b> decoder.</p>
<p>Performance is likely to improve in the future.</p>
<table>
<tr><th><b>Name</b></th><th><b>480p</b></th><th><b>576p</b></th><th><b>720p</b></th><th><b>MKV 720p + ASS</b></th></tr>
<?php writefeature_simple( "HTC One X", "yes", "yes", "yes", "yes" ); ?>
<?php writefeature_simple( "Samsung Galaxy S3", "yes", "yes", "yes", "yes" ); ?>
<?php writefeature_simple( "Galaxy Nexus", "yes", "yes", "yes", "unt" ); ?>
<?php writefeature_simple( "Samsung Galaxy S2", "yes", "yes", "unt", "unt" ); ?>
<?php writefeature_simple( "HTC Desire HD", "yes", "unt", "no", "no" ); ?>
<?php writefeature_simple( "Nexus One", "yes", "no", "no", "no" ); ?>

</table>

<h1>Recommended phones</h1>
    <div class='productDescription'>
        <ul>
            <li>Galaxy Nexus; (OMAP 4460)</li>
            <li>HTC One X; (Tegra 3)</li>
            <li>Samsung Galaxy S3; (Exynos 4 Quad)</li>
            <li>Motorola Defy; (OMAP 3610)</li>
            <li>HTC Desire; (QSD8250 Snapdragon)</li>
            <li>Nexus one. (QSD8250 Snapdragon)</li>
        </ul>
    </div>

<h1>Thanks</h1>
<p>
We would like to thanks people who helped us.<br />
<a href="http://www.solutionslinux.fr/"><?php image( 'partners/android/SL.png', 'SolutionLinux', '' ); ?></a>
<a href="http://www.dojocrea.fr/"><?php image( 'partners/android/dojocrea.jpg', 'Dojocrea', '' ); ?></a>
<a href="http://www.jbmm.fr/"><?php image( 'partners/android/jbmm.png', 'JBMM', '' ); ?></a>
<a href="http://fr.asus.com/"><?php image( 'partners/android/asus.jpg', 'Asus France', '' ); ?></a>
</p>
<?php
  footer('$Id$');
?>
