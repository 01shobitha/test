<?php
   $title = "VideoLAN Security Advisories";
   $lang = "en";
   $date = "16 April 2001";
   $menu = array( "vlc" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1>VideoLAN Security Advisories </h1>
<div id="left">


<h2>2008</h2>

<dl>
<dt>VideoLAN-SA-0802, CORE-2008-0130 (CVE-2008-0984)</dt>
<dd>Format string injection in Vorbis, Theora, SAP and CDDA plugins. <a href="sa0702.php">Details</a></dd></p>
</dl>

<dl>
<dt>VideoLAN-SA-0801 (CVE-2007-6681, CVE-2007-6682, CVE-2008-0295, CVE-2008-0296)</dt>
<dd>Format string vulnerability in the Web interface. Stack-based buffer overflow in the Subtitles demuxer. String buffer overflows in the Real RTSP demuxer.
	<a href="sa0801.php">Details</a></dd></p>
</dl>

<h2>2007</h2>

<dl>
<dt>VideoLAN-SA-0703, CORE-2007-1004 (CVE-2007-6262)</dt>
<dd>Recursive plugin release vulnerability in the Active X plugin. <a href="sa0703.php">Details</a></dd></p>
</dl>

<dl>
<dt>VideoLAN-SA-0702 (CVE-2007-3316)</dt>
<dd>Format string injection in Vorbis, Theora, SAP and CDDA plugins. <a href="sa0702.php">Details</a></dd></p>
</dl>

<dl>
<dt>VideoLAN-SA-0701, MOAB-02-01-2007 (CVE-2007-0017)</dt>
<dd>URL format string injection in CDDA and VCDX plugins. <a href="sa0701.php">Details</a></dd></p>
</dl>

</div>

<?php footer('$Id$'); ?>
