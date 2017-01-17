<?php
   $title = "x262, the free MPEG-2 encoder";
   $body_color = "green";
   $nobanner = true;
   $new_design = true;
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div class="container">
    <h1 class="bigtitle">x262</h1>
    <div class="row">
        <div class="column col-xs-12 col-md-6">
            <div class='projectDescription'>
                <p>x262 is a <b>free software</b> <b>library</b> and <b>application</b> for encoding video streams into the
                <b><a href="https://en.wikipedia.org/wiki/H.262/MPEG-2_Part_2">MPEG-2</a></b> compression format,
                and is released under the terms of the <a href="http://www.gnu.org/licenses/old-licenses/gpl-2.0.html">GNU GPL</a>.</p>
            </div>
        </div>
        <div class="column col-xs-12 col-md-6">
            <h2>Features Overview</h1>
            <p>x262 is an MPEG-2 encoder based on the best-in-class features of x264.<br />
               It also has the big advantage that the codec is simple enough for people new to video-compression to get involved.<br />
               The TODO list can be found <a href="https://github.com/kierank/x262/wiki/TODO">here</a>.</p>
        </div>
    </div>

    <hr />

    <div class="row">
        <div class="column col-xs-12 col-md-6">
            <h2>Getting x262</h2>
            <h3>Source</h3>
            <p>The latest x264 source code can always be found by anonymous <a href="https://wiki.videolan.org/Git">git</a> repository:</p>
            <pre><code># git clone http://git.videolan.org/git/x262.git</code></pre>
            <p>You can <a href="http://git.videolan.org/?p=x262.git;a=summary">browse the source</a> on-line.</p>
        </div>
        <div class="column col-xs-12 col-md-6">
            <h2 id="features">Encoder features</h2>
            <ul class="bullets">
                <li> Adaptive B-frame placement</li>
                <li> Custom quantization matrices</li>
                <li> Interlacing (frame/field adaptation per macrolock)</li>
                <li> Ratecontrol: constant quantizer, constant quality, single or multipass ABR, optional VBV</li>
                <li> Scenecut detection</li>
                <li> Parallel encoding on multiple CPUs</li>
                <li> Psy optimizations for detail retention (adaptive quantization, psy-RD, psy-trellis)</li>
                <li> Zones for arbitrarily adjusting bitrate distribution</li>
            </ul>
        </div>
    </div>

    <hr />

    <div class="row">
        <div class="column col-xs-12 col-md-4">
            <h2>Support</h2>
            <p>For support information and to ask questions, you have the following possibilities:</p>
            <p>A mailing list (<a href="https://mailman.videolan.org/listinfo/x264-devel">x264-devel</a>), and IRC (<a href="irc://irc.freenode.net/x264">#x264@freenode</a> and <a href="irc://irc.freenode.net/x264dev">#x264dev@freenode</a>). These are shared with the x264 project so remember to mention x262.</p>
        </div>
        <div class="column col-xs-12 col-md-4">
            <h2>Bugs</h2>
            <p>Please report any bugs to the <a href="/developers/lists.html">mailing list</a>. If it is a crash, then compile x264 with <code>./configure --enable-debug</code> and follow the <a href="http://ffmpeg.org/bugreports.html">ffmpeg bugreporting guidelines</a>.</p>
        </div>
        <div class="column col-xs-12 col-md-4">
            <h2>Licensing</h2>
            <p>x262 is licensed under the <a href="http://www.gnu.org/licenses/gpl-2.0.html">GNU GPL</a>.</p>
        </div>
    </div>
</div>

<?php footer('$Id$'); ?>
