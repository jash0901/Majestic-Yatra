<?php require "header.php";
require "../lib/connection.php"; ?>
<style type="text/css">
input[type=date]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    display: none;
}
</style>
<style type="text/css">
.multiselect-container>li>a>label.checkbox, .multiselect-container>li>a>label.radio {
	overflow: hidden;
	margin-left: -5%;
}
.multiselect-container>li>a>label>input[type=checkbox] {
	margin-top: 5px;
	position: absolute;
}
</style>
<script type="text/javascript">
	require(['js/bootstrapmultiselect'], function(purchase){
		$('#example').multiselect({maxHeight: 400});
	});
</script>
<script type="text/javascript">
	function getState(val){
		/*alert("Hi"); */
		$.ajax({
			type: "POST",
			url: "../Admin/get_state.php",
			data: {'cntryid' :val},
			success: function(data){
				$("#state-list").html(data);
			}
		});
	}
	function getState1(val){
		/*alert("Hi"); */
		$.ajax({
			type: "POST",
			url: "../Admin/get_state.php",
			data: {'cntryid' :val},
			success: function(data){
				$("#state-list1").html(data);
			}
		});
	}
	function getCity(val){
		/* alert("Hi"); */
		$.ajax({
			url: "../Admin/get_city.php",
			type: "POST",
			data: {'stateid': val},
			success: function(data){
				$("#city-list").html(data);
			}
		});

	}  
	function getCity1(val){
		/* alert("Hi"); */
		$.ajax({
			url: "../Admin/get_city.php",
			type: "POST",
			data: {'stateid': val},
			success: function(data){
				$("#city-list1").html(data);
			}
		});

	}  
</script>
<section class="overview-block-ptb text-left iq-font-white" style="background-image: url('images/bg/45.jpg'); 
background-position: center center; background-repeat: no-repeat; background-size: cover;">
<div class="container">
	<div class="row align-items-center">
		<div class="col-lg-8">
			<div class="iq-mb-0">
				<h2 class="iq-font-white iq-tw-6" style="margin-top: 50px;">Create a Trip</h2>
			</div>
		</div>
	</div>
</div>
</section>
<link rel="stylesheet" href="css/bootstrapmultiselect.css" type="text/css">
<script type="text/javascript" src="js/require.min.js"></script>
<script type="text/javascript" src="js/bootstrapmultiselect.js"></script>
<div class="main-content">

	<section class="iq-over-black-50 iq-bg iq-log-regi" style="background-color:black;background-position: left center; background-attachment: fixed;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="heading-title text-center">
						<h2 class="title iq-tw-6 iq-font-white">Trip Create</h2>
					</div>
				</div>
			</div>
			<div class="row justify-content-md-center">
				<div class="col-md-8">
					<div class="iq-login iq-pt-40 iq-pb-30 iq-plr-30">
						<form action="tripcreateprocess.php" method="POST">
							<div class="form-group">
								<label class="iq-font-white" >Trip Title</label>
								<input type="text" class="form-control" name="trititle" placeholder="Title Required" maxlength="80">
							</div>
							<div class="form-group">
								<label class="iq-font-white" >Trip Description</label>
								<textarea name="tripdes" class="form-control" placeholder="Description Required" required maxlength="250" style="resize: none; height: 120px;"></textarea>
							</div>
							<div class="form-group">
								<label class="control-label">Preferred Gender</label><br>
								<input type="radio" name="gender" value="Male" style="position: absolute; width: 50px; height: 30px;"><label style="margin-left: 50px;margin-right: 10px; font-size: 18px;">Male</label>
								<input type="radio" name="gender" value="Female" style="position: absolute; width: 50px; height: 30px;"><label style="margin-left:50px;margin-right: 30px; font-size: 18px;">Female</label>
								<input type="radio" name="gender" value="Both" checked="True" style="position: absolute; width: 50px; height: 30px;"><label style="margin-left:50px;margin-right: 30px; font-size: 18px;">Both</label>
							</div>
							<div class="form-group">
								<label class="control-label">First Visit?</label><br>
								<input type="radio" name="fv" value="Yes" style="position: absolute; width: 50px; height: 30px;"><label style="margin-left: 50px;margin-right: 10px; font-size: 18px;">Yes</label>
								<input type="radio" name="fv" value="No" checked="True"  style="position: absolute; width: 50px; height: 30px;"><label style="margin-left:50px;margin-right: 30px; font-size: 18px;">No</label>
							</div>
							<div class="form-group iq-mt-20">
								<div class="row iq-mt-30">
									<div class="col-sm-6">
										<label class="iq-font-white" >Preffered Language</label>

										<select class="form-control" style="width: 100%;" name="lang">
											<?php $str = "select * from language_master";
											$result = mysqli_query($conn,$str);
											while ($data = mysqli_fetch_array($result)) {
												echo "<option value='$data[lang_id]'>$data[lang_name]</option>";
											}
											?>
										</select>
									</div>
									<div class="col-sm-6">
										<label class="iq-font-white" >Estimated Budget</label>
										<select class="form-control" style="width: 100%;" name="budget">
											<?php $str = "select * from budget_master";
											$result = mysqli_query($conn,$str);
											while ($data = mysqli_fetch_array($result)) {
												echo "<option value='$data[budg_id]'>$$data[budget]</option>";
											}
											?>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label">Trip Type</label><br>
								<select class="form-control" style="width: 100%;" required name="tritype">
									<option value="">Select Trip Type</option>
									<?php $str = "select * from trip_type_master";
									$result = mysqli_query($conn,$str);
									while ($data = mysqli_fetch_array($result)) {
										echo "<option value='$data[tr_type_id]'>$data[tr_type]</option>";
									}
									?>
								</select>
							</div>
							<!-- <div class="form-group" style="width:800px;">
								<label class="control-label">Preferred Way of Travel</label><br>
								<input type="radio" name="prway1" value="Railway" required style="position: absolute; width: 50px; height: 30px;"><label style="margin-left: 50px;margin-right: 10px; font-size: 18px;"><i class="fa fa-train" aria-hidden="true"></i>&nbsp;Railway</label>
								<input type="radio" name="prway1" value="Air"  style="position: absolute; width: 50px; height: 30px;"><label style="margin-left: 50px;margin-right: 10px; font-size: 18px;"><i class="fa fa-plane" aria-hidden="true"></i>&nbsp;Air</label>
								<input type="radio" name="prway1" value="Car"  style="position: absolute; width: 50px; height: 30px;"><label style="margin-left: 50px;margin-right: 10px; font-size: 18px;"><i class="fa fa-car" aria-hidden="true"></i>&nbsp;Road Trip(Car)</label>
								<input type="radio" name="prway1" value="Bike"  style="position: absolute; width: 50px; height: 30px;"><label style="margin-left: 50px;margin-right: 10px; font-size: 18px;"><i class="fa fa-motorcycle" aria-hidden="true"></i>&nbsp;Road Trip(Bike)</label>
							</div> -->
							<div class="form-group">
								<div class="row iq-mt-30">
									<div class="col-sm-6">
								<label class="control-label">Room Share</label><br>
								<input type="radio" name="prway" value="Yes" required style="position: absolute; width: 50px; height: 30px;"><label style="margin-left: 50px;margin-right: 10px; font-size: 18px;">&nbsp;Yes</label>
								<input type="radio" name="prway" value="No" required style="position: absolute; width: 50px; height: 30px;"><label style="margin-left: 50px;margin-right: 10px; font-size: 18px;">&nbsp;No</label>
							</div>
							<div class="col-sm-6">
								<label class="control-label">Share Contact & Email?</label><br>
								<input type="checkbox" name="share" style="height: 25px !important; width: 25px !important;">
							</div>
							</div>
							<div class="form-group iq-mt-20">
								<div class="row iq-mt-30">
									<div class="col-sm-6">
										<label class="iq-font-white" >Start Date</label>
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
											today2 = yyyy+'-'+mm+'-'+dd1;
											today1 = yyyy1+'-'+mm+'-'+dd;
											$( document ).ready(function() {
												$("#sdte").attr("min", today);
												$("#sdte").attr("max", today1);
												$("#edte").attr("min", today2);
												$("#edte").attr("max", today1);
											});
										</script>
										<input type="date" class="form-control" id="sdte" name="startdte" min="" required>
									</div>
									<div class="col-sm-6">
										<label class="iq-font-white" >End Date</label>
										<input type="date" class="form-control" name="enddte" id="edte" placeholder="Title" required>
									</div>
								</div>	
							</div>
							<div class="form-group iq-mt-20">
								<label class="iq-font-white" >Trip Source</label>
								<div class="row">
									<div class="col-sm-4">
										<label class="iq-font-white" for="cntry_id">Select Country<FONT style="color: red;">*</FONT></label>
										<select class="form-control" name="scntryid" onchange="getState(this.value);" required>
											<option value="">Select Country</option>
											<?php   
											$i=0;
											$str="select * from country_master";
											$data=mysqli_query($conn,$str);
											while ($result = mysqli_fetch_array($data)) { $i++; ?>
												<option value="<?php echo $result['country_id']; ?>"><?php echo $result['country_name']; ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="col-sm-4">
										<label  class="iq-font-white" for="cntry_id">Select State</label>
										<select class="form-control" id="state-list" name="sstateid" onchange="getCity(this.value);">
											<option>Select State</option>
										</select>
									</div>
									<div class="col-sm-4">
										<label for="cntry_id"  class="iq-font-white">Select City</label>
										<select class="form-control" id="city-list" name="scityid">
											<option>Select City</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group iq-mt-20">
								<label class="iq-font-white" >Trip Destination</label>
								<div class="row">
									<div class="col-sm-4">
										<label class="iq-font-white" for="cntry_id">Select Country<FONT style="color: red;">*</FONT></label>
										<select class="form-control" name="dcntryid" onchange="getState1(this.value);" required>
											<option value="">Select Country</option>
											<?php   
											$i=0;
											$str="select * from country_master";
											$data=mysqli_query($conn,$str);
											while ($result = mysqli_fetch_array($data)) { $i++; ?>
												<option value="<?php echo $result['country_id']; ?>"><?php echo $result['country_name']; ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="col-sm-4">
										<label  class="iq-font-white" for="cntry_id">Select State</label>
										<select class="form-control" id="state-list1" name="dstateid" onchange="getCity1(this.value);">
											<option>Select State</option>
										</select>
									</div>
									<div class="col-sm-4">
										<label for="cntry_id"  class="iq-font-white">Select City</label>
										<select class="form-control" id="city-list1" name="dcityid">
											<option>Select City</option>
										</select>
									</div>
								</div>
							</div>
							<button type="submit" class="button iq-mt-15" name="submit">Submit</button>
						</form>

						<div class="text-right iq-mtb-10">
							<div class="iq-font-white iq-tw-6">Want to join a trip?</div><a href="#" class="iq-font-green iq-tw-6 link">Join Trips Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</div>