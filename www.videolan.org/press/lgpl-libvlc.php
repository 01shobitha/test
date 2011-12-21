<?php
   $title = "VideoLAN - Press Release on LGPL";
   require($_SERVER["DOCUMENT_ROOT"]."include/header.php");
?>

<h1>VLC engine relicensed to LGPL</h1>
<br />

<div class="longtext">
<div class="date">Paris, 21 December 2011</div>

<p>As previously announced, in a <a href="/press/lgpl.html">previous press release,</a>, VideoLAN and VLC developers have <b>achieved</b> the process of changing the license of the <b>VLC engine</b> to <a href="http://www.gnu.org/licenses/lgpl-2.1.html">LGPL</a>.</b> The <a href="http://ecp.fr">École Centrale Paris</a> shares its <a href="http://www.ecp.fr/home/Actualites?actuID=19452">happiness</a> about <a href="http://www.ecp.fr/files/content/sites/ecp_internet/files/Presse/cp_vlc_211211.pdf">this change</a>.</p>
<p><a href="/vlc/">VLC</a> is a highly popular libre and open source media player and multimedia engine, used by a large number of individuals, professionals, companies and institutions. Using open source technologies and libraries, the VLC engine has been ported to most computing platforms, including GNU/Linux, Windows, Mac OS X, BSD, iOS and Android. VLC can play most multimedia files, discs, streams, allows playback from devices, and is able to convert to or stream in various formats. The VideoLAN project was started at the university <a href="http://ecp.fr">École Centrale Paris</a> who relicensed VLC under the <a href="http://www.gnu.org/licenses/gpl-2.0.html">GPLv2</a> license in February 2001. Since then, VLC has been downloaded close to one billion times.</p>
<p>VLC is a project of the <a href="/videolan/">VideoLAN non-profit organization</a>, which supports the development of multiple libre and open source multimedia <a href="/projects/">projects</a>. In contrast to some other open source projects, VideoLAN does not require copyright assignment to the organization: instead the authors keep their copyright.</p>
<p>This change of license was an initiative started by some of VLC's main developers and is a move from the current license (GPLv2 or later) to the <a href="http://www.gnu.org/licenses/lgpl-2.1.html">LGPLv2.1</a> or later license. This change was motivated to match the evolution of the video industry and to spread the VLC engine as a multi-platform open-source multimedia engine and library. The <a href="/videolan/">VideoLAN non-profit</a> organisation helped this initiative.</p>
<p>The modification affects the VLC engine, also known as <a href="/vlc/libvlc.html">libVLC</a> (and libVLCcore), allowing applications or plugins based on the VLC engine to be built under non-GPL licenses.
Some libVLC bindings for other languages have already changed license too.</p>
<p>The license of the VLC media player will continue to be GPLv2 or later. This will not impact normal users of VLC in any way.</p>
<p>All the developers have agreed to the relicensing, but a famous one, who refused to answer. His code was therefore rewritten.</p>
<p>During the last few months, <a href="/developers/libdvbpsi.html">libdvbpsi</a>, <a href="/developers/libaacs.html">libaacs</a> and <a href="/developers/libbluray.html">libbluray</a> have moved to the same <b>LGPL</b> license. At the same time, <a href="http://git.videolan.org/?p=bitstream.git;a=summary">biTStream</a> has moved to a MIT license.</p>
<p>Later on, other parts of VLC might follow the same path: important plugins and modules might change license in the same way.</p>
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
<p><b>I am interested in using libVLC or libVLCcore. Where can I contact you?</b><br />
See how to <a href="http://www.videolan.org/contact.html">contact us</a>.</p>
<p><b>Why did you choose LGPLv2 instead of (L)GPLv3?</b><br />
See http://www.videolan.org/press/2007-1.html</p>
<p><b>Will this license change allow VLC to be available on the Apple stores?</b><br />
So far, we don't know if this will change anything.</p>
</div>
<?php footer('$Id: index.php 6894 2011-05-02 09:35:24Z jb $'); ?>
