<?php

$bd = include_once "conect.php";
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
if(isset($postdata) && !empty($postdata))
{
  $sql = "INSERT INTO users(id,email,photo,firstname) VALUES ('{$request->id}','{$request->email}','{$request->photo}','{$request->firstname}')";
 // echo $sql;
if ($mysqli->query($sql) === TRUE) {
 
 
    echo json_encode("todo" => "OK",);
 
}
}
?>
?>