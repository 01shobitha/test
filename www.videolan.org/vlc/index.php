<?php
   $language = "";
   $title = _("Official page for VLC media player, the Open Source video framework!");

   $additional_js = array("/js/slimbox2.js");
   $additional_css= array("/js/css/slimbox2.css");

   $alternate_lang = array( "an", "ast", "bn_IN", "bs", "cs", "cy", "da", "de", "en", "es", "et", "fr", "gd", "gl", "gu", "he", "hi", "hr", "is", "it", "ja", "km", "kn", "lt", "mr", "my", "nb", "nl", "or", "pl", "pt", "pt_BR", "ru", "sk", "sr", "th", "tr", "uk", "ur", "vi", "wa", "zh" );

   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
?>

        <div class="clearme" style='padding-top: 26px;'>
            <?php image( 'largeVLC.png', 'Large Orange VLC media player Traffic Cone Logo', 'projectImg' ); ?>
            <div style='float: left; width: 500px;'>
                <h1 class='bigtitle'>VLC media player</h1>
                <div class='projectDescription'>
                   <?php echo _("VLC is a free and open source cross-platform multimedia player and framework that plays most multimedia files as well as DVD, Audio CD, VCD, and various streaming protocols."); ?>
                </div>
                <a class='extraInfoLink' href='/vlc/features.html'><?php echo _("Features"); ?></a>
                <a class='extraInfoLink' href='/vlc/screenshots.html'><?php echo _("Screenshots"); ?></a>
                <a class='extraInfoLink' href='/vlc/skins.php'><?php echo _("Skins"); ?></a>
                <a id='downloadButton' href='<?php echo $dlUrl; ?>'>
                    <img style='position: absolute; top: -10px; left: -10px;' src='/images/downloadVLC.png' alt='Download VLC icon' />
                    <span class='downloadText'><?php echo _("Download VLC"); ?></span>
                    <span id='downloadDetails' style='font-size: 12px; color: white;'>
                    Version <span id='downloadVersion'><?php echo $win32version ?>
                    </span>&nbsp;&#8226;&nbsp;<span id='downloadOS'>Windows</span>&nbsp;&#8226;&nbsp;<span id='downloadSize'>20MB</span>
                    </span>
                </a>
                <?php replaceDLinfos(); ?>
                <a class='extraInfoLink' href='#download' style="padding: 12px 40px 0px 100px;"><?php echo _("Other Systems");?></a>
            </div>
        </div>
        <div class="clearme" style='padding-top: 45px;'>
            <div style='float: left; width: 400px; color: #333333;'>
                <h1 style='margin-bottom: 25px;' class='red'><?php echo _("Features"); ?></h1>
                    <?php echo _("Simple, fast and powerful media player."); ?>
                <br /><br />
                    <?php echo _("Plays everything: Files, Discs, Webcams, Devices and Streams."); ?>
                <br /><br />
                    <?php echo _("Plays most codecs with no codec packs needed:")."<br />
                    MPEG-2, DivX, H.264, MKV, WebM, WMV, MP3..."; ?>
                <br /><br />
                    <?php echo _("Runs on all platforms:")." Windows, Linux, Mac OS X, Unix..."; ?>
                <br /><br />
                    <?php echo _("Completely Free, 0 spyware, 0 ads and no user tracking."); ?>
                <br /><br />
                    <?php echo _("Can do media conversion and streaming."); ?>
                <br />
                <a class='extraInfoLink' href='/vlc/features.html'><?php echo _("Discover all features"); ?></a>
            </div>

<?php
function vlcscreenshot($img,$thumb, $desc){
    echo"<div class='screenshot' style='overflow: hidden; width: 120px;'><a href='http://images1.videolan.org/vlc/screenshots/$img' rel='lightbox-vlc'><img
    src='//images1.videolan.org/vlc/screenshots/$thumb' alt='VLC media player - $desc' /></a>
    </div>";
}
?>

            <div style='float: right; width: 450px; padding-left: 70px;'>
                <h1 style='padding-left: 5px; margin-bottom: 25px;' class='red'><?php echo _("Screenshots"); ?></h1>
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
                <a class='red' style='display: block; padding-top: 10px; padding-left: 5px; font-size: 12px;' href='/vlc/screenshots.html'><?php echo _("View all screenshots"); ?></a>
            </div>
        </div>

<?php
function addos( $name, $class, $url, $bold=false )
{
    echo "<div class='$class'>"._("Get VLC for")." <a href='$url'><strong>$name</strong></a></div>";
}
?>
        <div class='tricolumn'>
            <h1><a name="download"><?php echo _("Official Downloads of VLC media player"); ?> </a></h1>
            <div class="onecolumn">
              <h2>Windows</h2>
                <?php addos( "Windows", "windows", "download-windows.html", true ); ?>
              <h2>Mac OS X</h2>
                <?php addos( "Mac&nbsp;OS&nbsp;X", "macosx", "download-macosx.html", true ); ?>
              <h2><?php echo _("Sources"); ?></h2>
                <p><?php echo _("You can also directly get the").' <strong><a href="download-sources.html">'
                  ._("source code").'</a></strong>.</p>'; ?>
            </div>

            <div class="onecolumn">
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

            <div class='lastcolumn'>
              <h2><?php echo _("Other Systems"); ?></h2>
                <?php
                  addos( "FreeBSD", "freebsd", "download-freebsd.html" );
                  addos( "NetBSD", "netbsd", "download-sources.html" );
                  addos( "OpenBSD", "openbsd", "download-sources.html" );
                  addos( "Solaris", "solaris", "download-sources.html" );
                  addos( "Android", "android", "download-android.html" );
                  addos( "iOS", "ios", "download-ios.html" ); 
                  addos( "QNX", "qnx", "download-sources.html" );
                  addos( "Syllable", "syllable", "download-syllable.html" );
                  addos( "OS/2", "os2", "http://hobbes.nmsu.edu/h-search.php?sh=1&button=Search&key=vlc&stype=all&sort=date&dir=%2Fpub%2Fos2%2Fapps%2Fmmedia%2Fvideo%2Fplayers" );
                ?>
            </div>
        </div>
        <div style='clear: both;'></div>

<!--        <div style="margin-top: 30px;">
            <a href="/vlc/stats/downloads.php">VLC download statistics</a>
        </div>
-->

<?php
footer( '$Id', $alternate_lang);
sf_money();
?>

