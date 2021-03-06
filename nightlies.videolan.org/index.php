<?php
   $title = "VLC media player continuous nightly builds";
   $new_design = true;
   $lang = "en";

   require($_SERVER["DOCUMENT_ROOT"]."/include/language.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

<div class="container">
    <h1 class="bigtitle">VLC media player nightly builds</h1>
    <div class="vlc-screenshot">
        <img width="246" height="170" src="screenshot.png" alt="VLC on Windows"/>
    </div>
    <div id="description">
        <h2>Welcome!</h2>

        <p>Here you can download experimental versions of VLC that are daily generated from the VLC code that is currently in development.<br/>Several issues that existed in previous versions of VLC might be fixed here, but since this version of VLC is not yet finished, you should expect other problems and issues.<br /></p>
    </div>

    <div class="alert alert-warning" role="alert">
        <strong>Warning!</strong> The nightly builds are <em>UNSTABLE</em> and may not work at all.
        There is absolutely <em>NO SUPPORT</em> for it from the VideoLAN Team.
    </div>

    <h2>Download nightly builds</h2>
    <p>You'll find the last development version in trunk-xxx directories, while branch-xxx directories contains bugfixes for the last released version.</p>
    <p>Select your operating system to download VLC binaries:</p>

    <div class="os1">
        <ul class="os" style="padding-bottom:10px">
            <li class='windows'  style="font-weight:bold"><a href='/build/win32/'>Windows (32 bits)</a></li>
            <li class='windows'  style="font-weight:bold"><a href='/build/win64/'>Windows (64 bits)</a></li>
            <li class='macosx'   style="font-weight:bold"><a href='/build/macosx-intel/'>macOS</a></li>
            <li class='iOS'      style="font-weight:bold"><a href='/build/iOS/'>iOS</a></li>
            <li class='tvOS'      style="font-weight:bold"><a href='/build/tvOS/'>tvOS</a></li>
            <li class='debian'  ><a href='#ubuntu'>Ubuntu</a></li>
            <li class='debian'   style="font-weight:bold"><a href='/build/snap/'>Universal Linux packages (snap)</a></li>
            <li class='android'  style="font-weight:bold"><a href='/build/android-armv7/'>Android (ARMv7-A)</a></li>
            <li class='android'  style="font-weight:bold"><a href='/build/android-armv8a/'>Android (ARMv8-A)</a></li>
            <li class='android'  style="font-weight:bold"><a href='/build/android-x86/'>Android (x86)</a></li>
            <li class='android'  style="font-weight:bold"><a href='/build/android-x86_64/'>Android (x86_64)</a></li>
            <li class='android'  style="font-weight:bold"><a href='/build/android-mips/'>Android (mips)</a></li>
            <li class='android'  style="font-weight:bold"><a href='/build/android-mips64/'>Android (mips64)</a></li>
        </ul>
    </div>
    <div class="os2">
        <ul class="os" style="padding-bottom:10px">
            <li style="background:none">The packages for the following operating systems<br /> are <b>not</b> automatically built every night:</li>
            <li class='suse'><a href='#suse'>openSUSE</a></li>
            <li class='gentoo'><a href='#gentoo'>Gentoo</a></li>
        </ul>
    </div>

    <div class="clearme">
        <h2>Source-code snapshots</h2>
        <p><a href="/build/source/">Download here</a> the tarballs (bz2) or use <a href="//wiki.videolan.org/Git">Git</a> to get the latest source code.</p>

        <h2><a id="ubuntu">Ubuntu PPA</a></h2>
        <p>The nightly builds for Ubuntu are available
        on <a href="//launchpad.net/">Launchpad</a> from
        the <a href="//launchpad.net/~videolan/+archive/master-daily"
        >VideoLAN team's <code>master-daily</code> PPA</a>.
        Once you have activated the correct repository, you can simply
        update the VLC (<code>vlc</code>) package.
        </p>
        <p>Those repositories contain a <code>vlc-dbg</code> package.
        We recommend you install it so you can produce useful backtraces
        if you need to report a bug.
        </p>

        <!--p><h2><a id="debian">Debian repositiories</a></h2>
        <p>This service is discontinued for the time being.
        Sorry for the inconvenience.
        </p>
        For Debian Sid I386 (unstable) add the following line to your sources.list:</p>
        <pre>deb http://nightlies.videolan.org/build/sid-i386/arch ./</pre>
        <p>For Debian Sid AMD64 (unstable) add the following line to your sources.list:</p>
        <pre>deb http://nightlies.videolan.org/build/sid-amd64/arch ./</pre>
        <p>For Ubuntu Intrepid I386 (unstable) add the following line to your sources.list:</p>
        <pre>deb http://nightlies.videolan.org/build/intrepid-i386/arch ./</pre>
        <p>For Ubuntu Intrepid AMD64 (unstable) add the following line to your sources.list:</p>
        <pre>deb http://nightlies.videolan.org/build/intrepid-amd64/arch ./</pre>
        <br />
        <p>Those repositories contain a <i>vlc-dbg</i> package that you
        can install so you can run <i>gdb</i> to provide usefull backtrace when reporting bugs.</p>
        <br /-->

        <h2><a id='suse'>VLC SVN Snapshots for openSUSE</a></h2>
        <p>For openSUSE 11.4, 12.3, 13.1, 13.2 and Tumbleweed we offer also RPMs from SVN snapshots. The packages are updated approximatively once per week.</p>
        <p>In order to test it, follow the usual instructions to install VLC as described on <a href="//www.videolan.org/vlc/download-suse.html">www.videolan.org/vlc/download-suse.html</a>,
         but replace the packagename <b>vlc</b> with <b>vlc-beta</b>. <i>You can only install one version, so either vlc OR vlc-beta. They conflict each other. </i></p>

        <h2><a id='gentoo'>VLC Git Ebuild for Gentoo</a></h2>
        <p>Alexis Ballier maintains Ebuild for the <a href='//sources.gentoo.org/viewcvs.py/gentoo-x86/media-video/vlc/vlc-9999.ebuild?rev=1.1&amp;view=log'>master (vlc-9999.ebuild)</a> Git branch in the Portage tree.</p>
        As it is a live ebuild it comes without any keyword so you'll have to put a '**' entry for it in package.keywords in order to be able to install it and, when appropriate, an entry in package.unmask .
    </div>

</div>

<?php footer(''); ?>
