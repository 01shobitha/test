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
				<h1>VideoLAN projects</h1>
				<table>
					<tr>
						<td>
							<h3>Applications</h3>
							<p>
								<b><a href="vlc">VLC media player</a></b> &bull;
								A cross-platform multimedia player and streamer.
							</p>
							<p>
								<b><a href="vlc/skineditor.html">VLC Skin Editor</a></b> &bull;
								An editing tool for VLC media player skins.
							</p>
							<p>
								<b><a href="projects/dvblast.html">DVBlast</a></b> &bull;
								A lightweight DVB streaming application for Linux.
							</p>
							<p>
								<b><a href="vlma">VLMa</a></b> &bull;
								A multimedia streaming manager, aimed at streaming TV channels.
							</p>
						</td>
						<td>
						<h3>Libraries</h3>
						<p>
							<b><a href="developers/x264.html">x264</a></b> &bull;
							The award-winning H.264 AVC video encoder.
						</p>
						<p>
							<b><a href="developers/libdvdcss.html">libdvdcss</a></b> &bull;
							A C library to access DVDs without having to bother about the decryption.
						</p>
						<p>
							<b><a href="developers/libdvdplay.html">libdvdplay</a></b> &bull;
							A DVD navigation library.
						</p>
						<p>
							<b><a href="developers/libdvbpsi.html">libdvbpsi</a></b> &bull;
							A C library to decode and generate MPEG TS and DVB PSI tables.
						</p>
						<p>
							<b><a href="developers/libdvbcsa.html">libdvbcsa</a></b> &bull;
							An implementation of the DVB Common Scrambling Algorithm.
						</p>
						<p>
							<b><a href="developers/libdca.html">libdca</a></b> &bull;
							A DTS Coherent Acoustics decoder.
						</p>						
						</td>
					</tr>
				</table>
				<h1>Contribute to the community</h1>
  				<p>
				    There are several ways <i>you</i> can contribute and become a part of the VideoLAN community.
					Learn more about how you can do that on the <a href="contribute.html">contribute page</a>.
				</p>		
			</td>
			<td>
				<h1>VLC media player</h1>
				<p style="float:right;margin-left:5px;"><img src="images/frontpage/front-screenshot.png" alt=""/></p>				
				<p style="text-align: justify;">
					VLC media player is the open source multimedia player and framework capable of reading all your medias.
				</p>
				<p style="text-align: justify;">
					See the <a href="vlc/features.html">full features list</a> for all supported media and file formats.
				</p>
				<p>
					<script type="text/javascript" language="javascript">
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
		            </script>
		        	<noscript>
		            	<?php DoDL("Win32",0);DoDL("OSX-PPC",0);DoDL("OSX-Intel",0); ?>
		        	</noscript>
		        	<span class="dl-other"><a  href="/vlc/">Other Operating Systems, learn more</a></span>					           
				</p>
				<p style="border-top: 1px solid #888;clear:both">
					<b>VLC media player</b> &bull; <a href="#">DVBlast</a> &bull; <a href="#">VLMC</a> &bull; <a href="#">VLMa</a> &bull; <a href="#">x264</a>
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
