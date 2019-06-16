<?php   
include_once("database.php");
//session_start();
//getting categories and it sub 
session_start();
function get_cat_and_sub(){
  
    global $conn;

   
 $query="SELECT *
  FROM category,sub_categories where category_id=cat_id
  GROUP BY category_name
  ";

 $stmt=mysqli_query($conn,$query);

 
while($row=mysqli_fetch_array($stmt)){

   $category_name=$row['category_name'];
   $html_id =$row['html_id'];
   $sub =$row['sub_cat_name'];
   $cat_id=$row['category_id'];
   


   echo "	<div class='panel panel-default'>
   <div class='panel-heading'>
     <h4 class='panel-title'>
       <a data-toggle='collapse' data-parent='#accordian' href='#$html_id'>
         <span class='badge pull-right'><i class='fa fa-plus'></i></span>
       $category_name
       </a>
     </h4>
   </div>
   <div id='$html_id' class='panel-collapse collapse'>
     <div class='panel-body'>
       <ul>
         <li><a href='view_products.php?category=$cat_id'>$sub </a></li>
         
       </ul>
     </div>
   </div>
 </div>";
 }   

 }







function get_brand(){


  global $conn;
$query = "select * from brands";

$stm =mysqli_query($conn,$query);
$row_count =mysqli_num_rows($stm);
if($row_count< 1){
  echo "<li><a href='#'> <span class='pull-right'></span>No brand to display</a></li>";
 }else{

 

while($row =mysqli_fetch_array($stm)){
  $brand_id =$row['brand_id'];
  $brand_name=$row['brand_name'];
  
 
                
    echo "<li><a href='#'> <span class='pull-right'></span>$brand_name</a></li>";
              
   }
  

}

}

// get products by their categories

function get_products(){
  

    global $conn;
  if(isset($_GET["category"])){

    $cat_id =$_GET["category"];


    $query ="SELECT * FROM products WHERE cat_id=$cat_id ORDER BY RAND()";

         $stmt=mysqli_query($conn,$query);
         $row_count =mysqli_num_rows($stmt);

     if($row_count<1){
           

         echo"<h2 style='text-align:center; border:1px solid  #696763 ; background-color:black;color:orange; '>No product available</h2>";

     }else{

      while($row=mysqli_fetch_array($stmt)){

        $product_id =$row["product_id"];
        $product_name =$row["product_name"];
        $product_price =$row["price"];
        $product_quantity =$row["Quantity"];
        $product_color =$row["color"];
        $product_des =$row["pro_description"];
        $product_image=$row["product_image"];
        $product_status=$row["product_status"];
        $product_date =$row["pro_date"];
        $cat_id=$row['cat_id'];
        $sub_cat_id=$row['sub_cat_id'];


        echo "
        
        <div class='col-sm-3'><!--start of a new col-->
        <li class='span4'>
          <div class='thumbnail'>
          <a class='zoomTool' href='details.php?product_id=$product_id' title='add to cart'><span class='icon-search'></span> QUICK VIEW</a>
          <a  href='details.php?product_id=$product_id'><img style='width:2000px; height:200px;'  src='admin/product_image/$product_image' alt='No image'></a>
          <div class='caption'>
            <h5>$product_name</h5>
            <h4>
              <a class='defaultBtn' href='details.php?product_id=$product_id' title='Click to view'><span class='icon-zoom-in'></span></a>
              <a class='shopBtn' href='index.php?add_cart=$product_id' title='add to cart'><span class='icon-plus'></span></a>
              <span class='pull-right'>GH₵$product_price</span>
            </h4>
          </div>
          </div>
        </li>
      </div>";

      }

    }
  }


}


//get products  sub_categories list
function get_product_sub(){
  

  global $conn;
if(isset($_GET["category"])){

  $cat_id =$_GET["category"];


  $query ="SELECT * FROM sub_categories WHERE cat_id=$cat_id ORDER BY LAST_INSERT_ID() DESC ";

       $stmt=mysqli_query($conn,$query);
       $row_count =mysqli_num_rows($stmt);

   if($row_count<1){
         

       echo"<h2 style='text-align:center; border:1px solid  #696763 ; background-color:gray;color:purple; font-weight:bold;'>No products available</h2>";

   }else{

    while($row=mysqli_fetch_array($stmt)){

     $sub_cat_id=$row['sub_cat_id'];
     $sub_cat_name=$row['sub_cat_name'];


      echo "<li><a href='view_products.php?sub_cat=$sub_cat_id'><span class='icon-chevron-right'></span>$sub_cat_name</a></li>";

    }

  }
}


}



function get_new(){
  

  global $conn;
if(isset($_GET["category"])){

  $cat_id =$_GET["category"];


  $query ="SELECT * FROM products WHERE cat_id=$cat_id ORDER BY pro_date DESC LIMIT 1";
         
  $stmt=mysqli_query($conn,$query);
  $row_count =mysqli_num_rows($stmt);


    while($row=mysqli_fetch_array($stmt)){

      $product_id =$row["product_id"];
  $product_name =$row["product_name"];
  $product_price =$row["price"];
  $product_quantity =$row["Quantity"];
  $product_color =$row["color"];
  $product_des =$row["pro_description"];
  $product_image=$row["product_image"];
  $product_status=$row["product_status"];
  $product_date =$row["pro_date"];


      echo "	<img style='height:300px;' src='admin/product_image/$product_image' alt='bootstrap ecommerce templates'>
      <div class='caption'>
        <h4><a class='defaultBtn' href='details.php?product_id=$product_id'>VIEW</a> <span class='pull-right'>GH₵$product_price</span></h4>
      </div>";

    }

  }
}


function get_new1(){
  

  global $conn;
if(isset($_GET["category"])){

  $cat_id =$_GET["category"];


  $query ="SELECT * FROM products WHERE cat_id=$cat_id ORDER BY product_id LIMIT 1";
         
  $stmt=mysqli_query($conn,$query);
  $row_count =mysqli_num_rows($stmt);

  
    while($row=mysqli_fetch_array($stmt)){

      $product_id =$row["product_id"];
     $product_name =$row["product_name"];
     $product_price =$row["price"];
     $product_quantity =$row["Quantity"];
     $product_color =$row["color"];
     $product_des =$row["pro_description"];
     $product_image=$row["product_image"];
     $product_status=$row["product_status"];
     $product_date =$row["pro_date"];


      echo "	
      <img style=' height:300px;' src='admin/product_image/$product_image' alt='bootstrap ecommerce templates'>
      <div class='caption'>
        <h4><a class='defaultBtn' href='details.php?product_id=$product_id'>VIEW</a> <span class='pull-right'>GH₵$product_price</span></h4>
      </div>";

    }

  }
}


function get_new2(){
  

  global $conn;
if(isset($_GET["category"])){

  $cat_id =$_GET["category"];


  $query ="SELECT * FROM products WHERE cat_id=$cat_id ORDER BY product_name DESC LIMIT 1";
         
  $stmt=mysqli_query($conn,$query);
  $row_count =mysqli_num_rows($stmt);

  
    while($row=mysqli_fetch_array($stmt)){

      $product_id =$row["product_id"];
     $product_name =$row["product_name"];
     $product_price =$row["price"];
     $product_quantity =$row["Quantity"];
     $product_color =$row["color"];
     $product_des =$row["pro_description"];
     $product_image=$row["product_image"];
     $product_status=$row["product_status"];
     $product_date =$row["pro_date"];


      echo "	
      <img style=' height:300px;' src='admin/product_image/$product_image' alt='bootstrap ecommerce templates'>
      <div class='caption'>
        <h4><a class='defaultBtn' href='details.php?product_id=$product_id'>VIEW</a> <span class='pull-right'>GH₵$product_price</span></h4>
      </div>";

    }

  }
}

//get products by their sub-categories


function get_by_subcategory(){
  

  global $conn;
if(isset($_GET["sub_cat"])){

  $cat_id =$_GET["sub_cat"];


  $query ="SELECT * FROM products WHERE sub_cat_id=$cat_id ORDER BY RAND()";

       $stmt=mysqli_query($conn,$query);
       $row_count =mysqli_num_rows($stmt);

   if($row_count<1){
         

       echo"<h2 style='text-align:center; border:1px solid  #696763 ; background-color:black;color:orange; font-weight:bold;'>No product available</h2>";

   }else{

    while($row=mysqli_fetch_array($stmt)){

      $product_id =$row["product_id"];
      $product_name =$row["product_name"];
      $product_price =$row["price"];
      $product_quantity =$row["Quantity"];
      $product_color =$row["color"];
      $product_des =$row["pro_description"];
      $product_image=$row["product_image"];
      $product_status=$row["product_status"];
      $product_date =$row["pro_date"];
      $cat_id=$row['cat_id'];


      echo "<div class='col-sm-3'><!--start of a new col-->
      <li class='span4'>
        <div class='thumbnail'>
        <a class='zoomTool' href='details.php?product_id=$product_id' title='add to cart'><span class='icon-search'></span> QUICK VIEW</a>
        <a  href='details.php?product_id=$product_id'><img style='width:2000px; height:200px;'  src='admin/product_image/$product_image' alt='No image'></a>
        <div class='caption'>
          <h5>$product_name</h5>
          <h4>
            <a class='defaultBtn' href='details.php?product_id=$product_id' title='Click to view'><span class='icon-zoom-in'></span></a>
            <a class='shopBtn' href='index.php?add_cart=$product_id' title='add to cart'><span class='icon-plus'></span></a>
            <span class='pull-right'>GH₵$product_price</span>
          </h4>
        </div>
        </div>
      </li>
    </div>";

    }

  }
}


}



//getting sub categories list from sub cat page


function get_product_sub2(){
  

  global $conn;
if(isset($_GET["sub_cat"])){

  $cat_id =$_GET["sub_cat"];


  $query ="SELECT * FROM sub_categories WHERE cat_id !=$cat_id ORDER BY RAND() LIMIT 7";

       $stmt=mysqli_query($conn,$query);
       $row_count =mysqli_num_rows($stmt);

   if($row_count<1){
         

       echo"<h2 style='text-align:center; border:1px solid  #696763 ; background-color:black;color:orange; '>No product available</h2>";

   }else{

    while($row=mysqli_fetch_array($stmt)){

     $sub_cat_id=$row['sub_cat_id'];
     $sub_cat_name=$row['sub_cat_name'];


      echo "<li><a href='view_products.php?sub_cat=$sub_cat_id'><span class='icon-chevron-right'></span>$sub_cat_name</a></li>";

    }

  }
}


}

//getting product details

function product_details(){


    global $conn;
  if(isset($_GET['product_id'])){
    $product_id =$_GET['product_id'];

    $query = "SELECT * FROM products WHERE product_id=$product_id";
    
    $stmt =mysqli_query($conn,$query);
    $row_count=mysqli_num_rows($stmt);

    while($row=mysqli_fetch_array($stmt)){

      $product_id =$row["product_id"];
        $product_name =$row["product_name"];
        $product_price =$row["price"];
        $product_quantity =$row["Quantity"];
        $product_color =$row["color"];
        $product_des =$row["pro_description"];
        $product_image=$row["product_image"];
        $product_status=$row["product_status"];
        $product_date =$row["pro_date"];
        $product_brand=$row['brand_id'];

      if($product_brand==0){
        $product_brand =" ";
      }else{
        $query ="SELECT * FROM brands where brand_id=$product_brand";
        $stmt=mysqli_query($conn,$query);
        while($row=mysqli_fetch_array($stmt)){
          $product_brand =$row["brand_name"];
        }
      }

      
        echo "<div class='col-sm-5'>
        <div class='view-product''>
          <img src='admin/product_image/$product_image' alt='pic' />
          
        </div>
        </div>
      
      
      
      <div class='col-sm-7'>
        <div class='product-information'>
          <img src='images/product-details/new.jpg' class='newarrival' alt='' />
          <h2>$product_name</h2>
          <p>ID: $product_id</p>
          
          <span>
            <span>GH₵$product_price</span>
           <a href='index.php?add_cart=$product_id' <button type='button' class='btn btn-fefault cart'>
              <i class='fa fa-shopping-cart'></i>
              Add to cart
            </button></a>
          </span>
          <p><b>Availability:</b> $product_status</p>
          <p><b>Condition:</b> New</p>
          <p><b>Brand:</b>$product_brand</p>
          <p><b>color:</b> red</p>
          <p><b>product Description:</b>$product_des</p>   
        </div>
      </div>";

    }
  }
}

function get_relatedProduct(){
    
  global $conn;
  if(isset($_GET['product_id'])){
    $products_id =$_GET['product_id'];
    $query = "SELECT * FROM products WHERE product_id=$products_id";
    $stmt =mysqli_query($conn,$query);
    $row_count=mysqli_num_rows($stmt);

    while($row=mysqli_fetch_array($stmt)){
      $product_id =$row["product_id"];
      $product_brand=$row['brand_id'];
      $product_cat=$row['cat_id'];
      
      $query1 ="SELECT * FROM category WHERE category_id= $product_cat";
      $stmt1 =mysqli_query($conn,$query1);
      $row_count1=mysqli_num_rows($stmt1);

      while($row1=mysqli_fetch_array($stmt1)){

         $category_id=$row1['category_id'];
         $category_name =$row1['category_name'];

         $query2 ="SELECT * FROM products WHERE cat_id= $category_id ORDER BY RAND() LIMIT 8";

         $stmt2 =mysqli_query($conn,$query2);
         $row_count2=mysqli_num_rows($stmt2);

         while($row2=mysqli_fetch_array($stmt2)){
          $product_id1=$row2["product_id"];
          $product_name =$row2["product_name"];
          $product_price =$row2["price"];
          $product_quantity =$row2["Quantity"];
          $product_color =$row2["color"];
          $product_des =$row2["pro_description"];
          $product_image=$row2["product_image"];
          $product_status=$row2["product_status"];
          $product_date =$row2["pro_date"];
 
             if($row_count2<1){
              echo"<h2 style='text-align:center; border:1px solid  #696763 ; background-color:black;color:orange; '>No product available</h2>";
             }else{
          echo "<div class='col-sm-3'>
          <div class='product-image-wrapper'>
            <div class='single-products'>
              <div class='productinfo text-center'>
                <img style='height:180px;' src='admin/product_image/$product_image' alt='' />
                <h2>GH₵ $product_price</h2>
                <p>$product_name</p>
               <a href='details.php?product_id=$product_id1' <button style='background-color:orangered; color:white;' type='button' class='btn btn-default add-to-cart'><i class='fa fa-search'></i>VIEW</button></a>
              <a href='index.php?add_cart=$product_id1' <button style=';'type='button' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</button> </a>
              </div>
            </div>
          </div>
        </div>";
             }
         }


      }

    }
    
}

}

//getting others product from product details page
    function get_otherProducts(){
      
      global $conn;
      if(isset($_GET['product_id'])){
        $products_id =$_GET['product_id'];
        $query = "SELECT * FROM products WHERE product_id=$products_id";
        $stmt =mysqli_query($conn,$query);
        $row_count=mysqli_num_rows($stmt);
    
        while($row=mysqli_fetch_array($stmt)){
          $product_id =$row["product_id"];
          $product_brand=$row['brand_id'];
          $product_cat=$row['cat_id'];
          
          $query1 ="SELECT * FROM category WHERE category_id != $product_cat";
          $stmt1 =mysqli_query($conn,$query1);
          $row_count1=mysqli_num_rows($stmt1);
    
          while($row1=mysqli_fetch_array($stmt1)){
    
             $category_id=$row1['category_id'];
             $category_name =$row1['category_name'];
    
             $query2 ="SELECT * FROM products WHERE cat_id= $category_id ORDER BY RAND() LIMIT 8";
    
             $stmt2 =mysqli_query($conn,$query2);
             $row_count2=mysqli_num_rows($stmt2);
    
             while($row2=mysqli_fetch_array($stmt2)){
              $product_id1=$row2["product_id"];
              $product_name =$row2["product_name"];
              $product_price =$row2["price"];
              $product_quantity =$row2["Quantity"];
              $product_color =$row2["color"];
              $product_des =$row2["pro_description"];
              $product_image=$row2["product_image"];
              $product_status=$row2["product_status"];
              $product_date =$row2["pro_date"];
     
              if($row_count2<1){
                echo"<h2 style='text-align:center; border:1px solid  #696763 ; background-color:black;color:orange; '>No product available</h2>";
              }else{
              echo "<div class='col-sm-3'>
              <div class='product-image-wrapper'>
                <div class='single-products'>
                  <div class='productinfo text-center'>
                    <img style='height:180px;' src='admin/product_image/$product_image' alt='' />
                    <h2>GH₵ $product_price</h2>
                    <p>$product_name</p>
                   <a href='details.php?product_id=$product_id1' <button style='background-color:orangered; color:white;' type='button' class='btn btn-default add-to-cart'><i class='fa fa-search'></i>VIEW</button></a>
                   <a href='details.php?add_cart=$product_id1' <button style=''type='button' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</button></a>
                  </div>
                </div>
              </div>
            </div>";
              }
             }
    
    
          }
    
        }
        
    }
    }


   //getting side related products
    function  Side_relatedProduct1(){
      
      global $conn;
      if(isset($_GET['product_id'])){
        $products_id =$_GET['product_id'];
        $query = "SELECT * FROM products WHERE product_id=$products_id";
        $stmt =mysqli_query($conn,$query);
        $row_count=mysqli_num_rows($stmt);
    
        while($row=mysqli_fetch_array($stmt)){
          $product_id =$row["product_id"];
          $product_brand=$row['brand_id'];
          $product_cat=$row['cat_id'];
          
          $query1 ="SELECT * FROM category WHERE category_id = $product_cat";
          $stmt1 =mysqli_query($conn,$query1);
          $row_count1=mysqli_num_rows($stmt1);
    
          while($row1=mysqli_fetch_array($stmt1)){
    
             $category_id=$row1['category_id'];
             $category_name =$row1['category_name'];
    
             $query2 ="SELECT * FROM products WHERE cat_id= $category_id ORDER BY RAND() LIMIT 1";
    
             $stmt2 =mysqli_query($conn,$query2);
             $row_count2=mysqli_num_rows($stmt2);
    
             while($row2=mysqli_fetch_array($stmt2)){
              $product_id1=$row2["product_id"];
              $product_name =$row2["product_name"];
              $product_price =$row2["price"];
              $product_quantity =$row2["Quantity"];
              $product_color =$row2["color"];
              $product_des =$row2["pro_description"];
              $product_image=$row2["product_image"];
              $product_status=$row2["product_status"];
              $product_date =$row2["pro_date"];
     
              if($row_count2<1){
                echo"";
              }else{
              echo "<li>
              <div class='thumbnail'>
              <a class='zoomTool' href='details.php?product_id=$product_id1' title='add to cart'><span class='icon-search'></span> QUICK VIEW</a>
              <img style='height:300px;' src='admin/product_image/$product_image' alt=''>
              <div class='caption'>
                <h4><a class='defaultBtn' href='details.php?product_id=$product_id1'>VIEW</a> <span class='pull-right'>GH₵ $product_price</span></h4>
              </div>
              </div>
            </li>";
              }
             }
    
    
          }
    
        }
        
    }
    }
 

   
    
    function  SideRelatedProduct2(){
      
      global $conn;
      if(isset($_GET['product_id'])){
        $products_id =$_GET['product_id'];
        $query = "SELECT * FROM products WHERE product_id=$products_id";
        $stmt =mysqli_query($conn,$query);
        $row_count=mysqli_num_rows($stmt);
    
        while($row=mysqli_fetch_array($stmt)){
          $product_id =$row["product_id"];
          $product_brand=$row['brand_id'];
          $product_cat=$row['cat_id'];
          
          $query1 ="SELECT * FROM category WHERE category_id != $product_cat";
          $stmt1 =mysqli_query($conn,$query1);
          $row_count1=mysqli_num_rows($stmt1);
    
          while($row1=mysqli_fetch_array($stmt1)){
    
             $category_id=$row1['category_id'];
             $category_name =$row1['category_name'];
    
             $query2 ="SELECT * FROM products WHERE cat_id= $category_id ORDER BY RAND() LIMIT 1";
    
             $stmt2 =mysqli_query($conn,$query2);
             $row_count2=mysqli_num_rows($stmt2);
    
             while($row2=mysqli_fetch_array($stmt2)){
              $product_id1=$row2["product_id"];
              $product_name =$row2["product_name"];
              $product_price =$row2["price"];
              $product_quantity =$row2["Quantity"];
              $product_color =$row2["color"];
              $product_des =$row2["pro_description"];
              $product_image=$row2["product_image"];
              $product_status=$row2["product_status"];
              $product_date =$row2["pro_date"];
     
              if($row_count2<1){
                echo"";
              }else{
              echo "<li>
              <div class='thumbnail'>
              <a class='zoomTool' href='details.php?product_id=$product_id1' title='add to cart'><span class='icon-search'></span> QUICK VIEW</a>
              <img style='height:300px;' src='admin/product_image/$product_image' alt=''>
              <div class='caption'>
                <h4><a class='defaultBtn' href='details.php?product_id=$product_id1'>VIEW</a> <span class='pull-right'>GH₵ $product_price</span></h4>
              </div>
              </div>
            </li>";
              }
             }
    
    
          }
    
        }
        
    }
    }

    // getting Mens Fashion

    function get_MensFashion(){
      global $conn;

      $query="SELECT * FROM products where cat_id=2 ORDER BY RAND() LIMIT 4";
      $stmt=mysqli_query($conn,$query);
      $row_count=mysqli_num_rows($stmt);

      if($row_count<1){

        echo"<h2 style='text-align:center; border:1px solid  #696763 ; background-color:black;color:orange;  margin-top:50px; margin-left:18px; margin-right:18px;'>No product available</h2>";
      }else{
        while($row=mysqli_fetch_array($stmt)){

          $product_id =$row["product_id"];
          $product_name =$row["product_name"];
          $product_price =$row["price"];
          $product_quantity =$row["Quantity"];
          $product_color =$row["color"];
          $product_des =$row["pro_description"];
          $product_image=$row["product_image"];
          $product_status=$row["product_status"];
          $product_date =$row["pro_date"];


           echo "<div class='col-sm-3'>
           <div class='product-image-wrapper'>
             <div class='single-products'>
               <div class='productinfo text-center'>
                 <img style='height:200px;' src='admin/product_image/$product_image' alt='' />
                 <h2>GH₵$product_price</h2>
                 <p>$product_name</p>                                   
                 <a style='background-color:orangered; color:white;' href='details.php?product_id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Quick View</a>
                 <a href='index.php?add_cart=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
               </div>
               
             </div>
           </div>
         </div>";

        }
      }
      
    }


    //getting Womens Fashion
    function get_WomensFashion(){
      global $conn;

      $query="SELECT * FROM products where cat_id=3 ORDER BY RAND() LIMIT 4";
      $stmt=mysqli_query($conn,$query);
      $row_count=mysqli_num_rows($stmt);

      if($row_count<1){

        echo"<h2 style='text-align:center; border:1px solid  #696763 ; background-color:black;color:orange; margin-top:50px; margin-left:18px; margin-right:18px; '>No product available</h2>";
      }else{
        while($row=mysqli_fetch_array($stmt)){

          $product_id =$row["product_id"];
          $product_name =$row["product_name"];
          $product_price =$row["price"];
          $product_quantity =$row["Quantity"];
          $product_color =$row["color"];
          $product_des =$row["pro_description"];
          $product_image=$row["product_image"];
          $product_status=$row["product_status"];
          $product_date =$row["pro_date"];


           echo "<div class='col-sm-3'>
           <div class='product-image-wrapper'>
             <div class='single-products'>
               <div class='productinfo text-center'>
                 <img style='height:200px;' src='admin/product_image/$product_image' alt='' />
                 <h2>GH₵$product_price</h2>
                 <p>$product_name</p>
                 <a style='background-color:orangered; color:white;' href='details.php?product_id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Quick View</a>
                 <a href='index.php?add_cart=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
               </div>
               
             </div>
           </div>
         </div>";

        }
      }
      
    }

//getting computers,printers$Scanners
    function get_Computing(){
      global $conn;

      $query="SELECT * FROM products where cat_id=4 ORDER BY RAND() LIMIT 4";
      $stmt=mysqli_query($conn,$query);
      $row_count=mysqli_num_rows($stmt);

      if($row_count<1){

        echo"<h2 style='text-align:center; border:1px solid  #696763 ; background-color:black;color:orange; margin-top:50px; margin-left:18px; margin-right:18px; '>No product available</h2>";
      }else{
        while($row=mysqli_fetch_array($stmt)){

          $product_id =$row["product_id"];
          $product_name =$row["product_name"];
          $product_price =$row["price"];
          $product_quantity =$row["Quantity"];
          $product_color =$row["color"];
          $product_des =$row["pro_description"];
          $product_image=$row["product_image"];
          $product_status=$row["product_status"];
          $product_date =$row["pro_date"];


           echo "<div class='col-sm-3'>
           <div class='product-image-wrapper'>
             <div class='single-products'>
               <div class='productinfo text-center'>
                 <img style='height:200px;' src='admin/product_image/$product_image' alt='' />
                 <h2>GH₵$product_price</h2>
                 <p>$product_name</p>
                 <a style='background-color:orangered; color:white;' href='details.php?product_id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Quick View</a>
                 <a href='index.php?add_cart=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
               </div>
               
             </div>
           </div>
         </div>";

        }
      }
      
    }

//getting Mens Phones and Tablets
    function get_phones(){
      global $conn;

      $query="SELECT * FROM products where cat_id=1 ORDER BY RAND() LIMIT 4";
      $stmt=mysqli_query($conn,$query);
      $row_count=mysqli_num_rows($stmt);

      if($row_count<1){

        echo"<h2 style='text-align:center; border:1px solid  #696763 ; background-color:black;color:orange; margin-top:50px; margin-left:18px; margin-right:18px; '>No product available</h2>";
      }else{
        while($row=mysqli_fetch_array($stmt)){

          $product_id =$row["product_id"];
          $product_name =$row["product_name"];
          $product_price =$row["price"];
          $product_quantity =$row["Quantity"];
          $product_color =$row["color"];
          $product_des =$row["pro_description"];
          $product_image=$row["product_image"];
          $product_status=$row["product_status"];
          $product_date =$row["pro_date"];


           echo "<div class='col-sm-3'>
           <div class='product-image-wrapper'>
             <div class='single-products'>
               <div class='productinfo text-center'>
                 <img style='height:200px;' src='admin/product_image/$product_image' alt='' />
                 <h2>GH₵$product_price</h2>
                 <p>$product_name</p>
                 <a style='background-color:orangered; color:white;' href='details.php?product_id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Quick View</a>
                 <a href='index.php?add_cart=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
               </div>
               
             </div>
           </div>
         </div>";

        }
      }
      
    }


    //getting others products
    function get_others(){
      global $conn;

      $query="SELECT * FROM products where cat_id !=1 AND cat_id !=2 AND cat_id !=3 AND cat_id !=4  ORDER BY RAND() LIMIT 4";
      $stmt=mysqli_query($conn,$query);
      $row_count=mysqli_num_rows($stmt);

      if($row_count<1){

        echo"<h2 style='text-align:center; border:1px solid  #696763 ; background-color:black;color:orange; margin-top:50px; margin-left:18px; margin-right:18px; '>No product available</h2>";
      }else{
        while($row=mysqli_fetch_array($stmt)){

          $product_id =$row["product_id"];
          $product_name =$row["product_name"];
          $product_price =$row["price"];
          $product_quantity =$row["Quantity"];
          $product_color =$row["color"];
          $product_des =$row["pro_description"];
          $product_image=$row["product_image"];
          $product_status=$row["product_status"];
          $product_date =$row["pro_date"];


           echo "<div class='col-sm-3'>
           <div class='product-image-wrapper'>
             <div class='single-products'>
               <div class='productinfo text-center'>
                 <img style='height:200px;' src='admin/product_image/$product_image' alt='' />
                 <h2>GH₵$product_price</h2>
                 <p>$product_name</p>
                 <a style='background-color:orangered; color:white;' href='details.php?product_id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Quick View</a>
                 <a href='index.php?add_cart=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
               </div>
               
             </div>
           </div>
         </div>";

        }
      }
      
    }

    //getting the ip address address of user computer

    function get_ip(){

     $ip =$_SERVER['REMOTE_ADDR'];

     if(!empty($_SERVER['HTTP_CLIENT_IP'])){
      $ip =$_SERVER['HTTP_CLIENT_IP'];

     }
     elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
      $ip =$_SERVER['HTTP_X_FORWARDED_FOR'];
     }
     
      return $ip; 

    }

  
    function cart(){
    global $conn;
     
     if(isset($_GET['add_cart'])){
       $ip_add =get_ip();
       $pro_id=$_GET['add_cart'];
       $query="SELECT * FROM cart  WHERE pro_id='$pro_id' AND ip_address='$ip_add' ";
       $stmt=mysqli_query($conn,$query);
       $row_count=mysqli_num_rows($stmt);

       if($row_count>0){
         echo "";
       } 
         $query1="INSERT INTO cart(pro_id,ip_address,quantity) VALUES ('$pro_id','$ip_add',1)";
         mysqli_query($conn,$query1);
         echo "<script>windows.open('index.php','_self')</script>";
       }
    


    }
    

    function cart_total(){
       
      global $conn;
       
       if(isset($_GET['add_cart'])){
         $ip_add =get_ip();
         $query="SELECT * FROM cart  WHERE  ip_address='$ip_add' ";
         $stmt=mysqli_query($conn,$query);
         $row_count=mysqli_num_rows($stmt);
  
       }else{
        $ip_add =get_ip();
        $query="SELECT * FROM cart  WHERE  ip_address='$ip_add' ";
        $stmt=mysqli_query($conn,$query);
        $row_count=mysqli_num_rows($stmt);
       }
  
      echo $row_count;
      }
    
      //getting products add to cart
  // function cart_page() {
    
    
    // $total_price=0;
    // global $conn;
    // $ip_add=get_ip();
    // $value=1;
    

    // $query=$query="SELECT * FROM cart  WHERE  ip_address='$ip_add' ";
    // $stmt=mysqli_query($conn,$query);
    // $row_count=mysqli_num_rows($stmt);

    // while($row=mysqli_fetch_array($stmt)){
    //   $product_id=$row['pro_id'];

    //   $query1="SELECT * FROM products  WHERE  product_id='$product_id' ";
    //   $stmt1=mysqli_query($conn,$query1);
    //   $row_count=mysqli_num_rows($stmt1);

    //   while ($row1=mysqli_fetch_array($stmt1)) {
    //     $single_price=$row1["price"];
    //     $product_price =array($row1["price"]);
    //     $product_quantity =$row1["Quantity"];
    //     $product_color =$row1["color"];
    //     $product_des =$row1["pro_description"];
    //     $product_image=$row1["product_image"];
    //     $product_status=$row1["product_status"];
    //     $product_date =$row1["pro_date"];
    //     $product_id =$row1["product_id"];
    //     $product_name =$row1["product_name"];

    //     $price_values=array_sum($product_price );

    //     $total_price+=$price_values;

    //     echo "<tr>
    //     <td class='cart_product'>
    //       <a href=''><img style='height:100px;' src='admin/product_image/$product_image' alt=''></a>
    //     </td>
    //     <td class='cart_description'>
    //       <h4><a href=''>$product_name</a></h4>
    //     </td>
    //     <td class='cart_price'>
    //       <p>GH₵$single_price</p>
    //     </td>
    //     <td class='cart_quantity'>
    //       <div class='cart_quantity_button'>
        
    //         <select class='cart_quantity_input 'selected='3'  name='quantity'>
    //         <option value='1'> 1 </option>
    //         <option value='2'> 2 </option>
    //         <option value='3'> 3 </option>
    //         <option value='4'> 4 </option>
    //         <option value='5'> 5 </option>
    //         <option value='6'> 6 </option>
    //         <option value='7'> 7 </option>
    //         <option value='8'> 8 </option>
    //         <option value='9'> 9 </option>
    //         </select>
            
    //       </div>
    //     </td>
    //     <td class='cart_total'>
    //       <p class='cart_total_price'>GH₵$single_price</p>
    //     </td>
    //     <td class='cart_delete'>
        
    //       <a class='cart_quantity_delete' href='cart.php?pro_id=$product_id'><i class='fa fa-times'></i></a>
    //     </td>
    //   </tr>";
     
    //   }

      
    // }
     
    // $total_price;


 
  // }  

   function price_total() {
    $total_price=0;
    global $conn;
    $ip_add=get_ip();
    $query=$query="SELECT * FROM cart  WHERE  ip_address='$ip_add' ";
    $stmt=mysqli_query($conn,$query);
    $row_count=mysqli_num_rows($stmt);

    while($row=mysqli_fetch_array($stmt)){
      $product_id=$row['pro_id'];
      $qyt=$row['quantity'];

      $query1="SELECT * FROM products  WHERE  product_id='$product_id' ";
      $stmt1=mysqli_query($conn,$query1);
      $row_count=mysqli_num_rows($stmt1);

      while ($row1=mysqli_fetch_array($stmt1)) {
        $single_price=$row1["price"] *$qyt;
        $product_price =array($single_price);
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

        
      }
    }

    echo 'GH₵'.$total_price;
   }  


   
  //delete products from cart
  
  function delete_cartProduct() {
    $ip_add=get_ip();
    global $conn;

    if(isset($_GET['pro_id'])){

      $pro_id =$_GET['pro_id'];

      $query="DELETE FROM cart WHERE pro_id='$pro_id' AND ip_address='$ip_add'";
      mysqli_query($conn,$query);
     
      echo "<script>windows.open('cart.php','_self')</script>";
     
      }
      
       
    }


   // update quantity 
    // function Update_Cart(){
    // global $conn;
  
      
    // if(isset($_POST["update_cart"])){
    //   $quantity=$_POST["quantity"];
 
    //   $query="UPDATE cart SET quantity='$quantity'";
    //   mysqli_query($conn,$query);
 
      
     
      
    // }
    // }

  
    if(isset($_POST["checkout"])){
      Header("Location: checkout.php");
    }
  

    // checkout signup
    function checkout_signup(){
    if(isset($_POST["submit"])){
      $ip_add=get_ip();
      global $conn;
      $fname=$_POST["fname"];
      $lname=$_POST["surname"];
      $phone=$_POST["phone"];
      $cEmail=$_POST["email"];
      $city=$_POST["city"];
      $address=$_POST["address"];
      $pass=$_POST["pass"];

      $query="SELECT * FROM customers WHERE Customer_Email='$cEmail' OR pass='$pass' OR Phone_num=' $phone' ";
         $stmt =mysqli_query($conn,$query);
        $row_count=mysqli_num_rows($stmt);
      
       if($row_count>0){
        
        echo "<h5 style='color:red;'>User Email,password or Contact already exist!</h5>";
            
       }else{

       
        
         $query1 ="INSERT INTO customers(ip_address,fname,lastName,Customer_Email,city,customer_address,Phone_num,pass) VALUES('$ip_add','$fname','$lname','$cEmail','$city','$address','$phone','$pass')";
        $stmt= mysqli_query($conn,$query1);
          
        $cart_query="SELECT * FROM cart WHERE ip_address='$ip_add'";
        $get_cat =mysqli_query($conn,$cart_query);
        $cart_items=mysqli_num_rows($get_cat);

        if($cart_items==0){
         $_SESSION["Customer_Email"]=$cEmail;
         echo "<script> alert('Account have been created successfully')</script>";
         echo "<script> window.open('#','_self')</script>";

        }else{
          $_SESSION["Customer_Email"]=$cEmail;
          echo "<script> alert('Account have been created successfully')</script>";
         echo "<script> window.open('checkout.php','_self')</script>";

        }
        
      }
    }
  }


  // checkout sign-in

  function checkout_signin(){
     global $conn;
       if(isset($_POST['signin_submit'])){

          $C_email=$_POST["c_email"];
          $C_pass=$_POST["c_password"];


          $select_cus="SELECT * FROM customers WHERE Customer_Email='$C_email' AND 	pass='$C_pass'";
          $run_cus=mysqli_query($conn,$select_cus);
          $check_customer=mysqli_num_rows($run_cus);

          if($check_customer==0){

            echo "<h5 style='color:red;'>Email or Password does not exist! </h5>";
          }else{
            $ip_add=get_ip();

           $select_cat="SELECT * FROM cart WHERE ip_address='$ip_add'";
           $run_cat=mysqli_query($conn,$select_cat);
           $check_cat=mysqli_num_rows($run_cat);

           if($check_customer>0 AND $check_cat==0){

            $_SESSION["Customer_Email"]=$C_email;
            echo "<script> alert('You have login successfully')</script>";
            echo "<script> window.open('#','_self')</script>";
              }else{
                $_SESSION["Customer_Email"]= $C_pass;
                echo "<script> alert('You have login successfully')</script>";
               echo "<script> window.open('checkout.php','_self')</script>";
           }

          }
           

       }


  }
?>