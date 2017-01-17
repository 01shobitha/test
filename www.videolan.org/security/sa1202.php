<?php
   $title = "VideoLAN Security Advisory 1202";
   $lang = "en";
   $menu = array( "vlc" );
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="fullwidth">

<h1>Security Advisory 1202</h1>
<pre>
Summary           : Heap overflows in VLC Real RTSP support.
Date              : March 2012
Affected versions : VLC media player all versions up to 2.0.1
ID                : VideoLAN-SA-1202
CVE reference     : CVE-2012-1776
</pre>

<h2>Details</h2>
<p>Details will be known later.
</p>
<h2>Impact</h2>
<p>If successful, a malicious third party could crash the VLC media player process.
Arbitrary code execution could be possible on some systems.
</p>
<h2>Threat mitigation</h2>
<p>Exploitation of this issue requires the user
to explicitly open a specially crafted file.
</p>
<h2>Workarounds</h2>
<p>The user should refrain from opening files from untrusted third parties
or accessing untrusted remote sites (or disable the VLC browser plugins),
until the patch is applied.
</p>
<p>Alternatively, the realrtsp access plugin (<code>libaccess_realrtsp_plugin.*</code>)
can be removed manually from the VLC plugin installation directory.
This will prevent opening of Real rtsp streams.
</p>
<h2>Solution</h2>
<p>VLC media player 2.0.1 addresses this issue.
Patches for older versions will be available through the git repositories
</p>
<h2>Credits</h2>
<p>This vulnerability was reported by Florent Hochwelker, aka TaPiOn.
</p>
<h2>References</h2>
<dl>
<dt>The VideoLAN project</dt>
<dd><a href="//www.videolan.org/">http://www.videolan.org/</a>
</dd>
<?php /* <dt>VLC official GIT repository</dt>
<dd><a href="http://git.videolan.org/?p=vlc.git;a=commit;h=7d282fac1cc455b5a5eca2bb56375efcbf879b06">http://git.videolan.org/?p=vlc.git</a>
</dd>
 */ ?>
</dl>
<h2>History</h2>
<dl>
<dt>12 March 2012</dt>
<dd>Vendor notification.</dd>
<dd>Private patch for VLC development version, 2.0 and 1.1 trees.</dd>
<dd>Initial security advisory.</dd>

<dt>15 March 2012</dt>
<dd>Official patch merged in VLC development version, 2.0 and 1.1 trees.</dd>
</dl>

<address>Jean-Baptiste Kempf,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
