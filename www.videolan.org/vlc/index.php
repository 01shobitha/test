<?php
   $title = "VLC media player - Overview";
   $lang = "en";
   $menu = array( "vlc", "download" );
   $date = "14 February 2001";
   $enable_live = true;
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
?>

<h1> VLC media player </h1>

<table border="0" cellspacing="10">
  <tr>
    <td style="width: 100%;">

      <h2>VLC - the cross-platform media player and streaming server</h2>

<p> VLC (initially VideoLAN Client) is a highly portable <b>multimedia
player</b> for various audio and video formats (MPEG-1, MPEG-2, MPEG-4,
DivX, mp3, ogg, ...) as well as <b>DVD</b>s, <b>VCD</b>s, and various
<b>streaming</b> protocols. It can also be used as a server to stream in
unicast or <b>multicast</b> in IPv4 or <b>IPv6</b> on a high-bandwidth
network. </p>

<p> If you like VLC, please rate it on the <a href="http://freshmeat.net/projects/vlc">Freshmeat</a> and <a href="http://www.versiontracker.com/dyn/moreinfo/macosx/14738">versiontracker</a> entries! </p>

      <h2>Features</h2>

<p> For more information about what features are supported on your operating
system, please see the <a href="/vlc/features.html">full features list</a>.
You can also have a look at some <a href="/vlc/screenshots.html">VLC
screenshots</a>. </p>

      <h2>Download VLC</h2>

<p> Select your operating system to download precompiled binaries: </p>

 <table cellspacing="10">
 <tr>
 <td>
   <a href="download-windows.html"><img src="/images/icons/windows.jpg"
      style="vertical-align: middle; border-width: 1px;"
      alt="Windows" width="32" height="32" /></a> Windows
 </td><td style="white-space: nowrap;">
   <a href="download-macosx.html"><img src="/images/icons/macosx.gif"
      style="vertical-align: middle; border-width: 1px;"
      alt="Mac OS X" width="32" height="32" /></a> Mac OS X
 </td><td>
   <a href="download-beos.html"><img src="/images/icons/beos.gif"
      style="vertical-align: middle; border-width: 1px;"
      alt="BeOS" width="32" height="32" /></a> BeOS
 </td>
 </tr><tr>
 <td>
  <a href="download-debian.html"><img src="/images/icons/debian.gif"
      style="vertical-align: middle; border-width: 1px;"
      alt="Linux Debian" width="32" height="32" /></a> Debian GNU/Linux
 </td><td>
   <a href="download-mandrake.html"><img src="/images/icons/mandrake.gif"
      style="vertical-align: middle; border-width: 1px;"
      alt="Linux Mandrake" width="32" height="32" /></a> Mandrake Linux
 </td><td>
   <a href="download-fedora.html"><img src="/images/icons/fedora.png"
      style="vertical-align: middle; border-width: 1px;"
      alt="Fedora Core" width="32" height="32" /></a>Fedora Core
 </td>
</tr><tr>
 <td style="white-space: nowrap;">
   <a href="download-familiar.html"><img src="/images/icons/familiar.gif"
      style="vertical-align: middle; border-width: 1px;"
      alt="Familiar Linux" width="32" height="32" /></a> Familiar Linux
 </td><td>
   <a href="download-linupy.html"><img src="/images/icons/yopy.png"
      style="vertical-align: middle; border-width: 1px;"
      alt="YOPY" width="32" height="32" /></a>YOPY/Linupy
 </td><td>
   <a href="download-zaurus.html"><img src="/images/icons/zaurus.png"
      style="vertical-align: middle; border-width: 1px;"
      alt="Zaurus" width="32" height="32" /></a>Zaurus
 </td>
 </tr><tr>
 <td align="left" style="white-space: nowrap;">
   <a href="download-suse.html"><img src="/images/icons/suse.gif"
      style="vertical-align: middle; border-width: 1px;"
      alt="SUSE Linux" width="32" height="32" /></a>SuSE Linux
 </td><td>
   <a href="download-redhat.html"><img src="/images/icons/redhat.gif"
      style="vertical-align: middle; border-width: 1px;"
      alt="Linux Red Hat" width="32" height="32" /></a> Red Hat Linux
 </td><td>
   <a href="download-wince.html"><img src="/images/icons/zaurus.png"
      style="vertical-align: middle; border-width: 1px;"
      alt="Zaurus" width="32" height="32" /></a>WinCE / PocketPC
 </td><td>
 </td>
 </tr>
 </table>

<p>For the other operating systems supported, there are no precompiled
binaries. You will have to get the source code for VLC and its required
libraries and build them yourself:</p>

<table cellspacing="10">
<tr>
<td>
  <a href="download-sources.html"><img src="/images/icons/netbsd.gif"
      style="vertical-align: middle; border-width: 1px;"
      alt="NetBSD" width="32" height="32" /></a>&nbsp;NetBSD
</td><td>
   <a href="download-sources.html"><img src="/images/icons/openbsd.gif"
      style="vertical-align: middle; border-width: 1px;"
      alt="OpenBSD" width="32" height="32" /></a>&nbsp;OpenBSD
</td><td>
   <a href="download-sources.html"><img src="/images/icons/freebsd.gif"
      style="vertical-align: middle; border-width: 1px;"
      alt="FreeBSD" width="32" height="32" /></a>&nbsp;FreeBSD
</td>
</tr><tr>
<td>
   <a href="download-sources.html"><img src="/images/icons/solaris.gif"
      style="vertical-align: middle; border-width: 1px;"
      alt="Solaris" width="32" height="32" /></a>&nbsp;Solaris
</td><td>
   <a href="download-sources.html"><img src="/images/icons/qnx.gif"
      style="vertical-align: middle; border-width: 1px;"
      alt="QNX" width="32" height="32" /></a>&nbsp;QNX
</td><td>
   <a href="download-gentoo.html"><img src="/images/icons/gentoo.gif"
      style="vertical-align: middle; border-width: 1px;"
      alt="Gentoo" width="31" height="32" /></a>&nbsp;Gentoo&nbsp;Linux
</td>
</tr><tr>
<td>
   <a href="download-crux.html"><img src="/images/icons/cruxlinux.png"
      style="vertical-align: middle; border-width: 1px;"
      alt="Crux Linux" width="32" height="32" /></a>Crux Linux
</td><td>
</td><td>
</td>
</tr>
</table>

<p>You can also directly get the source code:</p>

<table cellspacing="10">
<tr>
<td>
  <a href="download-sources.html"><img src="/images/icons/source.gif"
      style="vertical-align: middle; border-width: 1px;"
      alt="Source code" width="32" height="32" /></a>&nbsp;Source&nbsp;code
</td><td>
</td><td>
</td>
</tr>
</table>

      <h2>Documentation</h2>

<p>See the <a href="/doc/">documentation page</a>.</p>

<!-- <table border="0">

<tr>
  <td  class="type"><b>Document</b></td>
  <td  class="type"><b>Status</b></td>
  <td  class="type"><b>Download</b></td>
</tr>

<tr>
  <td class="category">VLC user guide</td>
  <td class="no">Out-of-date</td>
  <td>
     <a href="/doc/vlc-user-guide/en/vlc-user-guide-en.html">English</a>
     <a href="/doc/vlc-user-guide/fr/vlc-user-guide-fr.html">French</a>
     <a href="/doc/vlc-user-guide/de/vlc-user-guide-de.html">German</a>
   </td>
</tr>

<tr>
  <td class="category">VideoLAN FAQ</td>
  <td class="yes">Up-to-date</td>
  <td>
     <a href="/doc/faq/en/videolan-faq-en.html">English</a>
     <a href="/doc/faq/fr/videolan-faq-fr.html">French</a>
     <a href="/doc/faq/de/videolan-faq-de.html">German</a>
     <a href="/doc/faq/it/videolan-faq-it.html">Italian</a>
     <a href="/doc/faq/es/videolan-faq-es.html">Spanish</a>
   </td>
</tr>

</table> -->
 
   </td><td>

      <div class="livecounter">
       <h3 style="text-align:center">VLC Downloads<br /><span style="font-weight: bold" id="vlccounter">Loading...</span></h3>
       <p><span id="dlrate">Calculating...</span> downloads/second</p>
       <p style="text-align:center;"><a href="/live.html">Full statistics</a></p>
      </div>
      <a href="/vlc/screenshots.html">
      <img width="300" height="240"
      src="/vlc/screenshots/mi_20040602-windows-wxembed-3.jpg"
      alt="Windows screenshot" /></a>
    <br />
      <a href="/vlc/screenshots.html">
      <img width="300" height="225"
      src="/vlc/screenshots/mi_20040531-osx-1.jpg"
      alt="Mac OS X screenshot" /></a>
    <br />
      <a href="/vlc/screenshots.html">
      <img width="300" height="240"
      src="/vlc/screenshots/0.8.2/mi_linux-wxwin-playlist.jpg"
      alt="Linux screenshot" /></a>
    </td>
  </tr>
</table>

<?php footer('$Id$'); ?>
