<?php
   $title = "VideoLAN Security Advisory 1301";
   $lang = "en";
   $menu = array( "vlc" );
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>


<div id="fullwidth">

<h1>Security Advisory 1203</h1>
<pre>
Summary           : Buffer overflows in freetype renderer and HTML subtitle parser
Date              : January 2013
Affected versions : VLC media player 2.0.4 and earlier
ID                : VideoLAN-SA-1301
CVE reference     : None
</pre>
<h2>Details</h2>

<p>When parsing a specially crafted file,
a buffer overflow might occur.
</p>
<h2>Impact</h2>
<p>If successful,
a malicious third party could trigger an invalid memory access,
leading to a crash of VLC or arbitratry code execution.
</p>
<h2>Threat mitigation</h2>
<p>Exploitation of this issue requires the user
to explicitly open a specially crafted file. In the case of the subtitle
vulnerability, subtitles must be enabled. ASLR and DEP help reduce exposure,
but may be bypassed.
</p>
<h2>Workarounds</h2>
<p>The user should refrain from opening files from untrusted third parties
or accessing untrusted remote sites (or disable the VLC browser plugins),
until the patch is applied.
</p>

<h2>Solution</h2>
<p>VLC media player 2.0.5 addresses this issue.
Patches for older versions are available
from the official VLC source code repository 2.0.
</p>
<h2>Credits</h2>
<p>This vulnerability was reported by Aliz Hammond.
</p>
<h2>References</h2>
<dl>
<dt>The VideoLAN project</dt>
<dd><a href="http://www.videolan.org/">http://www.videolan.org/</a>
</dd>
<dt>VLC official GIT repository</dt>
<dd><a href="http://git.videolan.org/?p=vlc/vlc-2.0.git;a=tag;h=a4795083338b4bc98fd7e16b5feba6d313095b8e">http://git.videolan.org/?p=vlc.git</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>17 November 2012</dt>
<dd>Patch for VLC development version.</dd>
<dt>7 December 2012</dt>
<dd>Security vulnerability disclosed.</dd>
<dt>14 December 2012</dt>
<dd>VLC 2.0.5 released.</dd>
<dt>3 January 2013</dt>
<dd>Security advisory published</dd>
</dl>

<address>Scott Walsh,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
