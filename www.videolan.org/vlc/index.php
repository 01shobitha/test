<?php
   $title = "VLC media player - Open Source Multimedia Framework and Player";
   $lang = "en";
   $menu = array( "vlc", "download" );
   $additional_js = array("/js/ffcounter.js");
   $additional_css = array("/panels.css");
   $body_onload = "getCount()";
   include($_SERVER["DOCUMENT_ROOT"]."/include/layout_helper.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
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

<?php

$array_motto[] = array( 'title' => "VLC media player", 'text' =>
     '<p>VLC is a powerful media player, playing most of the media codecs and video formats out there.</p>' );
$array_motto[] = array( 'title' => "Open Source", 'text' =>
     '<p><b>Trust</b> your multimedia software and codecs, all <b>VideoLAN</b> projects are 
      <a href="http://www.gnu.org/philosophy/free-sw.html"><b>free</b></a> and
      <a href="http://www.opensource.org/"><b>open source</b></a>.
      <span style="float: right; padding: 5px 10px 0 0;"><a href="/videolan/">More about Open Source</a>.</span></p>' );
$array_motto[] = array( 'title' => "Volunteers Organization", 'text' =>
     '<p><b>VLC</b> and <b>VideoLAN</b> are projects, composed of volunteers,
      developing and promoting
      <a href="http://www.gnu.org/philosophy/free-sw.html">free</a> <b>multimedia</b> solutions.
      <span style="float: right; padding: 5px 10px 0 0;"><a href="/videolan/">More about VideoLAN</a>.</span></p>' );
motto( "VLC: open-source multimedia framework, player and server", $array_motto ); ?>

<div id="mainbox">
	<ul class="menu">
		<li>Versatile media player</li>
		<li><a href="/vlc/skins.php">Skinnable interface</a></li>
		<li><a href="/vlc/streaming.html">Full streaming server</a></li>
		<li>Powerful media converter</li>
	</ul>
	<div style="min-height:250px;" id="pres-content">
		<p style="width:50%;float:right">
			<img src="/images/formats.png" alt="selection of supported formats" title="Selection of supported formats"/><br/>
			<small>All logos are copyrighted by their respective copyright holders.</small>
		</p>
		<h1>"It plays everything!"</h1>
		<p>
		The media player that fulfills all your needs. It handles DVDs, (S)VCDs, Audio CDs, web streams, TV cards and much more.		
		</p>
		<p>
		With VLC, there is no need to continually update many different codec packs. VLC comes with nearly every codec built in!
		</p>
		<p>
        And whats more, VLC can play back your files, even if the media is damaged! Missing or broken pieces wont stop VLC.
        All the video and audio information that remains can be played.
		</p>
		<p>
			<a href="features.html">View all supported formats.</a>
		</p>
             <div style="border: 0px red solid; margin: 0 auto; font-size: 21px; width: 13em; float: left;">
                 <script type="text/javascript"><!--
                if ( <?php echo $is_win32; ?> ) { <?php DoDL("Win32"); ?> }
                else if( <?php echo $is_beos; ?> ) { <?php DoDL("BeOS"); ?> }
                else if( <?php echo $is_linux; ?> )
                {
                  if( <?php echo $is_ubuntu; ?> ) { <?php DoDL("Ubuntu"); ?> }
                  else if( <?php echo $is_fedora; ?> ) { <?php DoDL("Fedora"); ?>}
                  else if( <?php echo $is_suse; ?> ) { <?php DoDL("Suse"); ?> }
                  else if( <?php echo $is_debian; ?> ) { <?php DoDL("Debian"); ?> }
                  else if( <?php echo $is_mandriva; ?> ) { <?php DoDL("Mandriva"); ?> }
                  else if( <?php echo $is_redhat; ?> ) { <?php DoDL("RedHat"); ?> }
                  else if( <?php echo $is_gentoo; ?> ) { <?php DoDL("Gentoo"); ?> }
                  else { <?php DoDL("Linux"); ?> }
                }
                else if( <?php echo $is_freebsd; ?> ) { <?php DoDL("FreeBSD"); ?> }
                else if( <?php echo $is_ios; ?> ) { <?php DoDL("iOS"); ?> }
                else if( <?php echo $is_osx; ?> )
                {
                  if( <?php echo $is_ppc; ?> ) { <?php DoDL("OSX-PPC"); ?> }
                  else if( <?php echo $is_mactel; ?> ) { <?php DoDL("OSX-Intel");?>}
                  else { <?php DoDL("OSX-Intel");  DoDL("OSX-PPC"); ?> }
                }
                else if( navigator.platform.indexOf("Mac") != -1 )
                {
                document.writeln( "<p>Haha Mac OS 9 is dead! (if you\\\'re not using Mac OS 9 ... please write us a mail so we can fix this OS detection script)</p>'" );
                }
                else
                {
                <?php DoDL("Win32"); DoDL("OSX-Intel"); DoDL("OSX-PPC");?>
                }
                --></script>
                <noscript>
                  <?php DoDL("Win32",0); DoDL("OSX-Intel",0); DoDL("OSX-PPC",0);  ?>
                </noscript>
                 <div class="dl-other"><a href="/vlc/">Other Systems, Versions</a></div>
                </div>

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

  <h2>Get VLC now!</h2>

  <h3>Operating Systems with Binaries</h3>
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
      addos( "iOS", "ios", "download-ios.html" );
      addos( "OS/2" "os2", "http://hobbes.nmsu.edu/h-viewer.php?dir=/pub/os2/apps/mmedia/video/players&file=vlc-1.0.5-beta1.zip" );
      //addos( "WinCE / PocketPC", "wince", "download-wince.html" );
?>
      </ul>
    </div>
    <div class="clearfix"></div>

   <h3>GNU/Linux</h3>

    <div class="os1">
      <ul class="os">
      <?php
      addos( "Debian GNU/Linux", "debian", "download-debian.html" );
      addos( "openSUSE", "suse", "download-suse.html" );
      addos( "Mandriva Linux", "mandrake", "download-mandriva.html" );
      addos( "Arch Linux", "archlinux", "download-archlinux.html" );
      addos( "Slackware Linux", "slackware", "download-slackware.html" );
     ?>
     </ul>
    </div><div class="os2">
    <ul class="os">
    <?php
      addos( "Ubuntu", "ubuntu", "download-ubuntu.html" );
      addos( "Fedora", "fedora", "download-fedora.html" );
      addos( "Red Hat Enterprise Linux", "redhat", "download-redhat.html" );
      addos( "ALT Linux", "altlinux", "download-altlinux.html" );
    ?>
    </ul></div>

    <div class="clearfix"></div>

      <h3>Source and other operating systems</h3>
<p>For the other operating systems supported, there are no precompiled
binaries. You will have to get the source code for VLC and its required
libraries and build them yourself:</p>
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
<div class="clearfix"></div>

<h3>Source</h3>
  <p>You can also directly get the <a href="download-sources.html">
  source code</a>.</p>

  <p>You couldn't find your OS / Distribution in this list but
  know where to find VLC media player builds elsewhere? Please <a
  href="/team/">Contact us</a> so we can add a link.</p>
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
