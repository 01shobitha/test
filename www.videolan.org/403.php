<?php
   $title = "403 forbidden";
   $menu = array( "vlc", "" );
   $body_color = "red";
   $new_design = true;
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>
<div class="container">
<h1 class="error">403 error: forbidden</h1>

<p>Nice try :-)</p>

<center>
  <?php image( "largeVLC.png", "VLC cone" ); ?>
</center>
</div>
<?php footer('$Id$'); ?>
