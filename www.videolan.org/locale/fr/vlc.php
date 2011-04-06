<?php
   $title = "VLC media player - Overview";
   $lang = "fr";
   $menu = array( "fr", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<p id="disclaimer">Attention ! Seules les pages principales du site sont traduites pour des raisons de maintenabilité. Mais les pages restantes n'ont que peu de textes.</p>

<h1> VLC media player </h1>

<div class="vlc-screenshot">
  <img width="300" height="200" src="http://images.videolan.org/images/screenshots/vlc-win32.png" alt="VLC on Windows"/>
</div>

<div id="description">
  <h2>VLC media player - le lecteur multimédias et serveur de streaming multi-plateformes</h2>

  <p> VLC media player est un
  <strong>lecteur multimédia</strong> capable de lire des formats audio et vidéo
  variés (MPEG-1, MPEG-2, MPEG-4, DivX, mp3, ogg, ...) aussi bien
  que les <strong>DVD</strong>s, les <strong>VCD</strong>s, les <strong>CD</strong> et divers protocoles de <strong>streaming</strong> sur Internet. 
  C'est aussi un 
  <a href="/vlc/streaming.html">serveur de streaming</a> en unicast ou
  <strong>multicast</strong> en IPv4 ou
  <strong>IPv6</strong> sur les réseaux à haut débit. </p>

  <p> Si vous aimez VLC, notez le sur <a href="http://freshmeat.net/projects/vlc">Freshmeat</a> et <a href="http://www.versiontracker.com/dyn/moreinfo/macosx/14738">versiontracker</a> !</p>

<h2>Features</h2>

  <p> Pour plus d'informations sur les fonctionnalités supportées sur votre système
  d'exploitation veuillez consulter la <a href="/vlc/features.html">liste complète des fonctionnalités</a> et celles du <a href="streaming-features.html">streaming</a> 
  Vous pouvez aussi consulter <a href="/vlc/screenshots.html">les
  copies d'écrans de VLC</a>. </p>
  <p>Afin de personnaliser le look de votre VLC media player, utilisez des 
  <a href="/vlc/skins.php">Skins</a> !
  </p>

</div>

<div id="left">

  <h2>Téléchargez VLC</h2>

  <p>Choisissez votre système d'exploitations pour télécharger les exécutables VLC:</p>
<?php
function addos( $name, $class, $url, $bold=false )
{
if( $bold ) $style=' style="font-weight:bold"';
else $style='';
echo "<li class='$class' $style><a href='$url'>$name</a></li>";
}
?>
<div class="os1">
  <ul class="os">
<?php addos( "Windows", "windows", "download-windows.html", true );
      addos( "Mac&nbsp;OS&nbsp;X", "macosx", "download-macosx.html", true );
      addos( "BeOS", "beos", "/download-beos.html" );
      addos( "Debian GNU/Linux", "debian", "/download-debian.html" );
      addos( "Ubuntu Linux", "ubuntu", "/download-ubuntu.html" );
      addos( "Mandriva Linux", "mandrake", "/download-mandriva.html" );
      addos( "Fedora Core", "fedora", "/download-fedora.html" );
      addos( "Familiar Linux", "familiar", "/download-familiar.html" );
?>
</ul>
</div><div class="os2">
<ul class="os">
<?php
      addos( "YOPY/Linupy", "linupy", "/download-linupy.html" );
      addos( "Zaurus", "zaurus", "/download-zaurus.html" );
      addos( "SUSE Linux", "suse", "/download-suse.html" );
      addos( "Red Hat Linux", "redhat", "/download-redhat.html" );
      addos( "WinCE / PocketPC", "wince", "/download-wince.html" );
      addos( "Slackware Linux", "slackware", "/download-slackware.html" );
      addos( "ALT Linux", "altlinux", "/download-altlinux.html" );
?>
  </ul></div>

<div class="clearme">

<p>Pour les autres systèmes d'exploitation supportés, il n'y a pas d'exécutables
pré-compilés. Vous devrez récupérer le code source de VLC et les librairies
requises et les assembler vous même:</p>
</div>
<div class="os1">
  <ul class="otheros">
<?php addos( "NetBSD", "netbsd", "/download-sources.html" );
      addos( "OpenBSD", "openbsd", "/download-sources.html" );
      addos( "FreeBSD", "freebsd", "/download-freebsd.html" );
      addos( "Solaris", "solaris", "/download-sources.html" );
?>
  </ul>
</div>
<div class="os2">
<ul class="otheros"> 
<?php
      addos( "QNX", "qnx", "download-sources.html" );
      addos( "Gentoo Linux", "gentoo", "download-gentoo.html" );
      addos( "Crux Linux", "cruxlinux", "download-crux.html" );
?>
  </ul>
</div>
<div class="clearme">
  <p>Vous pouvez également obtenir directement le code sourec sur <a href="download-sources.html">
  </a>.</p>

  <p>Vous n'avez pas trouvé votre OS / Distribution dans cette liste mais savez où
  trouver des versions de VLC media player? Veuillez <a
  href="/team/">nous contacter</a> afin que nous puissions ajouter ce lien.</p>
</div>
</div>

<div id="right">
  <div class="panel-blue">
    <div class="hd">
      <div class="c"></div>
    </div>

    <div class="bd">
      <div class="c">
        <!-- main content goes here -->
        <p><span class="vlcversion">Téléchargements de VLC 0.8.6: <span id="vlccounter">Loading...</span></span></p>
        <p><span id="dlrate">Calcul en cours...</span> téléchargements par seconde.</p>
        <div class="more"><a href="/stats/downloads.html">Statistiques complètes</a></div>
      </div>
    </div>

    <div class="ft">
      <div class="c"></div>
    </div>
  </div> <!-- end panel -->

    <h2>Documentation</h2>

  <p>Regardez la <a href="doc.html">documentation</a>, et allez sur les 
  <a href="http://forum.videolan.org">forum</a> et regardez la 
  <a href="http://wiki.videolan.org">base de connaissance</a>.</p>

</div> <!-- RIGHT -->

<?php footer('$Id$'); ?>
