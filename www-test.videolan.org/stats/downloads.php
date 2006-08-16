<?php
    $title = "VideoLAN - Download Statistics";
    $lang = "en";
    $date = "06 April 2002";
    $menu = array( "home", "overview" );
    require($_SERVER["DOCUMENT_ROOT"]."/include/header.php3");
?>

<div id="fullwidth">

    <p>These stats were started at the end of february 2005</p>

    <p>We don't show Linux download statistics as most downloads for this 
       OS are made through distributions</p>

    <h1>Downloads by version and by OS</h1>
    <table border="0">
    <tr>
    <th>Version</th>
    <th class="os"><img src="/images/icons/windows.gif" alt="Windows" width="32" height="32" />
    </th>
    <th class="os"><img src="/images/icons/macosx.gif" alt="Mac OS X" width="32" height="32" />
    </th>
    <th class="os"><img src="/images/icons/source.gif" alt="Source code" width="32" height="32" />
    </th>
    </tr>

    <?php
    require '/home/videolan/etc/db.php';
 
    $connect = pg_connect( $connect_string );
  
    if( !$connect )
    {
	die;
    }

    $requests = array(  "0.7.2" , "0.8.0","0.8.1","0.8.2", "0.8.4", "0.8.5" );
    $wintotal = 0;
    $mactotal = 0;
    $srctotal = 0;
    foreach( $requests as $v )
    {
        $versiontotal= 0;
        echo "<tr><td class=\"category\"><strong>$v</strong></td>\n";
	$winrequest = pg_query( $connect, "SELECT sum(number) FROM mirrors
		WHERE file LIKE '%$v%win32%'" );
        if( $row  =pg_fetch_array( $winrequest ) )
	{
	    $versiontotal += $row[0];
	    $wintotal += $row[0];
	    echo "<td class=\"yes\">".$row[0]."</td>";
	}
	$macrequest = pg_query( $connect, "SELECT sum(number) FROM mirrors
		WHERE file LIKE '%$v%dmg%'" );
        if( $row  =pg_fetch_array( $macrequest ) )
	{
	    $versiontotal += $row[0];
	    $mactotal += $row[0];
	    echo "<td class=\"yes\">".$row[0]."</td>";
	}
	$srcrequest = pg_query( $connect, "SELECT sum(number) FROM mirrors
		WHERE file LIKE '%$v%tar%'" );
        if( $row  =pg_fetch_array( $srcrequest ) )
	{
	    $versiontotal += $row[0];
	    $srctotal += $row[0];
	    echo "<td class=\"yes\">".$row[0]."</td>";
	}
	echo "<td class=\"yes\">".$versiontotal."</td></tr>\n";
    }
    echo "<tr><td class=\"category\"><strong>Total</strong></td>\n";
    echo "<td class=\"yes\">".$wintotal."</td>";
    echo "<td class=\"yes\">".$mactotal."</td>";
    echo "<td class=\"yes\">".$srctotal."</td></tr>\n";

    echo "</table>";

    pg_close($connect);
?>

</div>

<?php footer('$Id$'); ?>

