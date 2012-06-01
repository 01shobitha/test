<?php
   $title = "VideoLAN - Statistics";
   $lang = "en";
   $menu = array( "home", "overview" );
   require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

   include($_SERVER["DOCUMENT_ROOT"]."/include/news.php");
?>

<div id="fullwidth">

<h1>Web Statistics</h1>

<?php

$directory = $_SERVER["DOCUMENT_ROOT"]."/private/stats/";
$files = glob($directory . "*");

foreach($files as $file)
{
    if(is_dir($file))
    {
        $handle = str_replace($directory, '', $file);
        if( strlen($handle) == 6)
        {
            $date = new DateTime($handle."01");
            echo "<a href='/private/stats/$handle/'>".$date->format('F Y')."</a><br />\n";
        }
    }
}

?>

<h1>Download statistics</h1>

<p><a href="/stats/downloads.html">View download statistics</a></p>

</div>

<?php footer('$Id: index.php 3321 2005-06-25 13:53:44Z zorglub $'); ?>

