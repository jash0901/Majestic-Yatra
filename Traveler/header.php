<?php 
session_start();
include_once "../lib/connection.php";
require "../lib/model.php";
require "../lib/validation.php";
require "../lib/travelerloginvalidation.php";
/*$un = $_SESSION['un'];
$name = $_SESSION['name'];
$typ = $_SESSION['type'];
$em = $_SESSION['email'];*/
?>
<!doctype html>
<html lang="en">
<style type="text/css">body{
    overflow-x: hidden;
}</style> 
<!-- Mirrored from iqonicthemes.com/themes/qwilo/portfolio-single-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Dec 2018 07:01:38 GMT -->
<head>
	<title>Majestic Yatra</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="shortcut icon" href="images/favicon.ico" />

	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

	<link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />

	<link href="css/mega-menu/mega_menu.css" rel="stylesheet" type="text/css" />

	<link href="css/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />

	<link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />

	<link href="css/animate.css" rel="stylesheet" type="text/css" />

	<link href="css/mediaelementplayer.min.css" rel="stylesheet" type="text/css" />

	<link href="revolution/css/settings.css" rel="stylesheet" type="text/css">

	<link href="revolution/css/revolution.addon.particles.css" rel="stylesheet" type="text/css">

	<link href="css/shortcodes.css" rel="stylesheet" type="text/css" />

	<link href="css/style.css" rel="stylesheet" type="text/css" />

	<link href="css/shop.css" rel="stylesheet" type="text/css" />

	<link href="css/responsive.css" rel="stylesheet" type="text/css" />

	<link href="css/custom.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="#" data-style="styles">
	<link rel="stylesheet" href="css/style-customizer.css" />
	<script src="js/jquery.min.js"></script>
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
	</script>

	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mega-menu/mega_menu.js"></script>

	<script src="js/main.js"></script>

	<script src="js/style-customizer.js"></script>

	<script src="js/custom.js"></script>
</head>
<body>

<!-- <div id="loading">
<div id="loading-center">
<img src="images/loader.png" alt="loder">
</div>
</div> -->


<header class="header-01 re-none">
	
	<nav id="menu-1" class="mega-menu">

		<section class="menu-list-items">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12">
						<ul class="menu-logo">
							<li>
								<a href="index.html">
									<img id="logo_img" src="images/logo.png" alt="logo">
								</a>
							</li>
						</ul>
						<ul class="menu-links">
							<?php if (!isset($_SESSION['type'])): ?>
								<li><a href="../index.php">Home</a>
								</li>										
								<?php else: ?>
									<?php if ($_SESSION['type'] == "Traveler"): ?>
										<li><a href="../Traveler/index.php">Home</a>
										</li>										
									<?php endif ?>
									<?php if ($_SESSION['type'] == "Doctor"): ?>
										<li><a href="../Doctor/index.php">Home</a>
										</li>										
									<?php endif ?>
									<?php if ($_SESSION['type'] == "VRP"): ?>
										<li><a href="../VehicleRentalProvider/index.php">Home</a>
										</li>										
									<?php endif ?>
									<?php if ($_SESSION['type'] == "Mechanic"): ?>
										<li><a href="../Mechanic/index.php">Home</a>
										</li>										
									<?php endif ?>
									<?php if ($_SESSION['type'] == "Hotel"): ?>
										<li><a href="../Hotel/index.php">Home</a>
										</li>										
									<?php endif ?><?php endif ?>
									<li><a href="../privacypolicy.php">Privacy Policy</a>
									</li>
									<li><a href="javascript:void(0)">Blogs</a>
										<ul class="drop-down-multilevel">
											<li><a href="../Blogs/blogwrite.php">Write your blog<i class="fa fa-angle-right fa-indicator"></i> </a>
											</li>
											<li><a href="../Blogs/blogexplore.php">View Blogs<i class="fa fa-angle-right fa-indicator"></i> </a>
											</li>
										</li>
									</ul>
									<li><a href="javascript:void(0)">Services</a>
										<ul class="drop-down-multilevel">
											<li><a href="doctorexplore.php">Request Medical Assistance<i class="fa fa-angle-right fa-indicator"></i> </a>
											</li>
											<li><a href="mechanicexplore.php">Request Mechanics<i class="fa fa-angle-right fa-indicator"></i> </a>
											</li>
											<!-- <li><a href="javascript:void(0)">Rent Vehicles<i class="fa fa-angle-right fa-indicator"></i> </a>
											</li> -->
										</li>
									</ul>
									<li><a href="javascript:void(0)">Travel Trips</a>
										<ul class="drop-down-multilevel">
											<li><a href="tripcreate.php">Create Trips<i class="fa fa-angle-right fa-indicator"></i> </a>
											</li>
											<li><a href="tripexplore.php">Join Trips<i class="fa fa-angle-right fa-indicator"></i> </a>
											</li>
											<li><a href="viewjoinedtrips.php">View Joined Trips<i class="fa fa-angle-right fa-indicator"></i> </a>
											</li>
										</li>
									</ul>
									<li><a href="viewhotels.php">View Hotels</a>
									</li>
									<li><a href="../Blogs/index.php?cat=22">View Destinations</a>
									</li>
									<li><a href="profile.php">View Profile</a>
									</li>
									<li><ul class="menu-sidebar pull-right">
										<li class="shop-cart">
											<div class="iq-pos-r">
												<?php 
													$uid = $_SESSION['id'];
													$trip = "select tr_id,tr_title from trip_master where u_id = $uid";
													$trres = mysqli_query($conn,$trip);
													$cnt = mysqli_num_rows($trres);
												 ?>
												<a href="#" class="iq-cart iq-pos-r" id="cart"><i class="fa fa-car"></i><span class="cart-count">*</span></a>
												<div class="cart-box" style="height: 600px;width: 400px; overflow: scroll;">
													<div class="cart-header">
														<div class="iq-font-black">Requests and Notifications</div>
													</div>
													<?php 
													if($cnt > 0) {
														while ($data = mysqli_fetch_array($trres)) {
														$trid = $data['tr_id'];
														$str = "select * from trip_request_master where tr_id = $trid and approved = 'A'";	
														$res = mysqli_query($conn,$str);
														while ($data1 = mysqli_fetch_array($res)) {
															$uid1 = $data1['u_id'];
														$str1 = "select u_name,u_pic from user_master where u_id = $uid1";
														$res1 = mysqli_query($conn,$str1);
														$data2 = mysqli_fetch_array($res1);
														

													 ?>
													<div class="cart-product">
														<div class="cart-image">
															<img class="img-fluid" src="../profilepics/<?= $data2['u_pic'] ?>" alt="Profile Pic">
														</div>
														<div class="cart-title clearfix">
															<a href="userview.php?id=<?= $uid1 ?>"><?= $data2['u_name'] ?></a>
															<div class="cart-price" style="font-size: 12px;">
																Has Requested to Join your trip...<br><?= $data['tr_title'] ?>
															</div>
														</div>
														<div class="cart-close">
															<a href="requestaction.php?id=<?= $uid1 ?>&action=accept&trid=<?= $trid ?>"> <i class="fa fa-check"></i> </a>
															<a href="requestaction.php?id=<?= $uid1 ?>&action=reject&trid=<?= $trid ?>"> <i class="fa fa-trash"></i> </a>
														</div>
													</div>
													<?php
													}//innerwhile
														}//outwhile
															}//if
													?>
													<?php 
														$str = "select * from trip_request_master where u_id = $uid";	
														$res = mysqli_query($conn,$str);
														while ($data = mysqli_fetch_array($res)) {
															$trid = $data['tr_id'];
															$trip = "select tr_title from trip_master where tr_id = $trid";
															$trres = mysqli_query($conn,$trip);
															$trdata = mysqli_fetch_array($trres);
													 ?>
													 <div class="cart-product">
														<div class="cart-title clearfix">
															<div class="cart-price" style="font-size: 15px;">
															<?php if ($data['approved'] == "N"): ?>
																Your request to join the Trip: <a href="tripview.php?id=<?= $trid ?>" style="display: inline;"> <?= $trdata['tr_title'] ?></a> has been REJECTED! Try somewhere else.
															<?php endif ?>
															<?php if ($data['approved'] == "Y"): ?>
																CONGRATULATIONS!! Your request to join the Trip: <a href="tripview.php?id=<?= $trid ?>" style="display: inline;"> <?= $trdata['tr_title'] ?></a> has been ACCEPTED! View Trip Details Now!!
															<?php endif ?>
														</div>
														</div>
													</div>
													<?php } ?>
												</div>
											</div>
										</li>
									</ul></li>
									<li><a href="javascript:void(0)"><i class="fa fa-user fa-lg"></i></a>
										<ul class="drop-down-multilevel">
											<li><a href="profile.php"><i class="fa fa-user fa-lg"></i> Profile</a>
											</li>
											<li><a href="page-login.html"><i class="fa fa-sign-out fa-lg"></i>Logout</a>
											</li>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
		</header>
	</header>