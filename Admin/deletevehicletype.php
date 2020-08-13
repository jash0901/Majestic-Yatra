<?php 
	include_once "lib/connection.php";
	require "lib/model.php";
	require "lib/validation.php";
	extract($_GET);
	if (isset($id)) {
	$q="DELETE FROM vehicle_type_master where v_type_id = '$id'";
	$data = mysqli_query($conn,$q);
	if ($data=1) {
		header("Location:viewvehicletype.php?delete=true");
	}
	else {
		echo mysqli_error($data);
	}
}
else {
	header("Location:viewvehicletype.php");
}
 ?>