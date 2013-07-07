<?php
   $title = "Open Source projects for every OS!";
   $body_color = "blue";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

?>

<h1 class="bigtitle">VideoLAN Projects</h1>

    <div style='clear: both; padding-top: 40px;'>
    <div style='float: left; width: 350px;'>
        <div class='audienceCallout'>For Everyone</div>
        <div class="clearme">
            <a href='/vlc/' class='noUnderline'>
                <?php image( 'VLC-IconSmall.png', "VLC icon", "smallProjectImg" ); ?>
                <span class='productName'>VLC media player</span>
                <span class='productDescription'>
                    VLC is a powerful media player<br />
                    playing most of the media codecs<br />
                    and video formats out there.
                </span>
            </a>
        </div>
        <div class="clearme" style='padding-top: 40px;'>
            <a href='/vlmc/' class='noUnderline'>
                <?php image( 'VLMC-IconSmall.png', "VLMC icon", "smallProjectImg" ); ?>
                <span class='productName'>VLMC</span>
                <span class='productDescription'>
                    VideoLAN Movie Creator is a<br />
                    non-linear editing software for video<br />
                    creation.
                </span>
            </a>
        </div>
    </div>
    <div style='float: left; padding-left: 30px; width: 350px;'>
        <div class='audienceCallout'>For Professionals</div>
        <div class="clearme">
            <a href='/projects/dvblast.html' class='noUnderline'>
                <?php image( 'DVBlast-IconSmall.png', "DVBlast Icon", "smallProjectImg" ); ?>
                <span class='productName'>DVBlast</span>
                <span class='productDescription'>
                    DVBlast is a simple and powerful<br />
                    MPEG-2/TS demux and streaming<br />
                    application.
                </span>
            </a>
        </div>
        <div class="clearme" style='padding-top: 40px;'>
            <a href='/developers/x264.html' class='noUnderline'>
                <?php image( 'x264-IconSmall.png', "x264 Icon", "smallProjectImg" ); ?>
                <span class='productName'>x264</span>
                <span class='productDescription'>
                    x264 is a free application for encoding<br />
                    video streams into the  H.264/MPEG-4<br />
                    AVC format.
                </span>
            </a>
        </div>
    </div>
    <div style='float: left; width: 200px;'>
        <div class='audienceCallout'>&nbsp;</div>
        <div class="clearme">
            <a href='/projects/multicat.html' class='noUnderline'>
                <span class='productName'>multicat</span>
                <span class='productDescription'>
                    multicat is a set of tools designed to<br />
                    easily and efficiently manipulate<br />
                    multicast streams and TS.
                </span>
            </a>
        </div>
    </div>

    <div style='clear: both; padding-top: 40px;'></div>
    <div class='audienceCallout'>For Developers</div>
    <div style='float: left; width: 180px; padding-right: 70px; color: #666; font-size: 14px; line-height: 20px;'>
        <div class='productName'><a href="/developers/libdvdcss.html">libdvdcss</a></div>
        <div class='productDescription'>
            The reference open-source cross-platform library for DVD CSS decryption.
        </div>
    </div>
    <div style='float: left; width: 180px; padding-right: 70px;'>
        <div class='productName'><a href="/developers/libbluray.html">libbluray</a></div>
        <div class='productDescription'>
            The reference open-source cross-platform library for Blu-Ray Discs access.
        </div>
    </div>
    <div style='float: left; width: 180px; padding-right: 70px;'>
        <div class='productName'><a href="/developers/libdvbpsi.html">libdvbpsi</a></div>
        <div class='productDescription'>
            Parse TS and DVB tables without headaches.
        </div>
    </div>
    <div style='float: left; width: 180px;'>
        <div class='productName'><a href="/vlc/libvlc.html">libVLC</a></div>
        <div class='productDescription'>
            The <b>Cross-Platform</b> multimedia framework. Bring VLC power into your app.
        </div>
    </div>

    <div class='clearme' style="padding-top: 30px;" ></div>
    <div style='float: left; width: 180px; padding-right: 70px;'>
        <div class='productName'><a href="/developers/libaacs.html">libaacs</a></div>
        <div class='productDescription'>
            A research project for implementing the AACS standard.
        </div>
    </div>
    <div style='float: left; width: 180px; padding-right: 70px;'>
        <div class='productName'><a href="/developers/libdvbcsa.html">libdvbcsa</a></div>
        <div class='productDescription'>
            A cross-platform library to decrypt and encrypt using the DVB-CSA algorithm.
        </div>
    </div>
    <div style='float: left; width: 180px; padding-right: 70px;'>
        <div class='productName'><a href="/developers/libdca.html">libdca</a></div>
        <div class='productDescription'>
            A cross-platform library to decode Dts Coherent Audio codec.
        </div>
    </div>
    <div style='float: left; width: 180px;'>
        <div class='productName'><a href="/developers/bitstream.html">biTStream</a></div>
        <div class='productDescription'>
            A cross-platform development library to abstract access to binary structures such as found in MPEG or DVB.
        </div>
    </div>

</div>

<?php footer('$Id: index.php 3765 2006-08-16 16:19:00Z dionoea $'); ?>
