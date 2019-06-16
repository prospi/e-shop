<?php include_once("settings.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <?php 
   include "header.php";

     ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


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
		

		   <div class="row">

			   <div class="col-md-3">
                   <?php include_once("categories.php"); ?>
				</div><!--end of first column--> 
				      
		 <div class="col-md-9 col-xs-12"><!--start of second column-->
				   
			 <div id="myCarousel" class="carousel slide" data-ride="carousel">
                       <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                           <li data-target="#myCarousel" data-slide-to="1"></li>
                          <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
						
                 <!-- Wrapper for slides -->
               <div class="carousel-inner">
                  <div class="item active">
                            <img style="width:1000px" src="images/jum3.PNG" alt="">
                    <div class="carousel-caption">
	                         <h2><a class="logo" style="margin-left:0px; color:red; font-size:30px; font-family:fantasy; font-weight:bold color:orange" href="#">Smart<img src="images/favicon.ico">Shop</a></h2>          
	                        <img class="cr" id="id" src="images/car.png"/>
                     </div>
                 </div>

                <div class="item">
                              <img style="width:1000px" src="images/jum.PNG" alt="">
                   <div class="carousel-caption">
	                     <h2> <a class="logo" style="margin-left:0px; color:red; font-size:30px; font-family:fantasy; font-weight:bold color:orange" href="#">Smart<img src="images/favicon.ico">Shop</a></h2>          
	                      <img class="cr" id="id" src="images/car.png"/>
                    </div>
               </div>

               <div class="item">
                            <img style="width:1000px" src="images/jum2.PNG" alt="">
                    <div class="carousel-caption">
	                         <h2> <a class="logo" style="margin-left:0px; color:red; font-size:30px; font-family:fantasy; font-weight:bold color:orange" href="#">Smart<img src="images/favicon.ico">Shop</a></h2>          
	                        <img class="cr" id="id" src="images/car.png"/>
                    </div>
               </div>
            </div>

                    <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>
               </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
		</div>
	  

	 </div><!--end of second column-->
	 
	 

      </div><!--row -->




	  
	  <div class="row">

<div class="col-md-3">
  <?php include_once("brands.php"); ?>
 </div><!--end of first column--> 
	   
<div class="col-md-9 col-xs-12"><!--start of second column-->
	
<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#Mens" data-toggle="tab">Men's Fashion</a></li>
								<li><a href="#Womens" data-toggle="tab">Women's Fashion</a></li>
								<li><a href="#Computing" data-toggle="tab">Computing</a></li>
								<li><a href="#Phones" data-toggle="tab">Phones&Tablets</a></li>
								<li><a href="#Others" data-toggle="tab">Others</a></li>
							</ul>
						</div>
						<div class="tab-content">
						<?php cart(); ?>
							<div class="tab-pane fade active in" id="Mens" >
							
							<?php get_MensFashion(); ?>
							</div>
							
							<div class="tab-pane fade" id="Womens" >
								
								<?php get_WomensFashion(); ?>
							</div>
							
							<div class="tab-pane fade" id="Computing" >
								
								<?php get_Computing(); ?>
								
							</div>
							
							<div class="tab-pane fade" id="Phones" >
								
								<?php get_phones(); ?>
								
							</div>
							
							<div class="tab-pane fade" id="Others" >
								
								<?php get_others(); ?>
								
							</div>
						</div>
					</div><!--/category-tab-->


</div><!--end of second column-->



</div><!--row -->
	</div><!--container-->						
									
								
							
		<?php 
		  include_once("footer.php");
		
		?>
							
								
								
									
						
								
							
							
			
   
		
      <script src="js/jquery.js"></script>
	   <script src="js/bootstrap.min.js"></script>
	  <script src="js/jquery.scrollUp.min.js"></script>
	  <script src="js/price-range.js"></script>
      <script src="js/jquery.prettyPhoto.js"></script>
      <script src="js/main.js"></script>					
			   
    </body>
</html>
