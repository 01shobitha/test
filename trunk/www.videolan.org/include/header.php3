<?

function startbox($title,$color) { ?>
<table style="width: 100%;" cellspacing="0" cellpadding="0" border="0"><tr>
  <td class="<? echo $color; ?>"><? echo $title; ?></td></tr><tr><td><? }

function stopbox() { ?></td></tr></table><? }

   /*
    *  starthtml: beginning of the page
    */

function starthtml($title) { ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   <meta name="GENERATOR" content="vim [GNU/Linux], GNU Emacs" />
   <meta name="Author" content="videolan@videolan.org (VideoLAN team)" />
   <meta name="Keywords" content="DVD, MPEG, MPEG2, VideoLAN, VLC, VLS, Linux, Unix, BeOS, BSD, MacOS, MacOS X, OSX, QNX, Familiar Linux, iPAQ" />
   <meta name="Description" content="<? echo $title; ?>" />
   <title><? echo $title; ?></title>
   <link rel="stylesheet" type="text/css" href="/main.css" />
</head>
<body><?

   /*
    * The cool navigation bar, including mirror drop-down menu
    */

   $modules = split("/", $GLOBALS['PHP_SELF']);

   $color_home = "#9bf";
   $color_vlc = "#9bf";
   $color_doc = "#9bf";
   $color_streaming = "#9bf";
   $color_support = "#9bf";

   switch($modules[1]) {
      case "404.html": case "403.html": break;
      case "vlc": $color_vlc = "inherit"; break;
      case "streaming": $color_streaming = "inherit"; break;
      case "doc": $color_doc = "inherit"; break;
      case "support": $color_support = "inherit"; break;
      default: $color_home = "inherit"; break;
   }

?><form action="index.html" method="get">
  <table width="100%" cellspacing="3" cellpadding="0"><tr>
    <td style="background-color: <?echo($color_home);?>; width: 17%; vertical-align: middle;" align="center"><a href="/">Home</a></td>
    <td style="background-color: <?echo($color_vlc);?>; width: 16%; vertical-align: middle;" align="center"><a href="/vlc/">VLC Media Player</a></td>
    <td style="background-color: <?echo($color_streaming);?>; width: 17%; vertical-align: middle;" align="center"><a href="/streaming/">Streaming</a></td>
    <td style="background-color: <?echo($color_doc);?>; width: 17%; vertical-align: middle;" align="center"><a href="/doc/">Documentation</a></td>
    <td style="background-color: <?echo($color_support);?>; width: 16%; vertical-align: middle;" align="center"><a href="/support/">Support</a></td>
    <td style="background-color: #afa; width: 17%; vertical-align: middle;" align="center"><a href="http://developers.videolan.org/">Developers</a></td>
    <td style="white-space: nowrap;">
      <select name="mirror">
        <!-- current: $GLOBALS['HTTP_HOST'] -->
        <option value="www.videolan.org">Ch�tenay, France (main)</option>
        <option value="www.fr.videolan.org">Paris, France</option>
      </select><input type="submit" value="Select Mirror" />
    </td>

  </tr></table>
</form>

<div style="margin: 10px;"><?

   /* This is where the real user page stands */

}

   /*
    *  footer: bottom of the page
    */

function footer($title,$language,$date) { ?>

<hr />
<table cellspacing="0" cellpadding="2" style="width: 100%;" border="0">
  <tr>
    <td align="left">
      <a href="/">VideoLAN</a> &nbsp;-&nbsp;
      Paris, France &nbsp;-&nbsp; <? echo $date; ?>
    </td>
    <td align="right" style="white-space: nowrap;">
    <? if($language=="fr") { } else { ?>valid<? } ?>
    <a href="http://validator.w3.org/check/referer">XHTML 1.0 Strict</a>
    &amp;
    <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
    <? if($language=="fr") { ?>valides<? } else { } ?>
    </td>
  </tr>
</table>

</div><?

    /*
     * end of the body
     */

?></body></html><? }


/*
 * the real code
 */

if($mirror)
{
    /* FIXME : mirror code is broken */
    header("Location: http://$mirror".$GLOBALS['PHP_SELF']);
    die();
}

/* default language and date */
if($lang=="") { $lang = "en"; }

/* render the page */
starthtml(ereg_replace("<[^>]*>","",$title));

?>
