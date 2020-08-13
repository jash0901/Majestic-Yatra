<?php 
session_start();
include_once "lib/connection.php";
require "lib/model.php";
require "lib/validation.php";
?>
<!doctype html>
<html lang="en">

<!-- Mirrored from iqonicthemes.com/themes/qwilo/register-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Dec 2018 07:01:27 GMT -->
<head>
<title>Traveler-Register</title>
      <script type="text/javascript">
 function getState(val){
  /*alert("Hi"); */
    $.ajax({
      type: "POST",
      url: "Admin/get_state.php",
      data: {'cntryid' :val},
      success: function(data){
        $("#state-list").html(data);
      }
    });
  }
   function getCity(val){
      /* alert("Hi"); */
      $.ajax({
        url: "Admin/get_city.php",
        type: "POST",
        data: {'stateid': val},
        success: function(data){
          $("#city-list").html(data);
        }
      });

}  
  </script>
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
</head>
<body>

<!-- <div id="loading">
<div id="loading-center">
<img src="images/loader.png" alt="loder">
</div>
</div>
 -->
<?php extract($_GET);
if ($type == "") {
 	header("location:index.php");
 	exit();
 } ?>
<div class="main-content thank-you">
<section class="thank-you-1 overview-block-ptb text-center vertical-align">
<div class="container">
<div class="row">
<div class="col-sm-12">
<i class="fa fa-smile-o" aria-hidden="true"></i>
<div class="big-text iq-tw-7 iq-mt-60 iq-font-black">Congratulations!</div>
<h5 class="iq-tw-5 iq-mb-10 iq-mt-40">You are registered as a <?= $type ?></h5>
<p>LOGIN NOW!!</p>
<div class="iq-mt-30">
<a class="button" href="login.php" role="button">Login Now</a>
<a class="button" href="index.php" role="button">Back to home</a>
</div>
</div>
</div>
</div>
</section>
</div>