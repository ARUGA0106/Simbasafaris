<?php
include('connection.php');
//Start session
session_start();
//Check whether the session variable SESS_mEmBER_ID is present or not
if (!isset($_SESSION['Email']) ||(trim ($_SESSION['Email']) == '')) {
	header("location:index.php");
    exit();
}
$session_id=$_SESSION['Email']; 
$Role=$_SESSION['Role']; 
$user_query = mysqli_query($conn,"select * from user where Email = '$session_id'")or die(mysqli_error());
$user_row = mysqli_fetch_array($user_query);
$Fullname = $user_row['FullName']; 
?>