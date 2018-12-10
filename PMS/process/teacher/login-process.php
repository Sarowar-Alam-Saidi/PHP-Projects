<?php
  include("../../config/connect.php");
  //include("../config/session.php");
  $teacher_id = $_POST['teacher_id'];
  $password = $_POST['password'];
if($teacher_id=='' or $password == ''){
      echo "<script> alert(' Null Value Input, try again !!') </script>";
      echo "<script> window.open('../../index.php','_self'); </script>";
    
}
else{

if(isset($_POST['teacher_id']) && ($_POST['password'])){

  $teacher_id = $_POST['teacher_id'];
  $password = $_POST['password'];


  $user_login_query = "SELECT `teacher_id`, `password` FROM `teacher` WHERE teacher_id = '$teacher_id' && password = '$password' LIMIT 1";
  
  $user_login = mysqli_query($con,$user_login_query);

  $count_user = mysqli_num_rows($user_login);


  if($count_user == 1){

    $row= mysqli_fetch_assoc($user_login);


    session_start();
    
    $_SESSION['teacher_id'] = $teacher_id;

  
   
    header("location:../../teacher-home.php");
    //echo "successfully logged in";
      exit();
  }
  else{
      echo "<script> alert(' Incorrect information, try again !!') </script>";
      echo "<script> window.open('../../index.php','_self'); </script>";
    }

}
}
?>