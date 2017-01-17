<?php
   $title = "VideoLAN Security Advisory 0804";
   $lang = "en";
   $menu = array( "vlc" );
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">

<h1>Security Advisory 0804</h1>
<pre>
Summary           : Arbitrary file overwrite and other abuses
                    through M3U parser
Date              : November 2007
Affected versions : VLC media player 0.8.6c and earlier
ID                : VideoLAN-SA-0804
CVE reference     : CVE-2007-6683
</pre>
<h2>Details</h2>
<p>Using VLC media player's M3U Playlist Parser could lead
to arbitrary file overwrite and other unwanted action
within the security context of the user running VLC.
</p>
<h2>Impact</h2>
<p>If successful, a malicious third party could misuse the Stream Output
features of VLC media player's the M3U Playlist Parser to write arbitrary data
to any accessible file system locations, send packets on the network, etc.
</p>
<h2>Threat mitigation</h2>
<p>Exploitation of these design issues requires the user to open a specially
crafted M3U playlist file.
</p>
<h2>Workarounds</h2>
<p>The user should not use VLC media player's <code>--m3u-extvlcopt</code>
setting, which enables parsing of exploitable playlist item options.
This option is only found in some 0.8.6 releases;
from VLC 0.9.0, unsafe playlist extensions are always ignored.
</p>
<h2>Solution</h2>
<p>VLC media player 0.8.6d addresses these design issues
and introduces further usability fixes.
</p>
<h2>Credits</h2>
<p>These vulnerabilities were discovered internally by multiple members
of the VideoLAN Team, notably Damien Fouilleul and R&eacute;mi Denis-Courmont. 
</p>
<h2>References</h2>
<dl>
<dt>The VideoLAN project</dt>
<dd><a href="https://trac.videolan.org/vlc/ticket/1371">trac ticket #1371</a></dd>
<dd><a href="//www.videolan.org/">http://www.videolan.org/</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>21 January 2009</dt>
<dd>Clarifications</dd>
<dt>10 May 2008</dt>
<dd>Added CVE ID reference</dd>
<dt>30 November 2007<dt>
<dd>VLC 0.8.6d bugfix release</dd>
<dt>20 November 2007</dt>
<dd>Patch provided against VLC 0.8.6 source code</dd>
<dd>Patch applied to VLC development tree</dd>
<dd>Ticket opened</dd>
</dl>

<address>R&eacute;mi Denis-Courmont, Damien Fouilleul,
Felix Paul K&uuml;hne,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
