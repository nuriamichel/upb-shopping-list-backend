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
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

$email = $_GET['email'];
$lista = $_GET['lista'];

$sqllist = "SELECT id FROM listas WHERE email = '$email' and lista = '$lista'"; 
$resultlist = $conn->query($sqllist);

while($row = $resultlist->fetch_assoc()){
  $jsonlist = $row;
}

$idreq = json_decode($jsonlist);
$id = $idreq->{'id'};


$sql = "SELECT * FROM productos WHERE lista_id = '$id' and buyed = 0"; 
$result = $conn->query($sql);
 
while($row = $result->fetch_assoc()){
     $json[] = $row;
}
 
$data['data'] = $json;
$result =  mysqli_query($mysqli,$sql);
echo json_encode($jsonlist->{'id'});

$conn->close();

?>
