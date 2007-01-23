<?php
   $title ="VideoLAN developers - VLC media player";
   $lang = "en";
   $date = "18 January 2007";
   $menu = array( "developers", "vlc" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1>VLC media player</h1>

<p>This is the VLC media player's developer page. <br />
See the <a href="http://www.videolan.org/vlc/">VLC page</a> if you are not willing to develop VLC media player. </p>

<h2>Developers' Wiki</h2>
<p>As VLC media player evolves really fast, a lot of the documentation and tools information 
has move to a <a href="http://wiki.videolan.org/Developers_Corner">wiki</a>.
Check it out!</p>

<h2>Get VLC Sourcecode</h2>

<p><code>VLC</code> is available through 
<a href="http://wiki.videolan.org/Subversion">Subversion</a> or by
browsing the <a href="http://www.videolan.org/pub/vlc/">releases</a>.</p>

<p> You can also see the 
<a href="http://trac.videolan.org/vlc/browser/trunk/NEWS?format=txt">release notes</a> and the 
<a href="http://trac.videolan.org/vlc/file/trunk/ChangeLog?format=txt">ChangeLog</a>.
You can also give an eye on the <a href="http://wiki.videolan.org/GetTheSource">"Get the source" wiki page</a>.</p>


<h2>Coding VLC</h2>

<p>VLC media player is a fast changing and ever evolving project. It is very important to keep up to date with the latest developments.<br /> 
Therefore we advise everyone who makes changes to the VLC sourcecode, to sign up with the vlc-devel <a href="lists.html">Mailinglist</a> so you can keep up with the latest changes and developments.</p>
<p>Please try to keep to our <a href="http://wiki.videolan.org/Code_Conventions">code conventions</a>. They are very simple and help to keep all code readable. When you write new stuff please comment it heavily or add doxygen documentation for your sources.</p>
<p>New code can be submitted to the vlc-devel mailinglist and will be evaluated for inclusion to the SVN tree. You should put <code>[PATCH]</code> in your subject header. All patches need to be against the HEAD <a href="http://wiki.videolan.org/Subversion">SVN tree</a>. You can create them by running <code>svn diff</code> in the VLC source directory.</p>
<p>Before you start be sure to read the HACKING file in the main VLC source directory, some of the documentation listed below.</p>

<h2>Developer Documentation</h2>

<p>Some documentation is still on this website, but since VLC evolves fast, some has 
been moved to the 
<a href="http://wiki.videolan.org/Developers_Corner">developers' wiki</a>. 
</p>
<table border="0">
<tr>
  <td class="type"><b>Document</b></td>
  <td class="type"><b>Status</b></td>
  <td class="type"><b>Download</b></td>
  <td class="type"><b>Maintainers</b></td>
</tr>

<tr>
  <td class="category">VLC API documentation</td>
   <td class="partial">
     Incomplete
   </td>
  <td>
     <a href="vlc/doc/doxygen/html/">HTML</a>
     <a href="vlc/doc/doxygen/latex/refman.dvi">DVI</a>
     <a href="vlc/doc/doxygen/latex/refman.ps">PS</a>
   </td>
   <td>
     Generated by Doxygen
   </td>
</tr>

<tr>
  <td class="category">VLC developer documentation</td>
   <td class="partial">
     Incomplete
   </td>
  <td>
     <a href="vlc/doc/developer/html/manual.html">Single HTML</a>
     <a href="vlc/doc/developer/html/index.html">Multi HTML</a>
     <a href="vlc/doc/developer/manual.pdf">PDF</a>
     <a href="vlc/doc/developer/manual.txt">TXT</a>
   </td>
   <td>
     <a href="mailto:massiot@videolan.org">Christophe Massiot</a> and <a
href="mailto:sam@videolan.org">Samuel Hocevar</a>
   </td>
</tr>

<tr>
  <td class="category">Localization stats & Translations</td>
   <td class="yes">
     Up-to-date
   </td>
  <td>
     <a href="i18n/vlc.html">HTML</a>
     <a href="i18n/vlc-howto.html">Howto - HTML</a>
   </td>
   <td>
     <a href="mailto:zorglub_@_via.ecp.fr">Cl&#233;ment Stenac</a>
     <a href="mailto:hartman_@_videolan_dot_org">Derk-Jan Hartman</a>
   </td>
</tr>
</table>

<h2>Wiki Documentation</h2>

<p>This part of the documentation has been moved to the 
<a href="http://wiki.videolan.org/Developers_Corner">developers' wiki</a>. 
This page remains here for compatibility reasons.</p>
<table border="0">
<tr>
  <td class="type"><b>Document</b></td>
  <td class="type"><b>Status</b></td>
  <td class="type"><b>Download</b></td>
  <td class="type"><b>Original Writters</b></td>
</tr>

<tr>
  <td class="category">String handling</td>
   <td class="yes">
     Up-to-date
   </td>
  <td>
     <a href="http://wiki.videolan.org/index.php/VideolanStringGuidelines">Wiki</a>
   </td>
   <td>
     <a href="mailto:hartman_@_videolan_dot_org">Derk-Jan Hartman</a>
   </td>
</tr>


<tr>
  <td class="category">*nix Compile HOWTO</td>
  <td class="yes">
     Up-to-date
  </td>
   <td>
     <a href="http://wiki.videolan.org/UnixCompile">Wiki</a>
   </td>
   <td>
     <a href="mailto:hartman_@_videolan_dot_org">Derk-Jan Hartman</a>
     <a href="mailto:j-b_@_videolan_dot_org">Jean-Baptiste Kempf</a>
   </td>
</tr>

<tr>
  <td class="category">ARM Cross-Compile HOWTO</td>
  <td class="partial">
     Incomplete
  </td>
   <td>
     <a href="http://wiki.videolan.org/ARM-XCompile">Wiki</a>
   </td>
   <td>
     <a href="mailto:jpsaman_at_videolan_dot_org">Jean-Paul Saman</a>
   </td>
</tr>

<tr>
  <td class="category">Win32 Compile HOWTO</td>
   <td class="yes">
     Up-to-date
   </td>
 <td>
     <a href="http://trac.videolan.org/vlc/browser/trunk/INSTALL.win32?format=raw">TXT</a>
   </td>
   <td>
     <a href="mailto:gbazin@netcourrier.com">Gildas Bazin</a> and <a href="mailto:ipkiss@videolan.org">Olivier Teuli&egrave;re</a>
   </td>
</tr>

<tr>
  <td class="category">Win32 Cygwin Environment<br>and Compile HOWTO</td>
   <td class="yes">
     Up-to-date
   </td>
 <td>
     <a href="http://wiki.videolan.org/Win32CompileCygwin">Wiki</a>
   </td>
   <td>
     <a href="mailto:trax_@_videolan_dot_org">Trax</a>
   </td>   
</tr>

<tr>
  <td class="category">Win32 MSYS/MinGW Environment<br></td>
   <td class="yes">
     Up-to-date
   </td>
 <td>
     <a href="http://wiki.videolan.org/Win32CompileMSYS">Wiki</a>
   </td>
   <td>
     <a href="mailto:trax_@_videolan_dot_org">Trax</a>
   </td>   
</tr>

<tr>
  <td class="category">Mac OS X Compile HOWTO</td>
  <td class="yes">
     Up-to-date
  </td>
   <td>
     <a href="http://wiki.videolan.org/OSXCompile">Wiki</a>
   </td>
   <td>
     <a href="mailto:hartman_@_videolan_dot_org">Derk-Jan Hartman</a>
   </td>
</tr>

<tr>
  <td class="category">BeOS Compile HOWTO</td>
   <td class="yes">
     Up-to-date
   </td>
  <td>
     <a href="http://wiki.videolan.org/BeOSCompile">Wiki</a>
   </td>
   <td>
     <a href="mailto:titer@videolan.org">Eric Petit</a>
   </td>
</tr>

<tr>
  <td class="category">DirectFB plugin Compile HOWTO</td>
  <td class="yes">Up-to-date</td>   
  <td><a href="http://wiki.videolan.org/DirectFB_Compile">Wiki</a></td>
  <td><a href="mailto:jpsaman_@_videolan_dot_org">Jean-Paul Saman</a>
</tr>

</table>

<p>Another great start for documentation is the source code.
The best efforts have been done to make it as understandable as
possible. You can also ask questions in the development mailing-list
<code>vlc-devel@videolan.org</code>, or try to meet the developers
on IRC (<code>#videolan</code>, <code>irc.videolan.org</code> or
any Freenode server) if you want to help us but don't know where to
start.</p>

<h2>Bugs, todo and roadmaps</h2>

<p>We would very much appreciate if you inform us of any bugs you run into. We would be even happier if you would also fix them.</p>
<p>When making bugreports please beware of our bugreport <a href="http://www.videolan.org/support/bug-reporting.html">policy</a>. When you are an experienced user/developer and you are positive that it is a real bug that we are not yet aware of, please file it in <a href="http://trac.videolan.org/">Trac</a>.</p>
<p>You'll find roadmaps and todo on <a href="http://trac.videolan.org">Trac</a>.</p>

<h2 id="3rdparty">Third party libraries used by VLC</h2>

<p>You'll find a complete list on the <a href="http://wiki.videolan.org/Contrib_Status">wiki</a>.</p>
<p>But, here are the most important libraries.</p>

<b>Audio/Video codecs</b>

<p>
<a href="http://liba52.sourceforge.net/">liba52</a> - an ATSC A/52 (aka AC3)
audio decoder<br />

<a href="http://www.underbit.com/products/mad/">libmad</a> - an MPEG
audio decoder<br />

<a href="http://libmpeg2.sourceforge.net/">libmpeg2</a> - an MPEG1/2
video decoder<br />

<a href="http://ffmpeg.sourceforge.net/">libavcodec (ffmpeg)</a> - an
extensive audio/video codec library which supports several formats like
MPEG4, H263, WMV/A etc...<br />

<a href="http://www.xiph.org/ogg/">libogg</a> - an Ogg bitstream parser<br />

<a href="http://www.xiph.org/">libvorbis</a> - a Vorbis audio decoder<br />

<a href="http://www.xiph.org/">libflac</a> - a FLAC (Free Lossless Audio
Codec) audio decoder<br />

<a href="http://www.xiph.org/">libspeex</a> - a Speex (Free speech codec)
audio decoder<br />

<a href="http://www.xiph.org/">libtheora</a> - a Theora video decoder<br />

<a href="http://faac.sourceforge.net/">libfaad2</a> - an AAC audio decoder<br />

<a href="http://libdv.sourceforge.net">libdv</a> - a DV video decoder
(deprecated in favor of libavcodec)<br />

<a href="http://www.xvid.org/">libxvidcore (xvid)</a> - an ISO MPEG-4
compliant video codec (deprecated in favor of libavcodec)<br />

<a href="libdca.html">libdca</a> - A DTS Coherent Acoustics
decoding library.<br />

</p>

<b>GUI framework libraries</b>

<p>

<a href="http://www.wxwidgets.org/">wxWidgets</a> - a cross-platform C++
GUI framework that keeps the look and feel of each platform<br />

<a href="http://www.gnome.org/">GNOME1/2</a> - a powerful application
framework<br />

<a href="http://www.gtk.org/">GTK+1/2</a> - a multi-platform toolkit for
creating graphical user interfaces<br />

<a href="http://www.kde.org/">KDE</a> - an application development
Framework<br />

</p>

<b>Audio/Video output libraries</b>

<p>

<a href="http://www.libsdl.org/">libsdl</a> - a cross-platform
multimedia library designed to provide level access to audio, and 2D
video framebuffer<br />

</p>

<b>Miscellaneous libraries</b>

<p>
<a href="libdvdcss.html">libdvdcss</a> - a library
for accessing encrypted DVDs<br />

<a href="http://dvd.sf.net">libdvdnav</a> - a library
for DVD navigation<br />

<a href="http://www.dtek.chalmers.se/groups/dvd/development.shtml">libdvdread
</a> - a library for reading DVD-Video images<br />

<a href="libdvbpsi.html">libdvbpsi</a> - a library
designed for decoding and generation of MPEG TS and DVB PSI tables<br />

<a href="http://www.openslp.org/">libopenslp</a> - an open-source
implementation of Service Location Protocol<br />

<a href="http://www.gnu.org/software/gettext/">gettext</a> - a set of tools
that provides a framework to help applications produce multi-lingual
messages<br />

<a href="http://www.freetype.org/freetype2/index.html">libfreetype2</a>
- a software font engine that is designed to be small, efficient, highly
customizable and portable while capable of producing high-quality output
(glyph images).<br />

<a href="http://fribidi.sourceforge.net/">fribidi</a> - A Free Implementation
of the Unicode Bidirectional Algorithm<br />

<a href="http://www.live555.com/liveMedia/">liveMedia</a> - C++ libraries for
multimedia streaming (RTP/RTCP, RTSP, SIP)<br />

<a href="http://matroska.corecodec.org/">matroska</a> - a new, extensible open standard Audio/Video container format<br />
</p>


<p>If you're using those libs to compile VLC for windows with mingw-gcc 3.3.1, you can use our <a href="ftp://ftp.videolan.org/pub/videolan/testing/win32/">Win32 contribs</a>.</p>
<?php footer('$Id$'); ?>
