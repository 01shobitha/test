<?
   $include = "/var/www/www.videolan.org/include/";
   $htdocs = "/var/www/www.videolan.org/";

   $lang=""; $date=""; $title="";

   /* redirect user to the actual page */
/*   if($redirect) {
      $query = ereg_replace("page=[^&]*&*","",$query);
      $query = ereg_replace("dir=[^&]*&*","",$query);
      $query = ereg_replace("\\?*&*$","",$query);
      header("Location: http://sam.zoy.org$query");
      die();
   } */

   if($mirror)
   {
       header("Location: http://$mirror/$page.html");
       die();
   }

   /* presuppose the page can be accessed and it is not a directory index */
   $access = 1;
   $index = 0;

   /* tidy directory and file name */
   $dir = ereg_replace("%2[Ff]","/",urlencode($dir));
   $dir = ereg_replace("/+","/","/".$dir."/");
   $page = ereg_replace("/","",urlencode($page)).".html";

   /* get rid of script kiddies wannabe */
   do {
      $olddir = $dir;
      $dir = ereg_replace("/[^/]*/\\.\\./","/",$dir);
   } while ($dir != $olddir);

   if(ereg("/\\.\\./", "/".$dir."/")) {
      $dir = "/";
      $access = 0;
   }

   /* go to the directory if it exists, otherwise send a 403 */
   if(filetype($htdocs.$dir) == "dir") {
      chdir($htdocs.$dir);
   } else {
      $access = 0;
   }

   /* if the file doesn't exist, send a 404 */
   if(!file_exists($page)) {
      if($page == "index.html" && $access) {
         $index = 1;
      } else {
         Header("HTTP/1.1 404 Not Found");
         chdir($htdocs);
         $page = "404.html";
      }
   }

   /* manage the 403 */
   if(!$access) {
      Header("HTTP/1.1 403 Forbidden");
      chdir($htdocs);
      $page = "403.html";
   }

   if($index) {
      $lang = "en";
      $date .= "last modification: ".date("d M Y",filemtime("."));
      $title = "Index of <code>".htmlentities($dir)."</code>";
   } else {
      /* read the commands in the file between <? and ?> */
      $fd = fopen($page,"r");
      $line = fgets($fd,1023);
      /* if the page is already HTMLized, include() it */
      if(eregi("<.*html",$line)) {
         include($page);
         die();
      }
      if("<?" == substr($line,0,2)) {
         do {
            $line=fgets($fd,1023);
            eval($line);
         }
         while((substr($line,0,2) != "?>") && ($line != ""));
      }
      fclose($fd);
   }

   /* load common functions */
   include($include."/header.php3");

   /* default language and date */
   if($lang=="") { $lang = "en"; }

   /* render the page */
   starthtml(ereg_replace("<[^>]*>","",$title));
   startmenu($title);

   /* if it is a directory index, print it ; otherwise, include the page */
   if($index) {
      ?><h1><?echo $title;?></h1>
        <ul><li><a href="../"><em>parent directory</em></a></li><?

      /* Create a sorted array */
      $listing=array(); $handle=opendir('.');
      while ($file = htmlentities(readdir($handle))) {
        if ($file != "." && $file != "..") {
           $listing[]=$file;
        }
      }
      closedir($handle); sort($listing); reset($listing);

      while ($file = current($listing)) {
         ?><li><code><a href="<?echo $file;?>"><?echo $file;?></a></code></li><?
         next($listing);
      }

      ?></ul><?
   } else {
      /* We cannot use require() since $page may be non-existant */
      include($page);
   }

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
