<?php 
		 session_start(); 
require "../lib/doctorloginvalidation.php";  ?>
<?php
  require "header.php";
if ($_GET['result'] == "success" and $_GET['type'] == "serviceend") {
 ?>
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-laptop"></i> Service</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="tile">
            <h3 class="tile-title">Congratulations, Service Ended</h3>
            <div class="tile-footer"><a class="btn btn-primary" href="index.php">Back to index</a></div>
          </div>
        </div>
    </main>
<?php } ?>