<?php
$servername = "localhost";
$username = "shoplist";
$password = "Shopping123HELP";

// Create connection
$conn = new mysqli($servername, $username, $password,"shoplist");

// Check connection
function retornarConexion() {

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$vec = "Connected successfully";
$cad=json_encode($vec);
echo $cad;}
?>