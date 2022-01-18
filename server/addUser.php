<?php

$bd = include_once "conect.php";
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);


echo $request->{'id'};

$sql = "INSERT INTO users (id,email,photo,firstname) VALUES (2,'test', 'test', 'jtest.com')";
if ($bd->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $bd->error;
}


?>
