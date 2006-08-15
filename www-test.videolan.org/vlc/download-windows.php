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

<div id="left">

  <h1> VLC media player for Windows </h1>

  <h2>Latest packages (0.8.5)</h2>

<?php
    pkgitem( "Windows self-extracting package",
                   "0.8.5/win32","vlc-0.8.5-win32.exe","vlc");
    pkgitem("Windows 7zip (identical to the above but without the installer)",
                  "0.8.5/win32","vlc-0.8.5-win32.7z","vlc");
    pkgitem("Windows zip packages (identical to the above)",
                  "0.8.5/win32","vlc-0.8.5-win32.zip","vlc");
?>

  <h2>Older versions</h2>

  <p> Older versions can be found by browsing our FTP site :</p>

<?php mirrordir("vlc"); ?>

</div> <!-- LEFT -->

<div id="right">
  <h2>Source code</h2>

  <p>If you want, you can download the <a href="download-sources.html">sourcecode</a> of VLC media player.</p>

  <div class="panel-gray"> <!-- begin panel -->
    <div class="hd">
      <div class="c"></div>
    </div>

    <div class="bd">
      <div class="c">
        <!-- main content goes here -->
        <p><strong>Windows 95/98/Me users:</strong> Please note that these versions of Windows are not officially supported. No VideoLAN developer uses any of these systems, which makes them hard to support. VLC should mostly work with them, but some incompatibilities might appear. You might need to download <a href="http://www.microsoft.com.nsatc.net/globaldev/handson/dev/mslu_announce.mspx">The Microsoft Layer for Unicode on Windows 95/98/Me Systems</a>. The two MSLU files need to be put in the <code>C:\Windows\System32\</code> folder.</p>

        <p> <strong class="note">Virus warning</strong>: we have had several
reports of trojaned VLC binaries (Sophos detected Troj/Momma-B, and Panda
detected Bck/Optix). These are <strong>false positives</strong>, our packages are <strong>not
trojaned</strong>. The Windows version is compiled on a Linux box, it is highly
unlikely that a Windows virus would end there. However be aware, to only 
download VLC from the above mentioned locations. </p>
      </div>
    </div>

    <div class="ft">
      <div class="c"></div>
    </div>
  </div> <!-- end panel -->

</div> <!-- RIGHT -->

<?php footer('$Id$'); ?>
