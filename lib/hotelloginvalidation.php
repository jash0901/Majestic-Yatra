<?php 
require "connection.php";
error_reporting(~E_NOTICE);
session_start();

if (!isset($_SESSION['logged'])) {
header("location:../login.php");
exit();
}	else {
	if ($_SESSION['type']=="Hotel") {}
		else {
			$type = $_SESSION['type'];
			if ($type == "VRP") {
				$type = "VehicleRentalProvider";
			}
			header("location:../$type");
		}
	}

 ?>	