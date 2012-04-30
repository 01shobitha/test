<?php

/*
*  starthtml: beginning of the page
*/
function StartHtml( $title, $color, $language,
                    $additional_css=array(),
                    $additional_js=array(),
                    $alternate_lang=array(),
                    $body_onload = "HideMirrors();",
                    $body_onunload = "" )
{
    global $HTTP_GET_VARS;

    if ($language != "en" ) {
        switch ($language) {
        case 'bg': $locale = "bg_BG.UTF-8"; break;
        case 'by': $locale = "by_BY.UTF-8"; break;
        case 'cs': $locale = "cs_CZ.UTF-8"; break;
        case 'de': $locale = "de_DE.UTF-8"; break;
        case 'dk': $locale = "dk_DK.UTF-8"; break;
        case 'es': $locale = "es_ES.UTF-8"; break;
        case 'el': $locale = "el_GR.UTF-8"; break;
        case 'fi': $locale = "fi_FI.UTF-8"; break;
        case 'fr': $locale = "fr_FR.UTF-8"; break;
        case 'ge': $locale = "ge_GE.UTF-8"; break;
        case 'gr': $locale = "gr_GR.UTF-8"; break;
        case 'he': $locale = "he_IL.UTF-8"; break;
        case 'hi': $locale = "hi_IN.UTF-8"; break;
        case 'ja': $locale = "ja_JP.UTF-8"; break;
        case 'pl': $locale = "pl_PL.UTF-8"; break;
        case 'ro': $locale = "ro_RO.UTF-8"; break;
        case 'ru': $locale = "ru_RU.UTF-8"; break;
        case 'tr': $locale = "tr_TR.UTF-8"; break;
        }

        /* gettext stuff */
        putenv("LANGUAGE=$locale");
        setlocale(LC_ALL, $locale);
        bindtextdomain("website", $_SERVER["DOCUMENT_ROOT"]."/locale");
        textdomain("website");
    }

    /* We love xml, right? */
    echo '<?xml version="1.0" encoding="utf-8" ?>'."\n"; ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
        "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $language?>" lang="<?php echo $language?>">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Language" content="<?php echo $language?>" />

        <meta name="Author" content="VideoLAN" />
        <meta name="Keywords" content="VideoLAN, VLC, VLC player, VLC media player, download, 
        media player, player download, codec, encoder, media converter, video, video player, multimedia, multicast,
        VLC, x264, DVBlast, Windows, Linux, Unix, BeOS, BSD, MacOS, MacOS X, OSX, Streaming,
        DVD, Matroska, Blu-Ray, FLV, Xvid, MPEG, MPEG2, MPEG4, H264, DivX, VideoLAN, MKV, m2ts,
        open source, free software, floss, free" />

        <meta name="Description" content="<?php echo $title; ?>" />
        <title>VideoLAN - <?php echo $title; ?></title>

        <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />
        <link href="https://plus.google.com/104597325891170264649" rel="publisher" />

        <link rel="alternate" type="application/rss+xml" title="RSS - VideoLAN News" href="/videolan-news.rss" />
        <link rel="alternate" type="application/rss+xml" title="RSS - Developers Blog" href="http://planet.videolan.org/rss20.xml" />

    <?php if( isset($alternate_lang) ) {
        $root_filename = explode('.', $_SERVER['SCRIPT_FILENAME'] );
        echo "<!-- ".$root_filename[0]." -->";
        foreach($alternate_lang as $lang) {
            if( $lang == "en" )
                echo  '<link rel="alternate" hreflang="'.$lang.'" href="/'.$root_filename[0].'.html" />'."\n"; 
            else
                echo  '<link rel="alternate" hreflang="'.$lang.'" href="/'.$root_filename[0].'.'.$lang.'.html" />'."\n";
        }
    } ?>

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

    <?php /* Get the one in the Google CDN to get cached */ ?>
    <script src='//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js' type='text/javascript'></script>
    <?php if( isset($additional_js) ) {
        foreach($additional_js as $js) {
            echo '<script src="'.$js.'" type="text/javascript"></script>';
        }
    } ?>

    </head>

<?php
        if ($language != "he")
        {
            echo '<body>';
            echo "<div id='bodyInner' class='$color'>";
        }
        else
        {
            echo '<body style="text-align: right; direction: rtl;">';
            echo "<div id='bodyInner' class='$color' style='text-align: right;'>";
        }
}

/* Actual start of the body */
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
   <div style='float: left; color: #4D4D4D; font-size: 12px; padding: 10px 10px 5px 20px; line-height: 20px; width: 396px;'>
   <?php
    echo _('A project and a').' <a href="/videolan/" class="noUnderline">'._('non-profit organization').'</a>, '.
         _('composed of volunteers, developing and promoting free, open-source multimedia solutions.');?>
   </div>
   <div id='donate'>
       <div style='font-size: 14px; color: #909090; float: left; padding-top: 5px;'>
           <?php echo _("DONATE");?> &nbsp;<a href='/contribute.html#money'>(<?php echo _("why?");?>)</a></div>
       <img src='/images/paypal.png' style='float: right;' alt="paypal" />
       <form style='clear: both; padding-top: 10px;' action="https://www.paypal.com/en_US/cgi-bin/webscr" method="post">
           <p>
               <input name="cmd" value="_xclick" type="hidden"/>
               <input name="business" value="sponsor@videolan.org" type="hidden"/>
               <input name="item_name" value="Development and communication of VideoLAN" type="hidden"/>
               <input name="no_note" value="0" type="hidden"/>
               <input name="currency_code" value="EUR" type="hidden"/>
               <input name="tax" value="0" type="hidden"/>
               <input name="lc" value="GB" type="hidden"/>
               <input name="no_shipping" value="1" type="hidden"/>
               <input name="return" value="http://www.videolan.org/thank_you.html" type="hidden"/>
               <input class='text' type='text' name="amount" value='4.00' style='background: #fff url("/images/euro.png") no-repeat 65px 2px;' />
               <button class='button' type='submit'><?php echo _("donate"); ?></button>
       </p></form>
       <form style='clear: both; padding-top: 10px;' action="https://www.paypal.com/en_US/cgi-bin/webscr" method="post">
           <p>
               <input name="cmd" value="_xclick" type="hidden"/>
               <input name="business" value="sponsor@videolan.org" type="hidden"/>
               <input name="item_name" value="Development and communication of VideoLAN" type="hidden"/>
               <input name="no_note" value="0" type="hidden"/>
               <input name="currency_code" value="USD" type="hidden"/>
               <input name="tax" value="0" type="hidden"/>
               <input name="lc" value="US" type="hidden"/>
               <input name="no_shipping" value="1" type="hidden"/>
               <input name="return" value="http://www.videolan.org/thank_you.html" type="hidden"/>
               <input id="dtext" class='text' type='text' name="amount" value='5.00' style='background: #fff url("/images/dollar.png") no-repeat 0 3px; padding-right: 10px; width: 75px;' />
               <button class='button' type='submit'><?php echo _("donate"); ?></button>
       </p></form>
   </div>
   <div id='social'>
      <div id='plusone'>
         <g:plusone size="medium" href="http://www.videolan.org"></g:plusone>
      </div>
      <div style="text-align: right; padding: 3px 14px;"><a href="http://www.facebook.com/vlc.media.player" style="padding-top: 10px;"><?php image( 'facebook.png', "Facebook" );?></a></div>
      <div style="text-align: right; padding: 2px 12px;"><a href="http://www.twitter.com/videolan"><?php image( 'twitter.png', "Twitter" );?></a></div>
   </div>
<?php
}

/* Menus */
function draw_menus( $nobanner )
{
?>
<div id='linkBar'>
   <div class='link'>
      <a href='/'><?php echo _("Home");?></a>
   </div>
   <div class='link'>
      <a href='/news.html'><?php echo _("News");?></a>
   </div>
   <div class='link'>
      <a href='/videolan/'>VideoLAN</a>
      <ul>
         <li><a href='/videolan/'><?php echo _("Project and Organization"); ?></a></li>
         <li><a href='/videolan/team/'><?php echo _("Team"); ?></a></li>
         <li><a href='/contact.html'><?php echo _("Contact us"); ?></a></li>
         <li><a href='/videolan/partners.html'><?php echo _("Partners"); ?></a></li>
         <li><a href='/press/'><?php echo _("Press center"); ?></a></li>
         <li><a href='/videolan/events/'><?php echo _("Events"); ?></a></li>
         <li><a href='/security/'><?php echo _("Security center"); ?></a></li>
      </ul>
   </div>
   <div class='link'>
      <a href='/vlc/'>VLC</a>
      <ul>
         <li><a href='/vlc/'><?php echo _("Download"); ?></a></li>
         <li><a href='/vlc/features.html'><?php echo _("Features"); ?></a></li>
         <li><a href='/vlc/screenshots.html'><?php echo _("Screenshots"); ?></a></li>
         <li><a href='/vlc/skins.html'><?php echo _("Skins"); ?></a></li>
         <li><a href='http://addons.videolan.org/index.php?xcontentmode=903'><?php echo _("Extensions"); ?></a></li>
      </ul>
   </div>
   <div class='link'>
      <a href='/projects/'><?php echo _("Projects"); ?></a>
      <ul>
         <li><a href='/vlc/'>VLC media player</a></li>
         <li><a href='/vlmc/'>VideoLan Movie Creator</a></li>
         <li><a href='/projects/dvblast.html'>DVBlast</a></li>
         <li><a href='/developers/x264.html'>x264</a></li>
         <li><a href='/projects/multicat.html'>multicat</a></li>
         <li><a href='/projects/vlma/'>VLMa</a></li>
         <li><a href='/vlc/skineditor.html'>VLC Skin Editor</a></li>
         <li><hr /></li>
         <li><a href='/developers/libdvdcss.html'>libdvdcss</a></li>
         <li><a href='/developers/libbluray.html'>libbluray</a></li>
         <li><a href='/developers/libdvbpsi.html'>libdvbpsi</a></li>
         <li><a href='/developers/libaacs.html'>libaacs</a></li>
         <li><a href='/developers/libdvbcsa.html'>libdvbcsa</a></li>
         <li><a href='/developers/bitstream.html'>biTStream</a></li>
         <li><hr /></li>
         <li><a href='/projects/'><?php echo _("All Projects"); ?></a></li>
      </ul>
   </div>
   <div class='link'>
      <a href='/contribute.html'><?php echo _("Contribute"); ?></a>
      <ul>
         <li><a href='/contribute.html'><?php echo _("Donate time"); ?></a></li>
         <li><a href='/contribute.html#money'><?php echo _("Donate money"); ?></a></li>
         <li><a href='/goodies.html'><?php echo _("Get Goodies"); ?></a></li>
      </ul>
   </div>
   <div class='link'>
      <a href='/support/'><?php echo _("Support"); ?></a>
      <ul>
         <li><a href='/support/'><?php echo _("Support center"); ?></a></li>
         <li><a href='/support/faq.html'>FAQ</a></li>
         <li><a href='/legal.html'><?php echo _("Legal"); ?></a></li>
         <li><a href='http://wiki.videolan.org/'>Wiki</a></li>
         <li><a href='http://forum.videolan.org/'>Forums</a></li>
         <li><a href='/support/lists.html'><?php echo _("Mailing-Lists"); ?></a></li>
         <li><a href='/support/#bugs'><?php echo _("Report a bug"); ?></a></li>
      </ul>
   </div>
   <div class='link'>
      <a href='/developers/'><?php echo _("Dev' Zone"); ?></a>
   </div>
</div>
<div class="clearme"></div>

<?php
    /* Event banner */
    if ( !$nobanner )
    ;//    echo '<center><a href="https://packliberte.org/"><img alt="Pack Liberté" src="http://images1.videolan.org/images/events/animated_packliberte.gif" /></a></center>';
    ?><?php
}

/* Footer */
function footer($tag = "") {
?>
</div>
   <div id='footer'>
      <div style='background-image: url( "/images/divider.png" ); height: 15px; width: 100%;'></div>
      <div style='padding: 40px 10px 40px; width: 950px; margin: 0 auto;'>
           <a style='float: left; margin-right: 50px;' href='/'>
            <?php image( 'logoGrey.png', 'Association VideoLAN' ); ?></a>
         <div class='footer_col'>
            <div class='footerHeading'>VLC media player</div>
            <ul>
              <li><a href='/vlc/'>VLC</a></li>
              <li><a href='/vlc/download-windows.html'>VLC for Windows</a></li>
              <li><a href='/vlc/download-macosx.html'>VLC for MacOS X</a></li>
              <li><a href='/vlc/download-ubuntu.html'>VLC for Ubuntu</a></li>
              <li><a href='/vlc/download-fedora.html'>VLC for Fedora</a></li>
              <li><a href='/vlc/skins.html'><?php echo _("Skins"); ?></a></li>
              <li><a href='http://addons.videolan.org/index.php?xcontentmode=903'><?php echo _("Extensions"); ?></a></li>
              <li><a href='/vlc/features.html'><?php echo _("Features"); ?></a></li>
              <li><a href='/vlc/screenshots.html'><?php echo _("Screenshots"); ?></a></li>
            </ul>
         </div>
         <div class='footer_col'>
            <div class='footerHeading'><?php echo _("All Projects"); ?></div>
            <ul>
                 <li><a href='/vlmc/'>VideoLan Movie Creator</a></li>
                 <li><a href='/projects/dvblast.html'>DVBlast</a></li>
                 <li><a href='/developers/x264.html'>x264</a></li>
                 <li><a href='/projects/multicat.html'>multicat</a></li>
                 <li><a href='/projects/vlma/'>VLMa</a></li>
                 <li><a href='/vlc/skineditor.html'>VLC Skin Editor</a></li>
                 <li><a href='/developers/libdvdcss.html'>libdvdcss</a></li>
                 <li><a href='/developers/libbluray.html'>libbluray</a></li>
                 <li><a href='/developers/libdvbpsi.html'>libdvbpsi</a></li>
                 <li><a href='/developers/libaacs.html'>libaacs</a></li>
                 <li><a href='/developers/libdvbcsa.html'>libdvbcsa</a></li>
                 <li><a href='/developers/bitstream.html'>biTStream</a></li>
            </ul>
         </div>
         <div class='footer_col'>
            <div class='footerHeading'><?php echo _("Community"); ?></div>
            <ul>
                 <li><a href='http://wiki.videolan.org/'>Wiki</a></li>
                 <li><a href='http://forum.videolan.org/'>Forums</a></li>
                 <li><a href='/support/lists.php'><?php echo _("Mailing-Lists"); ?></a></li>
                 <li><a href='/support/faq.html'>FAQ</a></li>
                 <li><a href='/contribute.html'><?php echo _("Donate money"); ?></a></li>
                 <li><a href='/contribute.html'><?php echo _("Donate time"); ?></a></li>
                 <li><a href='/goodies.html'><?php echo _("Get Goodies"); ?></a></li>
            </ul>
         </div>
         <div class='footer_col'>
            <div class='footerHeading'>VideoLAN</div>
            <ul>
                 <li><a href='/videolan/'><?php echo _("Project and Organization"); ?></a></li>
                 <li><a href='/videolan/team/'><?php echo _("Team"); ?></a></li>
                 <li><a href='/legal.html'><?php echo _("Legal"); ?></a></li>
                 <li><a href='/contact.html'><?php echo _("Contact us"); ?></a></li>
                 <li><a href='/videolan/partners.html'><?php echo _("Partners"); ?></a></li>
                 <li><a href='/press/'><?php echo _("Press center"); ?></a></li>
                 <li><a href='/videolan/events/'><?php echo _("Events"); ?></a></li>
                 <li><a href='/security/'><?php echo _("Security center"); ?></a></li>
                 <li><a href='/contribute.html'><?php echo _("Get Involved"); ?></a></li>
                 <li><a href='/news.html'><?php echo _("News");?></a></li>
            </ul>
         </div>
         <div style='clear: both; padding-bottom: 30px;'></div>
         <div style='text-align: center; line-height: 14px; font-size: 9px; color: #999; direction: ltr;'>
            <p>
            <a href='/legal.html'><?php echo _("Legal"); ?></a> | <a href='/contact.html'>Report Trademark Abuse</a><br />
            VideoLAN, VLC, VLC media player and x264 are trademarks internationnaly registered by the VideoLAN non-profit organization.<br />
            Software are licensed under open-source licenses. Use and distribution are strictly defined by each software license.</p>
            <p>Design of the website was done by <a href="http://www.madebyargon.com">Made By Argon</a>.<br />
            Some icons and design on this site are licensed under the Creative Commons Share-Alike License v3.0 or any later version. Those licenses <b>DO not</b> apply for software.<br />
            The VLC cone icon was designed by Richard Øiestad. Icons for VLMC, DVBlast and x264 designed by <a href='http://cuberto.com/'>Roman Khramov</a>.</p>
         </div>
      </div>
   </div>
   <!-- plusone button -->
   <script type="text/javascript">
     (function() {
       var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
       po.src = 'https://apis.google.com/js/plusone.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
     })();
   </script>
   </body>
</html>
<?php
}

/* Create a colored panel */
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

/* Finishes it */
function panel_end( )
{ ?>
      </div>
    </div>

    <div class="ft">
      <div class="c"></div>
    </div>
  </div> <!-- end panel -->
<?php }

/* Format sizes for packages */
function FormatSize($size) {
    $sizes = Array('B', 'KiB', 'MiB', 'GiB', 'TiB');
    $ext = $sizes[0];
    for ($i=1; (($i < count($sizes)) && ($size >= 1024)); $i++) {
        $size = $size / 1024;
        $ext  = $sizes[$i];
    }
    return round($size, 1).$ext;
}

/* Image function to hit the start server */
function image( $src_img, $alt, $id = "" ) {
    echo "<img src='//images1.videolan.org/images/".$src_img."' alt='".$alt."'";
    if( !empty( $id ) ) echo " class='$id'";
    echo " />\n";
}

/*
 * the real code
 */

/* default language and date */
if(!isset($language) || $language == "" ) { $language = "en"; }

if(!isset($additional_css)) $additional_css = array();
if(!isset($additional_js)) $additional_js = array();
if(!isset($alternate_lang)) $alternate_lang = array();
if(!isset($body_onload)) $body_onload = "";
if(!isset($body_onunload)) $body_onunload = "";
if(!isset($body_color)) $body_color = "orange";
if(!isset($nobanner)) $nobanner = false;
/* render the page */

// HTML header
StartHtml( preg_replace( "/<[^>]*>/", "" , $title ), $body_color, $language,
           $additional_css, $additional_js, $alternate_lang, $body_onload, $body_onunload );
start_top( $body_color );
draw_menus( $nobanner);
?>
