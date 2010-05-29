<?php
   $title = " - VLC 1.1.0 Test Release Candidate";
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

<h1>VLC 1.1.0 'The luggage' - Release Candidate </h1>
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
          <h2 class="project_name">VLC <b>TESTING</b></h2>
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
              <li><b>GPU</b> and <b>DSP</b> decoding, depending on the platform</li>
              <li>Faster and more stable</li>
              <li>New codecs and <b>HD codecs</b> enhancements</li>
              <li><b>Webm</b> and <b>VP8</b> support</li>
              <li><b>MKV</b>, mp4 and avi improvements</li>
              <li><b>Extensions</b></li>
              <li>Important code cleanup and rewrite</li>
              <li>Interface and playlist reworked</li>
              <li>Completely <b>Free</b></li>
             </ul>
            </div>
        </div>
    </td>
    </tr>
    </table>
    <br />
    <br />
</div>

<h2>Complete Changelog</h2
<a href="/developers/vlc-branch/NEWS">Changelog for 1.1.0 </a>

<h2>Source</h2>
<div style="width:60%;">
<div class="dl-button">
<a href="http://sourceforge.net/projects/vlc/files/vlc-1.1.0-rc/vlc-1.1.0-rc.tar.bz2/download">
Download VLC 1.1.0-RC</a></div></div>
    <br />
    <br />

<h2>Direct links</h2>
If you link to this release, please use the following links.
<h3>Win32</h3>
<a href="http://sourceforge.net/projects/vlc/files/vlc-1.1.0-rc/win32/vlc-1.1.0-rc-win32.exe/download">VLC installer download</a><br />
<a href="http://sourceforge.net/projects/vlc/files/vlc-1.1.0-rc/win32/vlc-1.1.0-rc-win32.7z/download">VLC 7z (no-install) download</a><br />
<a href="http://sourceforge.net/projects/vlc/files/vlc-1.1.0-rc/win32/vlc-1.1.0-rc-win32.zip/download">VLC zip (no-install) download</a><br />

<h3>OS X</h3>
<a href="http://sourceforge.net/projects/vlc/files/vlc-1.1.0-rc/macosx/vlc-1.1.0-rc-intel.dmg/download">VLC OSX (intel) download</a><br />
<a href="http://sourceforge.net/projects/vlc/files/vlc-1.1.0-rc/macosx/vlc-1.1.0-rc-intel64.dmg/download">VLC OSX (intel64) download</a><br />
<a href="http://sourceforge.net/projects/vlc/files/vlc-1.1.0-rc/macosx/vlc-1.1.0-rc-powerpc.dmg/download">VLC OSX PPC download</a><br />

<h3>Source</h3>
<a href="http://sourceforge.net/projects/vlc/files/vlc-1.1.0-rc/vlc-1.1.0-rc.tar.bz2/download">VLC Source download</a>

<h2>Issues</h2>
<p>Please report issues on our <a href="http://forum.videolan.org">forum</a> in the <a href="http://forum.videolan.org/viewforum.php?f=34">1.1.0 section.</a> </p>


<?php footer('$Id: news.php 6098 2010-05-26 23:50:46Z jb $'); ?>
