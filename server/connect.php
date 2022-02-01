<?php
$servername = "localhost";
$username = "jjarro19";
$password = "joel2022";
$dbname = "jjarro19";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$conn->close();
$vec = "Connected successfully";
$cad=json_encode($vec);
echo $cad;}
?>