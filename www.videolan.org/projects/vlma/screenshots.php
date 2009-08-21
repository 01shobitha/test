<?php
   $title ="VideoLAN Manager";
   $lang = "en";
   $menu = array( "vlma", "screenshots" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

function screenshot($img, $desc) {
echo"<div style=\"float:left;width:350px;height:250px;text-align:center\">\n  $desc<br/><a href=\"http://download.videolan.org/projects/vlma/screenshot/$img\" style=\"height: 90%\">\n    <img src=\"http://download.videolan.org/projects/vlma/screenshot/$img\" alt=\"$desc\" style=\"border:1px solid #ccc;width:80%\" />\n  </a></div>\n";
}

?>

<div id="fullwidth">

<h2 class="clearme">VLMa 0.2</h2>

<?php
screenshot("0.2.0/adapteradd.png", "Add an adapter");
screenshot("0.2.0/channeladd.png", "Add a channel");
screenshot("0.2.0/channellist.png", "Channel list");
screenshot("0.2.0/satelliteadd.png", "Add a satellite");
screenshot("0.2.0/schedule.png", "Schedule a channel");
screenshot("0.2.0/serveradd.png", "Add a server");
?>

</div>

<?php footer('$Id$') ?>
