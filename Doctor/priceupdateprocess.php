<?php require "header.php";  ?><?php extract($_POST);

if (isset($btn)) {
	$id = $_SESSION['id'];
	$str1 = "select d_id from doctor_master where u_id = $id";
	$res = mysqli_query($conn,$str1);
	$data = mysqli_fetch_array($res);
	$hid = $data['d_id'];
 		$str = "update doctor_master set fees = '$fee' where d_id = $hid";
 		$q = mysqli_query($conn,$str);
 		if ($q) {
 			$_SESSION['nameError'] = "Price is updated";
 			header("location:UpdatePrices.php");
 			exit();
 		}
 		else {
 				echo mysqli_error($conn);
 		}
 } 
 else {
 		header("location:UpdatePrices.php");
 }?>