<?php 
extract($_GET);
if (!isset($id)) {
		 	header("location:tripexplore.php");
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
				<h2 class="iq-font-white iq-tw-6" style="margin-top: 50px;">Trip Finalize</h2>
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
<h2 class="title iq-tw-6 iq-font-white">Trip Finalize</h2>
</div>
</div>
</div>
<div class="row justify-content-md-center">
<div class="col-md-8">
<div class="iq-login iq-pt-40 iq-pb-30 iq-plr-30">
<form action="triprequest.php" method="POST">
<div class="form-group">
<?php 
$str = "select * from trip_master where tr_id = $id";
$res = mysqli_query($conn,$str);
$data = mysqli_fetch_array($res);
$source = explode(',',$data['tr_source']);
		$cnid = $source[0];
		if (isset($source[1])) {
			$sid = $source[1];
		}else {$sid = -1;}
		if (isset($source[2])) {
			$cid = $source[2];
		}else {$cid = -1;}
		$str2 = "SELECT country_name FROM country_master where country_id = '$cnid' UNION SELECT state_name FROM state_master WHERE state_id = '$sid' UNION SELECT city_name FROM city_master WHERE city_id = '$cid'";
		$result2 = mysqli_query($conn,$str2);$i = 0;
		while ($data2 = mysqli_fetch_array($result2)) {
		    $arr[$i] = $data2[0];$i++;
		}
		$arr = array_reverse($arr);
		$source = implode(', ', $arr);
		$source1 = explode(',',$data['tr_dest']);
		$cnid1 = $source1[0];
		if (isset($source1[1])) {
			$sid1 = $source1[1];
		}else {$sid1 = -1;}
		if (isset($source1[2])) {
			$cid1 = $source1[2];
		}else {$cid1 = -1;}
		$str2 = "SELECT country_name FROM country_master where country_id = '$cnid1' UNION SELECT state_name FROM state_master WHERE state_id = '$sid1' UNION SELECT city_name FROM city_master WHERE city_id = '$cid1'";
		$result2 = mysqli_query($conn,$str2);$j = 0;
		while ($data2 = mysqli_fetch_array($result2)) {
		    $arr2[$j] = $data2[0];$j++;
		}
		$arr2 = array_reverse($arr2);
		$source1 = implode(', ', $arr2);
 ?>
<label class="iq-font-white" for="username">Are you sure you want to join the trip: <?= $data['tr_title'] ?></label><br>
<label class="iq-font-white" for="username">Starting from: <?= $data['tr_from'] ?></label><br>
<label class="iq-font-white" for="username">Ending at: <?= $data['tr_to'] ?></label><br>
<label class="iq-font-white" for="username">Which is going to: <?= $source1 ?></label><br>
<label class="iq-font-white" for="username">From: <?= $source ?></label><br>
<input type="hidden" class="form-control" name="tr_id" value="<?= $id ?>">
<input type="hidden" class="form-control" name="u_id" value="<?= $_SESSION['id'] ?>">
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
<button type="submit" class="button iq-mt-40" name="submit"><b>Yes count me in!!</b></button>
<a href="tripexplore.php" class="button iq-mt-20" style="background-color: red;text-align: center;">No go Back!!</a>
</form>
</div>
</div>
</div>
</section>