<?php
   $title = "VideoLAN - mailing-lists subscription";
   $lang = "en";
   $date = "30 March 2001";

   $menu = array( "developers", "main" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<?php
    $subscribe = $_POST["subscribe"];
    $unsubscribe = $_POST["unsubscribe"];
    $from = $_POST["from"];

    $videolanannounce = $_POST["videolanannounce"];
    $vlc = $_POST["vlc"];
    $vlcdevel = $_POST["vlcdevel"];
    $vlsdevel = $_POST["vlsdevel"];
    $streaming = $_POST["streaming"];
    $libdvbpsidevel = $_POST["libdvbpsidevel"];
    $libdvdplaydevel = $_POST["libdvdplaydevel"];
    $libdvdcssdevel = $_POST["libdvdcssdevel"];
    $libdcadevel = $_POST["libdcadevel"];
    $x264devel = $_POST["x264devel"];
    $mpris = $_POST["mpris"];
    $wwwdoc = $_POST["wwwdoc"];


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
echo $ok;
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
            if( $libdvdplaydevel != "" ) {
                $message.= $prefix."subscribe libdvdplay-devel $from\n"; $valid = 1;
            }
            if( $libdcadevel != "" ) {
                $message.= $prefix."subscribe libdca-devel $from\n"; $valid = 1;
            }
            if( $x264devel != "" ) {
                $message.= $prefix."subscribe x264-devel $from\n"; $valid = 1;
            }
            if( $managerdevel != "" ) {
                $message.= $prefix."subscribe manager-devel $from\n"; $valid = 1;
            }
            if( $mpris != "" ) {
                $message.= $prefix."subscribe mpris $from\n"; $valid = 1;
            }
            if( $wwwdoc != "" ) {
                $message.= $prefix."subscribe www-doc $from\n"; $valid = 1;
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

        $header = "From: ecartis@via.ecp.fr\n";
        $message .= "-- \nSent via http://www.videolan.org/lists.html\n";

        mail("ecartis@videolan.org", "(no subject)", $message, $header);

        ?><p> The following request has been sent to <a
        href="mailto:ecartis@videolan.org">listar@videolan.org</a>:
        </p> <pre><?php echo $header."\n".$message; ?></pre> <p> You
        should receive a confirmation request within the next few
        minutes. Reply to this email to confirm you subscription or
        unsubscription.</p> <?php

    } else {

        ?><p> We are afraid your subscription failed for the following
        reason: <b><?php echo $error; ?></b>. </p> <?php

    }

footer('$Id$'); 
?>

