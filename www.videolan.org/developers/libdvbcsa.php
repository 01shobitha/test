<?php
   $title ="VideoLAN developers - libdvbcsa";
   $lang = "en";
      $date = "20 June 2008";
      $menu = array( "developers", "libdvbcsa" );
         require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1>libdvbcsa</h1>

<p> <code>libdvbcsa</code> is a free implementation of the DVB Common Scrambling Algorithm with encryption and decryption capabilities.</p>

<h2> Features </h2>

<ul>
  <li> Portability. This library has been successfully tested on
  different processors with 32 bits, 64 bits and 128 bits word width,
  little-endian and big-endian bytes ordering. </li>
  <li> Performance. It comes in two flavors: a classical single packet
  implementation and a faster parallel bitslice implementation. The
  parallel implementation can take advantages of MMX, SSE or Altivec
  instruction sets. Parallel implementation can process Mpeg TS
  packets at 300Mbps or more on recent processors.</li>
  <li> Freedom. <code>libdvbcsa</code> is released under the General Public
  License, ensuring it will stay free, and used only for free software
  products. </li>
</ul>

<h2>Get libdvbcsa</h2>

<p> <code>libdvbcsa</code> is available through <a href="http://wiki.videolan.org/Subversion">Subversion</a>
</p>

<?php footer('$Id: libdvbcsa.php 4100 2007-01-24 20:51:17Z jb $'); ?>
