<?php session_start();   ?>
<!doctype html>
<html lang="en">

<!-- Mirrored from iqonicthemes.com/themes/qwilo/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Dec 2018 07:01:26 GMT -->
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

<link href="css/responsive.css" rel="stylesheet" type="text/css" />

<link href="css/custom.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="#" data-style="styles">
<link rel="stylesheet" href="css/style-customizer.css" />

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120846200-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120846200-1');
</script>
</head>
<body>

<div id="loading">
<div id="loading-center">
<img src="images/loader.png" alt="loder">
</div>
</div>


<div class="main-content">

<section class="iq-over-black-50 iq-bg iq-log-regi" style="background-image: url('images/bg/45.jpg'); background-position: left center; background-attachment: fixed;">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12">
<div class="heading-title text-center">
<h2 class="title iq-tw-6 iq-font-white">Login</h2>
</div>
</div>
</div>
<div class="row justify-content-md-center">
<div class="col-md-8">
<div class="iq-login iq-pt-40 iq-pb-30 iq-plr-30">
<form action="loginprocess.php" method="POST">
<div class="form-group">
<label class="iq-font-white" for="username">Username or Email Address</label>
<input type="text" class="form-control" name="username" placeholder="Email">
</div>
<div class="form-group iq-mt-20">
<label class="iq-font-white" for="password">Password</label>
<input type="password" class="form-control" name="password" placeholder="Password">
<?php
        if(isset($_SESSION['loginerror'])){
          echo "<span style='color:red bold;'>".$_SESSION['loginerror']."</span>";
          unset($_SESSION['loginerror']);
        }
?>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-check iq-pl-0">
<input type="checkbox" class="form-check-input" id="exampleCheck1">
<label class="form-check-label iq-font-white iq-tw-6" for="exampleCheck1">Check me out</label>
</div>
</div>
<div class="col-sm-6">
<div class="text-right">
<a href="#" class="iq-font-white iq-tw-6 link">Forgot Password</a>
</div>
</div>
</div>
<button type="submit" class="button iq-mt-40" name="submit">Submit</button>
</form>
<div class="row iq-mt-30">
<div class="col-sm-6">
<ul class="iq-media iq-mtb-10">
<li><a href="#" class="fb"><i class="fa fa-facebook"></i></a></li>
<li><a href="#" class="tw"><i class="fa fa-twitter"></i></a></li>
<li><a href="#" class="gplus"><i class="fa fa-google"></i></a></li>
<li><a href="#" class="lkd"><i class="fa fa-linkedin"></i></a></li>
</ul>
</div>
<div class="col-sm-6">
<div class="text-right iq-mtb-10">
<div class="iq-font-white iq-tw-6">Don't Have an Account?</div><a href="#" class="iq-font-green iq-tw-6 link">Register Now</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

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

<!-- Mirrored from iqonicthemes.com/themes/qwilo/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Dec 2018 07:01:27 GMT -->
</html>