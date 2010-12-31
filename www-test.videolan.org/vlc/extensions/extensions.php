<?php

/* Main header */
$title = "VLC media player - Extensions";
$lang  = "en";
require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

require('functions.php.inc');

/* Get params */
getVariable('q','cat','sort','maxRows','page'/*,'when'*/);

if(isset($getMaxRows) && is_numeric($getMaxRows) && ($getMaxRows>0)) $maxRows = $getMaxRows; else $maxRows = 20;
if(isset($getPage) && is_numeric($getPage) && ($getPage>0)) $page = $getPage; else $page = 1;
if(isset($getSort) && in_array($getSort, array('add-a','rev-d','rev-a','rat-d','rat-a','dwn-d','dwn-a'))) $sort = $getSort; else $sort = 'add-d';

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

echo "<h1>VLC addons</h1>";
require('ext_headers.php.inc');

/* Narrowing query with search and category */
$url_pre="extensions.php";
if(isset($getQ)) {
    $query_suffix = ' WHERE skins.name LIKE '.GetSQLValueString('%'.$getQ.'%', "text");
    $h1title = "Search Result: <em>".htmlentities(urldecode($getQ), ENT_QUOTES).'</em>';
    $url_pre.="?q=$getQ";
    if(isset($getCat)) {
        $query_suffix = " AND category = $mainCategoryId";
        $url_pre.="&cat=$getCat";
    }
}
elseif(isset($getCat)) {
    $query_suffix = " WHERE category = $mainCategoryId";
    $h1title = $mainCategoryName; 
    $url_pre.="?cat=$getCat";
}

if( !isset($h1title) )
    $h1title = "Extensions";

/* Actual start of the content */
echo "<h1>VLC $h1title</h1>";
echo "<div class='sort'>";
echo 'Sort by: <a href="">Name</a> <a href="">Creation</a> <a href="">Downloads</a> <a href="">Rating</a> <a href="">Reviews</a>';
echo "</div>";

$query_ext = 'SELECT AVG(rating) as avg, COUNT(rating) as count, COUNT(extension_id) as review_nb, skins.id as id, skins.name, author, downloads, date_added, date_modified, image, skins.url, min_version, size FROM skins INNER JOIN "skins-rating" ON skins.id="skins-rating".skin_id LEFT OUTER JOIN reviews ON extension_id=skins.id';

$query_ext .= $query_suffix;
$query_ext .= ' GROUP BY skins.id, skins.name, skins.author, skins.downloads, skins.date_added, skins.date_modified, skins.image, skins.url, skins.min_version, skins.size';


$first_row   = ($page - 1) * $maxRows + 1;
$query_limit = " OFFSET $first_row LIMIT $maxRows";
$query_ext  .= $query_limit;

echo $query_ext."<br />";
$extensions  = pg_query($connect,$query_ext);

$count=0;
while ( $row_extensions   = pg_fetch_array($extensions) )
{
        echo $row_extensions['name']."<br/>\n";
        $count++;
}
pg_close( $connect );

echo '<div class="pages">';
if( $page > 1 )  echo "<a href='$url_pre&page=".($page-1)."'>Previous Page</a>";
if( $count = $maxRows ) echo "<a href='$url_pre&page=".($page+1)."'>Next Page</a>";
echo '</div>';

?>

