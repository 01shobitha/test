<?php
   $title = "VideoLAN - Free Software and Open Source video streaming solution for every OS!";
   $lang = "en";
   $date = "06 April 2002";
   $menu = array( "vlc", "overview" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
?>

  <h1>VideoLAN - VLC media player</h1>
  

<div id="left">

<h2>Le projet VideoLAN</h2>
<p>VideoLAN produit  <a href="http://www.gnu.org/philosophy/free-sw.html">des
 logiciels libres</a> pour la vidéo, sous la license GNU
 <a href="http://www.gnu.org/copyleft/gpl.html">General Public License</a>. </p>
 <p>Le projet a commencé comme un projet étudiant à
 <a href="http://www.ecp.fr/">l'École Centrale Paris</a> mais est à présent un projet mondial avec des <a href="/team/index.html" class="en">développeurs</a> dans 20 pays.</p>

   <h4><a href="/news.html" class="en">Les dernières nouvelles du projet.</a></h4>
 <h2>VLC media player</h2>
  <p>Le projet le plus connu est le lecteur VLC media player, libre et multi-plateforme.</p>

<h2>Projets hebérgés</h2>

<p>Bien que <a href="/">VLC media player</a> est le plus connu des
projets VideoLAN, nous hébergeons plusieur autres projets liés à la vidéo,
majoritairement destinés aux développeurs:</p>

<ul class="bullets">

<li><a href="/vlc/streaming.html">VLS (Serveur VideoLAN)</a>, notre serveur
de streaming historique, qui est à présent remplacé par VLC.</li>

<li><a href="http://developers.videolan.org/libdvdcss/">libdvdcss</a>,
une librairie C pour accéder aux DVDs sans avoir à se soucier du
cryptage.</li>

<li><a href="http://developers.videolan.org/libdvbpsi/">libdvbpsi</a>, a
librairie C pour décoder et générer des tables MPEG TS et DVB PSI.</li>

<li><a href="http://developers.videolan.org/x264.html">x264</a>, un encodeur
H264 /AVC encoder.</li>

<li><a href="http://developers.videolan.org/libdca.html">libdca</a>, un
décodeurs DTS Coherent Acoustics.</li>

<li><a href="http://developers.videolan.org/libdvdplay">libdvdplay</a>,
une librairie de navigation DVD.</li>

</ul>

<h2>Projets SVN hébergés</h2>

<p>Le projet aide également certains projets en fournissant un serveur Subversion:</p>

<ul class="bullets">

<li><a href="http://liba52.sourceforge.net/">liba52</a>, un décodeur de flux ATSC A/52 libre.</li>

<li><a href="http://libmpeg2.sourceforge.net/">libmpeg2</a>, un décodeur de flux MPEG-2 libre</li>

</ul>

  </div>
  <div id="right">
    <?php panel_start( "blue" ); ?>
          <h1>VLC media player 0.8.6</h1>
          
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
  	   <img src="/images/screenshots/vlc-win32.jpg" alt="VLC on Windows" />
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
  covered in the documentation, look at the <a href="/support/">support</a>  page 
  <a href="http://forum.videolan.org">web forums</a>, the
  <a href="/support/lists.html">user mailing-lists</a> and other support
  methods.</p>
<?php panel_end(); ?>

<h2>Contribute!</h2>

  <p>VideoLAN welcomes all contributions to the project! You can contribute
  time (development, documentation, packaging, tests, user support, ...),
  material or even money. See the <a href="contribute.html">contribution
  page</a> for more information.</p>

</div> <!-- RIGHT -->

<?php footer('$Id: index.php 3999 2006-12-12 08:18:13Z zorglub $'); ?>
