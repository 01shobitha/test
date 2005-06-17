<?php
   $title = "VideoLAN - x264";
   $lang = "en";
   $date = "29 June 2004";
   $menu = array( "home", "x264" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
?>

<h1>x264 - a free h264/avc encoder</h1>

<p>x264 is a free library for encoding H264/AVC video streams. The code is written by <a href="mailto:fenrir@videolan.org">Laurent Aimar</a>, <a href="mailto:titer@videolan.org">Eric Petit</a>(OS X), <a href="mailto:chenm001@163.com">Min Chen</a> (vfw/nasm), Justin Clay(vfw), <a href="mailto:mru@mru.ath.cx">M&aring;ns Rullg&aring;rd</a> and <a href="mailto:pengvado@users.sourceforge.net">Loren Merritt</a> from scratch. It is released under the terms of the GPL license.</p>

<h2>Development status</h2>

<p><span style="color: red;"><b>BIG FAT WARNING: x264 is still in early development stage</b></span></p>

<p>Encoder features</p>

<ul>
<li>CAVLC/CABAC</li>
<li>Multi-references</li>
<li>Intra: all macroblock types (16x16, 8x8, and 4x4 with all predictions)</li>
<li>Inter P: all partitions (from 16x16 down to 4x4)</li>
<li>Inter B: partitions from 16x16 down to 8x8 (including SKIP/DIRECT)</li>
<li>Ratecontrol: constant quantizer, single or multipass ABR, optional VBV</li>
<li>Scene cut detection</li>
<li>Adaptive B-frame placement</li>
<li>B-frames as references / arbitrary frame order</li>
<li>8x8 and 4x4 adaptive spatial transform</li>
<li>lossless mode</li>
</ul>

<h2>Getting x264</h2>

<p>The latest x264 source code can always be found by anonymous SVN repository:</p>

<p># svn co svn://svn.videolan.org/x264/trunk x264</p>

<p>Unofficial builds for Windows are available from <a href="http://x264.nl/">Jarod</a>, <a href="http://www.aziendeassociate.it/cd.asp?dir=/x264">Celtic Druid</a>, or <a href="http://forum.doom9.org/showthread.php?s=&threadid=89979">Sharktooth</a>.

<h2>Support</h2>

<p>For support information, have a look <a href="http://www.videolan.org/support/">here</a>.</p>

<p>A mailing list (<a href="http://developers.videolan.org/lists.html">x264-devel</a>), a forum (<a href="http://forum.doom9.org/forumdisplay.php?s=&forumid=54">Doom9</a>), and IRC (<a href="irc://irc.freenode.net/x264">#x264@freenode</a>) are also available.</p>

<h2>Projects using x264</h2>

<ul>

<li><a href="http://www.videolan.org/">VLC media player</a>: a cross-platform video player and streaming solution.</li>
<li><a href="http://handbrake.m0k.org/">Handbrake</a>: a multi-platform, multithreaded DVD to MPEG-4 ripper/converter.</li>
<li><a href="http://tcvp.sourceforge.net/">TCVP</a></li>
<li><a href="http://www.mplayerhq.hu/">MEncoder</a></li>
<li><a href="http://ffmpeg.sourceforge.net/index.php">ffmpeg</a></li>
<li><a href="http://ffdshow.sourceforge.net/index.php">ffdshow</a></li>
<li><a href="http://gordianknot.sourceforge.net/">GordianKnot</a></li>
</ul>

<p>If you use x264 in another project, let us know !</p>

<?php footer('$Id: $'); ?>
