 <?php  
 $query= mysqli_query($conn,"select * from user where Email = '$session_id'")or die(mysqli_error());
 $row = mysqli_fetch_array($query);     
 ?>
 
 <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li> 
       <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"><i class="fa fa-user"></i> Welcome | <?php echo $row['FullName'];  ?>  As <b style="color: red;"><?php echo $row['Role'] ?></b></a> 
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto"> 
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">  
      <li><a class="nav-link" href="logout.php" role="button"><i class="fa fa-sign-out-alt"></i> Logout</a></li> 
    </ul>
  </nav>
  <!-- /.navbar -->
   