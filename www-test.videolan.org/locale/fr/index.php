<?php
   $title = "VideoLAN - Free Software and Open Source video streaming solution for every OS!";
   $lang = "fr";
   $menu = array( "fr", "overview" );
   $additional_css = array("/panels.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
?>

<p id="disclaimer">Attention ! Seules les pages principales du site ont été traduites pour des raisons de maintenabilité. Les pages restantes sont accessibles en langue anglaise.</p>

<h1>Projet VideoLAN</h1>

<div id="left">

<h2>Le projet VideoLAN</h2>
<p>VideoLAN produit  <a href="http://www.gnu.org/philosophy/free-sw.fr.html">des
 logiciels libres</a> pour la vidéo, sous la license GNU
 <a href="http://www.gnu.org/copyleft/gpl.html">General Public License</a>. </p>
 <p>Le projet a commencé comme un projet étudiant à
 <a href="http://www.ecp.fr/">l'École Centrale Paris</a> mais est à présent un projet mondial avec des <a href="/team/index.html" class="en">développeurs</a> dans 20 pays.</p>

   <h4><a href="/news.html" class="en">Les dernières nouvelles du projet.</a></h4>
 <h2>VLC media player</h2>
  <p>Le projet le plus connu est le lecteur <a href="vlc.html">VLC media player</a>, libre et multi-plateforme.</p>

<h2>Projets hébergés</h2>

<p>Bien que <a href="vlc.html">VLC media player</a> est le plus connu des
projets VideoLAN, nous hébergeons plusieur autres projets liés à la vidéo,
majoritairement destinés aux développeurs:</p>

<ul class="bullets">

<li><a href="/vlc/streaming.html" class="en">VLS (Serveur VideoLAN)</a>, notre serveur
de streaming historique, qui est à présent remplacé par VLC.</li>

<li><a href="/developers/libdvdcss.html">libdvdcss</a>,
une librairie C pour accéder aux DVDs sans avoir à se soucier du
cryptage.</li>

<li><a href="/developers/libdvbpsi.html">libdvbpsi</a>, a
librairie C pour décoder et générer des tables MPEG TS et DVB PSI.</li>

<li><a href="/developers/x264.html">x264</a>, un encodeur
H264 /AVC.</li>

<li><a href="/developers/libdca.html">libdca</a>, un
décodeurs DTS Coherent Acoustics.</li>

<li><a href="/developers/libdvdplay.html">libdvdplay</a>,
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
          <h1>VLC media player 0.8.6a</h1>
          
          <ul class="panel-blue-bullet">
            <li>C'est un lecteur multi-média multi-plateformes</li>
            <li>Qui supporte un <a href="/vlc/features.html" class="en">grand nombre de formats multimédias</a>, de façon native</li>
            <li>Qui est aussi un serveur de streaming, avec de nombreuses 
            capacités (video on demand, transcoding en temps réel, ...)</li>
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
  	   <img src="http://images.videolan.org/images/screenshots/vlc-win32.jpg" alt="VLC on Windows" />
	   </p>
	</noscript>
	</p>

          <hr/>

          <div class="download">
            <div class="vlc-logo"></div>
          </div>
          <div class="more"><a href="vlc.html">Autres Systèmes d'exploitation, en savoir plus</a></div>
    <?php panel_end(); ?>

  <?php panel_start( 'orange' ); ?>
  <h1>Aide</h1>
  <p> Pour de l'aide sur la mise en oeuvre, regardez la <a href="doc.html">documentation</a>.</p>
  <p>Si vous rencontrez des problèmes qui ne sont pas expliquées dans la documentation,  regardez dans la page du <a href="support.html">support</a>, les
  <a href="http://forum.videolan.org/">forums</a>, la
  <a href="http://wiki.videolan.org/">base de connaissance</a>, les 
  <a href="/support/lists.html" class="en">mailing-lists</a> et les autres formes de support.</p>
<?php panel_end(); ?>

<h2>Participez !</h2>

  <p>VideoLAN accueille toutes les formes de contribution au project !
  Vous pouvez donner de votre temps libre (dévelopement, documentation, tests, support, ...), du matériel ou même de l'argent.
  Plus d'info sur la page de  <a href="/contribute.html" class="en">contribution</a>!</p>

</div> <!-- RIGHT -->

<?php footer('$Id$'); ?>
