<?php
   $title = "VideoLAN Security Advisory 1006";
   $lang = "en";
   $menu = array( "vlc" );
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">

<h1>Security Advisory 1006</h1>
<pre>
Summary           : Stack smashing in Samba access
Date              : November 2010
Affected versions : VLC media player for Windows, versions up to 1.1.4
ID                : VideoLAN-SA-1006
CVE reference     : N/A
</pre>
<h2>Details</h2>
<p>Due to an error in the declaration of code calling conventions,
VLC for Windows suffers from a stack smashing attack
in the Samba network share access module.
</p>
<p><strong>This issue affects only the Windows versions of VLC media player.
</strong>
</p>
<h2>Impact</h2>
<p>Successful exploitation could enable execution of arbitrary code
within the context of VLC media player.
</p>
<h2>Workarounds</h2>
<p>The user should refrain from opening files from untrusted third
parties or accessing untrusted remote sites (network shares, USB keys).<br />
The problem can also be prevented by deleting the faulty file at 
C:\Program Files\VideoLAN\VLC\plugins\libaccess_smb_plugin.dll
until the patch is applied.
</p>
<h2>Solution</h2>
<p>VLC media player 1.1.5 addresses this issue. The patch for VLC media
player 1.1.x is available from the corresponding official VLC source
code repositories.
</p>
<h2>Credits</h2>
<p>This vulnerability was documented by shinnai.
</p>
<h2>References</h2>
<dl>
<dt>The VideoLAN project</dt>
<dd><a href="//www.videolan.org/">http://www.videolan.org/</a>
</dd>
<dt>Patch for VLC 1.1.4, 1.1.3, 1.1.2, 1.1.1, 1.1.0</dt>
<dd><a href="http://git.videolan.org/?p=vlc/vlc-1.1.git;a=commit;h=b531955c2206c88250cacc511793facc32cbced6">commit b531955c2206c88250cacc511793facc32cbced6</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>26 October 2010</dt>
<dd>Details of the vulnerability made public.</dd>
<dt>29 October 2010</dt>
<dd>The vulnerability is brought to the knowledge of VideoLAN through another bug report.</dd>
<dt>02 November 2010</dt>
<dd>Vendor patch for VLC 1.1.4.</dd>
<dd>Initial security advisory.</dd>
<dt>13 November 2010</dt>
<dd>VLC 1.1.5 release.</dd>
</dl>

<address>Rafaël Carré,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
