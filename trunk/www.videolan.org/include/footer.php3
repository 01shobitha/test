<?
   if($date=="") {
       $date = date("d-m-Y",filemtime($page));
   } else {
       $date .= " (last modified: ".date("d M Y",filemtime($page)).")";
   }

   /* bottom of the page */
   bottom($title, $lang, $date);
   stopmenu($title);
   stophtml();
?>
