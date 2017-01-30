<?php
   $title = "Open Source projects for every OS!";
   $body_color = "blue";
   $new_design = true;
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

?>
<div class="container">
    <h1 class="bigtitle"><?php echo _("VideoLAN Projects"); ?></h1>
    <div class="row">
        <div class="col-md-4 padding-bottom-24">
            <div class='audienceCallout'><?php echo _("For Everyone"); ?></div>
            <ul class="media-list">
                <li class="media">
                    <a href='/vlc/'>
                        <div class="media-left media-middle">
                            <?php image('VLC-IconSmall.png', "VLC icon", "media-object"); ?>
                        </div>
                        <div class="media-body">
                            <span class='productName'>VLC media player</span>
                            <span class='productDescription'><?php echo
                            _("VLC is a powerful media player playing most of the media codecs and video formats out there."); ?>
                            </span>
                        </div>
                    </a>
                </li>
                <li class="media">
                    <a href='/vlmc/'>
                        <div class="media-left media-middle">
                            <?php image('VLMC-IconSmall.png', "VLMC icon", "media-object"); ?>
                        </div>
                        <div class="media-body">
                            <span class='productName'>VLMC</span>
                            <span class='productDescription'>
                                <?php echo _("VideoLAN Movie Creator is a non-linear editing software for video creation."); ?>
                            </span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <div class="col-md-8 padding-bottom-24">
            <div class='audienceCallout'><?php echo _("For Professionals"); ?></div>
            <div class="row">
                <div class="col-md-6 padding-bottom-24">
                    <ul class="media-list">
                        <li class="media">
                            <a href='/projects/dvblast.html'>
                                <div class="media-left media-middle">
                                    <?php image('DVBlast-IconSmall.png', "DVBlast Icon", "media-object"); ?>
                                </div>
                                <div class="media-body">
                                    <span class='productName'>DVBlast</span>
                                    <span class='productDescription'>
                                        <?php echo _("DVBlast is a simple and powerful MPEG-2/TS demux and streaming application."); ?>
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href='/developers/x264.html'>
                                <div class="media-left media-middle">
                                    <?php image('x264-IconSmall.png', "x264 Icon", "media-object"); ?>
                                </div>
                                <div class="media-body">
                                    <span class='productName'>x264</span>
                                    <span class='productDescription'>
                                        <?php echo _("x264 is a free application for encoding video streams into the H.264/MPEG-4 AVC format."); ?>
                                    </span>
                                </div>
                            </a>
                        </li>
                    <ul>
                 </div>
                 <div class="col-md-6">
                     <ul class="media-list">
                        <li class="media">
                            <a href='/projects/multicat.html'>
                                <div class="media-body">
                                    <span class='productName'>multicat</span>
                                    <span class='productDescription'>
                                        <?php echo _("multicat is a set of tools designed to easily and efficiently manipulate multicast streams and TS."); ?>
                                    </span>
                                </div>
                            </a>
                        </li>
                     </ul>
                 </div>
             </div> 
        </div>
    </div>
    <div class="row">
        <div class='col-md-12 audienceCallout'><?php echo _("For Developers"); ?></div>
    </div>
    <div class="row">
        <div class="col-md-3 padding-bottom-24">
            <ul class="media-list">
                <li class="media">
                    <a href="/developers/libdvdcss.html">
                        <span class='productName'>libdvdcss</span>
                        <span class='productDescription'>
                            <?php echo _("The reference open-source cross-platform library for DVD CSS decryption."); ?>
                        </span>
                    </a>
                </li>
                <li class="media">
                    <a href="/developers/libaacs.html">
                        <span class='productName'>libaacs</span>
                        <span class='productDescription'>
                            <?php echo _("A research project for implementing the AACS standard."); ?>
                        </span>
                    </a>
                </li>
                <li class="media">
                    <a href="/developers/libbdplus.html">
                        <span class='productName'>libbdplus</span>
                        <span class='productDescription'>
                            <?php echo _("A research project for implementing the bdplus standard."); ?>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-3 padding-bottom-24">
            <ul class="media-list">
                <li class="media">
                    <a href="/developers/libdvdnav.html">
                        <span class='productName'>libdvdnav</span>
                        <span class='productDescription'>
                            <?php echo _("The reference open-source cross-platform library for DVD menu handling."); ?>
                        </span>
                    </a>
                </li>
                <li class="media">
                    <a href="/developers/libbluray.html">
                        <span class='productName'>libbluray</span>
                        <span class='productDescription'>
                            <?php echo _("The reference open-source cross-platform library for Blu-Ray Discs access."); ?>
                        </span>
                    </a>
                </li>
                <li class="media">
                    <a href="/developers/libdvbcsa.html">
                        <span class='productName'>libdvbcsa</span>
                        <span class='productDescription'>
                            <?php echo _("A cross-platform library to decrypt and encrypt using the DVB-CSA algorithm."); ?>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-3 padding-bottom-24">
            <ul class="media-list">
                <li class="media">
                    <a href="/developers/libdvdnav.html">
                        <span class='productName'>libdvdread</span>
                        <span class='productDescription'>
                            <?php echo _("The reference open-source cross-platform library for DVD video images."); ?>
                        </span>
                    </a>
                </li>
                <li class="media">
                    <a href="/developers/libdvbpsi.html">
                        <span class='productName'>libdvbpsi</span>
                        <span class='productDescription'>
                            <?php echo _("Parse TS and DVB tables without headaches."); ?>
                        </span>
                    </a>
                </li>
                <li class="media">
                    <a href="/developers/libdca.html">
                        <span class='productName'>libdca</span>
                        <span class='productDescription'>
                            <?php echo _("A cross-platform library to decode Dts Coherent Audio codec."); ?>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-3 padding-bottom-24">
            <ul class="media-list">
                <li class="media">
                    <a href="/vlc/libvlc.html">
                        <span class='productName'>libVLC</span>
                        <span class='productDescription'>
                            The <b>Cross-Platform</b> multimedia framework. Bring VLC power into your app.
                        </span>
                    </a>
                </li>
                <li class="media">
                    <a href="/developers/bitstream.html">
                        <span class='productName'>biTStream</span>
                        <span class='productDescription'>
                            <?php echo _("A cross-platform development library to abstract access to binary structures such as found in MPEG or DVB."); ?>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php footer('$Id: index.php 3765 2006-08-16 16:19:00Z dionoea $'); ?>
