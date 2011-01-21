<?php
   $title = "Free Software and Open Source video streaming solution for every OS!";
   $lang = "en";
   $menu = array( "projects", "projects" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
?>

        <div class="clearme" style='padding-top: 35px;'>
            <?php image( 'largeVLC.png', 'Large Orange VLC media player Traffic Cone Logo', 'projectImg' ); ?>
            <div style='float: left; width: 500px;'>
                <h1 class='bigtitle'>VLC media player</h1>
                <div class='projectDescription'>
                    VLC is a free and open source cross-platform multimedia player and<br />
                    framework that plays most multimedia files as well as DVD, Audio CD,<br />
                    VCD, and various streaming protocols.
                </div>
                <a class='extraInfoLink' href='/vlc/features.html'>Features</a>
                <a class='extraInfoLink' href='/vlc/screenshots.html'>Screenshots</a>
                <a id='downloadButton' href='<?php echo $dlUrl; ?>'>
                    <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />
                    <span class='downloadText'>Download VLC</span>
                    <span id='downloadDetails' style='font-size: 12px; color: white;'>
                    Version <span id='downloadVersion'><?php echo $version ?>
                    </span>&nbsp;&#8226;&nbsp;<span id='downloadOS'>Windows</span>&nbsp;&#8226;&nbsp;<span id='downloadSize'>20MB</span>
                    </span>
                </a>
                <?php replaceDLinfos(); ?>
                <a class='extraInfoLink' href='#' style="padding-left: 100px;">Other Systems and Versions</a>
            </div>
        </div>
        <div class="clearme" style='padding-top: 60px;'>
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
                <h1 style='padding-left: 5px; margin-bottom: 25px;' class='red'>Screenshots</h1>
                <div style='cursor: pointer; border: 1px solid #F48B00; width: 90px; height: 90px; margin: 5px; float: left;'></div>
                <div style='cursor: pointer; border: 1px solid #F48B00; width: 90px; height: 90px; margin: 5px; float: left;'></div>
                <div style='cursor: pointer; border: 1px solid #F48B00; width: 90px; height: 90px; margin: 5px; float: left;'></div>
                <div style='cursor: pointer; border: 1px solid #F48B00; width: 90px; height: 90px; margin: 5px; float: left;'></div>
                <div style='clear: left;'></div>
                <div style='cursor: pointer; border: 1px solid #F48B00; width: 90px; height: 90px; margin: 5px; float: left;'></div>
                <div style='cursor: pointer; border: 1px solid #F48B00; width: 90px; height: 90px; margin: 5px; float: left;'></div>
                <div style='cursor: pointer; border: 1px solid #F48B00; width: 90px; height: 90px; margin: 5px; float: left;'></div>
                <div style='cursor: pointer; border: 1px solid #F48B00; width: 90px; height: 90px; margin: 5px; float: left;'></div>
                <div style='clear: left;'></div>
                <div style='cursor: pointer; border: 1px solid #F48B00; width: 90px; height: 90px; margin: 5px; float: left;'></div>
                <div style='cursor: pointer; border: 1px solid #F48B00; width: 90px; height: 90px; margin: 5px; float: left;'></div>
                <div style='cursor: pointer; border: 1px solid #F48B00; width: 90px; height: 90px; margin: 5px; float: left;'></div>
                <div style='cursor: pointer; border: 1px solid #F48B00; width: 90px; height: 90px; margin: 5px; float: left;'></div>
                <div style='clear: both;'></div>
                <a class='red' style='display: block; padding-top: 10px; padding-left: 5px; font-size: 12px;' href='/vlc/screenshots.html'>view all screenshots</a>
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
