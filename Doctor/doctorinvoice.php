<?php require "header.php"; ?> 
	<main class="app-content">
      <div class="app-title">
          <h1>Invoice</h1>
        </div>
        <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <section class="invoice">
              <div class="row mb-4">
                <div class="col-6">
                  <h2 class="page-header"><i class="fa fa-globe"></i> Majestic Yatra</h2>
                </div>
                <div class="col-6">
                  <h5 class="text-right">Date: <?= date("d-m-Y",time()) ?></h5>
                </div>
              </div>
              <?php extract($_GET);
              		$str = "select * from user_master where u_id = '$reqid'";
              		$res = mysqli_query($conn,$str);
              		$data = mysqli_fetch_array($res);
              		$str1 = "select * from doctor_master where d_id = '$did'";
              		$res1 = mysqli_query($conn,$str1);
              		$data1 = mysqli_fetch_array($res1);
               ?>
              <div class="row invoice-info">
                <div class="col-8">To
                  <address><strong><?= $data['u_name'] ?></strong><br>Phone: <?= $data['u_phone'] ?><br>Email: <?= $data['email'] ?></address>
                </div>
              </div>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Serial #</th>
                        <th>Service</th>
                        <th>Subtotal</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Basic Visit Fees</td>
                        <td><?= $data1['fees'] ?></td >
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row d-print-none mt-2">
                <div class="col-12 text-right"><a class="btn btn-primary" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Print</a></div>
              </div>
            </section>
          </div>
        </div>
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