<?php
 include("../../config/connect.php");

if(isset($_POST['submitTT'])){
	
	$assignment_title = $_POST['assignment_name'];
	$course_name = $_POST['course_name'];
	$description = $_POST['description'];
	$time = $_POST['date'];

	
	if( $assignment_title=='' or $course_name=='' or $description=='' or $time==''){
		
		echo "<script>alert('Any of the fields is empty')</script>";
		echo "<script>window.open('../../teacher-home.php','_self')</script>";
		exit();
	}
	else{
		//move_uploaded_file($image_tmp,"photo/$photo");
		
		$result = "INSERT INTO `assignment`(`assignment_title`, `course_name`, `description`, `date`) VALUES  ('$assignment_title','$course_name','$description','$time')";

	
	$check = mysqli_query($con,$result);
	if($check){
		echo "<script>alert('A New Assignment is Post Successfully, Student Can Follow the Assignment and can Submit this Assignment.')</script>";
		echo "<script>window.open('../../teacher-home.php','_self')</script>";
		
	}
	else{
		
		echo "Something is wrong!";
	}
}
}
?>