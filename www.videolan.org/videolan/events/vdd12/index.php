<?php
   $title = "VideoLAN Dev Days 2012, September 1-2, 2012";
   $additional_css = array("/style/panels.css");
   $body_color = "green";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1>VideoLAN Dev Days 2012 </h1><br/>
<h3>The Open Multimedia Conference that frees the cone in you! </h3>

<div id="sidebar">
<?php panel_start( "green" ); ?>
<h2>Sponsors</h2>
<a href="/videolan/"><?php image( "logoGrey.png" , "VideoLAN association"); ?></a>
<br />
<p><a href=/contact.html>Your Name Here :)</p>
<h2>Host</h2>
<p><a href="http://www.mines-telecom.fr/en_accueil.html"><img src="http://www.mines-telecom.fr/images/imt12/logo.png" alt="Institut Mines Telecom" /></a></p>
<p><a href="http://www.dernierbar.com"><img src="http://images.videolan.org/images/events/dernierbar.png" alt="Le dernier bar avant la fin du monde" /></a></p>
<?php panel_end(); ?>

<?php panel_start( "blue" ); ?>
<h2>Register!</h2>
<a href="http://goo.gl/QRMsb">Register <strong>now!</strong></a>
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

<p>For its <b>fourth edition</b>, people from the VideoLAN and open source multimedia community will meet in
 <strong>Paris, France</strong> to gather, work, discuss and meet, on the <strong>1st and 2nd of September 2012</strong>.</p>
<p>This technical event is focused on technical discussions and decisions about <b>multimedia</b>, and is focused to a technical crowd.</p>
<p>Like the previous years, an important number of developers from <a href="/developers/x264.html">x264</a>, <a href="http://www.ffmpeg.org/">FFmpeg</a>, <a href="http://libav.org/">Libav</a> and KDE will join us!
Developers, designers and anonymous people around <a href="/vlc/">VLC</a>, <a href="/projects/dvblast.html">DVBlast</a>, VLMa, skin-designer or other multimedia projects will be there too.</p>

<h1>Who can come? </h1>
<p><strong>Anyone</strong> that cares about open source multimedia.<br />
 If you are not a technical person, but an enthusiast, we recommend you to come to the less technical events, like in the evenings.</p>

<h1>Where? </h1>
<p>Technical events will be held at <a href="http://www.mines-telecom.fr/p_en_imt_contact_38.html">Institut Mines-Telecom</a> (<a href="#location">map</a>).</p>
<p>Be careful to enter by the <em>49, rue Vergniaud</em> entrance.</p>

<h1>Cost and sponsorship </h1>
<p>The cost for attendance is <b>free</b>.</p>
<p>Like previous years, active developers can get a full sponsorship covering all the costs for the venue.</p>

<h1>FOMS</h1>
<p><a href="http://www.foms-workshop.org/foms2012/">FOMS 2012</a> will take place just after the VDD, on the <b>3rd and 4th of september</b>.</p>

<h1>Schedule</h1>
<p>To be defined</p>

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
<p>Except for the Friday Beer Event, <strong>registration</strong> is <strong>mandatory</strong>!</p>
&#10149; <a href="http://goo.gl/QRMsb">Register here and now</a>

<h1>Hotel</h1>
<p>If you got an hotel reserved by the team, it will be
 <a href="http://www.ibishotel.com/gb/hotel-5543-ibis-paris-avenue-d-italie-13eme/index.shtml">Hotel ibis Paris Avenue d'Italie 13ème</a>

<h1><a name="location">Venue at Institut Telecom</a> </h1>
<p>Public transportation:
<ul>
<li><img src="http://images.videolan.org/images/subway-paris.png"/> <b>7</b>: Tolbiac</li>
<li><img src="http://images.videolan.org/images/subway-paris.png"/> <b>6</b>: Corvisart</li>
<li><img src="http://images.videolan.org/images/rer-paris.png"/> <b>B</b>: Cité Universitaire</li>
</ul>
</p>
<p>Be careful to enter by the <em>49, rue Vergniaud</em> entrance, as shown on the photo.</p>
<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?q=49+rue+vergniaud+75013+paris&amp;layer=c&amp;sll=48.826545,2.345471&amp;cbp=13,101.2,,0,6.74&amp;cbll=48.826434,2.345356&amp;hl=fr&amp;sspn=0.005382,0.016512&amp;ie=UTF8&amp;hq=&amp;hnear=49+Rue+Vergniaud,+75013+Paris,+%C3%8Ele-de-France,+France&amp;ll=48.826545,2.345388&amp;spn=0.006738,0.016512&amp;z=14&amp;vpsrc=0&amp;panoid=BdbmgzcvtEf0pvAUmsfh9g&amp;source=embed&amp;output=svembed"></iframe><br /><small><a href="http://maps.google.com/maps?q=49+rue+vergniaud+75013+paris&amp;layer=c&amp;sll=48.826545,2.345471&amp;cbp=13,101.2,,0,6.74&amp;cbll=48.826434,2.345356&amp;hl=fr&amp;sspn=0.005382,0.016512&amp;ie=UTF8&amp;hq=&amp;hnear=49+Rue+Vergniaud,+75013+Paris,+%C3%8Ele-de-France,+France&amp;ll=48.826545,2.345388&amp;spn=0.006738,0.016512&amp;z=14&amp;vpsrc=0&amp;panoid=BdbmgzcvtEf0pvAUmsfh9g&amp;source=embed" style="color:#0000FF;text-align:left">Agrandir le plan</a></small>

<!--<h2>Schedule</h2> -->
<!-- You can find the full final schedule <a href="/videolan/events/vdd09.pdf">here</a>. -->

<?php footer('$Id: index.php 5400 2009-07-19 15:37:21Z jb $'); ?>
