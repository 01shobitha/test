<?php
   $title = "VideoLAN - mailing-lists subscription";
   $lang = "en";
   $menu = array( "support", "lists" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1> User mailing-lists subscription </h1>

<div id="fullwidth">

<?php
    $from = $_POST["from"];
    $videolanannounce = $_POST["videolanannounce"];
    $vlc = $_POST["vlc"];
    $streaming = $_POST["streaming"];
    $vlcdevel = $_POST["vlcdevel"];
    $vlsdevel = $_POST["vlsdevel"];
    $libdvbpsidevel = $_POST["libdvbpsidevel"];
    $libdvdcssdevel = $_POST["libdvdcssdevel"];
    $libdvdplaydevel = $_POST["libdvdplaydevel"];
    $libdcadevel = $_POST["libdcadevel"];
    $x264devel = $_POST["x264devel"];
    $mpris = $_POST["mpris"];
    $wwwdoc = $_POST["wwwdoc"];
    
    $subscribe =$_POST["subscribe"];
    $unsubscribe =$_POST["unsubscribe"];

    $valid = 0;
    $message = "";
    $ok = 0;
    $domain = "@videolan.org";

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
//                $message.= $prefix."subscribe videolan-announce $from\n"; $valid = 1;
		$to="videolan-announce-".$prefix."subscribe".$domain;$valid = 1;

	        $header = "from: ".$from."\n"; $message = "-- \n";
	        $message .= "sent via http://www.videolan.org/support/lists.html\n";
	        mail($to, "(no subject)", $message, $header);

            }
            if( $vlc != "" ) {
                //$message.= $prefix."subscribe vlc $from\n"; $valid = 1;
		$to="vlc-".$prefix."subscribe".$domain;$valid = 1;
	        $header = "from: ".$from."\n"; $message = "-- \n";
	        $message .= "sent via http://www.videolan.org/support/lists.html\n";
	        mail($to, "(no subject)", $message, $header);

            }
            if( $streaming != "" ) {
//                $message.= $prefix."subscribe streaming $from\n"; $valid = 1;
		$to="streaming-".$prefix."subscribe".$domain;$valid = 1;
	        $header = "from: ".$from."\n"; $message = "-- \n";
	        $message .= "sent via http://www.videolan.org/support/lists.html\n";
	        mail($to, "(no subject)", $message, $header);

            }
            if( $vlcdevel != "" ) {
                //$message.= $prefix."subscribe vlc-devel $from\n"; $valid = 1;
		$to="vlc-devel-".$prefix."subscribe".$domain;$valid = 1;
	        $header = "from: ".$from."\n"; $message = "-- \n";
	        $message .= "sent via http://www.videolan.org/support/lists.html\n";
	        mail($to, "(no subject)", $message, $header);

            }
            if( $vlsdevel != "" ) {
                //$message.= $prefix."subscribe vls-devel $from\n"; $valid = 1;
		$to="vls-devel-".$prefix."subscribe".$domain;$valid = 1;
	        $header = "from: ".$from."\n"; $message = "-- \n";
	        $message .= "sent via http://www.videolan.org/support/lists.html\n";
	        mail($to, "(no subject)", $message, $header);

            }
/*            if( $vlcsdevel != "" ) {
                //$message.= $prefix."subscribe vlcs-devel $from\n"; $valid = 1;
		$to="streaming-".$prefix."subscribe".$domain;
}*/
            if( $libdvbpsidevel != "" ) {
                //$message.= $prefix."subscribe libdvbpsi-devel $from\n"; $valid = 1;
		$to="libdvbpsi-devel-".$prefix."subscribe".$domain;$valid = 1;
	        $header = "from: ".$from."\n"; $message = "-- \n";
	        $message .= "sent via http://www.videolan.org/support/lists.html\n";
	        mail($to, "(no subject)", $message, $header);

            }
            if( $libdvdcssdevel != "" ) {
//                $message.= $prefix."subscribe libdvdcss-devel $from\n"; $valid = 1;
		$to="libdvdcss-devel-".$prefix."subscribe".$domain;$valid = 1;
	        $header = "from: ".$from."\n"; $message = "-- \n";
	        $message .= "sent via http://www.videolan.org/support/lists.html\n";
	        mail($to, "(no subject)", $message, $header);

            }
            if( $wwwdoc != "" ) {
                //$message.= $prefix."subscribe vlc-devel $from\n"; $valid = 1;
		$to="www-doc-".$prefix."subscribe".$domain;$valid = 1;
	        $header = "from: ".$from."\n"; $message = "-- \n";
	        $message .= "sent via http://www.videolan.org/support/lists.html\n";
	        mail($to, "(no subject)", $message, $header);

            }
            if( $libdcadevel != "" ) {
                //$message.= $prefix."subscribe vlc-devel $from\n"; $valid = 1;
		$to="libdca-devel-".$prefix."subscribe".$domain;$valid = 1;
	        $header = "from: ".$from."\n"; $message = "-- \n";
	        $message .= "sent via http://www.videolan.org/support/lists.html\n";
	        mail($to, "(no subject)", $message, $header);

            }
            if( $libdvdplaydevel != "" ) {
                //$message.= $prefix."subscribe vlc-devel $from\n"; $valid = 1;
		$to="libdvdplay-devel-".$prefix."subscribe".$domain;$valid = 1;
	        $header = "from: ".$from."\n"; $message = "-- \n";
	        $message .= "sent via http://www.videolan.org/support/lists.html\n";
	        mail($to, "(no subject)", $message, $header);

            }
            if( $x264devel != "" ) {
                //$message.= $prefix."subscribe vlc-devel $from\n"; $valid = 1;
		$to="x264-devel-".$prefix."subscribe".$domain;$valid = 1;
	        $header = "from: ".$from."\n"; $message = "-- \n";
	        $message .= "sent via http://www.videolan.org/support/lists.html\n";
	        mail($to, "(no subject)", $message, $header);

            }
            if( $mpris != "" ) {
                //$message.= $prefix."subscribe vlc-devel $from\n"; $valid = 1;
		$to="mpris-".$prefix."subscribe".$domain;$valid = 1;
	        $header = "from: ".$from."\n"; $message = "-- \n";
	        $message .= "sent via http://www.videolan.org/support/lists.html\n";
	        mail($to, "(no subject)", $message, $header);

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

        ?><p> A request has been sent to <a
        href="mailto:mailman@videolan.org">mailman@videolan.org</a>:
	</p> 
	<p> You should receive a confirmation request within the next few
        minutes. Reply to this email to confirm you subscription or
        unsubscription.</p> <?php

    } else {

        ?><p> We are afraid your subscription failed for the following
        reason: <b><?php echo $error; ?></b>. </p> <?php

    }
?>

</div>

<?php footer('$Id$'); ?>
