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
          
          <?php 
            if(!isset($_SESSION["Customer_Email"])){
          include('checkout_signin.php'); 
           }
           else{
            include('payment.php');          
           }
          ?>
          
          

          
          <div class="down">
          <?php 
          include_once("footer.php");
         ?>
	     </div>
        
        
          
       
</body>
</html>