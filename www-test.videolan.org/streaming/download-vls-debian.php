<?php
   $title = "VideoLAN Server for Debian GNU/Linux";
   $lang = "en";
   $date = "9 October 2001";
   $menu = array( "streaming", "" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
?>

<?php
function pkgitem($version,$name)
{
  echo '<li><a href="http://download.videolan.org/pub/videolan/'.
       $version.'/'.$name.'"><code>'.$name.'</code></a></li>';
}
?>

<h1> VLS for Debian GNU/Linux </h1>

<div id="fullwidth">

<h2>Install VLS with apt-get</h2>

<p> Add the following lines to your <b>/etc/apt/sources.list</b>:</p>

<pre>
   deb ftp://ftp.videolan.org/pub/videolan/debian $(ARCH)/
   deb-src ftp://ftp.videolan.org/pub/videolan/debian sources/
</pre>

<p> For a normal install, do :</p>

<pre>
   # apt-get update
   # apt-get install vls-dvd libdvdcss2
</pre>

<h2>Debian packages for i386</h2>

<p>Here is the complete list of the latest Debian x86 packages (0.4.0):</p>

<ul>
  <?php
     pkgitem("vls/0.4.0/deb","vls_0.4.0-1_i386.deb");
  ?>
</ul>
<p> Input plugins:</p>
<ul><?php
     pkgitem("vls/0.4.0/deb","vls-dvd_0.4.0-1_i386.deb");
     pkgitem("vls/0.4.0/deb","vls-dvb_0.4.0-1_i386.deb");
?></ul>
<p>Librairies:</p>
<ul><?php
     pkgitem("libdvdcss/1.2.6/deb","libdvdcss2_1.2.6-1_i386.deb");
     pkgitem("libdvdread/0.9.3/deb","libdvdread2_0.9.3-2_i386.deb");
     pkgitem("libdvbpsi/0.1.2/deb","libdvbpsi1_0.1.2-2_i386.deb");
?></ul>
<ul>
  <li><a href="http://download.videolan.org/pub/videolan/vls/0.4.0/deb/"><i>browse the list</i></a></li>
</ul>

<h2>Older versions</h2>

<p>Older versions can be found by <a
href="http://download.videolan.org/pub/vls/">browsing</a> our FTP site.</p>

</div>

<?php
  footer('$Id$');
?>
