<?php
   $language = "";
   $title = _("Official page for VLC media player, the Open Source video framework!");
   $new_design = true;
   $additional_js = array("/js/slimbox2.js", "/js/slick-init.js", "/js/slick.min.js");
   $additional_css = array("/js/css/slimbox2.css", "/style/slick.min.css");

   require($_SERVER["DOCUMENT_ROOT"]."/include/language.php");

   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
   
   function vlcscreenshot($img, $thumb, $desc) {
        echo"<div class='screenshot' style='overflow: hidden; width: 120px;'><a href='http://images1.videolan.org/vlc/screenshots/$img' rel='lightbox-vlc'><img
        src='//images1.videolan.org/vlc/screenshots/$thumb' alt='VLC media player - $desc' /></a>
        </div>";
    }
    
    function addos($name, $class, $url, $bold=false) {
        echo "<div class='$class'>"._("Get VLC for")." <a href='$url'><strong>$name</strong></a></div>";
    }
?>
<div class="container">
    <?php drawVLCdownloadSection("All"); ?>
    <div class="row">
        <div class="col-sm-6 padding-bottom-24">
           <h1 style='margin-bottom: 25px;' class='red'><?php echo _("Features"); ?></h1>
            <?php echo _("Simple, fast and powerful media player."); ?>
            <br /><br />
            <?php echo _("Plays everything: Files, Discs, Webcams, Devices and Streams."); ?>
            <br /><br />
            <?php echo _("Plays most codecs with no codec packs needed:")."<br />
                MPEG-2, MPEG-4, H.264, MKV, WebM, WMV, MP3..."; ?>
            <br /><br />
            <?php echo _("Runs on all platforms:")." Windows, Linux, Mac OS X, Unix..."; ?>
            <br /><br />
            <?php echo _("Completely Free, no spyware, no ads and no user tracking."); ?>
            <br /><br />
            <?php echo _("Can do media conversion and streaming."); ?>
            <br />
            <a class="extra-info-link2 padding-top" href='/vlc/features.html'><?php echo _("Discover all features"); ?></a> 
        </div>

        <div class="col-sm-6 padding-bottom-24">
            <h1 style='margin-bottom: 25px;' class='red'><?php echo _("Screenshots"); ?></h1>
            <?php
            vlcscreenshot( "1.0.0/VLC_Gnome.png",
                           "1.0.0/tm_VLC_Gnome.jpg",
                           "Linux - Gnome");
            vlcscreenshot( "1.0.0/vlc_101_w7_2.jpg",
                           "1.0.0/tm_vlc_101_w7_2.jpg",
                           "Windows 7 - Qt Interface" );
            vlcscreenshot( "1.0.0/vlc_101_w7_1.jpg",
                           "1.0.0/tm_vlc_101_w7_1.jpg",
                           "Windows 7 - Qt Interface" );
            vlcscreenshot( "1.0.0/vlc_101_w7.jpg",
                           "1.0.0/tm_vlc_101_w7.jpg",
                           "Windows 7 - Qt Interface" );
            vlcscreenshot( "1.0.0/VLC_Goldneye.jpg",
                           "1.0.0/tm_VLC_Goldneye.jpg",
                           "Windows Vista - Skins Interface" );
            vlcscreenshot( "1.0.0/VLC_Qt4.jpg",
                           "1.0.0/tm_VLC_Qt4.jpg",
                           "Windows Vista - Qt Interface" );
            vlcscreenshot( "appletv/Apple-TV-device-playback-large.jpg",
                           "appletv/tm_Apple-TV-device-playback.jpg",
                           "VLC on Apple TV" );
            vlcscreenshot( "2.2.0/vlc-2.2-macosx-playback-dark.jpg",
                           "2.2.0/tm_vlc-2.2-macosx-playback-dark.jpg",
                           "VLC on OS X" );
            vlcscreenshot( "2.2.0/vlc-2.2-macosx-audio-playback-dark.jpg",
                           "2.2.0/tm_vlc-2.2-macosx-audio-playback-dark.jpg",
                           "VLC on OS X" );
            vlcscreenshot( "2.2.0/vlc-2.2-macosx-playback.jpg",
                           "2.2.0/tm_vlc-2.2-macosx-playback.jpg",
                           "VLC on OS X" );
            vlcscreenshot( "2.2.0/vlc-ios-2.4-ipad-library-large.jpg",
                           "2.2.0/tm_vlc-ios-2.4-ipad-library.jpg",
                           "VLC on iPad" );
            ?>
            <div class="ltrClearLeft">
            </div>
            <a class="extra-info-link2 padding-top" style='padding-left: 5px;' href='/vlc/screenshots.html'><?php echo _("View all screenshots"); ?></a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h1><a name="download"><?php echo _("Official Downloads of VLC media player"); ?> </a></h1>
        </div>
        <div class="col-sm-4">
            <h2>Windows</h2>
            <?php addos( "Windows", "windows", "download-windows.html", true ); ?>
            <h2>Mac OS X</h2>
            <?php addos( "Mac&nbsp;OS&nbsp;X", "macosx", "download-macosx.html", true ); ?>
            <h2><?php echo _("Sources"); ?></h2>
            <p><?php echo _("You can also directly get the").' <strong><a href="download-sources.html">'
                ._("source code").'</a></strong>.</p>'; ?>
        </div>

        <div class="col-sm-4">
            <h2>GNU/Linux</h2>
            <?php
                addos( "Debian GNU/Linux", "debian", "download-debian.html" );
                addos( "Ubuntu", "ubuntu", "download-ubuntu.html" );
                addos( "Mint", "mint", "http://community.linuxmint.com/software/view/vlc" );
                addos( "openSUSE", "suse", "download-suse.html" );
                addos( "Gentoo Linux", "gentoo", "download-gentoo.html" );
                addos( "Fedora", "fedora", "download-fedora.html" );
                addos( "Arch Linux", "archlinux", "download-archlinux.html" );
                addos( "Slackware Linux", "slackware", "download-slackware.html" );
                addos( "Mandriva Linux", "mandrake", "download-mandriva.html" );
                addos( "ALT Linux", "altlinux", "download-altlinux.html" );
                addos( "Red Hat Enterprise Linux", "redhat", "download-redhat.html" );
            ?>
        </div>

        <div class="col-sm-4">
            <h2><?php echo _("Other Systems"); ?></h2>
            <?php
                addos( "FreeBSD", "freebsd", "download-freebsd.html" );
                addos( "NetBSD", "netbsd", "download-sources.html" );
                addos( "OpenBSD", "openbsd", "download-sources.html" );
                addos( "Solaris", "solaris", "download-sources.html" );
                addos( "Android", "android", "download-android.html" );
                addos( "iOS", "ios", "download-ios.html" );
                addos( "Apple TV", "appletv", "download-appletv.html" );
                addos( "QNX", "qnx", "download-sources.html" );
                addos( "Syllable", "syllable", "download-syllable.html" );
                addos( "OS/2", "os2", "http://hobbes.nmsu.edu/h-search.php?sh=1&button=Search&key=vlc&stype=all&sort=date&dir=%2Fpub%2Fos2%2Fapps%2Fmmedia%2Fvideo%2Fplayers" );
            ?>
        </div>
    </div>

<!--        <div style="margin-top: 30px;">
            <a href="/vlc/stats/downloads.php">VLC download statistics</a>
        </div>
-->
</div>
<?php
footer( '$Id', $alternate_lang);
sf_money();
?>
