<?php
/*
 * $style: either "full" or "title"
 * $max: number of news to print (0 to print all news)
 *
 */
    function shownews($style,$max,$mockup=false) {
    ?>
    <div dir="ltr" lang="en">

    <script type="text/javascript">
    function toggle(count) {
        var text = "news-span-"+count;
        var read = "read-"+count;
        if(document.getElementById(text))
        {
            if(document.getElementById(text).style.display == 'none')
            {
                document.getElementById(text).style.display = 'inline';
                document.getElementById(read).innerHTML = "(Read less...)";
            }
            else
            {
                document.getElementById(text).style.display = 'none';
                document.getElementById(read).innerHTML = "(Read more...)";
            }
        }
    }
    </script>
    <?php
    $file=fopen("news.msg","r");
    $count = 0;
    $msg = "";

    if(!$file)
    {
        echo "</div><!-- news are en only -->";
        return(0);
    }

    while( !feof($file) )
    {
        $line=ereg_replace("\n","",fgets($file,4096));

        // Comments are allowed
        if( !ereg("^ *#",$line) && !ereg("^ *$",$line) )
        {
            // Topics start with "|"
            if( ereg("^ *\|",$line) && $msg )
            {
                $ex=explode("|",$msg);
                $date = $ex[1];
                $title = $ex[2];
                $short = $ex[3];
                if( count($ex) > 4)
                    $remain = $ex[4];

                if( $count ++ < 15 ) {
                   if( $mockup )
                       echo ("<td><div class='item'>\n");
                   else
                       echo ("<div class='item'>\n");
                }
                else { echo ("<div class='item-really-old'>\n"); }
                $postdate = date("Y-m-d", strtotime( $date) );
                echo "<a id='news-$postdate' name='news-$postdate'></a>";

                echo ("<div class='title'><a href=\"/news.html#news-$postdate\">".$title."</a></div>\n" );
                //echo "<div id=\"news-$count\">";
                echo ("<div class='date'>".$postdate."</div>\n");
                echo "<p class='news-descr'>".$short;
                if( isset($remain) )
                {
                    echo "<span id=\"news-span-$count\">$remain</span> ";
                    echo "<script type=\"text/javascript\"><!--\n";
                    echo "document.writeln('<br /><a id=\"read-$count\" ";
                    echo "href=\"javascript:toggle(\'$count\')\">(Read more...)";
                    echo "</a>');toggle( $count );\n--></script>";
                }
                echo "</p>\n</div>\n";
                $max--;
                if($max != 0 ) echo '<div class="horizontalRule"></div>';
                if( $mockup ) echo "</td>";

                if($max == 0) return;
                $msg="";
             }
            $msg.=" ".$line;
        }
    }
    fclose($file);
    echo "</div><!-- news are en only -->";
}

function shownews_mockup($style,$max) {
    shownews($style,$max,true);
}
?>
