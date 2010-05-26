<?php
   $title = "VLC media player localization";
   $lang = "en";
   $menu = array( "developers", "i18n" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
   require($_SERVER["DOCUMENT_ROOT"]."/include/os-specific.php");
?>


<h1>VideoLAN internationalization</h1>

<h2>VLC media player translation statistics</h2>


<table class="i18n_stats">
 <tr class="i18n_stats">
     <th class="i18n_stats">Language</th>
     <th class="i18n_stats_tr">Translated</th>
     <th class="i18n_stats_tr">%</th>
     <th class="i18n_stats_fu">Fuzzy</th>
     <th class="i18n_stats_fu">%</th>
     <th class="i18n_stats_ut">Untranslated</th>
     <th class="i18n_stats_ut">%</th>
     <th class="i18n_stats">Graph</th>
 </tr>

 <?php
     $path = "/var/www/local/www.videolan.org/developers/i18n";
     $reffile = "$path/vlc-stats.ref";
     $lgfile = "$path/languages";

     $file_id= fopen($reffile,"r");
     $contents = fread ($file_id, filesize($reffile) );
     fclose ($file_id );
     
     $langs = explode( "\n", $contents );

     $file_id=fopen($lgfile,"r");
     $contents = fread ($file_id, filesize($lgfile) );
     fclose ($file_id );
     
     $languages = explode( "\n", $contents );

     for($i=0;$i< count($languages) -1;$i++)
     {
	list($lg,$po,$a,$b) = explode('|',$languages[$i] );
	$names[$po]=$lg;
     }

     for($i = 0 ; $i < count($langs) - 1;$i++ )
     { 
        list($pofile,$tr,$fu,$ut) = explode(' ',$langs[$i] );

        /* Calculate percentages */
        $total = $tr+$fu+$ut;
        $pc_tr = $tr*100/$total;
        $pc_fu = $fu*100/$total;
        $pc_ut = $ut*100/$total;
  
        /* Create image and colors */
        $image = @imagecreatetruecolor(150,18);
        $red = imagecolorallocate($image, 230, 50,50 );
        $orange = imagecolorallocate($image, 200, 170 ,50 );
        $green = imagecolorallocate($image, 110, 210 ,100 );
        $black = imagecolorallocate($image, 0,0,0 );
    
        /* Fill the image */ 
        imagefilledrectangle ( $image,0,0,ceil(1.5*$pc_tr),17,$green  );
        imagefilledrectangle ( $image,ceil(1.5*$pc_tr),0,ceil(1.5*($pc_fu+$pc_tr)),17,$orange  );
        imagefilledrectangle ( $image,ceil(1.5*($pc_fu+$pc_tr)),0,150,17,$red  );
	imagestring( $image, 5, 65, 2 , floor($pc_tr)."%" , $black);

        /* Save and destroy the image */
        imagepng($image,"$path/images/image_$pofile.png");
	imagedestroy($image);
 
        /* Display results */
        printf( "<tr class=\"i18n_stats\"><td class=\"i18n_stats\">%s</td>
        <td class=\"i18n_stats\">%d</td><td class=\"i18n_stats2\">%.2f</td>
        <td class=\"i18n_stats\">%d</td><td class=\"i18n_stats2\">%.2f</td>
        <td class=\"i18n_stats\">%d</td><td class=\"i18n_stats2\">%.2f</td>
        <td class=\"i18n_graph\"><img src=\"images/image_$pofile.png\" alt=\"$pofile\"/></td></tr>",$names[$pofile],$tr,$pc_tr,$fu,$pc_fu,$ut,$pc_ut);
     }


?>

</table>


<?php footer('$Id$'); ?>
