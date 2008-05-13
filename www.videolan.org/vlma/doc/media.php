<?php
   $title ="VideoLAN Manager - Documentation";
   $lang = "en";
   $date = "23 April 2008";
   $menu = array( "vlma", "documentation" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="fullwidth">

<h1>Satellite and digital terrestrial television channels</h1>

<h2>Medias list</h2>

<p>We can find here all the channels TNT and the satellites and their status (streamed, programed but not streamed, 
assigned to a server).</p>

<h2>Update satellite channels list</h2>

<p>To get the satellite channels list of the satellites you receive, first click on 'Update satellite channel list' 
in the left menu. Then go on to the website <a href="http://satcodx.com">http://satcodx.com</a> and choose the 
satellite you want to update.
Copy the address of the web page and put it in the "source" text box. Then click on 'Update'</p>

<h2>Add a TNT channel</h2>

<p>To add a TNT channel, click on the button in the left menu and give its name, its frequency of 
broadcasting and its SID (identifier). After that, you can schedule it.<p>

<h2>Schedule a channel</h2>
<p>To schedule a channel in order to broadcast it on the network, <a href="./schedule.html">see here</a>.</p>

</div>

<?php footer('$Id$') ?>
