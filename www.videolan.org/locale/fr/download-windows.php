<?php
   $title = "VLC media player for Windows";
   $lang = "fr";
   $menu = array( "fr", "windows" );
   $additional_css = array("/style/panels.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

<?php function pkgitemdev($version,$name) { ?><li><a href="http://downloads.videolan.org/pub/videolan/testing/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a></li><?php } ?>

<p id="disclaimer">Attention ! Seules les pages principales du site sont traduites pour des raisons de maintenabilité. Mais les pages restantes n'ont que peu de textes.</p>

<h1> VLC media player pour Windows </h1>
<div id="left">

  <h2>Dernier paquetage (0.9.9)</h2>

<?php
    pkgitem( "Windows self-extracting package",
                   "0.9.9/win32","vlc-0.9.9-win32.exe","vlc");
    pkgitem("Windows 7zip (identical to the above but without the installer)",
                  "0.9.9/win32","vlc-0.9.9-win32.7z","vlc");
    pkgitem("Windows zip packages (identical to the above)",
                  "0.9.9/win32","vlc-0.9.9-win32.zip","vlc");
?>

  <h2>Anciennes versions</h2>
  <?php browse_old("vlc") ?>

</div> <!-- LEFT -->

<div id="right">
  <h2>Code source</h2>

  <p>Si vous voulez télécharger le <a href="/download-sources.html">code source</a> de VLC media player.</p>

  <?php panel_start( "gray" ); ?>
        <p><strong>Utilisateurs de Windows 95/98/Me:</strong> Veuillez noter que ces versions de Windows ne sont pas officiellement supportées. Aucun développeur VideoLAN n'utilise ces versions de système, ce qui les rend difficiles à supporter. VLC devrait globalement fonctionner avec ces versions, mes certaines incompatibilités peuvent apparaître. Vous pouvez avoir besoin de télécharger <a href="http://www.microsoft.com.nsatc.net/globaldev/handson/dev/mslu_announce.mspx">le support Microsoft pour Unicode sur les systèmes Windows 95/98/Me</a>. Les deux fichiers MSLU doivent être copiés dans le répertoire <code>C:\Windows\System\</code>.</p>
  <?php panel_end(); ?>

</div> <!-- RIGHT -->

<?php footer('$Id$'); ?>
