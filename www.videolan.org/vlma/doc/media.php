<?php
   $title ="VideoLAN Manager - Documentation";
   $lang = "en";
   $menu = array( "vlma", "documentation" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="fullwidth">

<h1>Satellite and digital terrestrial television channels</h1>

<h2>Media list</h2>

<p>You can find all TNT or satellite channels and their current status here (streamed, programmed but not streamed, 
assigned to a server).</p>

<h2>Updating the satellite channels list</h2>

<p>To get the channel list of the satellites you receive, first click on 'Update satellite channel list' in the left menu. After that, go on to the website <a href="http://satcodx.com">http://satcodx.com</a> and choose the 
satellite you want to update.
Copy the address of the web page and put it in the "source" text box. Now, click on 'Update'.</p>

<h2>Adding a TNT channel</h2>

<p>To add a TNT channel, click on the button in the left menu and give its name, its broadcasting frequency and its SID (identifier). After that, you can schedule it.<p>

<h2>Scheduling a channel</h2>
<p>To schedule a channel in order to broadcast it on the network, <a href="./schedule.html">have a look here</a>.</p>

</div>

<?php footer('$Id$') ?>
