<?php require "header.php"?>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <?php if ($_GET['insert'] == "true"): ?>
<script>swal ("", "State Inserted" ,  "success" )</script>  
<?php endif ?>
      <section class="login-content">
       <section class="login-content">
      <div class="center-block">
        <h1>Majestic Yatra</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="stateentryprocess.php" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-globe"></i>State Entry</h3>
          <div class="form-group">
            <label class="control-label">State Name</label>
            <input class="form-control" type="text" placeholder="State" name="state" autofocus required>
        <?php
        if(isset($_SESSION['nameError'])){
          echo "<span style='color:red'>".$_SESSION['nameError']."</span>";
          unset($_SESSION['nameError']);
        }
        ?>
          </div>
           <div class="form-group">
            <label for="cntry_id">Select Country</label>
            <?php  $q2="select * from country_master";
            $data2 = mysqli_query($conn,$q2);
             ?>
                         <select class="form-control" name="cntry_id">
                          <option value="-1">Select Country</option>
                      <?php while ($result2 = mysqli_fetch_array($data2)) {
                      ?>                               
                      <option value=<?= $result2['country_id']; ?>><?php echo $result2['country_name'];?></option>
                      <?php } ?>  
                    </select>
        <?php
        if(isset($_SESSION['ddError'])){
          echo "<span style='color:red'>".$_SESSION['ddError']."</span>";
          unset($_SESSION['ddError']);
        }
        ?>

         </div>
          <div class="form-group btn-container">
            <button name="btn" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-database"></i>Enter</button>
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
    </script>
  </body>
</html>