<?php
   $title ="libaacs";
   $lang = "en";
   $menu = array( "developers", "libaacs" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1>libaacs</h1>

<p> <code>libaacs</code> is a <b>research project</b> to implement the Advanced Access Content System
<a href="http://www.aacsla.com/specifications/">specification</a>.<br />
This <b>research</b> project provides, through an <b>open-source</b> library, a way to understand how
the <a href="http://en.wikipedia.org/wiki/Advanced_Access_Content_System">AACS</a> works.</p>

<p> This <b>research</b> project is mainly developed by an international team of
developers from <a href="http://www.doom9.org/">Doom9</a>.</p>

<p><b>NB:</b> this project <b>doesn't offer any key</b> that would make this project useful to decode
copyrighted material.</p>

<h2> Features </h2>

<ul class="blue-bullet">
  <li><b>Portability:</b> Currently supported platforms are GNU/Linux, Windows, MacOS X. The main dependency is libgcrypt for all cryptographic functions.</li>
  <li><b>Freedom:</b> <code>libaacs</code> is released under a Free Software license,
  ensuring it will stay free. </li>
  <li><b>Legal:</b> <code>libaacs</code> does not include any on key and respects copyright.</li>
  <li><b>Fun:</b> <code>libaacs</code> is a fun to hack on project, in its starting phase.</li>
</ul>

<h2>Get libaacs</h2>

<p> <code>libaacs</code> is available through <a href="http://wiki.videolan.org/Git">Git</a> at:<br />
<code>git clone git://git.videolan.org/libaacs.git</code>.</p>
<p>You can browse the source code at  <a href="http://git.videolan.org/">git.videolan.org</a>.</p>

<h1>Légal</h1>
<p><code>libaacs</code> est un projet de <b>recherche</b>, intégralement développé à partir de la
<b>spécification officielle et publique</b>. (<b>research</b> project, started from scratch, based on the
official public specification).</p>
<p><code>libaacs</code> ne fournit <b>aucune clé de décodage</b>, et donc respecte le droit d'auteur. (No keys provided, hence copyright preserved).</p>
<p><code>libaacs</code> s'inscrit dans le <b>droit à l'interopérabilité</b>, tel que décrit par
<a href="http://www.legifrance.gouv.fr/affichJuriAdmin.do?oldAction=rechJuriAdmin&idTexte=CETATEXT000019216315&fastReqId=1851277972&fastPos=1"><i>CE 10e et 9e sous­sect., 16 juillet 2008, n° 301843, APRIL</i></a>, par le
<i><a href="http://www.legifrance.gouv.fr/affichCodeArticle.do;jsessionid=257F3A2551AFEA654609264234C2CD43.tpdjo13v_3?cidTexte=LEGITEXT000006069414&idArticle=LEGIARTI000006278920&dateTexte=&categorieLien=cid">CPI 122-6-1</a></i>
et par le <a href="http://www.legifrance.gouv.fr/affichCodeArticle.do;jsessionid=257F3A2551AFEA654609264234C2CD43.tpdjo13v_3?cidTexte=LEGITEXT000006069414&idArticle=LEGIARTI000020740194&dateTexte=20100708&categorieLien=id#LEGIARTI000020740194"><i>CPI 331-5</i></a>.</p>

<h3>Contact/DMCA</h3>
<p>Si vous avez le moindre problème légal (If you have ANY issue with the legal part):
<a href="/contact.html">Contact</a></p>

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



<?php footer('$Id: libaacs.php 6130 2010-05-28 19:12:07Z ivoire $'); ?>
