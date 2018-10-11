<html>

<head>
	<title> WELCOME TO MALALA</title>
	<link rel="stylesheet" href="style.css" >
	<link rel="stylesheet" href="bootstrap.css" >
</head>

<body>
<div class="container full">
<!-- div container start-->
<!-- header part-->
<div class="row">
	<div><?php include("includes/header.php"); ?></div>
</div>
<!-- header part finish-->
<!--navbar pary start-->
<div><?php include("includes/navbar.php"); ?></div>
<!--navbar part finish-->

<!--body_content part start-->
<div class="col-md-12">
	<!-- right part start-->
		
	<div class="col-md-9">
	<div class="right_side">
	<?php

	include("includes/connect.php");

	if(isset($_GET['id'])){
	
	$page_id = $_GET['id'];

	$select_query = "select * from posts where post_id = '$page_id'";

	$run_query = mysqli_query($con,$select_query);
//use for catch data from database
	while($row = mysqli_fetch_array($run_query)){

		$post_id = $row['post_id'];
		$post_title = $row['post_title'];
		$post_date = $row['post_date'];
		$post_author = $row['post_author'];
		$post_image = $row['post_image'];
		$post_keywords = $row['post_keywords'];//if need i can remove this line this line for search engeen
		$post_content =$row['post_content'];


	

	?>

	<h3 class="hh">
	<a href="pages.php?id=<?php echo $post_id; ?>">
	<?php echo $post_title; ?>
	</a>
	</h3>

	<p align="left">Pulished on:<b><?php echo $post_date; ?></b></p>

	<p align="right">Posted by:<b><?php echo $post_author; ?></b></p>

	<center><img src="admin/images/<?php echo $post_image; ?>" width="450" height="280" /></center>

	<p align="justify"><?php echo $post_content; ?></p>

	

	<?php } } ?>

	</div>
</div>




	<!-- right part finisg-->
	<!-- left part finisg-->
		<?php include("includes/rightbar.php"); ?>
	<!-- left part finisg-->
	</div>
<!-- body content part finifh-->

<!--footer part-->
		<!--<?php include("includes/footer.php"); ?>-->
		<div class="footer-copy-right">
			<div class="container">
				
					<div class="col-md-12">
						<div class="copy-right-text pull-left">
							<p>&copy;Copyright 2018 - Desinged by -Saidi</p>
						</div><!-- /Copyright Text -->
						
						<div class="scroll-up pull-right">
					        <a href="index.php">Top</a>
					    </div>
						<!-- Scroll Up -->
					</div>
				
			</div>
		</div>
<!--footer part finish-->
</div>
</body>

</html>