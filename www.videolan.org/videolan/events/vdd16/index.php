<?php
   $title = "VideoLAN Dev Days 2016, September 2 - 4, 2016";
   $additional_css = array("/style/panels.css");
   $body_color = "green";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<p><?php image( "events/vdd14.jpg" , "VDD14 Group picture"); ?></p>

<h1>VideoLAN Dev Days 2016</h1>
<h3 style="color: #4D4D4D">The Open Multimedia Conference that frees the cone in you!</h3>

<div id="sidebar">
<?php panel_start( "green" ); ?>
<h2>Sponsors</h2>
<a href="/videolan/"><?php image( "logoGrey.png" , "VideoLAN association"); ?></a>
<br />
<a href="http://videolabs.io"><?php image( "partners/videolabs-transparent.png" , "Videolabs SAS", "", 180); ?></a>
<!--><h2>Host</h2>
<a href="http://www.criteo.fr/"><?php image( "partners/criteo.png" , "Criteo", "", 180); ?></a>-->
<?php panel_end(); ?>

<?php panel_start( "blue" ); ?>
<h2>Register!</h2>
<b><a href="http://goo.gl/forms/Kdi5LSu1u9">Register <strong>now!</strong></a></b>
<?php panel_end(); ?>

</div>

<p style="margin: 10px 0;"><b><br/>The <a href="/videolan/">VideoLAN non-profit organisation</a> is happy to
invite you to the multimedia open-source event of the summer!</b></p>

<p>2016 is a special year for many FLOSS projects: <a href="\\videolan">VideoLAN</a> as open-source project and <a href="https://fsfe.org">Free Software Foundation Europe</a> both have their 15th birthday while <a href="https://www.kde.org">KDE</a> has its 20th birthday. All these call for celebrations! This year VideoLAN has come together with <a href="http://www.qt.io">Qt</a>, <a href="https://fsfe.org">FSFE</a>, <a href="https://www.kde.org">KDE</a> and <a href="https://www.kdab.com">KDAB</a> to bring you <b><a href="https://qtcon.org">QtCon</a></b>, where attendees can meet, collaborate and get the latest news of all these projects.<br />For its eigths edition, <b>VideoLAN Dev Days 2016</b> will be organised as part of <b>QtCon</b> in Berlin. The event will start on Friday the 2nd of September with 3 shared days of talks, workshops, meetups and coding sessions.</p>

<h1>Where? </h1>
<p>The venue is in the center of Berlin!<br />
<a href="http://bcc-berlin.de">Berlin Congress Center</a>, Alexanderstra&szlig;e 11, 10178 Berlin, Germany.</p>

<h1>Schedule</h1>
<div id="schedule" style="margin: 10px 25px 0px; padding: 0 20px; border: 0px outset #4d4d4d; width: 600px;">
<p>The current plan is to have a Call for Papers in March with the Program announced in early June.</p>
</div>

<h1>Who can come? </h1>
<p><strong>Anyone</strong> who cares about open source multimedia technologies and development. Remember that it targets a technical crowd!</p>
<p>If you are representing a <b>company</b> caring about open-source multimedia software, we would be <b>very interested</b> if you could co-sponsor the event.</p>

<h1>Cost and sponsorship </h1>
<p>The cost for attendance is <b>free</b>.</p>
<p>Like previous years, active developers can get a full sponsorship covering travel costs. We will also provide accomodation.</p>

<h1>Registration</h1>
<p>Not yet open :-)</b>.

<h1>Accommodation</h1>
<p>For active members of the open-source multimedia communities who register until July 10, we will provide accommodation.</p>

<h1><a name="coc">Code of Conduct</a> </h1>
<p>This community activity is running under the <a href="https://wiki.videolan.org/CoC/">VideoLAN Code of Conduct</a>. We expect all attendees to respect our <a href="https://wiki.videolan.org/VideoLAN_Values/">Shared Values</a>.</p>

<h1><a name="contact">Contact</a> </h1>
<p>The VideoLAN Dev Days are organized by the board members of the VideoLAN non-profit organization, Jean-Baptiste Kempf, Felix Paul K&uuml;hne and Hugo Beauz&eacute;e-Luyssen. You can reach us at <span style="color: #39b549">board@videolan.org</span>.</p>

<?php footer('$Id: index.php 5400 2009-07-19 15:37:21Z jb $'); ?>
