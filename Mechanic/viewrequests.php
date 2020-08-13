  <?php require "header.php"; ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-info-circle"></i> Pending Requests</h1>
        </div>

      </div>
      <div class="row">
        <?php 
        $uid = $_SESSION['id'];
        $str = "select m_id,allocated from mechanic_master where u_id = $uid";
        $res = mysqli_query($conn,$str);
        $data = mysqli_fetch_array($res);
        if ($data['allocated'] == "1") {?>
          <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">You are already allocated. End Your Service to view other requests</h3>

            <div class="tile-footer"><a class="btn btn-primary" href="service.php">View Current Service</a></div>

          </div>
        </div>
        <?php            exit (); }
        $mid = $data['m_id'];
        $str1 = mysqli_query($conn,"select * from mechanic_request_master where m_id = '$mid' and req_date > sysdate() and approved = 'A'");
        echo mysqli_error($conn);
      if (mysqli_num_rows($str1)>=1) {
       while ($data1 = mysqli_fetch_array($str1)) {
        $uid1 = $data1['u_id'];
        $str2 = "select u_name,gender,email,u_phone from user_master where u_id = $uid1";
        $res2 = mysqli_query($conn,$str2);
        $data2 = mysqli_fetch_array($res2);
         ?>

          <div class="col-md-6">  
          <div class="tile">
            <h3 class="tile-title">Requester: <?= $data2['u_name'] ?></h3>
            <div class="tile-body">Request Date: <?= $data1['req_date'] ?><br>
              Address to Meet: <?= $data1['address'] ?><br>
              User Phone: <?= $data2['u_phone'] ?><br>
              Gender: <?= $data2['gender'] ?></div>
            <div class="tile-footer" style=""><a class="btn btn-primary" href="reqaccept.php?reqid=<?= $data1['m_req_id'] ?>">Accept Request</a></div>
          </div>
        </div>
      <?php 
    }
      
    } else{?>
  
          <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Oops No Current requests available</h3>
            <div class="tile-body">Please await till someone requests for your service. Thanks!!</div>
          </div>
        </div>
      <?php } ?>
</div>
        <div class="clearfix"></div>
    </main>
        <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>