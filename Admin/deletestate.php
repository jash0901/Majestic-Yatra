<?php 
	include_once "lib/connection.php";
require "lib/model.php";
require "lib/validation.php";
	extract($_GET);
	if (isset($id)) {
	$q="delete from state_master where state_id='$id'";
	$data = mysqli_query($conn,$q);
	if ($data=1) {
		header("Location:viewstate.php?delete=true");
	}
	else {
		echo mysqli_error($data);
	}
}
else {
	header("Location:viewstate.php");
}
 ?>