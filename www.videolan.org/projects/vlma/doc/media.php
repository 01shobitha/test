<?php
   $title ="VideoLAN Manager - Documentation";
   $lang = "en";
   $menu = array( "vlma", "documentation" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="left">

<h1>Medias</h1>

<h2>Media list</h2>

<p>VLMa lets you broadcast 4 types of channels:</p>

<ul class="bullets">
<li>DTT channels (input is a DVB-T card)</li>
<li>Satellite channels (input is a DVB-S card)</li>
<li>Files channels (input is a file, which can be either on the local filesystem or online)</li>
<li>Stream channels (input is another stream)</li>
</ul>

<h2>Updating the satellite channels list</h2>

<p>To get the channel list of the satellites you receive, first click on 'Update satellite channel list' in the left menu. After that, go on to the website <a href="http://satcodx.com">http://satcodx.com</a> and choose the 
satellite you want to update.
Copy the address of the web page and put it in the "source" text box. Now, click on 'Update'.</p>

<h2>Adding a TNT channel</h2>

<p>To add a TNT channel, click on the button in the left menu and give its name, its broadcasting frequency and its SID (identifier).<p>

<h2>Adding a files channel</h2>

<p>To add a files channel, you need to provide paths to the files that you want to stream to VLMa.</p>

<p>For convenience, VLMa lets you select the server which has to stream the files if they are only available on the local filesystem so that you are not obliged to copy those files on every server.<p>

<h2>Adding a stream channel</h2>

<p>For stream channels, you only need to provide the URL of the stream to broadcast.</p>

<h2>Scheduling a channel</h2>
<p>To schedule a channel in order to broadcast it on the network, <a href="./schedule.html">have a look here</a>.</p>

</div>

<div id="right">
<a href="http://download.videolan.org/projects/vlma/screenshot/0.2.0/channeladd.png"><img style="width:100%; border: 1px solid #ccc; margin-top: 100px" alt="Add a media" src="http://download.videolan.org/projects/vlma/screenshot/0.2.0/channeladd.png" /></a>
</div>

<?php footer('') ?>
