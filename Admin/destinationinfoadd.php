<?php require "header.php" ?>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="center-block">
       <h1 style="margin-top: 55px;">Majestic Yatra</h1>
    </div>
      <div class="login-box" style="height: 900px;">
        <form class="login-form" action="desinfoaddprocess.php" method="post" enctype="multipart/form-data">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-globe"></i>Destination Information Entry</h3>
          <div class="form-group">
            <label class="control-label">Destination Name</label>
            <input type="text"  class="form-control" placeholder="Enter title" required maxlength="100" name="title" style="margin-bottom: 10px;">
            <?php
        if(isset($_SESSION['nameError'])){
          echo "<span style='color:red'>".$_SESSION['nameError']."</span>";
          unset($_SESSION['nameError']);
        }
        ?>
          </div>
          <div class="form-group">
                  <label class="control-label">Destination Information</label>
                  <textarea class="form-control" rows="4" required placeholder="Enter Destination Information" name="dinfo" style="resize: none;"> </textarea>
          </div>
          <div class="form-group">
                  <label class="control-label">Address</label>
                  <textarea class="form-control" rows="4" name="dadd" required placeholder="Enter your address" style="resize: none;"></textarea>
          </div>
<div class="form-group">
                    <label for="pfp">Destination Pictures</label>
                    <input class="form-control" name="profilepic" required type="file" multiple>
                     <?php
        if(isset($_SESSION['fmsg'])){
          echo "<span style='color:red'>".$_SESSION['fmsg']."</span>";
          unset($_SESSION['fmsg']);
        }
        ?>
         </div>
          <div class="form-group">
          <label for="cntry_id">Select Country</label>
          <select class="form-control" required name="cntryid" onchange="getState(this.value);">
          <option value="">Select Country</option>
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
          <select class="form-control" required id="state-list" name="stateid" onchange="getCity(this.value);">
            <option value="">Select State</option>
          </select>
         </div>
         <div class="form-group">
          <label for="cntry_id">Select City</label>
            <select class="form-control" required id="city-list" name="cityid">
            <option value="">Select City</option>
          </select>
         </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" name="btn"><i class="fa fa-sign-in fa-lg fa-database"></i>Enter</button>
          </div>
        </form>
      </div>
    </section>
   <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/plugins/sweetalert.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
  </body>
</html>