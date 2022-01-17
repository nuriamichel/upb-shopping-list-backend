<?php
require 'vendor/autoload.php'; // include Composer goodies

use MongoDB\Client as Mongo;

$user = "shoplist";
$pwd = 'dti2022';

$mongo = new Mongo("mongodb://${user}:${pwd}@127.0.0.1:27017");
$collection = $mongo->shoplist->users;
$result = $collection->find()->toArray();

print_r($result);

?>