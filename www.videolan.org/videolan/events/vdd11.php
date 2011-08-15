<?php
   $title = "VideoLAN Dev Days 2011, Septembre 3-4, 2011";
   $additional_css = array("/panels.css");
   $body_color = "green";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1>VideoLAN Dev Days 2011 </h1>
<h3>The Open Multimedia Conference that frees the cone in you! </h3>

<div id="sidebar">
<?php panel_start( "green" ); ?>
<h2>Sponsors</h2>
<?php image( "logoGrey.png" , "VideoLAN association"); ?>
<a href="/videolan/">VideoLAN non-profit</a>
<br />
<h2>Help us!</h2>
<p><a href="/contact.html">Your name here!</a></p>
<p>Help us organizing the event!</p>
<?php panel_end(); ?>

<?php panel_start( "blue" ); ?>
<h2>Register!</h2>
<a href="/contact.html">Register <strong>now!</strong></a>
<?php panel_end(); ?>

<?php panel_start( "green" ); ?>
<h2>Past editions</h2>
<a href="/videolan/events/">Past VDD</a>
<p class="center">
<img src="http://images.videolan.org/videolan/events/20081220/VDD/mq/img-11.jpg" alt="VDD 08" style="width:100%"/>
</p>
<?php panel_end(); ?>

</div>


<h2>What are the VideoLAN Dev Days?</h2>
<p>The <a href="/videolan/">VideoLAN non-profit organisation</a> is happy to
invite you to the multimedia open-source event of the end of summer: </p>
<div style="font-weight: bold; font-size: 1.8em; margin: 2px 100px 14px; color: green;">VideoLAN Dev Days '11</div>

<p>For its <b>third edition</b>, people from the VideoLAN community will meet in <strong>Paris</strong> to gather, work, discuss and meet, on the <strong>3rd and 4th of September 2011</strong>.</p>
<p>For the first time, though, an important number of developers from <a href="/developers/x264.html">x264</a>, <a href="http://www.ffmpeg.org/">FFmpeg</a> and <a href="http://libav.org/">Libav</a>, will join us!<br />
Developers, designers and anonymous people around <a href="/vlc/">VLC</a>, <a href="/projects/dvblast.html">DVBlast</a>, VLMa, skin-designer or other multimedia projects will be there too.</p>

<h1>Who can come? </h1>
<p><strong>Anyone</strong> that cares about open source multimedia.<br />
 If you are not a technical person, but an enthusiast, we recommend you to come to the less technical events, like in the evenings.</p>

<h1>Where? </h1>
<p>Technical events will be held at <a href="http://www.telecom-paristech.fr/">Institut Telecom Paris</a> (<a href="#location">map</a>).</p>

<h1>Schedule</h1>

<div id="schedule" style="margin: 10px 25px 0px; padding: 0 20px; border: 1px outset #4d4d4d; width: 600px;">
<h2>Friday night Beers</h2>
<p>On <strong>Friday 2nd September 2011 at 20h30</strong>, people are welcome to come and
share a few good drinks.</p>
<h3>Venue</h3>
<p>The bar location is not known yet.</p>

<hr />
<h2>Saturday morning talks</h2>
<p>Opened for all the libre community, activists and technology-oriented people that are interested,
 there will be technical talks and presentations about multimedia.</p>

<div class="item">
<div class="title">Welcoming remarks</div>
<div class="date">Saturday 10.30 - 11.40</div>
<p class="news-descr">
A few welcoming remarks, made by <i>Jean-Baptiste Kempf</i>, and some material informations,
in order to be able to have the best week-end possible.</p>
</div>

<div class="item">
<div class="title">What's new in VLC 1.2.0?</div>
<div class="date">Saturday 10.45 - 11.05</div>
<p class="news-descr">
This talk, made by <i>Jean-Baptiste Kempf</i> will show up what the VLC 1.2.0 release will be made of,
 and what feature will be in it.</p>
</p>
</div>

<div class="item">
<div class="title">About x264</div>
<div class="date">Saturday 11.05 - 11.25</div>
<p class="news-descr">
This talk, made by <i>Jason Garrett-Glaser</i> will speak about the <a href="/developers/x264.html">x264</a> encoder and community.<br />
<em>Details about this talk will follow</em>.
</p>
</div>

<div class="item">
<div class="title">An overview of DVBlast, BitStream and Multicat</div>
<div class="date">Saturday 11.25 - 11.45</div>
<p class="news-descr">
This talk, made by <i>Christophe Massiot</i> will speak about the DVBlast and Multicat programs.<br />
Concepts, use cases and examples of use of those programs will be shown; but also some presentations of the
2.0 release.</p>
</p>
</div>


<div class="item">
<div class="title">Introduction to libavfilter</div>
<div class="date">Saturday 11.45 - 12.05</div>
<p class="news-descr">
This talk, made by <i>Stefano Sabatini</i> will speak about the newly introduced libavfilter.<br />
<em>Details about this talk will follow</em>.
</p>
</div>

<p><b>More talks</b> will be added, later on.</p>
<hr />

<h2>Lunch</h2>
<p>Lunch will be held in Telecom Paris, near the Entrance.</p>

<h2>Saturday afternoon community discussions</h2>
<div class="item">
<div class="title">VLC development technical points</div>
<div class="date">Saturday 14.00 - 17.00</div>
<p class="news-descr">
The usual discussion, workgroups and votes about technical issues in VLC.</p>
</div>

<div class="item">
<div class="title">libav* development technical points</div>
<div class="date">Saturday 14.00 - 17.00</div>
<p class="news-descr">
Developer discussion and workgroup on improving libav*.</p>
</div>

<div class="item">
<div class="title">OpenSource multimedia/Unconference</div>
<div class="date">Saturday 17.00 - 19.00</div>
<p class="news-descr">
Discussion about OpenSource and Multimedia... Undefined yet.</p>
</div>

<h2>Dinner</h2>
<p>Dinner will be held at a restaurant nearby.<br /> Details will be given to registered attendees.</p>
<hr />

<h2>Sunday: Un-Conference</h2>
<div class="item">
<div class="title">Unconference</div>
<div class="date">Sunday 10.00 - 18.00</div>
<p class="news-descr">
Schedule will depend on the will of participants.</p>
</div>


<div class="item">
<div class="title">Association VideoLAN </div>
<div class="date">Sunday 9:30 - 11:00</div>
<p class="news-descr">
Un point sur la situation. Assemblée générale ordinaire, extra-ordinaire et réunion ordinaire.</p>
</div>

</div>
<!-- 
<p> about <b>VLC</b>, <b>x264</b>, <b>libavfilter</b> and <b>libavcodec</b>,
 on the <strong>Saturday 3rd, starting at 10h30</strong> at Telecom Paris.</p> -->

<h1>Registration</h1>
<p>Except for the Friday Beer Event, <strong>Registration</strong> is <strong>mandatory</strong>.</p>
<p>Registration should be done by e-mail, to <a href="mailto:videolan@REMOVETHIS@videolan.org">videolan @ videolan.org</a>.</p>


<h2><a name="location">Venue at Telecom Paris</a> </h2>
<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=institut+telecom+paris&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=40.27343,79.013672&amp;ie=UTF8&amp;hq=institut+telecom&amp;hnear=Paris,+%C3%8Ele-de-France,+France&amp;ll=48.837153,2.346268&amp;spn=0.158183,0.291824&amp;z=11&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=institut+telecom+paris&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=40.27343,79.013672&amp;ie=UTF8&amp;hq=institut+telecom&amp;hnear=Paris,+%C3%8Ele-de-France,+France&amp;ll=48.837153,2.346268&amp;spn=0.158183,0.291824&amp;z=11" style="color:#0000FF;text-align:left">View Larger Map</a></small>
 
<!--<h2>Schedule</h2> -->
<!-- You can find the full final schedule <a href="/videolan/events/vdd09.pdf">here</a>. -->

<?php footer('$Id: index.php 5400 2009-07-19 15:37:21Z jb $'); ?>
