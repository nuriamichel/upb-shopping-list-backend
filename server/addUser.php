<?php
$jsonMascota = json_decode(file_get_contents("php://input"));
if (!$jsonMascota) {
    exit("No hay datos");
}
$bd = include_once "conect.php";
$sentencia = $bd->prepare("INSERT INTO users(id, email, photo, firstname) VALUES (?,?,?,?)");
$resultado = $sentencia->execute([$jsonMascota->id,$jsonMascota->email, $jsonMascota->photo, $jsonMascota->firstname]);
echo json_encode([
    "resultado" => $resultado,
]);
?>