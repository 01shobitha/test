<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/include/include.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/include/sponsors.php");

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
    case 'fy': $locale = "fy_NL"; break;
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

function isActive($location) {
    $pos = strpos($_SERVER['REQUEST_URI'], $location);
    if ($pos !== false) {
        echo ' active ';
    }
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
                echo '<meta http-equiv="X-UA-Compatible" content="IE=edge" />';
                echo '<meta name="viewport" content="width=device-width, initial-scale=1" />';
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

        <?php
        /* Alternate */
        if( isset($alternate_lang) ) {
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
        }
        /* Common styles */
        $base_css_url = isDeveloper() ? "/style/" : "//images.videolan.org/style/";
        $main_css = isDeveloper() ? array("bootstrap.min.css", "style.css") : array("bootstrap.min.css", "style.min.css");
        foreach ($main_css as $css) {
            echo  '<link rel="stylesheet" type="text/css" href="'.$base_css_url.$css.'" />';
        }
        ?>

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
        <script async="async" src="<?= isDeveloper() ? '/js/bootstrap.min.js': '//images.videolan.org/js/bootstrap.min.js' ?>" type="text/javascript"></script>
        <?php if( isset($additional_js) ) {
            foreach($additional_js as $js) {
                echo '<script async="async" src="'.$js.'" type="text/javascript"></script>';
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

            function isTouchDevice() {
                return 'ontouchstart' in window || navigator.maxTouchPoints;
            };

            $(document).ready(function() {
                //Early return if touch device
                if (isTouchDevice()) {
                    return;
                }
                //Open dropdown menu on hover if not touch device & navbar-toggle not visible
                $('#nav ul.nav li.dropdown').hover(function() {
                    if (!$('.navbar-toggle').is(':visible') && !$(this).hasClass('open')) {
                        $('.dropdown-toggle', this).trigger('click');
                    }
                }, function() {
                    if (!$('.navbar-toggle').is(':visible') && $(this).hasClass('open')) {
                        $('.dropdown-toggle', this).trigger('click');
                    }
                });
            });

        </script>
    </head>
<?php
}

/* Actual start of the body */
function start_body( $body_color, $language, $b_show_donate = true, $nobanner, $alternate_lang, $new_design_class, $show_sponsors_carousel )
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
        <div id="nonprofitOrganizationDiv2" class="center-block">
                <?php
                echo 'VideoLAN, '. _('a project and a').' <a href="//www.videolan.org/videolan/" class="noUnderline">'._('non-profit organization').'.</a> ';?>
        </div>
        <?php if ($show_sponsors_carousel) {
            $sponsorsDir = isDeveloper() ? '' : '//images.videolan.org/';
            $sponsorsDir .= 'images/partners/';
            $sponsors = getSponsors();
            shuffle($sponsors);
            ?>
            <div class="sponsors-carousel-wrapper">
                <h6><?= _("Partners"); ?></h6>
                <div id="sponsors-carousel">
                    <?php foreach($sponsors as $sponsor) {
                        echo '<a target="_blank" href="' . $sponsor["link"] .'">' .
                        '<img src="' . $sponsorsDir . $sponsor["imgSrc"] . '" />' .
                        '</a>';
                    }
                    ?>
                </div>
            </div>
        <?php } ?>
    </div>
<?php
}

/*
 * the real code
 */

/* Default configuration options taken from the file */
if(!isset($language) || $language == "" ) { $language = "en"; }
if(!isset($additional_css))         $additional_css = array();
if(!isset($additional_js))          $additional_js  = array();
if(!isset($additional_meta))        $additional_meta = array();
if(!isset($alternate_lang))         $alternate_lang = array();
if(!isset($body_onload))            $body_onload    = "";
if(!isset($body_onunload))          $body_onunload  = "";
if(!isset($body_color))             $body_color     = "orange";
if(!isset($nobanner))               $nobanner       = false;
if(!isset($show_donate))            $show_donate    = true;
if(!isset($new_design))             $new_design     = false;
if(!isset($show_sponsors_carousel)) $show_sponsors_carousel = false;

$new_design_class = $new_design ? 'new-design' : '';
/* render the page */
start_head( preg_replace( "/<[^>]*>/", "" , $title ), $body_color, $language,
           $additional_css, $additional_js, $additional_meta, $alternate_lang, $body_onload, $body_onunload, $new_design );
start_body( $body_color, $language, $show_donate, $nobanner, $alternate_lang, $new_design_class, $show_sponsors_carousel );
?>
