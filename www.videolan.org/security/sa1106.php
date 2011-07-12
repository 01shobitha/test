<?php
   $title = "VideoLAN Security Advisory 1106";
   $lang = "en";
   $menu = array( "vlc" );
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">

<h1>Security Advisory 1106</h1>
<pre>
Summary           : Heap overflow in AVI demuxer
Date              : 12 July 2011
Affected versions : VLC media player 1.1.10 down to 0.5.0
ID                : VideoLAN-SA-1106
CVE references    : CVE-2011-2588
</pre>
<h2>Details</h2>
<p>VLC media player suffers from a heap overflow vulnerability
in the AVI file parser.
</p>
<h2>Impact</h2>
<p>If successful, a malicious third party could crash the player instance.
Arbitrary code execution within the context of VLC media player might be
possible, though it was unconfirmed.
</p>
<h2>Threat mitigation</h2>
<p>Exploitation of those bugs requires the user to explicitly open specifically
crafted malicious files.
</p>
<h2>Workarounds</h2>
<p>The user may refrain from opening files from untrusted sources.
</p>
<p>Alternatively, the RealMedia plugin (demux/libavi_plugin.*) can be removed.
This will however prevent use of any of AVI media files.
</p>
<h2>Solution</h2>
<p>VLC media player 1.1.11 addresses this issue
and introduces further stability fixes.
A source code patch is also available as an alternative.
</p>
<h2>Credits</h2>
<p>This vulnerability was discovered by Hossein Lotfi
and reported via Secunia.
</p>
<h2>References</h2>
<dl>
<dt>The VideoLAN Project</dt>
<dd><a href="http://www.videolan.org/">http://www.videolan.org/</a>
</dd>
<dt>Source code patch</dt>
<dd><a
 href="http://git.videolan.org/?p=vlc/vlc-1.1.git;a=commit;h=9c14964bd11482d5c1d6c0e223440f9f1e5b1831"
 >git commit 9c14964bd11482d5c1d6c0e223440f9f1e5b1831</a>
</dd>
<dt>Secunia</dt>
<dd><a href="http://www.secunia.com/">http://www.secunia.com/</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>12 July 2011 (tentative)</dt>
<dd>VLC 1.1.11 released</dd>
<dt>12 July 2011</dt>
<dd>Initial advisory</dd>
<dt>10 July 2011</dt>
<dd>Issue resolved privately</dd>
<dt>08 July 2011</dt>
<dd>CVE identifier assigned</dd>
<dt>07 June 2011</dt>
<dd>Bug reported</dd>
</dl>

<address>R&eacute;mi Denis-Courmont,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
