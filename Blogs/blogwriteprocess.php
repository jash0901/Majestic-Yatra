<?php 
session_start();
include_once "../lib/connection.php";
require "../lib/model.php";
require "../lib/validation.php";
extract($_POST);
trim($blg);
trim($title);
if ($blg == "") {
	$_SESSION['er'] = "Empty not allowed";
  header("location:blogwrite.php");
  exit();
}	
$dte = date("Y-m-d");
echo $dte;	

echo gettype($dte);
$uid = $_SESSION['id'];
$str = "";
$_SESSION['fmsg']="Extension not allowed, please choose a JPEG,JPG or PNG file. Invalid Files:";
  if(!empty($_FILES['img'])){
    foreach($_FILES['img']['name'] as $key=>$val){
  $counter = 0;
  $file_name = $_FILES['img']['name'][$key];
  $file_size = $_FILES['img']['size'][$key];
  $file_tmp = $_FILES['img']['tmp_name'][$key];
  $file_type = $_FILES['img']['type'][$key];
  $file_ext=strtolower(end(explode('.',$_FILES['img']['name'][$key])));
  $expensions= array("jpeg","jpg","png","PNG","JPEG","JPG");
   if(in_array($file_ext,$expensions) == false){
    $_SESSION['fmsg']=$_SESSION['fmsg']."$file_name, ";
    $counter = $counter + 1;
    }else{
    $file_name = round(microtime(true)).".".$file_name;
    move_uploaded_file($file_tmp,"Gallery/".$file_name);
    if ($str == "") {
    $str = $file_name;	
    }
    else {
    	$str = $str . "," . $file_name;
    }
  }
}  }
else {
	$str = "null";
}
$blg = mysqli_real_escape_string($conn,$blg);
$title = mysqli_real_escape_string($conn,$title);
$str = mysqli_real_escape_string($conn,$str);
$dte = mysqli_real_escape_string($conn,$dte);
$q = "insert into blog_master (blg_title,blg_content,post_date,u_id,blg_cat_id,img_url,isactive) values ('$title','$blg','$dte','$uid','$cat','$str','1')";
$result = mysqli_query($conn,$q);
$last_id = mysqli_insert_id($conn);
header("location:blogview.php?id=$last_id");
?>