<?php
   $title = "VLC media player for Ubuntu";
   $additional_css = array("/panels.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<?php function pkgitem($version,$name,$comment) { ?><li><a href="http://download.videolan.org/pub/videolan/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a> <?php echo $comment; ?> </li><?php } ?>

<h1 class="bigtitle">VLC media player for <a href="http://www.ubuntu.com/">Ubuntu</a></h1>

<div id="left">

<h2>Ubuntu Maverick Meerkat 10.10</h2>

<h3>Graphical way</h3>
<p>Open Synaptic application<br />
Click on System -&gt; Administration -&gt; Synaptic Package Manager.<br />
In Settings -&gt; Repositories, make sure you have an
<code>universe</code> repository activated.
</p>

<p>Search for <kbd>vlc</kbd> and install it.
You should install <kbd>vlc-plugin-pulse</kbd>
 and <kbd>mozilla-plugin-vlc</kbd> as well.</p>
<p>If you are interested in streaming or transcoding,
you should additionnally install <kbd>libavcodec-extra-52</kbd>
from a <code>multiverse</code> repository.</p>

<h3>Command line way</h3>
<p>You need to check that a <code>universe</code> mirror is listed
in your <code>/etc/apt/sources.list</code> file.
</p>
<blockquote>
<pre>
% sudo apt-get update
% sudo apt-get install vlc vlc-plugin-pulse mozilla-plugin-vlc
</pre>
</blockquote>

<h2>Ubuntu Lucid Lynx 10.04 LTS</h2>
<p><strong>VLC version 1.0.6 in Ubuntu 10.04 is out-of-date.</strong>
We recommend you install VLC 1.1.x manually.</p>
<p>If you wish to install VLC 1.0.6 anyway,
please refer to the instructions above for Ubuntu 10.10.
Note that there will be some bugs; you are on your own.
</p>

<p>
<strong>At your OWN risks, install VLC from PPA:</strong>
</p>
<h3>Command line way</h3>
<blockquote>
<pre>
% sudo add-apt-repository ppa:lucid-bleed/ppa
% sudo apt-get update
% sudo apt-get install vlc vlc-plugin-pulse mozilla-plugin-vlc
</pre>
</blockquote>

<h2>Ubunty Karmic Koala 9.10
<br/>Ubuntu Jaunty Jackalope 9.04
<br/>Ubuntu Hardy Heron LTS 8.04</h2>

<p><strong>VLC 1.0.2 in Ubuntu 9.10 has known security issues,
as do older versions in older Ubuntu releases.</strong>
We strongly recommend that you update to a newer Ubuntu release,
install a newer VLC version manually, and/or
demand proper security support for VLC from Ubuntu.
</p>

<p>Note: on Ubuntu 8.04, you should install <kbd>vlc-plugin-esd</kbd>
instead of <kbd>vlc-plugin-pulse</kbd>.

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
