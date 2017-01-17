<?php
   $title = "VideoLAN Server - Developers reference";
   $lang = "en";
   $menu = array( "developers", "vls" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1>VideoLAN Server</h1>

<p><span style="color:red"><strong>VLS is deprecated and unmaintained.</strong></span> 
Use <a href="vlc.html">VLC media player</a> instead.</p>

<p> See the <a href="/streaming/">streaming page</a> on
www.videolan.org. </p>

<h2>Get VLS</h2>

<p> <code>VLS</code> is available through <a href="https://wiki.videolan.org/Svn">Subversion</a> or by
browsing the <a href="http://www.videolan.org/pub/vls/">releases</a>.</p>

<p>For informations about the versions, see the 
<a href="vls/ChangeLog.html">ChangeLog</a>.</p>

<h2>Documentation</h2>

<table border="0">

<tr>
  <td class="type"><b>Document</b></td>
  <td class="type"><b>Status</b></td>
  <td class="type"><b>Download</b></td>
  <td class="type"><b>Maintainer</b></td>
</tr>
<tr>
  <td class="category">VideoLAN Server developer documentation</td>
   <td class="yes">
     Up-to-date
   </td>
  <td>
     <a href="vls/doc/developer/vls-devel/book1.htm">HTML</a>
     <a href="vls/doc/developer/vls-devel.pdf">PDF</a>
     <a href="vls/doc/developer/vls-devel.ps">PS</a>
   </td>
   <td>
     <a href="mailto:tooney_@_videolan.org">Tristan Leteurtre</a>
   </td>
</tr>

</table>


<p>You can also ask questions in the development mailing-list
<code>vls-devel@videolan.org</code>, or try to meet the developers
on IRC (<code>#videolan</code>, <code>irc.videolan.org</code> or
any Freenode server) if you want to help us but don't know where to
start.</p>

<h2>Third party libraries used by VLS</h2>

<p>
<a href="libdvdcss.html">libdvdcss</a> - a library
for accessing encrypted DVDs<br />

<a href="http://www.dtek.chalmers.se/groups/dvd/development.shtml">libdvdread
</a> - a library for reading DVD-Video images<br />

<a href="libdvbpsi.html">libdvbpsi</a> - a library
designed for decoding and generation of MPEG TS and DVB PSI tables<br />

<a href="http://www.metzlerbros.org/dvb/">libdvb</a> - a library
to access the Linux DVB drivers

</p>

<?php footer('$Id$'); ?>
