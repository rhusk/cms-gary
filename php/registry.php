<?php
$servername = "localhost";
$datenbankname = "Online Wallet";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername,$datenbankname, $username, $password);

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
