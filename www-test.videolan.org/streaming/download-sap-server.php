<?php
   $title = "miniSAPserver - download";
   $lang = "en";
   $date = "14 october 2003";
   $menu = array( "streaming", "" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/mirrordir.php");
?>

<h1> MiniSAPserver for Linux, BSD and Mac OS X</h1>

<div id="fullwidth">

<?php pkgitem( "Latest miniSAPserver tarball (0.3.2) (suggests VLC 0.8.2 or higher)", "0.3.2","minisapserver-0.3.2.tar.bz2","miniSAPserver"); ?>

</div>

<?php
  footer('$Id$');
?>
