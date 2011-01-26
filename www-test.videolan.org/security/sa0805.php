<?php
   $title = "VideoLAN Security Advisory 0805";
   $lang = "en";
   $menu = array( "vlc" );
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">

<h1>Security Advisory 0805</h1>
<pre>
Summary           : Arbitrary code execution
                    through rogue VLC plugins in the current directory
Date              : May 2008
Affected versions : VLC media player 0.8.6f and earlier
ID                : VideoLAN-SA-0805
CVE reference     : CVE-2008-2147
</pre>
<h2>Details</h2>
<p>When initializing its plugins cache, VLC will look for dynamically loadable
plugins in the <code>modules/</code> and <code>plugins/</code> subdirectories
from the current working directory.
VLC will then jump to the versioned vlc_entry__x_y_z symbol if present,
and execute code with user privileges.
</p>
<h2>Impact</h2>
<p>If successful, a malicious local user may obtain the privileges of another
user on the system (local privilege escalation).
</p>
<p>A malicious third party could also trick a user into executing harmful code
from an untrusted media.
</p>
<h2>Threat mitigation</h2>
<p>Exploitation of this issue requires the user to start VLC (or a program
using LibVLC) while the current working directory is under the control of the
attacker.
Therefore, this attack is only likely to succeed on multi-user systems.
</p>
<p>This issue is only present on platforms where VLC uses installation paths
set at build-time, such as Linux, BSD and Sun Solaris.
<strong>This issue does not affect VLC running on Windows, Windows CE,
Mac OS X or BeOS</strong>.
</p>
<h2>Workarounds</h2>
<p>The user should not start VLC media player from directories with potentially
untrusted content, such as directories writeable by untrusted users.
</p>
<h2>Solution</h2>
<p>VLC media player 0.8.6g addresses this issue.
</p>
<h2>Credits</h2>
<p>This vulnerability was discovered internally by R&eacute;mi Denis-Courmont.
</p>
<h2>References</h2>
<dl>
<dt>The VideoLAN project</dt>
<dd><a href="http://trac.videolan.org/vlc/ticket/1371">trac ticket #1578</a>
</dd>
<dd><a href="http://www.videolan.org/">http://www.videolan.org/</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>18 May 2008</dt>
<dd>VLC 0.8.6g bugfix release</dd>
<dt>10 May 2008</dt>
<dd>Patch applied to VLC development tree</dd>
<dd>Patch provided against VLC 0.8.6 source code</dd>
<dd>Ticket opened</dd>
</dl>

<address>R&eacute;mi Denis-Courmont,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
