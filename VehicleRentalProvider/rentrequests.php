<?php require "header.php";
$id = $_SESSION['id'];
$str1 = "select v_r_id from vehicle_rental_provider_master where u_id = $id";
$res1 = mysqli_query($conn,$str1);
$data1 = mysqli_fetch_array($res1);
$vid = $data1['v_r_id'];
$str = "select * from vehicle_master where v_r_id = $vid ";
$res = mysqli_query($conn,$str); ?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-laptop"></i> Vehicles</h1>
    </div>
  </div>
  <div class="row">
    <?php while ($data = mysqli_fetch_array($res)) { ?>
      <div class="col-md-6">
        <div class="tile">
          <h3 class="tile-title"><a href="../vehicleimages/<?= $data['v_pic'] ?>" target="_blank"><img src="../vehicleimages/<?= $data['v_pic'] ?>" class="img-thumbnail center-block" style ="height: 50px;width: 50px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;<?= $data['v_name'] ?></h3>
          <div class="tile-body" style="font-size: 16px;"><?= $data['v_desc'] ?></div>
          <div class="tile-footer">
            <?php 
                $br = $data['v_brand_id'];$ty = $data['v_type_id'];
                $str2 = "select v_brand_name from vehicle_brand_master where v_brand_id = $br";
                      $res2 = mysqli_query($conn,$str2);
                      $data2 = mysqli_fetch_array($res2);
                      $str3 = "select v_type_name from vehicle_type_master where v_type_id = $ty";
                      $res3 = mysqli_query($conn,$str3);
                      $data3 = mysqli_fetch_array($res3);
                 ?>
                <strong style="font-size: 16px;">Type:<?= $data3['v_type_name'] ?> | Brand:<?= $data2['v_brand_name'] ?> | Fees:<?= $data['fees'] ?> | Allocated: <?php echo $data['allocated']=="0"?'NO':'YES'; ?></strong>
                <a style="margin-left: 30%;" class="btn btn-primary" href="vehicleremove.php?id=<?= $data['v_id'] ?>">Remove Vehicle</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>   

</main>

