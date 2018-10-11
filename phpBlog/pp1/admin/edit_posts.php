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
					<p class="gh">Welcome to your Admin Panel!</p>
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
					<h4 align="center"><a href="#">Insert Post</a></h4>
					<h4 align="center"><a href="#">Logout</a></h4>
				</div>
				</div>
			</div>


			<?php
			include('connect.php');
			if(isset($_GET['edit'])){

				$edit_id = $_GET['edit'];

				$edit_query = "select * from posts where post_id='$edit_id'";

				$run_edit = mysqli_query($con,$edit_query);

				while($edit_row=mysqli_fetch_array($run_edit)){

					$post_id = $edit_row['post_id'];
					$post_title = $edit_row['post_title'];
					$post_author = $edit_row['post_author'];
					$post_keywords = $edit_row['post_keywords'];
					$post_image = $edit_row['post_image'];
					$post_content = $edit_row['post_content'];

				}
			}

			?>

<div class="col-md-9">
	<div class="bodymain">
				
<div class="col-md-2"></div>
	<div class="col-md-8 sty">
		<form method="post" action="post.php" action="edit_posts.php" enctype="multipart/form-data">
			<table>
				<tr>
					<td class="r"><h2 class="t">Edit The Post Here</h2></td>
				<tr>
					<td class="f">Post Title:</td>
					<td><input class="form-control" type="text" name="title" value="<?php echo $post_title; ?>"></td>
				</tr>
				<tr>
					<td class="f">Post Author:</td>
					<td><input class="form-control" type="text" name="author" value="<?php echo $post_author; ?>"></td>
				</tr>
				<tr>
					<td class="f">Post Keywords:</td>
					<td><input class="form-control" type="text" name="keywords" value="<?php echo $post_keywords; ?>"></td>
				</tr>
				<tr>
					<td class="f">Post Image:</td>
					<td>
					<input class="form-control" type="file" name="image">
					<img src="images/<?php echo $post_image; ?>" width="80" height="80" >
					</td>
				</tr>
				<tr>
					<td class="f">Post Content:</td>
					<td><textarea class="form-control" name="content" cols="18" rows="6"><?php echo $post_content; ?></textarea></td>
				</tr>
				<tr>
					<td><input class="btn btn-default tt"  type="submit" name="submit" value="Update Now"></td>
				</tr>
	</div>
		<div class="col-md-2"></div>
			</table>
		</form>
	</div>
</div>
</div>
</div>
</body>
</html>
