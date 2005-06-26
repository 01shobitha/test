<?php
   $title = "VLC media player source code";
   $lang = "en";
   $date = "03 January 2004";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
   include($_SERVER["DOCUMENT_ROOT"]."/include/mirrordir.php");
?>

<?php function pkgitem($version,$name,$comment) { ?><li><a href="/mirror.php?mirror=http://download.videolan.org/pub/videolan/&file=vlc/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a> <?php echo $comment; ?> </li><?php } ?>

<h1> VLC media player source code </h1>

<h2>Tarballs</h2>

<p> Latest VLC source code tarball (0.8.2): </p>

<ul>
  <?php
     pkgitem("0.8.2","vlc-0.8.2.tar.gz","");
     pkgitem("0.8.2","vlc-0.8.2.tar.bz2","");
  ?>
  <li><a href="http://downloads.videolan.org/pub/videolan/vlc/0.8.2/"><i>browse the list</i></a></li>
</ul>

<p> Latest required libraries: </p>

<ul>
  <?php
     pkgitem("0.8.2/contrib","a52dec-0.7.4.tar.gz","(A52 - also known as AC3 - audio decoder)");
     pkgitem("0.8.2/contrib","faac-1.24.tar.bz2","(AAC audio encoder)");
     pkgitem("0.8.2/contrib","faad2-20040923.tar.bz2","(AAC audio codec)");
     pkgitem("0.8.2/contrib","ffmpeg-20041113.tar.bz2", "(MPEG-4 and other video codecs)");
     pkgitem("0.8.2/contrib","flac-1.1.0.tar.gz","(FLAC audio codec)");
     pkgitem("0.8.2/contrib","freetype-2.1.4.tar.bz2","(Font engine)");
     pkgitem("0.8.2/contrib","fribidi-0.10.4.tar.bz2","(Hebrew and arabic languages support library)");
     pkgitem("0.8.2/contrib","gettext-0.14.1.tar.gz","(Internationalization library)");
     pkgitem("0.8.2/contrib","goom2k4-dev15-pre-modified.tar.bz2","(Audio Visualization library)");
     pkgitem("0.8.2/contrib","lame-3.96.tar.gz","(MP3 audio encoder)");
     pkgitem("0.8.2/contrib","libcddb-0.9.6.tar.gz","(Audio CD CDDB library)");
     pkgitem("0.8.2/contrib","libcdio-0.70.tar.gz","(CD,VCD,SVCD,CDDA library)");
     pkgitem("0.8.2/contrib","libdvbpsi-20041028.tar.bz2","(MPEG TS and DVB PSI tables library)");
     pkgitem("0.8.2/contrib","libdvdcss-1.2.8.tar.gz","(DVD decryption library)");
     pkgitem("0.8.2/contrib","libdvdnav-0.1.10.tar.gz","(DVD menus navigation library)");
     pkgitem("0.8.2/contrib","libdvdread-20041028.tar.bz2","(DVD reading library)");
     pkgitem("0.8.2/contrib","libebml-0.7.1.tar.bz2","(A form of binary XML used by libmatroska)");
     pkgitem("0.8.2/contrib","libiconv-1.9.2.tar.gz","(character encoding conversion library)");
     pkgitem("0.8.2/contrib","libid3tag-0.15.0b.tar.gz","(ID3 tag library)");
     pkgitem("0.8.2/contrib","libmad-0.15.1b.tar.gz","(MP3 audio decoder)");
     pkgitem("0.8.2/contrib","libmatroska-0.7.3.tar.bz2","(A open source container format)");
     pkgitem("0.8.2/contrib","libmodplug-0.7.tar.gz","(A MOD demux and decoder)");
     pkgitem("0.8.2/contrib","libogg-1.1.tar.gz","(Ogg library)");
     pkgitem("0.8.2/contrib","libpng-1.2.5.tar.bz2","(PNG image library)");
     pkgitem("0.8.2/contrib","libspeex-20031022.tar.bz2","(Speex audio decoder)");
     pkgitem("0.8.2/contrib","libtheora-1.0alpha3.tar.bz2","(Theora video codec)");
     pkgitem("0.8.2/contrib","libvorbis-1.0.1.tar.gz","(Vorbis audio codec)");
     pkgitem("0.8.2/contrib","libxml2-2.6.4.tar.gz","(xml library)");
     pkgitem("0.8.2/contrib","live.2004.11.11a.tar.gz","(RTSP library)");
     pkgitem("0.8.2/contrib","mpeg2dec-0.4.0.tar.gz","(MPEG-2 video decoder)");
     pkgitem("0.8.2/contrib","openslp-1.0.11.tar.gz","(SLP library)");
     pkgitem("0.8.2/contrib","pa-v19-20041022.tar.gz","(Portaudio audiooutput)");
     pkgitem("0.8.2/contrib","toolame-02m-beta8.tar.bz2","(MP3 audio encoder)");
     pkgitem("0.8.2/contrib","vcdimager-0.7.20.tar.gz","(VCDimager library)");
     pkgitem("0.8.2/contrib","wx-cvs-20041029.tar.bz2","(WxWidgets, a GUI toolkit)");
     pkgitem("0.8.2/contrib","x264-20041029.tar.bz2","(AVC/H.264 video encoder)");
     pkgitem("0.8.2/contrib","zlib-1.1.4.tar.gz","(A losless data-compression library)");
  ?>
  <li><a href="http://downloads.videolan.org/pub/videolan/vlc/0.8.2/contrib"><i>browse the list</i></a></li>
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
