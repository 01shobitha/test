<?php
   $title = "VideoLAN, Free streaming and multimedia solutions for all OS!";
   $lang = "en";
   $menu = array( "vlc", "overview" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/news.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/magpierss/rss_fetch.inc");
?>
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
    The <b>VideoLAN organisation</b> is a non-profit organization that puts its efforts into developing
    <a href="http://www.gnu.org/philosophy/free-sw.html" target="_blank">free</a> multimedia solutions.
    It's a host to various open source projects, the most prominent being the VLC media player.
    <br/><br/>
    <a href="/videolan/">Learn more about VideoLAN.</a>
  </p>  
</td>
<td class="ter">&nbsp;</td>
</tr>
<tr>
  <td colspan="3">
  <table class="projectmenu">
    <tr>
      <td class="title">VideoLAN projects:</td>
      <td class="active">VLC media player</td>
      <td><a href="#">VLC Skin Editor</a></td>    
      <td><a href="#">DVBlast</a></td>
      <td><a href="#">x264</a></td>
      <td><a href="#">other projects</a></td>
    </tr>
  </table>
  </td>
</tr>
<tr>
<td class="bel">&nbsp;</td>
<td class="bc">
<table class="presentation">
  <tr>
    <td style="text-align:right; min-width:300px">
      <!-- TODO adapt to users platform -->
      <img src="images/screenshots/windows.png" alt="Windows"/>
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
      <?php panel_end(); ?>
    </td>
    
    <td style="text-align:left;min-width:300px;">
      <img src="images/screenshots/skins.png" alt="Skins"/>
    </td>
    
  </tr>

</table>
<p style="font-size: 8px;padding:10px">
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
              <input name="business" value="treasurer@videolan.org" type="hidden">
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
              <input name="business" value="treasurer@videolan.org" type="hidden">
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
      $max = 12;
      foreach($rss->items as $item) {
        echo "<p>";
        echo "<b>".htmlentities($item['title'])."</b></p>";
        echo "<p style=\"white-space:pre-wrap;border-bottom: 1px dashed #CCC;padding-bottom:5px;margin-bottom:5px\">";
        echo substr(str_replace("\n\n", "\n", strip_tags(html_entity_decode($item['content']['encoded']))),0,140);
        echo " <a href=\"".$item['link']."\">[...]</a><br/>";
        echo "</p>";
        $i++;
        if($i>=$max) break;
        if($i%3==0) echo "</td><td>";
      }
    ?>
  </td>
</tr>
</table>

<?php footer('$Id: index.php **** 2009-08-24 altglass$'); ?>
