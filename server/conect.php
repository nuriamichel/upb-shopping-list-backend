<?php
$contraseña = "Shopping123HELP";
$usuario = "shoplist";
$nombre_base_de_datos = "shoplist";
try {
    return new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario, $contraseña);
} catch (Exception $e) {
    echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}
?>