<?php
    $title = "VideoLAN - Download Statistics";
    $lang = "en";
    $menu = array( "vlc", "overview" );
    require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="fullwidth">
    <h1>VLC download statistics</h1>

    <p>These stats were started at the end of february 2005</p>

    <p>We don't show Linux download statistics as most downloads for this 
       OS are made through distributions</p>

    <h1>Downloads by version and by OS</h1>
    <table border="0">
    <tr>
    <th style="text-align: right;">Version</th>
    <th class="os" style="text-align: right;"><img src="/images/icons/winvista.png" alt="Windows" width="32" height="32" />
    </th>
    <th class="os" style="text-align: right;"><img src="/images/icons/macosx.png" alt="Mac OS X" width="32" height="32" />
    </th>
    <th class="os" style="text-align: right;"><img src="/images/icons/source.gif" alt="Source code" width="32" height="32" />
    </th>
    <th style="text-align: right;">Total</th>
    </tr>

    <?php
    require '/home/videolan/etc/db.php';
 
    $connect = pg_connect( $connect_string );
  
    if( !$connect )
    {
	die;
    }

    $requests = array(  "0.7.2" , "0.8.0","0.8.1","0.8.2", "0.8.4", "0.8.5", "0.8.6", "0.9.2" );
    $wintotal = 0;
    $mactotal = 0;
    $srctotal = 0;

    function f( $n )
    {
        echo "<td style='text-align: right;'>".number_format($n,0,"."," ")."</ts>";
    }
    foreach( $requests as $v )
    {
        $versiontotal= 0;
        echo "<tr><td class=\"category\" style=\"text-align: right;\"><strong>$v</strong></td>\n";
	$winrequest = pg_query( $connect, "select sum(number) from (select * from mirrors where file like '%$v%win32%' union select * from mirrors_archive where file like '%$v%win32%') as allmirrors;");
        if( $row  =pg_fetch_array( $winrequest ) )
	{
	    $versiontotal += $row[0];
	    $wintotal += $row[0];
	    f($row[0]);
	}
	$macrequest = pg_query( $connect, "select sum(number) from (select * from mirrors where file like '%$v%dmg%' union select * from mirrors_archive where file like '%$v%dmg%') as allmirrors;" );
        if( $row  =pg_fetch_array( $macrequest ) )
	{
	    $versiontotal += $row[0];
	    $mactotal += $row[0];
	    f($row[0]);
	}
	$srcrequest = pg_query( $connect, "select sum(number) from (select * from mirrors where file like '%$v%tar%' union select * from mirrors_archive where file like '%$v%tar%') as allmirrors;" );
        if( $row  =pg_fetch_array( $srcrequest ) )
	{
	    $versiontotal += $row[0];
	    $srctotal += $row[0];
	    f($row[0]);
	}
	f($versiontotal);
        echo "\n";
    }
    echo "<tr><td class=\"category\" style=\"text-align: right;\"><strong>Total</strong></td>\n";
    f($wintotal);
    f($mactotal);
    f($srctotal);
    echo "<td></td></tr>\n";

    echo "</table>";

    pg_close($connect);
?>

</div>

<?php footer('$Id$'); ?>

