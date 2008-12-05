<?php
   $title = "VLC - Features";
   $lang = "en";
   $menu = array( "vlc", "features" );
   $additional_css = array("/vlc/features.css");
   $additional_js = array("/js/prototype.js","/js/scriptaculous.js","/js/features.js");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<?php
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
    echo "\n";
}

function writefeature( $title, $windows, $mac, $linux, $beos, $bsd, $fam )
{
   echo "<tr>\n";
   echo '<td class="type">'.$title.'</td>';
   writeonefeature( $windows );
   writeonefeature( $mac );
   writeonefeature( $linux );
   writeonefeature( $beos );
   writeonefeature( $bsd );
   writeonefeature( $fam );
   echo "</tr>\n";
}

function headers()
{
?>
       <tr>
            <th class="type"></th>
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

<h2>Features</h2>
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
    <div class="feature-cat" onclick="openFeatures('sub')" id="cat-sub">Subtitle formats</div>
    <div class="feature-cat" onclick="openFeatures('av')" id="cat-av">A/V outputs</div>
    <div class="feature-cat" onclick="openFeatures('filters')" id="cat-filters">A/V filters</div>
    <div class="feature-cat" onclick="openFeatures('intf')" id="cat-intf">Interfaces</div>
    <div class="feature-cat" onclick="openFeatures('misc')" id="cat-misc">Miscellaneous</div>
    </td>
    <td class="feature-list">
      <div class="feature-div">
        <!--The different feature tables -->
        <div id="feature-list-audio" style="display:none">
        <table class="feature-list-table">
	<?php headers(); ?>
               <?php writefeature( "MPEG Layer 1/2", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( "MP3", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( "AAC", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( "Vorbis", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( "AC3 - A/52 (Dolby Digital)", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
	    <?php /* 1.0 only writefeature( "E-AC-3 - A/52 (Dolby Digital)", "yes", "yes", "yes", "yes", "yes", "yes" ); */?>
            <?php writefeature( "DTS", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
	    <?php  /* 1.0 only writefeature( "MLP / TrueHD", "yes", "yes", "yes", "yes", "yes", "yes" ); */?>
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
            <?php writefeature( "QCELP", "yes", "yes", "yes", "unt", "yes", "unt" ); ?>
            <?php writefeature( "DV Audio", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( "FLAC", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( "ALAC", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( "Speex", "yes", "yes", "yes", "unt", "yes", "unt" ); ?>
            <tr><td class="type">Real Audio <sup><a href="#audio_notes">2</a></sup></td><td class="partial"><img src="/images/features/partial.png" alt="Partial" /></td>

            <td class="partial"><img src="/images/features/partial.png" alt="Partial" /></td>
            <td class="partial"><img src="/images/features/partial.png" alt="Partial" /></td>
            <td class="partial"><img src="/images/features/untested.png" alt="Untested" /></td>
            <td class="partial"><img src="/images/features/partial.png" alt="Partial" /></td>
            <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
            </tr>
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
        </ol>
        </div>

        </div>
        <div id="feature-list-video" style="display:none">
          <table class="feature-list-table">
	<?php headers(); ?>
            <?php writefeature( "MPEG-1/2", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( "DIVX (1/2/3)", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
            <?php writefeature( "MPEG-4 ASP, DivX 5, XviD, 3ivX D4", "yes", "yes", "yes", "yes", "yes", "yes" ); ?>
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

          <tr><td class="type">Indeo Video 4/5 (IV41, IV51)</td><td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          </tr>
          <tr><td class="type">Real Video <sup><a href="#video_notes">3</a></sup></td><td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>

          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>

          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          </tr>
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
        <div id="feature-list-sub" style="display:none">
          <table class="feature-list-table">
	<?php headers(); ?>
          <tr>
          <td class="type">DVD <sup><a href="#sub_notes">1</a></sup></td><td class="partial"><img src="/images/features/partial.png" alt="Partial" /></td>
          <td class="partial"><img src="/images/features/partial.png" alt="Partial" /></td>

          <td class="partial"><img src="/images/features/partial.png" alt="Partial" /></td>
          <td class="partial"><img src="/images/features/partial.png" alt="Partial" /></td>
          <td class="partial"><img src="/images/features/partial.png" alt="Partial" /></td>
          <td class="none">-</td>
          </tr>
          <tr><td class="type">SVCD / CVD</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="partial"><img src="/images/features/untested.png" alt="Untested" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="partial"><img src="/images/features/untested.png" alt="Untested" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="none">-</td>
          </tr>
          <tr><td class="type">DVB</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="none">-</td>
          </tr>
          <tr><td class="type">Closed captions</td><td class="no"><img src="/images/features/cross.png" alt="No" /></td>

          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="none">-</td>
          </tr>

          <tr><td class="type">OGM</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="none">-</td>
          </tr>
          <tr><td class="type">Matroska</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="none">-</td>

          </tr>
          <tr><td class="type">Text files (MicroDVD,<br/>SubRIP, SubViewer, SSA1-5, SAMI, VPlayer)</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="none">-</td>
          </tr>

          <tr><td class="type">Vobsub</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="none">-</td>
          </tr>
          </table>
          <div class="notes">
          <ol id="sub_notes">
          <li>
          Full color for YUV-type chromas is not handled, only the gray-scale value. Subtitle transparency is not fully supported for all chromas. Some chromas are not handled at all.
          </li>
          </ol>
          </div>

        </div>
        <div id="feature-list-input">
          <table class="feature-list-table">
<?php headers(); ?>
          <tr>
          <td class="category" rowspan="14"><b>Input media</b></td>

          <td class="type">UDP/RTP Unicast</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>
          <tr><td class="type">UDP/RTP Multicast</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>

          <tr><td class="type">HTTP / FTP</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>
          <tr><td class="type">MMS</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="none">-</td>

          </tr>

          <tr><td class="type">TCP/RTP Unicast</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>
          <tr><td class="type">DCCP/RTP Unicast</td><td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="partial"><img src="/images/features/untested.png" alt="Untested" /></td>

          </tr>
          <tr><td class="type">File</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>
          <tr><td class="type">DVD <sup><a href="#input_notes">1</a></sup></td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="none">-</td>
          </tr>
          <tr><td class="type">VCD</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="none">-</td>
          </tr>
          <tr><td class="type">SVCD <sup><a href="#input_notes">2</a></sup></td><td class="partial"><img src="/images/features/partial.png" alt="Partial" /></td>
          <td class="partial"><img src="/images/features/partial.png" alt="Partial" /></td>

          <td class="partial"><img src="/images/features/partial.png" alt="Partial" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="partial"><img src="/images/features/partial.png" alt="Partial" /></td>
          <td class="none">-</td>
          </tr>

          <tr><td class="type">Audio CD (without DTS)</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="none">-</td>
          </tr>
          <tr><td class="type">DVB (Satellite, <br/>Digital TV, Cable TV)</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="none">-</td>

          </tr>
          <tr><td class="type">MPEG encoder <sup><a href="#input_notes">3</a></sup></td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="none">-</td>

          </tr>
          <tr>
          <td class="type">Video acquisition</td>
          <td class="yes"><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /> Direct Show</td>

          <td class="no"><img src="http://images.videolan.org/images/features/cross.png" alt="No" /></td>
          <td class="yes"><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /> V4L, V4L2</td>
          <td class="no"><img src="http://images.videolan.org/images/features/cross.png" alt="No" /></td>
          <td class="no"><img src="http://images.videolan.org/images/features/cross.png" alt="No" /></td>
          <td class="partial"><img src="http://images.videolan.org/images/features/untested.png" alt="Untested" />V4L, V4L2</td>
          </tr>

	<tr style="background:#D4E0F7 !important">
          <td colspan="8" style="background:#D4E0F7 !important">&nbsp;</td>
          </tr>
          <tr>
          <td class="category" rowspan="15"><b>Input formats</b></td>
          <td class="type">MPEG (ES,PS,TS,PVA,MP3)</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>
          <tr><td class="type">ID3 tags</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>
          <tr><td class="type">AVI</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>
          <tr><td class="type">ASF / WMV / WMA</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>
          <tr><td class="type">MP4 / MOV / 3GP</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>
          <tr><td class="type">OGG / OGM / Annodex</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>
          <tr><td class="type">Matroska (MKV)</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>

          </tr>
          <tr><td class="type">Real</td><td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>

          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          </tr>
          <tr><td class="type">WAV (incuding DTS)</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>

          <tr><td class="type">Raw Audio: DTS, AAC, AC3/A52</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>
          <tr><td class="type">Raw DV</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>
          <tr><td class="type">FLAC</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>
          <tr><td class="type">FLV (Flash)</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="partial"><img src="/images/features/untested.png" alt="Untested" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="partial"><img src="/images/features/untested.png" alt="Untested" /></td>
          </tr>
          <tr><td class="type">Standard MIDI</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>
          <tr><td class="type">Creative&trade; Voice</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>
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
            </ol>
          </div>

        </div>
        
        
        <div id="feature-list-av" style="display:none">
          <table class="feature-list-table">
<?php headers(); ?>
        <tr>
          <td class="category" rowspan="6"><b>Video Outputs</b></td>

          <td class="type">Native</td>
          <td class="yes">Direct3D<br/>DirectX<br/>GDI</td>
          <td class="yes">OpenGL<br/>Quartz <sup><a href="#av_notes">1</a></sup></td>

          <td class="yes"><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="http://images.videolan.org/images/features/tick.png" alt="Yes" /></td>
          <td class="yes">Qte/X11</td>
          </tr>

          <tr><td class="type">X11</td><td class="none">-</td>
          <td class="none">-</td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="none">-</td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>

          <tr><td class="type">XVideo</td><td class="none">-</td>
          <td class="none">-</td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="none">-</td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="none">-</td>
          </tr>
          <tr><td class="type">SDL</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="partial"><img src="/images/features/untested.png" alt="Untested" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>
          <tr><td class="type">FrameBuffer</td><td class="none">-</td>

          <td class="none">-</td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="none">-</td>
          <td class="none">-</td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          </tr>
          <tr><td class="type">ASCII Art</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="partial"><img src="/images/features/untested.png" alt="Untested" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>

          </tr>
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

          <tr><td class="type">ESD</td><td class="none">-</td>

          <td class="none">-</td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="none">-</td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>
          <tr><td class="type">aRts</td><td class="none">-</td>
          <td class="none">-</td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="none">-</td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="none">-</td>
          </tr>
          <tr><td class="type">JACK</td><td class="none">-</td>
          <td class="partial"><img src="/images/features/partial.png" alt="Partial" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="none">-</td>
          <td class="partial"><img src="/images/features/untested.png" alt="Untested" /></td>
          <td class="partial"><img src="/images/features/untested.png" alt="Untested" /></td>

          </tr>

          </table>

          <div class="notes">
          <ol>
          <li>The Quartz module is available on PowerPC-based Macs only.</li>
          </ol>
          </div>
        </div>
        <div id="feature-list-filters" style="display:none">
          <table class="feature-list-table">
            <tr>
              <th class="category"></th>
              <th class="type"></th>
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
          <tr>
          <td class="category" rowspan="10"><b>Video Filters</b></td>

          <td class="type">Deinterlace</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>
          <tr><td class="type">Cropping</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>

          <tr><td class="type">Image wall</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>
          <tr><td class="type">Image adjust</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>

          <tr><td class="type">Rotate/Mirror</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          </tr>
          <tr><td class="type">Logo overlay</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          </tr>

          <tr><td class="type">Magnification</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          </tr>

          <tr><td class="type">Image distortion</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          </tr>

          <tr><td class="type">Bluescreen</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          </tr>
          <tr><td class="type">RSS/Atom feeds</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          </tr>
          <tr style="background:#D4E0F7 !important">
          <td colspan="8" style="background:#D4E0F7 !important">&nbsp;</td>
          </tr>
          <tr><td class="category" rowspan="2"><b>Audio Filters</b></td>
          <td class="type">Visualization effects</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          </tr>
          <tr><td class="type">Equalizer</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>

          </table>
        </div>
        <div id="feature-list-intf" style="display:none">
          <table class="feature-list-table">
            <tr>
              <th class="type"></th>
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
          <tr>
          <td class="type">Default</td>

          <td class="yes">Qt4</td>

          <td class="yes">Cocoa</td>
          <td class="yes">Qt4</td>
          <td class="yes">Native</td>
          <td class="yes">Qt4</td>
          <td class="yes">GPE</td>
          </tr>

          <tr><td class="type">Qt4</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="none">-</td>
          <td class="partial"><img src="/images/features/untested.png" alt="Untested" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          </tr>
          <tr><td class="type">Skins</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          </tr>
          <tr><td class="type">Web</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>
          <tr><td class="type">Telnet</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>
          <tr><td class="type">Command line</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          </tr>
          <tr><td class="type">Infrared</td><td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          </tr>
          </table>
        </div>
        <div id="feature-list-misc" style="display:none">
          <table class="feature-list-table">
            <tr>
              <th class="type"></th>
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
            <tr><td class="type">SAP/SDP announces</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          </tr>
          <tr><td class="type">Bonjour protocol</td><td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="partial"><img src="/images/features/untested.png" alt="Untested" /></td>
          <td class="partial"><img src="/images/features/untested.png" alt="Untested" /></td>
          <td class="partial"><img src="/images/features/untested.png" alt="Untested" /></td>
          </tr>
          <tr><td class="type">Mozilla/Firefox plugin</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>

          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          <td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="no"><img src="/images/features/cross.png" alt="No" /></td>
          </tr>
          <tr><td class="type">ActiveX plugin</td><td class="yes"><img src="/images/features/tick.png" alt="Yes" /></td>
          <td class="none">-</td>
          <td class="none">-</td>
          <td class="none">-</td>
          <td class="none">-</td>
          <td class="none">-</td>

          </tr>
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
<?php
footer('$Id: features.php 4814 2008-12-03 15:00 CEST altglass $'); 
?>
