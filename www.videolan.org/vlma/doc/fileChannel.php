<?php
   $title ="VideoLAN Manager - Documentation";
   $lang = "en";
   $date = "23 April 2008";
   $menu = array( "vlma", "documentation" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="fullwidth">

<h1>File channels</h1>

<h2>File channel list</h2>

<p>As in the tab 'Media', you can find the file channels entered to VLMa in the tab 'Files'.</p>
<p>File channels are in fact a list of video or audio files that VLC can broadcast in a loop.</p>
<p>If you click on 'Edit' you will be able to edit the file list and the server of the file channel.</p>

<h2>Adding a file channel</h2>

<p>Like television channels, the file channels also need an adapter. That is why, it is necessary to add a 'Files-Adapter' on the server you want to broadcast the files from.
This adapter is not a physical device but a virtual one which is programmed in Java. 
Have a look <a href="./server.html">here</a> to see how to add a 'File-Adapter'.</p>

<p>Click on 'Add a file channel' in the menu on the left:</p>
<ul class="bullets">
  <li>Name: The name of the channel that is going to be shown in the SAP announcement list in VLC.</li>
  <li>Server: This server needs to have at least one 'File-Adapter'.</li>
  <li>List of paths: You need to enter the files' paths on the corresponding server here. For example: <code>/home/utilisateur/Film/video.avi</code></li>
</ul>

<p>Be careful, when you add a file channel. Make sure that the files you want to broadcast are located on the server you choose.<p>

<p>Click on the 'Add' button to finish.<p>

<h2>Schedule a channel</h2>
<p>To schedule a channel in order to broadcast it on the network, have a look <a href="./schedule.html">here</a>.</p>

</div>

<?php footer('$Id$') ?>