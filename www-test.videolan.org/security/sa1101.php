<?php
   $title = "VideoLAN Security Advisory 1101";
   $lang = "en";
   $menu = array( "vlc" );
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">

<h1>Security Advisory 1101</h1>
<pre>
Summary           : Heap corruption in CDG decoder
Date              : January 2011
Affected versions : VLC media player 1.1.5 and earlier
ID                : VideoLAN-SA-1101
CVE reference     : CVE-2011-0021
</pre>
<h2>Details</h2>
<p>When parsing an invalid CDG file,
insufficient boundary checks might lead to corruption of the heap.
</p>
<h2>Impact</h2>
<p>If successful,
it is unknown whether a malicious third party might be able
to trigger execution of arbitrary code.
Successful exploitation of this bug can crash the process of the media player.
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
<p>Alternatively, the CDG decoder plugin
(<code>libcdg_plugin.*</code>)
can be removed manually from the VLC plugin installation directory.
</p>
<h2>Solution</h2>
<p>VLC media player 1.1.6 addresses this issue.
Patches for older versions are available
from the official VLC source code repositories.
</p>
<h2>Credits</h2>
<p>This vulnerability was reported by Dan Rosenberg from VSR.
</p>
<h2>References</h2>
<dl>
<dt>The VideoLAN project</dt>
<dd><a href="http://www.videolan.org/">http://www.videolan.org/</a>
</dd>
<dt>VLC official GIT repository</dt>
<dd><a href="http://git.videolan.org/?p=vlc.git;a=commitdiff;h=6568965770f906d34d4aef83237842a5376adb55;hp=403718957b551c3c27546b7f82b2ae9ba937652f">http://git.videolan.org/?p=vlc.git;a=commitdiff;h=6568965770f906d34d4aef83237842a5376adb55;hp=403718957b551c3c27546b7f82b2ae9ba937652f</a>
</dd>
<dt>Dan Rosenberg, VSR</dt>
<dd><a href="http://www.vsecurity.com/"
  >http://www.vsecurity.com/</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>7 January 2011</dt>
<dd>Vendor notified</dd>
<dt>11 January 2011</dt>
<dd>Patches published</dd>
<dt>20 January 2011</dt>
<dd>CVE ID reserved</dd>
<dt>23 January 2011</dt>
<dd>VLC media player 1.1.6 released</dd>
<dt>25 January 2011</dt>
<dd>Security advisory published</dd>
</dl>

<address>R&eacute;mi Denis-Courmont,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
