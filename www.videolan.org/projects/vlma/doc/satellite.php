<?php
   $title ="VideoLAN Manager - Documentation";
   $lang = "en";
   $menu = array( "vlma", "documentation" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="left">
<h1>Satellites</h1>

<h2>Adding a new satellite</h2>

<p>VLMa gives you the ability to connect different satellites on your DVB-S adapters.
To to able to provide proper broadcasting commands, it needs to know which DVB-S adapter is connected to which satellite. This is why you need to enter the satellite a DVB-S adapter is linked to, once you add it to the list.</p>

<p>To add a new satellite, click on the left menu link and provide the name and the coverage area of the satellite.</p>
<p>You can get the coverage areas of a satellite thanks to the site <a href="http://www.satcodx.com">
http://www.satcodx.com</a>. This information lets VLMa know which satellite channel belongs to which satellite.</p>

<h2>Satellite list</h2>

<p>After having added a satellite, you can edit it to modify its coverage list whenever you want.<p>

</div>

<div id="right">
<a href="http://download.videolan.org/projects/vlma/screenshot/0.2.0/satelliteadd.png"><img style="width:100%; border: 1px solid #ccc; margin-top: 20px" alt="Add a satellite" src="http://download.videolan.org/projects/vlma/screenshot/0.2.0/satelliteadd.png" /></a>
</div>

<?php footer('$Id$') ?>
