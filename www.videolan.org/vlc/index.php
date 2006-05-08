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

<?php
function addos( $name, $img, $url )
{
echo " <td>
   <a href='$url' class='downloados'><img src='/images/icons/$img'
      alt='$name' width='32' height='32' /> $name</a>
 </td>";
}
?>
 <table cellspacing="10">
 <tr>
<?php addos( "Windows", "windows.jpg", "download-windows.html" );
      addos( "Mac&nbsp;OS&nbsp;X", "macosx.gif", "download-macosx.html" );
      addos( "BeOS", "beos.gif", "download-beos.html" ); ?>
 </tr><tr>
<?php addos( "Debian GNU/Linux", "debian.gif", "download-debian.html" );
      addos( "Mandriva Linux", "mandrake.gif", "download-mandriva.html" );
      addos( "Fedora Core", "fedora.png", "download-fedora.html" ); ?>
</tr><tr>
<?php addos( "Familiar Linux", "familiar.gif", "download-familiar.html" );
      addos( "YOPY/Linupy", "yopy.png", "download-linupy.html" );
      addos( "Zaurus", "zaurus.png", "download-zaurus.html" ); ?>
 </tr><tr>
<?php addos( "SUSE Linux", "suse.gif", "download-suse.html" );
      addos( "Red Hat Linux", "redhat.gif", "download-redhat.html" );
      addos( "WinCE / PocketPC", "zaurus.png", "download-wince.html" ); ?>
 </tr>
 <tr>
<?php addos( "Slackware Linux", "slackware.jpg", "download-slackware.html" ); ?>
<?php addos( "Ubuntu Linux", "ubuntu.png", "download-ubuntu.html" ); ?>
 <td></td>
 </tr>
 </table>

<p>For the other operating systems supported, there are no precompiled
binaries. You will have to get the source code for VLC and its required
libraries and build them yourself:</p>

<table cellspacing="10">
<tr>
<?php addos( "NetBSD", "netbsd.gif", "download-sources.html" );
      addos( "OpenBSD", "openbsd.gif", "download-sources.html" );
      addos( "FreeBSD", "freebsd.gif", "download-freebsd.html" ); ?>
</tr><tr>
<?php addos( "Solaris", "solaris.gif", "download-sources.html" );
      addos( "QNX", "qnx.gif", "download-sources.html" );
      addos( "Gentoo Linux", "gentoo.gif", "download-gentoo.html" ); ?>
</tr><tr>
<?php addos( "Crux Linux", "cruxlinux.png", "download-crux.html" ); ?>
<td>
</td><td>
</td>
</tr>
</table>

<p>You can also directly get the source code:</p>

<table cellspacing="10">
<tr>
<?php addos( "Source Code", "source.gif", "download-sources.html" ); ?>
<td>
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
       <h3 style="text-align:center;">VLC 0.8.5 Downloads<br /><span style="font-weight: bold" id="vlccounter">Loading...</span></h3>
       <p style="text-align:center;"><span id="dlrate">Calculating...</span> downloads/second</p>
       <p style="text-align:center;"><a href="/stats/downloads.php">Full statistics</a></p>
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
