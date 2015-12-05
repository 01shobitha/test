<?php
   $title ="libbdplus";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   $libbdplus_version = "0.1.2";
?>

<h1 class="bigtitle">libbdplus</h1>

<p> <code>libbdplus</code> is a <b>research project</b> to implement the
<a href="http://www.bdplusllc.com/">BD+ System Specifications</a>.<br />
This <b>research</b> project provides, through an <b>open-source</b> library, a way to understand how
the <a href="http://en.wikipedia.org/wiki/BD+">BD+</a> works.</p>

<?php echo "<p>Latest release is <b>libbdplus $libbdplus_version</b>.</p>"; ?>

<p><b>NB:</b> this project <b>doesn't offer any key, configuration file or certificate</b> that could be used to decode
encrypted copyrighted material.</p>

<h2> Features </h2>

<ul class="bullets">
  <li><b>Portability:</b> Currently supported platforms are GNU/Linux, Windows, MacOS X. The main dependency is libgcrypt for all cryptographic functions.</li>
  <li><b>Freedom:</b> <code>libbdplus</code> is released under a Free Software license, ensuring it will stay free. </li>
  <li><b>Legal:</b> <code>libbdplus</code> does not include any key or certificate and respects copyright.</li>
  <li><b>Fun:</b> <code>libbdplus</code> is a fun project to hack on, because it is in its starting phase.</li>
</ul>

<h2>Get libbdplus</h2>

<p>You can get <code>libbdplus</code> latest release on our ftp:
<?php echo "<a href='ftp://ftp.videolan.org/pub/videolan/libbdplus/$libbdplus_version/libbdplus-$libbdplus_version.tar.bz2'>libbdplus $libbdplus_version</a>.</p>"; ?>

<p> <code>libbdplus</code> is also available through <a href="http://wiki.videolan.org/Git">Git</a> at:<br />
<code>git clone http://git.videolan.org/git/libbdplus.git</code></p>
<p>You can browse the source code at  <a href="http://git.videolan.org/?p=libbdplus.git">git.videolan.org</a>.</p>

<h2>Mailing list</h2>
<p>You can discuss about libbdplus on the <a href="http://mailman.videolan.org/listinfo/libbdplus-devel">libbdplus-devel mailing list</a>.</p>

<h1>Legal</h1>
<p><code>libbdplus</code> does not infringe DRM's right or copyright. See more on our <a href="/legal.html">legal page</a>.</p>

<h3>Legal Contact</h3>
<p>Si vous avez le moindre problème légal (If you have ANY issue with the legal part):
<a href="/contact.html">Contact</a></p>

<h2>Documentation</h2> 

<?php /*
<table border="0">
<tr>
  <td class="type"><b>Document</b></td>
  <td class="type"><b>Status</b></td>
  <td class="type"><b>Download</b></td>
  <td class="type"><b>Maintainer</b></td>
</tr>

<tr>
  <td class="category">libbluray API documentation</td>
   <td class="yes">
     Up-to-date
   </td>
  <td>
     <a href="libbluray/doc/html/">HTML</a>
     <a href="libbluray/doc/latex/refman.dvi">DVI</a>
     <a href="libbluray/doc/latex/refman.ps">PS</a>
   </td>
   <td>
     Generated by Doxygen
   </td>
</tr>
</table> */ ?>



<?php footer('$Id: libbdplus.php 6130 2010-05-28 19:12:07Z ivoire $'); ?>
