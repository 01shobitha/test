<?php
   $title = "VideoLAN - Free Software and Open Source video streaming solution for every OS!";
   $lang = "en";
   $menu = array( "project", "videolan" );
   $additional_css = array("/panels.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

   include($_SERVER["DOCUMENT_ROOT"]."/include/news.php");
?>

<h1>VideoLAN</h1>

<div id="left">

<h2>The VideoLAN Project</h2>
  <p>The VideoLAN project is a project, lead and composed by a team of volunteers,
  that believes in the power of open source when dealing with multimedia.</p>
  <p>VideoLAN produces
  <a href="http://www.gnu.org/philosophy/free-sw.html">free
  software</a> for multimedia, released under the GNU <a
  href="http://www.gnu.org/copyleft/gpl.html">General Public License</a>. </p>

  <h3>History</h3>
  <p>The project started as a student project at the French <a
  href="http://www.ecp.fr/">École Centrale Paris</a>, in 1996.
  After a complete rewrite in 1998, it became Open Source, thanks to the agreement
  of the École Centrale Paris, in 2001.</p>
  <p>The project started to open up to developers outside of the École.
  It is now a worldwide project with <a href="/videolan/team/">developers</a> from 20 countries.</p>
  <p>Since 2009, the project is completly separated from École Centrale Paris,
  and is backed up by an autonomous non-profit organisation.</p>

<h2>The VideoLAN non-profit organisation</h2>
<p>The VideoLAN project is backed up by the VideoLAN organisation, based in France.</p>
<p>The VideoLAN non-profit organisation has a comittee and members that are part of the VideoLAN project.</p>
<p>The current board of VideoLAN is composed by:</p>
<ul class="bullets">
<li>Chairman: Jean-Baptiste Kempf,</li>
<li>Treasurer: Rémi Duraffort,</li>
<li>Secretary: Antoine Cellerier.</li>
</ul>

<h2>Hosted projects</h2>

<p>Although <a href="/">VLC media player</a> is the most well-known
VideoLAN project, we do host several other video-related projects,
mostly aimed at developers:</p>

<ul class="bullets">

<li><a href="/developers/libdvdcss.html">libdvdcss</a>,
a C library to access DVDs without having to bother about the
decryption.</li>

<li><a href="/developers/libdvbpsi.html">libdvbpsi</a>, a
C library to decode and generate MPEG TS and DVB PSI tables.</li>

<li><a href="/developers/x264.html">x264</a>, a H264 /
AVC encoder.</li>

<li><a href="/developers/libdca.html">libdca</a>, a DTS
Coherent Acoustics decoder.</li>

<li><a href="/developers/libdvdplay.html">libdvdplay</a>,
a DVD navigation library.</li>

<li><a href="/developers/libdvbcsa.html">libdvbcsa</a>,
a free implementation of the DVB Common Scrambling Algorithm.</li>

<li><a href="/vlc/streaming.html">VLS (VideoLAN Server)</a>, our legacy
streaming server, which is now mostly replaced by VLC.</li>

<li><a href="/vlma">VLMa (VideoLAN Manager)</a>,
a Java application to manage multiple VLC instances through their telnet interface.</li>

<li><a href="/vlc/skineditor.html">VLC Skin Editor</a>, a Java application to create skins for VLC media player.</li>

<li><a href="/projects/dvblast.html">DVBlast</a>,
a simple, fast, reliable and powerful streaming application for linux-dvb devices.</li>


</ul>

<h2>Hosted SVN projects</h2>

<p>The project is also helping some projects by providing Subversion server:</p>

<ul class="bullets">

<li><a href="http://liba52.sourceforge.net/">liba52</a>, a free ATSC A/52 stream decoder.</li>

<li><a href="http://libmpeg2.sourceforge.net/">libmpeg2</a>, a free MPEG-2 video stream decoder</li>

</ul>


<h2>Events</h2>

<p>We regularly attend computing events, like FOSDEM (Free-software
and Open Source Developers European Meeting). We generally come back
with some <a href="/events">photos and stories</a>.</p>

</div>

<div id="right">
<img src="/images/videolan-logo-big.png" style="border: 1px #D4E0F7 solid;" alt="VideoLAN"/>
  <?php panel_start("orange"); ?>
    <h1>Contribute to VideoLAN!</h1>
    <p>VideoLAN welcomes all contributions to the project! You can contribute
      time (development, documentation, packaging, tests, user support, ...),
      material or even money. See the <a href="/contribute.html">contribution
     page</a> for more information.</p>
  <?php panel_end(); ?>
  <?php panel_start("green"); ?>
  <h1>April</h1>
  <p>VideoLAN is a proud member of the <a href="http://april.org">April association</a></p>
  <a href="http://april.org"><img src="/images/partners/april_logo.png" alt="April"/></a>
  <?php panel_end(); ?>

  <?php panel_start("gray"); ?>
<h1>Contacting us</h1>

<p>For VLC media player user-related questions,
    please see our <a href="/support">Support section</a>
    and the users <a href="/support/lists.html">Mailing-lists</a>.</p>
<p>If you want to contact the VideoLAN team, about partnerships, legal aspects or any non-support related questions , please write to 
<a href="mailto:videolan@REMOVETHIS@videolan.org">videolan - at - videolan.org</a> in French or English.</p>
<p>In case you write an article about VideoLAN, we would be very glad to
have a copy of it to add to our press book. You can send us the article
at the following address:</p>

<pre  style="margin-left: 60px;">
VideoLAN
18, rue Charcot
75013 Paris
France
</pre>
<?php panel_end(); ?>

</div>

<?php footer('$Id: index.php 3765 2006-08-16 16:19:00Z dionoea $'); ?>
