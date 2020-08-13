<?php 

extract($_GET);
if (!isset($did)) {
		 	header("location:doctorexplore.php");
}
require "header.php";
require "../lib/connection.php";
$v = new validation();?>
<section class="overview-block-ptb text-left iq-font-white" style="background-color: black;
background-position: center center; background-repeat: no-repeat; background-size: cover;">
<div class="container">
	<div class="row align-items-center">
		<div class="col-lg-8">
			<div class="iq-mb-0">
				<h2 class="iq-font-white iq-tw-6" style="margin-top: 50px;">Doctor Finalize</h2>
			</div>
		</div>
	</div>
</div>
</section>
<div class="main-content">

<section class="iq-over-black-50 iq-bg iq-log-regi" style="background-color: white; background-position: left center; background-attachment: fixed;">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12">
<div class="heading-title text-center">
<h2 class="title iq-tw-6 iq-font-white">Doctor Finalize</h2>
</div>
</div>
</div>
<div class="row justify-content-md-center">
<div class="col-md-8">
<div class="iq-login iq-pt-40 iq-pb-30 iq-plr-30">
<form action="doctorfinalize.php" method="POST">
<div class="form-group">
<?php 
$str = "select user_master.u_id,u_name from user_master,doctor_master where user_master.u_id = (select u_id from doctor_master where d_id = $did)";
$res = mysqli_query($conn,$str);
$data = mysqli_fetch_array($res);
 ?>
<label class="iq-font-white" for="username">Are you sure you want to request the doctor:</label><br>
<label class="iq-font-white" for="username">Doctor Name: <?= $data['u_name'] ?></label><br>
<label class="iq-font-white" for="username">At The Location</label><br>
<textarea name="address" class="form-control" placeholder="Enter Address" required style="resize: none; height: 80px;" maxlength="150"></textarea>
<br><label class="iq-font-white" for="username">Date Needed</label><br>
<script type="text/javascript">
											var today = new Date();
											var dd = today.getDate();
											var mm = today.getMonth()+1; //January is 0!
											var yyyy = today.getFullYear();
											if(dd<10){
												dd='0'+dd
											} 
											if(mm<10){
												mm='0'+mm
											} 
											yyyy1 = yyyy+2; 
											dd1 = dd+1;
today = yyyy+'-'+mm+'-'+dd;
today1 = yyyy1+'-'+mm+'-'+dd;
$( document ).ready(function() {
$("#reqdate").attr("min", today);
$("#reqdate").attr("max", today1);
});
</script>
<input type="date" name="reqdate" id="reqdate" required class="form-control"><br>
<?php 	 $uid = $_SESSION['id'];
	 $str1 = "select tr_title,tr_id from trip_master where u_id='$uid'";
	 $res1 = mysqli_query($conn,$str1); ?>
	 <?php if (mysqli_num_rows($res1)  >= 1): ?>

<select class="form-control" name="trip">
	<option value="-1">Select trip if any</option>
	<?php
	 while ($data1 = mysqli_fetch_array($res1)) {
	 ?>
	 <option value="<?= $data1['tr_id'] ?>"><?= $data1['tr_title'] ?></option>
	<?php } ?>
</select>
	 	
	 <?php endif ?>
<input type="hidden" class="form-control" name="uid" value="<?= $_SESSION['id'] ?>">
<input type="hidden" class="form-control" name="did" value="<?= $did ?>">
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-check iq-pl-0">
</div>
</div>
<div class="col-sm-6">
<div class="text-right">
</div>
</div>
</div>
<button type="submit" class="button iq-mt-40" name="submit"><b>Yes Request Medical Assistant Now.</b></button>
<a href="tripexplore.php" class="button iq-mt-20" style="background-color: red;text-align: center;">No go Back!!</a>
</form>
</div>
</div>
</div>
</section>

 ?>