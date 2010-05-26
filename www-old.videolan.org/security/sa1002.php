<?php
   $title = "VideoLAN Security Advisory 1002";
   $lang = "en";
   $menu = array( "vlc" );
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<div id="fullwidth">


<h1>Security Advisory 1002</h1>
<pre>
Summary           : Buffer overflow in ancient VLC media player 
Date              : March 2010
Affected versions : VLC media player 0.8.6 to 0.8.6d 
ID                : VideoLAN-SA-1002
CVE reference     : CVE-2010-0364
</pre>
<h2>Details</h2>
<p>fl0 fl0w claims to have found a buffer overflow in SSA subtitles parsing 
in VLC media player 0.8.6 to 0.8.6d. This is actually a subset of a collections
 of buffer overflows discovered and fixed in late 2007 - early 2008.</p> 
<p>See our advisory <a href="http://www.videolan.org/security/sa0801.html">
VideoLAN-SA-0801</a> for more informations.
</p>
<h2>Threat mitigation</h2>
<p>This issue only affects users of very old VLC versions.
</p>
<h2>Solution</h2>
<p>Update to the latest VLC media player (1.0.5 at the time of writing).
</p>
<h2>References</h2>
<dl>
<dt>The VideoLAN project</dt>
<dd><a href="http://www.videolan.org/">http://www.videolan.org/</a>
</dd>
</dl>
<h2>History</h2>
<dl>
<dt>February 2010</dt>
<dd>Vendor awareness.</dd>
<dt>22 March 2010</dt>
<dd>Initial security advisory.</dd>
</dl>
<br />
<address>Christophe Mutricy,<br />
on behalf of the VideoLAN project</address>

</div>

<?php footer('$Id$'); ?>
