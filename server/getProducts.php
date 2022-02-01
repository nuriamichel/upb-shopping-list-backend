<?php

//$bd = include_once "conect.php";


//$sql = "INSERT INTO users (id,email,photo,firstname) VALUES (2,'test', 'test', 'jtest.com')";
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

$sql = "SELECT * FROM productos"; 
$result = $conn->query($sql);
 
while($row = $result->fetch_assoc()){
     $json[] = $row;
}
 
$data['data'] = $json;
$result =  mysqli_query($mysqli,$sql);
echo json_encode($data);

$conn->close();

?>
