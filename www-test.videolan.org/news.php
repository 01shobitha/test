<?php
   $title = "News";
   $lang = "en";
   $body_color = "green";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>


<h1 class="bigtitle"> News archive </h1>

<div class='longtext'>

<?php
   include($_SERVER["DOCUMENT_ROOT"]."/include/news.php");
   shownews("full",0);
?>

</div>
<?php footer('$Id$'); ?>
