<?php    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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
             
            <div class="container">
               <div class="row">
                  <div class="col-sm-3">
                    	
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
                                <div style='font-weight:bold; padding:20px; border:1px solid black; font-size:20px;  '>
                                <li ><span></span>MY ACCOUNT</a></li>
                                </div>
                                    <div  style='   '>
                                <div style=' padding:10px; color:red; '>
                                <li><a href='#'> <span class='pull-right'></span>My Orders</a></li>
                                </div>
                                <div style=' padding:10px;  '>
                                <li><a href='#'> <span class='pull-right'></span>Edit Account</a></li>
                                </div>
                                <div style=' padding:10px;  '>
                                <li><a href='#'> <span class='pull-right'></span>Change Password</a></li>
                                </div>
                                <div style=' padding:10px;  '>
                                <li><a href='#'> <span class='pull-right'></span>Delete Accounts</a></li>
                                </div>
								</div>
								</ul>
							</div>
                  </div>
               </div>
            </div>
        
        
          
           <div class="down">
          <?php 
          include_once("footer.php");
         ?>
	     </div>
</body>
</html>