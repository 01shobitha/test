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
	<h1 style="font-size:30px;line-height:normal">Free your media!</h1>
	<ul class="menu">
		<li>Versatile media player</li>
		<li><a href="#">Skinnable interface</a></li>
		<li><a href="#">Full streaming server</a></li>
		<li><a href="#">Powerful media converter</a></li>
	</ul>
	<div style="min-height:250px;" id="pres-content">
		<p style="width:50%;float:right">
			<img src="/images/formats.png" alt="selection of supported formats" title="Selection of supported formats"/><br/>
			<small>All logos are copyrighted by their respective copyright holders.</small>
		</p>
		<h1>"It plays everything!"</h1>		
		<p>
		The media player that fills all your needs. It can handle DVDs, (S)VCDs, Audio CDs, web streams, TV cards and much more.		
		</p>
		<p>
		You don't need to keep track of a dozen codec packs you need to have installed. VLC has all codecs built-in.
		It comes with support for nearly all codec there is.
		</p>
		<p>
		And what is more it can even play back the file or media if it is damaged! Missing or broken pieces are no stop to VLC,
		it plays all the video and audio information that's still intact.
		</p>
		<p>
			<a href="features.html">View all supported formats.</a>
		</p>
	</div>
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
