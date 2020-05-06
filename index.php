<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Clearance_System</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="container-fluid bg-dark">
  <div style="border: 5px solid gray;">
    <?php include "navbar.php" ?>
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
          <img src="image/green_mountain.jpg" alt="Green Moutain" width="100%" height="500">
          <div class="carousel-caption text-warning shadow-lg" style="text-shadow: 2px 2px gray;">
              <h1 class="py-lg-0 py-sm-2" style="font-size: 5vw;">Clearance System for Graduating Students</h1>
              <p class="py-lg-2 py-sm-4" style="font-size: 3vw;">Clearance system for Students
              where they are able to complete the process of clearance.</p>
              <div class="py-lg-0 py-sm-2">
                <a class="link-unstyled btn btn-block bg-success text-dark w-75 mx-auto" href="register.php" type="button"><span class="h3">Register</span></a>
                <a class="link-unstyled btn btn-block bg-success text-dark w-75 mx-auto" href="login.php" type="button"><span class="h3">Login</span></a>
              </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/jungle_river.jpg" alt="Jungle River" width="100%" height="500">
          <div class="carousel-caption text-warning shadow-lg" style="text-shadow: 2px 2px gray;">
            <h1 class="py-lg-0 py-sm-2" style="font-size: 5vw;">Clearance System for Graduating Students</h1>
            <p class="py-lg-2 py-sm-4" style="font-size: 3vw;">Clearance system for Students
            where they are able to complete the process of clearance.</p>
            <div class="py-lg-0 py-sm-2">
              <a class="link-unstyled btn btn-block bg-success text-dark w-75 mx-auto" href="register.php" type="button"><span class="h3">Register</span></a>
              <a class="link-unstyled btn btn-block bg-success text-dark w-75 mx-auto" href="login.php" type="button"><span class="h3">Login</span></a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/winter_mountain.jpg" alt="Winter Mountain" width="100%" height="500">
          <div class="carousel-caption text-warning shadow-lg" style="text-shadow: 2px 2px gray;">
            <h1 class="py-lg-0 py-sm-2" style="font-size: 5vw;">Clearance System for Graduating Students</h1>
            <p class="py-lg-2 py-sm-4" style="font-size: 3vw;">Clearance system for Students
            where they are able to complete the process of clearance.</p>
            <div class="py-lg-0 py-sm-2">
              <a class="link-unstyled btn btn-block bg-success text-dark w-75 mx-auto" href="register.php" type="button"><span class="h3">Register</span></a>
              <a class="link-unstyled btn btn-block bg-success text-dark w-75 mx-auto" href="login.php" type="button"><span class="h3">Login</span></a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/winter.jpg" alt="Winter" width="100%" height="500">
          <div class="carousel-caption text-warning shadow-lg" style="text-shadow: 2px 2px gray;">
          <h1 class="py-lg-0 py-sm-2" style="font-size: 5vw;">Clearance System for Graduating Students</h1>
            <p class="py-lg-2 py-sm-4" style="font-size: 3vw;">Clearance system for Students
            where they are able to complete the process of clearance.</p>
            <div class="py-lg-0 py-sm-2">
              <a class="link-unstyled btn btn-block bg-success text-dark w-75 mx-auto" href="register.php" type="button"><span class="h3">Register</span></a>
              <a class="link-unstyled btn btn-block bg-success text-dark w-75 mx-auto" href="login.php" type="button"><span class="h3">Login</span></a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/mountain_river.jpg" alt="Mountain River" width="100%" height="500">
          <div class="carousel-caption text-warning shadow-lg" style="text-shadow: 2px 2px gray;">
            <h1 class="py-lg-0 py-sm-2" style="font-size: 5vw;">Clearance System for Graduating Students</h1>
            <p class="py-lg-2 py-sm-4" style="font-size: 3vw;">Clearance system for Students
            where they are able to complete the process of clearance.</p>
            <div class="py-lg-0 py-sm-2">
              <a class="link-unstyled btn btn-block bg-success text-dark w-75 mx-auto" href="register.php" type="button"><span class="h3">Register</span></a>
              <a class="link-unstyled btn btn-block bg-success text-dark w-75 mx-auto" href="login.php" type="button"><span class="h3">Login</span></a>
            </div>
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
    <?php
      include "footer.php";
    ?>
  </div>
  <?php
      include "scripts.php";
  ?>
</body>
</html>