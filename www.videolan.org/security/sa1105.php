<?php
   $title = "VideoLAN Security Advisory 1105";
   $lang = "en";
   $menu = array( "vlc" );
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">

<h1>Security Advisory 1105</h1>
<pre>
Summary           : Heap overflow in RealMedia demuxer
Date              : 12 July 2011
Affected versions : VLC media player 1.1.10 down to 1.1.0
ID                : VideoLAN-SA-1105
CVE references    : CVE-2011-2587
</pre>
<h2>Details</h2>
<p>VLC media player suffers from a heap overflow vulnerability
in the Real Media file parser.
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
<p>Alternatively, the RealMedia plugin (demux/libreal_plugin.*) can be removed.
This will however prevent use of any of Real Media files.
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
<dd><a href="//www.videolan.org/">http://www.videolan.org/</a>
</dd>
<dt>Source code patch</dt>
<dd><a
 href="http://git.videolan.org/?p=vlc.git;a=commit;h=1bce40644cddee93b4b1877a94a6ce345f32852c"
 >git commit 1bce40644cddee93b4b1877a94a6ce345f32852c</a>
</dd>
<dt>Secunia</dt>
<dd><a href="http://www.secunia.com/">http://www.secunia.com/</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>15 July 2011</dt>
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
