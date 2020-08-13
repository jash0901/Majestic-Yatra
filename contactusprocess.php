<?php extract($_POST);
session_start();
include_once "lib/connection.php";
require "lib/model.php";
require "lib/validation.php";
if (isset($btn)) {
	$str = "INSERT INTO feedback_master(sender_email,description,gender) VALUES ('$email','$des','$gen')";
	$q = mysqli_query($conn,$str);
header("location:index.php"); 	
}
else {
	header("location:contactus.php");
}
?>