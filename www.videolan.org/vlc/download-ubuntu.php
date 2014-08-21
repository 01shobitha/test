<?php
   $title = "VLC media player for Ubuntu";
   $additional_css = array("/style/panels.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<?php function pkgitem($version,$name,$comment) { ?><li><a href="http://download.videolan.org/pub/videolan/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a> <?php echo $comment; ?> </li><?php } ?>

<h1 class="bigtitle">VLC media player for <a href="http://www.ubuntu.com/">Ubuntu</a></h1>

<div id="left">

<h2>
Ubuntu 13.10 <span style='font-size: smaller'>&ldquo;Saucy Salamander&rdquo;</span><br />
Ubuntu 13.04 <span style='font-size: smaller'>&ldquo;Raring Ringtail&rdquo;</span><br />
Ubuntu 12.10 <span style='font-size: smaller'>&ldquo;Quantal Quetzal&rdquo;</span><br />
Ubuntu 12.04 LTS <span style='font-size: smaller'>&ldquo;Precise Pangolin&rdquo;</span><br />
</h2>

<h3>Quick install</h3>
<p>This is the recommended way for installing VLC.</p>
<a href="apt://vlc"><img src="http://developer.ubuntu.com/wp-content/uploads/2012/06/downloadonubuntubutton.png"  title="Download for Ubuntu" alt="Download for Ubuntu button" width="122" height="49" /></a>

<h3>Graphical way</h3>
<p>Open <b>Synaptic</b> application (click on System -&gt; Administration -&gt; Synaptic Package Manager).
</p>

<p>Search for <kbd>vlc</kbd> and install it.
You may also want to install <kbd>browser-plugin-vlc</kbd>.</p>
<p>If you are interested in streaming or transcoding,
you should additionnally install <kbd>libavcodec-extra-53</kbd>.</p>

<h3>Command line way</h3>
<p><blockquote>
<pre>
% sudo apt-get update
% sudo apt-get install vlc browser-plugin-vlc
</pre>
</blockquote>
</p>

<h3>Nota Bene</h3>
<p>Ubuntu includes whichever VLC version was the latest
at the time the Ubuntu release was <em>frozen</em>
(typically about two months before the official Ubuntu upgrade).<br />
Afterward, you can still get security and critical bug fixes,
but no further major VLC version updates until the next Ubuntu release.
</p>
<p>If you need a more recent version, please consider upgrading Ubuntu.
</p>

</div>

<div id="right">

<?php panel_start( "orange" ); ?>
<h1>Playing DVD (libdvdcss)</h1>
<p>In order to be able to play region-locked DVD, you need install libdvdcss2.
You should follow this <a href="https://help.ubuntu.com/community/RestrictedFormats/PlayingDVDs">procedure</a>
to install libdvdcss2.</p>
<?php panel_end(); ?>
</div>

<?php
  footer('$Id$');
?>

