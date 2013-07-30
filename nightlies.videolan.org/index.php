<?php
   $title = "VLC media player continuous nightly builds";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="fullwidth">
    <h1 class="bigtitle">VLC media player nightly builds</h1>
    <div class="vlc-screenshot">
        <img width="246" height="170" src="screenshot.png" alt="VLC on Windows"/>
    </div>
    <div id="description">
        <h2>Welcome!</h2>

        <p>Here you can download experimental versions of VLC that are daily generated from the VLC code that is currently in development.<br/>Several issues that existed in previous versions of VLC might be fixed here, but since this version of VLC is not yet finished, you should expect other problems and issues.<br />If you are searching for nightly builds of other VideoLAN projects, have a look <a href="/projects.html">here</a>.</p>
    </div>

    <span style="color: #ff0000; font-size: 16px;">WARNING: The nightly builds are UNSTABLE and may not work at all.
    There is absolutely NO SUPPORT for it from the VideoLAN Team.
    </span>


    <h2>Download nightly builds</h2>
    <p>You'll find the last development version in trunk-xxx directories, while branch-xxx directories contains bugfixes for the last released version.</p>
    <p>Select your operating system to download VLC binaries:</p>

    <div class="os1">
        <ul class="os" style="padding-bottom:10px">
            <li class='windows'  style="font-weight:bold"><a href='/build/win32/?C=M;O=D'>Windows (32 bits)</a></li>
            <li class='windows'  style="font-weight:bold"><a href='/build/win64/?C=M;O=D'>Windows (64 bits)</a></li>
            <li class='macosx'  style="font-weight:bold"><a href='/build/macosx/?C=M;O=D'>Mac&nbsp;OS&nbsp;X PowerPC</a></li>
            <li class='macosx'  style="font-weight:bold"><a href='/build/macosx-intel/?C=M;O=D'>Mac&nbsp;OS&nbsp;X Intel</a></li>
            <li class='debian' ><a href='#ubuntu'>Ubuntu</a></li>
            <li class='android' style="font-weight:bold"><a href='/build/android-armv6-fpu/'>Android (ARMv6 with FPU)</a></li>
            <li class='android' style="font-weight:bold"><a href='/build/android-armv6-nofpu/'>Android (ARMv6 without FPU)</a></li>
            <li class='android' style="font-weight:bold"><a href='/build/android-armv7/'>Android (ARMv7-A)</a></li>
            <li class='android' style="font-weight:bold"><a href='/build/android-x86/'>Android (x86)</a></li>
        </ul>
    </div>
    <div class="os2">
        <ul class="os" style="padding-bottom:10px">
            <li style="background:none">The packages for the following operating systems<br /> are <b>not</b> automatically built every night:</li>
            <li class='suse'><a href='#suse'>openSuse 10.2 and 10.3</a></li>
            <li class='gentoo'><a href='#gentoo'>Gentoo</a></li>
        </ul>
    </div>

    <div class="clearme">
        <h2>Source-code snapshots</h2>
        <p><a href="/build/source/?C=M;O=D">Download here</a> the tarballs (bz2) or use <a href="http://wiki.videolan.org/Git">Git</a> to get the latest source code.</p>

        <h2><a id="ubuntu">Ubuntu PPA</a></h2>
        <p>The nightly builds for Ubuntu are available
        on <a href="http://launchpad.net/">Launchpad</a> from
        the <a href="https://launchpad.net/~videolan/+archive/master-daily"
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
        <p>For openSUSE 10.2 and 10.3 we offer also RPMs from SVN snapshots. The packages are updated approximatively once per week.</p>
        <p>In order to test it, follow the usual instructions to install VLC as described on <a href="http://www.videolan.org/vlc/download-suse.html">http://www.videolan.org/vlc/download-suse.html</a>,
         but replace the packagename <b>vlc</b> with <b>vlc-beta</b>. <i>You can only install one version, so either vlc OR vlc-beta. They conflict each other. </i></p>

        <h2><a id='gentoo'>VLC Git Ebuild for Gentoo</a></h2>
        <p>Alexis Ballier maintains Ebuild for the <a href='http://sources.gentoo.org/viewcvs.py/gentoo-x86/media-video/vlc/vlc-9999.ebuild?rev=1.1&amp;view=log'>master (vlc-9999.ebuild)</a> Git branch in the Portage tree.</p>
        As it is a live ebuild it comes without any keyword so you'll have to put a '**' entry for it in package.keywords in order to be able to install it and, when appropriate, an entry in package.unmask .
    </div>

</div>

<?php footer(''); ?>
