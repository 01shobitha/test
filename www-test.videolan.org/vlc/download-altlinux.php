<?php
   $title = "VLC media player for ALT Linux";
   $lang = "en";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="fullwidth">

<h1>VLC media player for <a href="http://www.altlinux.com/">ALT Linux</a></h1>

<h2>ALT Linux Sisyphus (unstable)</h2>
<p>Sisyphus packages repository always contains one of the latest versions
of VLC (stable branch or svn trunk, depending on trunk usability/state).</p>
<p>In order to acquire it you should have those lines in your /etc/apt/sources.list:</p>
<pre>
   rpm [alt] ftp://ftp.altlinux.com/pub/distributions/ALTLinux/Sisyphus i586 classic
   rpm [alt] ftp://ftp.altlinux.com/pub/distributions/ALTLinux/Sisyphus noarch classic
</pre>
<p>If your arch is x86_64, substitute i586 to x86_64 in a corresponding line.</p>
<p>For a normal install, including support for reading almost all audio/video formats, 
dvd playback and X11 video output do the following:</p>
<pre>
   # apt-get update
   # apt-get install vlc
</pre>
<p>or for full install with all possible plugins:</p>
<pre>
   # apt-get install vlc-maxi
</pre>

<h2>Current stable distributions</h2>
<h3>4.0</h3>
<p><b>Server</b> distribution does not have vlc package in 'main' component.</p>
<p>In order to install vlc, one should enable 'classic' component and perform the following:</p>
<pre>
  # apt-get update
  # apt-get install vlc
</pre>

<h2>Older distributions</h2>
<p>Master 2.4 and Compact 3.0 contain outdated 0.7.2 version of VLC. There are no official
 backports done by ALT Linux Team, so you're encouraged to update if you want recent VLC.</p>

</div>

<?php footer('$Id$'); ?>
