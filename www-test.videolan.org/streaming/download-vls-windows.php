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

<div id="left">

<h2>Latest packages (0.5.3)</h2>

<ul>
  <?php
     pkgitem( "Latest Windows binary package in zip format",
              "0.5.3/win32","vls-0.5.3.zip","vls");
  ?>
</ul>

<h2>Older versions</h2>

<p>Older versions can be found by <a
href="http://download.videolan.org/pub/vls/">browsing</a> our FTP site.</p>

</div>

<div id="right">

<?php panel_start( "orange" ); ?>

<p><span style="color: red;"><b>BIG FAT WARNING: The Windows version of VLS doesn't support much (no DVB, DVD or Capture card inputs).<br> It is strongly advised that you have a look at the streaming features of VLC instead, which are very well supported under Windows.</b></span></p>

<?php panel_end(); ?>

</div>

<?php
  footer('$Id$');
?>
