<?php
   $title = "VLC media player for Gentoo Linux";
   $lang = "en";
   $date = "4 May 2003";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
   include($_SERVER["DOCUMENT_ROOT"]."/include/mirrordir.php");
?>

<h1> VLC media player for Gentoo Linux</h1>

<h2>Install VLC trough emerge</h2>

<p>VLC is included in the <a href="http://www.gentoo.org/doc/en/portage-user.xml">Portage</a> package system of the <a
href="http://www.gentoo.org/">Gentoo Linux</a> distribution.
So you can simple type <i>emerge vlc</i> and you will have VLC installed. I advice to always use the latest (and 'unstable') version of VLC by emerging like: <i>ACCEPT_KEYWORDS="~x86" emerge vlc</i>.</p>
<p>
When you don't set the correct USE variables, you will get a very bare bones version of VLC. I advice to emerge with the following USE variables: dvd nls xv bidi truetype wxwindows imlib matroska faad png. To add streaming support, add the stream and streamout USE variables.
</p>

<h2>Older versions</h2>

<p> Older versions can be found by browsing our FTP site :</p>
<ul> <?php mirrordir("vlc"); ?> </ul>

<h2>Source code</h2>

<p>If you want, you can download the <a href="download-sources.html">sourcecode</a> of VLC media player.</p>

<?php footer('$Id$'); ?>
