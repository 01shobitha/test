<?php
   $title = "VideoLAN - News";
   $lang = "en";
   $menu = array( "project", "news" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>


<div id="fullwidth">

<h1> News archive </h1>

<p><span class="summary"><a href="http://www.videolan.org/">VideoLAN</a> is a Free Software and Open Source multi-platform video streaming solution. It also features a cross-plaform multimedia player, <a href="http://www.videolan.org/vlc/">VLC</a>, which can be used to read the stream from the network or display video read locally on the computer</span></p>

<?php
   include($_SERVER["DOCUMENT_ROOT"]."/include/news.php");
   shownews("full",0);
?>

</div>
<?php footer('$Id$'); ?>
