<?php 
session_start();
include_once "../lib/connection.php";
require "../lib/model.php";
require "../lib/validation.php";
/*$un = $_SESSION['un'];
$name = $_SESSION['name'];
$typ = $_SESSION['type'];
$em = $_SESSION['email'];*/
?>
<!doctype html>
<html lang="en">
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

<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src='../../../www.google.com/recaptcha/api.js'></script>

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
									<a href="index.php">
										<img id="logo_img" src="images/logo1.png" alt="logo">
									</a>
								</li>
							</ul>
							<ul class="menu-sidebar pull-right">
								<li>
									<a href="#" id="btn-search"></a>
								</li>
								<li class="shop-cart">
									<div class="iq-pos-r">
										<a href="#" class="iq-cart iq-pos-r" id="cart"></a>

										<div class="cart-box">
											<div class="cart-header">
												<div class="cart-product">
												</div>
											</div>

										</div>
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
									<?php if ($_SESSION['type'] == "Admin"): ?>
									<li><a href="../Admin/index.php">Home</a>
									</li>										
									<?php endif ?>
									<?php if ($_SESSION['type'] == "Doctor"): ?>
									<li><a href="../Doctor/index.php">Home</a>
									</li>										
									<?php endif ?>
									<?php if ($_SESSION['type'] == "VHP"): ?>
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
									<?php endif ?>
									<?php endif ?>
									<li><a href="javascript:void(0)">Privacy Policy</a>
									</li>
									<li><a href="blogwrite.php">Write your blog</a>
									</li>
									<li><a href="javascript:void(0)">Stories</a>
									</li>
									<li><a href="blogexplore.php">View Blogs</a>
									</li>
										<li><a href="javascript:void(0)"><i class="fa fa-user fa-lg"></i></a>
										<ul class="drop-down-multilevel">
											<li><a href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a>
											</li>
											<li><a href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a>
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
