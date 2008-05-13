<?php
   $title ="VideoLAN Manager - Documentation";
   $lang = "en";
   $date = "23 April 2008";
   $menu = array( "vlma", "documentation" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="fullwidth">

<h1>Servers</h1>

<h2>Generalities</h2>
<p>VLMa allows you to manage automaticaly severals streaming servers. Each server has adapters. Currently, VLMa can manage
servers with DVB-S and DVB-T adapters compatible with Linux kernel drivers.
See <a href="http://www.linuxtv.org/">http://www.linuxtv.org/</a> for more details.</p>
<p>Your streaming server can host a minimal Linux installation. You just need a VLC. The one which comes with your distribution
may be fine.</p>
<p>One important things is you must run the VLC in the server with a telnet Interface to allow the VLMa to give its streaming orders.
And we also recommand you to run your VLC in a screen using for instance the command :<br/>
screen -r -d -S vlc-vlma vlc -I telnet -vvv --color</p>

<h2>Servers list</h2>
<p>If you click on the tab 'Servers', you will find the servers which have to broadcast the channels you have programed.</p>
<p>Those machines own one or several DVB-T (to get digital terrestrial television channels) or DVB-S (to get satellite channels) adapters.
To have more details about a server, click on 'Details'. You will see his DNS and IP address. And if you have configured it on your server,
you will also RRD graphs.</p>

<h2>Add a server</h2>
<p>It's very easy! If you want to add a new machine, you just have to provide a name and its DNS or IP address!</p>

<h2>Add an adapter</h2>
<p>To work, VLMa needs to know the adapters you have in your server (DVB-S, DVB-T).
Linux udev gives number to each adapter it detects when you start it. The first it finds is given the number 0 and for the following it increments this number by one.</p>
<p>Click on "Add an adapter". After entering the name of the adapter which is its udev number (0, 1, 2 ...), select the adapter type.
Finally click on "Add" and then will appear the new adapter in the list of the current server. If you are adding a DVB-S adapter you need also to select the satellite which the adapter is linked to.</p>
<p>Note: The 'Files-Adapters' are fictive. However you must enter one if you want to broadcast a file channel from this server.</p>

</div>

<?php footer('$Id$') ?>
