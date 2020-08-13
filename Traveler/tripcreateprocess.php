<?php
require "../lib/connection.php";
require "../lib/validation.php";
session_start();
extract($_POST);
$uid = $_SESSION['id'];
$source = $scntryid;
$dest = $dcntryid;
if ($sstateid == "" || $sstateid == "Select State"){}
else{$source = "$source" .','. "$sstateid";}
if ($scityid == "Select City" || $scityid == "") {}
else {$source = "$source" .",". "$scityid";}
if ($dstateid == "" || $dstateid == "Select State"){}
else{$dest = "$dest" .','. "$dstateid";}
if ($dcityid == "Select City" || $dcityid == "") {}
else {$dest = "$dest" .",". "$dcityid";}
if (isset($share)) {
	$sh = "Y";
}else{$sh = "N";}
echo $source."<br>";
echo $dest;
$str = "INSERT INTO trip_master(tr_title,u_id,language,acmd,tr_type_id,budget,tr_desc,tr_from,tr_to,tr_source,tr_dest,r_id,pre_gen,cont_share,first_visit) VALUES ('$trititle',$uid,'$lang','$prway','$tritype','$budget','$tripdes','$startdte','$enddte','$source','$dest',0,'$gender','$sh','$fv')";
$res = mysqli_query($conn,$str);
if ($res == 1) {
$last_id = mysqli_insert_id($conn);
header("location:tripview.php?id=$last_id&action=success");	
}
else{
mysqli_error($conn);
}
 ?>