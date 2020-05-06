<?php
  include "../../session/auth_session.php";
  include "../../database/db.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Clearance Status</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body class="container-fluid bg-dark">
  <div style="background-image: url('../../image/winter_mountain.jpg'); background-repeat: no-repeat; background-size: cover; border: 5px solid gray;">
    <?php include "../../navbar.php" ?>
      <h1 class='display-4 text-warning text-center font-weight-bold p-5'>Clearance Request Status</h1>
      <?php
        if ((isset($_POST['accept'])) || (isset($_POST['reject']))) {
          $user_name = $_SESSION['request_status_user'];
          $sql = "SELECT * FROM `request_status` WHERE `username` = '$user_name'";
          $result = mysqli_query($con, $sql) or die(mysql_error());
          // accept
          if((isset($_POST['accept'])) && (mysqli_num_rows($result) == 0)) {
            $query    = "INSERT into `request_status` (username, sports) VALUES ('$user_name' ,'accept')";
            $result   = mysqli_query($con, $query) or die("can't add record" . mysqli_error($con));
            if ($result) {
              echo "<div class='jumbotron text-center py-5 text-warning'>
                <h1>Clearance Request Accepted</h1><br/>
                <h3 class='link py-5'>Click here to <a href='login.php'>Login</a></h3>
                </div>";
                echo $user_name;
            } else {
              echo "<div class='form'>
                <h1>Required fields are missing.</h1><br/>
                <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                </div>";
            }
          } else if (isset($_POST['accept'])) {
            $sql = "UPDATE `request_status` SET `sports` = 'accept' WHERE `username` = '$user_name'";
            if (mysqli_query($con, $sql)) {
                echo "Clearance Request Accepted";
            } else {
                echo "Error updating record: " . mysqli_error($con);
            }
            mysqli_close($con);
          }
          // Reject
          if((isset($_POST['reject'])) && (mysqli_num_rows($result) == 0)) {
            $query    = "INSERT into `request_status` (username, sports) VALUES ('$user_name' ,'rejected')";
            $result   = mysqli_query($con, $query) or die("can't add record" . mysqli_error($con));
            if ($result) {
              echo "<div class='jumbotron text-center py-5 text-warning'>
                <h1>Clearance Request Rejected</h1><br/>
                <h3 class='link py-5'>Click here to <a href='login.php'>Login</a></h3>
                </div>";
                echo $user_name;
            } else {
              echo "<div class='form'>
                <h1>Required fields are missing.</h1><br/>
                <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                </div>";
            }
          } else if (isset($_POST['reject'])) {
            $sql = "UPDATE `request_status` SET `sports` = 'reject' WHERE `username` = '$user_name'";
            if (mysqli_query($con, $sql)) {
                echo "Clearance Request Rejected";
            } else {
                echo "Error updating record: " . mysqli_error($con);
            }
            mysqli_close($con);
          }
        } else {
      ?>
      <form action='request_status.php' method='post' class="w-50 mx-auto pb-5">
        <button name="accept" class="btn btn-block btn-success font-weight-bold" type="submit"><h4>Accept</h4></button>
        <button name="reject" class="btn btn-block btn-success font-weight-bold" type="submit"><h4>Reject</h4></button>
      </form>
  <?php
    }
      include "../../footer.php";
 ?>
  </div>
  <script src="../../js/jquery-3.4.1.slim.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
</body>
</html>