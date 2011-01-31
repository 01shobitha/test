<?php
   $title = "News";
   $lang = "en";
   $body_color = "green";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div class="clearme" style='padding-top: 35px;'>
<h1 class="bigtitle"> News archive </h1>

<div class='longtext'>

<?php
   include($_SERVER["DOCUMENT_ROOT"]."/include/news.php");
   shownews("full",0);
?>

</div>
</div>
<?php footer('$Id$'); ?>
