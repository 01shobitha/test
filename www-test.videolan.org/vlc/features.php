<?php
   $title = "VLC - Features";
   $lang = "en";
   $date = "17 March 2004";
   $menu = array( "vlc", "features" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1> VLC features list </h1>

<div id="fullwidth">

<table border="0">

<tr>

<th></th>
<th></th>
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

<tr>

<td class="category" rowspan="14"><b>Inputs</b></td>
<td class="type"><a href="http://wiki.videolan.org/index.php/UDP" target="_blank">UDP</a> Unicast / <a href="http://wiki.videolan.org/index.php/multicast" target="_blank">Multicast</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="partial">unicast only</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type"><a href="http://wiki.videolan.org/index.php/RTP" target="_blank">RTP</a> Unicast / <a href="http://wiki.videolan.org/index.php/multicast" target="_blank">Multicast</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="partial">unicast only</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type"><a href="http://wiki.videolan.org/index.php/HTTP" target="_blank">HTTP</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type"><a href="http://wiki.videolan.org/index.php/protocol" target="_blank">FTP</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type"><a href="http://wiki.videolan.org/index.php/protocol" target="_blank">MMS</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="none">-</td>

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

<td class="type">DVD <sup>[1]</sup></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="none">-</td>

</tr>

<tr>

<td class="type">VCD</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="yes">Yes</td>
<td class="none">-</td>

</tr>

<tr>

<td class="type">SVCD <sup>[6]</sup></td>
<td class="partial">Incomplete</td>
<td class="partial">Incomplete</td>
<td class="partial">Incomplete</td>
<td class="no">No</td>
<td class="partial">Untested</td>
<td class="partial">Incomplete</td>

</tr>

<tr>

<td class="type">Audio CD</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="partial">Untested</td>
<td class="none">-</td>

</tr>

<tr>

<td class="type">DTS Audio CD</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="none">-</td>

</tr>

<tr>

<td class="type">DVB-S/C/T</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="yes">V4L2</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="none">-</td>

</tr>

<tr>

<td class="type">MPEG encoding card <sup>[5]</sup></td>
<td class="yes">Direct Show</td>
<td class="no">No</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="none">-</td>

</tr>

<tr>

<td class="type">Video acquisition</td>
<td class="yes">Direct Show</td>
<td class="no">No</td>
<td class="yes">V4L</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="partial">V4L Untested</td>

</tr>



<tr>
<td class="category" rowspan="15"><b>Input formats</b></td>
<td class="type">MPEG <a href="http://wiki.videolan.org/index.php/container" target="_blank">ES</a>/<a href="http://wiki.videolan.org/index.php/container" target="_blank">PS</a>/<a href="http://wiki.videolan.org/index.php/container" target="_blank">TS</a>/<a href="http://wiki.videolan.org/index.php/container" target="_blank">PVA</a>/<a href="http://wiki.videolan.org/index.php/codec" target="_blank">mp3</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
</tr>
<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/AVI" target="_blank">AVI</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
</tr>
<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/ASF" target="_blank">ASF</a>/<a href="http://wiki.videolan.org/index.php/codec" target="_blank">wmv</a>/<a href="http://wiki.videolan.org/index.php/codec" target="_blank">wma</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/container" target="_blank">Ogg</a>/<a href="http://wiki.videolan.org/index.php/container" target="_blank">OGM</a>/<a href="http://wiki.videolan.org/index.php/container" target="_blank">Annodex</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/container" target="_blank">MP4</a>/<a href="http://wiki.videolan.org/index.php/container" target="_blank">MOV</a>/3gpp</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/container" target="_blank">Matroska</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="partial">Untested</td>
<td class="no">No</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/container" target="_blank">Real</a></td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/container" target="_blank">Wav</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type">DTS Wav</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type">Raw <a href="http://wiki.videolan.org/index.php/codec" target="_blank">DV</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type">Raw <a href="http://wiki.videolan.org/index.php/Advanced+Audio+Coding" target="_blank">AAC</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type">Raw <a href="http://wiki.videolan.org/index.php/codec" target="_blank">ac3/a52</a> audio</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type">Raw DTS audio</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">FLAC</a> audio</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">FLV</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="partial">Untested</td>
<td class="partial">Untested</td>
<td class="partial">Untested</td>
</tr>


<tr>
<td class="category" rowspan="16"><b>Video Codecs</b></td>
<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">MPEG-1</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">MPEG-2</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">DivX 1/2/3</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">MPEG-4</a>/<a href="http://wiki.videolan.org/index.php/codec" target="_blank">DivX 5</a>/<a href="http://wiki.videolan.org/index.php/codec" target="_blank">XviD</a>/<a href="http://wiki.videolan.org/index.php/codec" target="_blank">3ivX D4</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/H264" target="_blank">H.264</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/Sorenson+Video" target="_blank">Sorenson (SVQ 1/3)</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">DV</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">FFmpeg</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">Cinepak</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="no">No</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">Theora</a> (alpha 3)</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="no">No</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">H263/H263i</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">MJPEG</a> A/B</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">WMV</a> 1/2</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">WMV</a> 3 / <a href="http://wiki.videolan.org/index.php/codec" target="_blank">VC-1</a></td>
<td class="yes">Yes<sup>[12], [13]</sup></td>
<td class="yes">Yes<sup>[12]</sup></td>
<td class="yes">Yes<sup>[12], [13]</sup></td>
<td class="yes">Yes<sup>[12]</sup></td>
<td class="yes">Yes<sup>[12]</sup></td>
<td class="no">No</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">Indeo Video</a> v3 (IV32)</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="partial">No PPC support</td>
<td class="yes">Yes</td>
<td class="partial">No PPC support</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">Indeo Video</a> v4-5 (IV41)(IV51)</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/Real+Media+Video" target="_blank">Real Video</a></td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
</tr>

<tr>

<td class="category" rowspan="14"><b>Subtitles</b></td>
<td class="type">DVD <sup>[7]</sup></td>
<td class="partial">Incomplete</td>
<td class="partial">Incomplete</td>
<td class="partial">Incomplete</td>
<td class="partial">Incomplete</td>
<td class="partial">Icomplete</td>
<td class="none">-</td>
</tr>

<tr>
<td class="type">SVCD</td>
<td class="yes">Yes</td>
<td class="partial">Untested</td>
<td class="yes">Yes</td>
<td class="partial">Untested</td>
<td class="partial">Untested</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type">CVD</td>
<td class="yes">Yes</td>
<td class="partial">Untested</td>
<td class="yes">Yes</td>
<td class="partial">Untested</td>
<td class="partial">Untested</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type">DVB</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="none">-</td>
</tr>

<tr>
<td class="type">Closed Captioning</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="none">-</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/container" target="_blank">OGM</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="none">-</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/container" target="_blank">Matroska</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="partial">Untested</td>
<td class="none">-</td>
</tr>

<tr>
<td class="type">MicroDVD</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="none">-</td>
</tr>

<tr>
<td class="type">Vobsub</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="none">-</td>
</tr>

<tr>
<td class="type">SubRIP</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="none">-</td>
</tr>

<tr>
<td class="type">SubViewer (v1 &amp; v2)</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="none">-</td>
</tr>

<tr>
<td class="type">SSA1-4</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="none">-</td>
</tr>

<tr>
<td class="type">SAMI</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="none">-</td>
</tr>

<tr>
<td class="type">Vplayer</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="none">-</td>
</tr>


<tr>

<td class="category" rowspan="9"><b>Video Filters</b></td>
<td class="type">Deinterlace</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type">Crop</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type">Image Wall</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type">Brightness-Saturation-Contrast</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type">Rotate</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type">Upside down</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type">Logo overlay</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="no">No</td>

</tr>

<tr>

<td class="type">Magnify-Gradient-Bluescreen</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="no">No</td>

</tr>

<tr>

<td class="type">RSS/Atom feeds</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="partial">Untested</td>
<td class="partial">Untested</td>
<td class="no">No</td>

</tr>

<tr>

<td class="category" rowspan="9"><b>Video Output</b></td>
<td class="type">Native</td>
<td class="yes">DirectX<br />GDI</td>
<td class="yes">OpenGL<br />Quartz</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Qte/X11</td>

</tr>

<tr>

<td class="type">X11</td>
<td class="none">-</td>
<td class="partial">Source Only</td>
<td class="yes">Yes</td>
<td class="none">-</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type">Xvideo</td>
<td class="none">-</td>
<td class="none">-</td>
<td class="yes">Yes</td>
<td class="none">-</td>
<td class="yes">Yes</td>
<td class="none">-</td>

</tr>

<tr>

<td class="type">SDL</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="yes">Yes</td>
<td class="partial">Untested</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type">Framebuffer</td>
<td class="none">-</td>
<td class="none">-</td>
<td class="yes">Yes</td>
<td class="none">-</td>
<td class="none">-</td>
<td class="no">No</td>

</tr>

<tr>
<td class="type">ASCII art</td>
<td class="no">No</td>
<td class="partial">Source Only</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="yes">Yes</td>
<td class="no">No</td>
</tr>

<tr>
<td class="type">Colored ASCII art</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="partial">Untested</td>
<td class="partial">Untested</td>
<td class="no">No</td>
</tr>

<tr>
<td class="type">MGA</td>
<td class="none">-</td>
<td class="none">-</td>
<td class="yes">Yes</td>
<td class="none">-</td>
<td class="none">-</td>
<td class="none">-</td>

</tr>

<tr>

<td class="type">GGI</td>
<td class="none">-</td>
<td class="none">-</td>
<td class="yes">Yes</td>
<td class="none">-</td>
<td class="partial">Untested</td>
<td class="none">-</td>

</tr>



<tr>

<td class="category" rowspan="17"><b>Audio Codecs</b></td>
<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">MPEG Layer 1 and 2</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">MP3</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">AC3 (i.e. A52)</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">DTS</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="no">No</td>
</tr>

<tr>

<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">LPCM</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type"><a href="http://wiki.videolan.org/index.php/Advanced+Audio+Coding" target="_blank">AAC</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">Vorbis</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">WMA 1/2</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">WMA 3</a></td>
<td class="yes">Yes<sup>[13]</sup></td>
<td class="no">No</td>
<td class="partial">Yes<sup>[13]</sup></td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>

</tr>

<tr>

<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">ADPCM</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="no">No</td>

</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">DV Audio</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">FLAC</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="partial">Untested</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">QDM2/QDMC (QuickTime)</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="partial">Untested</td>
<td class="yes">Yes</td>
<td class="partial">Untested</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">MACE</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">AMR (3GPP)</a></td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="partial">FFmpeg Untested</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/Real+Media+Video" target="_blank">Real Audio <sup>[11]</sup></a></td>
<td class="partial">Incomplete</td>
<td class="partial">Incomplete</td>
<td class="partial">Incomplete</td>
<td class="partial">Untested</td>
<td class="partial">Untested</td>
<td class="no">No</td>
</tr>

<tr>
<td class="type"><a href="http://wiki.videolan.org/index.php/codec" target="_blank">Speex</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="partial">Untested</td>
<td class="partial">Untested</td>
<td class="partial">Untested</td>
</tr>

<tr>

<td class="category" rowspan="8"><b>Audio Output</b></td>
<td class="type">Native</td>
<td class="yes">DirectX<br />WaveOut</td>
<td class="yes">Yes</td>
<td class="yes">OSS<br />ALSA</td>
<td class="yes">Yes</td>
<td class="yes">OSS</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type">S/PDIF</td>
<td class="yes">DirectX<br />WaveOut</td>
<td class="yes">Yes</td>
<td class="yes">OSS<br />ALSA</td>
<td class="no">No</td>
<td class="partial">Untested</td>
<td class="none">-</td>

</tr>

<tr>

<td class="type">multi-channel</td>
<td class="yes">DirectX<br />WaveOut</td>
<td class="yes">Yes</td>
<td class="yes">OSS<br />ALSA</td>
<td class="no">No</td>
<td class="partial">Untested</td>
<td class="no">No</td>

</tr>

<tr>

<td class="type">SDL</td>
<td class="yes">Yes</td>
<td class="partial">Source Only</td>
<td class="yes">Yes</td>
<td class="partial">Untested</td>
<td class="yes">Yes</td>
<td class="partial">Source Only</td>

</tr>

<tr>

<td class="type">ESD</td>
<td class="none">-</td>
<td class="none">-</td>
<td class="yes">Yes</td>
<td class="none">-</td>
<td class="yes">Yes</td>
<td class="yes">ESDDSP</td>

</tr>

<tr>

<td class="type">aRts</td>
<td class="none">-</td>
<td class="none">-</td>
<td class="yes">Yes</td>
<td class="none">-</td>
<td class="yes">Yes</td>
<td class="none">-</td>

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


<td class="type">JACK</td>
<td class="none">-</td>
<td class="partial">Source Only</td>
<td class="yes">Yes</td>
<td class="none">-</td>
<td class="partial">Untested</td>
<td class="partial">Untested</td>

</tr>

<tr>

<td class="category"><b>Stream Output</b></td>
<td colspan="7">See the <a href="/streaming-features.html">Streaming features page</a></td>

</tr>

<tr>

<td class="category" rowspan="8"><b>Interfaces</b></td>
<td class="type">Native</td>
<td class="yes">Yes</td>
<td class="yes">Cocoa</td>
<td class="none">-</td>
<td class="yes">Yes</td>
<td class="none">-</td>
<td class="yes">GPE</td>

</tr>

<tr>

<td class="type">GTK+ (unmaintained)</td>
<td class="yes">Yes</td>
<td class="none">-</td>
<td class="yes">Yes</td>
<td class="none">-</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type">Gnome (unmaintained)</td>
<td class="none">-</td>
<td class="none">-</td>
<td class="yes">Yes</td>
<td class="none">-</td>
<td class="yes">Yes</td>
<td class="no">No</td>

</tr>

<tr>

<td class="type">QT (unmaintained)</td>
<td class="none">-</td>
<td class="none">-</td>
<td class="yes">Yes</td>
<td class="none">-</td>
<td class="yes">Yes</td>
<td class="no">No</td>

</tr>

<tr>

<td class="type">KDE (unmaintained)</td>
<td class="none">-</td>
<td class="none">-</td>
<td class="yes">Yes</td>
<td class="none">-</td>
<td class="yes">Yes</td>
<td class="none">-</td>

</tr>

<tr>

<td class="type">WxWidgets</td>
<td class="yes">Yes</td>
<td class="partial">Source Only <sup>[10]</sup></td>
<td class="yes">Yes</td>
<td class="none">-</td>
<td class="yes">Yes</td>
<td class="no">No</td>

</tr>

<tr>

<td class="type">Skins</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>

</tr>

<tr>

<td class="type">HTTP/Webpage</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>



<tr>

<td class="category" rowspan="3"><b>Service Information</b></td>

<td class="type"><a href="http://wiki.videolan.org/index.php/SAP" target="_blank">SAP</a> / <a href="http://wiki.videolan.org/index.php/SDP" target="_blank">SDP</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="yes">Yes</td>
<td class="no">No</td>

</tr>

<tr>

<td class="type"><a href="http://wiki.videolan.org/index.php/protocol" target="_blank">SLP</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="partial">Untested</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type"><a href="http://wiki.videolan.org/index.php/protocol" target="_blank">Bonjour</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="partial">Untested</td>
<td class="partial">Untested</td>
<td class="partial">Untested</td>

</tr>


<tr>

<td class="category" rowspan="16"><b>Misc</b></td>
<td class="type">Command line</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type">RTSP client</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type">Remote Control</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type">Infrared</td>
<td class="no">No</td>
<td class="partial">Source Only</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>

</tr>

<tr>

<td class="type">Mozilla plugin</td>
<td class="yes">Yes</td>
<td class="partial">Source Only</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="no">No</td>
<td class="no">No</td>

</tr>

<tr>

<td class="type">ActiveX plugin</td>
<td class="yes">Yes</td>
<td class="none">-</td>
<td class="none">-</td>
<td class="none">-</td>
<td class="none">-</td>
<td class="none">-</td>

</tr>


<tr>
<td class="type">DVD Menus <sup>[2]</sup></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="none">-</td>
</tr>

<tr>
<td class="type">SVCD Menus <sup>[6]</sup></td>
<td class="partial">Incomplete</td>
<td class="no">No</td>
<td class="partial">Incomplete</td>
<td class="no">No</td>
<td class="partial">Untested</td>
<td class="partial">Incomplete</td>
</tr>

<tr>

<td class="type">Audio Visualization Effects</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type">Localization</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type">ID3 tags</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type">CD-Text <sup>[8]</sup></td>
<td class="yes">Yes</td>
<td class="no">no</td>
<td class="yes">Yes</td>
<td class="no">no</td>
<td class="partial">Untested</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type">CDDB CD info <sup>[9]</sup></td>
<td class="no">No</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="partial">Untested</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type"><a href="http://wiki.videolan.org/index.php/IP" target="_blank">IPv6</a></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>

</tr>

<tr>

<td class="type">IGMPv3</td>
<td class="yes">Win XP</td>
<td class="no">No</td>
<td class="yes">Yes</td>
<td class="no">No</td>
<td class="partial">Untested</td>
<td class="yes">Yes</td>

</tr>


<tr>

<td class="type">CPU acceleration <sup>[3]</sup></td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes</td>
<td class="yes">Yes <sup>[4]</sup></td>
<td class="no">No</td>

</tr>


<tr>

<th></th>
<th></th>
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

</table>

<div id="notes">

  <p>
  [1] DVD decryption is done through the libdvdcss library.
  <br />
  [2] DVD navigation is done through the libdvdplay library.
  <br />
  [3] supported CPU extensions are MMX, MMXEXT, SSE, SSE2 and 3D Now! on x86
  processors, and AltiVec on G4/G5 processors.
  <br />
  [4] the OpenBSD 2.9 default assembler does not support MMX.
  <br />
  [5] VLC for GNU/Linux supports two kinds of MPEG-2 encoding cards: Hauppauge WinTV-PVR-250/350
  and Visiontech Kfir.
  <br />
  [6] VLC on GNU/Linux, Solaris, and Microsoft Windows has playback
  control support via libcdio and libvcdinfo. On other platforms
  SVCD support varies depending on the availability of these libraries.
  (Volunteers for adding support is always welcome.). Handling still
  frames (often used in menus) and switching between different video
  formats is a problem.
  <br /> 
  [7] Full color for YUV-type chromas is not handled, only the gray-scale
  value. Subtitle transparency is not fully supported for all
  chromas. Some chromas are not handled at all.
  <br /> 
  [8] CD-Text information provided via libcdio. Support is available on
  those platforms this library is available.
  <br />
  [9] CDDB information provided by libcddb via libcdio. Support is
  available on those platforms both of these libraries are
  available. libcddb runs on BeOS although libcdio doesn't. On Microsoft
  Windows, libcddb doesn't compile yet without POSIX emulation.
  <br />
  [10] The current releases of WxWidgets for Mac are too unstable to be 
  used by VLC in production environments. Additionally, the resulting 
  interface isn't as Mac-like as we want VLC to be.
  <br />
  [11] Real Audio playback is provided through the FFmpeg-library
  which does only support the Cook (RealAudio G2 / RealAudio 8)
  decoder at the moment.
  <br />
  [12] WMV-3 / WMV-9 / VC-1 playback is through the FFmpeg-library
  since VLC 0.8.6. Some videos might still have problems playing.
  <br />
  [13] Windows dmo codecs can be used by VLC on intel 32bit platforms.
  This allows WMV-3/WMA-3 decoding.
  </p>
</div>

</div>

<?php footer('$Id$'); ?>
