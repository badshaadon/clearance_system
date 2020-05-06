<?php
	include("../../session/auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Student_Clearance_Receipt</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body class="container-fluid bg-dark">
	<div style="background-image: url('../../image/winter.jpg'); background-repeat: no-repeat; background-size: cover; border: 5px solid gray;">
		<?php include "../../navbar.php" ?>
		<div class="jumbotron text-center py-5">
			<p class="display-4 text-warning pt-5">Student Clerance Receipt</p>
			<p class="lead text-warning">Download your Clearnace Receipt</p>
			<button class="btn btn-success" type="button" name='download'>Download</button>
			<button class="btn btn-success" type="button" name='print'>Print Voucher</button>
		</div>
		<?php 
			include "../../footer.php";
		?>
	</div>
	<script src="../../js/jquery-3.4.1.slim.min.js"></script>
	<script src="../../js/popper.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
</body>
</html>