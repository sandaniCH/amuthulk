<?php
include '../php/php_signup.php';
include '../php/php_login.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>login & signup</title>
 	<link rel="stylesheet" href="style.css">
 </head>
 <body>
     
     <div class="Login-page">
  <div class="form">
       <form method="post" action="#">
       <input type="text" placeholder="name" required name="new_username" />
       <input type="password" placeholder="password" required name="new_password" />
       <input type="text" placeholder="email id" required/ name="new_email">
       <button name="signup">Create Account</button>
       <p class="message">Already Registerd? <a href="#">Login</a>
       </p>
       </form>

       <form class="Login-form" method="post" action="">
       <input type="text" placeholder="user name" name="user" required/>
       <input type="password" placeholder="password" name="pass" required/>
       <button name="login">login</button>
       <p class="message">Not Registered? <a href="#">Register</a></p>

       </form>

   </div>
   </div>

 </body>
 </html>