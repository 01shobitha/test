<?php
    $is_win32 = "navigator.platform.indexOf(\"Win32\") != -1";

    $is_ie = "navigator.userAgent.indexOf(\"MSIE\") != -1";

    $is_beos = "navigator.platform.indexOf(\"BeOS\") != -1";

    $is_linux = "navigator.platform.indexOf(\"Linux\") != -1";

    $is_ubuntu = "navigator.userAgent.indexOf(\"Ubuntu\") != -1 ||".
         " navigator.userAgent.indexOf(\"ubuntu\") != -1 ";
    $is_debian = "navigator.userAgent.indexOf(\"Debian\") != -1";
    $is_mandriva = "navigator.userAgent.indexOf(\"Mandriva\") != -1";
    $is_redhat = "navigator.userAgent.indexOf(\"Red Hat\") != -1";
    $is_fedora = "navigator.userAgent.indexOf(\"Fedora\") != -1";
    $is_suse = "navigator.userAgent.indexOf(\"SUSE\") != -1";
    $is_gentoo = "navigator.userAgent.indexOf(\"gentoo\") != -1";

    $is_freebsd = " navigator.userAgent.indexOf(\"freebsd\") != -1 ".
         "|| navigator.userAgent.indexOf(\"FreeBSD\") != -1" ;

    $is_osx = "navigator.userAgent.indexOf(\"Mac OS X\") != -1  ||" .
          "navigator.userAgent.indexOf(\"MSIE 5.2\") != -1 ||" .
          "( navigator.userAgent.indexOf(\"Mac\")  &&" .
              "  navigator.userAgent.indexOf(\"Opera\") )";

    $is_ppc = "navigator.platform.indexOf(\"MacPPC\") != -1".
        "|| navigator.platform.indexOf(\"PowerPC\") != -1";
    $is_mactel = "navigator.platform.indexOf(\"Intel\") != -1";

function Screenshot( $os )
{
    $scr = array();
    $scr["Win32"] = array( "http://images.videolan.org/images/screenshots/vlc-win32.png" ,
            "VLC on Windows", 296, 270 );
    $scr["Linux"] = array( "http://images.videolan.org/images/screenshots/vlc-linux.jpg" ,
            "VLC on Linux", 300, 233 );
    $scr["OSX"] = array( "http://images.videolan.org/images/screenshots/vlc-osx.jpg" ,
            "VLC on Mac OS X", 300, 200 );
    echo "document.writeln('<img width=\"".$scr[$os][2]."\" height=\"".$scr[$os][3]."\" src=\"".$scr[$os][0]."\" alt=\"";
    echo $scr[$os][1]."\" />');";
}

function DoDL( $os, $with_js=1 )
{
    $dl = array();
    $version = '1.0.5';
    $dl["Win32"] = array("/mirror-geo.php?file=vlc/$version/win32/vlc-$version-win32.exe", "Windows, 17&nbsp;MB" );
    $dl["OSX-PPC"] = array("/mirror-geo.php?file=vlc/$version/macosx/vlc-$version-powerpc.dmg", "Mac OS X 10.5 (PowerPC), 19&nbsp;MB" );
    $dl["OSX-Intel"] = array( "/mirror-geo.php?file=vlc/$version/macosx/vlc-$version-intel.dmg","Mac OS X 10.5 or later (Intel 32bit), 19&nbsp;MB" );
    $dl["Linux"] =array("/vlc/", "Linux and other OSes" );
    $dl["Debian"] = array( "/vlc/download-debian.html", "Debian GNU/Linux" );
    $dl["Ubuntu"] = array( "/vlc/download-ubuntu.html", "Ubuntu Linux");
    $dl["Fedora"] = array( "/vlc/download-fedora.html", "Fedora Linux");
    $dl["RedHat"] = array( "/vlc/download-redhat.html", "RedHat Linux");
    $dl["Mandriva"] = array( "/vlc/download-mandriva.html", "Mandriva Linux" );
    $dl["Gentoo"] = array( "/vlc/download-gentoo.html", "Gentoo Linux" );
    $dl["Suse"] = array ("/vlc/download-suse.html", "Suse Linux" );
    $dl["BeOS"] =array ("/vlc/download-beos.html", "BeOS" );
    $dl["FreeBSD" ] = array( "/vlc/download-freebsd.html", "FreeBSD" );

    if( $with_js == 1 )
    {
        echo "document.writeln( '<p><a class=\"download\" " ;
        echo "href=\"".$dl[$os][0]."\">Download VLC ".$version;
        echo "</a><br /><span class=\"dl-info\">(".$dl[$os][1].")</span></p>');\n";
    }
    else
    {
        echo "<p><a class=\"download\" " ;
        echo "href=\"".$dl[$os][0]."\">Download VLC";
        echo "</a><br /><span class=\"dl-info\">(".$dl[$os][1].")</span><br /></p>\n";
    }
}
?>
