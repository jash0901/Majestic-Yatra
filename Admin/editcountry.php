<?php require "header.php"?>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="center-block">
        <h1>Majestic Yatra</h1>
    </div>
      <div class="login-box">
        <form class="login-form" action="editcountryprocess.php" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-globe"></i>Country Edit</h3>
          <div class="form-group">
             <?php 
            extract($_GET);
            $q="select * from country_master where country_id = $id";
            $data = mysqli_query($conn,$q);
            $result = mysqli_fetch_array($data);
            ?>
            <input type="hidden" name="id" value="<?= $result['country_id']; ?>">
            <label class="control-label">Country Name</label>
            <input class="form-control" type="text" Placeholder="Country Name" Value="<?php echo $result['country_name'] ?>" name="cntryname" autofocus required>
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