<?php
   $title = "VideoLAN Security Advisory 0809";
   $lang = "en";
   $menu = array( "vlc" );
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">

<h1>Security Advisory 1203</h1>
<pre>
Summary           : Buffer overflow in PNG decoder
Date              : October 2012
Affected versions : VLC media player 2.0.3 and earlier
ID                : VideoLAN-SA-1203
CVE reference     : CVE-2012-5470
</pre>
<h2>Details</h2>
<p>When parsing an invalid PNG image file,
a buffer overflow might occur.
</p>
<h2>Impact</h2>
<p>If successful,
a malicious third party could trigger an invalid memory access,
leading to a crash of the process of the VLC media player.
</p>
<p>Because the overflow occurs while reading a buffer, rather than writing,
it is believed that this issue cannot lead to arbitrary code execution.
</p>
<h2>Threat mitigation</h2>
<p>Exploitation of this issue requires the user
to explicitly open a specially crafted file.
</p>
<h2>Workarounds</h2>
<p>The user should refrain from opening files from untrusted third parties
or accessing untrusted remote sites (or disable the VLC browser plugins),
until the patch is applied.
</p>
<p>Alternatively, the PNG decoder plugin (<code>libpng_plugin.*</code>)
can be removed manually from the VLC plugin installation directory.
This will prevent decoding of PNG images.
</p>
<h2>Solution</h2>
<p>VLC media player 2.0.4 addresses this issue.
Patches for older versions are available
from the official VLC source code repository 2.0 and 1.1 branches.
</p>
<!--h2>Credits</h2>
<p>This vulnerability was reported by TBD.
</p-->
<h2>References</h2>
<dl>
<dt>The VideoLAN project</dt>
<dd><a href="http://www.videolan.org/">http://www.videolan.org/</a>
</dd>
<dt>VLC official GIT repository</dt>
<dd><a href="http://git.videolan.org/?p=vlc.git;a=shortlog;h=b3b751cb99df71e3c0a18bcb38b4691cf98265fe">http://git.videolan.org/?p=vlc.git</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>14 October 2012</dt>
<dd>Patch for VLC development version.</dd>
<dt>15 October 2012</dt>
<dd>VLC media player 2.0.4 released.</dd>
<dt>2 November 2012</dt>
<dd>Security advisory published.</dd>
<dd>CVE reference.</dd>
<dt>3 November 2012</dt>
<dd>Security advisory updated.</dd>
</dl>

<address>R&eacute;mi Denis-Courmont,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
