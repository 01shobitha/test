<?php
   $title = "VideoLAN Server for Windows";
   $lang = "en";
   $date = "9 October 2001";
   $menu = array( "streaming", "" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/mirrordir.php");
?>

<h1> VLS for Windows </h1>

<p><span style="color: red;"><b>BIG FAT WARNING: The Windows version of VLS doesn't support much (no DVB, DVD or Capture card inputs).<br> It is strongly advised that you have a look at the streaming features of VLC instead, which are very well supported under Windows.</b></span></p>

<h2>Latest packages (0.5.3)</h2>

<p>Latest Windows binary package in zip format:</p>

<ul>
  <?php
     pkgitem("0.5.3/win32","vls-0.5.3.zip","vls");
  ?>
</ul>

<h2>Older versions</h2>

<p>Older versions can be found by <a
href="http://download.videolan.org/pub/vls/">browsing</a> our FTP site.</p>

<?php
  footer('$Id$');
?>
