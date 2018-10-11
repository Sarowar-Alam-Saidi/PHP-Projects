<?php
session_start();
if(!isset($_SESSION['user_name'])){
	header("location: login.php");
}
else{

?>

<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" href="styleadmin.css" >
	<link rel="stylesheet" href="bootstrap.css" >
</head>
<body class="foll">
	
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
					<h4 align="center"><a href="#">View Comments</a></h4>
					<h4 align="center"><a href="view_posts.php">View Posts</a></h4>
					<h4 align="center"><a href="index.php?insert=insert">Insert Post</a></h4>
					<h4 align="center"><a href="logout.php">Logout</a></h4>
				</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="bodymain">
					<div class="col-md-12 ta">
						<table border="2" align="center">
							<tr>
								<td colspan="10" align="center" bgcolor="gray"><h2>View Posts</h2></td>
							</tr>
					<tr align="center">
						<td>Post No</td>
						<td>Post Date</td>
						<td>Post Author</td>
						<td>Post Title</td>
						<td>Post Image</td>
						<td>Post Content</td>
						<td>Delete Post</td>
						<td>Edit Post</td>
					</tr>
					<?php 
					include("connect.php");

					$query = "select * from posts order by 1 DESC";

					$run = mysqli_query($con,$query);
					while($row=mysqli_fetch_array($run)){

						$post_id = $row['post_id'];
						$post_date = $row['post_date'];
						$post_author = $row['post_author'];
						$post_title = $row['post_title'];
						$post_image = $row['post_image'];
						$post_content = substr($row['post_content'],0,100);
					

					?>
					<tr align="center">
						<td><?php echo $post_id; ?></td>
						<td><?php echo $post_date; ?></td>
						<td><?php echo $post_author; ?></td>
						<td><?php echo $post_title; ?></td>
						<td><img src="images/<?php echo $post_image; ?>" width="70" height="70"></td>
						<td><?php echo $post_content; ?></td>
						<td><a href="delete.php?del=<?php echo $post_id; ?>">Delete</a></td>
						<td><a href="edit_posts.php?edit=<?php echo $post_id; ?>">Edit</a></td>
					</tr>

					<?php } ?>

					</table>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
<?php } ?>