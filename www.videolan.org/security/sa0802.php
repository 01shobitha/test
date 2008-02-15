<?php
   $title = "VideoLAN Security Advisory 0802";
   $lang = "en";
   $date = "February 2008";
   $menu = array( "vlc" );
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">

<p><span style="font-weight: bold;">DISCLAIMER:
This document is work-in-progress security advisory
of the VideoLAN project.
It has not been approved as a security advisory.
It does not represent the position of the VideoLAN project
or any of its contributors.
Citing or quoting this document otherwise may constitute
an inappropriate misrepresentation of the VideoLAN project position
(or lack thereof) on the covered subject.
</span>
</p>

<h1>Security Advisory 0802</h1>
<pre>
Summary           : Arbitrary memory overwrite in the MP4 demuxer
Date              : 8 February 2008
Affected versions : VLC media player 0.8.6d and earlier
ID                : VideoLAN-SA-0802, CORE-2008-0130
CVE reference     : CVE-2008-????
</pre>
<h2>Details</h2>
<p>VLC media player's MPEG-4 file format parser (a.k.a. the MP4 demuxer)
suffers from an arbitrary memory overwrite vulnerability
when using specially crafted (invalid) MP4 input files.
</p>
<h2>Impact</h2>
<p>If successful,
a malicious third party could trigger execution of arbitrary code
within the context of the VLC media player,
or otherwise crash the player instance.
</p>
<h2>Threat mitigation</h2>
<p>Exploitation of the MP4 demuxer problem requires the user
to explicitly open a specially crafted file.
</p>
<h2>Workarounds</h2>
<p>The user should refrain from opening files from untrusted third parties
or accessing untrusted Web sites (or disable the VLC browser plugins),
until the patch is applied.
</p>
<h2>Solution</h2>
<p>VLC media player 0.8.6e addresses these issues
and introduces further usability fixes.
The source code patch can be downloaded separately here:
<a href="../patches/vlc-0.8.6-CORE-2008-0130.patch"
 >vlc-0.8.6-CORE-2008-0130.patch</a>.
</p>
<p>Pre-compiled packages will be available
at the usual download locations shortly.
</p>
<h2>Credits</h2>
<p>Felipe Manzano and Anibal Sacco from Core Security Technologies
are credited with the discovery of this security issue.
</p> 
<h2>References</h2>
<dl>
<dt>Core Security Technologies</dt>
<dd><a href="http://www.coresecurity.com/">http://www.coresecurity.com/</a>
</dd>
<dt>The VideoLAN Project</dt>
<dd><a href="http://www.videolan.org/">http://www.videolan.org/</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>Pending</dt>
<dd>VLC 0.8.6e bugfix release</dd>
<dd>Public disclosure</dd>
<dt>7 February 2008</dt>
<dd>Source code fixes for VLC 0.8.6d and development tree</dd>
<dd>Vendor obtained vulnerability description</dd>
<dt>6 February 2008</dt>
<dd>Vendor notified of security problem</dd>
</dl>

<address>R&eacute;mi Denis-Courmont,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
