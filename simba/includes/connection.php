 <?php
error_reporting(1);
ini_set('display_errors', '1');
 
$host="localhost";
	$uname="root";
	$pas="";
	$db_name="simba"; 

	$conn = mysqli_connect("$host","$uname","$pas") or die ("cannot connect");
	mysqli_select_db($conn,"$db_name") or die ("cannot select db");
?> 
 

