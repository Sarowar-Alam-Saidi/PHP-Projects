<!DOCTYPE html>
<html>
<head>
	<title>Project Management</title>
	<link rel="stylesheet" type="text/css" href="asset/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

	<div class="container-flude">
		<nav class="navbar navbar-expand-lg navbar-light" style="background: #db4011;">
		  <a class="navbar-brand" href="index.php"><img src="image/logo.png" style="width: 52px; height: 34px;"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">How to use</a>
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
			<div class="row" style="margin-top: 100px;">
				<div class="col-md-6">
					<div class="card text-center">
					  <div class="card-header" style="background: #bbaee2!important;">
					    Student
					  </div>
					  <div class="card-body">
					    <h5 class="card-title">Special Student</h5>
					    <p class="card-text">If you are not a registrated student,please sign up first.<span><a href="" data-toggle="modal" data-target="#exstudent">Sign Up</a></span></p>
					    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#example">Go For Login</a>
					  </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card text-center">
					  <div class="card-header" style="background: #55c1ba!important;">
					    Teacher
					  </div>
					  <div class="card-body">
					    <h5 class="card-title">Special Teacher</h5>
					    <p class="card-text">If you are not a registrated teacher,please sign up first.<span><a href="" data-toggle="modal" data-target="#exteacher">Sign Up</a></span></p>
					    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Go For Login</a>
					  </div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal for student login -->
		<div class="modal fade" id="example" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">Student Login</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form action="process/student/login-process.php" method="post">
				  <div class="form-group">
				    <label for="email">Stuent ID:</label>
				    <input type="text" class="form-control" id="email" name="student_id">
				  </div>
				  <div class="form-group">
				    <label for="pwd">Password:</label>
				    <input type="password" class="form-control" id="pwd" name="password">
				  </div>
				  <input type="submit" class="btn btn-primary" name="submit" value="Login">
				</form>
		      </div>
		    </div>
		  </div>
		</div>

		<!-- Modal Two teacher login-->
		<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">Teacher login</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form action="process/teacher/login-process.php" method="post">
				  <div class="form-group">
				    <label for="email">Teacher ID:</label>
				    <input type="text" class="form-control" id="email" name="teacher_id">
				  </div>
				  <div class="form-group">
				    <label for="pwd">Password:</label>
				    <input type="password" class="form-control" id="pwd" name="password">
				  </div>
				  <input type="submit" class="btn btn-primary" name="submit" value="Login">
				</form>
		      </div>
		    </div>
		  </div>
		</div>

		<!-- Modal Two for student sign up-->
		<div class="modal fade" id="exstudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">Student Sign up</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form action="process/student/student-signup.php" method="post">
		        	<div class="form-group">
				    <label for="id">Student ID:</label>
				    <input type="text" class="form-control" id="id" name="student_id">
				  </div>
				  <div class="form-group">
				    <label for="email">Email address:</label>
				    <input type="email" class="form-control" id="email" name="student_email">
				  </div>
				  <div class="form-group">
				    <label for="name">Student Full Name:</label>
				    <input type="text" class="form-control" id="name" name="student_name" >
				  </div>
				  <div class="form-group">
				    <label for="department">Student Department:</label>
				    <input type="text" class="form-control" id="department" name="student_department">
				  </div>
				  <div class="form-group">
				    <label for="advisor">Student Advisor:</label>
				    <input type="text" class="form-control" id="advisor" name="student_advisor">
				  </div>
				  <div class="form-group">
				    <label for="address">Student Address:</label>
				    <input type="text" class="form-control" id="address" name="student_address">
				  </div>
				  <div class="form-group">
				    <label for="pwd">Password:</label>
				    <input type="password" class="form-control" id="pwd" name="password">
				  </div>
				  <input type="submit" class="btn btn-primary" name="submit" value="Sign Up">
				</form>
		      </div>
		    </div>
		  </div>
		</div>

		<!-- Modal for teacher sign up -->
		<div class="modal fade" id="exteacher" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">Teacher Sign up</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form action="process/teacher/teacher-signup.php" method="post">
		        	<div class="form-group">
				    <label for="id">teacher ID:</label>
				    <input type="text" class="form-control" id="id" name="teacher_id">
				  </div>
				  <div class="form-group">
				    <label for="email">Email address:</label>
				    <input type="email" class="form-control" id="email" name="teacher_email">
				  </div>
				  <div class="form-group">
				    <label for="name">teacher Full Name:</label>
				    <input type="text" class="form-control" id="name" name="teacher_name" >
				  </div>
				  <div class="form-group">
				    <label for="department">teacher Department:</label>
				    <input type="text" class="form-control" id="department" name="teacher_department">
				  </div>
				  <div class="form-group">
				    <label for="address">teacher Address:</label>
				    <input type="text" class="form-control" id="address" name="teacher_address">
				  </div>
				  <div class="form-group">
				    <label for="pwd">Password:</label>
				    <input type="password" class="form-control" id="pwd" name="password">
				  </div>
				  <input type="submit" class="btn btn-primary" name="submitT" value="Sign Up">
				</form>
		      </div>
		    </div>
		  </div>
		</div>


		<div class="footer" style="background: #db4011;">
		  <p>Project Management Software</p>
		</div>
	</div>




	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>