<?php
   $title = "VideoLAN - LIBDCA";
   $lang = "en";
   $date = "05 Febrary 2004";
   $menu = array( "home", "libdca" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
?>

<div id="fullwidth">

<h1>libdca - a free DTS Coherent Acoustics decoder</h1>

<p>libdca is a free library for decoding DTS Coherent Acoustics streams. The code is written by <a href="mailto:gbazin@videolan.org">Gildas Bazin</a> and was based on the <a href="http://liba52.sourceforge.net/">a52dec</a> project. It is released under the terms of the GPL license.</p>

<p>The DTS Coherent Acoustics standard (ETSI 102 114 v1.2.1), as published by the ETSI, is available <a href="http://pda.etsi.org/pda/queryform.asp">here</a> (look for DTS Coherent Acoustics).</p>

<h2>Development status</h2>

<p><span style="color: red;"><b>BIG FAT WARNING: libdca is still in early development stage so don't expect too much of it</b></span></p>

<p>Right now, I am concentrating on finishing the implementation of the core part of the specification. The library should however already be quite useable.</p>

<p>A few things are still lacking there but they should mainly affect low-bitrate DTS streams which don't seem that common anyway (some of the missing things are: Joint channels coding, Dynamic range, etc... - see the TODO file).</p>

<p>There might also be quality issues, but for some early code it does seem pretty decent to me.</p>

<p>None of the extensions (extra channels, 96/192kHz sample rates) have been implemented (and unfortunately the public standard provides only minimal information on them).</p>

<h2>Getting libdca</h2>

<p>DTS Inc. claims that distributing this software is a violation of their patent EP 864 146. At DTS Inc. request, we decided, as a precautionary measure, to provisionally suspend the distribution of libdca while reviewing DTS Inc. claim. This is not an acknowledgement of the validity of the claim.<br/>The previous name "libdts" was changed to "libdca" as a precautionary measure.</p>

<?php
if(false) {
/* update link with libdca instead of libdts upon next release */
?>
<p>Current release is <a href="http://download.videolan.org/pub/videolan/libdts/0.0.2/libdts-0.0.2.tar.gz">libdts-0.0.2.tar.gz</a></p>

<p>The latest libdca source code can always be found by anonymous SVN repository:</p>

<p># svn co svn://svn.videolan.org/libdca/trunk libdca</p>

<p><b>Provisional Warning</b>: DTS Inc. claims that use of libdca        
software, to decode DTS compressed sound data on a DVD could violate    
DTS's patent rights. If you are unsure about the legality of using      
and distributing this code in your country, in particular in the USA,   
please consult your lawyer before downloading it</p>

<?php
}
?>
<h2>Support</h2>

<p>For support information, have a look <a href="http://www.videolan.org/support/">here</a>.</p>

<p>A <a href="http://developers.videolan.org/lists.html">libdca-devel</a> mailing list is also available.</p>

<h2>Projects using libdca</h2>

<ul>

<li><a href="http://www.videolan.org/">VLC media player</a>: a cross-platform video player and streaming solution.</li>

<li><a href="http://sourceforge.net/projects/guliverkli/">Media Player Classic</a>: a win32 player just like WMP6.4 except that it has a lot more features.</li>
<li><a href="http://xine.sourceforge.net/">Xine</a>: a free multimedia player.</li>

<li><a href="http://ffmpeg.sourceforge.net/">FFmpeg</a>: a complete solution to record, convert and stream audio and video.</li>

<li><a href="http://www.xboxmediacenter.de/">XboxMediaCenter (XBMC)</a>: a free multimedia player for the Xbox game-console.</li>

<li><a href="http://www.mplayerhq.hu/">MPlayer</a>: a free multimedia player.</li>

<li><a href="http://ffdshow.sourceforge.net/">ffdshow</a>: a DirectShow filter for most A/V codecs.</li>

</ul>

<p>If you use libdca in another project, let me know !</p>

<h2>Where to find DTS Coherent Acoustics samples</h2>

<p>Some very good samples are available on the <a href="http://www.sr.se/multikanal/english/e_index.stm">swedish radio website</a>.</p>

</div>

<?php footer('$Id: dtsdca.html 2743 2004-09-13 12:46:05Z dionoea $'); ?>
