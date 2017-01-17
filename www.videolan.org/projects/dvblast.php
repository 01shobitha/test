<?php
   $title = "DVBlast - Open Source fast DVB/ASI network streamer!";
   $lang = "en";
   $new_design = true;
   $menu = array( "projects", "projects" );
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div class="container">
    <div class="row" style="padding-bottom: 1em">
        <div class="column col-md-4 col-sm-4 hidden-xs">
            <img style="width: 100%" src="//images.videolan.org/images/DVBlast-Icon.png" alt="Large DVBlast Logo with headphones on a folder" />
        </div>
        <div class="column col-md-8 col-sm-8 col-xs-12">
            <h1 class="bigtitle">DVBlast</h1>
            <div class="projectDescription">
                 Are you looking for live streaming? Don't look any further!<br />
                 DVBlast is a simple and powerful MPEG-2/TS demux and streaming
                 application.
            </div>
            <a id="downloadButton" href="https://get.videolan.org/dvblast/3.0/dvblast-3.0.tar.bz2">
                <img style="position: absolute; top: -10px; left: -10px;" src="/images/downloadDVBlast.png" alt="Download DVBlast icon" />
                <div class="downloadText">Download DVBlast</div>
                <span id="downloadDetails" style="font-size: 12px;">
                    Version 3.0 &nbsp;&#8226;&nbsp; Linux &nbsp;&#8226;&nbsp; 80 KiB
                </span>
            </a>
        </div>
    </div>
    <h2 id="features">Features</h2>
    <ul class="bullets">
        <li>Lightweight program designed for extreme memory and CPU conditions</li>
        <li>One runtime dependancy (<a href="http://libev.schmorp.de/">libev</a>), one build dependancy (<a href="/developers/bitstream.html">biTStream</a>)</li>
        <li>CAM menus (MMI) support via an external application</li>
        <li>The configuration file describing outputs can be reloaded without losing a single packet</li>
        <li>Support for the new S2API of linux-dvb</li>
        <li>IPv6 network support</li>
        <li>UDP rather than RTP output for IPTV STBs which don't support RTP</li>
        <li>Open Source: <strong>GPLv2</strong></li>
    </ul>
    <div class="row">
        <div class="column col-xs-12 col-md-4">
            <h2>High-Performance Streaming</h2>

            <p>
                <code>DVBlast</code> is written to be the core of a custom IRD, CID, or ASI gateway, based on a PC with a Linux-supported card. It is very lightweight and stable, designed for 24/7 operation.
            </p>
            <p>
                <code>DVBlast</code> does <strong>not</strong> do any kind of processing on the elementary streams, such as transcoding, or remultiplexing. If you were looking for these features, switch to <a href="/vlc/">VLC</a>. It does <strong>not</strong> stream from plain files (have a look at <a href="/projects/multicat.html">multicat</a> instead).
            </p>
            <p>
                <code>DVBlast</code> compiles and run on Linux and macOS (with limited feature set).
            </p>
        </div>
        <div class="column col-xs-12 col-md-4">
            <h2>Inputs - Outputs</h2>

            <p><code>DVBlast</code> supports several input methods:</p>
            <ul class="bullets">
                <li>linux-dvb-supported cards (DVB-S, DVB-S2, DVB-C, DVB-T…) with or without CI interface</li>
                <li>DVB-ASI cards (from <a href="http://www.computermodules.com/">Computer Modules</a> or <a href="http://www.deltacast.tv/">Deltacast</a>)</li>
                <li>UDP or RTP, unicast or multicast, streams carrying a transport stream</li>
            </ul>

            <p>It outputs one or several RTP streams carrying transport streams with:</p>
            <ul class="bullets">
                <li>hardware or software PID filtering</li>
                <li>PID-based or service-based demultiplexing</li>
                <li>optional descrambling via CAM device</li>
                <li>optional DVB tables </li>
                <li>optional PID and SID remapping </li>
            </ul>
        </div>
        <div class="column col-xs-12 col-md-4">
            <h2>Support</h2>
            <p>User support and development is handled in the <a href="/developers/lists.html">dvblast-devel</a> mailing-list.</p>
            <h2>Development</h2>
            <p>Hackers can participate to the development using <a href="https://wiki.videolan.org/Git">git</a>.</p>
            <p>The code is accessible from <code>https://code.videolan.org/videolan/dvblast.git</code> and
            you can <a href="https://code.videolan.org/videolan/dvblast.git">browse the source online</a></p>
        </div>
    </div>
</div>

<?php footer(); ?>
