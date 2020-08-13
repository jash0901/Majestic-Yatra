<?php require "header.php"?>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="center-block">
        <h1>Majestic Yatra</h1>
    </div>
    <?php if ($_GET['insert']=="true"): ?>
      <script type="text/javascript">swal("","Vehicle Type Inserted","success");</script>
    <?php endif ?>
      <div class="login-box">
        <form class="login-form" action="vehicletypeaddprocess.php" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-globe"></i>Vehicle Type Entry</h3>
          <div class="form-group">
            <label class="control-label">Type Name</label>
            <input class="form-control" type="text" placeholder="Type Name" name="typname" autofocus required>
            <?php
        if(isset($_SESSION['nameError'])){
          echo "<span style='color:red'>".$_SESSION['nameError']."</span>";
          unset($_SESSION['nameError']);
        }
        ?>
          </div>
          <div class="form-group btn-container" style="margin-top: 130px;">
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