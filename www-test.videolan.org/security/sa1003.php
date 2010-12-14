<?php
   $title = "VideoLAN Security Advisory 1003";
   $lang = "en";
   $menu = array( "vlc" );
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">

<h1>Security Advisory 1003</h1>
<pre>
Summary           : Heap buffer overflow vulnerability in A/52, DTS
                     and MPEG Audio decoders
                    Invalid memory access in AVI, ASF, Matroska (MKV) demuxers
                    Invalid memory access in XSPF playlist parser
                    Invalid memory access in ZIP archive decompressor
                    Heap buffer overflow in RTMP access
Date              : 19 April 2010
Affected versions : VLC media player 1.0.5 down to 0.5.0
ID                : VideoLAN-SA-1003
CVE references    : CVE-2010-1441 through CVE-2010-1445
</pre>
<h2>Details</h2>
<p>VLC media player suffers from various vulnerabilities
when attempting to parse malformatted or overly long byte streams.
</p>
<h2>Impact</h2>
<p>If successful, a malicious third party could crash the player instance
or perhaps execute arbitrary code within the context of VLC media player.
</p>
<h2>Threat mitigation</h2>
<p>Exploitation of those bugs requires the user to explicitly open specifically
crafted malicious files.
</p>
<h2>Workarounds</h2>
<p>The user may refrain from opening files from untrusted sources.
</p>
<h2>Solution</h2>
<p>VLC media player 1.0.6 addresses these issues
and introduces further stability fixes.
</p>
<p>VLC media player 1.1.0 (currently in pre-release stage)
addresses these issues as well
and introduces further enhancements and fixes over version 1.0.6.
</p>
<h2>Credits</h2>
<p>These vulnerabilities were discovered by the development team
while working on VLC 1.1.0.
</p>
<h2>References</h2>
<dl>
<dt>The VideoLAN Project</dt>
<dd><a href="http://www.videolan.org/">http://www.videolan.org/</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>28 April 2010</dt>
<dd>CVE numbers assigned</dd>
</dl>
<dl>
<dt>21 April 2010</dt>
<dd>VLC 1.0.6 bugfix release</dd>
<dd>Initial advisory</dd>
</dl>

<address>R&eacute;mi Denis-Courmont,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
