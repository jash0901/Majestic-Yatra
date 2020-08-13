<?php 

include_once "../lib/connection.php";
require 'header.php';
$un = $_SESSION['un'];
$name = $_SESSION['name'];
$typ = $_SESSION['type'];
$em = $_SESSION['email'];
?>


<!-- <div class="search">
<button id="btn-search-close" class="btn btn--search-close" aria-label="Close search form">
<i class="fa fa-close" aria-hidden="true"></i>
</button>
<form class="search__form">
<input class="search__input" name="search" type="search" placeholder="Qwilo Search" autocomplete="off" autocapitalize="off" spellcheck="false">
<span class="search__info">Hit enter to search or ESC to close</span>
</form>
<div class="search__related">
<div class="search__suggestion iq-font-white">
<h3 class="iq-font-white iq-tw-6">May We Suggest?</h3>
<p>#drone #funny #catgif #broken #lost #hilarious #good #red #blue #nono #why #yes #yesyes #aliens #green</p>
</div>
<div class="search__suggestion iq-font-white">
<h3 class="iq-font-white iq-tw-6">Is It This?</h3>
<p>#good #red #hilarious #blue #nono #why #yes #yesyes #aliens #green #drone #funny #catgif #broken #lost</p>
</div>
<div class="search__suggestion iq-font-white">
<h3 class="iq-font-white iq-tw-6">Where Art Thou?</h3>
<p>#broken #lost #good #red #funny #hilarious #catgif #blue #nono #why #yes #yesyes #aliens #green #drone</p>
</div>
</div>
</div> -->


<section class="overview-block-ptb text-left iq-font-white" style="background-color:black;
 background-position: center center; background-repeat: no-repeat; background-size: cover;">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-8">
<div class="iq-mb-0">
<h2 class="iq-font-white iq-tw-6" style="margin-top: 50px;">User Profile</h2>
</div>
</div>
</div>
</div>
</section>


<div class="main-content iq-portfolio iq-port-single">
<a class="button grey" href="pfpupdate.php" style="float: right; margin-top: 0.5%;">Change Profile Picture</a>
<a class="button grey" href="#" style="float: right; margin-top: 0.5%;">Update Profile</a>
<?php $str = "select * from user_master where username='$un' and email = '$em'";
$result = mysqli_query($conn,$str);
$data = mysqli_fetch_array($result);
$cnid = $data['country_id'];
$sid = $data['state_id'];
$cid = $data['city_id'];
$path = $data['u_pic']; ?>
<section class="overview-block-ptb">
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="owl-carousel arrow-1" align="center">
<div class="item"><img alt="#" class="img-fluid img-thumbnail" src="../profilepics/<?= $path ?>">
</div>
</div>
</div>
</div>
<div class="row iq-mt-40">
<div class="col-lg-4 col-sm-12">
<h4 class="iq-tw-6 small-title iq-font-dark">Bio</h4>
<p>This is a bio</p>
</div>
<?php
$str = "select * from user_master where username='$un' and email = '$em'";
$result = mysqli_query($conn,$str);
$data = mysqli_fetch_array($result);
$cnid = $data['country_id'];
$sid = $data['state_id'];
$cid = $data['city_id'];
$path = $data['u_pic'];
$str = "SELECT country_name FROM country_master where country_id = '$cnid' UNION SELECT state_name FROM state_master WHERE state_id = '$sid' UNION SELECT city_name FROM city_master WHERE city_id = '$cid'";
$result1 = mysqli_query($conn,$str);
$data1 = mysqli_fetch_array($result1);
 ?>
<div class="col-lg-4 col-sm-12">
<ul class="portfolio-meta bottommargin">
<li><i class="fa fa-user" aria-hidden="true"></i><span class="iq-tw-6 lead">Name</span> <span class="float-right"><?php echo $data['u_name']; ?></span></li>
<li><i class="fa fa-envelope" aria-hidden="true"></i><span class="iq-tw-6 lead">Email:</span> <span class="float-right"><?php echo $data['email']; ?></span></li>
<li><i class="fa fa-user" aria-hidden="true"></i><span class="iq-tw-6 lead">Gender:</span> <span class="float-right"><?php echo $data['gender']; ?></span></li>
<li><i class="fa fa-phone" aria-hidden="true"></i><span class="iq-tw-6 lead">Phone:</span> <span class="float-right"><?php echo $data['u_phone']; ?></span></li>
<li><i class="fa fa-language" aria-hidden="true"></i><span class="iq-tw-6 lead">Language:</span> <span class="float-right"><?php echo $data['language']; ?></span></li>
</ul>	
</div>
<div class="col-lg-4 col-sm-12">
<ul class="portfolio-meta bottommargin">
<li><i class="fa fa-user" aria-hidden="true"></i><span class="iq-tw-6 lead">Username</span> <span class="float-right"><?php echo $data['username']; ?></span>
</li>
<li><i class="fa fa-globe" aria-hidden="true"></i><span class="iq-tw-6 lead">Country</span> <span class="float-right"><?php echo $data1['0']; ?></span>
</li><?php $data1 = mysqli_fetch_array($result1); ?>
<li><i class="fa fa-globe" aria-hidden="true"></i><span class="iq-tw-6 lead">State</span> <span class="float-right"><?php echo $data1['0']; ?></span>
</li><?php $data1 = mysqli_fetch_array($result1); ?>
<li><i class="fa fa-globe" aria-hidden="true"></i><span class="iq-tw-6 lead">City</span> <span class="float-right"><?php echo $data1['0']; ?></span>
</li>
</ul>	
</div>
</div>
<hr class="iq-mtb-30">
</section>
<footer class="iq-footer3">
					<div class="footer-top">
						<div class="container">
							<div class="row overview-block-ptb4">
								<div class="col-lg-3 col-md-6 col-sm-12">
									<div class="logo">
										<img id="footer_logo_dark" class="img-fluid" src="images/logo-black.png" alt="#">
										<div class="iq-font-black iq-mt-15">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-sm-12 menu iq-re-4-mt50">
									<div class="iq-contact-box iq-mb-20">
										<div class="iq-icon">
											<i aria-hidden="true" class="ion-ios-telephone-outline"></i>
										</div>
										<div class="iq-content">
											<div class="iq-lead iq-font-black iq-tw-6">Phone</div>
											<span class="iq-tw-6">+0123 456 789</span>
										</div>
									</div>
									<div class="iq-contact-box iq-mb-20">
										<div class="iq-icon">
											<i aria-hidden="true" class="ion-ios-email-outline"></i>
										</div>
										<div class="iq-content">
											<div class="iq-lead iq-font-black iq-tw-6">Mail</div>
											<span class="iq-tw-6"><a href="#"> <span class="__cf_email__" data-cfemail="583539313418292f313437763b3735">[email&#160;protected]</span></a></span>
										</div>
									</div>
									<div class="iq-contact-box iq-mb-20">
										<div class="iq-icon">
											<i aria-hidden="true" class="ion-ios-location-outline"></i>
										</div>
										<div class="iq-content">
											<div class="iq-lead iq-font-black iq-tw-6">Address</div>
											<span class="iq-tw-6">1234 North Luke Lane, South Bend, IN 360001</span>
										</div>
									</div>
									<ul class="iq-media-blog">
										<li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
										<li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
										<li><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
										<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
									</ul>
								</div>
								<div class="col-lg-3 col-md-6 col-sm-12 iq-re-9-mt50">
									<h5 class="small-title iq-tw-6 iq-font-black">Newsletter</h5>
									<div class="form-group iq-mb-15">
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email  Address">
										<a class="button grey iq-mt-10" href="#" role="button">Send</a>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-sm-12 iq-re-9-mt50">
									<div class="iq-map">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.840108181602!2d144.95373631539215!3d-37.8172139797516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1497005461921" height="250"></iframe>
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
										<li class="d-inline-block"><a href="#">About Us</a></li>
										<li class="d-inline-block"><a href="#">Services</a></li>
										<li class="d-inline-block"><a href="#">Portfolio</a></li>
										<li class="d-inline-block"><a href="#">Faqs</a></li>
										<li class="d-inline-block"><a href="#">Privacy Policy </a></li>
										<li class="d-inline-block"><a href="#">Contact Us</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</footer>


<div id="back-to-top">
<a class="top" id="top" href="#top"> <i class="ion-ios-upload-outline"></i> </a>
</div>



<script src="js/jquery.min.js"></script>

<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src='../../../www.google.com/recaptcha/api.js'></script>

<script src="js/mega-menu/mega_menu.js"></script>

<script src="js/main.js"></script>

<script src="js/style-customizer.js"></script>

<script src="js/custom.js"></script>
</body>

<!-- Mirrored from iqonicthemes.com/themes/qwilo/portfolio-single-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Dec 2018 07:01:38 GMT -->
</html>