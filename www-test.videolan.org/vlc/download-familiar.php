<?php
   $title = "VLC media player for Familiar Linux";
   $lang = "en";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="fullwidth">

<h1> VLC media player for Familiar Linux </h1>

<h2>Download Options</h2>

<p>A feed for Familiar Linux version 0.5 and 0.6 is available at the URL
<code>http://download.videolan.org/pub/videolan/vlc/ipkg-feed/armv4l</code>
to get VLC easily. There are packages available
for Familiar Linux Gtk+ and GPE.</p>

<p>Packages upto VLC version 0.4.4 support <b>Familiar Linux version 0.5</b>. <br />
Packages from VLC version 0.4.5 onwards support <b>Familiar Linux version 0.6</b>.
</p>
<p> </p>

<h2>Upgrading from previous version of vlc</h2>

<p> If upgrading from a previous vlc (vlc, gpe-vlc and opie-vlc) version, then you'll have to uninstall the additional package called ffmpeg or libffmpeg. VLC no longer requires this shared library.
</p>

<ul>
<li>Uninstall ffmpeg with: <code>ipkg remove ffmpeg</code></li>
<li>Uninstall libffmpeg with: <code>ipkg remove libffmpeg</code></li>
</ul>

<h2>Familiar Linux Gtk+/GPE</h2>

<p>
The packages for Familiar GPE are being split up in two separate uses.</p>
<ul class="bullets">
  <li>One for use on small sized flash discs iPAQ's, like H3600 and H3800.</li>
  <li>The other for more functionality and codec support targeted at PXA (XScale) iPAQ's.</li>
</ul>
<p>The latest VLC packages for Familiar Linux 0.7.1 are here:</p>

<h3>GPE (H3600/H3800)</h3>
<p>Interface and Codecs (they come in the same package):</p>
<ul>
  <li>GPE interface: <a href="http://download.videolan.org/pub/videolan/vlc/ipkg-feed/armv4l/v0.7.1/h3600/gpe-vlc-h3600_0.7.1_arm.ipk">gpe-vlc-h3600_0.7.1_arm.ipk</a></li>
</ul>

<p>Required libraries:</p>
<p>The following libraries are needed for this version:</p>
<ul> 
  <li>FFmpeg libraries: <a href="http://download.videolan.org/pub/videolan/vlc/ipkg-feed/armv4l/v0.7.1/h3600/libffmpeg-h3600_20040103_arm.ipk">libffmpeg-h3600_20040103_arm.ipk</a></li>
  <li>Flac libraries: <a href="http://download.videolan.org/pub/videolan/vlc/ipkg-feed/armv4l/v0.7.1/h3600/libflac_1.1.0_arm.ipk">libflac_1.1.0_arm.ipk</a></li>
  <li>Mpeg2dec library: <a href="http://download.videolan.org/pub/videolan/vlc/ipkg-feed/armv4l/v0.7.1/h3600/libmpeg2dec_0.4.0_arm.ipk">libmpeg2dec_0.4.0_arm.ipk</a></li>
  <li>MAD libraries: <a href="http://download.videolan.org/pub/videolan/vlc/ipkg-feed/armv4l/v0.7.1/h3600/libmad0_0.15.0b_arm.ipk">libmad0_0.15.0b_arm.ipk</a></li>
  <li>ID3Tag library: <a href="http://download.videolan.org/pub/videolan/vlc/ipkg-feed/armv4l/v0.7.1/h3600/libid3tag0_0.15.0b_arm.ipk">libid3tag0_0.15.0b_arm.ipk</a></li>
</ul>

<h3>GPE (PXA/XScale)</h3>
<p>Interface and Codecs (they no longer come in the same package):</p>
<ul>
  <li>GPE interface: <a href="http://download.videolan.org/pub/videolan/vlc/ipkg-feed/armv4l/v0.7.1/xscale/gpe-vlc_0.7.1_arm.ipk">gpe-vlc_0.7.1_arm.ipk</a></li>
</ul>

<p>Required libraries:</p>
<p>The following libraries are needed for this version:</p>
<ul> 
  <li>FFmpeg libraries: <a href="http://download.videolan.org/pub/videolan/vlc/ipkg-feed/armv4l/v0.7.1/xscale/libffmpeg_20040103_arm.ipk">libffmpeg_20040103_arm.ipk</a></li>
  <li>Flac libraries: <a href="http://download.videolan.org/pub/videolan/vlc/ipkg-feed/armv4l/v0.7.1/xscale/libflac_1.1.0_arm.ipk">libflac_1.1.0_arm.ipk</a></li>
  <li>MAD libraries: <a href="http://download.videolan.org/pub/videolan/vlc/ipkg-feed/armv4l/v0.7.1/xscale/libmad0_0.15.0b_arm.ipk">libmad0_0.15.0b_arm.ipk</a></li>
  <li>ID3Tag library: <a href="http://download.videolan.org/pub/videolan/vlc/ipkg-feed/armv4l/v0.7.1/xscale/libid3tag0_0.15.0b_arm.ipk">libid3tag0_0.15.0b_arm.ipk</a></li>
  <li>A52 (AC3) library: <a href="http://download.videolan.org/pub/videolan/vlc/ipkg-feed/armv4l/v0.7.1/xscale/liba52_0.7.4_arm.ipk">liba52_0.7.4_arm.ipk</a></li>
  <li>FAAC library: <a href="http://download.videolan.org/pub/videolan/vlc/ipkg-feed/armv4l/v0.7.1/xscale/libfaac_1.23.1_arm.ipk">libfaac_1.23.1_arm.ipk</a></li>
  <li>MP3lame library: <a href="http://download.videolan.org/pub/videolan/vlc/ipkg-feed/armv4l/v0.7.1/xscale/libmp3lame_3.93.1_arm.ipk">libmp3lame_3.93.1_arm.ipk</a></li>
  <li>FAAD library: <a href="http://download.videolan.org/pub/videolan/vlc/ipkg-feed/armv4l/v0.7.1/xscale/libfaad_2.0-200401242_arm.ipk">libfaad_2.0-200401242_arm.ipk</a></li>
  <li>Mpeg2dec library: <a href="http://download.videolan.org/pub/videolan/vlc/ipkg-feed/armv4l/v0.7.1/xscale/libmpeg2dec_0.4.0_arm.ipk">libmpeg2dec_0.4.0_arm.ipk</a></li>
  <li>OpenSLP Service Location Protocol library: <a href="http://download.videolan.org/pub/videolan/vlc/ipkg-feed/armv4l/v0.7.1/xscale/libslp_1.0.11_arm.ipk">libslp_1.0.11_arm.ipk</a></li>
</ul>


<h2>Familiar Linux Opie</h2>

<p>Latest VLC package for Familiar Opie is 0.6.0:</p>

<p>Interface:</p>
<ul><li>Commandline interface: <a href="http://download.videolan.org/pub/videolan/vlc/ipkg-feed/armv4l/v0.6.0/opie-vlc_0.6.0_arm.ipk">opie-vlc_0.6.0_arm.ipk</a></li></ul>

<p>Required libraries:</p>
<p>The library libffmpeg is no longer required for this version of VLC.</p>
<ul><li><a href="http://download.videolan.org/pub/videolan/vlc/ipkg-feed/armv4l/v0.6.0/opie-libsdl_1.2.5_arm.ipk">opie-libsdl_1.2.5_arm.ipk</a></li></ul>

<h2>Older versions</h2>
<p>
Older version for your iPaq configuration:
</p>
<ul><li>Use the <a href="http://download.videolan.org/pub/videolan/vlc/ipkg-feed/armv4l/older">older</a> directory of our ipkg-feed</li>
<li>Or <a href="http://download.videolan.org/pub/vlc/">browsing</a> our FTP site.</li>
</ul>

<h2>Source code</h2>

<p>If you want, you can download the <a href="download-sources.html">source code</a> of VLC media player.</p>

</div>

<?php
  footer('$Id$');
?>
