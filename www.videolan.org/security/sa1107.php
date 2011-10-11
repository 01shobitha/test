<?php
   $title = "VideoLAN Security Advisory 1107";
   $lang = "en";
   $menu = array( "vlc" );
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">

<h1>Security Advisory 1107</h1>
<pre>
Summary           : NULL dereference vulnerability in HTTP and RSTP server
Date              : 06 October 2011
Affected versions : VLC media player 1.1.11 and ealier
ID                : VideoLAN-SA-1107
CVE references    : CVE-2011-3333
</pre>
<h2>Details</h2>
<p>VLC media player suffers from a NULL dereference vulnerability
in the HTTP and RTSP server component.
</p>
<h2>Impact</h2>
<p>If successful, a malicious third party could crash the server process.
Arbitrary code execution within the context of VLC media player is not
believed possible.
</p>
<h2>Threat mitigation</h2>
<p>Exploitation of those bugs requires the user to explicitly start
the HTTP web interface, HTTP output, RTSP output or RTSP VoD functions.
</p>
<h2>Workarounds</h2>
<p>Where possible, limit access to the VLC server to trusted IP addresses.
</p>
<p>Alternatively, configure a deep inspection firewall to block malformed
HTTP and RTSP requests.
</p>
<h2>Solution</h2>
<p>VLC media player 1.1.12 addresses this issue.
A source code patch is also available as an alternative.
</p>
<h2>Credits</h2>
<p>This vulnerability was discovered
by Jouni Knuutinen from Codenomicon Oy
and coordinated by Antti Kiuru from the CERT-FI security unit
at the Finnish Communications Regulatory Authority (FICORA).
</p>
<h2>References</h2>
<dl>
<dt>The VideoLAN Project</dt>
<dd><a href="http://www.videolan.org/">http://www.videolan.org/</a>
</dd>
<dt>Source code patch</dt>
<dd><a
 href="http://git.videolan.org/?p=vlc.git;a=commit;h=a03617089bc045e343f94921f257cf71436f4812"
 >git commit a03617089bc045e343f94921f257cf71436f4812</a>
</dd>
<dt>Codenomicon Oy</dt>
<dd><a href="http://www.codenomicon.com/">http://www.codenomicon.com/</a>
</dd>
<dt>CERT-FI</dt>
<dd><a href="http://www.cert-fi.fi/en/">http://www.cert-fi.fi/en/</a>
</dd>
<dt>FICORA</dt>
<dd><a href="http://www.ficora.fi/en/">http://www.ficora.fi/en/</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>10 October 2011</dt>
<dd>CVE ID assigned</dd>
<dt>06 Octobery 2011</dt>
<dd>VLC 1.1.12 released</dd>
<dd>Initial advisory</dd>
<dt>26 September 2011</dt>
<dd>Issue resolved privately</dd>
<dd>Bug reported</dd>
</dl>

<address>R&eacute;mi Denis-Courmont,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
