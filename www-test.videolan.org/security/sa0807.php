<?php
   $title = "VideoLAN Security Advisory 0807";
   $lang = "en";
   $menu = array( "vlc" );
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">

<h1>Security Advisory 0807</h1>
<pre>
Summary           : Multiple overflows in VLC demuxers
Date              : August 2008
Affected versions : VLC media player 0.8.6i and earlier
ID                : VideoLAN-SA-0807
CVE reference     : CVE-2008-3732, CVE-2008-3794
</pre>
<h2>Details</h2>
<p>When parsing the header of an invalid TTA file,
an integer overflow might happen causing an heap-based buffer overflow.
</p>
<p>When parsing a response from an MMS server,
an integer overflow might happen causing a stack-based buffer overflow.
</p>
<h2>Impact</h2>
<p>If successful,
a malicious third party could trigger execution of arbitrary code
within the context of the VLC media player.
However, because the integer overflows will cause an unusually large amount
of memory to be read, a page fault is most likely to occur
(segmentation fault on Unix systems, general protection fault on Windows),
resulting in a termination of the VLC process.
</p>
<h2>Threat mitigation</h2>
<p>Exploitation of this issue requires the user
to explicitly open a specially crafted file, or access a malicious MMS server.
</p>
<h2>Workarounds</h2>
<p>The user should refrain from opening files from untrusted third parties
or accessing untrusted remote sites (or disable the VLC browser plugins),
until the patch is applied.
</p>
<h2>Solution</h2>
<p>VLC media player 0.9.1 addresses these issues.
Patches for VLC media player 0.8.6 are available
from the official VLC source code repository.
</p>
<h2>Credits</h2>
<p>This vulnerability was not responsibly disclosed. There are no credits.
</p>
<h2>References</h2>
<dl>
<dt>The VideoLAN project</dt>
<dd><a href="http://www.videolan.org/">http://www.videolan.org/</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>16 August 2008</dt>
<dd>TTA vulnerability public disclosure.</dd>
<dt>20 August 2008</dt>
<dd>Vendor notified by third parties.</dd>
<dd>TTA source code fixes for VLC 0.9.</dd>
<dt>21 August 2008</dt>
<dd>TTA source code fixes for VLC 0.8.6.</dd>
<dt>24 August 2008</dt>
<dd>MMS vulnerability public disclosure.</dd>
<dd>Vendor notified by third parties.</dd>
<dd>MMS source code fixes for VLC 0.8.6 and 0.9.</dd>
<dd>VLC media player 0.9.0 released.</dd>
<dt>30 August 2008</dt>
<dd>Initial security advisory.</dt>
</dl>

<address>R&eacute;mi Denis-Courmont,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
