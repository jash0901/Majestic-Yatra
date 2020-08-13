<?php 
	include_once "lib/connection.php";
	require "lib/model.php";
	require "lib/validation.php";
	$o = new model();
	$v = new validation();
	session_start();
	extract($_POST);
	$state = $o->test_data($state);

	if (isset($btn)) {
		if ($cntry_id == -1) {
			$_SESSION['ddError'] = "Enter Complete Data";
				header("Location:stateentry.php");
				exit();
		}
	  if($v->onlycharwithspaces($state)) {
		if ($v->duplicationcheck2("state_master","state_name = '$state'")) {
			$str="insert into state_master (state_name,country_id) values('$state','$cntry_id')";
			$q1= mysqli_query($conn,$str);
/*			echo mysqli_error($q1);
			exit();*/
			if ($q1==1) {				
				header("Location:stateentry.php?insert=true");
				exit();
			}
			else
			{
				echo 'Error';
			}
		}
		else {
		$_SESSION['nameError'] = "Data already exists!!!";
	header("Location:stateentry.php");
	}		
}

else {
	$_SESSION['nameError'] = "Charcters and Single Space Only!!!";
	header("Location:stateentry.php");
}
}
else {
		header("Location:stateentry.php");
	}








/*	if (isset($btnsinsert)) {
		$statename=$state;
		$cid=$cntry_id;
		$str="insert into state_master (state_name,country_id) values('$state','$cid')";*/
		/*echo $str;*/
/*
		$q1=mysqli_query($conn,$str);*/
		/*print_r($q1);
		exit();*/
		/*if ($q1=1) {
			header("Location:stateentry.php?insert=true");
		}
		else {
			echo 'error';
		}

	}
	else {
		header("Location:stateentry.php");
	}*/
 ?>