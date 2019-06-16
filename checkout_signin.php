

<div class="form animated flipInX">
                 <h2>You Already Have A SmartShop Account? Log In!</h2>
                 <?php checkout_signin();  ?>
            <form method="post">
             <input placeholder="Email*" type="text" name="c_email" required></input>
            <input placeholder="Password*" type="password" name="c_password" required></input>
              <button name="signin_submit">Login</button>
              <br/>
              <br/>
              <div class="pass">
              <h6>forgot password?</h6>
              </div>
              <br/>
             
              <a href="checkout_signup.php"><h5 style="color:#369cb8; font-weigt:bold; text-decoration-line:underline;">Click here to create a new customer account     <span style="color:orangered; font-size:15px;" class="	glyphicon glyphicon-hand-left"></span></h5></a>
             
            </form>
           </div>