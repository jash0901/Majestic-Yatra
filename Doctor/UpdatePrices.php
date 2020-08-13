<?php require "header.php";  ?>
<section class="material-half-bg">
  <div class="cover"></div>
</section>
<section class="login-content">
  <div class="center-block">
    <h1>Majestic Yatra</h1>
  </div>
  <div class="login-box" style="height: 450px;">
    <form class="login-form" action="priceupdateprocess.php" method="post">
      <h3 class="login-head">Price Update</h3>

        <style type="text/css">input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}</style>
         <div class="form-group">
        <label class="control-label">Price</label>
        <input class="form-control" name="fee" type="number" placeholder="xxxxx" required min="500" max="20000">
         <?php
        if(isset($_SESSION['nameError'])){
          echo "<span style='color:green'>".$_SESSION['nameError']."</span>";
          unset($_SESSION['nameError']);
        }
        ?>
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