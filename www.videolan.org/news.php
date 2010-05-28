<?php
   $title = "VideoLAN - News";
   $lang = "en";
   $menu = array( "project", "news" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>


<div id="fullwidth">

<h1> News archive </h1>

<p><span class="summary"><a href="http://www.videolan.org/">VideoLAN</a> is a Free Software and Open Source project and organisation.<br />
One of the software project is the famous cross-platform multimedia player, <a href="http://www.videolan.org/vlc/">VLC</a>.</span></p>

<?php
   include($_SERVER["DOCUMENT_ROOT"]."/include/news.php");
   shownews("full",0);
?>

</div>
<?php footer('$Id$'); ?>
