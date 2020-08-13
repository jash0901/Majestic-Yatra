<?php 
session_start();
include_once "/lib/connection.php";
require "/lib/model.php";
require "/lib/validation.php";
$un = $_SESSION['un'];
$name = $_SESSION['name'];
$typ = $_SESSION['type'];
$em = $_SESSION['email'];
?>
<!doctype html>
<html lang="en">

<!-- Mirrored from iqonicthemes.com/themes/qwilo/portfolio-single-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Dec 2018 07:01:38 GMT -->
<head>
<title>Qwilo - Multi-purpose Responsive HTML5 Template</title>

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
									<li><a href="javascript:void(0)">Home</a>
									</li>
									<li><a href="javascript:void(0)">Privacy Policy</a>
									</li>
									<li><a href="javascript:void(0)">Blogs</a>
										<ul class="drop-down-multilevel">
											<li><a href="javascript:void(0)">Write your blog<i class="fa fa-angle-right fa-indicator"></i> </a>
											</li>
											<li><a href="javascript:void(0)">All Blogs<i class="fa fa-angle-right fa-indicator"></i> </a>
											</li>
											<li><a href="javascript:void(0)">Stories<i class="fa fa-angle-right fa-indicator"></i> </a>
											</li>
											<li><a href="javascript:void(0)">Destination Visits<i class="fa fa-angle-right fa-indicator"></i> </a>
											</li>
											<li><a href="javascript:void(0)">Travel Tips<i class="fa fa-angle-right fa-indicator"></i> </a>
											</li>
										</li>
									</ul>
									<li><a href="javascript:void(0)">Services</a>
										<ul class="drop-down-multilevel">
											<li><a href="javascript:void(0)">Request Medical Assistance<i class="fa fa-angle-right fa-indicator"></i> </a>
											</li>
											<li><a href="javascript:void(0)">Request Mechanics<i class="fa fa-angle-right fa-indicator"></i> </a>
											</li>
										</li>
									</ul>
									<li><a href="javascript:void(0)">Travel Trips</a>
										<ul class="drop-down-multilevel">
											<li><a href="javascript:void(0)">Create Trips<i class="fa fa-angle-right fa-indicator"></i> </a>
											</li>
											<li><a href="javascript:void(0)">Join Trips<i class="fa fa-angle-right fa-indicator"></i> </a>
											</li>
											<li><a href="javascript:void(0)">Join Requests<i class="fa fa-angle-right fa-indicator"></i> </a>
											</li>
										</li>
									</ul>
									<li><a href="profile.php">View Hotels</a>
									</li>
									<li><a href="profile.php">View Profile</a>
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
