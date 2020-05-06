<?php
	include("../../session/auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User Details</title>
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body class="container-fluid bg-dark">
<div style="background-image: url('../../image/winter.jpg'); background-repeat: no-repeat; background-size: cover; border: 5px solid gray;">
		<?php include "../../navbar.php" ?>
		<div class="jumbotron text-center py-2">
			<p class="display-1 text-warning font-weight-bold">User Details</p>
		</div>
		<?php
			echo "<table class='table table-hover table-dark table-striped text-center text-warning container'><tbody>
			<tr class='h4'>
				<td class='border border-success'>UserName</td>
				<td class='border border-success'>".$_SESSION['u1']."</td>
				</tr>
				<tr class='h4'>
				<td class='border border-success'>First Name</td>
				<td class='border border-success'>".$_SESSION['f1']."</td>
				</tr>
				<tr class='h4'>
				<td class='border border-success'>Last Name</td>
				<td class='border border-success'>".$_SESSION['l1']."</td>
				</tr>
				<tr class='h4'>
				<td class='border border-success'>Gender</td>
				<td class='border border-success'>".$_SESSION['g1']."</td>
				</tr>
				<tr class='h4'>
				<td class='border border-success'>BirthDay</td>
				<td class='border border-success'>".$_SESSION['b1']."</td>
				</tr>
				<tr class='h4'>
				<td class='border border-success'>Roll No</td>
				<td class='border border-success'>".$_SESSION['rn1']."</td>
				</tr>
				<tr class='h4'>
				<td class='border border-success'>Registration No</td>
				<td class='border border-success'>".$_SESSION['reg1']."</td>
				</tr>
				<tr class='h4'>
				<td class='border border-success'>Library Card No</td>
				<td class='border border-success'>".$_SESSION['lcn1']."</td>
				</tr>
				<tr class='h4'>
				<td class='border border-success'>Course Name</td>
				<td class='border border-success'>".$_SESSION['cn1']."</td>
				</tr>
				<tr class='h4'>
				<td class='border border-success'>Admission Date</td>
				<td class='border border-success'>".$_SESSION['ad1']."</td>
				</tr>
				<tr class='h4'>
				<td class='border border-success'>Course Compeletion Date</td>
				<td class='border border-success'>".$_SESSION['ccd1']."</td>
				</tr>
				<tr class='h4'>
				<td class='border border-success'>Course Duration</td>
				<td class='border border-success'>".$_SESSION['cd1']."</td>
				</tr>
				<tr class='h4'>
				<td class='border border-success'>CGPA</td>
				<td class='border border-success'>".$_SESSION['cg1']."</td>
				</tr>
				</tbody></table>";
			include "../../footer.php";
		?>
	</div>
	<script src="../../js/jquery-3.4.1.slim.min.js"></script>
	<script src="../../js/popper.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
</body>
</html>