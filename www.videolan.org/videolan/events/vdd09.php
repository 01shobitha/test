<?php
   $title = "VideoLAN Dev Days 2009";
   $lang = "en";
   $menu = array( "project", "events" );
   $additional_js = array("/js/prototype.js","/js/scriptaculous.js","/js/features.js");

   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1> VideoLAN Dev Days 2009 </h1>
<h3> A Multimedia Conference that frees the cone in you! </h3>
<div id="left">

<h2> Welcome </h2>
<p>The <a href="/videolan/">VideoLAN non-profit organisation</a> is happy to
invite you to the multimedia open-source event of this end of year:<br />
<strong>VideoLAN Dev Days '09</strong>.</p>
<p>For the second time, people from the VideoLAN community will meet in <strong>Paris</strong> to gather, work, discuss and build a stronger community, on the <strong>18th, 19th and 20th of december</strong>.</p>
<p>Developers, designers and anonymous people around VLC, DVBlast, VLMa, skin-designer or other multimedia projects will be there.</p>

<h2> Who? Where? When? What? </h2>
<h3>Why? </h3>
<p>Those meetings are necessary to make the community around the cone to grow.<br />They cost us a lot of money to organise, but we need them to build the future of <a href="/vlc/">VLC</a> and other projects.</p>

<h3>Who? </h3>
<p><strong>Anyone</strong> that cares about some VideoLAN projects.<br /> If you are not a technical person, but an enthusiast, we recommend to come to the less technical events, especially at La Cantine.</p>

<h3>When? </h3>
<p>On the <strong>18th, 19th and 20th of december</strong> in <strong>Paris</strong>.</p>

<p>Less technical events will be:
<ul>
<li> Soirée à <strong>La Cantine</strong>, on Friday 19th night </li>
<li> Meeting developers, on Saturday afternoons </li>
</ul></p>

<h3>Where? </h3>
Events will be at
<a href="http://epitech.eu/">Epitech</a> and <a href="http://lacantine.org/">La Cantine</a> for most of them.

<h2>Schedule</h2>
You can find the full schedule here.

</div>
<div id="right">
<?php panel_start( "blue" ); ?>
<h2>VideoLAN Dev Days '08</h2>
<p class="center">
         <img src="http://download.videolan.org/events/20081220/VDD/mq/img-11.jpg" alt="VDD 08" />
</p>
<?php panel_end(); ?>


<?php panel_start( "green" ); ?>
<h2>Sponsors</h2>
<p><a href="http://epitech.eu/"><img src="http://www.epitech.eu/images/design/logo-epitech.jpg" alt="epitech"/></a> <a href="http://epitech.eu/">Epitech</a> is hosting most of the events and sponsoring some part of the event.</p>
<br />
<p><a href="/videolan/team">Your name here!</a></p>
<?php panel_end(); ?>
<?php panel_start( "blue" ); ?>
<h2>VLC</h2>
<p class="center">
         <img src="http://images.videolan.org/images/screenshots/vlc-win32.jpg" alt="VLC on Windows" />
</p>
<?php panel_end(); ?>

</div>

<?php footer('$Id: index.php 5400 2009-07-19 15:37:21Z jb $'); ?>
