<?php
 include("../../config/connect.php");

if(isset($_POST['submitT'])){
	
	$teacher_id = $_POST['teacher_id'];
	$teacher_email= $_POST['teacher_email'];
	$teacher_name = $_POST['teacher_name'];
	$teacher_department = $_POST['teacher_department'];
	$teacher_address = $_POST['teacher_address'];
	$password = $_POST['password'];

	
	if($teacher_id =='' or $teacher_email =='' or $teacher_name =='' or $teacher_department =='' or $teacher_address=='' or $password ==''){
		
		echo "<script>alert('Any of the fields is empty')</script>";
		echo "<script>window.open('../../index.php','_self')</script>";
		exit();
	}
	else{
		
		
		$result = "INSERT INTO `teacher`(`teacher_id`, `teacher_email`, `teacher_name`, `teacher_department`, `teacher_address`, `password`) VALUES  ('$teacher_id','$teacher_email','$teacher_name','$teacher_department','$teacher_address','$password')";

		
	
	if(mysqli_query($con,$result)){

		echo "<script>alert('Student Create successfully.You need to login for visit...')</script>";
		echo "<script>window.open('../../index.php','_self')</script>";
	}
	else{
		
		echo "Something is wrong!";
	}
 }
}

?>