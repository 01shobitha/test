<?php $mirror = $_GET["mirror"];
   $file = $_GET["file"];
   if( !isset($mirror) || !isset($file) ) { die; } ?>
<html>
 <head>
  <title>VideoLAN - Download from mirror</title>
  <meta http-equiv="refresh" content="0; url=<?php echo $mirror.$file ?>" />
 </head>
 <body>
  <p>Click <a href="<?php echo $mirror.$file ?>">here</a> if your download doesn't start</p>
</html>

<?php

    $sfile = $_SERVER["DOCUMENT_ROOT"]."mirror_stats";
    
    /* Load saved data */
    $connect = pg_connect("dbname=stats-videolan user=videolan password=VcD1bdBa");
   
    $request = pg_query($connect, "select * from mirrors"); 
    
    $done = 0;
    while ($row = pg_fetch_array($request, 0, PGSQL_NUM)
    {
        if( strstr($row[1],$mirror) != FALSE && strstr($row[2],$file) != FALSE )
        {
            $done = 1;
            $nombre = $row[3];
            $id = $row[0];
            break;
        }
    }

/*save data into database mirrors*/
    if( $done == 0 )
    {
	$inser = pg_query($connect, "INSERT INTO mirrors VALUES '" . $mirror . "', '" . $file . "', 1");
    } else {
        $inser = pg_query($connect, "UPDATE mirrors SET number = " . $nombre++ . " WHERE id = " . $id); 
    }
    pgclose($connect);
?>
