<?php
   $title = "VideoLAN Security Advisory 1108";
   $lang = "en";
   $menu = array( "vlc" );
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">

<h1>Security Advisory 1108</h1>
<pre>
Summary           : Heap corruption in VLC TiVo demuxer
Date              : December 2011
Affected versions : VLC media player 1.1.12 down to 0.9.0
ID                : VideoLAN-SA-1108
CVE reference     : unassigned
</pre>
<h2>Details</h2>
<p>When parsing the header of an invalid TY file, the heap might be corrupted.
</p>
<h2>Impact</h2>
<p>If successful,
a malicious third party could crash the VLC media player process.
Arbitrary code execution might be possible on some systems,
though this is unconfirmed.
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
<p>Alternatively, the TY demux plugin (<code>libty_plugin.*</code>)
can be removed manually from the VLC plugin installation directory.
This will prevent opening of TiVo files.
</p>
<h2>Solution</h2>
<p>VLC media player 1.1.13 addresses this issue.
Patches for older versions are available
from the official VLC source code repository vlc-1.1.git.
</p>
<h2>Credits</h2>
<p>This vulnerability was reported by Clement Lecigne.
</p>
<h2>References</h2>
<dl>
<dt>The VideoLAN project</dt>
<dd><a href="http://www.videolan.org/">http://www.videolan.org/</a>
</dd>
<dt>VLC official GIT repository</dt>
<dd><a href="http://git.videolan.org/?p=vlc.git;a=commit;h=7d282fac1cc455b5a5eca2bb56375efcbf879b06">http://git.videolan.org/?p=vlc.git</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>20 December 2011</dt>
<dd>Vendor notification.</dd>
<dd>Patch for VLC development version, 1.2 and 1.1 trees.</dd>
<dd>Initial security advisory.</dd>
<dt>TBD</dt>
<dd>VLC media player 1.1.13 released.</dd>
</dl>

<address>R&eacute;mi Denis-Courmont,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
