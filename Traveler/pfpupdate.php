<?php 

include_once "../lib/connection.php";
require 'header.php';
$id = $_SESSION['id'];
$str = "select u_pic from user_master where u_id = '$id'";
$res = mysqli_query($conn,$str);
$data = mysqli_fetch_array($res);
$pic = $data['u_pic'];
?>
<section class="overview-block-ptb text-left iq-font-white" style="background-color:black;
 background-position: center center; background-repeat: no-repeat; background-size: cover;">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-8">
<div class="iq-mb-0">
<h2 class="iq-font-white iq-tw-6" style="margin-top: 50px;">Profile Picture Update</h2>
</div>
</div>
</div>
</div>
</section>
<section class="iq-over-black-50 iq-bg iq-log-regi" style="background-color: black; background-position: left center; background-attachment: fixed;">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12">
<div class="heading-title text-center">
<h2 class="title iq-tw-6 iq-font-white">Profile Picture Update</h2>
</div>
</div>
</div>
<div class="row justify-content-md-center">
<div class="col-md-8">
<div class="iq-login iq-pt-40 iq-pb-30 iq-plr-30">
<center><img src="../profilepics/<?= $pic ?>" style="height: 250px;width: 250px; border-radius: 50%;" class="img-circle"></center>	
<form action="pfpupdateprocess.php" method="POST" enctype="multipart/form-data">
<div class="form-group">
<center><label class="iq-font-white" for="username" style="margin-top: 20px; font-size: 20px;">Current Profile</label></center>
</div>
<div class="form-group iq-mt-20">
<label class="iq-font-white" for="password">Update Picture</label>
<input type="file" class="form-control" name="profilepic" placeholder="Profile Picture" required>
<?php
        if(isset($_SESSION['pfperr'])){
          echo "<span style='color:red bold;'>".$_SESSION['pfperr']."</span>";
          unset($_SESSION['pfperr']);
        }
?>
</div>
<button type="submit" class="button iq-mt-40" name="submit" style="font-size: 20px;">Update</button> 	
</form>
</div>
</div>
</div>
</div>
</section>