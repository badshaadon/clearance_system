<?php 
  $absolute_path = "image/footer.jpeg";
  if(isset($_SESSION['user_type'])) {
    if(($_SESSION['user_type'] == "Student") || ($_SESSION['user_type'] == "Admin") || ($_SESSION['user_type'] == "Liberian") || ($_SESSION['user_type'] == "Head of Department") || ($_SESSION['user_type'] == "Sports Incharge") || ($_SESSION['user_type'] == "Dean of Student Affair") || ($_SESSION['user_type'] == "Accounts Incharge") || ($_SESSION['user_type'] == "Cafe Incharge")) {
      $absolute_path = "../../image/footer.jpeg";
    }
  }
?>
<footer id="footer" class="container-fluid text-warning" style="border-top: 10px solid gray;">
  <div id="footer-image" class="row p-5" style="background-image: url('<?php echo $absolute_path; ?>'); background-repeat: no-repeat; background-size: 100% 100%;">
    <div class="col-sm-4">
      <h1 class="font-weight-bold mb-5" style="font-size:5vw;">Virtual University</h1>
      <p class="font-weight-bold" style="font-size:2vw;">
        Web-based Clearance system for Virtual University Students through which graduating 
        students will be able to compelete the process of clearance from anywhere anytime.
      </p>
    </div>
    <div class="col-sm-8">
      <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d13602.47008584486!2d74.3199618!3d31.5346633!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x391904990362c381%3A0x892d4a06fb530996!2s2nd%20Floor%2C%20Virtual%20University%20Ichra%20Ferozpur%20Road%20Campus%2C%20Near%20Mor%2C%20122%20Lahore%20%E2%80%93%20Kasur%20Rd%2C%20Ichhra%20Lahore%2C%20Punjab%2054000%2C%20Pakistan!3m2!1d31.5346633!2d74.3199618!5e0!3m2!1sen!2s!4v1586837338124!5m2!1sen!2s" width="100%" height="100%" style="border: 5px solid green; border-radius: 50px;"></iframe>
    </div>
  </div>
  <div class="row" style="border-top: 5px solid gray;">
    <div class="col text-center py-3 bg-dark lead font-weight-bold">© 2020 Copyright: Ali Naeem (BC150401356)</div>
  </div>
</footer>