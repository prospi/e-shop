<?php include_once('settings.php'); 
 delete_cartProduct();

//Update_Cart();
$single_total=null;
$value=1;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <?php 
   include "header.php";

     ?>
</head>
<body>

<?php
      include "nav.php";
	?>

    <?php
		   include "headerMiddle.php";
		   include "headerBottom.php";

		   ?>

		   </header>
		  
           <section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
			<form method="post">
				<table class="table table-condensed" >
				
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
		<?php			    
                        
    $total_price=0;
    global $conn;
    $ip_add=get_ip();
		if(isset($_POST["update_cart"])){
	
			$quantity=$_POST["quantity"];
	   
			$query="UPDATE cart SET quantity='$quantity'";
			mysqli_query($conn,$query);
	   
			$_SESSION['quantity']=$quantity;
			$value=$_SESSION['quantity'];
		
		  }
    $query=$query="SELECT * FROM cart  WHERE  ip_address='$ip_add' ";
    $stmt=mysqli_query($conn,$query);
	$row_count=mysqli_num_rows($stmt);
	

    while($row=mysqli_fetch_array($stmt)){
	  $product_id=$row['pro_id'];
	  $pro_qyt=$row['quantity'];

      $query1="SELECT * FROM products  WHERE  product_id='$product_id' ";
      $stmt1=mysqli_query($conn,$query1);
      $row_count=mysqli_num_rows($stmt1);

      while ($row1=mysqli_fetch_array($stmt1)) {
        $single_price=$row1["price"];
        $product_price =array($row1["price"]);
        $product_quantity =$row1["Quantity"];
        $product_color =$row1["color"];
        $product_des =$row1["pro_description"];
        $product_image=$row1["product_image"];
        $product_status=$row1["product_status"];
        $product_date =$row1["pro_date"];
        $product_id =$row1["product_id"];
        $product_name =$row1["product_name"];

        $price_values=array_sum($product_price );

		$total_price+=$price_values;
		$single_total=$single_price*$pro_qyt;

       echo" <tr>
        <td class='cart_product'>
          <a href=''><img style='height:100px;' src='admin/product_image/$product_image' alt=''></a>
        </td>
        <td class='cart_description'>
          <h4><a href=''>$product_name</a></h4>
        </td>
        <td class='cart_price'>
          <p>GH₵$single_price</p>
        </td>
        <td class='cart_quantity'>
          <div class='cart_quantity_button'>
		  <a class='cart_quantity_up' href=''> + </a>
		 <a href='#?pr_id=$product_id'> <input class='cart_quantity_input' type='text' name='quantity' value='$pro_qyt' autocomplete='off' size='2'></a>
		  <a class='cart_quantity_down' href=''> - </a> 
          </div>
        </td>
        <td class='cart_total'>
          <p class='cart_total_price'>GH₵$single_total</p>
        </td>
        <td class='cart_delete'>
        
          <a class='cart_quantity_delete' href='cart.php?pro_id=$product_id'><i class='fa fa-times'></i></a>
        </td>
      </tr>";
	   
	  
	
	  
      }
       
      
	   
	   
		
		
		}
    
     
    $total_price;
          
				?>	 

					</tbody>
					
						<tr class="cart_menu" style='background:white;color:rgb(226, 10, 154); font-weight:bold; font-size:20px; '>
							<td > </td>
							<td ></td>
							<td>  </td>
							<td >  SUB TOTAL:  </td>
							<td ><?php  price_total(); ?></td>
							<td></td>
						</tr>
					
                         
						
						
						<tr class="cart_menu" style='background:white;color:black; font-weight:bold; font-size:15px; '>
							<br/>
							<br/>
							<td >    </td>
							<td ><a href=''><input class='btn btn-primary' type='submit' value='Update Cart' name='update_cart'/></a></td>
							<td ><a href=""><input class='btn btn-primary' type='submit' value='Continue Shopping'/></a></td>
							<td ><a href="#"><input class='btn btn-primary' type='submit' value='Proceed To Checkout' name="checkout"/></a></td>
							<td></td>
						</tr>
					
				</table>
				</form>
			</div>
		</div>
	</section> <!--/#cart_items-->


    <?php include_once('footer.php'); ?>

	 <script src="js/jquery.js"></script>
	   <script src="js/bootstrap.min.js"></script>
	  <script src="js/jquery.scrollUp.min.js"></script>
	  <script src="js/price-range.js"></script>
      <script src="js/jquery.prettyPhoto.js"></script>
      <script src="js/main.js"></script>
</body>
</html>