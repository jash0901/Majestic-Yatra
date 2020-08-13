<?php require "header.php"; ?>
<?php 
$id = $_SESSION['id'];
$str = "select * from doctor_master where u_id = $id";
$res = mysqli_query($conn,$str);
$data = mysqli_fetch_array($res); 
$did = $data['d_id'];?>
<?php if ($data['allocated'] == 0): ?>
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-laptop"></i> Service</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="tile">
            <h3 class="tile-title">Oops! You aren't assigned to any Trips</h3>
            <div class="tile-body">Hey there, Please check your requests panel to see if any user has requested for your presence.</div>
            <div class="tile-footer"><a class="btn btn-primary" href="requests.php">Check Requests</a></div>
          </div>
        </div>
    </main>
<?php else: ?>
	<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-laptop"></i> Service</h1>
          <p>View User Details and End Allocation</p>
        </div>
      </div>
      <?php $str1 = "select * from doctor_allocation_master where d_id = $did";
            	$res1 = mysqli_query($conn,$str1);
            	$data1 = mysqli_fetch_array($res1);
            	$alluid = $data1['u_id'];
              $allid = $data1['d_a_id'];
            	$alltrid = $data1['tr_id'];
            	$str2 = "select * from user_master where u_id = $alluid";
            	$res2 = mysqli_query($conn,$str2);
            	$data2 = mysqli_fetch_array($res2);
            	$str3 = "select * from trip_master where tr_id = $alltrid";
            	$res3 = mysqli_query($conn,$str3);
            	$data3 = mysqli_fetch_array($res3); ?>
      <section>
      <div class="row">
        <div class="col-lg-12">
          <div class="tile">
            <h3 class="tile-title">User Information</h3>
            <div class="tile-body"><table class="table table-hover">
            <tr>
            	<td><b>Name: <?= $data2['u_name'] ?></b></td>
              </tr>
              <tr>
              <td><b>Address to Meet: <?= $data1['address'] ?></b></td>
              </tr>
             <tr>
              <td> <b>Requester Contact: <?= $data2['u_phone'] ?></b></td>
              </tr>
              <tr>
              <td><b> Requester Email: <?= $data2['email'] ?></b></td>
              </tr>
            </table>
            
            </div>
<div class="row d-print-none mt-2">
                 <div class="col-12 text-right"><a class="btn btn-primary" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Print User Information</a> <a class="btn btn-primary" href="doctorinvoice.php?reqid=<?= $alluid ?>&did=<?= $did ?>" target="_blank"><i class="fa fa-file-text-o"></i> View Invoice</a> <a class="btn btn-primary" href="serviceend.php?allid=<?= $allid ?>" target="_blank"><i class="fa fa-stop-circle-o" onclick="return confirm('Are you sure you want to end your service?')"></i> End Service</a></div>
              </div>
          </div>
        </div>

      </section>

           
    </main>
<?php endif ?>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>