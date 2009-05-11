<?php
   $title ="DVBlast - a new DVB gateway";
   $lang = "en";
   $menu = array( "project", "DVBlast" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1>DVBlast</h1>

<h2>Are you looking for live streaming? Don't look any further!</h2>

<p> <code>DVBlast</code> is a simple and powerful streaming application
based on the linux-dvb API. It opens a DVB device, tunes it, places
PID filters, configures a CAM module, and demultiplexes the packets to
several RTP outputs.</p>

<p> <code>DVBlast</code> is designed to be the core of a custom IRD or CID,
based on a PC with Linux-supported DVB cards.</p>

<p> <code>DVBlast</code> does <strong>not</strong> do any kind of
processing on the elementary streams, such as transcoding, PID remapping
or remultiplexing. it does <strong>not</strong> stream from plain files,
only DVB devices. If you were looking for these features, switch to
VLC.</p>

<h2>Current features</h2>

<ul>
  <li> Lightweight program designed for extreme memory and CPU conditions</li>
  <li> Only one dependancy : libdvbpsi</li>
  <li> CAM menus (MMI) support via an external application</li>
  <li> The configuration file describing outputs can be reloaded without
losing a single packet</li>
  <li> PID-based or service-based filtering<li>
  <li> Support for the new S2API of linux-dvb (compile option)</li>
</ul>

<h2>Get DVBlast</h2>

<p> The latest official version of <code>DVBlast</code>
is numbered 1.0, and is available via <a
href="http://downloads.videolan.org/pub/videolan/dvblast/1.0/dvblast-1.0.tar.bz2">HTTP</a>
or <a
href="ftp://ftp.videolan.org/pub/videolan/dvblast/1.0/dvblast-1.0.tar.bz2">FTP</a>.</p>

<p> Hackers can participate to the development using <a
href="http://wiki.videolan.org/Subversion">Subversion</a>.</p>

<?php footer('$Id: dvblast.php 4771 2008-09-17 21:05:06Z dionoea $'); ?>
