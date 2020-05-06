<?php
  include("../../session/auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Departments of Clearance Section -- Dashboard</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body class="container-fluid bg-dark">
  <div style="background-image: url('../../image/green_mountain.jpg'); background-repeat: no-repeat; background-size: cover; border: 5px solid gray;">
    <?php include "../../navbar.php"; ?>
    <div class="jumbotron text-center py-5">
      <h1 class="text-warning">Members of All Departments</h1>
    </div>
    <?php
      include "../../database/db.php";
      $sql = "SELECT `username`, `email`, `user_type` FROM `multi_login` WHERE `user_type` <> 'Student'";
      $result = mysqli_query($con, $sql);
      $row = mysqli_num_rows ( $result );
      echo "<form method='post' action='#' class='form-inline justify-content-center'>
          <button class='bg-dark text-warning p-2 h5' name='all'>All</button>
          <button class='bg-dark text-warning p-2 h5' name='account'>Accounts Incharge</button>
          <button class='bg-dark text-warning p-2 h5' name='cafe'>Cafe Incharge</button>
          <button class='bg-dark text-warning p-2 h5' name='dean'>Dean of Student Affair</button>
          <button class='bg-dark text-warning p-2 h5' name='head'>Head of Department</button>
          <button class='bg-dark text-warning p-2 h5' name='liberian'>Liberian</button>
          <button class='bg-dark text-warning p-2 h5' name='sports'>Sports Incharge</button>
        </form>
      <table class='table table-hover table-bordered table-dark table-striped table-sm-responsive text-center text-warning'><thead>
        <tr class='text-warning font-weight-bold display-4'>
        <th class='border border-success'>Username</th>
            <th class='border border-success'>Email</th>
            <th class='border border-success'>UserType</th>
            </tr>
            </thead>
            <tbody>";
      while($user = mysqli_fetch_array($result)) {
        if(($user['user_type'] != 'NULL') && (!isset($_POST['account'])) && (!isset($_POST['cafe'])) && (!isset($_POST['dean'])) && (!isset($_POST['head'])) && (!isset($_POST['liberian'])) && (!isset($_POST['sports'])) ) {
          echo "<tr class='text-warning font-weight-bold'>
            <td class='border border-success'>".$user['username']."</td>
            <td class='border border-success'>".$user['email']."</td>
            <td class='border border-success'>".$user['user_type']."</td></tr>";
        } else if(($user['user_type'] == 'Accounts Incharge') && (isset($_POST['account'])) ) {
          echo "<tr class='text-warning font-weight-bold'>
            <td class='border border-success'>".$user['username']."</td>
            <td class='border border-success'>".$user['email']."</td>
            <td class='border border-success'>".$user['user_type']."</td></tr>";
        } else if(($user['user_type'] == 'Cafe Incharge') && (isset($_POST['cafe'])) ) {
          echo "<tr class='text-warning font-weight-bold'>
              <td class='border border-success'>".$user['username']."</td>
              <td class='border border-success'>".$user['email']."</td>
              <td class='border border-success'>".$user['user_type']."</td></tr>";
        } else if(($user['user_type'] == 'Dean of Student Affair') && (isset($_POST['dean'])) ) {
          echo "<tr class='text-warning font-weight-bold'>
              <td class='border border-success'>".$user['username']."</td>
              <td class='border border-success'>".$user['email']."</td>
              <td class='border border-success'>".$user['user_type']."</td></tr>";
        } else if(($user['user_type'] == 'Head of Department') && (isset($_POST['head'])) ) {
          echo "<tr class='text-warning font-weight-bold'>
              <td class='border border-success'>".$user['username']."</td>
              <td class='border border-success'>".$user['email']."</td>
              <td class='border border-success'>".$user['user_type']."</td></tr>";
        } else if(($user['user_type'] == 'Liberian') && (isset($_POST['liberian'])) ) {
          echo "<tr class='text-warning font-weight-bold'>
              <td class='border border-success'>".$user['username']."</td>
              <td class='border border-success'>".$user['email']."</td>
              <td class='border border-success'>".$user['user_type']."</td></tr>";
        } else if(($user['user_type'] == 'Sports Incharge') && (isset($_POST['sports'])) ) {
          echo "<tr class='text-warning font-weight-bold'>
            <td class='border border-success'>".$user['username']."</td>
            <td class='border border-success'>".$user['email']."</td>
            <td class='border border-success'>".$user['user_type']."</td></tr>";
        }
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