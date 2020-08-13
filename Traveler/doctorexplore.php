<?php
require 'header.php'; ?>
<section class="overview-block-ptb text-left iq-font-white" style="background-color:black;
background-position: center center; background-repeat: no-repeat; background-size: cover;">
<div class="container">
	<div class="row align-items-center">
		<div class="col-lg-8">
			<div class="iq-mb-0">
				<h2 class="iq-font-white iq-tw-6" style="margin-top: 10%;">View Doctors</h2>
			</div>
		</div>
	</div>
</div>
</section>
<br>
<div class="main-content">
	<div style="background-color: #212529;">
	<center>
		<form action="doctorexplore.php" method="post" enctype="multipart/form-data">
			<h3 class="iq-font-white">Select Location for needed Service</h3>
			<span class="iq-font-green" style="margin-top: -20px;">To serve you properly we'll need a full location detail i.e. City, State & Country</span></center>
			<table class="table table-dark" style="width: 70%; margin-left: 15%;">
				<tr><td><select class="form-control" name="cntryid" onchange="getState(this.value);"  style="border-color: white; font-size: 20px;">
					<option value="-1">Select Country</option>
					<?php   
					$i=0;
					$str="select * from country_master";
					$data=mysqli_query($conn,$str);
					while ($result = mysqli_fetch_array($data)) { $i++; ?>
						<option value="<?php echo $result['country_id']; ?>"><?php echo $result['country_name']; ?></option>
					<?php } ?>
				</select></td>
				<td><select class="form-control" id="state-list" name="stateid" onchange="getCity(this.value);" style="border-color: white; font-size: 20px;"><option value="-1">Select State</option></select></td>
				<td><select class="form-control" id="city-list" name="cityid"  style="border-color: white; font-size: 20px;"><option value="-1">Select City</option></select></td>
			</tr>
			<!-- <tr> -->
				<!-- <td colspan=3  style="border: 1px solid #efefef; height: 50px"><center><button style="height:50px; width: 100%" class="btn-success" name="btn" style="font-size: 20px;">Find Hotels</button></center></td> -->

			<!-- </tr> -->
		</table>
		<center><button style="height:30%; width: 70%;font-size: 20px;" class="button iq-mr-0" name="btn" style="font-size: 20px;"><b>Find Medical Assistance</b></button></center>
	</form>
	<br>
</div>
	<?php if (isset($_POST['btn'])): ?>
	<section class="overview-block-ptb iq-product">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="row">
						<?php 
							extract($_POST);
							$str1 = "select d_id,doctor_master.u_id,u_name,email,u_phone,u_pic,clinic_addr,fees,doctor_master.verified from user_master,doctor_master where user_master.u_type='Doctor' and (user_master.city_id = '$cityid' and user_master.state_id = '$stateid' and user_master.country_id = '$cntryid') and doctor_master.allocated = 0 and doctor_master.verified = 1 and user_master.u_id = doctor_master.u_id";
							$result1 = mysqli_query($conn,$str1);
							$no = mysqli_num_rows($result1);
							if ($no>=1) {
							while ($data1 = mysqli_fetch_array($result1)) {
							$pic = $data1['u_pic'];	
							$uid = $data1['u_id'];
							$did = $data1['d_id'];
							$uid = $data1['u_id'];
						 ?>
						<div class="col-lg-4 col-md-4 col-sm-12 iq-mb-30" >
							<div class="item">
								<div class="iq-productbox">
									<div class="product-image">
										<img class="hover" src="../profilepics/<?= $pic ?>" style="height: 250px;" alt="Doctor image">
									</div>
									<div class="product-detail">
										<h6><a href="viewdoctorprofile.php?doctorid=<?= $did ?>&userid=<?= $uid ?>"><?= $data1['u_name'] ?></a></h6>
										<p><?= $data1['clinic_addr'] ?></p>
										<div class="shop-price">
											<strong><?= $data1['fees'] ?></strong>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php }
							}
							else {
								echo "<div class='container'>
		<div class='row'>
			<div class='col-lg-6 col-sm-12 iq-mt-80'>	
				<img class='img-fluid iq-mb-30' src='images/device/500.png' alt=''>
				<h1 class='iq-tw-6'> You either did not select the location or data isn't available </h1>
				<div class='iq-mt-20'>Its not you, Its us!! Apologies for the issues. Please select the location or try a different page</div>
			</div>	
			<div class='col-lg-6 col-sm-12 iq-mt-70 iq-robot'>
				<img class='img-fluid' src='images/device/robot.png' alt=''>
			</div>
		</div>
	</div>";
							}
							 ?>
					</div>
				</div>
			</div>
		</section>
		<?php else: ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-sm-12 iq-mt-80">	
				<img class="img-fluid iq-mb-30" src="images/device/500.png" alt="">
				<h1 class="iq-tw-6"> You either did not select the location or data isn't available </h1>
				<div class="iq-mt-20">Its not you, Its us!! Apologies for the issues. Please select the location or try a different page</div>
			</div>	
			<div class="col-lg-6 col-sm-12 iq-mt-70 iq-robot">
				<img class="img-fluid" src="images/device/robot.png" 	alt="">
			</div>
		</div>
	</div>
	<?php endif ?>