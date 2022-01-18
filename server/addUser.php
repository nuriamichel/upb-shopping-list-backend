<?php

$bd = include_once "conect.php";
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);


echo $request->{'id'};

$sql = "INSERT INTO users (id,email,photo,firstname) VALUES (2,'test', 'test', 'jtest.com')";
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Final test', 'FinalTest', 'john@TEST.com')";

if ($conn->query($sql) === TRUE) {
  echo json_encode("New record created successfully");
} else {
  echo json_encode("Error: " . $sql . "<br>" . $conn->error);
}


?>
