<?php
   $title = "VLC media player for Fedora";
   $lang = "en";
   $date = "21 June 2004";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

<div id="fullwidth">

<h1>VLC media player for <a href="http://fedora.redhat.com/">Fedora Core</a> 3</h1>

<h1>Unofficial Fedora Core packages</h1>

<p>rpm.livna.org maintains some Fedora Core Packages for VLC: <a href="http://rpm.livna.org/">get them here</a>.</p>

<p>Matthias Saou from freshrpms.net also maintains some Fedora Core Packages: <a href="http://freshrpms.net">get them here</a>.</p>

<h2>Install VLC from the RPM packages</h2>

<p style="color: red;font-size:larger;">Warning, these are VLC media player 0.8.1 RPM
packages. To get the latest VLC media player version, please use one of
the Unofficial Fedora Core packages.</p>

<p>Download the RPM packages tarballs listed in the section below and
uncompress them in the same directory :</p>

<pre>
   $ tar zxf &lt;package name&gt;
</pre>

<p>Then, as root, install the packages:</p>

<pre>
    # rpm -U vlc/* --force
</pre>


<h2>Fedora Core 3 packages for i386</h2>

<p>Latest RPM x86 packages tarballs for Fedora Core 3 : </p>

<ul><li>
<?php pkgitem( "VLC Binary packages","vlc/0.8.1/rpm/fedora/fc3","vlc-binary.tar.gz","");?></li>
</ul>

<p>Optional components:</p>

<ul><li><?php  pkgitem_nomirr( "VLC Development headers","vlc/0.8.1/rpm/fedora/fc3","vlc-devel.tar.gz","");?></li>
<li><?php pkgitem_nomirr("VLC Source Code", "vlc/0.8.1/rpm/fedora/fc3","vlc-source.tar.gz","") ?></li>
</ul>

<p>You can also browse the <a href="http://download.videolan.org/pub/videolan/vlc/0.8.1/rpm/fedora/fc3/vlc">packages directory of our FTP site</a>.</p>

<p>Thank to Jason Luka who maintains these packages</p>

<h2>Older versions</h2>
<?php browse_old("vlc") ; ?>

</div>

<?php footer('$Id$'); ?>
