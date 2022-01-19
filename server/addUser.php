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



//echo json_encode($request->{'email'});
$email = $request->{'email'};
$photo = $request->{'photo'};
$firstname = $request->{'firstname'};

$principal = TRUE;
$share = FALSE;

$sql = "INSERT INTO users ( email, photo, firstname)
VALUES ('$email', '$photo', '$firstname')";

if ($conn->query($sql) === TRUE) {
  $sqlist = "INSERT INTO users ( email, lista, principal, share)
VALUES ('$email','Lista de compras',  '$principal', '$share')";
if ($conn->query($sqlist) === TRUE) {
  echo json_encode("New record created successfully");
} else {
  echo json_encode("Error: " . $sql . "<br>" . $conn->error);
}} else {
  echo json_encode("Error: " . $sql . "<br>" . $conn->error);
}



$conn->close();

?>
