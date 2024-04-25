<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIMBA SAFARI | LOGISTICS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet"> 
  <link href="assets/css/main.css" rel="stylesheet"> 
  <style>
    body, html {
      height: 100%;
      margin: 10;
      font-family: Arial, sans-serif;
    }
    .background-image {
      background-image: url('assets/img/bus_clasic.jpg');
      background-size: cover;
      background-position: center;
      height: 100%;
      width: 100%;
    }
    .login-container {
      background-color: rgba(255, 255, 255, 0.8);
      padding: 160px;
    }
    .login-box {
      max-width: 400px;
      margin: 0 auto;
    }
    .login-logo {
      text-align: center;
    }
    .form-group {
      margin-bottom: 30px;
    }
  </style>
</head>

<body class="page-index">
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center"> 
        <img src="assets/img/logo.png" alt="" class="avatar rounded-circle"><h1 class="d-flex align-items-center">SIMBA SAFARI'S</h1>
      </a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="active">Home</a></li> 
          
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <div class="background-image">
    <div class="login-container d-flex align-items-center justify-content-center">
      <div class="login-box">
        <div class="login-logo">
          <h3 class="font-weight-bold text-dark"></h3>
        </div>
        <div class="card-body">
          <?php 
            include ('includes/connection.php'); 
            session_start(); 
            if (isset($_POST['login'])) {
              $Username = $_POST['Username'];
              $PasswordHash = md5($_POST['PasswordHash']);
              $sql1 = "SELECT * FROM user WHERE Email='$Username' AND PasswordHash='$PasswordHash' LIMIT 1";
              $query1 = mysqli_query($conn, $sql1);
              if ($query1) {
                if (mysqli_num_rows($query1) > 0) {
                  $row = mysqli_fetch_array($query1);
                  $_SESSION['Email']=$row['Email'];
                  $_SESSION['Role']=$row['Role']; 
                  $_SESSION['FullName']=$row['FullName'];   
                  if ($row['user_status']=='Enable') {
                    if ($_SESSION['Role'] === 'admin') {
                      header("location:admin.php?page=dashboad");
                    } else if ($_SESSION['Role'] === 'user') {
                      header('location:admin.php?page=dashboad');
                    }
                  } else {
          ?> 
                    <div class="col-md-12">  
                      <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i> Blocked!</h5>
                        Your Not Authorized To use This Site Please Contuct To CyberShield Coder...
                      </div>
                    </div>
          <?php
                  }
                } else {
          ?>  
                  <div class="col-md-12">  
                    <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> 
                      Username and Password are incorrect Try Again
                    </div>
                  </div> 
          <?php
                }
              } else {
                die(mysqli_error($conn));
              }
            }
          ?>
          <form action="" method="post" id="login_form">
            <div class="form-group">
              <input type="text" id="Username" name="Username" class="form-control" required autofocus data-parsley-type="email" data-parsley-trigger="keyup" placeholder="Enter Email Address...">
            </div>
            <div class="form-group">
              <input type="password" id="PasswordHash" name="PasswordHash" class="form-control" required data-parsley-trigger="keyup" placeholder="Password...">
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" id="remember">
                    <label for="remember">
                      Remember Me
                    </label>
                  </div>
                </div>
                <div class="col-8">
                  <button type="submit" value="Login" name="login" class="btn btn-info btn-block">Log In</button>
                </div>
              </div>
            </div>
          </form>
          <div class="social-auth-links text-center mb-3">
            <p>- OR -</p>
          </div>
          <p class="mb-0 text-center">
            <a href="register.php">Register a new membership</a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <footer id="footer" class="footer"> 

    <div class="footer-legal">
      <div class="container">
        <div class="copyright">
         &copy; <?php echo date('Y'); ?> Copyright  <strong><span>Simba safari's</span></strong>
        </div>
        <div class="credits"> 
          Designed by <a href="https://www.linkedin.com/in/godwin-aruga">Godwin Aruga.</a>
        </div>
      </div>
    </div>
  </footer> 

 

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script> 
  <script src="assets/js/main.js"></script>

</body>

</html>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
