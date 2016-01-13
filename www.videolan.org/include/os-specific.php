<?php
$win32version = '2.2.1';
$macosxversion = '2.2.1';
$oldmacosxversion = '2.0.10';
$version = '2.2.1';
$iosversion = '2.7.2';

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
    global $dlBase;

    ?><script type='text/javascript'>
    //Editable details for the client side OS appropriate download detection.
    var latestVersion  = '<?php echo "$version"; ?>';
    <?php
    echo "
    var windowsDetails = {'name': 'Windows', 'size': '28&nbsp;MB', 'location':          '$dlBase/$win32version/win32/vlc-$win32version-win32.exe'};
    var osxDetails     = {'name': 'Mac OS X', 'size': '33&nbsp;MB', 'location':         '$dlBase/$macosxversion/macosx/vlc-$macosxversion.dmg' };
    var osx32Details   = {'name': 'Mac OS X (32bit)', 'size': '26&nbsp;MB', 'location': '$dlBase/$oldmacosxversion/macosx/vlc-$oldmacosxversion-intel.dmg' };
    var osxPPCDetails  = {'name': 'Mac OS X (PPC)', 'size': '25&nbsp;MB', 'location':   '$dlBase/$oldmacosxversion/macosx/vlc-$oldmacosxversion-powerpc.dmg' };
    var iosDetails     = {'name': 'iOS', 'size': '56.5&nbsp;MB', 'location': '/vlc/download-ios.html'};"; ?>
    var linuxDetails   = {'name': 'Linux', 'size': '', 'location': '/vlc/#download'};
    var androidDetails = {'name': 'Android', 'size': '', 'location': '/vlc/download-android.html'};
    var debianDetails  = {'name': 'Debian GNU/Linux', 'size': '', 'location': '/vlc/download-debian.html'};
    var ubuntuDetails  = {'name': 'Ubuntu', 'size': '', 'location': 'apt://vlc'};
    var fedoraDetails  = {'name': 'Fedora Linux', 'size': '', 'location': '/vlc/download-fedora.html'};
    var redhatDetails  = {'name': 'RedHat Linux', 'size': '', 'location': '/vlc/download-redhat.html'};
    var gentooDetails  = {'name': 'Gentoo Linux', 'size': '', 'location': '/vlc/download-gentoo.html'};
    var suseDetails    = {'name': 'Suse Linux', 'size': '', 'location': '/vlc/download-suse.html'};
    var mandrivaDetails  = {'name': 'Mandriva Linux', 'size': '', 'location': '/vlc/download-mandriva.html'};
    var beosDetails    = {'name': 'BeOS', 'size': '', 'location': '/vlc/download-beos.html'};
    var freebsdetails  = {'name': 'FreeBSD', 'size': '', 'location': '/vlc/download-freebsd.html'};

    //Attempt to load the bright button gradient into cache for faster switching on mouse over (may not work on all browsers.)
    var cache = new Image();
    cache.src = '/style/images/downloadButtonGradientOrangeBright.png';

    $(document).ready(function () {
       var OS="windows"; //Default

       if (navigator.appVersion.indexOf("Win")!=-1) {
         OS="windows";
         latestVersion = '<?php echo "$win32version"; ?>';
       }
       if (navigator.appVersion.indexOf("Mac")!=-1) {
          latestVersion = '<?php echo "$macosxversion"; ?>';
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
            latestVersion = '<?php echo "$iosversion"; ?>';
       }
       $('#downloadDetails').html("Version " + latestVersion + " &nbsp;&#8226;&nbsp; " + eval(OS+"Details.name") + " &nbsp;&#8226;&nbsp; " + eval(OS+"Details.size"));
       $('<?php echo "$downloadButton"; ?>').attr('href',eval(OS+"Details.location"))
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

function downloadButton2()
{
    global $dlUrl;
    global $win32version;
    global $windowsLocation;
    global $osxLocation;
    ?>
    <div class="inner center-xs">
        <div class="btn-group">
            <a id='downloadButton2' class="btn btn-default btn-lg btn-dl" href='<?php echo $dlUrl; ?>'>
                <span class='downloadText'><?php echo _("Download"); ?> <b>VLC</b></span>
            </a>
            <a href="/vlc/#download" class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="caret"></span>
            </a>

            <ul class="dropdown-menu dropdown-default platform-icons">
                <li>
                    <a href="<?php echo $windowsLocation ?>">
                        Windows
                    </a>
                </li>
                <li>
                    <a href="<?php echo $osxLocation ?>">
                        Mac OS X
                    </a>
                 </li>
                 <li>
                    <a href="/vlc/#download">
                        GNU/Linux
                    </a>
                 </li>
                 <li>
                    <a href="/vlc/download-android.html">
                        Android
                    </a>
                 </li>
                 <li>
                    <a href="/vlc/download-ios.html">
                        iOS
                    </a>
                  </li>
                  <li>
                    <a href="/vlc/#download">
                        <?php echo _('Other Systems'); ?>
                    </a>
                  </li>
            </ul>
        </div>
        <div id="downloadDetails">
            Version <span id='downloadVersion'><?php echo $win32version ?>
            </span>&nbsp;&#8226;&nbsp;<span id='downloadOS'>Windows</span>&nbsp;&#8226;&nbsp;<span id='downloadSize'>20MB</span>
        </div>
        <div class="platform-icons main-os-icons">
            <a class="icon icon-windows" href="/vlc/download-windows.html"></a>
            <a class="icon icon-macosx" href="/vlc/download-macosx.html"></a>
            <a class="icon icon-linux" href="/vlc/#download"></a>
            <a class="icon icon-android" href="/vlc/download-android.html"></a>
            <a class="icon icon-ios" href="/vlc/download-ios.html"></a>
        </div>
    </div>
    <?php replaceDLinfos( "#downloadButton2" );
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

function drawVLCdownloadSection() {
    ?>
    <section class="download-wrapper">
        <div class="row">
            <div class="v-align col-xs-8 col-xs-offset-4 col-sm-offset-0 col-sm-5 col-xs-pull-2 col-sm-pull-0">
                <?php image('largeVLC.png', 'Large Orange VLC media player Traffic Cone Logo', 'big-vlc-img img-responsive'); ?>
            </div>
            <div class="v-align col-xs-12 col-sm-7">
                <h1 class="bigtitle center-font-xs">VLC media player</h1>

                <div class="projectDescription center-font-xs">
                    <?php echo
                    _("VLC is a free and open source cross-platform multimedia player and framework that plays most multimedia files as well as DVDs, Audio CDs, VCDs, and various streaming protocols."); ?>
                </div>
                <?php downloadButton2(); ?>
            </div>
        </div>
    </section>
    <?php
}

?>
