<?php
	include_once "lib/connection.php";
	require "lib/model.php";
	require "lib/validation.php";
	$o = new model();
	$v = new validation();
	session_start();
	extract($_POST);
	if (isset($btn)) {
		 if($v->onlycharwithspaces($brname)) {
		 		if ($v->duplicationcheck2("vehicle_brand_master","v_brand_name = '$$brname'")) {
		 			$str="insert into vehicle_brand_master (v_brand_name) values('$brname')";
					$q1= mysqli_query($conn,$str);
					if ($q1==1) {				
						header("Location:vehiclebrandadd.php?insert=true");
						exit();
					}
					else
					{
						echo 'Error';
					}
					}
		else {
		$_SESSION['nameError'] = "Data already exists!!!";
	header("Location:vehiclebrandadd.php");
	}		
}
	else {
		$_SESSION['nameError'] = "Charcters Only!!!";
	header("Location:vehiclebrandadd.php");
}
}
else {
	header("Location:vehiclebrandadd.php");
	}

/*

	$brname = $o->test_data($brname);
$str="insert into vehicle_brand_master (v_brand_name) values('$brname')";
$q1=mysqli_query($conn,$str);
		/*print_r($q1);
		exit();*/
	/*	if ($q1=1) {
				header("Location:vehiclebrandadd.php?insert=true");
		}
		else {
			echo 'error';
		}*/

?>