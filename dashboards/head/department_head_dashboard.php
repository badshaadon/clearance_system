<?php
	include("../../session/auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Head of Department Dashboard</title>
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body class="container-fluid bg-dark">
	<div style="background-image: url('image/winter.jpg'); background-repeat: no-repeat; background-size: cover; border: 5px solid gray;">
    <?php 
			include "../../navbar.php";
			include "../../carousel.php";
			include "../../footer.php";
    ?>
	</div>
	<script src="../../js/jquery-3.4.1.slim.min.js"></script>
	<script src="../../js/popper.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
</body>
</html>