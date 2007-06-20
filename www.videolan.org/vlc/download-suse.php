<?php
   $title = "VLC media player for Linux SUSE";
   $lang = "en";
   $date = "14 February 2003";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<?php function pkgitem($version,$name,$comment) { ?><li><a href="http://download.videolan.org/pub/videolan/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a> <?php echo $comment; ?> </li><?php } ?>

<h1>VLC media player for <a href="http://www.opensuse.org/">SUSE Linux</a> x86 and x86_64</h1>

<div id="left">

<p>In order to install VLC on a SUSE Linux/openSUSE, you have several
options (besides downloading and installing the RPMs manually).</p>

<p>The instructions here are to be followed using YaST, the native
SUSE/openSUSE Package manager, which exists in all versions.
</p>

<h2>Download VLC media player for SUSE Linux using YaST</h2>
<h3>Add VideoLAN's repository</h3>
<p>
First, add a new repository (installation source) in YaST (YaST2 ->
Software -> Installation Sources)</p>

<p>
Add the following Repository:
<pre>
Type: HTTP / Servername: download.videolan.org /
Directory: /pub/videolan/vlc/SuSE/&lt;SUSE Version&gt;
</pre>
Replace &lt;SUSE Version&gt; in the Directory above with your installed SuSE
Version. Supported at this time are :
<pre>
10.0
10.1
10.2
10.3
</pre>
Confirm the addition.<br />
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

<p>If you want the vlc Mozilla Plugin, you have to select the
vlc-mozillaplugin manually. It does not get installed by dependencies.</p>

<p>
You're done with the installation.
Have a lot of Fun.
</p>
</div>

<div id="right">

<?php panel_start( "gray" ); ?>
<b>For SUSE Linux 10.1:</b><br />
You may need to add a SUSE Repository as well to solve several dependencies. <br />
It could be  http://ftp4.gwdg.de/pub/opensuse
/distribution/SL-10.1/inst-source/suse , for example.

<?php panel_end(); ?>

<?php panel_start( "blue" ); ?>
<strong>Note for SUSE Linux Enterprise Desktop (SLED) 10</strong><br />

SLED is based on SUSE Linux 10.1, so please be sure to select the 10.1 repository (not 10.0).

<?php panel_end(); ?>
</div>



<?php footer('$Id$'); ?>
