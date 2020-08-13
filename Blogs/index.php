<?php 
	require "header.php";
	require "../lib/connection.php";
 ?>
 <?php 
 error_reporting(0);
 if (isset($_GET['cat']) or $_GET['cat'] != "") {
 	$cat = $_GET['cat'];
 	$source = "where blg_cat_id = $cat";
 	$ur = "&cat=$cat";
 }else{ $source="";$ur = "";}
$rowsPerPage = 5;
if(isset($_GET['page']))
{
$pageNum= $_GET['page'];
}else{$pageNum= 1;} 
$previousRows = ($pageNum - 1) * $rowsPerPage;
$str1 = "select * from blog_master $source limit $previousRows, $rowsPerPage";
$result1 = mysqli_query($conn,$str1);
?>
 <section class="overview-block-ptb text-left iq-font-white" style="background-color:black;
 background-position: center center; background-repeat: no-repeat; background-size: cover;">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-8">
<div class="iq-mb-0">
<h2 class="iq-font-white iq-tw-6" style="margin-top: 50px;">Explore Blogs <?php echo mysqli_error($conn); ?></h2>
</div>
</div>
</div>
</div>
</section>


<div class="main-content">

<section class="iq-blog overview-block-ptb">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-12 col-sm-12 iq-mtb-15">
<div class="iq-sidebar-widget">
<h5 class="iq-tw-6 small-title iq-font-dark">About Blog</h5>
<p>These blogs are written by Travelers from the website</p>
</div>
 <div class="iq-sidebar-widget">
<h5 class="iq-tw-6 small-title iq-font-dark">Categories</h5>
<div class="iq-widget-menu">
<ul class="iq-pl-0">
<li><a href="index.php"><span>All<i class="fa fa-angle-right"></i></span></a></li>
<?php $str = "select *  from blog_category_master";
$result = mysqli_query($conn,$str);
while ($data = mysqli_fetch_array($result)) {
?>
<li><a href="index.php?cat=<?= $data['blg_cat_id'] ?>"><span><?= $data['blg_cat_name'] ?><i class="fa fa-angle-right"></i></span></a></li>
<?php } ?>
</ul>
</div>
</div>
</div>
<div class="col-lg-8 col-md-12 iq-mtb-20" >
<div class="row">
<div class="col-lg-12 col-sm-12">

<?php

	while ($data = mysqli_fetch_array($result1)) {

 $urls = explode(",", $data['img_url']);
$originalDate = "2010-03-21";
$newDate = date("d-m-Y", strtotime($data['post_date']));
 ?>
 <div class="iq-blog-entry white-bg">
<div class="iq-entry-image clearfix">
	<span class="date"><small><?= $newDate ?></small></span>
	<?php if (count($urls)==1 and $urls[0]==""): ?>
		<?php elseif (count($urls)==1): ?>
			<?php foreach ($urls as $src): ?>
<img class="img-fluid" src="Gallery/<?= $src ?>" style="object-fit: contain;height: 300px;">
<?php endforeach ?>
<span class="tag"><i class="ion-image"></i> Photos</span>
<?php elseif (count($urls)>1):  ?>
	    <div class="iq-entry-image clearfix">
	    	<span class="tag"><i class="ion-image"></i> Photos</span>
<div class="owl-carousel arrow-1" data-autoplay="true" data-loop="true" data-nav="true" data-dots="false" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1">
<?php foreach ($urls as $src): ?>
	<div class="item">
<img class="img-fluid" src="Gallery/<?= $src ?>" style="object-fit: contain;
width: 100%;
height: 300px;" alt="#">

</div>
<?php endforeach ?>
<?php endif ?>

</div>
<div class="iq-blog-detail">
<div class="iq-entry-title iq-mb-10">
<a href="blogview.php?id=<?= $data['blg_id'] ?>">
<h5 class="iq-tw-6"><?= $data['blg_title'] ?></h5>
</a>
</div>
<div class="iq-entry-content">
<p><?= strip_tags($data['blg_content']) ?></p>
</div>
</div>
</div> 
<?php } ?>



	<?php
	$query = "SELECT COUNT(blg_id) AS numrows FROM blog_master $source";
	$result2 = mysqli_query($conn,$query);
	$row = mysqli_fetch_assoc($result2);
	 $numrows = $row['numrows'];
	 $lastPage = ceil($numrows/$rowsPerPage); 
	 $phpself = $_SERVER['PHP_SELF'];
	 ?>
		<nav style="margin-top: 30px;margin-bottom: 100px; ">
			<ul class="pagination justify-content-center pagination-box">
				<?php if ($pageNum > 1): ?>
				<?php $page = $pageNum - 1; ?>
				<li class="page-item">
					<a class="page-link" href="<?= "$phpself?page=$page$ur" ?>" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
						<span class="sr-only">Previous</span>
					</a>
				</li>
				<?php endif ?>
				<?php if ($pageNum < $lastPage): ?>
					<?php $page = $pageNum + 1; ?>
				<li class="page-item">
					<a class="page-link" href="<?= "$phpself?page=$page$ur" ?>" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
						<span class="sr-only">Next</span>
					</a>
				</li>
			<?php endif ?>
			</ul>
		</nav>
	</div>

</section>