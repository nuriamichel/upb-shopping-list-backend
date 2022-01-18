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

$jsonUser = json_decode(file_get_contents("php://input"));
if (!$jsonUser) {
    exit("No hay datos");
}

$sql = "INSERT INTO users (id, email, photo, firstname) VALUES ('".$jsonUser->id."','".$jsonUser->email."' ,'".$jsonUser->photo."','".$jsonUser->firstname."')";
$result = $conn->query($sql);
echo json_encode([
    "resultado" => $result,

]);
?>