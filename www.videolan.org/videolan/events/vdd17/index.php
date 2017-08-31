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
        <h4>22nd and 24th of September 2017</h4>
        <h4>Paris, France</h4>
      </div>
    </div>
  </div>
  <div class="container">
    <div id="sponsors">
        <h5>Sponsors</h5>
        <?php image( 'events/vdd17/sponsors/youtube_logo.svg' , 'Youtube', 'youtube-logo'); ?>
    </div>
  </div>
</header>
<section id="overview">
<div class="container">
  <div class="row">
    <div class="col-lg-10 col-lg-offset-1 text-center">
      <h2 class="uppercase">About VideoLAN Dev Days 2017</h2>
      <p>The <a href="/videolan/">VideoLAN non-profit organisation</a> is happy to
      invite you to the multimedia open-source event of the summer!</p>
      <p>For its <b>ninth edition</b>, people from the VideoLAN and open source multimedia communities will meet on the
      <strong>22nd and 24th of September 2017</strong>, to gather, work, discuss and meet, in: <strong>Paris, France</strong>!</p>
      <p>This event is focused on technical discussions and decisions about <strong>multimedia</strong>.</p>
      <?php image( 'events/vdd17/banner02.png' , 'VDD17 Videolan banner', 'vdd17-videolan-banner img-responsive center-block'); ?>
    </div>
  </div>
</div>
</section>
<section id="where" class="bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1 text-center">
        <h2 class="uppercase">Where?</h2>
        <p>The venue is in Paris!<br />
      </div>
    </div>
  </div>
</section>

<section id="schedule">
  <div class="container">
    <div class="row">
      <div class="text-center">
        <h2 class="uppercase">Schedule</h2>
      </div>
      <div class="col-lg-10 col-lg-offset-1">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#friday" aria-controls="friday" role="tab" data-toggle="tab">Friday 22</a></li>
        <li role="presentation"><a href="#saturday" aria-controls="saturday" role="tab" data-toggle="tab">Saturday 23</a></li>
        <li role="presentation"><a href="#sunday" aria-controls="sunday" role="tab" data-toggle="tab">Sunday 24</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active fade in" id="friday">
            <div class="event">
              <div class="event-inner">
                <div class="event-time">
                  09:30 - 18:30
                </div>
                <div class="event-description">
                  <h3>Community Bonding Day</h3>
                  <p>This year we'll do a <b>tbd...</b>!<br/>
                  The VideoLAN organization will pay for the entrance tickets, or whatever costs associated with the event.<br/></p>
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
                  <p>On <strong>Friday at 19h00</strong>, people are welcome to come and
                  share a few good drinks, with all attendees, somewhere near the Hotel.</p>
                </div>
              </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="saturday">
            <div class="event">
              <div class="event-inner">
                <div class="event-time">
                  08:45 - 09:15
                </div>
                <div class="event-description">
                  <h3>Welcome & Breakfast</h3>
                </div>
              </div>
            </div>
            <div class="event">
              <div class="event-inner">
                <div class="event-time">
                  09:15 - 09:45
                </div>
                <div class="event-description">
                  <h3>VLC 3.0</h3>
                </div>
              </div>
            </div>
            <div class="event">
              <div class="event-inner">
                <div class="event-time">
                  09:45 - 10:20
                </div>
                <div class="event-description">
                  <h3>Opus Encoder</h3>
                </div>
              </div>
            </div>
            <div class="event">
              <div class="event-inner">
                <div class="event-time">
                  10:40 - 11:15
                </div>
                <div class="event-description">
                  <h3>MKV IETF Update</h3>
                </div>
              </div>
            </div>
            <div class="event">
              <div class="event-inner">
                <div class="event-time">
                  11:15 - 11:45
                </div>
                <div class="event-description">
                  <h3>AV1 Update</h3>
                </div>
              </div>
            </div>
            <div class="event">
              <div class="event-inner">
                <div class="event-time">
                  11:45 - 12:15
                </div>
                <div class="event-description">
                  <h3>Empty Slot</h3>
                </div>
              </div>
            </div>
            <div class="event">
              <div class="event-inner">
                <div class="event-time">
                  12:15 - 14:00
                </div>
                <div class="event-description">
                  <h3>Lunch Break</h3>
                </div>
              </div>
            </div>
            <div class="event">
              <div class="event-inner">
                <div class="event-time">
                  14:00 - 16:00
                </div>
                <div class="event-description">
                  <h3>AV1 Technical Meeting</h3>
                </div>
              </div>
            </div>
            <div class="event">
              <div class="event-inner">
                <div class="event-time">
                  14:00 - 16:00
                </div>
                <div class="event-description">
                  <h3>libav Technical Meeting</h3>
                </div>
              </div>
            </div>
            <div class="event">
              <div class="event-inner">
                <div class="event-time">
                  14:00 - 16:00
                </div>
                <div class="event-description">
                  <h3>VLC Technical Meeting</h3>
                </div>
              </div>
            </div>
            <div class="event">
              <div class="event-inner">
                <div class="event-time">
                  16:00 - 18:00
                </div>
                <div class="event-description">
                  <h3>VideoLAN asso meeting</h3>
                  <h5>For non-profit members only</h5>
                </div>
              </div>
            </div>
            <div class="event">
              <div class="event-inner">
                <div class="event-time">
                  16:00 - 18:00
                </div>
                <div class="event-description">
                  <h3>VideoLAN asso meeting</h3>
                  <h5>For non-profit members only</h5>
                </div>
              </div>
            </div>
            <div class="event">
              <div class="event-inner">
                <div class="event-time">
                  16:00 - 18:00
                </div>
                <div class="event-description">
                  <h3>VideoLAN asso meeting</h3>
                  <h5>For non-profit members only</h5>
                </div>
              </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="sunday">
            <div class="event">
              <div class="event-inner">
                <div class="event-time">
                  09:00 - 09:30
                </div>
                <div class="event-description">
                  <h3>Breakfast</h3>
                </div>
              </div>
            </div>
            <div class="event">
              <div class="event-inner">
                <div class="event-time">
                  09:30 - 12:00
                </div>
                <div class="event-description">
                  <h3>Lightning talks</h3>
                </div>
              </div>
            </div>
            <div class="event">
              <div class="event-inner">
                <div class="event-time">
                  14:00 - 18:00
                </div>
                <div class="event-description">
                  <h3>Unconferences</h3>
                </div>
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
            <p><b><a href="https://goo.gl/forms/YJ0IakCQ7WLyUYgr1">Register <strong>now!</strong></a></b></p>
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
        <p>For active members of the open-source multimedia communities who registered until August 25, we will provide accommodation.</p>
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
