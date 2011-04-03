<?php
   $title ="developers - libdvbcsa";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1 class="bigtitle">libdvbcsa</h1>

<p> <code>libdvbcsa</code> is a free implementation of the <b>DVB Common Scrambling Algorithm</b> - DVB/CSA - with encryption and decryption capabilities.</p>

<h2> Features </h2>

<ul class="bullets">
  <li> <b>Portability</b>. This library has been successfully tested on
  different processors with 32 bits, 64 bits and 128 bits word width,
  little-endian and big-endian bytes ordering. </li>
  <li> <b>Performance</b>. It comes in two flavors:
   a classical single packet implementation and a faster parallel bitslice implementation.<br />
  The parallel implementation can take advantages of MMX, SSE or Altivec
  instruction sets. Parallel implementation can process Mpeg TS
  packets at 300Mbps or more on recent processors.</li>
  <li> <b>Freedom</b>. <code>libdvbcsa</code> is released under the General Public
  License, ensuring it will stay free, and used only for free software
  products. </li>
  <li> <b>Simplicity</b>. The <b>API</b> comes with only 5 functions fot the single packet
     implementation, and 6 functions for the parallel bitslice implementation.</li>
</ul>

<h2>Get libdvbcsa</h2>
<p>The latest <code>libdvbcsa</code> release is 1.1.0.</p>

<p> <code>libdvbcsa</code> is available through <a href="http://wiki.videolan.org/Subversion">Subversion</a> or
by browsing the <a href="http://download.videolan.org/pub/videolan/libdvbcsa/">releases</a>.
</p>

<h3>Subversion checkout</h3>
<p><code># svn co svn://svn.videolan.org/libdvbcsa/trunk libdvbcsa</code></p>

<h3>Web source broswging</h3>
<p>You can also <a href="http://svn.videolan.org/listing.php?repname=libdvbcsa">browse the code repository</a>.</p>

<h2>Legal</h2>
<p>As <code>libdvbcsa</code> implements a standard, it is completly legal to use it.</p>

<?php footer('$Id: libdvbcsa.php 4100 2007-01-24 20:51:17Z jb $'); ?>
