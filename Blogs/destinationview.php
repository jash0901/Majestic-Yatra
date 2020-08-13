<?php 
	require "header.php";
	require "../lib/connection.php";
 ?>
       <script type="text/javascript">
 function getState(val){
  /*alert("Hi"); */
    $.ajax({
      type: "POST",
      url: "../Admin/get_state.php",
      data: {'cntryid' :val},
      success: function(data){
        $("#state-list").html(data);
      }
    });
  }
   function getCity(val){
      /* alert("Hi"); */
      $.ajax({
        url: "../Admin/get_city.php",
        type: "POST",
        data: {'stateid': val},
        success: function(data){
          $("#city-list").html(data);
        }
      });

}  
  </script>
 <?php
 extract($_POST); 
 if (isset($_GET['btn'])) {
 	$source = "where country_id = $cntryid or state_id = $stateid or city_id = $cityid";
 }else{ $source="";}
$rowsPerPage = 5;
if(isset($_GET['page']))
{
$pageNum= $_GET['page'];
}else{$pageNum= 1;} 
$previousRows = ($pageNum - 1) * $rowsPerPage;
$str1 = "select * from destination_info_master $source limit $previousRows, $rowsPerPage";
$result1 = mysqli_query($conn,$str1);
?>
 <section class="overview-block-ptb text-left iq-font-white" style="background-color:black;
 background-position: center center; background-repeat: no-repeat; background-size: cover;">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-8">
<div class="iq-mb-0">
<h2 class="iq-font-white iq-tw-6" style="margin-top: 50px;">Explore Destinations <?php echo mysqli_error($conn); ?></h2>
</div>
</div>
</div>
</div>
</section>
<div class="col-lg-8 col-md-12 iq-mtb-20" >
<div class="row">
<div class="col-lg-12 col-sm-12">

<?php

	while ($data = mysqli_fetch_array($result1)) {