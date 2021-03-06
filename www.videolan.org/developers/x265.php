<?php
   $title = "x265, the free H.265/HEVC encoder";
   $body_color = "green";
   $nobanner = true;
   $new_design = true;
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div class="container">
    <h1 class="bigtitle">x265</h1>
    <div class="row">
        <div class="column col-xs-12 col-md-6">
            <div class="projectDescription">
                <p>x265 is a <b>free software</b> <b>library</b> and <b>application</b> for encoding video streams into the
                <b><a href="http://en.wikipedia.org/wiki/H.265">H.265/MPEG-H HEVC</a></b> compression format,
                and is released under the terms of the <a href="http://www.gnu.org/licenses/old-licenses/gpl-2.0.html">GNU GPL</a>.</p>
            </div>
        </div>
        <div class="column col-xs-12 col-md-6">
            <h2>Features Overview</h2>
            <ul class="bullets">
                <li>Provides next-generation compression and codec.</li>
                <li>Fast and excellent quality.</li>
                <li>Completly free and libre software, ensuring freedom for everyone.</li>
                <li>The APIs are similar to <a href="/developers/x264.html">x264 APIs</a></li>
        </div>
    </div>

    <hr />

        <?php
        /*
            <div style="float: right; width: 350px; padding-top: 20px;">
                <h2>News</h2>
                <p><b>2013 August 23</b> -- The <a href="https://mailman.videolan.org/pipermail/x265-devel/2013-August/010211.html">x265 Development Newsletter: Volume 39</a> is out.</p>
                <p><b>2013 July 4</b> -- The <a href="https://mailman.videolan.org/pipermail/x265-devel/2013-July/010170.html">x265 Development Newsletter: Volume 38</a> is out.</p>
                <p><b>2013 May 20</b> -- The <a href="https://mailman.videolan.org/pipermail/x265-devel/2013-May/010083.html">x265 Development Newsletter: Volume 37</a> is out.</p>
                <p><b>2013 May 4</b> -- The <a href="https://mailman.videolan.org/pipermail/x265-devel/2013-May/010049.html">x265 Development Newsletter: Volume 36</a> is out.</p>
             /* <p><b>2011 May 12</b> -- The <a href="https://mailman.videolan.org/pipermail/x265-devel/2011-May/008508.html">x265 Development Newsletter: Volume 16</a> is out.</p>
                <p><b>2011 May 12</b> -- The <a href="https://mailman.videolan.org/pipermail/x265-devel/2011-May/008508.html">x265 Development Newsletter: Volume 16</a> is out.</p>
                <p><b>2011 April 26</b> -- The <a href="https://mailman.videolan.org/pipermail/x265-devel/2011-April/008442.html">x265 Development Newsletter: Volume 15</a> is out.</p>
                <p><b>2011 April 13</b> -- The <a href="https://mailman.videolan.org/pipermail/x265-devel/2011-April/008388.html">x265 Development Newsletter: Volume 14</a> is out.</p>
                <p><b>2011 March 24</b> -- The <a href="https://mailman.videolan.org/pipermail/x265-devel/2011-March/008353.html">x265 Development Newsletter: Volume 13</a> is out.</p>
            </div>

        */
        ?>

    <div class="row">
        <div class="column col-xs-12 col-md-6">
            <h2>Getting x265</h2>
            <h3>Source</h3>
            <p>The latest x265 source code can always be found by anonymous <b>hg</b> repository:</p>
            <pre><code># hg clone http://hg.videolan.org/x265</code></pre>
            <p>You can <a href="http://hg.videolan.org/x265/">browse the source</a> on-line.</p>
        </div>
        <?php /*
        <div style="clear: right; float: right; width: 350px;">
        <h2>Awards</h2>
        <p><b>2010 May 25</b> -- x265 won <a href="http://www.compression.ru/video/codec_comparison/h264_2010/">MSU Sixth MPEG-4 AVC/H.264 Video Codecs Comparison</a>, with ~24% better encoding than second place.</p>
        <p><b>2005 December 26</b> -- x265 won <a href="http://www.doom9.org/index.html?/codecs-final-105-1.htm">Doom9's 2005 codec shoot-out</a>, passing Ateme by a hair.</p>
        <p><b>2005 December 12</b> -- x265 tied for 1st place (with Ateme) in the <a href="http://www.compression.ru/video/codec_comparison/mpeg-4_avc_h264_2005_en.html">second annual MSU MPEG-4 AVC/ H.264 codecs comparison</a>.</p>
        </div> */
        ?>
        <div class="column col-xs-12 col-md-6">
            <h2 id="features">Encoder features</h2>
            <ul class="bullets">
                <li> Full prediction and transform quad-tree recursion supported</li>
                <li> Adaptive B-frame placement</li>
                <li> B-frames as references / arbitrary frame order</li>
                <li> CABAC entropy coding</li>
                <li> Intra: all block types (32x32, 16x16, 8x8, 4x4, and PCM with all predictions)</li>
                <li> Inter P: all partitions (from 64x64 down to 8x4)</li>
                <li> Inter B: partitions from 64x64 down to 8x4 (including all merge modes</li>
                <li> and biprediction)</li>
                <li> Weighted prediction for P slices</li>
                <li> Multiple reference frames</li>
                <li> Ratecontrol: constant quantizer, constant quality, single pass ABR, optional VBV</li>
                <li> Scenecut detection</li>
                <li> Parallel encoding on multiple CPUs, both frame-level and wavefront parallelism</li>
            </ul>
        </div>
    </div>

    <hr />

    <div class="row">
        <div class="column col-xs-12 col-md-4">
            <h2>Support</h2>
            <p>For support information and to ask questions, you have the following possibilities:</p>
            <p>A mailing list (<a href="https://mailman.videolan.org/listinfo/x265-devel">x265-devel</a>), and IRC (<a href="irc://irc.freenode.net/x265">#x265@freenode</a> and <a href="irc://irc.freenode.net/x265dev">#x265dev@freenode</a>).</p>
        </div>
        <div class="column col-xs-12 col-md-4">
            <h2>Bugs</h2>
            <p>Please report any bugs to the <a href="/developers/lists.html">mailing list</a>. If it is a crash, then compile x265 with <code>`./configure --enable-debug`</code> and follow the <a href="http://ffmpeg.org/bugreports.html">ffmpeg bugreporting guidelines</a>.</p>
        </div>
        <div class="column col-xs-12 col-md-4">
            <h2>Licensing</h2>
            <p>In addition to being free to use under the <a href="http://www.gnu.org/licenses/gpl-2.0.html">GNU GPL</a>, x265 is also available under a commercial license from <a href="http://x265.com">MulticoreWare Inc</a>.
        </div>
    </div>

    <hr />

    <h2>Software using x265</h2>
    <ul class="bullets">
        <li><a href="/vlc/">VLC media player</a></li>
        <li><a href="https://handbrake.fr">HandBrake</a></li>
    </ul>
    <p>If you use <b>x265</b> in another project, let <em>us know</em>!</p>

</div>

<?php /*!-- <h2>Authors</h2>
    <p>The code is written from scratch by <a href="mailto:fenrir@videolan.org">Laurent Aimar</a>,
    <a href="mailto:pengvado@users.sourceforge.net">Loren Merritt</a>, <a href="mailto:titer@videolan.org">Eric Petit</a> (OS X),
    <a href="mailto:chenm001@163.com">Min Chen</a> (vfw/asm), Justin Clay (vfw), <a href="mailto:mru@mru.ath.cx">M&aring;ns Rullg&aring;rd</a>,
    Radek Czyz, Christian Heine (asm), Alex Izvorski, Alex Wright and <a href="mailto:darkshikari@gmail.com">Jason Garrett-Glaser</a>.</p>--> */ ?>

<?php footer('$Id: x265.php 8049 2013-10-22 15:42:05Z jb $'); ?>
