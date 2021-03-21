<?php 
include 'library.php';

$username = $_POST['username'];
$password = $_POST['password'];

$cek=0;
$sql = "select * from user where username='$username' and password='$password'";
if ($result=mysqli_query($mysqli,$sql))
  {
  // Return the number of rows in result set
  $cek=mysqli_num_rows($result);
  }


if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:index.php");
}else{
	header("location:login.php");	
}

?>