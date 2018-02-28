<?php
$win32version = '3.0.1';
$macosxversion = '3.0.1';
$oldmacosxversion = '2.0.10';
$version = '3.0.1';
$iosversion = '3.0.2';
$tvosversion = '3.0.1';
$androidversion = '3.0.0';
$winrtversion = '3.0.0';

$dlBase = "//get.videolan.org/vlc";
$dlUrl = "$dlBase/$win32version/win32/vlc-$win32version-win32.exe";
$windowsLocation = "$dlBase/$win32version/win32/vlc-$win32version-win32.exe";
$osxLocation = "$dlBase/$macosxversion/macosx/vlc-$macosxversion.dmg";

function replaceDLinfos( $downloadButton = "#downloadButton" )
{
    global $version;
    global $win32version;
    global $macosxversion;
    global $oldmacosxversion;
    global $iosversion;
    global $tvosversion;
    global $androidversion;
    global $winrtversion;
    global $dlBase;
    ?>
    <script type='text/javascript'>
    //Editable details for the client side OS appropriate download detection.
    <?php
    echo 'var PLATFORMS = '.getOS(null, 0, null, 'json').';';
    ?>

    //Attempt to load the bright button gradient into cache for faster switching on mouse over (may not work on all browsers.)
    var cache = new Image();
    cache.src = '/style/images/downloadButtonGradientOrangeBright.png';

    function getOS() {
        var OS="windows"; //Default

       if (navigator.appVersion.indexOf("Win")!=-1) {
         OS="windows";
       }
       if (navigator.appVersion.indexOf("Mac")!=-1) {
          if (navigator.platform.indexOf("MacPPC")!= -1 || navigator.platform.indexOf("PowerPC") != -1 ) OS="osxPPC";
          else if (navigator.userAgent.indexOf("OS X 10.5")!=-1) OS="osx32";
          else OS="osx";
       }
       if (navigator.platform.indexOf("BeOS") !=-1) OS="beos";
       if (navigator.platform.indexOf("Linux")!=-1) {
            if((navigator.userAgent.indexOf("Ubuntu") != -1) ||
                (navigator.userAgent.indexOf("ubuntu") != -1)) OS="ubuntu";
            else if(navigator.userAgent.indexOf("Debian") != -1) OS="debian";
            else if(navigator.userAgent.indexOf("Android") != -1) OS="android";
            else if(navigator.userAgent.indexOf("Mandriva") != -1) OS="mandriva";
            else if(navigator.userAgent.indexOf("Red Hat") != -1) OS="redhat";
            else if(navigator.userAgent.indexOf("Fedora") != -1) OS="fedora";
            else if(navigator.userAgent.indexOf("SUSE") != -1) OS="suse";
            else if(navigator.userAgent.indexOf("Gentoo") != -1) OS="gentoo";
            else OS="linux";
       }
       if (navigator.platform.indexOf("freebsd") != -1) OS="freebsd";
       if (navigator.platform.indexOf("FreeBSD") != -1) OS="freebsd";
       if (navigator.userAgent.indexOf("iPad") != -1 || navigator.userAgent.indexOf("iPhone") != -1 || navigator.userAgent.indexOf("iPod") != -1) {
            OS="ios";
       }
       return OS;
    }

    $(document).ready(function () {
        var OS = getOS() || {};
        var details = '';
        var separator = " &nbsp;&#8226;&nbsp; ";
        details += PLATFORMS[OS].latestVersion ? "Version " + PLATFORMS[OS].latestVersion : '';
        details += PLATFORMS[OS].name ? separator + PLATFORMS[OS].name : '';
        details += PLATFORMS[OS].size ? separator + PLATFORMS[OS].size : '';
        if (details) $('#downloadDetails').html(details);
        $('<?php echo "$downloadButton"; ?>').attr('href', PLATFORMS[OS].location || '/vlc/#download');
    });
    </script>
<?php
}

function downloadButton()
{
    global $dlUrl;
    global $win32version;
?>
     <a id='downloadButton' href='<?php echo $dlUrl; ?>'>
         <img style='position: absolute; top: -10px; left: -10px;' src='//images.videolan.org/images/downloadVLC.png' alt='Download VLC icon' />
         <span class='downloadText'><?php echo _("Download VLC"); ?></span>
         <span id='downloadDetails' style='font-size: 12px; color: white;'>
         Version <span id='downloadVersion'><?php echo $win32version ?>
         </span>&nbsp;&#8226;&nbsp;<span id='downloadOS'>Windows</span>&nbsp;&#8226;&nbsp;<span id='downloadSize'>20MB</span>
         </span>
    </a>
    <a class='extraInfoLink' href='/vlc/#download' style="padding-left: 100px;"><?php echo _("Other Systems");?></a>
<?php replaceDLinfos();
}

function getOS($os = null, $offset = 0, $count = null, $encode = null) {
    global $windowsLocation;
    global $osxLocation;
    global $win32version;
    global $version;
    global $macosxversion;
    global $oldmacosxversion;
    global $iosversion;
    global $tvosversion;
    global $androidversion;
    global $winrtversion;
    global $dlBase;
    $OSs = array(
        "windows"   => array(
            "name"          => "Windows",
            "size"          => '28&nbsp;MB',
            "latestVersion" => $win32version,
            "location"      => $windowsLocation
        ),
        "windowsphone"      => array(
            "name"          => "Windows Phone",
            "latestVersion" => $winrtversion,
            "location"      => "/vlc/download-windowsphone.html"
        ),
        "osx"       => array(
            "name"          => "Mac OS X",
            "size"          => "33&nbsp;MB",
            "latestVersion" => $macosxversion,
            "location"      => $osxLocation
        ),
        "linux"     => array(
            "name"          => "Linux",
            "latestVersion" => $version,
            "location"      => "/vlc/#download"
        ),
        "android"   => array(
            "name"          => "Android",
            "latestVersion" => $androidversion,
            "location"      => "//play.google.com/store/apps/details?id=org.videolan.vlc"
        ),
        "ios"       => array(
            "name"          => "iOS",
            "size"          => "56.5&nbsp;MB",
            "latestVersion" => $iosversion,
            "location"      => "//itunes.apple.com/app/apple-store/id650377962?pt=454758&amp;ct=vodownloadpage&amp;mt=8"
        ),
        "tvos"       => array(
            "name"          => "Apple TV - tvOS",
            "size"          => "21.7&nbsp;MB",
            "latestVersion" => $tvosversion,
            "location"      => "/vlc/download-appletv.html"
        ),
        "osx32"     => array(
            "name"          => "Mac OS X (32bit)",
            "size"          => "26&nbsp;MB",
            "location"      => "$dlBase/$oldmacosxversion/macosx/vlc-$oldmacosxversion-intel.dmg"
        ),
        "osxPPC"    => array(
            "name"          => "Mac OS X (PPC)",
            "size"          => "25&nbsp;MB",
            "location"      => "$dlBase/$oldmacosxversion/macosx/vlc-$oldmacosxversion-powerpc.dmg"
        ),
        "debian"    => array(
            "name"          => "Debian GNU/Linux",
            "location"      => "/vlc/download-debian.html"
        ),
        "ubuntu"    => array(
            "name"          => "Ubuntu",
            "location"      => "apt://vlc"
        ),
        "fedora"    => array(
            "name"          => "Fedora Linux",
            "location"      => "/vlc/download-fedora.html"
        ),
        "redhat"    => array(
            "name"          => "RedHat Linux",
            "location"      => "/vlc/download-redhat.html"
        ),
        "gentoo"    => array(
            "name"          => "Gentoo Linux",
            "location"      => "/vlc/download-gentoo.html"
        ),
        "suse"      => array(
            "name"          => "Suse Linux",
            "location"      => "/vlc/download-suse.html"
        ),
        "mandriva"  => array(
            "name"          => "Mandriva Linux",
            "location"      => "/vlc/download-mandriva.html"
        ),
        "beos"      => array(
            "name"          => "BeOS",
            "location"      => "/vlc/download-beos.html"
        ),
        "freebs"    => array(
            "name"          => "FreeBSD",
            "location"      => "/vlc/download-freebsd.html"
        ),
        "winrt"     => array(
            "name"          => "Windows Store",
            "latestVersion" => $winrtversion,
            "location"      => "/vlc/download-winrt.html"
        ),
        "chromeos"  => array(
            "name"          => "Chrome OS",
            "location"      => "/vlc/download-chromeos.html"
        )
    );

    //If $os is given $offset & $count are ignored
    if (!is_null($os)) {
        $slice = isset($OSs[$os]) ? $OSs[$os] : array();
    }
    else {
        if (is_null($count)) {
            $count = count($OSs);
        }
        $slice = array_slice($OSs, $offset, $count);
    }
    //order will not be conserved in js
    return $encode === 'json' ?  json_encode($slice) : $slice;
}

function downloadButton2($dropdownItems = null, $targetOS = null, $displayMainOSicons = true, $alternativeTitle = null)
{
    global $dlUrl;
    global $win32version;
    global $windowsLocation;
    global $osxLocation;
    $dropdownItems = is_null($dropdownItems) ? getOS(null, 0, 6) : $dropdownItems;
    $defaultOS = is_null($targetOS) || $targetOS == 'All' ? "windows" : $targetOS;
    $defaultDetail = getOS($defaultOS);
    ?>
    <script type="text/javascript">
        var ws;

        function openWSCounterSocket() {
            if (ws === undefined || ws.readyState === undefined || ws.readyState > 1) {
                ws = new WebSocket("wss://get.videolan.org/wscounter/<?php echo $defaultDetail["latestVersion"] ?>");
                ws.onmessage = function(event) {
                    var value = event.data.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                    $('#wscounter').text(value + " <?php echo _("downloads so far"); ?>");
                };
            }
        }

        $(function() {
            openWSCounterSocket();
            setInterval(openWSCounterSocket, 5000);
        });
    </script>

    <div class="inner center-xs">
        <div class="btn-group">
            <a id='downloadButton2' class="btn btn-default btn-lg btn-dl" href='<?php echo $defaultDetail["location"]; ?>'>
                <span class='downloadText'>
                    <?php
                    if (!is_null($alternativeTitle))
                        echo _($alternativeTitle);
                    else
                        echo _("Download")." <b>VLC</b>";
                    ?>
                </span>
            </a>
            <a href="/vlc/#download" class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu dropdown-default platform-icons">
                <?php
                 foreach($dropdownItems as $item) {
                     echo '<li><a href="'.$item['location'].'">'.$item['name'].'</a></li>';
                 }
                ?>
                <li role="separator" class="divider"></li>
                <li>
                    <a href="/vlc/#download">
                        <?php echo _('Other Systems'); ?>
                    </a>
                </li>
            </ul>
        </div>
        <div id="downloadDetails">
            Version <span id='downloadVersion'>
            <?php echo $defaultDetail["latestVersion"] ?></span>&nbsp;&#8226;&nbsp;<span id='downloadOS'><?php echo $defaultDetail["name"]; ?></span>&nbsp;&#8226;&nbsp;<span id='downloadSize'><?php echo $defaultDetail["size"] ?></span>
        </div>
        <div id="wscounter"></div>
        <?php if ($displayMainOSicons) { ?>
        <div class="platform-icons main-os-icons">
            <a class="icon icon-windows" href="/vlc/download-windows.html"></a>
            <a class="icon icon-macosx" href="/vlc/download-macosx.html"></a>
            <a class="icon icon-linux" href="/vlc/#download"></a>
            <a class="icon icon-android" href="/vlc/download-android.html"></a>
            <a class="icon icon-ios" href="/vlc/download-ios.html"></a>
        </div>
        <?php } ?>
    </div>
    <?php if (is_null($targetOS)) replaceDLinfos( "#downloadButton2" );
}

function Screenshot( $os )
{
    $scr = array();
    $scr["Win32"] = array( "http://images.videolan.org/images/screenshots/windows.jpg" ,
            "VLC on Windows", 300, 245 );
    $scr["Linux"] = array( "http://images.videolan.org/images/screenshots/vlc-linux.jpg" ,
            "VLC on Linux", 300, 233 );
    $scr["iOS"] = array( "http://images.videolan.org/images/screenshots/vlc-ios.jpg" ,
            "VLC on iOS", 300, 119 );
    $scr["OSX"] = array( "http://images.videolan.org/images/screenshots/vlc-osx.jpg" ,
            "VLC on Mac OS X", 300, 200 );
    echo "document.writeln('<img width=\"".$scr[$os][2]."\" height=\"".$scr[$os][3]."\" src=\"".$scr[$os][0]."\" alt=\"";
    echo $scr[$os][1]."\" />');";
}

function getScreenshots($os) {
    $baseURL = "//images.videolan.org/images/screenshots";
    $screenshots = array(
        "All"  => array(
            array(
                "name"  => "VLC media player - Windows 7 - Qt Interface",
                "src"   => "//images.videolan.org/vlc/screenshots/1.0.0/fitted_vlc_101_w7_2.jpg"
            ),
            array(
                "name"  => "VLC on OS X",
                "src"   => "//images.videolan.org/vlc/screenshots/2.2.0/fitted_vlc-2.2-macosx-playback.jpg"
            ),
            array(
                "name"  => "VLC media player - Windows 7 - Qt Interface",
                "src"   => "//images.videolan.org/vlc/screenshots/1.0.0/vlc_101_w7.jpg"
            ),
            array(
                "name"  => "VLC on iPad",
                "src"   => "//images.videolan.org/vlc/screenshots/ios2/ipadwhitelibrary-medium.jpg"
            ),
            array(
                "name"  => "VLC media player - Linux - Gnome",
                "src"   => "//images.videolan.org/vlc/screenshots/1.0.0/VLC_Gnome.png"
            ),
            array(
                "name"  => "VLC on Apple TV",
                "src"   => "//images.videolan.org/vlc/screenshots/appletv/Apple-TV-device-playback-medium.jpg"
            ),
            array(
                "name"  => "VLC on OS X",
                "src"   => "//images.videolan.org/vlc/screenshots/2.2.0/vlc-2.2-macosx-playback-dark.jpg"
            ),
            array(
                "name"  => "VLC media player - Windows Vista - Skins Interface",
                "src"   => "//images.videolan.org/vlc/screenshots/1.0.0/VLC_Goldneye.jpg"
            ),
            array(
                "name"  => "VLC media player - Windows 7 - Qt Interface",
                "src"   => "//images.videolan.org/vlc/screenshots/1.0.0/vlc_101_w7_1.jpg"
            ),
            array(
                "name"  => "VLC on OS X",
                "src"   => "//images.videolan.org/vlc/screenshots/2.2.0/vlc-2.2-macosx-audio-playback-dark.jpg"
            ),
            array(
                "name"  => "VLC media player - Windows Vista - Qt Interface",
                "src"   => "//images.videolan.org/vlc/screenshots/1.0.0/VLC_Qt4.jpg"
            ),
            array(
                "name"  => "VLC on Android",
                "src"   => "//images.videolan.org/vlc/screenshots/android/playback-medium.jpg"
            ),
            array(
                "name"  => "VLC for Windows Store",
                "src"   => "//images.videolan.org/vlc/screenshots/winrt/artistpage-medium.jpg"
            )
        ),
        "windows" => array(
            array(
                "name"  => "VLC media player - Windows 7 - Qt Interface",
                "src"   => "//images.videolan.org/vlc/screenshots/1.0.0/vlc_101_w7_2.jpg"
            ),
            array(
                "name"  => "VLC media player - Windows Vista - Qt Interface",
                "src"   => "//images.videolan.org/vlc/screenshots/1.0.0/VLC_Qt4.jpg"
            ),
            array(
                "name"  => "VLC media player - Windows 7 - Qt Interface",
                "src"   => "//images.videolan.org/vlc/screenshots/1.0.0/vlc_101_w7_1.jpg"
            ),
            array(
                "name"  => "VLC media player - Windows Vista - Skins Interface",
                "src"   => "//images.videolan.org/vlc/screenshots/1.0.0/VLC_Goldneye.jpg"
            ),
            array(
                "name"  => "VLC media player - Windows 7 - Qt Interface",
                "src"   => "//images.videolan.org/vlc/screenshots/1.0.0/vlc_101_w7.jpg"
            )
        ),
        "linux" => array(
            array(
                "name"  => "VLC on Linux",
                "src"   => "$baseURL/vlc-linux.jpg"
            ),
            array(
                "name"  => "VLC media player - Linux - Gnome",
                "src"   => "//images.videolan.org/vlc/screenshots/1.0.0/VLC_Gnome.png"
            ),
            array(
                "name"  => "VLC media player - Linux - Debian / Gnome 3",
                "src"   => "//images.videolan.org/vlc/screenshots/2.0.0/vlc-2.0-gnome3-debian.jpg"
            )
        ),
        "ios" => array(
            array(
                "name"  => "VLC on iPad",
                "src"   => "//images.videolan.org/vlc/screenshots/ios2/ipadwhitelibrary-medium.jpg"
            ),
            array(
                "name"  => "VLC on iPad",
                "src"   => "//images.videolan.org/vlc/screenshots/ios2/ipadblackplayback.jpg"
            ),
            array(
                "name"  => "VLC on Apple Watch",
                "src"   => "//images.videolan.org/vlc/screenshots/2.2.0/vlc-ios-2.6-watch-list.jpg"
            ),
            array(
                "name"  => "VLC on iPhone",
                "src"   => "//images.videolan.org/vlc/screenshots/ios2/iphoneblackplayback.jpg"
            ),
            array(
                "name"  => "VLC on Apple Watch",
                "src"   => "//images.videolan.org/vlc/screenshots/2.2.0/vlc-ios-2.6-watch-detail.jpg"
            ),
            array(
                "name"  => "VLC on iPhone",
                "src"   => "//images.videolan.org/vlc/screenshots/ios2/iphoneblacklibrary.jpg"
            )
        ),
        "tvos" => array(
            array(
                "name"  => "VLC on Apple TV",
                "src"   => "//images.videolan.org/vlc/screenshots/appletv/Apple-TV-device-browse-medium.jpg"
            ),
            array(
                "name"  => "VLC on Apple TV",
                "src"   => "//images.videolan.org/vlc/screenshots/appletv/Apple-TV-device-playback-medium.jpg"
            ),
            array(
                "name"  => "VLC on Apple TV, iPad and iPhone",
                "src"   => "//images.videolan.org/vlc/screenshots/appletv/Apple-TV-device-ipad-iphone-playback-medium.jpg"
            ),
            array(
                "name"  => "VLC on Apple TV",
                "src"   => "//images.videolan.org/vlc/screenshots/appletv/Apple-TV-device-playback-speed-medium.jpg"
            ),
            array(
                "name"  => "VLC on Apple TV, iPad and iPhone",
                "src"   => "//images.videolan.org/vlc/screenshots/appletv/Apple-TV-device-ipad-iphone-browse-medium.jpg"
            )
        ),
        "osx" => array(
            array(
                "name"  => "VLC on OS X",
                "src"   => "//images.videolan.org/vlc/screenshots/2.2.0/vlc-2.2-macosx-playback.jpg"
            ),
            array(
                "name"  => "VLC on OS X",
                "src"   => "//images.videolan.org/vlc/screenshots/2.2.0/vlc-2.2-macosx-playback-dark.jpg"
            ),
            array(
                "name"  => "VLC on OS X",
                "src"   => "//images.videolan.org/vlc/screenshots/2.2.0/vlc-2.2-macosx-audio-playback-dark.jpg"
            )
        ),
        "android" => array(
            array(
                "name"  => "VLC on Android",
                "src"   => "//images.videolan.org/vlc/screenshots/android/library-video-landscape-medium.jpg"
            ),
            array(
                "name"  => "VLC on Android",
                "src"   => "//images.videolan.org/vlc/screenshots/android/playback-tablet-medium.jpg"
            ),
            array(
                "name"  => "VLC on Android",
                "src"   => "//images.videolan.org/vlc/screenshots/android/library-video-portrait.jpg"
            ),
            array(
                "name"  => "VLC on Android",
                "src"   => "//images.videolan.org/vlc/screenshots/android/library-video-landscape-tablet-medium.jpg"
            ),
            array(
                "name"  => "VLC on Android",
                "src"   => "//images.videolan.org/vlc/screenshots/android/playback-medium.jpg"
            ),
            array(
                "name"  => "VLC on Android",
                "src"   => "//images.videolan.org/vlc/screenshots/android/library-audio-portrait.jpg"
            ),
            array(
                "name"  => "VLC on Android",
                "src"   => "//images.videolan.org/vlc/screenshots/android/library-music-album-portrait.jpg"
            )
        ),
        "winrt" => array(
            array(
                "name"  => "VLC for Windows Store",
                "src"   => "//images.videolan.org/vlc/screenshots/winrt/artistpage-medium.jpg"
            ),
            array(
                "name"  => "VLC for Windows Store",
                "src"   => "//images.videolan.org/vlc/screenshots/winrt/yourartists-medium.jpg"
            ),
            array(
                "name"  => "VLC for Windows Store",
                "src"   => "//images.videolan.org/vlc/screenshots/winrt/yourmusic-medium.jpg"
            ),
            array(
                "name"  => "VLC for Windows Store",
                "src"   => "//images.videolan.org/vlc/screenshots/winrt/yourvideos-medium.jpg"
            )
        ),
        "windowsphone" => array(
            array(
                "name"  => "VLC for Windows Phone",
                "src"   => "//images.videolan.org/vlc/screenshots/windowsphone/library-music-landscape.jpg"
            ),
            array(
                "name"  => "VLC for Windows Phone",
                "src"   => "//images.videolan.org/vlc/screenshots/windowsphone/library-portrait.jpg"
            ),
            array(
                "name"  => "VLC for Windows Phone",
                "src"   => "//images.videolan.org/vlc/screenshots/windowsphone/library-shows-portrait.jpg"
            ),
            array(
                "name"  => "VLC for Windows Phone",
                "src"   => "//images.videolan.org/vlc/screenshots/windowsphone/playback-landscape.jpg"
            ),
            array(
                "name"  => "VLC for Windows Phone",
                "src"   => "//images.videolan.org/vlc/screenshots/windowsphone/library-music-artist-portrait.jpg"
            ),
            array(
                "name"  => "VLC for Windows Phone",
                "src"   => "//images.videolan.org/vlc/screenshots/windowsphone/library-music-album-landscape.jpg"
            ),
            array(
                "name"  => "VLC for Windows Phone",
                "src"   => "//images.videolan.org/vlc/screenshots/windowsphone/library-music-bright-portrait.jpg"
            )
        ),
        "chromeos" => array(
            array(
                "name"  => "VLC for Chrome OS",
                "src"   => "//images.videolan.org/vlc/screenshots/chromeos/playback-medium.jpg"
            ),
            array(
                "name"  => "VLC for Chrome OS",
                "src"   => "//images.videolan.org/vlc/screenshots/chromeos/library-medium.jpg"
            )
        )
    );

    return isset($screenshots[$os]) ? $screenshots[$os] : null;
}

function getImageOrientation($imgPath) {
    $aspect = 'landscape';
    if (substr($imgPath, 0, 4) != "http" && substr($imgPath, 0, 2) == '//') {
        $imgPath = 'http:'.$imgPath;
    }
    $size = getimagesize($imgPath);
    if ($size[0] < $size[1]) {
        $aspect = 'portrait';
    }
    return $aspect;
}

function drawScreenshots($screenshots) {
    echo '<div class="v-align carousel-padding-xs col-xs-12 col-sm-5 col-sm-offset-1 col-sm-pull-1"><div id="header-carousel">';
    $first = true;
    foreach($screenshots as $screenshot) {
        $src = $first ? $screenshot['src'] : '';
        $srcLazy = $first ? '' : $screenshot['src'];
        $dom  = '<div class="screenshot2 '.getImageOrientation($screenshot['src']).'">';
        $dom .= '<img src="'.$src.'" alt="'.$screenshot['name'].'" data-lazy="'.$srcLazy.'" />';
        $dom .= '</div>';
        echo $dom;
        $first = false;
    }
    echo '</div></div>';
}

/*
* Draw the download section.
* If a OS is given it will draw a carousel of screenshots instead of a VLC icon.
* Array of images are retrieved by calling the getScreenshots function.
*/
function drawVLCdownloadSection($os = null, $dropdownItems = null, $displayMainOSicons = true, $alternativeTitle = null) {
    $screenshots = null;
    if (is_null($os)) {
        $screenshots = getScreenshots("All");
    } else {
        $screenshots = getScreenshots($os);
    }
    ?>
    <section class="download-wrapper">
        <div class="row reorder-xs">
            <?php
            if (is_null($screenshots)) {
            ?>
            <div class="hidden-xs v-align col-sm-5">
                <?php image('largeVLC.png', 'Large Orange VLC media player Traffic Cone Logo', 'big-vlc-img img-responsive'); ?>
            </div>
            <?php
            } else {
                drawScreenshots($screenshots);
            }
            ?>
            <div class="v-align <?php echo is_null($screenshots) ? 'col-sm-7' : 'col-sm-5'?>">
                <div class="center-font-xs">
                    <?php image('icons-VLC/vlc.mini.svg', 'Large Orange VLC media player Traffic Cone Logo', 'big-vlc-img img-responsive visible-xs-inline-block v-align'); ?>
                    <h1 class="v-align bigtitle">
                        <?php
                        if (!is_null($alternativeTitle))
                            echo _($alternativeTitle);
                        else
                            echo "VLC media player";
                        ?>
                    </h1>
                </div>
                <div class="projectDescription hidden-sm hidden-xs">
                    <?php echo
                    _("VLC is a free and open source cross-platform multimedia player and framework that plays most multimedia files as well as DVDs, Audio CDs, VCDs, and various streaming protocols."); ?>
                </div>
                <div class="projectDescription visible-xs visible-sm center-font-xs">
                    <?php echo
                    _("VLC is a free and open source cross-platform multimedia player and framework that plays most multimedia files, and various streaming protocols."); ?>
                </div>
                <?php downloadButton2($dropdownItems, $os, $displayMainOSicons); ?>
            </div>
        </div>
    </section>
    <?php
}

?>
