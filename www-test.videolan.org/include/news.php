<?php
/*
 * $style: either "full" or "title"
 * $max: number of news to print (0 to print all news)
 *
 */
    function shownews($style,$max,$mockup=false) {
    ?>
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
    $count = 0; $max0 = $max;

    if(!$file)
      return(0);

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
                $remain = $ex[4];

                if( $count ++ < 15 ) {
                   if( $mockup )
                       echo ("<td><div class='item'>\n");
                   else
                       echo ("<div class='item'>\n");
                }
                else { echo ("<div class='item-really-old'>\n"); }
                echo "<a id='news-$count' href=\"/news.html#news-$count\"></a>";

                echo ("<div class='title'>".$title."</div>\n" );
                //echo "<div id=\"news-$count\">";
                echo ("<div class='date'>".date("Y-m-d", strtotime( $date) )."</div>\n");
                echo "<p class='descr'>".$short;
                if( $remain )
                {
                    echo "<span id=\"news-span-$count\">$remain</span> ";
                    echo "<script type=\"text/javascript\"><!--\n";
                    echo "document.writeln('<br /><a id=\"read-$count\" ";
                    echo "href=\"javascript:toggle(\'$count\')\">(Read more...)";
                    echo "</a>');toggle( $count );\n--></script>";
                }
                echo "</p>\n</div>\n";
                echo '<div class="horizontalRule"></div>';
                if( $mockup ) echo "</td>";

                $max--; if($max == 0) return;
                $msg="";
             }
            $msg.=" ".$line;
        }
    }
    fclose($file);
}

function shownews_mockup($style,$max) {
    shownews($style,$max,true);
}
?>
