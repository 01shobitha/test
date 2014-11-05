<?php
require($_SERVER["DOCUMENT_ROOT"]."/include/layout_helper.php");

function getLocaleFromLanguage( $language )
{
    switch ($language) {
    case 'an': $locale = "an_ES.utf8"; break;
    case 'ar': $locale = "ar_EG.utf8"; break;
    case 'ast': $locale = "ast_ES.utf8"; break;
    case 'be': $locale = "be_BY.utf8"; break;
    case 'bg': $locale = "bg_BG.UTF-8"; break;
    case 'bn': $locale = "bn_BD"; break;
    case 'bn_IN': $locale = "bn_IN"; break;
    case 'bs': $locale = "bs_BA.UTF-8"; break;
    case 'ca': $locale = "ca_ES.utf8"; break;
    case 'cs': $locale = "cs_CZ.UTF-8"; break;
    case 'cy': $locale = "cy_GB.utf8"; break;
    case 'da': $locale = "da_DK.utf8"; break;
    case 'de': $locale = "de_DE.UTF-8"; break;
    case 'de_LU': $locale = "de_LU.utf8"; break;
    case 'dv': $locale = "dv_MV"; break;
    case 'el': $locale = "el_GR.UTF-8"; break;
    case 'en_GB': $locale = "en_GB.utf8"; break;
    case 'es': $locale = "es_ES.UTF-8"; break;
    case 'es_MX': $locale = "es_MX.utf8"; break;
    case 'et': $locale = "et_EE.utf8"; break;
    case 'fa': $locale = "fa_IR"; break;
    case 'fi': $locale = "fi_FI.UTF-8"; break;
    case 'fo': $locale = "fo_FO.utf8"; break;
    case 'fr': $locale = "fr_FR.UTF-8"; break;
    case 'gd': $locale = "gd_GB.UTF-8"; break;
    case 'gl': $locale = "gl_ES.UTF-8"; break;
    case 'gu': $locale = "gu_IN"; break;
    case 'he': $locale = "he_IL.UTF-8"; break;
    case 'hi': $locale = "hi_IN.UTF-8"; break;
    case 'hr': $locale = "hr_HR.utf8"; break;
    case 'hu': $locale = "hu_HU.utf8"; break;
    case 'id': $locale = "id_ID.utf8"; break;
    case 'is': $locale = "is_IS.utf8"; break;
    case 'it': $locale = "it_IT.utf8"; break;
    case 'ja': $locale = "ja_JP.UTF-8"; break;
    case 'ka': $locale = "ka_GE.utf8"; break;
    case 'km': $locale = "km_KH.UTF-8"; break;
    case 'kn': $locale = "kn_IN"; break;
    case 'ko': $locale = "ko_KR.utf8"; break;
    case 'ky': $locale = "ky_KG"; break;
    case 'lb': $locale = "de_LU.utf8"; break;
    case 'lt': $locale = "lt_LT.utf8"; break;
    case 'lv': $locale = "lv_LV.utf8"; break;
    case 'mk': $locale = "mk_MK.UTF-8"; break;
    case 'ml': $locale = "ml_IN"; break;
    case 'mn_MN': $locale = "mn_MN"; break;
    case 'mr': $locale = "mr_IN.UTF-8"; break;
    case 'ms': $locale = "ms_MY.utf8"; break;
    case 'my': $locale = "my_MM"; break;
    case 'nb': $locale = "nb_NO.UTF-8"; break;
    case 'nl': $locale = "nl_NL.UTF-8"; break;
    case 'or': $locale = "or_IN"; break;
    case 'pl': $locale = "pl_PL.UTF-8"; break;
    case 'pt_BR': $locale = "pt_BR.utf8"; break;
    case 'pt': $locale = "pt_PT.UTF-8"; break;
    case 'ro': $locale = "ro_RO.UTF-8"; break;
    case 'ru': $locale = "ru_RU.UTF-8"; break;
    case 'si': $locale = "si_LK"; break;
    case 'sk': $locale = "sk_SK.utf8"; break;
    case 'sl': $locale = "sl_SI.utf8"; break;
    case 'sr': $locale = "sr_RS"; break;
    case 'sv': $locale = "sv_SE.utf8"; break;
    case 'ta': $locale = "ta_IN"; break;
    case 'te': $locale = "te_IN"; break;
    case 'th': $locale = "th_TH.UTF-8"; break;
    case 'tr': $locale = "tr_TR.UTF-8"; break;
    case 'tt': $locale = "tt_RU.utf8"; break;
    case 'uk': $locale = "uk_UA.utf8"; break;
    case 'ur': $locale = "ur_PK"; break;
    case 'uz': $locale = "uz_UZ"; break;
    case 'vi': $locale = "vi_VN"; break;
    case 'wa': $locale = "wa_BE.UTF-8"; break;
    case 'zh': $locale = "zh_CN.UTF-8"; break;
    case 'zh_TW': $locale = "zh_TW.utf8"; break;
    }

    return $locale;
}

function isRTL( $language ) {
    return ($language == "ar")
        || ($language == "dv")
        || ($language == "fa")
        || ($language == "he")
        || ($language == "ur");
}

/*
*  starthtml: beginning of the page
*/
function start_head( $title,
                     $color,
                     $language,
                     $additional_css = array(),
                     $additional_js  = array(),
                     $additional_meta= array(),
                     $alternate_lang = array(),
                     $body_onload    = "",
                     $body_onunload  = "" )
{
    global $HTTP_GET_VARS;

    if ($language != "en" ) {
        $locale = getLocaleFromLanguage( $language );
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

      <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $language?>" lang="<?php echo $language?>"
        <?php if ( isRTL( $language ) ) { echo ' dir="rtl"'; } ?>
      >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Language" content="<?php echo $language?>" />

        <meta name="Author" content="VideoLAN" />
        <meta name="Keywords" content="VideoLAN, VLC, VLC player, VLC media player, download,
        media player, player download, codec, encoder, media converter, video, video player, multimedia, multicast,
        VLC, x262, x264, x265, DVBlast, Windows, Linux, Unix, BeOS, BSD, MacOS, MacOS X, OSX, Streaming,
        DVD, Matroska, Blu-Ray, FLV, Xvid, MPEG, MPEG2, MPEG4, H264, DivX, VideoLAN, MKV, m2ts,
        open source, free software, floss, free" />

        <meta name="Description" content="<?php echo _( $title ); ?>" />
        <title>VideoLAN - <?php echo _( $title ); ?></title>

        <?php /* Additional Meta */
            if( isset($additional_meta) ) {
            foreach($additional_meta as $meta) {
                echo  "<meta $meta />";
            }
        } ?>

        <?php /* Favicon */ ?>
        <link rel="shortcut icon" type="image/x-icon" href="//images.videolan.org/images/favicon.ico" />

        <?php /* RSS */ ?>
        <link rel="alternate" type="application/rss+xml" title="RSS - VideoLAN News" href="//images.videolan.org/videolan-news.rss" />
        <link rel="alternate" type="application/rss+xml" title="RSS - Developers Blog" href="http://planet.videolan.org/rss20.xml" />

        <?php /* Alternate */ ?>
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

        <?php /* CSS */ ?>
        <link rel="stylesheet" type="text/css" href="//images.videolan.org/style/style.css" />

        <?php /* Misc */ ?>
        <link rel="dns-prefetch" href="//get.videolan.org" />
        <link href="https://plus.google.com/+vlc" rel="publisher" />

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


        <?php /* jQuery */ ?>
        <?php /* Get the one in the Google CDN to get cached */ ?>
        <script src='//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' type='text/javascript'></script>
        <?php if( isset($additional_js) ) {
            foreach($additional_js as $js) {
                echo '<script src="'.$js.'" type="text/javascript"></script>';
            }
        } ?>

        <?php /* Analytics */ ?>
        <script type="text/javascript">
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-38853043-1']);
          _gaq.push(['_trackPageview']);
          (function() {
              var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
              ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
              var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </head>
<?php
}

/* Actual start of the body */
function start_body( $body_color, $language, $b_show_donate = true )
{
        echo '<body>';
        echo "<div id='bodyInner' class='$body_color'>";

    switch( $body_color ){
    case "red":   $imgSrc = "logoRed.png";    $imgArSrc = "madeByArgonRed.png";    break;
    case "blue":  $imgSrc = "logoBlue.png";   $imgArSrc = "madeByArgonBlue.png";   break;
    case "green": $imgSrc = "logoGreen.png";  $imgArSrc = "madeByArgonGreen.png";  break;
    case "pink":  $imgSrc = "logoPink.png";   $imgArSrc = "madeByArgonPink.png";   break;
    default:      $imgSrc = "logoOrange.png"; $imgArSrc = "madeByArgonOrange.png"; break;
    }
?>
   <a class="ltrFloatLeft" href='/'><?php image( $imgSrc, "VideoLAN association"); ?></a>
   <div class="ltrFloatLeft" id="nonprofitOrganizationDiv">
   <?php
    echo _('A project and a').' <a href="//www.videolan.org/videolan/" class="noUnderline">'._('non-profit organization').'</a>, '.
         _('composed of volunteers, developing and promoting free, open-source multimedia solutions.');?>
   </div>

   <?php if ($b_show_donate != true ) return; ?>
<!-- LTR: check the padding entry below next to dollar.png -->
   <div id='donate'>
       <div class="ltrFloatLeft" style='font-size: 14px; color: #909090; padding-top: 5px;'>
           <span style='text-transform: uppercase;'><?php echo _("donate"); ?></span> &nbsp;<a href='//www.videolan.org/contribute.html#money'>(<?php echo _("why?");?>)</a></div>
       <img src='//images.videolan.org/images/paypal.png' class="ltrFloatRight" alt="paypal" />
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
               <input class='text' type='text' name="amount" value='4.00' style='background: #fff url("//images.videolan.org/images/euro.png") no-repeat 65px 2px;' />
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
               <input id="dtext" class='text' type='text' name="amount" value='5.00' style='background: #fff url("//images.videolan.org/images/dollar.png") no-repeat 0 3px; padding-right: 10px; width: 75px;' />
               <button class='button' type='submit'><?php echo _("donate"); ?></button>
       </p></form>
   </div>
   <div id='social'>
      <div id='plusone' style="padding: 3px 10px;">
         <g:plusone size="medium" annotation="none" href="http://www.videolan.org"></g:plusone>
      </div>
      <div style="padding: 3px 14px;"><a href="http://www.facebook.com/vlc.media.player" style="padding-top: 10px;"><?php image( 'facebook.png', "Facebook" );?></a></div>
      <div style="padding: 2px 12px;"><a href="http://www.twitter.com/videolan"><?php image( 'twitter.png', "Twitter" );?></a></div>
   </div>
<?php
}

/* Menus */
function draw_menus( $nobanner, $alternate_lang )
{
?>
<div id='nav'>
   <div class='link'>
      <a href='//www.videolan.org/'><?php echo _("Home");?></a>
   </div>
   <div class='link'>
      <a href='//www.videolan.org/news.html'><?php echo _("News");?></a>
   </div>
   <div class='link'>
      <a href='//www.videolan.org/videolan/'>VideoLAN</a>
      <ul>
         <li><a href='//www.videolan.org/videolan/'><?php echo _("Project and Organization"); ?></a></li>
         <li><a href='//www.videolan.org/videolan/team/'><?php echo _("Team"); ?></a></li>
         <li><a href='//www.videolan.org/contact.html'><?php echo _("Contact us"); ?></a></li>
         <li><a href='//www.videolan.org/videolan/partners.html'><?php echo _("Partners"); ?></a></li>
         <li><a href='//www.videolan.org/videolan/mirrors.html'><?php echo _("Mirrors"); ?></a></li>
         <li><a href='//www.videolan.org/press/'><?php echo _("Press center"); ?></a></li>
         <li><a href='//www.videolan.org/videolan/events/'><?php echo _("Events"); ?></a></li>
         <li><a href='//www.videolan.org/security/'><?php echo _("Security center"); ?></a></li>
      </ul>
   </div>
   <div class='link'>
      <a href='//www.videolan.org/vlc/'>VLC</a>
      <ul>
         <li><a href='//www.videolan.org/vlc/'><?php echo _("Download"); ?></a></li>
         <li><a href='//www.videolan.org/vlc/features.html'><?php echo _("Features"); ?></a></li>
         <li><a href='//www.videolan.org/vlc/screenshots.html'><?php echo _("Screenshots"); ?></a></li>
         <li><a href='//www.videolan.org/vlc/skins.html'><?php echo _("Skins"); ?></a></li>
         <li><a href='http://addons.videolan.org/index.php?xcontentmode=903'><?php echo _("Extensions"); ?></a></li>
      </ul>
   </div>
   <div class='link'>
      <a href='//www.videolan.org/projects/'><?php echo _("Projects"); ?></a>
      <ul>
         <li><a href='//www.videolan.org/vlc/'>VLC media player</a></li>
         <li><a href='//www.videolan.org/vlmc/'>VideoLan Movie Creator</a></li>
         <li><a href='//www.videolan.org/projects/dvblast.html'>DVBlast</a></li>
         <li><a href='//www.videolan.org/developers/x264.html'>x264</a></li>
         <li><a href='//www.videolan.org/developers/x262.html'>x262</a></li>
         <li><a href='//www.videolan.org/developers/x265.html'>x265</a></li>
         <li><a href='//www.videolan.org/projects/multicat.html'>multicat</a></li>
         <li><a href='//www.videolan.org/projects/vlma/'>VLMa</a></li>
         <li><a href='//www.videolan.org/vlc/skineditor.html'>VLC Skin Editor</a></li>
         <li><hr /></li>
         <li><a href='//www.videolan.org/developers/libdvdcss.html'>libdvdcss</a></li>
         <li><a href='//www.videolan.org/developers/libbluray.html'>libbluray</a></li>
         <li><a href='//www.videolan.org/developers/libdvbpsi.html'>libdvbpsi</a></li>
         <li><a href='//www.videolan.org/developers/libaacs.html'>libaacs</a></li>
         <li><a href='//www.videolan.org/developers/libdvbcsa.html'>libdvbcsa</a></li>
         <li><a href='//www.videolan.org/developers/bitstream.html'>biTStream</a></li>
         <li><hr /></li>
         <li><a href='//www.videolan.org/projects/'><?php echo _("All Projects"); ?></a></li>
      </ul>
   </div>
   <div class='link'>
      <a href='//www.videolan.org/contribute.html'><?php echo _("Contribute"); ?></a>
      <ul>
         <li><a href='//www.videolan.org/contribute.html'><?php echo _("Donate time"); ?></a></li>
         <li><a href='//www.videolan.org/contribute.html#money'><?php echo _("Donate money"); ?></a></li>
         <li><a href='//www.videolan.org/goodies.html'><?php echo _("Get Goodies"); ?></a></li>
      </ul>
   </div>
   <div class='link'>
      <a href='//www.videolan.org/support/'><?php echo _("Support"); ?></a>
      <ul>
         <li><a href='//www.videolan.org/support/'><?php echo _("Support center"); ?></a></li>
         <li><a href='//www.videolan.org/support/faq.html'><?php echo _("FAQ"); ?></a></li>
         <li><a href='//www.videolan.org/legal.html'><?php echo _("Legal"); ?></a></li>
         <li><a href='http://wiki.videolan.org/'>Wiki</a></li>
         <li><a href='http://forum.videolan.org/'><?php echo _("Forums"); ?></a></li>
         <li><a href='//www.videolan.org/support/lists.html'><?php echo _("Mailing-Lists"); ?></a></li>
         <li><a href='//www.videolan.org/support/#bugs'><?php echo _("Report a bug"); ?></a></li>
      </ul>
   </div>
   <div class='link'>
      <a href='//www.videolan.org/developers/'><?php echo _("Dev' Zone"); ?></a>
   </div>
</div>

<div class="clearme"></div>

<?php
    /* Event banner */
    if ( !$nobanner )
        ;//echo '<center><a href="https://www.gandi.net/tshirts/"><img alt="Get a VLC T-shirt made by Gandi.net!" src="//images.videolan.org/images/partners/gandi_banner.png" /></a></center>';
    ?><?php
}

/* Footer */
function footer($tag = "", $alternate_lang=array()) {
?>
</div>
   <div id='footer'>
      <div style='background-image: url( "//images.videolan.org/images/divider.png" ); height: 15px; width: 100%;'></div>
      <div style='padding: 20px 10px 40px; width: 950px; margin: 0 auto;'>
           <a class="ltrFloatLeft margin-ltrRight50" href='/'>
            <?php image( 'logoGrey.png', 'Association VideoLAN' ); ?></a>
         <div class='footer_col'>
            <div class='footerHeading'>VLC media player</div>
            <ul>
              <li><a href='//www.videolan.org/vlc/'>VLC</a></li>
              <li><a href='//www.videolan.org/vlc/download-windows.html'>VLC for Windows</a></li>
              <li><a href='//www.videolan.org/vlc/download-macosx.html'>VLC for MacOS X</a></li>
              <li><a href='//www.videolan.org/vlc/download-ubuntu.html'>VLC for Ubuntu</a></li>
              <li><a href='//www.videolan.org/vlc/download-fedora.html'>VLC for Fedora</a></li>
              <li><a href='//www.videolan.org/vlc/skins.html'><?php echo _("Skins"); ?></a></li>
              <li><a href='http://addons.videolan.org/index.php?xcontentmode=903'><?php echo _("Extensions"); ?></a></li>
              <li><a href='//www.videolan.org/vlc/features.html'><?php echo _("Features"); ?></a></li>
              <li><a href='//www.videolan.org/vlc/screenshots.html'><?php echo _("Screenshots"); ?></a></li>
              <li><a href='//www.videolan.org/vlc/skineditor.html'>VLC Skin Editor</a></li>
            </ul>
         </div>
         <div class='footer_col'>
            <div class='footerHeading'><?php echo _("All Projects"); ?></div>
            <ul>
                 <li><a href='//www.videolan.org/vlmc/'>VideoLan Movie Creator</a></li>
                 <li><a href='//www.videolan.org/projects/dvblast.html'>DVBlast</a></li>
                 <li><a href='//www.videolan.org/developers/x264.html'>x264</a></li>
                 <li><a href='//www.videolan.org/developers/x262.html'>x262</a></li>
                 <li><a href='//www.videolan.org/developers/x265.html'>x265</a></li>
                 <li><a href='//www.videolan.org/projects/multicat.html'>multicat</a></li>
                 <li><a href='//www.videolan.org/projects/vlma/'>VLMa</a></li>
                 <li><a href='//www.videolan.org/developers/libdvdcss.html'>libdvdcss</a></li>
                 <li><a href='//www.videolan.org/developers/libbluray.html'>libbluray</a></li>
                 <li><a href='//www.videolan.org/developers/libdvbpsi.html'>libdvbpsi</a></li>
                 <li><a href='//www.videolan.org/developers/libaacs.html'>libaacs</a></li>
                 <li><a href='//www.videolan.org/developers/libdvbcsa.html'>libdvbcsa</a></li>
                 <li><a href='//www.videolan.org/developers/bitstream.html'>biTStream</a></li>
            </ul>
         </div>
         <div class='footer_col'>
            <div class='footerHeading'><?php echo _("Community"); ?></div>
            <ul>
                 <li><a href='http://wiki.videolan.org/'>Wiki</a></li>
                 <li><a href='http://forum.videolan.org/'><?php echo _("Forums"); ?></a></li>
                 <li><a href='//www.videolan.org/support/lists.php'><?php echo _("Mailing-Lists"); ?></a></li>
                 <li><a href='//www.videolan.org/support/faq.html'><?php echo _("FAQ"); ?></a></li>
                 <li><a href='//www.videolan.org/contribute.html'><?php echo _("Donate money"); ?></a></li>
                 <li><a href='//www.videolan.org/contribute.html'><?php echo _("Donate time"); ?></a></li>
                 <li><a href='//www.videolan.org/goodies.html'><?php echo _("Get Goodies"); ?></a></li>
            </ul>
         </div>
         <div class='footer_col'>
            <div class='footerHeading'>VideoLAN</div>
            <ul>
                 <li><a href='//www.videolan.org/videolan/'><?php echo _("Project and Organization"); ?></a></li>
                 <li><a href='//www.videolan.org/videolan/team/'><?php echo _("Team"); ?></a></li>
                 <li><a href='//www.videolan.org/legal.html'><?php echo _("Legal"); ?></a></li>
                 <li><a href='//www.videolan.org/contact.html'><?php echo _("Contact us"); ?></a></li>
                 <li><a href='//www.videolan.org/videolan/partners.html'><?php echo _("Partners"); ?></a></li>
                 <li><a href='//www.videolan.org/videolan/mirrors.html'><?php echo _("Mirrors"); ?></a></li>
                 <li><a href='//www.videolan.org/press/'><?php echo _("Press center"); ?></a></li>
                 <li><a href='//www.videolan.org/videolan/events/'><?php echo _("Events"); ?></a></li>
                 <li><a href='//www.videolan.org/security/'><?php echo _("Security center"); ?></a></li>
                 <li><a href='//www.videolan.org/contribute.html'><?php echo _("Get Involved"); ?></a></li>
                 <li><a href='//www.videolan.org/news.html'><?php echo _("News");?></a></li>
            </ul>
         </div>
         <div style='clear: both; padding-bottom: 30px;'></div>
         <div id='translation' style="font-size: 9px;">
            <?php
                if( isset($alternate_lang) && count($alternate_lang) > 0 ) {
                    echo "<div class='footerHeading'>Translations</div>";
                    $root_filename = explode('.', $_SERVER['SCRIPT_FILENAME'] );
                    foreach($alternate_lang as $lang) {
                        if( $lang == "en" )
                            echo  '<a href="/'.$root_filename[0].'.html">'.$lang.'</a>'."\n";
                        else
                            echo  '<a href="/'.$root_filename[0].'.'.$lang.'.html">'.$lang.'</a>'."\n";
                    }
                }
            ?>
         </div>
         <div style='clear: both; padding-bottom: 30px;'></div>
         <div style='text-align: center; line-height: 14px; font-size: 9px; color: #999; direction: ltr;'>
            <p>
            <a href='/legal.html'><?php echo _("Legal"); ?></a> | <a href='/contact.html'>Report Trademark Abuse</a><br />
            VideoLAN, VLC, VLC media player and x264 are trademarks internationally registered by the <a href="/videolan">VideoLAN non-profit organization.</a><br />
            VideoLAN software is licensed under various open-source licenses: use and distribution are defined by each software license.</p>
            <p>Design by <a href="http://www.madebyargon.com">Made By Argon</a>. Some icons are licensed under the <a href="https://creativecommons.org/licenses/by-sa/3.0/us/">CC-SA v3.0+</a>. <br />
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

/*
 * the real code
 */

/* Default configuration options taken from the file */
if(!isset($language) || $language == "" ) { $language = "en"; }
if(!isset($additional_css)) $additional_css = array();
if(!isset($additional_js))  $additional_js  = array();
if(!isset($additional_meta)) $additional_meta = array();
if(!isset($alternate_lang)) $alternate_lang = array();
if(!isset($body_onload))    $body_onload    = "";
if(!isset($body_onunload))  $body_onunload  = "";
if(!isset($body_color))     $body_color     = "orange";
if(!isset($nobanner))       $nobanner       = false;
if(!isset($show_donate))    $show_donate    = true;

/* render the page */
start_head( preg_replace( "/<[^>]*>/", "" , $title ), $body_color, $language,
           $additional_css, $additional_js, $additional_meta, $alternate_lang, $body_onload, $body_onunload );
start_body( $body_color, $language, $show_donate );
draw_menus( $nobanner, $alternate_lang );
?>
