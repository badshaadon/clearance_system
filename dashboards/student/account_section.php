<?php
	include("../../session/auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student_Account_Section</title>
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body class="container-fluid bg-dark">
	<div style="background-image: url('../../image/winter.jpg'); background-repeat: no-repeat; background-size: cover; border: 5px solid gray;">
		<?php include "../../navbar.php" ?>
		<div class="jumbotron text-center py-5">
			<p class="display-4 text-warning font-weight-bold">Welcome to Student Account Section</p>
		</div>
		<form action="upload.php" method="post" enctype="multipart/form-data" class="text-center mb-5">
			<p class="text-warning font-weight-bold">Select image to upload</p>					
			<input class="btn btn-success mr-5" type="file" name="fileToUpload" id="fileToUpload">
			<input class="btn btn-success" type="submit" value="Upload Image" name="submit">
		</form>
		<?php 
			include "../../footer.php";
		?>
	</div>
	<script src="../../js/jquery-3.4.1.slim.min.js"></script>
	<script src="../../js/popper.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
</body>
</html>