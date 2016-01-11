<?php
   $title = "404 not found";
   $menu = array( "vlc", "" );
   $body_color = "red";
   $new_design = true;
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div class="container">
    <h1 class="error">404 error: page not found</h1>

    <p>Please check your links, or contact
    <a href="/contact.html">the VideoLAN team</a> if you think
    there should be something here. </p>

    <script type="text/javascript">
    <!--
        if (document.referrer) {
            document.write( "You've come from\n" + document.referrer);
        }
    -->
    </script>

    <center>
    <?php image( "largeVLC.png", "VLC cone" ); ?>
    </center>
</div>
<?php footer('$Id$'); ?>
