<?php
   $title = "VideoLAN Streaming - Features list";
   $lang = "en";
   $date = "11 January 2002";
   $menu = array( "streaming", "features" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
?>

<h1> Streaming features list </h1>

<h2>VLC Stream output</h2>

<p></p>

<table border="0">

<tr>

<th></th>
<th></th>
<th class="os"><a href="/vlc/download-windows.html">
  <img src="/images/icons/windows.gif" alt="Windows" width="32" height="32" />
</a></th>
<th class="os"><a href="/vlc/download-macosx.html">
  <img src="/images/icons/macosx.gif" alt="Mac OS X" width="32" height="32" />
</a></th>
<th class="os"><a href="/vlc/download-linux.html">
  <img src="/images/icons/linux.gif" alt="Linux" width="32" height="32" />
</a></th>
<th class="os"><a href="/vlc/download-beos.html">
  <img src="/images/icons/beos.gif" alt="BeOS" width="32" height="32" />
</a></th>
<th class="os"><a href="/vlc/download-sources.html">
  <img src="/images/icons/freebsd.gif" alt="FreeBSD" width="32" height="32" />
  <img src="/images/icons/openbsd.gif" alt="OpenBSD" width="32" height="32" />
</a></th>
<th class="os"><a href="/vlc/download-familiar.html">
  <img src="/images/icons/familiar.gif" alt="Familiar Linux"
       width="32" height="32" />
</a></th>

</tr>

<tr>

<td class="category"><b>Inputs</b></td>
<td class="type"></td>
<td colspan="6" class="yes">See the <a href="/vlc/features.html">VLC features page</a></td>

</tr>

<tr>

<td class="category" rowspan="5"><b>Output</b></td>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=UDP" target="_blank">UDP</a> Unicast / <a href="http://wiki.videolan.org/tiki-index.php?page=multicast" target="_blank">Multicast</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="partial">unicast only</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=RTP" target="_blank">RTP</a> Unicast / <a href="http://wiki.videolan.org/tiki-index.php?page=multicast" target="_blank">Multicast</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="partial">unicast only</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type">File</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=HTTP" target="_blank">HTTP</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=protocol" target="_blank">MMSH</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>
<td class="category" rowspan="3"><b>Misc</b></td>
<td class="type">Transcoding</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type">Send DVD subtitles</td>
<td class="partial">Partial</td>
<td class="partial">Partial</td>
<td class="partial">Partial</td>
<td class="partial">Partial</td>
<td class="partial">Partial</td>
<td class="no">No</td>

</tr>

<tr>

<td class="type">Send <a href="http://wiki.videolan.org/tiki-index.php?page=SAP" target="_blank">SAP</a> announces</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="partial">Untested</td>
<td class="yes">Yes</td>
<td class="partial">Untested</td>

</tr>

<tr>
<td class="category"><b>Interfaces and more</b></td>
<td class="type"></td>
<td colspan="6" class="yes">See the <a href="/vlc/features.html">VLC features page</a></td>
</tr>

</table>

<p></p>



<h3>Output method / muxer matrix</h3>

<p>This table describes what type of muxing is allowed when streaming to certain output methods. <b>Example:</b> PS muxing can only be done when you write to HTTP or files, and when you want to use UDP, you can only mux in TS or as RAW.</p>

<table border="0">

<tr>
<td></td>
<td class="matrixhead"><a href="http://wiki.videolan.org/tiki-index.php?page=UDP" target="_blank">UDP</a></td>
<td class="matrixhead"><a href="http://wiki.videolan.org/tiki-index.php?page=RTP" target="_blank">RTP</a></td>
<td class="matrixhead"><a href="http://wiki.videolan.org/tiki-index.php?page=HTTP" target="_blank">HTTP</a></td>
<td class="matrixhead"><a href="http://wiki.videolan.org/tiki-index.php?page=protocol" target="_blank">MMSH</a></td>
<td class="matrixhead">File</td>
</tr>

<tr>
<td class="category"><a href="http://wiki.videolan.org/tiki-index.php?page=container" target="_blank">PS</a></td>
<td class="no">No</td>
<td class="no">No</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="category"><a href="http://wiki.videolan.org/tiki-index.php?page=container" target="_blank">TS</a></td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="category"><a href="http://wiki.videolan.org/tiki-index.php?page=container" target="_blank">Ogg</a></td>
<td class="no">No</td>
<td class="no">No</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="category"><a href="http://wiki.videolan.org/tiki-index.php?page=ASF" target="_blank">ASF</a></td>
<td class="no">No</td>
<td class="no">No</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="category"><a href="http://wiki.videolan.org/tiki-index.php?page=container" target="_blank">MP4</a></td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="category"><a href="http://wiki.videolan.org/tiki-index.php?page=container" target="_blank">QuickTime</a></td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="category">Raw</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="category"><a href="http://wiki.videolan.org/tiki-index.php?page=MPMJPEG" target="_blank">MPMJPEG</a></td>
<td class="no">No</td>
<td class="no">No</td>
<td class="partial">SVN only</td>
<td class="no">No</td>
<td class="partial">SVN only</td>
</tr>

</table>

<p></p>

<h3>Muxer / audio and video formats matrix</h3>

<p>This table describes which video and audio formats VLC can output, and how these can be muxed. <b>Example: </b> MPEG4 can be muxed in any way, however if you want to stream Window Media Video, then you cannot use PS, MP4 or RAW muxing.</p>

<table border="0">

<tr>
<td></td>
<td></td>
<td class="matrixhead"><a href="http://wiki.videolan.org/tiki-index.php?page=container" target="_blank">PS</a></td>
<td class="matrixhead"><a href="http://wiki.videolan.org/tiki-index.php?page=container" target="_blank">TS</a></td>
<td class="matrixhead"><a href="http://wiki.videolan.org/tiki-index.php?page=container" target="_blank">Ogg</a></td>
<td class="matrixhead"><a href="http://wiki.videolan.org/tiki-index.php?page=ASF" target="_blank">ASF</a></td>
<td class="matrixhead"><a href="http://wiki.videolan.org/tiki-index.php?page=container" target="_blank">MP4</a></td>
<td class="matrixhead"><a href="http://wiki.videolan.org/tiki-index.php?page=container" target="_blank">MOV</a></td>
<td class="matrixhead"><a href="http://wiki.videolan.org/tiki-index.php?page=MPMJPEG" target="_blank">MPMJPEG</a></td>
<td class="matrixhead">Raw</td>
</tr>

<tr>
<td class="category" rowspan="8"><b>Video formats</b></td>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Codec" target="_blank">MPEG-1 video</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Codec" target="_blank">MPEG-2 video</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Codec" target="_blank">MPEG-4 video</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Codec" target="_blank">DivX 1/2/3 video</a></td>
<td class="no">No</td>
<td class="yes">Yes [1]</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Codec" target="_blank">WMV 1/2</a></td>
<td class="no">No</td>
<td class="yes">Yes [1]</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Codec" target="_blank">H/I 263</a></td>
<td class="no">No</td>
<td class="yes">Yes [1]</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Codec" target="_blank">MJPEG</a></td>
<td class="no">No</td>
<td class="yes">Yes [1]</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="partial">SVN only</td>
<td class="no">No</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Codec" target="_blank">Theora</a></td>
<td class="no">No</td>
<td class="no">No</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
</tr>

<tr>
<td class="category" rowspan="5"><b>Audio formats</b></td>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Codec" target="_blank">MPEG Layer 1/2/3 audio</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Codec" target="_blank">AC3 (i.e. A52)</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Advanced+Audio+Coding" target="_blank">MPEG-4 audio (i.e. AAC)</a></td>
<td class="no">No</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="no">No</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Codec" target="_blank">Vorbis/Speex</a></td>
<td class="no">No</td>
<td class="no">No</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Codec" target="_blank">FLAC</a></td>
<td class="no">No</td>
<td class="no">No</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="yes">Yes</td>
</tr>

</table>

<p>[1] This feature is possible with VideoLAN but not standard (so not
interoperable).</p>

<p></p>

<h3>Possible output formats for the transcoding module</h3>

<p></p>

<table border="0">

<tr>
<td class="category" rowspan="8"><b>Video formats</b></td>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Codec" target="_blank">MPEG-1 video</a></td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Codec" target="_blank">MPEG-2 video</a></td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Codec" target="_blank">MPEG-4 video</a></td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Codec" target="_blank">DivX 1/2/3 video</a></td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Codec" target="_blank">WMV 1/2</a></td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Codec" target="_blank">H/I 263</a></td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Codec" target="_blank">MJPEG</a></td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Codec" target="_blank">Theora</a></td>
<td class="yes">Yes</td>
</tr>


<tr>
<td class="category" rowspan="6"><b>Audio formats</b></td>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Codec" target="_blank">MPEG Layer 2 audio</a></td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Codec" target="_blank">MPEG Layer 3 audio</a></td>
<td class="yes">Yes [2]</td>
</tr>


<tr>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Codec" target="_blank">AC3 (i.e. A52)</a></td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Advanced+Audio+Coding" target="_blank">MPEG-4 audio (i.e. AAC)</a></td>
<td class="yes">Yes [3]</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Codec" target="_blank">Vorbis/Speex</a></td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Codec" target="_blank">FLAC</a></td>
<td class="yes">Yes</td>
</tr>

</table>

<p>[2] For this, you have to compile ffmpeg with <i>libmp3lame</i> support.</p>
<p>[3] For this, you have to compile ffmpeg with <i>libfaac</i> support.</p>

<p></p>

<h2>VLS</h2>

<p></p>
<table border="0">

<tr>

<th></th>
<th></th>
<th class="os"><a href="/streaming/download-vls-sources.html">
  <img src="/images/icons/linux.gif" alt="Linux" width="32" height="32" />
</a></th>
<th class="os"><a href="/streaming/download-vls-windows.html">
  <img src="/images/icons/windows.gif" alt="Windows" width="32" height="32" />
</a></th>
<th class="os"><a href="/streaming/download-vls-sources.html">
  <img src="/images/icons/macosx.gif" alt="Mac OS X" width="32" height="32" />
</a></th>


</tr>

<tr>

<td class="category" rowspan="8"><b>Inputs</b></td>
<td class="type">File</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type">DVD</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="no">No</td>

</tr>

<tr>

<td class="type">DVB-S (Hauppauge Nova-S / Nexus)</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="no">No</td>

</tr>

<tr>

<td class="type">DVB-C (Hauppauge DVB-C)</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="no">No</td>

</tr>

<tr>

<td class="type">DVB-T (Hauppauge Nova-t)</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="no">No</td>

</tr>

<tr>

<td class="type">MPEG encoding card [4]</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="no">No</td>

</tr>

<tr>

<td class="type">ASI card</td>
<td class="partial">SVN Only</td>
<td class="no">No</td>
<td class="no">No</td>

</tr>

<tr>

<td class="type">V4L device</td>
<td class="partial">SVN Only</td>
<td class="no">No</td>
<td class="no">No</td>

</tr>

<tr>

<td class="category" rowspan="2"><b>Output</b></td>
<td class="type">UDP Unicast / Multicast</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type">File</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="category" rowspan="2"><b>Input formats</b></td>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Container" target="_blank">TS</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Container" target="_blank">PS</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>


</tr>

<tr>

<td class="category" rowspan="1"><b>Output format</b></td>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=Container" target="_blank">TS</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="category" rowspan="2"><b>Control</b></td>
<td class="type">Command line</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type">Telnet</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="category" rowspan="4"><b>Misc</b></td>
<td class="type"><a href="http://wiki.videolan.org/tiki-index.php?page=IP" target="_blank">IPv6</a></td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="no">No</td>

</tr>

<tr>

<td class="type">Send DVD subtitles</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="no">No</td>

</tr>

<tr>

<td class="type">Send <a href="http://wiki.videolan.org/tiki-index.php?page=SAP" target="_blank">SAP</a> announces</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>

</tr>

<tr>

<td class="type">Transcoding</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>

</tr>


</table>

<p>[4] VLS supports two kinds MPEG-2 encoding cards: Hauppauge          
WinTV-PVR-250/350 and Visiontech Kfir.</p>                              

<?php
  footer('$Id$');
?>
