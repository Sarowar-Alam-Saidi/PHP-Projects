<div class="col-md-3">
		<div class="left-side">
		<div class="social">
			<h3 class="hhf">Follow Us</h3>
		
			<div class="col-md-3">
				<a href="#" target="blank"><img src="admin/images/icon (2).png" width="30" height="35"></a>
			</div>
			<div class="col-md-3">
				<a href="#" target="blank"><img src="admin/images/icon (3).png" width="30" height="35"></a>
			</div>
			<div class="col-md-3">
				<a href="#" target="blank"><img src="admin/images/icon (1).jpg" width="30" height="35"></a>
			</div>
			<div class="col-md-3">
				<a href="#" target="blank"><img src="admin/images/icon (1).png" width="30" height="35"></a>
			</div>
				<hr><hr>
			</div>

			<div>
			<div class="col-md-2"></div>
			<div class="col-md-8"><h4 class="hh" align="center">Recent Post</h4></div>
			<div class="col-md-2"></div>

				<?php

	include("includes/connect.php");

	$select_post = "select * from posts order by rand() LIMIT 0,4";

	$run_post = mysqli_query($con,$select_post );
//use for catch data from database
	while($row = mysqli_fetch_array($run_post)){

		$post_id = $row['post_id'];
		$post_title = $row['post_title'];
		$post_image = $row['post_image'];
		
	?>

	<h4 align="center" margin-top="5">
	<a href="pages.php?id=<?php echo $post_id; ?>">
	<?php echo $post_title; ?>
	</a>
	</h4>

	<center><img src="admin/images/<?php echo $post_image; ?>" width="85" height="75" /></center>

	<?php } ?>

			</div>	

		</div>
</div>