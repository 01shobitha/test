<?php
   $title = "VideoLAN - mailing-lists subscription";
   $lang = "en";
   $date = "30 March 2001";
   $menu = array( "support", "" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1> User mailing-lists subscription </h1>

<div id="fullwidth">

<?php
    $from = $_POST["from"];
    $videolanannounce = $_POST["videolanannounce"];
    $vlc = $_POST["vlc"];
    $streaming = $_POST["streaming"];
    $subscribe =$_POST["subscribe"];
    $unsubscribe =$_POST["unsubscribe"];

    $valid = 0;
    $message = "";
    $ok = 0;

    if( $subscribe != "" ) {
        if( $unsubscribe != "" ) {
            $error = "invalid submit query";
            $prefix = "";
        } else {
            $ok = 1;
        }
    } else {
        if( $unsubscribe != "" ) {
            $ok = 1;
            $prefix = "un";
        } else {
            $error = "invalid submit query";
        }
    }

    if( $ok != "" ) {
        /* Lame syntax checking. More than enough. */
        $from = ereg_replace("[\\\\|\\(\\)\n]","",$from);

        if( ereg( "[a-z0-9]+.*@([a-z0-9-]+\.)*[a-z0-9-]+[\.]*$", $from ) ) {
            if( $videolanannounce != "" ) {
                $message.= $prefix."subscribe videolan-announce $from\n"; $valid = 1;
            }
            if( $vlc != "" ) {
                $message.= $prefix."subscribe vlc $from\n"; $valid = 1;
            }
            if( $streaming != "" ) {
                $message.= $prefix."subscribe streaming $from\n"; $valid = 1;
            }
            if( $vlcdevel != "" ) {
                $message.= $prefix."subscribe vlc-devel $from\n"; $valid = 1;
            }
            if( $vlsdevel != "" ) {
                $message.= $prefix."subscribe vls-devel $from\n"; $valid = 1;
            }
            if( $vlcsdevel != "" ) {
                $message.= $prefix."subscribe vlcs-devel $from\n"; $valid = 1;
            }
            if( $libdvbpsidevel != "" ) {
                $message.= $prefix."subscribe libdvbpsi-devel $from\n"; $valid = 1;
            }
            if( $libdvdcssdevel != "" ) {
                $message.= $prefix."subscribe libdvdcss-devel $from\n"; $valid = 1;
            }
            if( !$valid ) {
                $error = "no mailing-list specified";
            }
        } else {
            $error = "invalid e-mail address";
        }
    } else {
        $error = "no submission";
    }

    if( $valid ) {

        $header = "From: ecartis@videolan.org\n";
        $message .= "-- \n";
        $message .= "Sent via http://www.videolan.org/support/lists.html\n";

        mail("ecartis@videolan.org", "(no subject)", $message, $header);

        ?><p> The following request has been sent to <a
        href="mailto:ecartis@videolan.org">ecartis@videolan.org</a>:
        </p> <pre><?php echo $header."\n".$message; ?></pre> <p> You
        should receive a confirmation request within the next few
        minutes. Reply to this email to confirm you subscription or
        unsubscription.</p> <?php

    } else {

        ?><p> We are afraid your subscription failed for the following
        reason: <b><?php echo $error; ?></b>. </p> <?php

    }
?>

</div>

<?php footer('$Id$'); ?>
