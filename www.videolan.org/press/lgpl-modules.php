<?php
   $title = "Press Release on modules relicensing to LGPL";
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<h1>VLC playback modules relicensed to LGPL</h1>
<br />

<div class="longtext">
<div class="date">Paris, 20 November 2012</div>

<p>As announced in <a href="/press/lgpl.html">previous</a> <a href="/press/lgpl-libvlc.html">press releases</a>, VideoLAN and VLC developers have <b>achieved</b> the process of changing the license of most of the <b>VLC playback modules</b> to <a href="http://www.gnu.org/licenses/lgpl-2.1.html">LGPL</a>. In addition to last year <a href="/press/lgpl-libvlc.html">relicensing of the VLC engine</a>, this allows to create full LGPL playback applications, based on <a href="/vlc/">VLC</a> technology.</p>
<p><a href="/vlc/">VLC</a> is a highly popular libre and open source media player and multimedia engine, used by a large number of individuals, professionals, companies and institutions. Using open source technologies and libraries, the VLC engine has been ported to most computing platforms, including GNU/Linux, Windows, Mac OS X, BSD, iOS and Android. VLC can play most multimedia files, discs, streams, allows playback from devices, and is able to convert to or stream in various formats. The VideoLAN project was started at the university <a href="http://ecp.fr">École Centrale Paris</a> who relicensed VLC under the <a href="http://www.gnu.org/licenses/gpl-2.0.html">GPLv2</a> license in February 2001. Since then, VLC has been downloaded more than one billion times.</p>
<p>VLC is a project of the <a href="/videolan/">VideoLAN non-profit organization</a>, which supports the development of multiple libre and open source multimedia <a href="/projects/">projects</a>. In contrast to some other open source projects, VideoLAN does not require copyright assignment to the organization: instead the authors keep their copyright.</p>
<p>This change of license was an initiative started by some of VLC's main developers and is a move from the current license (GPLv2 or later) to the <a href="http://www.gnu.org/licenses/lgpl-2.1.html">LGPLv2.1</a> or later license. This change was motivated to match the evolution of the video and software industries and to spread the VLC engine as a multi-platform open-source multimedia engine and library. The <a href="/videolan/">VideoLAN non-profit</a> organisation helped this initiative.</p>
<p>This modification affects most of the VLC playback modules, notably protocol support, demuxers and decoders, but also filters and outputs.<br />
Some minor modules are not affected by this change, but this should not impact any use case beside DVD playback.</p>
<p>So far, the streaming modules are not affected by this change, and they are important for transcoding, encoding and format conversions use cases.</p>
<p>The license of the VLC media player will continue to be GPLv2 or later. This will not impact normal users of VLC in any way.</p>
<p>We would like to thank all the VLC copyright holders, developers and community. We would like to thank the <a href="http://www.ecp.fr">École Centrale Paris</a> for the support.</p>
<p>For any questions, please <a href="/contact.html">contact us</a>.</p>

<br />
Jean-Baptiste Kempf, on behalf of the VideoLAN project.

<br />
<h2>FAQ:</h2>
<p><b>Will this change anything to VLC's distribution?</b><br />
No, not in any way.</p>
<p><b>Will VLC cost money in the future? Will there be a premium version of VLC?</b><br />
No and no.</p>
<p><b>Will VideoLAN move to a corporate structure?</b><br />
No, VideoLAN will stay a non-profit organization managed by volunteers.</p>
<p><b>Can I build non open-source libVLC-based applications?</b><br />
Yes. Please check the legality of the re-distribution.</p>
<p><b>Can I build non open-source VLC plugins?</b><br />
Yes. Please check the legality of the distribution.</p>
<p><b>Can I use "VLC" name for another application than VLC?</b><br />
<b>NO</b>.</p>
<p><b>I am interested in using libVLC or libVLCcore, but I have questions. Where can I contact you?</b><br />
See how to <a href="http://www.videolan.org/contact.html">contact us</a>.</p>
<p><b>Why did you choose LGPLv2 instead of (L)GPLv3?</b><br />
See <a href='http://www.videolan.org/press/2007-1.html'>GPLv3</a> press release.</p>
<p><b>Will this license change allow VLC to be available on the Apple stores?</b><br />
So far, we don't know if this will change anything.</p>
<p><b>Will this affect previous releases of libVLC?</b><br />
No, this will only concern libVLC 2.1 and later.</p>
<p><b>How did you do that?</b><br />
See <a href='http://www.jbkempf.com/blog/post/2012/How-to-properly-relicense-a-large-open-source-project'>these</a> <a href='http://www.jbkempf.com/blog/post/2012/How-to-properly-relicense-a-large-open-source-project-part-2'>posts</a> to learn more about the relicensing process.</p>
</div>
<?php footer('$Id: index.php 6894 2011-05-02 09:35:24Z jb $'); ?>
