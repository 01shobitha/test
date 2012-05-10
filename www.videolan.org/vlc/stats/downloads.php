<?php
    $title = "VideoLAN - Download Statistics";
    $lang = "en";
    $menu = array( "vlc", "overview" );
    require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<div id="fullwidth">
    <h1>VLC download statistics</h1>

    <p>These stats were started at the end of February 2005 and are likely
       to be inaccurate.</p>

    <p>Stats are updated every few days.</p>

    <p>We don't show Linux download statistics as most downloads for this
       OS are made through distributions.</p>

<?php    echo "<center><img src='//images1.videolan.org/images/events/1billion.png' alt='1 billion downloads' class='' style='box-shadow: 0px 0px 10px 5px #FFF;' /></center>"; ?>

    <h1>Downloads by version and by OS</h1>
    <table border="0">
    <tr>
    <th style="text-align: right;">Version</th>
    <th class="os" style="text-align: right;"><img src="http://images.videolan.org/images/icons/winvista.png" alt="Windows" width="32" height="32" />
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

    $requests = array(  "0.7.2" , "0.8.0","0.8.1","0.8.2", "0.8.4", "0.8.5", "0.8.6", "0.9.2", "0.9.3", "0.9.4", "0.9.5", "0.9.6", "0.9.8a", "0.9.9", "0.9.10", "1.0.0", "1.0.1", "1.0.2", "1.0.3", "1.0.4", "1.0.5", "1.0.6" );
    $wintotal = 0;
    $mactotal = 0;
    $srctotal = 0;

    function f( $n )
    {
        echo "<td style='text-align: right;'>".number_format($n,0,"."," ")."</td>";
    }
    foreach( $requests as $v )
    {
        $versiontotal= 0;
        echo "<tr><td class=\"category\" style=\"text-align: right;\"><strong>$v</strong></td>\n";
        $winrequest = pg_query( $connect, "select sum(number) from (select * from mirrors where file like '%$v%win32%' union all select * from mirrors_archive where file like '%$v%win32%') as allmirrors;");
        if( $row  =pg_fetch_array( $winrequest ) )
        {
            $versiontotal += $row[0];
            $wintotal += $row[0];
            f($row[0]);
        }
        $macrequest = pg_query( $connect, "select sum(number) from (select * from mirrors where file like '%$v%dmg%' union all select * from mirrors_archive where file like '%$v%dmg%') as allmirrors;" );
        if( $row  =pg_fetch_array( $macrequest ) )
        {
            $versiontotal += $row[0];
            $mactotal += $row[0];
            f($row[0]);
        }
        $srcrequest = pg_query( $connect, "select sum(number) from (select * from mirrors where file like '%$v%tar%' union all select * from mirrors_archive where file like '%$v%tar%') as allmirrors;" );
        if( $row  =pg_fetch_array( $srcrequest ) )
        {
            $versiontotal += $row[0];
            $srctotal += $row[0];
            f($row[0]);
        }
        f($versiontotal);
        echo "</tr>\n";
    }

    /* Sourceforge Downloads, from the json auth section
        https://sourceforge.net/projects/vlc/files/1.1.0/win32/stats/json?start_date=2010-06-21&end_date=2012-12-30
        https://sourceforge.net/projects/vlc/files/1.1.0/macosx/stats/json?start_date=2010-06-21&end_date=2012-12-30
        https://sourceforge.net/projects/vlc/files/1.1.0/json?start_date=2010-06-21&end_date=2012-12-30 */
    $table = array( "1.1.0"   => array( "Windows" => 15352734, "Macintosh" => 2538263, "Total" => 17940200 ),
                    "1.1.1"   => array( "Windows" => 5396669 , "Macintosh" => 536578 , "Total" => 5946075 ),
                    "1.1.2"   => array( "Windows" => 11420722, "Macintosh" => 1630259, "Total" => 13089561 ),
                    "1.1.3"   => array( "Windows" => 6606436,  "Macintosh" => 5940497, "Total" => 12561243 ),
                    "1.1.4"   => array( "Windows" => 48708500, "Macintosh" => 212793,  "Total" => 48819569 + 220447 ),
                    "1.1.5"   => array( "Windows" => 55022112, "Macintosh" => 5276078, "Total" => 60408042 ),
                    "1.1.6"   => array( "Windows" => 9346195,  "Macintosh" => 1488555, "Total" => 10846854 ),
                    "1.1.7"   => array( "Windows" => 28829751, "Macintosh" => 3956196, "Total" => 32855945 ),
                    "1.1.8"   => array( "Windows" => 14805029, "Macintosh" => 2064280, "Total" => 16883848 ),
                    "1.1.9"   => array( "Windows" => 33103808, "Macintosh" => 4045759, "Total" => 37350178 ),
                    "1.1.10"  => array( "Windows" => 31185756, "Macintosh" => 1627838 + 2679108, "Total" => 32872363 + 2679108 ),
                    "1.1.11"  => array( "Windows" => 181422477,"Macintosh" => 7084265, "Total" => 188865441),
                    "1.1.12"  => array( "Windows" => 0        ,"Macintosh" => 8870000, "Total" => 8952539  ),
                    "1.1.13"  => array( "Windows" => 0        ,"Macintosh" => 0, "Total" => 598  ),
                    "2.0.0"   => array( "Windows" => 14411719 ,"Macintosh" => 1935724, "Total" => 16364533 ),
                    "2.0.1"   => array( "Windows" => 50333816 ,"Macintosh" => 5258075, "Total" => 55619021 ),
    );

    foreach( $table as $key => $t )
    {
        echo "<tr><td class=\"category\" style=\"text-align: right;\"><strong>$key</strong></td>\n";
        $wintotal += $t["Windows"];
        $mactotal += $t["Macintosh"];
        $srctotal += ( $t["Total"] - $t["Windows"] - $t["Macintosh"] );
        f($t["Windows"]);
        f($t["Macintosh"]);
        f($t["Total"] - $t["Windows"] - $t["Macintosh"]);
        f($t["Total"]);
        echo "</tr>\n";
    }

    $maxtotal = $wintotal + $mactotal + $srctotal;
    echo "
<tr><td> &nbsp;</td></tr>
<tr><td class=\"category\" style=\"text-align: right;\"><strong>Total</strong></td>\n";
    f($wintotal);
    f($mactotal);
    f($srctotal);
    f($maxtotal);
    echo "</tr>\n";

    echo "</table>";

    pg_close($connect);

    echo "<p>Page generated on ".date("r").".</p>";
?>

</div>

<?php footer('$Id$'); ?>

