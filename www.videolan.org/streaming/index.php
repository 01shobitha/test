<?php
   $title = "VideoLAN - The streaming solution";
   $lang = "en";
   $date = "11 January 2002";
   $menu = array( "streaming", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
?>

<h1> Streaming </h1>

<h2>Overview of the VideoLAN streaming solution</h2>

<p>The VideoLAN streaming solution includes:</p>

<ul>

<li><a href="/vlc">VLC media player</a> (initially VideoLAN Client),
which can be used as a server to    
stream MPEG-1, MPEG-2 and MPEG-4 / DivX files, DVDs and live videos on  
the network in unicast or multicast; or used as a client to receive,    
decode and display MPEG streams under multiple operating systems,</li>

<li>VLS (VideoLAN Server), which can stream MPEG-1, MPEG-2 and      
MPEG-4 files, DVDs, digital satellite channels, digital terrestial      
television channels and live videos on the network in unicast or        
multicast. Most of the VLS functionality can now be found in the much
better VLC program. Usage of VLC instead of VLS is advised.</li>

</ul>

<p>This diagram illustrates the VideoLAN solution:</p>

<p class="center">
<img src="/images/documentation/global-diagram.jpg"
     alt="VideoLAN solution overview" width="800" height="435" />
</p>

<p>VLC media player is a cross-platform media player and server. It works under Linux, Windows, 
Mac OS X, BeOS, *BSD, Solaris, Familiar Linux and QNX. For more 
information on VLC, please see the <a href="/vlc/features.html">VLC features
page</a>.</p>

<p>VLS is a dedicated server that compiles under Linux, Windows and Mac OS X.
It isn't under very active development at the moment and we advice you to consider
the Stream Output functionality of VLC instead.
For more information on VLC's stream output and VLS, see the <a         
href="features.html">streaming features page</a>.</p>                   

<p>The network on which you setup the VideoLAN solution can be as small as
one ethernet 10/100Mb switch or hub, and as big as the whole Internet!
The bandwidth needed is:</p>

<ul>

<li>0.5 to 4 Mbit/s for an MPEG-4 stream,</li>

<li>3 to 4 Mbit/s for an MPEG-2 stream read from a satellite card, a
digital terrestial television card or an MPEG-2 encoding card,</li>

<li>6 to 9 Mbit/s for a DVD.</li>

</ul>


<p>You can add a channel information service based on the SAP/SDP       
standard to the VideoLAN solution. The mini-SAP-server sends announces  
about the multicast programs on the network, and VLCs receive these     
annouces and automatically adds the programs announced to their          
playlist. The mini-SAP-server works under Linux and Mac OS X.
If you have only a single VLC server, you can also use the SAP announcer,
that is incorperated into VLC.</p>

<p>The VideoLAN streaming solution has a full IPv6 support !</p>

<h2>Download</h2>

<ul>
<li><p>To download VLC, go to the <a href="/vlc/index.html">VLC             
download page</a>.</p></li>

<li><p>To download VLS and its required libraries, click on the icon
below:</p>

<table cellspacing="10">
<tr>

<td>
  <a href="download-vls-sources.html"><img src="/images/icons/source.gif"
      style="vertical-align: middle; border-width: 1px;"
      alt="VLS source code" width="32" height="32" />
  </a>&nbsp;VLS&nbsp;source&nbsp;code
</td>

<td>
  <a href="download-vls-windows.html"><img src="/images/icons/windows.gif"
      style="vertical-align: middle; border-width: 1px;"
      alt="VLS Windows" width="32" height="32" />
  </a>&nbsp;VLS&nbsp;Windows
</td>

<!---
<td>
  <a href="download-vls-debian.html"><img src="/images/icons/debian.gif"
      style="vertical-align: middle; border-width: 1px;"
      alt="Linux Debian" width="32" height="32" />
  </a>&nbsp;Debian&nbsp;GNU/Linux
</td>
-->
</tr>
</table>

</li>

<li><p>To download the mini-SAP-server, click on the icon below:</p>

<table cellspacing="10">
<tr>
<td>
  <a href="download-sap-server.html">
    <img src="/images/icons/source.gif"
         style="vertical-align: middle; border-width: 1px;"
         alt="mini-SAP-server source code" width="32" height="32" />
  </a>&nbsp;mini-SAP-server source&nbsp;code
</td>
</tr>
</table>

</li>

</ul>

<h2>Documentation</h2>

<p></p>

<table border="0">

<tr>
  <td  class="type"><b>Document</b></td>
  <td  class="type"><b>Status</b></td>
  <td  class="type"><b>Download</b></td>
</tr>

<tr>
  <td class="category">VideoLAN HOWTO</td>
  <td class="yes">Up-to-date</td>
  <td>
     <a href="/doc/videolan-howto/en/videolan-howto-en.html">English</a>
     <a href="/doc/videolan-howto/fr/videolan-howto-fr.html">French</a>
     <a href="/doc/videolan-howto/de/videolan-howto-de.html">German</a>
     <a href="/doc/videolan-howto/es/videolan-howto-es.html">Spanish</a>
   </td>
</tr>

<tr>
  <td class="category">VLC user guide</td>
  <td class="no">Out-of-date</td>
  <td>
     <a href="/doc/vlc-user-guide/en/vlc-user-guide-en.html">English</a>
     <a href="/doc/vlc-user-guide/fr/vlc-user-guide-fr.html">French</a>
     <a href="/doc/vlc-user-guide/de/vlc-user-guide-de.html">German</a>
   </td>
</tr>

<tr>
  <td class="category">VLS user guide</td>
  <td class="yes">Up-to-date</td>
  <td>
     <a href="/doc/vls-user-guide/en/vls-user-guide-en.html">English</a>
     <a href="/doc/vls-user-guide/fr/vls-user-guide-fr.html">French</a>
     <a href="/doc/vls-user-guide/de/vls-user-guide-de.html">German</a>
     <a href="/doc/vls-user-guide/es/vls-user-guide-es.html">Spanish</a>
   </td>
</tr>

<tr>
  <td class="category">VideoLAN FAQ</td>
  <td class="yes">Up-to-date</td>
  <td>
     <a href="/doc/faq/en/videolan-faq-en.html">English</a>
     <a href="/doc/faq/fr/videolan-faq-fr.html">French</a>
     <a href="/doc/faq/de/videolan-faq-de.html">German</a>
     <a href="/doc/faq/it/videolan-faq-it.html">Italian</a>
     <a href="/doc/faq/es/videolan-faq-es.html">Spanish</a>
   </td>
</tr>


</table>

<?php footer('$Id$'); ?>
