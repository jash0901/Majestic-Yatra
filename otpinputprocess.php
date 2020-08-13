<?php 
session_start();
include_once "lib/connection.php";
require "lib/model.php";
require "lib/validation.php";
extract($_POST);
if (isset($_SESSION['otp']) or isset($btn)) {
if ($_SESSION['otp'] == $otp) {
	unset($_SESSION['otp']);
	header("location:changepassword.php"); 
	exit();
}
else {
/*	unset($_SESSION['otp']);*/
	$_SESSION['loginerror']="OTP is not Correct Please Enter Proper OTP";
	header("location:otpinput.php");
}
}
else {
	header("location:forgotpassword.php");
}

?>
