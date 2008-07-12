<?php
   $title = "VideoLAN Security Advisories";
   $lang = "en";
   $date = "12 July 2008";
   $menu = array( "vlc" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1>VideoLAN Security Advisories </h1>
<div id="left">


<h2>2008</h2>

<dl>
<dt>VideoLAN-SA-0806 (CVE-2008-2430)</dt>
<dd>Arbitrary code execution through potential heap-overflows in VLC's WAV demuxer. <a href="sa0805.html">Details</a></dd></p>
</dl>

<dl>
<dt>VideoLAN-SA-0805 (CVE-2008-2147)</dt>
<dd>Arbitrary code execution through rogue VLC plugins in the current directory. <a href="sa0805.html">Details</a></dd></p>
</dl>

<dl>
<dt>VideoLAN-SA-0804 (CVE-2007-6683)</dt>
<dd>Arbitrary file overwrite and other abuses through M3U parser and browsers plugins. <a href="sa0804.html">Details</a></dd></p>
</dl>

<dl>
<dt>VideoLAN-SA-0803 (CVE-2008-0073, CVE-2008-1489, CVE-2008-1768, CVE-2008-1769)</dt>
<dd>Arbitrary memory overwrite vulnerabilities in multiple modules:
Real RTSP demuxer, Real Media demuxer, MP4 demuxer, Cinepak decoder. <a href="sa0803.html">Details</a></dd></p>
</dl>

<dl>
<dt>VideoLAN-SA-0802, CORE-2008-0130 (CVE-2008-0984)</dt>
<dd>Arbitrary memory overwrite vulnerability in the MP4 demuxer. <a href="sa0802.html">Details</a></dd></p>
</dl>

<dl>
<dt>VideoLAN-SA-0801 (CVE-2007-6681, CVE-2007-6682, CVE-2008-0295, CVE-2008-0296)</dt>
<dd>Format string vulnerability in the Web interface. Stack-based buffer overflow in the Subtitles demuxer.
	String buffer overflows in the Real RTSP demuxer. <a href="sa0801.html">Details</a></dd></p>
</dl>

<h2>2007</h2>

<dl>
<dt>VideoLAN-SA-0703, CORE-2007-1004 (CVE-2007-6262)</dt>
<dd>Recursive plugin release vulnerability in the Active X plugin. <a href="sa0703.html">Details</a></dd></p>
</dl>

<dl>
<dt>VideoLAN-SA-0702 (CVE-2007-3316)</dt>
<dd>Format string injection in Vorbis, Theora, SAP and CDDA plugins. <a href="sa0702.html">Details</a></dd></p>
</dl>

<dl>
<dt>VideoLAN-SA-0701, MOAB-02-01-2007 (CVE-2007-0017)</dt>
<dd>URL format string injection in CDDA and VCDX plugins. <a href="sa0701.html">Details</a></dd></p>
</dl>

</div>

<?php footer('$Id$'); ?>
