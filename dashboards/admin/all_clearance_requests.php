<?php
include "../../session/auth_session.php";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>All_Received_Clearance_Requests</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>

<body class="container-fluid bg-dark">
  <div style="background-image: url('../../image/green_mountain.jpg'); background-repeat: no-repeat; background-size: cover; border: 5px solid gray;">
    <?php
    include "../../navbar.php";
    ?>
    <div class="jumbotron text-center py-5">
      <h2 class="display-1 text-center text-warning">Clearance Requests</h2>
    </div>
    <?php
    include "../../database/db.php";
    $sql = "SELECT `username`, `firstname`, `lastname`, `gender`, `birthdate`, `roll_no`, `reg_no`, `library_card_no`, `course_name`, `admission_date`, `course_completion_date`, `course_duration`, `CGPA` FROM `clearance_request` WHERE 1";
    $result = mysqli_query($con, $sql);
    echo "<table class='table table-hover table-bordered table-dark table-striped table-sm-responsive text-center text-warning'>
      <thead>
        <tr class='display-4'>
          <th class='border border-success'>Username</th>
          <th class='border border-success'>Actions</th>
        </tr></thead>";
    while ($user = mysqli_fetch_array($result)) {
      $u = $user['username'];
      $u_1 = 1 . $user['username'];
      $u_2 = 2 . $user['username'];
      $u_3 = 3 . $user['username'];
      $u_4 = 4 . $user['username'];
      echo "<tbody><tr class='h4'>
        <td class='border border-success'>" . $user['username'] . "</td>
        <td class='border border-success'>
          <form class='m-1' action='' method='post'>
            <button class='btn btn-success' name='" . $u . "' type='submit'>User Details</button>
            <button class='btn btn-success' name='" . $u_1 . "' type='submit'>Forward</button>
            <button class='btn btn-success' name='" . $u_2 . "' type='submit'>Feedback from Departments</button>
            <button class='btn btn-success' name='" . $u_3 . "' type='submit'>Request Status</button>
            <button class='btn btn-success' name='" . $u_4 . "' type='submit'>Generate Receipt</button>
          </form>
        </td></tr>";
      if (isset($_POST[$u])) {
        $_SESSION['u1'] = $user['username'];
        $_SESSION['f1'] = $user['firstname'];
        $_SESSION['l1'] = $user['lastname'];
        $_SESSION['g1'] = $user['gender'];
        $_SESSION['b1'] = $user['birthdate'];
        $_SESSION['rn1'] = $user['roll_no'];
        $_SESSION['reg1'] = $user['reg_no'];
        $_SESSION['lcn1'] = $user['library_card_no'];
        $_SESSION['cn1'] = $user['course_name'];
        $_SESSION['ad1'] = $user['admission_date'];
        $_SESSION['ccd1'] = $user['course_completion_date'];
        $_SESSION['cd1'] = $user['course_duration'];
        $_SESSION['cg1'] = $user['CGPA'];
        header("Location: user_details.php");
      } else if (isset($_POST[$u_1])) {
        $_SESSION['user_forward'] = $user['username'];;
        header("Location: forward.php");
      } else if (isset($_POST[$u_2])) {
        $_SESSION['user_feedback'] = $user['username'];;
        header("Location: feedback.php");
      } else if (isset($_POST[$u_3])) {
        $_SESSION['request_status_user'] = $user['username'];;
        header("Location: request_status.php");
      } else if (isset($_POST[$u_4])) {
        $_SESSION['request_status_user'] = $user['username'];;
        header("Location: generate_receipt.php");
      }
    }
    echo "</body></table>";
    include "../../footer.php";
    ?>
  </div>
  <script src="../../js/jquery-3.4.1.slim.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
</body>

</html>