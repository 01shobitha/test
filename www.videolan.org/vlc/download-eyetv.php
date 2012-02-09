<?php
   $title = "VLC media player - EyeTV capture plugin";
   $lang = "en";
   $menu = array( "vlc", "download" );
   $additional_css = array("/style/panels.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>



<h1> EyeTV capture plugin </h1>

<div id="left">

  <div id="description">
  <h2>Capturing from your EyeTV with VLC media player</h2>

  <p>You can download a plugin for EyeTV here, which you can use to process live streams received by the EyeTV application.</p>

  </div>

  <h2>Download</h2>
  <?php pkgitem_sf( "VLC Plugin for EyeTV",
               "../eyetv","eyetv_vlcplugin_installer.zip","vlc"); ?>

</div> <!-- div left -->

<div id="right">

<?php panel_start( "orange" ); ?>
<h1>Screenshots</h1>
<div class="screenshot"><a href='http://download.videolan.org/vlc/screenshots/eyetv/eyetv_and_vlc.jpg'>
    <img src='http://download.videolan.org/vlc/screenshots/eyetv/tn_eyetv_and_vlc.jpg' alt='Selecting an EyeTV channel before recording' width='150' /></a>
    <p>Selecting an EyeTV channel before recording</p>
</div>
<?php panel_end(); ?>

</div> <!-- div right -->

<?php footer('$Id$'); ?>
