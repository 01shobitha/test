<?php
	require_once('./functions.php');
	require_once('./recaptchalib.php');

if((!isset($_GET['id'])) || ($_GET['id']==='')) {
	header('HTTP/1.1 301 Moved Permanently'); 
	header('location: ./extensions.php');
}

getVariable('id','rating','ratingDone','reviewDone','reviewRatingDone');

if(isset($_POST['extension'])) {
	if($_POST['name']=='') $errorArray[] = 'Name';
	if($_POST['email']=='') $errorArray[] = 'Email';
	if($_POST['contents']=='') $errorArray[] = 'Content';
	
	$privatekey = "6LcKzwcAAAAAAB4EEWfmymZ4egoZ94B-YQW2XOVz";
	$resp = recaptcha_check_answer ($privatekey,
									$_SERVER["REMOTE_ADDR"],
									$_POST["recaptcha_challenge_field"],
									$_POST["recaptcha_response_field"]);
	
	if (!$resp->is_valid) $isSpam = "yes";
	else $isSpam = "no";

	if(count($errorArray)==1) $error = $errorArray[0].' is required!';
	elseif(count($errorArray)==2) $error = $errorArray[0].' and '.$errorArray[1].' are required!';
	elseif(count($errorArray)==3) $error = $errorArray[0].', '.$errorArray[1].' and '.$errorArray[2].' are required!';
	elseif($isSpam=='no') {
		mysql_select_db($database_foo, $foo);
		$query_insertReview = sprintf("INSERT INTO `reviews` (extension, name, email, ip, url, contents) VALUES (%s,%s,%s,%s,%s,%s)",
					GetSQLValueString(htmlentities(strip_tags($_POST['extension']), ENT_QUOTES), "int"),
					GetSQLValueString(htmlentities(strip_tags($_POST['name']), ENT_QUOTES), "text"),
					GetSQLValueString(htmlentities(strip_tags($_POST['email']), ENT_QUOTES), "text"),
					GetSQLValueString($_SERVER['REMOTE_ADDR'], "text"),
					GetSQLValueString(htmlentities(strip_tags($_POST['url']), ENT_QUOTES), "text"),
					GetSQLValueString(htmlentities(strip_tags($_POST['contents']), ENT_QUOTES), "text"));
		mysql_query($query_insertReview, $foo) or die(mysql_error());
		
		header('location: ./extension.php?id='.$row_extension['id'].'&reviewDone');
	}
}

mysql_select_db($database_foo, $foo);
$query_extension = sprintf("SELECT * FROM `extensions` WHERE id = %s", GetSQLValueString($getId, "int"));
$extension = mysql_query($query_extension, $foo) or die(mysql_error());
$row_extension = mysql_fetch_assoc($extension);
$totalRows_extension = mysql_num_rows($extension);

if($totalRows_extension==0) { //see if extension exists
	echo 'the extension you are looking for was not found';
	return;
}

if($row_extension['accepted']==false) { //see if extension is approved by admins yet
	echo 'the extension has not been approved yet!';
	return;
}

if(isset($getDownload)) {
	mysql_select_db($database_foo, $foo);
	$query_insertDownload = sprintf("INSERT INTO `downloads` (extension) VALUES (%s)", $row_extension['id']);
	mysql_query($query_insertDownload, $foo) or die(mysql_error());
	return;
}

if(isset($getRating) && in_array($getRating, array('1','2','3','4','5'))) {
	mysql_select_db($database_foo, $foo);
	$query_insertRating = sprintf("INSERT INTO `ratings` (extension_id,rating) VALUES (%s,%s)", $row_extension['id'], GetSQLValueString($getRating, "int"));
	mysql_query($query_insertRating, $foo) or die(mysql_error());
	
	header('location: '.$row_extension['url']);
}

mysql_select_db($database_foo, $foo);
$query_related = sprintf("SELECT name, id FROM `extensions` WHERE category = '%s' AND accepted = '1' AND id != '%s'", $row_extension['category'], $row_extension['id']);
$related = mysql_query($query_related, $foo) or die(mysql_error());
$row_related = mysql_fetch_assoc($related);
$totalRows_related = mysql_num_rows($related);

mysql_select_db($database_foo, $foo);
$query_rating = sprintf("SELECT sum(rating) as rating, count(id) as id FROM `ratings` WHERE extension_id = '%s'", $row_extension['id']);
$rating = mysql_query($query_rating, $foo) or die(mysql_error());
$row_rating = mysql_fetch_assoc($rating);
$totalRows_rating = mysql_num_rows($rating);

$extensionPage = 1;
require('./header.php');
?>

<h1><?php echo $row_extension['name']; ?></h1>
<?php
	if(isset($getRatingDone)) echo '<div>Thank you for rating this extension! <a href="./extension.php?id='.$row_extension['id'].'">ok</a></div>';
	if(isset($getReviewDone)) echo '<div>Thank you for reviewing this extension! <a href="./extension.php?id='.$row_extension['id'].'">ok</a></div>';
	if(isset($getReviewRatingDone)) echo '<div>Thank you for rating the review! <a href="./extension.php?id='.$row_extension['id'].'">ok</a></div>';
?>
<div><a href="./extensions.php">Home</a> &raquo; <a href="./extensions.php?cat=<?php echo $extensionCategorySlug; ?>"><?php echo $extensionCategoryName; ?></a> &raquo; <?php echo $row_extension['name']; ?></div>
<h2>Description</h2>
<span>By: <?php echo $row_extension['author']; ?></span> | <span><a href="./extension.php?id=<?php echo $row_extension['id']; ?>&download">Download</a></span>
<blockquote>
	<p style="width:500px;"><?php echo $row_extension['description']; ?></p>
	<span>Added: <?php d($row_extension['date_added']); ?></span> | <span>Rating: <?php if ($row_rating['id']>0) echo round($row_rating['rating']/$row_rating['id'], 1).' (rated '.$row_rating['id'].' times!)'; else echo 'Extension not rated yet!'; ?></span>
	<div>Rate: 
		<form action="" method="get" style="display:inline">
			<label><input type="radio" value="1" name="rating" /> 1</label>
			<label><input type="radio" value="2" name="rating" /> 2</label>
			<label><input type="radio" value="3" name="rating" /> 3</label>
			<label><input type="radio" value="4" name="rating" /> 4</label>
			<label><input type="radio" value="5" name="rating" /> 5</label>
			<input type="hidden" name="id" value="<?php echo $row_extension['id']; ?>" />
			<input type="submit" value="Go" />
		</form>
	</div>
</blockquote>
<h2>Related Extensions</h2>
<blockquote>
	<?php 
	$row_related_array = array();
	do {array_push($row_related_array, $row_related);} while($row_related = mysql_fetch_assoc($related));
	$related_rand = array_rand($row_related_array, 5);
	shuffle($related_rand);
	$x=1;
	do {
		echo '<a href="./extension.php?id='.$row_related_array[$related_rand[$x]]['id'].'">'.$row_related_array[$related_rand[$x]]['name'].'</a><br />';
		$x=++$x;
	} while($x<6); ?>
</blockquote>

<h2><a name="reviews"></a>User Reviews</h2>
<blockquote>
	<?php include('./reviews.php'); ?>
</blockquote>

<h2><a name="insertReviews"></a>Insert Review</h2>
<blockquote>
	<form action="" method="post">
		<?php
			if(isset($error)) echo '<div>'.$error.'</div>';
			if($isSpam=='yes') echo '<div>The captcha code did not match! please try again..</div>';
		?>
		<label>Name &nbsp; &nbsp; <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlentities(stripslashes($_POST['name']), ENT_QUOTES); ?>" /></label><br />
		<label>Email &nbsp; &nbsp;&nbsp; <input type="text" name="email" value="<?php if(isset($_POST['email'])) echo htmlentities(stripslashes($_POST['email']), ENT_QUOTES); ?>" /></label><br />
		<label>Url &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; <input type="text" name="url" value="<?php if(isset($_POST['url'])) echo htmlentities(stripslashes($_POST['url']), ENT_QUOTES); ?>" /></label><br />
		<label>Contents <textarea name="contents"><?php if(isset($_POST['contents'])) echo htmlentities(stripslashes($_POST['contents']), ENT_QUOTES); ?></textarea></label><br />
		<input type="hidden" name="extension" value="<?php echo $row_extension['id']; ?>" />
		<div><?php echo recaptcha_get_html('6LcKzwcAAAAAAGZ40OjmUwPyNkqOIdTMBhxJDis5'); ?></div>
		<input type="reset" /> <input type="submit" />
	</form>
</blockquote>
