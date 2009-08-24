<?php
   $title = "VideoLAN Security Advisory 0809";
   $lang = "en";
   $menu = array( "vlc" );
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">

<h1>Security Advisory 0809</h1>
<pre>
Summary           : Buffer overflow in VLC TiVo demuxer
Date              : October 2008
Affected versions : VLC media player 0.9.4 down to 0.9.0
ID                : VideoLAN-SA-0809
CVE reference     : CVE-2008-4654, CVE-2008-4686
</pre>
<h2>Details</h2>
<p>When parsing the header of an invalid TY file,
a stack-based buffer overflow might occur.
</p>
<h2>Impact</h2>
<p>If successful,
a malicious third party could trigger execution of arbitrary code
within the context of the VLC media player.
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
<p>VLC media player 0.9.5 addresses this issue.
Patches for older versions are available
from the official VLC source code repository 0.9-bugfix branch.
</p>
<h2>Credits</h2>
<p>This vulnerability was reported by Tobias Klein.
</p>
<h2>References</h2>
<dl>
<dt>The VideoLAN project</dt>
<dd><a href="http://www.videolan.org/">http://www.videolan.org/</a>
</dd>
<dt>VLC official GIT repository</dt>
<dd><a href="http://git.videolan.org/?p=vlc.git;a=shortlog;h=deb738bab3da02d925b365979e026efd15157da6">http://git.videolan.org/?p=vlc.git</a>
</dd>
<dt>Tobias Klein</dt>
<dd><a href="http://www.trapkit.de/advisories/"
  >http://www.trapkit.de/advisories/</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>18 October 2008</dt>
<dd>Vendor notification.</dd>
<dd>Patch for VLC development version and 0.9-bugfix tree.</dd>
<dd>Initial security advisory.</dd>
<dt>24 October 2008</dt>
<dd>VLC media player 0.9.5 released.</dd>
</dl>

<address>R&eacute;mi Denis-Courmont,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
