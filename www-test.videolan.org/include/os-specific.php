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
	$scr["Win32"] = array( "/images/screenshots/vlc-win32.png" , 
			       "VLC on Windows" );
	$scr["Linux"] = array( "/images/screenshots/vlc-linux.png" ,
			       "VLC on Linux" );
	$scr["OSX"] = array( "/images/screenshots/vlc-osx.png" ,
	   		     "VLC on MacOS X" );
	echo "document.writeln('<img src=\"".$scr[$os][0]."\" alt=\"";
	echo $scr[$os][1]."\" />');";
    }
    function DoDL( $os, $with_js=1 )
    {
	$dl = array();
	$dl["Win32"] = array("/mirror.php?mirror=http://downloads.videolan.org/pub/videolan/&amp;file=vlc/0.8.5/win32/vlc-0.8.5-win32.exe", "Windows (7.9MB)" );
	$dl["OSX-PPC"] = array("/mirror.php?mirror=http://downloads.videolan.org/pub/videolan/&amp;file=vlc/0.8.5/macosx/powerpc/vlc-0.8.5.dmg", "MacOS X PowerPC (12 MB)" );
	$dl["OSX-Intel"] = array( "/mirror.php?mirror=http://downloads.videolan.org/pub/videolan/&amp;file=vlc/0.8.5/macosx/intel/vlc-0.8.5-intel.dmg","MacOS X Intel (13 MB)" );
	$dl["Linux"] =array("/vlc/", "Linux ad other OSes" );
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
		echo "href=\"".$dl[$os][0]."\">Download Now";
		echo "</a> for ".$dl[$os][1]."</p>');";
	}
	else
	{
		echo "<p><a class=\"download\" " ;
		echo "href=\"".$dl[$os][0]."\">Download Now";
		echo "</a> for ".$dl[$os][1]."</p>";
	}
    }
?>
