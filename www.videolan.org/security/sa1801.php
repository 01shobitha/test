<?php
   $title = "VideoLAN Security Advisory 1801";
   $lang = "en";
   $menu = array( "vlc" );
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>


<div id="fullwidth">

<h1>Security Advisory 1801</h1>
<pre>
Summary           : Heap use after free during SWF file playback
Date              : July 2018
Affected versions : VLC media player 3.0.0 and 3.0.1 
ID                : VideoLAN-SA-1801
CVE reference     : CVE-2018-11516
</pre>

<h2>Details</h2>
<p>A remote user can create a specially crafted swf file that, when loaded by the target user, will trigger a heap use after free in Demux() (demux/avformat/demux.c)</p>

<h2>Impact</h2>
<p>If successful, a malicious third party could trigger either a crash of VLC or an arbitratry code execution with the privileges of the target user.</p>

<h2>Threat mitigation</h2>
<p>Exploitation of those issues requires the user to explicitly open a specially crafted file or stream.</p>
<p>ASLR and DEP help reduce exposure, but may be bypassed.</p>

<h2>Workarounds</h2>
<p>The user should refrain from opening files from untrusted third parties
or accessing untrusted remote sites (or disable the VLC browser plugins),
until the patch is applied.
</p>

<h2>Solution</h2>
<p>VLC media player <b>3.0.2</b> addresses the issue.
</p>
<h2>References</h2>
<dl>
<dt>The VideoLAN project</dt>
<dd><a href="//www.videolan.org/">http://www.videolan.org/</a>
</dd>
<dt>VLC official GIT repository</dt>
<dd><a href="http://git.videolan.org/?p=vlc/vlc-3.0.git">http://git.videolan.org/?p=vlc.git</a>
</dd>
</dl>

</div>

<?php footer('$Id$'); ?>
