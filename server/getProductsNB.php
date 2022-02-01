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

$listaid = $request->{'listaid'};

$products = [];
$sql = "SELECT producto, precio FROM productos WHERE lista_id = 7 AND buyed =0";
$result = $conn->query($sql);

if($result)
{
  $i = 0;
  while($row = mysqli_fetch_assoc($result))
  {
    $products[$i]['producto']    = $row['producto'];
    $products[$i]['precio'] = $row['precio'];
    $i++;
  }

  echo json_encode($products);
} 




$conn->close();

?>
