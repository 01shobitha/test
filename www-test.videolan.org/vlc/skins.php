<?php
   $title = "VLC media player - Skins";
   $lang = "en";
   $date = "28 March 2003";
   $menu = array( "vlc", "skins" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
?>

<h1> Skins </h1>

<div id="left">

<h2>Features</h2>

<p>Here is a short overview of the main features provided by the skins2
interface:</p>

<ul>
  <li>Portability: skins work on Windows 98/ME/NT/2000/XP, and any X11-based OS like Linux</li>
  <li>Ability to load a skin dynamically</li>
  <li>Many predefined controls (button, slider, playlist, etc...)</li>
  <li>Same dialog boxes as the wxWidgets interface</li>
  <li>Resizable windows</li>
  <li>Support for different layouts</li>
  <li>Windows anchoring</li>
  <li>Hotkeys support</li>
  <li>Embedded video output (still experimental)</li>
  <li>And much more...</li>
</ul>


<h2>How to use skins?</h2>

<p>To launch VLC with the <i>skins2</i> interface:</p>

<ul>
  <li>Download and install the <a href="/vlc/">latest VLC version</a></li>

  <li>(X11 users) Launch VLC with the following command-line:
  <tt>vlc -I skins2</tt><br>
  (or, for the old deprecated <i>skins</i> module: <tt>vlc -I skins</tt>)</li>

  <li>(Windows users) Launch VLC using the appropriate shortcut in the Start
  menu. You can also start VLC from command-line, in a DOS window.</li>

  <li>If you don't want to use the default skin, just download another one on
  the <a href="/vlc/download-skins2.html">skins download page</a></li>

  <li>Once VLC is started with the <i>skins2</i> interface (or with the
  <i>skins</i> one), you can use the CTRL+S shortcut to load the new one.
  Enjoy!</li>
</ul>


<h2>Making your own skin</h2>

<p>If you think you have the artistic fiber, feel free to <a
href="/vlc/skins2-create.html">create your own skin</a>, it does not require
any programming skill. We will be glad to add your new skin to the website!</p>

</div>

<div id="right">

<?php panel_start( "gray" ); ?>

<h1>Skins VS skins2</h1>

<p><span style="color: red;"><b>Important note:</b></span><br> VLC had two
different skins modules, named <i>skins</i> and <i>skins2</i>, the latter being
a complete rewrite of the former. The <i>skins</i> module is now deprecated,
and is not included in VLC releases since version 0.8.0.</p>

<p>The <a href="/vlc/skins-create.html">documentation</a> and <a
href="/vlc/download-skins.html">download section</a> for the <i>skins</i>
module are still kept in case someone wants to port old skins to the
<i>skins2</i> module, but they are going to disappear one day or other...</p>

<?php panel_end(); ?>

</div>

<?php footer('$Id$'); ?>
