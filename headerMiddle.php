
<?php include_once('settings.php'); ?>
<div class="header-middle shopName"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
                    <div  class="container">
		       
               <a class="logo" style="margin-left:0px; color:#4d4d4; font-size:25px; font-family:fantasy; font-weight:bold color:orange" href="#">Smart<img src="images/favicon.ico">Shop          <img class="car" id="id" src="images/car.png"></a>
   </div>
					</div>
					<div class="col-sm-8 " style="margin-top:5px">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user i_color"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-crosshairs i_color"></i> Orders</a></li>
								<?php 
								if(!isset($_SESSION["Customer_Email"])){
								echo "<li><a href='checkout.php'><i class='fa fa-lock i_color'></i> Login</a></li>";
								}else{
								echo"<li><a href='logout.php'><i class='fa fa-lock i_color'></i> Logout</a></li>";
								}
								?>
								<li><a  href="cart.php" style="border:1px solid rgb(235, 228, 228);font-size:19px; padding:2px 6px 2px 5px; background: black; color:white; font-family:Arial;"><i class="fa fa-shopping-cart i_color"></i><span style="color:red">[<?php cart_total(); ?>]</span> Cart</a></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle--