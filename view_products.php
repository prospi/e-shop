
<?php include_once("settings.php");  ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>

  <?php include_once("header.php");  ?>

</head>
<body>
   
<?php
      include "nav.php";
	?>
	    <header>
    
		   <?php
		   include "headerMiddle.php";
		   include "headerBottom.php";

		   ?>
          
		   </header>

					<?php cart(); ?>		 
  <div class="container mn">
				<div class="row"><!--start of row-->
				 <div class="col-sm-3"><!--start of col-->
				<div id="sidebar" class="span3">
					<?php include_once("categories.php"); ?>

					<div class="price-range"><!--price-range-->
							<h3 style="text-align:center; color:orange;">Price Range</h3>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">GH 0</b> <b class="pull-right">GH 600</b>
							</div>
						</div><!--/price-range-->
						<br/>
         </br>
<div class="well well-small sub">
	<ul class="nav nav-list ">

		<?php  get_product_sub(); ?>
		<?php get_product_sub2(); ?>

	</ul>
</div>
		 
		<br/>
		<br/>
			<?php include_once("brands.php"); ?>
	
			<br/>
			<a class="shopBtn btn-block" href="#">Upcoming products <br><small>Click to view</small></a>
			<br/>
			<br/>
			<ul class="nav nav-list promowrapper">
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
			    <?php get_new(); ?>
			  </div>
			</li>
			<br/>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<?php get_new1(); ?>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<?php get_new2(); ?>
			  </div>
			</li>
		  </ul>
      
	</div>
</div><!--end of col-->
<div class="col-sm-12 col-md-12 col-lg-9"><!--start of col-->
<div class="row"><!--start of a new row-->
<div style="margin-top:60px;"   class="span9">
  <ul class="thumbnails">
	<?php cart(); ?>
		<?php get_products();  ?>
    <?php get_by_subcategory(); ?>
				  </ul>
	
	</div>
</div><!--end of a new row-->
</div><!--end of col-->
	</div><!--end of row-->
</div><!--end of container class-->
    
	

		 <?php include_once("footer.php"); ?>
		 
		 
		 <script src="js/jquery.js"></script>
	   <script src="js/bootstrap.min.js"></script>
	  <script src="js/jquery.scrollUp.min.js"></script>
	  <script src="js/price-range.js"></script>
      <script src="js/jquery.prettyPhoto.js"></script>
      <script src="js/main.js"></script>
     <!-- Placed at the end of the document so the pages load faster -->
     <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="assets/js/shop.js"></script>

             
   	
						 <script src="js/jquery.js"></script>
	   <script src="js/bootstrap.min.js"></script>
	  <script src="js/jquery.scrollUp.min.js"></script>
	  <script src="js/price-range.js"></script>
      <script src="js/jquery.prettyPhoto.js"></script>
      <script src="js/main.js"></script>					
			   
			
</body>
</html>