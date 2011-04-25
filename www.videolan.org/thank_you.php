<?php
$title = "Thank you";
$menu = array( "project", "contribute" );
require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="fullwidth">
    <h1 class="bigtitle"> Thank You! </h1>
    <h2>You are awesome!</h2>
    <p>Every donation matters a lot to us!</p>
    <p>As we are all volunteers, we really mean it! <br />
       We cannot express enough our thank you, so here is an <b>awesome</b> cone for you:</p>
    <?php image( 'goodies/Cone-Video-small.png', 'Large Orange VLC media player Traffic Cone Logo', 'projectImg' ); ?>
</div>


<?php footer('$Id: contribute.php 6882 2011-04-25 12:17:24Z jb $'); ?>
