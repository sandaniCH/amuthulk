<?php
include('db_details.php');



if (isset($_POST['signup'])) {
if ($newusernameErr==NULL&&$newpasswordErr==NULL&&$newemailErr==NULL) 
{


$newusername= $_POST["new_username"];
$newpassword= md5($_POST["new_password"]);
$newemail= $_POST["new_email"];


if ($newusername!=NULL||$newpassword!=NULL||$newemail!=NULL) 
{

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `login` (`id`,`username`, `password`, `email`,`statues`)
VALUES (NULL, '$newusername', '$newpassword', '$newemail', 'user')";

if ($conn->query($sql) === TRUE) {
  echo '<script language="javascript">';
	echo 'alert("Account Created Please log in");';
	echo 'window.location.href="../login/login.php";';
	echo '</script>';
} 
else 
{
    echo "<script>alert('Error : Mysql server Connection Error ');</script>";
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
else
{

}

} else {

}
}
else{

}


?>