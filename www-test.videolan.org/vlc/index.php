<?php
   $title = "VLC media player - Open Source Multimedia Framework and Player";
   $lang = "en";
   $menu = array( "vlc", "download" );
   $additional_js = array("/js/ffcounter.js");
   $body_onload = "getCount()";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1> VLC media player </h1>

<div class="vlc-screenshot">
  <img height="230" src="http://images.videolan.org/images/screenshots/vlc-win32.jpg" alt="VLC on Windows"/>
</div>

<div id="description">
  <h2>The cross-platform open-source multimedia framework, player and server</h2>

  <p> VLC media player is a highly portable
  <strong>multimedia player</strong> and <strong>multimedia framework</strong>
  capable of reading most audio and video formats
  (MPEG-2, MPEG-4, H.264, DivX, MPEG-1, mp3, ogg, aac ...) as well
  as <strong>DVD</strong>s, <strong>Audio CD</strong>s <strong>VCD</strong>s,
  and various <strong>streaming</strong> protocols. See the <a href="/vlc/features.html">full features list</a>.<br />
  It can also be used as a <strong>media converter</strong> or
  a <a href="/vlc/streaming.html"><strong>server to stream</strong></a>
  in unicast or <strong>multicast</strong> in IPv4 or
  <strong>IPv6</strong> on networks.</p>

  <p> If you like VLC, please rate it on the <a href="http://freshmeat.net/projects/vlc/">Freshmeat</a>,
  <a href="http://www.versiontracker.com/dyn/moreinfo/macosx/10210434">versiontracker</a> or
  <a href="http://alternativeto.net/desktop/vlc-media-player/">AlternativeTo</a> entries!</p>
</div>

<?php
function addos( $name, $class, $url, $bold=false )
{
    if( $bold ) $style=' style="font-weight:bold"';
    else $style='';
    echo "<li class='$class' $style><a href='$url'>$name</a></li>";
}
?>

<div id="left">

  <h2>Download VLC</h2>

  <h3>Binaries</h3>
    <p>Select your operating system to download VLC binaries:</p>

    <div class="os1">
      <ul class="os">
      <?php addos( "Windows", "windows", "download-windows.html", true );
      addos( "Mac&nbsp;OS&nbsp;X", "macosx", "download-macosx.html", true );
      ?>
      </ul>
    </div>
    <div class="os2">
      <ul class="os">
<?php
      addos( "Syllable", "syllable", "download-syllable.html" );
      //addos( "WinCE / PocketPC", "wince", "download-wince.html" );
?>
      </ul>
    </div>

    <div class="clearme">
      <h3>GNU/Linux</h3>

    <div class="os1">
      <ul class="os">
<?php
      addos( "Debian GNU/Linux", "debian", "download-debian.html" );
      addos( "Ubuntu", "ubuntu", "download-ubuntu.html" );
      addos( "Mandriva Linux", "mandrake", "download-mandriva.html" );
      addos( "Fedora", "fedora", "download-fedora.html" );
      addos( "openSUSE", "suse", "download-suse.html" );
?>
    </ul>
    </div><div class="os2">
<ul class="os">
<?php
      addos( "Red Hat Enterprise Linux", "redhat", "download-redhat.html" );
      addos( "Slackware Linux", "slackware", "download-slackware.html" );
      addos( "ALT Linux", "altlinux", "download-altlinux.html" );
      addos( "Arch Linux", "archlinux", "download-archlinux.html" );
?>
  </ul></div>

<div class="clearme">

      <h3>Source and other operating systems</h3>
<p>For the other operating systems supported, there are no precompiled
binaries. You will have to get the source code for VLC and its required
libraries and build them yourself:</p>
</div>
<div class="os1">
  <ul class="otheros">
<?php
      addos( "FreeBSD", "freebsd", "download-freebsd.html" );
      addos( "NetBSD", "netbsd", "download-sources.html" );
      addos( "OpenBSD", "openbsd", "download-sources.html" );
?>
  </ul>
</div>
<div class="os2">
<ul class="otheros"> 
<?php
      addos( "Gentoo Linux", "gentoo", "download-gentoo.html" );
      addos( "Solaris", "solaris", "download-sources.html" );
      addos( "QNX", "qnx", "download-sources.html" );
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
</div>

<div id="right">
<?php panel_start( "blue" ); ?>
        <p><span class="vlcversion">VLC 1.0 downloads: <span id="vlccounter">Loading...</span></span></p>
        <p><span id="dlrate">Calculating...</span> downloads per second</p>
        <div class="more"><a href="/stats/downloads.html">Full statistics</a></div>
<?php panel_end(); ?>

<?php panel_start( "orange" ); ?>
  <h1>Features</h1>

  <p> For more information about what features are supported on your operating
  system, please see the <a href="/vlc/features.html">full features list</a>.<br />
  You can also have a look at some <a href="/vlc/screenshots.html">VLC
  screenshots</a>. </p>
  <br />

    <h1>Documentation</h1>

    <p>See the <a href="http://wiki.videolan.org/Documentation:Documentation">documentation page</a>.</p>
<?php panel_end(); ?>

<?php panel_start( "gray" ); ?>
   <h1>PlayOgg</h1>
   <a href="http://playogg.org">
        <img src="http://images.videolan.org/images/play_ogg_large.png" alt="PlayOgg"/></a>
    <p>Join <a href="http://playogg.org">PlayOgg</a>, a campaign to promote the use of free media
             formats including Ogg Vorbis and Ogg Theora.
    </p>
<?php panel_end(); ?>
</div> <!-- RIGHT -->

<?php footer('$Id$'); ?>
