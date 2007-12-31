<?php
   $title = "VideoLAN Security Advisory 0802";
   $lang = "en";
   $date = "5 January 2008";
   $menu = array( "vlc" );
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">

<h1>Security Advisory 0703</h1>
<pre>
Summary           : Misuseable Stream Output features of the webbrowser plugins
                    and the M3U Playlist Parser 
Date              : 5 January 2008
Affected versions : VLC media player 0.8.6d and earlier
ID                : VideoLAN-SA-0802
CVE reference     : 
</pre>
<h2>Details</h2>
<p>Using VLC media player's webbrowser plugins or its M3U Playlist Parser could lead to unwanted file system action within the user's local privileges.
</p>
<h2>Impact</h2>
<p>If successful, a malicious third party could misuse the Stream Output features of VLC media player's webbrowser plugins and the M3U Playlist Parser to write arbitrary data to all accessible file system locations within the user's privileges without notifying the user about its actions.
</p>
<h2>Threat mitigation</h2>
<p>Exploitation of these design issues requires the user to visit a malicious
crafted website using VLC media player's webbrowser plugins or to open a specially crafted M3U playlist file.
</p>
<h2>Workarounds</h2>
<p>The user may stop using VLC media player's <code>--m3u-extvlcopt</code> setting, which enables parsing of exploitable playlist item options. Note that authors of some M3U files require these options for correct functionality.</p>
<p>
VLC media player's webbrowser plugins should be disabled until further action or websites from untrusted sources should not be opened, as there is no work-around available.
</p>
<h2>Solution</h2>
<p>VLC media player 0.8.6e addresses these design issues and introduces further
usability fixes.
</p>
<p>Pre-compiled packages will be available shortly at the usual download locations.
</p>
<h2>Credits</h2>
<p>These vulnerabilities were discovered internally by multiple members of the VideoLAN Team, notably Damien Fouilleul and R&eacute;mi Denis-Courmont. 
</p>
<h2>References</h2>
<dl>
<dt>The VideoLAN project</dt>
<dd><a href="http://trac.videolan.org/vlc/ticket/1371">trac ticket #1371</a></dd>
<dd><a href="http://www.videolan.org/">http://www.videolan.org/</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>xx January 2008</dt>
<dd>VLC 0.8.6e bugfix release</dd>
<dt>xx January 2008</dt>
<dd>Source code fixes for VLC 0.8.6d and development tree</dd>
<dt>20 November 2007</dt>
<dd>Ticket opened</dd>
</dl>

<address>R&eacute;mi Denis-Courmont, Damien Fouilleul, Felix Paul K&uuml;hne,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
