<?php
   $title ="VideoLAN Manager - Documentation";
   $lang = "en";
   $menu = array( "vlma", "documentation" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="fullwidth">
<h1>VLMa - User documentation</h1>

<h2>Typical VLMa installation</h2>

<p>Servers running VLC have one or more DVB-S or DVB-T cards in order to acquire
signal. VLMa periodically checks that medias are really streamed. If not it
sends new orders to VLC servers through their telnet interfaces. Note that you
can also use VLMa to stream file channels or to stream existing streams (for
example if you want to stream in multicast an existing HTTP stream).</p>

<p>Although servers have to run VLC (VLMa doesn't know about other softwares'
syntax / way of sending commands), clients do not have to run VLC but any media
player that is able to read UDP (or HTTP in case of a network that does not
support multicast) streams.</p>

<img style="border: 1px solid #ccc; padding:5px" class="center" alt="VLMa typical installation" src="http://download.videolan.org/vlma/vlma-arch.png" />

<h2>Generalities</h2>

<p>The VLMa daemon saves its state in the file 'data.xml' in a subdirectory '.vlma' of the current user's home directory.
Be careful: modifications are not automatically saved. You need to click on 'Save' in the left menu if you want to do so. If you stop the deamon without saving, your modification will not be available the next time you run 
the daemon.</p>

<p>VLMa also saves its configuration in the file 'config.xml' in the subdirectory '.vlma' of the current user's home directory.</p>

<h2>Installation</h2>

<p>This <a href="setup.html">video</a> explains how to install VLMa on your system.</p>

<h2>Content</h2>

<p>Here you can find some documentation about VLMa:</p>

<ul class="bullets">
  <li><a href="/vlma/doc/server.html">server</a></li>
  <li><a href="/vlma/doc/media.html">media</a> (satellite and Digital terrestrial television channels)</li>
  <li><a href="/vlma/doc/fileChannel.html">file channels</a></li>
  <li><a href="/vlma/doc/satellite.html">satellites</a></li>
  <li><a href="/vlma/doc/schedule.html">how to schedule a media</a></li>
  <li><a href="/vlma/doc/troubleshooting.html">and troubleshooting</a></li>
</ul>

<p>Thanks to Thanh-tra Nguyen.</p>

</div>

<?php footer('$Id$') ?>
