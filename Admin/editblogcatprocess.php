<?php 
	include_once "lib/connection.php";
	require "lib/model.php";
	require "lib/validation.php";
	session_start();
	$v = new validation();
	$o=new model();
	extract($_POST);
	$vehtype = $o->test_data($vehtype);
	if (isset($btn)) {
	if($v->onlycharwithspaces($vehtype)) {
			if ($v->duplicationcheck2("blog_category_master","blg_cat_name = '$vehtype' and blg_cat_id!='$id'")) {
				$str="update blog_category_master set blg_cat_name = '$vehtype' where blg_cat_id='$id'";
		$q1= mysqli_query($conn,$str);
/*			echo mysqli_error($q1);
exit();*/	
		if ($q1==1) {				
			header("Location:viewblogcategory.php");	
		}
		else
		{
			echo 'Error';
		}
	}	
	else {
		$_SESSION['nameError'] = "Data already exists!!!";
		header("Location:editblogcat.php?id=$id");	
	}		
}
else {
	$_SESSION['nameError'] = "Charcters and Single Space Only!!!";
	header("Location:editblogcat.php?id=$id");	
}
}

else {
	header("Location:viewblogcategory.php");
}



















/*


		$str="update vehicle_brand_master set v_brand_name = '$vehbrand' where v_brand_id='$id'";
		$q1= mysqli_query($conn,$str);*/
		/*			echo mysqli_error($q1);
exit();*/
		/*if ($q1==1) {				
			header("Location:viewvehiclebrand.php");
		}
		else
		{
			echo 'Error';
		}
	}
	else {
	$_SESSION['nameError'] = "Charcters Only!!!";
	header("Location:editvehiclebrand.php?id=$id");	
}
}
else {
	header("Location:viewvehiclebrand.php");
}*/
/*


	$q="update vehicle_brand_master set v_brand_name = '$vehbrand' where v_brand_id='$id'";
	$data = mysqli_query($conn,$q);
	if ($data=1) {
		header("Location:viewvehiclebrand.php");
	}
	else {
		echo mysqli_error($data);
	}*/
 ?>