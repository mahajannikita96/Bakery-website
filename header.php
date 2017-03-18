<?php
$servername = "localhost";
$username = "rootadmin";
$password = "root";
$dbName = "sweet_delights";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbName);

// Check connection
if (mysqli_connect_error()) {
    die("Connection failed: " . mysqli_connect_error());
} 
//echo "Connected successfully";
?>