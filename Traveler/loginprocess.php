<?php 
	require "../lib/connection.php";
	session_start();
	extract($_POST);
	if (isset($submit))
	{
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysqli_real_escape_string($conn,$username);
	$password = mysqli_real_escape_string($conn,$password);
	$str = "select * from  user_master where ( username='$username' or email = '$username') and password='$password'";
	$result = mysqli_query($conn,$str);
	 $data = mysqli_num_rows($result);
	if ($data == 1)
	 {
	 	 $data = mysqli_fetch_array($result);
	 	 $type = $data['u_type'];
	 	 $_SESSION['un'] = $data['u_type'];
		 $_SESSION['name'] = $data['u_name'];
		 $_SESSION['type'] = $data['u_type'];
		 $_SESSION['logged'] = 1;
		 $_SESSION['email'] = $data['email'];
	 /*	if ($type == "Admin") {
			header("location:Admin/home.php"); 
			exit();
	 	}*/
	 	if ($type == "Traveler") {
	 		header("location:Traveler/home.php"); 
	 		exit();
	 	}
	 	if ($type == "Mechanic") {
	 		header("location:Mechanic/home.php"); 
	 		exit();
	 	}
	 	if ($type == "Doctor") {
	 		header("location:Doctor/home.php"); 
	 		exit();
	 	}
	 	if ($type == "VRP") {
	 		header("location:RentalProvider/home.php"); 
	 		exit();
	 	}
	 	if ($type == "Hotel") {
	 		header("location:Hotel/home.php"); 
	 		exit();
	 	}

	} else {
		$_SESSION['loginerror'] = "Wrong credentials";
		header("location:login.php"); 
	}
	/*mysqli_close($connection);*/ // Closing Connection
	}
	else {
		header("location:login.php"); 
	}


	?>