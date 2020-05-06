<?php
  include "../../session/auth_session.php";
  include "../../database/db.php"
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Feedback on Clearance Request</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body class="container-fluid bg-dark">
  <div style="background-image: url('../../image/winter.jpg'); background-repeat: no-repeat; background-size: cover; border: 5px solid gray; border: 5px solid gray;">
    <?php include "../../navbar.php" ?>
      <div class="jumbotron text-center py-5">
        <p class="display-4 text-warning font-weight-bold">Feedbacks on Clearance Request From diffrent Departments</p>
      </div>
      <?php
        $user_name = $_SESSION['user_feedback'];
        $sql = "SELECT * FROM `feedback` WHERE `username` = '$user_name'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_num_rows ($result);
        while($fb = mysqli_fetch_array($result)) {
          if($fb['username'] == $_SESSION['user_feedback']) {
            if($fb['account'] != NULL) {
              echo "<div class='row p-2 m-1 text-warning bg-dark w-75 mx-auto' style='border: 5px solid gray;'>
                <h3 class='text-success col-sm-4'>Account Incharge</h3>
                <p class='lead col-sm-8'>" . $fb['account'] . "</p>
                </div>";
            }
            if($fb['cafe'] != NULL) {
              echo "<div class='row p-2 m-1 text-warning bg-dark w-75 mx-auto' style='border: 5px solid gray;'>
                <h3 class='text-success col-sm-4'>Cafe Incharge</h3>
                <p class='lead col-sm-8'>" . $fb['cafe'] . "</p>
                </div>";
            }
            if($fb['dean'] != NULL) {
              echo "<div class='row p-2 m-1 text-warning bg-dark w-75 mx-auto' style='border: 5px solid gray;'>
                <h3 class='text-success col-sm-4'>Dean of Student Affairs</h3>
                <p class='lead col-sm-8'>" . $fb['dean'] . "</p>
                </div>";
            }
            if($fb['head'] != NULL) {
              echo "<div class='row p-2 m-1 text-warning bg-dark w-75 mx-auto' style='border: 5px solid gray;'>
                <h3 class='text-success col-sm-4'>Head of Department</h3>
                <p class='lead col-sm-8'>" . $fb['head'] . "</p>
                </div>";
            }
            if($fb['liberian'] != NULL) {
              echo "<div class='row p-2 m-1 text-warning bg-dark w-75 mx-auto' style='border: 5px solid gray;'>
                <h3 class='text-success col-sm-4'>Liberian</h3>
                <p class='lead col-sm-8'>" . $fb['liberian'] . "</p>
                </div>";
            }
            if($fb['sports'] != NULL) {
              echo "<div class='row p-2 m-1 text-warning bg-dark w-75 mx-auto' style='border: 5px solid gray;'>
                <h3 class='text-success col-sm-4'>Sports Incharge</h3>
                <p class='lead col-sm-8'>" . $fb['sports'] . "</p>
                </div>";
            }
          }
        }
        echo "<div class='mb-4'></div>";
        include "../../footer.php";
      ?>
  </div>
  <script src="../../js/jquery-3.4.1.slim.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
</body>
</html>