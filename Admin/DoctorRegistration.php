<?php require "header.php"?>
<!DOCTYPE html>
<html>
<head>
	<title>Mechanic Registration</title>
      <script type="text/javascript">
 function getState(val){
  /*alert("Hi"); */
    $.ajax({
      type: "POST",
      url: "get_state.php",
      data: {'cntryid' :val},
      success: function(data){
        $("#state-list").html(data);
      }
    });
  }
   function getCity(val){
      /* alert("Hi"); */
      $.ajax({
        url: "get_city.php",
        type: "POST",
        data: {'stateid': val},
        success: function(data){
          $("#city-list").html(data);
        }
      });

}  
  </script>

</head>
<body>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Mechanic-Register</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
          <?php if ($_GET['action'] == "success"): ?>

<script>swal ("", "Doctor Registered Email=<?= $_GET['email']." " ?>Password=<?= $_GET['pass'] ?>" ,  "success" )</script>  

<?php endif ?>


    <section class="login-content">
      <div class="logo">
        <br><br><br>
        <h1>Majestic Yatra</h1>
        <h6 align="right" >Where journeys come true</h6>
      </div>
      <div class="login-box" style="height: 2050px;width: 300px;">
        <form class="login-form" action="DoctorRegistrationProcess.php" method="post" enctype="multipart/form-data">
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Doctor-Register</h3>
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
                  <label class="control-label">Clinic Address</label>
                   <textarea class="form-control" name="address" placeholder="Max 75 charactered Address" style="resize: none; height: 150px;"></textarea>
          <?php
        if(isset($_SESSION['haddrerror'])){
          echo "<span style='color:red'>".$_SESSION['haddrerror']."</span>";
          unset($_SESSION['haddrerror']);
        }
        ?>
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
                  <input class="form-control" name="idproof" type="file" required>
                   <?php
        if(isset($_SESSION['idmsg'])){
          echo "<span style='color:red'>".$_SESSION['idmsg']."</span>";
          unset($_SESSION['idmsg']);
        }
        ?>
        </div>
        <div class="form-group" style="margin-bottom: 20px;">
                  <label class="control-label">Medical Practitioner License</label>
                  <input class="form-control" name="license" type="file" required>
                   <?php
        if(isset($_SESSION['lmsg'])){
          echo "<span style='color:red'>".$_SESSION['lmsg']."</span>";
          unset($_SESSION['lmsg']);
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
        if(isset($_SESSION['un'])){
          echo "<span style='color:red'>".$_SESSION['un']."</span>";
          unset($_SESSION['un']);
        }
        if(isset($_SESSION['username'])){
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
            <button class="btn btn-primary btn-block" name="btn"><i class="fa fa-sign-in fa-lg fa-fw"></i>Register as Doctor</button>
          <?php
        if(isset($_SESSION['dd'])){
          echo "<span style='color:red;'>".$_SESSION['dd']."</span>";
          unset($_SESSION['dd']);
        }
        ?>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/plugins/sweetalert.min.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- <script type="text/javascript">
    $( "#dte" ).datepicker({
    dateFormat: "yyyy-mm-dd";
});
     </script> -->
  </body>
</html>
</body>
</html>