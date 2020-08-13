<?php 
session_start();
include_once "../lib/connection.php";
require "../lib/model.php";
require "../lib/validation.php";
$hid = 1;
extract($_POST);
$_SESSION['fmsg']="Extension not allowed, please choose a JPEG,JPG or PNG file. Invalid Files:";
  if(!empty($_FILES['profilepic'])){
     $ifile = 0;
     $counter = 0;
    foreach($_FILES['profilepic']['name'] as $key=>$val){ 
  $file_name = $_FILES['profilepic']['name'][$key];
  $file_size = $_FILES['profilepic']['size'][$key];
  $file_tmp = $_FILES['profilepic']['tmp_name'][$key];
  $file_type = $_FILES['profilepic']['type'][$key];
  $file_ext=strtolower(end(explode('.',$_FILES['profilepic']['name'][$key])));
  $expensions= array("jpeg","jpg","png","PNG","JPEG","JPG");
   if(in_array($file_ext,$expensions) == false){
    $_SESSION['fmsg']=$_SESSION['fmsg']."$file_name, ";
    $counter = $counter + 1;
    }else{
    $file_name = round(microtime(true)).".".$file_name;
    move_uploaded_file($file_tmp,"Gallery/".$file_name);
    $file_name = mysqli_real_escape_string($conn,$file_name);
    $str = "insert into hotel_gallery_master (h_id,url) values ('$hid','$file_name')";
    $result = mysqli_query($conn,$str);
    $ifile = $ifile+1;
  }
}  
  if ($counter == 0) {
    $_SESSION['fmsg'] = "<strong>$ifile Files Inserted</strong>";
    header("location:updategallery.php");
    exit();
  }
  else {
    $_SESSION['fmsg'] = $_SESSION['fmsg'] . " and <strong>$ifile Files Inserted</strong>"; 
    header("location:updategallery.php");
    exit();
  }
}

 ?>
