<?php
   $title = "VLC media player for Fedora";
   $lang = "en";
   $date = "21 June 2004";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

<div id="fullwidth">


<h1>VLC media player for <a href="http://fedoraproject.org/">Fedora</a></h1>

<p>Most of our packages for fedora can be found on livna <a href="http://rpm.livna.org/">RPM - LIVNA</a><br />
You can also use this repository from distribution derived from <a href="http://fedoraproject.org/">Fedora</a>

<p>Please report "packaging bugs" on <a href="http://bugzilla.livna.org/">Bugzilla - LIVNA</a></p>

<p>You can also find an old version we officially support: VLC 0.8.5 for Fedora Core 4.</p>

<h2>Fedora 8</h2>

<p>Use <a href="http://rpm.livna.org/">RPM - LIVNA</a> for F8 (available for x86, x86_64 and ppc)<br />

Install <a href="http://rpm.livna.org/livna-release-8.rpm">livna-release-8.rpm</a> for F8</p>

<pre>
    $> su -
    #> rpm -ivh http://rpm.livna.org/livna-release-8.rpm
    #> yum install vlc
    #> yum install python-vlc mozilla-vlc (optionnal)
</pre>

<h2>Fedora 7</h2>

<p>Use <a href="http://rpm.livna.org/">RPM - LIVNA</a> for F7 (available for x86, x86_64 and ppc)<br />

Install <a href="http://rpm.livna.org/livna-release-7.rpm">livna-release-7.rpm</a> for F7</p>

<pre>
    $> su -
    #> rpm -ivh http://rpm.livna.org/livna-release-7.rpm
    #> yum install vlc
    #> yum install python-vlc mozilla-vlc (optionnal)
</pre>

<h2>Fedora 6</h2>

<p>Use <a href="http://rpm.livna.org/">RPM - LIVNA</a> for F6 (available for x86, x86_64 and ppc)<br />

Install <a href="http://rpm.livna.org/livna-release-6.rpm">livna-release-6.rpm</a> for F6</p>

<pre>
    $> su -
    #> rpm -ivh http://rpm.livna.org/livna-release-6.rpm
    #> yum install vlc
    #> yum install python-vlc mozilla-vlc (optionnal)
</pre>

<h1>VLC media player for (older) <a href="http://fedoraproject.org/">Fedora</a></h1>
<p>Older version of Fedora are not supported anymore by the <a href="http://fedoraproject.org/">Fedora Project</a> (even for security bugfix).<br />

<b>BUT</b>, you can find VLC 0.8.6 for all the other flavours of fedora:</p>

<h2>Fedora Core 4 and 5</h2>
<p>For those two versions, VLC 0.8.6 is not available. You can have 0.8.5 here 
for FC 4 and 5 on <a href="http://freshrpms.net">FreshRPMs</a>.</p>

<h2>Fedora Core 1, 2 and 3</h2>
<p>Use <a href="http://dag.wieers.com/rpm/packages/vlc/">Dag wieers</a> to have 0.8.6 for those old versions!</p>

<h2>Other versions - Search</h2>
<p>Use <a href="http://rpm.pbone.net/">PBone.net</a> to search a lot of other versions of VLC for fedora or fedora compatible distributions.</p>

<h1>VLC media player for Fedora Core 4</h1>

<h2>Yum repository</h2>
<p>VLC 0.8.5 is available for Fedora Core 4 from a YUM repository hosted at VideoLAN or one of its mirrors. All packages have been GPG signed by Jean-Paul Saman. Download the publickey <a href=http://www.m2x.nl/mambo/packages/gpg_pubkey_jean-paul.saman.asc>here</a>.</p>

<p>Add the <a href=http://www.m2x.nl/mambo/packages/gpg_pubkey_jean-paul.saman.asc>publickey</a> to the RPM database with:</p>

<pre>
   $> rpm --import gpg_pubkey_jean-paul.saman.asc
</pre>

<p>Add the following files to your <b>/etc/yum.repos.d</b> directory for updating and installing VLC from a YUM repository. Change the baseurl to a mirror closest to you (see below for a list of mirrors). You will need at minimum <b>vlc.repo</b> and <b>vlc-contrib.repo</b> :</p>

<p>file: vlc.repo</p>
<pre>
[vlc]
name=VLC 0.8.5 - $basearch - VLC Base
baseurl=http://download.videolan.org/pub/videolan/vlc/0.8.5/fedora/$releasever/$basearch/vlc/0.8.5/vlc
enabled=1
gpgcheck=1
</pre>

<p>file: vlc-contrib.repo</p>
<pre>
[vlc-contrib]
name=VLC 0.8.5 - $basearch - Contrib
baseurl=http://download.videolan.org/pub/videolan/vlc/0.8.5/fedora/$releasever/$basearch/vlc/0.8.5/vlc-contrib
enabled=1
gpgcheck=1
</pre>

<p>file: vlc-devel.repo</p>
<pre>
[vlc-devel]
name=VLC 0.8.5 - $basearch - Devel
baseurl=http://download.videolan.org/pub/videolan/vlc/0.8.5/fedora/$releasever/$basearch/vlc/0.8.5/vlc-devel
enabled=1
gpgcheck=1
</pre>

<p>file: vlc-source.repo</p>
<pre>
[vlc-source]
name=VLC 0.8.5 - $basearch - Source
baseurl=http://download.videolan.org/pub/videolan/vlc/0.8.5/fedora/$releasever/$basearch/vlc/0.8.5/vlc-source
enabled=1
gpgcheck=1
</pre>

<p>The first thing you must do after creating the above file is to run <b>yum update</b> as root user. This will update the repository meta information on you system. After this you can install vlc.</p>

<pre>
  $ yum update
  $ yum install vlc
</pre>
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

<h2>Older versions</h2>
<?php browse_old("vlc") ; ?>

</div>

<?php footer('$Id$'); ?>
