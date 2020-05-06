<?php 
	include("../../session/auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Upload_Clearance_Receipt</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body class="container-fluid bg-dark">
	<?php include "../../navbar.php" ?>
	<div style="background-image: url('../../image/green_mountain.jpg'); background-repeat: no-repeat; background-size: cover; border: 5px solid gray;">
		<div class="jumbotron text-center py-5">
			<p class="display-4 text-warning">Upload Clearance Receipt</p>
		</div>
		<form action="upload.php" method="post" enctype="multipart/form-data" class="text-center mb-5">
			<h1 class="lead text-warning mb-2">Select image to upload</h1>
			<input class="btn btn-warning mr-5" type="file" name="fileToUpload" id="fileToUpload">
			<input class="btn btn-warning" type="submit" value="Upload Image" name="submit">
		</form>
		<?php 
			include "../../footer.php";
		?>
	<script src="../../js/jquery-3.4.1.slim.min.js"></script>
	<script src="../../js/popper.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
</body>
</html>