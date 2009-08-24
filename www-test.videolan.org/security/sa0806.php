<?php
   $title = "VideoLAN Security Advisory 0806";
   $lang = "en";
   $menu = array( "vlc" );
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">

<h1>Security Advisory 0806</h1>
<pre>
Summary           : Heap-overflow in the VLC WAV demuxer
Date              : July 2008
Affected versions : VLC media player 0.8.6h and earlier
ID                : VideoLAN-SA-0806, Secunia SA30601
CVE reference     : CVE-2008-2430
</pre>
<h2>Details</h2>
<p>When parsing the header of an invalid RIFF WAVE (.WAV) sound file,
an integer overflow might happen causing an heap-based buffer overflow.
</p>
<h2>Impact</h2>
<p>If successful,
a malicious third party could trigger execution of arbitrary code
within the context of the VLC media player,
or otherwise crash the player instance.
</p>
<h2>Threat mitigation</h2>
<p>Exploitation of this issue requires the user
to explicitly open a specially crafted file.
</p>
<h2>Workarounds</h2>
<p>The user should refrain from opening files from untrusted third parties
or accessing untrusted Web sites (or disable the VLC browser plugins),
until the patch is applied.
</p>
<h2>Solution</h2>
<p>VLC media player 0.8.6i addresses this issue,
and adds further sanity checks to the RIFF WAVE demuxers.
</p>
<h2>Credits</h2>
<p>This vulnerability was discovered by Alin Rad Pop, Secunia Research.
</p>
<h2>References</h2>
<dl>
<dt>Secunia Research</dt>
<dd><a href="http://secunia.com/">http://secunia.com/</a>
</dd>
<dt>The VideoLAN project</dt>
<dd><a href="http://www.videolan.org/">http://www.videolan.org/</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>12 July 2008</dt>
<dd>VLC 0.8.6i bugfix release</dd>
<dt>28 June 2008</dt>
<dd>Source code fixes for VLC 0.8.6h and development tree</dd>
<dt>27 June 2008</dt>
<dd>Vendor notified</dd>
</dl>

<address>R&eacute;mi Denis-Courmont,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
