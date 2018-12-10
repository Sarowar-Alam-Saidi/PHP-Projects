<?php
  include("../config/connect.php");
  include("../config/session-teacher.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Teacher Home | Project Manegement</title>
	<link rel="stylesheet" type="text/css" href="../asset/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

	<div class="container-flude">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="../teacher-home.php">Project Management</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="../teacher-home.php">Home<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="assignment-list.php">Project List</a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="students-list.php">Student/Group List</a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="submitted-assignment-list.php">Submitted Project List</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../process/teacher/logout.php">Logout</a>
		      </li>
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
		    </ul>
		  </div>
		</nav>

	 <div class="container">
		<div class="card text-center" style="margin-top: 80px;">
		  <div class="card-header bg-dark">
		    <ul class="nav nav-tabs card-header-tabs">
		      <li class="nav-item">
		        <a class="nav-link active" href="#">Project List</a>
		      </li>
		    </ul>
		  </div>
		  <div class="card-body">
		    <h5 class="card-title">Project List</h5>
		    <table class="table">
			  <thead>
			    <tr>
			      <th scope="col">Project Title</th>
			      <th scope="col">Course Name</th>
			      <th scope="col">Dateline</th>
			    </tr>
			  </thead>
			  								<?php 

                                            $query = "select * from assignment order by 1 DESC";

                                            $run = mysqli_query($con,$query);
                                            while($row=mysqli_fetch_array($run)){
                                                $title = $row['assignment_title'];
                                                $name = $row['course_name'];
                                                $date = $row['date'];

                                            ?>
			  <tbody>
			    <tr>
			      <th scope="row"><?php echo $title; ?></th>
			      <td><?php echo $name; ?></td>
			      <td><?php echo $date; ?></td>
			    </tr>
			<?php } ?>
			  </tbody>
			</table>
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