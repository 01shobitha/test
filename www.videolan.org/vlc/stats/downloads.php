<?php
    $title = "VideoLAN - Download Statistics";
    $lang = "en";
    $menu = array( "vlc", "overview" );
    require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");
?>

<script>
    $(function() {
        var ws = new WebSocket("wss://get.videolan.org/wscounter");
        ws.onmessage = function(event) {
            $('#wscounter').text(event.data);
        };
    });
</script>

<div id="fullwidth">
    <h1>VLC download statistics</h1>

    <p>These stats were started at the end of February 2005 and are likely
       to be inaccurate before this date.</p>

    <p>Stats are updated every day from our download servers.</p>

    <p>We don't show Linux download statistics as most downloads for this
       OS are made through distributions.</p>

    <p align="center" id="wscounter"></p>

<?php    echo "<center><img src='//images.videolan.org/images/events/1billion.png' alt='1 billion downloads' class='' style='box-shadow: 0px 0px 10px 5px #FFF; margin-top: 20px;' /></center>"; ?>

    <h1>Downloads by version and by OS</h1>
    <table border="0">
    <tr>
    <th style="text-align: left; width: 60px;">Version</th>
    <th class="os" style="text-align: right;"><img src="//images.videolan.org/images/icons/winvista.png" alt="Windows" width="32" height="32" />
    </th>
    <th class="os" style="text-align: right;"><img src="/images/icons/macosx.png" alt="Mac OS X" width="32" height="32" />
    </th>
    <th class="os" style="text-align: right;"><img src="/images/icons/source.gif" alt="Source code" width="32" height="32" />
    </th>
    <th style="text-align: right;">Total</th>
    </tr>

<?php
    function f( $n )
    {
        echo "<td style='text-align: right;'>".number_format($n,0,"."," ")."</td>";
    }

    function mirrorbits_fetch($json_url)
    {
       $json_file = file_get_contents($json_url);
       $json = json_decode($json_file);
       if (is_int($json->Total))
       {
               return $json->Total;
       }
       else
       {
               return 0;
       }
    }

    $wintotal = 0;
    $mactotal = 0;
    $srctotal = 0;


    /* Disabled
    $filenamedb = '/home/videolan/etc/db.php';
    if( is_readable( $filenamedb ) ) {
        require '/home/videolan/etc/db.php';

        $connect = pg_connect( $connect_string );

        if( !$connect )
        {
            die;
        }

        $requests = array(  "0.7.2" , "0.8.0","0.8.1","0.8.2", "0.8.4", "0.8.5", "0.8.6", "0.9.2", "0.9.3", "0.9.4", "0.9.5", "0.9.6", "0.9.8a", "0.9.9", "0.9.10", "1.0.0", "1.0.1", "1.0.2", "1.0.3", "1.0.4", "1.0.5", "1.0.6" );
        foreach( $requests as $v )
        {
            $versiontotal= 0;
            echo "<tr><td class=\"category\" style=\"text-align: left;\"><strong>$v</strong></td>\n";
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
        pg_close($connect);
    } */

    /* Those numbers are a dump of the Database above. */
    /* The old system is now retired */

    $table_old = array(
    "0.7.2" =>
    array( "Windows" => 42905,      "Macintosh" => 5386,     "Source" => 15178,  "Total" => 63469),
    "0.8.0" =>
    array( "Windows" => 12739,       "Macintosh" => 1671,     "Source" => 2546,    "Total" => 16956),
    "0.8.1" =>
    array( "Windows" => 2178774,     "Macintosh" => 366097,   "Source" => 90280,   "Total" => 2635151),
    "0.8.2" =>
    array( "Windows" => 12405056,    "Macintosh" => 1935678,  "Source" => 198499,  "Total" => 14539233),
    "0.8.4" =>
    array( "Windows" => 14509992,    "Macintosh" => 2205730,  "Source" => 474451,  "Total" => 17190173),
    "0.8.5" =>
    array( "Windows" => 26809577,    "Macintosh" => 2723985,  "Source" => 191551,  "Total" => 29725113),
    "0.8.6" =>
    array( "Windows" => 108588196,   "Macintosh" => 8527105,  "Source" => 80906,   "Total" => 117196207),
    "0.9.2" =>
    array( "Windows" => 4645080,     "Macintosh" => 461831,   "Source" => 29145,   "Total" => 5136056),
    "0.9.3" =>
    array( "Windows" => 2044,        "Macintosh" => 369725,   "Source" => 52434,   "Total" => 424203),
    "0.9.4" =>
    array( "Windows" => 8063624,     "Macintosh" => 586607,   "Source" => 59302,   "Total" => 8709533),
    "0.9.5" =>
    array( "Windows" => 1311,        "Macintosh" => 653715,   "Source" => 86017,   "Total" => 741043),
    "0.9.6" =>
    array( "Windows" => 8622559,     "Macintosh" => 1229534,  "Source" => 84462,   "Total" => 9936555),
    "0.9.8a" =>
    array( "Windows" => 21710725,    "Macintosh" => 3984011,  "Source" => 225952,  "Total" => 25920688),
    "0.9.9" =>
    array( "Windows" => 25069860,    "Macintosh" => 3508059,  "Source" => 90042,   "Total" => 28667961),
    "0.9.10" =>
    array( "Windows" => 23,          "Macintosh" => 1081660,  "Source" => 30729,   "Total" => 1112412),
    "1.0.0" =>
    array( "Windows" => 12559146,    "Macintosh" => 1612944,  "Source" => 104360,  "Total" => 14276450),
    "1.0.1" =>
    array( "Windows" => 25432756,    "Macintosh" => 2859392,  "Source" => 130132,  "Total" => 28422280),
    "1.0.2" =>
    array( "Windows" => 20454583,    "Macintosh" => 2497472,  "Source" => 85887,   "Total" => 23037942),
    "1.0.3" =>
    array( "Windows" => 46850880,    "Macintosh" => 5339816,  "Source" => 115158,  "Total" => 52305854),
    "1.0.4" =>
    array( "Windows" => 1675,        "Macintosh" => 515,      "Source" => 202487,  "Total" => 204677),
    "1.0.5" =>
    array( "Windows" => 51335602,    "Macintosh" => 7918876,  "Source" => 12675,   "Total" => 59267153),
    "1.0.6" =>
    array( "Windows" => 2334,        "Macintosh" => 138,      "Source" => 2,       "Total" => 2474),
    );


/* Sourceforge Downloads, from the json auth section
      https://sourceforge.net/projects/vlc/files/2.0.4/stats/json?start_date=2010-06-21&end_date=2013-03-30
      https://sourceforge.net/projects/vlc/files/2.0.4/macosx/stats/json?start_date=2010-06-21&end_date=2013-03-30
      https://sourceforge.net/projects/vlc/files/2.0.4/win32/stats/json?start_date=2010-06-21&end_date=2013-03-30 */
    $table_sf = array( "1.1.0"   => array( "Windows" => 15443389,          "Macintosh" => 2546516,             "Total" => 18039555 ),
                    "1.1.1"   => array( "Windows" => 5407572,           "Macintosh" => 539841,              "Total" => 5960536 ),
                    "1.1.2"   => array( "Windows" => 11436970,          "Macintosh" => 1631421,             "Total" => 13108335 ),
                    "1.1.3"   => array( "Windows" => 6678481,           "Macintosh" => 5943649,             "Total" => 12637918 ),
                    "1.1.4"   => array( "Windows" => 49292812,          "Macintosh" => 212793,              "Total" => 49407504 + 220447 ),
                    "1.1.5"   => array( "Windows" => 55535460,          "Macintosh" => 5279877,             "Total" => 60926281 ),
                    "1.1.6"   => array( "Windows" => 9356879,           "Macintosh" => 1489204,             "Total" => 10858731 ),
                    "1.1.7"   => array( "Windows" => 28971011,          "Macintosh" => 3963685,             "Total" => 33005883 ),
                    "1.1.8"   => array( "Windows" => 14915980,          "Macintosh" => 2065589,             "Total" => 16996235 ),
                    "1.1.9"   => array( "Windows" => 33188967,          "Macintosh" => 4070600,             "Total" => 37461402 ),
                    "1.1.10"  => array( "Windows" => 31298711,          "Macintosh" => 1628632 + 2679108,   "Total" => 32986398 + 2679108 ),
                    "1.1.11"  => array( "Windows" => 183467386,         "Macintosh" => 7124700,             "Total" => 190951490),
                    "1.1.12"  => array( "Windows" => 0,                 "Macintosh" => 8899060,             "Total" => 8984524 ),
                    "1.1.13"  => array( "Windows" => 253,               "Macintosh" => 0,                   "Total" => 2696  ),
                    "2.0.0"   => array( "Windows" => 14948886,          "Macintosh" => 2003047,             "Total" => 16969727 ),
                    "2.0.1"   => array( "Windows" => 80685464+33372,    "Macintosh" => 7786101,             "Total" => 88526759 ),
                    "2.0.2"   => array( "Windows" => 45327174+65922,    "Macintosh" => 3058871,             "Total" => 48472263 ),
                    "2.0.3"   => array( "Windows" => 24135052,          "Macintosh" => 7107008,             "Total" => 31313377 ),
                    "2.0.4"   => array( "Windows" => 52270803+160,      "Macintosh" => 5837181,             "Total" => 58222403 ),
                    "2.0.5"   => array( "Windows" => 144276870+1455,    "Macintosh" => 8386017,             "Total" => 153576264),
                    "2.0.6"   => array( "Windows" => 3578397+15773,     "Macintosh" => 112788 ,             "Total" => 3964392  ),
                    "2.0.7"   => array( "Windows" => 1450+583,          "Macintosh" => 129 ,                "Total" => 2514  ),
                    "2.0.8"   => array( "Windows" => 260+110,           "Macintosh" => 39,                  "Total" => 482 ),
                    "2.0.9"   => array( "Windows" => 0,                 "Macintosh" => 88,                  "Total" => 483 ),
                    "2.0.10"  => array( "Windows" => 0,                 "Macintosh" => 0,                   "Total" => 0 ),
                    "2.1.0"   => array( "Windows" => 318+112,           "Macintosh" => 19,                  "Total" => 509  ),
                    "2.1.1"   => array( "Windows" => 126+74,            "Macintosh" => 12,                  "Total" => 236 ),
                    "2.1.2"   => array( "Windows" => 288+129,           "Macintosh" => 23,                  "Total" => 475 ),
                    "2.1.3"   => array( "Windows" => 3767+397,          "Macintosh" => 47,                  "Total" => 4289 ),
                    "2.1.4"   => array( "Windows" => 0+273524,          "Macintosh" => 22347,               "Total" => 367658 ),
                    "2.1.5"   => array( "Windows" => 0,                 "Macintosh" => 0,                   "Total" => 55457 ),
                    "2.1.6"   => array( "Windows" => 0,                 "Macintosh" => 0,                   "Total" => 0 ),
                    "2.2.0"   => array( "Windows" => 0,                 "Macintosh" => 0,                   "Total" => 35957 ),
                    "2.2.1"   => array( "Windows" => 156567+4910,       "Macintosh" => 8632,                "Total" => 236341 ),
                    "2.2.2"   => array( "Windows" => 0,                 "Macintosh" => 0,                   "Total" => 0 ),
    );

    $table = array_merge( $table_old, $table_sf );

    // Values in this array will be fetched from mirrorbits and added to the value in the $table
    $table_mirrorbits = array(
                    "1.1.0"   => array(
                                        "Windows" => "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats",
                                        "Macintosh" => "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats",
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.bz2?stats",
                                 ),
                    "1.1.1"   => array(
                                        "Windows" => "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats",
                                        "Macintosh" => array( "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel64.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel.dmg?stats"),
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.bz2?stats",
                                 ),
                    "1.1.2"   => array(
                                        "Windows" => "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats",
                                        "Macintosh" => array( "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel64.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel.dmg?stats"),
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.bz2?stats",
                                 ),
                    "1.1.3"   => array(
                                        "Windows" => "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats",
                                        "Macintosh" => array( "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel64.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel.dmg?stats"),
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.bz2?stats",
                                 ),
                    "1.1.4"   => array(
                                        "Windows" => "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats",
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.bz2?stats",
                                 ),
                    "1.1.5"   => array(
                                        "Windows" => "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats",
                                        "Macintosh" => array( "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-powerpc.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel64.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel.dmg?stats"),
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.bz2?stats",
                                 ),
                    "1.1.6"   => array(
                                        "Windows" => "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats",
                                        "Macintosh" => array( "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-powerpc.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel64.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel.dmg?stats"),
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.bz2?stats",
                                 ),
                    "1.1.7"   => array(
                                        "Windows" => "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats",
                                        "Macintosh" => array( "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-powerpc.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel64.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel.dmg?stats"),
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.bz2?stats",
                                 ),
                    "1.1.8"   => array(
                                        "Windows" => "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats",
                                        "Macintosh" => array( "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-powerpc.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel64.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel.dmg?stats"),
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.bz2?stats",
                                 ),
                    "1.1.9"   => array(
                                        "Windows" => "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats",
                                        "Macintosh" => array( "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-powerpc.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel64.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel.dmg?stats"),
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.bz2?stats",
                                 ),
                    "1.1.10"  => array(
                                        "Windows" => "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats",
                                        "Macintosh" => array( "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-powerpc.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel64.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel.dmg?stats"),
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.bz2?stats",
                                 ),
                    "1.1.11"  => array(
                                        "Windows" => "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats",
                                        "Macintosh" => array( "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-powerpc.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel64.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel.dmg?stats"),
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.bz2?stats",
                                 ),
                    "1.1.12"  => array(
                                        "Macintosh" => array( "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-powerpc.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel64.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel.dmg?stats"),
                                        "Source" => array( "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.xz?stats", "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.bz2"),
                                 ),
                    "1.1.13"  => array(
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.xz?stats",
                                 ),
                    "2.0.0"   => array(
                                        "Windows" => array( "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats", "https://get.videolan.org/vlc/#version#/win64/vlc-#version#-win64.exe?stats" ),
                                        "Macintosh" => array( "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-powerpc.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel64.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel32.dmg?stats"),
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.xz?stats",
                                 ),
                    "2.0.1"   => array(
                                        "Windows" => array( "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats", "https://get.videolan.org/vlc/#version#/win64/vlc-#version#-win64.exe?stats" ),
                                        "Macintosh" => array( "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-powerpc.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel64.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel32.dmg?stats"),
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.xz?stats",
                                 ),
                    "2.0.2"   => array(
                                        "Windows" => array( "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats", "https://get.videolan.org/vlc/#version#/win64/vlc-#version#-win64.exe?stats" ),
                                        "Macintosh" => array( "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-powerpc.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel64.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel32.dmg?stats"),
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.xz?stats",
                                 ),
                    "2.0.3"   => array(
                                        "Windows" => array( "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats", "https://get.videolan.org/vlc/#version#/win64/vlc-#version#-win64.exe?stats" ),
                                        "Macintosh" => array( "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-powerpc.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel64.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel32.dmg?stats"),
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.xz?stats",
                                 ),
                    "2.0.4"   => array(
                                        "Windows" => array( "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats", "https://get.videolan.org/vlc/#version#/win64/vlc-#version#-win64.exe?stats" ),
                                        "Macintosh" => array( "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-powerpc.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel64.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel32.dmg?stats"),
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.xz?stats",
                                 ),
                    "2.0.5"   => array(
                                        "Windows" => array( "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats", "https://get.videolan.org/vlc/#version#/win64/vlc-#version#-win64.exe?stats" ),
                                        "Macintosh" => array( "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-powerpc.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel64.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel32.dmg?stats"),
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.xz?stats",
                                 ),
                    "2.0.6"   => array(
                                        "Windows" => array( "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats", "https://get.videolan.org/vlc/#version#/win64/vlc-#version#-win64.exe?stats" ),
                                        "Macintosh" => array( "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-powerpc.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel64.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel32.dmg?stats"),
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.xz?stats",
                                 ),
                    "2.0.7"   => array(
                                        "Windows" => array( "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats", "https://get.videolan.org/vlc/#version#/win64/vlc-#version#-win64.exe?stats" ),
                                        "Macintosh" => array( "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-powerpc.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel64.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel32.dmg?stats"),
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.xz?stats",
                                 ),
                    "2.0.8"   => array(
                                        "Windows" => array( "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats", "https://get.videolan.org/vlc/#version#/win64/vlc-#version#-win64.exe?stats" ),
                                        "Macintosh" => array( "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-powerpc.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel64.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel32.dmg?stats"),
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.xz?stats",
                                 ),
                    "2.0.9"   => array(
                                        "Windows" => array( "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats", "https://get.videolan.org/vlc/#version#/win64/vlc-#version#-win64.exe?stats" ),
                                        "Macintosh" => array( "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-powerpc.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel64.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel32.dmg?stats"),
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.xz?stats",
                                 ),
                    "2.0.10"  => array(
                                        "Macintosh" => array( "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-powerpc.dmg?stats", "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#-intel32.dmg?stats"),
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.xz?stats",
                                 ),
                    "2.1.0"   => array(
                                        "Windows" => array( "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats", "https://get.videolan.org/vlc/#version#/win64/vlc-#version#-win64.exe?stats" ),
                                        "Macintosh" => "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats",
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.xz?stats",
                                 ),
                    "2.1.1"   => array(
                                        "Windows" => array( "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats", "https://get.videolan.org/vlc/#version#/win64/vlc-#version#-win64.exe?stats" ),
                                        "Macintosh" => "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats",
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.xz?stats",
                                 ),
                    "2.1.2"   => array(
                                        "Windows" => array( "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats", "https://get.videolan.org/vlc/#version#/win64/vlc-#version#-win64.exe?stats" ),
                                        "Macintosh" => "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats",
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.xz?stats",
                                 ),
                    "2.1.3"   => array(
                                        "Windows" => array( "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats", "https://get.videolan.org/vlc/#version#/win64/vlc-#version#-win64.exe?stats" ),
                                        "Macintosh" => "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats",
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.xz?stats",
                                 ),
                    "2.1.4"   => array(
                                        "Windows" => array( "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats", "https://get.videolan.org/vlc/#version#/win64/vlc-#version#-win64.exe?stats" ),
                                        "Macintosh" => "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats",
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.xz?stats",
                                 ),
                    "2.1.5"   => array(
                                        "Windows" => array( "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats", "https://get.videolan.org/vlc/#version#/win64/vlc-#version#-win64.exe?stats" ),
                                        "Macintosh" => "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats",
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.xz?stats",
                                 ),
                    "2.1.6"   => array(
                                        "Windows" => array( "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats", "https://get.videolan.org/vlc/#version#/win64/vlc-#version#-win64.exe?stats" ),
                                        "Macintosh" => "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats",
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.xz?stats",
                                 ),
                    "2.2.0"   => array(
                                        "Windows" => array( "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats", "https://get.videolan.org/vlc/#version#/win64/vlc-#version#-win64.exe?stats" ),
                                        "Macintosh" => "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats",
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.xz?stats",
                                 ),
                    "2.2.1"   => array(
                                        "Windows" => array( "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats", "https://get.videolan.org/vlc/#version#/win64/vlc-#version#-win64.exe?stats" ),
                                        "Macintosh" => "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats",
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.xz?stats",
                                 ),
                    "2.2.2"   => array(
                                        "Windows" => array( "https://get.videolan.org/vlc/#version#/win32/vlc-#version#-win32.exe?stats", "https://get.videolan.org/vlc/#version#/win64/vlc-#version#-win64.exe?stats" ),
                                        "Macintosh" => "https://get.videolan.org/vlc/#version#/macosx/vlc-#version#.dmg?stats",
                                        "Source" => "https://get.videolan.org/vlc/#version#/vlc-#version#.tar.xz?stats",
                                 ),
    );

    foreach( $table as $key => $t )
    {
        echo "<tr><td class=\"category\" style=\"text-align: left;\"><strong>$key</strong></td>\n";

       // <Mirrorbits>
       if (array_key_exists($key, $table_mirrorbits))
       {
               $platforms = array("Windows", "Macintosh", "Source");
               foreach($platforms as $platform)
               {
                       if (array_key_exists($platform, $table_mirrorbits[$key]))
                       {
                               $value = 0;
                               if (is_array($table_mirrorbits[$key][$platform]))
                               {
                                       foreach($table_mirrorbits[$key][$platform] as $url)
                                       {
                                               $final = str_replace("#version#", $key, $url);
                                               $value += mirrorbits_fetch($final);
                                       }
                               }
                               else
                               {
                                       $final = str_replace("#version#", $key, $table_mirrorbits[$key][$platform]);
                                       $value += mirrorbits_fetch($final);
                               }

                               if ($platform == "Windows" || $platform == "Macintosh")
                               {
                                       $t[$platform] += $value;
                               }

                               // Historically "source" is computed from the total - windows - mac
                               $t["Total"] += $value;
                       }
               }
       }
       // </Mirrorbits>

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
<tr><td class=\"category\" style=\"text-align: left;\"><strong>Total</strong></td>\n";
    f($wintotal);
    f($mactotal);
    f($srctotal);
    f($maxtotal);
    echo "</tr>\n";

    echo "</table>";


    date_default_timezone_set('Europe/Paris');
    echo "<p>Page generated on ".date("r").".</p>";
?>

</div>

<?php footer('$Id$'); ?>

