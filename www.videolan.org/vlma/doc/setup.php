<?php
   $title ="VideoLAN Manager - Installation";
   $lang = "en";
   $date = "16 June 2008";
   $menu = array( "vlma", "documentation" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="fullwidth">

<h1>VLMa installation</h1>

<div id="videocontainer">
<script src="http://download.videolan.org/swfobject.js" type="text/javascript"></script>
<script type="text/javascript">
var s1 = new SWFObject("http://download.videolan.org/mediaplayer.swf","mediaplayer","600","400","8");
s1.addParam("allowfullscreen","true");
s1.addVariable("width","600");
s1.addVariable("height","400");
s1.addVariable("file","http://download.videolan.org/vlma/doc/screencast.flv");
s1.write("videocontainer");
</script>
</div>
</div>

<?php footer('$Id$') ?>
