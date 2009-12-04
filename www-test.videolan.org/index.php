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
<div id="mainbox">
	<table>
		<tr>
			<td>
				<h1>What is VideoLAN?</h1>
				<p> 
					The <b>VideoLAN organization</b> is a non-profit organization that puts its efforts into developing
					<a href="http://www.gnu.org/philosophy/free-sw.html" target="_blank">free</a> multimedia solutions.
				    It's a host to various open source projects, the most prominent being the VLC media player.
					<br/><br/>
					<a href="/videolan/">Learn more about VideoLAN.</a>
				</p>
			</td>
			<td>
				<h1>Contribute to the community</h1>
  				<p>
				    There are several ways <i>you</i> can contribute and become a part of the VideoLAN community.
					Learn more about how you can do that on the <a href="contribute.html">contribute page</a>.
				</p>		
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td>
			<p style="float:left">
				<img src="images/vlc64x64.png" alt="VLC cone logo"/>
			</p>
			<p>
			<a href="vlc" class="product">VLC media player</a>
			</p>
			<p>
			The most awesome multimedia player ever.
			</p>
			</td>
			<td>
			<p style="float:left">
				<img src="images/x264_64.png" alt="x264 logo"/>
			</p>
			<p>
			<a href="developers/x264.html" class="product">x264</a>
			</p>
			<p>
			The award-winning MPEG4 H.264/AVC video encoder.
			</p>

			</td>	
		</tr>
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
<?php
  shownews_mockup("full", 2); 
?>
<!--End news items -->
<td>
    <?php
	  define('MAGPIE_OUTPUT_ENCODING', 'UTF-8');
      $rss = fetch_rss("http://planet.videolan.org/rss10.xml");
      $i = 0;
      $chars_per_entry = 240;
      $entries_per_column = 3;
      $columns = 2;      
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
</tr>
</table>
<?php footer('$Id: index.php **** 2009-12-02 altglass$'); ?>
