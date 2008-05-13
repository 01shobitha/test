<?php
   $title ="VideoLAN Manager - Documentation";
   $lang = "en";
   $date = "23 April 2008";
   $menu = array( "vlma", "documentation" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="fullwidth">

<h1>Schedule a programmation</h1>

<p>Actually, there are three kinds od channels: TNT, Satellite and File channels.</p>

<h2>Schedule a TNT channel</h2>

<p>After having added a TNT channel, you can check it out in the Medias tab : 'TNT channel list'. If the channel is there, 
it is ready to be scheduled.</p>
<p>To schedule a channel, you have to click on "Program" on the right side of the channel, then you choose its priority 
and then "Program".</p>

<p>What does priority mean? The bigger priority is, the most likely it is to be streamed on the network.</p>

<p>For example, let's imagine you set 2 channels to be streamed, one whose priority is 10 and the other one is 5. 
When the daemon is started, it will try to stream the channel with high priority first. 
That means that the channel with priority 10 will be streamed first. Then if the server is still able to stream another one, 
it will take a look at the channel with priority 5.</p>

<p>In short, if you absolutely want the channel A to be streamed, you can give it a very high priority.</p>

<p>You have also to choose a name for the SAP announce that will appear in the user player interface.</p>

<p>It's done! VLMa attributes to your channel a multicast IP address of the bank it manages and sends the streaming orders
to the councerned server.</p>
<p>You can now find it in the home page of VLMa, that means the channel is ready to be streamed if the servers 
are not too busy.</p>

<h2>Schedule a Satellite channel</h2>

<p>The Satellite channels are listed in the 'Satellite channel list'.</p>

<p>To schedule a Satellite channel, the procedure is the same as with TNT channels. 
For example, you want to stream CCTV9 (a chinese channel), find it in the list and then click on "Program".</p>

<p>Then choose a priority for this channel (the defaut value is 10) and a SAP announcement name.</p>

<h2>Schedule a Files channel</h2>

<p>The procedure is again the same as for satellite and TNT channels.</p>

</div>

<?php footer('$Id$') ?>
