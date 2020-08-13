<?php 
extract($_GET);
if (!isset($id)) {
		 	header("location:tripexplore.php");
}
require "header.php";
require "../lib/connection.php";
$uid2 = $_SESSION['id'];
$v = new validation();?>
<section class="overview-block-ptb text-left iq-font-white" style="background-color: black;
background-position: center center; background-repeat: no-repeat; background-size: cover;">
<div class="container">
	<div class="row align-items-center">
		<div class="col-lg-8">
			<div class="iq-mb-0">
				<h2 class="iq-font-white iq-tw-6" style="margin-top: 50px;">Trip View</h2>
			</div>
		</div>
	</div>
</div>
</section>
<div class="container" style="height: 100%;width: 100%;margin-top: 50px;">
	<?php if ($_GET['action'] == "success"): ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
<strong>Congratulations!</strong> Trip Created	
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<?php endif ?>
<?php 
if (isset($id)) {
	$str = "select * from trip_master where tr_id = $id";
	$result = mysqli_query($conn,$str);
	while ($data = mysqli_fetch_array($result)) {
		$uid = $data['u_id'];
		$str1 = "select * from user_master where u_id = $uid";
		$result1 = mysqli_query($conn,$str1);
		$data1 = mysqli_fetch_array($result1);
		$source = explode(',',$data['tr_source']);
		$cnid = $source[0];
		if (isset($source[1])) {
			$sid = $source[1];
		}else {$sid = -1;}
		if (isset($source[2])) {
			$cid = $source[2];
		}else {$cid = -1;}
		$str2 = "SELECT country_name FROM country_master where country_id = '$cnid' UNION SELECT state_name FROM state_master WHERE state_id = '$sid' UNION SELECT city_name FROM city_master WHERE city_id = '$cid'";
		$result2 = mysqli_query($conn,$str2);$i = 0;
		while ($data2 = mysqli_fetch_array($result2)) {
		    $arr[$i] = $data2[0];$i++;
		}
		$arr = array_reverse($arr);
		$source = implode(', ', $arr);
		$source1 = explode(',',$data['tr_dest']);
		$cnid1 = $source1[0];
		if (isset($source1[1])) {
			$sid1 = $source1[1];
		}else {$sid1 = -1;}
		if (isset($source1[2])) {
			$cid1 = $source1[2];
		}else {$cid1 = -1;}
		$str2 = "SELECT country_name FROM country_master where country_id = '$cnid1' UNION SELECT state_name FROM state_master WHERE state_id = '$sid1' UNION SELECT city_name FROM city_master WHERE city_id = '$cid1'";
		$result2 = mysqli_query($conn,$str2);$j = 0;
		while ($data2 = mysqli_fetch_array($result2)) {
		    $arr2[$j] = $data2[0];$j++;
		}
		$arr2 = array_reverse($arr2);
		$source1 = implode(', ', $arr2);
		$id1 = $data['tr_type_id'];
		$str3 = "select * from trip_type_master where tr_type_id = $id1";
		$result3 = mysqli_query($conn,$str3);
		$data3 = mysqli_fetch_array($result3);
	?>
	<div class="row" style="margin-left: 25px; ">
		<div class="col-md-12" >
			<div class="tile">
				<div class="tile-body"> 
					<label><h2><?= $data['tr_title'] ?></h2></label>            
					<table class="table">
						<tr>
							<td colspan="12" style="border-bottom:0px;width: 50%; text-align: center;"> <img  class="rounded-circle" src="../profilepics/<?= $data1['u_pic'] ?>" height=160 width=160></td>
						</tr>
						<tr>
							<td style="border-top: 0px;"><center><b>Creator: <?= $data1['u_name'] ?></b></center></td>
						</tr>
						<br>
						<tr>
							<td colspan="2" style="overflow: auto;"><b>Description: <?= $data['tr_desc'] ?></b></td>
						</tr>
						<tr>
							<td><b>First Visit: <?= $data['first_visit'] ?></b></td>
						</tr>
						<tr>
							<td><b>Room Share: <?= $data['acmd'] ?></b></td>
						</tr>
						<tr>
							<td><b>Source: <?= $source ?></b></td>
						</tr>
						<tr>
							<td><b>Destination: <?= $source1 ?></b></td>
						</tr>
						<tr>
							<td><b>Preferred Gender: <?= $data['pre_gen'] ?></b></td>
						</tr>
						<tr>
							<td><b>Trip Type: <?= $data3['tr_type'] ?></b></td>
						</tr>
						<?php if ($data['cont_share']=="Y" or $v->travjoincheck($uid2,$id) == true): ?>
						<tr>
							<td><b>Creator Contact:<br> Phone: <?= $data1['u_phone']; ?> Email: <?= $data1['email']; ?></b></td>
						</tr>							
						<?php endif ?>
						<tr>
							<td><b>Trip Start Date: <?= $data['tr_from'] ?></b></td>
						</tr>
						<td><b>Trip Start Date: <?= $data['tr_to'] ?></b></td>
					</tr>
				</table>   
				<?php if ($v->travjoincheck($uid2,$id) == false and $uid2 != $uid): ?>
					<form action="tripjoin.php?id=<?= $id ?>" method="post">
				<button class="button" style="width: 100%; height: 45px; margin-bottom: 50px;"><strong>JOIN TRIP</strong></button>		
			</form>
			<?php else: ?>
				<div class="row">
<div class="col-lg-12 col-sm-12 iq-font-black iq-mtb-30">
<h3 class="small-title iq-tw-6 iq-mb-30 ">Total Travellers Joined</h3>
<table class="table table-hover">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Name</th>
<th scope="col">Gender</th>
<th scope="col">Phone</th>
<th scope="col">Email</th>
<th scope="col">Birth Date</th>
<?php if ($uid2 == $uid): ?>
<th scope="col">Action</th>
<?php endif ?>
</tr>
</thead>
<tbody>
	<?php 
	$i =1;
		$str4 = "select * from trip_allocation_master where tr_id = $id";
		$result4 = mysqli_query($conn,$str4);
		if (mysqli_num_rows($result4) == 0) {
			echo "<tr><td colspan=7><b><center>Oops No Travelers Joined :(</center></b></td></tr>";
		}
		else {
		while ($data4 = mysqli_fetch_array($result4)) {
		    $uid1 = $data4['u_id'];
		    $str1 = "select * from user_master where u_id = $uid1";
			$result1 = mysqli_query($conn,$str1);
			$data1 = mysqli_fetch_array($result1);
 ?>
<tr>
<th scope="row"><?= $i ?></th>
<td><?= $data1['u_name'] ?></td>
<td><?= $data1['gender'] ?></td>
<td><?= $data1['u_phone'] ?></td>
<td><?= $data1['email'] ?></td>
<td><?= $data1['birth_date'] ?></td>
<?php if ($uid2 == $uid): ?>
<td><a href="removetraveller?id=<?= $uid1 ?>" class="btn-danger">Remove Traveler</a></td>
<?php endif ?>
</tr>
<?php $i++;}
} ?>
</tbody>
</table>
</div>
</div>
				<?php endif ?>
			<?php }

		}
		 ?>
	</div>
</div>

</div>
</div>
</div>