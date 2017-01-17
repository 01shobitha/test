<?php
   $title = "VideoLAN Security Advisory 1004";
   $lang = "en";
   $menu = array( "vlc" );
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="fullwidth">

<h1>Security Advisory 1004</h1>
<pre>
Summary           : Insufficient input validation in VLC TagLib plugin
Date              : August 2010
Affected versions : VLC media player versions 1.1.2 down to 0.9.0
ID                : VideoLAN-SA-1004
CVE reference     : CVE-2010-2937
</pre>
<h2>Details</h2>
<p>VLC fails to perform sufficient input validation
when trying to extract some meta-informations about input media
through ID3v2 tags.
In the failure case, VLC attempt dereference an invalid memory address,
and a crash will ensure.
</p>
<h2>Impact</h2>
<p>In the failure case, VLC will dereference a memory address within
the first page of its process virtual memory. In normal conditions,
this will result in a segmentation fault
(a general protection fault on Windows), and the process will terminate
abruptly.
<strong>This vulnerability alone is not sufficient for an attacker to
execute arbitraty code</strong> or otherwise alter the flow of execution
other than to crash the process.
</p>
<p>In most usage scenarii, this will only cause user annoyance.
</p>
<h2>Threat mitigation</h2>
<p>Exploitation of this issue requires the user
to include a file in its playlist or to attempt to open it.
</p>
<h2>Workarounds</h2>
<p>The user should refrain from opening files from untrusted third parties
or accessing untrusted remote sites (or disable the VLC browser plugins),
until the patch is applied.
</p>
<h2>Solution</h2>
<p>VLC media player 1.1.3 addresses this issue.
Patches for VLC media player 1.1.x and 1.0.x are available
from the corresponding official VLC source code repositories.
</p>
<h2>Credits</h2>
<p>This vulnerability was reported by FortiGuard Labs.
</p>
<h2>References</h2>
<dl>
<dt>The VideoLAN project</dt>
<dd><a href="//www.videolan.org/">http://www.videolan.org/</a>
</dd>
<dt>FortiGuard Labs</dt>
<dd><a href="http://www.fortinet.com/">http://www.fortinet.com/</a>
</dd>
<dt>Patch for VLC 1.1.2, 1.1.1, 1.1.0</dt>
<dd><a href="http://git.videolan.org/?p=vlc/vlc-1.1.git;a=commit;h=24918843e57c7962e28fcb01845adce82bed6516">commit 24918843e57c7962e28fcb01845adce82bed6516</a>
</dd>
<dt>Patch for VLC 1.0.6</dt>
<dd><a href="http://git.videolan.org/?p=vlc/vlc-1.0.git;a=commit;h=22a22e356c9d93993086810b2e25b59b55925b3a">commit 22a22e356c9d93993086810b2e25b59b55925b3a</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>29 July 2010</dt>
<dd>Vendor private notification.</dd>
<dt>9 August 2010</dt>
<dd>Initial fix.</dd>
<dt>11 August 2010</dt>
<dd>Initial security advisory.</dd>
<dd>Vendor patch for VLC 1.1.2 and 1.0.6 and development versions.</dd>
<dd>CVE reference assigned.</dd>
<dt>18 August 2010</dt>
<dd>VLC 1.1.3 release.</dd>
</dl>

<address>R&eacute;mi Denis-Courmont,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
