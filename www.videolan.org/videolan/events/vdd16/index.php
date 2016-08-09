<?php
   $title = "VideoLAN Dev Days 2016, September 2 - 4, 2016";
   $additional_css = array("/style/panels.css");
   $body_color = "green";

   $new_design = true;
   $lang = "en";
   $menu = array( "videolan", "events" );

   $additional_js = array("/js/slimbox2.js", "/js/slick-init.js", "/js/slick.min.js");
   $additional_css = array("/js/css/slimbox2.css", "/style/slick.min.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/language.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div class="container">

<p><?php image( 'events/vdd14.jpg' , 'VDD14 Group picture', 'announce-img'); ?></p>

<div class="projectDescription">

<h1>VideoLAN Dev Days 2016</h1>
<h3 style="color: #4D4D4D">The Open Multimedia Conference that frees the cone in you!</h3>

<p style="margin: 10px 0;"><b><br/>The <a href="/videolan/">VideoLAN non-profit organisation</a> is happy to
invite you to the multimedia open-source event of the summer!</b></p>

<p>For its <b>eighth edition</b>, people from the VideoLAN and open source multimedia communities will meet on the</p>
<p style="text-align: center"><strong>3rd and 4th of September 2016</strong>,</p>
<p>to gather, work, discuss and meet, in:</p>
<p style="text-align: center"><strong>Berlin, Germany</strong>!</p>
<p>This event is focused on technical discussions and decisions about <b>multimedia</b>.</p>

<p>This year <b>VideoLAN Dev Days</b> will be colocated within a larger conference called <b><a href="https://qtcon.org">QtCon</a></b>!<br />The conference will see <a href="http://www.qt.io">Qt</a>, <a href="https://fsfe.org">FSFE</a>, <a href="https://www.kde.org">KDE</a> and <a href="https://www.kdab.com">KDAB</a> having talks in the same place.

<p><?php image( 'events/vdd16/QtConInfo_v4_wee.jpg' , 'QtCon Info v4', 'announce-img'); ?></p>

<h1>Where? </h1>
<p>The venue is in the center of Berlin, near AlexanderPlatz!<br />
<a href="http://bcc-berlin.de">Berlin Congress Center</a>, Alexanderstra&szlig;e 11, 10178 Berlin, Germany.</p>

<h1>Schedule</h1>
<div id="schedule" style="margin: 10px 25px 0px; padding: 0 20px; border: 0px outset #4d4d4d; width: 600px;">
<p>VDD is part of QtCon. Please see the <a href="https://conf.qtcon.org/en/qtcon/public/schedule">official program</a>.</p>
<h2>Friday 2nd September, Community Bonding Day</h2>
<p>This year we'll do an <b>Escape room competition</b>!<br/>
The VideoLAN organization will pay for the entrance tickets.<br/>
<b>To participate you'll need to be in Berlin, on Friday at 13h00!</b><br/>Please note, that VideoLAN will not pay for the Thursday night, except special cases.</p>

<h2>Friday 2nd September, Night Event</h2>
<p>On <strong>Friday 2n September at 19h00</strong>, people are welcome to come and
share a few good drinks, with the whole <b>QtCon</b> attendees. The location will be announced shortly.</p>

<h2>Saturday</h2>

<p>See the program on the <a href="https://conf.qtcon.org/en/qtcon/public/schedule/2016-09-03">QtCon</a> website!</p>
<!-- 
<p>
<table style="width:100%">
  <tr>
    <td style="width:20%; color: #4D4D4D"><b>09:00 - 10:00</b></td>
    <td style="color: #4D4D4D">Registration and Breakfast</td>
  </tr>
  <tr>
    <td style="width:20%">&#8193;</td>
    <td>&#8193; </td>
  </tr>
  <tr>
    <td style="width:20%; color: #4D4D4D; height:30px"><b>10:00 - 11:15</b></td>
    <td style="color: #4D4D4D"><b>VideoLAN asso meeting</b> <i>(VideoLAN members only)</i></td>
  </tr>
  <tr>
    <td style="width:20%; color: #4D4D4D; height:30px"><b>09:45 - 10:20</b></td>
    <td style="color: #4D4D4D"><b>Daala</b> by Timothy Terriberry <i>(Mozilla)</i></td>
  </tr>
  <tr>
    <td style="width:20%; color: #4D4D4D; height:30px"><b>10:20 - 10:55</b></td>
    <td style="color: #4D4D4D"><b>A new AAC free and open-source encoder</b> by Rostislav Pehlivanov <i>(FFmpeg)</i></td>
  </tr>
  <tr>
    <td style="width:20%">&#8193;</td>
    <td>&#8193;</td>
  </tr>
  <tr>
    <td style="width:20%; color: #4D4D4D; height:30px"><b>11:05 - 11:40</b></td>
    <td style="color: #4D4D4D"><b>New video compression techniques under consideration for VP10</b> by Alex Converse <i>(Google)</i></td>
  </tr>
  <tr>
    <td style="width:20%; color: #4D4D4D; height:30px"><b>11:40 - 12:10</b></td>
    <td style="color: #4D4D4D"><b>An update to x265</b> by Deepthi Nandakumar <i>(MCW)</i></td>
  </tr>
  <tr>
    <td style="width:20%; color: #4D4D4D; height:30px"><b>12:10 - 12:40</b></td>
    <td style="color: #4D4D4D"><b>VLC 3.0</b> by Jean-Baptiste Kempf <i>(VideoLAN)</i></td>
  </tr>
  <tr>
    <td style="width:20%; color: #4D4D4D; height:30px"><b>12:40 - 12:45</b></td>
    <td style="color: #4D4D4D"><b>Spice</b> by Lord Julien Navas <i>(Vodkaster)</i></td>
  </tr>
  <tr>
    <td style="width:20%">&#8193;</td>
    <td>&#8193; </td>
  </tr>
  <tr>
    <td style="width:20%; color: #4D4D4D; height:30px"><b>14:00 - 14:40</b></td>
    <td style="color: #4D4D4D"><b>The Thor Codec</b> by Thomas Davies <i>(Cisco)</i></td>
  </tr>
  <tr>
    <td style="width:20%; color: #4D4D4D; height:30px"><b>14:40 - 15:00</b></td>
    <td style="color: #4D4D4D"><b>How to optimize press coverage for FLOSS projects</b> by Sebastian Grüner <i>(golem.de)</i></td>
  </tr>
  <tr>
    <td style="width:20%; color: #4D4D4D; height:30px"><b>15:00 - 15:20</b></td>
    <td style="color: #4D4D4D"><b>A faster VP9 decoder</b> by Ronald Bultje</td>
  </tr>
  <tr>
    <td style="width:20%; color: #4D4D4D; height:30px"><b>15:30 - 18:00</b></td>
    <td style="color: #4D4D4D"><b>Unconference</b></td>
  </tr>
</table>
</p> -->

<h2>Sunday</h2>
<p>
<table style="width:100%">
  <tr>
    <td style="width:20%; color: #4D4D4D"><b>09:00 - 10:00</b></td>
    <td style="color: #4D4D4D">Breakfast</td>
  </tr>
  <tr>
    <td style="width:20%">&#8193;</td>
    <td>&#8193; </td>
  </tr>
  <tr>
    <td style="width:20%; color: #4D4D4D"><b>10:00 - 18:00</b></td>
    <td style="color: #4D4D4D">Unconference</td>
  </tr>
</table>
</p>
<p>The conference schedule is subject to changes. For live updates, check the <a href="https://wiki.videolan.org/VDD16">designated page on the wiki</a>.</p> </div>

</div>

<h1>Who can come? </h1>
<p><strong>Anyone</strong> who cares about open source multimedia technologies and development. Remember that it targets a technical crowd!</p>
<p>If you are representing a <b>company</b> caring about open-source multimedia software, we would be <b>very interested</b> if you could co-sponsor the event.</p>

<h1>Registration</h1>
<p>As VDD is part of QtCon this year, you need to register for QtCon. <a href="https://conf.qtcon.org">Click here!</a></b>.
<p><b>NB:</b> please register with a donation of <b>0€</b> and remember to register for the Friday, if you join us for Friday dinner! </p>

<h1>Cost and sponsorship </h1>
<p>The cost for attendance is <b>free</b>.</p>
<p>Like previous years, active developers can get a full sponsorship covering travel costs. We will also provide accomodation.</p>

<h1>Accommodation</h1>
<p>For active members of the open-source multimedia communities who register until August 5, we will provide accommodation.</p>

<h1><a name="coc">Code of Conduct</a> </h1>
<p>This community activity is running under the <a href="https://wiki.videolan.org/CoC/">VideoLAN Code of Conduct</a>. We expect all attendees to respect our <a href="https://wiki.videolan.org/VideoLAN_Values/">Shared Values</a>.</p>

<h1><a name="contact">Contact</a> </h1>
<p>The VideoLAN Dev Days are organized by the board members of the VideoLAN non-profit organization, Jean-Baptiste Kempf, Felix Paul K&uuml;hne and Hugo Beauz&eacute;e-Luyssen. You can reach us at <span style="color: #39b549">board@videolan.org</span>.</p>
</div>
</div>

<?php footer('$Id: index.php 5400 2009-07-19 15:37:21Z jb $'); ?>
