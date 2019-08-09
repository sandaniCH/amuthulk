<?php


// Create database connection
$db = mysqli_connect("localhost", "root", "", "amuthulk");

// If upload button is clicked ...
if (isset($_POST['send'])) {

    // Get image name

    // Get text
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $message = $_POST['message'];



    $sql = "INSERT INTO `contact`(`first`, `last`, `email`, `msg`)  VALUES ('$firstname','$lastname', '$email','$message')";
    // execute query
    mysqli_query($db, $sql);

    
        echo '<script language="javascript">';
        echo 'alert("Your message has been successfully sent !");';
        echo 'window.location.href="../index.php";';
        echo '</script>';
     
}
else {
        echo '<script language="javascript">';
        echo 'alert(" Failed");';
        echo 'window.location.href="../contact us.php";';
        echo '</script>';
    }