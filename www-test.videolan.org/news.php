<?php
   $title = "News";
   $lang = "en";
   $menu = array( "project", "news" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>


<h1> News archive </h1>

<br />

<div style="background-color: white; padding: 30px;">

<?php
   include($_SERVER["DOCUMENT_ROOT"]."/include/news.php");
   shownews("full",0);
?>

</div>
<?php footer('$Id$'); ?>
