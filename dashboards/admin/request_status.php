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
  <div style="background-image: url('../../image/green_mountain.jpg'); background-repeat: no-repeat; background-size: cover; border: 5px solid gray;">
    <?php include "../../navbar.php" ?>
    <h1 class='display-4 text-warning text-center p-5'>Clearance Request Status</h1>
      <?php
        $user_name = $_SESSION['request_status_user'];
        $sql = "SELECT * FROM `request_status` WHERE `username` = '$user_name'";
        $result = mysqli_query($con, $sql) or die(mysql_error());
        if(mysqli_num_rows($result) == 1) {
          while($creq = mysqli_fetch_array($result)) {
            echo "<div class='row w-75 mx-auto'>
              <div class='col-sm-6 text-warning text-center bg-success p-2'>
                <h1>Accepted Clearance Request</h1>
                ". ((($creq['account']) == 'accept') ? '<h2>Accounts Incharge</h2>' : '') ."
                ". ((($creq['cafe']) == 'accept') ? '<h2>Cafe Incharge</h2>' : '') ."
                ". ((($creq['dean']) == 'accept') ? '<h2>Dean of Student Affairs</h2>' : '') ."
                ". ((($creq['head']) == 'accept') ? '<h2>Head of Deparment</h2>' : '') ."
                ". ((($creq['liberian']) == 'accept') ? '<h2>Liberian</h2>' : '') ."
                ". ((($creq['sports']) == 'accept') ? '<h2>Sports Incharge</h2>' : '') ."
              </div>
              <div class='col-sm-6 text-warning text-center bg-success p-2'>
                <h1>Rejected Clearance Request</h1>
                ". ((($creq['account']) == 'reject') ? '<h2>Accounts Incharge</h2>' : '') ."
                ". ((($creq['cafe']) == 'reject') ? '<h2>Cafe Incharge</h2>' : '') ."
                ". ((($creq['dean']) == 'reject') ? '<h2>Dean of Student Affairs</h2>' : '') ."
                ". ((($creq['head']) == 'reject') ? '<h2>Head of Deparment</h2>' : '') ."
                ". ((($creq['liberian']) == 'reject') ? '<h2>Liberian</h2>' : '') ."
                ". ((($creq['sports']) == 'reject') ? '<h2>Sports Incharge</h2>' : '') ."
              </div>
            </div>";
          }
        }

        if ((isset($_POST['accept'])) || (isset($_POST['reject']))) {
          // accept
          if((isset($_POST['accept'])) && (mysqli_num_rows($result) == 0)) {
            $query    = "INSERT into `request_status` (username, `admin`) VALUES ('$user_name' ,'accept')";
            $result   = mysqli_query($con, $query) or die("can't add record" . mysqli_error($con));
            if ($result) {
              echo "<div class='jumbotron text-center my-3 py-5 text-warning'>
                <h1>Clearance Request Accepted</h1><br/>
                </div>";
            } else {
              echo "<div class='form'>
                <h1>Required fields are missing.</h1><br/>
                </div>";
            }
          } else if (isset($_POST['accept'])) {
            $sql = "UPDATE `request_status` SET `admin` = 'accept' WHERE `username` = '$user_name'";
            if (mysqli_query($con, $sql)) {
                echo "Clearance Request Accepted";
            } else {
                echo "Error updating record: " . mysqli_error($con);
            }
            mysqli_close($con);
          }
          // Reject
          if((isset($_POST['reject'])) && (mysqli_num_rows($result) == 0)) {
            $query    = "INSERT into `request_status` (username, `admin`) VALUES ('$user_name' ,'rejected')";
            $result   = mysqli_query($con, $query) or die("can't add record" . mysqli_error($con));
            if ($result) {
              echo "<div class='jumbotron text-center py-5 text-warning'>
                <h1>Clearance Request Rejected</h1><br/>
                </div>";
            } else {
              echo "<div class='form'>
                <h1>Required fields are missing.</h1><br/>
                </div>";
            }
          } else if (isset($_POST['reject'])) {
            $sql = "UPDATE `request_status` SET `admin` = 'reject' WHERE `username` = '$user_name'";
            if (mysqli_query($con, $sql)) {
                echo "Clearance Request Rejected";
            } else {
                echo "Error updating record: " . mysqli_error($con);
            }
            mysqli_close($con);
          }
        } else {
      ?>
      <form action='request_status.php' method='post' class="w-50 mx-auto py-5">
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