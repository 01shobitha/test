<?php
   $title = "VLC media player for BeOS";
   $lang = "en";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

<h1>VLC media player for BeOS </h1>

<div id="left">

  <ul><li>
    <?php pkgitem("Latest BeOS package (0.8.6c)",
                  "0.8.6c/BeOS","vlc-0.8.6c-BeOS.zip","vlc"); 
          pkgitem("Latest ZETA package (0.8.6c)",
                  "0.8.6c/BeOS","vlc-0.8.6c-Zeta.zip","vlc"); ?>
  </li></ul>

  <h2>Older versions</h2>
   <?php browse_old( "vlc" );?>

</div>
<div id="right">

  <h2>Source code</h2>

  <p>If you want, you can download the
  <a href="download-sources.html">source code</a> of VLC media player.</p>
</div>

<?php
  footer('$Id$');
?>
