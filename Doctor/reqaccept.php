<?php 
session_start(); 
require "../lib/doctorloginvalidation.php";  ?>
<?php include_once "lib/connection.php";
  require "lib/model.php";
  require "lib/validation.php";
	if (isset($GET)) {
		header("location:viewrequests.php");
		exit();
	}
	else {
		extract($_GET);
			$str = "select * from doctor_request_master where dr_req_id = $reqid";
			$res = mysqli_query($conn,$str);
			$data = mysqli_fetch_array($res);
			$did = $data['d_id'];
			$requid = $data['u_id'];
			$add = $data['address'];
			$reqdate = $data['req_date'];
			if ($data['tr_id'] == 0) {
				$trid = "0";
			}else {
				$trid = $data['tr_id'];
			}
			$str1 = "insert into doctor_allocation_master (d_id,allocation_date,address,u_id,tr_id) values ('$did','$reqdate','$add','$requid','$trid')";
			$res1 = mysqli_query($conn,$str1);
			if ($res1 == 1) {
				$str2 = "update doctor_request_master set approved = 'Y' where dr_req_id= $reqid";
				$res2 = mysqli_query($conn,$str2);
				$str3 = "update doctor_master set allocated = '1' where d_id= $did";
				$res3 = mysqli_query($conn,$str3);
				if ($res2 == 1 and $res3 == 1) {
				header("location:service.php");
				exit();	
				}
				else {
						echo mysqli_error($conn);}
			}
			else {
				echo mysqli_error($conn);			
			}
		}	


 ?>