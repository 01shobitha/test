<?php
   $title = "VLC media player for ALT Linux";
   $lang = "en";
   $date = "8 May 2006";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
?>

<h1>VLC media player for ALT Linux</h1>

<h2>ALT Linux Sisyphus (unstable)</h2>
<p>Sisyphus packages repository always contains one of the latest development
version of VLC (svn trunk). In order to acquire it you should have those
lines in your /etc/apt/sources.list:</p>
<pre>
   rpm [alt] ftp://ftp.altlinux.com/pub/distributions/ALTLinux/Sisyphus i586 classic
   rpm [alt] ftp://ftp.altlinux.com/pub/distributions/ALTLinux/Sisyphus noarch classic
</pre>
<p>If your arch is x86_64, substitute i586 to x86_64 in a corresponding line.</p>
<p>For a normal install, do:</p>
<pre>
   # apt-get update
   # apt-get install vlc-normal
</pre>
<p>or for full install with all possible plugins:</p>
<pre>
   # apt-get install vlc-maxi
</pre>

<h2>Stable distributions</h2>
<p>Currently released ALT distributions, such as Master 2.4 and Compact 3.0
contain outdated 0.7.2 version of VLC. However, you can check backports to
find backported current versions of VLC (will be available soon).</p>

<?php footer('$Id$'); ?>
