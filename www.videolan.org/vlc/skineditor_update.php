<?php
//Version of the user
$v = "0.7.1";
//Os of the user
$os = "Windows";

if(isset($_GET['v'])) $v = $_GET['v'];
if(isset($_GET['os'])) $os = $_GET['os'];

$header = "SKINEDITORUPDATEPAGE";

//Before version 0.8.0 no operating system information was transmitted
if($v=="0.7.1") {
  echo $header."\n0.8.1\nhttp://www.videolan.org/mirror-geo-redirect.php?file=skin-editor/0.8.1/VLCSkinEditor_update_0_7_to_0_8_1.zip\n";    
} else if($v=="0.8.0") {  
  if(!(stripos($os,"Windows")===FALSE)) {
    //Windows package
    echo $header."\n0.8.1\nhttp://www.videolan.org/mirror-geo-redirect.php?file=skin-editor/0.8.1/VLCSkinEditor_update_0_8_to_0_8_1.zip\n";    
  } else {
    //Unix package
    echo $header."\n0.8.1\nhttp://www.videolan.org/mirror-geo-redirect.php?file=skin-editor/0.8.1/VLCSkinEditor_update_0_8_to_0_8_1.zip\n";    
  }
} else {
  echo $header."\n0.8.1\nhttp://www.videolan.org/mirror-geo-redirect.php?file=skin-editor/0.8.1/VLCSkinEditor_update_0_8_to_0_8_1.zip\n";
}

?>