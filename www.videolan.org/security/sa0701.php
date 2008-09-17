<?php
   $title = "VideoLAN security advisory 0701";
   $lang = "en";
   $menu = array( "vlc" );
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">

<h1>Security Advisory 0701</h1>
<pre>
Summary           : URL format string injection in CDDA and VCDX plugins
Date              : 02 January 2007
Affected versions : VLC media player 0.8.6 down to 0.7.0
ID                : VideoLAN-SA-0701, MOAB-02-01-2007
CVE reference     : CVE-2007-0017
</pre>
<h2>Details</h2>
<p>VLC media player CDDA (CD Digital Audio) and VCDX (Video CD) plugins
are prone to a C-style format string vulnerability
when trying to open a media resource location.
The bug occurs when handling error and debug messages
from underlying library <code>libcdio</code>.
</p>
<p>Because the VCDX plugins probes every media resource location unless
another plugin successfully opened the resource,
almost any invalid location can trigger the bug.
</p>
<h2>Impact</h2>
<p>If successful, a malicious third party could use this vulnerability
to execute arbitrary code within the context of VLC media player (i.e.
acquire local user privileges on the vulnerable system),
or crash the player instance.
</p>
<h2>Threat mitigation</h2>
<p>Exploitation of this bug requires passing of a maliciously crafted
media location to VLC media player.
While this normally comes from trustworthy user input,
it can also come from a playlist file (M3U and such),
from the network through a service discovery plugin (if enabled),
or embedded in a web page if VLC is installed as a browser plugin.
</p>
<h2>Workarounds</h2>
<p>If support for Audio and Video CDs is not used,
one can remove the affected plugins manually from the VLC plugin
&quot;<code>access</code>&quot; directory.
Relevant filenames are as follow:
</p>
<dl>
<dt>Microsoft Windows</dt>
<dd><code>access/libcdda_plugin.dll</code> and
    <code>access/libvcdx_plugin.dll</code>
</dd>
<dt>Apple MacOS X</dt>
<dd><code>access/libcdda_plugin.dylib</code> and
    <code>access/libvcdx_plugin.dylib</code>
</dd>
<dt>Other (Linux, BSD...)</dt>
<dd><code>access/libcdda_plugin.so</code> and
    <code>access/libvcdx_plugin.so</code>
    (typically found in <code>/usr/lib</code>
     or <code>/usr/local/lib</code>).
</dd>
</dl>
<p>Otherwise,
browser plugins and network-based service discovery mechanisms
(SAP, UPnP, Bonjour...) should be disabled,
and untrusted playlist files should not be used.
</p>
<h2>Solution</h2>
<p>Source code patch for VLC 0.8.6 is available
 <a href="patches/vlc-0.8.6-MOAB-02-01-2007.patch">here</a>
 (<a href="patches/vlc-0.8.6-MOAB-02-01-2007.patch.asc">GPG signature</a>).
</p>
<p>VLC media player 0.8.6a, published on 4th January 2007 addresses this issue and introduces further usability fixes.
</p>
<p>Pre-compiled packages for Mac OS X and MS Windows are available at the usual download locations.
</p>
<p>Linux and BSD users should get relevant software upgrades
from their respective distribution/OS vendor.
</p>
<p>Landon Fuller has reportedly released a patch for VLC 0.8.6 on MacOS X,
however the VideoLAN project cannot make any statement on its accuracy
at the moment.
</p>
<h2>Credits</h2>
<p>This bug was publicized and reported by Kevin Finisterre
as part of the <cite>Month Of Apple Bugs</cite> activity.
</p>
<h2>References</h2>
<dl>
<dt>Initial bug report</dt>
<dd><a
 href="http://www.via.ecp.fr/via/ml/vlc-devel/2007-01/msg00005.html"
 >http://www.via.ecp.fr/via/ml/vlc-devel/2007-01/msg00005.html</a>
</dd>
<dt>Initial patch</dt>
<dd><a href="http://trac.videolan.org/vlc/changeset/18481"
 >http://trac.videolan.org/vlc/changeset/18481</a>
</dd>
<dt>VLC 0.8.6 official <strong>source code</strong> patch</dt>
<dd><a href="patches/vlc-0.8.6-MOAB-02-01-2007.patch"
 >http://www.videolan.org/patches/vlc-0.8.6-MOAB-02-01-2007.patch</a>
</dd>
<dd><a href="patches/vlc-0.8.6-MOAB-02-01-2007.patch.asc"
 >http://www.videolan.org/patches/vlc-0.8.6-MOAB-02-01-2007.patch.asc</a>
</dd>
<dt>The VideoLAN project</dt>
<dd><a href="http://www.videolan.org/">http://www.videolan.org/</a>
</dd>
<dt>Public announce</dt>
<dd><a
 href="http://applefun.blogspot.com/2007/01/moab-02-01-2007-vlc-media-player-udp.html"
 >http://applefun.blogspot.com/2007/01/moab-02-01-2007-vlc-media-player-udp.html</a>
</dd>
<dt>Month of Apple Bugs</dt>
<dd><a href="http://applefun.blogspot.com/">http://applefun.blogspot.com/</a>
</dd>
<dt>MacOS X patch from Landon Fuller</dt>
<dd><a
 href="http://landonf.bikemonkey.org/code/macosx/MOAB_Day_2.20070103045559.6753.timor.html"
 >http://landonf.bikemonkey.org/code/macosx/MOAB_Day_2.20070103045559.6753.timor.html</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>05 January 2007</dt>
<dd>Added CVE candidate ID reference</dd>
<dt>04 January 2007</dt>
<dd>VLC 0.8.6a bugfix release</dd>
<dd>Binaries for Windows and MacOS X</dd>
<dt>03 January 2007</dt>
<dd>Initial advisory</dd>
<dd>Patch provided against VLC 0.8.6 source code</dd>
<dt>02 January 2007</dt>
<dd>Patch applied to VLC development tree</dd>
<dd>Bug reported and publicized by Kevin Finisterre</dd>
</dl>

<address>R&eacute;mi Denis-Courmont,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
