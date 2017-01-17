<?php
   $title = "Streaming Features list";
   $lang = "en";
   $menu = array( "streaming", "features" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1> Streaming features list </h1>

<div id="fullwidth">

<h2>VLC Stream output</h2>

<table border="0">
<tr>
<th class="category"></th><th class="type"></th>
<th class="th-os"><a href="/vlc/download-windows.html">
  <img src="//images.videolan.org/images/icons/winvista.png" alt="Windows" width="32" height="32" />
</a></th>
<th class="th-os"><a href="/vlc/download-macosx.html">
  <img src="//images.videolan.org/images/icons/macosx.png" alt="Mac OS X" width="32" height="32" />
</a></th>
<th class="th-os"><a href="/vlc/download-linux.html">
  <img src="//images.videolan.org/images/icons/linux.png" alt="Linux" width="32" height="32" />
</a></th>
<th class="th-os"><a href="/vlc/download-beos.html">
  <img src="//images.videolan.org/images/icons/beos.png" alt="BeOS" width="32" height="32" />
</a></th>
<th class="th-os"><a href="/vlc/download-sources.html">
  <img src="//images.videolan.org/images/icons/freebsd.png" alt="FreeBSD" width="32" height="32" />
  <img src="//images.videolan.org/images/icons/openbsd.png" alt="OpenBSD" width="32" height="32" />
</a></th>
<th class="th-os"><a href="/vlc/download-familiar.html">
  <img src="//images.videolan.org/images/icons/familiar.png" alt="Familiar Linux"
       width="32" height="32" />
</a></th>

</tr>

<tr>

<td class="category"><b>Inputs</b></td>
<td class="type"></td>
<td colspan="6" class="yes">See the <a href="/vlc/features.html">VLC features page</a></td>

</tr>

<tr>

<td class="category" rowspan="8"><b>Output</b></td>

<td class="type"><a href="https://wiki.videolan.org/RTP">RTP</a>/UDP</td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>

</tr>

<tr>

<td class="type"><a href="https://wiki.videolan.org/RTSP">RTSP</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>

</tr>

<tr>

<td class="type">RTP/<a href="https://wiki.videolan.org/DCCP">DCCP</a></td>
<td class="no"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="no"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="no"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="no"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="partial">Untested</td>

</tr>

<tr>

<td class="type"><a href="https://wiki.videolan.org/UDP">Raw UDP</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>

</tr>

<tr>

<td class="type">(RTP or raw)
 <a href="https://wiki.videolan.org/multicast">Multicast</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="no"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>

</tr>

<tr>

<td class="type">File</td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>

</tr>

<tr>

<td class="type"><a href="https://wiki.videolan.org/HTTP">HTTP</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>

</tr>

<tr>

<td class="type"><a href="https://wiki.videolan.org/MMSH">MMSH</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>

</tr>

<tr>
<td class="category" rowspan="3"><b>Misc</b></td>
<td class="type">Transcoding</td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>

</tr>

<tr>

<td class="type">Send DVD subtitles</td>
<td class="partial"><img src="//images.videolan.org/images/features/partial.png" alt="Partial" /></td>
<td class="partial"><img src="//images.videolan.org/images/features/partial.png" alt="Partial" /></td>
<td class="partial"><img src="//images.videolan.org/images/features/partial.png" alt="Partial" /></td>
<td class="partial"><img src="//images.videolan.org/images/features/partial.png" alt="Partial" /></td>
<td class="partial"><img src="//images.videolan.org/images/features/partial.png" alt="Partial" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>

</tr>

<tr>

<td class="type">Send <a href="https://wiki.videolan.org/SAP">SAP</a> announces</td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="partial">Untested</td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
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
<td class="matrixhead"><a href="https://wiki.videolan.org/UDP">UDP</a></td>
<td class="matrixhead"><a href="https://wiki.videolan.org/RTP">RTP</a></td>
<td class="matrixhead"><a href="https://wiki.videolan.org/HTTP">HTTP</a></td>
<td class="matrixhead"><a href="https://wiki.videolan.org/protocol">MMSH</a></td>
<td class="matrixhead">File</td>
</tr>

<tr>
<td class="category"><a href="https://wiki.videolan.org/container">PS</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
</tr>

<tr>
<td class="category"><a href="https://wiki.videolan.org/container">TS</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
</tr>

<tr>
<td class="category"><a href="https://wiki.videolan.org/container">Ogg</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
</tr>

<tr>
<td class="category"><a href="https://wiki.videolan.org/ASF">ASF</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
</tr>

<tr>
<td class="category"><a href="https://wiki.videolan.org/container">MP4</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
</tr>

<tr>
<td class="category"><a href="https://wiki.videolan.org/container">QuickTime</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
</tr>

<tr>
<td class="category">Raw</td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
</tr>

<tr>
<td class="category"><a href="https://wiki.videolan.org/MPJPEG">MPJPEG</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="partial"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="partial"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
</tr>

</table>

<p></p>

<h3>Muxer / audio and video formats matrix</h3>

<p>This table describes which video and audio formats VLC can output, and how these can be muxed. <b>Example: </b> MPEG4 can be muxed in any way, however if you want to stream Window Media Video, then you cannot use PS, MP4 or RAW muxing.</p>

<table border="0">

<tr>
<td></td>
<td></td>
<td class="matrixhead"><a href="https://wiki.videolan.org/container">PS</a></td>
<td class="matrixhead"><a href="https://wiki.videolan.org/container">TS</a></td>
<td class="matrixhead"><a href="https://wiki.videolan.org/container">Ogg</a></td>
<td class="matrixhead"><a href="https://wiki.videolan.org/ASF">ASF</a></td>
<td class="matrixhead"><a href="https://wiki.videolan.org/container">MP4</a></td>
<td class="matrixhead"><a href="https://wiki.videolan.org/container">MOV</a></td>
<td class="matrixhead"><a href="https://wiki.videolan.org/MPMJPEG">MPMJPEG</a></td>
<td class="matrixhead"><a href="https://wiki.videolan.org/RTP">RTP</a></td>
<td class="matrixhead">Raw</td>
</tr>

<tr>
<td class="category" rowspan="9"><b>Video formats</b></td>
<td class="type"><a href="https://wiki.videolan.org/Codec">MPEG-1 video</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
</tr>

<tr>
<td class="type"><a href="https://wiki.videolan.org/Codec">MPEG-2 video</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
</tr>

<tr>
<td class="type"><a href="https://wiki.videolan.org/Codec">MPEG-4 video</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
</tr>

<tr>
<td class="type"><a href="https://wiki.videolan.org/Codec">DivX 1/2/3 video</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /><sup><a href="#muxer_notes">1</a></sup></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
</tr>

<tr>
<td class="type"><a href="https://wiki.videolan.org/Codec">WMV 1/2</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /><sup><a href="#muxer_notes">1</a></sup></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
</tr>

<tr>
<td class="type"><a href="https://wiki.videolan.org/Codec">H/I 263</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /><sup><a href="#muxer_notes">1</a></sup></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
</tr>

<tr>
<td class="type"><a href="https://wiki.videolan.org/Codec">MJPEG</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /><sup><a href="#muxer_notes">1</a></sup></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="partial"><img src="//images.videolan.org/images/features/partial.png" alt="" />SVN only</td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
</tr>

<tr>
<td class="type"><a href="https://wiki.videolan.org/Codec">Theora</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
</tr>

<tr>
<td class="type"><a href="https://wiki.videolan.org/Codec">H.264/MPEG-4 AVC</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
</tr>


<tr>
<td class="category" rowspan="8"><b>Audio formats</b></td>
<td class="type"><a href="https://wiki.videolan.org/Codec">MPEG Layer 1/2/3 audio</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
</tr>

<tr>
<td class="type"><a href="https://wiki.videolan.org/Codec">AC3 (i.e. A52)</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
</tr>

<tr>
<td class="type"><a href="https://wiki.videolan.org/Advanced+Audio+Coding">MPEG-4 audio (i.e. AAC)</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
</tr>

<tr>
<td class="type"><a href="https://wiki.videolan.org/Codec">Vorbis</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
</tr>

<tr>
<td class="type"><a href="https://wiki.videolan.org/Codec">Speex</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
</tr>

<tr>
<td class="type"><a href="https://wiki.videolan.org/Codec">FLAC</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
</tr>

<tr>
<td class="type"><a href="https://wiki.videolan.org/Codec">PCM</a> (Wave)</td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
</tr>

<tr>
<td class="type"><a href="https://wiki.videolan.org/Codec">µ-law/A-law</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
</tr>
</table>

<div class="notes">
	<ol id="muxer_notes">
		<li> This feature is possible with VideoLAN but not standard (so not interoperable).</li>
	</ol>
</div>

<h3>Possible output formats for the transcoding module</h3>

<table border="0">

<tr>
<td class="category" rowspan="8"><b>Video formats</b></td>
<td class="type"><a href="https://wiki.videolan.org/Codec">MPEG-1 video</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
</tr>

<tr>
<td class="type"><a href="https://wiki.videolan.org/Codec">MPEG-2 video</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
</tr>

<tr>
<td class="type"><a href="https://wiki.videolan.org/Codec">MPEG-4 video</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
</tr>

<tr>
<td class="type"><a href="https://wiki.videolan.org/Codec">DivX 1/2/3 video</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
</tr>

<tr>
<td class="type"><a href="https://wiki.videolan.org/Codec">WMV 1/2</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
</tr>

<tr>
<td class="type"><a href="https://wiki.videolan.org/Codec">H/I 263</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
</tr>

<tr>
<td class="type"><a href="https://wiki.videolan.org/Codec">MJPEG</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
</tr>

<tr>
<td class="type"><a href="https://wiki.videolan.org/Codec">Theora</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
</tr>


<tr>
<td class="category" rowspan="8"><b>Audio formats</b></td>
<td class="type"><a href="https://wiki.videolan.org/Codec">MPEG Layer 2 audio</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
</tr>

<tr>
<td class="type"><a href="https://wiki.videolan.org/Codec">MPEG Layer 3 audio</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /><sup><a href="#possible_notes">2</a></sup></td>
</tr>


<tr>
<td class="type"><a href="https://wiki.videolan.org/Codec">AC3 (i.e. A52)</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
</tr>

<tr>
<td class="type"><a href="https://wiki.videolan.org/Advanced+Audio+Coding">MPEG-4 audio (i.e. AAC)</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /><sup><a href="#possible_notes">3</a></sup></td>
</tr>

<tr>
<td class="type"><a href="https://wiki.videolan.org/Codec">Vorbis/Speex</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
</tr>

<tr>
<td class="type"><a href="https://wiki.videolan.org/Codec">FLAC</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
</tr>

<tr>
<td class="type"><a href="https://wiki.videolan.org/Codec">PCM</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
</tr>

<tr>
<td class="type"><a href="https://wiki.videolan.org/Codec">µ-law/A-law</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
</tr>

</table>

<div class="notes">
	<ol start="2" id="possible_notes"> 
		<li>For this, you have to compile ffmpeg with <i>libmp3lame</i> support.</li>
		<li>For this, you have to compile ffmpeg with <i>libfaac</i> support.</li>
	</ol>
</div>


<h2>VLS</h2>

<table border="0">

<tr>

<th class="category"></th><th class="type"></th>
<th class="th-os"><a href="/streaming/download-vls-sources.html">
  <img src="//images.videolan.org/images/icons/linux.png" alt="Linux" width="32" height="32" />
</a></th>
<th class="th-os"><a href="/streaming/download-vls-windows.html">
  <img src="//images.videolan.org/images/icons/winvista.png" alt="Windows" width="32" height="32" />
</a></th>
<th class="th-os"><a href="/streaming/download-vls-sources.html">
  <img src="//images.videolan.org/images/icons/macosx.png" alt="Mac OS X" width="32" height="32" />
</a></th>


</tr>

<tr>

<td class="category" rowspan="8"><b>Inputs</b></td>
<td class="type">File</td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>

</tr>

<tr>

<td class="type">DVD</td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>

</tr>

<tr>

<td class="type">DVB-S (Hauppauge Nova-S / Nexus)</td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>

</tr>

<tr>

<td class="type">DVB-C (Hauppauge DVB-C)</td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>

</tr>

<tr>

<td class="type">DVB-T (Hauppauge Nova-t)</td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>

</tr>

<tr>

<td class="type">MPEG encoding card [4]</td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>

</tr>

<tr>

<td class="type">ASI card</td>
<td class="partial"><img src="//images.videolan.org/images/features/partial.png" alt="" />SVN Only</td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>

</tr>

<tr>

<td class="type">V4L device</td>
<td class="partial"><img src="//images.videolan.org/images/features/partial.png" alt="" />SVN Only</td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>

</tr>

<tr>

<td class="category" rowspan="2"><b>Output</b></td>
<td class="type">UDP Unicast / Multicast</td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>

</tr>

<tr>

<td class="type">File</td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>

</tr>

<tr>

<td class="category" rowspan="2"><b>Input formats</b></td>
<td class="type"><a href="https://wiki.videolan.org/Container">TS</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>

</tr>

<tr>

<td class="type"><a href="https://wiki.videolan.org/Container">PS</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>


</tr>

<tr>

<td class="category" rowspan="1"><b>Output format</b></td>
<td class="type"><a href="https://wiki.videolan.org/Container">TS</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>

</tr>

<tr>

<td class="category" rowspan="2"><b>Control</b></td>
<td class="type">Command line</td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>

</tr>

<tr>

<td class="type">Telnet</td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>

</tr>

<tr>

<td class="category" rowspan="4"><b>Misc</b></td>
<td class="type"><a href="https://wiki.videolan.org/IP">IPv6</a></td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>

</tr>

<tr>

<td class="type">Send DVD subtitles</td>
<td class="yes"><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>

</tr>

<tr>

<td class="type">Send <a href="https://wiki.videolan.org/SAP">SAP</a> announces</td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>

</tr>

<tr>

<td class="type">Transcoding</td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>
<td class="yes"><img src="//images.videolan.org/images/features/cross.png" alt="No" /></td>

</tr>

</table>

<div class="notes">
	<ol start="4" id="vls_notes">
<li>VLS supports two kinds of MPEG-2 encoding cards: Hauppauge          
WinTV-PVR-250/350 and Visiontech Kfir.</li>
</ol>
</div>

<div class="feature-icon-container">
	<ul class="feature-icon">
	<li><img src="//images.videolan.org/images/features/tick.png" alt="Yes" /> = Yes</li>
	<li><img src="//images.videolan.org/images/features/partial.png" alt="Partial" /> = Partial</li>
	<li><img src="//images.videolan.org/images/features/untested.png" alt="Untested" /> = Untested</li>
	<li><img src="//images.videolan.org/images/features/cross.png" alt="No" /> = No</li>
	</ul>
</div>
</div>
<?php
  footer('$Id$');
?>
