<?php
   $title = "VLC media player for Ubuntu Linux";
   $lang = "en";
   $date = "8 May 2006";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<?php function pkgitem($version,$name,$comment) { ?><li><a href="http://download.videolan.org/pub/videolan/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a> <?php echo $comment; ?> </li><?php } ?>

<h1>VLC media player for <a href="http://www.ubuntu.com/">Ubuntu Linux</a></h1>

<div id="left">

<h2>Ubuntu Dapper Drake LTS 6.06</h2>
<p>Dapper will be supported until June 2009 by Canonical. But VLC version is 
very old in Dapper, so use our packages to get the latest VLC version.</p>
<p>Add our repository:</p>
<ul>
<li>
Use the following repository, with universe checked, for graphic installation:
<pre>ftp://ftp.videolan.org/pub/videolan/ubuntu</pre>
Search and install vlc vlc-plugin-esd mozilla-plugin-vlc and libdvdcss2
</li>
<li>
Or add to your /etc/apt/sources.list:
<pre>deb ftp://ftp.videolan.org/pub/videolan/ubuntu dapper universe</pre>
And run
<pre>
 % sudo apt-get update
 % sudo apt-get install vlc vlc-plugin-esd mozilla-plugin-vlc libdvdcss2
</pre>
</li>
</ul>

<h2>Ubuntu Edgy Eft 6.10</h2>
<p>A pretty new version is already in Universe:</p>

<h3>Graphical way</h3>
<p>Open Synaptic (System -&gt; Administration -&gt; Synaptic Package Manager). 
In Settings -&gt; Repositories, make sure you have a &quot;universe&quot; 
repository activated.</p>
<p>Search for vlc and install it. You should also install vlc-plugin-esd, mozilla-plugin-vlc (and libdvdcss2).</p>

<h3>Command line way</h3>
<p>You need to check that you have a &quot;universe&quot; mirror in your /etc/apt/sources.list.</p>
<pre>
   % sudo apt-get update
   % sudo apt-get install vlc vlc-plugin-esd mozilla-plugin-vlc
</pre>

<h2>Ubuntu Feisty Fawn 7.04</h2>
<p>Do the same as for Edgy, you should get the latest VLC version</p>

<h2>Ubuntu Breezy and Older</h2>
<p> You really should upgrade !</p>

<p>You can find a not so old version for breezy on <a href="http://nightlies.videolan.org">nightlies.videolan.org</a>.</p>

</div>

<div id="right">

<?php panel_start( "blue" ); ?>
<h1>HowTO Add repositories</h1>
<p>If you don't know how to add repositories, follow the guides:<br />
<ul>
<li><a href="http://www.debianadmin.com/simple-package-management-with-synaptic-package-manager-in-ubuntu.html">Graphical Way</a></li>
<li><a href="https://help.ubuntu.com/community/Repositories/CommandLine#head-927a60f6dbb71bf70af641185e9e0a76f5db28a2">Command-Line Way</a></li>
</ul>
<?php panel_end(); ?>

<?php /*
<?php panel_start( "orange" ); ?>
<h1>libdvdcss</h1>
<p>Note: to get libdvdcss2 (DVD region free software), you'll need to add the following repository to synaptic: deb http://packages.freecontrib.org/ubuntu/plf/ edgy-plf free non-free. (replace "edgy" with your ubuntu version name)</p>

<p>To install libdvdcss2 (DVD region free software) add "deb http://medibuntu.sos-sts.com/repo/ edgy free" to your /etc/apt/sources.list file and run:</p>
<pre>
  % sudo apt-get install libdvdcss2
  </pre>*/?>

</div>

<?php
  footer('$Id$');
?>
