<?php

/* Main header */
$title = "VLC media player - Extensions";
$lang  = "en";
require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

require('functions.php.inc');

getVariable('q','cat','sort','maxRows','page','when');

if(isset($getMaxRows) && is_numeric($getMaxRows) && ($getMaxRows>0)) $maxRows = $getMaxRows; else $maxRows = 20;
if(isset($getPage) && is_numeric($getPage) && ($getPage>0)) $page = $getPage; else $page = 0;

if(in_array($getSort, array('add-a','rev-d','rev-a','rat-d','rat-a','dwn-d','dwn-a'))) $sort = $getSort; else $sort = 'add-d';

/*if(in_array($getWhen, array('tody','week','month','year'))) $when = $getWhen; else $when = 'all';

switch($when) {
    case 'tday':
        $whenDiff = date('Y-m-d H:i:s', time()-(24*60*60));
    break;
    case 'week':
        $whenDiff = date('Y-m-d H:i:s', time()-(7*24*60*60));
    break;
    case 'month':
        $whenDiff = date('Y-m-d H:i:s', time()-(31*7*24*60*60));
    break;
    case 'year':
        $whenDiff = date('Y-m-d H:i:s', time()-(365*30*7*24*60*60));
    break;
    case 'all':
        $whenDiff = 0;
    break;
}*/

require('ext_headers.php.inc');

if(isset($getQ)) {
    $query_index = ' WHERE name LIKE '.GetSQLValueString('%'.$getQ.'%', "text");
    if(isset($getCat))
        $query_index = " AND categories.slug =%s".GetSQLValueString($getCat, "text");
    $h1title = "Search Result: <em>".htmlentities(urldecode($getQ), ENT_QUOTES).'</em>';
}
elseif(isset($getCat)) {
    $select_category = " WHERE categories.slug = %s".GetSQLValueString($getCat, "text");
    $h1title = $mainCategoryName;
}

if( !isset($h1title) )
    $h1title = "Extensions";

echo "<h1>VLC $h1title</h1>";


?>

