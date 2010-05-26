<?php
   $title = "VLC media player for YOPY / Linupy";
   $lang = "en";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<?php function pkgitem($version,$name) { ?><li><a href="http://download.videolan.org/pub/videolan/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a></li><?php } ?>

<h1> VLC for YOPY/Linupy </h1>

<div id="left">

<h2>Looking for a YOPY package maintainer</h2>

<p>The VLC team is looking for a package maintainer that wants to support VLC media player for linupy OS on YOPY PDA's. The YOPY port of VLC is already for a year in experimental stage and could use an active supporter. Knowledge on compiling VLC media player for an ARM cpu (StrongArm/XScale) is available in the team. Send an e-mail to vlc-devel mailing list and I (Jean-Paul Saman) will try to answer your questions.
</p>

<h2>Test tarballs download</h2>

<p>
VLC for Linupy is still in an experimental state. It has been reported
working on Yopy 3000/linupy 1.4.1 and Yopy 3500/3700/linupy2 but 
may work on other versions. Please tell us if you made VLC work on different configurations.
</p>

<p>You can download test tarballs here:</p>

<p>For Linupy 1 :</p>
<ul>
<?php
     pkgitem("vlc/0.5.2/linupy", "vlc-yopy-0.5.2.tar.gz");
?>
</ul>

<p>For Linupy 2 : (files have been moved from <tt>/usr/local</tt> to <tt>/usr</tt>)</p>
<ul>
<?php
     pkgitem("vlc/0.5.2/linupy", "vlc-yopy-0.5.2-linupy2.tar.gz");
?>
</ul>

<p>Installation intructions:</p>
<pre>
# cd /
# tar xvzf vlc-yopy-0.5.2.tar.gz
</pre>

<h2>Additionnal libraries needed</h2>

<p><code>Librt</code> may not be installed on your yopy, download and
install it:</p>

<ul>
<?php
     pkgitem("vlc/0.5.2/linupy", "librt-2.1.3.tar.gz");
?>
</ul>

<p>Installation intructions:</p>

<pre>
# cd /
# tar xvzf librt-2.1.3.tar.gz
# ldconfig
</pre>

<p>If you don't have SDL installed on your YOPY, pick up the RPM package
here:</p>

<ul>
<?php
     pkgitem("vlc/0.5.2/linupy", "SDL-1.2.3-1.armv4l.rpm");
?>
</ul>

</div>

<div id="right">
  <img src="/images/yopy-vlc-small.jpg" alt="VLC on Yopy"
       width="250" height="388" />
</div>

<?php footer('$Id$'); ?>
