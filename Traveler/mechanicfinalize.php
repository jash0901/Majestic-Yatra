<?php
extract($_POST);
if (!isset($uid) and !isset($mid)) {
			header("location:mechanicexplore.php");
			exit();
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
				<h2 class="iq-font-white iq-tw-6" style="margin-top: 50px;">Confirmation</h2>
			</div>	
		</div>
	</div>
</div>
</section>
<?php
if ($trip == -1) {
	$trip = "";
}
 $str = "insert into mechanic_request_master (u_id,tr_id,m_id,address,approved,req_date) values ('$uid','$trip','$mid','$address','A','$reqdate')";
 $res = mysqli_query($conn,$str);
 echo mysqli_error($conn);?>
 <?php if ($res == 1): ?>
<div class="main-content thank-you">
<section class="thank-you-1 overview-block-ptb text-center vertical-align">
<div class="container">
<div class="row">
<div class="col-sm-12">
<i class="fa fa-smile-o" aria-hidden="true"></i>
<div class="big-text iq-tw-7 iq-mt-60 iq-font-black">Thank You!</div>
<h5 class="iq-tw-5 iq-mb-10 iq-mt-40">Mechanic is being notified.</h5>
<p>You will be notified and contacted by mechanic when he accepts your request. KEEP TRAVELLING!!</p>
<div class="iq-mt-30">
<a class="button" href="../Traveler/" role="button">Back to the Home</a>
</div>
</div>
</div>
</div>
</section>
</div>
<?php endif ?>