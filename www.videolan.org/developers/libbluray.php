<?php
   $title ="libbluray";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

   $libbluray_version = "0.9.2";
?>

<h1 class="bigtitle">libbluray</h1>

<p> <code>libbluray</code> is an <b>open-source</b> library designed for Blu-Ray Discs
playback for media players, like <a href="/vlc/">VLC</a> or MPlayer.</p>
<p>This <b>research</b> project is developed by an international team of
developers from <a href="http://www.doom9.org/">Doom9</a>.</p>

<?php
echo "<p>Latest release is <b>libbluray $libbluray_version</b>.</p>";
?>

<h2> Features </h2>

<ul class="bullets">
  <li><b>Portability:</b> Currently supported platforms are GNU/Linux, Windows, MacOS X. Dependencies are very limited.</li>
  <li><b>Freedom:</b> <code>libbluray</code> is released under a Free Software license, LGPL, ensuring it will stay free. </li>
  <li><b>Features:</b> the library integrates navigation, playlist parsing, menus and BD-J.</li>
  <li><b>Legal:</b> <code>libbluray</code> is <b>DRM-circumvention free</b>, and thus, safe to integrate in your software.</li>
  <li><b>Fun:</b> <code>libbluray</code> is a fun to hack on project, in its starting phase.</li>
</ul>

<p><b>NB:</b> Most commercial Blu-Ray are protected by <a href="http://www.aacsla.com/">AACS</a> or
<a href="http://www.bdplusllc.com/">BD+</a> technologies and this library is not enough to playback those discs.</p>
<p>People interested in AACS technologies should have a look at <a href="/developers/libaacs.html">libaacs</a>.</p>
<p>People interested in BD+ technologies should have a look at <a href="/developers/libbdplus.html">libbdplus</a>.</p>

<h2>Get libbluray</h2>

<p>You can get <code>libbluray</code> latest release on our ftp:
<?php
echo "<a href='ftp://ftp.videolan.org/pub/videolan/libbluray/$libbluray_version/libbluray-$libbluray_version.tar.bz2'>libbluray $libbluray_version</a>.</p>";
?>

<p><code>libbluray</code> is also available through <a href="http://wiki.videolan.org/git">git</a> at:<br />
<code>git clone git://git.videolan.org/libbluray.git</code></p>
<p>you can browse the source code at  <a href="http://git.videolan.org/?p=libbluray.git">git.videolan.org</a>.</p>

<h2>Mailing list</h2>
<p>You can discuss about libbluray on the <a href="http://mailman.videolan.org/listinfo/libbluray-devel">libbluray-devel mailing list</a>.</p>

<h2>Légal</h2>
<p><code>libbluray</code> est un projet de <b>recherche</b>, intégralement développé, <b>sans spécifications</b>
et sans aucune aide ou copie extérieur que ce soit. (<b>research</b> project, started from scratch, <b>without specifications</b> or external code).</p>
<p><code>libbluray</code> ne contourne aucune mesure technique de protection <i>MTP</i> (doesn't include any DRM-circumvention tool).</p>
<p><code>libbluray</code> s'inscrit dans le <b>droit à l'interopérabilité</b>, tel que décrit par
<a href="http://www.legifrance.gouv.fr/affichJuriAdmin.do?oldAction=rechJuriAdmin&idTexte=CETATEXT000019216315&fastReqId=1851277972&fastPos=1"><i>CE 10e et 9e sous­sect., 16 juillet 2008, n° 301843, APRIL</i></a>, par le
<i><a href="http://www.legifrance.gouv.fr/affichCodeArticle.do;jsessionid=257F3A2551AFEA654609264234C2CD43.tpdjo13v_3?cidTexte=LEGITEXT000006069414&idArticle=LEGIARTI000006278920&dateTexte=&categorieLien=cid">CPI 122-6-1</a></i>
et par le <a href="http://www.legifrance.gouv.fr/affichCodeArticle.do;jsessionid=257F3A2551AFEA654609264234C2CD43.tpdjo13v_3?cidTexte=LEGITEXT000006069414&idArticle=LEGIARTI000020740194&dateTexte=20100708&categorieLien=id#LEGIARTI000020740194"><i>CPI 331-5</i></a>.</p>


<h2>Documentation</h2>

<table border="0">
<tr>
  <td class="type"><b>Document</b></td>
  <td class="type"><b>Status</b></td>
  <td class="type"><b>Download</b></td>
  <td class="type"><b>Maintainer</b></td>
</tr>

<tr>
  <td class="category">Libbluray API documentation</td>
   <td class="yes">
     Up-to-date
   </td>
  <td>
     <a href="/developers/libbluray/doc/doxygen/html/bluray_8h.html">HTML</a>
   </td>
   <td>
     Generated by Doxygen
   </td>
</tr>
</table>


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
