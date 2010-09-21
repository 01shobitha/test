<?php
   $title = "VLC media player for iOS";
   $lang = "en";
   $menu = array( "vlc", "download" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<h1> VLC media player for <a href="http://en.wikipedia.org/wiki/IOS_%28Apple%29">iOS</a> 3.2 and later</h1>

<h2> Introduction </h2>
<p>VLC for iOS is a bit different from the classic VLC.</p>
<p>It is based on libVLC, libVLCcore and all libVLC plugins, like the normal VLC.<br />
   However, the interface works in a slightly different way, that is more suited to this OS.</p>

<h2> Devices and version </h2>
<p>So far, it works on the iPad only, and it doesn't support current releases of iOS 4.2 beta.</p>

<h2> Binaries </h2>

<p> VLC is available on <a href="http://itunes.apple.com/app/vlc-media-player/id390885556">Apple's App Store</a>. </p>

<p> Additionally, you can find the binary here:</p>
<code><a href="http://download.videolan.org/pub/videolan/testing/vlc-iOS/vlc-iOS-1.0.0-zip">http://download.videolan.org/pub/videolan/testing/vlc-iOS/vlc-iOS-1.0.0-zip</a></code>


<h2> Source </h2>

<p> You can find the source here:</p>
<code><a href="http://download.videolan.org/pub/videolan/testing/vlc-iOS/vlc-iOS-1.0.0-sources.zip">http://download.videolan.org/pub/videolan/testing/vlc-iOS/vlc-iOS-1.0.0-sources.zip</a></code>



<?php
  footer('$Id$');
?>
