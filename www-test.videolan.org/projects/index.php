<?php
   $title = "VideoLAN - Free Software and Open Source video streaming solution for every OS!";
   $lang = "en";
   $menu = array( "projects", "projects" );
   $body_color = "blue";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

?>

<h1>VideoLAN Projects</h1>

    <div style='clear: both; padding-top: 40px;'>
        <div class='audienceCallout'>For Everyone</div>
        <div style='float: left; width: 450px;'>
            <div style='clear: both;'>
                <a href='/vlc/' class='noUnderline'>
                    <?php image( 'VLC.png', 'VLC Icon', "floatImg" ); ?>
                    <div class='productName'>VLC media player</div>
                    <div class='productDescription'>
                    <p>VLC media player is the most well-known VideoLAN project: a complete and powerfull media player.</p>
                    </div>
                </a>
            </div>
            <div style='clear: both; padding-top: 40px; width: 400px;'>
                <a href='/vlmc/' class='noUnderline'>
                    <?php image( 'VLMC-IconSmall.png', 'VLMC Icon', "floatImg" ); ?>
                    <div class='productName'>VLMC</div>
                    <div class='productDescription'>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse euismod commodo suscipit. Nulla ultrices nisl id turpis egestas fermentum. Nunc egestas lacus sit amet metus tincidunt imperdiet.
                    </div>
                </a>
            </div>
        </div>
        <div style='float: left; padding-left: 30px; width: 450px;'>
            <div style='clear: both;'>
                <a href='/projects/dvblast.html' class='noUnderline'>
                    <?php image( 'DVBlast-IconSmall.png', 'DVBlast Icon', "floatImg" ); ?>
                    <div class='productName'>DVBlast</div>
                    <div class='productDescription'>
                    DVBlast is a simple, fast, reliable and powerful streaming application for linux-dvb devices.
                    </div>
                </a>
            </div>
            <div style='clear: both; padding-top: 40px;'>
                <a href='/developers/x264.html' class='noUnderline'>
                    <?php image( 'x264-IconSmall.png', 'x264 Icon', "floatImg" ); ?>
                    <div class='productName'>x264</div>
                    <div class='productDescription'>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse euismod commodo suscipit. Nulla ultrices nisl id turpis egestas fermentum. Nunc egestas lacus sit amet metus tincidunt imperdiet.
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div style='clear: both; padding-top: 40px;'></div>
    <div class='audienceCallout'>For Developers</div>
    <div style='float: left; width: 180px; padding-right: 70px; color: #666; font-size: 14px; line-height: 20px;'>
        <div class='productName' style='padding-bottom: 5px;'>libdvdcss</div>
        <div class='productDescription'>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse euismod commodo suscipit. Nulla ultrices nisl id turpis egestas fermentum.
        </div>
    </div>
    <div style='float: left; width: 180px; padding-right: 70px;'>
        <div class='productName' style='padding-bottom: 5px;'>libbluray</div>
        <div class='productDescription'>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse euismod commodo suscipit. Nulla ultrices nisl id turpis egestas fermentum.
        </div>
    </div>
    <div style='float: left; width: 180px; padding-right: 70px;'>
        <div class='productName' style='padding-bottom: 5px;'>libdvdpsi</div>
        <div class='productDescription'>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse euismod commodo suscipit. Nulla ultrices nisl id turpis egestas fermentum.
        </div>
    </div>
    <div style='float: left; width: 180px;'>
        <div class='productName' style='padding-bottom: 5px;'>libdca</div>
        <div class='productDescription'>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse euismod commodo suscipit. Nulla ultrices nisl id turpis egestas fermentum.
        </div>
    </div>
</div>

<?php footer('$Id: index.php 3765 2006-08-16 16:19:00Z dionoea $'); ?>
