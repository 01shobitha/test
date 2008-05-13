<?php
   $title ="VideoLAN Manager - Documentation";
   $lang = "en";
   $date = "23 April 2008";
   $menu = array( "vlma", "documentation" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="fullwidth">
<h1>VLMa - User documentation</h1>

<h2>Generalities</h2>

<p>The VLMa daemon saves its state in the file 'data.xml' in a subdirectory '.vlma' of the user home.
Be carefull : each time you make a modification, it isn't automaticaly saved. You need to click on 'Save' in the left menu 
if you want to. If you stop the deamon whitout having saved, you won't find your modification the next time you run 
the daemon.</p>

<p>VLMa also save its configuration in the file 'config.xml' in a subdirectory '.vlma' of the user home.</p>

<h2>Contents</h2>

<p>Here you can find some documentation about the VLMa thanks to Thanh-tra Nguyen about:</p>

<ul class="bullets">
  <li><a href="/vlma/doc/server.html">servers,</a></li>
  <li><a href="/vlma/doc/media.html">medias,</a> (satellite and Digital terrestrial television channels)</li>
  <li><a href="/vlma/doc/fileChannel.html">file channels,</a></li>
  <li><a href="/vlma/doc/satellite.html">satellites,</a></li>
  <li><a href="/vlma/doc/schedule.html">how to schedule a media,</a></li>
  <li><a href="/vlma/doc/troubleshooting.html">and troubleshooting.</a></li>
</ul>

</div>

<?php footer('$Id$') ?>
