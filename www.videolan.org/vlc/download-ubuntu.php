<?php
   $title = "VLC media player for Ubuntu Linux";
   $lang = "en";
   $menu = array( "vlc", "download" );
   $additional_css = array("/panels.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<?php function pkgitem($version,$name,$comment) { ?><li><a href="http://download.videolan.org/pub/videolan/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a> <?php echo $comment; ?> </li><?php } ?>

<h1>VLC media player for <a href="http://www.ubuntu.com/">Ubuntu</a></h1>

<div id="left">


<h2>Ubuntu Lucid Lynx 10.04 LTS,
<br/>Ubunty Karmic Koala 9.10</h2>

<h3>Graphical way</h3>
<p>Open Synaptic (System -&gt; Administration -&gt; Synaptic Package Manager).
In Settings -&gt; Repositories, make sure you have a &quot;universe&quot; 
repository activated.</p>
<p>Search for vlc and install it. You should also install vlc-plugin-pulse, mozilla-plugin-vlc.</p>
<p>If you are interrested in streaming or transcoding, you should also install libavcodec-extra-52 from a &quot;multiverse&quot; repository. </p>
<h3>Command line way</h3>
<p>You need to check that a &quot;universe&quot; mirror is listed
in your /etc/apt/sources.list.</p>
<blockquote>
<pre>
% sudo apt-get update
% sudo apt-get install vlc vlc-plugin-pulse mozilla-plugin-vlc
</pre>
</blockquote>

<h2>1.0.0 on Jaunty Jackalope</h2>
<p> In order to get the latest 1.0.0 on your Ubuntu Jaunty, you should use use a version from <a href="https://launchpad.net/ubuntu/+ppas">PPA</a>. There is an
<a href="https://help.launchpad.net/Packaging/PPA#Installing software from a PPA">howto to use a ppa</a>.</p>
The version can be found on:
<pre>
https://launchpad.net/~c-korn/+archive/vlc
</pre>

<h2>Ubuntu Jaunty Jackalope 9.04,
<br/>Ubuntu Intrepid Ibex 8.10,
<br/>Ubuntu Hardy Heron LTS 8.04</h2>

<h3>Graphical way</h3>
<p>Open Synaptic (System -&gt; Administration -&gt; Synaptic Package Manager).
In Settings -&gt; Repositories, make sure you have a &quot;multiverse&quot; 
repository activated.</p>
<p>Search for vlc and install it. You should also install vlc-plugin-esd, mozilla-plugin-vlc.</p>

<h3>Command line way</h3>
<p>You need to check that a &quot;multiverse&quot; mirror is listed
in your /etc/apt/sources.list.</p>
<blockquote>
<pre>
% sudo apt-get update
% sudo apt-get install vlc vlc-plugin-esd mozilla-plugin-vlc
</pre>
</blockquote>

</div>

<div id="right">

<?php panel_start( "blue" ); ?>
<h1>How To Add repositories</h1>
<p>If you don't know how to add repositories, follow the guides:
</p>
<ul>
<li><a href="http://www.debianadmin.com/simple-package-management-with-synaptic-package-manager-in-ubuntu.html">Graphical Way</a></li>
<li><a href="https://help.ubuntu.com/community/Repositories/CommandLine#head-927a60f6dbb71bf70af641185e9e0a76f5db28a2">Command-Line Way</a></li>
</ul>
<?php panel_end(); ?>

<?php panel_start( "gray" ); ?>
<h1>Kubuntu users</h1>
<p>The instructions for Ubuntu also apply to Kubuntu. But you should:
</p>
<ul>
<li>Use Adept instead of Synaptic;</li>
<li>Install vlc-plugin-arts instead of vlc-plugin-esd</li>
</ul>
<?php panel_end(); ?>
<?php panel_start( "orange" ); ?>
<h1>Playing DVD (libdvdcss)</h1>
<p>In order to be able to play region-locked DVD, you need install libdvdcss2. You can either follow this <a href="https://help.ubuntu.com/9.10/musicvideophotos/C/video-dvd.html">procedure</a> or add  &quot;<a href="http://medibuntu.org/">medibuntu</a>&quot; to your repositories and install libdvdcss2.</p>
<?php panel_end(); ?>
</div>

<?php
  footer('$Id$');
?>
