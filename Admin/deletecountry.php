<?php 
	include_once "lib/connection.php";
require "lib/model.php";
require "lib/validation.php";
	extract($_GET);
	if (isset($id)) {
	$q="delete from country_master where country_id='$id'";
	$data = mysqli_query($conn,$q);
	if ($data=1) {
		header("Location:viewcountry.php?delete=true");
	}
	else {
		echo mysqli_error($data);
	}
}
	else {
		header("Location:viewcountry.php");
	}
 ?>