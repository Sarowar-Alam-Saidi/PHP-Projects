<?php
	include("../../config/connect.php");
if(isset($_POST['submit'])){
	
	$assignment_title = $_POST['assignment_title'];
	$student_id = $_POST['student_id'];
	$upload_pdf = $_FILES['pdf']['name'];
	$upload_pdf_tmp = $_FILES['pdf']['tmp_name'];
	
	if($assignment_title =='' or $student_id ==''){
		
		echo "<script>alert('any of the fields is empty')</script>";
		exit();
	}
	else{

		
		move_uploaded_file($upload_pdf_tmp,"pdf/$upload_pdf");

		
		$result = mysqli_query($con,"INSERT INTO `assignment`(`assignment_title`,`student_id`,`status`,`upload_pdf`)
		values ('$assignment_title','$student_id','1','$upload_pdf')");
	}
	if(mysqli_query($con,$result)){

		echo "error";
	}
	else{
		
		echo "<script>alert('Project Published successfully')</script>";
		echo "<script>window.open('../../student-home.php','_self')</script>";
	}
}
?>