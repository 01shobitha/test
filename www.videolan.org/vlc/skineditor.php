<?php
   $title = "VLC media player - Skin Editor";
   $lang = "en";
   $menu = array( "vlc", "skineditor" );
   $enable_live = true;
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1> VLC media player Skin Editor</h1>

<div class="vlc-screenshot">
  <img src="/images/screenshots/skineditor-linux.jpg" alt="VLC Skin Editor on Ubuntu Linux" title="VLC Skin Editor on Ubuntu Linux"/>
</div>

<div id="description" style="height:200px">
<p>
The VLC Skin Editor aims at giving designers an easy opportunity to create skins for the VLC Media Player.
Until now skin designers had to have knowledge of the VLC Skins2 XML System to create their skins.
Now they have an easy alternative: The <a href="http://en.wikipedia.org/wiki/WYSIWYG" target="_blank" class="wiki">WYSIWYG</a> VLC Skin Editor.
</p>
<p>
The program is still under development and is fully compatible to VLC 0.9.0.
Note that it uses some features that are not supported by VLC 0.8.6c and older.
</p>
<p>
For tutorials and help on the usage of the Skin Editor turn to the <a href="skinedhlp">online help</a>.
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
        
  <h2>How to support the project</h2>
  <p>The project needs developers, but especially also testers who check the program for usability and identify bugs.<br/>
  If you have knowledge of Java feel free to join the developer team. Check the
  <a href="http://trac.videolan.org/skin-designer" target="_blank">Trac page</a> for more information.</p>
</div>

<div id="right">
  <div class="panel-blue">
    <div class="hd">
      <div class="c"></div>
    </div>
    <div class="bd">
      <div class="c">
        <h1>Download</h1>
        <p style="color:#ef2929;">
          This program requires the Java Runtime Environment (JRE) 6 or later.
          If you do not have it, download it at <a href="http://java.sun.com/javase/downloads/index.jsp" target="_blank">java.sun.com</a>.
        </p>        
        <p>          
          <b>Version <? echo file_get_contents("http://d-gfx.kognetwork.ch/VLC/skineditor/dl.php?getmajorv"); ?></b><br>
          <img src="http://download2.videolan.org/images/12-em-down.png" alt=""/>
          <a href="http://d-gfx.kognetwork.ch/VLC/skineditor/dl.php?dlsetupw32" target="_blank">Download for Windows (Installer)</a><br>
          <img src="http://download2.videolan.org/images/12-em-down.png" alt=""/>
          <a href="http://d-gfx.kognetwork.ch/VLC/skineditor/dl.php?dlmajor" target="_blank">Download for Windows (ZIP)</a><br>
          <img src="http://download2.videolan.org/images/12-em-down.png" alt=""/>
          <a href="http://d-gfx.kognetwork.ch/VLC/skineditor/dl.php?dltargz" target="_blank">Download for other operating systems (TAR+GZIP)</a><br>
          </s><br>
          <span style="color:#ef2929">
          The last official release contains major bugs, please use the development build instead.
          </span>
          <br/><br/>
          <b>Last development build:</b><br/>
          <img src="http://download2.videolan.org/images/12-em-down.png" alt=""/>        
          <a href="http://d-gfx.kognetwork.ch/VLC/skineditor/dl.php?dldev" target="_blank">Download Build 
            <? echo file_get_contents("http://d-gfx.kognetwork.ch/VLC/skineditor/dl.php?getdevv"); ?></a>
          <br/><br/>
          <i>Number of downloads:
          <? echo file_get_contents("http://d-gfx.kognetwork.ch/VLC/skineditor/dl.php"); ?></i>
        </p>
      </div>      
    </div>
    <div class="ft">
      <div class="c"></div>
    </div>
  </div>
  <div class="panel-orange">
    <div class="hd">
      <div class="c"></div>
    </div>
    <div class="bd">
      <div class="c">
        <h1>Development plans</h1>
        <ul class="panel-orange-bullet">
          <li>Bug finding and fixing</li>          
          <li><b>version 0.7.*</b>
            <ul>              
              <li>New Layout for editing dialogs that look better on Linux</li>
              <li>Slider background generating for vertical sliders.</li>
            </ul>
          </li>
          <li><b>version 0.8</b>
            <ul>
              <li>New parsing system that can handle all valid skin files</li>
              <li>Slider editing with the mouse</li>
            </ul>
          </li>
        </ul>
      </div>      
    </div>
    <div class="ft">
      <div class="c"></div>
    </div>
  </div>
 </div> 

<?php footer('$Id: skineditor.php 4777 2008-09-20 17:30 altglass$'); ?>
