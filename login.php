<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Login</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="container-fluid bg-dark">
  <div style="background-image: url('image/winter.jpg'); background-repeat: no-repeat; background-size: cover; border: 5px solid gray;">
    <?php
      include "navbar.php";
      require('database/db.php');
      session_start();
      if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "SELECT * FROM `multi_login` WHERE username='$username' AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
          $user_type = mysqli_fetch_assoc($result);
          $user_type = $user_type['user_type'];
          if ($user_type == 'Student') {
            $_SESSION['user_type'] = $user_type;
            header('location: dashboards/student/student_dashboard.php');		  
          } else if ($user_type == 'Admin') {
            $_SESSION['user_type'] = $user_type;
            header('location: dashboards/admin/admin_dashboard.php');		  
          } else if ($user_type == 'Liberian') {
            $_SESSION['user_type'] = $user_type;
            header('location: dashboards/liberian/liberian_dashboard.php');		  
          } else if ($user_type == 'Head of Department') {
            $_SESSION['user_type'] = $user_type;
            header('location: dashboards/head/department_head_dashboard.php');		  
          } else if ($user_type == 'Sports Incharge') {
            $_SESSION['user_type'] = $user_type;
            header('location: dashboards/sports/sports_dashboard.php');		  
          } else if ($user_type == 'Dean of Student Affair') {
            $_SESSION['user_type'] = $user_type;
            header('location: dashboards/dean/dean_dashboard.php');		  
          } else if ($user_type == 'Accounts Incharge') {
            $_SESSION['user_type'] = $user_type;
            header('location: dashboards/accounts/accounts_dashboard.php');		  
          } else if ($user_type == 'Cafe Incharge') {
            $_SESSION['user_type'] = $user_type;
            header('location: dashboards/cafe/cafe_dashboard.php');
          }
          $_SESSION['username'] = $username;
        } else {
          echo "<div class='jumbotron text-center text-danger'>
            <h1 class='display-4 font-weight-bold my-3'>Incorrect Username/password.</h1>
            <hr />
            <p class='h4 my-3'>Click here to <a href='login.php'>Login</a> Again</p>
            </div>";
        }
      } else {
    ?>
    <form class="w-75 mx-auto text-warning py-5 container" method="post" name="login">
      <div class="row">
        <h1 class="col text-center display-1 bg-secondary p-3 mb-5 font-weight-bold" style="font-size: 5vw;">Login</h1>
      </div>
      <div class="form-group row">
        <label for="username" class="col-sm-4 h3">Username</label>
        <input type="text" class="form-control col-sm-8" name="username"  autofocus="true" required />
      </div>
      <div class="form-group row">
        <label for="password" class="col-sm-4 h3">Password</label>
        <input type="password" class="form-control col-sm-8" name="password" required />
      </div>
      <p class="link text-center"><a href="register.php" class="text-warning lead font-weight-bold">New Registration</a></p>
      <div class="row">
        <button type="submit" name="submit" class="btn btn-block btn-primary">Submit</button>
      </div>
    </form>
    <?php
      }
      include "footer.php";
      include "scripts.php";
    ?>
  </div>
</body>
</html>