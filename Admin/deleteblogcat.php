<?php 
	include_once "lib/connection.php";
	require "lib/model.php";
	require "lib/validation.php";
	extract($_GET);
	if (isset($id) or $id != "") {
	$q="delete from blog_category_master where blg_cat_id='$id'";
	$data = mysqli_query($conn,$q);
	if ($data=1) {
		header("Location:viewblogcategory.php?delete=true");
	}
	else {
		echo mysqli_error($data);
	}
}
	else {
		header("Location:viewcountry.php");
	}
 ?>