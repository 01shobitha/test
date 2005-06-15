<?php
   require '/home/videolan/etc/db.php';
   $mirror = $_GET["mirror"];
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
    /* Load saved data */
    $connect = pg_connect( $connect_string );
  
    if( !$connect )
    {
	die;
    }
    
    $request = pg_query($connect, "SELECT * FROM mirrors ".
                                   "WHERE address='$mirror' AND file='$file' AND date=current_date"); 
 
    $done = 0;
    if( $row = pg_fetch_array($request) )
    {
        pg_query($connect, "UPDATE mirrors SET number=number+1 WHERE address='$mirror' AND file='$file' AND date=current_date"); 
    }
    else
    {
	pg_query($connect, "INSERT INTO mirrors (address, file, number,date)".
	                    "VALUES ('" . $mirror . "', '" . $file . "', 1,".
			    "current_date)");
    }
    pg_close($connect);
?>
