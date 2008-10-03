<?php
   $title = "VideoLAN - Free Software and Open Source video streaming solution for every OS!";
   $lang = "en";
   $menu = array( "project", "overview" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

   include($_SERVER["DOCUMENT_ROOT"]."/include/news.php");
?>

<h1>The VideoLAN Project</h1>

<div id="left">

<h2>The Project</h2>
  <p>VideoLAN produces
  <a href="http://www.gnu.org/philosophy/free-sw.html">free
  software</a> for video, released under the GNU <a
  href="http://www.gnu.org/copyleft/gpl.html">General Public License</a>. </p>
  <p>It started as a student project at the French <a
  href="http://www.ecp.fr/">École Centrale Paris</a> but is now a worldwide
  project with <a href="/team/index.html">developers</a> from 20 countries.</p>

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
  <?php panel_start("orange"); ?>
    <h1>Contribute!</h1>
    <p>VideoLAN welcomes all contributions to the project! You can contribute
      time (development, documentation, packaging, tests, user support, ...),
      material or even money. See the <a href="contribute.html">contribution
     page</a> for more information.</p>
  <?php panel_end(); ?>
</div>

<?php footer('$Id: index.php 3765 2006-08-16 16:19:00Z dionoea $'); ?>
