<?

function pkgitem($version,$name,$top)
{ ?>
  <li><a href="http://download.videolan.org/pub/videolan/<? echo $top."/".$version."/".$name; ?>"><code><? echo $name; ?></code></a>
<? 
    $file = $_SERVER["DOCUMENT_ROOT"]."/include/mirrors";
    $file_id = fopen( $file , "r" );
    $all = fread( $file_id, filesize( $file ) );
    fclose( $file_id );
    $mirrors = explode( "\n", $all );    

    array_pop($mirrors);

    foreach( $mirrors as $mirror )
    {
	$esp = strpos( $mirror, " " );
	$url = substr( $mirror, 0, $esp );
	$mirror_name = substr( $mirror, $esp, strlen( $mirror ) - $esp );
	echo " [<a href=\"http://www.videolan.org/mirror.html?mirror=$url&file=$top/$version/$name\">Download from $mirror_name</a>]\n "; 
    }
?>
</li><?
 }
 ?>

