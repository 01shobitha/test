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

   switch($modules[1]) {
      case "404.html": case "403.html": break;
      case "vlc": break;
      case "streaming": break;
      case "doc": break;
      case "support": break;
      default: $modules[1]="home"; break;
   }

?>

<form action="index.html" method="get">
<table width="100%" cellspacing="0" cellpadding="5">

<tr>

 <td style="width: 35px; text-align: left; vertical-align: middle" align="center">
   <img src="/images/cone-soppera1-mini.png" alt="Logo VideoLAN" />
  </td>

 <td style="width: 100%">

  <table style="width: 100%; text-align: center; vertical-align: middle;">
  <tr>
     <? get_first_bar_item ( 6 , "home" , "Home" , "/" , $modules[1] ) ?>
     <? get_first_bar_item ( 6 , "vlc" , "VLC" , "/vlc/" , $modules[1] ) ?>
     <? get_first_bar_item ( 6 , "streaming" , "Streaming" , "/streaming/" , $modules[1] ) ?>
     <? get_first_bar_item ( 6 , "doc" , "Documentation" , "/doc/" , $modules[1] ) ?>
     <? get_first_bar_item ( 6 , "support" , "Support" , "/support/" , $modules[1] ) ?>
     <? get_first_bar_item ( 6 , "developers" , "Developers" , "http://developers.videolan.org" , $modules[1] ) ?>
  </tr>
  </table>
  <table style="width: 100%">
  <tr>
    <? switch($modules[1]) {
      case "vlc": second_bar_vlc(); break;
      case "streaming": second_bar_stream(); break;
      case "doc": break;
      case "support": second_bar_support(); break;
      case "home": second_bar_home(); break;
    } ?>
  </tr>
  </table>

 </td>
 <td style="text-align: center; vertical-align: middle">
     <select name="mirror">
     <!-- current: $GLOBALS['HTTP_HOST'] -->
     <option value="www.videolan.org">Châtenay, France (main)</option>
     <option value="www.fr.videolan.org">Paris, France</option>
     </select><br/><input type="submit" value="Select Mirror" />
 </td>
</tr>
</table>
</form>

<div style="margin: 10px;">

   /* This is where the real user page stands */
<p>
1=<? echo $modules[1]; ?>
</p>
<p>
2=<? echo $modules[2]; ?>
</p>
<p>
3=<? echo $modules[3]; ?>
</p>
<?
}

/* Give an entire cell html code for the first menubar */
function get_first_bar_item ( $number , $module , $text , $url , $current_module ) {
  $size = floor ( 100 / $number );
  if ( $current_module == $module )
  {
     ?><td class="firstbarselected" style="width: <? echo $size; ?>%"><? echo $text; ?></td>
     <?
  }
  else
  {
     ?><td class="firstbar" style="width: <? echo $size; ?>%"><a class="firstbar" href="<? echo $url; ?>"><? echo $text; ?></a></td>
     <?
  }
}

/* Second bar for vlc */

function second_bar_vlc() { ?>
<? get_first_bar_item ( 3 , "/index.html" , "Download" , "/vlc/index.html" , $modules[2] ) ?>
<? get_first_bar_item ( 3 , "/features.html" , "Features" , "/vlc/features.html" , $modules[2] ) ?>
<? get_first_bar_item ( 3 , "/screenshots.html" , "Screenshots" , "/vlc/screenshots.html" , $modules[2] ) ?>
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
