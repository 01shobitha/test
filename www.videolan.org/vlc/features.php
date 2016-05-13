<?php
    $title = "VLC - Features";
    $lang = "en";
    $menu = array( "vlc", "features" );
    $new_design = true;

    require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

    function startFeatureSection($align, $sectionClass='') {
        echo '<section class="features ' . $sectionClass . '"><div class="container"><div class="row">';
        $col = $align == 'left' ? 'col-lg-5 col-sm-6' : 'col-lg-5 col-lg-offset-1 col-sm-push-6 col-sm-6';
        echo '<div class="' . $col . '">';
    }

    function endFeatureSection($align, $imgSrc) {
        echo '</div>';
        $col = $align == 'left' ? 'col-lg-5 col-lg-offset-2 col-sm-6' : 'col-lg-5 col-sm-pull-6 col-sm-6';
        echo '<div class="' . $col . '"><img class="center-sm center-xs img-responsive" src="' . $imgSrc . '"></div></div></div></section>';
    }

    $mediaFormats = array(
        "MPEG-1/2", "DivX® (1/2/3/4/5/6)",
        "MPEG-4 ASP", "XviD",
        "3ivX D4", "H.261",
        "H.263 / H.263i",
        "H.264 / MPEG-4 AVC",
        "Cinepak", "Theora",
        "Dirac / VC-2",
        "MJPEG (A/B)", "WMV 1/2",
        "WMV 3 / WMV-9 / VC-1",
        "Sorenson 1/3", "DV",
        "On2 VP3/VP5/VP6", "Indeo Video v3 (IV32)",
        "Real Video (1/2/3/4)"
    );

    $audioFormats = array(
        "MPEG Layer 1/2", "MP3 - MPEG Layer 3",
        "AAC - MPEG-4 part3", "Vorbis",
        "AC3 - A/52", "E-AC-3",
        "MLP / TrueHD>3", "DTS",
        "WMA 1/2, WMA 3",
        "FLAC, ALAC",
        "Speex, Musepack / MPC",
        "ATRAC 3, Wavpack",
        "Mod", "TrueAudio",
        "APE", "Real Audio",
        "Alaw/µlaw, AMR (3GPP)",
        "MIDI", "LPCM",
        "ADPCM, QCELP",
        "DV Audio, QDM2/QDMC",
        "MACE"
    );

    $subtitleFormats = array(
        "DVD, Text files (MicroDVD, SubRIP, SubViewer, SSA1-5, SAMI, VPlayer)",
        "Closed captions", "Vobsub",
        "Universal Subtitle Format (USF)", "SVCD / CVD",
        "DVB", "OGM",
        "CMML", "Kate"
    );

    $tagFormats = array(
        "ID3 tags", "APEv2",
        "Vorbis comment"
    );

    $inputMedia = array(
        "UDP/RTP Unicast", "UDP/RTP Multicast",
        "HTTP / FTP", "MMS",
        "TCP/RTP Unicast", "DCCP/RTP Unicast",
        "File", "DVD Video",
        "Video CD / VCD", "SVCD",
        "Audio CD (no DTS-CD)", "DVB (Satellite, Digital TV, Cable TV)",
        "MPEG encoder", "Video acquisition"
    );

    $inputFormats = array(
        "MPEG (ES,PS,TS,PVA,MP3)", "AVI",
        "ASF / WMV / WMA", "MP4 / MOV / 3GP",
        "OGG / OGM / Annodex", "Matroska (MKV)",
        "Real", "WAV (including DTS)",
        "Raw Audio: DTS, AAC, AC3/A52", "Raw DV",
        "FLAC", "FLV (Flash)",
        "MXF", "Nut",
        "Standard MIDI / SMF", "Creative™ Voice"
    );

    $miscFormats = array(
        "SAP/SDP announces", "Bonjour protocol",
        "Mozilla/Firefox plugin", "ActiveX plugin",
        "SVCD Menus", "Localization",
        "CD-Text", "CDDB CD info",
        "IGMPv3", "IPv6",
        "MLDv2", "CPU acceleration"
    );

    function renderListItems($array) {
        foreach($array as $key => $value) {
            if ($key == count($array) - 1) {
                $value .= '.';
            } else {
                $value .= ', ';
            }
            echo $value;
        }
    }
?>
<div class="container">
    <h1 class="text-center margin-bottom-32">VLC Features</h1>
</div>

<section class="features-item-list features bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <i class="icon-play box-shadow"></i>
                <p><?= _("VLC plays Files, Discs, Webcams, Devices and Streams."); ?></p>
            </div>
            <div class="col-md-4 features-os">
                <i class="icon-cross-platform box-shadow"></i>
                <div class="clearfix"></div>
                    <a class="icon icon-windows8-svg box-shadow-hover" href="/vlc/download-windows.html"></a>
                    <a class="icon icon-mac-svg box-shadow-hover" href="/vlc/download-macosx.html"></a>
                    <a class="icon icon-linux-svg box-shadow-hover" href="/vlc/#download"></a>
                    <a class="icon icon-android-svg box-shadow-hover" href="/vlc/download-android.html"></a>
                    <a class="icon icon-ios-svg box-shadow-hover" href="/vlc/download-ios.html"></a>
            </div>
            <div class="col-md-4">
                <i class="icon-money-off box-shadow"></i>
                <p class="lead"><?= _("No spyware, No ads, No user tracking."); ?></p>
            </div>
        </div>
    </div>
</section>

<?php startFeatureSection('right') ?>
    <hr class="section-header-spacer"><div class="clearfix"></div>
    <h2 class="section-heading"><?= _("Fast - Hardware Decoding") ?></h2>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam risus eros, lobortis eu luctus non, consectetur ut augue. Vivamus enim nisl, maximus id porta sed, consectetur vitae ipsum.</p>
<?php endFeatureSection('right', '//images.videolan.org/vlc/screenshots/2.2.0/vlc-ios-2.4-iphone-playback.jpg') ?>

<section id="features-all-formats" class="features-item-list features bg-gray">
    <div class="container">
        <div class="row">
            <h2 class="section-heading text-center"><?= _("Plays all formats") ?></h2>
            <div class="col-md-4">
                <i class="icon-video box-shadow"></i>
                <p>
                    <?= renderListItems($mediaFormats); ?>
                </p>
            </div>
            <div class="col-md-4">
                <i class="icon-audio box-shadow"></i>
                <p>
                    <?= renderListItems($audioFormats); ?>
                </p>
            </div>
            <div class="col-md-4">
                <i class="icon-subtitles box-shadow"></i>
                <p>
                    <?= renderListItems($subtitleFormats); ?>
                </p>
                <p>
                    <?= renderListItems($tagFormats); ?>
                </p>
            </div>
        </div>
    </div>
</section>

<?php startFeatureSection('right') ?>
    <hr class="section-header-spacer"><div class="clearfix"></div>
    <h2 class="section-heading"><?= _("Advanced control") ?></h2>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam risus eros, lobortis eu luctus non, consectetur ut augue. Vivamus enim nisl, maximus id porta sed, consectetur vitae ipsum.</p>
<?php endFeatureSection('right', '//images.videolan.org/vlc/screenshots/2.2.0/vlc-2.2-macosx-audio-playback-dark.jpg') ?>

<section id="features-advanced-formats" class="features-item-list features bg-gray">
    <div class="container">
        <div class="row">
            <h2 class="section-heading text-center"><?= _("Advanced formats") ?></h2>
            <div class="col-md-8 col-md-offset-2">
                <h4><i class="icon-input"></i> <span>Input Media</span></h4>
                    <p class="lead"><?= renderListItems($inputMedia); ?></p>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <h4><i class="icon-input"></i> <span>Input Formats</span></h4>
                    <p class="lead"><?= renderListItems($inputFormats); ?></p>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <h4><i class="icon-misc"></i> <span>Miscellaneous</span></h4>
                    <p class="lead"><?= renderListItems($miscFormats); ?></p>
            </div>
        </div>
    </div>
</section>

<?php footer('$Id: features.php 4814 2008-12-12 13:30 CEST altglass $', array(), "no-margin-top"); ?>
