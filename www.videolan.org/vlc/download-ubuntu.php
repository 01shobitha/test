<?php
   $title = "VLC media player for Ubuntu Linux";
   $lang = "en";
   $date = "8 May 2006";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<?php function pkgitem($version,$name,$comment) { ?><li><a href="http://download.videolan.org/pub/videolan/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a> <?php echo $comment; ?> </li><?php } ?>

<h1>VLC media player for <a href="http://www.ubuntu.com/">Ubuntu</a></h1>

<div id="left">

<h2><!-- Ubuntu Jaunty Jackalope 9.04,
<br/>-->Ubuntu Intrepid Ibex 8.10,
<br/>Ubuntu Hardy Heron LTS 8.04</h2>
<p>Open Synaptic (System -&gt; Administration -&gt; Synaptic Package Manager).
In Settings -&gt; Repositories, make sure you have a &quot;multiverse&quot; 
repository activated.</p>
<p>Search for vlc and install it. You should also install vlc-plugin-esd, mozilla-plugin-vlc (and libdvdcss2).</p>

<h3>Command line way</h3>
<p>You need to check that a &quot;universe&quot; mirror is listed
in your /etc/apt/sources.list.</p>
<blockquote>
<pre>
% sudo apt-get update
% sudo apt-get install vlc vlc-plugin-esd mozilla-plugin-vlc
</pre>
</blockquote>

<h2>Ubuntu Gutsy Gibbon 7.10,
<br/>Ubuntu Feisty Fawn 7.04</h2>

<h3>Graphical way</h3>
<p>Open Synaptic (System -&gt; Administration -&gt; Synaptic Package Manager).
In Settings -&gt; Repositories, make sure you have a &quot;universe&quot; 
repository activated.</p>
<p>Search for vlc and install it. You should also install vlc-plugin-esd, mozilla-plugin-vlc (and libdvdcss2).</p>

<h3>Command line way</h3>
<p>You need to check that a &quot;universe&quot; mirror is listed
in your /etc/apt/sources.list.</p>
<blockquote>
<pre>
% sudo apt-get update
% sudo apt-get install vlc vlc-plugin-esd mozilla-plugin-vlc
</pre>
</blockquote>

<h2>Ubuntu Dapper Drake LTS 6.06</h2>
<p>Dapper will be supported until June 2009 by Canonical.
However, its VLC version is very old, so use our packages to get the latest version.</p>
<p>You can add our repository this way:</p>
<ul><li>
Be sure to have a universe repository enabled.
Type these commands in a terminal:
<pre>
echo "deb ftp://ftp.videolan.org/pub/videolan/ubuntu dapper universe" &gt; /etc/apt/sources.list.d/vlc.list
sudo apt-get update
sudo apt-get install vlc vlc-plugin-esd mozilla-plugin-vlc libdvdcss2
</pre>
</li>
</ul>

</div>

<div id="right">

<?php panel_start( "blue" ); ?>
<h1>How To Add repositories</h1>
<p>If you don't know how to add repositories, follow the guides:<br />
<ul>
<li><a href="http://www.debianadmin.com/simple-package-management-with-synaptic-package-manager-in-ubuntu.html">Graphical Way</a></li>
<li><a href="https://help.ubuntu.com/community/Repositories/CommandLine#head-927a60f6dbb71bf70af641185e9e0a76f5db28a2">Command-Line Way</a></li>
</ul>
<?php panel_end(); ?>

<?php panel_start( "orange" ); ?>
<h1>Kubuntu users</h1>
<p>The instructions for Ubuntu also apply to Kubuntu. But you should:<br />
<ul>
<li>Use Adept instead of Synaptic;</li>
<li>Install vlc-plugin-arts instead of vlc-plugin-esd</li>
</ul>
<p>
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
