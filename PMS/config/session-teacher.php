 <!-- this will be added to every page  -->
<?php 

session_start();
$teacher_id = $_SESSION['teacher_id'];
// $em_id = $_SESSION['id'];


if(!isset($_SESSION['teacher_id'])){
  header("location: index.php");

}

?>
