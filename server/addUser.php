<?php
$jsonMascota = json_decode(file_get_contents("php://input"));
if (!$jsonMascota) {
    exit("No hay datos");
}
$bd = include_once "bd.php";
$sentencia = $bd->prepare("insert into mascotas(id, email, photo, firstname) values (?,?,?,?)");
$resultado = $sentencia->execute([$jsonMascota->id,$jsonMascota->email, $jsonMascota->photo, $jsonMascota->firstname]);
echo json_encode([
    "resultado" => $resultado,
]);
?>