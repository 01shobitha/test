<?php
   $title = "VideoLAN Security Advisory 1104";
   $lang = "en";
   $menu = array( "vlc" );
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">

<h1>Security Advisory 1104</h1>
<pre>
Summary           : Integer overflow in XSPF playlist parser
Date              : 07 June 2011
Affected versions : VLC media player 1.1.9 down to 0.8.5
ID                : VideoLAN-SA-1104
CVE references    : CVE-2011-2194
</pre>
<h2>Details</h2>
<p>VLC media player suffers from an integer overflow vulnerability
in the XSPF playlist file parser.
</p>
<h2>Impact</h2>
<p>If successful, a malicious third party could crash the player instance.
Arbitrary code execution within the context of VLC media player might be possible,
though it seems impractical.
</p>
<h2>Threat mitigation</h2>
<p>Exploitation of those bugs requires the user to explicitly open specifically
crafted malicious files.
</p>
<h2>Workarounds</h2>
<p>The user may refrain from opening files from untrusted sources.
</p>
<p>Alternatively, the playlist plugin (demux/libplaylist_plugin.*) can be removed.
This will however prevent use of any of all supported playlist file formats.
</p>
<h2>Solution</h2>
<p>VLC media player 1.1.10 addresses this issue
and introduces further stability fixes.
</p>
<h2>Credits</h2>
<p>This vulnerability was reported by
Rocco Calvi from stratsec on the VLC bug tracker.
</p>
<h2>References</h2>
<dl>
<dt>The VideoLAN Project</dt>
<dd><a href="//www.videolan.org/">http://www.videolan.org/</a>
</dd>
<dt>stratsec</dt>
<dd><a href="http://www.stratsec.net/">http://www.stratsec.net/</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>08 June 2011</dt>
<dd>CVE identifer assigned</dd>
<dt>07 June 2011</dt>
<dd>Initial advisory</dd>
<dt>06 June 2011</dt>
<dd>VLC 1.1.10 released</dd>
<dt>04 June 2011</dt>
<dd>Bug fixed</dd>
<dt>03 June 2011</dt>
<dd>Bug reported</dd>
</dl>

<address>R&eacute;mi Denis-Courmont,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
