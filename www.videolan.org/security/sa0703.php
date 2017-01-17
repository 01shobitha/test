<?php
   $title = "VideoLAN security advisory 0703";
   $lang = "en";
   $menu = array( "vlc" );
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">

<h1>Security Advisory 0703</h1>
<pre>
Summary           : Recursive plugin release vulnerability in
                    Active X plugin
Date              : 30 November 2007
Affected versions : VLC media player 0.8.6 to 0.8.6c
ID                : VideoLAN-SA-0703, CORE-2007-1004
CVE reference     : CVE-2007-6262 
</pre>
<h2>Details</h2>
<p>VLC media player's ActiveX plugin is prone to a recursive plugin 
release vulnerability when being used within specifically crafted websites.
</p>
<h2>Impact</h2>
<p>If successful, a malicious third party could use this vulnerability
to overwrite memory zones and execute arbitrary code within the context 
of the VLC media player's ActiveX plugin
(i.e. acquire local user privileges on the vulnerable system).
</p>
<h2>Threat mitigation</h2>
<p>Exploitation of this bug requires the user to visit a malicious
crafted website using VLC media player's ActiveX plugin.
</p>
<h2>Workarounds</h2>
<p>The user may use VLC media player's Mozilla plugin
for Mozilla Firefox or Seamonkey,
which are not affected by this issue and provide the same features set.
</p>
<p>
Otherwise, websites from untrusted sources should not be opened.
</p>
<h2>Solution</h2>
<p>VLC media player 0.8.6d addresses this issue and introduces further
usability fixes.
</p>
<p>Pre-compiled packages for MS Windows are available at the
 usual download locations.
</p>
<h2>Credits</h2>
<p>This vulnerability was discovered by Ricardo Narvaja (Ricnar) from
the Exploit Writers team of Core Security Technologies. 
</p>
<h2>References</h2>
<dl>
<dt>CORE Security Technologies</dt>
<dd><a href="http://www.coresecurity.com/">http://www.coresecurity.com/</a>
<a href="http://www.coresecurity.com/index.php5?module=ContentMod&action=item&id=2035">Advisory CORE-2007-1004</a>
</dd>
<dt>The VideoLAN project</dt>
<dd><a href="//www.videolan.org/">http://www.videolan.org/</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>3 December 2007</dt>
<dd>Core Security advisory published</dd>
<dt>30 November 2007</dt>
<dd>VLC 0.8.6d bugfix release</dd>
<dd>Binaries for MS Windows</dd>
<dt>17 November 2007</dt>
<dd>Source code fixes for VLC 0.8.6c and development tree</dd>
<dt>29 October 2007</dt>
<dd>Bug reported by Ricardo Narvaja</dd>
</dl>

<address>Damien Fouilleul, Felix Paul K&uuml;hne,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
