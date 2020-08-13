<?php 
session_start();
include_once "lib/connection.php";
require "lib/model.php";
require "lib/validation.php";
$o = new model();
$v = new validation();
extract($_POST);
$name      = $o->test_data($name);
$email     = $o->test_data($email);
$gender    = $o->test_data($gender);
$u_phone   = $o->test_data($u_phone);
$username  = strtolower($o->test_data($username));
$password  = trim($password);
$language  = $o->test_data($language);
$cpassword = trim($cpassword);
$counter   = 0;

	if (isset($btn)) {
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
    if ($v->onlycharwithspaces($name)) {
        $counter++;
    } else {
        $_SESSION['Name'] = "Only Characters and single space...";
    }
    if ($v->usernamevalidation($username) and strlen($username)< 30) {
        $counter++;
    } else {
        $_SESSION['username'] = "Only Characters and Underscore less than 30 Characters...";
    }
    if ($password == $cpassword) {
        $counter++;
    } else {
        $_SESSION['passmatch'] = "Password and Confirm Password don't match...";
    }
    if ($v->duplicationcheck2("user_master", "email = '$email'")) {
        $counter++;
    } else {
        $_SESSION['emailerror'] = "Email already exists...";
    }
    if ($v->duplicationcheck2("user_master", "u_phone = '$u_phone'")) {
        $counter++;
    } else {
        $_SESSION['pherror'] = "Phone already exists...";
    }
    if ($v->duplicationcheck2("user_master", "username = '$username'")) {
        $countter++;
    } else {
        $_SESSION['un'] = "Username already exists...";
    }
    if ($cntryid == -1 or $stateid == -1 or $cityid == -1 or $language == -1) {
        $_SESSION['dd'] = "Enter Complete Data...";
    } else {
        $counter++;
    }
    if ($v->agecheck($dte)) {
        $counter++;
    } else {
        $_SESSION['dteerror'] = "Age not valid!!";
    }


        if ($counter == 9) {
        $file_name = round(microtime(true)).".".$file_name;
                move_uploaded_file($file_tmp,"profilepics/".$file_name);
                $file_name = mysqli_real_escape_string($conn,$file_name);
        $un  = $username;
        $ty  = "Traveler";
        $isa = 1;
        $q2  = "";
        $all = 0;
        $str = "insert into user_master (u_name,email,gender,birth_date,u_phone,u_type,username,password,city_id,state_id,country_id,language,isactive,u_pic) values('$name','$email','$gender','$dte','$u_phone','$ty','$username','$password','$cityid','$stateid','$cntryid','$language','$isa','$file_name')";
        /*echo $str;*/
        
        $q1 = mysqli_query($conn, $str);
        /*print_r($q1);
        exit();*/
        if ($q1=1) {
				echo 'inserted';
				$str="select u_id from user_master where username='$un'";
				$data=mysqli_query($conn,$str);
				$result = mysqli_fetch_array($data);
				$uid=$result['u_id'];
				$str1="insert into traveler_master (u_id,verified) values('$uid','0')";
				$q2=mysqli_query($conn,$str1);
				if ($q2=1) {
					header("location:registrationsuccess.php?type=Traveler");
                    exit();
				}
				else {
					echo 'tra error';
				}
        } else {
            echo 'error';
        }
    } else {
        header("location:TravelerRegistration.php");
    }
} else {
    header("location:TravelerRegistration.php");
}













/*

	$un=$username;
	$ty="Traveler";
	$isa=1;
	$q2="";
	$count = 0;
	$str="insert into user_master (u_name,email,gender,birth_date,u_phone,u_type,username,password,city_id,state_id,country_id,language,isactive) values('$name','$email','$gender','$dte','$phn','$ty','$un','$password','$city_id','$state_id','$cntry_id','$lang','$isa')";

	$q1=mysqli_query($conn,$str);
			/*print_r($q1);
			exit();*/
			/*if ($q1=1) {
				echo 'inserted';
				$str="select u_id from user_master where username='$un'";
				$data=mysqli_query($conn,$str);
				$result = mysqli_fetch_array($data);
				$uid=$result['u_id'];
				$str1="insert into traveler_master (u_id,verified) values('$uid','$isa')";
				$q2=mysqli_query($conn,$str1);
				if ($q2=1) {
					echo 'TRAAVELER REGISTERED';
				}
				else {
					echo 'tra error';
				}
			}
			else {
				echo 'error';
			}

		}*/		
		?>