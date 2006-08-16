<?php
   $title = "VLC media player for Ubuntu Linux";
   $lang = "en";
   $date = "8 May 2006";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
   include($_SERVER["DOCUMENT_ROOT"]."/include/mirrordir.php");
?>

<?php function pkgitem($version,$name,$comment) { ?><li><a href="http://download.videolan.org/pub/videolan/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a> <?php echo $comment; ?> </li><?php } ?>

<h1>VLC media player for <a href="http://www.ubuntu.com/">Ubuntu Linux</a></h1>

<div id="left">

<h2>Install the latest stable version</h2>
<h3>Graphical way</h3>
<p>Open Synaptic (System -&gt; Administration -&gt; Synaptic Package Manager). 
In Settings -&gt; Repositories, make sure you have a &quot;universe&quot; 
repository activated.</p>
<p>Search for vlc and install it. You should also install vlc-plugin-esd.</p>
<h3>Command line way</h3>
<p>You need to check that you have a &quot;universe&quot; mirror in your /etc/apt/sources.list.</p>
<pre>
   % sudo apt-get update
   % sudo apt-get install vlc vlc-plugin-esd
</pre>

</div>

<div id="right">

<?php panel_start( "gray" ); ?>
<h1>Developement snapshots</h1>
<p>Developement snapshots are available on <a href="http://nightlies.videolan.org">nightlies.videolan.org</a>.</p>
<?php panel_end(); ?>

</div>

<?php
  footer('$Id$');
?>
