<?php
 include("../../config/connect.php");

if(isset($_POST['submit'])){
	
	$student_id = $_POST['student_id'];
	$student_email= $_POST['student_email'];
	$student_name = $_POST['student_name'];
	$student_department = $_POST['student_department'];
	$student_advisor = $_POST['student_advisor'];
	$student_address = $_POST['student_address'];
	$password = $_POST['password'];

	
	if($student_id =='' or $student_email =='' or $student_name =='' or $student_department =='' or $student_advisor =='' or $password ==''){
		
		echo "<script>alert('Any of the fields is empty')</script>";
		echo "<script>window.open('../../index.php','_self')</script>";
		exit();
	}
	else{
		//move_uploaded_file($image_tmp,"photo/$photo");
		
		$result = "INSERT INTO `student`(`student_id`, `student_email`, `student_name`, `student_department`,`student_advisor`,`student_address`, `password`) VALUES ('$student_id','$student_email','$student_name','$student_department','$student_advisor','$student_address','$password')";
		
	
	$check = mysqli_query($con,$result);
	if($check){
		echo "<script>alert('Student Create successfully.You need to login for visit...')</script>";
		echo "<script>window.open('../../index.php','_self')</script>";
		
	}
	else{
		
		echo "Something is wrong!";
	}
}
}
?>