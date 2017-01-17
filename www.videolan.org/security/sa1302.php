<?php
   $title = "VideoLAN Security Advisory 1302";
   $lang = "en";
   $menu = array( "vlc" );
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">

<h1>Security Advisory 1302</h1>
<pre>
Summary           : Buffer Overflow in ASF Demuxer
Date              : January 2013
Affected versions : VLC media player 2.0.5 and earlier
ID                : VideoLAN-SA-1302
CVE reference     : CVE-2013-1954
</pre>
<h2>Details</h2>
<p>When parsing a specially crafted ASF movie, a buffer overflow might occur.</p>

<h2>Impact</h2>
<p>If successful, a malicious third party could trigger an invalid memory access, leading to
a crash of VLC media player's process. In some cases attackers might exploit this issue
to execute arbitrary code within the context of the application but this information is not confirmed.</p>

<h2>Threat mitigation</h2>
<p>Exploitation of this issue requires the user to explicitly open a specially crafted ASF movie.</p>

<h2>Workarounds</h2>
<p>The user should refrain from opening files from untrusted third parties or accessing untrusted
remote sites (or disable the VLC browser plugins), until the patch is applied.</p>

<p>Alternatively, the ASF demuxer (<code>libasf_plugin.*</code>) can be removed manually
from the VLC plugin installation directory. This will prevent ASF movie playback.</p>

<h2>Solution</h2>
<p>This issue is addressed in VLC media player 2.0.x source code repository by replacing a
macro with a static inline and improved bounds checking.</p>
<p>This patch is included in VLC's 2.0.6 release.</p>

<p>Windows and Mac OS X builds can be found on the VideoLAN nightlies website.</p>

<h2>Credits</h2>
<p>This vulnerability was reported by Debasish Mandal.</p>

<h2>References</h2>
<dl>
<dt>The VideoLAN project</dt>
<dd><a href="//www.videolan.org/">http://www.videolan.org/</a>
</dd>
<dt>VLC official GIT repository</dt>
<dd><a href="http://git.videolan.org/?p=vlc.git;a=commit;h=b31ce523331aa3a6e620b68cdfe3f161d519631e">http://git.videolan.org/?p=vlc.git</a>
</dd>
</dl>
<h2>History</h2>

<dl>
<dt>11 Apr 2013</dt>
<dd>VLC media player 2.0.6 release.</dd>
<dt>17 Jan 2013</dt>
<dd>Nightly builds version of VLC 2.0.6 released for testing purposes.</dd>
<dt>17 Jan 2013</dt>
<dd>Patch for VLC media player committed to the source code repository, and to the stable branch.</dd>
<dt>11 Jan 2013</dt>
<dd>Crash reported to the VLC project.</dd>
</dl>
</div>

<?php footer('$Id$'); ?>
