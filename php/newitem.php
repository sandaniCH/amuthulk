<?php


// Create database connection
$db = mysqli_connect("localhost", "root", "", "amuthulk");

// If upload button is clicked ...
if (isset($_POST['submit'])) {

    // Get image name
    $image = $_FILES['image']['name'];

    // Get text
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $description = $_POST['description'];


    // image file directory
    $target = "../uploads/" . basename($image);

    $sql = "INSERT INTO items (`name`,`price`,`category`,`image`,`description`) VALUES ('$name','$price', '$category','$image','$description')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo '<script language="javascript">';
        echo 'alert("Item Added");';
        echo 'window.location.href="../owner.php";';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Upload Failed");';
        echo 'window.location.href="../owner.php";';
        echo '</script>';
    }
}
