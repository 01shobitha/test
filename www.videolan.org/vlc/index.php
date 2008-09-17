<?php
   $title = "VLC media player - Overview";
   $lang = "en";
   $menu = array( "vlc", "download" );
   $enable_live = true;
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1> VLC media player </h1>

<div class="vlc-screenshot">
  <img width="300" height="200" src="/images/screenshots/vlc-win32.png" alt="VLC on Windows"/>
</div>

<div id="description">
  <h2>VLC media player - the cross-platform media player and streaming server</h2>

  <p> VLC media player is a highly portable
  <strong>multimedia player</strong> for various audio and video
  formats (MPEG-1, MPEG-2, MPEG-4, DivX, mp3, ogg, ...) as well
  as <strong>DVD</strong>s, <strong>VCD</strong>s, and various
  <strong>streaming</strong> protocols. It can also be used as a
  <a href="/vlc/streaming.html">server to stream</a> in unicast or
  <strong>multicast</strong> in IPv4 or
  <strong>IPv6</strong> on a high-bandwidth network. </p>

  <p> If you like VLC, please rate it on the <a href="http://freshmeat.net/projects/vlc">Freshmeat</a> and <a href="http://www.versiontracker.com/dyn/moreinfo/macosx/14738">versiontracker</a> entries!</p>
</div>

<div id="left">

  <h2>Download VLC</h2>

  <p>Select your operating system to download VLC binaries:</p>
<?php
function addos( $name, $class, $url, $bold=false )
{
if( $bold ) $style=' style="font-weight:bold"';
else $style='';
echo "<li class='$class' $style><a href='$url'>$name</a></li>";
}
?>

<div class="os1">
  <ul class="os">
<?php addos( "Windows", "windows", "download-windows.html", true );
      addos( "Mac&nbsp;OS&nbsp;X", "macosx", "download-macosx.html", true );
?>
  </ul>
</div><div class="os2">
  <ul class="os">
<?php addos( "BeOS", "beos", "download-beos.html" );
      addos( "Syllable", "syllable", "download-syllable.html" );
?>
  </ul>
</div>

<div class="clearme">
  <h3>GNU/Linux:</h3>
</div>
<div class="os1">
  <ul class="os">
<?php
      addos( "Debian GNU/Linux", "debian", "download-debian.html" );
      addos( "Ubuntu", "ubuntu", "download-ubuntu.html" );
      addos( "Mandriva Linux", "mandrake", "download-mandriva.html" );
      addos( "Fedora", "fedora", "download-fedora.html" );
      addos( "openSUSE", "suse", "download-suse.html" );
      addos( "Familiar Linux", "familiar", "download-familiar.html" );
?>
</ul>
</div><div class="os2">
<ul class="os">
<?php
      addos( "Red Hat Enterprise Linux", "redhat", "download-redhat.html" );
      addos( "Slackware Linux", "slackware", "download-slackware.html" );
      addos( "ALT Linux", "altlinux", "download-altlinux.html" );
      addos( "Arch Linux", "archlinux", "download-archlinux.html" );
      addos( "YOPY/Linupy", "linupy", "download-linupy.html" );
      addos( "Zaurus", "zaurus", "download-zaurus.html" );
      //addos( "WinCE / PocketPC", "wince", "download-wince.html" );
?>
  </ul></div>

<div class="clearme">

<p>For the other operating systems supported, there are no precompiled
binaries. You will have to get the source code for VLC and its required
libraries and build them yourself:</p>
</div>
<div class="os1">
  <ul class="otheros">
<?php addos( "NetBSD", "netbsd", "download-sources.html" );
      addos( "OpenBSD", "openbsd", "download-sources.html" );
      addos( "FreeBSD", "freebsd", "download-freebsd.html" );
      addos( "Solaris", "solaris", "download-sources.html" );
?>
  </ul>
</div>
<div class="os2">
<ul class="otheros"> 
<?php
      addos( "QNX", "qnx", "download-sources.html" );
      addos( "Gentoo Linux", "gentoo", "download-gentoo.html" );
      addos( "Crux Linux", "cruxlinux", "download-crux.html" );
?>
  </ul>
</div>
<div class="clearme">
  <p>You can also directly get the <a href="download-sources.html">
  source code</a>.</p>

  <p>You couldn't find your OS / Distribution in this list but
  know where to find VLC media player builds elsewhere? Please <a
  href="/team/">Contact us</a> so we can add a link.</p>
</div>
</div>

<div id="right">
<?php panel_start( "blue" ); ?>
        <p><span class="vlcversion">VLC 0.9.2 downloads: <span id="vlccounter">Loading...</span></span></p>
        <p><span id="dlrate">Calculating...</span> downloads per second</p>
        <div class="more"><a href="/stats/downloads.php">Full statistics</a></div>
<?php panel_end(); ?>

<?php panel_start( "blue" ); ?>
  <h2>Features</h2>

  <p> For more information about what features are supported on your operating
  system, please see the <a href="/vlc/features.html">full features list</a>.
  You can also have a look at some <a href="/vlc/screenshots.html">VLC
  screenshots</a>. </p>

    <h2>Documentation</h2>

    <p>See the <a href="/doc/">documentation page</a>.</p>
<?php panel_end(); ?>

<?php panel_start( "orange" ); ?>
    <h3>PlayOgg</h3>
	<a href="http://playogg.org">
        <img src="http://www.fsf.org/resources/formats/ogg_data/play_ogg_large.png" alt="PlayOgg"/></a>
    <p>Join <a href="http://playogg.org">PlayOgg</a>, a campaign to promote the use of free media
             formats including Ogg Vorbis and Ogg Theora.
    </p>
<?php panel_end(); ?>
</div> <!-- RIGHT -->

<?php footer('$Id$'); ?>
