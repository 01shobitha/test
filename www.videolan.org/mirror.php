<?php
   require '/home/videolan/etc/db.php';
   $mirror = $_GET["mirror"];
   $file = $_GET["file"];


   if( !isset($file) ) { die; }
  
   # Pick up a random mirror  
   if( !isset( $mirror ) )
   {
	$listfile = $_SERVER["DOCUMENT_ROOT"]."/include/mirrors";
        $file_id = fopen( $listfile , "r" );
        $all = fread( $file_id, filesize( $listfile ) );
        fclose( $file_id );
        $mirrors = explode( "\n", $all );
        array_pop( $mirrors );

	while( !isset( $mirror ) )
        {
	     $index = rand( 0, sizeof( $mirrors ) - 1 );
	     if( substr( $mirrors[ $index] , 0, 1 ) == "#" ) continue;
             $esp = strpos( $mirrors[ $index] , " " );
	     $mirror = substr( $mirrors[ $index ], 0, $esp );
	}
   }
?>
<html>
 <head>
  <title>VideoLAN - Download from mirror</title>
  <meta http-equiv="refresh" content="0; url=<?php echo $mirror.$file ?>" />
 </head>
 <body>
  <p>Click <a href="<?php echo $mirror.$file ?>">here</a> if your download doesn't start</p>
  <p>If you want to put a direct download link on your website, please use <?php echo "http://www.videolan.org/mirror.php?file=$file.<br />Please don't use a direct link. This script allows us to distribute the network load across our mirrors. Thanks."; ?> </p>
 </body>
</html>

<?php
    /* Load saved data */
    $connect = pg_connect( $connect_string );
  
    if( !$connect )
    {
	die;
    }

    $now = localtime(time(),true);
    if( $now['tm_hour'] < 6 || ($now['tm_hour'] == 6 && $now['tm_hour'] <= 25 ) )
    {
	$now = localtime( time() - 86400,true );
    }
    $d = $now['tm_mday'];
    $m = $now['tm_mon'];
    $y = $now['tm_year'];

    $y += 1900;
    $m++;
    if( $m < 10 ) { $m=sprintf("%02d", $m); }
    if( $d < 10 ) { $d = sprintf( "%02d", $d ); }

    $request = pg_query($connect, "SELECT * FROM mirrors ".
                                   "WHERE address='$mirror' AND file='$file' AND date='$y-$m-$d'"); 
 
    $done = 0;
    if( $row = pg_fetch_array($request) )
    {	
        pg_query($connect, "UPDATE mirrors SET number=number+1 WHERE address='$mirror' AND file='$file' AND date='$y-$m-$d'"); 
    }
    else
    {
	pg_query($connect, "INSERT INTO mirrors (address, file, number,date)".
	                    "VALUES ('" . $mirror . "', '" . $file . "', 1,".
			    "'$y-$m-$d')");
    }
    pg_close($connect);
?>
