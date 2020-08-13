<?php 
	include_once "lib/connection.php";
require "lib/model.php";
require "lib/validation.php";
	extract($_GET);
	if (isset($id)) {
	$q="DELETE FROM vehicle_brand_master where v_brand_id = '$id'";
	$data = mysqli_query($conn,$q);
	if ($data=1) {
		header("Location:viewvehiclebrand.php?delete=true");
	}
	else {
		echo mysqli_error($data);
	}
}
else {
	header("Location:viewvehiclebrand.php");
}
 ?>