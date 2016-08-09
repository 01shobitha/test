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
<p>The venue is in the center of Berlin!<br />
<a href="http://bcc-berlin.de">Berlin Congress Center</a>, Alexanderstra&szlig;e 11, 10178 Berlin, Germany.</p>

<h1>Schedule</h1>
<div id="schedule" style="margin: 10px 25px 0px; padding: 0 20px; border: 0px outset #4d4d4d; width: 600px;">
<p>VDD is part of QtCon. Please see the <a href="https://conf.qtcon.org/en/qtcon/public/schedule">official program</a>.</p>
</div>

<h1>Who can come? </h1>
<p><strong>Anyone</strong> who cares about open source multimedia technologies and development. Remember that it targets a technical crowd!</p>
<p>If you are representing a <b>company</b> caring about open-source multimedia software, we would be <b>very interested</b> if you could co-sponsor the event.</p>

<h1>Cost and sponsorship </h1>
<p>The cost for attendance is <b>free</b>.</p>
<p>Like previous years, active developers can get a full sponsorship covering travel costs. We will also provide accomodation.</p>

<h1>Registration</h1>
<p>As VDD is part of QtCon this year, you need to register for QtCon. <a href="https://conf.qtcon.org">Click here!</a></b>.

<h1>Accommodation</h1>
<p>For active members of the open-source multimedia communities who register until August 5, we will provide accommodation.</p>

<h1><a name="coc">Code of Conduct</a> </h1>
<p>This community activity is running under the <a href="https://wiki.videolan.org/CoC/">VideoLAN Code of Conduct</a>. We expect all attendees to respect our <a href="https://wiki.videolan.org/VideoLAN_Values/">Shared Values</a>.</p>

<h1><a name="contact">Contact</a> </h1>
<p>The VideoLAN Dev Days are organized by the board members of the VideoLAN non-profit organization, Jean-Baptiste Kempf, Felix Paul K&uuml;hne and Hugo Beauz&eacute;e-Luyssen. You can reach us at <span style="color: #39b549">board@videolan.org</span>.</p>
</div>
</div>

<?php footer('$Id: index.php 5400 2009-07-19 15:37:21Z jb $'); ?>
