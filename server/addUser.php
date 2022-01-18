<?php

$bd = include_once "conect.php";
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
if(isset($postdata) && !empty($postdata))
{
  $id = mysqli_real_escape_string($mysqli, (int)($request->id));
  $email = mysqli_real_escape_string($mysqli, (int)$request->email);
   $photo = mysqli_real_escape_string($mysqli, trim($request->photo));
  $firstname = mysqli_real_escape_string($mysqli, (int)$request->firstname);
  $sql = "INSERT INTO users(id,email,photo,firstname) VALUES ('{$id}','{$email}','{$photo}','{$firstname}')";
 // echo $sql;
if ($mysqli->query($sql) === TRUE) {
 
 
    $authdata = [
      'id' => $id,
	  'email' => $email,
	  'photo' => $photo,
      'firstname' => $firstname,
    ];
    echo json_encode($authdata);
 
}
}
?>
?>