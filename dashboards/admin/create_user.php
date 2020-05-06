<?php
	include("../../session/auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Create_User -- Admin_Panel</title>
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body class="container-fluid bg-dark">
	<div style="background-image: url('../../image/winter.jpg'); background-repeat: no-repeat; background-size: cover; border: 5px solid gray;">
		<?php
			include "../../navbar.php";
			require('../../database/db.php');
			if (isset($_REQUEST['username'])) {
				$username = stripslashes($_REQUEST['username']);
				$username = mysqli_real_escape_string($con, $username);
				$email    = stripslashes($_REQUEST['email']);
				$email    = mysqli_real_escape_string($con, $email);
				$password = stripslashes($_REQUEST['password']);
				$password = mysqli_real_escape_string($con, $password);
				$user_type = stripslashes($_REQUEST['user_type']);
				$user_type = mysqli_real_escape_string($con, $user_type);
				$query    = "INSERT into `multi_login` (username, password, email, user_type) VALUES ('$username', '" . md5($password) . "', '$email', '$user_type')";
				$result   = mysqli_query($con, $query) or die("can't add record" . mysqli_error($con));
				if ($result) {
					echo "<div class='jumbotron bg-secondary jumbotron bg-secondary-fluid text-center text-warning'>
						<h1 class='display-4 font-weight-bold my-3'>You are registered successfully</h1>
						<hr />
						<p class='h4 my-3'>Click here to <a href='../../login.php'>Login</a></p>
				</div>";
				} else {
					echo "<div class='form'>
						<h3>Required fields are missing.</h3><br/>
						<p class='link'>Click here to <a href='../../create_user.php'>registration</a> again.</p>
						</div>";
				}
			} else {
		?>
		<form class="w-75 mx-auto text-warning py-5 container" method="post" name="login">
			<div class="row"><h1 class="col text-center display-1 bg-secondary p-3 mb-5 font-weight-bold">Create User</h1></div>
			<div class="form-group row">
				<label for="username" class="col-sm-4 h3">Email</label>
				<input type="email" class="form-control col-sm-8" name="email" autofocus="true" required/>
			</div>
			<div class="form-group row">
				<label for="username" class="col-sm-4 h3">Username</label>
				<input type="text" class="form-control col-sm-8" name="username" required/>
			</div>
			<div class="form-group row">
				<label for="user_type" class="col-sm-4 h3">User Type</label>
				<select class="form-control col-sm-8" name="user_type" required>
					<option>Student</option>
					<option>Admin</option>
					<option>Liberian</option>
					<option>Head of Department</option>
					<option>Sports Incharge</option>
					<option>Dean of Student Affair</option>
					<option>Accounts Incharge</option>
					<option>Cafe Incharge</option>
				</select>
			</div>
			<div class="form-group row">
				<label for="password" class="col-sm-4 h3">Password</label>
				<input type="password" class="form-control col-sm-8" name="password" required />
			</div>
			<div class="form-group row">
				<label for="confirm_password" class="col-sm-4 h3">Confirm Password</label>
				<input type="password" class="form-control col-sm-8" name="password" required />
			</div>
			<div class="row">
				<button type="submit" name="submit" class="btn btn-block btn-primary">Submit</button>
			</div>
		</form>
		<?php
			}
			include "../../footer.php" 
		?>
	</div>
	<script src="../../js/jquery-3.4.1.slim.min.js"></script>
	<script src="../../js/popper.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
</body>
</html>