<?php
   $title = "VLC media player source code";
   $lang = "en";
   $menu = array( "vlc", "download" );
   $additional_css = array("/panels.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

<h1 class="bigtitle"> VLC media player source code </h1>

<div id="left">
<h2>Tarballs</h2>

<p> Latest VLC source code tarball (1.1.12):</p>

<?php /*<a href="http://sourceforge.net/projects/vlc/files/1.1.11/vlc-1.1.11.tar.bz2/download">VLC source code tar.bz2</a>*/ ?>
<?php pkgitem_sf("VLC source code tar.xz", "1.1.12","vlc-1.1.12.tar.xz","vlc", "source package", "56cb9975725a12da8c84882bc00fdce0"); ?>

<h2 style="clear: both;"> Required libraries: </h2>
<a href="ftp://ftp.videolan.org/pub/videolan/contrib/">Contrib libraries tarballs</a>
<?php
/*
<h2> Latest required libraries: </h2>

<ul class="bullets">
<li><?php     pkgitem_nomirr("a52dec 0.7.4", "0.8.5/contrib","a52dec-0.7.4.tar.gz","vlc","(A52 - also known as AC3 - audio decoder)");?></li>
<li><?php     pkgitem_nomirr("faac 1.24", "0.8.5/contrib","faac-1.24.tar.bz2","vlc","(AAC audio encoder)");?></li>
<li><?php     pkgitem_nomirr("faad2", "0.8.5/contrib","faad2-20040923.tar.bz2","vlc","(AAC audio codec)");?></li>
<li><?php     pkgitem_nomirr("ffmpeg 2005/11/26", "0.8.5/contrib","ffmpeg-20051126.tar.bz2", "vlc","(MPEG-4 and other video codecs)");?></li>
<li><?php     pkgitem_nomirr("flac 1.1.6", "0.8.5/contrib","flac-1.1.6.tar.gz","vlc","(FLAC audio codec)");?></li>
<li><?php     pkgitem_nomirr("freetype 2.1.9", "0.8.5/contrib","freetype-2.1.9.tar.bz2","vlc","(Font engine)");?></li>
<li><?php     pkgitem_nomirr("fribidi 0.10.4", "0.8.5/contrib","fribidi-0.10.4.tar.bz2","vlc","(Hebrew and arabic languages support library)");?></li>
<li><?php     pkgitem_nomirr("gettext 0.14.1", "0.8.5/contrib","gettext-0.14.1.tar.gz","vlc","(Internationalization library)");?></li>
<li><?php     pkgitem_nomirr("goom 2k4", "0.8.5/contrib","goom-2k4-0-src.tar.gz","vlc","(Audio Visualization library)");?></li>
<li><?php     pkgitem_nomirr("lame 3.96.1", "0.8.5/contrib","lame-3.96.1.tar.gz","vlc","(MP3 audio encoder)");?></li>
<li><?php     pkgitem_nomirr("libcddb 0.9.6", "0.8.5/contrib","libcddb-0.9.6.tar.gz","vlc","(Audio CD CDDB library)");?></li>
<li><?php     pkgitem_nomirr("libcdio 0.72", "0.8.5/contrib","libcdio-0.72.tar.gz","vlc","(CD,VCD,SVCD,CDDA library)");?></li>
<li><?php     pkgitem_nomirr("libdvbpsi4 0.1.5", "0.8.5/contrib","libdvbpsi4-0.1.5.tar.gz","vlc","(MPEG TS and DVB PSI tables library)");?></li>
<li><?php     pkgitem_nomirr("libdvdcss 1.2.8", "0.8.5/contrib","libdvdcss-1.2.8.tar.bz2","vlc","(DVD decryption library)");?></li>
<li><?php     pkgitem_nomirr("libdvdnav 2005/02/11", "0.8.5/contrib","libdvdnav-20050211.tar.bz2","vlc","(DVD menus navigation library)");?></li>
<li><?php     pkgitem_nomirr("libdvdread 2004/10/28", "0.8.5/contrib","libdvdread-20041028.tar.bz2","vlc","(DVD reading library)");?></li>
<li><?php     pkgitem_nomirr("libebml 0.7.6", "0.8.5/contrib","libebml-0.7.6.tar.bz2","vlc","(A form of binary XML used by libmatroska)");?></li>
<li><?php     pkgitem_nomirr("libiconv 1.9.1", "0.8.5/contrib","libiconv-1.9.1.tar.gz","vlc","(character encoding conversion library)");?></li>
<li><?php     pkgitem_nomirr("libid3tag 0.15.1b", "0.8.5/contrib","libid3tag-0.15.1b.tar.gz","vlc","(ID3 tag library)");?></li>
<li><?php     pkgitem_nomirr("libmad 0.15.1b", "0.8.5/contrib","libmad-0.15.1b.tar.gz","vlc","(MP3 audio decoder)");?></li>
<li><?php     pkgitem_nomirr("libmatroska 0.7.6", "0.8.5/contrib","libmatroska-0.7.6.tar.bz2","vlc","(A open source container format)");?></li>
<li><?php     pkgitem_nomirr("libmodplug 0.7", "0.8.5/contrib","libmodplug-0.7.tar.gz","vlc","(A MOD demux and decoder)");?></li>
<li><?php     pkgitem_nomirr("libogg 1.1.6", "0.8.5/contrib","libogg-1.1.6.tar.gz","vlc","(Ogg library)");?></li>
<li><?php     pkgitem_nomirr("libpng 1.2.5", "0.8.5/contrib","libpng-1.2.5.tar.bz2","vlc","(PNG image library)");?></li>
<li><?php     pkgitem_nomirr("libspeex 1.1.10", "0.8.5/contrib","libspeex-1.1.10.tar.gz","vlc","(Speex audio decoder)");?></li>
<li><?php     pkgitem_nomirr("libtheora 1.0alpha5", "0.8.5/contrib","libtheora-1.0alpha5.tar.bz2","vlc","(Theora video codec)");?></li>
<li><?php     pkgitem_nomirr("libvorbis 1.1.1", "0.8.5/contrib","libvorbis-1.1.1.tar.gz","vlc","(Vorbis audio codec)");?></li>
<li><?php     pkgitem_nomirr("libxml2 2.6.20", "0.8.5/contrib","libxml2-2.6.20.tar.gz","vlc","(xml library)");?></li>
<li><?php     pkgitem_nomirr("live555 2005/11/26", "0.8.5/contrib","live555-20051126.tar.gz","vlc","(RTSP library)");?></li>
<li><?php     pkgitem_nomirr("mpeg2dec 2005/08/02", "0.8.5/contrib","mpeg2dec-20050802.tar.gz","vlc","(MPEG-2 video decoder)");?></li>
<li><?php     pkgitem_nomirr("openslp 1.0.11", "0.8.5/contrib","openslp-1.0.11.tar.gz","vlc","(SLP library)");?></li>
<li><?php     pkgitem_nomirr("pa v19 2004/10/22", "0.8.5/contrib","pa-v19-20041022.tar.gz","vlc","(Portaudio audiooutput)");?></li>
<li><?php     pkgitem_nomirr("twolame 0.3.3", "0.8.5/contrib","twolame-0.3.3.tar.gz","vlc","(MP3 audio encoder)");?></li>
<li><?php     pkgitem_nomirr("vcdimager 0.7.21", "0.8.5/contrib","vcdimager-0.7.21.tar.gz","vlc","(VCDimager library)");?></li>
<li><?php     pkgitem_nomirr("wxWidgets 2.6.2", "0.8.5/contrib","wxWidgets-2.6.2.tar.gz","vlc","(WxWidgets, a GUI toolkit)");?></li>
<li><?php     pkgitem_nomirr("x264 2005/11/26", "0.8.5/contrib","x264-20051126.tar.bz2","vlc","(AVC/H.264 video encoder)");?></li>
<li><?php     pkgitem_nomirr("zlib 1.2.3", "0.8.5/contrib","zlib-1.2.3.tar.gz","vlc","(A losless data-compression library)");?></li>
</ul>
<p><a href="http://downloads.videolan.org/pub/videolan/vlc/0.8.6/contrib"><i>Browse the list</i></a></p>
*/ ?>

<h2>Older versions</h2>
<?php browse_old("vlc"); ?>
</div>

<div id="right">
<?php panel_start( "orange" ); ?>
<h1>Git</h1>

<p>More information about the Git source code repository is available on the <a
href="/developers/">developer's website</a>. </p>
<?php panel_end(); ?>

<?php panel_start( "blue" ); ?>
<h1>How to compile?</h1>

<p> Please have a look at VLC's sub-page on the <a href="/developers/vlc.html">developers website</a>. There are detailed descriptions for most systems, supported by VLC. If something is not mentioned there, searching the <a href="http://forum.videolan.org/">forum</a> is worth a try. </p>

<?php panel_end(); ?>

</div>

<?php footer('$Id$'); ?>
