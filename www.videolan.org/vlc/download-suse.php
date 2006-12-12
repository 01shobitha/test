<?php
   $title = "VLC media player for Linux SUSE";
   $lang = "en";
   $date = "14 February 2003";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<?php function pkgitem($version,$name,$comment) { ?><li><a href="http://download.videolan.org/pub/videolan/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a> <?php echo $comment; ?> </li><?php } ?>

<h1>VLC media player for SUSE Linux x86</h1>

<div id="left">
<p>In order to install VLC on a SUSE Linux/openSUSE, you have several
options (besides downloading and installing the RPMs manually).

The instructions here are to be followed using YaST, the native
SUSE/openSUSE Package manager, which exists in all versions.

</p>

<h2>Download VLC media player for SUSE Linux using YaST</h2>
<p>
First, add a new repository (installation source) in YaST (YaST2 ->
Software -> Installation Sources)</p>

<p>
Add the following Repository:
<pre>
Type: HTTP / Servername: download.videolan.org /
Directory: /pub/videolan/vlc/0.8.6/SuSE/<SUSE Version>
</pre>
Replace <SUSE Version> in the Directory above with your installed
Version. Supported at this time are :
<ul>
<li>9.3</li>
<li>10.0</li>
<li>10.1</li>
<li>10.2</li>
</ul>

Confirm the addition.
</p>

<p>
The repository is signed with a GPG Key (KeyID.... Fingerprint:.....).
Accept this key in YaST and it will warn you in case there is something
suspect with the repository.<br />

Accept everything by clicking *Finish*</p>

<p>
Go to Software Management and enter VLC in the searchbox and search for
it. Select it and click *Accept* to install it with all it's
dependencies. This might require the SUSE CD or DVD.</p>

<p>If you want the vlc Mozillaplugin, you have to select the
vlc-mozillaplugin manually. It does not get installed by dependencies.</p>

<p>
You're done with the installation.
Have a lot of Fun.
</p>

</div>

<div id="right">

<?php panel_start( "gray" ); ?>
<h1>Useful information?</h1>
<p>
<a href="http://forum.videolan.org/viewtopic.php?t=21707">Forum post</a> (<a href="http://forum.videolan.org/viewtopic.php?t=1092">old forum post</a> for 0.7.*) with possibly useful information.</p>
<?php panel_end(); ?>

</div>

<?php footer('$Id$'); ?>
