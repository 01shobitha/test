<?php
   $title = "VLC media player for Debian GNU/Linux";
   $lang = "en";
   $date = "14 February 2003";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
   include($_SERVER["DOCUMENT_ROOT"]."/include/mirrordir.php");
?>

<?php function pkgitem($version,$name,$comment) { ?><li><a href="http://download.videolan.org/pub/videolan/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a> <?php echo $comment; ?> </li><?php } ?>

<h1> VLC media player for Debian GNU/Linux</h1>

<h2> Debian stable (woody) </h2>

<p> Add the following lines to your <b>/etc/apt/sources.list</b>:</p>

<pre>
     deb http://download.videolan.org/pub/videolan/debian woody main
     deb-src http://download.videolan.org/pub/videolan/debian woody main
</pre>

<p> For a normal install, do:</p>

<pre>
   # apt-get update
   # apt-get install gnome-vlc libdvdcss2
</pre>

<h2> Debian unstable (sid) </h2>

<p> VLC's latest packaged version is always in the official Debian unstable
branch. However you should still use our apt-get line if you need libdvdcss in
its latest version: </p>

<pre>
     deb http://download.videolan.org/pub/videolan/debian sid main
     deb-src http://download.videolan.org/pub/videolan/debian sid main
</pre>

<p> For a normal install, do:</p>

<pre>
   # apt-get update
   # apt-get install wxvlc libdvdcss2
</pre>


<h2> Debian testing (sarge) </h2>

<p> You should not be using Debian testing unless you perfectly know what you
are doing. It is almost impossible to support Debian testing and there are no
plans to do it. </p>

<h2>Older versions</h2>

<p> Older versions can be found by browsing our FTP site :</p>
<ul> <?php mirrordir("vlc"); ?> </ul>

<?php
  footer('$Id$');
?>
