<?php 
include_once "../lib/connection.php";
session_start();
$uid= $_SESSION['id'];
$counter = 0;
$str = "select u_pic from user_master where u_id = $uid";
$res = mysqli_query($conn,$str);
$data = mysqli_fetch_array($res);
$fn = $data['u_pic'];
if(isset($_FILES['profilepic'])){
      $file_name = $_FILES['profilepic']['name'];
      $file_size = $_FILES['profilepic']['size'];
      $file_tmp = $_FILES['profilepic']['tmp_name'];
      $file_type = $_FILES['profilepic']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['profilepic']['name'])));
      $expensions= array("jpeg","jpg","png","PNG","JPEG","JPG");
      
      if(in_array($file_ext,$expensions) == false){
          $_SESSION['fmsg']="extension not allowed, please choose a JPEG,JPG or PNG file.";
      } else {
         if($file_size > 2097152) {
          $_SESSION['fmsg'] = "File size must be less than 2 MB" ;
      } else {$counter++;}
        $counter++;}
   } else { $_SESSION['fmsg']="Empty not allowed"; }

if ($counter == 2) {
                unlink("../profilepics/$fn");
                $file_name = round(microtime(true)).".".$file_name;
                move_uploaded_file($file_tmp,"../profilepics/".$file_name);
                $file_name = mysqli_real_escape_string($conn,$file_name);
                $str1 = "update user_master set u_pic='$file_name' where u_id = '$uid'";
                $res1 = mysqli_query($conn,$str1);
                if ($res1 == 1) {
                  header("location:profile.php");
                }
                else {
                  echo mysqli_error($conn);
                }
}
else {
  header("location:pfpupdate.php");
}



/*

if(isset($_FILES['profilepic'])){
      $file_name = $_FILES['profilepic']['name'];
      $file_size = $_FILES['profilepic']['size'];
      $file_tmp = $_FILES['profilepic']['tmp_name'];
      $file_type = $_FILES['profilepic']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['profilepic']['name'])));
      $expensions= array("jpeg","jpg","png","PNG","JPEG","JPG");
      
      if(in_array($file_ext,$expensions) == false){
          $_SESSION['fmsg']="extension not allowed, please choose a JPEG,JPG or PNG file.";
      } else {
         if($file_size > 2097152) {
          $_SESSION['fmsg'] = "File size must be less than 2 MB" ;
      } else {$counter++;}
        $counter++;}
   } else { $_SESSION['fmsg']="Empty not allowed"; }

if ($counter == 2) {
            unlink("../profilepics/$fn");
                $file_name = round(microtime(true)).".".$file_name;
                move_uploaded_file($file_tmp,"profilepics/".$file_name);
                $file_name = mysqli_real_escape_string($conn,$file_name);
                $str1 = "update user_master set u_pic='$file_name' where u_id = '$uid'";
                $res1 = mysqli_query($conn,$str1);
                if ($res1 == 1) {
                  header("location:profile.php");
                }
                else {
                  echo mysqli_error($conn);
                }
        }
else {
  header("location:pfpupdate.php");
}
}*/
    ?>