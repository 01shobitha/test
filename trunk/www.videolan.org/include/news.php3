<?
  $title = "VideoLAN news";
  $keywords = "VideoLAN, MPEG2, DVD, VIA, Ecole Centrale, Informatique, Association, Etudiants";
  $description = "";

/*
 * C'est assez mal écrit mais ça montre la page de news
 * je réécris dès que j'ai le temps ....
 * -- 
 * henri
 * 
 * $style: soit "full", soit "title"
 * $max: nombre maximal à afficher, 0 s'il les faut toutes
 * 
 */
  function shownews($style,$max) {
    $file=fopen("news.msg","r");

    if(!$file)
      return(0);

    while( !feof($file) )
    {
        $line=ereg_replace("\n","",fgets($file,4096));

        //On autorise les commentaires
        if( !ereg("^ *#",$line) && !ereg("^ *$",$line) )
        {
            // Les débuts de topic doivent IMPERATIVEMENT commencer
            // par "|" au début de ligne
            if( ereg("^ *[|§]",$line) )
            {
                // C'est une nouvelle neuve
                if( $msg ) 
                {
                    $ex=explode("|",$msg);

                    if( $date==$ex[1] ) $number++; else $number=0;

                    if( ereg("^ *§",$msg) ) 
                    { 
                        $important=1; 
                        $anchor=ereg_replace("§","",ereg_replace(" ","_",$ex[0])."_".$number);
                    }
                    else 
                    {
                        $important=0;
                        $anchor=ereg_replace(" ","_",$ex[1])."_".$number;
                    }

                    if ( $important ) 
                    {
                        $date = ereg_replace("§","",$ex[0]);
                        $title = ereg_replace("$","",$ex[1]);
                        $text = $ex[2];
                    }
                    else 
                    {
                        $date = $ex[1];
                        $title = $ex[2];
                        $text = $ex[3];
                    }

                    if( $style == "full" )
                    {
                        $date = "<a name=\"".$anchor."\">".$date."</a>";
                        echo ("<p><b>".$title."</b> (".$date.")\n");
                        echo $text;
                        echo ("</p>\n");
                    }
                    elseif( $style == "title" )
                    {
                        echo "<b><a href=\"#".$anchor."\">".$title."</a></b> (".$date.")";
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
