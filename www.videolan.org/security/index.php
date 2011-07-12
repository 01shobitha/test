<?php
   $title = "Security information";
   $body_color = "red";
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1>Security contacts</h1>

<p> These are the current security contacts for the <a href="/videolan/">VideoLAN project</a>:</p>
<dl>
<dt>Rémi Denis-Courmont</dt>
<dd>rem at videolan dot org
<pre>
pub   1024D/DD6D12BD 2004-01-09
      Key fingerprint = 9480 5833 53E3 34D2 F03F  E80C C3EC 6DBE DD6D 12BD
</pre>
</dd>
<dt>Christophe Mutricy</dt>
<dd>xtophe at videolan dot org
<pre>
pub   1024D/AC3E0879 2006-03-01
      Key fingerprint = 2303 8592 A6B1 A39D 7B22  D2D3 FD21 BC3B AC3E 0879
</pre>
</dd>
</dl>

<h1>Past security advisories</h1>

<p><strong>Note well</strong>:
The VideoLAN project does not issue security advisories
for underlying third party libraries.
Please refer to the concerned third parties as appropriate.
</p>

<h2>2011</h2>
<dl>
<dt>VideoLAN-SA-1106 (CVE-2011-2588)</dt>
<dd>Heap buffer overflow in AVI demuxer.
 <a href="sa1104.html">Details</a>
</dd>

<dt>VideoLAN-SA-1105 (CVE-2011-2587)</dt>
<dd>Heap buffer overflow in RealMedia demuxer.
 <a href="sa1103.html">Details</a>
</dd>

<dt>VideoLAN-SA-1104 (CVE-2011-2194)</dt>
<dd>Integer overflow in XSPF demuxer.
 <a href="sa1104.html">Details</a>
</dd>

<dt>VideoLAN-SA-1103 (CVE-2011-1684)</dt>
<dd>Heap corruption in MP4 demuxer.
 <a href="sa1103.html">Details</a>
</dd>

<dt>VideoLAN-SA-1102 (CVE-2011-0531)</dt>
<dd>Insufficient input validation in MKV demuxer.
 <a href="sa1102.html">Details</a>
</dd>

<dt>VideoLAN-SA-1101 (CVE-2011-0021)</dt>
<dd>Heap corruption in CDG codec.
 <a href="sa1101.html">Details</a>
</dd>
</dl>

<h2>2010</h2>
<dl>
<dt>VideoLAN-SA-1007 (CVE-2010-3907)</dt>
<dd>Buffer overflow in Real Media demuxer.
 <a href="sa1007.html">Details</a>
</dd>

<dt>VideoLAN-SA-1006</dt>
<dd>Stack smashing in SMB/CIFS access.
 <a href="sa1006.html">Details</a>
</dd>

<dt>VideoLAN-SA-1005 (CVE-2010-3124)</dt>
<dd>DLL preloading vulnerability.
 <a href="sa1005.html">Details</a>
</dd>

<dt>VideoLAN-SA-1004 (CVE-2010-2937)</dt>
<dd>Insufficient input validation VLC TagLib plugin.
 <a href="sa1004.html">Details</a>
</dd>

<dt>VideoLAN-SA-1003 (CVE-2010-1441..5)</dt>
<dd>Multiple vulnerabilities in VLC. <a href="sa1003.html">Details</a>
</dd>
<dt>VideoLAN-SA-1002</dt>
<dd>Buffer overflow in ancient VLC media player <a href="sa1002.html">Details</a>
</dd>
<dt>VideoLAN-SA-1001</dt>
<dd>Clam AntiVirus input validation error <a href="sa1001.html">Details</a>
</dd>
</dl>
<h2>2009</h2>

<dl>
<dt>VideoLAN-SA-0901</dt>
<dd>Stack overflows in VLC demuxers. <a href="sa0901.html">Details</a>
</dd>
</dl>
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

<?php footer('$Id$'); ?>
