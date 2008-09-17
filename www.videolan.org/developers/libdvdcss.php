<?php
   $title ="VideoLAN developers - libdvdcss";
   $lang = "en";
   $menu = array( "developers", "libdvdcss" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1>libdvdcss</h1>

<p> <code>libdvdcss</code> is a simple library designed for accessing
DVDs like a block device without having to bother about the decryption. </p>

<h2> Features </h2>

<ul>
  <li> Portability. Currently supported platforms are GNU/Linux,
  FreeBSD, NetBSD, OpenBSD, BSD/OS, BeOS, Windows 95/98, Windows NT/2000,
  MacOS X, Solaris, and HP-UX. </li>
  <li> Simplicity. There are currently 7 functions in the API, and we intend
  to keep this number low. </li>
  <li> Freedom. <code>libdvdcss</code> is released under the General Public
  License, ensuring it will stay free, and used only for free software
  products. </li>
  <li> Just better. Unlike most similar projects, <code>libdvdcss</code>
  doesn't require the region of your drive to be set. </li>
</ul>

<h2>Get libdvdcss</h2>

<p> <code>libdvdcss</code> is available through <a href="http://wiki.videolan.org/Subversion">Subversion</a> or
by browsing the <a href="http://www.videolan.org/pub/libdvdcss/">releases</a>.
</p>

<p> You can also see the <a href="libdvdcss/NEWS">release notes</a> and the <a
href="libdvdcss/ChangeLog.html">ChangeLog</a>.</p>

<h2>Documentation</h2>

<table border="0">
<tr>
  <td class="type"><b>Document</b></td>
  <td class="type"><b>Status</b></td>
  <td class="type"><b>Download</b></td>
  <td class="type"><b>Maintainer</b></td>
</tr>

<tr>
  <td class="category">Libdvdcss API documentation</td>
   <td class="yes">
     Up-to-date
   </td>
  <td>
     <a href="libdvdcss/doc/html/">HTML</a>
     <a href="libdvdcss/doc/latex/refman.dvi">DVI</a>
     <a href="libdvdcss/doc/latex/refman.ps">PS</a>
   </td>
   <td>
     Generated by Doxygen
   </td>
</tr>
</table>

<?php footer('$Id$'); ?>
