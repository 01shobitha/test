<?

function startbox($title,$color) { ?>
<table class="fill" cellspacing="0" cellpadding="0" border="0"><tr>
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
   <meta name="Keywords" content="DVD, MPEG, MPEG2, VideoLAN, Linux, Unix, BeOS, BSD, MacOS, MacOS X, OSX, QNX, Familiar Linux, iPAQ" />
   <meta name="Description" content="<? echo $title; ?>" />
   <title><? echo $title; ?></title>
   <link rel="stylesheet" type="text/css" href="/main.css" />
</head>
<body><?

   /*
    * The cool navigation bar, including mirror drop-down menu
    */

echo "self: ".$GLOBALS['HTTP_SELF']."<br>";
$module = split($GLOBALS['HTTP_SELF'], "/");
$module = $module[1];
echo "module: ".$module."<br>";

?><form action="index.html" method="get">
  <table width="100%" cellspacing="3" cellpadding="0"><tr>
    <td style="background-color: inherit; width: 17%; vertical-align: middle;" align="center"><a href="/">Home</a></td>
    <td style="background-color: #aaaaff; width: 16%; vertical-align: middle;" align="center"><a href="/vlc/">VLC Media Player</a></td>
    <td style="background-color: #aaaaff; width: 17%; vertical-align: middle;" align="center"><a href="/streaming/">Streaming</a></td>
    <td style="background-color: #aaaaff; width: 17%; vertical-align: middle;" align="center"><a href="/doc/">Documentation</a></td>
    <td style="background-color: #aaaaff; width: 16%; vertical-align: middle;" align="center"><a href="/support/">Support</a></td>
    <td style="background-color: #aaffaa; width: 17%; vertical-align: middle;" align="center"><a href="http://developers.videolan.org/">Developers</a></td>
    <td class="nowrap">
      <select name="mirror">
        <!-- current: $GLOBALS['HTTP_HOST'] -->
        <option value="www.videolan.org">Châtenay, France (main)</option>
        <option value="www.fr.videolan.org">Paris, France</option>
      </select><input type="submit" value="Select Mirror" />
    </td>

  </tr></table>
</form><?

   /*
    * The main table
    */

?><table border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td><?

        /*
         * the cone logo
         */

      ?><table class="fill">
        <tr>
          <td class="center">
            <a href="/"><img src="/images/cone.png" width="78" height="100" alt="Logo" style="border: 0;" /></a>
          </td>
        </tr>
      </table><?

        /*
         * the side menu
         */
          switch($module) {
           case "vlc": ?>
  <h2><a href="/vlc/">VLC Media Player</a></h2>
    <a href="/vlc/">overview</a><br />
    <a href="/vlc/">features</a><br />
    <a href="/vlc/">downloads</a><br />
    <a href="/vlc/">screenshots</a><br />
    <a href="/vlc/">FAQ</a><br /> <?
             break;
           case "streaming": ?>
  <h2>Streaming</h2>
    <a href="/streaming/">overview</a><br />
    <a href="/streaming/">features</a><br />
    <a href="/streaming/">downloads</a><br />
    <a href="/streaming/">FAQ</a><br /> <?
             break;
           case "doc": ?>
  <h2><a href="/doc/">Documentation</a></h2> <?
             break;
           case "support": ?>
  <h2>Support</h2>
    <a href="/doc/">documentation</a><br />
    <a href="/lists.html">mailing-lists</a><br />
    <a href="/cgi-bin/irc/irc.cgi">IRC</a><br /> <?
           default: ?>
  <h2><a href="/">Home</a></h2>
    <a href="/news.html">news</a><br />
    <a href="/events/index.html">events</a><br />
    <a href="/partners.html">partners</a><br />
    <a href="/contribute.html">contribute</a><br /> <?
             break;
         } ?>

    </td><?

   /*
    *  This is where the real user page stands
    */

?>  <td class="fill"><? }

   /*
    *  footer: bottom of the page
    */

   function footer($title,$language,$date) { ?>
      <hr />
      <table cellspacing="0" cellpadding="2" class="fill" border="0">
        <tr>
          <td align="left">
            <a href="/">VideoLAN</a> &nbsp;-&nbsp;
            Paris, France &nbsp;-&nbsp; <? echo $date; ?>
          </td>
          <td align="right" class="nowrap">
          <? if($language=="fr") { } else { ?>valid<? } ?>
          <a href="http://validator.w3.org/check/referer">XHTML 1.0 Strict</a>
          &amp;
          <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
          <? if($language=="fr") { ?>valides<? } else { } ?>
          </td>
        </tr>
      </table><?

    /*
     * end of the page table
     */

    ?></td>
  </tr>
</table><?

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
    header("Location: http://$mirror".$GLOBALS['HTTP_SELF']);
    die();
}

/* default language and date */
if($lang=="") { $lang = "en"; }

/* render the page */
starthtml(ereg_replace("<[^>]*>","",$title));

?>
