<?php

getVariable('id','maxRows','up','down');

if(isset($getUp) || isset($getDown)) {
	if(isset($getUp)) {$review_id = $getUp;} elseif(isset($getDown)) {$review_id = $getDown;}
	
	mysql_select_db($database_foo, $foo);
	$query_review = sprintf("SELECT * FROM `reviews` WHERE id = %s", GetSQLValueString($review_id, "int"));
	$review = mysql_query($query_review, $foo) or die(mysql_error());
	$row_review = mysql_fetch_assoc($review);
	$totalRows_review = mysql_num_rows($review);
	
	mysql_select_db($database_foo, $foo);
	if(isset($getUp)) $query_insertRating = sprintf("UPDATE `reviews` SET karma=%s WHERE id=%s", ++$row_review['karma'], GetSQLValueString($review_id, "int"));
	if(isset($getDown)) $query_insertRating = sprintf("UPDATE `reviews` SET karma=%s WHERE id=%s", --$row_review['karma'], GetSQLValueString($review_id, "int"));
	mysql_query($query_insertRating, $foo) or die(mysql_error());
	
	header('location: ./extension.php?id='.$row_review['extension'].'&reviewRatingDone');
}

if(isset($getId)) {
	if(!isset($maxRows)) $maxRows = 10;
	
	mysql_select_db($database_foo, $foo);
	$query_reviews = sprintf("SELECT * FROM `reviews` WHERE extension = %s AND accepted = '1' ORDER BY timestamp DESC", GetSQLValueString($getId, "int"));
	$query_limit_reviews = sprintf("%s LIMIT 0, %d", $query_reviews, $maxRows);
	$reviews = mysql_query($query_limit_reviews, $foo) or die(mysql_error());
	$reviews1 = mysql_query($query_reviews, $foo) or die(mysql_error());
	$row_reviews = mysql_fetch_assoc($reviews);
	$row_reviews1 = mysql_fetch_assoc($reviews1);
	$totalRows_reviews = mysql_num_rows($reviews);
	$totalRows_reviews1 = mysql_num_rows($reviews1);
	
	mysql_select_db($database_foo, $foo);
	$query_topReviews = sprintf("SELECT * FROM `reviews` WHERE extension = %s AND karma > '9' AND accepted = '1' ORDER BY karma DESC LIMIT 0,3", GetSQLValueString($getId, "int"));
	$topReviews = mysql_query($query_topReviews, $foo) or die(mysql_error());
	$row_topReviews = mysql_fetch_assoc($topReviews);
	$totalRows_topReviews = mysql_num_rows($topReviews);
	
	if($totalRows_topReviews>0) { ?>
		<h3>Top Reviews</h3>
		<?php do { ?>
			<div>
				<span><?php if(isset($row_topReviews['url'])) echo '<a href="'.$row_topReviews['url'].'" target="_blank">'.$row_topReviews['name'].'</a>'; else echo $row_topReviews['name']; ?></span> | 
				<span><?php t($row_topReviews['timestamp']); ?></span>
				<?php if($row_topReviews['karma']!=0) echo '&nbsp;| <span>Karma: '.$row_topReviews['karma'].'</span>'; ?>
			</div>
			<p><?php if($row_topReviews['karma']<-6) echo 'Review hidden due to low rating!'; else echo $row_topReviews['contents']; ?></p>
			<div>
				<span><a href="./reviews.php?up=<?php echo $row_topReviews['id']; ?>">Thumbs Up</a></span> | 
				<span><a href="./reviews.php?down=<?php echo $row_topReviews['id']; ?>">Thumbs Down</a></span>
			</div>
			<hr />
		<?php } while($row_topReviews = mysql_fetch_assoc($topReviews)); ?>
		
		<h3>All Reviews</h3>
	<?php }	if($totalRows_reviews>0) {
		do { ?>
			<div>
				<span><?php if(isset($row_reviews['url'])) echo '<a href="'.$row_reviews['url'].'" target="_blank">'.$row_reviews['name'].'</a>'; else echo $row_reviews['name']; ?></span> | 
				<span><?php t($row_reviews['timestamp']); ?></span>
				<?php if($row_reviews['karma']!=0) echo '&nbsp;| <span>Karma: '.$row_reviews['karma'].'</span>'; ?>
			</div>
			<p><?php if($row_reviews['karma']<-6) echo 'Review hidden due to low rating!'; else echo $row_reviews['contents']; ?></p>
			<div>
				<span><a href="./reviews.php?up=<?php echo $row_reviews['id']; ?>">Thumbs Up</a></span> | 
				<span><a href="./reviews.php?down=<?php echo $row_reviews['id']; ?>">Thumbs Down</a></span>
			</div>
			<hr />
		<?php } while($row_reviews = mysql_fetch_assoc($reviews));
		if($totalRows_reviews1>$totalRows_reviews) echo '<a>Show More Reviews</a>';
	} else echo 'No reviews inserted yet!';
} else echo 'bad url!';
?>
