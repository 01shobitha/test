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

<div style="color:#333333; font-family: Helvetica, Arial, sans-serif; font-size:40px; font-weight:bold; margin: 20px;">VLC 1.1.0</div>
<h2>The luggage</h2>
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
<h3>Source</h3>
<a href="http://sourceforge.net/projects/vlc/files/vlc-1.1.0-rc/vlc-1.1.0-rc.tar.bz2/download">VLC Source download</a>

<h2>Issues</h2>
<p>Please report issues on our <a href="http://forum.videolan.org">forum</a> in the <a href="http://forum.videolan.org/viewforum.php?f=34">1.1.0 section.</a> </p>


<?php footer('$Id: news.php 6098 2010-05-26 23:50:46Z jb $'); ?>
