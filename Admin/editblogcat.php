<?php require "header.php"?>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
      <section class="login-content">
       <section class="login-content">
      <div class="center-block">
        <h1>Majestic Yatra</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="editblogcatprocess.php" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-globe"></i>Edit Blog Category</h3>
          <?php 
            extract($_GET);
            $q="select * from blog_category_master where blg_cat_id = $id";
            $data = mysqli_query($conn,$q);
            $result = mysqli_fetch_array($data);
           /* $cid = $result['country_id'];
            $q1="select * from country_master where country_id = $cid";
            $data1 = mysqli_query($conn,$q1);
            $result1 = mysqli_fetch_array($data1);*/
          ?>
          <input type="hidden" name="id" value="<?php echo $result['blg_cat_id']; ?>">
          <div class="form-group">
            <label class="control-label">Blog Category</label>
            <input class="form-control" type="text" name="vehtype" placeholder="Blog Category" Value="<?php echo $result['blg_cat_name']; ?>" autofocus required>
          <?php
        if(isset($_SESSION['nameError'])){
          echo "<span style='color:red'>".$_SESSION['nameError']."</span>";
          unset($_SESSION['nameError']);
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