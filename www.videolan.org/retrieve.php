<?php header('Content-Type: text/xml');
    echo "<?xml version=\"1.0\"?>";
    /* Open data */
    $lines = file( "/var/www/local/www.videolan.org/counter.data" );

    if( $lines == FALSE )
    {
   	die;
    }
    $new = explode( " ",rtrim( $lines[1] ), 2 );
    $old = explode( " ",rtrim( $lines[0] ), 2 ) ; 
    $now = date ("U" );
    
    $rate = ($new[1] - $old[1] ) / ( $new[0] - $old[0] ) ;
    $delay = $now - $new[0] ;

    echo "<counter><count>".$new[1]."</count>";
    echo "<rate>".sprintf( "%.1f" , $rate )."</rate>";
    echo "<delay>".$delay."</delay>";
    echo "</counter>";
    
?>
