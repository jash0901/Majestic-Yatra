<?php require "header.php"; ?>

<section class="overview-block-ptb text-left iq-font-white" style="background-color:black;
background-position: center center; background-repeat: no-repeat; background-size: cover;">
<div class="container">
	<div class="row align-items-center">
		<div class="col-lg-8">
			<div class="iq-mb-0">
				<h2 class="iq-font-white iq-tw-6" style="margin-top: 10%;">Traveler Home</h2>
			</div>
		</div>
	</div>
</div>
</section>
<section class="iq-action-blog green-bg iq-ptb-40 particles-bg">
	<canvas id="canvas"></canvas>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<center><h3 class="iq-font-white iq-mb-10 iq-fw-4">Join the <b>Newest</b> Trips</h3></center>
			</div>
		</div>
	</div>
</section>
<div class="row" style="margin-top: 20px;">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="row" >
			<?php 
			extract($_POST);
			$str1 = "SELECT * FROM (
			SELECT * FROM trip_master ORDER BY tr_id DESC LIMIT 6
			) sub
			ORDER BY tr_id DESC
			";
			$result1 = mysqli_query($conn,$str1);
			$no = mysqli_num_rows($result1);
			if ($no>=1) {		
				while ($data1 = mysqli_fetch_array($result1)) {

					$uid = $data1['u_id'];
					$str2 = "select * from user_master where u_id='$uid'";
					$result2 = mysqli_query($conn,$str2);
					$data2 = mysqli_fetch_array($result2);
					$tid = $data1['tr_id'];
					$source = explode(',',$data1['tr_source']);
					$cnid = $source[0];
					if (isset($source[1])) {
						$sid = $source[1];
					}else {$sid = -1;}
					if (isset($source[2])) {
						$cid = $source[2];
					}else {$cid = -1;}
					$str3 = "SELECT country_name FROM country_master where country_id = '$cnid' UNION SELECT state_name FROM state_master WHERE state_id = '$sid' UNION SELECT city_name FROM city_master WHERE city_id = '$cid'";
					$result3 = mysqli_query($conn,$str3);$i = 0;
					while ($data3 = mysqli_fetch_array($result3)) {
						$arr[$i] = $data3[0];$i++;
					}
					$arr = array_reverse($arr);
					$source = implode(', ', $arr);
					$source1 = explode(',',$data1['tr_dest']);
					$cnid1 = $source1[0];
					if (isset($source1[1])) {
						$sid1 = $source1[1];
					}else {$sid1 = -1;}
					if (isset($source1[2])) {
						$cid1 = $source1[2];
					}else {$cid1 = -1;}
					$str3 = "SELECT country_name FROM country_master where country_id = '$cnid1' UNION SELECT state_name FROM state_master WHERE state_id = '$sid1' UNION SELECT city_name FROM city_master WHERE city_id = '$cid1'";
					$result3 = mysqli_query($conn,$str3);$j = 0;
					while ($data3 = mysqli_fetch_array($result3)) {
						$arr2[$j] = $data3[0];$j++;
					}
					$arr2 = array_reverse($arr2);
					$source1 = implode(', ', $arr2);
					?>


					<div class="col-lg-4 col-md-4 col-sm-12 iq-mb-30">
						<div class="item" >
							<div class="iq-productbox" style="min-height: 350px;">
								<div class="product-image">
									<h3><?= $data1['tr_title'] ?></h3>
								</div>
								Created by: <a href="userview.php?id=<?= $uid ?>"><b><?= $data2['u_name'] ?></b></a><br> <b></b> Start Date: <?= $data1['tr_from'] ?><b>|</b> End Date: <?= $data1['tr_to'] ?>
								<div class="product-detail">
									<p style="border-bottom: 1px black solid;font-size: 12px;margin-bottom: 5px;"><b><?= $data1['tr_desc'] ?></b></p>
									<h6><div class="shop-price" style="margin-top: 20px">
										<?php $str3 = "select count(tr_a_id) as n from trip_allocation_master where tr_id='$tid'";
										$result3 = mysqli_query($conn,$str3);
										$data3 = mysqli_fetch_array($result3);  ?>
										Travelers Joined: <?= $data3['n'] ?><br>
										Source: <?= $source ?><br>
										Destination: <?= $source1 ?><br>
										<a href="tripview.php?id=<?= $tid ?>" class="button" style="width:100%;"> View Trip Details</a>
									</div></h6>
								</div>
							</div>
						</div>
					</div>	

				<?php }
			}?>

		</div> 
		<a class="button" href= "tripexplore.php" style="width: 100%;"><center><b>View Other Trips</b></center></a>
	</div>