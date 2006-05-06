<?php
   $title = "VLC media player for Windows";
   $lang = "en";
   $date = "16 April 2001";
   $menu = array( "vlc", "windows" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");

   include($_SERVER["DOCUMENT_ROOT"]."/include/package.php");
   include($_SERVER["DOCUMENT_ROOT"]."/include/mirrordir.php");

?>

<?php function pkgitemdev($version,$name) { ?><li><a href="http://downloads.videolan.org/pub/videolan/testing/<?php echo $version."/".$name; ?>"><code><?php echo $name; ?></code></a></li><?php } ?>

<h1> VLC media player for Windows </h1>

<h2>Latest packages (0.8.5)</h2>

<p> Windows self-extracting package: </p>

<ul>
  <?php pkgitem("0.8.5/win32","vlc-0.8.5-win32.exe","vlc"); ?>
</ul>

<p> Windows 7zip and zip packages (identical to the above but without the installer): </p>

<ul>
  <?php pkgitem("0.8.5/win32","vlc-0.8.5-win32.7z","vlc"); ?>
  <?php pkgitem("0.8.5/win32","vlc-0.8.5-win32.zip","vlc"); ?>
</ul>

<p><em>Windows 95/98/Me users:</em> Please note that these versions of Windows are 
not officially supported. No VideoLAN developer uses any of these systems, which
makes them hard to support.<br />
VLC should mostly work with them, but some incompatibilities might appear. You might need to download <a href="http://www.microsoft.com.nsatc.net/globaldev/handson/dev/mslu_announce.mspx">The Microsoft Layer for Unicode on Windows 95/98/Me Systems</a>.</p>

<p> <span style="color: red;"><b>Virus warning</b></span>: we have had several
reports of trojaned VLC binaries (Sophos detected Troj/Momma-B, and Panda
detected Bck/Optix). These are <b>false positives</b>, our packages are <b>not
trojaned</b>. The Windows version is compiled on a Linux box, it is highly
unlikely that a Windows virus would end there. However be aware, to only 
download VLC from the above mentioned locations. </p>

<h2>Older versions</h2>

<p> Older versions can be found by browsing our FTP site :</p>
<ul> <?php mirrordir("vlc"); ?> </ul>

<h2>Source code</h2>

<p>If you want, you can download the <a href="download-sources.html">sourcecode</a> of VLC media player.</p>

<?php footer('$Id$'); ?>
