<?

function startbox($title,$color) { ?>
<table style="width: 100%;" cellspacing="0" cellpadding="0" border="0"><tr>
  <td class="<? echo $color; ?>"><? echo $title; ?></td></tr><tr><td><? }

function stopbox() { ?></td></tr></table><? }

   /*
    *  starthtml: beginning of the page
    */

function h2($title) {
?>
<table class="h2" cellspacing="0" cellpadding="0">
<tr class="h2">
<td class="h2">
<h2>
<? echo $title; ?>
</h2>
</td>
</tr>
</table>
<?
}

function h3($title) {
?>
<table class="h3" cellspacing="0" cellpadding="0">
<tr class="h3">
<td class="h3">
<h3>
<? echo $title; ?>
</h3>
</td>
</tr>
</table>
<?
}

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
      default: $modules[2]=$modules[1]; $modules[1]="home"; break;
   }

?>

<form action="index.html" method="get">
<table width="100%" cellspacing="0" cellpadding="5">

<tr>

 <td style="width: 35px; text-align: center; vertical-align: middle">
   <a href="/index.html"><img src="/images/cone-soppera1-mini.png" alt="Logo VideoLAN" style="vertical-align: middle; border-width: 0px;" /></a>
  </td>

 <td style="width: 100%; text-align: center; vertical-align: top;">

  <table style="width: 100%; text-align: center;" cellspacing="1" cellpadding="0">
  <tr>
     <? get_first_bar_item ( 6 , "home" , "Home" , "/" , $modules[1] ) ?>
     <? get_first_bar_item ( 6 , "vlc" , "VLC" , "/vlc/" , $modules[1] ) ?>
     <? get_first_bar_item ( 6 , "streaming" , "Streaming" , "/streaming/" , $modules[1] ) ?>
     <? get_first_bar_item ( 6 , "doc" , "Documentation" , "/doc/" , $modules[1] ) ?>
     <? get_first_bar_item ( 6 , "support" , "Support" , "/support/" , $modules[1] ) ?>
     <? get_first_bar_item ( 6 , "developers" , "Developers" , "http://developers.videolan.org" , $modules[1] ) ?>
  </tr>
  </table>
  <table style="width: 100%; text-align: center;" cellspacing="1" cellpadding="0">
  <tr>
    <? switch($modules[1]) {
      case "vlc": second_bar_vlc($modules[2]); break;
      case "streaming": second_bar_stream($modules[2]); break;
      case "doc": ?><td></td><?; break;
      case "support": second_bar_support($modules[2]); break;
      case "home": second_bar_home($modules[2]); break;
    } ?>
  </tr>
  </table>

 </td>
 <td style="text-align: center; vertical-align: middle">
     <select name="mirror">
     <!-- current: $GLOBALS['HTTP_HOST'] -->
     <option value="www.videolan.org">Main site (VIA)</option>
     <option value="www.fr.videolan.org">Mirror site (Zoy)</option>
     </select><br/><input type="submit" value="Select Mirror" />
 </td>
</tr>
</table>
</form>

<div style="margin: 10px;">
<?
   /* This is where the real user page stands */
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

/* Give an entire cell html code for the second menubar */
function get_second_bar_item ( $number , $module , $text , $url , $current_module ) {
  $size = floor ( 100 / $number );
  if ( $current_module == $module )
  {
     ?><td class="secondbarselected" style="width: <? echo $size; ?>%"><? echo $text; ?></td>
     <?
  }
  else
  {
     ?><td class="secondbar" style="width: <? echo $size; ?>%"><a class="secondbar" href="<? echo $url; ?>"><? echo $text; ?></a></td>
     <?
  }
}

/* Second bar for vlc */

function second_bar_vlc($module) { ?>
<? get_second_bar_item ( 3 , "index.html" , "Download" , "/vlc/" , $module ) ?>
<? get_second_bar_item ( 3 , "features.html" , "Features" , "/vlc/features.html" , $module ) ?>
<? get_second_bar_item ( 3 , "screenshots.html" , "Screenshots" , "/vlc/screenshots.html" , $module ) ?>
<? }

/* Second bar for streaming */

function second_bar_stream($module) { ?>
<? get_second_bar_item ( 3 , "index.html" , "Overview" , "/streaming/" , $module ) ?>
<? get_second_bar_item ( 3 , "features.html" , "Features" , "/streaming/features.html" , $module ) ?>
<? get_second_bar_item ( 3 , "download.html" , "Download" , "/streaming/download.html" , $module ) ?>
<? }

/* Second bar for support */

function second_bar_support($module) { ?>
<? get_second_bar_item ( 4 , "index.html" , "Overview" , "/support/" , $module ) ?>
<? get_second_bar_item ( 4 , "bug" , "Bugzilla" , "http://bugzilla.videolan.org" , $module ) ?>
<? get_second_bar_item ( 4 , "lists.html" , "Mailing-lists" , "/support/lists.html" , $module ) ?>
<? get_second_bar_item ( 4 , "irc" , "IRCWeb" , "/cgi-bin/irc/irc.cgi" , $module ) ?>
<? }



/* Second bar for home */

function second_bar_home($module) { ?>
<? get_second_bar_item ( 8 , "index.html" , "Overview" , "/index.html" , $module ) ?>
<? get_second_bar_item ( 8 , "news.html" , "News" , "/news.html" , $module ) ?>
<? get_second_bar_item ( 8 , "events" , "Events" , "/events/" , $module ) ?>
<? get_second_bar_item ( 8 , "team" , "Team" , "/team/" , $module ) ?>
<? get_second_bar_item ( 8 , "partners.html" , "Partners" , "/partners.html" , $module ) ?>
<? get_second_bar_item ( 8 , "contribute.html" , "Contribute" , "/contribute.html" , $module ) ?>
<? get_second_bar_item ( 8 , "contact.html" , "Contact" , "/contact.html" , $module ) ?>
<? get_second_bar_item ( 8 , "links.html" , "Links" , "/links.html" , $module ) ?>
<? }


   /*
    *  footer: bottom of the page
    */

function footer($tag) {
   global $language; ?>
<hr />
<table cellspacing="0" cellpadding="2" style="width: 100%;" border="0">
  <tr>
    <td align="left">
      <a href="/">VideoLAN</a> &nbsp;-&nbsp;
      See the
     <a href="http://brahma.via.ecp.fr/videolan/">statistics</a>
     &nbsp;-&nbsp; <? echo $tag; ?>
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
    /* FIXME: mirror code is broken */
    header("Location: http://$mirror".$GLOBALS['PHP_SELF']);
    die();
}

/* default language and date */
if($lang=="") { $lang = "en"; }

/* render the page */
starthtml(ereg_replace("<[^>]*>","",$title));

?>
