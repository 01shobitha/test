<?php
   $title = "VideoLAN Security Advisory 0901";
   $lang = "en";
   $menu = array( "vlc" );
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">


<h1>Security Advisory 0901</h1>
<pre>
Summary           : Stack overflow in MPA, AVI and ASF demuxer
Date              : September 2009
Affected versions : VLC media player 1.0.1 down to 0.5.0
ID                : VideoLAN-SA-0901
CVE reference     : Pending
</pre>
<h2>Details</h2>
<p>When parsing a MP4, ASF or AVI file with an overly deep box structure,
a stack overflow might occur. It would overwrite the return address and 
thus redirect the execution flow.
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
<p>Alternatively, the MP4, AVI and ASF demuxer plugins
(<code>libmp4_plugin.*, libavi_plugin.*, libasf_plugin.*</code>)
can be removed manually from the VLC plugin installation directory.
</p>
<h2>Solution</h2>
<p>VLC media player 1.0.2 addresses this issue.
Patches for older versions are available
from the official VLC source code repository 1.0-bugfix branch.
</p>
<h2>Credits</h2>
<p>This vulnerability was reported by Sebastian Apelt, siberas.
</p>
<h2>References</h2>
<dl>
<dt>The VideoLAN project</dt>
<dd><a href="http://www.videolan.org/">http://www.videolan.org/</a>
</dd>
<dt>VLC official GIT repository</dt>
<dd><a href="http://git.videolan.org/?p=vlc.git;a=shortlog;h=1.0.2">http://git.videolan.org/?p=vlc.git</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>14 September 2009</dt>
<dd>Vendor notification.</dd>
<dt>15 September 2009</dt>
<dd>Internal patches for VLC development version and 0.9-bugfix tree.</dd>
<dt>19 September 2009</dt>
<dd>Initial security advisory.</dd>
<dt>20 September 2009</dt>
<dd>VLC media player 1.0.2 released.</dd>
</dl>
<br />
<address>Christophe Mutricy,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
