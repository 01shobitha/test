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

<img style="border: 1px solid #ccc; padding:5px" class="center" alt="VLMa typical installation" src="http://images.videolan.org/images/vlma-arch.png" />

<h2>Generalities</h2>

<p>VLMa daemon saves its state in the <i>data.xml</i> file located in the
<i>data</i> folder and its configuration in the <i>config.properties</i>
file located in the <i>conf</i> folder.</p>

<h2>Content</h2>

<p>First <a href="/vlma/doc/setup.html">install VLMa</a>.</p>

<p>To setup VLMa, you basically need to follow these steps:</p>
<ul class="bullets">
<li>Add <a href="/vlma/doc/satellite.html">satellites</a> to VLMa database (Hotbird, Astra, etc.).</li>
<li>Tell VLMa which <a href="/vlma/doc/server.html">servers</a> are available for streaming and what they have as DVB cards.</li>
<li>Add <a href="/vlma/doc/media.html">medias</a> to VLMa database.</li>
</ul>

<p>Then you will be able to <a href="/vlma/doc/schedule.html">schedule medias</a> for broadcasting.</p>

<p>For information about troubleshooting, have a look <a href="/vlma/doc/troubleshooting.html">here</a>.</p>

</div>

<?php footer('') ?>
