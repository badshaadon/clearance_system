<?php
  include("../../session/auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Students List</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body class="container-fluid bg-dark">
<div style="background-image: url('../../image/winter.jpg'); background-repeat: no-repeat; background-size: cover; border: 5px solid gray; border: 5px solid gray;">
    <?php include "../../navbar.php" ?>
    <div class="jumbotron text-center py-5">
    <h2 class="text-center text-warning display-4">Registered Student List</h2>
    </div>
    <?php
      include "../../database/db.php";
      $sql = "SELECT `username`, `email` FROM `multi_login` WHERE `user_type` = 'Student'";
      $result = mysqli_query($con, $sql);
      $row = mysqli_num_rows ( $result );
      echo "<table class='table table-hover table-bordered table-dark table-striped table-sm-responsive text-center text-warning'>
      <thead>
        <tr class='text-warning font-weight-bold display-4'>
          <th class='border border-success'>Username</th>
          <th class='border border-success'>Email</th>
        </tr>
      </thead>
      <tbody>";
      while($user = mysqli_fetch_array($result)) {
        echo "<tr class='text-warning font-weight-bold lead'>
          <td class='border border-success'>".$user['username']."</td>
          <td class='border border-success'>".$user['email']."</td>
          </tr>";
      }
    ?>
    </tbody></table>
    <?php
      include "../../footer.php";
    ?>
  </div>
  <script src="../../js/jquery-3.4.1.slim.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
</body>
</html>