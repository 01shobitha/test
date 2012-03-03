<?php
   $title ="developers - biTStream";
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1 class="bigtitle">biTStream</h1>

<p> <code>biTStream</code> is a set of C headers allowing a simpler access to binary
structures such as specified by MPEG, DVB, IETF, etc. </p>

<h2>biTStream vs. libdvbpsi</h2>

<p>libdvbpsi converts binary structures to C structures. Lists are implemented
with chained lists of C structures.</p>

<p>biTStream is lower level, and more efficient: fewer memory allocations,
fewer memory copies. It also features a better separation between layers
and specifications.</p>

<h2>Current features</h2>

<p><code>biTStream</code> currently implements the following specifications:</p>
<ul class="bullets">
  <li> ISO/IEC 13818-1 (MPEG-2 systems) </li>
  <li> ETSI EN 300 468 (Service Information in DVB systems) </li>
  <li> IETF RFC 2550 (Real Time Protocol) </li>
  <li> ETSI EN 50 221 (Common Interface Specification) </li>
  <li> ETSI TS 103 194 (DVB Simulcrypt) </li>
</ul>

<p>In particular it supports the following MPEG and DVB structures (parsers and writers):</p>
<ul class="bullets">
  <li> Program Allocation Table (PAT) </li>
  <li> Conditional Access Table (CAT) </li>
  <li> Transport Stream Descriptor Table (TSDT) </li>
  <li> Program Map Table (PMT) </li>
  <li> Network Information Table (NIT) </li>
  <li> Bouquet Association Table (BAT) </li>
  <li> Service Definition Table (SDT) </li>
  <li> Event Information Table (EIT) </li>
  <li> Time and Date Table (TDT) </li>
  <li> Time Offset Table (TOT) </li>
  <li> Running Status Table (RST) </li>
  <li> Stuffing Table (ST) </li>
  <li> Discontinuity Information Table (DIT) </li>
  <li> Selection Information Table (SIT) </li>
  <li> MPEG descriptors 0x02 to 0x12 and 0x1b to 0x2c </li>
  <li> DVB descriptors 0x40 to 0x6e and 0x7a to 0x7c </li>
</ul>

<h2>Get biTStream</h2>

<p>The latest <code>biTStream</code> release is <a href="http://www.videolan.org/pub/videolan/bitstream/1.0/"><b>version 1.0</b></a>.</p>
<p> <code>biTStream</code> is available through <a href="http://wiki.videolan.org/git">git</a> at:<br />
<code>git clone git://git.videolan.org/bitstream.git</code></p>

<p>All releases can be found by browsing the <a href="http://www.videolan.org/pub/videolan/bitstream/"><b>releases</b></a>.</p>
<p>The source code can browsed at  <a href="http://git.videolan.org/?p=bitstream.git">git.videolan.org</a>.</p>

<h2>Extending biTStream</h2>

<p>A lot of MPEG and DVB tables and descriptors are not implemented yet, or
are incomplete. Patches are very welcome.</p>

<p>Though biTStream is originally targeted at video applications in general
and MPEG-2 transport stream in particular, the same principle can be
followed with other binary data types, and patches are welcome here too.
Just try to follow a coherent directory naming.</p>

<p>biTStream is released under the MIT license because since it is a
direct application of standards, there is no added value. The MIT license
doesn't require you to contribute back your changes, and you can use
biTStream in proprietary applications. However, if you add new structures,
or fix bugs in current structures, you'd be very nice to contribute them
(again, there is no point in concealing this). Thanks.</p>

<h2>Mailing list</h2>
<p>There is no mailing-list dedicated to biTStream at present. For the moment you can discuss about biTStream on the <a href="/developers/lists.html">dvblast-devel</a> mailing list.</p>

<?php footer('$Id: bitstream.php 7045 2011-11-03 13:48:50Z jpsaman $'); ?>
