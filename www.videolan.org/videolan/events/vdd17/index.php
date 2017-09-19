<?php
   $title = "VideoLAN Dev Days 2017, September 22 - 24, 2017";
   $body_color = "green";

   $new_design = true;
   $show_vdd_banner = false;
   $lang = "en";
   $menu = array( "videolan", "events" );

   $additional_js = array("/js/slimbox2.js", "/js/slick-init.js", "/js/slick.min.js");
   $additional_css = array("/js/css/slimbox2.css", "/style/slick.min.css", "/videolan/events/vdd17/style.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>
<header class="header-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 text-center">
        <img src="//images.videolan.org/images/VLC-IconSmall.png">
        <h1>VideoLAN Dev Days 2017</h1>
        <h3>The Open Multimedia Conference that frees the cone in you!</h3>
        <h4>22 - 24 September 2017, Paris</h4>
      </div>
    </div>
  </div>
  <div class="container">
    <div id="sponsors">
        <h5>Sponsors</h5>
        <a href="https://www.youtube.com"><?php image( 'events/vdd17/sponsors/youtube_logo.svg' , 'Youtube', 'sponsors-logo'); ?></a>
        <a href="http://www.42.fr"><?php image( 'events/vdd17/sponsors/42_logo.svg' , '42', 'sponsors-logo'); ?></a>
    </div>
  </div>
</header>
<section id="overview">
<div class="container">
  <div class="row">
    <div class="col-lg-10 col-lg-offset-1 text-center">
      <h2 class="uppercase">About VideoLAN Dev Days 2017</h2>
      <hr class="spacer">
      <p>The <a href="/videolan/">VideoLAN non-profit organisation</a> is happy to
      invite you to the multimedia open-source event of the summer!</p>
      <p>For its <b>ninth edition</b>, people from the VideoLAN and open source multimedia communities will meet in <strong>Paris</strong>
      to discuss and work on the future of the open-source multimedia community</p>

      <p>This is a <strong>technical</strong> conference.</p>
      <br />
      <p>Date: <strong>22nd - 24th of September 2017</strong>, Location: <strong><a href="https://www.google.fr/maps/place/Ecole+42/@48.8965533,2.3163477,17z/data=!3m1!4b1!4m5!3m4!1s0x47e66fa9e6616ed9:0xe4d627301e40e170!8m2!3d48.8965533!4d2.3185364">Ecole 42, Paris</a></strong> (<a href="https://drive.google.com/open?id=1aOiHg2lYyNjcKhP7IukOty6BcYI">Full map</a>)</p>
    </div>
  </div>
</div>
</section>
<section id="where" class="bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1 text-center">
        <h2 class="uppercase">Where?</h2>
        <p>The venue is in Paris!</p>
        <p style="font-weight: bold; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;"><a href="https://www.google.fr/maps/place/Ecole+42/@48.8965533,2.3163477,17z/data=!3m1!4b1!4m5!3m4!1s0x47e66fa9e6616ed9:0xe4d627301e40e170!8m2!3d48.8965533!4d2.3185364">Ecole 42, 96 Boulevard Bessières, 75017 Paris, France</a><br />
      </div>
    </div>
  </div>
</section>

<section id="schedule">
  <div class="container">
    <div class="row">
      <div class="text-center">
        <h2 class="uppercase">Schedule</h2>
        <hr class="spacer">
      </div>
      <div class="col-lg-10 col-lg-offset-1">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a href="#friday" aria-controls="friday" role="tab" data-toggle="tab">Friday 22</a></li>
        <li role="presentation" class="active"><a href="#saturday" aria-controls="saturday" role="tab" data-toggle="tab">Saturday 23</a></li>
        <li role="presentation"><a href="#sunday" aria-controls="sunday" role="tab" data-toggle="tab">Sunday 24</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade" id="friday">
            <div class="event">
              <h4 class="event-time">09:30 - 18:30</h4>
              <div class="event-description">
                <h3>Community Bonding Day: Disneyleak!</h3>
                <p>This year we'll do a <b>Disneyland Paris competition</b>!<br/>
                The VideoLAN organization will pay for the entrance tickets, or whatever costs associated with the event.<br/></p>
              </div>
            </div>
            <div class="event">
              <h4 class="event-time">19:30</h4>
              <div class="event-description">
                <h3>Evening drinks</h3>
                <p>On <strong>Friday at 19h30</strong>, people are welcome to come and
                share a few good drinks, with all attendees, in the center of Paris.</p>
              </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade active in" id="saturday">
            <div class="event event-bg">
              <h4 class="event-time">
                08:45 - 09:15
              </h4>
              <div class="event-description">
                <h3>Registration & Coffee</h3>
              </div>
            </div>
            <div class="event">
              <h4 class="event-time">
                09:15 - 09:40
              </h4>
              <p class="event-author">Jean-Baptiste Kempf, VideoLAN</p>
              <div class="event-description">
                <h3>Welcome</h3>
              </div>
            </div>
             <div class="event">
              <h4 class="event-time">
                09:40 - 10:10
              </h4>
              <p class="event-author">Jean-Baptiste Kempf, VideoLAN</p>
              <div class="event-description">
                <h3>VLC 3.0</h3>
              </div>
            </div>
            <div class="event">
              <h4 class="event-time">
                10:10 - 10:40
              </h4>
              <p class="event-author">Rostislav Pehlivanov, FFmpeg</p>
              <div class="event-description">
                <h3>A new Opus Encoder</h3>
              </div>
            </div>
            <div class="event">
              <h4 class="event-time">
                11:00 - 11:30
              </h4>
              <p class="event-author">Steve Lhomme, Matroska</p>
              <div class="event-description">
                <h3>MKV IETF Update</h3>
              </div>
            </div>
            <div class="event">
              <h4 class="event-time">
                11:30 - 12:00
              </h4>
              <p class="event-author">Timothy B. Terriberry, Mozilla</p>
              <div class="event-description">
                <h3>AV1 Update</h3>
              </div>
            </div>
            <div class="event">
              <h4 class="event-time">
                12:00 - 12:30
              </h4>
              <p class="event-author">Jan Skoglund, Chrome &amp; Damien Kelly, YouTube</p>
              <div class="event-description">
                <h3>Spatial Audio and Ambisonic Compression</h3>
              </div>
            </div>
            <div class="event event-bg">
              <h4 class="event-time">
                12:30 - 14:00
              </h4>
              <div class="event-description">
                <h3>Lunch Break</h3>
              </div>
            </div>
            <div class="event">
              <h4 class="event-time">
                14:00 - 16:00
              </h4>
              <div class="event-description event-row">
                <div class="event-col">
                  <div class="header">
                    Salle 1
                  </div>
                  <div class="body">
                    <h3>FFmpeg Technical Meeting</h3>
                  </div>
                </div>
                <div class="event-col">
                  <div class="header">
                    Salle 2
                  </div>
                  <div class="body">
                    <h3>libav Technical Meeting</h3>
                  </div>
                </div>
                <div class="event-col">
                  <div class="header">
                    Salle 3
                  </div>
                  <div class="body">
                  <h3>VLC Technical Meeting</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="event">
              <h4 class="event-time">
                16:00 - 18:00
              </h4>
              <div class="event-description">
                <h3>VideoLAN asso meeting</h3>
                <h5>For non-profit members only</h5>
              </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="sunday">
            <div class="event event-bg">
              <h4 class="event-time">
                09:00 - 09:30
              </h4>
              <div class="event-description">
                <h3>Breakfast</h3>
              </div>
            </div>
            <div class="event">
              <h4 class="event-time">
                09:30 - 12:00
              </h4>
              <div class="event-description">
                <h3>Lightning talks</h3>
              </div>
            </div>
            <div class="event event-bg">
              <h4 class="event-time">
                12:00 - 14:00
              </h4>
              <div class="event-description">
                <h3>Lunch</h3>
              </div>
            </div>
            <div class="event">
              <h4 class="event-time">
                14:00 - 18:00
              </h4>
              <div class="event-description">
                <h3>Unconferences</h3>
              </div>
            </div>
            <div class="event">
              <div class="event-inner">
                <div class="event-description">
                    <p>The actual content of the unconference track is being decided on Saturday evening. For the live schedule, check the <a href="https://wiki.videolan.org/VDD17#Unconference_schedule">designated page on the wiki</a>.</p>
                </div>
              </div>
            </div>
        </div>
      </div>
      </div>
    </div>
  </div>
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
        <h2 class="uppercase">Register!</h2>
        <p><b>Main registration is closed.</b></p>
        <p>If you want to attend and did not have time to register, please email <a href="mailto:hugo@videolan.org">hugo@videolan.org</a></p>
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
        <p>For active members of the open-source multimedia communities who registered until August 25 and got a confirmation, your hotel will be:</p>
        <p><b><a href="https://goo.gl/maps/vzSVwssbJJB2">
        TIMHOTEL Berthier – Paris XVII<br/>
        4, Boulevard Berthier – 75017 Paris</a><br/>
        Phone: +33 (0)1 46 27 10 00
        </b></p>
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
