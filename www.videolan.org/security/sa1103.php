<?php
   $title = "VideoLAN Security Advisory 1103";
   $lang = "en";
   $menu = array( "vlc" );
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">

<h1>Security Advisory 1103</h1>
<pre>
Summary           : Heap corruption in MP4 demultiplexer
Date              : April 2011
Affected versions : VLC media player 1.1.8 down to 1.0.0
ID                : VideoLAN-SA-1103
CVE reference     : CVE-2011-1684
</pre>
<h2>Details</h2>
<p>When parsing some MP4 (MPEG-4 Part 14) files,
insufficient buffer size might lead to corruption of the heap.
</p>
<h2>Impact</h2>
<p>If successful,
it is unknown whether a malicious third party might be able
to trigger execution of arbitrary code.
Successful exploitation of this bug can crash the process of the media player.
</p>
<h2>Threat mitigation</h2>
<p>Exploitation of this issue requires the user
to explicitly open an MP4 file with some specific content.
</p>
<h2>Workarounds</h2>
<p>The user should refrain from opening files from untrusted third parties
or accessing untrusted remote sites (or disable the VLC browser plugins),
until the patch is applied.
</p>
<p>Alternatively, the MP4 decoder plugin
(<code>libmp4_plugin.*</code>)
can be removed manually from the VLC plugin installation directory.
</p>
<h2>Solution</h2>
<p>VLC media player 1.1.9 will address this issue.
Patches for older versions are available
from the official VLC source code repositories.
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
<dd><a href="http://git.videolan.org/?p=vlc.git;a=commit;h=5637ca8141bf39f263ecdb62035d2cb45c740821">http://git.videolan.org/?p=vlc.git;a=commit;h=5637ca8141bf39f263ecdb62035d2cb45c740821</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>7 April 2011</dt>
<dd>Vendor notified</dd>
<dt>9 April 2011</dt>
<dd>Patches published</dd>
<dd>Security advisory published</dd>
<dt>12 April 2011</dt>
<dd>VLC media player 1.1.9 released</dd>
<dt>13 April 2011</dt>
<dd>CVE ID reserved</dd>
</dl>

<address>R&eacute;mi Denis-Courmont,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
