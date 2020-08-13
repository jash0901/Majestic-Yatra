<?php 
 session_start(); 
require "../lib/doctorloginvalidation.php";
 include_once "lib/connection.php";
  require "lib/model.php";
  require "lib/validation.php";
extract($_GET);
if (isset($allid)) { 	
$str = "select * from doctor_allocation_master where d_a_id=$allid";
$res = mysqli_query($conn,$str);
$data = mysqli_fetch_array($res);
if ($res == 1) {
$did = $data['d_id'];
$uid = $data['u_id'];
$add = $data['address'];
$sdate = $data['allocation_date'];
$rdate = date('Y-m-d', time());
$str1 = "update doctor_master set allocated = 0 where d_id = '$did'";
$res = mysqli_query($conn,$str1);
$str2 = "select * from doctor_master where d_id = $did";
$res4 = mysqli_query($conn,$str2);
echo mysqli_error($conn);
$data1 = mysqli_fetch_array($res4);
$trid = $data1['tr_id'];
$str2 = "insert into doctor_history_master (service_date,return_date,d_id,u_id,tr_id,address) values ('$sdate','$rdate','$did','$uid','$trid','$add')";
$res3 = mysqli_query($conn,$str2);
$str4 = "delete from doctor_allocation_master where d_a_id=$allid";
$res4 = mysqli_query($conn,$str4);
header("location:confirmation.php?result=success&type=serviceend");
}	
}

?>