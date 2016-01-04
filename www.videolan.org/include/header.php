<?php
require($_SERVER["DOCUMENT_ROOT"]."/include/layout_helper.php");

function getLocaleFromLanguage( $language )
{
    switch ($language) {
    case 'af': $locale = "af_ZA.utf8"; break;
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
    case 'lo': $locale = "lo_LA"; break;
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
    case 'sq': $locale = "sq_AL.utf8"; break;
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
                     $body_onunload  = "",
                     $new_design = false )
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
        <?php
            if ($new_design) {
                echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
                echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
            }
        ?>
        <meta http-equiv="Content-Language" content="<?php echo $language?>" />

        <meta name="Author" content="VideoLAN" />
        <meta name="Keywords" content="VideoLAN, VLC, VLC player, VLC media player, download,
        media player, player download, codec, encoder, media converter, video, video player, multimedia, multicast,
        VLC, x262, x264, x265, DVBlast, Windows, Linux, Unix, BeOS, BSD, MacOS, MacOS X, OSX, Streaming,
        DVD, Matroska, Blu-Ray, FLV, Xvid, MPEG, MPEG2, MPEG4, H264, DivX, VideoLAN, MKV, m2ts,
        open source, free software, floss, free" />

        <meta name="Description" content="<?php echo _( $title ); ?>" />
        <meta name="apple-itunes-app" content="app-id=650377962"/>
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
                    /* hreflang probably requires - instead of _ this probably needs fixing
                    * ask google to include all those?
                    * http://www.w3.org/International/articles/bcp47/
                    */
                    echo  '<link rel="alternate" hreflang="'.$lang.'" href="/'.$root_filename[0].'.'.$lang.'.html" />'."\n";
            }
        } ?>

        <?php /* CSS */ ?>
        <link rel="stylesheet" type="text/css" href="/style/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="/style/style.css" />

        <?php /* Misc */ ?>
        <link rel="dns-prefetch" href="//get.videolan.org" />
        <link href="https://plus.google.com/+vlc" rel="publisher" />

        <?php if( isset($additional_css) ) {
            foreach($additional_css as $css) {
                echo  '<link rel="stylesheet" type="text/css" href="'.$css.'" />';
            }
        } ?>

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!--[if lte IE 7]>
            * {
                behavior: url("/style/box-sizing.htc");
            }
        <![endif]-->
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
        <script src='/js/bootstrap.min.js' type='text/javascript'></script>
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
function start_body( $body_color, $language, $b_show_donate = true, $nobanner, $alternate_lang, $new_design_class )
{
    echo "<body class='$new_design_class'>";
    echo "<div id='bodyInner' class='$body_color'>";

    switch( $body_color ){
        case "red":   $imgSrc = "logoRed.png";    $imgArSrc = "madeByArgonRed.png";    break;
        case "blue":  $imgSrc = "logoBlue.png";   $imgArSrc = "madeByArgonBlue.png";   break;
        case "green": $imgSrc = "logoGreen.png";  $imgArSrc = "madeByArgonGreen.png";  break;
        case "pink":  $imgSrc = "logoPink.png";   $imgArSrc = "madeByArgonPink.png";   break;
        default:      $imgSrc = "logoOrange.png"; $imgArSrc = "madeByArgonOrange.png"; break;
    }
?>
    <?php echo draw_menus( $nobanner, $alternate_lang, $imgSrc, $b_show_donate ); ?>
    <div class="header container">
        <div class="row">
            <div class="col-sm-3">
                <a href='/'><?php image( $imgSrc, "VideoLAN association", "center-block img-responsive"); ?></a>
            </div>
            <div class="clearfix visible-xs-block"></div>
            <div class="col-sm-7" id="nonprofitOrganizationDiv2">
                <?php
                echo _('A project and a').' <a href="//www.videolan.org/videolan/" class="noUnderline">'._('non-profit organization').'</a>, '.
                 _('composed of volunteers, developing and promoting free, open-source multimedia solutions.');?>
            </div>
        </div>
        <div class="social-box">
            <div id='plusone' style="padding: 3px 10px;">
                <g:plusone size="medium" annotation="none" href="http://www.videolan.org"></g:plusone>
            </div>
            <div style="padding: 3px 14px;"><a href="http://www.facebook.com/vlc.media.player" style="padding-top: 10px;"><?php image( 'facebook.png', "Facebook" );?></a></div>
            <div style="padding: 2px 12px;"><a href="http://www.twitter.com/videolan"><?php image( 'twitter.png', "Twitter" );?></a></div>
        </div>
    </div>
<?php
}

/* Menus */
function draw_menus( $nobanner, $alternate_lang, $imgSrc, $b_show_donate )
{
?>
<nav id="nav" class="navbar navbar-default navbar-fixed-top">
 <div class="container">
    <div class="navbar-header">
        <a class="navbar-brand" href="/#">
        <?php image( $imgSrc, "VideoLAN association"); ?>
        </a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div id="main-navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="//www.videolan.org/videolan/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">VideoLAN <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href='//www.videolan.org/videolan/'><?php echo _("Team and Organization"); ?></a></li>
             <li><a href='//www.videolan.org/videolan/partners.html'><?php echo _("Friend"); ?></a></li>
             <li><a href='//www.videolan.org/videolan/events/'><?php echo _("Family album"); ?></a></li>
             <li><a href='//www.videolan.org/legal.html'><?php echo _("Legal"); ?></a></li>
             <li><a href='//www.videolan.org/press/'><?php echo _("Press center"); ?></a></li>
             <li><a href='//www.videolan.org/contact.html'><?php echo _("Contact us"); ?></a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="//www.videolan.org/vlc/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">VLC <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href='//www.videolan.org/vlc/'><?php echo _("Download"); ?></a></li>
            <li><a href='//www.videolan.org/vlc/features.html'><?php echo _("Features"); ?></a></li>
            <li><a href='//www.videolan.org/vlc/skins.html'><?php echo _("Customize"); ?></a></li>
            <li role="separator" class="divider"></li>
            <li><a href='//www.videolan.org/goodies.html'><?php echo _("Get Goodies"); ?></a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="//www.videolan.org/projects/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo _("Projects"); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href='//www.videolan.org/projects/dvblast.html'>DVBlast</a></li>
            <li><a href='//www.videolan.org/developers/x264.html'>x264</a></li>
            <li><a href='//www.videolan.org/developers/x262.html'>x262</a></li>
            <li><a href='//www.videolan.org/developers/x265.html'>x265</a></li>
            <li><a href='//www.videolan.org/projects/multicat.html'>multicat</a></li>
            <li><a href='//www.videolan.org/projects/vlma/'>VLMa</a></li>
            <li><a href='//www.videolan.org/vlc/skineditor.html'>VLC Skin Editor</a></li>
            <li><a href='//www.videolan.org/vlc/'>VLC media player</a></li>
            <li role="separator" class="divider"></li>
            <li><a href='//www.videolan.org/developers/libdvdcss.html'>libdvdcss</a></li>
            <li><a href='//www.videolan.org/developers/libbluray.html'>libbluray</a></li>
            <li><a href='//www.videolan.org/developers/libdvbpsi.html'>libdvbpsi</a></li>
            <li><a href='//www.videolan.org/developers/libaacs.html'>libaacs</a></li>
            <li><a href='//www.videolan.org/developers/libdvbcsa.html'>libdvbcsa</a></li>
            <li><a href='//www.videolan.org/developers/bitstream.html'>biTStream</a></li>
            <li role="separator" class="divider"></li>
            <li><a href='//www.videolan.org/projects/'><?php echo _("All Projects"); ?></a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="//www.videolan.org/contribute.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo _("Contribute"); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href='//www.videolan.org/contribute.html'><?php echo _("Getting started"); ?></a></li>
            <li><a href='//www.videolan.org/contribute.html#money'><?php echo _("Donate"); ?></a></li>
            <li><a href='//www.videolan.org/support/#bugs'><?php echo _("Report a bug"); ?></a></li>
          </ul>
        </li>
        <li>
          <a href="//www.videolan.org/support/"><?php echo _("Support"); ?></a>
        </li>
      </ul>
       <?php if ($b_show_donate == true ) {  ?>
        <ul class="nav navbar-nav pull-right donate-box">
            <li class="hidden-sm">
                <form class="donate2" action="https://www.paypal.com/en_US/cgi-bin/webscr" method="post">
                    <input name="cmd" value="_xclick" type="hidden"/>
                    <input name="business" value="sponsor@videolan.org" type="hidden"/>
                    <input name="item_name" value="Development and communication of VideoLAN" type="hidden"/>
                    <input name="no_note" value="0" type="hidden"/>
                    <input name="currency_code" value="EUR" type="hidden"/>
                    <input name="tax" value="0" type="hidden"/>
                    <input name="lc" value="GB" type="hidden"/>
                    <input name="no_shipping" value="1" type="hidden"/>
                    <input name="return" value="http://www.videolan.org/thank_you.html" type="hidden"/>
                    <input class="euros" type='text' name="amount" value='4.00' />
                    <button type='submit'><?php echo _("donate"); ?></button>
                </form>
            </li>
            <li class="hidden-sm">
                <form class="donate2" action="https://www.paypal.com/en_US/cgi-bin/webscr" method="post">
                    <input name="cmd" value="_xclick" type="hidden"/>
                    <input name="business" value="sponsor@videolan.org" type="hidden"/>
                    <input name="item_name" value="Development and communication of VideoLAN" type="hidden"/>
                    <input name="no_note" value="0" type="hidden"/>
                    <input name="currency_code" value="USD" type="hidden"/>
                    <input name="tax" value="0" type="hidden"/>
                    <input name="lc" value="US" type="hidden"/>
                    <input name="no_shipping" value="1" type="hidden"/>
                    <input name="return" value="http://www.videolan.org/thank_you.html" type="hidden"/>
                    <input id="dtext" class="dollars" type='text' name="amount" value='5.00'/>
                    <button type='submit'><?php echo _("donate"); ?></button>
                </form>
            </li>
            <li class="dropdown visible-sm">
                <a href="//www.videolan.org/contribute.html#money" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <?php echo _("Donate"); ?> <span class="caret"></span>
                </a>
                <ul class="dropdown-menu donate-dropdown pull-right">
                    <li>
                        <form class="donate2" action="https://www.paypal.com/en_US/cgi-bin/webscr" method="post">
                            <input name="cmd" value="_xclick" type="hidden"/>
                            <input name="business" value="sponsor@videolan.org" type="hidden"/>
                            <input name="item_name" value="Development and communication of VideoLAN" type="hidden"/>
                            <input name="no_note" value="0" type="hidden"/>
                            <input name="currency_code" value="EUR" type="hidden"/>
                            <input name="tax" value="0" type="hidden"/>
                            <input name="lc" value="GB" type="hidden"/>
                            <input name="no_shipping" value="1" type="hidden"/>
                            <input name="return" value="http://www.videolan.org/thank_you.html" type="hidden"/>
                            <input class="euros" type='text' name="amount" value='4.00' />
                            <button type='submit'><?php echo _("donate"); ?></button>
                        </form>
                    </li>
                    <li>
                        <form class="donate2" action="https://www.paypal.com/en_US/cgi-bin/webscr" method="post">
                            <input name="cmd" value="_xclick" type="hidden"/>
                            <input name="business" value="sponsor@videolan.org" type="hidden"/>
                            <input name="item_name" value="Development and communication of VideoLAN" type="hidden"/>
                            <input name="no_note" value="0" type="hidden"/>
                            <input name="currency_code" value="USD" type="hidden"/>
                            <input name="tax" value="0" type="hidden"/>
                            <input name="lc" value="US" type="hidden"/>
                            <input name="no_shipping" value="1" type="hidden"/>
                            <input name="return" value="http://www.videolan.org/thank_you.html" type="hidden"/>
                            <input id="dtext" class="dollars" type='text' name="amount" value='5.00'/>
                            <button type='submit'><?php echo _("donate"); ?></button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
        <?php } ?>
    </div>
 </div>
</nav>

<!-- header -->

<?php
    /* Event banner */
    if ( !$nobanner )
        ;//echo '<center><a href="https://www.gandi.net/tshirts/"><img alt="Get a VLC T-shirt made by Gandi.net!" src="//images.videolan.org/images/partners/gandi_banner.png" /></a></center>';
    ?><?php
}

/* Footer */
function footer($tag = "", $alternate_lang=array()) {
?>
    </div> <!-- BodyInner -->
    <div id='footer'>
        <div class="container">
            <div class="row">
                <a class="col-sm-12 col-md-3" href='/'>
                <?php image( 'logoGrey.png', 'Association VideoLAN', 'center-block' ); ?></a>
                <div class="col-xs-6 col-md-2">
                    <div class='footerHeading'>VLC media player</div>
                    <ul>
                        <li><a href='//www.videolan.org/vlc/'>VLC</a></li>
                        <li><a href='//www.videolan.org/vlc/download-windows.html'>VLC for Windows</a></li>
                        <li><a href='//www.videolan.org/vlc/download-macosx.html'>VLC for Mac OS X</a></li>
                        <li><a href='//www.videolan.org/vlc/download-ubuntu.html'>VLC for Ubuntu</a></li>
                        <li><a href='//www.videolan.org/vlc/download-android.html'>VLC for Android</a></li>
                        <li><a href='//www.videolan.org/vlc/download-ios.html'>VLC for iOS</a></li>
                        <li><a href='//www.videolan.org/vlc/skins.html'><?php echo _("Skins"); ?></a></li>
                        <li><a href='http://addons.videolan.org/index.php?xcontentmode=903'><?php echo _("Extensions"); ?></a></li>
                        <li><a href='//www.videolan.org/vlc/features.html'><?php echo _("Features"); ?></a></li>
                        <li><a href='//www.videolan.org/vlc/screenshots.html'><?php echo _("Screenshots"); ?></a></li>
                        <li><a href='//www.videolan.org/vlc/skineditor.html'>VLC Skin Editor</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-md-2">
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
                <div class="col-xs-6 col-md-2">
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
                <div class="col-xs-6 col-md-2">
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
            </div>
            <div class="row" style='padding-bottom: 30px;'>
                <div id='translation' class="col-md-12" style="font-size: 9px;">
                <?php
                    if( isset($alternate_lang) && count($alternate_lang) > 0 ) {
                        echo "<div class='footerHeading'>Translations: ";
                        echo '<select ONCHANGE="location = this.options[this.selectedIndex].value;">';
                        $root_filename = explode('.', $_SERVER['SCRIPT_FILENAME'] );
                        echo  '<option value="/'.$root_filename[0].'.html"></option>'."\n";
                        foreach($alternate_lang as $lang) {
                            if( $lang == "en" )
                                echo  '<option value="/'.$root_filename[0].'.html">'.$lang.'</option>'."\n";
                            else
                                echo  '<option value="/'.$root_filename[0].'.'.$lang.'.html">'.$lang.'</option>'."\n";
                        }
                        echo "</select></div>";
                    }
                ?>
                </div>
            </div>
            <div class="row" style='padding-bottom: 30px;'>
                <div class="col-md-12" style='text-align: center; line-height: 14px; font-size: 9px; color: #999; direction: ltr;'>
                    <p>
                        <a href='/legal.html'><?php echo _("Legal"); ?></a> | <a href='/contact.html'>Report Trademark Abuse</a><br />
                        VideoLAN, VLC, VLC media player and x264 are trademarks internationally registered by the <a href="/videolan">VideoLAN non-profit organization.</a><br />
                        VideoLAN software is licensed under various open-source licenses: use and distribution are defined by each software license.</p>
                        <p>Design by <a href="http://www.madebyargon.com">Made By Argon</a>. Some icons are licensed under the <a href="https://creativecommons.org/licenses/by-sa/3.0/us/">CC BY-SA 3.0+</a>. <br />
                        The VLC cone icon was designed by Richard Øiestad. Icons for VLMC, DVBlast and x264 designed by <a href='http://cuberto.com/'>Roman Khramov</a>.</p>
                </div>
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
if(!isset($new_design))     $new_design     = false;

$new_design_class = $new_design ? 'new-design' : '';
/* render the page */
start_head( preg_replace( "/<[^>]*>/", "" , $title ), $body_color, $language,
           $additional_css, $additional_js, $additional_meta, $alternate_lang, $body_onload, $body_onunload, $new_design );
start_body( $body_color, $language, $show_donate, $nobanner, $alternate_lang, $new_design_class );
?>
