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
$sentencia = $conn->prepare("insert into users(id, email, photo, firstname) values (?,?,?,?)");
$resultado = $sentencia->execute([$jsonUser->id, $jsonUser->email, $jsonUser->photo, $jsonUser->firstname]);
echo json_encode([
    "resultado" => $resultado,
]);
?>