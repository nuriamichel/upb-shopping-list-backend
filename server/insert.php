<?php
$servername = "localhost";
$username = "shoplist";
$password = "Shopping123HELP";
$dbname = "shoplist";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Final test', 'FinalTest', 'john@TEST.com')";

if ($conn->query($sql) === TRUE) {
  echo json_encode("New record created successfully");
} else {
  echo json_encode("Error: " . $sql . "<br>" . $conn->error);
}

$conn->close();
?>