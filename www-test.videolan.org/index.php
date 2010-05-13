<?php
   $title = ", VLC: Free streaming and multimedia solutions for all OS!";
   $menu = array( "project", "home" );
   $additional_js = array("http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js","/js/jcarousellite_1.0.1.js");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/news.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/magpierss/rss_fetch.inc");

/* Specific IE hack */?>
<!--[if IE]>
<div id="ieShadow"></div>
<script type="text/javascript" language="javascript">
function adapt() {
    document.getElementById("ieShadow").style.height = document.getElementById("mainbox").offsetHeight+5;
    document.getElementById("ieShadow").style.width = document.getElementById("mainbox").offsetWidth;
    document.getElementById("ieShadow").style.top = document.getElementById("mainbox").offsetTop-5;
    document.getElementById("ieShadow").style.left = document.getElementById("mainbox").offsetLeft-5;
}
window.onload = function() { adapt(); }
window.onresize = function(evt) { adapt(); }
</script>
<![endif]-->

<?php /* Motto statements */ ?>
<div id="project_statement">
    <h1 id="motto">VideoLAN: Free Multimedia Solutions</h1>
    <table class="fixed_table">
        <tr><td>
                <h2>Volunteers Organization</h2>
                <p><b>VideoLAN</b> is a project and a <b>non-profit organization</b>, composed of volunteers,
                    developing and promoting
                    <a href="http://www.gnu.org/philosophy/free-sw.html">free</a> <b>multimedia</b> solutions.
                    <span style="float: right; padding: 5px 10px 0 0;"><a href="/videolan/">More about VideoLAN</a>.</span></p>
            </td>
            <td>
                <h2>Open Source</h2>
                   <p><b>Trust</b> your multimedia software and codecs, all <b>VideoLAN</b> projects are 
                   <a href="http://www.gnu.org/philosophy/free-sw.html"><b>free</b></a> and
                   <a href="http://www.opensource.org/"><b>open source</b></a>.
                    <span style="float: right; padding: 5px 10px 0 0;"><a href="/videolan/">More about Open Source</a>.</span></p>
            </td>
            <td>
                <h2>Contribute</h2>
                <p>A <b>community</b> makes VideoLAN. You too <a href="/contribute.html">can <b>help</b>!</a></p>
                <p>All funds come from your donations. So please <b>donate</b>!</p>
                <div style="float: right; padding-top: 10px;"><span id="donate" style="font-size: 14px;">Donate with Paypal:</span>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" style="display: inline;">
                        <span>
                          <input name="cmd" value="_xclick" type="hidden"/>
                          <input name="business" value="sponsor@videolan.org" type="hidden"/>
                          <input name="item_name" value="Development and communication of VideoLAN" type="hidden"/>
                          <input name="no_note" value="0" type="hidden"/>
                          <input name="currency_code" value="EUR" type="hidden"/>
                          <input name="tax" value="0" type="hidden"/>
                          <input name="submit" type="submit" alt="Donate money to VideoLAN via PayPal" value="&euro;" class="grey-button" style="height:24px;font-weight:bold;font-size:10pt; height: 100%;"/>
                        </span>
                    </form>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" style="display: inline;">
                        <span>
                          <input name="cmd" value="_xclick" type="hidden"/>
                          <input name="business" value="sponsor@videolan.org" type="hidden"/>
                          <input name="item_name" value="Development and communication of VideoLAN" type="hidden"/>
                          <input name="no_note" value="0" type="hidden"/>
                          <input name="currency_code" value="US" type="hidden"/>
                          <input name="tax" value="0" type="hidden"/>
                          <input name="submit" type="submit" alt="Donate money to VideoLAN via PayPal" value="$" class="grey-button" style="height:24px;font-weight:bold;font-size:10pt;height: 100%;"/>
                        </span>
                    </form>
                    </div>
        </td></tr>
    </table>
</div>

<?php /* Projects */ ?>
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
            <div class=left>
            <p>VLC is a <b>free</b> cross-platform multimedia <b>player</b> and <b>framework</b>,
               that reads most audio and video files as well as DVD, Audio CD,
               VCD, and various streaming protocols.</p>
               <br />

               <div style="border: 0px red solid; margin: 0 auto; font-size: 21px; width: 13em;">
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
                  else { <?php DoDL("OSX-PPC"); DoDL("OSX-Intel"); ?> }
                }
                else if( navigator.platform.indexOf("Mac") != -1 )
                {
                document.writeln( "<p>Haha Mac OS 9 is dead! (if you\\\'re not using Mac OS 9 ... please write us a mail so we can fix this OS detection script)</p>'" );
                }
                else
                {
                <?php DoDL("Win32"); DoDL("OSX-PPC"); DoDL("OSX-Intel"); ?>
                }
                --></script>
                <noscript>
                  <?php DoDL("Win32",0);DoDL("OSX-PPC",0);DoDL("OSX-Intel",0); ?>
                </noscript>
              <div class="dl-other"><a href="/vlc/">Other Systems</a></div>
                </div>


            </div>

            <div class="right">
             <ul class="blue-bullet">
              <li><b>Simple</b> and <b>Fast</b></li>
              <li>Plays everything, <b>files</b>, <b>Discs</b> and <b>streams</b></li>
              <li>No codec packs required</li>
              <li>Completly <b>Free</b></li>
              <li>0 Spyware, Ads or User Tracking</li>
              <li>Media <b>Converter</b> and <b>streamer</b></li>
              </ul>
                           </div>
        </div>
        <div class="panel" id="panel-x264" style="display:none;">
            x264
        </div>
        <div class="panel" id="panel-dvblast" style="display:none;">
            DVBlast!
        </div>
        <div class="panel" id="panel-libdvdcss" style="display:none;">
             libdvdcss is a simple library designed for accessing DVDs like a block device without having to bother about the decryption.
        </div>
        <div class="panel" id="panel-vlma" style="display:none;">
            VLMa is an application to manage broadcasts of TV channels, received through digital terrestrial or satellite ways. Its interface is provided as a web-site written in Java. It is also capable of streaming audio and video files. VLMa consists of a deamon (called VLMad) and a web interface (called VLMaw).
        </div>
      </td></tr>
    </table>

<?php /* Project icons */ ?>
    <h2 style="border-bottom: 1px solid #CCC"><a href="/projects/">Projects</a></h2>
    <div class ="project" id="project-vlc">
        <p class="image"><img src="images/vlc64x64.png" alt="VLC cone logo"/></p>
        <h2><a href="/vlc/" class="product">VLC</a></h2>
        <h3>Plays It All!</h3>
    </div>
    <div class ="project" id="project-x264">
        <p class="image"><img src="/images/x264_64.png" alt="x264 logo"/></p>
        <h2><a href="/developers/x264.html" class="product">x264</a></h2>
        <h3>Perfect Encoding</h3>
    </div>
    <div class ="project" id="project-dvblast">
        <h2><a href="/projects/dvblast.html" class="product">DVBlast!</a></h2>
        <h3>Simple but powerfull DVB streamer</h3>
    </div>
    <div class="project" id="project-libdvdcss">
        <h2><a href="/developers/libdvdcss.html" class="product">libdvdcss</a></h2>
        <h3>DVD decryption library</h3>
    </div>
    <div class="project" id="project-vlma">
        <h2><a href="/projects/vlma/" class="product">VLMa</a></h2>
        <h3>VideoLAN manager for VLC streamers</h3>
    </div>

     <div class="dl-other"><a href="/projects/">All Projects</a></div>
</div> <!-- #mainbox -->

    <script type="text/javascript">

        function registerPanel(buttonID, panelID) {
            $("#" + buttonID).click(function() {
                $(".panel").each(function() {
                    $(this).hide();
                });
                $("#" + panelID).show();
            });
        }

        registerPanel("project-vlc", "panel-vlc");
        registerPanel("project-x264", "panel-x264");
        registerPanel("project-dvblast", "panel-dvblast");
        registerPanel("project-libdvdcss", "panel-libdvdcss");
        registerPanel("project-vlma", "panel-vlma");
    </script>

<?php /* Titles */ ?>
<table class="fronttable">
<tr>
  <td>
    <h1 style="position:relative">News
    <span class="header-buttons">
        <a href="videolan-news.rss">rss</a>
        <a href="news.html">read all news</a>
    </span></h1>
  </td>
  <td></td>
  <td>
    <h1 style="position:relative">Dev' Blogs
    <span class="header-buttons">
        <a href="http://planet.videolan.org/rss10.xml">rss</a>
        <a href="http://planet.videolan.org">read all posts</a>
    </span>
    </h1>
  </td>
</tr>
<tr>

<?php /* Begin news items */ ?>
<td id="news">
<?php
  shownews("full", 4); 
?>
</td>
<td ></td>
<?php /* Begin planet items */ ?>
<td style="width: 42%; padding: 2px 12px;">
    <?php
      define('MAGPIE_INPUT_ENCODING', 'UTF-8');
      define('MAGPIE_OUTPUT_ENCODING', 'UTF-8');
      $rss = fetch_rss("http://planet.videolan.org/rss10.xml");
      $i = 0;
      $chars_per_entry = 240;
      $entries_per_column = 4;
      $columns = 1;
      foreach($rss->items as $item) {
        echo "<p>";
        echo "<b>".htmlentities($item['title'],ENT_COMPAT,"UTF-8")."</b></p>";
        echo "<p style=\"border-bottom: 1px dashed #CCC;padding-bottom:5px;margin-bottom:5px\">";
        echo substr(strip_tags(html_entity_decode($item['content']['encoded'])),0,$chars_per_entry);
        echo "<a href=\"".$item['link']."\">[...]</a><br/>";
        echo "</p>";
        $i++;
        if($i>=$columns*$entries_per_column) break;
        if($i%$entries_per_column==0) echo "</td><td>";
      }
    ?>
    <?php /* Social and other BS */ ?>
    <h1 style="position:relative">
    Social media
    <span class="header-buttons">
        <a href="http://www.twitter.com/videolan" target="_blank">twitter</a>
        <a href="http://www.facebook.com/vlc.media.player" target="_blank">facebook</a>
    </span>
    </h1>
    <?php
      $rss = fetch_rss("http://twitter.com/statuses/user_timeline/88776463.rss");
      $i = 0;
      $chars_per_entry = 240;
      $entries_per_column = 4;
      $columns = 1;      
      foreach($rss->items as $item) {
        echo "<p style=\"border-bottom: 1px dashed #CCC;padding-bottom:5px;margin-bottom:5px\">";
        echo preg_replace('^(http://\S+)^is', '<a href="$1">$1</a>', str_replace("videolan:", "<b>".date("Y-m-d h:i",strtotime($item['pubdate']))."</b>", $item['title']));
        echo "</p>";
        $i++;
        if($i>=$columns*$entries_per_column) break;
        if($i%$entries_per_column==0) echo "</td><td>";
      }
    ?>
</td>

</tr>
</table>
<?php footer('$Id: index.php **** 2009-12-02 altglass$'); ?>
