<?php
$server = 'localhost:3306';
$username = 'root';
$password = '';
$database = 'asociacion_apo';

try {
    $con = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die('Error de conexión: ' . $e->getMessage());
}
?>
