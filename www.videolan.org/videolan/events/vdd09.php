<?php
   $title = "VideoLAN Dev Days 2009";
   $lang = "en";
   $menu = array( "project", "events" );
   $additional_js = array("/js/prototype.js","/js/scriptaculous.js","/js/features.js");

   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1> VideoLAN Dev Days 2009 </h1>
<h3> A Multimedia Conference that frees the cone in you! </h3>
<div id="right">

<h2> Welcome </h2>
<p>The <a href="/videolan/">VideoLAN non-profit organisation</a> is happy to
invite you to the multimedia open-source event of this end of year:<br />
<strong>VideoLAN Dev Days '09</strong>.</p>
<p>For the second time, people from the VideoLAN community will meet in <strong>Paris</strong> to gather, work, discuss and build a stronger community, on the <strong>18th, 19th and 20th of december</strong>.</p>
<p>Developers, designers and anonymous people around VLC, DVBlast, VLMa, skin-designer or other multimedia projects will be there.</p>

<h2> Who? Where? When? What? </h2>
<h3>Who? </h3>
<p><strong>Anyone</strong> that cares about some VideoLAN projects.<br /> If you are not a technical person, but an enthusiast, we recommend to come to the 2 following events.</p>
<ul>
<li><h3> Soirée à La Cantine, on Friday night </h3></li>
<li><h3> Meeting developers, on Saturday night </h3></li>
</ul>

<h3>Where? </h3>
Events will be at
<a href="http://epitech.eu/">Epitech</a> and <a href="http://lacantine.org/">La Cantine</a> for most of them.

<h2> Sponsors </h2>
<a href="http://epitech.eu/">Epitech</a>, one of the best computer science school in France, is sponsoring the event.

</div>
<div id="left">

<?php panel_start( "blue" ); ?>
<p class="center">
         <img src="http://images.videolan.org/images/screenshots/vlc-win32.jpg" alt="VLC on Windows" />
                </p>
<?php panel_end(); ?>

</div>

<?php footer('$Id: index.php 5400 2009-07-19 15:37:21Z jb $'); ?>
