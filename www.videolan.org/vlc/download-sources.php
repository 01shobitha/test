<?php
   $title = "VLC media player source code";
   $lang = "en";
   $date = "13 December 2005";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/mirrordir.php");
?>

<h1> VLC media player source code </h1>

<h2>Tarballs</h2>

<p> Latest VLC source code tarball (0.8.4a): </p>

<ul>
  <?php
     pkgitem("0.8.4a","vlc-0.8.4a.tar.gz","vlc");
     pkgitem("0.8.4a","vlc-0.8.4a.tar.bz2","vlc");
  ?>
  <li><a href="http://downloads.videolan.org/pub/videolan/vlc/0.8.4a/"><i>browse the list</i></a></li>
</ul>

<p> Latest required libraries: </p>

<ul>
  <?php
     pkgitem("0.8.4a/contrib","a52dec-0.7.4.tar.gz","vlc","(A52 - also known as AC3 - audio decoder)");
     pkgitem("0.8.4a/contrib","faac-1.24.tar.bz2","vlc","(AAC audio encoder)");
     pkgitem("0.8.4a/contrib","faad2-20040923.tar.bz2","vlc","(AAC audio codec)");
     pkgitem("0.8.4a/contrib","ffmpeg-20051126.tar.bz2", "vlc","(MPEG-4 and other video codecs)");
     pkgitem("0.8.4a/contrib","flac-1.1.2.tar.gz","vlc","(FLAC audio codec)");
     pkgitem("0.8.4a/contrib","freetype-2.1.9.tar.bz2","vlc","(Font engine)");
     pkgitem("0.8.4a/contrib","fribidi-0.10.4.tar.bz2","vlc","(Hebrew and arabic languages support library)");
     pkgitem("0.8.4a/contrib","gettext-0.14.1.tar.gz","vlc","(Internationalization library)");
     pkgitem("0.8.4a/contrib","goom-2k4-0-src.tar.gz","vlc","(Audio Visualization library)");
     pkgitem("0.8.4a/contrib","lame-3.96.1.tar.gz","vlc","(MP3 audio encoder)");
     pkgitem("0.8.4a/contrib","libcddb-0.9.6.tar.gz","vlc","(Audio CD CDDB library)");
     pkgitem("0.8.4a/contrib","libcdio-0.72.tar.gz","vlc","(CD,VCD,SVCD,CDDA library)");
     pkgitem("0.8.4a/contrib","libdvbpsi3-0.1.5.tar.gz","vlc","(MPEG TS and DVB PSI tables library)");
     pkgitem("0.8.4a/contrib","libdvdcss-1.2.8.tar.bz2","vlc","(DVD decryption library)");
     pkgitem("0.8.4a/contrib","libdvdnav-20050211.tar.bz2","vlc","(DVD menus navigation library)");
     pkgitem("0.8.4a/contrib","libdvdread-20041028.tar.bz2","vlc","(DVD reading library)");
     pkgitem("0.8.4a/contrib","libebml-0.7.6.tar.bz2","vlc","(A form of binary XML used by libmatroska)");
     pkgitem("0.8.4a/contrib","libiconv-1.9.1.tar.gz","vlc","(character encoding conversion library)");
     pkgitem("0.8.4a/contrib","libid3tag-0.15.1b.tar.gz","vlc","(ID3 tag library)");
     pkgitem("0.8.4a/contrib","libmad-0.15.1b.tar.gz","vlc","(MP3 audio decoder)");
     pkgitem("0.8.4a/contrib","libmatroska-0.7.6.tar.bz2","vlc","(A open source container format)");
     pkgitem("0.8.4a/contrib","libmodplug-0.7.tar.gz","vlc","(A MOD demux and decoder)");
     pkgitem("0.8.4a/contrib","libogg-1.1.2.tar.gz","vlc","(Ogg library)");
     pkgitem("0.8.4a/contrib","libpng-1.2.5.tar.bz2","vlc","(PNG image library)");
     pkgitem("0.8.4a/contrib","libspeex-1.1.10.tar.gz","vlc","(Speex audio decoder)");
     pkgitem("0.8.4a/contrib","libtheora-1.0alpha5.tar.bz2","vlc","(Theora video codec)");
     pkgitem("0.8.4a/contrib","libvorbis-1.1.1.tar.gz","vlc","(Vorbis audio codec)");
     pkgitem("0.8.4a/contrib","libxml2-2.6.20.tar.gz","vlc","(xml library)");
     pkgitem("0.8.4a/contrib","live555-20051126.tar.gz","vlc","(RTSP library)");
     pkgitem("0.8.4a/contrib","mpeg2dec-20050802.tar.gz","vlc","(MPEG-2 video decoder)");
     pkgitem("0.8.4a/contrib","openslp-1.0.11.tar.gz","vlc","(SLP library)");
     pkgitem("0.8.4a/contrib","pa-v19-20041022.tar.gz","vlc","(Portaudio audiooutput)");
     pkgitem("0.8.4a/contrib","twolame-0.3.3.gz","vlc","(MP3 audio encoder)");
     pkgitem("0.8.4a/contrib","vcdimager-0.7.21.tar.gz","vlc","(VCDimager library)");
     pkgitem("0.8.4a/contrib","wxWidgets-2.6.2.tar.gz","vlc","(WxWidgets, a GUI toolkit)");
     pkgitem("0.8.4a/contrib","x264-20051126.tar.bz2","vlc","(AVC/H.264 video encoder)");
     pkgitem("0.8.4a/contrib","zlib-1.2.3.tar.gz","vlc","(A losless data-compression library)");
  ?>
  <li>
<a href="http://downloads.videolan.org/pub/videolan/vlc/0.8.4a/contrib"><i>browse the list</i></a></li>
</ul>

<h2>SVN</h2>

<p> Find more about the SVN source code repository on the <a
href="http://developers.videolan.org/">developers website</a>. </p>

<h2>How to compile?</h2>

<p> Please have a look at VLC's sub-page on the <a href="http://developers.videolan.org/vlc/">developers website</a>. There are detailed descriptions for most systems, supported by VLC. If something is not mentioned there, searching the <a href="http://forum.videolan.org/">forum</a> is worth a try. </p>

<h2>Older versions</h2>

<p> Older versions can be found by browsing our FTP site:</p>
<ul> <?php mirrordir("vlc"); ?> </ul>

<?php footer('$Id$'); ?>
