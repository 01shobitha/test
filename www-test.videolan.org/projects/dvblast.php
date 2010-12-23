<?php
   $title = "Free Software and Open Source video streaming solution for every OS!";
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
						Are you looking for live streaming? Don't look any further!<br />
						DVBlast is a simple and powerful MPEG-2/TS demux and streaming<br />
						application with several input methods.
                </div>
                <a class='extraInfoLink' href='/vlc/features.html'>Features</a>
                <a class='extraInfoLink' href='/vlc/screenshots.html'>Screenshots</a>
                <a class='extraInfoLink' href='#'>Other Systems and Versions</a>
                <a id='downloadButton' href='http://downloads.videolan.org/pub/videolan/dvblast/1.2/dvblast-1.2.tar.bz2'>
					<img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadDVBlast.png' alt='Download DVBlast icon' />
					<div class='downloadText'>Download DVBlast</div>
					<span id='downloadDetails' style='font-size: 12px;'>
						Version 1.2 &nbsp;&#8226;&nbsp; Linux &nbsp;&#8226;&nbsp; 2 MB
					</span>
				</a>
            </div>
        </div>
        <div style='clear: both; padding-top: 90px;'>
            <div style='float: left; width: 400px; color: #333333;'>
                <h1 style='margin-bottom: 25px;' class='red'>Features</h1>
                Lightweight program designed for extreme memory and CPU conditions<br />
                <br />
                Only one dependancy: libdvbpsi<br />
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
                UDP rather than RTP output for IPTBV STBs which don't support RTP
            </div>
            <div style='float: right; width: 450px; padding-left: 70px;'>
                <h1 style='padding-left: 5px; margin-bottom: 25px;'>Screenshots</h1>
                <div style='screenshot'></div>
                <div class='screenshot'></div>
                <div class='screenshot'></div>
                <div class='screenshot'></div>
                <div style='clear: left;'></div>
                <div class='screenshot'></div>
                <div class='screenshot'></div>
                <div class='screenshot'></div>
                <div class='screenshot'></div>
                <div style='clear: left;'></div>
                <div class='screenshot'></div>
                <div class='screenshot'></div>
                <div class='screenshot'></div>
                <div class='screenshot'></div>
                <div style='clear: both;'></div>
            </div>
        </div>
        <div class='tricolumn'>
            <div class="onecolumn">
                <h1>Heading One</h1>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse euismod commodo suscipit.<br />
                <br />
                Donec tempor accumsan massa in iaculis. Donec volutpat rutrum ipsum nec volutpat. Nullam egestas dignissim lorem, eu euismod ante gravida vitae. Sed feugiat porta libero, nec sagittis felis pulvinar ut. Integer ut tristique ante. In hendrerit, risus quis iaculis posuere, ipsum sapien congue nulla, in tristique neque urna sed nibh.<br />
                <br />
                Nulla ultrices nisl id turpis egestas fermentum. Nunc egestas lacus sit amet metus tincidunt imperdiet. Donec euismod scelerisque diam, a egestas quam pretium non. Phasellus auctor elit non diam facilisis luctus. Sed id justo quis felis aliquam ullamcorper.<br />

            </div>
            <div class="onecolumn">
                <h1>Heading Two</h1>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse euismod commodo suscipit.<br />
                <br />
                Nulla ultrices nisl id turpis egestas fermentum. Nunc egestas lacus sit amet metus tincidunt imperdiet. Donec euismod scelerisque diam, a egestas quam pretium non. Phasellus auctor elit non diam facilisis luctus. Sed id justo quis felis aliquam ullamcorper.<br />
                <br />Donec tempor accumsan massa in iaculis. Donec volutpat rutrum ipsum nec volutpat. Nunc ac urna a risus scelerisque commodo non in neque. Donec blandit eleifend placerat. Proin viverra semper nisi sit amet cursus. Suspendisse potenti. Nullam egestas dignissim lorem, eu euismod ante gravida vitae. Sed feugiat porta libero, nec sagittis felis pulvinar ut. Integer ut tristique ante. In hendrerit, risus quis iaculis posuere, ipsum sapien congue nulla, in tristique neque urna sed nibh.
            </div>
            <div class='lastcolumn'>
                <h1>Heading Three</h1>
                Nulla ultrices nisl id turpis egestas fermentum. Nunc egestas lacus sit amet metus tincidunt imperdiet. Donec euismod scelerisque diam, a egestas quam pretium non. Phasellus auctor elit non diam facilisis luctus. Sed id justo quis felis aliquam ullamcorper.<br />
                <br />Donec blandit eleifend placerat. Proin viverra semper nisi sit amet cursus. Suspendisse potenti. Nullam egestas dignissim lorem, eu euismod ante gravida vitae. Sed feugiat porta libero, nec sagittis felis pulvinar ut. Integer ut tristique ante. In hendrerit, risus quis iaculis posuere, ipsum sapien congue nulla, in tristique neque urna sed nibh.
            </div>
        </div>
        <div style='clear: both;'></div>

<?php footer(); ?>
