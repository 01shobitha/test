<?php
   $title = "VLC media player - Skin Editor";
   $lang = "en";
   $menu = array( "vlc", "download" );
   $date = "21 February 2008";
   $enable_live = true;
   require($_SERVER["DOCUMENT_ROOT"]."/VLC/www.videolan.org/include/header.php");
?>

<h1> VLC media player Skin Editor</h1>

<div class="vlc-screenshot">
  <img width="300" height="225" src="/images/screenshots/skineditor-win32.png" alt="VLC on Windows"/>
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
<h2>Download</h2>
<p style="font-weight:bold;color:#ef2929;">
This program requires the Java Runtime Environment (JRE) 6 or later. If you do not have it, download it at <a href="http://java.sun.com/javase/downloads/index.jsp" target="_blank">java.sun.com</a>.
</p>
<div class="os1">
  <ul class="os">
    <li><a href="http://d-gfx.kognetwork.ch/VLC/skineditor/dl.php?f=VLCSkinEditor_0_6_1_b.zip" target="_blank">Download v. 0.6.1b</a></li>
  </ul>
</div>
<?php footer('$Id: Whatever... $'); ?>
