<nav class="navbar navbar-expand-lg navbar-light text-success" style="background-color: palegreen; border-bottom: 5px solid gray;">
<a class="navbar-brand" 
<?php if(isset($_SESSION["username"])) { ?>
  <?php if(($_SESSION["user_type"]) == "Student") { ?> href="student_dashboard.php" 
  <?php } else if(($_SESSION["user_type"]) == "Admin") { ?> href="admin_dashboard.php" 
  <?php } else if(($_SESSION["user_type"]) == "Liberian") { ?> href="liberian_dashboard.php" 
  <?php } else if(($_SESSION["user_type"]) == "Head of Department") { ?> href="department_head_dashboard.php" 
  <?php } else if(($_SESSION["user_type"]) == "Sports Incharge") { ?> href="sports_dashboard.php" 
  <?php } else if(($_SESSION["user_type"]) == "Dean of Student Affair") { ?> href="dean_dashboard.php" 
  <?php } else if(($_SESSION["user_type"]) == "Accounts Incharge") { ?> href="accounts_dashboard.php" 
  <?php } else if(($_SESSION["user_type"]) == "Cafe Incharge") { ?> href="cafe_dashboard.php" 
  <?php } ?>
  <?php } else { ?> href="index.php" <?php } ?>
 ><span style="color: green; font-weight: bold;">CLEARANCE SYSTEM</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav" style="font-weight: bold;">
      <?php if(isset($_SESSION["username"])) { ?>
        <?php if(($_SESSION["user_type"] == "Student")) { ?>
          <a class="nav-item nav-link" style="color: green;" href="student_dashboard.php">Dashboard</a>
          <a class="nav-item nav-link" style="color: green;" href="student_profile.php">Profile</a>
          <a class="nav-item nav-link" style="color: green;" href="clearance_request.php">Send Clearance Request</a>
          <a class="nav-item nav-link" style="color: green;" href="account_section.php">Account Section</a>
          <a class="nav-item nav-link" style="color: green;" href="clearance_receipt.php">Clearance Receipt</a>
        <?php } else if(($_SESSION["user_type"] == "Admin")) { ?>
          <a class="nav-item nav-link" style="color: green;" href="admin_dashboard.php">Dashboard</a>
          <a class="nav-item nav-link" style="color: green;" href="create_user.php">Create User</a>
          <a class="nav-item nav-link" style="color: green;" href="students_list.php">Students List</a>
          <a class="nav-item nav-link" style="color: green;" href="departments_info.php">Departments</a>
          <a class="nav-item nav-link" style="color: green;" href="all_clearance_requests.php">All Clearance Requests</a>
          <a class="nav-item nav-link" style="color: green;" href="upload_receipt.php">Upload Receipt</a>
        <?php } else if(($_SESSION["user_type"] == "Liberian")) { ?>
          <a class="nav-item nav-link" style="color: green;" href="liberian_dashboard.php">Dashboard</a>
          <a class="nav-item nav-link" style="color: green;" href="clearance_request.php">Clearance Requests</a>
        <?php } else if(($_SESSION["user_type"] == "Head of Department")) { ?>
          <a class="nav-item nav-link" style="color: green;" href="department_head_dashboard.php">Dashboard</a>
          <a class="nav-item nav-link" style="color: green;" href="clearance_request.php">Clearance Requests</a>
        <?php } else if(($_SESSION["user_type"] == "Sports Incharge")) { ?>
          <a class="nav-item nav-link" style="color: green;" href="sports_dashboard.php">Dashboard</a>
          <a class="nav-item nav-link" style="color: green;" href="clearance_request.php">Clearance Requests</a>
        <?php } else if(($_SESSION["user_type"] == "Dean of Student Affair")) { ?>
          <a class="nav-item nav-link" style="color: green;" href="dean_dashboard.php">Dashboard</a>
          <a class="nav-item nav-link" style="color: green;" href="clearance_request.php">Clearance Requests</a>
        <?php } else if(($_SESSION["user_type"] == "Accounts Incharge")) { ?>
          <a class="nav-item nav-link" style="color: green;" href="accounts_dashboard.php">Dashboard</a>
          <a class="nav-item nav-link" style="color: green;" href="clearance_request.php">Clearance Requests</a>
        <?php } else if(($_SESSION["user_type"] == "Cafe Incharge")) { ?>
          <a class="nav-item nav-link" style="color: green;" href="cafe_dashboard.php">Dashboard</a>
          <a class="nav-item nav-link" style="color: green;" href="clearance_request.php">Clearance Requests</a>
        <?php } ?>
        <a class="nav-item nav-link" style="color: green;" href="../../logout.php">Logout</a>
      <?php } else { ?>
        <a class="nav-item nav-link" style="color: green;" href="index.php">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" style="color: green;" href="register.php">Register</a>
        <a class="nav-item nav-link" style="color: green;" href="login.php">Login</a>
      <?php } ?>
    </div>
  </div>
</nav>