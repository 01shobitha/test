<?php
   $title ="DVBlast - a new DVB gateway";
   $lang = "en";
   $menu = array( "projects", "DVBlast" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1>DVBlast</h1>

<h2>Are you looking for live streaming? Don't look any further!</h2>

<p> <code>DVBlast</code> is a simple and powerful MPEG-2/TS demux and
streaming application with several input methods:</p>
<ul class="panel-blue-bullet">
  <li> linux-dvb-supported cards (DVB-S, DVB-S2, DVB-C, DVB-T...) with or without CI interface</li>
  <li> DVB-ASI cards (from <a href="http://www.computermodules.com/"> Computer Modules</a>)</li>
  <li> UDP or RTP stream carrying a transport stream</li>
</ul>

<p>It outputs one or several RTP streams carrying transport streams with:</p>
<ul class="panel-blue-bullet">
  <li> hardware or software PID filtering</li>
  <li> PID-based or service-based demultiplexing</li>
  <li> optional descrambling via CAM device</li>
  <li> EIT, SDT and TDT pass-through for EPG information</li>
</ul>

<p> <code>DVBlast</code> is written to be the core of a custom IRD, CID,
or ASI gateway, based on a PC with a Linux-supported card. It is very
lightweight and stable, designed for 24/7 operation.</p>

<p> <code>DVBlast</code> does <strong>not</strong> do any kind of
processing on the elementary streams, such as transcoding, PID remapping
or remultiplexing. If you were looking for these features, switch to
VLC. It does <strong>not</strong> stream from plain files (have a look
at multicat instead).</p>

<h2>Current features</h2>

<ul class="panel-blue-bullet">
  <li> Lightweight program designed for extreme memory and CPU conditions</li>
  <li> Only one dependancy: <em><a href="/developers/libdvbpsi.html">libdvbpsi</a></em></li>
  <li> CAM menus (MMI) support via an external application</li>
  <li> The configuration file describing outputs can be reloaded without losing a single packet</li>
  <li> Support for the new S2API of linux-dvb</li>
  <li> IPv6 network support</li>
  <li> UDP rather than RTP output for IPTV STBs which don't support RTP</li>
</ul>

<h2>Get DVBlast</h2>

<p> The latest official version of <code>DVBlast</code>
is numbered 1.2, and is available via <a
href="http://downloads.videolan.org/pub/videolan/dvblast/1.2/dvblast-1.2.tar.bz2">HTTP</a>
or <a
href="ftp://ftp.videolan.org/pub/videolan/dvblast/1.2/dvblast-1.2.tar.bz2">FTP</a>.</p>

<p> Hackers can participate to the development using <a
href="http://wiki.videolan.org/Subversion">Subversion</a>.
The code can be found at <code>svn://svn.videolan.org/dvblast</code> and you can
<a href="http://svn.videolan.org/listing.php?repname=DVBlast&amp;path=%2F&amp;sc=0">browse the source online</a>.</p>

<p>User support is handled in the <a
href="/support/lists.html">streaming</a>
mailing-list. There is also a developer-oriented <a
href="/developers/lists.html">mailing-list</a>.</p>

<br />
<br />
<br />

<?php footer('$Id$'); ?>
