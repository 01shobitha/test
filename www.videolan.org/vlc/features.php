<?php
   $title = "VLC - Features";
   $lang = "en";
   $menu = array( "vlc", "features" );
   $additional_css = array("/vlc/features.css");
   $additional_js = array("/js/prototype.js","/js/scriptaculous.js","/js/features.js");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

function writeonefeature( $a )
{
    if ( $a == "yes" )
       echo '<td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>';
    else if ($a == "no" )
       echo '<td class="no"><img src="/images/features/cross.png" alt="No" /></td>';
    else if ( $a == "part" )
       echo '<td class="partial"><img src="/images/features/partial.png" alt="Partial" /></td>';
    else if ( $a == "unt" )
       echo '<td class="partial"><img src="/images/features/untested.png" alt="Untested" /></td>';
    else if ($a == "none" )
       echo '<td class="none">-</td>';
    echo "\n";
}

function writefeature_simple( $title, $windows, $mac, $linux, $beos, $bsd, $fam )
{
   echo '<td class="type">'.$title.'</td>';
   writeonefeature( $windows );
   writeonefeature( $mac );
   writeonefeature( $linux );
   writeonefeature( $beos );
   writeonefeature( $bsd );
   writeonefeature( $fam );
   echo "</tr>\n";
}

function writefeature( $title, $windows, $mac, $linux, $beos, $bsd, $fam )
{
   echo "<tr>\n";
   writefeature_simple( $title, $windows, $mac, $linux, $beos, $bsd, $fam );
}

function headers( $extra )
{
?>
       <tr>
            <th class="type"></th>
<?php  if ( $extra == "yes" ) echo  '<th class="category"></th>'; ?>
            <th class="th-os"><a href="/vlc/download-windows.html">
              <img src="http://images.videolan.org/images/icons/winvista.png" alt="Windows" height="32" width="32" />
            </a></th>
            <th class="th-os"><a href="/vlc/download-macosx.html">
              <img src="http://images.videolan.org/images/icons/macosx.png" alt="Mac OS X" width="32" height="32" />
            </a></th>

            <th class="th-os"><a href="/vlc/index.html">
              <img src="http://images.videolan.org/images/icons/linux.png" alt="Linux" width="32" height="32" />

            </a></th>
            <th class="th-os"><a href="/vlc/download-beos.html">
              <img src="http://images.videolan.org/images/icons/beos.png" alt="BeOS" width="32" height="32" />
            </a></th>
            <th class="th-os"><a href="/vlc/download-sources.html">
              <img src="http://images.videolan.org/images/icons/freebsd.png" alt="FreeBSD" width="32" height="32" />

              <img src="http://images.videolan.org/images/icons/openbsd.png" alt="OpenBSD" width="32" height="32" />
            </a></th>
            <th class="th-os"><a href="/vlc/download-familiar.html">
              <img src="http://images.videolan.org/images/icons/familiar.png" alt="Familiar Linux"
                   width="32" height="32" />
            </a></th>
          </tr>
<?php
}
?>

<h2>VLC playback Features</h2>
<table class="feature-table">
  <tr>
    <td class="feature-table-lefttop">&nbsp;</td>
    <td class="feature-table-top">&nbsp;</td>
    <td class="feature-table-righttop">&nbsp;</td>
  </tr>
  <tr>
    <td class="feature-cat-list">
    <!--Categories-->
    <div class="feature-cat-sel" onclick="openFeatures('input')" id="cat-input">Input formats</div>
    <div class="feature-cat" onclick="openFeatures('video')" id="cat-video">Video formats</div>
    <div class="feature-cat" onclick="openFeatures('audio')" id="cat-audio">Audio formats</div>
    <div class="feature-cat" onclick="openFeatures('sub')" id="cat-sub">Subtitle/Tag formats</div>
    <div class="feature-cat" onclick="openFeatures('av')" id="cat-av">A/V outputs</div>
    <div class="feature-cat" onclick="openFeatures('filters')" id="cat-filters">A/V filters</div>
    <div class="feature-cat" onclick="openFeatures('intf')" id="cat-intf">Interfaces</div>
    <div class="feature-cat" onclick="openFeatures('misc')" id="cat-misc">Miscellaneous</div>
    </td>
    <td class="feature-list">
      <div class="feature-div">
        <!--The different feature tables -->
        <div id="feature-list-input">
          <table class="feature-list-table">
	<?php headers( "yes" ); ?>
          <tr>
          <td class="category" rowspan="14"><b>Input media</b></td>

          <?php writefeature_simple( "UDP/RTP Unicast", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( "UDP/RTP Multicast", "yes", "yes", "yes", "no", "yes", "yes" ); ?>
          <?php writefeature( "HTTP / FTP", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( "MMS", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( "TCP/RTP Unicast", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( "DCCP/RTP Unicast", "no", "no", "yes", "no", "no", "unt" ); ?>
          <?php writefeature( "File ", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( 'DVD Video <sup><a href="#input_notes">1</a></sup>', "yes", "yes", "yes", "yes", "yes", "none" ); ?>
          <?php writefeature( "Video CD / VCD ", "yes", "yes", "yes", "no", "yes", "none" ); ?>
          <?php writefeature( 'SVCD <sup><a href="#input_notes">2</a></sup>', "part", "part", "part", "no", "part", "none" ); ?>
          <?php writefeature( "Audio CD (no DTS-CD)", "yes", "yes", "yes", "no", "yes", "none" ); ?>
          <?php writefeature( "DVB (Satellite, <br/>Digital TV, Cable TV)", "yes", "yes", "no", "yes", "no", "none" ); ?>
          <?php writefeature( 'MPEG encoder <sup><a href="#input_notes">3</a></sup>', "yes", "no", "yes", "no", "no", "none" ); ?>

          <tr>
          <td class="type">Video acquisition</td>
          <td class="yes"><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /> Direct Show</td>

          <td class="part"><img src="http://images.videolan.org/images/features/partial.png" alt="part" /> iSight, EyeTV <sup><a href="#input_notes">4</a></sup></td>
          <td class="yes"><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /> V4L, V4L2</td>
          <td class="no"><img src="http://images.videolan.org/images/features/cross.png" alt="No" /></td>
          <td class="no"><img src="http://images.videolan.org/images/features/cross.png" alt="No" /></td>
          <td class="partial"><img src="http://images.videolan.org/images/features/untested.png" alt="Untested" />V4L, V4L2</td>
          </tr>

          <tr style="background:#D4E0F7 !important">
            <td colspan="8" style="background:#D4E0F7 !important">&nbsp;</td>
          </tr>

          <tr>
          <td class="category" rowspan="17"><b>Input formats</b></td>
          <?php writefeature_simple( "MPEG (ES,PS,TS,PVA,MP3)", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( "AVI", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( "ASF / WMV / WMA", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( "MP4 / MOV / 3GP", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( "OGG / OGM / Annodex", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( "Matroska (MKV)", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( "Real", "part", "part", "part", "part", "part", "part" ); ?>
          <?php writefeature( "WAV (incuding DTS)", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( "Raw Audio: DTS, AAC, AC3/A52", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( "Raw DV", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( "FLAC", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( "FLV (Flash)", "yes", "yes", "yes", "unt", "yes", "unt" ); ?>
          <?php writefeature( "MXF", "yes", "yes", "yes", "unt", "yes", "unt" ); ?>
          <?php writefeature( "Nut", "yes", "yes", "yes", "unt", "yes", "unt" ); ?>
          <?php writefeature( "Standard MIDI / SMF", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( "Creative&trade; Voice", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>

          </table>
          <div class="notes">
          <ol id="input_notes">

            <li>DVD decryption is done through the libdvdcss library.</li>
            <li>VLC on GNU/Linux, Solaris, and Microsoft Windows has playback
            control support via libcdio and libvcdinfo. On other platforms,
            SVCD support varies depending on the availability of these libraries.
            (Volunteers for adding support are always welcome.). Handling still
            frames (often used in menus) and switching between different video
            formats is problematic.</li>
            <li>VLC for GNU/Linux supports V4L2 compatible encoding cards as well as two kinds of MPEG-2 encoding cards: Hauppauge WinTV-PVR-250/350 and Visiontech Kfir.</li>
            <li>Starting with version 0.9.0, VLC supports iSight capturing and processing on Mac OS X 10.5 or later (video only). This is unsupported on 10.4. Additionally, on 10.4 or later, VLC is able to grab video and audio from EyeTV applications and therefore all EyeTV-compatible capture devices. The user needs to install a plugin to EyeTV.app in order to use this features. Guidance is provide in the User Interface.</li>
            </ol>
          </div>

        </div>
        <div id="feature-list-video">
          <table class="feature-list-table">
            <?php headers( "no" ); ?>
            <?php writefeature( "MPEG-1/2", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( "DIVX (1/2/3)", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( "MPEG-4 ASP, DivX 4/5/6, XviD, 3ivX D4", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( "H.261", "yes", "yes", "yes", "unt", "yes", "unt" ); ?>
            <?php writefeature( "H.263 / H.263i", "yes", "yes", "yes", "unt", "yes", "unt" ); ?>
            <?php writefeature( "H.264 / MPEG-4 AVC", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( "Cinepak", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( "Theora", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( "Dirac / VC-2", "yes", "yes", "yes", "unt", "yes", "unt" ); ?>
            <?php writefeature( "MJPEG (A/B)", "yes", "yes", "yes", "unt", "yes", "unt" ); ?>
            <?php writefeature( "WMV 1/2", "yes", "yes", "yes", "unt", "yes", "unt" ); ?>
          <tr>
          <td class="type">WMV 3 / WMV-9 / VC-1</td>
          <td class="yes"><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /> <sup><a href="#video_notes">1, 2</a></sup></td>
          <td class="yes"><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /> <sup><a href="#video_notes">1</a></sup></td>
          <td class="yes"><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /> <sup><a href="#video_notes">1, 2</a></sup></td>
          <td class="yes"><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /> <sup><a href="#video_notes">1</a></sup></td>

          <td class="yes"><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /> <sup><a href="#video_notes">1</a></sup></td>
          <td class="no"><img src="http://images.videolan.org/images/features/cross.png" alt="No" /></td>
          </tr>

            <?php writefeature( "Sorenson 1/3 (Quicktime)", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( "DV (Digital Video)", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>

            <?php writefeature( "On2 VP3/VP5/VP6", "yes", "yes", "yes", "unt", "yes", "unt" ); ?>
            <?php writefeature( "Indeo Video v3 (IV32)", "yes", "yes", "part", "yes", "part", "yes" ); ?>
            <?php writefeature( "Indeo Video 4/5 (IV41, IV51)", "no", "no", "no", "no", "no", "no" ); ?>
            <?php writefeature( 'Real Video 1/2', "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( 'Real Video 3/4<sup><a href="#video_notes">3</a></sup>', "no", "no", "no", "no", "no", "no" ); ?>

          </table>
          <div class="notes">
          <ol id="video_notes">
            <li>WMV-3 / WMV-9 / VC-1 playback is provided through the FFmpeg-library
            starting with VLC 0.8.6.</li>
            <li>Windows DMO codecs can be used by VLC on 32-bit x86 platforms and
            allow WMV-3/WMA-3 decoding. This feature is untested on Intel-based Macs.</li>
            <li>VLC's 1.0.0 release will introduce support for RV30 and RV40 based upon
            the additions to the FFmpeg-library by one their Google Summer of Code 2007
            projects.</li>

          </ol>
          </div>
        </div>        
        <div id="feature-list-audio">
        <table class="feature-list-table">
	    <?php headers( "no" ); ?>
            <?php writefeature( "MPEG Layer 1/2", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( "MP3", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( "AAC", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( "Vorbis", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( "AC3 - A/52 (Dolby Digital)", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
	    <?php writefeature( 'E-AC-3 (Dolby Digital Plus) <sup><a href="#audio_notes">3 </a></sup>', "no", "no", "no", "no", "no", "no" ); ?>
            <?php writefeature( "DTS", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
	    <?php writefeature( 'MLP / TrueHD <sup><a href="#audio_notes">3</a></sup>', "no", "no", "no", "no", "no", "no" ); ?>
            <?php writefeature( "Alaw/&micro;law", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( "MIDI", "unt", "unt", "yes", "unt", "unt", "unt" ); ?>
            <?php writefeature( "LPCM", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( "WMA 1/2", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <tr>
            <td class="type">WMA 3</td>
            <td class="yes"><img src="/images/features/tick.png" alt="Yes" /> <sup><a href="#audio_notes">1</a></sup></td>
            <td class="no"><img src="/images/features/cross.png" alt="No" /> <sup><a href="#audio_notes">1</a></sup></td>
            <td class="yes"><img src="/images/features/tick.png" alt="Yes" /> <sup><a href="#audio_notes">1</a></sup></td>
            <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
            <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
            <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
            </tr>
            <?php writefeature( "Musepack / MPC", "yes", "yes", "yes", "unt", "yes", "unt" ); ?>
            <?php writefeature( "ADPCM", "yes", "yes", "yes", "yes", "yes", "unt" ); ?>
            <?php writefeature( "QCELP", "no", "no", "no", "no", "no", "no" ); ?>
            <?php writefeature( "DV Audio", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( "FLAC", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( "ALAC", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( "Speex", "yes", "yes", "yes", "unt", "yes", "unt" ); ?>
            <?php writefeature( 'Real Audio <sup><a href="#audio_notes">2</a></sup>', "part", "part", "part", "unt", "part", "no" ); ?>
            <?php writefeature( "QDM2/QDMC (QuickTime)", "yes", "yes", "yes", "unt", "yes", "unt" ); ?>
            <?php writefeature( "MACE", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( "AMR (3GPP)", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( "ATRAC 3", "yes", "yes", "yes", "unt", "yes", "unt" ); ?>
            <?php writefeature( "Wavpack", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( "TrueAudio (TTA)", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>

        </table>

        <div class="notes">
        <ol id="audio_notes">
          <li>Windows DMO codecs can be used by VLC on 32-bit x86 platforms and 
          allow WMV-3/WMA-3 decoding. This feature is untested on Intel-based Macs.</li>
          <li>Real Audio playback is provided through the FFmpeg-library
          which does only support a limited number of RA derivatives.</li>
          <li>E-AC-3, MLP and QCELP codecs will be added in VLC version 1.0</li>
        </ol>
        </div>

        </div>
        <div id="feature-list-sub">
          <table class="feature-list-table">
	<?php headers( "yes" ); ?>
        <tr>
          <td class="category" rowspan="9"><b>Subtitles</b></td>
            <?php writefeature_simple( 'DVD <sup><a href="#sub_notes">1</a></sup>', "part", "part", "part", "part", "part", "none" ); ?>

            <?php writefeature( "SVCD / CVD", "yes", "unt", "yes", "unt", "yes", "unt" ); ?>
            <?php writefeature( "DVB", "yes", "yes", "yes", "yes", "yes", "none" ); ?>
            <?php writefeature( "Closed captions", "no", "yes", "yes", "no", "unt", "unt" ); ?>
            <?php writefeature( "OGM", "yes", "yes", "yes", "yes", "yes", "unt" ); ?>
            <?php writefeature( "Text files (MicroDVD,<br/>SubRIP, SubViewer, SSA1-5, SAMI, VPlayer)" , "yes", "yes", "yes", "yes", "yes", "unt" ); ?>

            <?php writefeature( "Vobsub", "yes", "yes", "yes", "yes", "yes", "unt" ); ?>
            <?php writefeature( "CMML", "yes", "yes", "yes", "yes", "yes", "unt" ); ?>
            <?php writefeature( "Universal Subtitle Format (USF)", "yes", "yes", "yes", "yes", "yes", "unt" ); ?>
        
          <tr style="background:#D4E0F7 !important">
            <td colspan="8" style="background:#D4E0F7 !important">&nbsp;</td>
          </tr>

          <tr>
            <td class="category" rowspan="4"><b>Tags</b></td>
            <?php writefeature_simple( "ID3 tags", "yes", "yes", "yes", "yes", "yes", "unt" ); ?>
            <?php writefeature( "APEv2", "yes", "yes", "yes", "yes", "yes", "unt" ); ?>
            <?php writefeature( "Vorbis comment", "yes", "yes", "yes", "yes", "yes", "unt" ); ?>
          </table>
          <div class="notes">
          <ol id="sub_notes">
          <li>
          Full color for YUV-type chromas is not handled, only the gray-scale value. Subtitle transparency is not fully supported for all chromas. Some chromas are not handled at all.
          </li>
          </ol>
          </div>

        </div>
        
        <div id="feature-list-av">
          <table class="feature-list-table">
        <?php headers( "yes" ); ?>
        <tr>
          <td class="category" rowspan="6"><b>Video Outputs</b></td>

          <td class="type">Native</td>
          <td class="yes">Direct3D<br/>DirectX<br/>GDI</td>
          <td class="yes">OpenGL</td>

          <td class="yes"><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /></td>
          <td class="yes">Qte/X11</td>
          </tr>

	  <?php writefeature( "X11", "none", "unt", "yes", "none", "yes", "yes" ); ?>
	  <?php writefeature( "XVideo", "none", "none", "yes", "none", "yes", "yes" ); ?>
	  <?php writefeature( "SDL", "yes", "no", "yes", "unt", "yes", "yes" ); ?>
	  <?php writefeature( "FrameBuffer", "none", "none", "yes", "none", "none", "unt" ); ?>
	  <?php writefeature( "ASCII Art", "yes", "yes", "yes", "unt", "yes", "no" ); ?>

          <tr style="background:#D4E0F7 !important">
          <td colspan="8" style="background:#D4E0F7 !important">&nbsp;</td>
          </tr>
          <tr>
          <td class="category" rowspan="7"><b>Audio Outputs</b></td>
          <td class="type">Native</td>
          <td class="yes">DirectX<br/>WaveOut</td>

          <td class="yes"><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /></td>
          <td class="yes">OSS<br/>ALSA</td>
          <td class="yes"><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /></td>
          <td class="yes">OSS</td>

          <td class="yes"><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /></td>
          </tr>

          <tr>
          <td class="type">S/PDIF</td>
          <td class="yes">DirectX<br/>WaveOut</td>
          <td class="yes"><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /></td>

          <td class="yes">OSS<br/>ALSA</td>
          <td class="no"><img src="http://images.videolan.org/images/features/cross.png" alt="No" /></td>
          <td class="partial"><img src="http://images.videolan.org/images/features/untested.png" alt="Untested" /></td>
          <td class="none">-</td>

          </tr>

          <tr>
          <td class="type">Multi-channel</td>
          <td class="yes">DirectX<br/>WaveOut</td>
          <td class="yes"><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /></td>
          <td class="yes">OSS<br/>ALSA</td>

          <td class="no"><img src="http://images.videolan.org/images/features/cross.png" alt="No" /></td>
          <td class="partial"><img src="http://images.videolan.org/images/features/untested.png" alt="Untested" /></td>
          <td class="no"><img src="http://images.videolan.org/images/features/cross.png" alt="No" /></td>
          </tr>

          <tr>
          <td class="type">SDL</td>
          <td class="yes"><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /></td>
          <td class="partial">Source Only</td>
          <td class="yes"><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /></td>
          <td class="partial"><img src="http://images.videolan.org/images/features/untested.png" alt="Untested" /></td>
          <td class="yes"><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /></td>
          <td class="partial">Source Only</td>
          </tr>

	  <?php writefeature( "PulseAudio", "none", "none", "yes", "none", "unt", "unt" ); ?>
	  <?php writefeature( "PortAudio", "yes", "unt", "unt", "none", "unt", "unt" ); ?>
	  <?php writefeature( "JACK", "none", "unt", "yes", "none", "unt", "unt" ); ?>

          </table>
        </div>
        <div id="feature-list-filters">
          <table class="feature-list-table">
	     <?php headers( "yes" ); ?>
                    <tr>
          <td class="category" rowspan="10"><b>Video Filters</b></td>

          <?php writefeature_simple( "Deinterlace", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( "Cropping", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( "Image wall", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( "Image adjust", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( "Rotate/Mirror", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( "Logo overlay", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( "Magnification", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( "Image distortion", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( "Bluescreen", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( "RSS/Atom feeds", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>

          <tr style="background:#D4E0F7 !important">
          <td colspan="8" style="background:#D4E0F7 !important">&nbsp;</td>
          </tr>
          <tr><td class="category" rowspan="2"><b>Audio Filters</b></td>
          <?php writefeature_simple( "Visualization effects", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( "Equalizer", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>

          </table>
        </div>
        <div id="feature-list-intf">
          <table class="feature-list-table">
	   <?php headers( "no" ); ?>
          <tr>
          <td class="type">Default</td>

          <td class="yes">Qt4</td>

          <td class="yes">Cocoa</td>
          <td class="yes">Qt4</td>
          <td class="yes">Native</td>
          <td class="yes">Qt4</td>
          <td class="yes">GPE</td>
          </tr>

          <?php writefeature( "Qt4", "yes", "unt", "yes", "none", "unt", "none" ); ?>
          <?php writefeature( "Skins", "yes", "no", "yes", "no", "unt", "none" ); ?>
          <?php writefeature( "Web", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( "Telnet", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( "Command line", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
          <?php writefeature( "Infrared", "no", "no", "yes", "no", "no", "no" ); ?>
          </table>
        </div>
        <div id="feature-list-misc">
          <table class="feature-list-table">
	   <?php headers( "no" ); ?>
           <?php writefeature( "SAP/SDP announces", "yes", "yes", "yes", "no", "yes", "no" ); ?>
           <?php writefeature( "Bonjour protocol", "no", "yes", "yes", "unt", "unt", "unt" ); ?>
           <?php writefeature( "Mozilla/Firefox plugin", "yes", "yes", "yes", "no", "yes", "no" ); ?>
           <?php writefeature( "ActiveX plugin", "yes", "none", "none", "none", "none", "none" ); ?>
          <tr><td class="type">SVCD Menus</td><td class="partial"><img src="/images/features/partial.png" alt="Partial" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="partial"><img src="/images/features/partial.png" alt="Partial" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="partial"><img src="/images/features/partial.png" alt="Partial" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          </tr>
          <tr><td class="type">Localization</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          </tr>

          <tr><td class="type">CD-Text <sup><a href="#bottom_notes">1</a></sup></td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="partial"><img src="/images/features/partial.png" alt="Partial" /></td>
          <td class="none">-</td>
          </tr>
          <tr><td class="type">CDDB CD info</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>

          <td class="partial"><img src="/images/features/partial.png" alt="Partial" /></td>
          <td class="none">-</td>

          </tr>
          <tr><td class="type">IGMPv3 <sup><a href="#bottom_notes">2</a></sup></td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>
          <tr><td class="type">IPv6 <sup><a href="#bottom_notes">2</a></sup></td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>
          <tr><td class="type">MLDv2 <sup><a href="#bottom_notes">2</a></sup></td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>

          <tr>
          <td class="type">CPU acceleration <sup><a href="#bottom_notes">3</a></sup></td>
          <td class="yes"><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /> <sup><a href="#bottom_notes">4</a></sup></td>
          <td class="no"><img src="http://images.videolan.org/images/features/cross.png" alt="No" /></td>
          </tr>
          </table>
          <div class="notes">
          <ol id="bottom_notes">

            <li>CD-Text information provided via libcdio. This service is available
            on all platforms supported by the library.
            </li>
            <li>Depending on the operating system's support.</li>
            <li>Supported CPU extensions are MMX, MMXEXT, SSE, SSE2 and 3D Now! on x86
            processors, and AltiVec on G4/G5 processors.
            </li>
            <li>The OpenBSD 2.9 default assembler does not support MMX.
            </li>
            </ol>
          </div>

        </div>
      </div>
    </td>
    <td class="feature-table-right">&nbsp;</td>
  </tr>
  <tr>
    <td class="feature-table-leftbottom">&nbsp;</td>
    <td class="feature-table-bottom">
      <ul class="feature-icon">
        <li><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /> = Yes</li>
        <li><img src="http://images.videolan.org/images/features/partial.png" alt="Partial" /> = Partial</li>
        <li><img src="http://images.videolan.org/images/features/cross.png" alt="No" /> = No</li>
        <li><img src="http://images.videolan.org/images/features/untested.png" alt="Untested" /> = Untested</li>
      </ul>
    </td>
    <td class="feature-table-rightbottom">&nbsp;</td>
  </tr>
</table>
<h2>Streaming</h2>
<p>See the <a href="/streaming-features.html">Streaming features page</a></p>
<br/>
<script type="text/javascript">
$('feature-list-video', 'feature-list-audio', 'feature-list-sub', 'feature-list-av', 'feature-list-filters', 'feature-list-intf', 'feature-list-misc').invoke('hide');
</script>
<?php footer('$Id: features.php 4814 2008-12-12 13:30 CEST altglass $'); ?>
