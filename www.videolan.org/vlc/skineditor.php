<?php
   $title = "VLC media player - Skin Editor";
   $lang = "en";
   $menu = array( "vlc", "skins" );
   $new_design = true;

   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

<div class="container">
	<h1 class="bigtitle">VLC media player Skin Editor</h1>
	<p>
		The VLC Skin Editor aims at giving designers an easy opportunity to create skins for the VLC Media Player without having to know about the internal structure of VLC's skin files.
	</p>
	<p>
		The skin editor is <a href="http://en.wikipedia.org/wiki/WYSIWYG" target="_blank" rel="noopener" class="wiki">WYSIWYG</a> editor for VLC skins that helps designers to create skins faster and easier.
	</p>

	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-4">
			<a href="//images.videolan.org/images/screenshots/skineditor/leopard_zoom.jpg" class="thumbnail" title="Editing the Crossover Leopard skin">
				<img style="height: 240px" src="//images.videolan.org/images/screenshots/skineditor/leopard_zoom_s.jpg" alt="VLC Skin Editor Screenshot">
			</a>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<a href="//images.videolan.org/images/screenshots/skineditor/winamp5_button.jpg" class="thumbnail" title="Editing a button of the Winamp5 skin">
				<img style="height: 240px" src="//images.videolan.org/images/screenshots/skineditor/winamp5_button_s.jpg" alt="VLC Skin Editor Screenshot">
			</a>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<a href="//images.videolan.org/images/screenshots/skineditor/default_sbmp.jpg" class="thumbnail" title="Editing a SubBitmap of the Default Remix skin">
				<img style="height: 240px" src="//images.videolan.org/images/screenshots/skineditor/default_sbmp_s.jpg" alt="VLC Skin Editor Screenshot">
			</a>
		</div>
	</div>

	<p>For tutorials and help on the usage of the Skin Editor turn to the <a href="skinedhlp">online help</a>.</p>

	<h2>Download</h2>
	<p>You can download the latest build at <strong><a href="http://get.videolan.org/skin-editor/0.8.5/">the download page</a></strong>.</p>

	<div class="alert alert-warning" role="alert">
		<strong>Note!</strong> This program requires the Java Runtime Environment (JRE) 6 or later. If you do not have it, download it at the Java <a href="https://java.com/de/download/" target="_blank" rel="noopener">download page</a>.
	</div>

	<h2>Features</h2>
	<ul class="bullets">
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
	<p>The project needs developers and also testers who check the program for usability and identify bugs.</p>
	<p>If you have knowledge of Java feel free to join the developer team. Check the <a href="https://code.videolan.org/videolan/skin-designer" target="_blank" rel="noopener">source code</a> for more information.</p>
</div>

<?php footer(''); ?>
