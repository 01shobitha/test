<?php
   $title = "VideoLAN, VLC: Free streaming and multimedia solutions for all OS!";
   $lang = "en";
   $menu = array( "project", "videolan" );
   $additional_js = array("http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js","/js/jcarousellite_1.0.1.js");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/news.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/magpierss/rss_fetch.inc");
   $tab = "vlc";
   if(isset($_GET['tab'])) $tab = $_GET['tab'];
?>

<?php /* Specific IE hack */?>
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
                <p><b>VideoLAN</b> is a project and a non-profit organization, led and composed by volunteers,
                    that puts its efforts into developing and promoting
                    <a href="http://www.gnu.org/philosophy/free-sw.html">free</a> multimedia solutions.
                    <span style="float: right; padding: 5px 10px 0 0;"><a href="/videolan/">More about VideoLAN</a>.</span></p>
            </td>
            <td>
                <h2>Open Source</h2>
                   <p>Because you deserve to be able to trust your multimedia software and codecs, all <b>VideoLAN</b> projects are 
                   <a href="http://www.gnu.org/philosophy/free-sw.html">free</a> and
                   <a href="http://www.opensource.org/">open source</a>.
                    <span style="float: right; padding: 5px 10px 0 0;"><a href="/videolan/">More about Open Source</a>.</span></p>
            </td>
            <td>
                <h2>Contribute</h2>
                <p>VideoLAN lives because the community is active. You too <a href="/contribute.html">can help!</a></p>
                <h2>Donations</h2>
                <div>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <div style="float: right;">
                      <input name="cmd" value="_xclick" type="hidden"/>
                      <input name="business" value="sponsor@videolan.org" type="hidden"/>
                      <input name="item_name" value="Development and communication of VideoLAN" type="hidden"/>
                      <input name="no_note" value="0" type="hidden"/>
                      <input name="currency_code" value="EUR" type="hidden"/>
                      <input name="tax" value="0" type="hidden"/>
                      <input src="/images/btn_donate.gif" name="submit" alt="Donate money to VideoLAN via PayPal" type="image"/>
                      <span style="font-size: 10px;">€</span>
                    </div>
                 </form>
                <p>VideoLAN's funding originates from your donations. <a href="">Help us!</a></p>
             </div>
        </td></tr>
    </table>
</div>

<?php /* Projects */ ?>
<div id="mainbox" style="overflow: hidden;">
<table>
  <tr>
      <td style="width: 300px;">
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
         <img src="http://images.videolan.org/images/screenshots/vlc-win32.jpg" alt="VLC on Windows" />
       </p></noscript>
      </td>
      <td>
        <div style="border-bottom: 1px solid #CCC;">
             <span style="font-weight: bold; color: #2D58AE; font-size: 3em;">Projects</span>
              See <a href="/projects">all projects</a>.
        </div>
        <div class="projects_car">
          <div class ="project">
            <p class="image">
                  <img src="images/vlc64x64.png" alt="VLC cone logo"/>
            </p>
            <h2><a href="/vlc/" class="product">VLC</a></h2>
            <h3>Plays It All!</h3>
            <p>VLC is a <b>free</b> cross-platform multimedia <b>player</b> and <b>framework</b>,
               that reads most audio and video files as well as DVD, Audio CD,
               VCD, and various streaming protocols.</p>
               <div class="dl-button">
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
              </div>
              <div class="dl-other"><a href="/vlc/">Other Systems</a></div>
          </div>
          <div class ="project">
                <p class="image">
                  <img src="/images/x264_64.png" alt="x264 logo"/>
                </p>
                <h2><a href="/developers/x264.html" class="product">x264</a></h2>
                <h3>Perfect Encoding</h3>
            <p>The award-winning MPEG4 H.264/AVC video encoder.
            The number one encoder in industry!</p>
          </div>
     </td></tr>
    </table>
       <span style="float: right; ">Browse <a href="/projects">all projects</a>
       <button class="prev">&lt;&lt;</button>
       <button class="next">&gt;&gt;</button></span
<script type="text/javascript">
$(function() {
    $(".projects_car").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev",
        scroll: 3,
        visible: 3
    });
});
</script>
</div>

<?php /* Titles */ ?>
<table class="fronttable">
<tr>
  <td >
    <h1 style="position:relative">News
    <span style="position:absolute;right:0px;font-size:10pt">
    <a href="videolan-news.rss">RSS</a>
    &bull; 
    <a href="news.html">Read all news</a>
    </span></h1>
  </td>
  <td colspan="2">
    <h1 style="position:relative">Planet
    <span style="position:absolute;right:0px;font-size:10pt">
    <a href="http://planet.videolan.org/rss10.xml">RSS</a>
    &bull; 
    <a href="http://planet.videolan.org">Read all posts</a>
    </span>
    </h1>
  </td>
</tr>
<tr>

<!--Begin news items -->
<?php /* Begin planet items */ ?>
<td>
<?php
  shownews("full", 4); 
?>
</td>

<?php /* Begin planet items */ ?>
<td style="width: 40%;">
    <?php
      define('MAGPIE_OUTPUT_ENCODING', 'UTF-8');
      $rss = fetch_rss("http://planet.videolan.org/rss10.xml");
      $i = 0;
      $chars_per_entry = 240;
      $entries_per_column = 4;
      $columns = 1;      
      foreach($rss->items as $item) {
        echo "<p>";
        echo "<b>".htmlentities($item['title'])."</b></p>";
        echo "<p style=\"border-bottom: 1px dashed #CCC;padding-bottom:5px;margin-bottom:5px\">";
        echo substr(strip_tags(html_entity_decode($item['content']['encoded'])),0,$chars_per_entry);
        echo "<a href=\"".$item['link']."\">[...]</a><br/>";
        echo "</p>";
        $i++;
        if($i>=$columns*$entries_per_column) break;
        if($i%$entries_per_column==0) echo "</td><td>";
      }
    ?>
</td>

<?php /* Social and other BS */ ?>
<td style="width: 10%; text-align: right;">
<h3>Twitter</h3>
  <p>Follow VideoLAN on Twitter <a href="http://www.twitter.com/videolan"><img src="http://twitter-badges.s3.amazonaws.com/twitter-a.png" alt="Follow videolan on Twitter"/></a></p>
<h3>Planet</h3>
  <p>Read developer' blogs on <a href="http://planet.videolan.org">planet VideoLAN</a>.</p>
<h3>Facebook</h3>
  <p>Join our fans on <a href="http://planet.videolan.org">Facebook</a>.</p>
</td>
</tr>
</table>
<?php footer('$Id: index.php **** 2009-12-02 altglass$'); ?>
