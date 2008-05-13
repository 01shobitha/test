<?php
   $title ="VideoLAN Manager - Documentation";
   $lang = "en";
   $date = "23 April 2008";
   $menu = array( "vlma", "documentation" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="fullwidth">

<h1>File channels</h1>

<h2>File channels list</h2>

<p>As in the tab 'Medias', we find in the tab 'Files' the file channels entered in the VLMa.</p>
<p>The File channel are in fact a list of video or audio files that VLC can broadcast
in loop.</p>
<p>If you click on 'Edit' you will be able to edit the file list and the server of the file channel.</p>

<h2>Add a file channel</h2>

<p>Like television channels, the file channels also need an adapter. So, it is necessary to add a
'Files-Adapter' on the server on which you want to broadcast the files. 
This adapter is not a physical device but a virtual one which is programmed in Java. 
See <a href="./server.html">here</a> to add a 'Files-Adapter'.</p>

<p>Click on 'Add a file channel' in the menu on the left :</p>
<ul class="bullets">
  <li>Name : It is the name of the channel that is going to be shown in the list of announcements SAP in VLC.</li>
  <li>Server : This server has to have at least one 'Files-Adapter'.</li>
  <li>List of the paths to the files : We type here the paths toward the files in the corresponding server. For example:
/home/utilisateur/Film/video.avi</li>
</ul>

<p>Be carefull, when you add a file channel, make sure that the files you want to broadcast are located on the server you choose.<p>

<p>Click on the 'Add' button to finish.<p>

<h2>Schedule a channel</h2>
<p>To schedule a channel in order to broadcast it on the network, see <a href="./schedule.html">here</a>.</p>

</div>

<?php footer('$Id$') ?>