<?php 
	require "header.php";

 ?>
 <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=0a4ri6ba5nkstrxdtnh0d75req0595359hj29y9n2vq3mba8"></script>
 <script src="js/plugin.js"></script>
  <script>tinymce.init({
  selector: 'textarea', resize: false, statusbar: false,  plugins: 'placeholder'
});
</script>

 <section class="overview-block-ptb text-left iq-font-white" style="background-color:black;
 background-position: center center; background-repeat: no-repeat; background-size: cover;">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-8">
<div class="iq-mb-0">
<h2 class="iq-font-white iq-tw-6" style="margin-top: 50px;">Write a Blog</h2>
</div>
</div>
</div>
</div>
</section>
<br>
<section class="iq-log-regi">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12">
<div class="heading-title text-center">
<h2 class="title iq-tw-6 iq-font-black">Blog Write</h2>
</div>
</div>
</div>
<div class="main-content">
<section class="iq-blog overview-block-ptb">
<div class="container">
<form action="blogwriteprocess.php" method="post" enctype="multipart/form-data">
  <b style="color: black; font-size: 16px;">Title:</b> <input type="text" placeholder="Enter title" required maxlength="100" name="title" style="margin-bottom: 10px;">
  <b style="color: black; font-size: 16px;">Category:</b>
  <select name="cat">
  	      <option value="1">General</option>
          <?php   
          $str="select * from blog_category_master";
          $data=mysqli_query($conn,$str);
          while ($result = mysqli_fetch_array($data)) { ?>
            <option value="<?php echo $result['blg_cat_id']; ?>"><?php echo $result['blg_cat_name']; ?></option>
          <?php } ?>
  </select>
  <b style="color: black; font-size: 16px;">Images(if any):</b>
  <input class="form-control" type="file" name="img[]" multiple="multiple" max="" style="margin-bottom: 10px;">
  <textarea placeholder="Enter Text" name="blg" style="height: 500px; min-height: 500px; max-height: 500px;resize:none;"></textarea>
<?php
        if(isset($_SESSION['er'])){
          echo "<span style='color:red'><strong>".$_SESSION['er']."</strong></span>";
          unset($_SESSION['er']);
        }
  ?>
  <br>
  <center><button class="button" style="width: 100%;" name="btn"><b>Publish</b></button></center>
  </form>
</div>
</section>
</div>