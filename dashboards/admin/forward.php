<?php
  include("../../session/auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body class="container-fluid bg-dark">
	<div style="background-image: url('../../image/green_mountain.jpg'); background-repeat: no-repeat; background-size: cover; border: 5px solid gray;">
	<?php
		include "../../navbar.php";
		include "../../database/db.php";
	?>
	<div class="jumbotron text-center py-5">
			<p class="display-4 text-warning">Forward to Departments</p>
	</div>
	<div class="text-center">
		<form action="forward.php" method="post" class="btn-group-vertical text-align-center w-25">
			<button type="submit" name="all" class="btn btn-primary btn-lg m-1 font-weight-bold">Forward To All</button>
			<button type="submit" name="account" class="btn btn-primary btn-lg m-1 font-weight-bold">Accounts Incharge</button>
			<button type="submit" name="cafe" class="btn btn-primary btn-lg m-1 font-weight-bold">Cafe Incharge</button>
			<button type="submit" name="dean" class="btn btn-primary btn-lg m-1 font-weight-bold">Dean of Student Affairs</button>
			<button type="submit" name="head" class="btn btn-primary btn-lg m-1 font-weight-bold">Head of Department</button>
			<button type="submit" name="liberian" class="btn btn-primary btn-lg m-1 font-weight-bold">Liberian</button>
			<button type="submit" name="sports" class="btn btn-primary btn-lg m-1 font-weight-bold">Sports Incharge</button>
		</form>
	</div> 
	<?php
		$un = $_SESSION['user_forward'];
		$sql = "SELECT * FROM `forward` WHERE username = '$un'";
		$result = mysqli_query($con, $sql) or die(mysql_error());
		$flist = mysqli_fetch_assoc($result);
		$uname = $flist['username'];

		if(mysqli_num_rows($result) == 1) {
			if(($flist['account'] == "yes") && (($flist['cafe'] == "yes")) && (($flist['dean'] == "yes")) && (($flist['head'] == "yes")) && (($flist['liberian'] == "yes")) && (($flist['sports'] == "yes"))) {
				echo "<h1 class='text-warning text-center py-5'>You already forwarded this clearance request to all departments.</h1>";
			} else if(($flist['account'] == "no") && (($flist['cafe'] == "no")) && (($flist['dean'] == "no")) && (($flist['head'] == "no")) && (($flist['liberian'] == "no")) && (($flist['sports'] == "no"))) {
				echo "<h1 class='text-warning text-center py-5'>You haven't forwarded this clearance request to any departments yet.</h1>";
			} else {
				if($flist['account'] == "yes") {
					echo "<h1 class='text-warning text-center py-2'>Already forwarded to Accounts Department.</h1>";
				}
				if($flist['cafe'] == "yes") {
					echo "<h1 class='text-warning text-center py-2'>Already forwarded to Cafe Department.";
				}
				if($flist['dean'] == "yes") {
					echo "<h1 class='text-warning text-center py-2'>Already forwarded to Dean Department.</h1>";
				}
				if($flist['head'] == "yes") {
					echo "<h1 class='text-warning text-center py-2'>Already forwarded to Head Department.</h1>";
				}
				if($flist['liberian'] == "yes") {
					echo "<h1 class='text-warning text-center py-2'>Already forwarded to Liberian Department.</h1>";
				}
				if($flist['sports'] == "yes") {
					echo "<h1 class='text-warning text-center py-2'>Already forwarded to Sports Department.</h1>";
				}
			}
		}
		if((isset($_POST['all'])) && (mysqli_num_rows($result) == 0)) {
			$user_name = $_SESSION['user_forward'];
			$query    = "INSERT into `forward` (username, account, cafe, dean, head, liberian, sports) VALUES ('$user_name' ,'yes', 'yes', 'yes', 'yes', 'yes', 'yes')";
			$result   = mysqli_query($con, $query) or die("can't add record" . mysqli_error($con));
			if ($result) {
				echo "<div class='jumbotron text-center py-5 text-warning'>
					<h1>You are registered successfully.</h1><br/>
					<h3 class='link py-5'>Click here to <a href='login.php'>Login</a></h3>
					</div>";
					echo $uname;
			} else {
				echo "<div class='form'>
					<h1>Required fields are missing.</h1><br/>
					<p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
					</div>";
			}
		} else if (isset($_POST['all'])) {
				$sql = "UPDATE `forward` SET `account` = 'yes', `cafe` = 'yes', `dean` = 'yes', `head` = 'yes', `liberian` = 'yes', `sports` = 'yes' WHERE `username` = '$uname'";
				
				if (mysqli_query($con, $sql)) {
						echo "Record updated successfully";
				} else {
						echo "Error updating record: " . mysqli_error($con);
				}
				mysqli_close($con);
			}

			if((isset($_POST['account']) && (mysqli_num_rows($result) == 0))) {
				$user_name = $_SESSION['user_forward'];
				$query    = "INSERT into `forward` (username, account) VALUES ('$user_name' ,'yes')";
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
			} else if (isset($_POST['account'])) {
				$sql = "UPDATE `forward` SET `account` = 'yes' WHERE `username` = '$uname'";
				
				if (mysqli_query($con, $sql)) {
						echo "Record updated successfully";
				} else {
						echo "Error updating record: " . mysqli_error($con);
				}
				mysqli_close($con);
		}

		if((isset($_POST['cafe']) && (mysqli_num_rows($result) == 0))) {
			$user_name = $_SESSION['user_forward'];
			$query    = "INSERT into `forward` (username, cafe) VALUES ('$user_name' ,'yes')";
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
		} else if (isset($_POST['cafe'])) {
				$sql = "UPDATE `forward` SET `cafe` = 'yes' WHERE `username` = '$uname'";
				
				if (mysqli_query($con, $sql)) {
						echo "Record updated successfully";
				} else {
						echo "Error updating record: " . mysqli_error($con);
				}
				mysqli_close($con);
		}

		if((isset($_POST['dean']) && (mysqli_num_rows($result) == 0))) {
			$user_name = $_SESSION['user_forward'];
			$query    = "INSERT into `forward` (username, dean) VALUES ('$user_name' ,'yes')";
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
		} else if (isset($_POST['dean'])) {
				$sql = "UPDATE `forward` SET `dean` = 'yes' WHERE `username` = '$uname'";
				
				if (mysqli_query($con, $sql)) {
						echo "Record updated successfully";
				} else {
						echo "Error updating record: " . mysqli_error($con);
				}
				mysqli_close($con);
		}

		if((isset($_POST['head']) && (mysqli_num_rows($result) == 0))) {
			$user_name = $_SESSION['user_forward'];
			$query    = "INSERT into `forward` (username, head) VALUES ('$user_name' ,'yes')";
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
		} else if (isset($_POST['head'])) {
				$sql = "UPDATE `forward` SET `head` = 'yes' WHERE `username` = '$uname'";
				
				if (mysqli_query($con, $sql)) {
						echo "Record updated successfully";
				} else {
						echo "Error updating record: " . mysqli_error($con);
				}
				mysqli_close($con);
		}

		if((isset($_POST['liberian']) && (mysqli_num_rows($result) == 0))) {
			$user_name = $_SESSION['user_forward'];
			$query    = "INSERT into `forward` (username, liberian) VALUES ('$user_name' ,'yes')";
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
		} else if (isset($_POST['liberian'])) {
				$sql = "UPDATE `forward` SET `liberian` = 'yes' WHERE `username` = '$uname'";
				
				if (mysqli_query($con, $sql)) {
						echo "Record updated successfully";
				} else {
						echo "Error updating record: " . mysqli_error($con);
				}
				mysqli_close($con);
		}

		if((isset($_POST['sports']) && (mysqli_num_rows($result) == 0))) {
			$user_name = $_SESSION['user_forward'];
			$query    = "INSERT into `forward` (username, sports) VALUES ('$user_name' ,'yes')";
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
		} else if (isset($_POST['sports'])) {
				$sql = "UPDATE `forward` SET `sports` = 'yes' WHERE `username` = '$uname'";
				
				if (mysqli_query($con, $sql)) {
						echo "Record updated successfully";
				} else {
						echo "Error updating record: " . mysqli_error($con);
				}
				mysqli_close($con);
		}
		include "../../footer.php";
	?>
	</div>
	<script src="../../js/jquery-3.4.1.slim.min.js"></script>
	<script src="../../js/popper.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
</body>
</html>