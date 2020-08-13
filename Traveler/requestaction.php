

<?php
session_start();
include_once "../lib/connection.php";
require "../lib/model.php";
require "../lib/validation.php";
require "../lib/travelerloginvalidation.php";
 	extract($_GET);
	$str = "select * from trip_request_master where u_id = $id and tr_id = $trid";;
	$res = mysqli_query($conn,$str);
	$data = mysqli_fetch_array($res);
	$treqid = $data['tr_req_id'];
	if ($action == "accept") {
	$str1 = "update trip_request_master set approved='Y' where tr_req_id = $treqid ";
	$res1 = mysqli_query($conn,$str1);
	$str2 = "insert into trip_allocation_master (u_id,tr_id) values ('$id','$trid')";
	$res2 = mysqli_query($conn,$str2);	
	header("location:tripview.php?id=$trid");
	exit();
	}
?>