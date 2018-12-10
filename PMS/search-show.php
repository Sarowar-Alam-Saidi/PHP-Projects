<?php
  include("config/connect.php");
  include("config/session-teacher.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | Search | Project Management</title>
	<link rel="stylesheet" type="text/css" href="asset/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

	<div class="container-flude">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="teacher-home.php">Project Management</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="teacher-home.php">Home<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="process/teacher/logout.php">Logout</a>
		      </li>
		    </ul>
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		      	<?php 
		      	$f = "select * from teacher where teacher_id = '$teacher_id'";
		      	$run_query = mysqli_query($con,$f);

				while($search_row=mysqli_fetch_array($run_query)){
				
				$t_name = $search_row['teacher_name'];
			}

			?>
		
		        <i>Teacher Name : <?php echo $t_name; ?> </i>
		      </li>
		    </ul>
		  </div>
		</nav>
		<div class="container">
				<!-- right part start-->
	<div class="col-md-12">
		<div class="right_side">
		<h2 align="center">Your Search Result is here</h2> <hr>
		<?php

		if(isset($_GET['submit'])){

			$search_id =$_GET['search'];

			$search_query = "select * from assignment where student_id like '%$search_id%' or assignment_title like '%$search_id%'";

			$run_query = mysqli_query($con,$search_query);

			while($search_row=mysqli_fetch_array($run_query)){
				$post_id = $search_row['student_id'];
				$post_title = $search_row['assignment_title'];
				$cname = $search_row['course_name'];

		
		?>

		<h4 align="center"> 
			Project Title:<em style="color: green;"><?php echo $post_title; ?></em> <hr>
		</h4>
	

		<?php } } ?>

		</div>
	</div>
		</div>
		
		
		<div class="footer">
		  <p>Project Management Software</p>
		</div>
	</div>




	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>