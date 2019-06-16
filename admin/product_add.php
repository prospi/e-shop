<?php include_once("settings.php");

insert_products();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>products_add</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>

      <?php  include_once("links.php");           ?>

</head>
<body>
         <?php include_once("header.php");
           
               include_once("aside.php");
         
         ?>

        <!-- products form-->
        <section id="container">
        <section id="main-content" >
        <section class="wrapper" >
           <div class="row">
           <div class="col-lg-12">
            <div class="form-panel" style="margin-top:10px;">
            <h4 class="mb"><i class="fa fa-angle-right"></i>Add products</h4>
            
            <form class="form-horizontal" method="POST" action="product_add.php" enctype="multipart/form-data">
             
            <div class="form-group">
            <label for="Pname" class="col-sm-2 col-sm-2 control-label">Upload Image:</label>
                  <div class="col-md-9">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new" style="width: 200px; height: 150px;">
                        <img src=" " alt="" />
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="width: 200px; height: 150px; line-height: 20px;"></div>
                      <div>
                        <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                          <input type="file" name="pimage">
                        </span>
                        <a href="" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                      </div>
                    </div>
                  </div>
                </div>
           
            <div class="form-group">
                  <label for="Pname" class="col-sm-2 col-sm-2 control-label">Product Name:</label>
                  <div class="col-sm-6">
                    <input type="text" id="Pname" name="product_name"class="form-control"  required>
                  </div>
            </div>
             
            <div class="form-group">
                  <label for="price" class="col-sm-2 col-sm-2 control-label">Price:</label>
                  <div class="col-sm-6">
                    <input type="text" id="price" name="product_price"class="form-control" required >
                  </div>
            </div>
            
            <div class="form-group">
                  <label for="quantity" class="col-sm-2 col-sm-2 control-label"> Quantity:</label>
                  <div class="col-sm-6">
                    <input type="text" id="quantity" name="quantity"class="form-control" required >
                  </div>
            </div>

             <div class="form-group">
                  <label for="color" class="col-sm-2 col-sm-2 control-label">Color:</label>
                  <div class="col-sm-6">
                    <input type="text" id="color" name="product_color"class="form-control" required >
                  </div>
            </div>
               
            <div class="form-group">
                  <label for="des" class="col-sm-2 col-sm-2 control-label">Description:</label>
                  <div class="col-sm-6">
                    <input type="text" id="des" name="product_des"class="form-control"  required>
                  </div>
            </div>
             
                 
            <div class="form-group">
                  <label for="cat" class="col-sm-2 col-sm-2 control-label">Category Name:</label>
                  <div class="col-sm-6">
                  <select class="form-control" id="cat" name="product_cat" required>
                     <option> </option>
                        <?php get_cat(); ?>
                        
                        
                  </select>
                  </div>
            </div>
          

         
                 
                 <div class="form-group">
                  <label for="sub" class="col-sm-2 col-sm-2 control-label">Sub Category:</label>
                  <div class="col-sm-6">
                  <select class="form-control" id="sub" name="sub_cat" required>
                  <option> </option>
                        <?php get_sub(); ?>
                        
                        
                  </select>
                  </div>
            </div>

              <div class="form-group">
                  <label for="brand" class="col-sm-2 col-sm-2 control-label">brand:</label>
                  <div class="col-sm-6">
                  <select class="form-control" id="brand" name="product_brand" required>
                        <option> </option>
                         <?php get_brand();?>
                        
                        
                  </select>
                  </div>
            </div>

            <div class="form-group">
                  <label for="stat" class="col-sm-2 col-sm-2 control-label">Status:</label>
                  <div class="col-sm-6">
                  <select class="form-control" id="stat" name="product_status" required>
                        <option> </option>
                        <option>Yes</option>
                        <option>No</option>
                        
                  </select>
                  </div>
            
               <div class="col-sm-6">
                  <input type="submit" value="insert Product" class="btn btn-theme start fa fa-arrow-down" name="InsertProduct" style="margin-top:20px; margin-left:100px;" />

                </div>
            
           
            </div>
            </div>
           </div><!--end of row-->
         </from>
        </section>
        
        <!--end of products form-->

         <?php include("footer.php");  ?>
         </section>
         </section>


         <?php include("js.php"); ?>

<!-- js placed at the end of the document so the pages load faster -->
<script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>

  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="lib/advanced-form-components.js"></script>
</body>
</html>




