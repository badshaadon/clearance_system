<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Registration</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="container-fluid bg-dark">
	<div style="background-image: url('image/winter.jpg'); background-repeat: no-repeat; background-size: cover; border: 5px solid gray;">
		<?php 
			include "navbar.php";
			require('database/db.php');
			if (isset($_REQUEST['username'])) {
				$username = stripslashes($_REQUEST['username']);
				$username = mysqli_real_escape_string($con, $username);
				$email    = stripslashes($_REQUEST['email']);
				$email    = mysqli_real_escape_string($con, $email);
				$password = stripslashes($_REQUEST['password']);
				$password = mysqli_real_escape_string($con, $password);
				$query    = "INSERT into `multi_login` (username, password, email, user_type) VALUES ('$username', '" . md5($password) . "', '$email', 'Student')";
				$result   = mysqli_query($con, $query) or die("can't add record" . mysqli_error($con));
				if ($result) {
					echo "<div class='jumbotron text-center py-5 text-warning'>
						<h1>You are registered successfully.</h1><br/>
						<h3 class='link py-5'>Click here to <a href='login.php'>Login</a></h3>
						</div>";
				} else {
					echo "<div class='form'>
						<h1>Required fields are missing.</h1><br/>
						<p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
						</div>";
				}
			} else {
			?>
		<form class="w-75 mx-auto text-warning my-3 container" method="post" name="register">
			<div class="row">
				<h1 class="col-sm-12 text-center bg-secondary p-3 mb-5 font-weight-bold" style="font-size: 5vw;">Registration</h1>
			</div>
			<div class="form-group row">
					<label for="username" class="col-sm-4 h3">Email</label>
					<input type="email" class="form-control col-sm-8" name="email" autofocus="true" required/>
			</div>
			<div class="form-group row">
					<label for="username" class="col-sm-4 h3">Username</label>
					<input type="text" class="form-control col-sm-8" name="username" required/>
			</div>
			<div class="form-group row">
					<label for="password" class="col-sm-4 h3">Password</label>
					<input type="password" class="form-control col-sm-8" name="password" required />
			</div>
			<div class="form-group row">
					<label for="confirm_password" class="col-sm-4 h3">Confirm Password</label>
					<input type="password" class="form-control col-sm-8" name="password" required />
			</div>
			<p class="link text-center"><a href="login.php" class="text-warning lead font-weight-bold">Click to Login</a></p>
			<div class="row">
					<button type="submit" name="submit" class="btn btn-block btn-primary">Submit</button>
			</div>
		</form>
		<?php
			}
		?>
		<?php 
			include "footer.php";
			include "scripts.php";
		?>
	</div>
</body>
</html>