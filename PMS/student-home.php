<?php
  include("config/connect.php");
  include("config/session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Home | Project Management</title>
	<link rel="stylesheet" type="text/css" href="asset/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

	<div class="container-flude">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="student-home.php">Project Management</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="student-home.php">Home<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="project.php">Project</a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="student-list.php">Student List</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="process/student/logout.php">Logout</a>
		      </li>
		    </ul>
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		      	<?php 
		      	$f = "select * from student where student_id = '$student_id'";
		      	$run_query = mysqli_query($con,$f);

				while($search_row=mysqli_fetch_array($run_query)){
				
				$s_mail = $search_row['student_email'];
			}

			?>
		
		        <i>Student Mail : <?php echo $s_mail; ?> </i>
		      </li>
		    </ul>


		  </div>
		</nav>
		<div class="container">
			<div class="card"  style="margin-top: 50px;">
				<div class="card-header">
					    Project List
				</div>
				
											<?php 

                                            $query = "select * from assignment where student_id = $student_id order by 1 DESC";

                                            $run = mysqli_query($con,$query);
                                            while($row=mysqli_fetch_array($run)){
                                                $project_title = $row['assignment_title'];
                                                $project_course_name = $row['course_name'];
                                                $project_description = $row['description'];
                                                $date = $row['date'];
                                                $status = $row['status'];

                                            ?>
				<div class="card-body">
					<form action="assignment.php" method="GET">
						<b>Project Title: <input type="text" name="gettitle" value="<?php echo $project_title; ?>" readonly style="width: 700px; border-style: hidden;"></b>

						<p class="card-title">Course Name: <?php echo $project_course_name; ?> ------ <span><small>Dateline: <?php echo $date; ?></small></span></p>
						<em class="card-text">Project Description: <?php echo $project_description; ?></em><br>
						<?php 
							if ($status==0) {

								echo '<input class="btn btn-danger" type="submit" name="submit" value="submit">';
							}
							else{

								echo '<p style="color:green;">Project Submitted</p>';
							}
						?>
										
					</form>	
				</div> <hr>

				<?php } ?>
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