<!DOCTYPE html>
<html>

<head>
    <title>Amuthu Owner</title>
    <link rel="stylesheet" type="text/css" href="css/owner.css">
</head>

<body>
    <div style="position:fixed;width:100%;top:0%">
        <ul class="top">
            <li style="margin-left: 50vw;"><a href="#home" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Amuthu LK</a></li>
            <li style="float:right;"><a href="login/login.php">Sign Out</a></li>
        </ul>
    </div>
    <div class="sidenav">
        <a onclick=" document.getElementById('additems').style.display = 'block'; document.getElementById('allitems').style.display = 'none';document.getElementById('contact').style.display = 'none';" href="#">Add Items</a>
        <a onclick=" document.getElementById('additems').style.display = 'none'; document.getElementById('allitems').style.display = 'block';document.getElementById('contact').style.display = 'none';" href="#">All Items</a>
        <a onclick=" document.getElementById('additems').style.display = 'none'; document.getElementById('allitems').style.display = 'none';document.getElementById('contact').style.display = 'block';" href="#">Messages</a>
    </div>

    <div class="main">
        <div id="additems"">
            <form action="php/newitem.php" enctype="multipart/form-data" method="post">
                <div class="container">
                    <label><b>Item Name</b></label>
                    <input type="text" placeholder="Item Name" name="name" required>
                    <label><b>Item Price</b></label>
                    <input type="text" placeholder="Item Price" name="price" required>
                    <label><b>Item Category</b></label>
                    <select name="category">
                        <option value="Vehicles">Vehicles</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Properties">Properties</option>
                    </select>
                    <label><b>Item Image</b></label>
                    <input type="file" name="image" required>
                    <label><b>Item Description</b></label>
                    <input type="text" placeholder="Item Description" name="description" required>
                    <hr>

                    <button type="submit" class="registerbtn" name="submit">Add Item</button>
                </div>

            </form>
        </div>
        <div id="allitems" style="display:none;">
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
                $sql = "SELECT * FROM items";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row                    
                    while ($row = $result->fetch_assoc()) {
                        echo    "<a href='owneritem.php?id=" . $row["id"] . "'>
                                    <div class='card' style='float:left;margin-left:20px;margin-top:20px;'>
                                        <img style='width:250px;' src='uploads/" . $row["image"] . "' alt='image' style='width:100%'>
                                        <div class='container'>
                                            <h4><b>" . $row["name"] . "</b></h4>
                                            <p style='width: 100%'>" . $row["description"] . "</p>
                                        </div>
                                    </div>
                                </a>";
                    }
                } else {
                    echo "<font color='red'>No Records ! </font>";
                }
                $conn->close();
                ?>
            </div>
        </div>
        <div id="contact" style="display:none;">
            <table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>E Mail</th>
                    <th>Message</th>
                </tr>
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
                $sql = "SELECT * FROM contact";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>" . $row['first'] . "</td>
                            <td>" . $row['last'] . "</td>
                            <td>" . $row['email'] . "</td>
                            <td>" . $row['msg'] . "</td>
                            <td>
                            <form action='php/deletmsg.php' method='post'>
                                <center>
                                    <input type='hidden' name='id' value='" . $row['id'] . "'>
                                    <button type='submit'>Delete Message</button>
                                </center>
                            </form>
                            </td>";
                    }
                } else {
                    echo "<font color='red'> Ooops ! No recent chats ! </font>";
                }
                $conn->close();
                ?>
                </tr>

            </table>
        </div>
    </div>
</body>

</html>