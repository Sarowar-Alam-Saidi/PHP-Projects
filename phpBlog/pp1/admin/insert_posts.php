<html>
	<head>
		<title>Inserting new posts</title>
		<link rel="stylesheet" href="style.css" >
		<link rel="stylesheet" href="bootstrap.css" >
	</head>
<body>
<div class="container">
	<!--<div class="col-md-3"></div>-->
	<div class="col-md-12">
	<form method="post" action="post.php" enctype="multipart/form-data">
	<table>
		<tr>
			<td class="r"><h3 class="t">Insert New Post Here</h3></td>
		<tr>
			<td class="f">Post Title:</td>
			<td><input class="form-control" type="text" name="title"></td>
		</tr>
		<tr>
			<td class="f">Post Author:</td>
			<td><input class="form-control" type="text" name="author"></td>
		</tr>
		<tr>
			<td class="f">Post Keywords:</td>
			<td><input class="form-control" type="text" name="keywords"></td>
		</tr>
		<tr>
			<td class="f">Post Image:</td>
			<td><input class="form-control" type="file" name="image"></td>
		</tr>
		<tr>
			<td class="f">Post Content:</td>
			<td><textarea class="form-control"name="content" cols="22" rows="6"></textarea></td>
		</tr>
		<tr>
			<td><input class="btn btn-default tt"  type="submit" name="submit" value="Publish Now"></td>
		</tr>
	</div>
	<!--<div class="col-md-3"></div>-->
	</table>
	</form>
</div>
</body>

</html>
