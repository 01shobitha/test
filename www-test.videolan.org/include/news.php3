<?php
/*
 * $style: either "full" or "title"
 * $max: number of news to print (0 to print all news)
 *
 */
  function shownews($style,$max) {
    $file=fopen("news.msg","r");
    $count = 0;

    if(!$file)
      return(0);

    while( !feof($file) )
    {
        $line=ereg_replace("\n","",fgets($file,4096));

        // Comments are allowed
        if( !ereg("^ *#",$line) && !ereg("^ *$",$line) )
        {
            // Topics start with "|"
            if( ereg("^ *\|",$line) )
            {
                // It's a new news !
                if( $msg )
                {
                    $ex=explode("|",$msg);
                    $date = $ex[1];
                    $title = $ex[2];
                    $text = $ex[3];

                    if( $style == "full" )
                    {
                        if( $count ++ < 15 )
                        {
			    echo ("<div class=\"item\">\n");
                        } else {
			    echo ("<div class=\"item-really-old\">\n");
                        }
                        echo ("<h3>".$title."</h3>\n" );
                        echo ("<p class=\"date\">".date("Y-m-d", strtotime( $date) )."</p>\n");
                        echo ("<p>".$text."</p>\n");
                        echo ("</div>\n");
                    }
/* Unused 
                    elseif( $style == "title" )
                    {
                        echo "$date: <b><a href=\"#NEWS$max\">$title</a></b>\n";
                        if( $max > 1 ) echo "<br />\n";
                    } */

                    $max--; if($max == 0) return;
                    $msg="";
                }
            }
            $msg.=" ".$line;
        }
    }

    fclose($file);
}

?>
