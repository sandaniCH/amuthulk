<!DOCTYPE html>
<html>

<head>
    <title>Inedx page- Amuthu.lk</title>
    <link rel="stylesheet" href="css/shop.css" type="text/css">
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
            <a href="contact us.php">Contact us</a>
            <a href="About us.php">About us</a>
        </div>
        <!-- header right content  -->
        <div class="header-right">

            <a href="login/login.php">Sign in <i class="fa fa-chevron-circle-right"></i></a>
            <a href=""><i class="fa fa-search"></i></a>
        </div>

    </div><!-- navigation bar div end -->

    <div>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "amuthulk";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "";
        $sql = "SELECT * FROM items where id=" . $_GET['id'] . "";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row                    
            while ($row = $result->fetch_assoc()) {
                echo
                    "<table>
                            <tr>
                                <td><img style='width:500px;' alt='No Image Found' src='uploads/" . $row['image'] . "'></td>
                                <td  style='text-align:center; width:100%; font-weight:700;'>
                                    <div>" . $row['name'] . "</div>
                                    <br>
                                    <br>
                                    <div style='text-align:justify;'>" . $row['description'] . "</div>
                                    <br>
                                    <br>
                                </td>
                            </tr>
                        </table>";
            }
        } else {
            echo "<font color='red'>No Records ! </font>";
        }
        $conn->close();
        ?>
    </div>

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
                        <h5><i class="fa fa-map-marker" style="font-size:24px"></i> 203 Mahenwaththa, Pitipana, Homagama</h5><br>
                        <h5><i class="fa fa-phone" style="font-size:24px"></i> +94 011 4576 964</h5><br>
                        <h5><i class="fa fa-vcard" style="font-size:24px"></i> amuthushoping@amuthu.com</h5><br>
                    </td>
                </tr>
            </table>
        </center>
    </footer>


</body>

</html>