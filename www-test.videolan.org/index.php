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
<div id="mainbox">
	<div class="leftpart">
		<h1>What is VideoLAN?</h1>
		
		<p>
		<b>VideoLAN</b> is a non-profit organization that aims at developing free multimedia related software.
		</p>
		
		<p>It is a host to various open-source multimedia projects, the most prominent being VLC media player.</p>
		
		<p><a href="/videolan/">Learn more...</a></p>
		
		<h1>VideoLAN projects</h1>
		<p>
			<i>fancy display of projects coming soon</i>
		</p>
		
	</div>
</div>
<!--[if IE]>
<div id="ieShadow"></div>
<div id="ieMove">
<![endif]-->
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
<!--[if IE]>
</div>
<![endif]-->
<?php footer('$Id: index.php **** 2009-08-24 altglass$'); ?>
