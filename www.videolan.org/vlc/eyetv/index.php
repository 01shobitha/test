<?php
   $title = "VLC media player - EyeTV capture plugin";
   $lang = "en";
   $menu = array( "vlc", "download" );
   $date = "14 February 2001";
   $enable_live = true;
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>



<h1> EyeTV capture plugin </h1>

<div id="left">

  <div id="description">
  <h2>Capturing from your EyeTV with VLC media player</h2>

  <p>Here you will soon be able to download a plugin for EyeTV. With this plugin you can open with VLC, mpeg streams produced by the EyeTV application.</p>

  </div>

  <h2>Download</h2>
  <?php pkgitem( "EyeTV VLC plugin",
               "eyetv","eyetv_vlcplugin_installer.zip","vlc"); ?>

</div>

<div id="right">

<?php panel_start( "orange" ); ?>
<h1>Screenshots</h1>
<div class="screenshot"><a href='http://download.videolan.org/vlc/screenshots/eyetv/eyetv_and_vlc.jpg'>
    <img src='http://download.videolan.org/vlc/screenshots/eyetv/tm_eyetv_and_vlc.jpg' alt='Selecting an EyeTV channel before recording' width='150' /></a>
    <br />  Selecting an EyeTV channel before recording
</div>
<?php panel_end(); ?>

<?php footer('$Id$'); ?>
