<?php
   $title = "VLC media player - Download Skins";
   $lang = "en";
   $date = "28 March 2003";
   $menu = array( "vlc", "skins-download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
?>

<?php
  function AddSkin( $img, $text, $vlt )
  {
?>
<table class="skins-download">
 <tr>
  <td>
   <a href="/vlc/skins2/<?php echo $img; ?>">
   <img width="200" src="/vlc/skins2/<?php echo $img; ?>"
     class="skins-screenshot" alt="screenshot"/>
   </a>
  </td>
  <td>
   <table>
    <tr><td class="skins-comment">
      <?php echo $text; ?>
    </td></tr>
    <?php if(strlen($vlt) > 2) { ?><tr>
<td><a class="skins-download" href="/vlc/skins2/<?php echo "$vlt"; ?>">Download VLT file</a>
    </td></tr> <?php } ?>
   </table>
  </td>
 </tr>
</table>
<?php
  }
?>

<h1>Download skins</h1>

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

<p>On this page you will only find skins for the new <i>skins2</i> module.</p>


<h2>How to use these skins?</h2>

<p>See <a href="/vlc/skins.html">this page</a> for more details on how to load
a downloaded skin.</p>

<p><span style="color: red;"><b>Note for Windows users:</b></span><br/>
In versions of VLC up to 0.7.2 (included), a bug prevents to load the .vlt file
as indicated (it is fixed in newer versions). Here is a workaround:</p>

<ul>
  <li>Rename the .vlt file in a .tar.gz file (ex: winamp5.vlt becomes
  winamp5.tar.gz)</li>
  <li>Extract the files from the .tar.gz archive using your favourite
  compression software</li>
  <li>When changing the skin, specify the <i>theme.xml</i> file that you just
  extracted (among other files) instead of the .vlt file</li>
  <li>That's it!</li>
</ul>


<h2>Create your own skin!</h2>

<p>You don't like the skins listed on this page? Just <a
href="/vlc/skins2-create.html">create a better one</a>!<br/>
Don't worry, you don't need any programming skills... Some knowledge about
graphics software might ease the job, though :-)</p>


<h2>Winamp5</h2>
<?php AddSkin(
   "winamp5.jpg",
   "Skin made by kty0ne, improved by Jérôme Guilbaud and ported<br/>
    to skins2 by Olivier Teulière ",
   "winamp5.vlt" );
?>

<h2>Chaos</h2>
<?php AddSkin(
   "chaos.jpg",
   "Based on the xmms Chaos skin by Omar Hussain, ported by Cyril<br/>
    Deguet<br/> ",
   "chaos.vlt" );
?>

<h2>Void</h2>
<?php AddSkin(
   "void.jpg",
   "By Black",
   "void.vlt" );
?>


<h2>iTunes</h2>
<?php AddSkin(
   "itunes.jpg",
   "Skin made by mdi, improved and ported to skins2 by Steven Sheehy",
   "itunes.vlt" );
?>


<h2>Solar</h2>
<?php AddSkin(
   "solar.png",
   "Skin made by Piers Cornwell, icons by Jakub Steiner",
   "solar.vlt" );
?>

<h2>Vplayer</h2>
<?php AddSkin(
   "vplayer.jpg",
   "Skin made by scahoo",
   "vplayer.vlt" );

?>

<h2>Media Player</h2>

<?php AddSkin(
   "MediaPlayer.png",
   "Skin made by Asim",
   "MediaPlayer.zip" );
?>

<h2>DPlayer</h2>

<?php AddSkin(
   "DPlayer.png",
   "Skin made by Mazlum Alptekin",
   "DPlayer.vlt" );
?>

<h2>WB Kids</h2>

<?php AddSkin(
   "WB.png",
   "Skin made Petrol Designs' and ported by Mohammed Adnène Trojette",
   "WB.vlt" );
?>

<?php footer('$Id: download-skins.html 2517 2004-05-23 17:11:06Z ipkiss $'); ?>
