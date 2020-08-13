<?php
	$l = "localhost";
	$r = "root";
	$p = "";
	$db = "majestic_yatra";
	$conn = mysqli_connect($l,$r,$p,$db);
	if ($conn == false) {
	 /*	echo "Success";
	 }
	 else
	 {*/
	 	echo "Unsuccessful";
	 }
?>