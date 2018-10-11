<?php
session_start();

if(!isset($_SESSION['user_name'])){
	header("location: login.php");
}
else{

?>
<?php 
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"blogm");

if(isset($_POST['submit'])){
	
	$post_title = $_POST['title'];
	$post_date = date('d-m-y');
	$post_author = $_POST['author'];
	$post_keywords = $_POST['keywords'];
	$post_content = $_POST['content'];
	$post_image = $_FILES['image']['name'];
	$image_tmp = $_FILES['image']['tmp_name'];
	
	if($post_title =='' or $post_keywords =='' or $post_content=='' or $post_author ==''){
		
		echo "<script>alert('any of the fields is empty')</script>";
		exit();
	}
	else{
		move_uploaded_file($image_tmp,"images/$post_image");
		
		$result = mysqli_query($con,"INSERT INTO `posts`(`post_title`,`post_date`,`post_author`,`post_image`,`post_keywords`,`post_content`)
		values ('$post_title','$post_date','$post_author','$post_image','$post_keywords','$post_content')");
	}
	if(mysqli_query($con,$result)){

		echo "error";
	}
	else{
		
		echo "<script>alert('post Published successfully')</script>";
		echo "<script>window.open('view_posts.php','_self')</script>";
	}
}
?>
<?php } ?>