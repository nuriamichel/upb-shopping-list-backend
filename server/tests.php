<?php

use MongoDB\Client as Mongo;

$user = "shoplist";
$pwd = 'dti2022';

$m = new Mongo("mongodb://${user}:${pwd}@127.0.0.1:27017");
	
echo "Connection to database successfully";
// select a database
$db = $m->shoplist;
 
echo "Database mydb selected";

?>