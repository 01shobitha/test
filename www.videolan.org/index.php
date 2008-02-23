<?php
   $title = "VideoLAN - Free Software and Open Source video streaming solution for every OS!";
   $lang = "en";
   $date = "06 April 2002";
   $menu = array( "vlc", "overview" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/news.php");
?>

  <h1>VideoLAN - VLC media player</h1>
  
  <div id="left">
  <h2>About VideoLAN</h2>
  <p>VideoLAN is a software <a href="/project">project</a>, which produces
  <a href="http://www.gnu.org/philosophy/free-sw.html">free
  software</a> for video, released under the GNU <a
  href="http://www.gnu.org/copyleft/gpl.html">General Public
  License</a>.<br />
  <a href="/project">Learn more</a> about the VideoLAN project.</p>
  <p>Our main product is the cross-platform VLC media player.</p>

    <h2><a href="http://www.videolan.org/videolan-news.rss"><img src="http://download.videolan.org/images/icons/rss-feed.gif" alt="RSS 1.0" /> News subscription</a></h2>
    <div>
      <?php shownews("full",5); ?>
    </div>
    <h4><a href="/news.html">Read older news</a></h4>
    <h4><a href="http://planet.videolan.org">Read developers' news - planet</a></h4>
  </div>

  <div id="right">
    <?php panel_start( "blue" ); ?>
          <h1>VLC media player 0.8.6d</h1>
          
          <ul class="panel-blue-bullet">
            <li>It is a free cross-platform media player</li>
            <li>It supports a <a href="/vlc/features.html">large number of multimedia formats</a>, without the need for additional codecs</li>
            <li>It can also be used as a streaming server, with extended 
		features (video on demand, on the fly transcoding, ...)</li>
          </ul>
	<p class="center">
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
	<noscript>
	   <p class="center">
  	   <img src="http://www.videolan.org/images/screenshots/vlc-win32.jpg" alt="VLC on Windows" />
	   </p>
	</noscript>
	</p>

          <hr/>

          <div class="download">
            <div class="vlc-logo"></div>
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
	    </noscript>
          </div>
          <div class="more"><a  href="/vlc/">Other Operating Systems, learn more</a></div>
    <?php panel_end(); ?>

  <?php panel_start( 'orange' ); ?>
  <h1>Help</h1>
  <p> For setup instructions, see the <a href="/doc/">documentation</a>
  section.</p>
  <p>If you have a problem that is not
  covered in the documentation, look at the <a href="/support/">support page</a>, 
  <a href="http://forum.videolan.org">web forums</a>, the
  <a href="http://wiki.videolan.org">Wiki</a>, the
  <a href="/support/lists.html">user mailing-lists</a> and other support
  methods.</p>
<?php panel_end(); ?>

<h2>Contribute!</h2>

  <p>VideoLAN welcomes all contributions to the project! You can contribute
  time (development, documentation, packaging, tests, user support, ...),
  material or even money. See the <a href="/contribute.html">contribution
  page</a> for more information.<br/>Developers can join us by undertaking one of the <a href="http://wiki.videolan.org/index.php/Mini_Projects">Mini Projects</a></p>

</div> <!-- RIGHT -->

<?php footer('$Id: index.php 4462 2008-02-23 13:20 altglass$'); ?>
