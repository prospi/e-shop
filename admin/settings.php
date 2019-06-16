<?php

$conn=mysqli_connect("localhost","root","monfrim0504","shop");



function get_cat(){
  
    global $conn;
 $query="select * from category";

 $stm=mysqli_query($conn,$query);


 while($row=mysqli_fetch_array($stm)){

   $cat_id=$row['category_id'];
   $cat_name=$row['category_name'];


   echo "   <option>$cat_name</option>";

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
  
 
                
    echo " <option>$brand_name</option>";
              
   }
  }

}

function get_sub(){

global $conn;

$query="select * from sub_categories";

$stm= mysqli_query($conn,$query);

while($row=mysqli_fetch_array($stm)){

    $sub_cat_id =$row['sub_cat_id'];
    $sub_cat_name=$row['sub_cat_name'];
    
    
    echo "<option>$sub_cat_name</option>";


 }

}





function insert_products(){

  global $conn;

  if(isset($_POST["InsertProduct"])){

  $product_name=mysqli_real_escape_string($conn,$_POST["product_name"]);
  $product_price=mysqli_real_escape_string($conn,$_POST["product_price"]);
  $product_quantity=mysqli_real_escape_string($conn,$_POST["quantity"]);
  $product_color=mysqli_real_escape_string($conn,$_POST["product_color"]);
  $product_des=mysqli_real_escape_string($conn,$_POST["product_des"]);
  $product_cat=mysqli_real_escape_string($conn,$_POST["product_cat"]);
  $sub_cat=mysqli_real_escape_string($conn,$_POST["sub_cat"]);
  $product_brand=mysqli_real_escape_string($conn,$_POST["product_brand"]);
  $product_status=mysqli_real_escape_string($conn,$_POST["product_status"]);


  $v1=rand(1111,9999);
   $v2=rand(1111,9999);
   
   $v3=$v1.$v2;
   
   $v3=md5($v3);
   
   
   $fnm=$_FILES["pimage"]["name"];
   $dst="./product_image/".$v3.$fnm;
   $dst1=$v3.$fnm;
   move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst);

    $query="select category_id from category where category_name = '$product_cat'";
     $stm =mysqli_query($conn,$query);

     while($row=mysqli_fetch_array($stm)){

     $product_cat=$row["category_id"];

     }
   
     $brand_query ="select brand_id from brands where brand_name='$product_brand'";
     $brand_stm =mysqli_query($conn,$brand_query);
     while($row=mysqli_fetch_array($brand_stm)){

      $product_brand=$row["brand_id"];

     }
    
     $sub_query ="select sub_cat_id from sub_categories where sub_cat_name='$sub_cat'";
     $sub_stm =mysqli_query($conn,$sub_query);
     while($row=mysqli_fetch_array($sub_stm)){

      $sub_cat=$row["sub_cat_id"];

     }



     

  $sql = "INSERT INTO products(product_name,price,Quantity,color,pro_description,cat_id,sub_cat_id,brand_id,product_image,product_status,pro_date)
   VALUES('$product_name','$product_price','$product_quantity','$product_color','$product_des','$product_cat','$sub_cat','$product_brand','$dst1','$product_status',now())";
    
    mysqli_query($conn,$sql);

    header("Location: product_add.php?insert=success");

    

  
}

}
?>