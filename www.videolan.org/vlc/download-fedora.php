<?php
   $title = "VLC media player for Fedora";
   $lang = "en";
   $date = "21 June 2004";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

<div id="fullwidth">

<h1>VLC media player for <a href="http://fedora.redhat.com/">Fedora Core</a> 4</h1>

<h2>Yum repository</h2>
<p>VLC 0.8.5 is available for Fedora Core 4 from a YUM repository hosted at VideoLAN or one of its mirrors. All packages have been GPG signed by Jean-Paul Saman. Download the publickey <a href=http://www.m2x.nl/mambo/packages/gpg_pubkey_jean-paul.saman.asc>here</a>.</p>

<p>Add the <a href=http://www.m2x.nl/mambo/packages/gpg_pubkey_jean-paul.saman.asc>publickey</a> to the RPM database with:</p>

<pre>
   $> rpm --import gpg_pubkey_jean-paul.saman.asc
</pre>

<p>Add the following files to your <b>/etc/yum.repos.d</b> directory for updating and installing VLC from a YUM repository. Change the baseurl to a mirror closest to you (see below for a list of mirrors). You will need at minimum <b>vlc.repo</b> and <b>vlc-contrib.repo</b> :</p>

<p>file: vlc.repo
<pre>
[base]
name=VLC 0.8.5 - $basearch - Base
baseurl=http://download.videolan.org/pub/videolan/vlc/0.8.5/fedora/4/i386/vlc/0.8.5/base/
enabled=1
gpgcheck=1
</pre>
</p>

<p>file: vlc-contrib.repo
<pre>
[contrib]
name=VLC 0.8.5 - $basearch - Contrib
baseurl=http://download.videolan.org/pub/videolan/vlc/0.8.5/fedora/4/i386/vlc/0.8.5/contrib/
enabled=1
gpgcheck=1
</pre>
</p>

<p>file: vlc-devel.repo
<pre>
[devel]
name=VLC 0.8.5 - $basearch - Devel
baseurl=http://download.videolan.org/pub/videolan/vlc/0.8.5/fedora/4/i386/vlc/0.8.5/devel/
enabled=1
gpgcheck=1
</pre>
</p>

<p>file: vlc-source.repo
<pre>
[source]
name=VLC 0.8.5 - $basearch - Source
baseurl=http://download.videolan.org/pub/videolan/vlc/0.8.5/fedora/4/i386/vlc/0.8.5/source/
enabled=1
gpgcheck=1
</pre>
</p>

<p>The yum repository is mirrored to :</p>

<?php  pkgitem( "VLC Fedora Core Yum repository","vlc/0.8.5/fedora/4/i386/vlc/0.8.5/","","");?>

<h2>Install VLC from RPM packages</h2>

<p>Download the RPM packages tarball listed below. It includes all RPM's for vlc, 3rd party libraries not included in the distribution, devel RPM's, debug RPM's and source RPM's.</p>

<?php  pkgitem( "VLC RPM packages","vlc/0.8.5/fc4","vlc-fc4.tar.gz","");?>

<p>Uncompress vlc-fc4.tar.gz in the same directory :</p>

<pre>
   $ tar zxf &lt;package name&gt;
</pre>

<p>Then, as root, install the packages (use -ivh for installation and -Uvh for upgrade) :</p>

<pre>
    $ rpm -ivh fedora/4/i386/vlc/0.8.5/base/*.rpm fedora/4/i386/vlc/0.8.5/contrib/*.rpm
</pre>

<h1>Unofficial Fedora Core packages</h1>

<p>rpm.livna.org maintains some Fedora Core Packages for VLC: <a href="http://rpm.livna.org/">get them here</a>.</p>

<p>Matthias Saou from freshrpms.net also maintains some Fedora Core Packages: <a href="http://freshrpms.net">get them here</a>.</p>

<h2>Older versions</h2>
<?php browse_old("vlc") ; ?>

</div>

<?php footer('$Id$'); ?>
