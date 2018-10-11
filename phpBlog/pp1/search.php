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
		<h2 align="center">Your Search Result is here</h2>
		<?php
		include("includes/connect.php");

		if(isset($_GET['search'])){

			$search_id =$_GET['value'];

			$search_query = "select * from posts where post_keywords like '%$search_id%'";

			$run_query = mysqli_query($con,$search_query);

			while($search_row=mysqli_fetch_array($run_query)){
				$post_id = $search_row['post_id'];
				$post_title = $search_row['post_title'];
				$post_image = $search_row['post_image'];
				$post_content = substr($search_row['post_content'],0,250);

		
		?>

		<h3 align="center"> 
		<a href="pages.php?id=<?php echo $post_id; ?>">
		<?php echo $post_title; ?> 
		</a>
		</h3>
		<center><img src="admin/images/<?php echo $post_image; ?>" width="350" height="220" /></center>

		<p align="center"><?php echo $post_content; ?></p>

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
		<div class="col-md-12">
			<div class="footer">
				<p>&copy;Copyright 2018 - Desinged by -Saidi</p>
			</div>
		</div>
<!--footer part finish-->
</div>
</body>

</html>