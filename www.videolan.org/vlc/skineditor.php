<?php
   $title = "VLC media player - Skin Editor";
   $lang = "en";
   $menu = array( "vlc", "download" );
   $date = "21 February 2008";
   $enable_live = true;
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1> VLC media player Skin Editor</h1>

<div class="vlc-screenshot">
  <img width="300" height="225" src="/images/screenshots/skineditor-win32.jpg" alt="VLC on Windows"/>
</div>

<div id="description">
<p>
The VLC Skin Editor aims at giving designers an easy opportunity to create skins for the VLC Media Player.
Until now skin designers had to have knowledge of the VLC Skins2 XML System to create their skins.
Now they have an easy alternative: The <a href="http://en.wikipedia.org/wiki/WYSIWYG" target="_blank" class="wiki">WYSIWYG</a> VLC Skin Editor.
</p>
<p>
The program is still under development and is fully compatible to VLC 0.9.0.
Note that it uses some features that are not supported by the VLC 0.8.6c and older.
</p>
</div>
<p>
<h2>Download</h2>
<p style="font-weight:bold;color:#ef2929;">
This program requires the Java Runtime Environment (JRE) 6 or later. If you do not have it, download it at <a href="http://java.sun.com/javase/downloads/index.jsp" target="_blank">java.sun.com</a>.
<br>
<img src="http://download.videolan.org/images/12-em-down.png" alt="">
<a href="http://d-gfx.kognetwork.ch/VLC/skineditor/dl.php?f=VLCSkinEditor_0_6_1_b.zip" target="_blank">Download v. 0.6.1b</a>
</p>

<div id="right"><!--start panel-->
  <div class="panel-blue">
    <div class="hd">
      <div class="c"></div>
    </div>
    <div class="bd">
      <div class="c">
        <h2>Features</h2>
        <ul>
        <li>Absolutely no XML knowledge required</li>
        <li>Add images and fonts directly from files</li>
        <li>Helpful visual aid to create SubBitmaps</li>
        <li>Direct preview of how the skin will look</li>
        <li>Preview of how your skin looks in different situations (playing, paused, etc.)</li>
        <li>Import and export of VLT files (packed VLC Skins)</li>
        <li>Easily add and modify items of your skin</li>
        <li>Position your skin's items with the mouse or the arrow keys</li>
        <li>Hierarchic display of skins content</li>
        <li>Makes the creation of action sequences comfortable</li>
        <li>Can also handle skins that were created by hand if they meet certain requirements:<ul><li>One XML tag per line</li><li>No line breaks inside a XML tag</li></ul></li>
      </div>      
    </div>
    <div class="ft">
      <div class="c"></div>
    </div>
  </div> <!-- end panel -->
 </div>
</div>

<?php footer('$Id: skineditor.php 4454 2008-02-21 17:10 altglass$'); ?>
