<?
   $title = "VideoLAN - Statistics";
   $lang = "en";
   $date = "06 April 2002";
   $menu = array( "home", "overview" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");

   include($_SERVER["DOCUMENT_ROOT"]."/include/news.php3");
?>

<h1>Web Statistics</h1>

<?php include( $_SERVER["DOCUMENT_ROOT"]."/stats/web.inc" ); ?>

<?php footer('$Id: index.php 3321 2005-06-25 13:53:44Z zorglub $'); ?>

