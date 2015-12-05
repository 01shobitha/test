<?php
   $title ="developers - libdvbpsi";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1 class="bigtitle">libdvbpsi</h1>

<p> <code>libdvbpsi</code> is a simple library designed for decoding and
generation of MPEG TS and DVB PSI tables according to standards ISO/IEC 13818
and ITU-T H.222.0.</p>

<h2>Current features</h2>

<ul class="bullets">
  <li> Bouquet Association Table (BAT), decoder and generator. </li>
  <li> Conditional Access Table (CAT), decoder and generator. </li>
  <li> EPG Information Table (EIT), decoder and generator. </li>
  <li> Network Information Table (NIT), decoder and generator. </li>
  <li> Program Association Table (PAT), decoder and generator. </li>
  <li> Program Map Table (PMT), decoder and generator. </li>
  <li> Section Description Table (SDT), decoder and generator. </li>
  <li> Splice Information Section Table (SIS), decoder and generator. </li>
  <li> TOT Table (TOT), decoder and generator. </li>
  <li> All MPEG 2 descriptors, decoders and generators. </li>
  <li> ATSC EIT, ETT, MGT, STT and VCT decoders.</li>
  <li> Supported platforms GNU/Linux, *BSD, Windows and MacOS X. </li>
  <li> Version 0.2.0 and up have LGPL v2.1 license for easy integration in applications. </li>
  <li> Versions prior to 0.2.0 are released under GPLv2. </li>
</ul>

<h2>Get libdvbpsi</h2>

<p>The latest <code>libdvbpsi</code> (LGPL v2.1) release <a href="http://www.videolan.org/pub/libdvbpsi/1.3.0/"><b>version 1.3.0</b></a>. Note: the API has changed since version 0.2.2 you need to update your applications.</p>
<p>The latest <code>libdvbpsi</code> GPL v2 release is <a href="http://www.videolan.org/pub/libdvbpsi/0.1.7/"><b>version 0.1.7</b></a>.</p>
<p> <code>libdvbpsi</code> source code is available through <a href="http://wiki.videolan.org/git">git</a> at:<br />
<code>git clone http://git.videolan.org/git/libdvbpsi.git</code><br />
The stable release source code archive is available through:<br />
<code>git checkout -t origin/branch/1.3.0-bugfix</code>
</p>

<p>All releases can be found by browsing the <a href="http://www.videolan.org/pub/libdvbpsi/"><b>releases</b></a>.</p>
<p>The source code can browsed at  <a href="http://git.videolan.org/?p=libdvbpsi.git">git.videolan.org</a>.</p>

<h2>Mailing list</h2>
<p>You can discuss about libdvbpsi on the <a href="http://mailman.videolan.org/listinfo/libdvbpsi-devel">libdvbpsi-devel mailing list</a>.</p>

<h2>Documentation</h2>

<table border="0">
<tr>
  <td class="type"><b>Document</b></td>
  <td class="type"><b>Status</b></td>
  <td class="type"><b>Download</b></td>
  <td class="type"><b>Maintainer</b></td>
</tr>

<tr>
  <td class="category">Libdvbpsi API documentation</td>
   <td class="yes">
     Up-to-date
   </td>
  <td>
     <a href="libdvbpsi/doc/doxygen/html/">HTML</a>
     <a href="libdvbpsi/doc/doxygen/latex/refman.dvi">DVI</a>
     <a href="libdvbpsi/doc/doxygen/latex/refman.ps">PS</a>
   </td>
   <td>
     Generated by Doxygen
   </td>
</tr>

</table>

<?php footer('$Id$'); ?>
