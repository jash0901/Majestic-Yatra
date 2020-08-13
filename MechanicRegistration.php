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
<title>Mechanic-Register</title>
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
<h2 class="title iq-tw-6 iq-font-black">Mechanic-Register</h2>
</div>
</div>
</div>
<div class="row justify-content-md-center">
<div class="col-md-8">
<div class="iq-login iq-brd iq-pt-40 iq-pb-30 iq-plr-30">
<form class="login-form" action="mregprocess.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label class="control-label">Name</label>
           <input class="form-control" type="text" name="name" placeholder="Enter Name" autofocus required>
       <?php
        if(isset($_SESSION['Name'])){
          echo "<span style='color:red'>".$_SESSION['Name']."</span>";
          unset($_SESSION['Name']);
        }
        ?>
          </div>
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
            <label class="control-label">Gender</label><br>
            <input type="radio" name="gender" value="Male" checked="True" style="position: absolute; width: 50px; height: 30px;"><label style="margin-left: 50px;margin-right: 10px;">Male</label>
            <input type="radio" name="gender" value="Female" checked="True"  style="position: absolute; width: 50px; height: 30px;"><label style="margin-left:50px;margin-right: 30px;">Female</label>
          </div>
          <div class="form-group">
                  <label class="control-label">Garage Address</label>
      <textarea class="form-control" rows="4" name="address" placeholder="Max 75 charactered Address" style="resize: none;"></textarea>
          <?php
        if(isset($_SESSION['haddrerror'])){
          echo "<span style='color:red'>".$_SESSION['haddrerror']."</span>";
          unset($_SESSION['haddrerror']);
        }
        ?>
          </div>  
        <style type="text/css">input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
          -webkit-appearance: none; 
          margin: 0; 
        }</style>
         <div class="form-group">
          <label for="cntry_id">Enter Basic Fees</label>
          <input type="number" name="fees" class="form-control" placeholder="Basic Fees" required max="20000" min="500">
        </div>
          <div class="form-group">
          <label for="cntry_id">Select Country</label>
          <select class="form-control" name="cntryid" onchange="getState(this.value);">
          <option value="-1">Select Country</option>
          <?php   
          $i=0;
          $str="select * from country_master";
          $data=mysqli_query($conn,$str);
          while ($result = mysqli_fetch_array($data)) { $i++; ?>
            <option value="<?php echo $result['country_id']; ?>"><?php echo $result['country_name']; ?></option>
          <?php } ?>
          </select>
         </div>
          <div class="form-group">
          <label for="cntry_id">Select State</label>
          <select class="form-control" id="state-list" name="stateid" onchange="getCity(this.value);">
            <option value="-1">Select State</option>
          </select>
         </div>
         <div class="form-group">
          <label for="cntry_id">Select City</label>
            <select class="form-control" id="city-list" name="cityid">
            <option value="-1">Select City</option>
          </select>
         </div>
          <div class="form-group">
                    <label for="pfp">Profile Picture</label>
                    <input class="form-control" name="profilepic" required type="file">
                     <?php
        if(isset($_SESSION['fmsg'])){
          echo "<span style='color:red'>".$_SESSION['fmsg']."</span>";
          unset($_SESSION['fmsg']);
        }
        ?>
         </div>
          <div class="form-group" style="margin-bottom: 20px;">
                  <label class="control-label">Identity Proof</label>
                  <input class="form-control" name="idproof" type="file">
                   <?php
        if(isset($_SESSION['idmsg'])){
          echo "<span style='color:red'>".$_SESSION['idmsg']."</span>";
          unset($_SESSION['idmsg']);
        }
        ?>
        </div>
         <div class="form-group">
                    <label for="pfp">BirthDate</label>
                    <input class="form-control" name="dte" type="date" required style="margin-bottom: 10px;">
        
         <?php
        if(isset($_SESSION['dteerror'])){
          echo "<span style='color:red'>".$_SESSION['dteerror']."</span>";
          unset($_SESSION['dteerror']);
        }
        ?></div>
             <div class="form-group">
            <label class="control-label">Username</label>
           <input class="form-control" type="Text" name="username" placeholder="Username" required>
        <?php
        if(isset($_SESSION['username'])){
          echo "<span style='color:red'>".$_SESSION['username']."</span>";
          unset($_SESSION['username']);
        }
        if(isset($_SESSION['un'])){
          echo "<span style='color:red'>".$_SESSION['un']."</span>";
          unset($_SESSION['un']);
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
            <button class="btn btn-primary btn-block" name="btn"><i class="fa fa-sign-in fa-lg fa-fw"></i>Register as Mechanic</button>
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

</div>
<div class="col-sm-6">
<div class="text-right iq-mtb-10">
<div class="iq-font-black iq-tw-6">Already Have an Account?</div><a href="#" class="iq-font-green iq-tw-6 link">Login</a>
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