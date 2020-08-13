<?php 
	include_once "lib/connection.php";
	require "lib/model.php";
	require "lib/validation.php";
	session_start();
	$v = new validation();
	$o=new model();
	extract($_POST);
	$state = $o->test_data($state);
	if (isset($btn)) {
	if($v->onlycharwithspaces($state)) {
		if ($v->duplicationcheck2("state_master","state_name = '$state' and country_id !='$cntry_id' and state_id!='$id'")) {
				$str="update state_master set state_name = '$state',country_id = '$cntry_id' where state_id='$id'";
		$q1= mysqli_query($conn,$str);
/*			echo mysqli_error($q1);
exit();*/
		if ($q1==1) {				
			header("Location:viewstate.php");
		}
		else
		{
			echo 'Error';
		}
	}	
	else {
		$_SESSION['nameError'] = "Data already exists!!!";
		header("Location:editstate.php?id=$id");	
	}		
}
else {
	$_SESSION['nameError'] = "Charcters and Single Space Only!!!";
	header("Location:editstate.php?id=$id");	
}
}

else {
	header("Location:viewstate.php");
}














/*
		$str="update state_master set state_name = '$state',country_id = '$cntry_id' where state_id='$id'";
		$q1= mysqli_query($conn,$str);*/
/*			echo mysqli_error($q1);
exit();*/
	/*	if ($q1==1) {				
			header("Location:viewstate.php");
		}
		else
		{
			echo 'Error';
		}
	}
	else {
	$_SESSION['nameError'] = "Charcters Only!!!";
	header("Location:editstate.php?id=$id");	
}
}
else {
	header("Location:viewstate.php");
}*/

 


/*




	$q="update state_master set state_name = '$state',country_id = '$cntry_id' where state_id='$id'";
	$data = mysqli_query($conn,$q);
	if ($data=1) {
		header("Location:viewstate.php");
	}
	else {
		echo mysqli_error($data);
	}*/
 ?>