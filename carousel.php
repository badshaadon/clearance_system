<?php
  $green_mountain = "image/green_mountain.jpg";
  $jungle_river = "image/jungle_river.jpg";
  $winter_mountain = "image/winter_mountain.jpg";
  $winter = "image/winter.jpg";
  $mountain_river = "image/mountain_river.jpg";
  if(isset($_SESSION['user_type'])) {
    if(($_SESSION['user_type'] == "Student") || ($_SESSION['user_type'] == "Admin") || ($_SESSION['user_type'] == "Liberian") || ($_SESSION['user_type'] == "Head of Department") || ($_SESSION['user_type'] == "Sports Incharge") || ($_SESSION['user_type'] == "Dean of Student Affair") || ($_SESSION['user_type'] == "Accounts Incharge") || ($_SESSION['user_type'] == "Cafe Incharge")) {
      $green_mountain = "../../image/green_mountain.jpg";
      $jungle_river = "../../image/jungle_river.jpg";
      $winter_mountain = "../../image/winter_mountain.jpg";
      $winter = "../../image/winter.jpg";
      $mountain_river = "../../image/mountain_river.jpg";
    }
  }
?>
<!-- Carousel -->
<div id="demo" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
        <li data-target="#demo" data-slide-to="4"></li>
    </ul>
    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo $green_mountain; ?>" alt="Jungle River" width="100%" height="500">
        <div class="carousel-caption text-warning shadow-lg" style="text-shadow: 2px 2px gray; top: 0; bottom: auto;">
            <h1 class="py-sm-4" style="font-size: 5vw;"><?php echo $_SESSION['user_type']; ?> Dashboard!</h1>
            <h1 class="py-sm-4" style="font-size: 4vw;">Welcome, Your Username is <?php echo $_SESSION['username']; ?></h1>
            <h1 class="py-sm-4" style="font-size: 3vw;">Virtual University Clearance System for Graduating Students</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo $jungle_river; ?>" alt="Jungle River" width="100%" height="500">
        <div class="carousel-caption text-warning shadow-lg" style="text-shadow: 2px 2px gray; top: 0; bottom: auto;">
            <h1 class="py-sm-4" style="font-size: 5vw;"><?php echo $_SESSION['user_type']; ?> Dashboard!</h1>
            <h1 class="py-sm-4" style="font-size: 4vw;">Welcome, Your Username is <?php echo $_SESSION['username']; ?></h1>
            <h1 class="py-sm-4" style="font-size: 3vw;">Virtual University Clearance System for Graduating Students</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo $winter_mountain; ?>" alt="Jungle River" width="100%" height="500">
        <div class="carousel-caption text-warning shadow-lg" style="text-shadow: 2px 2px gray; top: 0; bottom: auto;">
            <h1 class="py-sm-4" style="font-size: 5vw;"><?php echo $_SESSION['user_type']; ?> Dashboard!</h1>
            <h1 class="py-sm-4" style="font-size: 4vw;">Welcome, Your Username is <?php echo $_SESSION['username']; ?></h1>
            <h1 class="py-sm-4" style="font-size: 3vw;">Virtual University Clearance System for Graduating Students</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo $winter; ?>" alt="Jungle River" width="100%" height="500">
        <div class="carousel-caption text-warning shadow-lg" style="text-shadow: 2px 2px gray; top: 0; bottom: auto;">
            <h1 class="py-sm-4" style="font-size: 5vw;"><?php echo $_SESSION['user_type']; ?> Dashboard!</h1>
            <h1 class="py-sm-4" style="font-size: 4vw;">Welcome, Your Username is <?php echo $_SESSION['username']; ?></h1>
            <h1 class="py-sm-4" style="font-size: 3vw;">Virtual University Clearance System for Graduating Students</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo $mountain_river; ?>" alt="Jungle River" width="100%" height="500">
        <div class="carousel-caption text-warning shadow-lg" style="text-shadow: 2px 2px gray; top: 0; bottom: auto;">
            <h1 class="py-sm-4" style="font-size: 5vw;"><?php echo $_SESSION['user_type']; ?> Dashboard!</h1>
            <h1 class="py-sm-4" style="font-size: 4vw;">Welcome, Your Username is <?php echo $_SESSION['username']; ?></h1>
            <h1 class="py-sm-4" style="font-size: 3vw;">Virtual University Clearance System for Graduating Students</h1>
        </div>
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>