<?php
   $title = "VideoLAN Security Advisory 1005";
   $lang = "en";
   $menu = array( "vlc" );
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="fullwidth">

<h1>Security Advisory 1005</h1>
<pre>
Summary           : DLL preloading vulnerability
Date              : August 2010
Affected versions : All VLC media player versions up to 1.1.3
ID                : VideoLAN-SA-1005
CVE reference     : CVE-2010-3124
</pre>
<h2>Details</h2>
<p>Due to the DLL loading design on Windows, VLC loads automatically
a DLL from the current directory, if it doesn't find it in VLC's
application directory or in system directories. A few modules of VLC are
affected (only Qt4 and DMO are known at the moment).
</p>
<h2>Impact</h2>
<p>If successful, the exploit can execute arbitrary code within the
context of VLC media player.
</p>
<h2>Threat mitigation</h2>
<p>Microsoft has published workarounds ( <a
href="https://www.microsoft.com/technet/security/advisory/2269637.mspx">
https://www.microsoft.com/technet/security/advisory/2269637.mspx</a>
) and a tool ( <a href="http://support.microsoft.com/kb/2264107"
>http://support.microsoft.com/kb/2264107</a> ) that fixes the
vulnerability for all affected software on the computer.
</p>
<h2>Workarounds</h2>
<p>The user should refrain from opening files from untrusted third
parties or accessing untrusted remote sites (network shares, USB keys),
until the patch is applied.
</p>
<h2>Solution</h2>
<p>VLC media player 1.1.4 addresses this issue. The patch for VLC media
player 1.1.x is available from the corresponding official VLC source
code repositories.
</p>
<h2>Credits</h2>
<p>This vulnerability was reported by Georgi Guninski, Taeho Kwon, ACROS
Security and H.D. Moore.<br />
An exploit was posted on exploit-db by Vinay Katoch.
</p>
<h2>References</h2>
<dl>
<dt>The VideoLAN project</dt>
<dd><a href="//www.videolan.org/">http://www.videolan.org/</a>
</dd>
<dt>Patch for VLC 1.1.3, 1.1.2, 1.1.1, 1.1.0</dt>
<dd><a href="http://git.videolan.org/?p=vlc/vlc-1.1.git;a=commit;h=43a31df56c37bd62c691cdbe3c1f11babd164b56">commit 43a31df56c37bd62c691cdbe3c1f11babd164b56</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>23 August 2010</dt>
<dd>Details of the vulnerability released.</dd>
<dt>25 August 2010</dt>
<dd>Exploit release.</dd>
<dd>Vendor patch for VLC 1.1.3.</dd>
<dt>26 August 2010</dt>
<dd>Initial security advisory.</dd>
<dd>CVE reference assigned.</dd>
<dt>27 August 2010</dt>
<dd>VLC 1.1.4 release.</dd>
</dl>

<address>Geoffroy Couprie,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
