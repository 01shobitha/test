<?php
   $title = "VideoLAN Security Advisory 0803";
   $lang = "en";
   $menu = array( "vlc" );
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">

<h1>Security Advisory 0803</h1>
<pre>
Summary           : Buffer overflows in multiple modules
Date              : 13 April 2008
Affected versions : VLC media player 0.8.6e and earlier
ID                : VideoLAN-SA-0803
CVE reference     : CVE-2008-0073, CVE-2008-1489, CVE-2008-1768, CVE-2008-1769
</pre>
<h2>Details</h2>
<p>VLC media player's following modules suffer from arbitrary memory overwrite vulnerabilities when using specially crafted (invalid) input streams / files:
Real RTSP and Real media demuxers, MP4 demuxer, Cinepak decoder.
</p>
<h2>Impact</h2>
<p>If successful, a malicious third party could trigger the execution of arbitrary code within the context of the running instance or terminate the application unexpectedly.
</p>
<h2>Threat mitigation</h2>
<p>Exploitation of the MP4 / Real Media demuxer or the Cinepak decoder issues requires the user to explicitly open specially crafted files or streams.
</p>
<p>Exploitation of the Real RTSP problems requires the user to explicitly open streams provided by malicious third parties.</p>
<h2>Workarounds</h2>
<p>The user is asked to open Real RTSP / Real Media streams and MP4 files as well as files containing Cinepak video streams from trusted content providers only. In case of uncertainess, it is recommended not to open this kind of streams or files. RTSP streams can easily be identified by the <code>rtsp</code> prefix of their URL/MRL, while the MP4 container file type is recognizable by the <code>mp4</code> suffix. Cinepak encoded video streams are usually found in MOV and MP4 container files only, which may be perceived by their <code>mp4</code> and <code>mov</code> suffixes. Real Media files usually include <code>ram</code>, <code>ra</code> or <code>rm</code> suffixes.</p>
<h2>Solution</h2>
<p>VLC media player 0.8.6f addresses these issues and introduces further
usability fixes.
</p>
<p>Pre-compiled packages are available at the usual download locations.
</p>
<h2>Credits</h2>
<p>The Real RTSP demuxer, Real media demuxer, MP4 demuxer and Cinepak codec vulnerabilities were discovered by Drew Yao of Apple Product Security.
</p>
<h2>References</h2>
<dl>
<dt>The VideoLAN project</dt>
<dd><a href="//www.videolan.org/">http://www.videolan.org/</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>19 April 2008</dt>
<dd>Addition of further CVE references to this SA</dd>
<dt>2 April 2008</dt>
<dd>VLC 0.8.6f bugfix release</dd>
<dt>March 2008</dt>
<dd>Source code fixes for VLC 0.8.6f and development tree</dd>
<dd>Vulnerability reports</dd>
</dl>

<address>Felix Paul K&uuml;hne,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
