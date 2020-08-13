<?php 
		 session_start(); 
require "../lib/mechanicloginvalidation.php";  ?>
<?php include_once "lib/connection.php";
  require "lib/model.php";
  require "lib/validation.php";
extract($_GET);
if (isset($allid)) {
$str = "select * from mechanic_allocation_master where m_a_id=$allid";
$res = mysqli_query($conn,$str);
$data = mysqli_fetch_array($res);
if ($res == 1) {
$mid = $data['m_id'];
$uid = $data['u_id'];
$add = $data['address'];
$sdate = $data['allocation_date'];
$rdate = date('Y-m-d', time());
$str1 = "update mechanic_master set allocated = 0 where m_id = '$mid'";
$res = mysqli_query($conn,$str1);
$str2 = "select * from mechanic_master where m_id = $mid";
$res4 = mysqli_query($conn,$str2);
echo mysqli_error($conn);
$data1 = mysqli_fetch_array($res4);
$trid = $data1['tr_id'];
$str2 = "insert into mechanic_history_master (service_date,return_date,m_id,u_id,tr_id,address) values ('$sdate','$rdate','$mid','$uid','$trid','$add')";
$res3 = mysqli_query($conn,$str2);
$str = "delete from mechanic_allocation_master where m_a_id=$allid";
$res = mysqli_query($conn,$str);
header("location:confirmation.php?result=success&type=serviceend");
exit();
}	
}
else {
	header("location:index.php");	
}
?>