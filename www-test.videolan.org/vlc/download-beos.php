<?php
   $title = "VLC media player for BeOS";
   $lang = "en";
   $date = "16 April 2001";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/mirrordir.php");
?>

<h1>VLC media player for BeOS </h1>

<div id="left">

  <ul>
    <?php pkgitem("Latest BeOS package (0.8.5)",
                  "0.8.5/beos","vlc-0.8.5-beos-i586.zip","vlc"); ?>
  </ul>

  <h2>Older versions</h2>

  <p> Older versions can be found by browsing our FTP site :</p>
    <ul> <?php mirrordir("vlc"); ?> </ul>
</div>

<div id="right">

  <h2>Source code</h2>

  <p>If you want, you can download the
  <a href="download-sources.html">sourcecode</a> of VLC media player.</p>
</div>

<?php
  footer('$Id$');
?>
