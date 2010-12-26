<?php

/* DB */
require_once '/home/videolan/etc/db-www.php';
if( !($connect = pg_connect( $connect_string )) )
  die( "connection to database failed" );


/* listing categories */
$query_categories  = "SELECT categories.id_cat, categories.name as name, slug, count(skins.id) as count from skins RIGHT OUTER JOIN categories ON skins.category = categories.id_cat  GROUP BY categories.id_cat, categories.name, categories.slug";
$categories        = pg_query($connect,$query_categories);

$categoriesList    = array();
$categoriesOptions = array();
$total_count       = 0;

$b_haveMainCategoryName = false;

while ( $row_categories   = pg_fetch_array($categories) )
{
    if(isset($getCat) && ($getCat==$row_categories['slug'])) $selected = ' selected';
    else $selected = '';

    $total_count += $row_categories['count'];
    $categoriesList[] = '<li><a href="extensions.php?cat='.$row_categories['slug'].'">'.$row_categories['name'].'</a> ('.$row_categories['count'].')</li>';
    $categoriesOptions[] = '<option value="'.$row_categories['slug'].'"'.$selected.'>'.$row_categories['name'].'</option>';
    if(isset($extensionPage) && ($row_categories['id']==$row_extension['category'])) {
        $extensionCategoryName = $row_categories['name'];
        $extensionCategorySlug = $row_categories['slug'];
    }

    /* This is useful to avoid one query to find the Name associated to the requested category */
    if(isset($getCat) && $getCat == $row_categories['slug'] && !$b_haveMainCategoryName) {
        $mainCategoryName = $row_categories['name'];
        $b_haveMainCategoryName = true;
    }

}
pg_close( $connect );
?>

<?php /* Prepare the search form */ ?>
<div>
<form action="extensions.php" method="get">
    <input type="text" name="q" value="<?php if(isset($getQ)) echo htmlentities(urldecode($getQ), ENT_QUOTES); ?>"  />
    <select name="cat">
        <option value=""<?php if(!isset($getCat)) echo ' selected'; ?>>All Categories</option>
        <?php foreach($categoriesOptions as $categoriesOption) {echo $categoriesOption;} ?>
    </select>
    <?php
    if($page!=0)         echo '<input name="page" type="hidden" value="'.$page.'" />';
    if($when!='all')     echo '<input name="when" type="hidden" value="'.$when.'" />';
    if($maxRows!=10)     echo '<input name="maxRows" type="hidden" value="'.$maxRows.'" />';
    if($sort!='add-d')   echo '<input name="sort" type="hidden" value="'.$sort.'" />';
    ?>
    <input type="submit" value="Search" />
</form>
</div>

<?php /* And the categories selection */ ?>
<div>
<h2>Categories</h2>
<ul>
    <li><a href="./extensions.php">All</a> (<?php echo $total_count; ?>)</li>
    <?php foreach($categoriesList as $categoriesIndi) {echo $categoriesIndi;} ?>
</ul>
<div>

