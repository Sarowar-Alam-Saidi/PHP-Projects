<div class="col-md-9">
	<div class="right_side">
	<?php

	include("includes/connect.php");

	$select_post = "select * from posts order by rand() LIMIT 0,2";

	$run_post = mysqli_query($con,$select_post );
//use for catch data from database
	while($row = mysqli_fetch_array($run_post)){

		$post_id = $row['post_id'];
		$post_title = $row['post_title'];
		$post_date = $row['post_date'];
		$post_author = $row['post_author'];
		$post_image = $row['post_image'];
		$post_keywords = $row['post_keywords'];//if need i can remove this line this line for search engeen
		$post_content = substr($row['post_content'],0,250);
		
	?>

	<h3 class="hh">
	<a href="pages.php?id=<?php echo $post_id; ?>">
	<?php echo $post_title; ?>
	</a>
	</h3>

	<p align="left">Pulished on:<b><?php echo $post_date; ?></b></p>

	<p align="right">Posted by:<b><?php echo $post_author; ?></b></p>

	<center><img src="admin/images/<?php echo $post_image; ?>" width="400" height="250" /></center>

	<p align="justify"><?php echo $post_content; ?></p>

	<p align="right"><a class="aa" href="pages.php?id=<?php echo $post_id; ?>">Read More</a></p>

	<?php } ?>

	</div>
</div>