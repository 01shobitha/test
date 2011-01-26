<?php
   $title = "VLC media player - Download Skins";
   $lang = "en";
   $menu = array( "vlc", "skins-download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<?php
  function AddSkin( $img, $text, $vlt, $zip )
  {
?>
<table class="skins-download">
 <tr>
  <td>
   <a href="/vlc/skins/<?php echo $img; ?>">
   <img width="200" src="/vlc/skins/<?php echo $img; ?>"
     class="skins-screenshot" alt="screenshot"/>
   </a>
  </td>
  <td>
   <table>
    <tr><td class="skins-comment">
      <?php echo $text; ?>
    </td></tr>
    <?php if(strlen($zip)>2) { ?><tr>
<td><a class="skins-download" href="/vlc/skins/<?php echo "$zip"; ?>">Download ZIP file</a>
    </td></tr> <?php } ?>
    <?php if(strlen($vlt)>2) { ?><tr>
<td><a class="skins-download" href="/vlc/skins/<?php echo "$vlt"; ?>">Download VLT file</a>
    </td></tr> <?php } ?>
   </table>
  </td>
 </tr>
</table>
<?php
  }
?>

<h1 class="bigtitle">Download skins</h1>

<p><span style="color: red; font-weight: bold; font-size: 20pt;">This is the skins 1 download page. Current vlc versions use the <a href="download-skins2.html">skins2</a> interface.</span></p>

<h2>Skins VS skins2</h2>

<p><span style="color: red;"><b>Important note:</b></span><br> VLC had two
different skins modules, named <i>skins</i> and <i>skins2</i>, the latter being
a complete rewrite of the former. The <i>skins</i> module is now deprecated,
and will not be included in the next release (VLC 0.7.2 is the last version to
feature the <i>skins</i> module).</p>

<p>The <a href="/vlc/skins-create.html">documentation</a> and <a
href="/vlc/download-skins.html">download section</a> for the <i>skins</i>
module are still kept in case someone wants to port old skins to the
<i>skins2</i> module, but they are going to disappear one day or other...</p>

<p>On this page you will only find skins for the old <i>skins</i> module. There
is a different <a href="/vlc/download-skins2.html">download page</a> for the
<i>skins2</i> module.</p>


<h2>How to use these skins?</h2>

<p>There are two types of skin files: <b>vlt</b> files and <b>zip</b> files.
It is advised to use <b>vlt</b> files, because they can be used directly by
VLC, without any need to unzip the skin files.</p>

<p>See <a href="/vlc/skins.html">this page</a> for more details on how to load
a downloaded skin.</p>


<h2>Basic skin</h2>

<?php AddSkin(
   "default.jpg",
   "This is the basic skin, it is available by default on releases.",
   "default.vlt",
   "default.zip" );
?>

<h2>iTunes skin</h2>

<?php AddSkin(
   "itunes.jpg",
   "Skin adapted from iTunes by mdi.",
   "itunes.vlt",
   "itunes.zip" );
?>

<h2>Phoenix skin</h2>

<?php AddSkin(
   "phoenix.jpg",
   "Skin adapted from the MusicMatch Phoenix Omega skin by Immij.",
   "phoenix.vlt",
   "" );
?>

<h2>Winamp5 skin</h2>
<?php AddSkin(
   "winamp5.jpg",
   "This is a Winamp5-like skin, made by kty0ne and improved by Jérôme Guilbaud.",
   "winamp5.vlt",
   "winamp5.zip" );
?>

<h2>Hifi skin</h2>
<?php AddSkin( 
   "skin-hifi.jpg",
   "This skin was made by Good old KroKoFox.",
   "",
   "kkf.zip");
?>

<h2>Aquax skin</h2>
<?php AddSkin(
   "aquax.jpg",
   "This skin was originally made for zinf by Andreas Koslowski.<br />
   Skin adapted to VLC by Laurent Aimar",
   "aquax.vlt",
   "");
?>

<h2>KiND skin</h2>
<?php AddSkin(
   "KiND.jpg",
   "This skin was made by Karim Nassar.",
   "KiND.vlt",
   "");
?>

<h2>Orange skin</h2>
<?php AddSkin(
   "orange.jpg",
   "This skin was made by Ralf Niedling.",
   "orange.vlt",
   "");
?>

<h2>BSPlayer skin</h2>
<?php AddSkin(
   "bsplayer.jpg",
   "This is an imitation of BSPlayer, made by Pierre Patoureaux.",
   "BSPlayer.vlt",
   "BSPlayer.zip" );
?>

<h2>Skull Head skin</h2>
<?php AddSkin(
   "crane.jpg",
   "This skin has been made by Pierre Patoureaux.",
   "crane.vlt",
   "crane.zip" );
?>

<?php footer('$Id$'); ?>
