<?php
   $title = "VideoLAN Security Advisory 1001";
   $lang = "en";
   $menu = array( "vlc" );
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">


<h1>Security Advisory 1001</h1>
<pre>
Summary           : Clam AntiVirus input validation error
Date              : February 2010
Affected versions : VLC media player 1.0.5 for Windows
                    Clam AntiVirus all versions
ID                : VideoLAN-SA-1001
CVE reference     : N/A
</pre>
<h2>Details</h2>
<p>Clam AntiVirus incorrectly claims that the x86 SSE2-accelerated I:4:2:2
chroma conversion plugin as being a computer trojan.
This affects builds of VLC media player with recent versions of the MingW
compilation toolchain.
</p>
<h2>Impact</h2>
<p>Copy, installation and/or use of VLC media player or applications based
on LibVLC may be impossible.
</p>
<h2>Threat mitigation</h2>
<p>This issue only affects users of Clam AntiVirus or anti-virus software
using the same virus database.
</p>
<h2>Solution</h2>
<p>Remove Clam AntiVirus before downloading VLC media player.
</p>
<p>An anti-virus database has to be up-to-date to be of much use.
Around 20% of tested antivirus incorrectly detected as VLC 1.0.5 as a
trojan at the time of release.
Kaspersky Anti-Virus was updated within one business day. 
<strong>The VideoLAN project advises against the use of Clam AntiVirus.
</strong> Users should not rely on a security software which fails to be
updated within a full month period (to date).
</p>
<h2>Credits</h2>
<p>This vulnerability was reported by many different people individiually.
</p>
<h2>References</h2>
<dl>
<dt>The VideoLAN project</dt>
<dd><a href="http://www.videolan.org/">http://www.videolan.org/</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>28 January 2010</dt>
<dd>VLC media player 1.0.5 released.</dd>
<dt>15 February 2010 (probably earlier)</dt>
<dd>Vendor notification.</dd>
<dt>28 February 2010</dt>
<dd>Initial security advisory.</dd>
</dl>
<br />
<address>R&eacute;mi Denis-Courmont,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id: sa0901.php 5651 2009-09-19 23:51:01Z xtophe $'); ?>
