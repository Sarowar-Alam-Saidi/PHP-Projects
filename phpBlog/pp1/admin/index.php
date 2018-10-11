<?php
session_start();
if(!isset($_SESSION['user_name'])){
	header("location:login.php");
}
else{

?>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" href="styleadmin.css" >
	<link rel="stylesheet" href="bootstrap.css" >
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="head">
					<p class="gh"><a href="index.php">Welcome to your Admin Panel!</a></p>
				</div>
			</div>
		<!--this is headere welcome part-->
		</div>
	</div>
	<div class="container">
		<div class="col-md-12 v">
			<div class="col-md-3">
				<div class="bodynav">
				<div class="col-md-12">
				<h3 align="center">Welcome : <?php echo $_SESSION['user_name']; ?></h3>
					<h4 align="center"><a href="#">View Comments</a></h4>
					<h4 align="center"><a href="view_posts.php">View Posts</a></h4>
					<h4 align="center"><a href="index.php?insert=insert">Insert Post</a></h4>
					<h4 align="center"><a href="logout.php">Logout</a></h4>
				</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="bodymain">
					<div class="col-md-12"><h3 class="hhq">Welcome to your Admin Panel!</h3></div>
					<p align="center">This is your Admin Pane.Where you can manage your website files content photos and news!<br/>
					<b>Enjoy This!</b></p>
					
					<?php
					
					if(isset($_GET['insert'])){

						include("insert_posts.php");
					
					}
					?>

				</div>
			</div>
		</div>
	</div>
</body>

</html>
<?php } ?>