<?php

$server = "localhost";
$usuario = "root";
$clave = "";
$database = "computacion";

try {

$conn = new PDO("mysql:host=$server;dbname=$database;", $usuario, $clave);

} catch (PDOException $e) {
    die('Conection Failed: ' .$e->getMessage());
}

?>