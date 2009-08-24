<?php
   $title = "VideoLAN security informations";
   $lang = "en";
   $menu = array( "vlc" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="left">

<h1>Security contacts</h1>

<p> These are the current security contacts for the VideoLAN project:
</p>
<dl>
<!--dt>R&eacute;mi Denis-Courmont</dt>
<dd>rem at videolan dot org
<pre>
pub   1024D/DD6D12BD 2004-01-09
      Key fingerprint = 9480 5833 53E3 34D2 F03F  E80C C3EC 6DBE DD6D 12BD
</pre>
</dd-->
<dt>Christophe Mutricy</dt>
<dd>xtophe at videolan dot org
<pre>
pub   1024D/73FAAFF8 2005-10-19
      Key fingerprint = 08F4 FFC1 0E7C AFFE 8AEC  6A06 2D7B 9A08 73FA AFF8
</pre>
</dd>
</dl>

<h1>Past security advisories</h1>

<h2>2008</h2>

<dl>
<dt>VideoLAN-SA-0811 (CVE-2008-5276)</dt>
<dd>Buffer overflows in VLC Real demuxers. <a href="sa0811.html">Details</a>
</dd>
<dt>VideoLAN-SA-0810 (CVE-2008-5032, CVE-2008-5036)</dt>
<dd>Multiple overflows in VLC demuxers. <a href="sa0810.html">Details</a>
</dd>
<dt>VideoLAN-SA-0809 (CVE-2008-4654, CVE-2008-4686)</dt>
<dd>Buffer overflow in VLC TiVo demuxer. <a href="sa0809.html">Details</a>
</dd>
<dt>VideoLAN-SA-0807 (CVE-2008-3732, CVE-2008-3794)</dt>
<dd>Multiple overflows in VLC demuxers. <a href="sa0807.html">Details</a>
</dd>
<dt>VideoLAN-SA-0806 (CVE-2008-2430)</dt>
<dd>Arbitrary code execution through potential heap-overflows in VLC's WAV demuxer. <a href="sa0806.html">Details</a>
</dd>
<dt>VideoLAN-SA-0805 (CVE-2008-2147)</dt>
<dd>Arbitrary code execution through rogue VLC plugins in the current directory. <a href="sa0805.html">Details</a>
</dd>
<dt>VideoLAN-SA-0804 (CVE-2007-6683)</dt>
<dd>Arbitrary file overwrite and other abuses through M3U parser and browsers plugins. <a href="sa0804.html">Details</a>
</dd>
<dt>VideoLAN-SA-0803 (CVE-2008-0073, CVE-2008-1489, CVE-2008-1768, CVE-2008-1769)</dt>
<dd>Arbitrary memory overwrite vulnerabilities in multiple modules:
Real RTSP demuxer, Real Media demuxer, MP4 demuxer, Cinepak decoder. <a href="sa0803.html">Details</a>
</dd>
<dt>VideoLAN-SA-0802, CORE-2008-0130 (CVE-2008-0984)</dt>
<dd>Arbitrary memory overwrite vulnerability in the MP4 demuxer. <a href="sa0802.html">Details</a>
</dd>
<dt>VideoLAN-SA-0801 (CVE-2007-6681, CVE-2007-6682, CVE-2008-0295, CVE-2008-0296)</dt>
<dd>Format string vulnerability in the Web interface. Stack-based buffer overflow in the Subtitles demuxer.
	String buffer overflows in the Real RTSP demuxer. <a href="sa0801.html">Details</a></dd>
</dl>

<h2>2007</h2>

<dl>
<dt>VideoLAN-SA-0703, CORE-2007-1004 (CVE-2007-6262)</dt>
<dd>Recursive plugin release vulnerability in the Active X plugin. <a href="sa0703.html">Details</a>
</dd>
<dt>VideoLAN-SA-0702 (CVE-2007-3316)</dt>
<dd>Format string injection in Vorbis, Theora, SAP and CDDA plugins. <a href="sa0702.html">Details</a>
</dd>
<dt>VideoLAN-SA-0701, MOAB-02-01-2007 (CVE-2007-0017)</dt>
<dd>URL format string injection in CDDA and VCDX plugins. <a href="sa0701.html">Details</a>
</dd>
</dl>

</div>

<?php footer('$Id$'); ?>
