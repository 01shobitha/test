<?php
   $title ="developers - libdvbcsa";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1 class="bigtitle">libdvbcsa</h1>

<p> <code>libdvbcsa</code> is a free implementation of the DVB Common Scrambling Algorithm with encryption and decryption capabilities.</p>

<h2> Features </h2>

<ul class="bullets">
  <li> <b>Portability</b>. This library has been successfully tested on
  different processors with 32 bits, 64 bits and 128 bits word width,
  little-endian and big-endian bytes ordering. </li>
  <li> <b>Performance</b>. It comes in two flavors: a classical single packet
  implementation and a faster parallel bitslice implementation. The
  parallel implementation can take advantages of MMX, SSE or Altivec
  instruction sets. Parallel implementation can process Mpeg TS
  packets at 300Mbps or more on recent processors.</li>
  <li> <b>Freedom</b>. <code>libdvbcsa</code> is released under the General Public
  License, ensuring it will stay free, and used only for free software
  products. </li>
</ul>

<h2>Get libdvbcsa</h2>

<p> <code>libdvbcsa</code> is available through <a href="http://wiki.videolan.org/Subversion">Subversion</a> or
by browsing the <a href="http://download.videolan.org/pub/videolan/libdvbcsa/">releases</a>.
</p>

<?php footer('$Id: libdvbcsa.php 4100 2007-01-24 20:51:17Z jb $'); ?>
