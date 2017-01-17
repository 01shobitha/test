<?php
   $title = "VideoLAN Security Advisory 0801";
   $lang = "en";
   $menu = array( "vlc" );
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">

<h1>Security Advisory 0801</h1>
<pre>
Summary           : Format string vulnerability in the Web interface
                    Stack-based buffer overflow in the Subtitles demuxer
                    String buffer overflows in the Real RTSP demuxer
Date              : 27 February 2008, 2 April 2008
Affected versions : VLC media player 0.8.6d and earlier
ID                : VideoLAN-SA-0801
CVE references    : CVE-2007-6681, CVE-2007-6682, CVE-2008-0295, CVE-2008-0296
</pre>
<h2>Details</h2>
<p>VLC media player's web interface suffers from a format string vulnerability when using specially crafted requests.
</p>
<p>Its subtitle demuxer is prone to multiple buffer overflows triggered by parsing maliciously crafted files.
</p>
<p>Its Real RTSP demuxer is based upon an older Xine library fork, which is prone to multiple buffer overflows triggered by maliciously crafted Session Description Protocol (SDP) data or by specific RTSP server responses.</p>
<h2>Impact</h2>
<p>If successful, a malicious third party could remotely use the Web interface or the Real RTSP demuxer or locally trigger the subtitles parser to execute arbitrary code within the context of VLC media player or crash the current player instance. </p>
<h2>Threat mitigation</h2>
<p>Exploitation of the Web interface problem requires the user to explicitly enable this interface. It is disabled by default.</p>
<p>Subtitle files can be manually opened by the user or automatically based on the filename of the movie. Both ways may lead to exploitation of the Subtitle Parser's buffer-overflow.
</p>
<p>Exploitation of the Real RTSP problems requires the user to explicitly open streams provided by malicious third parties.</p>
<h2>Workarounds</h2>
<p>The user may refrain from using the Web interface until an update is installed or limit its usage to secure environments. VLC media player can also be controlled remotely through the RC and telnet interfaces.
</p>
<p>Automatic detection of subtitle files can be disabled by unchecking the "Autodetect subtitle files" option in the Subtitle category inside the Video preferences. Note that you need to restart VLC media player for this change to take effect. In case that you use VLC media player through the command-line, provide <code>--no-sub-autodetect-file</code> to override its default behavior.</p><p>The user is asked to use subtitle files authored by trusted sources only.</p>
<p>The user is asked to only open Real RTSP streams from trusted content providers. In case of uncertainess, it is recommended not to open this kind of streams. RTSP streams can easily be identified by the <code>rtsp</code> prefix of their URL/MRL.</p>
<h2>Solution</h2>
<p>VLC media player 0.8.6e addresses these issues and introduces further
usability fixes. Version 0.8.6f implements additional security improvements to the Subtitle Parser.
</p>
<p>Pre-compiled packages will be available at the usual download locations shortly.
</p>
<h2>Credits</h2>
<p>The Subtitle Parser vulnerability was discovered by Michal Luczaj.
</p> 
<p>The Web interface vulnerability was reported by Luigi Auriemma.
</p>
<p>The Real RTSP demuxer vulnerabilities were published by Luigi Auriemma.
<h2>References</h2>
<dl>
<dt>Luigi Auriemma</dt>
<dd><a href="http://aluigi.altervista.org/">Luigi Auriemma</a>, 
<a href="http://aluigi.altervista.org/adv/vlcboffs-adv.txt">Buffer overflow and format string in VideoLAN's VLC 0.8.6d</a>
<a href="http://aluigi.altervista.org/adv/vlcxhof-adv.txt">Heap overflow in sdpplin_parse and possible heap overflow in VideoLAN's VLC 0.8.6d</a>
</dd>
<dt>The VideoLAN Project</dt>
<dd><a href="//www.videolan.org/">http://www.videolan.org/</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>2 April 2008</dt>
<dd>VLC 0.8.6f bugfix release</dd>
<dt>27 February 2008</dt>
<dd>VLC 0.8.6e bugfix release</dd>
<dt>20 January 2008</dt>
<dd>Source code fixes to the Real RTSP demuxer for VLC 0.8.6d and development tree</dd>
<dt>10 January 2008</dt>
<dd>Real RTSP demuxer issues published by Luigi Auriemma</dd>
<dt>24 December 2007</dt>
<dd>Web Interface and Subtitle Demuxer bugs reported by Luigi Auriemma</dd>
<dd>Source code fixes to these issues for VLC 0.8.6d and development tree</dd>
</dl>

<address>R&eacute;mi Denis-Courmont, Felix Paul K&uuml;hne,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
