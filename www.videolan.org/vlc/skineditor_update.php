<?php
$cver = file_get_contents("http://d-gfx.kognetwork.ch/VLC/skineditor/dl.php?getmajorv");
$cdl = file_get_contents("http://d-gfx.kognetwork.ch/VLC/skineditor/dl.php?getmajorurl");

echo "SKINEDITORUPDATEPAGE\n";
echo $cver."\n";
echo $cdl."\n";

?>