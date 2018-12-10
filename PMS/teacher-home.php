<?php
  include("config/connect.php");
  include("config/session-teacher.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Teacher Home | Project Manegement</title>
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
			<div class="row" style="margin-top: 100px;">
				<div class="col-md-3">
				</div>
				<div class="col-md-6">
					<div class="card text-center">
					  <div class="card-header" style="background: #55c1ba!important;">
					    Teacher
					  </div>
					  <div class="card-body">
					    <h5 class="card-title">Special Task For Students!</h5>
					    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Go For Give Task</a>
					    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLongstudent">Student List Upload</a>
					    <a href="teacher/assignment-list.php" class="btn btn-primary">Go For View Task</a>
					    
					  </div>
					  <div class="card-body">
					  	<p>Project Search</p>
					    <form method="get" action="search-show.php">
					    	<input type="text" name="search" class="form-control" placeholder="Type Student ID and Project Title for Project Search"> <br>
					    	<input type="submit" name="submit" class="btn btn-primary" value="Search">
					    </form>
					    
					  </div>
					</div>
				</div>
				<div class="col-md-3">
				</div>
			</div>
		</div>



		<!-- Modal Two teacher task sumite form-->
		<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">Create  Project!</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form action="process/teacher/assignment-process.php" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="email">Project Name:</label>
				    <input type="text" class="form-control" id="assignmentname" name="assignment_name">
				  </div>
				  <div class="form-group">
				    <label for="email">Project Course Name:</label>
				    <select class="form-control" name="course_name" >
				    	<option value="">Select Course Name</option>
				    	<option value="Intro. Software Eng.">Intro. Software Eng.</option>
				    	<option value="Math I">Math I</option>
				    	<option value="Math II">Math II</option>
				    	<option value="English">English OO1</option>
				    	<option value="C Programming Language">C Programming Language</option>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="description">Description:</label>
				    <input type="text" class="form-control" id="description" name="description">
				  </div>
				  <div class="form-group">
				    <label for="email">Project Dateline:</label>
				    <input type="date" class="form-control" id="time" name="date">
				  </div>
				  <input type="submit" class="btn btn-primary" name="submitTT" value="POST">
				</form>
		      </div>
		    </div>
		  </div>
		</div>

		<!-- Modal Two teacher task sumite form-->
		<div class="modal fade" id="exampleModalLongstudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">Creat Project!</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form action="process/teacher/studentlist-process.php" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="email">Student List address:</label>
				    <input type="text" class="form-control" id="studentlist" name="file_address">
				  </div>
				  <input type="submit" class="btn btn-primary" name="submitTTT" value="Submit">
				</form>
		      </div>
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