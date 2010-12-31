<?php

/* Main header */
$title = "VLC media player - Extensions";
$lang  = "en";
require($_SERVER["DOCUMENT_ROOT"]."/include/header.php");

require_once('functions.php.inc');

/* Get params */
getVariable('q','cat','sort','maxRows','page'/*,'when'*/);

if(isset($getMaxRows) && is_numeric($getMaxRows) && ($getMaxRows>0)) $maxRows = $getMaxRows; else $maxRows = 20;
if(isset($getPage) && is_numeric($getPage) && ($getPage>0)) $page = $getPage; else $page = 1;
if(isset($getSort) && in_array($getSort, array('added','review','rating','down','name'))) $sort = $getSort; else $sort = '';

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
if(isset($getQ)) {
    $query_suffix = 'WHERE skins.name LIKE '.GetSQLValueString('%'.$getQ.'%', "text");
    $h1title = "Search Result: <em>".htmlentities(urldecode($getQ), ENT_QUOTES).'</em>';
    $url_pre = addArg($url_pre, 'q', $getQ);
    if(isset($getCat)) {
        $query_suffix .= " AND category = $mainCategoryId";
        $url_pre = addArg($url_pre, 'cat', $getCat);
    }
}
elseif(isset($getCat)) {
    $query_suffix = "WHERE category = $mainCategoryId";
    $h1title = $mainCategoryName; 
    addArg($url_pre, 'cat', $getCat);
}

if( !isset($h1title) )
    $h1title = "Extensions";


/* Actual start of the content */
echo "<h1>VLC $h1title</h1>";
echo "<div class='sort'>";
echo "Sort by: <a href='".addArg($url_pre, 'sort', 'name')."'>Name</a> <a href='".addArg($url_pre, 'sort', 'added')."'>Creation</a> ";
echo "<a href='".addArg($url_pre, 'sort', 'down')."'>Downloads</a> <a href='".addArg($url_pre, 'sort', 'rating')."'>Rating</a> ";
echo "<a href='".addArg($url_pre, 'sort', 'review')."'>Reviews</a>";
echo "</div>";

/* Query building */
$query_ext = 'SELECT AVG(rating) as avg, COUNT(rating) as count, COUNT(extension_id) as review_nb, skins.id as id, skins.name, author, downloads, date_added, date_modified, image, skins.url, min_version, size FROM skins INNER JOIN "skins-rating" ON skins.id="skins-rating".skin_id LEFT OUTER JOIN reviews ON extension_id=skins.id ';
$query_ext .= $query_suffix." ";
$query_ext .= 'GROUP BY skins.id, skins.name, skins.author, skins.downloads, skins.date_added, skins.date_modified, skins.image, skins.url, skins.min_version, skins.size ';

/* Order by */
switch($sort) {
   case 'added': $query_sort="skins.date_added"; break;
   case 'review': $query_sort="review_nb"; break;
   case 'rating': $query_sort="avg"; break;
   case 'down': $query_sort="skins.downloads"; break;
   case 'name': $query_sort="skins.name"; break;
   default: $query_sort="avg"; break;
}
$query_ext .= "ORDER BY $query_sort ";

if(!empty($sort))
    $url_pre = addArg($url_pre, 'sort', $sort);

/* Query Pagination */
$first_row   = ($page - 1) * $maxRows + 1;
$query_limit = "OFFSET $first_row LIMIT $maxRows";
$query_ext  .= $query_limit;

/* Run the query */
$extensions  = pg_query($connect,$query_ext);
echo $query_ext."<br />";

/* Display the extensions */
$count=0;
while ( $row_extensions   = pg_fetch_array($extensions) ) {
    echo $row_extensions['name']."<br/>\n";
    $count++;
}
pg_close( $connect );

/* Pagination */
echo '<div class="pages">';
if( $page > 1 )  echo "<a href='".addArg($url_pre,"page",$page-1)."'>Previous Page</a>";
if( $count == $maxRows ) echo "<a href='".addArg($url_pre,"page",$page+1)."'>Next Page</a>";
echo '</div>';

?>
