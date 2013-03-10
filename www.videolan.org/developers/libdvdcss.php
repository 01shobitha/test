<?php
   $title ="developers - libdvdcss";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1 class="bigtitle">libdvdcss</h1>

<p> <code>libdvdcss</code> is a simple library designed for accessing
DVDs like a block device without having to bother about the decryption. </p>

<h2> Features </h2>

<ul class="bullets">
  <li><b>Portability</b>. Currently supported platforms are GNU/Linux,
  FreeBSD, NetBSD, OpenBSD, BSD/OS, BeOS, Windows 95/98, Windows NT/2000,
  MacOS X, Solaris, and HP-UX. </li>
  <li><b> Simplicity</b>. There are currently 7 functions in the API, and we intend
  to keep this number low. </li>
  <li> <b>Freedom</b>. <code>libdvdcss</code> is released under the General Public
  License, ensuring it will stay free, and used only for free software
  products. </li>
  <li> <b>Just better</b>. Unlike most similar projects, <code>libdvdcss</code>
  doesn't require the region of your drive to be set. </li>
</ul>

<h2>Get libdvdcss</h2>

<p> Last version of <code>libdvdcss</code> is <b>1.2.13</b>. </p>
<p> <code>libdvdcss</code> is available through <a href="http://wiki.videolan.org/Git">Git</a> or
by browsing the <a href="http://www.videolan.org/pub/libdvdcss/">releases</a>.
</p>

<h3>Git checkout</h3>
<p><code># git clone git://git.videolan.org/libdvdcss</code></p>

<p>You can also access the code <a href="http://git.videolan.org/?p=libdvdcss.git">online</a>.</p>

<h2>Changelog and Documentation</h2>
<p> You can see the <a href="libdvdcss/NEWS">release notes</a> and the
<a href="libdvdcss/ChangeLog">ChangeLog</a>.</p>

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
   </td>
   <td>
     Generated by Doxygen
   </td>
</tr>
</table>

<h2>additional information</h2>

<p>If you want to read more on this subject, we publish a <a
href="libdvdcss.txt">french non-technical description of libdvdcss</a>
and we will try to translate it soon.</p>

<h3>For legal documentation, see our <a href="/legal.html">legal page</a></h3>

<?php footer('$Id$'); ?>
