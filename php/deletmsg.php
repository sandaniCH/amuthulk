<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amuthulk";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$id = $_POST["id"];


$sql = "DELETE FROM contact WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo '<script language="javascript">';
    echo 'window.location.href="../owner.php";';
    echo '</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
