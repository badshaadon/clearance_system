<?php
  include("../../session/auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Clearance_Requests</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body class="container-fluid bg-dark">
  <div style="background-image: url('../../image/winter_mountain.jpg'); background-repeat: no-repeat; background-size: cover; border: 5px solid gray;">
    <?php include "../../navbar.php" ?>
    <div class="jumbotron text-center py-5">
      <h2 class="display-1 text-center text-warning">Clearance Requests</h2>
    </div>
    <?php
      include "../../database/db.php";
      $sql = "SELECT `username` FROM `forward` WHERE `account` = 'yes'";
      $result = mysqli_query($con, $sql);
      $sql1 = "SELECT `username`, `firstname`, `lastname`, `gender`, `birthdate`, `roll_no`, `reg_no`, `library_card_no`, `course_name`, `admission_date`, `course_completion_date`, `course_duration`, `CGPA` FROM `clearance_request` WHERE 1";
      $result1 = mysqli_query($con, $sql1);
      $row = mysqli_num_rows ( $result );
      echo "<table class='table table-hover table-bordered table-dark table-striped text-center text-warning'>
      <thead>
        <tr class='display-4'>
          <th class='border border-success'>Username</th>
          <th class='border border-success'>Actions</th>
        </tr>
      </thead>
      <tbody>";
      while($user = mysqli_fetch_array($result)) {
        $u = $user['username'];
        $u_1 = 1 . $user['username'];
        $u_2 = 2 . $user['username'];
        echo "<tbody><tr class='h4'>
        <td class='border border-success'>".$user['username']."</td>
        <td class='border border-success'><form class='btn btn-lg p-2' action='' method='post'>
            <button class='btn btn-success' name='".$u."' type='submit'>User Details</button>
          </form>
          <form class='btn btn-lg p-2' action='' method='post'>
            <button class='btn btn-success' name='".$u_1."' type='submit'>Feedback</button>
          </form>
          <form class='btn btn-lg p-2' action='' method='post'>
            <button class='btn btn-success' name='".$u_2."' type='submit'>Request Status</button>
          </form>
        </td></tr>";
        if (isset($_POST[$u])) {
          while($user1 = mysqli_fetch_array($result1)) {
            if($user1['username'] == $user['username']) {
              $_SESSION['u1'] = $user1['username'];
              $_SESSION['f1'] = $user1['firstname'];
              $_SESSION['l1'] = $user1['lastname'];
              $_SESSION['g1'] = $user1['gender'];
              $_SESSION['b1'] = $user1['birthdate'];
              $_SESSION['rn1'] = $user1['roll_no'];
              $_SESSION['reg1'] = $user1['reg_no'];
              $_SESSION['lcn1'] = $user1['library_card_no'];
              $_SESSION['cn1'] = $user1['course_name'];
              $_SESSION['ad1'] = $user1['admission_date'];
              $_SESSION['ccd1'] = $user1['course_completion_date'];
              $_SESSION['cd1'] = $user1['course_duration'];
              $_SESSION['cg1'] = $user1['CGPA'];
              header("Location: user_details.php");
            }
          }
        } else if (isset($_POST[$u_1])) {
          $_SESSION['user_f'] = $user['username'];;
          header("Location: user_feedback.php");
        } else if (isset($_POST[$u_2])) {
          $_SESSION['request_status_user'] = $user['username'];;
          header("Location: request_status.php");
        }
      }
      echo "</tbody></table>";
      include "../../footer.php";
    ?>
  </div>
  <script src="../../js/jquery-3.4.1.slim.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
</body>
</html>