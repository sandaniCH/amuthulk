<?php
include('db_details.php');

$LOGINERR=NULL;
if (isset($_POST['login'])) {

$user= $_POST["user"];
$pass= md5($_POST["pass"]);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT username,password,statues FROM login WHERE username='$user' && password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
$row = mysqli_fetch_array($result);


 if($row['statues']=="user") 
 {
    header('location: ../index.php');

 }
 elseif ($row['statues']=="owner") 
{
    header('location: ../owner.php');

 }  

  
 else
 {

 }


} 
else 
{
echo "<script>alert('Username or Password is Wrong ');</script>";


}
$conn->close();
}
else
{

}
?>