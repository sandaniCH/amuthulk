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
            <li style="float:right;"><a href="#about">Sign Out</a></li>
        </ul>
    </div>
    <div class="sidenav">
        <a href="owner.php">Go Back</a>
    </div>

    <div class="main">
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
            $sql = "SELECT * FROM items where id=".$_GET['id']."";
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
                                    <div style='text-align:center;width:100%;'><a class='MyButton' href='php/deletepost.php?id=".$_GET['id']."'>Delete This Item</a></div>
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
    </div>
</body>

</html>