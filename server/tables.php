<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "shoplist", "Shopping123HELP", "shoplist");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create table query execution
$sql = "CREATE TABLE IF NOT EXISTS users(
    id INT NOT NULL PRIMARY KEY,
    email VARCHAR(70) NOT NULL,
    photo VARCHAR(70),
    firstname VARCHAR(70)
)";
if(mysqli_query($link, $sql)){
    echo "Table users created successfully. ";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

$sql = "CREATE TABLE IF NOT EXISTS listas(
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(70) NOT NULL,
    lista VARCHAR(70)NOT NULL,
    principal boolean not null default 0,
    share boolean not null default 0
)";
if(mysqli_query($link, $sql)){
    echo "Table listas created successfully. ";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

$sql = "CREATE TABLE IF NOT EXISTS productos(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    lista_id VARCHAR(70) NOT NULL,
    producto VARCHAR(70) 
)";
if(mysqli_query($link, $sql)){
    echo "Table created successfully. ";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>