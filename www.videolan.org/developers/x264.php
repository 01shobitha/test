<?php
   $title = "x264, the best H.264/AVC encoder";
   $body_color = "green";
   $nobanner = true;
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

    <div>
        <div style='float: left; width: 450px;'>
            <h1>x264</h1>
            <div class='projectDescription'>
                <p>x264 is a <b>free software</b> <b>library</b> and <b>application</b> for encoding video streams into the
                <b><a href="http://en.wikipedia.org/wiki/H.264">H.264/MPEG-4 AVC</a></b> format,
                and is is released under the terms of the <a href="http://www.gnu.org/licenses/old-licenses/gpl-2.0.html">GNU GPL</a>.</p>

            </div>
            <a class='extraInfoLink' href='#features'>Features</a>
            <a id='downloadButton' href='ftp://ftp.videolan.org/pub/x264/snapshots/last_x264.tar.bz2'>
                <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadX264.png' alt='Download x264 icon' />
                <div class='downloadText'>Download x264</div>
                <span id='downloadDetails' style='font-size: 12px; color: white;'>
                    master &nbsp;&#8226;&nbsp; Source &nbsp;&#8226;&nbsp; 475kB
                </span>
            </a>
<!--            <a class='extraInfoLink' href='#' style="padding-left: 100px;">Other Systems and Versions</a>-->
        </div>

        <div style='float: left; width: 400px; color: #333333;'>
            <a name="features"></a>
            <h1 style='margin-bottom: 25px;'>Features Overview</h1>
            Provides <b>best-in-class</b> performance, compression, and features.<br />
            <br />
            Achieves dramatic <b>performance</b>, encoding 4 or more 1080p streams in realtime on a single consumer-level computer.<br />
            <br />
            Gives the best <b>quality</b>, having the most advanced <b>psychovisual optimizations</b>.<br />
            <br />
            Support <b>features</b> necessary for many different applications, such as <b>television broadcast</b>, <b>Blu-ray</b>,
            low-latency video applications, and <b>web video</b>.<br />
            <br />x264 forms the core of many web video services, such as <b>Youtube, Facebook, Vimeo, and Hulu</b>.
             It is widely used in television broadcast and by ISP.<br />
<!--            <br />Has won so many awards.<br /> -->
        </div>
<?php /*        <div style='float: right; width: 450px; padding-left: 70px;'>
                <a name="screenshots"></a>
<!--                <h1 style='padding-left: 5px; margin-bottom: 25px;'>Screenshots</h1> -->

            <?php image('x264/sixth_msu_conclusion.png', "x264 comparison"); ?>
   </div> */?>
    </div>

<div class="clearme"></div>

<h1>Getting x264</h1>

<p>The latest <b>x264 source code</b> can always be found by anonymous <a href="http://wiki.videolan.org/Git">git</a> repository:</p>

<p><code># git clone git://git.videolan.org/x264.git</code></p>

<p>Or grab a <a href="ftp://ftp.videolan.org/pub/videolan/x264/snapshots/"><b>daily tarball</b></a>.</p>

<p>You can <a href="http://git.videolan.org/?p=x264.git;a=summary">browse the source</a> on-line.</p>

<p>Unofficial builds for <b>Windows</b> are available from <a href="http://x264.nl/">Jarod</a>,
<a href="http://doom10.org/index.php?topic=3.0">techouse</a>, or
<a href="http://forum.doom9.org/showthread.php?t=89979">Sharktooth</a>.</p>


<h2>Encoder features</h2>
<ul class="bullets">
    <li> 8x8 and 4x4 adaptive spatial transform</li>
    <li> Adaptive B-frame placement</li>
    <li> B-frames as references / arbitrary frame order</li>
    <li> CAVLC/CABAC entropy coding</li>
    <li> Custom quantization matrices</li>
    <li> Intra: all macroblock types (16x16, 8x8, 4x4, and PCM with all predictions)</li>
    <li> Inter P: all partitions (from 16x16 down to 4x4)</li>
    <li> Inter B: partitions from 16x16 down to 8x8 (including skip/direct)</li>
    <li> Interlacing (MBAFF)</li>
    <li> Multiple reference frames</li>
    <li> Ratecontrol: constant quantizer, constant quality, single or multipass ABR, optional VBV</li>
    <li> Scenecut detection</li>
    <li> Spatial and temporal direct mode in B-frames, adaptive mode selection</li>
    <li> Parallel encoding on multiple CPUs</li>
    <li> Predictive lossless mode</li>
    <li> Psy optimizations for detail retention (adaptive quantization, psy-RD, psy-trellis)</li>
    <li> Zones for arbitrarily adjusting bitrate distribution</li>
</ul>

<!-- <h2>Authors</h2>
    <p>The code is written from scratch by <a href="mailto:fenrir@videolan.org">Laurent Aimar</a>,
    <a href="mailto:pengvado@users.sourceforge.net">Loren Merritt</a>, <a href="mailto:titer@videolan.org">Eric Petit</a> (OS X),
    <a href="mailto:chenm001@163.com">Min Chen</a> (vfw/asm), Justin Clay (vfw), <a href="mailto:mru@mru.ath.cx">M&aring;ns Rullg&aring;rd</a>,
    Radek Czyz, Christian Heine (asm), Alex Izvorski, Alex Wright and <a href="mailto:darkshikari@gmail.com">Jason Garrett-Glaser</a>.</p>-->


<h2>Support</h2>

<p>For support information and to ask questions, you have the following possibilities:</p>

<p>A mailing list (<a href="lists.html">x264-devel</a>), a forum (<a href="http://doom10.org/index.php?board=5.0">Doom10</a>), and IRC (<a href="irc://irc.freenode.net/x264">#x264@freenode</a>).</p>

<h2>Bugs</h2>
<p>Please report any bugs to the <a href="/developers/lists.html">mailing list</a>. If it is a crash, then compile x264 with `./configure --enable-debug` and follow the <a href="http://ffmpeg.org/bugreports.html">ffmpeg bugreporting guidelines</a>.</p>

<div class="tricolumn">
    <div class="onecolumn">
        <h2>Software using x264</h2>
        <ul class="bullets">
        <li><a href="http://avidemux.org/">Avidemux</a></li>
        <li><a href="http://www.funknmary.de/bergdichter/projekte/index.php?page=ELDER">ELDER</a></li>
        <li><a href="http://sourceforge.net/projects/ffdshow">ffdshow</a></li>
        <li><a href="http://ffmpeg.org/">ffmpeg</a></li>
        <li><a href="http://gordianknot.sourceforge.net/">GordianKnot</a></li>
        <li><a href="http://handbrake.m0k.org/">Handbrake</a></li>
        <li><a href="http://lives.sourceforge.net/">LiVES</a></li>
        <li><a href="http://forum.doom9.org/showthread.php?t=96032">MeGUI</a></li>
        <li><a href="http://www.mplayerhq.hu/">MEncoder</a></li>
        <li><a href="http://www.pspvideo9.com">pspVideo9</a></li>
        <li><a href="http://www.detritus.qc.ca/">RealAnime</a></li>
        <li><a href="http://www.planetdvb.net/staxrip/">StaxRip</a></li>
        <li><a href="http://tcvp.sourceforge.net/">TCVP</a></li>
        <li><a href="/vlc/">VLC media player</a></li>
        <li>... and many more</li>
        </ul>
        <p>If you use <b>x264</b> in another project, let <em>us know</em>!</p>
    </div>

<!--    <div class="onecolumn">
        <h2>People using x264</h2>
        <ul class="bullets">
        <li><a href="http://www.youtube.com/">Youtube</a></li>
        <li><a href="http://www.facebook.com/">Facebook</a></li>
        <li><a href="http://www.hulu.com/">Hulu</a></li>
        <li><a href="http://www.bitsontherun.com/">Bits on the Run</a></li>
        <li><a href="http://video.google.com/">Google Video</a></li>
        <li><a href="http://www.cs.washington.edu/research/MobileASL/">MobileASL</a></li>
        <li><a href="http://speeddemosarchive.com">Speed Demos Archive</a></li>
        <li><a href="http://TASvideos.org/">TASvideos</a></li>
        </ul>

    </div>!-->

    <div class="lastcolumn">
        <h2>Awards</h2>
        <p><b>2010 May 25</b> -- x264 won <a href="http://www.compression.ru/video/codec_comparison/h264_2010/">MSU Sixth MPEG-4 AVC/H.264 Video Codecs Comparison</a>, ~24% better than second place.</p>
        <p><b>2005 December 26</b> -- x264 won <a href="http://www.doom9.org/index.html?/codecs-final-105-1.htm">Doom9's 2005 codec shoot-out</a>, passing Ateme by a hair.</p>
        <p><b>2005 December 12</b> -- x264 tied for 1st place (with Ateme) in the <a href="http://www.compression.ru/video/codec_comparison/mpeg-4_avc_h264_2005_en.html">second annual MSU MPEG-4 AVC/ H.264 codecs comparison</a>.</p>
    </div>
</div>

<?php footer('$Id$'); ?>
