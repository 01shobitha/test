<?php
   $title = "VLC 1.1.0 Test Release Candidate";
   $lang = "en";
   $menu = array( "project", "news" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
?>

<?php
function DoDL2( $os, $with_js=1 )
{
    $dl = array();
    $version = '1.1.0-rc';
    $start_url="http://sourceforge.net/projects/vlc/files/vlc-$version";
    $dl["Win32"] = array( "http://download.videolan.org/pub/testing/vlc-1.1.0-rc/win32/vlc-1.1.0-rc-win32.exe", "Windows install" );
    $dl["Win32-7z"] = array( "http://download.videolan.org/pub/testing/vlc-1.1.0-rc/win32/vlc-1.1.0-rc-win32.7z", "Windows 7z" );
    $dl["Linux"] =array("$start_url/vlc-$version.tar.bz2/download", "Linux and other OSes" );
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
        echo "document.writeln( '<div class=\"dl-button\"><a " ;
        echo "href=\"".$dl[$os][0]."\">Download VLC ".$version;
        echo "</a></div><span class=\"dl-info\">".$dl[$os][1]."</span> ');\n";
    }
    else
    {
        echo "<div><div class=\"dl-button\"> <a " ;
        echo "href=\"".$dl[$os][0]."\">Download VLC ".$version;
        echo "</a></div><div class=\"dl-info\">".$dl[$os][1]."</div></div>\n";
    }
}
?>


<div id="mainbox" style="overflow: hidden; padding-bottom: 0px; ">
<center>

<div style="text-shadow: 4px 4px 3px #666666; color:#333333; font-family: Helvetica, Arial, sans-serif; font-size:40px; font-weight:bold; margin: 20px;">VLC 1.1.0</div>
<h2 style="text-shadow: 2px 2px 1px #666666">The luggage</h2>
</center>
    <table style="margin-bottom: 0"><tr>
      <td style="width: 300px;" id="img">
         <script type="text/javascript"><!--
            if( <?php echo $is_win32; ?> )
            { <?php Screenshot( "Win32" ); ?> }
            else if( <?php echo $is_beos; ?> )
            { <?php Screenshot( "BeOS" ); ?> }
            else if( <?php echo $is_linux; ?> )
            { <?php Screenshot( "Linux" ); ?> }
            else if( <?php echo $is_osx; ?> )
            { <?php Screenshot( "OSX" ); ?> }
            else
            { <?php Screenshot("Win32" ); ?> }
        --></script>
        <noscript><p class="center">
         <img src="http://images.videolan.org/images/screenshots/vlc-win32.jpg" alt="VLC on Windows"/>
       </p></noscript>
      </td>
      <td id="project_desc">
        <div class="panel" id="panel-vlc" style="display:block;">
            <div class="left">
<center>
<div style="margin: 20px 0 20px 20px; padding: 20px 0 30px 60px; background: url('http://www.videolan.org/images/vlc64x64.png') no-repeat left center;">
<span style="padding-bottom: 60px; font-size:18px; font-weight: bold; line-height:19px;">The <b>new</b> cone. Always&nbsp;easy. Better.</span> </div>
               <div style="border: 0px red solid; margin: 0 auto; font-size: 21px; width: 13em;">
                 <script type="text/javascript"><!--
                if ( <?php echo $is_win32; ?> ) { <?php DoDL2("Win32"); DoDL2("Win32-7z"); ?> }
                else if( <?php echo $is_beos; ?> ) { <?php DoDL2("BeOS"); ?> }
                else if( <?php echo $is_linux; ?> )
                {
                  if( <?php echo $is_ubuntu; ?> ) { <?php DoDL2("Ubuntu"); ?> }
                  else if( <?php echo $is_fedora; ?> ) { <?php DoDL2("Fedora"); ?>}
                  else if( <?php echo $is_suse; ?> ) { <?php DoDL2("Suse"); ?> }
                  else if( <?php echo $is_debian; ?> ) { <?php DoDL2("Debian"); ?> }
                  else if( <?php echo $is_mandriva; ?> ) { <?php DoDL2("Mandriva"); ?> }
                  else if( <?php echo $is_redhat; ?> ) { <?php DoDL2("RedHat"); ?> }
                  else if( <?php echo $is_gentoo; ?> ) { <?php DoDL2("Gentoo"); ?> }
                  else { <?php DoDL2("Linux"); ?> }
                }
                else if( <?php echo $is_freebsd; ?> ) { <?php DoDL2("FreeBSD"); ?> }
                else if( <?php echo $is_osx; ?> )
                {
                  if( <?php echo $is_ppc; ?> ) { <?php DoDL2("OSX-PPC"); ?> }
                  else if( <?php echo $is_mactel; ?> ) { <?php DoDL2("OSX-Intel");?>}
                  else { <?php DoDL2("OSX-PPC"); DoDL2("OSX-Intel"); ?> }
                }
                else if( navigator.platform.indexOf("Mac") != -1 )
                {
                document.writeln( "<p>Haha Mac OS 9 is dead! (if you\\\'re not using Mac OS 9 ... please write us a mail so we can fix this OS detection script)</p>'" );
                }
                else
                {
                <?php DoDL2("Win32"); DoDL2("OSX-PPC"); DoDL2("OSX-Intel"); ?>
                }
                --></script>
                <noscript>
                  <?php DoDL2("Win32",0);DoDL2("OSX-PPC",0);DoDL2("OSX-Intel",0); ?>
                </noscript>
                 <div class="dl-other"><a href="/vlc/">Other Systems, Versions</a></div>
                </div>
            </div>

           <div class="right" style="text-align: right; color: #666;">
          <h2 class="project_name">VLC media player</h2>
            <p>VLC is a <b>free</b> and <b>open source</b> cross-platform multimedia <b>player</b> and <b>framework</b>,
               that plays most multimedias files, medias and streaming protocols.</p>
            <p>It is <b>simple</b> to use, yet very powerful and extendable.</p>

          <h2 class="project_name">Volunteer work! Help us!</h2>
           <p>VLC is done by a <b>small</b> team of volunteers.</p>
           <p>Please, help us!</p>
        </div>
    </td>
    </tr>
    </table>
    <br />
    <br />
</div>

<h1>What's new?</h1>

<div style="float:left; width: 50%;">
<h2>Ready for HD</h2>
<ul class=blue-bullet>
<li>GPU decoding on Windows Vista and 7, using DxVA2 for H.264, VC-1 and MPEG-2 </li>
<li>GPU decoding on GNU/Linux, using VAAPI for H.264, VC-1 and MPEG-2</li>
<li>DSP decoding using <a href="http://www.khronos.org/openmax/">OpenMax IL</a>, for compatible embedded devices</li>
<li>Improved support for MKV HD, including seeking fixes, and 7.1 channels codecs</li>
<li>Support for new codecs, like Blu-Ray subtitles, MPEG-4 lossless, Vorbis 7.1 and VP8</li>
</ul>
<p><b>NB</b>: so far, on Windows, VideoLAN is quite sad to be forced to recommend nVidia® GPU, until ATI® fixes its drivers on
Windows and until VideoLAN can access to some Intel Hardware supporting GPU decoding.</p>
<h2>Extensions</h2>
New add-ons and script framework so one can personnalize its vlc.
<ul class=blue-bullet>
<li>Written in lua</li>
<li>2 main types of scripts:
<ul class=blue-bullet>
<li>content add-ons, integrated in the playlist</li>
<li>functionnalities extensions, like metadata searching on the web, or subtitles look-ups</li>
</ul>
</li>
<li>Very Simple</li>
</ul>
<h2>Web improvements</h2>
<ul class=blue-bullet>
<li>Support for WebM decoding and encoding</li>
<li>Improved web plugins</li>
<li>Better streaming capabilities</li>
</ul>
</div>

<div style="float:right; width: 48%;">
<h2>Better Audio experience</h2>
<ul class=blue-bullet>
<li>Integrated playlist in the Qt4 interface</li>
<li>Multiple views (like album art) in the playlist in the Qt4 interface</li>
<li>Support for AMR-NB, Mpeg-4 ALS, Vorbis 6.1/7.1, FLAC 6.1/7.1 and WMAS</li>
<li>CDDB and CD-Text works now on the Windows port when listening to CD-Audio</li>
<li>Support for DVD-Audio files (.aob)</li>
<li>Improved meta-data and album-art support</li>
</ul>
<h2>Faster, Leaner</h2>
<ul class=blue-bullet>
<li>Faster decoding, with up to 40% speed-ups, in HD resolutions</li>
<li>Video Output core rewrite in progress</li>
<li>Removal or rewrite of dozens of modules, code simplification and 10 of thousands of lines of code removed</li>
<li>Some functionnalities that are less used are now moved to extensions</li>
<li>More assembly code used, notably SSE3/SSE4 and Neon</li>
<li>Less threads used</li>
</ul>
<h2>Better for developers</h2>
<ul class=blue-bullet>
<li>Simplified and improved libVLC, removal of exceptions for better C integration</li>
<li>New phonon-backend for Qt applications, on all platforms</li>
<li>New C++ bindings</li>
<li></li>
</ul>
</div>

<div style="clear:both;"></div>
<h1></h1>
<h2>Complete Changelog</h2
<a href="/developers/vlc-branch/NEWS">Changelog for 1.1.0 </a>

<h2>Direct links</h2>
If you link to this release, please use the following links.
<h3>Source</h3>
<a href="http://sourceforge.net/projects/vlc/files/vlc-1.1.0/vlc-1.1.0.tar.bz2/download">VLC Source download</a>
<h3>Win32</h3>
<h3>MacOS</h3>


<?php footer('$Id: news.php 6098 2010-05-26 23:50:46Z jb $'); ?>
