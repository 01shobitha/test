<?php
   $title ="VideoLAN Manager - Documentation";
   $lang = "en";
   $date = "23 April 2008";
   $menu = array( "vlma", "documentation" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="fullwidth">
<h1>Satellites</h1>

<h2>Add a new satellite</h2>

<p>VLMa gives you the ability to connect different satellites on your DVB-S adapters.
But, to properly give the broadcasting orders, it needs to know which DVB-S adapter is connected
to which satellite. This is why before adding a new DVB-S adapter, you need first to enter the satellite
it is linked to.</p>

<p>To add a new satellite, click on the left menu link and provide the name and the coverage area of the satellite.</p>
<p>You can get the coverage areas of a satellite thanks to the site <a href="http://www.satcodx.com">
http://www.satcodx.com</a>. This information lets VLMa know which satellite channel belongs to which satellite.</p>

<h2>Satellite list</h2>

<p>After having added a satellite, you can edit it to modify its coverage list whenever you want.<p>

</div>

<?php footer('$Id$') ?>
