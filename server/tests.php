<?php
require 'vendor/autoload.php'; // incluir lo bueno de Composer
$cliente = new MongoDB\Client("mongodb://shoplist:dti2022@localhost:27017");
$c = $cliente->shoplist->users;
$resultado = $c->find();
echo 'hola'

?>