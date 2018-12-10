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
		        <a class="nav-link" href="student-list.php">Student List</a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="project.php">Project</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="process/student/logout.php">Logout</a>
		      </li>
		      <!-- <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Dropdown
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">Action</a>
		          <a class="dropdown-item" href="#">Another action</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="#">Something else here</a>
		        </div>
		      </li> -->
		      <!-- <li class="nav-item">
		        <a class="nav-link disabled" href="#">Disabled</a>
		      </li> -->
		    </ul>
<!-- 		    <div class="my-2 my-lg-0">
		      <a href="login.html" class="btn btn-outline-success my-2 my-sm-0">Login</a>
		    </div> -->
		  </div>
		</nav>
		<div class="container">
			
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">Submit Project Here</h5>
		      </div>
		      <div class="modal-body">

		        <form action="process/student/assignment-process.php" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				    <input type="text" class="form-control" id="student_id" name="student_id" value="<?php echo $student_id; ?>" readonly>
				  </div>
				  <div class="form-group">
				  	<?php
						if (isset($_GET['gettitle'])) {
						
					?>
				    <input type="text" class="form-control" name="assignment_title" value="<?php echo $_GET['gettitle']; ?>" readonly>
				<?php } ?>
				  </div>
				  <div class="form-group">
				    <label for="">Upload Project file</label>
				    <input type="file" class="form-control" id="pdf" name="pdf">
				  </div>
				  <input type="submit" class="btn btn-primary" name="submit" value="Submit">
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