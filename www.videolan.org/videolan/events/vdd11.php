<?php
   $title = "VideoLAN Dev Days 2011";
   $additional_css = array("/panels.css");
   $body_color = "green";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1> VideoLAN Dev Days 2011 </h1>
<h3> A Multimedia Conference that frees the cone in you! </h3>

<div id="sidebar">
<?php panel_start( "green" ); ?>
<h2>Sponsors</h2>
<h3>Platinium Sponsor</h3>
<a href="/videolan/">VideoLAN non-profit</a>
<br />
<h2>Help us!</h2>
<p><a href="/contact.html">Your name here!</a></p>
<p>Help us organizing the event!</p>
<?php panel_end(); ?>

<?php/* panel_start( "orange" ); ?>
<h2>Program</h2>
<a href="/videolan/events/vdd09.pdf"><strong>Full schedule</strong></a>.</p>

<?php panel_end();*/ ?>

<?php panel_start( "blue" ); ?>
<h2>VideoLAN Dev Days '08</h2>
<p class="center">
         <img src="http://images.videolan.org/videolan/events/20081220/VDD/mq/img-11.jpg" alt="VDD 08" style="width:100%"/>
</p>
<?php panel_end(); ?>

</div>


<h2> Welcome </h2>
<p>The <a href="/videolan/">VideoLAN non-profit organisation</a> is happy to
invite you to the multimedia open-source event of the end of summer: </p>
<div style="font-weight: bold; font-size: 1.8em; margin: 2px 100px 14px; color: green;">VideoLAN Dev Days '11</div>

<p>For the third time, people from the VideoLAN community will meet in <strong>Paris</strong> to gather, work, discuss and build a stronger community, on the <strong>3rd and 4th of September 2011</strong>.</p>
<p>For the first time, though, an important number of developers from <a href="/developers/x264.html">x264</a>, <a href="http://www.ffmpeg.org/">FFmpeg</a> and <a href="http://libav.org/">Libav</a>, will join us!<br />
Developers, designers and anonymous people around <a href="/vlc/">VLC</a>, <a href="/projects/dvblast.html">DVBlast</a>, VLMa, skin-designer or other multimedia projects will be there too.</p>
<p>The schedule holds a mix of <a href="#public">public</a> and <a href="#private">technical</a> events.</p>
<!--<a href="/videolan/events/vdd09.pdf"><strong>Full schedule (updated)</strong></a>.</p>-->

<h1>When? </h1>
<p>On the <strong>2nd, 3rd and 4th of September 2011</strong>.</p>

<h1>Where? </h1>
<p>Technical events will be held at <a href="http://www.telecom-paristech.fr/">Institut Telecom Paris</a> (<a href="#location">map</a>).</p>

<h1>Who can come? </h1>
<p><strong>Anyone</strong> that cares about open source multimedia.<br />
 If you are not a technical person, but an enthusiast, we recommend you to come to the less technical events, like in the evenings.</p>

<h1>Registration</h1>
<p>Except for the Friday Beer Event, <strong>Registration</strong> is <strong>mandatory</strong>.</p>
<p>Registration should be done by e-mail, to <a href="mailto:videolan@REMOVETHIS@videolan.org">videolan @ videolan.org</a>.</p>

<h1>Schedule</h1>

<h2>Friday night Beers</h2>
<p>On <strong>Friday 2nd September 2011 at 20h30</strong>, people are welcome to come and
share a few good drinks.</p>
<h3>Venue</h3>
<p>The bar location is not known yet.</p>

<h2>Saturday morning talks</h2>
<p>For the French libre community and activists or technology-oriented people that are interested,
 there will be technical talks and presentations about <b>VLC</b>, <b>x264</b>, <b>libavfilter</b> and <b>libavcodec</b>,
 on the <strong>Saturday 3rd, starting at 10h30</strong> at Telecom Paris.</p>

<h2><a name="location">Venue at Telecom Paris</a> </h2>
<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=institut+telecom+paris&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=40.27343,79.013672&amp;ie=UTF8&amp;hq=institut+telecom&amp;hnear=Paris,+%C3%8Ele-de-France,+France&amp;ll=48.837153,2.346268&amp;spn=0.158183,0.291824&amp;z=11&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=institut+telecom+paris&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=40.27343,79.013672&amp;ie=UTF8&amp;hq=institut+telecom&amp;hnear=Paris,+%C3%8Ele-de-France,+France&amp;ll=48.837153,2.346268&amp;spn=0.158183,0.291824&amp;z=11" style="color:#0000FF;text-align:left">View Larger Map</a></small>
 
<!--<h2>Schedule</h2> -->
<!-- You can find the full final schedule <a href="/videolan/events/vdd09.pdf">here</a>. -->

<?php footer('$Id: index.php 5400 2009-07-19 15:37:21Z jb $'); ?>
