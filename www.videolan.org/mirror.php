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
 </body>
</html>

<?php
    $sfile = $_SERVER["DOCUMENT_ROOT"]."mirror_stats";
    
    /* Load saved data */
    $connect = pg_pconnect("dbname=stats-videolan user=videolan password=VcD1bdBa");
   
    $request = pg_query($connect, "SELECT * FROM mirrors"); 
    
    $done = 0;
    while ($row = pg_fetch_array($request))
    {
        if( $row[1] == $mirror && $row[2] == $file )
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
	$inser = pg_query($connect, "INSERT INTO mirrors (address, file, number) VALUES ('" . $mirror . "', '" . $file . "', 1)");
    } else {
        $inser = pg_query($connect, "UPDATE mirrors SET number = " . $nombre++ . " WHERE id = " . $id); 
    }
?>
