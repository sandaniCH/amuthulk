<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/contact us.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

     <!-- navigation bar -->
    <div class="header">
        <!-- Company name -->
         <a href="index.php" class="logo">AMUTHU.LK</a>
         <!-- header center content -->
         <div class="header-center" class="dropdown">
           
                 <div class="dropdown">
                 <button class="dropbtn" class="active">Catogories 
                 <i class="fa fa-caret-down"></i>
                 </button>
                    <div class="dropdown-content">
                       <a href="category.php?category=Vehicles">Vehicles</a>
                       <a href="category.php?category=Electronics">Electronics</a>
                       <a href="category.php?category=Properties">Properties</a>
                    </div>
                 </div> 

           <a href="shop.php">Shop</a>
           <a href="contact us.php" class="active">Contact us</a>
           <a href="About us.php">About us</a>
         </div>
         <!-- header right content  -->
         <div class="header-right">
           
            <a href="login/login.php">Sign in <i class="fa fa-chevron-circle-right"></i></a>
            <a href=""><i class="fa fa-search"></i></a>
         </div>

    </div><!-- navigation bar div end -->

    
        
    <!-- header content -->
        <header class="img-header container">

            <div class="img-header-section" style="background-image: url(images/contact.jpg);z-index: -999;">
            </div>
             <!-- header content -->
             <div class="header-overlay"><!-- overlay div--></div>
             <div class="header-content text-sm-left">
                <p>
                    <b class="font-weight-bold">Home //</b> Contact Us
                </p>

             </div><!-- header content -->
        </header>

        <div>
            <center>
                      <h3>Contact Form</h3>

      <div class="container-form">
       <form method="post" action="php/php_contactus.php">
         <label for="fname">First Name :</label>
         <input type="text" id="fname" name="firstname" placeholder="Your name..">

         <label for="lname">Last Name :</label>
         <input type="text" id="lname" name="lastname" placeholder="Your last name..">

         <label for="country">Email :</label>
         <input type="text" id="email" name="email" placeholder="someone@gmail.com..">


         <label for="subject">Message :</label>
         <textarea id="subject" name="message" placeholder="Write something.." style="height:200px"></textarea>

         <input type="submit" value="Send Message" name="send">
  </form>
</div>
</center>

        </div>

        <!-- footer start-->
        <footer>
        <center>
        <table style="width: 100%; text-align: center;">
            <tr>
                <td style="text-align: center;">
                    <h3>About Us</h3><br>
                    <h4>This is a project done by 18.2 Plymouth SE Group</h4>
                    <br><br>
                    <h3>Subscribe</h3><br>
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </td>
                <td>
                    <h3>Quick Links</h3><br>
                    <a href="index.php">Home</a><br>
                    <a href="shop.php">Shop</a><br>
                    <a href="ABout us.php">About US</a><br>
                    <br><br>
                
                </td>
                <td>
                    <h3>Contact Info</h3><br>
                    <h5><i class="fa fa-map-marker" style="font-size:24px"></i>  203 Mahenwaththa, Pitipana, Homagama</h5><br>
                    <h5><i class="fa fa-phone" style="font-size:24px"></i>  +94 011 4576 964</h5><br>
                    <h5><i class="fa fa-vcard" style="font-size:24px"></i>  amuthushoping@amuthu.com</h5><br>
                </td>
            </tr>
        </table>
    </center>
    </footer>   

</body>
</html>