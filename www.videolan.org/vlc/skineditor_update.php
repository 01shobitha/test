<?php
//Version of the user
$v = "0.7.1"; //This is the last version which did not report its version number to the server
//Operating system of the user
$os = "Windows";

if(isset($_GET['v'])) $v = $_GET['v'];
if(isset($_GET['os'])) $os = $_GET['os'];

$header = "SKINEDITORUPDATEPAGE";

//Update information for versions prior to 0.8
if($v=="0.7.1") {
  echo $header."\n0.8.1\nhttp://www.videolan.org/mirror-geo-redirect.php?file=skin-editor/0.8.1/VLCSkinEditor_update_0_7_to_0_8_1.zip\n";    
}

//Update information for version 0.8
else if($v=="0.8") {  
  if(!(stripos($os,"Windows")===FALSE)) {
    //Windows package
    echo $header."\n0.8.1\nhttp://www.videolan.org/mirror-geo-redirect.php?file=skin-editor/0.8.1/VLCSkinEditor_update_0_8_to_0_8_1_w32.zip\n";    
  } else {
    //Unix package
    echo $header."\n0.8.1\nhttp://www.videolan.org/mirror-geo-redirect.php?file=skin-editor/0.8.1/VLCSkinEditor_update_0_8_to_0_8_1.zip\n";    
  }
}
//Update information for version 0.8.1
else if($v=="0.8.1") {  
  if(!(stripos($os,"Windows")===FALSE)) {
    //Windows package
    echo $header."\n0.8.5\nhttp://www.videolan.org/mirror-geo-redirect.php?file=skin-editor/0.8.5/VLCSkinEditor_update.zip\n";    
  } else {
    //Unix package
    echo $header."\n0.8.5\nhttp://www.videolan.org/mirror-geo-redirect.php?file=skin-editor/0.8.5/VLCSkinEditor_update.zip\n";    
  }
} 
//Update information for version 0.8.5
else if($v=="0.8.1") {  
  if(!(stripos($os,"Windows")===FALSE)) {
    //Windows package
    echo $header."\n0.8.5\nhttp://www.videolan.org/mirror-geo-redirect.php?file=skin-editor/0.8.5/VLCSkinEditor_update.zip\n";    
  } else {
    //Unix package
    echo $header."\n0.8.5\nhttp://www.videolan.org/mirror-geo-redirect.php?file=skin-editor/0.8.5/VLCSkinEditor_update.zip\n";    
  }
} 

//Update information for any other version
else {
  echo $header."\n0.8.5\nhttp://www.videolan.org/mirror-geo-redirect.php?file=skin-editor/0.8.5/VLCSkinEditor_update.zip\n";
}

?>
