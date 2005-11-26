<?php
    require '/home/videolan/etc/db.php';

    /* Open the current */
    $lines = file( "/var/www/local/www.videolan.org/counter.data" );

    if( $lines == FALSE )
    {
        $old = "0 0\n";
    }
    else
    {
        $old = $lines[1];
    }
    
    /* Retrieve new data */ 
    $connect = pg_connect( $connect_string );
    if( !$connect )
    {
	die;
    }
    
    $request = pg_query($connect, "SELECT sum(number) FROM mirrors WHERE file like '%0.8.4%'" );
    if( $row = pg_fetch_array($request) )
    {
        $new = date( "U" )." ".$row[0]."\n";
    }
    pg_close($connect);

    /* Write data */
    $file = fopen( "/var/www/local/www.videolan.org/counter.data", "w" );
    fwrite( $file, $old );
    fwrite( $file, $new );
?>
