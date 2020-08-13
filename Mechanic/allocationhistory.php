<?php require "header.php"; ?> 
<main class="app-content">
  <div class="app-title">
    <h1>Allocation History</h1>
  </div>
  <div class="row">
    <?php
    $uid = $_SESSION['id'];
    $str = "select m_id from mechanic_master where u_id = $uid";
    $res = mysqli_query($conn,$str);
    $data = mysqli_fetch_array($res);
    $mid = $data['m_id'];
     $str = "select * from mechanic_history_master where m_id=$mid";
     $res1 = mysqli_query($conn,$str);$i = 1;
    echo mysqli_error($conn);
     if (mysqli_num_rows($res1) == 0) {
        echo "    <div class='col-md-12'>
      <div class='tile'><b>No data Available</b></div>  
    </div>";     
     }
     else {
     while ($data1 = mysqli_fetch_array($res1)) {
?>
    <div class="col-md-6">
      <div class="tile">
        <div class="tile-body"><h3 class="tile-title"><?= $i?></h3>
<b>
          User: 
          <?php 
            $q = "select u_name,email from user_master where u_id = $data1[u_id]";
            $resq = mysqli_query($conn,$q);
            $dataq = mysqli_fetch_array($resq);
                        $trid = $data1['tr_id'];
           ?> <?= $dataq['u_name'] ?><br/>
          Service Date: <?= $data1['service_date'] ?><br>
          End Date: <?= $data1['return_date'] ?> <br>
          Address: <?= $data1['address'] ?><br>
          Requester Email:<?= $dataq['email'] ?>
          <?php if ($trid != 0): ?>
            <?php 

           $str2 = "select * from trip_master where tr_id = $trid";
           $res2 = mysqli_query($conn,$str2);
           $data2 = mysqli_fetch_array($res2); ?><br>Trip Name: <?= $data2['tr_title'] ?>
           <?php else: ?>
            <br>Trip Name: Trip Not Specified
          <?php endif ?>
        </b>
      </div>  
    </div>
  </div><?php $i++; }    
     }?>
</div>
</main>
  <!-- Essential javascripts for application to work-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/plugins/sweetalert.min.js"></script>
<script src="js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="js/plugins/pace.min.js"></script>