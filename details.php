
<?php include_once("settings.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>product details</title>
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
   

             
  <div class="container mn">
	<div class="row"><!--start of row-->
	 <div class="col-sm-3"><!--start of col-->
      <div id="sidebar" class="span3">
       <?php include_once("categories.php"); ?>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			
			<ul class="nav nav-list promowrapper">
			<?php Side_relatedProduct1();   ?>
			<li style="border:0"> &nbsp;</li>
			
			<?php SideRelatedProduct2();   ?>
			
		  </ul>

	</div>

	  </div><!--end of col-->

		<div class="col-sm-9 padding-right"><!--start of a col-->
					<div class="product-details"><!--product-details-->
					<?php product_details(); ?>
					</div><!--/product-details-->
					
					<!-- end here-->

               <?php cart(); ?>
					<div style='margin-top:65px;' class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a  href="#details" data-toggle="tab">Related Products</a></li>
								<li><a href="#companyprofile" data-toggle="tab">Other products</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="details" >
								
								<?php get_relatedProduct(); ?>
							</div>
							
							<div class="tab-pane fade" id="companyprofile" >
							
								<?php get_otherProducts(); ?>
			
							</div>
							
						
					
							
						</div>
					</div><!--/category-tab-->
					
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
	

</body>
</html>