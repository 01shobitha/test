<?php
   $title = "VLC media player for openSUSE";
   $lang = "en";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<?php function pkgitem($version,$name,$comment) { ?><li><a href="http://download.videolan.org/pub/videolan/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a> <?php echo $comment; ?> </li><?php } ?>

<h1 class="bigtitle">VLC media player for <a href="http://www.opensuse.org/">openSUSE</a> x86 and x86_64</h1>

<div id="left">

<p>In order to install VLC on an openSUSE, you have several
options (besides downloading and installing the RPMs manually).</p>

<h2 style="float: clear">Installing VLC using <a href="http://en.opensuse.org/One_Click_Install/UserFAQ">1-click-installs</a></h2>
<div>
<div class="installbtn" style="float: left;">
  <a href="http://download.videolan.org/pub/vlc/SuSE/11.3/vlc.ymp">VLC on 11.3</a>
</div>
<div class="installbtn" style="float: left;">
  <a href="http://download.videolan.org/pub/vlc/SuSE/11.2/vlc.ymp">VLC on 11.2</a>
</div>
<div class="installbtn" style="float:left;">
  <a href="http://download.videolan.org/pub/vlc/SuSE/11.1/vlc.ymp">VLC on 11.1</a>
</div>
<div class="installbtn" style="float: left;">
  <a href="http://download.videolan.org/pub/vlc/SuSE/11.0/vlc.ymp">VLC on 11.0</a>
</div>
</div>

<br />
<br />

<h2>Install VLC media player for SUSE Linux using YaST</h2>
<h3>Add VideoLAN's repository</h3>
<p>
First, add a new repository (installation source) in YaST (YaST2 ->
Software -> Installation Sources)</p>

<p>Add the following Repository:</p>
<pre>
Type: HTTP / Servername: download.videolan.org /
Directory: /pub/videolan/vlc/SuSE/&lt;SUSE Version&gt;
</pre>
<p>Replace &lt;SUSE Version&gt; in the Directory above with your installed SuSE
Version. Supported at this time are :</p>
<p>
11.0<br />
11.1<br />
11.2<br />
11.3<br />
</p>
<p>Confirm the addition.<br />
</p>

<p>
The repository is signed with a GPG Key 
(gpg key C8DA93D2 fingerprint  BC8D 780D E330 8581 B2E0  7085 33DE 8FB7 C8DA 93D2).
Accept this key in YaST and it will warn you in case there is something
suspect with the repository.<br />

Accept everything by clicking <b>Finish</b>.</p>

<h3>Installation</h3>
<p>
Go to Software Management and enter VLC in the searchbox and search for
it. Select it and click <b>Accept</b> to install it with all it's
dependencies. This might require the SUSE CD or DVD.</p>

<p>If you want VLC's Mozilla Plugin, you have to select the
vlc-mozillaplugin manually. It does not get installed by dependencies.</p>

<p>
You're done with the installation.
Have a lot of Fun.
</p>

<h2>Install using command line</h2>
<pre>
sudo zypper ar http://download.videolan.org/pub/vlc/SuSE/&lt;openSUSEversion&gt; VLC
sudo zypper mr -r VLC
sudo zypper in vlc
</pre>

<p>openSUSEversion can be 11.0, 11.1, 11.2 or 11.3 </p>

</div>

<div id="right">

</div>



<?php footer('$Id$'); ?>
