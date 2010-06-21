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
    $version = '1.1.0';
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
<h2 style="text-shadow: 1px 1px 1px #666666">The luggage</h2>
</center>
    <table style="margin-bottom: 0"><tr>
      <td style="width: 300px;" id="img">
<?php /*         <script type="text/javascript"><!--
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
        <noscript> */ ?>
        <p class="center">
         <img src="http://images.videolan.org/images/screenshots/windows-crade.jpg" alt="VLC on Windows"/>
       </p><!--</noscript>-->
      </td>
      <td id="project_desc">
        <div class="panel" id="panel-vlc" style="display:block;">
            <div class="left">
<center>
<div style="margin: 20px 0 20px 20px; padding: 20px 0 30px 60px; background: url('http://images.videolan.org/images/vlc64x64.png') no-repeat left center;">
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
                           <div style="float: right; padding-top: 10px;"><span id="donate" style="font-size: 16px; color: #770088;">Donate with Paypal:</span>
                     <form action="https://www.paypal.com/cgi-bin/webscr" method="post" style="display: inline;">
                       <div style="display: inline;">
                          <input name="cmd" value="_xclick" type="hidden"/>
                          <input name="business" value="sponsor@videolan.org" type="hidden"/>
                          <input name="item_name" value="Development and communication of VideoLAN" type="hidden"/>
                          <input name="no_note" value="0" type="hidden"/>
                          <input name="currency_code" value="EUR" type="hidden"/>
                          <input name="tax" value="0" type="hidden"/>
                          <input name="submit" type="submit" alt="Donate money to VideoLAN via PayPal" value="&euro;" class="grey-button" style="height:24px;font-weight:bold;font-size:10pt; height: 100%;"/>
                        </div>
                    </form>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" style="display: inline;">
                       <div style="display: inline;">
                          <input name="cmd" value="_xclick" type="hidden"/>
                          <input name="business" value="sponsor@videolan.org" type="hidden"/>
                          <input name="item_name" value="Development and communication of VideoLAN" type="hidden"/>
                          <input name="no_note" value="0" type="hidden"/>
                          <input name="currency_code" value="USD" type="hidden"/>
                          <input name="tax" value="0" type="hidden"/>
                          <input name="submit" type="submit" alt="Donate money to VideoLAN via PayPal" value="$" class="grey-button" style="height:24px;font-weight:bold;font-size:10pt;height: 100%;"/>
                        </div>
                    </form>
                    </div>

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
<li>Support for new codecs, like Blu-Ray subtitles, MPEG-4 lossless and VP8</li>
</ul>
<p><b>NB</b>: so far, on Windows, VideoLAN is quite sad to be forced to recommend nVidia® GPU, until ATI® fixes their drivers on
Windows, and until VLC developer get access to some Intel® hardware supporting GPU decoding.</p>
<br />
<h2>Extensions</h2>
New add-ons and script framework so one can personalize its vlc.
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
<li>First part of the Video Output core rewrite</li>
<li>Removal or rewrite of dozens of modules, code simplification and tens of thousands of lines of code removed</li>
<li>Some functionalities that are less used are now moved to extensions</li>
<li>More assembly optimizatinons, especially SSSE3/SSE4 and ARM Neon</li>
<li>Fewer threads used</li>
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

<br />
<br />

<h1>Removal of SHOUTcast functionnality</h1>

<div class="press">
<h1>Press Release about Shoutcast Removal in VLC</h1>

<h2>Introduction</h2>

<p>SHOUTcast Radio is a web site which provides a directory of radio stations avalaible on the Internet.
It provides categorizations of such stations, so it is easier to find one that matches your interest.
According to users feedback, the integration of such directory inside VLC is one of the best features of the software.</p>

<p>Starting from VLC 1.1.0, the SHOUTcast module is not available on the distributed VLC any longer, because AOL Corporation 
is hindering Open Source Software.</p>

<h2>What happened?</h2>
<p>During the last year, the VLC developers have received several injunctions by e-mail from employees at AOL,
asking us to either comply to a license not compatible with free software or remove the SHOUTcast capability in VLC.</p>

<h3>Open source integral restriction</h3>
<p>The license states at Chapter 4.4:</p>
<blockquote style="font-style: italic;">
"When sold or distributed to End Users, the Integrated Product shall not [...] (c) incorporate any
Publically Available Software, in whole or in part, in a manner that may subject SHOUTcast Radio or
the SHOUTcast Radio Materials, in whole or in part, to all or part of the license obligations of any
Publically Available Software. As used herein, the term "Publicly Available Software" means any
software that contains, or is derived in any manner (in whole or in part) from, any software that is
distributed as free software, open source software or similar licensing or distribution models; and
that requires as a condition of use, modification or distribution that such software or other software
incorporated into, derived from or distributed with such software: (1) be disclosed or distributed in
source code form; (2) be licensed for the purpose of making derivative works; or (3) be
redistributable at no charge."</blockquote></p>

<h3>Forcing spyware and adware</h3>
<p>Moreover, the license forces us to integrate the spyware and adware based Shoutcast Radio Toolbar inside your browser as stated at chapter 6.6:</p>

<blockquote style="font-style: italic;">
"Integrated Product.
You agree to promote the SHOUTcast Radio toolbar on your web site and within the
documentation of the Integrated Product subject to placement agreed to by You and Nullsoft in
writing. If the Integrated Product is a software download, You agree to bundle the SHOUTcast
Radio toolbar with the Integrated Product."
</blockquote>
<br />
<br />
<br />
<h2>License incompatibility</h2>
<p>
Since it is obviously impossible for VLC to comply with such licensing terms, we had to remove the support from the default VLC.
Other free software multimedia players, like Amarok, are not able to comply with the license terms either and have therefore removed their 
SHOUTcast support.</p>

<p>However, we are providing a way to integrate the "icecast directory" that provides an open source equivalent to SHOUTcast.
If you know and like a radio station currently listed on the SHOUTcast directory, please make sure this radio is also available on the icecast directory
and let the radio owner know about how AOL treats their content.</p>

<p>We want to emphasise the fact that features like SHOUTcast or icecast browsing are now doable using our new extension framework and
you will find user-contributed extensions on http://addons.videolan.org/</p>

<h2>Complain to AOL</h2>
<p>Please direct your complaints about the removal of Shoutcast to the following responsible people from AOL Corporation:</p>
<ul class="blue-bullet">
<li>Faisal Sultan <a href="mailto:faisal.sultan@corp.aol.com">faisal.sultan@corp.aol.com</a></li>
<li>Saran Anurag <a href="mailto:anurag.saran@corp.aol.com">anurag.saran@corp.aol.com</a></li>
<li>Lisa Namerow <a href="mailto:Lisa.Namerow@corp.aol.com">Lisa.Namerow@corp.aol.com</a></li>
<li>Robert Wilson <a href="mailto:robert.wilson@corp.aol.com">robert.wilson@corp.aol.com</a></li>
</ul>

<h2>Contact VideoLAN</h2>
<p>To contact VideoLAN, see the contact page.</p>

<h2>License text</h2>
<p>The entire license can be found here: <a href="/press/LicenseAgreement_SHOUTcast.pdf">License in pdf</a></p>
</div>


<?php footer('$Id: news.php 6098 2010-05-26 23:50:46Z jb $'); ?>
