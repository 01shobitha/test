<?php
   $title = "Official page for VLC media player, the Open Source video framework!";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
?>

        <div class="clearme" style='padding-top: 35px;'>
            <?php image( 'largeVLC.png', 'Large Orange VLC media player Traffic Cone Logo', 'projectImg' ); ?>
            <div style='float: left; width: 500px;'>
                <h1 class='bigtitle'>VLC media player</h1>
                <div class='projectDescription'>
                    VLC is a free and open source cross-platform multimedia player and
                    framework that plays most multimedia files as well as DVD, Audio CD,
                    VCD, and various streaming protocols.
                </div>
                <a class='extraInfoLink' href='/vlc/features.html'>Features</a>
                <a class='extraInfoLink' href='/vlc/screenshots.html'>Screenshots</a>
                <a class='extraInfoLink' href='/vlc/skins.php'>Skins</a>
                <a id='downloadButton' href='<?php echo $dlUrl; ?>'>
                    <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />
                    <span class='downloadText'>Download VLC</span>
                    <span id='downloadDetails' style='font-size: 12px; color: white;'>
                    Version <span id='downloadVersion'><?php echo $version ?>
                    </span>&nbsp;&#8226;&nbsp;<span id='downloadOS'>Windows</span>&nbsp;&#8226;&nbsp;<span id='downloadSize'>20MB</span>
                    </span>
                </a>
                <?php replaceDLinfos(); ?>
                <a class='extraInfoLink' href='#download' style="padding-left: 100px;">Other Systems and Versions</a>
            </div>
        </div>
        <div class="clearme" style='padding-top: 60px;'>
            <div style='float: left; width: 400px; color: #333333;'>
                <h1 style='margin-bottom: 25px;' class='red'>Features</h1>
                    <strong>Simple</strong>, Powerful and Fast
                <br /><br />
                    Plays <strong>everything</strong>, Files, Discs (DVD, CD, VCD), Devices and Streams
                <br /><br />
                    Plays most codecs with <b>no codec packs</b> needed
                <br /><br />
                    Completely <strong>Free</strong>, 0 Spyware, Ads or User Tracking
                <br /><br />
                    Best Mpeg2, x264, DivX player
                <br /><br />
                    Works on <strong>most platforms</strong>: Windows, Linux, Mac, Unix...
                <br /><br />
                    Media Converter and Streamer
                <br />
                <a class='extraInfoLink' href='/vlc/features.html'>Discover all features</a>
            </div>

<?php
function vlcscreenshot($img,$thumb, $desc){
    echo"<div class='screenshot' style='overflow: hidden; width: 120px;'><a href='http://images1.videolan.org/vlc/screenshots/$img'><img
    src='http://images1.videolan.org/vlc/screenshots/$thumb' alt='VLC media player - $desc' /></a>
    </div>";
}
?>

            <div style='float: right; width: 450px; padding-left: 70px;'>
                <h1 style='padding-left: 5px; margin-bottom: 25px;' class='red'>Screenshots</h1>
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
                ?>
                <div style='clear: left;'></div>
                <a class='red' style='display: block; padding-top: 10px; padding-left: 5px; font-size: 12px;' href='/vlc/screenshots.html'>View all screenshots</a>
            </div>
        </div>

<?php
function addos( $name, $class, $url, $bold=false )
{
    echo "<div class='$class'>Get VLC for <a href='$url'><strong>$name</strong></a></div>";
}
?>
        <div class='tricolumn'>
            <h1><a name="download">Official Downloads of VLC media player </a></h1>
            <div class="onecolumn">
               <h2>Windows</h2>
                <?php addos( "Windows", "windows", "download-windows.html", true ); ?>
               <h2>Mac OS X</h2>
                <?php addos( "Mac&nbsp;OS&nbsp;X", "macosx", "download-macosx.html", true );
                      addos( "iOS", "ios", "download-ios.html" ); ?>
               <h2>Sources</h2>
                  <p>You can also directly get the <strong><a href="download-sources.html">
                  source code</a></strong>.</p>
            </div>

            <div class="onecolumn">
               <h2>GNU/Linux</h2>
                <?php
                  addos( "Debian GNU/Linux", "debian", "download-debian.html" );
                  addos( "Ubuntu", "ubuntu", "download-ubuntu.html" );
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

            <div class='lastcolumn'>
                  <h2>Other OS</h2>
               <?php
                 addos( "FreeBSD", "freebsd", "download-freebsd.html" );
                 addos( "NetBSD", "netbsd", "download-sources.html" );
                 addos( "OpenBSD", "openbsd", "download-sources.html" );
                 addos( "Solaris", "solaris", "download-sources.html" );
                 addos( "Android", "android", "download-android.html" );
                 addos( "QNX", "qnx", "download-sources.html" );
                 addos( "Syllable", "syllable", "download-syllable.html" );
                 addos( "OS/2", "os2", "http://hobbes.nmsu.edu/h-search.php?sh=1&button=Search&key=vlc&stype=all&sort=date&dir=%2Fpub%2Fos2%2Fapps%2Fmmedia%2Fvideo%2Fplayers" ); ?>
            </div>
        </div>
        <div style='clear: both;'></div>
        <div style="margin-top: 30px;">
            <a href="/stats/downloads.html">VLC download statistics</a>
        </div>

<?php footer(); ?>
