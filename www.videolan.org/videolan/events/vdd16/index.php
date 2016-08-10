<?php
   $title = "VideoLAN Dev Days 2016, September 2 - 4, 2016";
   $body_color = "green";

   $new_design = true;
   $lang = "en";
   $menu = array( "videolan", "events" );

   $additional_js = array("/js/slimbox2.js", "/js/slick-init.js", "/js/slick.min.js");
   $additional_css = array("/js/css/slimbox2.css", "/style/slick.min.css", "/videolan/events/vdd16/style.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/language.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>
<header class="header-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 text-center">
        <img src="//images.videolan.org/images/VLC-IconSmall.png">
        <h1>VideoLAN Dev Days 2016</h1>
        <h3>The Open Multimedia Conference that frees the cone in you!</h3>
        <h4>3rd and 4th of September 2016</h4>
        <h4>Berlin, Germany</h4>
        <a class="btn btn-border" href="https://conf.qtcon.org">Register Now</a>
      </div>
    </div>
  </div>
</header>
<section id="overview">
<div class="container">
  <div class="row">
    <div class="col-lg-10 col-lg-offset-1 text-center">
      <h2 class="uppercase">About VideoLAN Dev Days 2016</h2>
      <p>The <a href="/videolan/">VideoLAN non-profit organisation</a> is happy to
      invite you to the multimedia open-source event of the summer!</b></p>
      <p>For its <b>eighth edition</b>, people from the VideoLAN and open source multimedia communities will meet on the
      <strong>3rd and 4th of September 2016</strong>, to gather, work, discuss and meet, in: <strong>Berlin, Germany</strong>!</p>
      <p>This event is focused on technical discussions and decisions about <strong>multimedia</strong>.</p>

      <p>This year <b>VideoLAN Dev Days</b> will be colocated within a larger conference called <b><a href="https://qtcon.org">QtCon</a></b>!<br />The conference will see <a href="http://www.qt.io">Qt</a>, <a href="https://fsfe.org">FSFE</a>, <a href="https://www.kde.org">KDE</a> and <a href="https://www.kdab.com">KDAB</a> having talks in the same place.

      <p><?php image( 'events/vdd16/QtConInfo_v4_wee.jpg' , 'QtCon Info v4', 'announce-img'); ?></p>
    </div>
  </div>
</div>
</section>
<section id="where" class="bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1 text-center">
        <h2 class="uppercase">Where?</h2>
        <p>The venue is in the center of Berlin, near Alexanderplatz!<br />
        <a href="http://bcc-berlin.de">Berlin Congress Center</a>, Alexanderstra&szlig;e 11, 10178 Berlin, Germany.</p>
      </div>
    </div>
  </div>
</section>

<section id="schedule">
  <div class="container">
    <div class="row">
      <div class="text-center">
        <h2 class="uppercase">Schedule</h2>
        <p>VDD is part of QtCon. Please see the <a href="https://conf.qtcon.org/en/qtcon/public/schedule">official program</a>.</p>
      </div>
      <div class="col-lg-10 col-lg-offset-1">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#friday" aria-controls="friday" role="tab" data-toggle="tab">Friday</a></li>
        <li role="presentation"><a href="#saturday" aria-controls="saturday" role="tab" data-toggle="tab">Saturday</a></li>
        <li role="presentation"><a href="#sunday" aria-controls="sunday" role="tab" data-toggle="tab">Sunday</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active fade in" id="friday">
            <div class="event">
              <div class="event-inner">
                <div class="event-time">
                  9:00 - 19:00
                </div>
                <div class="event-description">
                  <h3>General conference</h3>
                  <p>On Friday, KDE, Qt and FSFE start QtCon with their talks and conferences. You are welcome to attend their sessions through-out the day and the keynote on Friday morning.</p>
                </div>
              </div>
            </div>
            <div class="event">
              <div class="event-inner">
                <div class="event-time">
                  13:00
                </div>
                <div class="event-description">
                  <h3>Community Bonding Day</h3>
                  <p>This year we'll do an <b>Escape room competition</b>!<br/>
                  The VideoLAN organization will pay for the entrance tickets.<br/>
                  <b>To participate you'll need to be in downtown Berlin, on Friday at 13h00!</b><br/>Please note, that VideoLAN will not pay for a hotel on Thursday night, except very special cases.</p>
                </div>
              </div>
            </div>
            <div class="event">
              <div class="event-inner">
                <div class="event-time">
                  19:00
                </div>
                <div class="event-description">
                  <h3>Evening reception</h3>
                  <p>On <strong>Friday 2nd September at 19h00</strong>, people are welcome to come and
                  share a few good drinks, with all <b>QtCon</b> attendees. Location is the BCC. Registration for QtCon required.</p>
                </div>
              </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="saturday">
          <div class="event">
            <div class="event-inner">
              <div class="event-description">
                <p>See the program on the <a href="https://conf.qtcon.org/en/qtcon/public/schedule/2016-09-03">QtCon</a> website! VDD talks will be in room B09 followed by break-out sessions in A06, A05 and B04.</p>
              </div>
            </div>
          </div>
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
        </div>
        <div role="tabpanel" class="tab-pane fade" id="sunday">
            <div class="event">
              <div class="event-inner">
                <div class="event-time">
                  09:00 - 10:00
                </div>
                <div class="event-description">
                  <h3>Breakfast</h3>
                </div>
              </div>
            </div>
            <div class="event">
              <div class="event-inner">
                <div class="event-time">
                  10:00 - 17:00
                </div>
                <div class="event-description">
                  <h3>Unconference</h3>
                </div>
              </div>
            </div>
            <div class="event">
              <div class="event-inner">
                <div class="event-description">
                    <p>The conference schedule is subject to changes. For live updates, check the <a href="https://wiki.videolan.org/VDD16">designated page on the wiki</a>.</p>
                </div>
              </div>
            </div>
        </div>
      </div>
      </div>
    </div>
  <div>
</section>

<section class="bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="uppercase">Who can come?</h2>
        <p><strong>Anyone</strong> who cares about open source multimedia technologies and development. Remember that it targets a technical crowd!</p>
        <p>If you are representing a <b>company</b> caring about open-source multimedia software, we would be <b>very interested</b> if you could co-sponsor the event.</p>
      </div>
        <div class="col-md-6 ">
        <h2 class="uppercase">Registration</h2>
        <p>As VDD is part of QtCon this year, you need to register for QtCon. <a href="https://conf.qtcon.org">Click here!</a></b>
        <p><b>NB:</b> please register with a donation of <b>0€</b> (VideoLAN donates for you) and remember to register for the Friday, if you join us for Friday dinner! </p>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="uppercase">Cost and sponsorship </h2>
        <p>The cost for attendance is <b>free</b>.</p>
        <p>Like previous years, active developers can get a full sponsorship covering travel costs. We will also provide accomodation.</p>
      </div>
      <div class="col-md-6">
        <h2 class="uppercase">Accommodation </h2>
        <p>For active members of the open-source multimedia communities who registered until August 5, we will provide accommodation.</p>
      </div>
    </div>
  </div>
</section>

<section class="bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1 text-center">
        <h2 class="uppercase">Code of Conduct </h2>
        <p>This community activity is running under the <a href="https://wiki.videolan.org/CoC/">VideoLAN Code of Conduct</a>. We expect all attendees to respect our <a href="https://wiki.videolan.org/VideoLAN_Values/">Shared Values</a>.</p>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1 text-center">
        <h2 class="uppercase">Contact </h2>
        <p>The VideoLAN Dev Days are organized by the board members of the VideoLAN non-profit organization, Jean-Baptiste Kempf, Felix Paul K&uuml;hne and Hugo Beauz&eacute;e-Luyssen. You can reach us at <span style="color: #39b549">board@videolan.org</span>.</p>
      </div>
    </div>
  </div>
</section>


<?php footer('$Id: index.php 5400 2009-07-19 15:37:21Z jb $'); ?>
