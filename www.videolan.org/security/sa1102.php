<?php
   $title = "VideoLAN Security Advisory 1102";
   $lang = "en";
   $menu = array( "vlc" );
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">

<h1>Security Advisory 1102</h1>
<pre>
Summary           : Insufficient input validation in MKV demuxer
Date              : January 2011
Affected versions : VLC media player 1.1.6.1 and earlier
ID                : VideoLAN-SA-1102
CVE reference     : CVE-2011-0531
</pre>
<h2>Details</h2>
<p>When parsing an invalid MKV (Matroska or WebM) file,
input validation are insufficient.
</p>
<h2>Impact</h2>
<p>If successful,
a malicious third party will be able to trigger execution of arbitrary code.
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
<p>Alternatively, the MKV demuxer plugin
(<code>libmkv_plugin.*</code>)
can be removed manually from the VLC plugin installation directory.
</p>
<h2>Solution</h2>
<p>VLC media player 1.1.7 addresses this issue.
Patches for older versions are available
from the official VLC source code repositories.
</p>
<h2>Credits</h2>
<p>This vulnerability was reported by Dan Rosenberg from VSR.
</p>
<h2>References</h2>
<dl>
<dt>The VideoLAN project</dt>
<dd><a href="//www.videolan.org/">http://www.videolan.org/</a>
</dd>
<dt>VLC official GIT repository</dt>
<dd><a href="http://git.videolan.org/?p=vlc.git;a=commit;h=59491dcedffbf97612d2c572943b56ee4289dd07">http://git.videolan.org/?p=vlc.git;a=commit;h=59491dcedffbf97612d2c572943b56ee4289dd07</a>
</dd>
<dt>Dan Rosenberg, VSR</dt>
<dd><a href="http://www.vsecurity.com/"
  >http://www.vsecurity.com/</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>26 January 2011</dt>
<dd>Vendor notified</dd>
<dt>29 January 2011</dt>
<dd>Fixes delivered by Matroska</dd>
<dt>30 January 2011</dt>
<dd>Patches published</dd>
<dd>Security advisory published</dd>
<dt>31 January 2011</dt>
<dd>VLC media player 1.1.7 source released</dd>
<dt>1 February 2011</dt>
<dd>VLC media player 1.1.7 binaries released</dd>
<dt>7 February 2011</dt>
<dd>CVE ID released CVE-2011-0531</dd>
</dl>

<address>R&eacute;mi Denis-Courmont,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
