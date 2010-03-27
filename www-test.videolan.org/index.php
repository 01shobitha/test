<?php
   $title = "VideoLAN, VLC: Free streaming and multimedia solutions for all OS!";
   $lang = "en";
   $menu = array( "project", "videolan" );
   $additional_js = array("/js/front.js");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/news.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/magpierss/rss_fetch.inc");
   $tab = "vlc";
   if(isset($_GET['tab'])) $tab = $_GET['tab'];
?>

<!--[if IE]>
<div id="ieShadow"></div>
<script type="text/javascript" language="javascript">
function adapt() {
    document.getElementById("ieShadow").style.height = document.getElementById("mainbox").offsetHeight+5;
    document.getElementById("ieShadow").style.width = document.getElementById("mainbox").offsetWidth;
    document.getElementById("ieShadow").style.top = document.getElementById("mainbox").offsetTop-5;
    document.getElementById("ieShadow").style.left = document.getElementById("mainbox").offsetLeft-5;

}
window.onload = function() {
    adapt();
}
window.onresize = function(evt) {
    adapt();
}
</script>
<![endif]-->

<div id="project_statement">
    <h1 id="motto">VideoLAN: Free Multimedia Solutions</h1>
    <table class="fixed_table">
        <tr><td>
                <h2>Volunteers Organization</h2>
                <p style="max-width: 320px">
                    <b>VideoLAN</b> is a project and a non-profit organization, led and composed by volunteers,
                    that puts its efforts into developing and promoting
                    <a href="http://www.gnu.org/philosophy/free-sw.html" target="_blank">free</a> multimedia solutions.
                    <span style="float: right; padding: 5px 10px 0 0;"><a href="/videolan/">More about VideoLAN</a>.</span>
                </p>
            </td>
            <td>
                <h2>Open Source</h2>
                <p style="max-width: 320px">
                    Because you deserve to be able to trust your multimedia software and codecs, all <b>VideoLAN</b> projects are 
                   <a href="http://www.gnu.org/philosophy/free-sw.html" target="_blank">free</a> and
                   <a href="http://www.opensource.org/" target="_blank">open source</a>.
                    <span style="float: right; padding: 5px 10px 0 0;"><a href="/videolan/">More about Open Source</a>.</span>
                </p>
            </td>
            <td>
                <h2>Contribute</h2>
                <p>VideoLAN lives because the community is active. You too <a href="/contribute.html">can help!</a></p>
                <h3>Donations</h3>
                <div><div style="float: right;">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input name="cmd" value="_xclick" type="hidden"/>
                    <input name="business" value="sponsor@videolan.org" type="hidden"/>
                    <input name="item_name" value="Development and communication of VideoLAN" type="hidden"/>
                    <input name="no_note" value="0" type="hidden"/>
                    <input name="currency_code" value="EUR" type="hidden"/>
                    <input name="tax" value="0" type="hidden"/>
                    <input src="/images/btn_donate.gif" name="submit" alt="Donate money to VideoLAN via PayPal" type="image"/>
                    <span style="font-size: 10px;">€</span>
                    </form>
                </div>
                <p>VideoLAN's funding originates from your donations. <a href="">Help us!</a></p>
             </div>
        </td></tr>
    </table>
</div>

<div id="mainbox">
<table>
  <tr><td>
     <img src="images/screenshots/vlc-linux.jpg" id="img_project" alt="screenshot" /></td>
     <td style="width:100%;"><div style="border: 1px solid yellow; width: 100%;">
        <ul>
            <li style="display: inline;">
              <div style="float: left; ">
                <p style="float:left">
                  <img src="images/vlc64x64.png" alt="VLC cone logo"/>
                </p>
                <h2><a href="vlc" class="product">VLC media player</a></h2>
                <p>One player to read them all. One player to stream them all. And its free.</p>
              </div>
            </li>
            <li style="display: inline;">1</li>
            <li style="display: inline;">1</li>
            <li style="display: inline;">1</li>
        </ul>

    </div>
    <div class="clearfix"> </div>

<!--            <td>
            <p style="float:left">
                <img src="images/x264_64.png" alt="x264 logo"/>
            </p>
            <p>
            <a href="developers/x264.html" class="product">x264</a>
            </p>
            <p>
            The award-winning MPEG4 H.264/AVC video encoder.
            The number one encoder in the movie pirating scene!
            </p>
            </td>    
            <td>
            <p style="float:left;width:64px">
            <big><strong>VLMa</strong></big>
            </p>
            <p>
            <a href="projects/vlma">VideoLAN Manager</a>
            </p>
            <p>
            Manage broadcasting of several sattelite or DVB TV channels and other streams.
            </p>
            </td>
            <td>
            <p style="float:left;width:64px">
            <big><strong>DVBlast</strong></big>
            </p>
            <p>
            <a href="projects/dvblast.html">DVBlast</a>
            </p>
            <p>
                BAM! Blasts your DVB device on Linux.
            </p>-->

         </td></tr>
    </table>
</div>

<table class="fronttable">
<tr>
  <td colspan="2">
    <h1 style="position:relative">News
    <span style="position:absolute;right:0px;font-size:10pt">
    <a href="videolan-news.rss">RSS</a>
    &bull; 
    <a href="news.html">Read all news</a>
    </span></h1>
  </td>
  <td colspan="2">
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

<!--Begin news items -->
<td colspan="2">
<?php
  shownews("full", 4); 
?>
</td>
<!--End news items -->

<!--Begin planet items -->
<td style="width: 33%;">
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
<!--End planet items -->


<td style="width: 17%; text-align: right;">
  <p>Follow VideoLAN on Twitter <a href="http://www.twitter.com/videolan"><img src="http://twitter-badges.s3.amazonaws.com/twitter-a.png" alt="Follow videolan on Twitter"/></a></p>
</td>
</tr>
</table>
<?php footer('$Id: index.php **** 2009-12-02 altglass$'); ?>
