<?php
   $title = "VideoLAN Security Advisory 1501";
   $lang = "en";
   $menu = array( "vlc" );
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>


<div id="fullwidth">

<h1>Security Advisory 1501</h1>
<pre>
Summary           : Multiple buffer and heap overflows in VLC modules and updater
Date              : February 2015
Affected versions : VLC media player 2.1.5 and earlier
ID                : VideoLAN-SA-1501
CVE reference     : CVE-2014-9630, CVE-2014-9629, CVE-2014-9625, CVE-2014-9626, CVE-2014-9627, CVE-2014-9628
</pre>

<h2>Details</h2>
<p>This is a collection of crashes, of low to medium impact, that affect several components of VLC.</p>
<p>A heap overflow in the decomp stream filter, for Unix.</p>
<p>A buffer overflow in the schroedinger module, for Dirac streams. (CVE-2014-9629)</p>
<p>Buffer overflows when parsing string boxes in mp4 demuxer. (CVE-2014-9626, 9627, 9628)</p>
<p>A integer overflow in the SRTP module (only shipped on Unix, Windows not affected).</p>
<p>A read overflow in the Ogg demuxer.</p>
<p>A potential buffer overflow in the update module. (CVE-2014-9625)</p>
<p>A possible RTP streaming invalid memory access. (CVE-2014-9630)</p>

<h2>Impact</h2>
<p>If successful, a malicious third party could trigger either nothing, or an invalid memory access,
or lead to a crash of VLC or an arbitratry code execution.
</p>

<h2>Threat mitigation</h2>
<p>Exploitation of those issues requires the user to explicitly open a specially crafted file or stream.</p>
<p>ASLR and DEP help reduce exposure, but may be bypassed.</p>

<h2>Workarounds</h2>
<p>The user should refrain from opening files from untrusted third parties
or accessing untrusted remote sites (or disable the VLC browser plugins),
until the patch is applied.
</p>

<h2>Solution</h2>
<p>VLC media player <b>2.1.6</b> addresses all those issues.
Patches for older versions are available from the official VLC source code repository 2.1.
</p>
<p>VLC media player <b>2.2.0</b> addresses all those issues, and more, except (CVE-2014-9629), that is fixed in <b>2.2.1</b>.
</p>
<h2>References</h2>
<dl>
<dt>The VideoLAN project</dt>
<dd><a href="//www.videolan.org/">http://www.videolan.org/</a>
</dd>
<dt>VLC official GIT repository</dt>
<dd><a href="http://git.videolan.org/?p=vlc/vlc-2.1.git">http://git.videolan.org/?p=vlc.git</a>
</dd>
</dl>

</div>

<?php footer('$Id$'); ?>
