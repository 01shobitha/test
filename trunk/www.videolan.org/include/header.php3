<?

function startbox($title,$color) { ?>

<table class="fill" cellspacing="0" cellpadding="0" border="0">

  <tr>
    <td class="<? echo $color; ?>">
      <? echo $title; ?>
    </td>
  </tr>


  <tr>
    <td>
<? }

function stopbox() { ?>
    </td>
  </tr>
</table>

<? }

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
<body>

<table width="100%" cellspacing="3" cellpadding="0"><tr>
  <td style="background-color: #ffaaaa;" width="17%" align="center">Home</td>
  <td style="background-color: #ffcccc;" width="16%" align="center">VLC Media Player</td>
  <td style="background-color: #ffaaaa;" width="17%" align="center">Streaming</td>
  <td style="background-color: #ffaaaa;" width="17%" align="center">Documentation</td>
  <td style="background-color: #ffaaaa;" width="16%" align="center">Support</td>
  <td style="background-color: #aaffaa;" width="17%" align="center">Developers</td>
</tr></table>
<? }

function menu_vlc() { ?>
    <a href="/">back to VideoLAN</a><br />
  <h2>VideoLAN&nbsp;Client</h2>
    <a href="/vlc/index.html">overview</a><br />
    <a href="/vlc/screenshots.html">screenshots</a><br />
    <a href="/vlc/download.html">download</a><br />
    <a href="/vlc/doc.html">user&nbsp;doc</a><br />
  <h2>Development</h2>
    <a href="/vlc/todo.html">TODO&nbsp;list</a><br />
    <a href="/vlc/changelog.html">ChangeLog</a><br />
    <a href="/cvs.html">CVS</a><br />
    <a href="/vlc/developers.html">devel&nbsp;doc</a><br />
  <h2>Ports</h2>
    <a href="/vlc/beos.html">BeOS</a><br />
    <a href="/vlc/bsd.html">BSD</a><br />
    <a href="/vlc/familiar.html">iPAQ Familiar Linux</a><br />
    <a href="/vlc/linux.html">Linux</a><br />
    <a href="/vlc/macosx.html">MacOS&nbsp;X</a><br />
    <a href="/vlc/qnx.html">QNX&nbsp;RTOS</a><br />
    <a href="/vlc/solaris.html">Solaris</a><br />
    <a href="/vlc/windows.html">Windows</a><br />
<? }

function menu_vls() { ?>
    <a href="/">back to VideoLAN</a><br />
  <h2>VideoLAN&nbsp;Server</h2>
    <a href="/vls/index.html">overview</a><br />
    <a href="/vls/download.html">download</a><br />
    <a href="/vls/admin/index.html">admin&nbsp;tools</a><br />
    <a href="/vls/sat/index.html">satellite</a><br />
    <a href="/vls/doc.html">user&nbsp;doc</a><br />
  <h2>Development</h2>
    <a href="/vls/todo.html">TODO&nbsp;list</a><br />
    <a href="/vls/changelog.html">ChangeLog</a><br />
    <a href="/cvs.html">CVS</a><br />
    <a href="/vls/developers.html">devel&nbsp;doc</a><br />
<? }

function menu_vlms() { ?>
    <a href="/">back to VideoLAN</a><br />
  <h2>VideoLAN&nbsp;MiniServer</h2>
    <a href="/vlms/index.html">overview</a><br />
    <a href="/vlms/download.html">download</a><br />
  <h2>Development</h2>
    <a href="/vlms/changelog.html">ChangeLog</a><br />
<? }

function menu_network() { ?>
    <a href="/">back to VideoLAN</a><br />
  <h2>Network&nbsp;Tools</h2>
    <a href="/network/">overview</a><br />
    <a href="/network/download.html">download</a><br />
    <a href="/network/doc.html">doc</a><br />
  <h2>Development</h2>
    <a href="/network/changelog.html">ChangeLog</a><br />
<? }

function menu_libdvdcss() { ?>
    <a href="/">back to VideoLAN</a><br />
  <h2>libdvdcss</h2>
    <a href="/libdvdcss/index.html">overview</a><br />
    <a href="/libdvdcss/download.html">download</a><br />
  <h2>Development</h2>
    <a href="/libdvdcss/doc/">Documentation</a><br />
    <a href="/libdvdcss/changelog.html">ChangeLog</a><br />
<? }

function menu_libdvbpsi() { ?>
    <a href="/">back to VideoLAN</a><br />
  <h2>libdvbpsi</h2>
    <a href="/libdvbpsi/index.html">overview</a><br />
    <a href="/libdvbpsi/download.html">download</a><br />
  <h2>Development</h2>
    <a href="/libdvbpsi/doc/">Documentation</a><br />
    <a href="/libdvbpsi/changelog.html">ChangeLog</a><br />
<? }

function menu_videolan() { ?>
  <h2>VideoLAN</h2>
    <a href="/">homepage</a><br />
    <a href="/intro.html">overview</a><br />
    <a href="/partners.html">partners</a><br />
    <a href="/news.html">news</a><br />
    <a href="/events/index.html">events</a><br />
    <a href="/lists.html">mailing-lists</a><br />
    <a href="/contribute.html">contribute</a><br />
  <h2>Software</h2>
    <a href="/vlc/">VideoLAN&nbsp;Client</a><br />
    <a href="/vls/">VideoLAN&nbsp;Server</a><br />
    <a href="/vlms/">VideoLAN&nbsp;MiniServer</a><br />
    <a href="/network/">Network&nbsp;Tools</a><br />
    <a href="/libdvdcss/">libdvdcss</a><br />
    <a href="/libdvbpsi/">libdvbpsi</a><br />
  <h2>Resources</h2>
    <a href="/doc/">documentation</a><br />
    <a href="/team/">the team</a><br />
    <a href="/cgi-bin/cvsweb">CVSWeb</a><br />
    <a href="/cgi-bin/irc/irc.cgi">IRCWeb</a><br />
    <a href="/freedvd.html">CSS-free&nbsp;DVDs</a><br />
    <a href="/links.html">links</a><br />
    <a href="/contact.html">Contact us</a>
<? }

   /*
    *  startmenu: page header when the menu is displayed
    */

function startmenu($title) {
  global $page, $dir; $pre = "/";
  $module = split("/", $dir); $module = $module[1]; ?>
<!-- main table -->
<table border="0" cellspacing="0" cellpadding="10">
  <tr>

    <td>

      <!-- Ze cone -->
      <table class="fill">
        <tr>
          <td class="center">
            <!--[<a href="<? echo $page; ?>?menu=no">hide&nbsp;menu</a>]
            <br />-->
            <img src="/images/cone.png" width="78" height="100" alt="Logo" />
          </td>
        </tr>
      </table>


      <!-- Ze meniou -->
      <? switch($module) {
           case "vlc": menu_vlc(); break;
           case "vls": menu_vls(); break;
           case "vlms": menu_vlms(); break;
           case "network": menu_network(); break;
           case "libdvdcss": menu_libdvdcss(); break;
           case "libdvbpsi": menu_libdvbpsi(); break;
           default: menu_videolan(); break;
         } ?>

    </td>


    <td class="fill">
<? }

   /*
    *  bottom: bottom of the page
    */

   function bottom($title,$language,$date) { ?>
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
    &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
    <? if($language=="fr") { ?>valides<? } else { } ?>
    </td>

  </tr>
</table>
<? }

   /*
    *  stopmenu
    */

function stopmenu() { ?>
    </td>
  </tr>
</table>
<? }

   /*
    *  stophtml: end of the page
    */

   function stophtml() { ?>
</body>
</html>
<? }

/*
 * the real code
 */

$lang=""; $date=""; $title="";

if($mirror)
{
    header("Location: http://$mirror/$page.html");
    die();
}

/* default language and date */
if($lang=="") { $lang = "en"; }

/* render the page */
starthtml(ereg_replace("<[^>]*>","",$title));
startmenu($title);

?>
