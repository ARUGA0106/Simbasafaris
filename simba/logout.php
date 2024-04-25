<?php
include('includes/connection.php'); 
session_start();
session_destroy(); 

unset($_SESSION['Role']);
header('location:index.php');
 
?>