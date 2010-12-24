<?php

getVariable('q','cat','sort','maxRows','page','when');

if(isset($getMaxRows) && is_numeric($getMaxRows) && ($getMaxRows>0)) $maxRows = $getMaxRows; else $maxRows = 10;
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

require('./header.php');

/*
if(isset($getCat)) {
	mysql_select_db($database_foo, $foo);
	$query_category = sprintf("SELECT * FROM `categories` WHERE slug = %s", GetSQLValueString($getCat, "text"));
	$category = mysql_query($query_category, $foo) or die(mysql_error());
	$row_category = mysql_fetch_assoc($category);
}

if(isset($getCat) && !isset($getQ)) {
	$query_index = " WHERE category = ".GetSQLValueString($row_category['id'], "int"); ?>
	
	<h1><?php echo $row_category['name']; ?></h1>
	<div><a href="./extensions.php">Home</a> &raquo; <?php echo $row_category['name']; ?></div><br />

<?php } elseif(isset($getQ)) {
	$query_index = ' WHERE name LIKE '.GetSQLValueString('%'.$getQ.'%', "text");
	if(isset($getCat)) $query_index .= " AND category = ".GetSQLValueString($row_category['id'], "int"); ?>

	<h1>Extension Search</h1>
	<div>
		<a href="./extensions.php">Home</a> &raquo; Search:
		<?php
			if(isset($getQ)) echo '<em>'.htmlentities(urldecode($getQ), ENT_QUOTES).'</em>';
			if(isset($getCat)) echo ' in <a href="./extensions.php?cat='.$row_category['slug'].'">'.$row_category['name'].'</a>';
		?>
	</div><br />
	
<?php } else echo '<h1>Extensions</h1>';

mysql_select_db($database_foo, $foo);
$query_index = 'SELECT * FROM `extensions`'.$query_index;
$index = mysql_query($query_index, $foo) or die(mysql_error());
$row_index = mysql_fetch_assoc($index);
$tGotalRows_index = mysql_num_rows($index);

$x=1;
do{
	$extensionsId .= 'id = '.$row_index['id'];
	$extensionsExtension .= 'extension = '.$row_index['id'];
	$extensionsExtension_id .= 'extension_id = '.$row_index['id'];
	$extList[] = $row_index['id'];
	if($x<$totalRows_index) {
		$extensionsId .= ' OR ';
		$extensionsExtension .= ' OR ';
		$extensionsExtension_id .= ' OR ';
	}
	$x=++$x;
} while($row_index = mysql_fetch_assoc($index));

if(($sort=='add-d') || ($sort=='add-a')) {
	
	$query_index = 'SELECT id as count FROM `extensions` WHERE '.$extensionsId.' ORDER BY date_added ';
	if($sort=='add-d') $query_index .= 'DESC';
	elseif($sort=='add-a') $query_index .= 'ASC';
	
} elseif(($sort=='dwn-d') || ($sort=='dwn-a')) {
	
	$query_index = 'SELECT extension as count FROM `downloads` WHERE '.$extensionsExtension.' GROUP BY extension ORDER BY count(id) ';
	if($sort=='dwn-d') $query_index .= 'DESC';
	elseif($sort=='dwn-a') $query_index .= 'ASC';
	
} elseif(($sort=='rev-d') || ($sort=='rev-a')) {
	
	$query_index = 'SELECT extension as count FROM `reviews` WHERE ('.$extensionsExtension.') AND accepted = \'1\' GROUP BY extension ORDER BY count(id) ';
	if($sort=='rev-d') $query_index .= 'DESC';
	elseif($sort=='rev-a') $query_index .= 'ASC';
	
}

mysql_select_db($database_foo, $foo);
$index = mysql_query($query_index, $foo) or die(mysql_error());
$row_index = mysql_fetch_assoc($index);
$totalRows_index = mysql_num_rows($index);

do{$resultList[] = $row_index['count'];} while($row_index = mysql_fetch_assoc($index));
foreach($extList as $ext) {if(!in_array($ext,$resultList)) $resultList[] = $ext;}

$startRow = $page * $maxRows;
$totalRows = count($resultList);
$resultList = array_slice($resultList,$startRow,$maxRows);

$queryString = "";
if (!empty($_SERVER['QUERY_STRING'])) {
	$params = explode("&", $_SERVER['QUERY_STRING']);
	$newParams = array();
	foreach ($params as $param) if (stristr($param, "page") == false) {array_push($newParams, $param);}
	if (count($newParams) != 0) $queryString = "&" . htmlentities(implode("&", $newParams));
}

if(count(array_filter($resultList))>1) { ?>
	<div>
		<span><?php echo ($startRow + 1); ?> - <?php echo min($startRow + $maxRows, $totalRows); ?> of <?php echo $totalRows; ?></span>
		<a href="./extensions.php?page=<?php echo max(0, $page - 1).$queryString; ?>">&laquo; Previous</a> | <a href="./extensions.php?page=<?php echo min(ceil($totalRows/$maxRows)-1, $page + 1).$queryString; ?>">Next &raquo;</a>
	</div>
	<div>
		<form action="" method="get">
			<label>Show 
				<select name="maxRows">
					<option value="5"<?php if($maxRows==5) echo ' selected="selected"'; ?>>5</option>
					<option value="10"<?php if($maxRows==10) echo ' selected="selected"'; ?>>10</option>
					<option value="20"<?php if($maxRows==20) echo ' selected="selected"'; ?>>20</option>
					<option value="50"<?php if($maxRows==50) echo ' selected="selected"'; ?>>50</option>
					<option value="100"<?php if($maxRows==100) echo ' selected="selected"'; ?>>100</option>
				</select>
			</label>
			<label>Sort By 
				<select name="sort">
					<optgroup label="Added">
						<option value="add-d"<?php if($sort=='add-d') echo ' selected="selected"'; ?>>Up</option>
						<option value="add-a"<?php if($sort=='add-a') echo ' selected="selected"'; ?>>Down</option>
					</optgroup>
					<optgroup label="Rating">
						<option value="rat-d"<?php if($sort=='rat-d') echo ' selected="selected"'; ?>>Up</option>
						<option value="rat-a"<?php if($sort=='rat-a') echo ' selected="selected"'; ?>>Down</option>
					</optgroup>
					<optgroup label="Downloaded">
						<option value="dwn-d"<?php if($sort=='dwn-d') echo ' selected="selected"'; ?>>Up</option>
						<option value="dwn-a"<?php if($sort=='dwn-a') echo ' selected="selected"'; ?>>Down</option>
					</optgroup>
					<optgroup label="Reviews">
						<option value="rev-d"<?php if($sort=='rev-d') echo ' selected="selected"'; ?>>Up</option>
						<option value="rev-a"<?php if($sort=='rev-a') echo ' selected="selected"'; ?>>Down</option>
					</optgroup>
				</select>
			</label>
			<!--<label>When 
				<select name="when">
					<option value="today"<?php if($when=='today') echo ' selected="selected"'; ?>>Today</option>
					<option value="week"<?php if($when=='week') echo ' selected="selected"'; ?>>This Week</option>
					<option value="month"<?php if($when=='month') echo ' selected="selected"'; ?>>This Month</option>
					<option value="year"<?php if($when=='year') echo ' selected="selected"'; ?>>This Year</option>
					<option value="all"<?php if($when=='all') echo ' selected="selected"'; ?>>All Time</option>
				</select>
			</label>-->
			<?php
				if(isset($getCat)) echo '<input name="cat" type="hidden" value="'.$row_category['slug'].'" />';
				if(isset($getQ)) echo '<input name="q" type="hidden" value="'.htmlentities(urldecode($getQ), ENT_QUOTES).'" />';
			?>
			<input type="submit" value="Go" />
		</form>
	</div>
	<hr />
<?php }
if(count(array_filter($resultList))>0) {
	foreach($resultList as $extension) {
		mysql_select_db($database_foo, $foo);
		$query_main = "SELECT * FROM `extensions` WHERE id = ".$extension;
		$main = mysql_query($query_main, $foo) or die(mysql_error());
		$row_main = mysql_fetch_assoc($main);
		
		mysql_select_db($database_foo, $foo);
		$query_rating = "SELECT sum(rating) as rating, count(id) as id FROM `ratings` WHERE extension_id = ".$extension;
		$rating = mysql_query($query_rating, $foo) or die(mysql_error());
		$row_rating = mysql_fetch_assoc($rating);
		
		mysql_select_db($database_foo, $foo);
		$query_reviews = "SELECT count(id) as id FROM `reviews` WHERE accepted = '1' AND extension = ".$extension;
		$reviews = mysql_query($query_reviews, $foo) or die(mysql_error());
		$row_reviews = mysql_fetch_assoc($reviews);
		
		mysql_select_db($database_foo, $foo);
		$query_downloads = "SELECT count(id) as id FROM `downloads` WHERE extension = ".$extension;
		$downloads = mysql_query($query_downloads, $foo) or die(mysql_error());
		$row_downloads = mysql_fetch_assoc($downloads); ?>
		<blockquote>
		<h3><a href="./extension.php?id=<?php echo $row_main['id']; ?>"><?php echo $row_main['name']; ?></a></h3>
			<div>
				<span>Rating: <?php if($row_rating['id']>0) echo round($row_rating['rating']/$row_rating['id'], 1); else echo 'NA'; ?></span> |
				<span>Downloads: <?php echo number_format($row_downloads['id']); ?></span>
	
			</div>
			<div><?php echo substr($row_main['description'], 0, 50); if(strlen($row_main['description'])>50) echo '&hellip;'; ?></div>
			<div>
				<span><?php if($row_reviews['id']>0) echo '<a href="./extension.php?id='.$row_main['id'].'#reviews">'.$row_reviews['id'].' Reviews</a>'; else echo '0 Reviews'; ?></span> |
				<span>Added: <?php echo d($row_main['date_added']); ?></span>
			</div>
		</blockquote>
	<?php }
} else echo '<div>Sorry, no results were found!</div>';*/
?>
