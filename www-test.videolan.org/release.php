<?php

echo '<?xml version="1.0" encoding="utf-8" ?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
       "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="Generator" content="vim [GNU/Linux], GNU Emacs" />
   <meta name="Author" content="videolan@videolan.org - VideoLAN" />
   <meta name="Keywords" content="DVD, MPEG, MPEG2, MPEG4, DivX, VideoLAN,
     VLC, VLS, Linux, Unix, BeOS, BSD, MacOS, MacOS X, OSX, QNX,
     Familiar Linux, iPAQ, multicast, IPv6" />
   <meta name="Description" content="VideoLAN - Open Source multimedia and streaming solutions for every OS!" />
   <title>VideoLAN - Open Source multimedia and streaming solutions for every OS!</title>
   <link rel="alternate" type="application/rss+xml" title="RSS - VideoLAN News" href="/videolan-news.rss" />
   <link rel="alternate" type="application/rss+xml" title="RSS - Developers' Planet" href="http://planet.videolan.org/rss20.xml" />
   <link rel="shortcut icon" type="image/x-icon" href="/images/icons/favicon.ico" />
   <style type="text/css">

/* Clearing floats easily, for all browsers */
.clearfix:after { content: "."; visibility: hidden; height: 0; display: block;clear: both; }
.clearfix {display: inline-block;}
/* Hides from IE-mac \*/
* html .clearfix {height: 1%;}
.clearfix {display: block;}
/* End hide from IE-mac */

/***************** General Styles *********************/
* { padding: 0; margin: 0 }
html, body { width: 100%; min-width: 750px; border: 0; margin: 0; padding: 0; }
body {  background: #fff url(http://images.videolan.org/images/bg.png) repeat-x top; 
    font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #333; text-align: center;}

img { border: none;}
a, a:link, a:visited { color: #f60; }
a:hover { color: #333; }
h1 {    font-family: sans-serif, Helvetica, Arial;
    font-weight: normal; color: #333; font-size: 26px;
    padding: 35px 0 12px; line-height: 19px; }

h2 {    color: #2D58AE; font-weight: bold; font-size: 18px;
    padding: 25px 0 4px; line-height: 19px; }

h3 {    font-family: sans-serif, Helvetica, Arial;
    color: #333;font-weight: bold;font-size: 15px; 
    margin: 0; padding: 10px 0 4px; line-height: 19px;
    border-bottom: 2px dotted #E4E7E9; }

p.center { text-align:center;}
img.center { display: block; margin: auto; }
.hidden { display:none; }
.clearme { clear:both;}
/************************ Header ***********************/

#navmenucontainer, #submenucontainer { width: 100%; margin: 0; padding: 0;}
/* Main menu */
#navmenucontainer { height: 28px; }
#navmenu { float: left; padding: 4px 0; vertical-align: middle;}
#navmenu li { display: inline; margin: 0 16px 0 0; padding: 0; }
#navmenu li a {
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-weight: bold; font-size: 11px; text-decoration: none;color: #039; }

#navmenu li.selected a { font-family: Verdana, Arial, Helvetica, sans-serif;
    font-weight: bold; font-size: 11px; text-decoration: none;color: #004; }
#navmenu li a:hover { color: #004;text-decoration: none;}

/* Submenu */
#submenucontainer { text-align: left; height: 47px;}
#submenucontainer ul { padding: 0; }
#submenucontainer ul li { display: inline; }
#submenucontainer ul li a {
    font-family: Geneva, Arial, Helvetica, sans-serif;
    font-weight: normal; color: #2D58AE;font-size: 17px;
    text-decoration: none;
    float: left; padding: 14px 20px 10px 0;
    text-transform: lowercase; }

#submenucontainer ul li.selected a {
    font-family: Geneva, Arial, Helvetica, sans-serif;
    font-weight: normal; color: #2D58AE;font-size: 17px;
    text-decoration: none;
        font-style: italic;
/*  text-shadow: 0.2em 0.2em;*/
    float: left; padding: 14px 20px 10px 0;
    text-transform: lowercase;}

#submenu li a:hover, #submenu li a:active {  color: #2E3A6B; text-decoration: underline; } 

#pagecontainer { min-width: 780px; width: 86%; height: 100%; margin: 0 auto; }

/******************* Main page content - Global ***********************/

#maincontent {text-align: left; min-width: 780px; }
#maincontent table { border: none; table-layout: fixed; }

#left { float:left;width: 56%; padding-bottom: 55px; }
#right { float:right; width: 40%; padding-bottom: 55px; }
#fullwidth { padding-bottom: 55px; float:left; }

#left p, #right p, #fullwidth p {padding: 0 0 10px 0; line-height: 135%; }

/************** Main page content - Specific styles ******************/

/* DL */
#download { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 20px; background-color: #D4E0F7; padding: 15px; border: 1px solid #417ADC;float: left; }
#download a { color: #2D58AE }
#donate { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 20px; background-color: #FFC994; padding: 15px; border: 1px solid #C60;float: right; }
.more { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px;text-align: left; padding-top: 10px; text-decoration: none;}

/* Pictures */
.videolan-logo { float: left; width: 120px; height: 45px; }
.vlc-logo {  float: left;width: 64px;height: 64px;
    margin-left: -5px; padding-bottom: 15px;
    background: url(http://images.videolan.org/images/vlc-logo.gif) left top no-repeat; }

.blue-bullet { padding: 0 0 20px 0;line-height: 19px; list-style: none}
.blue-bullet li {
    background: url(http://images.videolan.org/images/bullet-blue-trans.png) left top no-repeat;
    padding: 0 0 4px 25px;}
.blue-bullet2 { padding: 0 0 20px 0;line-height: 19px; list-style: none}
.blue-bullet2 li { background: url(http://images.videolan.org/images/bullet-blue-trans.png) right top no-repeat;
    padding: 0 25px 4px 25px;}

/************************ Footer Layout ****************************/
#footer {   color: #75818A; background: #E4E7E9; font-size: 11px;text-align: center;
        clear: both; height: 40px; margin: 0;padding: 15px; border-top: 1px solid #C8CDD0;}

#footer a { color: #75818A;  text-decoration: underline; }
#footer a:hover { color: #333; text-decoration: none; }
#footer p { margin: 0;padding: 0;line-height: 20px; }
#pipo { 
padding: 10px 5% 20px 5%; 
color: #40424b; font-size: 22px; font-family: Lucida Grande, Verdana, Arial, Helvetica, sans-serif;
  background: #a8e272; border: 1px solid #73d216; margin: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;

}
    </style>
</head>

<body>
  <div id="spacer"></div>
  <div id="pagecontainer" class="clearfix">
    <div id="header">
       <div id="navmenucontainer">
         <ul id="navmenu">
            <li><a href="/videolan/">VideoLAN Project</a></li>
            <li class="selected"><a href="/">VLC media player</a></li>
            <li><a href="/projects/">Software Projects</a></li>
            <li><a href="/support/">Documentation/Support</a></li>
            <li><a href="http://wiki.videolan.org/">Wiki</a></li>
            <li><a href="http://forum.videolan.org/">Forum</a></li>
            <li><a href="/developers/">Developers</a></li>
         </ul>
       </div>
       <div id="submenucontainer">
         <div class="videolan-logo">
            <a href="/"><img src="http://images.videolan.org/images/videolan-logo.png" alt="VideoLAN" width="100" height="47"/></a>
         </div>
         <ul id="submenu">
            <li class="selected"><a href="/">Overview</a></li>
            <li><a href="/vlc/">Download</a></li>
            <li><a href="/vlc/features.html">Features</a></li>
            <li><a href="/vlc/screenshots.html">Screenshots</a></li>
            <li><a href="/vlc/streaming.html">Streaming</a></li>
            <li><a href="/vlc/skins.html">Skins</a></li>
         </ul> </div>
       </div>

  <div id="maincontent">  
    <h1 style="text-align: center; width: 100%; margin-bottom: 10px; font-weight: bold; text-shadow: 0px 2px 3px #DDD;">VLC media player 1.0.3 -
  <span style="font-style: italic;">Goldeneye</span></h1>
    <div id="pipo">
    Get the best out of your multimedia content!<br />
    Update to the latest version of the open-source multimedia&nbsp;framework and player:
    </div>
    <p class="center" style="font-style: italic;color:#2D58AE; margin-top: 20px; font-weight: bold; font-size: 36px; margin-bottom: 15pt;text-shadow:0px 3px 5px #AAA">
    VLC 1.0.3 is out!
    </p>
    <div style="margin: 0px auto; width: 15%; padding-bottom: 35px;">
       <img src="http://images.videolan.org/images/vlc128x128.png" alt="VLC"/>
    </div>
  <div id="download" style="height:55px">
        <script type="text/javascript"><!--
            if ( navigator.platform.indexOf("Win32") != -1 ) { document.writeln( '<p><a class="download" href="http://www.videolan.org/mirror-geo.php?file=vlc/1.0.3/win32/vlc-1.0.3-win32.exe">Download Now</a> for Windows (18 MB)</p>'); }
            else if( navigator.platform.indexOf("Linux") != -1 )
            {
              if( navigator.userAgent.indexOf("Ubuntu") != -1 || navigator.userAgent.indexOf("ubuntu") != -1  ) { document.writeln( '<p><a class="download" href="/vlc/download-ubuntu.html">Download Now</a> for Ubuntu Linux</p>'); }
              else if( navigator.userAgent.indexOf("Fedora") != -1 ) { document.writeln( '<p><a class="download" href="/vlc/download-fedora.html">Download Now</a> for Fedora Linux</p>');}
              else if( navigator.userAgent.indexOf("SUSE") != -1 ) { document.writeln( '<p><a class="download" href="/vlc/download-suse.html">Download Now</a> for Suse Linux</p>'); }
              else if( navigator.userAgent.indexOf("Debian") != -1 ) { document.writeln( '<p><a class="download" href="/vlc/download-debian.html">Download Now</a> for Debian GNU/Linux</p>'); }
              else if( navigator.userAgent.indexOf("Mandriva") != -1 ) { document.writeln( '<p><a class="download" href="/vlc/download-mandriva.html">Download Now</a> for Mandriva Linux</p>'); }
              else if( navigator.userAgent.indexOf("Red Hat") != -1 ) { document.writeln( '<p><a class="download" href="/vlc/download-redhat.html">Download Now</a> for RedHat Linux</p>'); }
              else if( navigator.userAgent.indexOf("gentoo") != -1 ) { document.writeln( '<p><a class="download" href="/vlc/download-gentoo.html">Download Now</a> for Gentoo Linux</p>'); }
              else { document.writeln( '<p><a class="download" href="/vlc/">Download Now</a> for Linux and other OSes</p>'); }
            }
             else if( navigator.userAgent.indexOf("Mac OS X") != -1  ||navigator.userAgent.indexOf("MSIE 5.2") != -1 ||( navigator.userAgent.indexOf("Mac")  &&  navigator.userAgent.indexOf("Opera") ) )
            {
              if( navigator.platform.indexOf("MacPPC") != -1|| navigator.platform.indexOf("PowerPC") != -1 ) { document.writeln( '<p><a class="download" href="http://www.videolan.org/mirror-geo.php?file=vlc/1.0.3/macosx/vlc-1.0.3-powerpc.dmg">Download Now</a> for Mac OS X PowerPC (Leopard) (19 MB)</p>'); }
              else if( navigator.platform.indexOf("Intel") != -1 ) { document.writeln( '<p><a class="download" href="http://www.videolan.org/mirror-geo.php?file=vlc/1.0.3/macosx/vlc-1.0.3-intel.dmg">Download Now</a> for Mac OS X Intel (Leopard) (19 MB)</p>');}
                 else  { document.writeln( '<p><a class="download" href="/mirror-geo.php?file=vlc/1.0.3/macosx/vlc-1.0.3-powerpc.dmg">Download Now</a> for Mac OS X PowerPC (Leopard) (19 MB)</p>');document.writeln( '<p><a class="download" href="http://www.videolan.org/mirror-geo.php?file=vlc/1.0.3/macosx/vlc-1.0.3-intel.dmg">Download Now</a> for Mac OS X Intel (Leopard) (19 MB)</p>'); }
            }
            else if( navigator.platform.indexOf("Mac") != -1 )
            {
            document.writeln( "<p>Haha Mac OS 9 is dead! (if you\\\'re not using Mac OS 9 ... please write us a mail so we can fix this OS detection script)</p>'" );
            }
           else if(  navigator.userAgent.indexOf("freebsd") != -1 || navigator.userAgent.indexOf("FreeBSD") != -1 ) { document.writeln( '<p><a class="download" href="/vlc/download-freebsd.html">Download Now</a> for FreeBSD</p>'); }
            else
            {
            document.writeln( '<p><a class="download" href="http://www.videolan.org/mirror-geo.php?file=vlc/1.0.3/win32/vlc-1.0.3-win32.exe">Download Now</a> for Windows (18 MB)</p>');document.writeln( '<p><a class="download" href="http://www.videolan.org/mirror-geo.php?file=vlc/1.0.3/macosx/vlc-1.0.3-powerpc.dmg">Download Now</a> for Mac OS X PowerPC (Leopard) (19 MB)</p>');document.writeln( '<p><a class="download" href="http://www.videolan.org/mirror-geo.php?file=vlc/1.0.3/macosx/vlc-1.0.3-intel.dmg">Download Now</a> for Mac OS X Intel (Leopard) (19 MB)</p>');            }
       --></script>
       <noscript>
          <p><a class="download" href="/mirror-geo.php?file=vlc/1.0.3/win32/vlc-1.0.3-win32.exe">Download Now</a> for Windows (16 MB)</p><p><a class="download" href="/mirror-geo.php?file=vlc/1.0.3/macosx/vlc-1.0.3-powerpc.dmg">Download Now</a> for Mac OS X PowerPC (Leopard) (19 MB)</p><p><a class="download" href="/mirror-geo.php?file=vlc/1.0.3/macosx/vlc-1.0.3-intel.dmg">Download Now</a> for Mac OS X Intel (Leopard) (19 MB)</p>       </noscript>
    <div class="more"><a  href="/vlc/index2.html">Other Operating Systems, learn more</a></div>
      </div>
      <div id="donate" style="height:55px">
      Donate to VideoLAN:
      <table style="width:350px"><tr><td>
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
      <p>
      <input name="cmd" value="_xclick" type="hidden"/>
      <input name="business" value="treasurer@videolan.org" type="hidden"/>
      <input name="item_name" value="Development and communication of VideoLAN" type="hidden"/>
      <input name="no_note" value="0" type="hidden"/>
      <input name="currency_code" value="EUR" type="hidden"/>
      <input name="tax" value="0" type="hidden"/>
      <input src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" name="submit" alt="Donate money to VideoLAN via PayPal" type="image"/> <span style="font-size: 10pt; font-style: italic;">(euros)</span>
      </p></form>
      </td><td>
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post"><p>
      <input name="cmd" value="_xclick" type="hidden"/>
      <input name="business" value="treasurer@videolan.org" type="hidden"/>
      <input name="item_name" value="Development and communication of VideoLAN" type="hidden"/>
      <input name="no_note" value="0" type="hidden"/>
      <input name="currency_code" value="USD" type="hidden"/>
      <input name="tax" value="0" type="hidden"/>
      <input src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" name="submit" alt="Donate money to VideoLAN via PayPal" type="image"/> <span style="font-size: 10pt; font-style: italic;">(dollars)</span>
      </p> </form>
      </td></tr></table>
      </div>
  </div> 

  <div class="clearme"></div>  
  <hr style="width:50%; margin: 30px auto 0px auto; border: 1px solid #2d58ae;" />
     <h1 style="font-weight:bold">VLC 1.0.3 Features</h1>
     <div style="background:#d4e0f7;border:1px solid #417ADC;-moz-border-radius:10px;-webkit-border-radius:10px;padding: 10px">
     <table style="width:100%"><tr><td style="text-align:left">
          <ul class="blue-bullet" style="margin-bottom:-19px">
            <li>Free, Open Source and cross-platform</li>
            <li>Independent of systems codecs to support most video types</li>
            <li>Live recording</li>
            <li>Instant pausing and Frame-by-Frame support</li>
            <li>Finer speed controls</li>
            <li>New HD codecs (AES3, Dolby Digital Plus, TrueHD, Blu-Ray Linear PCM, Real Video 3.0 and 4.0, ...)</li>
            <li>New formats (Raw Dirac, M2TS, ...) and major improvements in many formats...</li>
            <li>New Dirac encoder and MP3 fixed-point encoder</li>
            <li>Video scaling in fullscreen</li>
         </ul>
      </td><td style="text-align:right">
          <ul class="blue-bullet2">
            <li>RTSP Trickplay support</li>
            <li>Zipped file playback</li>
            <li>Customizable toolbars</li>
            <li>Easier encoding GUI in Qt interface</li>
            <li>Better integration in Gtk environments</li>
            <li>MTP devices on linux</li>
            <li>AirTunes streaming</li>
            <li>New skin for the skins2 interface</li>
         </ul>
     </td></tr></table>
</div>
  <div class="clearme"></div>
<div style="text-align:left">
  <h2>Press</h2>
<p>Press related questions should be directed to <a href="mailto:videolan@videolan.org">VideoLAN</a>.</p>
  <h2>About VideoLAN</h2>
  <p>VideoLAN is a software <a href="/videolan/">project</a>, which produces
  <a href="http://www.gnu.org/philosophy/free-sw.html">free and open source
 software</a> for multimedia, released under the GNU <a
  href="http://www.gnu.org/licenses/old-licenses/gpl-2.0.html">General Public
  License</a>.<br />
  <a href="/videolan">Learn more</a> about the VideoLAN project.</p>
  <p>Our main software is the cross-platform <a href="/vlc/">VLC media player</a>.</p>
  <p>We are also the home of <a href="/developers/x264.html">x264</a> and other
  <a href="/videolan/"> projects</a>.</p>

  <h2>About VLC media player</h2>
  <p> VLC media player is a highly portable
  <strong>multimedia player</strong> for various audio and video
  formats (MPEG-1, MPEG-2, MPEG-4, DivX, mp3, ogg, ...) as well
  as <strong>DVD</strong>s, <strong>VCD</strong>s, and various
  <strong>streaming</strong> protocols.<br /> It can also be used as a
  <a href="/vlc/streaming.html">server to stream</a> in unicast or
  <strong>multicast</strong> in IPv4 or
  <strong>IPv6</strong> on a high-bandwidth network.<br />
  It doesn't need any external codec or program to work.</p>

    <h2><a href="http://www.videolan.org/videolan-news.rss">
        News subscription</a></h2>
    <h4><a href="/news.html">Read all news</a></h4>
    <h4><a href="http://planet.videolan.org">Read developers' news - planet</a></h4>
    </div></div>
</body>
</html>
