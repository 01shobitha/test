<?php
   $title = "VLC media player - Skin Editor";
   $lang = "en";
   $menu = array( "vlc", "skineditor" );
   $date = "21 February 2008";
   $enable_live = true;
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1> VLC media player Skin Editor</h1>

<div class="vlc-screenshot">
  <img src="/images/screenshots/skineditor-linux.jpg" alt="VLC on Windows"/>
</div>

<div id="description">
<p>
The VLC Skin Editor aims at giving designers an easy opportunity to create skins for the VLC Media Player.
Until now skin designers had to have knowledge of the VLC Skins2 XML System to create their skins.
Now they have an easy alternative: The <a href="http://en.wikipedia.org/wiki/WYSIWYG" target="_blank" class="wiki">WYSIWYG</a> VLC Skin Editor.
</p>
<p>
The program is still under development and is fully compatible to VLC 0.9.0.
Note that it uses some features that are not supported by VLC 0.8.6c and older.
</p>
</div>

<div id="left">
  <h2>Features</h2>
  <ul class="blue-bullet">
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
      <li>Can also handle skins that were created by hand if they meet certain requirements:
        <ul>
          <li>One XML tag per line</li>
          <li>No line breaks inside a XML tag</li>
        </ul>
      </li>  
  </ul>
        
  <h2>How to help</h2>
  <p>The project needs testers who check the program for usability and identify bugs.<br>
  If you have knowledge of Java feel free to join the developer team. Check the
  <a href="http://trac.videolan.org/skin-designer" target="_blank">Trac page</a> for more information.</p>
</div>

<div id="right"><!--start panel-->
  <div class="panel-blue">
    <div class="hd">
      <div class="c"></div>
    </div>
    <div class="bd">
      <div class="c">
        <h2>Download</h2>
        <p style="font-weight:bold;color:#ef2929;">
        This program requires the Java Runtime Environment (JRE) 6 or later. If you do not have it, download it at <a href="http://java.sun.com/javase/downloads/index.jsp" target="_blank">java.sun.com</a>.
        </p>
        <br>
        <img src="http://download.videolan.org/images/12-em-down.png" alt="">
        <a href="http://d-gfx.kognetwork.ch/VLC/skineditor/dl.php?f=VLCSkinEditor_0_6_1_b.zip" target="_blank">Download v. 0.6.1b</a>
      </div>      
    </div>
    <div class="ft">
      <div class="c"></div>
    </div>
  </div>
 </div>
 <div class="panel-orange">
    <div class="hd">
      <div class="c"></div>
    </div>
    <div class="bd">
      <div class="c">
        <h2>Development plans</h2>
        <ul class="panel-orange-bullet">
          <li>Bug finding and fixing</li>    
          <li><b>version 0.7</b>
            <ul>
              <li>SliderBackground Generator enhancement</li>        
              <li>Enable/enhance duplication of Resources/Windows/Layouts/Items</li>

            </ul>
          </li>    
          <li><b>version 0.7.*</b></li>
            <ul>
              <li>Enhanced online help &amp; tutorials</li>
              <li>New Layout for editing dialogs that look better on Linux</li>
            </ul>
        </ul>
      </div>      
    </div>
    <div class="ft">
      <div class="c"></div>
    </div>
  </div>
 </div> 
</div>

<?php footer('$Id: skineditor.php 4459 2008-02-22 17:50 altglass$'); ?>
