<?php 
session_start();
include_once "lib/connection.php";
require "lib/model.php";
require "lib/validation.php";
?>
<?php
 $uid = $_SESSION['id'];
 $str = "select * from user_master where u_id = $uid";
 $res = mysqli_query($conn,$str);
 $data = mysqli_fetch_array($res); ?>
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

<div id="loading">
<div id="loading-center">
<img src="images/loader.png" alt="loder">
</div>
</div>


<div class="main-content">

<section class="iq-log-regi">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12">
<div class="heading-title text-center">
<h2 class="title iq-tw-6 iq-font-black">Profile Update</h2>
</div>
</div>
</div>
<div class="row justify-content-md-center">
<div class="col-md-8">
<div class="iq-login iq-brd iq-pt-40 iq-pb-30 iq-plr-30">
<form class="login-form" action="travelerregistrationprocess.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label class="control-label">Email</label>
             <input class="form-control" type="email" name="email" placeholder="Email" required>
              <?php
        if(isset($_SESSION['emailerror'])){
          echo "<span style='color:red'>".$_SESSION['emailerror']."</span>";
          unset($_SESSION['emailerror']);
        }
        ?>
          </div>
           <div class="form-group">
            <label class="control-label">Phone</label>
           <input class="form-control" type="Text" name="u_phone" placeholder="10 Digit Phone No." pattern="^\d{10}$" required>
            <?php
        if(isset($_SESSION['pherror'])){
          echo "<span style='color:red'>".$_SESSION['pherror']."</span>";
          unset($_SESSION['pherror']);
        }
        ?>
          </div>
          <div class="form-group">
            <label class="control-label">Language</label>
            <select class="form-control" name="language">
            <option value="-1">Select First Language</option>
          <?php   
          $i=0;
          $str="select * from language_master";
          $data=mysqli_query($conn,$str);
          while ($result = mysqli_fetch_array($data)) { $i++; ?>
            <option value="<?php echo $result['lang_name']; ?>"><?php echo $result['lang_name']; ?></option>
          <?php } ?>
          </select>
          </div>
             <div class="form-group"> 
            <label class="control-label">Username</label>
            <input class="form-control" type="Text" name="username" placeholder="Username" required>
        <?php
        if(isset($_SESSION['un'])){
          echo "<span style='color:red'>".$_SESSION['un']."</span>";
          unset($_SESSION['un']);
        }
          if(isset($_SESSION['username'])){
          echo "<span style='color:red'>".$_SESSION['username']."</span>";
          unset($_SESSION['username']);
        }
        ?>
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <input class="form-control" type="Password" name="password" placeholder="Password" required>
          </div>
          <div class="form-group">
            <label class="control-label">Confirm Password</label>
            <input class="form-control" type="Password" name=" cpassword" placeholder="Confirm Password" required>
        <?php
        if(isset($_SESSION['passmatch'])){
          echo "<span style='color:red'>".$_SESSION['passmatch']."</span>";
          unset($_SESSION['passmatch']);
        }
        ?>
          </div>
          <div class="form-group btn-container">
          <button class="btn btn-primary btn-block" name="btn"><i class="fa fa-sign-in fa-lg fa-fw"></i>Update Profile</button>
            <?php
            if(isset($_SESSION['dd'])){
              echo "<span style='color:red;'>".$_SESSION['dd']."</span>";
              unset($_SESSION['dd']);
            }
            ?>
          </div>
        </form>
<div class="row iq-mtb-30">
<div class="col-sm-6">
<!-- <ul class="iq-media iq-mtb-10">
<li><a href="#" class="fb"><i class="fa fa-facebook"></i></a></li>
<li><a href="#" class="tw"><i class="fa fa-twitter"></i></a></li>
<li><a href="#" class="gplus"><i class="fa fa-google"></i></a></li>
<li><a href="#" class="lkd"><i class="fa fa-linkedin"></i></a></li>
</ul> -->
</div>
<div class="col-sm-6">
<div class="text-right iq-mtb-10">
<div class="iq-font-black iq-tw-6">Already Have an Account?</div><a href="Login.php" class="iq-font-green iq-tw-6 link">Login</a>
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

<!-- Mirrored from iqonicthemes.com/themes/qwilo/register-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Dec 2018 07:01:27 GMT -->
</html>