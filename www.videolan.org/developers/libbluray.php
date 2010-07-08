<?php
   $title ="libbluray";
   $lang = "en";
   $menu = array( "developers", "libbluray" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1>libbluray</h1>

<p> <code>libbluray</code> is an <b>open-source</b> library designed for Blu-Ray Discs
playback for media players, like <a href="/vlc/">VLC</a> or MPlayer.</p>
<p> This <b>research</b> project is developed by an international team of
hackers from <a href="http://www.doom9.org/">Doom9</a>.</p>

<h2> Features </h2>

<ul class="blue-bullet">
  <li><b>Portability:</b> Currently supported platforms are GNU/Linux, Windows, MacOS X. Depencies are very limited.</li>
  <li><b>Freedom:</b> <code>libbluray</code> is released under a Free Software license,
  ensuring it will stay free. </li>
  <li><b>Features:</b> the library integrates navigation, playlist parsing, menus and BD-J.</li>
  <li><b>Legal:</b> <code>libbluray</code> is DRM-circumvention free, and thus, safe to integrate in your software.</li>
  <li><b>Fun:</b> <code>libbluray</code> is a fun to hack on project, in its starting phase.
</ul>

<h2>Get libbluray</h2>

<p> <code>libbluray</code> is available through <a href="http://wiki.videolan.org/Git">Git</a> at
<code>git clone git://git.videolan.org/libbluray.git</code>.</p>

<h2>Légal</h2>
<p><code>libbluray</code> est un projet de <b>recherche</b>, intégralement développé, sans spécifications
et sans aucune aide ou copie extérieur que ce soit. (<b>research</b> project, started from scratch, <b>without specifications</b> or external code).</p>
<p><code>libbluray</code> ne contourne aucune mesure technique de protection <i>MTP</i> (doesn't include any DRM-circumvention tool</i>).</p>
<p><code>libbluray</code> s'inscrit dans le droit à l'interopérabilité, tel que décrit par
<i>CE 10e et 9e sous­sect., 16 juillet 2008, n° 301843, APRIL</i> et par le <i>CPI 331-5</i>.


<h2>Documentation</h2>
<?php /*
<table border="0">
<tr>
  <td class="type"><b>Document</b></td>
  <td class="type"><b>Status</b></td>
  <td class="type"><b>Download</b></td>
  <td class="type"><b>Maintainer</b></td>
</tr>

<tr>
  <td class="category">libbluray API documentation</td>
   <td class="yes">
     Up-to-date
   </td>
  <td>
     <a href="libbluray/doc/html/">HTML</a>
     <a href="libbluray/doc/latex/refman.dvi">DVI</a>
     <a href="libbluray/doc/latex/refman.ps">PS</a>
   </td>
   <td>
     Generated by Doxygen
   </td>
</tr>
</table> */ ?>


<?php footer('$Id: libbluray.php 6130 2010-05-28 19:12:07Z ivoire $'); ?>
