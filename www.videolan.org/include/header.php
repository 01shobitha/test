<?php

function FormatSize($size) {
    $sizes = Array('B', 'KiB', 'MiB', 'GiB', 'TiB');
    $ext = $sizes[0];
    for ($i=1; (($i < count($sizes)) && ($size >= 1024)); $i++) {
        $size = $size / 1024;
        $ext  = $sizes[$i];
    }
    return round($size, 1).$ext;
}

function image( $src_img, $alt, $id = "" ) {
    echo "<img src='http://images1.videolan.org/images/".$src_img."' alt='".$alt."'";
    if( !empty( $id ) ) echo " class='$id'";
    echo " />\n";
}

/*
*  starthtml: beginning of the page
*/
function StartHtml( $title, $color, $additional_css=array(), $additional_js=array(), $body_onload = "HideMirrors();", $body_onunload = "" ) {
global $HTTP_GET_VARS;
echo '<?xml version="1.0" encoding="utf-8" ?>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
       "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="en-us" />
    <meta name="Author" content="VideoLAN" />
    <meta name="Keywords" content="DVD, MPEG, MPEG2, MPEG4, H264, DivX, VideoLAN, MKV, m2ts,
     VLC, VLS, x264, Windows, Linux, Unix, BeOS, BSD, MacOS, MacOS X, OSX, Streaming,
     video, video player, multimedia, multicast, IPv6, media player, media converter,
     open source, free software" />
   <meta name="Description" content="<?php echo $title; ?>" />
   <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />
   <title>VideoLAN - <?php echo $title; ?></title>

   <link rel="alternate" type="application/rss+xml" title="RSS - VideoLAN News" href="/videolan-news.rss" />
   <link rel="alternate" type="application/rss+xml" title="RSS - Developers' Planet" href="http://planet.videolan.org/rss20.xml" />

   <link rel="stylesheet" type="text/css" href="/style/style.css" />

    <?php if( isset($additional_css) ) {
        foreach($additional_css as $css) {
            echo  '<link rel="stylesheet" type="text/css" href="'.$css.'" />';
        }
    } ?>

    <!--[if lt IE 7]>
       <style type="text/css">
          @media screen{ body{behavior:url("/width.htc");} }
            /* PNG support for IE */
            img {  behavior: url("/png.htc");}
            .DXImageTransformed { display: inline-block; }
          </style>
    <![endif]-->

    <script src='//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js' type='text/javascript'></script>
    <?php if( isset($additional_js) ) {
            foreach($additional_js as $js) {
                echo '<script src="'.$js.'" type="text/javascript"></script>';
            }
        } ?>

</head>

<body> <? /* onload="<?php echo $body_onload;?>" onunload="<?php echo $body_onunload; */ ?>
<div id='bodyInner' class="<?php echo $color ?>">
<?php
}

function start_top( $body_color )
{
    switch( $body_color ){
    case "red":   $imgSrc = "logoRed.png";    $imgArSrc = "madeByArgonRed.png";    break;
    case "blue":  $imgSrc = "logoBlue.png";   $imgArSrc = "madeByArgonBlue.png";   break;
    case "green": $imgSrc = "logoGreen.png";  $imgArSrc = "madeByArgonGreen.png";  break;
    case "pink":  $imgSrc = "logoPink.png";   $imgArSrc = "madeByArgonPink.png";   break;
    default:      $imgSrc = "logoOrange.png"; $imgArSrc = "madeByArgonOrange.png"; break;
    }
?>
    <a style='float: left;' href='/'><?php image( $imgSrc, "VideoLAN association"); ?></a>
   <div style='float: left; color: #4D4D4D; font-size: 12px; padding: 10px 10px 5px 20px; line-height: 20px;'>
      A project and a <a href="/videolan/" class="noUnderline">non-profit organization</a>, composed of volunteers<br />
      developing and promoting free, open-source multimedia solutions.
   </div>
    <a style='float: right; padding-top: 6px; padding-right: 20px;' href='http://madebyargon.com'>
    <?php image( $imgArSrc, 'Graphics &amp; Website Made By Argon Designs' ); ?> </a>
   <!--<div id='donate'>
      <div style='font-size: 14px; color: #909090; float: left; padding-top: 5px;'>DONATE &nbsp;<a href='#'>(why?)</a></div>
      <img src='images/paypal.png' style='float: right;' />
      <form style='clear: both; padding-top: 10p;'>
         <input class='text' type='text' value='$5.00' />
         <button class='button' type='submit'>donate</button>
      </form>
   </div>-->
   <div style='clear: both;'></div>
<?php
}

function draw_menus()
{
?>
<div id='linkBar'>
   <div class='link'>
      <a href='/'>Home</a>
   </div>
   <div class='link'>
      <a href='/news.html'>News</a>
   </div>
   <div class='link'>
      <a href='/videolan/'>VideoLAN</a>
      <ul>
         <li><a href='/videolan/'>Project and Organization</a></li>
         <li><a href='/videolan/team/'>Team</a></li>
         <li><a href='/contact.html'>Contact us</a></li>
         <li><a href='/videolan/partners.html'>Partners</a></li>
         <li><a href='/press/'>Press center</a></li>
         <li><a href='/videolan/events/'>Events</a></li>
         <li><a href='/security/'>Security center</a></li>
      </ul>
   </div>
   <div class='link'>
      <a href='/vlc/'>VLC</a>
      <ul>
         <li><a href='/vlc/'>Download</a></li>
         <li><a href='/vlc/features.html'>Features</a></li>
         <li><a href='/vlc/screenshots.html'>Screenshots</a></li>
         <li><a href='/vlc/skins.html'>Skins</a></li>
         <li><a href='/vlc/skins.html'>Extensions</a></li>
      </ul>
   </div>
   <div class='link'>
      <a href='/projects/'>Projects</a>
      <ul>
         <li><a href='/vlc/'>VLC media player</a></li>
         <li><a href='/vlmc/'>VideoLan Movie Creator</a></li>
         <li><a href='/projects/dvblast.html'>DVBlast</a></li>
         <li><a href='/developers/x264.html'>x264</a></li>
         <li><a href='/projects/multicat.html'>Multicat</a></li>
         <li><a href='/projects/vlma/'>VLMa</a></li>
         <li><a href='/vlc/skineditor.html'>VLC Skin Editor</a></li>
         <li><hr /></li>
         <li><a href='/developers/libdvdcss.html'>libdvdcss</a></li>
         <li><a href='/developers/libbluray.html'>libbluray</a></li>
         <li><a href='/developers/libdvbpsi.html'>libdvbpsi</a></li>
         <li><a href='/developers/libaacs.html'>libaacs</a></li>
         <li><a href='/developers/libdvbcsa.html'>libdvbcsa</a></li>
         <li><hr /></li>
         <li><a href='/projects/'>All Projects</a></li>
      </ul>
   </div>
   <div class='link'>
      <a href='/contribute.html'>Contribute</a>
      <ul>
         <li><a href='/contribute.html'>Donate time</a></li>
         <li><a href='/contribute.html#money'>Donate money</a></li>
         <li><a href='/goodies.html'>Get Goodies</a></li>
      </ul>
   </div>
   <div class='link'>
      <a href='/support/'>Support</a>
      <ul>
         <li><a href='/support/'>Support center</a></li>
         <li><a href='/support/faq.html'>FAQ</a></li>
         <li><a href='/legal.html'>Legal</a></li>
         <li><a href='http://wiki.videolan.org/'>Wiki</a></li>
         <li><a href='http://forum.videolan.org/'>Forums</a></li>
         <li><a href='/support/lists.html'>Mailing-Lists</a></li>
      </ul>
   </div>
   <div class='link'>
      <a href='/developers/'>Dev' Zone</a>
   </div>
</div>
<div class="clearme"></div>
<a href="/videolan/events/10y/"><img alt="10 cones" src="http://images1.videolan.org/images/10years.png" ></a>

<?php
}

function footer($tag = "") {
?>
</div>
   <div id='footer'>
      <div style='background-image: url( "/images/divider.png" ); height: 15px; width: 100%;'></div>
      <div style='padding: 40px 10px 40px; width: 900px; margin: 0 auto;'>
           <a style='float: left; margin-right: 50px;' href='/'>
            <?php image( 'VideoLAN.png', 'Association VideoLAN' ); ?></a>
         <div class='footer_col'>
            <div class='footerHeading'>VLC media player</div>
            <ul>
              <li><a href='/vlc/'>VLC</a></li>
              <li><a href='/vlc/download-windows.html'>VLC for Windows</a></li>
              <li><a href='/vlc/download-macosx.html'>VLC for MacOS X</a></li>
              <li><a href='/vlc/download-ubuntu.html'>VLC for Ubuntu</a></li>
              <li><a href='/vlc/download-fedora.html'>VLC for Fedora</a></li>
              <li><a href='/vlc/skins.html'>Skins</a></li>
              <li><a href='/vlc/skins.html'>Extensions</a></li>
              <li><a href='/vlc/features.html'>Features</a></li>
              <li><a href='/vlc/screenshots.html'>Screenshots</a></li>
            </ul>
         </div>
         <div class='footer_col'>
            <div class='footerHeading'>Other Projects</div>
            <ul>
                 <li><a href='/vlmc/'>VideoLan Movie Creator</a></li>
                 <li><a href='/projects/dvblast.html'>DVBlast</a></li>
                 <li><a href='/developers/x264.html'>x264</a></li>
                 <li><a href='/projects/multicat.html'>Multicat</a></li>
                 <li><a href='/projects/vlma/'>VLMa</a></li>
                 <li><a href='/vlc/skineditor.html'>VLC Skin Editor</a></li>
                 <li><a href='/developers/libdvdcss.html'>libdvdcss</a></li>
                 <li><a href='/developers/libbluray.html'>libbluray</a></li>
                 <li><a href='/developers/libdvbpsi.html'>libdvbpsi</a></li>
                 <li><a href='/developers/libaacs.html'>libaacs</a></li>
                 <li><a href='/developers/libdvbcsa.html'>libdvbcsa</a></li>
            </ul>
         </div>
         <div class='footer_col'>
            <div class='footerHeading'>Community</div>
            <ul>
                 <li><a href='http://wiki.videolan.org/'>Wiki</a></li>
                 <li><a href='http://forum.videolan.org/'>Forums</a></li>
                 <li><a href='/support/lists.php'>Mailing-Lists</a></li>
                 <li><a href='/support/faq.html'>FAQ</a></li>
                 <li><a href='/contribute.html'>Donate money</a></li>
                 <li><a href='/contribute.html'>Donate time</a></li>
                 <li><a href='/goodies.html'>Get Goodies</a></li>
            </ul>
         </div>
         <div class='footer_col'>
            <div class='footerHeading'>About</div>
            <ul>
                 <li><a href='/videolan/'>About VideoLAN</a></li>
                 <li><a href='/videolan/team/'>VideoLAN Team</a></li>
                 <li><a href='/legal.html'>Legal</a></li>
                 <li><a href='/contribute.html'>Get Involved</a></li>
                 <li><a href='/news.html'>News</a></li>
                 <li><a href='/press/'>Press center</a></li>
                 <li><a href='/videolan/events/'>Events</a></li>
                 <li><a href='/security/'>Security center</a></li>
                 <li><a href='/contact.html'>Contact us </a></li>
            </ul>
         </div>
         <div style='clear: both; padding-bottom: 30px;'></div>
         <div style='text-align: center; line-height: 17px; font-size: 12px; color: #999;'>
            <a href='#'>Privacy Policy</a> | <a href='#'>Legal Notices</a> | <a href='#'>Report Trademark Abuse</a><br />
            Icons for VLMC, DVBlast and x264 designed by <a href='http://cuberto.com/'>Roman Khramov</a>.<br />
            Except where otherwise noted, content on this site is licensed under the Creative Commons Share-Alike License v3.0 or any later version.
         </div>
      </div>
   </div>
   </body>
</html>
<?php
}

function panel_start( $color )
{ ?>
  <div class="panel-<?php echo $color; ?>"> <!-- begin panel -->
    <div class="hd">
      <div class="c"></div>
    </div>

    <div class="bd">
      <div class="c">
        <!-- main content goes here -->
<?php }
function panel_end( )
{ ?>
      </div>
    </div>

    <div class="ft">
      <div class="c"></div>
    </div>
  </div> <!-- end panel -->
<?php }


/*
 * the real code
 */

/* default language and date */
if(!isset($language) || $language == "" ) { $language = "en"; }

if(!isset($additional_css)) $additional_css = array();
if(!isset($additional_js)) $additional_js = array();
if(!isset($body_onload)) $body_onload = "";
if(!isset($body_onunload)) $body_onunload = "";
if(!isset($body_color)) $body_color = "orange";

/* render the page */

// HTML header
StartHtml( preg_replace( "/<[^>]*>/", "" , $title ), $body_color, $additional_css, $additional_js, $body_onload, $body_onunload ) ;
start_top( $body_color );
draw_menus();
?>
