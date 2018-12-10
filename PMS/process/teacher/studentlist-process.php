<?php
 include("../../config/connect.php");

if(isset($_POST['submitTTT'])){
	
	$file_address = $_POST['file_address'];
	
	if( $file_address==''){
		
		echo "<script>alert('File Address is Empty.')</script>";
		echo "<script>window.open('../../teacher-home.php','_self')</script>";
		exit();
	}
	else{
		//move_uploaded_file($image_tmp,"photo/$photo");
		
		$result = "INSERT INTO `listofstudent`(`file_address`) VALUES  ('$file_address')";

	
	$check = mysqli_query($con,$result);
	if($check){
		echo "<script>alert('Student List File One Drive or Google Drive Address are Upload Successfully')</script>";
		echo "<script>window.open('../../teacher-home.php','_self')</script>";
		
	}
	else{
		
		echo "Something is wrong!";
	}
}
}
?>