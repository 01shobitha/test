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
   <meta name="Keywords" content="DVD, MPEG, MPEG2, MPEG4, DivX, VideoLAN, VLC, VLS, Linux, Unix, BeOS, BSD, MacOS, MacOS X, OSX, QNX, Familiar Linux, iPAQ, multicast, IPv6" />
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
      case "vlc": $color_vlc = "#ffa"; break;
      case "streaming": $color_streaming = "#ffa"; break;
      case "doc": $color_doc = "#ffa"; break;
      case "support": $color_support = "#ffa"; break;
      default: $color_home = "#ffa"; break;
   }

?>

<table width="100%" cellspacing="0" cellpadding="0">

<tr>

 <td style="vertical-align: middle;width=35px" align="center">
   <img src="/images/cone-soppera1-mini.png" alt="Logo VideoLAN" />
  </td>

 <td style="width=90%">
  <table>
  <tr>

   <td style="width:90%">

     <table width="100%" cellspacing="3" cellpadding="0">
     <tr>
     <td style="background-color: <?echo($color_home);?>; width: 17%; vertical-align: middle;" align="center"><b><a href="/">Home</a></b></td>
     <td style="background-color: <?echo($color_vlc);?>; width: 16%; vertical-align: middle;" align="center"><b><a href="/vlc/">VLC media player</a></b></td>
     <td style="background-color: <?echo($color_streaming);?>; width: 17%; vertical-align: middle;" align="center"><b><a href="/streaming/">Streaming</a></b></td>
     <td style="background-color: <?echo($color_doc);?>; width: 17%; vertical-align: middle;" align="center"><b><a href="/doc/">Documentation</a></b></td>
     <td style="background-color: <?echo($color_support);?>; width: 16%; vertical-align: middle;" align="center"><b><a href="/support/">Support</a></b></td>
     <td style="background-color: #afa; width: 17%; vertical-align: middle;" align="center"><b><a href="http://developers.videolan.org/">Developers</a></b></td>
     </tr>
     </table>
   </td>

  </tr>
  <tr>

   <td>

    <table width="100%" cellspacing="2" cellpadding="0">
    <tr>
    <? switch($modules[1]) {
      case "vlc": second_bar_vlc(); break;
      case "streaming": second_bar_stream(); break;
      case "doc": break;
      case "support": second_bar_support(); break;
      default: second_bar_home(); break;
    } ?>
    </tr>
    </table>

   </td>

  </tr>
  </table>

 </td>
 <td>
   <form action="index.html" method="get">
     <select name="mirror">
     <!-- current: $GLOBALS['HTTP_HOST'] -->
     <option value="www.videolan.org">Châtenay, France (main)</option>
     <option value="www.fr.videolan.org">Paris, France</option>
     </select><input type="submit" value="Select Mirror" />
   </form>
 </td>
</tr>
</table>

<div style="margin: 10px;"><?

   /* This is where the real user page stands */

}

/* Second bar for vlc */

function second_bar_vlc() { ?>
<td class="secondbarvlc"><a href="/vlc/index.html">Download</a></td>
<td class="secondbarvlc"><a href="/vlc/features.html">Features</a></td>
<td class="secondbarvlc"><a href="/vlc/screenshots.html">Screenshots</a></td>
<? }

/* Second bar for streaming */

function second_bar_stream() { ?>
<td class="secondbarstream"><a href="/streaming/index.html">Overview</a></td>
<td class="secondbarstream"><a href="/streaming/features.html">Features</a></td>
<td class="secondbarstream"><a href="/streaming/download.html">Download</a></td>
<? }

/* Second bar for support */

function second_bar_support() { ?>
<td class="secondbarsupport"><a href="http://bugzilla.videolan.org">Bugzilla</a></td>
<td class="secondbarsupport"><a href="/support/lists.html">Mailing-lists</a></td>
<td class="secondbarsupport"><a href="/cgi-bin/irc/irc.cgi">IRCWeb</a></td>
<? }



/* Second bar for home */

function second_bar_home() { ?>
<td class="secondbarhome"><a href="/news.html">News</a></td>
<td class="secondbarhome"><a href="/events/index.html">Events</a></td>
<td class="secondbarhome"><a href="/team/index.html">Team</a></td>
<td class="secondbarhome"><a href="/partners.html">Partners</a></td>
<td class="secondbarhome"><a href="/contribute.html">Contribute</a></td>
<td class="secondbarhome"><a href="/contact.html">Contact</a></td>
<td class="secondbarhome"><a href="/links.html">Links</a></td>
<? }


   /*
    *  footer: bottom of the page
    */

function footer($title,$language,$date) { ?>

<hr />
<table cellspacing="0" cellpadding="2" style="width: 100%;" border="0">
  <tr>
    <td align="left">
      <a href="/">VideoLAN</a> &nbsp;-&nbsp;
      Paris, France &nbsp;-&nbsp; See the 
     <a href="http://brahma.via.ecp.fr/videolan/">statistics</a>
     &nbsp;-&nbsp; <? echo $date; ?>
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
