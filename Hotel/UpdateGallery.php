<?php require "header.php"; ?>
<section class="overview-block-ptb text-left iq-font-white" style="background-color:black;
 background-position: center center; background-repeat: no-repeat; background-size: cover;">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-8">
<div class="iq-mb-0">
<h2 class="iq-font-white iq-tw-6" style="margin-top: 50px;">Gallery</h2>
</div>
</div>
</div>
</div>
</section>
<br><br><br>
<div class="row justify-content-md-center">
<div class="col-md-8">
<div class="iq-login iq-pt-40 iq-pb-30 iq-plr-30">
<form action="UpdateGalleryProcess.php" method="POST" enctype="multipart/form-data">
<div class="form-group iq-mt-20">
<label class="iq-font-white" style="font-size: 20px;" for="password">Photos</label>
<input type="file" class="form-control" name="profilepic[]" placeholder="Select one or mutiple images" required multiple>
<?php
        if(isset($_SESSION['fmsg'])){
        	echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
'.
$_SESSION['fmsg']
.'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true"></span>
</button></div>';
          unset($_SESSION['fmsg']);
        }
?>
</div>
<button type="submit" class="button iq-mt-40" name="submit">Submit</button>
</form>
</div>
</div>
</div>	