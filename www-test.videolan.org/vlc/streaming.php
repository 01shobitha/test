<?php
   $title = "The cross-platform streaming solution";
   $lang = "en";
   $menu = array( "vlc", "streaming" );
   $additional_css = array("/panels.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1> Streaming </h1>
<div id="left">
	<h2>Overview of the VideoLAN streaming solution</h2>
  <p>The VideoLAN streaming solution includes two programs:</p>
	<ul class="bullets">
    <li><a href="/vlc">VLC media player</a> which can be used as a
		<em>server</em> and as a <em>client</em> to stream and receive network
		streams. VLC is able to stream all that it can read.</li>

    <li>VLS (VideoLAN Server), which can stream MPEG-1, MPEG-2 and
		MPEG-4 files, DVDs, digital satellite channels, digital terrestial
		television channels and live videos on the network in unicast or
		multicast. Most of the VLS functionality can now be found VLC.
		<strong>Usage of VLC instead of VLS is advised.</strong></li>
	</ul>

  <p>Complete details of <a href="/streaming-features.html">the
streaming features are available</a>.</p>
</div>

<div id="right">
	<?php panel_start( 'blue' ); ?>
    <h1>Download</h1>
		<ul class="panel-blue-bullet">
			<li>To download VLC, go to the <a href="/vlc/index.html">VLC download 
			page</a>.</li>
			<li>To download VLS, you can <a
			href="http://download.videolan.org/pub/videolan/vls/">browse our FTP
			archive</a>.</li>
			<li>To download miniSAPserver, you can <a
			href="http://download.videolan.org/pub/videolan/miniSAPserver/">browse our FTP
			archive</a>.</li>

		</ul>
  <?php panel_end(); ?>
</div>

<div style="float:left">
	<p class="center" style="margin-top:-1em">
		<img src="http://images.videolan.org/images/documentation/global-diagram.jpg" 
			 alt="VideoLAN solution overview" width="800" height="560" />
	</p>
	<div style="width:55%">
	  <p>The network on which you setup the VideoLAN solution can be as
		small as one ethernet 10/100Mb switch or hub, and as big as the whole
		Internet.<br /> The VideoLAN streaming solution has <em>full IPv6
		support</em>.</p>

		<p>Examples of needed bandwidth are:</p>
		<ul class="bullets">
			<li>0.5 to 4 Mbit/s for a MPEG-4 stream,</li>
			<li>3 to 4 Mbit/s for an MPEG-2 stream read from a satellite card, a
digital television card or a MPEG-2 encoding card,</li>
			<li>6 to 9 Mbit/s for a DVD.</li>
		</ul>
		<p></p>
		<p>VLC is able to announce its streams using the SAP/SDP standard, or using Zeroconf (also known as Bonjour).</p>
		<h2>Documentation</h2>
		<p>The VideoLAN streaming solution is <a href="/doc">documented in our documentation section</a></p>
	</div>
</div>
<div style="min-height:3em;"></div>
<?php footer('$Id: index.php 3765 2006-08-16 16:19:00Z dionoea $'); ?>
