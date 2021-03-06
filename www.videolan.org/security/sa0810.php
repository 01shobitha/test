<?php
   $title = "VideoLAN Security Advisory 0810";
   $lang = "en";
   $menu = array( "vlc" );
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="fullwidth">

<h1>Security Advisory 0810</h1>
<pre>
Summary           : Buffer overflows in VLC RealText and CUE demuxers
Date              : November 2008
Affected versions : VLC media player 0.9.5 down to 0.5.0
ID                : VideoLAN-SA-0810
CVE reference     : CVE-2008-5032, CVE-2008-5036
</pre>
<h2>Details</h2>
<p>When parsing the header of an invalid CUE image file
or an invalid RealText subtitle file,
stack-based buffer overflows might occur.
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
<p>Alternatively, the VCD and Subtitles plugins
(<code>libvcd_plugin.*</code> and <code>libsubtitle_plugin.*</code>)
can be removed manually from the VLC plugin installation directory.
However, this will <strong>prevent use of subtitle files</strong>
and Video CD altogether.
</p>
<h2>Solution</h2>
<p>VLC media player 0.9.6 addresses this issue.
Patches for older versions are available
from the official VLC source code repository 0.9-bugfix branch.
</p>
<h2>Credits</h2>
<p>These vulnerabilities were reported by Tobias Klein.
</p>
<h2>References</h2>
<dl>
<dt>The VideoLAN project</dt>
<dd><a href="//www.videolan.org/">http://www.videolan.org/</a>
</dd>
<dt>VLC official GIT repository</dt>
<dd><a href="http://git.videolan.org/?p=vlc.git;a=shortlog;h=e3cef651125701a2e33a8d75b815b3e39681a447">http://git.videolan.org/?p=vlc.git</a>
</dd>
<dt>Tobias Klein</dt>
<dd><a href="http://www.trapkit.de/advisories/"
  >http://www.trapkit.de/advisories/</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>3 November 2008</dt>
<dd>Vendor notification.</dd>
<dt>4 November 2008</dt>
<dd>Internal patches for VLC development version and 0.9-bugfix tree.</dd>
<dt>5 November 2008</dt>
<dd>Initial security advisory.</dd>
<dd>VLC media player 0.9.6 released.</dd>
</dl>

<address>R&eacute;mi Denis-Courmont,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
