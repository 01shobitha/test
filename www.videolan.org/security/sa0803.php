<?php
   $title = "VideoLAN Security Advisory 0803";
   $lang = "en";
   $date = "4 April 2008";
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

<h1>Security Advisory 0804</h1>
<pre>
Summary           : Buffer overflows in multiple modules
Date              : April 2008
Affected versions : VLC media player 0.8.6e and earlier
ID                : VideoLAN-SA-0803, <a href="sa0801.php">VideoLAN-SA-0801</a>
CVE reference     : CVE-2007-6681, CVE-2008-0073, CVE-2008-1489
</pre>
<h2>Details</h2>
<p>VLC media player's following modules suffer from arbitrary memory overwrite vulnerabilities when using specially crafted (invalid) input streams / files:
Subtitle demuxer, Real RTSP demuxer, MP4 demuxer, Cinepak decoder.
</p>
<h2>Impact</h2>
<p>If successful, a malicious third part could trigger the execution of arbitrary code within the context of the running instance or terminate the application unexpectedly.
</p>
<h2>Threat mitigation</h2>
<p>Exploitation of the MP4 demuxer or the Cinepak decoder issues requires the user to explicitly open specially crafted files.
</p>
<p>Subtitle files can be opened manually by the user or automatically based on the filename of the movie. Both ways may lead to exploitation of the Subtitle Parser's buffer-overflow.
</p>
<p>Exploitation of the Real RTSP problems requires the user to explicitly open streams provided by maliciously third parties.</p>
<h2>Workarounds</h2>
<p>The user is asked to open Real RTSP streams and MP4 files as well as files containing Cinepak video streams from trusted content providers only. In case of uncertainess, it is recommended not to open this kind of streams or files. RTSP streams can easily be identified by the <code>rtsp</code> prefix of their URL/MRL, while the MP4 container file type is recognizable by the <code>mp4</code> suffix. Cinepak encoded video streams are usually found in MOV and MP4 container files only, which may be perceived by their <code>mp4</code> and <code>mov</code> suffixes.</p>
<p>Automatic detection of subtitle files can be disabled by unchecking the "Autodetect subtitle files" option in the Subtitle category inside the Video preferences. Note that you need to restart VLC media player for this change to take effect. In case that you use VLC media player through the command-line, provide <code>--no-sub-autodetect-file</code> to override its default behavior.</p><p>The user is asked to use subtitle files authored by trusted sources only.</p>
<h2>Solution</h2>
<p>VLC media player 0.8.6f addresses these issues and introduces further
usability fixes.
</p>
<p>Pre-compiled packages are available at the usual download locations.
</p>
<h2>Credits</h2>
<p>The Real RTSP demuxer, MP4 demuxer and Cinepak codec vulnerabilities were discovered by Drew Yao of Apple Product Security. Luigi Ariemma reported the Subtitle issue.
</p>
<h2>References</h2>
<dl>
<dt>The VideoLAN project</dt>
<dd><a href="http://www.videolan.org/">http://www.videolan.org/</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>2 April 2008</dt>
<dd>VLC 0.8.6f bugfix release</dd>
<dt>March 2008</dt>
<dd>Source code fixes for VLC 0.8.6f and development tree</dd>
<dd>Vulnerity reports</dd>
</dl>

<address>Felix Paul K&uuml;hne,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
