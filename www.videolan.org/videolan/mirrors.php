<?php
   $title = "VideoLAN - Free Software and Open Source video streaming solution for every OS!";
   $lang = "en";
   $body_color = "red";
   $additional_css = array("/style/panels.css", "/style/mirrors.css");
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

   /* Build mirror list */

   $timestamp_tmp = '/tmp/lastmirrorscheck';
   $refresh_min_interval = 30;

   // Sort the list by country
   function sortList($a, $b)
   {
        return strcmp($a['country'], $b['country']);
   }

   // Check the last time we fetched the mirror list
   // to avoid DOSing the server.
   $timestamp = 0;
   $ts = @fopen($timestamp_tmp, 'a+');
   if ($ts)
        $timestamp = fread($ts, 16);

   // Try to fetch the mirrors list
   if (time() - $timestamp > $refresh_min_interval)
   {
           $content = file_get_contents("http://get.videolan.org/mirror-list.php");
           if ($http_response_header[0] == "HTTP/1.1 200 OK")
           {
                $f = fopen("mirrors.txt", 'w');
                if ($f)
                {
                     fwrite($f, date('r')."\n");
                     fwrite($f, $content);
                     fclose($f);
                     if ($ts)
                     {
                        @ftruncate($ts, 0);
                        fwrite($ts, time());
                     }
                }
           }
   }

   if ($ts)
        fclose($ts);

   $mirrors = array();

   // Parse the mirrors list
   $f = fopen("mirrors.txt", 'r');
   if ($f)
   {
        if (!feof($f))
             $update = fgets($f);

        $i = 0;
        while (!feof($f))
        {
             $line = fgets($f);
             if (empty($line))
                 continue;
             list($name, $url, $logo, $region, $country) = explode('|', $line);
             $mirrors[$i]['name'] = $name;
             $mirrors[$i]['url'] = $url;
             $mirrors[$i]['logo'] = $logo;
             $mirrors[$i]['region'] = $region;
             $mirrors[$i]['country'] = $country;
             $i++;
        }
        fclose($f);

        usort($mirrors, 'sortList');
   }

   // Generate the shortcuts
   $country = $shortcuts = "";
   foreach($mirrors as $mirror)
   {
        if ($mirror['country'] != $country)
        {
             $country = $mirror['country'];
             $shortcuts .= "<a href=\"#$country\">$country</a> - ";
        }
   }
   $shortcuts = trim($shortcuts, "- ");

?>


<div>
    <h1 class="bigtitle">Mirrors</h1>

    <div class="projectDescription" style="clear: left;">
        The VideoLAN projects rely on several mirrors distributed<br />
        around the globe in order to provide faster downloads and<br />
        are kindly operated by sponsors.<br/>
        To be part of our mirror infrastructure please <a href="mailto:roots[@]videolan[.]org">contact us</a>.
    </div>

    <div style='clear: both; margin-top: 40px;'>
        <div id="countrylist">
        <?php echo $shortcuts; ?>
        </div>
        <table class="mirrortable">
<?php
        $country = "";
        foreach ($mirrors as $mirror)
        {
             if ($mirror['country'] != $country)
             {
                  $country = $mirror['country'];
                  echo "<tr class=\"heading\"><th colspan=\"2\"><a name=\"$country\"></a>$country</th></tr>";
             }

             echo "<tr><td width=\"100%\"><a href=\"{$mirror['url']}\">{$mirror['name']}</a></td>"
                 ."<td><a href=\"{$mirror['url']}\"><img src=\"{$mirror['logo']}\" /></a></td></tr>";

        }

?>
        </table>
        <div id="generated">Generated on <?php echo $update ?></div>
    </div>
</div>


<?php footer('$Id: mirror.php 1 2013-03-25 14:45:00Z etix $'); ?>
