<?php 
include_once "lib/connection.php";
require "lib/model.php";
require "lib/validation.php";
session_start();
$v = new validation();
$o=new model();
extract($_POST);
$cntryname = $o->test_data($cntryname);	
if (isset($btn)) {
	if($v->onlycharwithspaces($cntryname)) {
		if ($v->duplicationcheck2("country_master","country_name = '$cntryname' and country_id!='$id'")) {
				$str="update country_master set country_name = '$cntryname' where country_id='$id'";
		$q1= mysqli_query($conn,$str);
/*			echo mysqli_error($q1);
exit();*/
		if ($q1==1) {				
			header("Location:viewcountry.php");
		}
		else
		{
			echo 'Error';
		}
	}	
	else {
		$_SESSION['nameError'] = "Data already exists!!!";
	header("Location:editcountry.php?id=$id");
	}		
}
else {
	$_SESSION['nameError'] = "Charcters Only!!!";
	header("Location:editcountry.php?id=$id");	
}
}

else {
	header("Location:viewcountry.php");
}


/*$q="update country_master set country_name = '$cntryname' where country_id='$id'";
$data = mysqli_query($conn,$q);
if ($data=1) {
	header("Location:viewcountry.php");
}
else {
	echo mysqli_error($data);
}*/
?>