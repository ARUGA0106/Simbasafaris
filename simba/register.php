<?php  
include ('includes/connection.php');  

if (isset($_POST['submit'])){
$FullName =$_POST['FullName']; 
$Email =$_POST['Email'];    
$terms =$_POST['terms'];   
$user_status ="Disable";  
$Role ="user"; 
$PasswordHash = md5($_POST['PasswordHash']);
$retype_password = md5($_POST['retype_password']); 

 if  ($PasswordHash != $retype_password){
   ?>
   <script type="text/javascript">
       alert("Password does not match with your new password");
   </script>
  <?php  
}else if ($PasswordHash == $retype_password){

  $query=mysqli_query($conn,"INSERT INTO `users`(`full_name`, `Email`, `Password_hash`) VALUES('$FullName','$Email','$PasswordHash')");
  
  if($query){ 
      
    echo '<script type="text/javascript">';
    echo 'alert("You have successfully registered! Welcome to our site. Enjoy our unlimited customer experience.");';
    echo 'window.location.href = "index.php";'; // Redirect to the index page
    echo '</script>';
        
      }  
      else{
        ?>  
        <script type="text/javascript">
         alert("Sorry Your not successfully Register");
        </script>
        <?php
    }
}
}
?>
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
      background-image: url('assets/img/med.jpg');
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

    <div class="card-body register-card-body">
      <p class="login-box-msg">Register for our service</p>

      <form action="" method="post" id="quickForm">
        <div class="input-group mb-3">
          <input type="text" name="FullName" class="form-control" placeholder="Full name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="Email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="PasswordHash" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="retype_password" class="form-control" placeholder="Retype password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="terms" id="agreeTerms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
         
      </div> 
      <a href="login.php" class="text-center">I already have a membership</a>
       <hr>
        <center><span style="font-size: 18px;">&copy;</span><?php echo date('Y'); ?></center>
  </div> 
</div> 
<script src="stp_con/jquery/jquery.min.js"></script> 
<script src="stp_con/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="stp_con/jquery-validation/jquery.validate.min.js"></script>
<script src="stp_con/jquery-validation/additional-methods.min.js"></script>
<script src="assets/assets/js/adminlte.min.js"></script> 
</body>
<script>
$(function () { 
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a valid email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</html>
