<?php
   $title = " - VLC 1.1.0 Release Candidate";
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
    $dl["Win32"] = array("$start_url/win32/vlc-$version-win32.exe/download", "Windows install, 18&nbsp;MB" );
    $dl["Win32-7z"] = array("$start_url/win32/vlc-$version-win32.7z/download", "Windows 7z, 16&nbsp;MB" );
    $dl["OSX-PPC"] = array("$start_url/macosx/vlc-$version-powerpc.dmg/download", "Mac OS X 10.5 (PowerPC), 19&nbsp;MB" );
    $dl["OSX-Intel"] = array( "$start_url/macosx/vlc-$version-intel.dmg/download","Mac OS X 10.5 or later (Intel 32bit), 19&nbsp;MB" );
    $dl["OSX-Intel64"] = array( "$start_url/macosx/vlc-$version-intel64.dmg/download","Mac OS X 10.5 or later (Intel 64bit), 19&nbsp;MB" );
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

<h1>VLC 1.1.0 - Release Candidate </h1>
<h2>Get it now! - Free</h2>

<div id="mainbox" style="overflow: hidden;">
    <table><tr>
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
          <h2 class="project_name">VLC</h2>
            <div class="left">
            <p>VLC is a <b>free</b> and <b>open source</b> cross-platform multimedia <b>player</b> and <b>framework</b>,
               that plays most multimedias files as well as DVD, Audio CD, VCD, and various streaming protocols.</p>
            <p>It is <b>simple</b> to use, yet very powerful and extendable.</p>
               <br />

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

            <div class="right">
             <h2>New Features</h2>
             <ul class="blue-bullet">
              <li><b>Simple</b>, Powerfull and <b>Fast</b></li>
              <li>Plays everything, <b>Files</b>, <b>Discs</b> and <b>Streams</b></li>
              <li>No codec packs needed</li>
              <li>Completly <b>Free</b></li>
              <li>0 Spyware, Ads or User Tracking</li>
              <li>Media <b>Converter</b> and <b>Streamer</b></li>
              <li>Windows, Linux, Mac, Unix...</li>
             </ul>
            </div>
        </div>
    </td>
    </tr>
    </table>
</div>



<?php footer('$Id: news.php 6098 2010-05-26 23:50:46Z jb $'); ?>
