<?php
   $title = "DVBlast - Open Source fast DVB/ASI network streamer!";
   $lang = "en";
   $menu = array( "projects", "projects" );
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

        <div>
            <?php image( 'DVBlast-Icon.png', 'Large DVBlast Logo with headphones on a folder', 'projectImg' ); ?>
            <div style='float: left; width: 500px;'>
                <h1 class='bigtitle'>DVBlast</h1>
                <div class='projectDescription'>
                     Are you looking for live streaming? Don't look any further!
                     DVBlast is a simple and powerful MPEG-2/TS demux and streaming
                     application.
                </div>
                <a id='downloadButton' href='https://get.videolan.org/dvblast/3.0/dvblast-3.0.tar.bz2'>
                    <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadDVBlast.png' alt='Download DVBlast icon' />
                    <div class='downloadText'>Download DVBlast</div>
                    <span id='downloadDetails' style='font-size: 12px;'>
                        Version 3.0 &nbsp;&#8226;&nbsp; Linux &nbsp;&#8226;&nbsp; 80 KiB
                    </span>
                </a>
            </div>
        </div>
        <div style='clear: both; padding-top: 90px;'>
            <div style='float: left; width: 800px; color: #333333;'>
                <a name="features"></a>
                <h1 style='margin-bottom: 25px;' class='red'>Features</h1>
                Lightweight program designed for extreme memory and CPU conditions<br />
                <br />
                One runtime dependancy (<a href="http://libev.schmorp.de/">libev</a>), one build dependancy (<a href="/developers/bitstream.html">biTStream</a>)<br />
                <br />
                CAM menus (MMI) support via an external application<br />
                <br />
                The configuration file describing outputs can be reloaded without
                losing a single packet<br />
                <br />
                Support for the new S2API of linux-dvb<br />
                <br />
                IPv6 network support<br />
                <br />
                UDP rather than RTP output for IPTV STBs which don't support RTP <br />
                <br />
                Open Source: <strong>GPLv2</strong>
            </div>
            <div style='float: right; width: 450px; padding-left: 70px;'>

            </div>
        </div>
        <div class='tricolumn'>
            <div class="onecolumn">
                <h1>High-Performance Streaming</h1>
                <code>DVBlast</code> is written to be the core of a custom IRD, CID,
                or ASI gateway, based on a PC with a Linux-supported card. It is very
                lightweight and stable, designed for 24/7 operation.
                <br />
                <br />

                <code>DVBlast</code> does <strong>not</strong> do any kind of
                processing on the elementary streams, such as transcoding,
                or remultiplexing. If you were looking for these features, switch to
                <a href="/vlc/">VLC</a>. It does <strong>not</strong> stream from plain files (have a look
                at <a href="/projects/multicat.html">multicat</a> instead).
                <br />
                <br />

                <code>DVBlast</code> compiles and run on Linux and Mac OS X (with limited feature set).
            </div>
            <div class="onecolumn">
                <h1>Inputs - Outputs</h1>
                <code>DVBlast</code> supports several input methods:<br />
                <ul class="panel-blue-bullet">
                     <li> linux-dvb-supported cards (DVB-S, DVB-S2, DVB-C, DVB-T...) with or without CI interface</li>
                     <li> DVB-ASI cards (from <a href="http://www.computermodules.com/"> Computer Modules</a> or <a href="http://www.deltacast.tv/">Deltacast</a>)</li>
                     <li> UDP or RTP, unicast or multicast, streams carrying a transport stream</li>
                </ul>

                <br />
               It outputs one or several RTP streams carrying transport streams with:<br />
               <ul class="panel-blue-bullet">
                   <li> hardware or software PID filtering</li>
                   <li> PID-based or service-based demultiplexing</li>
                   <li> optional descrambling via CAM device</li>
                   <li> optional DVB tables </li>
                   <li> optional PID and SID remapping </li>
               </ul>
            </div>
            <div class='lastcolumn'>
                <h1>Support</h1>
                    User support and development is handled in the <a href="/developers/lists.html">dvblast-devel</a>
                    mailing-list.
                <br />
                <br />

                <h1>Development</h1>
                    Hackers can participate to the development using <a href="http://wiki.videolan.org/Git">git</a>.
                    The code is accessible from <code>git://git.videolan.org/dvblast.git</code> and
                    you can <a href="http://git.videolan.org/?p=dvblast.git">browse the source online</a>.
                    <br />

            </div>
        </div>
        <div style='clear: both;'></div>

<?php footer(); ?>
