<?
/*
 * $style: either "full" or "title"
 * $max: number of news to print (0 to print all news)
 *
 */
  function shownews($style,$max) {
    $file=fopen("news.msg","r");

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
			echo ("<div class=\"item\">\n");
                        $date = "<a id=\"NEWS$max\"><span class=\"date\">".$date."</span></a>";
                        echo ("<p><b><span class=\"title\">".$title."</span></b> (".$date.")\n");
                        echo ("<span class=\"description\">".$text."</span>\n");
                        echo ("</p></div>\n");
                    }
                    elseif( $style == "title" )
                    {
                        echo "$date: <b><a href=\"#NEWS$max\">$title</a></b>\n";
                        if( $max > 1 ) echo "<br />\n";
                    }

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
