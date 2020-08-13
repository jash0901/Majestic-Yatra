<?php 
session_start();
include_once "lib/connection.php";
require "lib/model.php";
require "lib/validation.php";
extract($_POST);
trim($password);
trim($cpassword);
$password = mysqli_real_escape_string($conn,$password);
$cpassword = mysqli_real_escape_string($conn,$cpassword);
	if (isset($btn)) {
		$uid = $_SESSION['uid'];
		if ($password == $cpassword) {
			$str = "update user_master set password = '$password' where u_id='$uid'";
			$q1= mysqli_query($conn,$str);
			if ($q1==1) {		
			$_SESSION['spass']="<strong>Congratulations!!!</strong>  Password Changed...";		
			header("Location:login.php");
			exit();
			session_unset();
		}
		else
		{
			exit();
		}
		}
		else {
			$_SESSION['loginerror'] = "Passwords don't match...";
			header("location:changepassword.php");
			exit();
		}
	}
	else {
		header("Location:forgotpassword.php");
	}
 ?>