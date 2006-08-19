<?php
   $title = "VideoLAN Server source code";
   $lang = "en";
   $date = "9 October 2001";
   $menu = array( "streaming", "" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/mirrordir.php");
?>

<h1> VLS source code </h1>

<div id="left">

<h2>Tarballs</h2>

  <?php pkgitem( "Latest VLS source code tarball (0.5.6)",
                 "0.5.6","vls-0.5.6.tar.gz","vls"); ?>

  <p><a href="http://download.videolan.org/pub/videolan/vls/0.5.6/"><i>browse the list</i></a></p>

<h3> Latest required libraries</h3>

  <?php
     pkgitem("libdvbpsi3 0.1.4", "0.5.6/contrib","libdvbpsi3-0.1.4.tar.gz","vls","(MPEG TS and DVB PSI tables library)");
     pkgitem("libdvdcss 1.2.8", "0.5.6/contrib","libdvdcss-1.2.8.tar.gz","vls","(DVD decryption library)");
     pkgitem("libdvdread 0.9.4", "0.5.6/contrib","libdvdread-0.9.4.tar.gz","vls","(DVD reading library)");
     pkgitem("libdvb 0.2.2", "0.5.6/contrib","libdvb-0.2.2.tar.gz","vls","(DVB library)");
  ?>

  <p><a href="http://download.videolan.org/pub/videolan/vls/0.5.6/contrib"><i>browse the list</i></a></p>

<h2>Older versions</h2>

<p>Older versions can be found by <a
href="http://download.videolan.org/pub/vls/">browsing</a> our FTP site.</p>

</div>

<div id="right">

<?php panel_start( "blue" ); ?>
<h1>SVN</h1>

<p> Find more about the SVN source code repository on the <a
href="http://developers.videolan.org/">developers website</a>. </p>

<?php panel_end(); ?>

<?php
  footer('$Id$');
?>
