<?php
$servername = "172.16.99.2";
$username   = "swarren";
$password   = "FAThead42";
$dbname     = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("connection failed: ". $conn->connect_error);
}
echo "connected successfully <br>";
?>