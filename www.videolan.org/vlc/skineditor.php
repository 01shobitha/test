<?php
   $title = "VLC media player - Skin Editor";
   $lang = "en";
   $menu = array( "vlc", "skins" );

   

   $additional_css = array("http://images.videolan.org/images/slimbox2/slimbox2.css");


   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");  

      

   $latestv = "0.8.5";
?>

<h1>VLC media player Skin Editor</h1>


<table>
	<tr>
		<td>
			<a href="http://images.videolan.org/images/screenshots/skineditor/leopard_zoom.jpg" rel="lightbox-s" title="Editing the Crossover Leopard skin">
		      <img src="http://images.videolan.org/images/screenshots/skineditor/leopard_zoom_s.jpg" alt="VLC Skin Editor"/>
			</a>
		</td>
		<td>
			<a href="http://images.videolan.org/images/screenshots/skineditor/winamp5_button.jpg" rel="lightbox-s" title="Editing a button of the Winamp5 skin">
				<img src="http://images.videolan.org/images/screenshots/skineditor/winamp5_button_s.jpg" alt="VLC Skin Editor"/>
			</a>
		</td>
		<td>
			<a href="http://images.videolan.org/images/screenshots/skineditor/default_sbmp.jpg" rel="lightbox-s" title="Editing a SubBitmap of the Default Remix skin">
				<img src="http://images.videolan.org/images/screenshots/skineditor/default_sbmp_s.jpg" alt="VLC Skin Editor"/>
			</a>
		</td>
	</tr>
</table>
  <p>

  The VLC Skin Editor aims at giving designers an easy opportunity to create skins for the VLC Media Player.

  Until now skin designers had to have knowledge of the VLC Skins2 XML System to create their skins.

  Now they have an easy alternative: The <a href="http://en.wikipedia.org/wiki/WYSIWYG" target="_blank" class="wiki">WYSIWYG</a> VLC Skin Editor.

  </p>

  <p>

  For tutorials and help on the usage of the Skin Editor turn to the <a href="skinedhlp">online help</a>.

  </p>

  

  <h2>Download the latest build</h2>

  <p style="color:#ef2929;">

  This program requires the Java Runtime Environment (JRE) 6 or later.

  If you do not have it, download it at <a href="http://java.sun.com/javase/downloads/index.jsp" target="_blank">the Java download page</a>.

  </p> 

  <p>
  You can download the latest build at <a href="http://d-gfx.kognetwork.ch/VLC/skineditor/">the development page</a>.
  </p>


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

      <li>Can handle all skins created by hand</li>

      <li>Available in different languages</li>

  </ul>

        

  <h2>How to support the project</h2>

  <p>The project needs developers, but especially also testers who check the program for usability and identify bugs.<br/>

  If you have knowledge of Java feel free to join the developer team. Check the

  <a href="http://d-gfx.kognetwork.ch/VLC/skineditor" target="_blank">development page</a> for more information.</p>

  




<?php footer('$Id: skineditor.php 2011-04-05 10:00 altglass$'); ?>
