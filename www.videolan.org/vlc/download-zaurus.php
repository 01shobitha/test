<?php
   $title = "VLC media player for Zaurus";
   $lang = "en";
   $menu = array( "vlc", "download" );
   $additional_css = array("/panels.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<?php function pkgitem($version,$name) { ?><li><a href="http://download.videolan.org/pub/videolan/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a></li><?php } ?>

<h1>VLC media player for Zaurus</h1>

<div id="left">

<p>VLC for Zaurus is still in an experimental state. It has been reported working on several Zaurus setups but may not work on others. No member of the project owns a Zaurus so we depend on your feedback. Please tell us if VLC works on your Zaurus and also if it doesn't. We need your feedback to keep this page up to date.</p>


<h2>Package download </h2>

<p>The latest release for Zaurus is version v0.5.3. It can be downloaded with the link below. Do not forget to also install the additional libraries that are listed on this page. VLC for zaurus will not function without them.</p>

<ul>
<?php
    pkgitem("vlc/ipkg-feed/armv4l/v0.5.3/zaurus", "zaurus-vlc_0.5.3_arm.ipk");
?>
</ul>

<h2>User Interface</h2>

<p>VLC for zaurus is currently delivered without a user interface and is thus only accessible through the commandline. There is a script called zaurus-vlc that will help you to launch vlc in the Opie environment.</p>

<h2>Additional libraries needed</h2>

<p>Zaurus vlc needs the following packages installed:</p>

<ul>
<?php
     pkgitem("vlc/ipkg-feed/armv4l/v0.5.3/zaurus", "zaurus-libsdl_1.2.5_arm.ipk");
     pkgitem("vlc/ipkg-feed/armv4l/v0.5.3", "libffmpeg_0.4.6_20030304_arm.ipk");
?>
</ul>

<h2>Libc extras needed</h2>

<p>The Zaurus comes with a tailored down libc installation. VLC depends on one extra library that is not provided by default. Here it is:</p>
<ul>
<?php
     pkgitem("vlc/ipkg-feed/armv4l/v0.5.3/zaurus", "librt_2.1.3_arm.ipk");
?>
</ul>

<h3>Installation instructions:</h3>

<p>First you must become root user then put all the packages (*.ipk) from this page on your Zaurus. Then perform the following steps.</p>

<pre>
# ipkg install librt_2.1.3_arm.ipk
# ipkg install libffmpeg_0.4.6_20030304_arm.ipk
# ipkg install zaurus-libsdl_1.2.5_arm.ipk
# ipkg install zaurus-vlc_0.5.4_arm.ipk
</pre>

</div>

<div id="right">

<?php panel_start( "blue" ); ?>

<h1>Looking for a Zaurus package maintainer</h1>                                                                                                             
<p>The VLC team is looking for a package maintainer who wants to support VLC media player for Zaurus PDA's. The Zaurus port of VLC is already for a year in experimental stage and could use an active supporter. Knowledge on compiling VLC media player for an ARM cpu (StrongArm/XScale) is available in the team. Send an e-mail to vlc-devel mailing list and I (Jean-Paul Saman) or others will try to answer your questions.
</p>

<?php panel_end(); ?>

</div>
<?php footer('$Id$'); ?>
