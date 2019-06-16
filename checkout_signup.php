<?php include_once("settings.php"); ?>


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
           <!-- signup forms -->
	 <form action="#" method="POST" id="js-form">
   
       <h3 style="margin-top:-10px; color:blue;">New customer sign-up Here<span style="color:orangered; font-size:20px;" class="	glyphicon glyphicon-hand-down"></span></h3>
         <?php checkout_signup();  ?>
  <div class="name">
    <input type="text" name="fname" placeholder="First Name*" required/>
    <input type="text" name="surname" placeholder="Last Name*" required/>
	<input type="number" name="phone" placeholder="phone number*" required/>
    <input type="mail" name="email" placeholder="Email*"/>
    <input type="text" name="city" placeholder="City*" required/>
    <input type="textarea" name="address" placeholder="address*" required/>
	<input type="password" name="pass" placeholder="password*" required/>
  </div>
  
  
 
  <div class="check">
    <label for="checkbox">Keep Me Logged In:</label>
    <input type="checkbox" name="checkbox" id="checkbox" />
  </div>
<div class="submit">
    <input type="submit" name="submit" value="Submit" />
  </div>
  
</form>                          
</div>

            <div class="down">
          <?php 
          include_once("footer.php");
         ?>
	     </div>
</body>
</html>