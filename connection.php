<?php 
$username = "root";
$password = "";
$hostname = "localhost"; 
$db = "coaching_db";

$conn = mysqli_connect($hostname, $username, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    // echo "Connected successfully";
}


?>