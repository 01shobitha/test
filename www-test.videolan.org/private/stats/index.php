<?php
   $title = "VideoLAN - Statistics";
   $lang = "en";
   $menu = array( "home", "overview" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

   include($_SERVER["DOCUMENT_ROOT"]."/include/news.php");
?>

<div id="fullwidth">

<h1>Web Statistics</h1>

<?php include( $_SERVER["DOCUMENT_ROOT"]."/private/stats/web.inc" ); ?>

<h1>Download statistics</h1>

<p><a href="/stats/downloads.html">View download statistics</a></p>

</div>

<?php footer('$Id: index.php 3321 2005-06-25 13:53:44Z zorglub $'); ?>

