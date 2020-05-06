<?php
  include("../../session/auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Feedback on Clearance Request</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body class="container-fluid bg-dark">
  <div style="background-image: url('../../image/winter.jpg'); background-repeat: no-repeat; background-size: cover; border: 5px solid gray; border: 5px solid gray;">
    <?php include "../../navbar.php" ?>
      <?php
        require('../../database/db.php');
        if (isset($_POST['feedback'])) {
          $fback = $_REQUEST['feedback'];
          $uf = $_SESSION['user_f'];
          $sql = "SELECT * FROM `feedback` WHERE username = '$uf'";
          $result = mysqli_query($con, $sql) or die(mysql_error());
          $flist = mysqli_fetch_assoc($result);
          $uname = $flist['username'];

          if((isset($_POST['feedback'])) && (mysqli_num_rows($result) == 0)) {
            $user_name = $_SESSION['user_f'];
            $query    = "INSERT into `feedback` (username, liberian) VALUES ('$user_name' ,'$fback')";
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
          } else if (isset($_POST['feedback'])) {
            $sql = "UPDATE `feedback` SET `liberian` = '$fback' WHERE `username` = '$uname'";
            if (mysqli_query($con, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($con);
            }
            mysqli_close($con);
          }
        } else {
      ?>
      <form action='user_feedback.php' method='post' class="w-75 mx-auto text-warning container">
      <div class="row">
          <h1 class="col text-center py-4 font-weight-bold display-4">Feedback on Student Clearance Request</h1>
        </div>
        <div class="form-group">
          <textarea name="feedback" id="fback" rows="10" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-block btn-success font-weight-bold mb-4"><h2>Submit</h2></button>
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