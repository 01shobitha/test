<?php
   $title = "VLC media player for openSUSE";
   $lang = "en";
   $body_color = "green";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<?php function pkgitem($version,$name,$comment) { ?><li><a href="http://download.videolan.org/pub/videolan/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a> <?php echo $comment; ?> </li><?php } ?>

<h1 class="bigtitle">VLC media player for <a href="http://www.opensuse.org/">openSUSE</a></h1>
<img src="/images/icons/openSUSE.jpg" style="float: right; border: 1px solid green;" alt="openSuSE logo" />

<h2>Download VLC for openSUSE</h2>

<p>In order to install <a href="/vlc/">VLC</a> on an openSUSE, you have several
options:</p>
<ul>
<li><a href="#1click">Using 1-click install</a></li>
<li><a href="#yast">Using YaST interface</a></li>
<li><a href="#cli">Using Command Line</a></li>
</ul>
<br />

<h2>Install VLC using
 <a href="http://en.opensuse.org/One_Click_Install/UserFAQ">1-click install</a></h2>
<div>
<div class="installbtn" style="float: left;">
  <a href="http://download.videolan.org/pub/vlc/SuSE/11.4/vlc.ymp">VLC for 11.4</a>
</div>
<div class="installbtn" style="float: left;">
  <a href="http://download.videolan.org/pub/vlc/SuSE/11.3/vlc.ymp">VLC for 11.3</a>
</div>
<div class="installbtn" style="float: left;">
  <a href="http://download.videolan.org/pub/vlc/SuSE/11.2/vlc.ymp">VLC for 11.2</a>
</div>
<div class="installbtn" style="float:left;">
  <a href="http://download.videolan.org/pub/vlc/SuSE/11.1/vlc.ymp">VLC for 11.1</a>
</div>
</div>

<br />
<br />
<br />
<br />

<h2><a name="yast">Install VLC using YaST</a></h2>
<h3>Add VideoLAN's repository</h3>
<p>
First, add a new repository (installation source) in YaST (YaST2 ->
Software -> Installation Sources)</p>

<p>Then, add the following Repository:</p>
<pre>
Type: HTTP / Servername: download.videolan.org /
Directory: /pub/videolan/vlc/SuSE/&lt;SUSE Version&gt;
</pre>
<p>Replace &lt;SUSE Version&gt; in the Directory above with your installed SuSE
Version. Supported at this time are :</p>
<p>
11.1<br />
11.2<br />
11.3<br />
11.4<br />
Factory<br />
</p>
<p>Finally, confirm the addition.<br />
</p>

<h3>Security</h3>
The repository is signed with a GPG Key 
(gpg key C8DA93D2 fingerprint <code>BC8D 780D E330 8581 B2E0  7085 33DE 8FB7 C8DA 93D2</code>).
<br />Accept this key in YaST and it will warn you in case there is something
suspect with the repository.<br />

Accept everything by clicking <b>Finish</b>.</p>

<h3>Installation</h3>
<p>
Go to <em>Software Management</em> and enter <em>VLC</em> in the searchbox.<br />
Select it and click <b>Accept</b> to install it with all its dependencies.<br />
This might require the SUSE CD or DVD.</p>

<p><b>NB:</b>If you want VLC's Mozilla Plugin, you have to select the
vlc-mozillaplugin manually. It does not get installed by default.</p>

<p>
You're done with the installation.
Have a lot of Fun.
</p>

<h2><a name="cli">Install using command line</h2>
<pre>
sudo zypper ar http://download.videolan.org/pub/vlc/SuSE/&lt;openSUSEversion&gt; VLC
sudo zypper mr -r VLC
sudo zypper in vlc
</pre>

<p>openSUSEversion can be 11.1, 11.2, 11.3 or 11.4 </p>


<?php footer('$Id$'); ?>
