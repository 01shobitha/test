<?php
$version = '1.1.9';

$dlUrl = "http://sourceforge.net/projects/vlc/files/$version/win32/vlc-$version-win32.exe/download";

function replaceDLinfos( )
{
    global $version;
    echo "<script type='text/javascript'>\n";

    //Editable details for the client side OS appropriate download detection.
    echo "var latestVersion  = '".$version."';";
    echo "
    var windowsDetails = {'name': 'Windows', 'size': '20&nbsp;MB', 'location': 'http://sourceforge.net/projects/vlc/files/$version/win32/vlc-$version-win32.exe/download'};
    var osxDetails     = {'name': 'Mac OS X', 'size': '40&nbsp;MB', 'location': 'http://sourceforge.net/projects/vlc/files/$version/macosx/vlc-$version.dmg/download' };
    var osxPPCDetails  = {'name': 'Mac OS X (PPC)', 'size': '24&nbsp;MB', 'location': 'http://sourceforge.net/projects/vlc/files/$version/macosx/vlc-$version-powerpc.dmg/download' };
    var linuxDetails   = {'name': 'Linux', 'size': '', 'location': '/vlc/'};
    var debianDetails  = {'name': 'Debian GNU/Linux', 'size': '', 'location': '/vlc/download-debian.html'};
    var ubuntuDetails  = {'name': 'Ubuntu Linux', 'size': '', 'location': '/vlc/download-ubuntu.html'};
    var fedoraDetails  = {'name': 'Fedora Linux', 'size': '', 'location': '/vlc/download-fedora.html'};
    var redhatDetails  = {'name': 'RedHat Linux', 'size': '', 'location': '/vlc/download-redhat.html'};
    var gentooDetails  = {'name': 'Gentoo Linux', 'size': '', 'location': '/vlc/download-gentoo.html'};
    var suseDetails    = {'name': 'Suse Linux', 'size': '', 'location': '/vlc/download-suse.html'};
    var mandrivaDetails  = {'name': 'Mandriva Linux', 'size': '', 'location': '/vlc/download-mandriva.html'};
    var beosDetails  = {'name': 'BeOS', 'size': '', 'location': '/vlc/download-beos.html'};
    var freebsdetails  = {'name': 'FreeBSD', 'size': '', 'location': '/vlc/download-freebsd.html'};
    var iosdetails  = {'name': 'iOS 3.2+', 'size': '9&nbsp;MB', 'location': '/vlc/download-ios.html'};";
?>
    //Attempt to load the bright button gradient into cache for faster switching on mouse over (may not work on all browsers.)
    var cache = new Image();
    cache.src = '/style/images/downloadButtonGradientOrangeBright.png';

    $(document).ready(function () {
       var OS="windows"; //Default

       if (navigator.appVersion.indexOf("Win")!=-1) OS="windows";
       if (navigator.appVersion.indexOf("Mac")!=-1) OS="osx";
       if (navigator.platform.indexOf("MacPPC")!= -1 || navigator.platform.indexOf("PowerPC") != -1 ) OS="osxPPC";
       if (navigator.platform.indexOf("BeOS") !=-1) OS="beos";
       if (navigator.platform.indexOf("Linux")!=-1) {
            if((navigator.userAgent.indexOf("Ubuntu") != -1) ||
                (navigator.userAgent.indexOf("ubuntu") != -1)) OS="ubuntu";
            else if(navigator.userAgent.indexOf("Debian") != -1) OS="debian";
            else if(navigator.userAgent.indexOf("Mandriva") != -1) OS="mandriva";
            else if(navigator.userAgent.indexOf("Red Hat") != -1) OS="redhat";
            else if(navigator.userAgent.indexOf("Fedora") != -1) OS="fedora";
            else if(navigator.userAgent.indexOf("SUSE") != -1) OS="suse";
            else if(navigator.userAgent.indexOf("Gentoo") != -1) OS="gentoo";
            else OS="linux";
       };
       if (navigator.platform.indexOf("freebsd") != -1) OS="freebsd";
       if (navigator.platform.indexOf("FreeBSD") != -1) OS="freebsd";
       if (navigator.userAgent.indexOf("iPad") != -1  || navigator.userAgent.indexOf("iPhone") != -1 || navigator.userAgent.indexOf("iPod") != -1) OS ="ios";

       $('#downloadDetails').html("Version " + latestVersion + " &nbsp;&#8226;&nbsp; " + eval(OS+"Details.name") + " &nbsp;&#8226;&nbsp; " + eval(OS+"Details.size"));
       $('#downloadButton').attr('href',eval(OS+"Details.location"))
    });
    </script>
<?php
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

?>
