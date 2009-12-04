<?php
   $title = "VLC media player - Open Source Multimedia Framework and Player";
   $lang = "en";
   $menu = array( "vlc", "download" );
   $additional_js = array("/js/ffcounter.js");
   $body_onload = "getCount()";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<!--[if IE]>
<div id="ieShadow"></div>
<script type="text/javascript" language="javascript">
function adapt() {
	document.getElementById("ieShadow").style.height = document.getElementById("mainbox").offsetHeight+5;
	document.getElementById("ieShadow").style.width = document.getElementById("mainbox").offsetWidth;
	document.getElementById("ieShadow").style.top = document.getElementById("mainbox").offsetTop-5;
	document.getElementById("ieShadow").style.left = document.getElementById("mainbox").offsetLeft-5;

}
window.onload = function() {
	adapt();
}
window.onresize = function(evt) {
	adapt();
}
</script>
<![endif]-->
<div id="mainbox">
	<h1>VLC media player</h1>
	<h3 style="margin-bottom:10px;">The cross platform open-source multimedia framework, player and server.</h3>
	<p style="float:right">
		<a href="screenshots.html"><img src="/images/screenshots/vlc-presentation.png" alt="VLC presentation" title="Click to view some screenshots"/></a>
	</p>
	<p>
	VLC media players is
	</p>
	<ul>
		<li>a <b>media player</b> that can handle a wide variety of formats. It can play from files, discs, and hardware inputs, like TV cards.</li>
		<li>a <b>media server</b> that can stream audio and video in uni- or multicast over IPv4 and IPv6 networks.</li>
		<li>a <b>media converter</b> that can transcode your video and audio files from one format into the other.</li>	
	</ul>
	<p>
	For all this VLC media player needs no additional codecs and it offers you all these functionality absolutely free of charge.
	</p>
	<p>
	See the <a href="features.html">features page</a> for a full list of supported media technologies.
	</p>
  
  <h2>Download VLC</h2>
  <img src="/images/dl-vlc.png" alt="Download"> [...]
  
  
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
