<?php
   $title = "VideoLAN, Free streaming and multimedia solutions for all OS!";
   $lang = "en";
   $menu = array( "vlc", "overview" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/news.php");
?>
<div style="border:1px #bdbdbd solid; -moz-border-radius:10px; -webkit-border-radius:10px; margin-top:10px; background-color: #e9e9e9;padding:0px">
  <p>
  VideoLAN is a <a href="/videolan/">project</a>, run by volunteers,
         backed-up by a <a href="/videolan/">non-profit organisation</a>,
         which produces <a href="http://www.gnu.org/philosophy/free-sw.html">free and open source software</a> for multimedia,
         released under the GNU <a href="http://www.gnu.org/licenses/old-licenses/gpl-2.0.html">General Public License</a>.<br>
      Learn more about the <strong><a href="/videolan/">VideoLAN project and organisation</a></strong>.
  </p>
<table class="projectmenu">
  <tr>
    <td class="title">VideoLAN projects:</td>
    <td class="active">VLC media player</td>
    <td><a href="#">VLC Skin Editor</a></td>
    <td><a href="#">VideoLAN Manager</a></td>
    <td><a href="#">DVBlast</a></td>
    <td><a href="#">x264</a></td>
  </tr>
</table>
<table>
  <tr>
    <td style="text-align:right" style="min-width:300px">
      <!-- TODO adapt to users platform -->
      <img src="images/screenshots/windows.png" alt="Windows">
    </td>
    
    <td>
      <?php panel_start( "blue" ); ?>
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
      <img src="images/screenshots/skins.png" alt="Skins">
    </td>
    
  </tr>

</table>
</div>
<table class="fronttable">
<tr>
  <td colspan="3">
    <h1 style="position:relative">News
    <span style="position:absolute;right:0px;font-size:10pt">
    <a href="videolan-news.rss">RSS</a>
    &bull; 
    <a href="news.html">Read all news</a>
    &bull;
    <a href="http://planet.videolan.org">Read developer's blog &amp; news</a>
    </span></h1>
  </td>
  <td>
    <h1>Other projects</h1>
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
  VideoLAN is a host to many more projects besides VLC media player.
  <ul class="panel-blue-bullet">
    <li><a href="/vlc/skineditor.html">VLC Skin Editor</a></li>
    <li><a href="/developers/x264.html">x264</a></li>
    <li><a href="/projects/vlma">VideoLAN Manager (VLMa)</a></li>
    <li><a href="/projects/dvblast.html">DVBlast</a></li>
  </ul>
</td>
<td>        
    <p>This is the only source of revenue for VideoLAN, please help!</p>
    <br>
    <p>VideoLAN welcomes all contributions to the project!<br>
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
              <br>
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
              <br>
              <span style="font-size: 10pt;">Dollar</span>
            </p>
          </form>
    </p>
</td>
</tr>
</table>

<?php footer('$Id: index.php 4462 2008-02-23 13:20 altglass$'); ?>
