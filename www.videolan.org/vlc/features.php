<?php
   $title = "VLC - Features";
   $lang = "en";
   $date = "17 March 2004";
   $menu = array( "vlc", "features" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

   define( "NO", 0 );
   define( "YES", 1 );
   define( "PART", 2 );
   define( "NONE", 3 );
   define( "UNT", 4 );

    function ynp( $os )
    {
	switch( $os )
	{
	case YES:
	    echo "<td class=\"yes\"><img src=\"/images/tick.png\" alt=\"Yes\" /></td>\n";
	    break;
	case NO:
	    echo "<td class=\"no\"><img src=\"/images/cross.png\" alt=\"No\" /></td>\n";
	    break;
	case PART:
	    echo "<td class=\"partial\">Partial</td>\n";
	    break;
	case UNT:
	    echo "<td class=\"partial\">Untested</td>\n";
	    break;
	case NONE:
	    echo "<td class=\"none\">-</td>\n";
	    break;
	}
    }

    function feature( $n, $win, $osx, $lin, $be, $bsd, $fam, $first = false )
    {
	if( $first == false ) echo "<tr>";
	echo "<td class=\"type\">$n</td>";
	ynp( $win ); ynp( $osx ); ynp( $lin ); ynp( $be );
	ynp( $bsd ) ; ynp( $fam );
	echo "</tr>\n";
    }

    function feature_table( $double_header )
    {
?>
	<table border="0">
	 <tr>
	  <th></th>
<?php if( $double_header == true ) { echo "<th></th>\n"; } ?>
	  <th class="os"><a href="/vlc/download-windows.html">
  <img src="/images/icons/winvista.png" alt="Windows" width="32" height="32" />
</a></th>
<th class="os"><a href="/vlc/download-macosx.html">
  <img src="/images/icons/macosx.png" alt="Mac OS X" width="32" height="32" />
</a></th>
<th class="os"><a href="/vlc/index.html">
  <img src="/images/icons/linux.png" alt="Linux" width="32" height="32" />
</a></th>
<th class="os"><a href="/vlc/download-beos.html">
  <img src="/images/icons/beos.png" alt="BeOS" width="32" height="32" />
</a></th>
<th class="os"><a href="/vlc/download-sources.html">
  <img src="/images/icons/freebsd.png" alt="FreeBSD" width="32" height="32" />
  <img src="/images/icons/openbsd.png" alt="OpenBSD" width="32" height="32" />
</a></th>
<th class="os"><a href="/vlc/download-familiar.html">
  <img src="/images/icons/familiar.png" alt="Familiar Linux"
       width="32" height="32" />
</a></th>
</tr>
<?php
    }
?>

<h1> VLC features list </h1>

<div id="fullwidth">

<h2>Input</h2>
<?php feature_table( true ); ?>
<tr>
<td class="category" rowspan="12"><b>Input media</b></td>

<?php
feature( "UDP/RTP Unicast", YES, YES, YES, YES, YES, YES, true ); 
feature( "UDP/RTP Multicast", YES, YES, YES, NO, YES, YES ); 
feature( "HTTP / FTP", YES, YES, YES, YES, YES, YES ); 
feature( "MMS", YES, YES, YES, YES, YES, NONE ); 
feature( "File", YES, YES, YES, YES, YES, YES ); 
feature( "DVD <sup><a href=\"#input_notes\">[1]</a></sup><sup><a href=\"#bottom_notes\">[2]</a></sup>", YES, YES, YES, YES, YES, NONE );
feature( "VCD", YES,YES, YES, NO, YES, NONE );
feature( "SVCD <sup><a href=\"#input_notes\">[2]</a></sup>", PART, PART, PART, NO, PART, NONE );
feature( "Audio CD (without DTS)", YES, YES, YES, NO, YES, NONE );
feature( "DVB (Satellite, <br />Digital TV, Cable TV)", NO, NO, YES, NO, NO, NONE );
feature( "MPEG encoder <sup><a href=\"#input_notes\">[3]</a></sup>", YES, NO, YES, NO, NO, NONE );
?>
<tr>
<td class="type">Video acquisition</td>
<td class="yes">Direct Show</td>
<td class="no"><img src="/images/cross.png" alt="No" /></td>
<td class="yes">V4L</td>
<td class="no"><img src="/images/cross.png" alt="No" /></td>
<td class="no"><img src="/images/cross.png" alt="No" /></td>
<td class="partial">V4L (Untested)</td>
</tr>

<tr>
<td class="category" rowspan="13"><b>Input formats</b></td>
<?php
feature( "MPEG (ES,PS,TS,PVA,MP3)", YES, YES, YES, YES, YES, YES, true );
feature( "ID3 tags", YES, YES, YES, YES, YES, YES );
feature( "AVI", YES, YES, YES, YES, YES, YES );
feature( "ASF / WMV / WMA" , YES, YES, YES, YES, YES, YES );
feature( "MP4 / MOV / 3GP", YES, YES, YES, YES, YES, YES );
feature( "OGG / OGM / Annodex", YES, YES, YES, YES, YES, YES );
feature( "Matroska (MKV)", YES, YES, YES, YES, YES, NO );
feature( "Real", NO, NO, NO, NO, NO, NO );
feature( "WAV (incuding DTS)", YES, YES, YES, YES, YES, YES );
feature( "Raw Audio: DTS, AAC, AC3/A52", YES, YES, YES, YES, YES, YES );
feature( "Raw DV", YES, YES, YES, YES, YES, YES );
feature( "FLAC", YES, YES, YES, YES, YES, YES );
feature( "FLV (Flash)", YES, YES, YES, UNT, YES, UNT );
?>
</table>

<div class="notes">
  <a id="input_notes">Note</a>
  <p>
  [1] DVD decryption is done through the libdvdcss library.<br />
  [2] VLC on GNU/Linux, Solaris, and Microsoft Windows has playback
  control support via libcdio and libvcdinfo. On other platforms,
  SVCD support varies depending on the availability of these libraries.
  (Volunteers for adding support are always welcome.). Handling still
  frames (often used in menus) and switching between different video
  formats is problematic.<br />
  [3] VLC for GNU/Linux supports two kinds of MPEG-2 encoding cards: Hauppauge WinTV-PVR-250/350 and Visiontech Kfir.
  </p>
</div>

<h2>Video</h2>

<?php feature_table( true ); ?>

<tr>
<td class="category" rowspan="15"><b>Decoders</b></td>
<?php
feature( "MPEG-1/2", YES, YES, YES, YES, YES, YES, true );
feature( "DIVX (1/2/3)", YES, YES, YES, YES, YES, YES );
feature( "MPEG-4, DivX 5, XviD, 3ivX D4", YES, YES, YES, YES, YES, YES );
feature( "H.264", YES, YES, YES, YES, YES, YES );
feature( "Sorenson 1/3 (Quicktime)", YES, YES, YES, YES, YES, YES );
feature( "DV", YES, YES, YES, YES, YES, YES );
feature( "Cinepak", YES, YES, YES, YES, YES, NO );
feature( "Theora (alpha 3)",  YES, YES, YES, YES, YES, NO );
feature( "H.263 / H.263i",  YES, YES, YES, YES, YES, YES );
feature( "MJPEG (A/B)", YES, YES, YES, YES, YES, YES );
feature( "WMV 1/2", YES, YES, YES, YES, YES, YES );
?>
<tr>
<td class="type">WMV 3 / WMV-9 / VC-1</td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /> <sup><a href="#video_notes">[4], [5]</a></sup></td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /> <sup><a href="#video_notes">[4]</a></sup></td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /> <sup><a href="#video_notes">[4], [5]</a></sup></td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /> <sup><a href="#video_notes">[4]</a></sup></td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /> <sup><a href="#video_notes">[4]</a></sup></td>
<td class="no"><img src="/images/cross.png" alt="No" /></td>
</tr>

<tr>
<td class="type">Indeo Video v3 (IV32)</td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /></td>
<td class="no"><img src="/images/cross.png" alt="No" /></td>
<td class="partial">No PPC support</td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /></td>
<td class="partial">No PPC support</td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /></td>
</tr>

<?php
feature("Indeo Video 4/5 (IV41, IV51)",NO,NO,NO,NO,NO,NO );
feature( "Real Video", NO,NO,NO,NO,NO,NO );
?>
<tr>
<td class="category" rowspan="8"><b>Subtitles</b></td>

<?php
feature( "DVD <sup><a href=\"#video_notes\">[6]</a></sup>",
	PART,PART,PART,PART,PART,NONE, true );
feature( "SVCD / CVD", YES, UNT,YES,UNT,YES,NONE );
feature( "DVB", YES, YES, YES, YES, YES, NONE );
feature( "Closed captions", NO,NO,NO,NO,NO,NONE );
feature( "OGM", YES, YES, YES, YES, YES, NONE );
feature( "Matroska",YES, YES, YES, YES, YES, NONE );
feature( "Text files (MicroDVD,<br />SubRIP, SubViewer, SSA1-5, SAMI, VPlayer)",YES,YES,YES,YES,YES,NONE );
feature( "Vobsub",YES,YES,YES,YES,YES,NONE );
?>
<tr><td class="category" rowspan="10"><b>Filters</b></td>
<?php
feature( "Deinterlace", YES, YES, YES, YES, YES, YES, true );
feature( "Cropping",  YES, YES, YES, YES, YES, YES );
feature( "Image wall", YES, YES, YES, YES, YES, YES );
feature( "Image adjust", YES, YES, YES, YES, YES, YES );
feature( "Rotate/Mirror", YES, YES, YES, YES, YES, YES );
feature( "Logo overlay", YES, YES, YES, YES, YES, NO );
feature( "Magnification", YES, YES, YES, YES, YES, NO );
feature( "Image distortion", YES, YES, YES, YES, YES, NO );
feature( "Bluescreen", YES, YES, YES, YES, YES, NO );
feature( "RSS/Atom feeds", YES, YES, YES, YES, YES, NO );
?>
<tr><td class="category" rowspan="8"><b>Outputs</b></td>
<td class="type">Native</td>
<td class="yes">DirectX<br />GDI</td>
<td class="yes">OpenGL<br />Quartz</td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /></td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /></td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /></td>
<td class="yes">Qte/X11</td>
</tr>
<?php
feature( "X11",NONE,NONE,YES,NONE,YES,YES );
feature( "XVideo", NONE,NONE,YES,NONE,YES,NONE );
feature( "SDL", YES, NO, YES, UNT,YES, YES );
feature( "FrameBuffer", NONE,NONE,YES,NONE,NONE,NO );
feature( "ASCII Art", YES, YES, YES, UNT,YES, NO );
?>
</table>

<div class="notes">
  <a id="video_notes">Notes</a>
  <p>
  [4] WMV-3 / WMV-9 / VC-1 playback will be available through the FFmpeg-library
  in VLC 0.8.6. It is already enabled in the nightly builds. The playback of some
  videos can still be problematic due to the pre-beta nature of the decoder.<br />
  [5] Windows DMO codecs can be used by VLC on 32-bit x86 platforms.
  This allows WMV-3/WMA-3 decoding. This feature is untested on Intel-based Macs.<br />
  [6] Full color for YUV-type chromas is not handled, only the gray-scale
  value. Subtitle transparency is not fully supported for all
  chromas. Some chromas are not handled at all.</p>
</div>
 

<h2>Audio</h2>

<?php feature_table(true); ?>

<tr><td class="category" rowspan="17"><b>Decoders</b></td>
<?php
feature( "MPEG Layer 1/2",YES, YES, YES, YES, YES, YES, true );
feature( "MP3", YES, YES, YES, YES, YES, YES );
feature( "AC3 - A/52", YES, YES, YES, YES, YES, YES );
feature( "DTS", YES, YES, YES, YES, YES, NO );
feature( "LPCM",  YES, YES, YES, YES, YES, YES );
feature( "AAC",  YES, YES, YES, YES, YES, YES );
feature( "Vorbis",  YES, YES, YES, YES, YES, YES );
feature( "WMA 1/2", YES, YES, YES, YES, YES, YES );
?>
<tr>
<td class="type">WMA 3</td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /> <sup><a href="#audio_notes">[7]</a></sup></td>
<td class="no"><img src="/images/cross.png" alt="No" /></td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /> <sup><a href="#audio_notes">[7]</a></sup></td>
<td class="no"><img src="/images/cross.png" alt="No" /></td>
<td class="no"><img src="/images/cross.png" alt="No" /></td>
<td class="no"><img src="/images/cross.png" alt="No" /></td>
</tr>
<?php
feature("ADPCM", YES, YES, YES, YES, YES, NO );
feature("DV Audio", YES, YES, YES, YES, YES, YES );
feature("FLAC", YES, YES, YES, YES, YES, YES );
feature( "QDM2/QDMC (QuickTime)", YES, YES, YES, UNT, YES, UNT );
feature( "MACE", YES, YES, YES, YES, YES, YES );
feature( "AMR (3GPP", NO, NO , NO ,NO ,NO ,NO );
feature( "Real Audio <sup><a href=\"#bottom_notes\">[8]</a></sup>",
	PART,PART,PART,UNT,PART,NO );
feature( "Speex", YES, YES, YES, UNT, YES, UNT );
?>

<tr><td class="category" rowspan="2"><b>Filters</b></td>
<?php
feature( "Visualization effects", YES, YES, YES, YES, YES, YES, true );
feature( "Equalizer", YES, YES, YES, YES, YES, YES );
?>

<tr><td class="category" rowspan="7"><b>Outputs</b></td>
<td class="type">Native</td>
<td class="yes">DirectX<br />WaveOut</td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /></td>
<td class="yes">OSS<br />ALSA</td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /></td>
<td class="yes">OSS</td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /></td>
</tr>

<tr>
<td class="type">S/PDIF</td>
<td class="yes">DirectX<br />WaveOut</td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /></td>
<td class="yes">OSS<br />ALSA</td>
<td class="no"><img src="/images/cross.png" alt="No" /></td>
<td class="partial">Untested</td>
<td class="none">-</td>
</tr>

<tr>
<td class="type">Multi-channel</td>
<td class="yes">DirectX<br />WaveOut</td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /></td>
<td class="yes">OSS<br />ALSA</td>
<td class="no"><img src="/images/cross.png" alt="No" /></td>
<td class="partial">Untested</td>
<td class="no"><img src="/images/cross.png" alt="No" /></td>
</tr>

<tr>
<td class="type">SDL</td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /></td>
<td class="partial">Source Only</td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /></td>
<td class="partial">Untested</td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /></td>
<td class="partial">Source Only</td>
</tr>

<?php
feature( "ESD", NONE, NONE, YES, NONE, YES, YES );
feature( "aRts", NONE, NONE, YES, NONE, YES, NONE );
feature( "JACK", NONE, PART, YES, NONE, UNT, UNT );
?>
</table>

<div class="notes">
  <a id="audio_notes">Notes:</a>
  <p>
  [7] Windows DMO codecs can be used by VLC on 32-bit x86 platforms.
  This allows WMV-3/WMA-3 decoding. This feature is untested on Intel-based Macs.<br />
  [8] Real Audio playback is provided through the FFmpeg-library
  which does only support the Cook (RealAudio G2 / RealAudio 8)
  decoder at the moment.
</p>
</div>

<h2>Streaming</h2>
<p>See the <a href="/streaming-features.html">Streaming features page</a></p>

<h2>Interfaces and control</h2>
<?php feature_table( false ); ?>
<tr>
<td class="type">Default</td>
<td class="yes">WxWidgets</td>
<td class="yes">Cocoa</td>
<td class="yes">WxWidgets</td>
<td class="yes">Native</td>
<td class="yes">WxWidgets</td>
<td class="yes">GPE</td>
</tr>

<?php
feature( "Qt 4  <sup><a href=\"#intf_notes\">[9]</a></sup>", YES, NO, YES, NONE, UNT, NO );
feature( "Skins", YES, NO, YES, NO, YES, NO );
feature( "Web", YES, YES, YES, YES, YES, YES );
feature( "Telnet", YES, YES, YES, YES, YES, YES );
feature( "Command line", YES, YES, YES, YES, YES, YES );
feature( "Infrared", NO, NO, YES, NO, NO, NO );
?>
</table>
<div class="notes">
<a id="intf_notes">Notes:</a>
<p>
  [9] A new Qt4 interface is to-be-introduced by VLC's 0.9.0 release. It is
  already enabled in the nightly builds with limited functionality.
</p>
</div>

<h2>Miscellaneous</h2>
<?php feature_table( false );
feature( "SAP/SDP announces", YES, YES, YES, NO, YES, NO );
feature( "Bonjour protocol", YES, YES, YES, UNT, UNT, UNT );
?>
<tr>
<td class="type">Mozilla/Firefox plugin</td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /></td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /> <sup><a href="#bottom_notes">[12]</a></sup></td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /></td>
<td class="yes">No</td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /></td>
<td class="no"><img src="/images/cross.png" alt="No" /></td>
</tr>
<?php
feature( "ActiveX plugin", YES, NONE, NONE, NONE, NONE, NONE );
feature( "SVCD Menus", PART, NO, PART, NO, PART, NO );
feature( "Localization", YES, YES, YES, YES, YES, YES );
feature( "CD-Text <sup><a href=\"#bottom_notes\">[10]</a></sup>", YES, NO, YES, NO, PART, NONE );
feature( "CDDB CD info <sup><a href=\"#bottom_notes\">[11]</a></sup>", YES, YES, YES, NO, PART, NONE );
feature( "IPv6", YES, YES, YES, NO, YES, YES );
?>
<tr>
<td class="type">IGMPv3</td>
<td class="yes">Win XP</td>
<td class="no"><img src="/images/cross.png" alt="No" /></td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /></td>
<td class="no"><img src="/images/cross.png" alt="No" /></td>
<td class="partial">Untested</td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /></td>
</tr>


<tr>
<td class="type">CPU acceleration <sup><a href="#bottom_notes">[14]</a></sup></td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /></td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /></td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /></td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /></td>
<td class="yes"><img src="/images/tick.png" alt="Yes" /> <sup><a href="#bottom_notes">[13]</a></sup></td>
<td class="no"><img src="/images/cross.png" alt="No" /></td>
</tr>

</table>

<div class="notes">
<a id="bottom_notes">Notes:</a>
<p>
  [10] CD-Text information provided via libcdio. This service is available
  on all platforms supported by the library.
  <br />
  [11] CDDB information provided by libcddb on all supported platforms excepting BeOS.
 <br />
  [12] The Mozilla Plugin for Mac is only available for PowerPC-based Macs and Intel-based Macs running Mozilla in the Rosetta-mode. A port to the new Macs
  will be provided within VLC's 0.8.6 release.
  <br />
  [13] The OpenBSD 2.9 default assembler does not support MMX.
  <br />
  [14] Supported CPU extensions are MMX, MMXEXT, SSE, SSE2 and 3D Now! on x86
  processors, and AltiVec on G4/G5 processors.
  <br />
 <br /> 
  </p>
</div>

</div>

<?php footer('$Id$'); ?>
