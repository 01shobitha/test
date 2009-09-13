<?php
   $title = "VideoLAN, Free streaming and multimedia solutions for all OS!";
   $lang = "en";
   $menu = array( "vlc", "overview" );
   $additional_js = array("/js/front.js");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/news.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/magpierss/rss_fetch.inc");
   $tab = "vlc";
   if(isset($_GET['tab'])) $tab = $_GET['tab'];
?>
<!--[if IE]>
<style type="text/css">
.tabbedpane .panel-blue .ft {
  margin-top: -5px !important;
  padding-top: 0px !important;  
}
</style>
<![endif]-->
<table class="tabbedpane">
<tr>
  <td class="tl">&nbsp;</td>
  <td class="t">&nbsp;</td>
  <td class="tr">&nbsp;</td>
</tr>
<tr>
  <td class="tel">&nbsp;</td>
  <td class="tc">
  <p>  
    The <b>VideoLAN organization</b> is a non-profit organization that puts its efforts into developing
    <a href="http://www.gnu.org/philosophy/free-sw.html" target="_blank">free</a> multimedia solutions.
    It's a host to various open source projects, the most prominent being the VLC media player.
    <br/><br/>
    <a href="/videolan/">Learn more about VideoLAN.</a>
  </p>
  <table class="projectmenu">
    <tr>
      <td class="title">VideoLAN projects:</td>
      <td <?php if($tab=="vlc") echo "class=\"active\"";?> onclick="openTab('vlc')" id="tab-vlc">
        <noscript><a href="index.php?tab=vlc">VLC media player</a></noscript>
        <script type="text/javascript">document.write("VLC media player");</script>        
      </td>
      <td <?php if($tab=="skineditor") echo "class=\"active\"";?> onclick="openTab('skineditor')" id="tab-skineditor">
        <noscript><a href="index.php?tab=skineditor">VLC Skin Editor</a></noscript>
        <script type="text/javascript">document.write("VLC skin editor");</script>
      </td>    
      <td  <?php if($tab=="dvblast") echo "class=\"active\"";?>onclick="openTab('dvblast')" id="tab-dvblast">
        <noscript><a href="index.php?tab=dvblast">DVBlast</a></noscript>
        <script type="text/javascript">document.write("DVBlast");</script>
      </td>
      <td  <?php if($tab=="x264") echo "class=\"active\"";?>onclick="openTab('x264')" id="tab-x264">
        <noscript><a href="index.php?tab=x264">x264</a></noscript>
        <script type="text/javascript">document.write("x264");</script>
      </td>
      <td <?php if($tab=="other") echo "class=\"active\"";?> onclick="openTab('other')" id="tab-other">
        <noscript><a href="index.php?tab=other">other projects</a></noscript>
        <script type="text/javascript">document.write("other projects");</script>
      </td>
    </tr>
  </table>
</td>
<td class="ter">&nbsp;</td>
</tr>
<tr>
<td class="bel">&nbsp;</td>
<td class="bc">
<div id="pres-vlc" <?php if($tab!="vlc") echo "style=\"display:none\""; ?>>
<table class="presentation">
  <tr>
    <td style="text-align:right; min-width:300px;padding-right: 10px;">
      <!-- TODO adapt to users platform -->
      <img src="http://images.videolan.org/images/screenshots/windows.png" alt="Windows" style="margin-right:10px"/>
    </td>
    
    <td>
    <div class="panel-blue" style="margin-top:0px"> <!-- begin panel -->
      <div class="hd">
        <div class="c"></div>
      </div>
      <div class="bd">
        <div class="c">
          <p>
            <h1 style="text-align:center;font-weight:bold;font-size:20pt;text-shadow:0px 1px 5px #999;padding-bottom:10px">VLC media player</h1>
            <ul class="panel-blue-bullet" style="padding-bottom:0px">
              <li>Free and Open Source cross-platform media player</li>
              <li>Supports a <a href="/vlc/features.html">large number of multimedia formats</a>,
                  without the need for additional codecs</li>
              <li>Can play incomplete or broken files</li>
              <li>Features a complete streaming server, with extended 
                  features (video on demand, on the fly transcoding, ...)</li>
            </ul>
          </p>
          <table class="dl-table">
            <tr>
              <td style="width:64px;"><img src="images/dl-vlc.png" alt="Download VLC" /></td>
              <td><span>
              <script type="text/javascript"><!--
                if ( <?php echo $is_win32; ?> ) { <?php DoDL("Win32"); ?> }
                else if( <?php echo $is_beos; ?> ) { <?php DoDL("BeOS"); ?> }
                else if( <?php echo $is_linux; ?> )
                {
                  if( <?php echo $is_ubuntu; ?> ) { <?php DoDL("Ubuntu"); ?> }
                  else if( <?php echo $is_fedora; ?> ) { <?php DoDL("Fedora"); ?>}
                  else if( <?php echo $is_suse; ?> ) { <?php DoDL("Suse"); ?> }
                  else if( <?php echo $is_debian; ?> ) { <?php DoDL("Debian"); ?> }
                  else if( <?php echo $is_mandriva; ?> ) { <?php DoDL("Mandriva"); ?> }
                  else if( <?php echo $is_redhat; ?> ) { <?php DoDL("RedHat"); ?> }
                  else if( <?php echo $is_gentoo; ?> ) { <?php DoDL("Gentoo"); ?> }
                  else { <?php DoDL("Linux"); ?> }
                }
                else if( <?php echo $is_freebsd; ?> ) { <?php DoDL("FreeBSD"); ?> }
                else if( <?php echo $is_osx; ?> )
                {
                  if( <?php echo $is_ppc; ?> ) { <?php DoDL("OSX-PPC"); ?> }
                  else if( <?php echo $is_mactel; ?> ) { <?php DoDL("OSX-Intel");?>}
                     else  { <?php DoDL("OSX-PPC"); DoDL("OSX-Intel"); ?> }
                }
                else if( navigator.platform.indexOf("Mac") != -1 )
                {
                document.writeln( "<p>Haha Mac OS 9 is dead! (if you\\\'re not using Mac OS 9 ... please write us a mail so we can fix this OS detection script)</p>'" );
                }
                else
                {
                <?php DoDL("Win32");DoDL("OSX-PPC"); DoDL("OSX-Intel"); ?>
                }
            --></script>
            <noscript>
              <?php DoDL("Win32",0);DoDL("OSX-PPC",0);DoDL("OSX-Intel",0); ?>
            </noscript></span>
            <span class="dl-other"><a  href="/vlc/">Other Operating Systems, learn more</a></span>
            </td>
          </tr>
          </table>          
        </div>
      </div>
      <div class="ft">
        <div class="c"></div>
      </div>
    </div> <!-- end panel -->

    </td>
    
    <td style="text-align:left;min-width:300px;">
      <img src="http://images.videolan.org/images/screenshots/skins.png" alt="Skins" style="margin-left:10px"/>
    </td>
    
  </tr>

</table>
<p style="font-size: 8pt;padding:10px">
      VLC media player is a highly portable
      <strong>multimedia player</strong> and <strong>multimedia framework</strong>
      capable of reading most audio and video formats
      (MPEG-2, MPEG-4, H.264, DivX, MPEG-1, mp3, ogg, aac ...) as well
      as <strong>DVD</strong>s, <strong>Audio CD</strong>s <strong>VCD</strong>s,
      and various <strong>streaming</strong> protocols. See the <a href="/vlc/features.html">full features list</a>.<br>

      It can also be used as a <strong>media converter</strong> or
      a <a href="/vlc/streaming.html"><strong>server to stream</strong></a>
      in unicast or <strong>multicast</strong> in IPv4 or
      <strong>IPv6</strong> on networks.
</p>
</div>
<div id="pres-skineditor" <?php if($tab!="skineditor") echo "style=\"display:none\""; ?>>
  <table class="presentation">
    <tr>
      <td style="text-align:right; min-width:300px;">
        <!-- TODO adapt to users platform -->
        <img src="http://images.videolan.org/images/screenshots/skineditor/leopard_zoom_s.jpg" alt="Editing the Crossover Leopard Skin" style="margin-right:10px"/>
      </td>
      <td>
        <div class="panel-blue" style="margin-top:0px"> <!-- begin panel -->
        <div class="hd">
          <div class="c"></div>
        </div>
        <div class="bd">
          <div class="c">
            <p>
              <h1 style="text-align:center;font-weight:bold;font-size:20pt;text-shadow:0px 1px 5px #999;padding-bottom:10px">VLC Skin Editor</h1>
              The VLC Skin Editor enables creative VLC users to easily build their own skins for VLC. It provides a live preview of how your skin
              will look and many other features that help you create a skin without much knowledge of the system behind VLC skins.
            </p>
            <p>
            For more information go to the <a href="/vlc/skineditor.html">Skin Editor page</a>.
            </p>
          </div>
        </div>
        <div class="ft">
          <div class="c"></div>
        </div>
      </div> <!-- end panel -->
    </td>
      <td style="text-align:left;min-width:300px;">
        <img src="http://images.videolan.org/images/screenshots/skineditor/default_sbmp_s.jpg" alt="Editing the 0.8.6 Default Skin" style="margin-left:10px"/>
      </td>
      
    </tr>

  </table>
</div>
<div id="pres-dvblast" <?php if($tab!="dvblast") echo "style=\"display:none\""; ?>>
<h1>DVBlast</h1>
<h2>Are you looking for live streaming? Don't look any further!</h2>

<p> <code>DVBlast</code> is a simple and powerful streaming application
based on the linux-dvb API.<br>
It opens a DVB device, tunes it, places PID filters, configures a CAM module,
and demultiplexes the packets to several RTP outputs.</p>

<p> <code>DVBlast</code> is designed to be the core of a custom IRD or CID,
based on a PC with Linux-supported DVB cards.</p>

<p> <code>DVBlast</code> does <strong>not</strong> do any kind of
processing on the elementary streams, such as transcoding, PID remapping
or remultiplexing. it does <strong>not</strong> stream from plain files,
only DVB devices. If you were looking for these features, switch to
VLC.</p>

<h2>Current features</h2>

<ul class="panel-blue-bullet">
  <li> Lightweight program designed for extreme memory and CPU conditions</li>
  <li> Only one dependancy : <em><a href="/developers/libdvbpsi.html">libdvbpsi</a></em></li>
  <li> CAM menus (MMI) support via an external application</li>

  <li> The configuration file describing outputs can be reloaded without losing a single packet</li>
  <li> PID-based or service-based filtering</li>
  <li> Support for the new S2API of linux-dvb (compile option)</li>
</ul>

<h2>Get DVBlast</h2>

<p> The latest official version of <code>DVBlast</code>
is numbered 1.0, and is available via <a href="http://downloads.videolan.org/pub/videolan/dvblast/1.0/dvblast-1.0.tar.bz2">HTTP</a>
or <a href="ftp://ftp.videolan.org/pub/videolan/dvblast/1.0/dvblast-1.0.tar.bz2">FTP</a>.</p>

<p> Hackers can participate to the development using <a href="http://wiki.videolan.org/Subversion">Subversion</a>.
Code can be found at <code>svn://svn.videolan.org/dvblast</code> and you can

<a href="http://svn.videolan.org/listing.php?repname=DVBLast&amp;path=%2F&amp;sc=0">browse source online</a>.</p>

<p>User support is handled in the <a href="/support/lists.html">streaming</a>
mailing-list. There is also a developer-oriented <a href="/developers/lists.html">mailing-list</a>.</p>
</div>
<div id="pres-x264" <?php if($tab!="x264") echo "style=\"display:none\""; ?>>
<h1>x264 - a free h264/avc encoder</h1>

<p>x264 is a free library for encoding <a href="http://en.wikipedia.org/wiki/H.264">H264/AVC</a> video streams.</p>
<p>The code is written from scratch by <a href="mailto:fenrir@videolan.org">Laurent Aimar</a>, <a href="mailto:pengvado@users.sourceforge.net">Loren Merritt</a>, <a href="mailto:titer@videolan.org">Eric Petit</a> (OS X), <a href="mailto:chenm001@163.com">Min Chen</a> (vfw/asm), Justin Clay (vfw), <a href="mailto:mru@mru.ath.cx">Måns Rullgård</a>, Radek Czyz, Christian Heine (asm), Alex Izvorski, Alex Wright and <a href="mailto:darkshikari@gmail.com">Jason Garrett-Glaser</a>.

</p><p>It is released under the terms of the <a href="http://www.gnu.org/licenses/old-licenses/gpl-2.0.html">GNU GPL</a>.</p>

<h2>Development status</h2>

<h3>Encoder features</h3>

<ul class="bullets">
    <li> 8x8 and 4x4 adaptive spatial transform</li>
    <li> Adaptive B-frame placement</li>

    <li> B-frames as references / arbitrary frame order</li>
    <li> CAVLC/CABAC entropy coding</li>
    <li> Custom quantization matrices</li>
    <li> Intra: all macroblock types (16x16, 8x8, 4x4, and PCM with all predictions)</li>
    <li> Inter P: all partitions (from 16x16 down to 4x4)</li>

    <li> Inter B: partitions from 16x16 down to 8x8 (including skip/direct)</li>
    <li> Interlacing (MBAFF)</li>
    <li> Multiple reference frames</li>
    <li> Ratecontrol: constant quantizer, constant quality, single or multipass ABR, optional VBV</li>
    <li> Scenecut detection</li>

    <li> Spatial and temporal direct mode in B-frames, adaptive mode selection</li>
    <li> Parallel encoding on multiple CPUs</li>
    <li> Predictive lossless mode</li>
    <li> Psy optimizations for detail retention (adaptive quantization, psy-RD, psy-trellis)</li>
    <li> Zones for arbitrarily adjusting bitrate distribution</li>
</ul>
<p>
For more information go to the <a href="developers/x264.html">x264 page</a>
</p>
</div>
<div id="pres-other" <?php if($tab!="other") echo "style=\"display:none\""; ?>>
<h1>Other projects</h1>
</div>
</td>
<td class="ber">&nbsp;</td>
</tr>
<tr>
<td class="bl">&nbsp;</td>
<td class="b">&nbsp;</td>
<td class="bright">&nbsp;</td>
</tr>
</table>
<table class="fronttable">
<tr>
  <td colspan="3">
    <h1 style="position:relative">News
    <span style="position:absolute;right:0px;font-size:10pt">
    <a href="videolan-news.rss">RSS</a>
    &bull; 
    <a href="news.html">Read all news</a>
    </span></h1>
  </td>
  <td>
    <h1>Contribute</h1>
  </td>
</tr>
<tr>
<!--Begin news items -->
<?php
  shownews_mockup("full", 3); 
?>
<!--End news items -->

<td>        
    <p>This is the only source of revenue for VideoLAN, please help!</p>
    <br/>
    <p>VideoLAN welcomes all contributions to the project!<br/>
    You can contribute time (documentation, packaging, development, tests, user support, ...),
    material or even money. See the <a href="/contribute.html">contribution
    page</a> for more information.</p>
    <p>
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <p>
              <input name="cmd" value="_xclick" type="hidden">
              <input name="business" value="sponsor@videolan.org" type="hidden">
              <input name="item_name" value="Development and communication of VideoLAN" type="hidden">
              <input name="no_note" value="0" type="hidden">
              <input name="currency_code" value="EUR" type="hidden">
              <input name="tax" value="0" type="hidden">
              <input src="http://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" name="submit" alt="Donate money to VideoLAN via PayPal" type="image">
              <br/>
              <span style="font-size: 10pt;">Euro</span>
            </p>
          </form>
    </p>
    <p>
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <p>
              <input name="cmd" value="_xclick" type="hidden">
              <input name="business" value="sponsor@videolan.org" type="hidden">
              <input name="item_name" value="Development and communication of VideoLAN" type="hidden">
              <input name="no_note" value="0" type="hidden">
              <input name="currency_code" value="USD" type="hidden">
              <input name="tax" value="0" type="hidden">
              <input src="http://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" name="submit" alt="Donate money to VideoLAN via PayPal" type="image">
              <br/>
              <span style="font-size: 10pt;">Dollar</span>
            </p>
          </form>
    </p>
</td>
</tr>
<tr>
  <td colspan="4">
    <h1 style="position:relative">Planet VideoLAN
    <span style="position:absolute;right:0px;font-size:10pt">
    <a href="http://planet.videolan.org/rss10.xml">RSS</a>
    &bull; 
    <a href="http://planet.videolan.org">Read all developer's posts</a>
    </span>
    </h1>
  </td>
</tr>
<tr>
  <td>
    <?php
      $rss = fetch_rss("http://planet.videolan.org/rss10.xml");
      $i = 0;
      $max = 8;
      foreach($rss->items as $item) {
        echo "<p>";
        echo "<b>".htmlentities($item['title'])."</b></p>";
        echo "<p style=\"border-bottom: 1px dashed #CCC;padding-bottom:5px;margin-bottom:5px\">";
        echo substr(strip_tags(html_entity_decode($item['content']['encoded'])),0,140);
        echo " <a href=\"".$item['link']."\">[...]</a><br/>";
        echo "</p>";
        $i++;
        if($i>=$max) break;
        if($i%2==0) echo "</td><td>";
      }
    ?>
  </td>
</tr>
</table>

<?php footer('$Id: index.php **** 2009-08-24 altglass$'); ?>
