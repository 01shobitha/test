<?php
   $title = "VideoLAN security advisory 0702";
   $lang = "en";
   $menu = array( "vlc" );
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">

<h1>Security Advisory 0702</h1>
<pre>
Summary           : Format string injection in Vorbis, Theora, SAP
                    and CDDA plugins
Date              : 12 June 2007
Affected versions : VLC media player 0.8.6b and earlier
ID                : VideoLAN-SA-0702
CVE reference     : CVE-2007-3316
</pre>
<h2>Details</h2>
<p>VLC media player Ogg/Vorbis, Ogg/Theora, CDDA (CD Digital Audio) and
SAP (Service Announce Protocol) plugins are prone to a C-style format
string vulnerability when trying to parse a media data stream.
</p>
<p>Valid but carefully crafted .ogg (Vorbis) or .ogm (Theora) files,
CDDB entries or SAP/SDP messages can trigger the bug.
We therefore consider this bug to have a high severity.
</p>
<h2>Impact</h2>
<p>If successful, a malicious third party could use this vulnerability
to execute arbitrary code within the context of VLC media player (i.e.
acquire local user privileges on the vulnerable system),
or crash the player instance.
</p>
<h2>Threat mitigation</h2>
<p>Exploitation of this bug requires getting VLC to read a crafted Ogg
file, an Audio CD with a crafted CDDB entry.
If SAP service discovery is enabled, the bug can be exploited
by sending a crafted multicast packets on the network.
</p>
<h2>Workarounds</h2>
<p>If support for Audio CDs and ogg files are not used,
one can remove the affected plugins manually from the VLC plugin
&quot;<code>access</code>&quot; directory.
Relevant filenames are as follow:
</p>
<dl>
<dt>Microsoft Windows</dt>
<dd><code>codec/libvorbis_plugin.dll</code>,
    <code>codec/libtheora_plugin.dll</code> and
    <code>access/libcdda_plugin.dll</code>
</dd>
<dt>Apple MacOS X</dt>
<dd><code>codec/libvorbis_plugin.dylib</code>,
    <code>codec/libtheora_plugin.dylib</code> and
    <code>access/libcdda_plugin.dylib</code>
</dd>
<dt>Other (Linux, BSD...)</dt>
<dd><code>codec/libvorbis_plugin.so</code>,
    <code>codec/libtheora_plugin.so</code> and
    <code>access/libcdda_plugin.so</code>
    (typically found in <code>/usr/lib</code>
     or <code>/usr/local/lib</code>).
</dd>
</dl>
<p>Otherwise,
files coming from untrusted source should not be opened,
and CDDB must be disabled.
</p>
<p>The SAP service discovery plugin must not enabled
(it is disabled by default).
</p>
<h2>Solution</h2>
<p>VLC media player 0.8.6c addresses this issue and introduces further
usability fixes.
</p>
<p>Pre-compiled packages for Mac OS X and MS Windows should be shortly
available at the usual download locations.
</p>
<p>Linux and BSD users should get relevant software upgrades from their
respective distribution/OS vendor.
</p>
<h2>Credits</h2>
<p>This bug responsibly reported by David&nbsp;Thiel
from iSEC&nbsp;Partners&nbsp;Inc, originally for the Ogg/Vorbis plugin,
and was found to affect other plugins after further internal analysis.
</p>
<h2>References</h2>
<dl>
<dt>iSEC Partners Inc.</dt>
<dd><a href="http://www.isecpartners.com/">http://www.isecpartners.com/</a>
</dd>
<dt>The VideoLAN project</dt>
<dd><a href="http://www.videolan.org/">http://www.videolan.org/</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>22 June 2007</dt>
<dd>Added CVE candidate ID reference</dd>
<dt>17 June 2007</dt>
<dd>VLC 0.8.6c bugfix release</dd>
<dd>Binaries for Windows and Mac OS X</dd>
<dt>07 June 2007</dt>
<dd>Source code fixes for VLC 0.8.6b and development tree</dd>
<dt>06 June 2007</dt>
<dd>Bug reported by David Thiel</dd>
</dl>

<address>R&eacute;mi Denis-Courmont,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
