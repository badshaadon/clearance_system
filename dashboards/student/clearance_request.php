<?php
  include("../../session/auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Registration</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body class="container-fluid bg-dark">
  <div style="background-image: url('../../image/winter.jpg'); background-repeat: no-repeat; background-size: cover; border: 5px solid gray;">
    <?php include "../../navbar.php" ?>
    <?php
      require('../../database/db.php');
      if (isset($_REQUEST['submit'])) {
        $fname = stripslashes($_REQUEST['fname']);
        $fname = mysqli_real_escape_string($con, $fname);
        $lname    = stripslashes($_REQUEST['lname']);
        $lname    = mysqli_real_escape_string($con, $lname);
        $gender = stripslashes($_REQUEST['gender']);
        $gender = mysqli_real_escape_string($con, $gender);
        $birthday = stripslashes($_REQUEST['birthday']);
        $birthday = mysqli_real_escape_string($con, $birthday);
        $roll_no    = stripslashes($_REQUEST['roll_no']);
        $roll_no    = mysqli_real_escape_string($con, $roll_no);
        $reg_no = stripslashes($_REQUEST['reg_no']);
        $reg_no = mysqli_real_escape_string($con, $reg_no);
        $library_card_no = stripslashes($_REQUEST['library_card_no']);
        $library_card_no = mysqli_real_escape_string($con, $library_card_no);
        $course_name    = stripslashes($_REQUEST['course_name']);
        $course_name    = mysqli_real_escape_string($con, $course_name);
        $admission_date = stripslashes($_REQUEST['admission_date']);
        $admission_date = mysqli_real_escape_string($con, $admission_date);
        $course_compeletion_date = stripslashes($_REQUEST['course_compeletion_date']);
        $course_compeletion_date = mysqli_real_escape_string($con, $course_compeletion_date);
        $course_duration    = stripslashes($_REQUEST['course_duration']);
        $course_duration    = mysqli_real_escape_string($con, $course_duration);
        $cgpa = stripslashes($_REQUEST['cgpa']);
        $cgpa = mysqli_real_escape_string($con, $cgpa);
        $username = $_SESSION["username"];
        $query = "INSERT INTO `clearance_request`(`firstname`, `lastname`, `gender`, `birthdate`, `roll_no`, `reg_no`, `library_card_no`, `course_name`, `admission_date`, `course_completion_date`, `course_duration`, `CGPA`, `username`) VALUES ('$fname', '$lname', '$gender', '$birthday', '$roll_no', '$reg_no', '$library_card_no', '$course_name', '$admission_date', '$course_compeletion_date', '$course_duration', '$cgpa', '$username')";
        $result   = mysqli_query($con, $query) or die("can't add record " . mysqli_error($con));
        if ($result) {
          echo "<div class='jumbotron text-center py-5 text-warning'>
            <h1 class='display-4'>You Successfully Submitted Clearance Request </h1><br/>
            <h5 class='pt-5'>Click here <a href='student_dashboard.php'>Dashboard</a> to go back to Student Dashboard Page.</h5>
          	</div>";
        } else {
          echo "<div class='form'>
            <h1>Three is some Error in Submitting Clearance Request</h1><br/>
            <p class='link'>Click here <a href='clearance_request.php'>Clearance Request</a> to try again.</p>
            </div>";
        }
      } else {
    ?>
		<form class="w-75 mx-auto text-warning my-3 container" method="post" name="register">
			<div class="row"><h1 class="col-sm-12 text-center display-4 p-3 mb-5 font-weight-bold">Send Clearance Request</h1></div>
			<div class="form-group row">
					<label for="fname" class="col-sm-4 h4">First Name</label>
					<input type="text" class="form-control col-sm-8" name="fname" autofocus="true" required/>
			</div>
			<div class="form-group row">
				<label for="lname" class="col-sm-4 h4">Last Name</label>
				<input type="text" class="form-control col-sm-8" name="lname" required/>
			</div>
			<div class="form-group row">
				<label for="gender" class="col-sm-4 h4">Gender</label>
			<div class="form-check col-sm-2 h4 pl-5">
				<label class="form-check-label">
					<input type="radio" class="form-check-input" name="gender" value="male">Male
				</label>
			</div>
			<div class="form-check col-sm-2 col-offset-sm-4 h4 pl-5">
				<label class="form-check-label">
					<input type="radio" class="form-check-input" name="gender" value="female">Female
				</label>
				</div>
			</div>
			<div class="form-group row">
				<label for="birthday" class="col-sm-4 h4">Birthday</label>
				<input type="date" class="form-control col-sm-8" name="birthday" required />
			</div>
			<div class="form-group row">
				<label for="roll_no" class="col-sm-4 h4">Roll No.</label>
				<input type="text" class="form-control col-sm-8" name="roll_no" required />
			</div>
			<div class="form-group row">
				<label for="reg_no" class="col-sm-4 h4">Registration No.</label>
				<input type="text" class="form-control col-sm-8" name="reg_no" required />
			</div>
			<div class="form-group row">
				<label for="library_card_no" class="col-sm-4 h4">Library Card No.</label>
				<input type="text" class="form-control col-sm-8" name="library_card_no" required />
			</div>
			<div class="form-group row">
				<label for="course_name" class="col-sm-4 h4">Course Name</label>
				<input type="text" class="form-control col-sm-8" name="course_name" required />
			</div>
			<div class="form-group row">
				<label for="admission_date" class="col-sm-4 h4">Admission Date</label>
				<input type="date" class="form-control col-sm-8" name="admission_date" required />
			</div>
			<div class="form-group row">
				<label for="course_compeletion_date" class="col-sm-4 h4">Course Compeletion Date</label>
				<input type="date" class="form-control col-sm-8" name="course_compeletion_date" required />
			</div>
			<div class="form-group row">
				<label for="course_duration" class="col-sm-4 h4">Course Duration</label>
				<input type="text" class="form-control col-sm-8" name="course_duration" required />
			</div>
			<div class="form-group row">
				<label for="cgpa" class="col-sm-4 h4">CGPA</label>
				<input type="text" class="form-control col-sm-8" name="cgpa" required />
			</div>
			<div class="row">
			<button type="submit" name="submit" class="btn btn-block btn-primary">Send</button>
			</div>
		</form>
		<?php
			}
		?>
	<?php 
		include "../../footer.php";
	?>
	</div>
  <script src="../../js/jquery-3.4.1.slim.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
</body>
</html>