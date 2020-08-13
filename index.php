<!doctype html>
<?php

error_reporting(~E_NOTICE);
session_start();

if (!isset($_SESSION['logged'])) {

}	else {

			$type = $_SESSION['type'];
			if ($type == "VRP") {
				$type = "VehicleRentalProvider";
			}
			header("location:$type");

	}

?>
<html lang="en">
<head>
	<title>MajesticYatra</title>

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

	<div id="loading">
		<div id="loading-center">
			<img src="images/loader.png" alt="loder">
		</div>
	</div>

		<nav id="menu-1" class="mega-menu">

			<section class="menu-list-items">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12">

							<ul class="menu-logo">
								<li>
									<a href="index.php">
										<img id="logo_img" src="images/logo.png" alt="logo">
									</a>
								</li>
							</ul>
							
								<ul class="menu-links">
									<li><a href="javascript:void(0)">Home</a>
									</li>
									<li><a href="privacypolicy.php">Privacy Policy</a>
									</li>
									<!-- <li><a href="javascript:void(0)">Blogs</a>
										<ul class="drop-down-multilevel">
											<li><a href="javascript:void(0)">All Blogs<i class="fa fa-angle-right fa-indicator"></i> </a>
											</li>
											<li><a href="javascript:void(0)">Stories<i class="fa fa-angle-right fa-indicator"></i> </a>
											</li>
											<li><a href="javascript:void(0)">Destination Visits<i class="fa fa-angle-right fa-indicator"></i> </a>
											</li>
											<li><a href="javascript:void(0)">Travel Tips<i class="fa fa-angle-right fa-indicator"></i> </a>
											</li>
										</li>
									</ul> -->
									<li><a href="javascript:void(0)">Register</a>
										<ul class="drop-down-multilevel">
											<li><a href="TravelerRegistration.php">Traveller Registration<i class="fa fa-angle-right fa-indicator"></i> </a>
											</li>
											<li><a href="mechanicregistration.php">Mechanic Registration<i class="fa fa-angle-right fa-indicator"></i> </a>
											</li>
											<li><a href="DoctorRegistration.php">Doctor Registration<i class="fa fa-angle-right fa-indicator"></i> </a>
											</li>
											<li><a href="hotelregistration.php">Hotel Registration<i class="fa fa-angle-right fa-indicator"></i> </a>
											</li>
											<li><a href="vehiclerentalproviderregistration.php">Vehicle Rental Provider Registration<i class="fa fa-angle-right fa-indicator"></i> </a>
											</li>
										</li>
									</ul>
									<li><a href="login.php">Login</a>
									</li>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
		</header>
	</section>
		<div id="rev_slider_126_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8">
			<ul>
				 <div class="tp-caption tp-resizeme" id="slide-432-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="2" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 70px; line-height: 80px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Raleway;">
						 <i>Our</i>Trips</div>

						
					<li data-index="rs-433" data-transition="random-static,random-premium,random" data-slotamount="default,default,default,default" data-hideafterloop="0" data-hideslideonmobile="off" data-randomtransition="on" data-easein="default,default,default,default" data-easeout="default,default,default,default" data-masterspeed="default,default,default,default" data-thumb="revolution/assets/100x50_e75fd-b.jpg" data-rotate="0,0,0,0" data-saveperformance="off" class="b1-video" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

							<img src="revolution/assets/0b4e1-gfgf.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>


							<div class="tp-caption tp-resizeme" id="slide-434-layer-1" data-x="right" data-hoffset="60" data-y="center" data-voffset="-4" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 70px; line-height: 80px; font-weight: 600; color: #ffffff; letter-spacing: 0px;font-family:Raleway;">
								<i>Memorable Trips</i> </div>

								<div class="tp-caption tp-resizeme" id="slide-434-layer-24" data-x="right" data-hoffset="60" data-y="center" data-voffset="78" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Raleway;">Our Success Stories </div>

							</li>
						</ul>
						<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
					</div>
				</div>


				<div class="main-content">
				<h2 style="text-align: center; margin-top: 70px;"; ><strong>How it Works?</strong></h2>
						<section class="overview-block-ptb about-us">
						<div class="container">
							<div class="row">
								<div class="col-lg-4 iq-mt-30">
									
									<div class="text-center iq-pall-10">
										<h5 class="iq-tw-6 iq-mt-20 iq-mb-10">Simply choose your Trips or else create your own trips for a better experience.</h5>
										
									</div>
								</div>
								<div class="col-lg-4 iq-mt-30">
									<div class="text-center iq-pall-10">
										
										<h5 class="iq-tw-6 iq-mt-20 iq-mb-10">Emerge yourself with the existing trips and have a fun with your social friends and live out your life with a memorable trip.</h5>
										
									</div>
								</div>
								<div class="col-lg-4 iq-mt-30">
									<div class="text-center iq-pall-10">
										
										<h5 class="iq-tw-6 iq-mt-20 iq-mb-10">Get a medical, mechanics, vehicles, hotels etc services and roam out of zone freely and create a unforgettable time with Majestic Yatra.</h5>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="green-bg iq-hide awesome-box4">

						<div class="container">
							<div class="row">
								<div class="col-lg-4 col-sm-12 iq-mtb-15 phone-box iq-hide text-center">
									<img alt="" src="revolution/assets/5ab09-man.jpg" class="img-fluid wow fadeInUp" data-wow-duration="1s">
								</div>

								<div class="col-lg-8 col-sm-12 iq-mtb-15">

									<h2 class="small-title white iq-tw-6 iq-font-bkack">About Us</h2>

									<h6><p class="iq-font-white">Majestic Yatra is travelling website which emerges you with the beautiful world with our best services.</p></h6>
									<h6><p class="iq-font-white">Majestic Yatra is a place where you can join or create your own trips and have a fun with your social friends. Majestic Yatra helps out you to spend your precious time with our belvoved ones to create the magical moments of your life. </p></h6>
									
								</div>
							</div>
						</div>
					</section>

				</div>

				<footer class="iq-footer3">
					<div class="footer-top">
						<div class="container">
							<div class="row overview-block-ptb4">
								
								<div class="col-lg-3 col-md-6 col-sm-12 menu iq-re-4-mt50">
									<div class="iq-contact-box iq-mb-20">
										<div class="iq-icon">
											<i aria-hidden="true" class="ion-ios-telephone-outline"></i>
										</div>
										<div class="iq-content">
											<div class="iq-lead iq-font-black iq-tw-6">Phone</div>
											<span class="iq-tw-6">+91 0000000000</span>
										</div>
									</div>
									<div class="iq-contact-box iq-mb-20">
										<div class="iq-icon">
											<i aria-hidden="true" class="ion-ios-email-outline"></i>
										</div>
										<div class="iq-content">
											<div class="iq-lead iq-font-black iq-tw-6">Mail</div>
											<span class="iq-tw-6"><a href="#"> <span class="__cf_email__" data-cfemail="583539313418292f313437763b3735">[yatramajestic@gmail.com]</span></a></span>
										</div>
									</div>
									<div class="iq-contact-box iq-mb-20">
										<div class="iq-icon">
											<i aria-hidden="true" class="ion-ios-location-outline"></i>
										</div>
										<div class="iq-content">
											<div class="iq-lead iq-font-black iq-tw-6">Address</div>
											<span class="iq-tw-6">L.J. College, Ahmedabad</span>
										</div>
									</div>

								</div>
								
																<div class="col-lg-3 col-md-6 col-sm-12 menu iq-re-4-mt50">
									<!-- <div class="iq-contact-box iq-mb-20">
										<div class="iq-icon">
											<i aria-hidden="true" class="ion-ios-telephone-outline"></i>
										</div>
										<div class="iq-content">
											<div class="iq-lead iq-font-black iq-tw-6">Phone</div>
											<span class="iq-tw-6">+91 0000000000</span>
										</div>
									</div>
									<div class="iq-contact-box iq-mb-20">
										<div class="iq-icon">
											<i aria-hidden="true" class="ion-ios-email-outline"></i>
										</div>
										<div class="iq-content">
											<div class="iq-lead iq-font-black iq-tw-6">Mail</div>
											<span class="iq-tw-6"><a href="#"> <span class="__cf_email__" data-cfemail="583539313418292f313437763b3735">[yatramajestic@gmail.com]</span></a></span>
										</div>
									</div>
									<div class="iq-contact-box iq-mb-20">
										<div class="iq-icon">
											<i aria-hidden="true" class="ion-ios-location-outline"></i>
										</div>
										<div class="iq-content">
											<div class="iq-lead iq-font-black iq-tw-6">Address</div>
											<span class="iq-tw-6">L.J. College, Ahmedabad</span>
										</div>
									</div> -->

								</div>
								<div class="col-lg-3 col-md-6 col-sm-12 menu iq-re-4-mt50">
		<!-- 							<div class="iq-contact-box iq-mb-20">
										<div class="iq-icon">
											<i aria-hidden="true" class="ion-ios-telephone-outline"></i>
										</div>
										<div class="iq-content">
											<div class="iq-lead iq-font-black iq-tw-6">Phone</div>
											<span class="iq-tw-6">+91 0000000000</span>
										</div>
									</div>
									<div class="iq-contact-box iq-mb-20">
										<div class="iq-icon">
											<i aria-hidden="true" class="ion-ios-email-outline"></i>
										</div>
										<div class="iq-content">
											<div class="iq-lead iq-font-black iq-tw-6">Mail</div>
											<span class="iq-tw-6"><a href="#"> <span class="__cf_email__" data-cfemail="583539313418292f313437763b3735">[yatramajestic@gmail.com]</span></a></span>
										</div>
									</div>
									<div class="iq-contact-box iq-mb-20">
										<div class="iq-icon">
											<i aria-hidden="true" class="ion-ios-location-outline"></i>
										</div>
										<div class="iq-content">
											<div class="iq-lead iq-font-black iq-tw-6">Address</div>
											<span class="iq-tw-6">L.J. College, Ahmedabad</span>
										</div>
									</div> -->

								</div> 		

								<div class="col-lg-3 col-md-6 col-sm-12 iq-re-9-mt50">
									<div class="iq-map">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.918458486894!2d72.48437655058447!3d22.99002578489571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9aee6c89a621%3A0x872df2d55fbb0008!2sLJ+Institute+of+Engineering+And+Technology!5e0!3m2!1sen!2sin!4v1549509976867" width="600" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="footer-bottom">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<hr>
								</div>
							</div>
							<div class="row overview-block-ptb4">
								<div class="col-lg-8 col-sm-12 menu">
									<ul class="d-inline">
										<li class="d-inline-block"><a href="#">Home</a></li>
										<li class="d-inline-block"><a href="Privacypolicy.php">Privacy Policy </a></li>
										<li class="d-inline-block"><a href="contactus.php">Contact Us</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</footer>


				<div class="modal fade iq-login-from" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header text-center">
								<h4 class="modal-title iq-tw-5">Login</h4>
								<a class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times; </span>
								</a>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<input type="text" class="form-control" id="recipient-name" placeholder="Enter Name">
									</div>
									<div class="form-group">
										<input type="password" class="form-control" id="recipient-password" placeholder="Password">
									</div>
									<a class="button iq-mtb-10" href="#">Sign In</a>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-check-input">Remember Me</label>
												</div>
											</div>
											<div class="col-sm-6 text-right">
												<a href="#">Forgot Password</a>
											</div>
										</div>
									</form>
								</div>
								<div class="modal-footer text-center">
									<div> Don't Have an Account? <a href="#" class="iq-font-yellow">Register Now</a></div>
									<ul class="iq-media-blog iq-mt-20">
										<li><a href="# "><i class="fa fa-twitter "></i></a></li>
										<li><a href="# "><i class="fa fa-facebook "></i></a></li>
										<li><a href="# "><i class="fa fa-google "></i></a></li>
										<li><a href="# "><i class="fa fa-github "></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>



					<script src="js/jquery.min.js"></script>

					<script src="js/popper.min.js"></script>
					<script src="js/bootstrap.min.js"></script>

					<script src='../../../www.google.com/recaptcha/api.js'></script>

					<script src="js/mega-menu/mega_menu.js"></script>

					<script src="js/main.js"></script>

					<script src="revolution/js/revolution.addon.snow.min.js"></script>
					<script src="revolution/js/revolution.addon.particles.min.js"></script>

					<script src="revolution/js/jquery.themepunch.tools.min.js"></script>
					<script src="revolution/js/jquery.themepunch.revolution.min.js"></script>

					<script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
					<script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
					<script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
					<script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
					<script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
					<script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
					<script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
					<script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
					<script src="revolution/js/extensions/revolution.extension.video.min.js"></script>

					<script src="js/style-customizer.js"></script>

					<script src="js/custom.js"></script>
					<script>
						var revapi126,
						tpj;
						(function() {
							if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",onLoad); else onLoad();

							function onLoad() {
								if (tpj===undefined) { tpj = jQuery; if("off" == "on") tpj.noConflict();}
								if(tpj("#rev_slider_126_1").revolution == undefined){
									revslider_showDoubleJqueryError("#rev_slider_126_1");
								}else{
									revapi126 = tpj("#rev_slider_126_1").show().revolution({
										sliderType:"standard",
										jsFileLocation:"//localhost/revslider-standalone/revslider/public/assets/js/",
										sliderLayout:"fullwidth",
										dottedOverlay:"none",
										delay:9000,
										navigation: {
											keyboardNavigation:"off",
											keyboard_direction: "horizontal",
											mouseScrollNavigation:"off",
											mouseScrollReverse:"default",
											onHoverStop:"off",
											arrows: {
												style:"zeus",
												enable:true,
												hide_onmobile:false,
												hide_onleave:false,
												tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
												left: {
													h_align:"left",
													v_align:"center",
													h_offset:20,
													v_offset:0
												},
												right: {
													h_align:"right",
													v_align:"center",
													h_offset:20,
													v_offset:0
												}
											}
										},
										visibilityLevels:[1240,1024,778,480],
										gridwidth:1170,
										gridheight:790,
										lazyType:"none",
										shadow:0,
										spinner:"spinner0",
										stopLoop:"off",
										stopAfterLoops:-1,
										stopAtSlide:-1,
										shuffle:"off",
										autoHeight:"off",
										disableProgressBar:"on",
										hideThumbsOnMobile:"off",
										hideSliderAtLimit:0,
										hideCaptionAtLimit:0,
										hideAllCaptionAtLilmit:0,
										debugMode:false,
										fallbacks: {
											simplifyAll:"off",
											nextSlideOnWindowFocus:"off",
											disableFocusListener:false,
										}
									});
								}; /* END OF revapi call */
							}; /* END OF ON LOAD FUNCTION */
						}()); /* END OF WRAPPING FUNCTION */
					</script>
				</body>

				<!-- Mirrored from iqonicthemes.com/themes/qwilo/home-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Dec 2018 06:56:56 GMT -->
				</html>