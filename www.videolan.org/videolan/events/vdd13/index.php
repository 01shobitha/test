<?php
   $title = "VideoLAN Dev Days 2013, August 31 - September 1, 2013";
   $additional_css = array("/style/panels.css");
   $body_color = "green";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1>VideoLAN Dev Days 2013 </h1><br/>
<h3>The Open Multimedia Conference that frees the cone in you!</h3>

<div id="sidebar">
<?php panel_start( "green" ); ?>
<h2>Sponsors</h2>
<a href="/videolan/"><?php image( "logoGrey.png" , "VideoLAN association"); ?></a>
<br />
<p><a href=/contact.html>Your Name Here</p>
<h2>Host</h2>
<p style="text-align: center">To be defined</a></p>
<?php panel_end(); ?>

<?php panel_start( "blue" ); ?>
<h2>Register!</h2>
<b><a href="http://goo.gl/mUEER">Register <strong>now!</strong></a></b>
<?php panel_end(); ?>

<?php panel_start( "green" ); ?>
<h2>Past editions</h2>
<a href="/videolan/events/">Past VDD</a>
<p class="center">
<img src="http://images.videolan.org/videolan/events/20081220/VDD/mq/img-11.jpg" alt="VDD 08" style="width:100%"/>
</p>
<?php panel_end(); ?>

</div>


<p><b>The <a href="/videolan/">VideoLAN non-profit organisation</a> is happy to
invite you to the multimedia open-source event of the end of summer!</b></p><br/>

<p>For its <b>fifth edition</b>, people from the VideoLAN and open source multimedia community will meet in
 <strong>Paris, France</strong> to gather, work, discuss and meet, on the <strong>31st August and 1st of September 2013</strong>.</p>
<p>This technical event is focused on technical discussions and decisions about <b>multimedia</b>, and is focused to a technical crowd.</p>
<p>Like the previous years, an important number of developers from <a href="/developers/x264.html">x264</a>, <a href="http://www.ffmpeg.org/">FFmpeg</a>, <a href="http://libav.org/">Libav</a> and KDE will join us!
Developers, designers and anonymous people around <a href="/vlc/">VLC</a>, <a href="/projects/dvblast.html">DVBlast</a>, VLMa, skin-designer or other multimedia projects will be there too.</p>

<h1>Who can come? </h1>
<p><strong>Anyone</strong> that cares about open source multimedia.<br />
 If you are not a technical person, but an enthusiast, we recommend you to come to the less technical events, like in the evenings.</p>

<h1>Where? </h1>
<h2>Friday 30th August</h2>
<p>This year we'll do a full day community bonding at <a href="http://www.parcasterix.fr/en">Parc Asterix</a>!<br/>
The VideoLAN organization will pay for the transportation and the amusement park tickets.<br/>
<b>To participate you'll need to be in Paris Friday at 8am!</b> Please plan an extra night if you can't make it.</p>
<h2>Saturday / Sunday</h2>
<p>To be defined&hellip;</p>

<h1>Cost and sponsorship </h1>
<p>The cost for attendance is <b>free</b>.</p>
<p>Like previous years, active developers can get a full sponsorship covering all the costs for the venue.</p>

<h1>Schedule</h1>
<p>To be defined&hellip;</p>

<?php /*
<div id="schedule" style="margin: 10px 25px 0px; padding: 0 20px; border: 1px outset #4d4d4d; width: 600px;">
<h2>Friday night Beers</h2>
<p>On <strong>Friday 2nd September 2011 at 20h30</strong>, people are welcome to come and
share a few good drinks.</p>
<h3>Venue</h3>
<a href="http://g.co/maps/veka">Map for the bar</a>

<hr />
<h2>Saturday morning talks</h2>
<p>Opened for all the libre community, activists and technology-oriented people that are interested,
 there will be technical talks and presentations about multimedia.</p>

<div class="item">
<div class="title">Welcoming remarks</div>
<div class="date">Saturday 10.30 - 10.40</div>
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

<p><b>More talks</b> might be added, later on.</p>
<hr />

<h2>Lunch</h2>
<p>Lunch will be held in Institut Telecom, near the Entrance.</p>

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
 on the <strong>Saturday 3rd, starting at 10h30</strong> at Institut Telecom.</p> -->
 */ ?>

<h1>Registration</h1>
<p>Please fill out the <b><a href="http://goo.gl/mUEER">registration form</a></b>.</p>

<h1>Hotel</h1>
<p>To be defined&hellip;</p>

<h1><a name="location">Location</a> </h1>
<p>To be defined&hellip;</p>

<!--<h2>Schedule</h2> -->
<!-- You can find the full final schedule <a href="/videolan/events/vdd09.pdf">here</a>. -->

<?php footer('$Id: index.php 5400 2009-07-19 15:37:21Z jb $'); ?>
